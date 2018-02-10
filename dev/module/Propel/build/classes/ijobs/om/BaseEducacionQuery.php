<?php


/**
 * Base class that represents a query for the 'educacion' table.
 *
 *
 *
 * @method EducacionQuery orderByEducacionId($order = Criteria::ASC) Order by the educacion_id column
 * @method EducacionQuery orderByEducacionNombre($order = Criteria::ASC) Order by the educacion_nombre column
 * @method EducacionQuery orderByEducacionDescripcion($order = Criteria::ASC) Order by the educacion_descripcion column
 * @method EducacionQuery orderByEducacionFechaAlta($order = Criteria::ASC) Order by the educacion_fecha_alta column
 * @method EducacionQuery orderByEducacionUsuarioAlta($order = Criteria::ASC) Order by the educacion_usuario_alta column
 * @method EducacionQuery orderByEducacionFechaModifica($order = Criteria::ASC) Order by the educacion_fecha_modifica column
 * @method EducacionQuery orderByEducacionUsuarioModifica($order = Criteria::ASC) Order by the educacion_usuario_modifica column
 *
 * @method EducacionQuery groupByEducacionId() Group by the educacion_id column
 * @method EducacionQuery groupByEducacionNombre() Group by the educacion_nombre column
 * @method EducacionQuery groupByEducacionDescripcion() Group by the educacion_descripcion column
 * @method EducacionQuery groupByEducacionFechaAlta() Group by the educacion_fecha_alta column
 * @method EducacionQuery groupByEducacionUsuarioAlta() Group by the educacion_usuario_alta column
 * @method EducacionQuery groupByEducacionFechaModifica() Group by the educacion_fecha_modifica column
 * @method EducacionQuery groupByEducacionUsuarioModifica() Group by the educacion_usuario_modifica column
 *
 * @method EducacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EducacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EducacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EducacionQuery leftJoinPostulantes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Postulantes relation
 * @method EducacionQuery rightJoinPostulantes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Postulantes relation
 * @method EducacionQuery innerJoinPostulantes($relationAlias = null) Adds a INNER JOIN clause to the query using the Postulantes relation
 *
 * @method Educacion findOne(PropelPDO $con = null) Return the first Educacion matching the query
 * @method Educacion findOneOrCreate(PropelPDO $con = null) Return the first Educacion matching the query, or a new Educacion object populated from the query conditions when no match is found
 *
 * @method Educacion findOneByEducacionNombre(string $educacion_nombre) Return the first Educacion filtered by the educacion_nombre column
 * @method Educacion findOneByEducacionDescripcion(string $educacion_descripcion) Return the first Educacion filtered by the educacion_descripcion column
 * @method Educacion findOneByEducacionFechaAlta(string $educacion_fecha_alta) Return the first Educacion filtered by the educacion_fecha_alta column
 * @method Educacion findOneByEducacionUsuarioAlta(int $educacion_usuario_alta) Return the first Educacion filtered by the educacion_usuario_alta column
 * @method Educacion findOneByEducacionFechaModifica(string $educacion_fecha_modifica) Return the first Educacion filtered by the educacion_fecha_modifica column
 * @method Educacion findOneByEducacionUsuarioModifica(int $educacion_usuario_modifica) Return the first Educacion filtered by the educacion_usuario_modifica column
 *
 * @method array findByEducacionId(int $educacion_id) Return Educacion objects filtered by the educacion_id column
 * @method array findByEducacionNombre(string $educacion_nombre) Return Educacion objects filtered by the educacion_nombre column
 * @method array findByEducacionDescripcion(string $educacion_descripcion) Return Educacion objects filtered by the educacion_descripcion column
 * @method array findByEducacionFechaAlta(string $educacion_fecha_alta) Return Educacion objects filtered by the educacion_fecha_alta column
 * @method array findByEducacionUsuarioAlta(int $educacion_usuario_alta) Return Educacion objects filtered by the educacion_usuario_alta column
 * @method array findByEducacionFechaModifica(string $educacion_fecha_modifica) Return Educacion objects filtered by the educacion_fecha_modifica column
 * @method array findByEducacionUsuarioModifica(int $educacion_usuario_modifica) Return Educacion objects filtered by the educacion_usuario_modifica column
 *
 * @package    propel.generator.ijobs.om
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
            $dbName = 'ijobs';
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
        $sql = 'SELECT `educacion_id`, `educacion_nombre`, `educacion_descripcion`, `educacion_fecha_alta`, `educacion_usuario_alta`, `educacion_fecha_modifica`, `educacion_usuario_modifica` FROM `educacion` WHERE `educacion_id` = :p0';
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
     * Filter the query on the educacion_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByEducacionDescripcion('fooValue');   // WHERE educacion_descripcion = 'fooValue'
     * $query->filterByEducacionDescripcion('%fooValue%'); // WHERE educacion_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $educacionDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function filterByEducacionDescripcion($educacionDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($educacionDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $educacionDescripcion)) {
                $educacionDescripcion = str_replace('*', '%', $educacionDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EducacionPeer::EDUCACION_DESCRIPCION, $educacionDescripcion, $comparison);
    }

    /**
     * Filter the query on the educacion_fecha_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByEducacionFechaAlta('2011-03-14'); // WHERE educacion_fecha_alta = '2011-03-14'
     * $query->filterByEducacionFechaAlta('now'); // WHERE educacion_fecha_alta = '2011-03-14'
     * $query->filterByEducacionFechaAlta(array('max' => 'yesterday')); // WHERE educacion_fecha_alta < '2011-03-13'
     * </code>
     *
     * @param     mixed $educacionFechaAlta The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function filterByEducacionFechaAlta($educacionFechaAlta = null, $comparison = null)
    {
        if (is_array($educacionFechaAlta)) {
            $useMinMax = false;
            if (isset($educacionFechaAlta['min'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_FECHA_ALTA, $educacionFechaAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($educacionFechaAlta['max'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_FECHA_ALTA, $educacionFechaAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EducacionPeer::EDUCACION_FECHA_ALTA, $educacionFechaAlta, $comparison);
    }

    /**
     * Filter the query on the educacion_usuario_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByEducacionUsuarioAlta(1234); // WHERE educacion_usuario_alta = 1234
     * $query->filterByEducacionUsuarioAlta(array(12, 34)); // WHERE educacion_usuario_alta IN (12, 34)
     * $query->filterByEducacionUsuarioAlta(array('min' => 12)); // WHERE educacion_usuario_alta >= 12
     * $query->filterByEducacionUsuarioAlta(array('max' => 12)); // WHERE educacion_usuario_alta <= 12
     * </code>
     *
     * @param     mixed $educacionUsuarioAlta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function filterByEducacionUsuarioAlta($educacionUsuarioAlta = null, $comparison = null)
    {
        if (is_array($educacionUsuarioAlta)) {
            $useMinMax = false;
            if (isset($educacionUsuarioAlta['min'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_USUARIO_ALTA, $educacionUsuarioAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($educacionUsuarioAlta['max'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_USUARIO_ALTA, $educacionUsuarioAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EducacionPeer::EDUCACION_USUARIO_ALTA, $educacionUsuarioAlta, $comparison);
    }

    /**
     * Filter the query on the educacion_fecha_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByEducacionFechaModifica('2011-03-14'); // WHERE educacion_fecha_modifica = '2011-03-14'
     * $query->filterByEducacionFechaModifica('now'); // WHERE educacion_fecha_modifica = '2011-03-14'
     * $query->filterByEducacionFechaModifica(array('max' => 'yesterday')); // WHERE educacion_fecha_modifica < '2011-03-13'
     * </code>
     *
     * @param     mixed $educacionFechaModifica The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function filterByEducacionFechaModifica($educacionFechaModifica = null, $comparison = null)
    {
        if (is_array($educacionFechaModifica)) {
            $useMinMax = false;
            if (isset($educacionFechaModifica['min'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_FECHA_MODIFICA, $educacionFechaModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($educacionFechaModifica['max'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_FECHA_MODIFICA, $educacionFechaModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EducacionPeer::EDUCACION_FECHA_MODIFICA, $educacionFechaModifica, $comparison);
    }

    /**
     * Filter the query on the educacion_usuario_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByEducacionUsuarioModifica(1234); // WHERE educacion_usuario_modifica = 1234
     * $query->filterByEducacionUsuarioModifica(array(12, 34)); // WHERE educacion_usuario_modifica IN (12, 34)
     * $query->filterByEducacionUsuarioModifica(array('min' => 12)); // WHERE educacion_usuario_modifica >= 12
     * $query->filterByEducacionUsuarioModifica(array('max' => 12)); // WHERE educacion_usuario_modifica <= 12
     * </code>
     *
     * @param     mixed $educacionUsuarioModifica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function filterByEducacionUsuarioModifica($educacionUsuarioModifica = null, $comparison = null)
    {
        if (is_array($educacionUsuarioModifica)) {
            $useMinMax = false;
            if (isset($educacionUsuarioModifica['min'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_USUARIO_MODIFICA, $educacionUsuarioModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($educacionUsuarioModifica['max'])) {
                $this->addUsingAlias(EducacionPeer::EDUCACION_USUARIO_MODIFICA, $educacionUsuarioModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EducacionPeer::EDUCACION_USUARIO_MODIFICA, $educacionUsuarioModifica, $comparison);
    }

    /**
     * Filter the query by a related Postulantes object
     *
     * @param   Postulantes|PropelObjectCollection $postulantes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EducacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPostulantes($postulantes, $comparison = null)
    {
        if ($postulantes instanceof Postulantes) {
            return $this
                ->addUsingAlias(EducacionPeer::EDUCACION_ID, $postulantes->getEducacionId(), $comparison);
        } elseif ($postulantes instanceof PropelObjectCollection) {
            return $this
                ->usePostulantesQuery()
                ->filterByPrimaryKeys($postulantes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPostulantes() only accepts arguments of type Postulantes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Postulantes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EducacionQuery The current query, for fluid interface
     */
    public function joinPostulantes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Postulantes');

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
            $this->addJoinObject($join, 'Postulantes');
        }

        return $this;
    }

    /**
     * Use the Postulantes relation Postulantes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PostulantesQuery A secondary query class using the current class as primary query
     */
    public function usePostulantesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPostulantes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Postulantes', 'PostulantesQuery');
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
