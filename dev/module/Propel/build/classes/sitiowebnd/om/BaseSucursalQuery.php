<?php


/**
 * Base class that represents a query for the 'sucursal' table.
 *
 *
 *
 * @method SucursalQuery orderBySucursalId($order = Criteria::ASC) Order by the sucursal_id column
 * @method SucursalQuery orderByEmpresaId($order = Criteria::ASC) Order by the empresa_id column
 * @method SucursalQuery orderBySepomexId($order = Criteria::ASC) Order by the sepomex_id column
 * @method SucursalQuery orderBySucursalNombre($order = Criteria::ASC) Order by the sucursal_nombre column
 * @method SucursalQuery orderBySucursalCalleNumero($order = Criteria::ASC) Order by the sucursal_calle_numero column
 *
 * @method SucursalQuery groupBySucursalId() Group by the sucursal_id column
 * @method SucursalQuery groupByEmpresaId() Group by the empresa_id column
 * @method SucursalQuery groupBySepomexId() Group by the sepomex_id column
 * @method SucursalQuery groupBySucursalNombre() Group by the sucursal_nombre column
 * @method SucursalQuery groupBySucursalCalleNumero() Group by the sucursal_calle_numero column
 *
 * @method SucursalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SucursalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SucursalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SucursalQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method SucursalQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method SucursalQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method SucursalQuery leftJoinSepomex($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sepomex relation
 * @method SucursalQuery rightJoinSepomex($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sepomex relation
 * @method SucursalQuery innerJoinSepomex($relationAlias = null) Adds a INNER JOIN clause to the query using the Sepomex relation
 *
 * @method SucursalQuery leftJoinVacante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vacante relation
 * @method SucursalQuery rightJoinVacante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vacante relation
 * @method SucursalQuery innerJoinVacante($relationAlias = null) Adds a INNER JOIN clause to the query using the Vacante relation
 *
 * @method Sucursal findOne(PropelPDO $con = null) Return the first Sucursal matching the query
 * @method Sucursal findOneOrCreate(PropelPDO $con = null) Return the first Sucursal matching the query, or a new Sucursal object populated from the query conditions when no match is found
 *
 * @method Sucursal findOneByEmpresaId(int $empresa_id) Return the first Sucursal filtered by the empresa_id column
 * @method Sucursal findOneBySepomexId(int $sepomex_id) Return the first Sucursal filtered by the sepomex_id column
 * @method Sucursal findOneBySucursalNombre(string $sucursal_nombre) Return the first Sucursal filtered by the sucursal_nombre column
 * @method Sucursal findOneBySucursalCalleNumero(string $sucursal_calle_numero) Return the first Sucursal filtered by the sucursal_calle_numero column
 *
 * @method array findBySucursalId(int $sucursal_id) Return Sucursal objects filtered by the sucursal_id column
 * @method array findByEmpresaId(int $empresa_id) Return Sucursal objects filtered by the empresa_id column
 * @method array findBySepomexId(int $sepomex_id) Return Sucursal objects filtered by the sepomex_id column
 * @method array findBySucursalNombre(string $sucursal_nombre) Return Sucursal objects filtered by the sucursal_nombre column
 * @method array findBySucursalCalleNumero(string $sucursal_calle_numero) Return Sucursal objects filtered by the sucursal_calle_numero column
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseSucursalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSucursalQuery object.
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
            $modelName = 'Sucursal';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SucursalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SucursalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SucursalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SucursalQuery) {
            return $criteria;
        }
        $query = new SucursalQuery(null, null, $modelAlias);

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
     * @return   Sucursal|Sucursal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SucursalPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sucursal A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySucursalId($key, $con = null)
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
     * @return                 Sucursal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `sucursal_id`, `empresa_id`, `sepomex_id`, `sucursal_nombre`, `sucursal_calle_numero` FROM `sucursal` WHERE `sucursal_id` = :p0';
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
            $obj = new Sucursal();
            $obj->hydrate($row);
            SucursalPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sucursal|Sucursal[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sucursal[]|mixed the list of results, formatted by the current formatter
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
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the sucursal_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalId(1234); // WHERE sucursal_id = 1234
     * $query->filterBySucursalId(array(12, 34)); // WHERE sucursal_id IN (12, 34)
     * $query->filterBySucursalId(array('min' => 12)); // WHERE sucursal_id >= 12
     * $query->filterBySucursalId(array('max' => 12)); // WHERE sucursal_id <= 12
     * </code>
     *
     * @param     mixed $sucursalId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalId($sucursalId = null, $comparison = null)
    {
        if (is_array($sucursalId)) {
            $useMinMax = false;
            if (isset($sucursalId['min'])) {
                $this->addUsingAlias(SucursalPeer::SUCURSAL_ID, $sucursalId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalId['max'])) {
                $this->addUsingAlias(SucursalPeer::SUCURSAL_ID, $sucursalId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_ID, $sucursalId, $comparison);
    }

    /**
     * Filter the query on the empresa_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaId(1234); // WHERE empresa_id = 1234
     * $query->filterByEmpresaId(array(12, 34)); // WHERE empresa_id IN (12, 34)
     * $query->filterByEmpresaId(array('min' => 12)); // WHERE empresa_id >= 12
     * $query->filterByEmpresaId(array('max' => 12)); // WHERE empresa_id <= 12
     * </code>
     *
     * @see       filterByEmpresa()
     *
     * @param     mixed $empresaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByEmpresaId($empresaId = null, $comparison = null)
    {
        if (is_array($empresaId)) {
            $useMinMax = false;
            if (isset($empresaId['min'])) {
                $this->addUsingAlias(SucursalPeer::EMPRESA_ID, $empresaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresaId['max'])) {
                $this->addUsingAlias(SucursalPeer::EMPRESA_ID, $empresaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::EMPRESA_ID, $empresaId, $comparison);
    }

    /**
     * Filter the query on the sepomex_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexId(1234); // WHERE sepomex_id = 1234
     * $query->filterBySepomexId(array(12, 34)); // WHERE sepomex_id IN (12, 34)
     * $query->filterBySepomexId(array('min' => 12)); // WHERE sepomex_id >= 12
     * $query->filterBySepomexId(array('max' => 12)); // WHERE sepomex_id <= 12
     * </code>
     *
     * @see       filterBySepomex()
     *
     * @param     mixed $sepomexId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySepomexId($sepomexId = null, $comparison = null)
    {
        if (is_array($sepomexId)) {
            $useMinMax = false;
            if (isset($sepomexId['min'])) {
                $this->addUsingAlias(SucursalPeer::SEPOMEX_ID, $sepomexId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sepomexId['max'])) {
                $this->addUsingAlias(SucursalPeer::SEPOMEX_ID, $sepomexId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SEPOMEX_ID, $sepomexId, $comparison);
    }

    /**
     * Filter the query on the sucursal_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalNombre('fooValue');   // WHERE sucursal_nombre = 'fooValue'
     * $query->filterBySucursalNombre('%fooValue%'); // WHERE sucursal_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalNombre($sucursalNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalNombre)) {
                $sucursalNombre = str_replace('*', '%', $sucursalNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_NOMBRE, $sucursalNombre, $comparison);
    }

    /**
     * Filter the query on the sucursal_calle_numero column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalCalleNumero('fooValue');   // WHERE sucursal_calle_numero = 'fooValue'
     * $query->filterBySucursalCalleNumero('%fooValue%'); // WHERE sucursal_calle_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalCalleNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalCalleNumero($sucursalCalleNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalCalleNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalCalleNumero)) {
                $sucursalCalleNumero = str_replace('*', '%', $sucursalCalleNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_CALLE_NUMERO, $sucursalCalleNumero, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(SucursalPeer::EMPRESA_ID, $empresa->getEmpresaId(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SucursalPeer::EMPRESA_ID, $empresa->toKeyValue('PrimaryKey', 'EmpresaId'), $comparison);
        } else {
            throw new PropelException('filterByEmpresa() only accepts arguments of type Empresa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empresa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinEmpresa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empresa');

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
            $this->addJoinObject($join, 'Empresa');
        }

        return $this;
    }

    /**
     * Use the Empresa relation Empresa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpresaQuery A secondary query class using the current class as primary query
     */
    public function useEmpresaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpresa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empresa', 'EmpresaQuery');
    }

    /**
     * Filter the query by a related Sepomex object
     *
     * @param   Sepomex|PropelObjectCollection $sepomex The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySepomex($sepomex, $comparison = null)
    {
        if ($sepomex instanceof Sepomex) {
            return $this
                ->addUsingAlias(SucursalPeer::SEPOMEX_ID, $sepomex->getSepomexId(), $comparison);
        } elseif ($sepomex instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SucursalPeer::SEPOMEX_ID, $sepomex->toKeyValue('PrimaryKey', 'SepomexId'), $comparison);
        } else {
            throw new PropelException('filterBySepomex() only accepts arguments of type Sepomex or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sepomex relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinSepomex($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sepomex');

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
            $this->addJoinObject($join, 'Sepomex');
        }

        return $this;
    }

    /**
     * Use the Sepomex relation Sepomex object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SepomexQuery A secondary query class using the current class as primary query
     */
    public function useSepomexQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSepomex($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sepomex', 'SepomexQuery');
    }

    /**
     * Filter the query by a related Vacante object
     *
     * @param   Vacante|PropelObjectCollection $vacante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVacante($vacante, $comparison = null)
    {
        if ($vacante instanceof Vacante) {
            return $this
                ->addUsingAlias(SucursalPeer::SUCURSAL_ID, $vacante->getSucursalId(), $comparison);
        } elseif ($vacante instanceof PropelObjectCollection) {
            return $this
                ->useVacanteQuery()
                ->filterByPrimaryKeys($vacante->getPrimaryKeys())
                ->endUse();
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
     * @return SucursalQuery The current query, for fluid interface
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
     * @param   Sucursal $sucursal Object to remove from the list of results
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function prune($sucursal = null)
    {
        if ($sucursal) {
            $this->addUsingAlias(SucursalPeer::SUCURSAL_ID, $sucursal->getSucursalId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
