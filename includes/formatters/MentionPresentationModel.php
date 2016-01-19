<?php

class EchoMentionPresentationModel extends EchoEventPresentationModel {
	private $sectionTitle = null;


	public function getIconType() {
		return 'mention';
	}

	private function getSection() {
		if ( $this->sectionTitle !== null ) {
			return $this->sectionTitle;
		}
		$sectionTitle = $this->event->getExtraParam( 'section-title' );
		if ( !$sectionTitle ) {
			$this->sectionTitle = false;
			return false;
		}
		// Check permissions
		if ( !$this->userCan( Revision::DELETED_TEXT ) ) {
			$this->sectionTitle = false;
			return false;
		}

		$this->sectionTitle = $sectionTitle;
		return $this->sectionTitle;
	}

	public function canRender() {
		return (bool)$this->event->getTitle();
	}

	protected function getHeaderMessageKey() {
		// Messages used:
		// notification-header-mention-other
		// notification-header-mention-other-nosection
		// notification-header-mention-article-talkpage
		// notification-header-mention-article-talkpage-nosection
		// notification-header-mention-agent-talkpage
		// notification-header-mention-agent-talkpage-nosection
		// notification-header-mention-user-talkpage
		// notification-header-mention-user-talkpage-nosection
		$key = 'notification-header-mention';

		if ( $this->onArticleTalkpage() ) {
			$key .= '-article-talkpage';
		} elseif ( $this->onAgentTalkpage() ) {
			$key .= '-agent-talkpage';
		} elseif ( $this->onUserTalkpage() ) {
			$key .= '-user-talkpage';
		} else {
			$key .= '-other';
		}

		if ( !$this->getSection() ) {
			$key .= '-nosection';
		}

		return $key;
	}

	public function getHeaderMessage() {
		$msg = $this->getMessageWithAgent( $this->getHeaderMessageKey() );
		$msg->params( $this->getViewingUserForGender() );

		if ( $this->onArticleTalkpage() ) {
			$msg->params( $this->event->getTitle()->getText() );
		} elseif ( $this->onAgentTalkpage() ) {
			// No params to add here.
			// If we remove this check, onUserTalkpage() has to
			// make sure it is a user talk page but NOT the agent's talk page.
		} elseif ( $this->onUserTalkpage() ) {
			$msg->params( $this->event->getTitle()->getText() );
		} else {
			$msg->params( $this->event->getTitle()->getPrefixedText() );
		}

		$section = $this->getSection();
		if ( $section ) {
			$msg->params(
				EchoDiscussionParser::getTextSnippet(
						$section,
						$this->language,
						30
				)
			);
		}

		return $msg;
	}

	/**
	 * @return Title
	 */
	private function getTitleWithSection() {
		$title = $this->event->getTitle();
		$section = $this->getSection();
		if ( $section ) {
			$title = Title::makeTitle(
				$title->getNamespace(),
				$title->getDBkey(),
				$section
			);
		}

		return $title;
	}

	public function getPrimaryLink() {
		return array(
			// Need FullURL so the section is included
			'url' => $this->getTitleWithSection()->getFullURL(),
			'label' => $this->msg( 'notification-link-text-view-mention' )->text()
		);
	}

	public function getSecondaryLinks() {
		$title = $this->event->getTitle();

		$url = $title->getLocalURL( array(
			'oldid' => 'prev',
			'diff' => $this->event->getExtraParam( 'revid' )
		) );
		$viewChangesLink = array(
			'url' => $url,
			'label' => $this->msg( 'notification-link-text-view-changes' )->text(),
			'description' => '',
			'icon' => 'changes',
			'prioritized' => true,
		);

		$pageLink = array(
			'url' => $title->getFullURL(),
			'label' => $this->isArticle() ?  $title->getText() : $title->getPrefixedText(),
			'description' => '',
			'icon' => $this->isTalk() ? 'speechBubbles' : 'article',
			'prioritized' => true,
		);

		return array( $this->getAgentLink(), $pageLink, $viewChangesLink );
	}

	private function onArticleTalkpage() {
		return $this->event->getTitle()->getNamespace() === NS_TALK;
	}

	private function onAgentTalkpage() {
		return $this->event->getTitle()->getPrefixedText() === $this->event->getAgent()->getTalkPage()->getPrefixedText();
	}

	private function onUserTalkpage() {
		return $this->event->getTitle()->getNamespace() === NS_USER_TALK;
	}

	private function isTalk() {
		return $this->event->getTitle()->isTalkPage();
	}

	private function isArticle() {
		$ns = $this->event->getTitle()->getNamespace();
		return $ns === NS_MAIN || $ns === NS_TALK;
	}
}
