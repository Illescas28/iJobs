<?php


/**
 * Base class that represents a query for the 'vacantecorreo' table.
 *
 *
 *
 * @method VacantecorreoQuery orderByVacantecorreoId($order = Criteria::ASC) Order by the vacantecorreo_id column
 * @method VacantecorreoQuery orderByVacanteId($order = Criteria::ASC) Order by the vacante_id column
 * @method VacantecorreoQuery orderByCorreoId($order = Criteria::ASC) Order by the correo_id column
 *
 * @method VacantecorreoQuery groupByVacantecorreoId() Group by the vacantecorreo_id column
 * @method VacantecorreoQuery groupByVacanteId() Group by the vacante_id column
 * @method VacantecorreoQuery groupByCorreoId() Group by the correo_id column
 *
 * @method VacantecorreoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VacantecorreoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VacantecorreoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VacantecorreoQuery leftJoinCorreo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Correo relation
 * @method VacantecorreoQuery rightJoinCorreo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Correo relation
 * @method VacantecorreoQuery innerJoinCorreo($relationAlias = null) Adds a INNER JOIN clause to the query using the Correo relation
 *
 * @method VacantecorreoQuery leftJoinVacante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vacante relation
 * @method VacantecorreoQuery rightJoinVacante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vacante relation
 * @method VacantecorreoQuery innerJoinVacante($relationAlias = null) Adds a INNER JOIN clause to the query using the Vacante relation
 *
 * @method Vacantecorreo findOne(PropelPDO $con = null) Return the first Vacantecorreo matching the query
 * @method Vacantecorreo findOneOrCreate(PropelPDO $con = null) Return the first Vacantecorreo matching the query, or a new Vacantecorreo object populated from the query conditions when no match is found
 *
 * @method Vacantecorreo findOneByVacanteId(int $vacante_id) Return the first Vacantecorreo filtered by the vacante_id column
 * @method Vacantecorreo findOneByCorreoId(int $correo_id) Return the first Vacantecorreo filtered by the correo_id column
 *
 * @method array findByVacantecorreoId(int $vacantecorreo_id) Return Vacantecorreo objects filtered by the vacantecorreo_id column
 * @method array findByVacanteId(int $vacante_id) Return Vacantecorreo objects filtered by the vacante_id column
 * @method array findByCorreoId(int $correo_id) Return Vacantecorreo objects filtered by the correo_id column
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseVacantecorreoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVacantecorreoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'sitiowebnd';
        }
        if (null === $modelName) {
            $modelName = 'Vacantecorreo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VacantecorreoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VacantecorreoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VacantecorreoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VacantecorreoQuery) {
            return $criteria;
        }
        $query = new VacantecorreoQuery(null, null, $modelAlias);

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
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Vacantecorreo|Vacantecorreo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VacantecorreoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VacantecorreoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Vacantecorreo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByVacantecorreoId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Vacantecorreo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `vacantecorreo_id`, `vacante_id`, `correo_id` FROM `vacantecorreo` WHERE `vacantecorreo_id` = :p0';
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
            $obj = new Vacantecorreo();
            $obj->hydrate($row);
            VacantecorreoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Vacantecorreo|Vacantecorreo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Vacantecorreo[]|mixed the list of results, formatted by the current formatter
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
     * @return VacantecorreoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VacantecorreoPeer::VACANTECORREO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VacantecorreoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VacantecorreoPeer::VACANTECORREO_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the vacantecorreo_id column
     *
     * Example usage:
     * <code>
     * $query->filterByVacantecorreoId(1234); // WHERE vacantecorreo_id = 1234
     * $query->filterByVacantecorreoId(array(12, 34)); // WHERE vacantecorreo_id IN (12, 34)
     * $query->filterByVacantecorreoId(array('min' => 12)); // WHERE vacantecorreo_id >= 12
     * $query->filterByVacantecorreoId(array('max' => 12)); // WHERE vacantecorreo_id <= 12
     * </code>
     *
     * @param     mixed $vacantecorreoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantecorreoQuery The current query, for fluid interface
     */
    public function filterByVacantecorreoId($vacantecorreoId = null, $comparison = null)
    {
        if (is_array($vacantecorreoId)) {
            $useMinMax = false;
            if (isset($vacantecorreoId['min'])) {
                $this->addUsingAlias(VacantecorreoPeer::VACANTECORREO_ID, $vacantecorreoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacantecorreoId['max'])) {
                $this->addUsingAlias(VacantecorreoPeer::VACANTECORREO_ID, $vacantecorreoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantecorreoPeer::VACANTECORREO_ID, $vacantecorreoId, $comparison);
    }

    /**
     * Filter the query on the vacante_id column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteId(1234); // WHERE vacante_id = 1234
     * $query->filterByVacanteId(array(12, 34)); // WHERE vacante_id IN (12, 34)
     * $query->filterByVacanteId(array('min' => 12)); // WHERE vacante_id >= 12
     * $query->filterByVacanteId(array('max' => 12)); // WHERE vacante_id <= 12
     * </code>
     *
     * @see       filterByVacante()
     *
     * @param     mixed $vacanteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantecorreoQuery The current query, for fluid interface
     */
    public function filterByVacanteId($vacanteId = null, $comparison = null)
    {
        if (is_array($vacanteId)) {
            $useMinMax = false;
            if (isset($vacanteId['min'])) {
                $this->addUsingAlias(VacantecorreoPeer::VACANTE_ID, $vacanteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteId['max'])) {
                $this->addUsingAlias(VacantecorreoPeer::VACANTE_ID, $vacanteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantecorreoPeer::VACANTE_ID, $vacanteId, $comparison);
    }

    /**
     * Filter the query on the correo_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCorreoId(1234); // WHERE correo_id = 1234
     * $query->filterByCorreoId(array(12, 34)); // WHERE correo_id IN (12, 34)
     * $query->filterByCorreoId(array('min' => 12)); // WHERE correo_id >= 12
     * $query->filterByCorreoId(array('max' => 12)); // WHERE correo_id <= 12
     * </code>
     *
     * @see       filterByCorreo()
     *
     * @param     mixed $correoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantecorreoQuery The current query, for fluid interface
     */
    public function filterByCorreoId($correoId = null, $comparison = null)
    {
        if (is_array($correoId)) {
            $useMinMax = false;
            if (isset($correoId['min'])) {
                $this->addUsingAlias(VacantecorreoPeer::CORREO_ID, $correoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($correoId['max'])) {
                $this->addUsingAlias(VacantecorreoPeer::CORREO_ID, $correoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantecorreoPeer::CORREO_ID, $correoId, $comparison);
    }

    /**
     * Filter the query by a related Correo object
     *
     * @param   Correo|PropelObjectCollection $correo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VacantecorreoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCorreo($correo, $comparison = null)
    {
        if ($correo instanceof Correo) {
            return $this
                ->addUsingAlias(VacantecorreoPeer::CORREO_ID, $correo->getCorreoId(), $comparison);
        } elseif ($correo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VacantecorreoPeer::CORREO_ID, $correo->toKeyValue('PrimaryKey', 'CorreoId'), $comparison);
        } else {
            throw new PropelException('filterByCorreo() only accepts arguments of type Correo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Correo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VacantecorreoQuery The current query, for fluid interface
     */
    public function joinCorreo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Correo');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Correo');
        }

        return $this;
    }

    /**
     * Use the Correo relation Correo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CorreoQuery A secondary query class using the current class as primary query
     */
    public function useCorreoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCorreo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Correo', 'CorreoQuery');
    }

    /**
     * Filter the query by a related Vacante object
     *
     * @param   Vacante|PropelObjectCollection $vacante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VacantecorreoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVacante($vacante, $comparison = null)
    {
        if ($vacante instanceof Vacante) {
            return $this
                ->addUsingAlias(VacantecorreoPeer::VACANTE_ID, $vacante->getVacanteId(), $comparison);
        } elseif ($vacante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VacantecorreoPeer::VACANTE_ID, $vacante->toKeyValue('PrimaryKey', 'VacanteId'), $comparison);
        } else {
            throw new PropelException('filterByVacante() only accepts arguments of type Vacante or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vacante relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VacantecorreoQuery The current query, for fluid interface
     */
    public function joinVacante($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vacante');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Vacante');
        }

        return $this;
    }

    /**
     * Use the Vacante relation Vacante object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VacanteQuery A secondary query class using the current class as primary query
     */
    public function useVacanteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVacante($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vacante', 'VacanteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Vacantecorreo $vacantecorreo Object to remove from the list of results
     *
     * @return VacantecorreoQuery The current query, for fluid interface
     */
    public function prune($vacantecorreo = null)
    {
        if ($vacantecorreo) {
            $this->addUsingAlias(VacantecorreoPeer::VACANTECORREO_ID, $vacantecorreo->getVacantecorreoId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
