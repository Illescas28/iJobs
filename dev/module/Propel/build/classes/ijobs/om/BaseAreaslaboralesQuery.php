<?php


/**
 * Base class that represents a query for the 'areaslaborales' table.
 *
 *
 *
 * @method AreaslaboralesQuery orderByArealaboralId($order = Criteria::ASC) Order by the arealaboral_id column
 * @method AreaslaboralesQuery orderByArealaboralClave($order = Criteria::ASC) Order by the arealaboral_clave column
 * @method AreaslaboralesQuery orderByArealaboralNombre($order = Criteria::ASC) Order by the arealaboral_nombre column
 * @method AreaslaboralesQuery orderByArealaboralFechaAlta($order = Criteria::ASC) Order by the arealaboral_fecha_alta column
 * @method AreaslaboralesQuery orderByArealaboralUsuarioAlta($order = Criteria::ASC) Order by the arealaboral_usuario_alta column
 * @method AreaslaboralesQuery orderByArealaboralFechaModifica($order = Criteria::ASC) Order by the arealaboral_fecha_modifica column
 * @method AreaslaboralesQuery orderByArealaboralUsuarioModifica($order = Criteria::ASC) Order by the arealaboral_usuario_modifica column
 *
 * @method AreaslaboralesQuery groupByArealaboralId() Group by the arealaboral_id column
 * @method AreaslaboralesQuery groupByArealaboralClave() Group by the arealaboral_clave column
 * @method AreaslaboralesQuery groupByArealaboralNombre() Group by the arealaboral_nombre column
 * @method AreaslaboralesQuery groupByArealaboralFechaAlta() Group by the arealaboral_fecha_alta column
 * @method AreaslaboralesQuery groupByArealaboralUsuarioAlta() Group by the arealaboral_usuario_alta column
 * @method AreaslaboralesQuery groupByArealaboralFechaModifica() Group by the arealaboral_fecha_modifica column
 * @method AreaslaboralesQuery groupByArealaboralUsuarioModifica() Group by the arealaboral_usuario_modifica column
 *
 * @method AreaslaboralesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AreaslaboralesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AreaslaboralesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AreaslaboralesQuery leftJoinPostulantes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Postulantes relation
 * @method AreaslaboralesQuery rightJoinPostulantes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Postulantes relation
 * @method AreaslaboralesQuery innerJoinPostulantes($relationAlias = null) Adds a INNER JOIN clause to the query using the Postulantes relation
 *
 * @method Areaslaborales findOne(PropelPDO $con = null) Return the first Areaslaborales matching the query
 * @method Areaslaborales findOneOrCreate(PropelPDO $con = null) Return the first Areaslaborales matching the query, or a new Areaslaborales object populated from the query conditions when no match is found
 *
 * @method Areaslaborales findOneByArealaboralClave(string $arealaboral_clave) Return the first Areaslaborales filtered by the arealaboral_clave column
 * @method Areaslaborales findOneByArealaboralNombre(string $arealaboral_nombre) Return the first Areaslaborales filtered by the arealaboral_nombre column
 * @method Areaslaborales findOneByArealaboralFechaAlta(string $arealaboral_fecha_alta) Return the first Areaslaborales filtered by the arealaboral_fecha_alta column
 * @method Areaslaborales findOneByArealaboralUsuarioAlta(int $arealaboral_usuario_alta) Return the first Areaslaborales filtered by the arealaboral_usuario_alta column
 * @method Areaslaborales findOneByArealaboralFechaModifica(string $arealaboral_fecha_modifica) Return the first Areaslaborales filtered by the arealaboral_fecha_modifica column
 * @method Areaslaborales findOneByArealaboralUsuarioModifica(int $arealaboral_usuario_modifica) Return the first Areaslaborales filtered by the arealaboral_usuario_modifica column
 *
 * @method array findByArealaboralId(int $arealaboral_id) Return Areaslaborales objects filtered by the arealaboral_id column
 * @method array findByArealaboralClave(string $arealaboral_clave) Return Areaslaborales objects filtered by the arealaboral_clave column
 * @method array findByArealaboralNombre(string $arealaboral_nombre) Return Areaslaborales objects filtered by the arealaboral_nombre column
 * @method array findByArealaboralFechaAlta(string $arealaboral_fecha_alta) Return Areaslaborales objects filtered by the arealaboral_fecha_alta column
 * @method array findByArealaboralUsuarioAlta(int $arealaboral_usuario_alta) Return Areaslaborales objects filtered by the arealaboral_usuario_alta column
 * @method array findByArealaboralFechaModifica(string $arealaboral_fecha_modifica) Return Areaslaborales objects filtered by the arealaboral_fecha_modifica column
 * @method array findByArealaboralUsuarioModifica(int $arealaboral_usuario_modifica) Return Areaslaborales objects filtered by the arealaboral_usuario_modifica column
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseAreaslaboralesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAreaslaboralesQuery object.
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
            $modelName = 'Areaslaborales';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AreaslaboralesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AreaslaboralesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AreaslaboralesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AreaslaboralesQuery) {
            return $criteria;
        }
        $query = new AreaslaboralesQuery(null, null, $modelAlias);

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
     * @return   Areaslaborales|Areaslaborales[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AreaslaboralesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AreaslaboralesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Areaslaborales A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByArealaboralId($key, $con = null)
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
     * @return                 Areaslaborales A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `arealaboral_id`, `arealaboral_clave`, `arealaboral_nombre`, `arealaboral_fecha_alta`, `arealaboral_usuario_alta`, `arealaboral_fecha_modifica`, `arealaboral_usuario_modifica` FROM `areaslaborales` WHERE `arealaboral_id` = :p0';
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
            $obj = new Areaslaborales();
            $obj->hydrate($row);
            AreaslaboralesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Areaslaborales|Areaslaborales[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Areaslaborales[]|mixed the list of results, formatted by the current formatter
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
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the arealaboral_id column
     *
     * Example usage:
     * <code>
     * $query->filterByArealaboralId(1234); // WHERE arealaboral_id = 1234
     * $query->filterByArealaboralId(array(12, 34)); // WHERE arealaboral_id IN (12, 34)
     * $query->filterByArealaboralId(array('min' => 12)); // WHERE arealaboral_id >= 12
     * $query->filterByArealaboralId(array('max' => 12)); // WHERE arealaboral_id <= 12
     * </code>
     *
     * @param     mixed $arealaboralId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function filterByArealaboralId($arealaboralId = null, $comparison = null)
    {
        if (is_array($arealaboralId)) {
            $useMinMax = false;
            if (isset($arealaboralId['min'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_ID, $arealaboralId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arealaboralId['max'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_ID, $arealaboralId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_ID, $arealaboralId, $comparison);
    }

    /**
     * Filter the query on the arealaboral_clave column
     *
     * Example usage:
     * <code>
     * $query->filterByArealaboralClave('fooValue');   // WHERE arealaboral_clave = 'fooValue'
     * $query->filterByArealaboralClave('%fooValue%'); // WHERE arealaboral_clave LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arealaboralClave The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function filterByArealaboralClave($arealaboralClave = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arealaboralClave)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $arealaboralClave)) {
                $arealaboralClave = str_replace('*', '%', $arealaboralClave);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_CLAVE, $arealaboralClave, $comparison);
    }

    /**
     * Filter the query on the arealaboral_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByArealaboralNombre('fooValue');   // WHERE arealaboral_nombre = 'fooValue'
     * $query->filterByArealaboralNombre('%fooValue%'); // WHERE arealaboral_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arealaboralNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function filterByArealaboralNombre($arealaboralNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arealaboralNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $arealaboralNombre)) {
                $arealaboralNombre = str_replace('*', '%', $arealaboralNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_NOMBRE, $arealaboralNombre, $comparison);
    }

    /**
     * Filter the query on the arealaboral_fecha_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByArealaboralFechaAlta('2011-03-14'); // WHERE arealaboral_fecha_alta = '2011-03-14'
     * $query->filterByArealaboralFechaAlta('now'); // WHERE arealaboral_fecha_alta = '2011-03-14'
     * $query->filterByArealaboralFechaAlta(array('max' => 'yesterday')); // WHERE arealaboral_fecha_alta < '2011-03-13'
     * </code>
     *
     * @param     mixed $arealaboralFechaAlta The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function filterByArealaboralFechaAlta($arealaboralFechaAlta = null, $comparison = null)
    {
        if (is_array($arealaboralFechaAlta)) {
            $useMinMax = false;
            if (isset($arealaboralFechaAlta['min'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_FECHA_ALTA, $arealaboralFechaAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arealaboralFechaAlta['max'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_FECHA_ALTA, $arealaboralFechaAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_FECHA_ALTA, $arealaboralFechaAlta, $comparison);
    }

    /**
     * Filter the query on the arealaboral_usuario_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByArealaboralUsuarioAlta(1234); // WHERE arealaboral_usuario_alta = 1234
     * $query->filterByArealaboralUsuarioAlta(array(12, 34)); // WHERE arealaboral_usuario_alta IN (12, 34)
     * $query->filterByArealaboralUsuarioAlta(array('min' => 12)); // WHERE arealaboral_usuario_alta >= 12
     * $query->filterByArealaboralUsuarioAlta(array('max' => 12)); // WHERE arealaboral_usuario_alta <= 12
     * </code>
     *
     * @param     mixed $arealaboralUsuarioAlta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function filterByArealaboralUsuarioAlta($arealaboralUsuarioAlta = null, $comparison = null)
    {
        if (is_array($arealaboralUsuarioAlta)) {
            $useMinMax = false;
            if (isset($arealaboralUsuarioAlta['min'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_USUARIO_ALTA, $arealaboralUsuarioAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arealaboralUsuarioAlta['max'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_USUARIO_ALTA, $arealaboralUsuarioAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_USUARIO_ALTA, $arealaboralUsuarioAlta, $comparison);
    }

    /**
     * Filter the query on the arealaboral_fecha_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByArealaboralFechaModifica('2011-03-14'); // WHERE arealaboral_fecha_modifica = '2011-03-14'
     * $query->filterByArealaboralFechaModifica('now'); // WHERE arealaboral_fecha_modifica = '2011-03-14'
     * $query->filterByArealaboralFechaModifica(array('max' => 'yesterday')); // WHERE arealaboral_fecha_modifica < '2011-03-13'
     * </code>
     *
     * @param     mixed $arealaboralFechaModifica The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function filterByArealaboralFechaModifica($arealaboralFechaModifica = null, $comparison = null)
    {
        if (is_array($arealaboralFechaModifica)) {
            $useMinMax = false;
            if (isset($arealaboralFechaModifica['min'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_FECHA_MODIFICA, $arealaboralFechaModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arealaboralFechaModifica['max'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_FECHA_MODIFICA, $arealaboralFechaModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_FECHA_MODIFICA, $arealaboralFechaModifica, $comparison);
    }

    /**
     * Filter the query on the arealaboral_usuario_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByArealaboralUsuarioModifica(1234); // WHERE arealaboral_usuario_modifica = 1234
     * $query->filterByArealaboralUsuarioModifica(array(12, 34)); // WHERE arealaboral_usuario_modifica IN (12, 34)
     * $query->filterByArealaboralUsuarioModifica(array('min' => 12)); // WHERE arealaboral_usuario_modifica >= 12
     * $query->filterByArealaboralUsuarioModifica(array('max' => 12)); // WHERE arealaboral_usuario_modifica <= 12
     * </code>
     *
     * @param     mixed $arealaboralUsuarioModifica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function filterByArealaboralUsuarioModifica($arealaboralUsuarioModifica = null, $comparison = null)
    {
        if (is_array($arealaboralUsuarioModifica)) {
            $useMinMax = false;
            if (isset($arealaboralUsuarioModifica['min'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_USUARIO_MODIFICA, $arealaboralUsuarioModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arealaboralUsuarioModifica['max'])) {
                $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_USUARIO_MODIFICA, $arealaboralUsuarioModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_USUARIO_MODIFICA, $arealaboralUsuarioModifica, $comparison);
    }

    /**
     * Filter the query by a related Postulantes object
     *
     * @param   Postulantes|PropelObjectCollection $postulantes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AreaslaboralesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPostulantes($postulantes, $comparison = null)
    {
        if ($postulantes instanceof Postulantes) {
            return $this
                ->addUsingAlias(AreaslaboralesPeer::AREALABORAL_ID, $postulantes->getArealaboralId(), $comparison);
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
     * @return AreaslaboralesQuery The current query, for fluid interface
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
     * @param   Areaslaborales $areaslaborales Object to remove from the list of results
     *
     * @return AreaslaboralesQuery The current query, for fluid interface
     */
    public function prune($areaslaborales = null)
    {
        if ($areaslaborales) {
            $this->addUsingAlias(AreaslaboralesPeer::AREALABORAL_ID, $areaslaborales->getArealaboralId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
