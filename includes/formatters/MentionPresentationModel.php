<?php

class EchoMentionPresentationModel extends EchoEventPresentationModel {
	private $sectionTitle = null;


	public function getIconType() {
		return 'chat';
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

	/**
	 * Override to switch the message key to -nosection
	 * if no section title was detected
	 *
	 * @return string
	 */
	protected function getHeaderMessageKey() {
		// Messages used:
		// notification-header-mention
		// notification-header-mention-nosection
		$key = parent::getHeaderMessageKey();
		if ( !$this->getSection() ) {
			$key .= '-nosection';
		}

		return $key;
	}

	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		// @fixme this message should not say "xx talk page"
		$msg->params( $this->event->getTitle()->getText() );
		$section = $this->getSection();
		$sectionTitle = $this->getTitleWithSection();
		if ( $section ) {
			$msg->rawParams(
				Linker::link(
					$sectionTitle,
					htmlspecialchars( EchoDiscussionParser::getTextSnippet(
							$section,
							$this->language,
							30
					) )
				)
			);
		} else {
			// For the -nosection message
			$msg->params( $sectionTitle->getPrefixedText() );
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
			$this->getTitleWithSection()->getLocalURL(),
			$this->msg( 'notification-link-text-view-mention' )->text()
		);
	}

	public function getSecondaryLinks() {
		$url = $this->event->getTitle()->getLocalURL( array(
			'oldid' => 'prev',
			'diff' => $this->event->getExtraParam( 'revid' )
		) );
		return array(
			$url => $this->msg( 'notification-link-text-view-changes' )->text()
		);
	}
}
