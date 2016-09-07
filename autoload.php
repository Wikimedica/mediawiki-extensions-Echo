<?php
// This file is generated by scripts/gen-autoload.php, do not adjust manually
// @codingStandardsIgnoreFile
global $wgAutoloadClasses;

$wgAutoloadClasses += [
	'ApiCrossWikiBase' => __DIR__ . '/includes/api/ApiCrossWikiBase.php',
	'ApiEchoMarkRead' => __DIR__ . '/includes/api/ApiEchoMarkRead.php',
	'ApiEchoMarkReadTest' => __DIR__ . '/tests/phpunit/api/ApiEchoMarkReadTest.php',
	'ApiEchoMarkSeen' => __DIR__ . '/includes/api/ApiEchoMarkSeen.php',
	'ApiEchoNotifications' => __DIR__ . '/includes/api/ApiEchoNotifications.php',
	'ApiEchoNotificationsTest' => __DIR__ . '/tests/phpunit/api/ApiEchoNotificationsTest.php',
	'ApiEchoUnreadNotificationPages' => __DIR__ . '/includes/api/ApiEchoUnreadNotificationPages.php',
	'BackfillReadBundles' => __DIR__ . '/maintenance/backfillReadBundles.php',
	'BackfillUnreadWikis' => __DIR__ . '/maintenance/backfillUnreadWikis.php',
	'Bundleable' => __DIR__ . '/includes/Bundleable.php',
	'Bundler' => __DIR__ . '/includes/Bundler.php',
	'BundlerTest' => __DIR__ . '/tests/phpunit/BundlerTest.php',
	'ContainmentSetTest' => __DIR__ . '/tests/phpunit/ContainmentSetTest.php',
	'EchoAbstractEntity' => __DIR__ . '/includes/model/AbstractEntity.php',
	'EchoAbstractMapper' => __DIR__ . '/includes/mapper/AbstractMapper.php',
	'EchoAbstractMapperStub' => __DIR__ . '/tests/phpunit/mapper/AbstractMapperTest.php',
	'EchoAbstractMapperTest' => __DIR__ . '/tests/phpunit/mapper/AbstractMapperTest.php',
	'EchoArrayList' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoAttributeManager' => __DIR__ . '/includes/AttributeManager.php',
	'EchoAttributeManagerTest' => __DIR__ . '/tests/phpunit/AttributeManagerTest.php',
	'EchoCachedList' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoCallbackIterator' => __DIR__ . '/includes/iterator/CallbackIterator.php',
	'EchoCatchableFatalErrorException' => __DIR__ . '/includes/exception/CatchableFatalErrorException.php',
	'EchoContainmentList' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoContainmentSet' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoDataOutputFormatter' => __DIR__ . '/includes/DataOutputFormatter.php',
	'EchoDeferredMarkAsDeletedUpdate' => __DIR__ . '/includes/DeferredMarkAsDeletedUpdate.php',
	'EchoDiffGroup' => __DIR__ . '/includes/DiffParser.php',
	'EchoDiffParser' => __DIR__ . '/includes/DiffParser.php',
	'EchoDiffParserTest' => __DIR__ . '/tests/phpunit/DiffParserTest.php',
	'EchoDiscussionParser' => __DIR__ . '/includes/DiscussionParser.php',
	'EchoDiscussionParserTest' => __DIR__ . '/tests/phpunit/DiscussionParserTest.php',
	'EchoEditThresholdPresentationModel' => __DIR__ . '/includes/formatters/EditThresholdPresentationModel.php',
	'EchoEditUserTalkPresentationModel' => __DIR__ . '/includes/formatters/EditUserTalkPresentationModel.php',
	'EchoEmailFormat' => __DIR__ . '/includes/EmailFormat.php',
	'EchoEmailFrequency' => __DIR__ . '/includes/EmailFrequency.php',
	'EchoEmailUserPresentationModel' => __DIR__ . '/includes/formatters/EmailUserPresentationModel.php',
	'EchoEvent' => __DIR__ . '/includes/model/Event.php',
	'EchoEventDigestFormatter' => __DIR__ . '/includes/formatters/EchoEventDigestFormatter.php',
	'EchoEventFormatter' => __DIR__ . '/includes/formatters/EchoEventFormatter.php',
	'EchoEventMapper' => __DIR__ . '/includes/mapper/EventMapper.php',
	'EchoEventMapperTest' => __DIR__ . '/tests/phpunit/mapper/EventMapperTest.php',
	'EchoEventPresentationModel' => __DIR__ . '/includes/formatters/EventPresentationModel.php',
	'EchoExecuteFirstArgumentStub' => __DIR__ . '/tests/phpunit/mapper/NotificationMapperTest.php',
	'EchoFilteredSequentialIterator' => __DIR__ . '/includes/iterator/FilteredSequentialIterator.php',
	'EchoFlyoutFormatter' => __DIR__ . '/includes/formatters/EchoFlyoutFormatter.php',
	'EchoForeignNotifications' => __DIR__ . '/includes/ForeignNotifications.php',
	'EchoForeignPresentationModel' => __DIR__ . '/includes/formatters/EchoForeignPresentationModel.php',
	'EchoForeignWikiRequest' => __DIR__ . '/includes/ForeignWikiRequest.php',
	'EchoHooks' => __DIR__ . '/Hooks.php',
	'EchoHtmlDigestEmailFormatter' => __DIR__ . '/includes/formatters/EchoHtmlDigestEmailFormatter.php',
	'EchoHtmlEmailFormatter' => __DIR__ . '/includes/formatters/EchoHtmlEmailFormatter.php',
	'EchoIcon' => __DIR__ . '/includes/formatters/EchoIcon.php',
	'EchoIteratorDecorator' => __DIR__ . '/includes/iterator/IteratorDecorator.php',
	'EchoLocalCache' => __DIR__ . '/includes/cache/LocalCache.php',
	'EchoMentionPresentationModel' => __DIR__ . '/includes/formatters/MentionPresentationModel.php',
	'EchoMentionStatusPresentationModel' => __DIR__ . '/includes/formatters/MentionStatusPresentationModel.php',
	'EchoModelFormatter' => __DIR__ . '/includes/formatters/EchoModelFormatter.php',
	'EchoModerationController' => __DIR__ . '/includes/controller/ModerationController.php',
	'EchoMultipleIterator' => __DIR__ . '/includes/iterator/MultipleIterator.php',
	'EchoNotRecursiveIterator' => __DIR__ . '/includes/iterator/NotRecursiveIterator.php',
	'EchoNotification' => __DIR__ . '/includes/model/Notification.php',
	'EchoNotificationController' => __DIR__ . '/includes/controller/NotificationController.php',
	'EchoNotificationDeleteJob' => __DIR__ . '/includes/jobs/NotificationDeleteJob.php',
	'EchoNotificationJob' => __DIR__ . '/includes/jobs/NotificationJob.php',
	'EchoNotificationMapper' => __DIR__ . '/includes/mapper/NotificationMapper.php',
	'EchoNotificationMapperTest' => __DIR__ . '/tests/phpunit/mapper/NotificationMapperTest.php',
	'EchoNotificationTest' => __DIR__ . '/tests/phpunit/model/NotificationTest.php',
	'EchoNotifier' => __DIR__ . '/includes/Notifier.php',
	'EchoOOUI\\LabelIconWidget' => __DIR__ . '/includes/ooui/LabelIconWidget.php',
	'EchoOnWikiList' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoPageLinkedPresentationModel' => __DIR__ . '/includes/formatters/PageLinkedPresentationModel.php',
	'EchoPlainTextDigestEmailFormatter' => __DIR__ . '/includes/formatters/EchoPlainTextDigestEmailFormatter.php',
	'EchoPlainTextEmailFormatter' => __DIR__ . '/includes/formatters/EchoPlainTextEmailFormatter.php',
	'EchoPresentationModelSectionTrait' => __DIR__ . '/includes/formatters/PresentationModelSectionTrait.php',
	'EchoRevertedPresentationModel' => __DIR__ . '/includes/formatters/RevertedPresentationModel.php',
	'EchoRevisionLocalCache' => __DIR__ . '/includes/cache/RevisionLocalCache.php',
	'EchoSeenTime' => __DIR__ . '/includes/SeenTime.php',
	'EchoSuppressionRowUpdateGenerator' => __DIR__ . '/includes/schemaUpdate.php',
	'EchoTalkPageFunctionalTest' => __DIR__ . '/tests/phpunit/TalkPageFunctionalTest.php',
	'EchoTargetPage' => __DIR__ . '/includes/model/TargetPage.php',
	'EchoTargetPageMapper' => __DIR__ . '/includes/mapper/TargetPageMapper.php',
	'EchoTargetPageMapperTest' => __DIR__ . '/tests/phpunit/mapper/TargetPageMapperTest.php',
	'EchoTargetPageTest' => __DIR__ . '/tests/phpunit/model/TargetPageTest.php',
	'EchoTitleLocalCache' => __DIR__ . '/includes/cache/TitleLocalCache.php',
	'EchoTitleLocalCacheTest' => __DIR__ . '/tests/phpunit/cache/TitleLocalCacheTest.php',
	'EchoUnreadWikis' => __DIR__ . '/includes/UnreadWikis.php',
	'EchoUserLocator' => __DIR__ . '/includes/UserLocator.php',
	'EchoUserLocatorTest' => __DIR__ . '/tests/phpunit/UserLocatorTest.php',
	'EchoUserNotificationGateway' => __DIR__ . '/includes/gateway/UserNotificationGateway.php',
	'EchoUserNotificationGatewayTest' => __DIR__ . '/tests/phpunit/gateway/UserNotificationGatewayTest.php',
	'EchoUserRightsPresentationModel' => __DIR__ . '/includes/formatters/UserRightsPresentationModel.php',
	'EchoWelcomePresentationModel' => __DIR__ . '/includes/formatters/WelcomePresentationModel.php',
	'FilteredSequentialIteratorTest' => __DIR__ . '/tests/phpunit/iterator/FilteredSequentialIteratorTest.php',
	'GenerateSampleNotifications' => __DIR__ . '/maintenance/generateSampleNotifications.php',
	'MWEchoDbFactory' => __DIR__ . '/includes/EchoDbFactory.php',
	'MWEchoDbFactoryTest' => __DIR__ . '/tests/phpunit/EchoDbFactoryTest.php',
	'MWEchoEmailBatch' => __DIR__ . '/includes/EmailBatch.php',
	'MWEchoEventLogging' => __DIR__ . '/includes/EventLogging.php',
	'MWEchoNotifUser' => __DIR__ . '/includes/NotifUser.php',
	'MWEchoNotifUserTest' => __DIR__ . '/tests/phpunit/NotifUserTest.php',
	'MWEchoThankYouEditTest' => __DIR__ . '/tests/phpunit/ThankYouEditTest.php',
	'NotificationControllerTest' => __DIR__ . '/tests/phpunit/controller/NotificationControllerTest.php',
	'NotificationPager' => __DIR__ . '/includes/special/NotificationPager.php',
	'NotificationsTest' => __DIR__ . '/tests/NotificationsTest.php',
	'ProcessEchoEmailBatch' => __DIR__ . '/maintenance/processEchoEmailBatch.php',
	'RemoveInvalidNotification' => __DIR__ . '/maintenance/removeInvalidNotification.php',
	'RemoveOrphanedEvents' => __DIR__ . '/maintenance/removeOrphanedEvents.php',
	'ResourceLoaderEchoImageModule' => __DIR__ . '/includes/ResourceLoaderEchoImageModule.php',
	'SpecialDisplayNotificationsConfiguration' => __DIR__ . '/includes/special/SpecialDisplayNotificationsConfiguration.php',
	'SpecialNotifications' => __DIR__ . '/includes/special/SpecialNotifications.php',
	'SpecialNotificationsFormatter' => __DIR__ . '/includes/formatters/SpecialNotificationsFormatter.php',
	'SpecialNotificationsMarkRead' => __DIR__ . '/includes/special/SpecialNotificationsMarkRead.php',
	'SuppressionMaintenanceTest' => __DIR__ . '/tests/phpunit/maintenance/SupressionMaintenanceTest.php',
	'TestDiscussionParser' => __DIR__ . '/maintenance/testDiscussionParser.php',
	'UpdateEchoSchemaForSuppression' => __DIR__ . '/maintenance/updateEchoSchemaForSuppression.php',
];
