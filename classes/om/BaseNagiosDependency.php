<?php


/**
 * Base class that represents a row from the 'nagios_dependency' table.
 *
 * Nagios Dependency
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosDependency extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'NagiosDependencyPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosDependencyPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the host_template field.
	 * @var        int
	 */
	protected $host_template;

	/**
	 * The value for the host field.
	 * @var        int
	 */
	protected $host;

	/**
	 * The value for the service_template field.
	 * @var        int
	 */
	protected $service_template;

	/**
	 * The value for the service field.
	 * @var        int
	 */
	protected $service;

	/**
	 * The value for the hostgroup field.
	 * @var        int
	 */
	protected $hostgroup;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the execution_failure_criteria_up field.
	 * @var        boolean
	 */
	protected $execution_failure_criteria_up;

	/**
	 * The value for the execution_failure_criteria_down field.
	 * @var        boolean
	 */
	protected $execution_failure_criteria_down;

	/**
	 * The value for the execution_failure_criteria_unreachable field.
	 * @var        boolean
	 */
	protected $execution_failure_criteria_unreachable;

	/**
	 * The value for the execution_failure_criteria_pending field.
	 * @var        boolean
	 */
	protected $execution_failure_criteria_pending;

	/**
	 * The value for the execution_failure_criteria_ok field.
	 * @var        boolean
	 */
	protected $execution_failure_criteria_ok;

	/**
	 * The value for the execution_failure_criteria_warning field.
	 * @var        boolean
	 */
	protected $execution_failure_criteria_warning;

	/**
	 * The value for the execution_failure_criteria_unknown field.
	 * @var        boolean
	 */
	protected $execution_failure_criteria_unknown;

	/**
	 * The value for the execution_failure_criteria_critical field.
	 * @var        boolean
	 */
	protected $execution_failure_criteria_critical;

	/**
	 * The value for the notification_failure_criteria_ok field.
	 * @var        boolean
	 */
	protected $notification_failure_criteria_ok;

	/**
	 * The value for the notification_failure_criteria_warning field.
	 * @var        boolean
	 */
	protected $notification_failure_criteria_warning;

	/**
	 * The value for the notification_failure_criteria_unknown field.
	 * @var        boolean
	 */
	protected $notification_failure_criteria_unknown;

	/**
	 * The value for the notification_failure_criteria_critical field.
	 * @var        boolean
	 */
	protected $notification_failure_criteria_critical;

	/**
	 * The value for the notification_failure_criteria_pending field.
	 * @var        boolean
	 */
	protected $notification_failure_criteria_pending;

	/**
	 * The value for the notification_failure_criteria_up field.
	 * @var        boolean
	 */
	protected $notification_failure_criteria_up;

	/**
	 * The value for the notification_failure_criteria_down field.
	 * @var        boolean
	 */
	protected $notification_failure_criteria_down;

	/**
	 * The value for the notification_failure_criteria_unreachable field.
	 * @var        boolean
	 */
	protected $notification_failure_criteria_unreachable;

	/**
	 * The value for the inherits_parent field.
	 * @var        boolean
	 */
	protected $inherits_parent;

	/**
	 * The value for the dependency_period field.
	 * @var        int
	 */
	protected $dependency_period;

	/**
	 * @var        NagiosHostTemplate
	 */
	protected $aNagiosHostTemplate;

	/**
	 * @var        NagiosHost
	 */
	protected $aNagiosHost;

	/**
	 * @var        NagiosServiceTemplate
	 */
	protected $aNagiosServiceTemplate;

	/**
	 * @var        NagiosService
	 */
	protected $aNagiosService;

	/**
	 * @var        NagiosHostgroup
	 */
	protected $aNagiosHostgroup;

	/**
	 * @var        NagiosTimeperiod
	 */
	protected $aNagiosTimeperiod;

	/**
	 * @var        array NagiosDependencyTarget[] Collection to store aggregation of NagiosDependencyTarget objects.
	 */
	protected $collNagiosDependencyTargets;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $nagiosDependencyTargetsScheduledForDeletion = null;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [host_template] column value.
	 * 
	 * @return     int
	 */
	public function getHostTemplate()
	{
		return $this->host_template;
	}

	/**
	 * Get the [host] column value.
	 * 
	 * @return     int
	 */
	public function getHost()
	{
		return $this->host;
	}

	/**
	 * Get the [service_template] column value.
	 * 
	 * @return     int
	 */
	public function getServiceTemplate()
	{
		return $this->service_template;
	}

	/**
	 * Get the [service] column value.
	 * 
	 * @return     int
	 */
	public function getService()
	{
		return $this->service;
	}

	/**
	 * Get the [hostgroup] column value.
	 * 
	 * @return     int
	 */
	public function getHostgroup()
	{
		return $this->hostgroup;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [execution_failure_criteria_up] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecutionFailureCriteriaUp()
	{
		return $this->execution_failure_criteria_up;
	}

	/**
	 * Get the [execution_failure_criteria_down] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecutionFailureCriteriaDown()
	{
		return $this->execution_failure_criteria_down;
	}

	/**
	 * Get the [execution_failure_criteria_unreachable] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecutionFailureCriteriaUnreachable()
	{
		return $this->execution_failure_criteria_unreachable;
	}

	/**
	 * Get the [execution_failure_criteria_pending] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecutionFailureCriteriaPending()
	{
		return $this->execution_failure_criteria_pending;
	}

	/**
	 * Get the [execution_failure_criteria_ok] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecutionFailureCriteriaOk()
	{
		return $this->execution_failure_criteria_ok;
	}

	/**
	 * Get the [execution_failure_criteria_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecutionFailureCriteriaWarning()
	{
		return $this->execution_failure_criteria_warning;
	}

	/**
	 * Get the [execution_failure_criteria_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecutionFailureCriteriaUnknown()
	{
		return $this->execution_failure_criteria_unknown;
	}

	/**
	 * Get the [execution_failure_criteria_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecutionFailureCriteriaCritical()
	{
		return $this->execution_failure_criteria_critical;
	}

	/**
	 * Get the [notification_failure_criteria_ok] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationFailureCriteriaOk()
	{
		return $this->notification_failure_criteria_ok;
	}

	/**
	 * Get the [notification_failure_criteria_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationFailureCriteriaWarning()
	{
		return $this->notification_failure_criteria_warning;
	}

	/**
	 * Get the [notification_failure_criteria_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationFailureCriteriaUnknown()
	{
		return $this->notification_failure_criteria_unknown;
	}

	/**
	 * Get the [notification_failure_criteria_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationFailureCriteriaCritical()
	{
		return $this->notification_failure_criteria_critical;
	}

	/**
	 * Get the [notification_failure_criteria_pending] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationFailureCriteriaPending()
	{
		return $this->notification_failure_criteria_pending;
	}

	/**
	 * Get the [notification_failure_criteria_up] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationFailureCriteriaUp()
	{
		return $this->notification_failure_criteria_up;
	}

	/**
	 * Get the [notification_failure_criteria_down] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationFailureCriteriaDown()
	{
		return $this->notification_failure_criteria_down;
	}

	/**
	 * Get the [notification_failure_criteria_unreachable] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationFailureCriteriaUnreachable()
	{
		return $this->notification_failure_criteria_unreachable;
	}

	/**
	 * Get the [inherits_parent] column value.
	 * 
	 * @return     boolean
	 */
	public function getInheritsParent()
	{
		return $this->inherits_parent;
	}

	/**
	 * Get the [dependency_period] column value.
	 * 
	 * @return     int
	 */
	public function getDependencyPeriod()
	{
		return $this->dependency_period;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [host_template] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setHostTemplate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_template !== $v) {
			$this->host_template = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::HOST_TEMPLATE;
		}

		if ($this->aNagiosHostTemplate !== null && $this->aNagiosHostTemplate->getId() !== $v) {
			$this->aNagiosHostTemplate = null;
		}

		return $this;
	} // setHostTemplate()

	/**
	 * Set the value of [host] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setHost($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host !== $v) {
			$this->host = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::HOST;
		}

		if ($this->aNagiosHost !== null && $this->aNagiosHost->getId() !== $v) {
			$this->aNagiosHost = null;
		}

		return $this;
	} // setHost()

	/**
	 * Set the value of [service_template] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setServiceTemplate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service_template !== $v) {
			$this->service_template = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::SERVICE_TEMPLATE;
		}

		if ($this->aNagiosServiceTemplate !== null && $this->aNagiosServiceTemplate->getId() !== $v) {
			$this->aNagiosServiceTemplate = null;
		}

		return $this;
	} // setServiceTemplate()

	/**
	 * Set the value of [service] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setService($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service !== $v) {
			$this->service = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::SERVICE;
		}

		if ($this->aNagiosService !== null && $this->aNagiosService->getId() !== $v) {
			$this->aNagiosService = null;
		}

		return $this;
	} // setService()

	/**
	 * Set the value of [hostgroup] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setHostgroup($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->hostgroup !== $v) {
			$this->hostgroup = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::HOSTGROUP;
		}

		if ($this->aNagiosHostgroup !== null && $this->aNagiosHostgroup->getId() !== $v) {
			$this->aNagiosHostgroup = null;
		}

		return $this;
	} // setHostgroup()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Sets the value of the [execution_failure_criteria_up] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setExecutionFailureCriteriaUp($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->execution_failure_criteria_up !== $v) {
			$this->execution_failure_criteria_up = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UP;
		}

		return $this;
	} // setExecutionFailureCriteriaUp()

	/**
	 * Sets the value of the [execution_failure_criteria_down] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setExecutionFailureCriteriaDown($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->execution_failure_criteria_down !== $v) {
			$this->execution_failure_criteria_down = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_DOWN;
		}

		return $this;
	} // setExecutionFailureCriteriaDown()

	/**
	 * Sets the value of the [execution_failure_criteria_unreachable] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setExecutionFailureCriteriaUnreachable($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->execution_failure_criteria_unreachable !== $v) {
			$this->execution_failure_criteria_unreachable = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNREACHABLE;
		}

		return $this;
	} // setExecutionFailureCriteriaUnreachable()

	/**
	 * Sets the value of the [execution_failure_criteria_pending] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setExecutionFailureCriteriaPending($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->execution_failure_criteria_pending !== $v) {
			$this->execution_failure_criteria_pending = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_PENDING;
		}

		return $this;
	} // setExecutionFailureCriteriaPending()

	/**
	 * Sets the value of the [execution_failure_criteria_ok] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setExecutionFailureCriteriaOk($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->execution_failure_criteria_ok !== $v) {
			$this->execution_failure_criteria_ok = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_OK;
		}

		return $this;
	} // setExecutionFailureCriteriaOk()

	/**
	 * Sets the value of the [execution_failure_criteria_warning] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setExecutionFailureCriteriaWarning($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->execution_failure_criteria_warning !== $v) {
			$this->execution_failure_criteria_warning = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_WARNING;
		}

		return $this;
	} // setExecutionFailureCriteriaWarning()

	/**
	 * Sets the value of the [execution_failure_criteria_unknown] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setExecutionFailureCriteriaUnknown($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->execution_failure_criteria_unknown !== $v) {
			$this->execution_failure_criteria_unknown = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNKNOWN;
		}

		return $this;
	} // setExecutionFailureCriteriaUnknown()

	/**
	 * Sets the value of the [execution_failure_criteria_critical] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setExecutionFailureCriteriaCritical($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->execution_failure_criteria_critical !== $v) {
			$this->execution_failure_criteria_critical = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_CRITICAL;
		}

		return $this;
	} // setExecutionFailureCriteriaCritical()

	/**
	 * Sets the value of the [notification_failure_criteria_ok] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setNotificationFailureCriteriaOk($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_failure_criteria_ok !== $v) {
			$this->notification_failure_criteria_ok = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_OK;
		}

		return $this;
	} // setNotificationFailureCriteriaOk()

	/**
	 * Sets the value of the [notification_failure_criteria_warning] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setNotificationFailureCriteriaWarning($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_failure_criteria_warning !== $v) {
			$this->notification_failure_criteria_warning = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_WARNING;
		}

		return $this;
	} // setNotificationFailureCriteriaWarning()

	/**
	 * Sets the value of the [notification_failure_criteria_unknown] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setNotificationFailureCriteriaUnknown($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_failure_criteria_unknown !== $v) {
			$this->notification_failure_criteria_unknown = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNKNOWN;
		}

		return $this;
	} // setNotificationFailureCriteriaUnknown()

	/**
	 * Sets the value of the [notification_failure_criteria_critical] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setNotificationFailureCriteriaCritical($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_failure_criteria_critical !== $v) {
			$this->notification_failure_criteria_critical = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_CRITICAL;
		}

		return $this;
	} // setNotificationFailureCriteriaCritical()

	/**
	 * Sets the value of the [notification_failure_criteria_pending] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setNotificationFailureCriteriaPending($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_failure_criteria_pending !== $v) {
			$this->notification_failure_criteria_pending = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_PENDING;
		}

		return $this;
	} // setNotificationFailureCriteriaPending()

	/**
	 * Sets the value of the [notification_failure_criteria_up] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setNotificationFailureCriteriaUp($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_failure_criteria_up !== $v) {
			$this->notification_failure_criteria_up = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UP;
		}

		return $this;
	} // setNotificationFailureCriteriaUp()

	/**
	 * Sets the value of the [notification_failure_criteria_down] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setNotificationFailureCriteriaDown($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_failure_criteria_down !== $v) {
			$this->notification_failure_criteria_down = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_DOWN;
		}

		return $this;
	} // setNotificationFailureCriteriaDown()

	/**
	 * Sets the value of the [notification_failure_criteria_unreachable] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setNotificationFailureCriteriaUnreachable($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->notification_failure_criteria_unreachable !== $v) {
			$this->notification_failure_criteria_unreachable = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE;
		}

		return $this;
	} // setNotificationFailureCriteriaUnreachable()

	/**
	 * Sets the value of the [inherits_parent] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setInheritsParent($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->inherits_parent !== $v) {
			$this->inherits_parent = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::INHERITS_PARENT;
		}

		return $this;
	} // setInheritsParent()

	/**
	 * Set the value of [dependency_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function setDependencyPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->dependency_period !== $v) {
			$this->dependency_period = $v;
			$this->modifiedColumns[] = NagiosDependencyPeer::DEPENDENCY_PERIOD;
		}

		if ($this->aNagiosTimeperiod !== null && $this->aNagiosTimeperiod->getId() !== $v) {
			$this->aNagiosTimeperiod = null;
		}

		return $this;
	} // setDependencyPeriod()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->host_template = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->host = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->service_template = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->service = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->hostgroup = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->name = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->execution_failure_criteria_up = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
			$this->execution_failure_criteria_down = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
			$this->execution_failure_criteria_unreachable = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
			$this->execution_failure_criteria_pending = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->execution_failure_criteria_ok = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->execution_failure_criteria_warning = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
			$this->execution_failure_criteria_unknown = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->execution_failure_criteria_critical = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
			$this->notification_failure_criteria_ok = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
			$this->notification_failure_criteria_warning = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
			$this->notification_failure_criteria_unknown = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
			$this->notification_failure_criteria_critical = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
			$this->notification_failure_criteria_pending = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
			$this->notification_failure_criteria_up = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
			$this->notification_failure_criteria_down = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
			$this->notification_failure_criteria_unreachable = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
			$this->inherits_parent = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
			$this->dependency_period = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 25; // 25 = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosDependency object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aNagiosHostTemplate !== null && $this->host_template !== $this->aNagiosHostTemplate->getId()) {
			$this->aNagiosHostTemplate = null;
		}
		if ($this->aNagiosHost !== null && $this->host !== $this->aNagiosHost->getId()) {
			$this->aNagiosHost = null;
		}
		if ($this->aNagiosServiceTemplate !== null && $this->service_template !== $this->aNagiosServiceTemplate->getId()) {
			$this->aNagiosServiceTemplate = null;
		}
		if ($this->aNagiosService !== null && $this->service !== $this->aNagiosService->getId()) {
			$this->aNagiosService = null;
		}
		if ($this->aNagiosHostgroup !== null && $this->hostgroup !== $this->aNagiosHostgroup->getId()) {
			$this->aNagiosHostgroup = null;
		}
		if ($this->aNagiosTimeperiod !== null && $this->dependency_period !== $this->aNagiosTimeperiod->getId()) {
			$this->aNagiosTimeperiod = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosDependencyPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aNagiosHostTemplate = null;
			$this->aNagiosHost = null;
			$this->aNagiosServiceTemplate = null;
			$this->aNagiosService = null;
			$this->aNagiosHostgroup = null;
			$this->aNagiosTimeperiod = null;
			$this->collNagiosDependencyTargets = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = NagiosDependencyQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				NagiosDependencyPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosHostTemplate !== null) {
				if ($this->aNagiosHostTemplate->isModified() || $this->aNagiosHostTemplate->isNew()) {
					$affectedRows += $this->aNagiosHostTemplate->save($con);
				}
				$this->setNagiosHostTemplate($this->aNagiosHostTemplate);
			}

			if ($this->aNagiosHost !== null) {
				if ($this->aNagiosHost->isModified() || $this->aNagiosHost->isNew()) {
					$affectedRows += $this->aNagiosHost->save($con);
				}
				$this->setNagiosHost($this->aNagiosHost);
			}

			if ($this->aNagiosServiceTemplate !== null) {
				if ($this->aNagiosServiceTemplate->isModified() || $this->aNagiosServiceTemplate->isNew()) {
					$affectedRows += $this->aNagiosServiceTemplate->save($con);
				}
				$this->setNagiosServiceTemplate($this->aNagiosServiceTemplate);
			}

			if ($this->aNagiosService !== null) {
				if ($this->aNagiosService->isModified() || $this->aNagiosService->isNew()) {
					$affectedRows += $this->aNagiosService->save($con);
				}
				$this->setNagiosService($this->aNagiosService);
			}

			if ($this->aNagiosHostgroup !== null) {
				if ($this->aNagiosHostgroup->isModified() || $this->aNagiosHostgroup->isNew()) {
					$affectedRows += $this->aNagiosHostgroup->save($con);
				}
				$this->setNagiosHostgroup($this->aNagiosHostgroup);
			}

			if ($this->aNagiosTimeperiod !== null) {
				if ($this->aNagiosTimeperiod->isModified() || $this->aNagiosTimeperiod->isNew()) {
					$affectedRows += $this->aNagiosTimeperiod->save($con);
				}
				$this->setNagiosTimeperiod($this->aNagiosTimeperiod);
			}

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			if ($this->nagiosDependencyTargetsScheduledForDeletion !== null) {
				if (!$this->nagiosDependencyTargetsScheduledForDeletion->isEmpty()) {
					NagiosDependencyTargetQuery::create()
						->filterByPrimaryKeys($this->nagiosDependencyTargetsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->nagiosDependencyTargetsScheduledForDeletion = null;
				}
			}

			if ($this->collNagiosDependencyTargets !== null) {
				foreach ($this->collNagiosDependencyTargets as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = NagiosDependencyPeer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . NagiosDependencyPeer::ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(NagiosDependencyPeer::ID)) {
			$modifiedColumns[':p' . $index++]  = '`ID`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::HOST_TEMPLATE)) {
			$modifiedColumns[':p' . $index++]  = '`HOST_TEMPLATE`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::HOST)) {
			$modifiedColumns[':p' . $index++]  = '`HOST`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::SERVICE_TEMPLATE)) {
			$modifiedColumns[':p' . $index++]  = '`SERVICE_TEMPLATE`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::SERVICE)) {
			$modifiedColumns[':p' . $index++]  = '`SERVICE`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::HOSTGROUP)) {
			$modifiedColumns[':p' . $index++]  = '`HOSTGROUP`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UP)) {
			$modifiedColumns[':p' . $index++]  = '`EXECUTION_FAILURE_CRITERIA_UP`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_DOWN)) {
			$modifiedColumns[':p' . $index++]  = '`EXECUTION_FAILURE_CRITERIA_DOWN`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNREACHABLE)) {
			$modifiedColumns[':p' . $index++]  = '`EXECUTION_FAILURE_CRITERIA_UNREACHABLE`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_PENDING)) {
			$modifiedColumns[':p' . $index++]  = '`EXECUTION_FAILURE_CRITERIA_PENDING`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_OK)) {
			$modifiedColumns[':p' . $index++]  = '`EXECUTION_FAILURE_CRITERIA_OK`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_WARNING)) {
			$modifiedColumns[':p' . $index++]  = '`EXECUTION_FAILURE_CRITERIA_WARNING`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNKNOWN)) {
			$modifiedColumns[':p' . $index++]  = '`EXECUTION_FAILURE_CRITERIA_UNKNOWN`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_CRITICAL)) {
			$modifiedColumns[':p' . $index++]  = '`EXECUTION_FAILURE_CRITERIA_CRITICAL`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_OK)) {
			$modifiedColumns[':p' . $index++]  = '`NOTIFICATION_FAILURE_CRITERIA_OK`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_WARNING)) {
			$modifiedColumns[':p' . $index++]  = '`NOTIFICATION_FAILURE_CRITERIA_WARNING`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNKNOWN)) {
			$modifiedColumns[':p' . $index++]  = '`NOTIFICATION_FAILURE_CRITERIA_UNKNOWN`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_CRITICAL)) {
			$modifiedColumns[':p' . $index++]  = '`NOTIFICATION_FAILURE_CRITERIA_CRITICAL`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_PENDING)) {
			$modifiedColumns[':p' . $index++]  = '`NOTIFICATION_FAILURE_CRITERIA_PENDING`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UP)) {
			$modifiedColumns[':p' . $index++]  = '`NOTIFICATION_FAILURE_CRITERIA_UP`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_DOWN)) {
			$modifiedColumns[':p' . $index++]  = '`NOTIFICATION_FAILURE_CRITERIA_DOWN`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE)) {
			$modifiedColumns[':p' . $index++]  = '`NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::INHERITS_PARENT)) {
			$modifiedColumns[':p' . $index++]  = '`INHERITS_PARENT`';
		}
		if ($this->isColumnModified(NagiosDependencyPeer::DEPENDENCY_PERIOD)) {
			$modifiedColumns[':p' . $index++]  = '`DEPENDENCY_PERIOD`';
		}

		$sql = sprintf(
			'INSERT INTO `nagios_dependency` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID`':
						$stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
						break;
					case '`HOST_TEMPLATE`':
						$stmt->bindValue($identifier, $this->host_template, PDO::PARAM_INT);
						break;
					case '`HOST`':
						$stmt->bindValue($identifier, $this->host, PDO::PARAM_INT);
						break;
					case '`SERVICE_TEMPLATE`':
						$stmt->bindValue($identifier, $this->service_template, PDO::PARAM_INT);
						break;
					case '`SERVICE`':
						$stmt->bindValue($identifier, $this->service, PDO::PARAM_INT);
						break;
					case '`HOSTGROUP`':
						$stmt->bindValue($identifier, $this->hostgroup, PDO::PARAM_INT);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`EXECUTION_FAILURE_CRITERIA_UP`':
						$stmt->bindValue($identifier, (int) $this->execution_failure_criteria_up, PDO::PARAM_INT);
						break;
					case '`EXECUTION_FAILURE_CRITERIA_DOWN`':
						$stmt->bindValue($identifier, (int) $this->execution_failure_criteria_down, PDO::PARAM_INT);
						break;
					case '`EXECUTION_FAILURE_CRITERIA_UNREACHABLE`':
						$stmt->bindValue($identifier, (int) $this->execution_failure_criteria_unreachable, PDO::PARAM_INT);
						break;
					case '`EXECUTION_FAILURE_CRITERIA_PENDING`':
						$stmt->bindValue($identifier, (int) $this->execution_failure_criteria_pending, PDO::PARAM_INT);
						break;
					case '`EXECUTION_FAILURE_CRITERIA_OK`':
						$stmt->bindValue($identifier, (int) $this->execution_failure_criteria_ok, PDO::PARAM_INT);
						break;
					case '`EXECUTION_FAILURE_CRITERIA_WARNING`':
						$stmt->bindValue($identifier, (int) $this->execution_failure_criteria_warning, PDO::PARAM_INT);
						break;
					case '`EXECUTION_FAILURE_CRITERIA_UNKNOWN`':
						$stmt->bindValue($identifier, (int) $this->execution_failure_criteria_unknown, PDO::PARAM_INT);
						break;
					case '`EXECUTION_FAILURE_CRITERIA_CRITICAL`':
						$stmt->bindValue($identifier, (int) $this->execution_failure_criteria_critical, PDO::PARAM_INT);
						break;
					case '`NOTIFICATION_FAILURE_CRITERIA_OK`':
						$stmt->bindValue($identifier, (int) $this->notification_failure_criteria_ok, PDO::PARAM_INT);
						break;
					case '`NOTIFICATION_FAILURE_CRITERIA_WARNING`':
						$stmt->bindValue($identifier, (int) $this->notification_failure_criteria_warning, PDO::PARAM_INT);
						break;
					case '`NOTIFICATION_FAILURE_CRITERIA_UNKNOWN`':
						$stmt->bindValue($identifier, (int) $this->notification_failure_criteria_unknown, PDO::PARAM_INT);
						break;
					case '`NOTIFICATION_FAILURE_CRITERIA_CRITICAL`':
						$stmt->bindValue($identifier, (int) $this->notification_failure_criteria_critical, PDO::PARAM_INT);
						break;
					case '`NOTIFICATION_FAILURE_CRITERIA_PENDING`':
						$stmt->bindValue($identifier, (int) $this->notification_failure_criteria_pending, PDO::PARAM_INT);
						break;
					case '`NOTIFICATION_FAILURE_CRITERIA_UP`':
						$stmt->bindValue($identifier, (int) $this->notification_failure_criteria_up, PDO::PARAM_INT);
						break;
					case '`NOTIFICATION_FAILURE_CRITERIA_DOWN`':
						$stmt->bindValue($identifier, (int) $this->notification_failure_criteria_down, PDO::PARAM_INT);
						break;
					case '`NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE`':
						$stmt->bindValue($identifier, (int) $this->notification_failure_criteria_unreachable, PDO::PARAM_INT);
						break;
					case '`INHERITS_PARENT`':
						$stmt->bindValue($identifier, (int) $this->inherits_parent, PDO::PARAM_INT);
						break;
					case '`DEPENDENCY_PERIOD`':
						$stmt->bindValue($identifier, $this->dependency_period, PDO::PARAM_INT);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setId($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosHostTemplate !== null) {
				if (!$this->aNagiosHostTemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHostTemplate->getValidationFailures());
				}
			}

			if ($this->aNagiosHost !== null) {
				if (!$this->aNagiosHost->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHost->getValidationFailures());
				}
			}

			if ($this->aNagiosServiceTemplate !== null) {
				if (!$this->aNagiosServiceTemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosServiceTemplate->getValidationFailures());
				}
			}

			if ($this->aNagiosService !== null) {
				if (!$this->aNagiosService->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosService->getValidationFailures());
				}
			}

			if ($this->aNagiosHostgroup !== null) {
				if (!$this->aNagiosHostgroup->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHostgroup->getValidationFailures());
				}
			}

			if ($this->aNagiosTimeperiod !== null) {
				if (!$this->aNagiosTimeperiod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosTimeperiod->getValidationFailures());
				}
			}


			if (($retval = NagiosDependencyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNagiosDependencyTargets !== null) {
					foreach ($this->collNagiosDependencyTargets as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosDependencyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getHostTemplate();
				break;
			case 2:
				return $this->getHost();
				break;
			case 3:
				return $this->getServiceTemplate();
				break;
			case 4:
				return $this->getService();
				break;
			case 5:
				return $this->getHostgroup();
				break;
			case 6:
				return $this->getName();
				break;
			case 7:
				return $this->getExecutionFailureCriteriaUp();
				break;
			case 8:
				return $this->getExecutionFailureCriteriaDown();
				break;
			case 9:
				return $this->getExecutionFailureCriteriaUnreachable();
				break;
			case 10:
				return $this->getExecutionFailureCriteriaPending();
				break;
			case 11:
				return $this->getExecutionFailureCriteriaOk();
				break;
			case 12:
				return $this->getExecutionFailureCriteriaWarning();
				break;
			case 13:
				return $this->getExecutionFailureCriteriaUnknown();
				break;
			case 14:
				return $this->getExecutionFailureCriteriaCritical();
				break;
			case 15:
				return $this->getNotificationFailureCriteriaOk();
				break;
			case 16:
				return $this->getNotificationFailureCriteriaWarning();
				break;
			case 17:
				return $this->getNotificationFailureCriteriaUnknown();
				break;
			case 18:
				return $this->getNotificationFailureCriteriaCritical();
				break;
			case 19:
				return $this->getNotificationFailureCriteriaPending();
				break;
			case 20:
				return $this->getNotificationFailureCriteriaUp();
				break;
			case 21:
				return $this->getNotificationFailureCriteriaDown();
				break;
			case 22:
				return $this->getNotificationFailureCriteriaUnreachable();
				break;
			case 23:
				return $this->getInheritsParent();
				break;
			case 24:
				return $this->getDependencyPeriod();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['NagiosDependency'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['NagiosDependency'][$this->getPrimaryKey()] = true;
		$keys = NagiosDependencyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getHostTemplate(),
			$keys[2] => $this->getHost(),
			$keys[3] => $this->getServiceTemplate(),
			$keys[4] => $this->getService(),
			$keys[5] => $this->getHostgroup(),
			$keys[6] => $this->getName(),
			$keys[7] => $this->getExecutionFailureCriteriaUp(),
			$keys[8] => $this->getExecutionFailureCriteriaDown(),
			$keys[9] => $this->getExecutionFailureCriteriaUnreachable(),
			$keys[10] => $this->getExecutionFailureCriteriaPending(),
			$keys[11] => $this->getExecutionFailureCriteriaOk(),
			$keys[12] => $this->getExecutionFailureCriteriaWarning(),
			$keys[13] => $this->getExecutionFailureCriteriaUnknown(),
			$keys[14] => $this->getExecutionFailureCriteriaCritical(),
			$keys[15] => $this->getNotificationFailureCriteriaOk(),
			$keys[16] => $this->getNotificationFailureCriteriaWarning(),
			$keys[17] => $this->getNotificationFailureCriteriaUnknown(),
			$keys[18] => $this->getNotificationFailureCriteriaCritical(),
			$keys[19] => $this->getNotificationFailureCriteriaPending(),
			$keys[20] => $this->getNotificationFailureCriteriaUp(),
			$keys[21] => $this->getNotificationFailureCriteriaDown(),
			$keys[22] => $this->getNotificationFailureCriteriaUnreachable(),
			$keys[23] => $this->getInheritsParent(),
			$keys[24] => $this->getDependencyPeriod(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aNagiosHostTemplate) {
				$result['NagiosHostTemplate'] = $this->aNagiosHostTemplate->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosHost) {
				$result['NagiosHost'] = $this->aNagiosHost->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosServiceTemplate) {
				$result['NagiosServiceTemplate'] = $this->aNagiosServiceTemplate->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosService) {
				$result['NagiosService'] = $this->aNagiosService->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosHostgroup) {
				$result['NagiosHostgroup'] = $this->aNagiosHostgroup->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosTimeperiod) {
				$result['NagiosTimeperiod'] = $this->aNagiosTimeperiod->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collNagiosDependencyTargets) {
				$result['NagiosDependencyTargets'] = $this->collNagiosDependencyTargets->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosDependencyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setHostTemplate($value);
				break;
			case 2:
				$this->setHost($value);
				break;
			case 3:
				$this->setServiceTemplate($value);
				break;
			case 4:
				$this->setService($value);
				break;
			case 5:
				$this->setHostgroup($value);
				break;
			case 6:
				$this->setName($value);
				break;
			case 7:
				$this->setExecutionFailureCriteriaUp($value);
				break;
			case 8:
				$this->setExecutionFailureCriteriaDown($value);
				break;
			case 9:
				$this->setExecutionFailureCriteriaUnreachable($value);
				break;
			case 10:
				$this->setExecutionFailureCriteriaPending($value);
				break;
			case 11:
				$this->setExecutionFailureCriteriaOk($value);
				break;
			case 12:
				$this->setExecutionFailureCriteriaWarning($value);
				break;
			case 13:
				$this->setExecutionFailureCriteriaUnknown($value);
				break;
			case 14:
				$this->setExecutionFailureCriteriaCritical($value);
				break;
			case 15:
				$this->setNotificationFailureCriteriaOk($value);
				break;
			case 16:
				$this->setNotificationFailureCriteriaWarning($value);
				break;
			case 17:
				$this->setNotificationFailureCriteriaUnknown($value);
				break;
			case 18:
				$this->setNotificationFailureCriteriaCritical($value);
				break;
			case 19:
				$this->setNotificationFailureCriteriaPending($value);
				break;
			case 20:
				$this->setNotificationFailureCriteriaUp($value);
				break;
			case 21:
				$this->setNotificationFailureCriteriaDown($value);
				break;
			case 22:
				$this->setNotificationFailureCriteriaUnreachable($value);
				break;
			case 23:
				$this->setInheritsParent($value);
				break;
			case 24:
				$this->setDependencyPeriod($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NagiosDependencyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setHostTemplate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setHost($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setServiceTemplate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setService($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setHostgroup($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setName($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setExecutionFailureCriteriaUp($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setExecutionFailureCriteriaDown($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setExecutionFailureCriteriaUnreachable($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setExecutionFailureCriteriaPending($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setExecutionFailureCriteriaOk($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setExecutionFailureCriteriaWarning($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setExecutionFailureCriteriaUnknown($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setExecutionFailureCriteriaCritical($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setNotificationFailureCriteriaOk($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setNotificationFailureCriteriaWarning($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setNotificationFailureCriteriaUnknown($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setNotificationFailureCriteriaCritical($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setNotificationFailureCriteriaPending($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setNotificationFailureCriteriaUp($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setNotificationFailureCriteriaDown($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setNotificationFailureCriteriaUnreachable($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setInheritsParent($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setDependencyPeriod($arr[$keys[24]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosDependencyPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosDependencyPeer::ID)) $criteria->add(NagiosDependencyPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosDependencyPeer::HOST_TEMPLATE)) $criteria->add(NagiosDependencyPeer::HOST_TEMPLATE, $this->host_template);
		if ($this->isColumnModified(NagiosDependencyPeer::HOST)) $criteria->add(NagiosDependencyPeer::HOST, $this->host);
		if ($this->isColumnModified(NagiosDependencyPeer::SERVICE_TEMPLATE)) $criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->service_template);
		if ($this->isColumnModified(NagiosDependencyPeer::SERVICE)) $criteria->add(NagiosDependencyPeer::SERVICE, $this->service);
		if ($this->isColumnModified(NagiosDependencyPeer::HOSTGROUP)) $criteria->add(NagiosDependencyPeer::HOSTGROUP, $this->hostgroup);
		if ($this->isColumnModified(NagiosDependencyPeer::NAME)) $criteria->add(NagiosDependencyPeer::NAME, $this->name);
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UP)) $criteria->add(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UP, $this->execution_failure_criteria_up);
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_DOWN)) $criteria->add(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_DOWN, $this->execution_failure_criteria_down);
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNREACHABLE)) $criteria->add(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNREACHABLE, $this->execution_failure_criteria_unreachable);
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_PENDING)) $criteria->add(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_PENDING, $this->execution_failure_criteria_pending);
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_OK)) $criteria->add(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_OK, $this->execution_failure_criteria_ok);
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_WARNING)) $criteria->add(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_WARNING, $this->execution_failure_criteria_warning);
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNKNOWN)) $criteria->add(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNKNOWN, $this->execution_failure_criteria_unknown);
		if ($this->isColumnModified(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_CRITICAL)) $criteria->add(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_CRITICAL, $this->execution_failure_criteria_critical);
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_OK)) $criteria->add(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_OK, $this->notification_failure_criteria_ok);
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_WARNING)) $criteria->add(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_WARNING, $this->notification_failure_criteria_warning);
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNKNOWN)) $criteria->add(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNKNOWN, $this->notification_failure_criteria_unknown);
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_CRITICAL)) $criteria->add(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_CRITICAL, $this->notification_failure_criteria_critical);
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_PENDING)) $criteria->add(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_PENDING, $this->notification_failure_criteria_pending);
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UP)) $criteria->add(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UP, $this->notification_failure_criteria_up);
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_DOWN)) $criteria->add(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_DOWN, $this->notification_failure_criteria_down);
		if ($this->isColumnModified(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE)) $criteria->add(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE, $this->notification_failure_criteria_unreachable);
		if ($this->isColumnModified(NagiosDependencyPeer::INHERITS_PARENT)) $criteria->add(NagiosDependencyPeer::INHERITS_PARENT, $this->inherits_parent);
		if ($this->isColumnModified(NagiosDependencyPeer::DEPENDENCY_PERIOD)) $criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->dependency_period);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NagiosDependencyPeer::DATABASE_NAME);
		$criteria->add(NagiosDependencyPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of NagiosDependency (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setHostTemplate($this->getHostTemplate());
		$copyObj->setHost($this->getHost());
		$copyObj->setServiceTemplate($this->getServiceTemplate());
		$copyObj->setService($this->getService());
		$copyObj->setHostgroup($this->getHostgroup());
		$copyObj->setName($this->getName());
		$copyObj->setExecutionFailureCriteriaUp($this->getExecutionFailureCriteriaUp());
		$copyObj->setExecutionFailureCriteriaDown($this->getExecutionFailureCriteriaDown());
		$copyObj->setExecutionFailureCriteriaUnreachable($this->getExecutionFailureCriteriaUnreachable());
		$copyObj->setExecutionFailureCriteriaPending($this->getExecutionFailureCriteriaPending());
		$copyObj->setExecutionFailureCriteriaOk($this->getExecutionFailureCriteriaOk());
		$copyObj->setExecutionFailureCriteriaWarning($this->getExecutionFailureCriteriaWarning());
		$copyObj->setExecutionFailureCriteriaUnknown($this->getExecutionFailureCriteriaUnknown());
		$copyObj->setExecutionFailureCriteriaCritical($this->getExecutionFailureCriteriaCritical());
		$copyObj->setNotificationFailureCriteriaOk($this->getNotificationFailureCriteriaOk());
		$copyObj->setNotificationFailureCriteriaWarning($this->getNotificationFailureCriteriaWarning());
		$copyObj->setNotificationFailureCriteriaUnknown($this->getNotificationFailureCriteriaUnknown());
		$copyObj->setNotificationFailureCriteriaCritical($this->getNotificationFailureCriteriaCritical());
		$copyObj->setNotificationFailureCriteriaPending($this->getNotificationFailureCriteriaPending());
		$copyObj->setNotificationFailureCriteriaUp($this->getNotificationFailureCriteriaUp());
		$copyObj->setNotificationFailureCriteriaDown($this->getNotificationFailureCriteriaDown());
		$copyObj->setNotificationFailureCriteriaUnreachable($this->getNotificationFailureCriteriaUnreachable());
		$copyObj->setInheritsParent($this->getInheritsParent());
		$copyObj->setDependencyPeriod($this->getDependencyPeriod());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosDependencyTargets() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosDependencyTarget($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     NagiosDependency Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     NagiosDependencyPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosDependencyPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosHostTemplate object.
	 *
	 * @param      NagiosHostTemplate $v
	 * @return     NagiosDependency The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHostTemplate(NagiosHostTemplate $v = null)
	{
		if ($v === null) {
			$this->setHostTemplate(NULL);
		} else {
			$this->setHostTemplate($v->getId());
		}

		$this->aNagiosHostTemplate = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHostTemplate object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependency($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHostTemplate object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHostTemplate The associated NagiosHostTemplate object.
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplate(PropelPDO $con = null)
	{
		if ($this->aNagiosHostTemplate === null && ($this->host_template !== null)) {
			$this->aNagiosHostTemplate = NagiosHostTemplateQuery::create()->findPk($this->host_template, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosHostTemplate->addNagiosDependencys($this);
			 */
		}
		return $this->aNagiosHostTemplate;
	}

	/**
	 * Declares an association between this object and a NagiosHost object.
	 *
	 * @param      NagiosHost $v
	 * @return     NagiosDependency The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHost(NagiosHost $v = null)
	{
		if ($v === null) {
			$this->setHost(NULL);
		} else {
			$this->setHost($v->getId());
		}

		$this->aNagiosHost = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHost object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependency($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHost object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHost The associated NagiosHost object.
	 * @throws     PropelException
	 */
	public function getNagiosHost(PropelPDO $con = null)
	{
		if ($this->aNagiosHost === null && ($this->host !== null)) {
			$this->aNagiosHost = NagiosHostQuery::create()->findPk($this->host, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosHost->addNagiosDependencys($this);
			 */
		}
		return $this->aNagiosHost;
	}

	/**
	 * Declares an association between this object and a NagiosServiceTemplate object.
	 *
	 * @param      NagiosServiceTemplate $v
	 * @return     NagiosDependency The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosServiceTemplate(NagiosServiceTemplate $v = null)
	{
		if ($v === null) {
			$this->setServiceTemplate(NULL);
		} else {
			$this->setServiceTemplate($v->getId());
		}

		$this->aNagiosServiceTemplate = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosServiceTemplate object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependency($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosServiceTemplate object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosServiceTemplate The associated NagiosServiceTemplate object.
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplate(PropelPDO $con = null)
	{
		if ($this->aNagiosServiceTemplate === null && ($this->service_template !== null)) {
			$this->aNagiosServiceTemplate = NagiosServiceTemplateQuery::create()->findPk($this->service_template, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosServiceTemplate->addNagiosDependencys($this);
			 */
		}
		return $this->aNagiosServiceTemplate;
	}

	/**
	 * Declares an association between this object and a NagiosService object.
	 *
	 * @param      NagiosService $v
	 * @return     NagiosDependency The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosService(NagiosService $v = null)
	{
		if ($v === null) {
			$this->setService(NULL);
		} else {
			$this->setService($v->getId());
		}

		$this->aNagiosService = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosService object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependency($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosService object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosService The associated NagiosService object.
	 * @throws     PropelException
	 */
	public function getNagiosService(PropelPDO $con = null)
	{
		if ($this->aNagiosService === null && ($this->service !== null)) {
			$this->aNagiosService = NagiosServiceQuery::create()->findPk($this->service, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosService->addNagiosDependencys($this);
			 */
		}
		return $this->aNagiosService;
	}

	/**
	 * Declares an association between this object and a NagiosHostgroup object.
	 *
	 * @param      NagiosHostgroup $v
	 * @return     NagiosDependency The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHostgroup(NagiosHostgroup $v = null)
	{
		if ($v === null) {
			$this->setHostgroup(NULL);
		} else {
			$this->setHostgroup($v->getId());
		}

		$this->aNagiosHostgroup = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHostgroup object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependency($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHostgroup object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHostgroup The associated NagiosHostgroup object.
	 * @throws     PropelException
	 */
	public function getNagiosHostgroup(PropelPDO $con = null)
	{
		if ($this->aNagiosHostgroup === null && ($this->hostgroup !== null)) {
			$this->aNagiosHostgroup = NagiosHostgroupQuery::create()->findPk($this->hostgroup, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosHostgroup->addNagiosDependencys($this);
			 */
		}
		return $this->aNagiosHostgroup;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosDependency The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosTimeperiod(NagiosTimeperiod $v = null)
	{
		if ($v === null) {
			$this->setDependencyPeriod(NULL);
		} else {
			$this->setDependencyPeriod($v->getId());
		}

		$this->aNagiosTimeperiod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosTimeperiod object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependency($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosTimeperiod object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosTimeperiod The associated NagiosTimeperiod object.
	 * @throws     PropelException
	 */
	public function getNagiosTimeperiod(PropelPDO $con = null)
	{
		if ($this->aNagiosTimeperiod === null && ($this->dependency_period !== null)) {
			$this->aNagiosTimeperiod = NagiosTimeperiodQuery::create()->findPk($this->dependency_period, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosTimeperiod->addNagiosDependencys($this);
			 */
		}
		return $this->aNagiosTimeperiod;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('NagiosDependencyTarget' == $relationName) {
			return $this->initNagiosDependencyTargets();
		}
	}

	/**
	 * Clears out the collNagiosDependencyTargets collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosDependencyTargets()
	 */
	public function clearNagiosDependencyTargets()
	{
		$this->collNagiosDependencyTargets = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosDependencyTargets collection.
	 *
	 * By default this just sets the collNagiosDependencyTargets collection to an empty array (like clearcollNagiosDependencyTargets());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosDependencyTargets($overrideExisting = true)
	{
		if (null !== $this->collNagiosDependencyTargets && !$overrideExisting) {
			return;
		}
		$this->collNagiosDependencyTargets = new PropelObjectCollection();
		$this->collNagiosDependencyTargets->setModel('NagiosDependencyTarget');
	}

	/**
	 * Gets an array of NagiosDependencyTarget objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosDependency is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosDependencyTarget[] List of NagiosDependencyTarget objects
	 * @throws     PropelException
	 */
	public function getNagiosDependencyTargets($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosDependencyTargets || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosDependencyTargets) {
				// return empty collection
				$this->initNagiosDependencyTargets();
			} else {
				$collNagiosDependencyTargets = NagiosDependencyTargetQuery::create(null, $criteria)
					->filterByNagiosDependency($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosDependencyTargets;
				}
				$this->collNagiosDependencyTargets = $collNagiosDependencyTargets;
			}
		}
		return $this->collNagiosDependencyTargets;
	}

	/**
	 * Sets a collection of NagiosDependencyTarget objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $nagiosDependencyTargets A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setNagiosDependencyTargets(PropelCollection $nagiosDependencyTargets, PropelPDO $con = null)
	{
		$this->nagiosDependencyTargetsScheduledForDeletion = $this->getNagiosDependencyTargets(new Criteria(), $con)->diff($nagiosDependencyTargets);

		foreach ($nagiosDependencyTargets as $nagiosDependencyTarget) {
			// Fix issue with collection modified by reference
			if ($nagiosDependencyTarget->isNew()) {
				$nagiosDependencyTarget->setNagiosDependency($this);
			}
			$this->addNagiosDependencyTarget($nagiosDependencyTarget);
		}

		$this->collNagiosDependencyTargets = $nagiosDependencyTargets;
	}

	/**
	 * Returns the number of related NagiosDependencyTarget objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosDependencyTarget objects.
	 * @throws     PropelException
	 */
	public function countNagiosDependencyTargets(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosDependencyTargets || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosDependencyTargets) {
				return 0;
			} else {
				$query = NagiosDependencyTargetQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosDependency($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosDependencyTargets);
		}
	}

	/**
	 * Method called to associate a NagiosDependencyTarget object to this object
	 * through the NagiosDependencyTarget foreign key attribute.
	 *
	 * @param      NagiosDependencyTarget $l NagiosDependencyTarget
	 * @return     NagiosDependency The current object (for fluent API support)
	 */
	public function addNagiosDependencyTarget(NagiosDependencyTarget $l)
	{
		if ($this->collNagiosDependencyTargets === null) {
			$this->initNagiosDependencyTargets();
		}
		if (!$this->collNagiosDependencyTargets->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddNagiosDependencyTarget($l);
		}

		return $this;
	}

	/**
	 * @param	NagiosDependencyTarget $nagiosDependencyTarget The nagiosDependencyTarget object to add.
	 */
	protected function doAddNagiosDependencyTarget($nagiosDependencyTarget)
	{
		$this->collNagiosDependencyTargets[]= $nagiosDependencyTarget;
		$nagiosDependencyTarget->setNagiosDependency($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosDependency is new, it will return
	 * an empty collection; or if this NagiosDependency has previously
	 * been saved, it will retrieve related NagiosDependencyTargets from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosDependency.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependencyTarget[] List of NagiosDependencyTarget objects
	 */
	public function getNagiosDependencyTargetsJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyTargetQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosDependencyTargets($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosDependency is new, it will return
	 * an empty collection; or if this NagiosDependency has previously
	 * been saved, it will retrieve related NagiosDependencyTargets from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosDependency.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependencyTarget[] List of NagiosDependencyTarget objects
	 */
	public function getNagiosDependencyTargetsJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyTargetQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosDependencyTargets($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosDependency is new, it will return
	 * an empty collection; or if this NagiosDependency has previously
	 * been saved, it will retrieve related NagiosDependencyTargets from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosDependency.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependencyTarget[] List of NagiosDependencyTarget objects
	 */
	public function getNagiosDependencyTargetsJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyTargetQuery::create(null, $criteria);
		$query->joinWith('NagiosHostgroup', $join_behavior);

		return $this->getNagiosDependencyTargets($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->host_template = null;
		$this->host = null;
		$this->service_template = null;
		$this->service = null;
		$this->hostgroup = null;
		$this->name = null;
		$this->execution_failure_criteria_up = null;
		$this->execution_failure_criteria_down = null;
		$this->execution_failure_criteria_unreachable = null;
		$this->execution_failure_criteria_pending = null;
		$this->execution_failure_criteria_ok = null;
		$this->execution_failure_criteria_warning = null;
		$this->execution_failure_criteria_unknown = null;
		$this->execution_failure_criteria_critical = null;
		$this->notification_failure_criteria_ok = null;
		$this->notification_failure_criteria_warning = null;
		$this->notification_failure_criteria_unknown = null;
		$this->notification_failure_criteria_critical = null;
		$this->notification_failure_criteria_pending = null;
		$this->notification_failure_criteria_up = null;
		$this->notification_failure_criteria_down = null;
		$this->notification_failure_criteria_unreachable = null;
		$this->inherits_parent = null;
		$this->dependency_period = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collNagiosDependencyTargets) {
				foreach ($this->collNagiosDependencyTargets as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collNagiosDependencyTargets instanceof PropelCollection) {
			$this->collNagiosDependencyTargets->clearIterator();
		}
		$this->collNagiosDependencyTargets = null;
		$this->aNagiosHostTemplate = null;
		$this->aNagiosHost = null;
		$this->aNagiosServiceTemplate = null;
		$this->aNagiosService = null;
		$this->aNagiosHostgroup = null;
		$this->aNagiosTimeperiod = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(NagiosDependencyPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseNagiosDependency
