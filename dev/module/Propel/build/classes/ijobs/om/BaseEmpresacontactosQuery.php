<?php


/**
 * Base class that represents a query for the 'empresacontactos' table.
 *
 *
 *
 * @method EmpresacontactosQuery orderByEmpresacontactoId($order = Criteria::ASC) Order by the empresacontacto_id column
 * @method EmpresacontactosQuery orderByEmpresaId($order = Criteria::ASC) Order by the empresa_id column
 * @method EmpresacontactosQuery orderByEmpresacontactoNombre($order = Criteria::ASC) Order by the empresacontacto_nombre column
 * @method EmpresacontactosQuery orderByEmpresacontactoEmail($order = Criteria::ASC) Order by the empresacontacto_email column
 * @method EmpresacontactosQuery orderByEmpresacontactoTelefono($order = Criteria::ASC) Order by the empresacontacto_telefono column
 * @method EmpresacontactosQuery orderByEmpresacontactoMovil($order = Criteria::ASC) Order by the empresacontacto_movil column
 * @method EmpresacontactosQuery orderByEmpresacontactoFechaAlta($order = Criteria::ASC) Order by the empresacontacto_fecha_alta column
 * @method EmpresacontactosQuery orderByEmpresacontactoUsuarioAlta($order = Criteria::ASC) Order by the empresacontacto_usuario_alta column
 * @method EmpresacontactosQuery orderByEmpresacontactoFechaModifica($order = Criteria::ASC) Order by the empresacontacto_fecha_modifica column
 * @method EmpresacontactosQuery orderByEmpresacontactoUsuarioModifica($order = Criteria::ASC) Order by the empresacontacto_usuario_modifica column
 *
 * @method EmpresacontactosQuery groupByEmpresacontactoId() Group by the empresacontacto_id column
 * @method EmpresacontactosQuery groupByEmpresaId() Group by the empresa_id column
 * @method EmpresacontactosQuery groupByEmpresacontactoNombre() Group by the empresacontacto_nombre column
 * @method EmpresacontactosQuery groupByEmpresacontactoEmail() Group by the empresacontacto_email column
 * @method EmpresacontactosQuery groupByEmpresacontactoTelefono() Group by the empresacontacto_telefono column
 * @method EmpresacontactosQuery groupByEmpresacontactoMovil() Group by the empresacontacto_movil column
 * @method EmpresacontactosQuery groupByEmpresacontactoFechaAlta() Group by the empresacontacto_fecha_alta column
 * @method EmpresacontactosQuery groupByEmpresacontactoUsuarioAlta() Group by the empresacontacto_usuario_alta column
 * @method EmpresacontactosQuery groupByEmpresacontactoFechaModifica() Group by the empresacontacto_fecha_modifica column
 * @method EmpresacontactosQuery groupByEmpresacontactoUsuarioModifica() Group by the empresacontacto_usuario_modifica column
 *
 * @method EmpresacontactosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpresacontactosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpresacontactosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpresacontactosQuery leftJoinEmpresas($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresas relation
 * @method EmpresacontactosQuery rightJoinEmpresas($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresas relation
 * @method EmpresacontactosQuery innerJoinEmpresas($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresas relation
 *
 * @method Empresacontactos findOne(PropelPDO $con = null) Return the first Empresacontactos matching the query
 * @method Empresacontactos findOneOrCreate(PropelPDO $con = null) Return the first Empresacontactos matching the query, or a new Empresacontactos object populated from the query conditions when no match is found
 *
 * @method Empresacontactos findOneByEmpresaId(int $empresa_id) Return the first Empresacontactos filtered by the empresa_id column
 * @method Empresacontactos findOneByEmpresacontactoNombre(string $empresacontacto_nombre) Return the first Empresacontactos filtered by the empresacontacto_nombre column
 * @method Empresacontactos findOneByEmpresacontactoEmail(string $empresacontacto_email) Return the first Empresacontactos filtered by the empresacontacto_email column
 * @method Empresacontactos findOneByEmpresacontactoTelefono(string $empresacontacto_telefono) Return the first Empresacontactos filtered by the empresacontacto_telefono column
 * @method Empresacontactos findOneByEmpresacontactoMovil(string $empresacontacto_movil) Return the first Empresacontactos filtered by the empresacontacto_movil column
 * @method Empresacontactos findOneByEmpresacontactoFechaAlta(string $empresacontacto_fecha_alta) Return the first Empresacontactos filtered by the empresacontacto_fecha_alta column
 * @method Empresacontactos findOneByEmpresacontactoUsuarioAlta(int $empresacontacto_usuario_alta) Return the first Empresacontactos filtered by the empresacontacto_usuario_alta column
 * @method Empresacontactos findOneByEmpresacontactoFechaModifica(string $empresacontacto_fecha_modifica) Return the first Empresacontactos filtered by the empresacontacto_fecha_modifica column
 * @method Empresacontactos findOneByEmpresacontactoUsuarioModifica(int $empresacontacto_usuario_modifica) Return the first Empresacontactos filtered by the empresacontacto_usuario_modifica column
 *
 * @method array findByEmpresacontactoId(int $empresacontacto_id) Return Empresacontactos objects filtered by the empresacontacto_id column
 * @method array findByEmpresaId(int $empresa_id) Return Empresacontactos objects filtered by the empresa_id column
 * @method array findByEmpresacontactoNombre(string $empresacontacto_nombre) Return Empresacontactos objects filtered by the empresacontacto_nombre column
 * @method array findByEmpresacontactoEmail(string $empresacontacto_email) Return Empresacontactos objects filtered by the empresacontacto_email column
 * @method array findByEmpresacontactoTelefono(string $empresacontacto_telefono) Return Empresacontactos objects filtered by the empresacontacto_telefono column
 * @method array findByEmpresacontactoMovil(string $empresacontacto_movil) Return Empresacontactos objects filtered by the empresacontacto_movil column
 * @method array findByEmpresacontactoFechaAlta(string $empresacontacto_fecha_alta) Return Empresacontactos objects filtered by the empresacontacto_fecha_alta column
 * @method array findByEmpresacontactoUsuarioAlta(int $empresacontacto_usuario_alta) Return Empresacontactos objects filtered by the empresacontacto_usuario_alta column
 * @method array findByEmpresacontactoFechaModifica(string $empresacontacto_fecha_modifica) Return Empresacontactos objects filtered by the empresacontacto_fecha_modifica column
 * @method array findByEmpresacontactoUsuarioModifica(int $empresacontacto_usuario_modifica) Return Empresacontactos objects filtered by the empresacontacto_usuario_modifica column
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseEmpresacontactosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpresacontactosQuery object.
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
            $modelName = 'Empresacontactos';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpresacontactosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpresacontactosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpresacontactosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpresacontactosQuery) {
            return $criteria;
        }
        $query = new EmpresacontactosQuery(null, null, $modelAlias);

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
     * @return   Empresacontactos|Empresacontactos[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpresacontactosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empresacontactos A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByEmpresacontactoId($key, $con = null)
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
     * @return                 Empresacontactos A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `empresacontacto_id`, `empresa_id`, `empresacontacto_nombre`, `empresacontacto_email`, `empresacontacto_telefono`, `empresacontacto_movil`, `empresacontacto_fecha_alta`, `empresacontacto_usuario_alta`, `empresacontacto_fecha_modifica`, `empresacontacto_usuario_modifica` FROM `empresacontactos` WHERE `empresacontacto_id` = :p0';
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
            $obj = new Empresacontactos();
            $obj->hydrate($row);
            EmpresacontactosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empresacontactos|Empresacontactos[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empresacontactos[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the empresacontacto_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresacontactoId(1234); // WHERE empresacontacto_id = 1234
     * $query->filterByEmpresacontactoId(array(12, 34)); // WHERE empresacontacto_id IN (12, 34)
     * $query->filterByEmpresacontactoId(array('min' => 12)); // WHERE empresacontacto_id >= 12
     * $query->filterByEmpresacontactoId(array('max' => 12)); // WHERE empresacontacto_id <= 12
     * </code>
     *
     * @param     mixed $empresacontactoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresacontactoId($empresacontactoId = null, $comparison = null)
    {
        if (is_array($empresacontactoId)) {
            $useMinMax = false;
            if (isset($empresacontactoId['min'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_ID, $empresacontactoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresacontactoId['max'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_ID, $empresacontactoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_ID, $empresacontactoId, $comparison);
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
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresaId($empresaId = null, $comparison = null)
    {
        if (is_array($empresaId)) {
            $useMinMax = false;
            if (isset($empresaId['min'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESA_ID, $empresaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresaId['max'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESA_ID, $empresaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESA_ID, $empresaId, $comparison);
    }

    /**
     * Filter the query on the empresacontacto_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresacontactoNombre('fooValue');   // WHERE empresacontacto_nombre = 'fooValue'
     * $query->filterByEmpresacontactoNombre('%fooValue%'); // WHERE empresacontacto_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresacontactoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresacontactoNombre($empresacontactoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresacontactoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresacontactoNombre)) {
                $empresacontactoNombre = str_replace('*', '%', $empresacontactoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_NOMBRE, $empresacontactoNombre, $comparison);
    }

    /**
     * Filter the query on the empresacontacto_email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresacontactoEmail('fooValue');   // WHERE empresacontacto_email = 'fooValue'
     * $query->filterByEmpresacontactoEmail('%fooValue%'); // WHERE empresacontacto_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresacontactoEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresacontactoEmail($empresacontactoEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresacontactoEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresacontactoEmail)) {
                $empresacontactoEmail = str_replace('*', '%', $empresacontactoEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_EMAIL, $empresacontactoEmail, $comparison);
    }

    /**
     * Filter the query on the empresacontacto_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresacontactoTelefono('fooValue');   // WHERE empresacontacto_telefono = 'fooValue'
     * $query->filterByEmpresacontactoTelefono('%fooValue%'); // WHERE empresacontacto_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresacontactoTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresacontactoTelefono($empresacontactoTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresacontactoTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresacontactoTelefono)) {
                $empresacontactoTelefono = str_replace('*', '%', $empresacontactoTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_TELEFONO, $empresacontactoTelefono, $comparison);
    }

    /**
     * Filter the query on the empresacontacto_movil column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresacontactoMovil('fooValue');   // WHERE empresacontacto_movil = 'fooValue'
     * $query->filterByEmpresacontactoMovil('%fooValue%'); // WHERE empresacontacto_movil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresacontactoMovil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresacontactoMovil($empresacontactoMovil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresacontactoMovil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresacontactoMovil)) {
                $empresacontactoMovil = str_replace('*', '%', $empresacontactoMovil);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_MOVIL, $empresacontactoMovil, $comparison);
    }

    /**
     * Filter the query on the empresacontacto_fecha_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresacontactoFechaAlta('2011-03-14'); // WHERE empresacontacto_fecha_alta = '2011-03-14'
     * $query->filterByEmpresacontactoFechaAlta('now'); // WHERE empresacontacto_fecha_alta = '2011-03-14'
     * $query->filterByEmpresacontactoFechaAlta(array('max' => 'yesterday')); // WHERE empresacontacto_fecha_alta < '2011-03-13'
     * </code>
     *
     * @param     mixed $empresacontactoFechaAlta The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresacontactoFechaAlta($empresacontactoFechaAlta = null, $comparison = null)
    {
        if (is_array($empresacontactoFechaAlta)) {
            $useMinMax = false;
            if (isset($empresacontactoFechaAlta['min'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_FECHA_ALTA, $empresacontactoFechaAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresacontactoFechaAlta['max'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_FECHA_ALTA, $empresacontactoFechaAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_FECHA_ALTA, $empresacontactoFechaAlta, $comparison);
    }

    /**
     * Filter the query on the empresacontacto_usuario_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresacontactoUsuarioAlta(1234); // WHERE empresacontacto_usuario_alta = 1234
     * $query->filterByEmpresacontactoUsuarioAlta(array(12, 34)); // WHERE empresacontacto_usuario_alta IN (12, 34)
     * $query->filterByEmpresacontactoUsuarioAlta(array('min' => 12)); // WHERE empresacontacto_usuario_alta >= 12
     * $query->filterByEmpresacontactoUsuarioAlta(array('max' => 12)); // WHERE empresacontacto_usuario_alta <= 12
     * </code>
     *
     * @param     mixed $empresacontactoUsuarioAlta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresacontactoUsuarioAlta($empresacontactoUsuarioAlta = null, $comparison = null)
    {
        if (is_array($empresacontactoUsuarioAlta)) {
            $useMinMax = false;
            if (isset($empresacontactoUsuarioAlta['min'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_ALTA, $empresacontactoUsuarioAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresacontactoUsuarioAlta['max'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_ALTA, $empresacontactoUsuarioAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_ALTA, $empresacontactoUsuarioAlta, $comparison);
    }

    /**
     * Filter the query on the empresacontacto_fecha_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresacontactoFechaModifica('2011-03-14'); // WHERE empresacontacto_fecha_modifica = '2011-03-14'
     * $query->filterByEmpresacontactoFechaModifica('now'); // WHERE empresacontacto_fecha_modifica = '2011-03-14'
     * $query->filterByEmpresacontactoFechaModifica(array('max' => 'yesterday')); // WHERE empresacontacto_fecha_modifica < '2011-03-13'
     * </code>
     *
     * @param     mixed $empresacontactoFechaModifica The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresacontactoFechaModifica($empresacontactoFechaModifica = null, $comparison = null)
    {
        if (is_array($empresacontactoFechaModifica)) {
            $useMinMax = false;
            if (isset($empresacontactoFechaModifica['min'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_FECHA_MODIFICA, $empresacontactoFechaModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresacontactoFechaModifica['max'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_FECHA_MODIFICA, $empresacontactoFechaModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_FECHA_MODIFICA, $empresacontactoFechaModifica, $comparison);
    }

    /**
     * Filter the query on the empresacontacto_usuario_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresacontactoUsuarioModifica(1234); // WHERE empresacontacto_usuario_modifica = 1234
     * $query->filterByEmpresacontactoUsuarioModifica(array(12, 34)); // WHERE empresacontacto_usuario_modifica IN (12, 34)
     * $query->filterByEmpresacontactoUsuarioModifica(array('min' => 12)); // WHERE empresacontacto_usuario_modifica >= 12
     * $query->filterByEmpresacontactoUsuarioModifica(array('max' => 12)); // WHERE empresacontacto_usuario_modifica <= 12
     * </code>
     *
     * @param     mixed $empresacontactoUsuarioModifica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function filterByEmpresacontactoUsuarioModifica($empresacontactoUsuarioModifica = null, $comparison = null)
    {
        if (is_array($empresacontactoUsuarioModifica)) {
            $useMinMax = false;
            if (isset($empresacontactoUsuarioModifica['min'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_MODIFICA, $empresacontactoUsuarioModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresacontactoUsuarioModifica['max'])) {
                $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_MODIFICA, $empresacontactoUsuarioModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_MODIFICA, $empresacontactoUsuarioModifica, $comparison);
    }

    /**
     * Filter the query by a related Empresas object
     *
     * @param   Empresas|PropelObjectCollection $empresas The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresacontactosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresas($empresas, $comparison = null)
    {
        if ($empresas instanceof Empresas) {
            return $this
                ->addUsingAlias(EmpresacontactosPeer::EMPRESA_ID, $empresas->getEmpresaId(), $comparison);
        } elseif ($empresas instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpresacontactosPeer::EMPRESA_ID, $empresas->toKeyValue('PrimaryKey', 'EmpresaId'), $comparison);
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
     * @return EmpresacontactosQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Empresacontactos $empresacontactos Object to remove from the list of results
     *
     * @return EmpresacontactosQuery The current query, for fluid interface
     */
    public function prune($empresacontactos = null)
    {
        if ($empresacontactos) {
            $this->addUsingAlias(EmpresacontactosPeer::EMPRESACONTACTO_ID, $empresacontactos->getEmpresacontactoId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
