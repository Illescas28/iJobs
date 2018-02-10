<?php


/**
 * Base class that represents a query for the 'sucursales' table.
 *
 *
 *
 * @method SucursalesQuery orderBySucursalId($order = Criteria::ASC) Order by the sucursal_id column
 * @method SucursalesQuery orderByEmpresaId($order = Criteria::ASC) Order by the empresa_id column
 * @method SucursalesQuery orderBySepomexId($order = Criteria::ASC) Order by the sepomex_id column
 * @method SucursalesQuery orderBySucursalNombre($order = Criteria::ASC) Order by the sucursal_nombre column
 * @method SucursalesQuery orderBySucursalCalleNumero($order = Criteria::ASC) Order by the sucursal_calle_numero column
 * @method SucursalesQuery orderBySucursalFechaAlta($order = Criteria::ASC) Order by the sucursal_fecha_alta column
 * @method SucursalesQuery orderBySucursalUsuarioAlta($order = Criteria::ASC) Order by the sucursal_usuario_alta column
 * @method SucursalesQuery orderBySucursalFechaModifica($order = Criteria::ASC) Order by the sucursal_fecha_modifica column
 * @method SucursalesQuery orderBySucursalUsuarioModifica($order = Criteria::ASC) Order by the sucursal_usuario_modifica column
 *
 * @method SucursalesQuery groupBySucursalId() Group by the sucursal_id column
 * @method SucursalesQuery groupByEmpresaId() Group by the empresa_id column
 * @method SucursalesQuery groupBySepomexId() Group by the sepomex_id column
 * @method SucursalesQuery groupBySucursalNombre() Group by the sucursal_nombre column
 * @method SucursalesQuery groupBySucursalCalleNumero() Group by the sucursal_calle_numero column
 * @method SucursalesQuery groupBySucursalFechaAlta() Group by the sucursal_fecha_alta column
 * @method SucursalesQuery groupBySucursalUsuarioAlta() Group by the sucursal_usuario_alta column
 * @method SucursalesQuery groupBySucursalFechaModifica() Group by the sucursal_fecha_modifica column
 * @method SucursalesQuery groupBySucursalUsuarioModifica() Group by the sucursal_usuario_modifica column
 *
 * @method SucursalesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SucursalesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SucursalesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SucursalesQuery leftJoinEmpresas($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresas relation
 * @method SucursalesQuery rightJoinEmpresas($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresas relation
 * @method SucursalesQuery innerJoinEmpresas($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresas relation
 *
 * @method SucursalesQuery leftJoinSepomex($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sepomex relation
 * @method SucursalesQuery rightJoinSepomex($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sepomex relation
 * @method SucursalesQuery innerJoinSepomex($relationAlias = null) Adds a INNER JOIN clause to the query using the Sepomex relation
 *
 * @method SucursalesQuery leftJoinVacantes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vacantes relation
 * @method SucursalesQuery rightJoinVacantes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vacantes relation
 * @method SucursalesQuery innerJoinVacantes($relationAlias = null) Adds a INNER JOIN clause to the query using the Vacantes relation
 *
 * @method Sucursales findOne(PropelPDO $con = null) Return the first Sucursales matching the query
 * @method Sucursales findOneOrCreate(PropelPDO $con = null) Return the first Sucursales matching the query, or a new Sucursales object populated from the query conditions when no match is found
 *
 * @method Sucursales findOneByEmpresaId(int $empresa_id) Return the first Sucursales filtered by the empresa_id column
 * @method Sucursales findOneBySepomexId(int $sepomex_id) Return the first Sucursales filtered by the sepomex_id column
 * @method Sucursales findOneBySucursalNombre(string $sucursal_nombre) Return the first Sucursales filtered by the sucursal_nombre column
 * @method Sucursales findOneBySucursalCalleNumero(string $sucursal_calle_numero) Return the first Sucursales filtered by the sucursal_calle_numero column
 * @method Sucursales findOneBySucursalFechaAlta(string $sucursal_fecha_alta) Return the first Sucursales filtered by the sucursal_fecha_alta column
 * @method Sucursales findOneBySucursalUsuarioAlta(int $sucursal_usuario_alta) Return the first Sucursales filtered by the sucursal_usuario_alta column
 * @method Sucursales findOneBySucursalFechaModifica(string $sucursal_fecha_modifica) Return the first Sucursales filtered by the sucursal_fecha_modifica column
 * @method Sucursales findOneBySucursalUsuarioModifica(int $sucursal_usuario_modifica) Return the first Sucursales filtered by the sucursal_usuario_modifica column
 *
 * @method array findBySucursalId(int $sucursal_id) Return Sucursales objects filtered by the sucursal_id column
 * @method array findByEmpresaId(int $empresa_id) Return Sucursales objects filtered by the empresa_id column
 * @method array findBySepomexId(int $sepomex_id) Return Sucursales objects filtered by the sepomex_id column
 * @method array findBySucursalNombre(string $sucursal_nombre) Return Sucursales objects filtered by the sucursal_nombre column
 * @method array findBySucursalCalleNumero(string $sucursal_calle_numero) Return Sucursales objects filtered by the sucursal_calle_numero column
 * @method array findBySucursalFechaAlta(string $sucursal_fecha_alta) Return Sucursales objects filtered by the sucursal_fecha_alta column
 * @method array findBySucursalUsuarioAlta(int $sucursal_usuario_alta) Return Sucursales objects filtered by the sucursal_usuario_alta column
 * @method array findBySucursalFechaModifica(string $sucursal_fecha_modifica) Return Sucursales objects filtered by the sucursal_fecha_modifica column
 * @method array findBySucursalUsuarioModifica(int $sucursal_usuario_modifica) Return Sucursales objects filtered by the sucursal_usuario_modifica column
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseSucursalesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSucursalesQuery object.
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
            $modelName = 'Sucursales';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SucursalesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SucursalesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SucursalesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SucursalesQuery) {
            return $criteria;
        }
        $query = new SucursalesQuery(null, null, $modelAlias);

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
     * @return   Sucursales|Sucursales[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SucursalesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SucursalesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sucursales A model object, or null if the key is not found
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
     * @return                 Sucursales A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `sucursal_id`, `empresa_id`, `sepomex_id`, `sucursal_nombre`, `sucursal_calle_numero`, `sucursal_fecha_alta`, `sucursal_usuario_alta`, `sucursal_fecha_modifica`, `sucursal_usuario_modifica` FROM `sucursales` WHERE `sucursal_id` = :p0';
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
            $obj = new Sucursales();
            $obj->hydrate($row);
            SucursalesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sucursales|Sucursales[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sucursales[]|mixed the list of results, formatted by the current formatter
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
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SucursalesPeer::SUCURSAL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SucursalesPeer::SUCURSAL_ID, $keys, Criteria::IN);
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
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function filterBySucursalId($sucursalId = null, $comparison = null)
    {
        if (is_array($sucursalId)) {
            $useMinMax = false;
            if (isset($sucursalId['min'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_ID, $sucursalId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalId['max'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_ID, $sucursalId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalesPeer::SUCURSAL_ID, $sucursalId, $comparison);
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
     * @see       filterByEmpresas()
     *
     * @param     mixed $empresaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function filterByEmpresaId($empresaId = null, $comparison = null)
    {
        if (is_array($empresaId)) {
            $useMinMax = false;
            if (isset($empresaId['min'])) {
                $this->addUsingAlias(SucursalesPeer::EMPRESA_ID, $empresaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresaId['max'])) {
                $this->addUsingAlias(SucursalesPeer::EMPRESA_ID, $empresaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalesPeer::EMPRESA_ID, $empresaId, $comparison);
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
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function filterBySepomexId($sepomexId = null, $comparison = null)
    {
        if (is_array($sepomexId)) {
            $useMinMax = false;
            if (isset($sepomexId['min'])) {
                $this->addUsingAlias(SucursalesPeer::SEPOMEX_ID, $sepomexId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sepomexId['max'])) {
                $this->addUsingAlias(SucursalesPeer::SEPOMEX_ID, $sepomexId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalesPeer::SEPOMEX_ID, $sepomexId, $comparison);
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
     * @return SucursalesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SucursalesPeer::SUCURSAL_NOMBRE, $sucursalNombre, $comparison);
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
     * @return SucursalesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SucursalesPeer::SUCURSAL_CALLE_NUMERO, $sucursalCalleNumero, $comparison);
    }

    /**
     * Filter the query on the sucursal_fecha_alta column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalFechaAlta('2011-03-14'); // WHERE sucursal_fecha_alta = '2011-03-14'
     * $query->filterBySucursalFechaAlta('now'); // WHERE sucursal_fecha_alta = '2011-03-14'
     * $query->filterBySucursalFechaAlta(array('max' => 'yesterday')); // WHERE sucursal_fecha_alta < '2011-03-13'
     * </code>
     *
     * @param     mixed $sucursalFechaAlta The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function filterBySucursalFechaAlta($sucursalFechaAlta = null, $comparison = null)
    {
        if (is_array($sucursalFechaAlta)) {
            $useMinMax = false;
            if (isset($sucursalFechaAlta['min'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_FECHA_ALTA, $sucursalFechaAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalFechaAlta['max'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_FECHA_ALTA, $sucursalFechaAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalesPeer::SUCURSAL_FECHA_ALTA, $sucursalFechaAlta, $comparison);
    }

    /**
     * Filter the query on the sucursal_usuario_alta column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalUsuarioAlta(1234); // WHERE sucursal_usuario_alta = 1234
     * $query->filterBySucursalUsuarioAlta(array(12, 34)); // WHERE sucursal_usuario_alta IN (12, 34)
     * $query->filterBySucursalUsuarioAlta(array('min' => 12)); // WHERE sucursal_usuario_alta >= 12
     * $query->filterBySucursalUsuarioAlta(array('max' => 12)); // WHERE sucursal_usuario_alta <= 12
     * </code>
     *
     * @param     mixed $sucursalUsuarioAlta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function filterBySucursalUsuarioAlta($sucursalUsuarioAlta = null, $comparison = null)
    {
        if (is_array($sucursalUsuarioAlta)) {
            $useMinMax = false;
            if (isset($sucursalUsuarioAlta['min'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_USUARIO_ALTA, $sucursalUsuarioAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalUsuarioAlta['max'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_USUARIO_ALTA, $sucursalUsuarioAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalesPeer::SUCURSAL_USUARIO_ALTA, $sucursalUsuarioAlta, $comparison);
    }

    /**
     * Filter the query on the sucursal_fecha_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalFechaModifica('2011-03-14'); // WHERE sucursal_fecha_modifica = '2011-03-14'
     * $query->filterBySucursalFechaModifica('now'); // WHERE sucursal_fecha_modifica = '2011-03-14'
     * $query->filterBySucursalFechaModifica(array('max' => 'yesterday')); // WHERE sucursal_fecha_modifica < '2011-03-13'
     * </code>
     *
     * @param     mixed $sucursalFechaModifica The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function filterBySucursalFechaModifica($sucursalFechaModifica = null, $comparison = null)
    {
        if (is_array($sucursalFechaModifica)) {
            $useMinMax = false;
            if (isset($sucursalFechaModifica['min'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_FECHA_MODIFICA, $sucursalFechaModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalFechaModifica['max'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_FECHA_MODIFICA, $sucursalFechaModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalesPeer::SUCURSAL_FECHA_MODIFICA, $sucursalFechaModifica, $comparison);
    }

    /**
     * Filter the query on the sucursal_usuario_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalUsuarioModifica(1234); // WHERE sucursal_usuario_modifica = 1234
     * $query->filterBySucursalUsuarioModifica(array(12, 34)); // WHERE sucursal_usuario_modifica IN (12, 34)
     * $query->filterBySucursalUsuarioModifica(array('min' => 12)); // WHERE sucursal_usuario_modifica >= 12
     * $query->filterBySucursalUsuarioModifica(array('max' => 12)); // WHERE sucursal_usuario_modifica <= 12
     * </code>
     *
     * @param     mixed $sucursalUsuarioModifica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function filterBySucursalUsuarioModifica($sucursalUsuarioModifica = null, $comparison = null)
    {
        if (is_array($sucursalUsuarioModifica)) {
            $useMinMax = false;
            if (isset($sucursalUsuarioModifica['min'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_USUARIO_MODIFICA, $sucursalUsuarioModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalUsuarioModifica['max'])) {
                $this->addUsingAlias(SucursalesPeer::SUCURSAL_USUARIO_MODIFICA, $sucursalUsuarioModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalesPeer::SUCURSAL_USUARIO_MODIFICA, $sucursalUsuarioModifica, $comparison);
    }

    /**
     * Filter the query by a related Empresas object
     *
     * @param   Empresas|PropelObjectCollection $empresas The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresas($empresas, $comparison = null)
    {
        if ($empresas instanceof Empresas) {
            return $this
                ->addUsingAlias(SucursalesPeer::EMPRESA_ID, $empresas->getEmpresaId(), $comparison);
        } elseif ($empresas instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SucursalesPeer::EMPRESA_ID, $empresas->toKeyValue('PrimaryKey', 'EmpresaId'), $comparison);
        } else {
            throw new PropelException('filterByEmpresas() only accepts arguments of type Empresas or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empresas relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function joinEmpresas($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empresas');

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
            $this->addJoinObject($join, 'Empresas');
        }

        return $this;
    }

    /**
     * Use the Empresas relation Empresas object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpresasQuery A secondary query class using the current class as primary query
     */
    public function useEmpresasQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpresas($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empresas', 'EmpresasQuery');
    }

    /**
     * Filter the query by a related Sepomex object
     *
     * @param   Sepomex|PropelObjectCollection $sepomex The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySepomex($sepomex, $comparison = null)
    {
        if ($sepomex instanceof Sepomex) {
            return $this
                ->addUsingAlias(SucursalesPeer::SEPOMEX_ID, $sepomex->getSepomexId(), $comparison);
        } elseif ($sepomex instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SucursalesPeer::SEPOMEX_ID, $sepomex->toKeyValue('PrimaryKey', 'SepomexId'), $comparison);
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
     * @return SucursalesQuery The current query, for fluid interface
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
     * Filter the query by a related Vacantes object
     *
     * @param   Vacantes|PropelObjectCollection $vacantes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVacantes($vacantes, $comparison = null)
    {
        if ($vacantes instanceof Vacantes) {
            return $this
                ->addUsingAlias(SucursalesPeer::SUCURSAL_ID, $vacantes->getSucursalId(), $comparison);
        } elseif ($vacantes instanceof PropelObjectCollection) {
            return $this
                ->useVacantesQuery()
                ->filterByPrimaryKeys($vacantes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVacantes() only accepts arguments of type Vacantes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vacantes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function joinVacantes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vacantes');

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
            $this->addJoinObject($join, 'Vacantes');
        }

        return $this;
    }

    /**
     * Use the Vacantes relation Vacantes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VacantesQuery A secondary query class using the current class as primary query
     */
    public function useVacantesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVacantes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vacantes', 'VacantesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Sucursales $sucursales Object to remove from the list of results
     *
     * @return SucursalesQuery The current query, for fluid interface
     */
    public function prune($sucursales = null)
    {
        if ($sucursales) {
            $this->addUsingAlias(SucursalesPeer::SUCURSAL_ID, $sucursales->getSucursalId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
