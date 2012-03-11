<?php


/**
 * Base static class for performing query and update operations on the 'nagios_timeperiod' table.
 *
 * Nagios Timeperiods
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosTimeperiodPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_timeperiod';

	/** the related Propel class for this table */
	const OM_CLASS = 'NagiosTimeperiod';

	/** the related TableMap class for this table */
	const TM_CLASS = 'NagiosTimeperiodTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 3;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 3;

	/** the column name for the ID field */
	const ID = 'nagios_timeperiod.ID';

	/** the column name for the NAME field */
	const NAME = 'nagios_timeperiod.NAME';

	/** the column name for the ALIAS field */
	const ALIAS = 'nagios_timeperiod.ALIAS';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of NagiosTimeperiod objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosTimeperiod[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Alias', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'alias', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::NAME, self::ALIAS, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAME', 'ALIAS', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'alias', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Alias' => 2, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'alias' => 2, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::NAME => 1, self::ALIAS => 2, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAME' => 1, 'ALIAS' => 2, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'alias' => 2, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. NagiosTimeperiodPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosTimeperiodPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(NagiosTimeperiodPeer::ID);
			$criteria->addSelectColumn(NagiosTimeperiodPeer::NAME);
			$criteria->addSelectColumn(NagiosTimeperiodPeer::ALIAS);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.ALIAS');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosTimeperiodPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosTimeperiodPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     NagiosTimeperiod
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosTimeperiodPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return NagiosTimeperiodPeer::populateObjects(NagiosTimeperiodPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosTimeperiodPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      NagiosTimeperiod $value A NagiosTimeperiod object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A NagiosTimeperiod object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosTimeperiod) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosTimeperiod object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     NagiosTimeperiod Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to nagios_timeperiod
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
		// Invalidate objects in NagiosTimeperiodEntryPeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosTimeperiodEntryPeer::clearInstancePool();
		// Invalidate objects in NagiosTimeperiodExcludePeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosTimeperiodExcludePeer::clearInstancePool();
		// Invalidate objects in NagiosTimeperiodExcludePeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosTimeperiodExcludePeer::clearInstancePool();
		// Invalidate objects in NagiosContactPeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosContactPeer::clearInstancePool();
		// Invalidate objects in NagiosContactPeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosContactPeer::clearInstancePool();
		// Invalidate objects in NagiosHostTemplatePeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosHostTemplatePeer::clearInstancePool();
		// Invalidate objects in NagiosHostTemplatePeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosHostTemplatePeer::clearInstancePool();
		// Invalidate objects in NagiosHostPeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosHostPeer::clearInstancePool();
		// Invalidate objects in NagiosHostPeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosHostPeer::clearInstancePool();
		// Invalidate objects in NagiosServiceTemplatePeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServiceTemplatePeer::clearInstancePool();
		// Invalidate objects in NagiosServiceTemplatePeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServiceTemplatePeer::clearInstancePool();
		// Invalidate objects in NagiosServicePeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServicePeer::clearInstancePool();
		// Invalidate objects in NagiosServicePeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServicePeer::clearInstancePool();
		// Invalidate objects in NagiosDependencyPeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosDependencyPeer::clearInstancePool();
		// Invalidate objects in NagiosEscalationPeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosEscalationPeer::clearInstancePool();
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = NagiosTimeperiodPeer::getOMClass();
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosTimeperiodPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosTimeperiodPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (NagiosTimeperiod object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = NagiosTimeperiodPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = NagiosTimeperiodPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			NagiosTimeperiodPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseNagiosTimeperiodPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseNagiosTimeperiodPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new NagiosTimeperiodTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 *
	 * @return     string ClassName
	 */
	public static function getOMClass()
	{
		return NagiosTimeperiodPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a NagiosTimeperiod or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosTimeperiod object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosTimeperiod object
		}

		if ($criteria->containsKey(NagiosTimeperiodPeer::ID) && $criteria->keyContainsValue(NagiosTimeperiodPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosTimeperiodPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a NagiosTimeperiod or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosTimeperiod object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosTimeperiodPeer::ID);
			$value = $criteria->remove(NagiosTimeperiodPeer::ID);
			if ($value) {
				$selectCriteria->add(NagiosTimeperiodPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(NagiosTimeperiodPeer::TABLE_NAME);
			}

		} else { // $values is NagiosTimeperiod object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the nagios_timeperiod table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosTimeperiodPeer::doOnDeleteCascade(new Criteria(NagiosTimeperiodPeer::DATABASE_NAME), $con);
			NagiosTimeperiodPeer::doOnDeleteSetNull(new Criteria(NagiosTimeperiodPeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(NagiosTimeperiodPeer::TABLE_NAME, $con, NagiosTimeperiodPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			NagiosTimeperiodPeer::clearInstancePool();
			NagiosTimeperiodPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a NagiosTimeperiod or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosTimeperiod object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosTimeperiod) { // it's a model object
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosTimeperiodPeer::ID, (array) $values, Criteria::IN);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			// cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
			$c = clone $criteria;
			$affectedRows += NagiosTimeperiodPeer::doOnDeleteCascade($c, $con);
			
			// cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
			$c = clone $criteria;
			NagiosTimeperiodPeer::doOnDeleteSetNull($c, $con);
			
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			if ($values instanceof Criteria) {
				NagiosTimeperiodPeer::clearInstancePool();
			} elseif ($values instanceof NagiosTimeperiod) { // it's a model object
				NagiosTimeperiodPeer::removeInstanceFromPool($values);
			} else { // it's a primary key, or an array of pks
				foreach ((array) $values as $singleval) {
					NagiosTimeperiodPeer::removeInstanceFromPool($singleval);
				}
			}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			NagiosTimeperiodPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
	 * feature (like MySQL or SQLite).
	 *
	 * This method is not very speedy because it must perform a query first to get
	 * the implicated records and then perform the deletes by calling those Peer classes.
	 *
	 * This method should be used within a transaction if possible.
	 *
	 * @param      Criteria $criteria
	 * @param      PropelPDO $con
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
	{
		// initialize var to track total num of affected rows
		$affectedRows = 0;

		// first find the objects that are implicated by the $criteria
		$objects = NagiosTimeperiodPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related NagiosDependency objects
			$criteria = new Criteria(NagiosDependencyPeer::DATABASE_NAME);
			
			$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $obj->getId());
			$affectedRows += NagiosDependencyPeer::doDelete($criteria, $con);
		}
		return $affectedRows;
	}

	/**
	 * This is a method for emulating ON DELETE SET NULL DBs that don't support this
	 * feature (like MySQL or SQLite).
	 *
	 * This method is not very speedy because it must perform a query first to get
	 * the implicated records and then perform the deletes by calling those Peer classes.
	 *
	 * This method should be used within a transaction if possible.
	 *
	 * @param      Criteria $criteria
	 * @param      PropelPDO $con
	 * @return     void
	 */
	protected static function doOnDeleteSetNull(Criteria $criteria, PropelPDO $con)
	{

		// first find the objects that are implicated by the $criteria
		$objects = NagiosTimeperiodPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {

			// set fkey col in related NagiosTimeperiodEntry rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $obj->getId());
			$updateValues->add(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosTimeperiodExclude rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $obj->getId());
			$updateValues->add(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosTimeperiodExclude rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $obj->getId());
			$updateValues->add(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosContact rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $obj->getId());
			$updateValues->add(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosContact rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $obj->getId());
			$updateValues->add(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosHostTemplate rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosHostTemplatePeer::CHECK_PERIOD, $obj->getId());
			$updateValues->add(NagiosHostTemplatePeer::CHECK_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosHostTemplate rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, $obj->getId());
			$updateValues->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosHost rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosHostPeer::CHECK_PERIOD, $obj->getId());
			$updateValues->add(NagiosHostPeer::CHECK_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosHost rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $obj->getId());
			$updateValues->add(NagiosHostPeer::NOTIFICATION_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosServiceTemplate rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $obj->getId());
			$updateValues->add(NagiosServiceTemplatePeer::CHECK_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosServiceTemplate rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $obj->getId());
			$updateValues->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosService rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosServicePeer::CHECK_PERIOD, $obj->getId());
			$updateValues->add(NagiosServicePeer::CHECK_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosService rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $obj->getId());
			$updateValues->add(NagiosServicePeer::NOTIFICATION_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

			// set fkey col in related NagiosEscalation rows to NULL
			$selectCriteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$selectCriteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $obj->getId());
			$updateValues->add(NagiosEscalationPeer::ESCALATION_PERIOD, null);

			BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

		}
	}

	/**
	 * Validates all modified columns of given NagiosTimeperiod object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosTimeperiod $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosTimeperiodPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosTimeperiodPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(NagiosTimeperiodPeer::DATABASE_NAME, NagiosTimeperiodPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosTimeperiod
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosTimeperiodPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		$criteria->add(NagiosTimeperiodPeer::ID, $pk);

		$v = NagiosTimeperiodPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$criteria->add(NagiosTimeperiodPeer::ID, $pks, Criteria::IN);
			$objs = NagiosTimeperiodPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosTimeperiodPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNagiosTimeperiodPeer::buildTableMap();

