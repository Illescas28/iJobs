<?php


/**
 * Base class that represents a query for the 'correo' table.
 *
 *
 *
 * @method CorreoQuery orderByCorreoId($order = Criteria::ASC) Order by the correo_id column
 * @method CorreoQuery orderByCorreoNombre($order = Criteria::ASC) Order by the correo_nombre column
 *
 * @method CorreoQuery groupByCorreoId() Group by the correo_id column
 * @method CorreoQuery groupByCorreoNombre() Group by the correo_nombre column
 *
 * @method CorreoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CorreoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CorreoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CorreoQuery leftJoinVacantecorreo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vacantecorreo relation
 * @method CorreoQuery rightJoinVacantecorreo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vacantecorreo relation
 * @method CorreoQuery innerJoinVacantecorreo($relationAlias = null) Adds a INNER JOIN clause to the query using the Vacantecorreo relation
 *
 * @method Correo findOne(PropelPDO $con = null) Return the first Correo matching the query
 * @method Correo findOneOrCreate(PropelPDO $con = null) Return the first Correo matching the query, or a new Correo object populated from the query conditions when no match is found
 *
 * @method Correo findOneByCorreoNombre(string $correo_nombre) Return the first Correo filtered by the correo_nombre column
 *
 * @method array findByCorreoId(int $correo_id) Return Correo objects filtered by the correo_id column
 * @method array findByCorreoNombre(string $correo_nombre) Return Correo objects filtered by the correo_nombre column
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseCorreoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCorreoQuery object.
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
            $modelName = 'Correo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CorreoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CorreoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CorreoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CorreoQuery) {
            return $criteria;
        }
        $query = new CorreoQuery(null, null, $modelAlias);

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
     * @return   Correo|Correo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CorreoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CorreoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Correo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCorreoId($key, $con = null)
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
     * @return                 Correo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `correo_id`, `correo_nombre` FROM `correo` WHERE `correo_id` = :p0';
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
            $obj = new Correo();
            $obj->hydrate($row);
            CorreoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Correo|Correo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Correo[]|mixed the list of results, formatted by the current formatter
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
     * @return CorreoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CorreoPeer::CORREO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CorreoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CorreoPeer::CORREO_ID, $keys, Criteria::IN);
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
     * @param     mixed $correoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CorreoQuery The current query, for fluid interface
     */
    public function filterByCorreoId($correoId = null, $comparison = null)
    {
        if (is_array($correoId)) {
            $useMinMax = false;
            if (isset($correoId['min'])) {
                $this->addUsingAlias(CorreoPeer::CORREO_ID, $correoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($correoId['max'])) {
                $this->addUsingAlias(CorreoPeer::CORREO_ID, $correoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CorreoPeer::CORREO_ID, $correoId, $comparison);
    }

    /**
     * Filter the query on the correo_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByCorreoNombre('fooValue');   // WHERE correo_nombre = 'fooValue'
     * $query->filterByCorreoNombre('%fooValue%'); // WHERE correo_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $correoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CorreoQuery The current query, for fluid interface
     */
    public function filterByCorreoNombre($correoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($correoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $correoNombre)) {
                $correoNombre = str_replace('*', '%', $correoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CorreoPeer::CORREO_NOMBRE, $correoNombre, $comparison);
    }

    /**
     * Filter the query by a related Vacantecorreo object
     *
     * @param   Vacantecorreo|PropelObjectCollection $vacantecorreo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CorreoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVacantecorreo($vacantecorreo, $comparison = null)
    {
        if ($vacantecorreo instanceof Vacantecorreo) {
            return $this
                ->addUsingAlias(CorreoPeer::CORREO_ID, $vacantecorreo->getCorreoId(), $comparison);
        } elseif ($vacantecorreo instanceof PropelObjectCollection) {
            return $this
                ->useVacantecorreoQuery()
                ->filterByPrimaryKeys($vacantecorreo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVacantecorreo() only accepts arguments of type Vacantecorreo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vacantecorreo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CorreoQuery The current query, for fluid interface
     */
    public function joinVacantecorreo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vacantecorreo');

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
            $this->addJoinObject($join, 'Vacantecorreo');
        }

        return $this;
    }

    /**
     * Use the Vacantecorreo relation Vacantecorreo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VacantecorreoQuery A secondary query class using the current class as primary query
     */
    public function useVacantecorreoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVacantecorreo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vacantecorreo', 'VacantecorreoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Correo $correo Object to remove from the list of results
     *
     * @return CorreoQuery The current query, for fluid interface
     */
    public function prune($correo = null)
    {
        if ($correo) {
            $this->addUsingAlias(CorreoPeer::CORREO_ID, $correo->getCorreoId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
