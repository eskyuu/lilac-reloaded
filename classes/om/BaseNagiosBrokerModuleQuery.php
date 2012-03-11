<?php


/**
 * Base class that represents a query for the 'nagios_broker_module' table.
 *
 * Event Broker Modules
 *
 * @method     NagiosBrokerModuleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosBrokerModuleQuery orderByLine($order = Criteria::ASC) Order by the line column
 *
 * @method     NagiosBrokerModuleQuery groupById() Group by the id column
 * @method     NagiosBrokerModuleQuery groupByLine() Group by the line column
 *
 * @method     NagiosBrokerModuleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosBrokerModuleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosBrokerModuleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosBrokerModule findOne(PropelPDO $con = null) Return the first NagiosBrokerModule matching the query
 * @method     NagiosBrokerModule findOneOrCreate(PropelPDO $con = null) Return the first NagiosBrokerModule matching the query, or a new NagiosBrokerModule object populated from the query conditions when no match is found
 *
 * @method     NagiosBrokerModule findOneById(int $id) Return the first NagiosBrokerModule filtered by the id column
 * @method     NagiosBrokerModule findOneByLine(string $line) Return the first NagiosBrokerModule filtered by the line column
 *
 * @method     array findById(int $id) Return NagiosBrokerModule objects filtered by the id column
 * @method     array findByLine(string $line) Return NagiosBrokerModule objects filtered by the line column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosBrokerModuleQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseNagiosBrokerModuleQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosBrokerModule', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosBrokerModuleQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosBrokerModuleQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosBrokerModuleQuery) {
			return $criteria;
		}
		$query = new NagiosBrokerModuleQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    NagiosBrokerModule|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = NagiosBrokerModulePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(NagiosBrokerModulePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    NagiosBrokerModule A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `LINE` FROM `nagios_broker_module` WHERE `ID` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new NagiosBrokerModule();
			$obj->hydrate($row);
			NagiosBrokerModulePeer::addInstanceToPool($obj, (string) $row[0]);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    NagiosBrokerModule|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    NagiosBrokerModuleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosBrokerModulePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosBrokerModuleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosBrokerModulePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosBrokerModuleQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosBrokerModulePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the line column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLine('fooValue');   // WHERE line = 'fooValue'
	 * $query->filterByLine('%fooValue%'); // WHERE line LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $line The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosBrokerModuleQuery The current query, for fluid interface
	 */
	public function filterByLine($line = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($line)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $line)) {
				$line = str_replace('*', '%', $line);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosBrokerModulePeer::LINE, $line, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosBrokerModule $nagiosBrokerModule Object to remove from the list of results
	 *
	 * @return    NagiosBrokerModuleQuery The current query, for fluid interface
	 */
	public function prune($nagiosBrokerModule = null)
	{
		if ($nagiosBrokerModule) {
			$this->addUsingAlias(NagiosBrokerModulePeer::ID, $nagiosBrokerModule->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseNagiosBrokerModuleQuery