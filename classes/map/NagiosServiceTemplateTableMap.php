<?php



/**
 * This class defines the structure of the 'nagios_service_template' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator..map
 */
class NagiosServiceTemplateTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosServiceTemplateTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('nagios_service_template');
		$this->setPhpName('NagiosServiceTemplate');
		$this->setClassname('NagiosServiceTemplate');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', false, 255, null);
		$this->addColumn('INITIAL_STATE', 'InitialState', 'VARCHAR', false, 1, null);
		$this->addColumn('IS_VOLATILE', 'IsVolatile', 'BOOLEAN', false, 1, null);
		$this->addForeignKey('CHECK_COMMAND', 'CheckCommand', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addColumn('MAXIMUM_CHECK_ATTEMPTS', 'MaximumCheckAttempts', 'INTEGER', false, null, null);
		$this->addColumn('NORMAL_CHECK_INTERVAL', 'NormalCheckInterval', 'INTEGER', false, null, null);
		$this->addColumn('RETRY_INTERVAL', 'RetryInterval', 'INTEGER', false, null, null);
		$this->addColumn('FIRST_NOTIFICATION_DELAY', 'FirstNotificationDelay', 'INTEGER', false, null, null);
		$this->addColumn('ACTIVE_CHECKS_ENABLED', 'ActiveChecksEnabled', 'BOOLEAN', false, 1, null);
		$this->addColumn('PASSIVE_CHECKS_ENABLED', 'PassiveChecksEnabled', 'BOOLEAN', false, 1, null);
		$this->addForeignKey('CHECK_PERIOD', 'CheckPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		$this->addColumn('PARALLELIZE_CHECK', 'ParallelizeCheck', 'BOOLEAN', false, 1, null);
		$this->addColumn('OBSESS_OVER_SERVICE', 'ObsessOverService', 'BOOLEAN', false, 1, null);
		$this->addColumn('CHECK_FRESHNESS', 'CheckFreshness', 'BOOLEAN', false, 1, null);
		$this->addColumn('FRESHNESS_THRESHOLD', 'FreshnessThreshold', 'INTEGER', false, null, null);
		$this->addForeignKey('EVENT_HANDLER', 'EventHandler', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addColumn('EVENT_HANDLER_ENABLED', 'EventHandlerEnabled', 'BOOLEAN', false, 1, null);
		$this->addColumn('LOW_FLAP_THRESHOLD', 'LowFlapThreshold', 'INTEGER', false, null, null);
		$this->addColumn('HIGH_FLAP_THRESHOLD', 'HighFlapThreshold', 'INTEGER', false, null, null);
		$this->addColumn('FLAP_DETECTION_ENABLED', 'FlapDetectionEnabled', 'BOOLEAN', false, 1, null);
		$this->addColumn('FLAP_DETECTION_ON_OK', 'FlapDetectionOnOk', 'BOOLEAN', false, 1, null);
		$this->addColumn('FLAP_DETECTION_ON_WARNING', 'FlapDetectionOnWarning', 'BOOLEAN', false, 1, null);
		$this->addColumn('FLAP_DETECTION_ON_CRITICAL', 'FlapDetectionOnCritical', 'BOOLEAN', false, 1, null);
		$this->addColumn('FLAP_DETECTION_ON_UNKNOWN', 'FlapDetectionOnUnknown', 'BOOLEAN', false, 1, null);
		$this->addColumn('PROCESS_PERF_DATA', 'ProcessPerfData', 'BOOLEAN', false, 1, null);
		$this->addColumn('RETAIN_STATUS_INFORMATION', 'RetainStatusInformation', 'BOOLEAN', false, 1, null);
		$this->addColumn('RETAIN_NONSTATUS_INFORMATION', 'RetainNonstatusInformation', 'BOOLEAN', false, 1, null);
		$this->addColumn('NOTIFICATION_INTERVAL', 'NotificationInterval', 'INTEGER', false, null, null);
		$this->addForeignKey('NOTIFICATION_PERIOD', 'NotificationPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		$this->addColumn('NOTIFICATION_ON_WARNING', 'NotificationOnWarning', 'BOOLEAN', false, 1, null);
		$this->addColumn('NOTIFICATION_ON_UNKNOWN', 'NotificationOnUnknown', 'BOOLEAN', false, 1, null);
		$this->addColumn('NOTIFICATION_ON_CRITICAL', 'NotificationOnCritical', 'BOOLEAN', false, 1, null);
		$this->addColumn('NOTIFICATION_ON_RECOVERY', 'NotificationOnRecovery', 'BOOLEAN', false, 1, null);
		$this->addColumn('NOTIFICATION_ON_FLAPPING', 'NotificationOnFlapping', 'BOOLEAN', false, 1, null);
		$this->addColumn('NOTIFICATION_ON_SCHEDULED_DOWNTIME', 'NotificationOnScheduledDowntime', 'BOOLEAN', false, 1, null);
		$this->addColumn('NOTIFICATIONS_ENABLED', 'NotificationsEnabled', 'BOOLEAN', false, 1, null);
		$this->addColumn('STALKING_ON_OK', 'StalkingOnOk', 'BOOLEAN', false, 1, null);
		$this->addColumn('STALKING_ON_WARNING', 'StalkingOnWarning', 'BOOLEAN', false, 1, null);
		$this->addColumn('STALKING_ON_UNKNOWN', 'StalkingOnUnknown', 'BOOLEAN', false, 1, null);
		$this->addColumn('STALKING_ON_CRITICAL', 'StalkingOnCritical', 'BOOLEAN', false, 1, null);
		$this->addColumn('FAILURE_PREDICTION_ENABLED', 'FailurePredictionEnabled', 'BOOLEAN', false, 1, null);
		$this->addColumn('NOTES', 'Notes', 'VARCHAR', false, 255, null);
		$this->addColumn('NOTES_URL', 'NotesUrl', 'VARCHAR', false, 255, null);
		$this->addColumn('ACTION_URL', 'ActionUrl', 'VARCHAR', false, 255, null);
		$this->addColumn('ICON_IMAGE', 'IconImage', 'VARCHAR', false, 255, null);
		$this->addColumn('ICON_IMAGE_ALT', 'IconImageAlt', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosCommandRelatedByCheckCommand', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('check_command' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosCommandRelatedByEventHandler', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('event_handler' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosTimeperiodRelatedByCheckPeriod', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('check_period' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosTimeperiodRelatedByNotificationPeriod', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('notification_period' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosServiceCheckCommandParameter', 'NagiosServiceCheckCommandParameter', RelationMap::ONE_TO_MANY, array('id' => 'template', ), 'CASCADE', null, 'NagiosServiceCheckCommandParameters');
		$this->addRelation('NagiosServiceGroupMember', 'NagiosServiceGroupMember', RelationMap::ONE_TO_MANY, array('id' => 'template', ), 'CASCADE', null, 'NagiosServiceGroupMembers');
		$this->addRelation('NagiosServiceContactMember', 'NagiosServiceContactMember', RelationMap::ONE_TO_MANY, array('id' => 'template', ), 'CASCADE', null, 'NagiosServiceContactMembers');
		$this->addRelation('NagiosServiceContactGroupMember', 'NagiosServiceContactGroupMember', RelationMap::ONE_TO_MANY, array('id' => 'template', ), 'CASCADE', null, 'NagiosServiceContactGroupMembers');
		$this->addRelation('NagiosDependency', 'NagiosDependency', RelationMap::ONE_TO_MANY, array('id' => 'service_template', ), 'CASCADE', null, 'NagiosDependencys');
		$this->addRelation('NagiosEscalation', 'NagiosEscalation', RelationMap::ONE_TO_MANY, array('id' => 'service_template', ), 'CASCADE', null, 'NagiosEscalations');
		$this->addRelation('NagiosServiceTemplateInheritanceRelatedBySourceTemplate', 'NagiosServiceTemplateInheritance', RelationMap::ONE_TO_MANY, array('id' => 'source_template', ), 'CASCADE', null, 'NagiosServiceTemplateInheritancesRelatedBySourceTemplate');
		$this->addRelation('NagiosServiceTemplateInheritanceRelatedByTargetTemplate', 'NagiosServiceTemplateInheritance', RelationMap::ONE_TO_MANY, array('id' => 'target_template', ), 'CASCADE', null, 'NagiosServiceTemplateInheritancesRelatedByTargetTemplate');
	} // buildRelations()

} // NagiosServiceTemplateTableMap
