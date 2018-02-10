<?php


/**
 * Base class that represents a query for the 'empresas' table.
 *
 *
 *
 * @method EmpresasQuery orderByEmpresaId($order = Criteria::ASC) Order by the empresa_id column
 * @method EmpresasQuery orderByEmpresaNombre($order = Criteria::ASC) Order by the empresa_nombre column
 * @method EmpresasQuery orderByEmpresaLogoUrl($order = Criteria::ASC) Order by the empresa_logo_url column
 * @method EmpresasQuery orderByEmpresasRazonSocial($order = Criteria::ASC) Order by the empresas_razon_social column
 * @method EmpresasQuery orderByEmpresaRfc($order = Criteria::ASC) Order by the empresa_rfc column
 * @method EmpresasQuery orderByEmpresaDireccionFiscal($order = Criteria::ASC) Order by the empresa_direccion_fiscal column
 * @method EmpresasQuery orderByEmpresaEstatus($order = Criteria::ASC) Order by the empresa_estatus column
 * @method EmpresasQuery orderByEmpresaFechaAlta($order = Criteria::ASC) Order by the empresa_fecha_alta column
 * @method EmpresasQuery orderByEmpresaUsuarioAlta($order = Criteria::ASC) Order by the empresa_usuario_alta column
 * @method EmpresasQuery orderByEmpresaFechaActualiza($order = Criteria::ASC) Order by the empresa_fecha_actualiza column
 * @method EmpresasQuery orderByEmpresaUsuarioModifica($order = Criteria::ASC) Order by the empresa_usuario_modifica column
 *
 * @method EmpresasQuery groupByEmpresaId() Group by the empresa_id column
 * @method EmpresasQuery groupByEmpresaNombre() Group by the empresa_nombre column
 * @method EmpresasQuery groupByEmpresaLogoUrl() Group by the empresa_logo_url column
 * @method EmpresasQuery groupByEmpresasRazonSocial() Group by the empresas_razon_social column
 * @method EmpresasQuery groupByEmpresaRfc() Group by the empresa_rfc column
 * @method EmpresasQuery groupByEmpresaDireccionFiscal() Group by the empresa_direccion_fiscal column
 * @method EmpresasQuery groupByEmpresaEstatus() Group by the empresa_estatus column
 * @method EmpresasQuery groupByEmpresaFechaAlta() Group by the empresa_fecha_alta column
 * @method EmpresasQuery groupByEmpresaUsuarioAlta() Group by the empresa_usuario_alta column
 * @method EmpresasQuery groupByEmpresaFechaActualiza() Group by the empresa_fecha_actualiza column
 * @method EmpresasQuery groupByEmpresaUsuarioModifica() Group by the empresa_usuario_modifica column
 *
 * @method EmpresasQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpresasQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpresasQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpresasQuery leftJoinEmpresacontactos($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresacontactos relation
 * @method EmpresasQuery rightJoinEmpresacontactos($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresacontactos relation
 * @method EmpresasQuery innerJoinEmpresacontactos($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresacontactos relation
 *
 * @method EmpresasQuery leftJoinSucursales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursales relation
 * @method EmpresasQuery rightJoinSucursales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursales relation
 * @method EmpresasQuery innerJoinSucursales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursales relation
 *
 * @method EmpresasQuery leftJoinUsuarios($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuarios relation
 * @method EmpresasQuery rightJoinUsuarios($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuarios relation
 * @method EmpresasQuery innerJoinUsuarios($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuarios relation
 *
 * @method Empresas findOne(PropelPDO $con = null) Return the first Empresas matching the query
 * @method Empresas findOneOrCreate(PropelPDO $con = null) Return the first Empresas matching the query, or a new Empresas object populated from the query conditions when no match is found
 *
 * @method Empresas findOneByEmpresaNombre(string $empresa_nombre) Return the first Empresas filtered by the empresa_nombre column
 * @method Empresas findOneByEmpresaLogoUrl(string $empresa_logo_url) Return the first Empresas filtered by the empresa_logo_url column
 * @method Empresas findOneByEmpresasRazonSocial(string $empresas_razon_social) Return the first Empresas filtered by the empresas_razon_social column
 * @method Empresas findOneByEmpresaRfc(string $empresa_rfc) Return the first Empresas filtered by the empresa_rfc column
 * @method Empresas findOneByEmpresaDireccionFiscal(string $empresa_direccion_fiscal) Return the first Empresas filtered by the empresa_direccion_fiscal column
 * @method Empresas findOneByEmpresaEstatus(boolean $empresa_estatus) Return the first Empresas filtered by the empresa_estatus column
 * @method Empresas findOneByEmpresaFechaAlta(string $empresa_fecha_alta) Return the first Empresas filtered by the empresa_fecha_alta column
 * @method Empresas findOneByEmpresaUsuarioAlta(int $empresa_usuario_alta) Return the first Empresas filtered by the empresa_usuario_alta column
 * @method Empresas findOneByEmpresaFechaActualiza(string $empresa_fecha_actualiza) Return the first Empresas filtered by the empresa_fecha_actualiza column
 * @method Empresas findOneByEmpresaUsuarioModifica(int $empresa_usuario_modifica) Return the first Empresas filtered by the empresa_usuario_modifica column
 *
 * @method array findByEmpresaId(int $empresa_id) Return Empresas objects filtered by the empresa_id column
 * @method array findByEmpresaNombre(string $empresa_nombre) Return Empresas objects filtered by the empresa_nombre column
 * @method array findByEmpresaLogoUrl(string $empresa_logo_url) Return Empresas objects filtered by the empresa_logo_url column
 * @method array findByEmpresasRazonSocial(string $empresas_razon_social) Return Empresas objects filtered by the empresas_razon_social column
 * @method array findByEmpresaRfc(string $empresa_rfc) Return Empresas objects filtered by the empresa_rfc column
 * @method array findByEmpresaDireccionFiscal(string $empresa_direccion_fiscal) Return Empresas objects filtered by the empresa_direccion_fiscal column
 * @method array findByEmpresaEstatus(boolean $empresa_estatus) Return Empresas objects filtered by the empresa_estatus column
 * @method array findByEmpresaFechaAlta(string $empresa_fecha_alta) Return Empresas objects filtered by the empresa_fecha_alta column
 * @method array findByEmpresaUsuarioAlta(int $empresa_usuario_alta) Return Empresas objects filtered by the empresa_usuario_alta column
 * @method array findByEmpresaFechaActualiza(string $empresa_fecha_actualiza) Return Empresas objects filtered by the empresa_fecha_actualiza column
 * @method array findByEmpresaUsuarioModifica(int $empresa_usuario_modifica) Return Empresas objects filtered by the empresa_usuario_modifica column
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseEmpresasQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpresasQuery object.
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
            $modelName = 'Empresas';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpresasQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpresasQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpresasQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpresasQuery) {
            return $criteria;
        }
        $query = new EmpresasQuery(null, null, $modelAlias);

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
     * @return   Empresas|Empresas[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpresasPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpresasPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empresas A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByEmpresaId($key, $con = null)
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
     * @return                 Empresas A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `empresa_id`, `empresa_nombre`, `empresa_logo_url`, `empresas_razon_social`, `empresa_rfc`, `empresa_direccion_fiscal`, `empresa_estatus`, `empresa_fecha_alta`, `empresa_usuario_alta`, `empresa_fecha_actualiza`, `empresa_usuario_modifica` FROM `empresas` WHERE `empresa_id` = :p0';
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
            $obj = new Empresas();
            $obj->hydrate($row);
            EmpresasPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empresas|Empresas[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empresas[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_ID, $keys, Criteria::IN);
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
     * @param     mixed $empresaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaId($empresaId = null, $comparison = null)
    {
        if (is_array($empresaId)) {
            $useMinMax = false;
            if (isset($empresaId['min'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_ID, $empresaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresaId['max'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_ID, $empresaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_ID, $empresaId, $comparison);
    }

    /**
     * Filter the query on the empresa_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaNombre('fooValue');   // WHERE empresa_nombre = 'fooValue'
     * $query->filterByEmpresaNombre('%fooValue%'); // WHERE empresa_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaNombre($empresaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresaNombre)) {
                $empresaNombre = str_replace('*', '%', $empresaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_NOMBRE, $empresaNombre, $comparison);
    }

    /**
     * Filter the query on the empresa_logo_url column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaLogoUrl('fooValue');   // WHERE empresa_logo_url = 'fooValue'
     * $query->filterByEmpresaLogoUrl('%fooValue%'); // WHERE empresa_logo_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresaLogoUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaLogoUrl($empresaLogoUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresaLogoUrl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresaLogoUrl)) {
                $empresaLogoUrl = str_replace('*', '%', $empresaLogoUrl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_LOGO_URL, $empresaLogoUrl, $comparison);
    }

    /**
     * Filter the query on the empresas_razon_social column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresasRazonSocial('fooValue');   // WHERE empresas_razon_social = 'fooValue'
     * $query->filterByEmpresasRazonSocial('%fooValue%'); // WHERE empresas_razon_social LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresasRazonSocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresasRazonSocial($empresasRazonSocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresasRazonSocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresasRazonSocial)) {
                $empresasRazonSocial = str_replace('*', '%', $empresasRazonSocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESAS_RAZON_SOCIAL, $empresasRazonSocial, $comparison);
    }

    /**
     * Filter the query on the empresa_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaRfc('fooValue');   // WHERE empresa_rfc = 'fooValue'
     * $query->filterByEmpresaRfc('%fooValue%'); // WHERE empresa_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresaRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaRfc($empresaRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresaRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresaRfc)) {
                $empresaRfc = str_replace('*', '%', $empresaRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_RFC, $empresaRfc, $comparison);
    }

    /**
     * Filter the query on the empresa_direccion_fiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaDireccionFiscal('fooValue');   // WHERE empresa_direccion_fiscal = 'fooValue'
     * $query->filterByEmpresaDireccionFiscal('%fooValue%'); // WHERE empresa_direccion_fiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresaDireccionFiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaDireccionFiscal($empresaDireccionFiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresaDireccionFiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresaDireccionFiscal)) {
                $empresaDireccionFiscal = str_replace('*', '%', $empresaDireccionFiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_DIRECCION_FISCAL, $empresaDireccionFiscal, $comparison);
    }

    /**
     * Filter the query on the empresa_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaEstatus(true); // WHERE empresa_estatus = true
     * $query->filterByEmpresaEstatus('yes'); // WHERE empresa_estatus = true
     * </code>
     *
     * @param     boolean|string $empresaEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaEstatus($empresaEstatus = null, $comparison = null)
    {
        if (is_string($empresaEstatus)) {
            $empresaEstatus = in_array(strtolower($empresaEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_ESTATUS, $empresaEstatus, $comparison);
    }

    /**
     * Filter the query on the empresa_fecha_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaFechaAlta('2011-03-14'); // WHERE empresa_fecha_alta = '2011-03-14'
     * $query->filterByEmpresaFechaAlta('now'); // WHERE empresa_fecha_alta = '2011-03-14'
     * $query->filterByEmpresaFechaAlta(array('max' => 'yesterday')); // WHERE empresa_fecha_alta < '2011-03-13'
     * </code>
     *
     * @param     mixed $empresaFechaAlta The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaFechaAlta($empresaFechaAlta = null, $comparison = null)
    {
        if (is_array($empresaFechaAlta)) {
            $useMinMax = false;
            if (isset($empresaFechaAlta['min'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_FECHA_ALTA, $empresaFechaAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresaFechaAlta['max'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_FECHA_ALTA, $empresaFechaAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_FECHA_ALTA, $empresaFechaAlta, $comparison);
    }

    /**
     * Filter the query on the empresa_usuario_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaUsuarioAlta(1234); // WHERE empresa_usuario_alta = 1234
     * $query->filterByEmpresaUsuarioAlta(array(12, 34)); // WHERE empresa_usuario_alta IN (12, 34)
     * $query->filterByEmpresaUsuarioAlta(array('min' => 12)); // WHERE empresa_usuario_alta >= 12
     * $query->filterByEmpresaUsuarioAlta(array('max' => 12)); // WHERE empresa_usuario_alta <= 12
     * </code>
     *
     * @param     mixed $empresaUsuarioAlta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaUsuarioAlta($empresaUsuarioAlta = null, $comparison = null)
    {
        if (is_array($empresaUsuarioAlta)) {
            $useMinMax = false;
            if (isset($empresaUsuarioAlta['min'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_USUARIO_ALTA, $empresaUsuarioAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresaUsuarioAlta['max'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_USUARIO_ALTA, $empresaUsuarioAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_USUARIO_ALTA, $empresaUsuarioAlta, $comparison);
    }

    /**
     * Filter the query on the empresa_fecha_actualiza column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaFechaActualiza('2011-03-14'); // WHERE empresa_fecha_actualiza = '2011-03-14'
     * $query->filterByEmpresaFechaActualiza('now'); // WHERE empresa_fecha_actualiza = '2011-03-14'
     * $query->filterByEmpresaFechaActualiza(array('max' => 'yesterday')); // WHERE empresa_fecha_actualiza < '2011-03-13'
     * </code>
     *
     * @param     mixed $empresaFechaActualiza The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaFechaActualiza($empresaFechaActualiza = null, $comparison = null)
    {
        if (is_array($empresaFechaActualiza)) {
            $useMinMax = false;
            if (isset($empresaFechaActualiza['min'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_FECHA_ACTUALIZA, $empresaFechaActualiza['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresaFechaActualiza['max'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_FECHA_ACTUALIZA, $empresaFechaActualiza['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_FECHA_ACTUALIZA, $empresaFechaActualiza, $comparison);
    }

    /**
     * Filter the query on the empresa_usuario_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaUsuarioModifica(1234); // WHERE empresa_usuario_modifica = 1234
     * $query->filterByEmpresaUsuarioModifica(array(12, 34)); // WHERE empresa_usuario_modifica IN (12, 34)
     * $query->filterByEmpresaUsuarioModifica(array('min' => 12)); // WHERE empresa_usuario_modifica >= 12
     * $query->filterByEmpresaUsuarioModifica(array('max' => 12)); // WHERE empresa_usuario_modifica <= 12
     * </code>
     *
     * @param     mixed $empresaUsuarioModifica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function filterByEmpresaUsuarioModifica($empresaUsuarioModifica = null, $comparison = null)
    {
        if (is_array($empresaUsuarioModifica)) {
            $useMinMax = false;
            if (isset($empresaUsuarioModifica['min'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_USUARIO_MODIFICA, $empresaUsuarioModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresaUsuarioModifica['max'])) {
                $this->addUsingAlias(EmpresasPeer::EMPRESA_USUARIO_MODIFICA, $empresaUsuarioModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresasPeer::EMPRESA_USUARIO_MODIFICA, $empresaUsuarioModifica, $comparison);
    }

    /**
     * Filter the query by a related Empresacontactos object
     *
     * @param   Empresacontactos|PropelObjectCollection $empresacontactos  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresasQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresacontactos($empresacontactos, $comparison = null)
    {
        if ($empresacontactos instanceof Empresacontactos) {
            return $this
                ->addUsingAlias(EmpresasPeer::EMPRESA_ID, $empresacontactos->getEmpresaId(), $comparison);
        } elseif ($empresacontactos instanceof PropelObjectCollection) {
            return $this
                ->useEmpresacontactosQuery()
                ->filterByPrimaryKeys($empresacontactos->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpresacontactos() only accepts arguments of type Empresacontactos or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empresacontactos relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function joinEmpresacontactos($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empresacontactos');

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
            $this->addJoinObject($join, 'Empresacontactos');
        }

        return $this;
    }

    /**
     * Use the Empresacontactos relation Empresacontactos object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpresacontactosQuery A secondary query class using the current class as primary query
     */
    public function useEmpresacontactosQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpresacontactos($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empresacontactos', 'EmpresacontactosQuery');
    }

    /**
     * Filter the query by a related Sucursales object
     *
     * @param   Sucursales|PropelObjectCollection $sucursales  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresasQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursales($sucursales, $comparison = null)
    {
        if ($sucursales instanceof Sucursales) {
            return $this
                ->addUsingAlias(EmpresasPeer::EMPRESA_ID, $sucursales->getEmpresaId(), $comparison);
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
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function joinSucursales($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useSucursalesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursales($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursales', 'SucursalesQuery');
    }

    /**
     * Filter the query by a related Usuarios object
     *
     * @param   Usuarios|PropelObjectCollection $usuarios  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresasQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarios($usuarios, $comparison = null)
    {
        if ($usuarios instanceof Usuarios) {
            return $this
                ->addUsingAlias(EmpresasPeer::EMPRESA_ID, $usuarios->getEmpresaId(), $comparison);
        } elseif ($usuarios instanceof PropelObjectCollection) {
            return $this
                ->useUsuariosQuery()
                ->filterByPrimaryKeys($usuarios->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuarios() only accepts arguments of type Usuarios or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuarios relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function joinUsuarios($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuarios');

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
            $this->addJoinObject($join, 'Usuarios');
        }

        return $this;
    }

    /**
     * Use the Usuarios relation Usuarios object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuariosQuery A secondary query class using the current class as primary query
     */
    public function useUsuariosQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarios($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuarios', 'UsuariosQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Empresas $empresas Object to remove from the list of results
     *
     * @return EmpresasQuery The current query, for fluid interface
     */
    public function prune($empresas = null)
    {
        if ($empresas) {
            $this->addUsingAlias(EmpresasPeer::EMPRESA_ID, $empresas->getEmpresaId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
