<?php


/**
 * Base class that represents a query for the 'sepomex' table.
 *
 *
 *
 * @method SepomexQuery orderBySepomexId($order = Criteria::ASC) Order by the sepomex_id column
 * @method SepomexQuery orderBySepomexIdestado($order = Criteria::ASC) Order by the sepomex_idestado column
 * @method SepomexQuery orderBySepomexEstado($order = Criteria::ASC) Order by the sepomex_estado column
 * @method SepomexQuery orderBySepomexIdmunicipio($order = Criteria::ASC) Order by the sepomex_idmunicipio column
 * @method SepomexQuery orderBySepomexMunicipio($order = Criteria::ASC) Order by the sepomex_municipio column
 * @method SepomexQuery orderBySepomexCiudad($order = Criteria::ASC) Order by the sepomex_ciudad column
 * @method SepomexQuery orderBySepomexZona($order = Criteria::ASC) Order by the sepomex_zona column
 * @method SepomexQuery orderBySepomexCp($order = Criteria::ASC) Order by the sepomex_cp column
 * @method SepomexQuery orderBySepomexAsentamiento($order = Criteria::ASC) Order by the sepomex_asentamiento column
 * @method SepomexQuery orderBySepomexTipo($order = Criteria::ASC) Order by the sepomex_tipo column
 *
 * @method SepomexQuery groupBySepomexId() Group by the sepomex_id column
 * @method SepomexQuery groupBySepomexIdestado() Group by the sepomex_idestado column
 * @method SepomexQuery groupBySepomexEstado() Group by the sepomex_estado column
 * @method SepomexQuery groupBySepomexIdmunicipio() Group by the sepomex_idmunicipio column
 * @method SepomexQuery groupBySepomexMunicipio() Group by the sepomex_municipio column
 * @method SepomexQuery groupBySepomexCiudad() Group by the sepomex_ciudad column
 * @method SepomexQuery groupBySepomexZona() Group by the sepomex_zona column
 * @method SepomexQuery groupBySepomexCp() Group by the sepomex_cp column
 * @method SepomexQuery groupBySepomexAsentamiento() Group by the sepomex_asentamiento column
 * @method SepomexQuery groupBySepomexTipo() Group by the sepomex_tipo column
 *
 * @method SepomexQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SepomexQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SepomexQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SepomexQuery leftJoinSucursales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursales relation
 * @method SepomexQuery rightJoinSucursales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursales relation
 * @method SepomexQuery innerJoinSucursales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursales relation
 *
 * @method Sepomex findOne(PropelPDO $con = null) Return the first Sepomex matching the query
 * @method Sepomex findOneOrCreate(PropelPDO $con = null) Return the first Sepomex matching the query, or a new Sepomex object populated from the query conditions when no match is found
 *
 * @method Sepomex findOneBySepomexIdestado(int $sepomex_idestado) Return the first Sepomex filtered by the sepomex_idestado column
 * @method Sepomex findOneBySepomexEstado(string $sepomex_estado) Return the first Sepomex filtered by the sepomex_estado column
 * @method Sepomex findOneBySepomexIdmunicipio(int $sepomex_idmunicipio) Return the first Sepomex filtered by the sepomex_idmunicipio column
 * @method Sepomex findOneBySepomexMunicipio(string $sepomex_municipio) Return the first Sepomex filtered by the sepomex_municipio column
 * @method Sepomex findOneBySepomexCiudad(string $sepomex_ciudad) Return the first Sepomex filtered by the sepomex_ciudad column
 * @method Sepomex findOneBySepomexZona(string $sepomex_zona) Return the first Sepomex filtered by the sepomex_zona column
 * @method Sepomex findOneBySepomexCp(int $sepomex_cp) Return the first Sepomex filtered by the sepomex_cp column
 * @method Sepomex findOneBySepomexAsentamiento(string $sepomex_asentamiento) Return the first Sepomex filtered by the sepomex_asentamiento column
 * @method Sepomex findOneBySepomexTipo(string $sepomex_tipo) Return the first Sepomex filtered by the sepomex_tipo column
 *
 * @method array findBySepomexId(int $sepomex_id) Return Sepomex objects filtered by the sepomex_id column
 * @method array findBySepomexIdestado(int $sepomex_idestado) Return Sepomex objects filtered by the sepomex_idestado column
 * @method array findBySepomexEstado(string $sepomex_estado) Return Sepomex objects filtered by the sepomex_estado column
 * @method array findBySepomexIdmunicipio(int $sepomex_idmunicipio) Return Sepomex objects filtered by the sepomex_idmunicipio column
 * @method array findBySepomexMunicipio(string $sepomex_municipio) Return Sepomex objects filtered by the sepomex_municipio column
 * @method array findBySepomexCiudad(string $sepomex_ciudad) Return Sepomex objects filtered by the sepomex_ciudad column
 * @method array findBySepomexZona(string $sepomex_zona) Return Sepomex objects filtered by the sepomex_zona column
 * @method array findBySepomexCp(int $sepomex_cp) Return Sepomex objects filtered by the sepomex_cp column
 * @method array findBySepomexAsentamiento(string $sepomex_asentamiento) Return Sepomex objects filtered by the sepomex_asentamiento column
 * @method array findBySepomexTipo(string $sepomex_tipo) Return Sepomex objects filtered by the sepomex_tipo column
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseSepomexQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSepomexQuery object.
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
            $modelName = 'Sepomex';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SepomexQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SepomexQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SepomexQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SepomexQuery) {
            return $criteria;
        }
        $query = new SepomexQuery(null, null, $modelAlias);

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
     * @return   Sepomex|Sepomex[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SepomexPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SepomexPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sepomex A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySepomexId($key, $con = null)
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
     * @return                 Sepomex A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `sepomex_id`, `sepomex_idestado`, `sepomex_estado`, `sepomex_idmunicipio`, `sepomex_municipio`, `sepomex_ciudad`, `sepomex_zona`, `sepomex_cp`, `sepomex_asentamiento`, `sepomex_tipo` FROM `sepomex` WHERE `sepomex_id` = :p0';
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
            $obj = new Sepomex();
            $obj->hydrate($row);
            SepomexPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sepomex|Sepomex[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sepomex[]|mixed the list of results, formatted by the current formatter
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
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_ID, $keys, Criteria::IN);
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
     * @param     mixed $sepomexId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexId($sepomexId = null, $comparison = null)
    {
        if (is_array($sepomexId)) {
            $useMinMax = false;
            if (isset($sepomexId['min'])) {
                $this->addUsingAlias(SepomexPeer::SEPOMEX_ID, $sepomexId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sepomexId['max'])) {
                $this->addUsingAlias(SepomexPeer::SEPOMEX_ID, $sepomexId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_ID, $sepomexId, $comparison);
    }

    /**
     * Filter the query on the sepomex_idestado column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexIdestado(1234); // WHERE sepomex_idestado = 1234
     * $query->filterBySepomexIdestado(array(12, 34)); // WHERE sepomex_idestado IN (12, 34)
     * $query->filterBySepomexIdestado(array('min' => 12)); // WHERE sepomex_idestado >= 12
     * $query->filterBySepomexIdestado(array('max' => 12)); // WHERE sepomex_idestado <= 12
     * </code>
     *
     * @param     mixed $sepomexIdestado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexIdestado($sepomexIdestado = null, $comparison = null)
    {
        if (is_array($sepomexIdestado)) {
            $useMinMax = false;
            if (isset($sepomexIdestado['min'])) {
                $this->addUsingAlias(SepomexPeer::SEPOMEX_IDESTADO, $sepomexIdestado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sepomexIdestado['max'])) {
                $this->addUsingAlias(SepomexPeer::SEPOMEX_IDESTADO, $sepomexIdestado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_IDESTADO, $sepomexIdestado, $comparison);
    }

    /**
     * Filter the query on the sepomex_estado column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexEstado('fooValue');   // WHERE sepomex_estado = 'fooValue'
     * $query->filterBySepomexEstado('%fooValue%'); // WHERE sepomex_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sepomexEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexEstado($sepomexEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sepomexEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sepomexEstado)) {
                $sepomexEstado = str_replace('*', '%', $sepomexEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_ESTADO, $sepomexEstado, $comparison);
    }

    /**
     * Filter the query on the sepomex_idmunicipio column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexIdmunicipio(1234); // WHERE sepomex_idmunicipio = 1234
     * $query->filterBySepomexIdmunicipio(array(12, 34)); // WHERE sepomex_idmunicipio IN (12, 34)
     * $query->filterBySepomexIdmunicipio(array('min' => 12)); // WHERE sepomex_idmunicipio >= 12
     * $query->filterBySepomexIdmunicipio(array('max' => 12)); // WHERE sepomex_idmunicipio <= 12
     * </code>
     *
     * @param     mixed $sepomexIdmunicipio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexIdmunicipio($sepomexIdmunicipio = null, $comparison = null)
    {
        if (is_array($sepomexIdmunicipio)) {
            $useMinMax = false;
            if (isset($sepomexIdmunicipio['min'])) {
                $this->addUsingAlias(SepomexPeer::SEPOMEX_IDMUNICIPIO, $sepomexIdmunicipio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sepomexIdmunicipio['max'])) {
                $this->addUsingAlias(SepomexPeer::SEPOMEX_IDMUNICIPIO, $sepomexIdmunicipio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_IDMUNICIPIO, $sepomexIdmunicipio, $comparison);
    }

    /**
     * Filter the query on the sepomex_municipio column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexMunicipio('fooValue');   // WHERE sepomex_municipio = 'fooValue'
     * $query->filterBySepomexMunicipio('%fooValue%'); // WHERE sepomex_municipio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sepomexMunicipio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexMunicipio($sepomexMunicipio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sepomexMunicipio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sepomexMunicipio)) {
                $sepomexMunicipio = str_replace('*', '%', $sepomexMunicipio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_MUNICIPIO, $sepomexMunicipio, $comparison);
    }

    /**
     * Filter the query on the sepomex_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexCiudad('fooValue');   // WHERE sepomex_ciudad = 'fooValue'
     * $query->filterBySepomexCiudad('%fooValue%'); // WHERE sepomex_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sepomexCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexCiudad($sepomexCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sepomexCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sepomexCiudad)) {
                $sepomexCiudad = str_replace('*', '%', $sepomexCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_CIUDAD, $sepomexCiudad, $comparison);
    }

    /**
     * Filter the query on the sepomex_zona column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexZona('fooValue');   // WHERE sepomex_zona = 'fooValue'
     * $query->filterBySepomexZona('%fooValue%'); // WHERE sepomex_zona LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sepomexZona The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexZona($sepomexZona = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sepomexZona)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sepomexZona)) {
                $sepomexZona = str_replace('*', '%', $sepomexZona);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_ZONA, $sepomexZona, $comparison);
    }

    /**
     * Filter the query on the sepomex_cp column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexCp(1234); // WHERE sepomex_cp = 1234
     * $query->filterBySepomexCp(array(12, 34)); // WHERE sepomex_cp IN (12, 34)
     * $query->filterBySepomexCp(array('min' => 12)); // WHERE sepomex_cp >= 12
     * $query->filterBySepomexCp(array('max' => 12)); // WHERE sepomex_cp <= 12
     * </code>
     *
     * @param     mixed $sepomexCp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexCp($sepomexCp = null, $comparison = null)
    {
        if (is_array($sepomexCp)) {
            $useMinMax = false;
            if (isset($sepomexCp['min'])) {
                $this->addUsingAlias(SepomexPeer::SEPOMEX_CP, $sepomexCp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sepomexCp['max'])) {
                $this->addUsingAlias(SepomexPeer::SEPOMEX_CP, $sepomexCp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_CP, $sepomexCp, $comparison);
    }

    /**
     * Filter the query on the sepomex_asentamiento column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexAsentamiento('fooValue');   // WHERE sepomex_asentamiento = 'fooValue'
     * $query->filterBySepomexAsentamiento('%fooValue%'); // WHERE sepomex_asentamiento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sepomexAsentamiento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexAsentamiento($sepomexAsentamiento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sepomexAsentamiento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sepomexAsentamiento)) {
                $sepomexAsentamiento = str_replace('*', '%', $sepomexAsentamiento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_ASENTAMIENTO, $sepomexAsentamiento, $comparison);
    }

    /**
     * Filter the query on the sepomex_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterBySepomexTipo('fooValue');   // WHERE sepomex_tipo = 'fooValue'
     * $query->filterBySepomexTipo('%fooValue%'); // WHERE sepomex_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sepomexTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function filterBySepomexTipo($sepomexTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sepomexTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sepomexTipo)) {
                $sepomexTipo = str_replace('*', '%', $sepomexTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SepomexPeer::SEPOMEX_TIPO, $sepomexTipo, $comparison);
    }

    /**
     * Filter the query by a related Sucursales object
     *
     * @param   Sucursales|PropelObjectCollection $sucursales  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SepomexQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursales($sucursales, $comparison = null)
    {
        if ($sucursales instanceof Sucursales) {
            return $this
                ->addUsingAlias(SepomexPeer::SEPOMEX_ID, $sucursales->getSepomexId(), $comparison);
        } elseif ($sucursales instanceof PropelObjectCollection) {
            return $this
                ->useSucursalesQuery()
                ->filterByPrimaryKeys($sucursales->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySucursales() only accepts arguments of type Sucursales or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sucursales relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function joinSucursales($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sucursales');

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
            $this->addJoinObject($join, 'Sucursales');
        }

        return $this;
    }

    /**
     * Use the Sucursales relation Sucursales object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalesQuery A secondary query class using the current class as primary query
     */
    public function useSucursalesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSucursales($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursales', 'SucursalesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Sepomex $sepomex Object to remove from the list of results
     *
     * @return SepomexQuery The current query, for fluid interface
     */
    public function prune($sepomex = null)
    {
        if ($sepomex) {
            $this->addUsingAlias(SepomexPeer::SEPOMEX_ID, $sepomex->getSepomexId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
