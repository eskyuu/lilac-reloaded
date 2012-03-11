<?php


/**
 * Base class that represents a query for the 'nagios_service_contact_group_member' table.
 *
 * Nagios  Service Group
 *
 * @method     NagiosServiceContactGroupMemberQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosServiceContactGroupMemberQuery orderByService($order = Criteria::ASC) Order by the service column
 * @method     NagiosServiceContactGroupMemberQuery orderByTemplate($order = Criteria::ASC) Order by the template column
 * @method     NagiosServiceContactGroupMemberQuery orderByContactGroup($order = Criteria::ASC) Order by the contact_group column
 *
 * @method     NagiosServiceContactGroupMemberQuery groupById() Group by the id column
 * @method     NagiosServiceContactGroupMemberQuery groupByService() Group by the service column
 * @method     NagiosServiceContactGroupMemberQuery groupByTemplate() Group by the template column
 * @method     NagiosServiceContactGroupMemberQuery groupByContactGroup() Group by the contact_group column
 *
 * @method     NagiosServiceContactGroupMemberQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosServiceContactGroupMemberQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosServiceContactGroupMemberQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosServiceContactGroupMemberQuery leftJoinNagiosService($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceContactGroupMemberQuery rightJoinNagiosService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceContactGroupMemberQuery innerJoinNagiosService($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosService relation
 *
 * @method     NagiosServiceContactGroupMemberQuery leftJoinNagiosServiceTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosServiceContactGroupMemberQuery rightJoinNagiosServiceTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosServiceContactGroupMemberQuery innerJoinNagiosServiceTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplate relation
 *
 * @method     NagiosServiceContactGroupMemberQuery leftJoinNagiosContactGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactGroup relation
 * @method     NagiosServiceContactGroupMemberQuery rightJoinNagiosContactGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactGroup relation
 * @method     NagiosServiceContactGroupMemberQuery innerJoinNagiosContactGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactGroup relation
 *
 * @method     NagiosServiceContactGroupMember findOne(PropelPDO $con = null) Return the first NagiosServiceContactGroupMember matching the query
 * @method     NagiosServiceContactGroupMember findOneOrCreate(PropelPDO $con = null) Return the first NagiosServiceContactGroupMember matching the query, or a new NagiosServiceContactGroupMember object populated from the query conditions when no match is found
 *
 * @method     NagiosServiceContactGroupMember findOneById(int $id) Return the first NagiosServiceContactGroupMember filtered by the id column
 * @method     NagiosServiceContactGroupMember findOneByService(int $service) Return the first NagiosServiceContactGroupMember filtered by the service column
 * @method     NagiosServiceContactGroupMember findOneByTemplate(int $template) Return the first NagiosServiceContactGroupMember filtered by the template column
 * @method     NagiosServiceContactGroupMember findOneByContactGroup(int $contact_group) Return the first NagiosServiceContactGroupMember filtered by the contact_group column
 *
 * @method     array findById(int $id) Return NagiosServiceContactGroupMember objects filtered by the id column
 * @method     array findByService(int $service) Return NagiosServiceContactGroupMember objects filtered by the service column
 * @method     array findByTemplate(int $template) Return NagiosServiceContactGroupMember objects filtered by the template column
 * @method     array findByContactGroup(int $contact_group) Return NagiosServiceContactGroupMember objects filtered by the contact_group column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosServiceContactGroupMemberQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseNagiosServiceContactGroupMemberQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosServiceContactGroupMember', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosServiceContactGroupMemberQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosServiceContactGroupMemberQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosServiceContactGroupMemberQuery) {
			return $criteria;
		}
		$query = new NagiosServiceContactGroupMemberQuery();
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
	 * @return    NagiosServiceContactGroupMember|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = NagiosServiceContactGroupMemberPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceContactGroupMemberPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    NagiosServiceContactGroupMember A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `SERVICE`, `TEMPLATE`, `CONTACT_GROUP` FROM `nagios_service_contact_group_member` WHERE `ID` = :p0';
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
			$obj = new NagiosServiceContactGroupMember();
			$obj->hydrate($row);
			NagiosServiceContactGroupMemberPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    NagiosServiceContactGroupMember|array|mixed the result, formatted by the current formatter
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
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosServiceContactGroupMemberPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosServiceContactGroupMemberPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosServiceContactGroupMemberPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the service column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByService(1234); // WHERE service = 1234
	 * $query->filterByService(array(12, 34)); // WHERE service IN (12, 34)
	 * $query->filterByService(array('min' => 12)); // WHERE service > 12
	 * </code>
	 *
	 * @see       filterByNagiosService()
	 *
	 * @param     mixed $service The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function filterByService($service = null, $comparison = null)
	{
		if (is_array($service)) {
			$useMinMax = false;
			if (isset($service['min'])) {
				$this->addUsingAlias(NagiosServiceContactGroupMemberPeer::SERVICE, $service['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($service['max'])) {
				$this->addUsingAlias(NagiosServiceContactGroupMemberPeer::SERVICE, $service['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceContactGroupMemberPeer::SERVICE, $service, $comparison);
	}

	/**
	 * Filter the query on the template column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTemplate(1234); // WHERE template = 1234
	 * $query->filterByTemplate(array(12, 34)); // WHERE template IN (12, 34)
	 * $query->filterByTemplate(array('min' => 12)); // WHERE template > 12
	 * </code>
	 *
	 * @see       filterByNagiosServiceTemplate()
	 *
	 * @param     mixed $template The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function filterByTemplate($template = null, $comparison = null)
	{
		if (is_array($template)) {
			$useMinMax = false;
			if (isset($template['min'])) {
				$this->addUsingAlias(NagiosServiceContactGroupMemberPeer::TEMPLATE, $template['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($template['max'])) {
				$this->addUsingAlias(NagiosServiceContactGroupMemberPeer::TEMPLATE, $template['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceContactGroupMemberPeer::TEMPLATE, $template, $comparison);
	}

	/**
	 * Filter the query on the contact_group column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByContactGroup(1234); // WHERE contact_group = 1234
	 * $query->filterByContactGroup(array(12, 34)); // WHERE contact_group IN (12, 34)
	 * $query->filterByContactGroup(array('min' => 12)); // WHERE contact_group > 12
	 * </code>
	 *
	 * @see       filterByNagiosContactGroup()
	 *
	 * @param     mixed $contactGroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function filterByContactGroup($contactGroup = null, $comparison = null)
	{
		if (is_array($contactGroup)) {
			$useMinMax = false;
			if (isset($contactGroup['min'])) {
				$this->addUsingAlias(NagiosServiceContactGroupMemberPeer::CONTACT_GROUP, $contactGroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contactGroup['max'])) {
				$this->addUsingAlias(NagiosServiceContactGroupMemberPeer::CONTACT_GROUP, $contactGroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceContactGroupMemberPeer::CONTACT_GROUP, $contactGroup, $comparison);
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService|PropelCollection $nagiosService The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function filterByNagiosService($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosServiceContactGroupMemberPeer::SERVICE, $nagiosService->getId(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceContactGroupMemberPeer::SERVICE, $nagiosService->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosService() only accepts arguments of type NagiosService or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosService relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function joinNagiosService($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosService');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosService');
		}

		return $this;
	}

	/**
	 * Use the NagiosService relation NagiosService object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosService($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosService', 'NagiosServiceQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceTemplate object
	 *
	 * @param     NagiosServiceTemplate|PropelCollection $nagiosServiceTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplate($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosServiceContactGroupMemberPeer::TEMPLATE, $nagiosServiceTemplate->getId(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceContactGroupMemberPeer::TEMPLATE, $nagiosServiceTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosServiceTemplate() only accepts arguments of type NagiosServiceTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplate relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplate');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosServiceTemplate');
		}

		return $this;
	}

	/**
	 * Use the NagiosServiceTemplate relation NagiosServiceTemplate object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplate', 'NagiosServiceTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosContactGroup object
	 *
	 * @param     NagiosContactGroup|PropelCollection $nagiosContactGroup The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactGroup($nagiosContactGroup, $comparison = null)
	{
		if ($nagiosContactGroup instanceof NagiosContactGroup) {
			return $this
				->addUsingAlias(NagiosServiceContactGroupMemberPeer::CONTACT_GROUP, $nagiosContactGroup->getId(), $comparison);
		} elseif ($nagiosContactGroup instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceContactGroupMemberPeer::CONTACT_GROUP, $nagiosContactGroup->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosContactGroup() only accepts arguments of type NagiosContactGroup or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContactGroup relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function joinNagiosContactGroup($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContactGroup');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosContactGroup');
		}

		return $this;
	}

	/**
	 * Use the NagiosContactGroup relation NagiosContactGroup object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactGroupQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactGroupQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosContactGroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContactGroup', 'NagiosContactGroupQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosServiceContactGroupMember $nagiosServiceContactGroupMember Object to remove from the list of results
	 *
	 * @return    NagiosServiceContactGroupMemberQuery The current query, for fluid interface
	 */
	public function prune($nagiosServiceContactGroupMember = null)
	{
		if ($nagiosServiceContactGroupMember) {
			$this->addUsingAlias(NagiosServiceContactGroupMemberPeer::ID, $nagiosServiceContactGroupMember->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseNagiosServiceContactGroupMemberQuery