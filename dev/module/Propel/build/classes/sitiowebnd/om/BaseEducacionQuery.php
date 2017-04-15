<?php


/**
 * Base class that represents a query for the 'educacion' table.
 *
 *
 *
 * @method EducacionQuery orderByEducacionId($order = Criteria::ASC) Order by the educacion_id column
 * @method EducacionQuery orderByEducacionNombre($order = Criteria::ASC) Order by the educacion_nombre column
 *
 * @method EducacionQuery groupByEducacionId() Group by the educacion_id column
 * @method EducacionQuery groupByEducacionNombre() Group by the educacion_nombre column
 *
 * @method EducacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EducacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EducacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EducacionQuery leftJoinPostulante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Postulante relation
 * @method EducacionQuery rightJoinPostulante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Postulante relation
 * @method EducacionQuery innerJoinPostulante($relationAlias = null) Adds a INNER JOIN clause to the query using the Postulante relation
 *
 * @method Educacion findOne(PropelPDO $con = null) Return the first Educacion matching the query
 * @method Educacion findOneOrCreate(PropelPDO $con = null) Return the first Educacion matching the query, or a new Educacion object populated from the query conditions when no match is found
 *
 * @method Educacion findOneByEducacionNombre(string $educacion_nombre) Return the first Educacion filtered by the educacion_nombre column
 *
 * @method array findByEducacionId(int $educacion_id) Return Educacion objects filtered by the educacion_id column
 * @method array findByEducacionNombre(string $educacion_nombre) Return Educacion objects filtered by the educacion_nombre column
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseEducacionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEducacionQuery object.
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
            $modelName = 'Educacion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EducacionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EducacionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EducacionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EducacionQuery) {
            return $criteria;
        }
        $query = new EducacionQuery(null, null, $modelAlias);

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
     * @return   Educacion|Educacion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EducacionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EducacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Educacion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByEducacionId($key, $con = null)
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
     * @return                 Educacion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `educacion_id`, `educacion_nombre` FROM `educacion` WHERE `educacion_id` = :p0';
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
            $obj = new Educacion();
            $obj->hydrate($row);
            EducacionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Educacion|Educacion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Educacion[]|mixed the list of results, formatted by the current formatter
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
     * @return EducacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EducacionPeer::EDUCACION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EducacionPeer::EDUCACION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the educacion_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEducacionId(1234); // WHERE educacion_id = 1234
     * $query->filterByEducacionId(array(12, 34)); // WHERE educacion_id IN (12, 34)
     * $query->filterByEducacionId(array('min' => 12)); // WHERE educacion_id >= 12
     * $query->filterByEducacionId(array('max' => 12)); // WHERE educacion_id <= 12
     * </code>
     *
     * @param     mixed $educacionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function filterByEducacionId($educacionId = null, $comparison = null)
    {
        if (is_array($educacionId)) {
            $useMinMax = false;
            if (isset($educacionId['min'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_ID, $educacionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($educacionId['max'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_ID, $educacionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EducacionPeer::EDUCACION_ID, $educacionId, $comparison);
    }

    /**
     * Filter the query on the educacion_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEducacionNombre('fooValue');   // WHERE educacion_nombre = 'fooValue'
     * $query->filterByEducacionNombre('%fooValue%'); // WHERE educacion_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $educacionNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function filterByEducacionNombre($educacionNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($educacionNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $educacionNombre)) {
                $educacionNombre = str_replace('*', '%', $educacionNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EducacionPeer::EDUCACION_NOMBRE, $educacionNombre, $comparison);
    }

    /**
     * Filter the query by a related Postulante object
     *
     * @param   Postulante|PropelObjectCollection $postulante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EducacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPostulante($postulante, $comparison = null)
    {
        if ($postulante instanceof Postulante) {
            return $this
                ->addUsingAlias(EducacionPeer::EDUCACION_ID, $postulante->getEducacionId(), $comparison);
        } elseif ($postulante instanceof PropelObjectCollection) {
            return $this
                ->usePostulanteQuery()
                ->filterByPrimaryKeys($postulante->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPostulante() only accepts arguments of type Postulante or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Postulante relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function joinPostulante($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Postulante');

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
            $this->addJoinObject($join, 'Postulante');
        }

        return $this;
    }

    /**
     * Use the Postulante relation Postulante object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PostulanteQuery A secondary query class using the current class as primary query
     */
    public function usePostulanteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPostulante($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Postulante', 'PostulanteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Educacion $educacion Object to remove from the list of results
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function prune($educacion = null)
    {
        if ($educacion) {
            $this->addUsingAlias(EducacionPeer::EDUCACION_ID, $educacion->getEducacionId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}