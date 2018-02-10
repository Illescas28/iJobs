<?php


/**
 * Base class that represents a query for the 'vacantes' table.
 *
 *
 *
 * @method VacantesQuery orderByVacanteId($order = Criteria::ASC) Order by the vacante_id column
 * @method VacantesQuery orderBySucursalId($order = Criteria::ASC) Order by the sucursal_id column
 * @method VacantesQuery orderByVacanteNombre($order = Criteria::ASC) Order by the vacante_nombre column
 * @method VacantesQuery orderByVacanteDescripcion($order = Criteria::ASC) Order by the vacante_descripcion column
 * @method VacantesQuery orderByVacanteHorario($order = Criteria::ASC) Order by the vacante_horario column
 * @method VacantesQuery orderByVacanteSueldo($order = Criteria::ASC) Order by the vacante_sueldo column
 * @method VacantesQuery orderByVacanteSueldoTipoPago($order = Criteria::ASC) Order by the vacante_sueldo_tipo_pago column
 * @method VacantesQuery orderByVacanteCandidatos($order = Criteria::ASC) Order by the vacante_candidatos column
 * @method VacantesQuery orderByVacanteFechaInicia($order = Criteria::ASC) Order by the vacante_fecha_inicia column
 * @method VacantesQuery orderByVacanteFechaTermina($order = Criteria::ASC) Order by the vacante_fecha_termina column
 * @method VacantesQuery orderByVacanteVisitas($order = Criteria::ASC) Order by the vacante_visitas column
 * @method VacantesQuery orderByVacanteEstatus($order = Criteria::ASC) Order by the vacante_estatus column
 * @method VacantesQuery orderByVacanteFechaAlta($order = Criteria::ASC) Order by the vacante_fecha_alta column
 * @method VacantesQuery orderByVacanteUsuarioAlta($order = Criteria::ASC) Order by the vacante_usuario_alta column
 * @method VacantesQuery orderByVacanteFechaModifica($order = Criteria::ASC) Order by the vacante_fecha_modifica column
 * @method VacantesQuery orderByVacanteUsuarioModifica($order = Criteria::ASC) Order by the vacante_usuario_modifica column
 *
 * @method VacantesQuery groupByVacanteId() Group by the vacante_id column
 * @method VacantesQuery groupBySucursalId() Group by the sucursal_id column
 * @method VacantesQuery groupByVacanteNombre() Group by the vacante_nombre column
 * @method VacantesQuery groupByVacanteDescripcion() Group by the vacante_descripcion column
 * @method VacantesQuery groupByVacanteHorario() Group by the vacante_horario column
 * @method VacantesQuery groupByVacanteSueldo() Group by the vacante_sueldo column
 * @method VacantesQuery groupByVacanteSueldoTipoPago() Group by the vacante_sueldo_tipo_pago column
 * @method VacantesQuery groupByVacanteCandidatos() Group by the vacante_candidatos column
 * @method VacantesQuery groupByVacanteFechaInicia() Group by the vacante_fecha_inicia column
 * @method VacantesQuery groupByVacanteFechaTermina() Group by the vacante_fecha_termina column
 * @method VacantesQuery groupByVacanteVisitas() Group by the vacante_visitas column
 * @method VacantesQuery groupByVacanteEstatus() Group by the vacante_estatus column
 * @method VacantesQuery groupByVacanteFechaAlta() Group by the vacante_fecha_alta column
 * @method VacantesQuery groupByVacanteUsuarioAlta() Group by the vacante_usuario_alta column
 * @method VacantesQuery groupByVacanteFechaModifica() Group by the vacante_fecha_modifica column
 * @method VacantesQuery groupByVacanteUsuarioModifica() Group by the vacante_usuario_modifica column
 *
 * @method VacantesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VacantesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VacantesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VacantesQuery leftJoinSucursales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursales relation
 * @method VacantesQuery rightJoinSucursales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursales relation
 * @method VacantesQuery innerJoinSucursales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursales relation
 *
 * @method VacantesQuery leftJoinPostulantes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Postulantes relation
 * @method VacantesQuery rightJoinPostulantes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Postulantes relation
 * @method VacantesQuery innerJoinPostulantes($relationAlias = null) Adds a INNER JOIN clause to the query using the Postulantes relation
 *
 * @method Vacantes findOne(PropelPDO $con = null) Return the first Vacantes matching the query
 * @method Vacantes findOneOrCreate(PropelPDO $con = null) Return the first Vacantes matching the query, or a new Vacantes object populated from the query conditions when no match is found
 *
 * @method Vacantes findOneBySucursalId(int $sucursal_id) Return the first Vacantes filtered by the sucursal_id column
 * @method Vacantes findOneByVacanteNombre(string $vacante_nombre) Return the first Vacantes filtered by the vacante_nombre column
 * @method Vacantes findOneByVacanteDescripcion(string $vacante_descripcion) Return the first Vacantes filtered by the vacante_descripcion column
 * @method Vacantes findOneByVacanteHorario(string $vacante_horario) Return the first Vacantes filtered by the vacante_horario column
 * @method Vacantes findOneByVacanteSueldo(string $vacante_sueldo) Return the first Vacantes filtered by the vacante_sueldo column
 * @method Vacantes findOneByVacanteSueldoTipoPago(string $vacante_sueldo_tipo_pago) Return the first Vacantes filtered by the vacante_sueldo_tipo_pago column
 * @method Vacantes findOneByVacanteCandidatos(int $vacante_candidatos) Return the first Vacantes filtered by the vacante_candidatos column
 * @method Vacantes findOneByVacanteFechaInicia(string $vacante_fecha_inicia) Return the first Vacantes filtered by the vacante_fecha_inicia column
 * @method Vacantes findOneByVacanteFechaTermina(string $vacante_fecha_termina) Return the first Vacantes filtered by the vacante_fecha_termina column
 * @method Vacantes findOneByVacanteVisitas(int $vacante_visitas) Return the first Vacantes filtered by the vacante_visitas column
 * @method Vacantes findOneByVacanteEstatus(string $vacante_estatus) Return the first Vacantes filtered by the vacante_estatus column
 * @method Vacantes findOneByVacanteFechaAlta(string $vacante_fecha_alta) Return the first Vacantes filtered by the vacante_fecha_alta column
 * @method Vacantes findOneByVacanteUsuarioAlta(int $vacante_usuario_alta) Return the first Vacantes filtered by the vacante_usuario_alta column
 * @method Vacantes findOneByVacanteFechaModifica(string $vacante_fecha_modifica) Return the first Vacantes filtered by the vacante_fecha_modifica column
 * @method Vacantes findOneByVacanteUsuarioModifica(int $vacante_usuario_modifica) Return the first Vacantes filtered by the vacante_usuario_modifica column
 *
 * @method array findByVacanteId(int $vacante_id) Return Vacantes objects filtered by the vacante_id column
 * @method array findBySucursalId(int $sucursal_id) Return Vacantes objects filtered by the sucursal_id column
 * @method array findByVacanteNombre(string $vacante_nombre) Return Vacantes objects filtered by the vacante_nombre column
 * @method array findByVacanteDescripcion(string $vacante_descripcion) Return Vacantes objects filtered by the vacante_descripcion column
 * @method array findByVacanteHorario(string $vacante_horario) Return Vacantes objects filtered by the vacante_horario column
 * @method array findByVacanteSueldo(string $vacante_sueldo) Return Vacantes objects filtered by the vacante_sueldo column
 * @method array findByVacanteSueldoTipoPago(string $vacante_sueldo_tipo_pago) Return Vacantes objects filtered by the vacante_sueldo_tipo_pago column
 * @method array findByVacanteCandidatos(int $vacante_candidatos) Return Vacantes objects filtered by the vacante_candidatos column
 * @method array findByVacanteFechaInicia(string $vacante_fecha_inicia) Return Vacantes objects filtered by the vacante_fecha_inicia column
 * @method array findByVacanteFechaTermina(string $vacante_fecha_termina) Return Vacantes objects filtered by the vacante_fecha_termina column
 * @method array findByVacanteVisitas(int $vacante_visitas) Return Vacantes objects filtered by the vacante_visitas column
 * @method array findByVacanteEstatus(string $vacante_estatus) Return Vacantes objects filtered by the vacante_estatus column
 * @method array findByVacanteFechaAlta(string $vacante_fecha_alta) Return Vacantes objects filtered by the vacante_fecha_alta column
 * @method array findByVacanteUsuarioAlta(int $vacante_usuario_alta) Return Vacantes objects filtered by the vacante_usuario_alta column
 * @method array findByVacanteFechaModifica(string $vacante_fecha_modifica) Return Vacantes objects filtered by the vacante_fecha_modifica column
 * @method array findByVacanteUsuarioModifica(int $vacante_usuario_modifica) Return Vacantes objects filtered by the vacante_usuario_modifica column
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseVacantesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVacantesQuery object.
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
            $modelName = 'Vacantes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VacantesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VacantesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VacantesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VacantesQuery) {
            return $criteria;
        }
        $query = new VacantesQuery(null, null, $modelAlias);

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
     * @return   Vacantes|Vacantes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VacantesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Vacantes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByVacanteId($key, $con = null)
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
     * @return                 Vacantes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `vacante_id`, `sucursal_id`, `vacante_nombre`, `vacante_descripcion`, `vacante_horario`, `vacante_sueldo`, `vacante_sueldo_tipo_pago`, `vacante_candidatos`, `vacante_fecha_inicia`, `vacante_fecha_termina`, `vacante_visitas`, `vacante_estatus`, `vacante_fecha_alta`, `vacante_usuario_alta`, `vacante_fecha_modifica`, `vacante_usuario_modifica` FROM `vacantes` WHERE `vacante_id` = :p0';
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
            $obj = new Vacantes();
            $obj->hydrate($row);
            VacantesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Vacantes|Vacantes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Vacantes[]|mixed the list of results, formatted by the current formatter
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
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VacantesPeer::VACANTE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VacantesPeer::VACANTE_ID, $keys, Criteria::IN);
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
     * @param     mixed $vacanteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteId($vacanteId = null, $comparison = null)
    {
        if (is_array($vacanteId)) {
            $useMinMax = false;
            if (isset($vacanteId['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_ID, $vacanteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteId['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_ID, $vacanteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_ID, $vacanteId, $comparison);
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
     * @see       filterBySucursales()
     *
     * @param     mixed $sucursalId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterBySucursalId($sucursalId = null, $comparison = null)
    {
        if (is_array($sucursalId)) {
            $useMinMax = false;
            if (isset($sucursalId['min'])) {
                $this->addUsingAlias(VacantesPeer::SUCURSAL_ID, $sucursalId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalId['max'])) {
                $this->addUsingAlias(VacantesPeer::SUCURSAL_ID, $sucursalId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::SUCURSAL_ID, $sucursalId, $comparison);
    }

    /**
     * Filter the query on the vacante_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteNombre('fooValue');   // WHERE vacante_nombre = 'fooValue'
     * $query->filterByVacanteNombre('%fooValue%'); // WHERE vacante_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vacanteNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteNombre($vacanteNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vacanteNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vacanteNombre)) {
                $vacanteNombre = str_replace('*', '%', $vacanteNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_NOMBRE, $vacanteNombre, $comparison);
    }

    /**
     * Filter the query on the vacante_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteDescripcion('fooValue');   // WHERE vacante_descripcion = 'fooValue'
     * $query->filterByVacanteDescripcion('%fooValue%'); // WHERE vacante_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vacanteDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteDescripcion($vacanteDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vacanteDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vacanteDescripcion)) {
                $vacanteDescripcion = str_replace('*', '%', $vacanteDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_DESCRIPCION, $vacanteDescripcion, $comparison);
    }

    /**
     * Filter the query on the vacante_horario column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteHorario('fooValue');   // WHERE vacante_horario = 'fooValue'
     * $query->filterByVacanteHorario('%fooValue%'); // WHERE vacante_horario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vacanteHorario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteHorario($vacanteHorario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vacanteHorario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vacanteHorario)) {
                $vacanteHorario = str_replace('*', '%', $vacanteHorario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_HORARIO, $vacanteHorario, $comparison);
    }

    /**
     * Filter the query on the vacante_sueldo column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteSueldo(1234); // WHERE vacante_sueldo = 1234
     * $query->filterByVacanteSueldo(array(12, 34)); // WHERE vacante_sueldo IN (12, 34)
     * $query->filterByVacanteSueldo(array('min' => 12)); // WHERE vacante_sueldo >= 12
     * $query->filterByVacanteSueldo(array('max' => 12)); // WHERE vacante_sueldo <= 12
     * </code>
     *
     * @param     mixed $vacanteSueldo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteSueldo($vacanteSueldo = null, $comparison = null)
    {
        if (is_array($vacanteSueldo)) {
            $useMinMax = false;
            if (isset($vacanteSueldo['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_SUELDO, $vacanteSueldo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteSueldo['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_SUELDO, $vacanteSueldo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_SUELDO, $vacanteSueldo, $comparison);
    }

    /**
     * Filter the query on the vacante_sueldo_tipo_pago column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteSueldoTipoPago('fooValue');   // WHERE vacante_sueldo_tipo_pago = 'fooValue'
     * $query->filterByVacanteSueldoTipoPago('%fooValue%'); // WHERE vacante_sueldo_tipo_pago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vacanteSueldoTipoPago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteSueldoTipoPago($vacanteSueldoTipoPago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vacanteSueldoTipoPago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vacanteSueldoTipoPago)) {
                $vacanteSueldoTipoPago = str_replace('*', '%', $vacanteSueldoTipoPago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_SUELDO_TIPO_PAGO, $vacanteSueldoTipoPago, $comparison);
    }

    /**
     * Filter the query on the vacante_candidatos column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteCandidatos(1234); // WHERE vacante_candidatos = 1234
     * $query->filterByVacanteCandidatos(array(12, 34)); // WHERE vacante_candidatos IN (12, 34)
     * $query->filterByVacanteCandidatos(array('min' => 12)); // WHERE vacante_candidatos >= 12
     * $query->filterByVacanteCandidatos(array('max' => 12)); // WHERE vacante_candidatos <= 12
     * </code>
     *
     * @param     mixed $vacanteCandidatos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteCandidatos($vacanteCandidatos = null, $comparison = null)
    {
        if (is_array($vacanteCandidatos)) {
            $useMinMax = false;
            if (isset($vacanteCandidatos['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_CANDIDATOS, $vacanteCandidatos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteCandidatos['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_CANDIDATOS, $vacanteCandidatos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_CANDIDATOS, $vacanteCandidatos, $comparison);
    }

    /**
     * Filter the query on the vacante_fecha_inicia column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteFechaInicia('2011-03-14'); // WHERE vacante_fecha_inicia = '2011-03-14'
     * $query->filterByVacanteFechaInicia('now'); // WHERE vacante_fecha_inicia = '2011-03-14'
     * $query->filterByVacanteFechaInicia(array('max' => 'yesterday')); // WHERE vacante_fecha_inicia < '2011-03-13'
     * </code>
     *
     * @param     mixed $vacanteFechaInicia The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteFechaInicia($vacanteFechaInicia = null, $comparison = null)
    {
        if (is_array($vacanteFechaInicia)) {
            $useMinMax = false;
            if (isset($vacanteFechaInicia['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_INICIA, $vacanteFechaInicia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteFechaInicia['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_INICIA, $vacanteFechaInicia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_INICIA, $vacanteFechaInicia, $comparison);
    }

    /**
     * Filter the query on the vacante_fecha_termina column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteFechaTermina('2011-03-14'); // WHERE vacante_fecha_termina = '2011-03-14'
     * $query->filterByVacanteFechaTermina('now'); // WHERE vacante_fecha_termina = '2011-03-14'
     * $query->filterByVacanteFechaTermina(array('max' => 'yesterday')); // WHERE vacante_fecha_termina < '2011-03-13'
     * </code>
     *
     * @param     mixed $vacanteFechaTermina The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteFechaTermina($vacanteFechaTermina = null, $comparison = null)
    {
        if (is_array($vacanteFechaTermina)) {
            $useMinMax = false;
            if (isset($vacanteFechaTermina['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_TERMINA, $vacanteFechaTermina['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteFechaTermina['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_TERMINA, $vacanteFechaTermina['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_TERMINA, $vacanteFechaTermina, $comparison);
    }

    /**
     * Filter the query on the vacante_visitas column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteVisitas(1234); // WHERE vacante_visitas = 1234
     * $query->filterByVacanteVisitas(array(12, 34)); // WHERE vacante_visitas IN (12, 34)
     * $query->filterByVacanteVisitas(array('min' => 12)); // WHERE vacante_visitas >= 12
     * $query->filterByVacanteVisitas(array('max' => 12)); // WHERE vacante_visitas <= 12
     * </code>
     *
     * @param     mixed $vacanteVisitas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteVisitas($vacanteVisitas = null, $comparison = null)
    {
        if (is_array($vacanteVisitas)) {
            $useMinMax = false;
            if (isset($vacanteVisitas['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_VISITAS, $vacanteVisitas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteVisitas['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_VISITAS, $vacanteVisitas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_VISITAS, $vacanteVisitas, $comparison);
    }

    /**
     * Filter the query on the vacante_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteEstatus('fooValue');   // WHERE vacante_estatus = 'fooValue'
     * $query->filterByVacanteEstatus('%fooValue%'); // WHERE vacante_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vacanteEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteEstatus($vacanteEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vacanteEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vacanteEstatus)) {
                $vacanteEstatus = str_replace('*', '%', $vacanteEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_ESTATUS, $vacanteEstatus, $comparison);
    }

    /**
     * Filter the query on the vacante_fecha_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteFechaAlta('2011-03-14'); // WHERE vacante_fecha_alta = '2011-03-14'
     * $query->filterByVacanteFechaAlta('now'); // WHERE vacante_fecha_alta = '2011-03-14'
     * $query->filterByVacanteFechaAlta(array('max' => 'yesterday')); // WHERE vacante_fecha_alta < '2011-03-13'
     * </code>
     *
     * @param     mixed $vacanteFechaAlta The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteFechaAlta($vacanteFechaAlta = null, $comparison = null)
    {
        if (is_array($vacanteFechaAlta)) {
            $useMinMax = false;
            if (isset($vacanteFechaAlta['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_ALTA, $vacanteFechaAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteFechaAlta['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_ALTA, $vacanteFechaAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_ALTA, $vacanteFechaAlta, $comparison);
    }

    /**
     * Filter the query on the vacante_usuario_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteUsuarioAlta(1234); // WHERE vacante_usuario_alta = 1234
     * $query->filterByVacanteUsuarioAlta(array(12, 34)); // WHERE vacante_usuario_alta IN (12, 34)
     * $query->filterByVacanteUsuarioAlta(array('min' => 12)); // WHERE vacante_usuario_alta >= 12
     * $query->filterByVacanteUsuarioAlta(array('max' => 12)); // WHERE vacante_usuario_alta <= 12
     * </code>
     *
     * @param     mixed $vacanteUsuarioAlta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteUsuarioAlta($vacanteUsuarioAlta = null, $comparison = null)
    {
        if (is_array($vacanteUsuarioAlta)) {
            $useMinMax = false;
            if (isset($vacanteUsuarioAlta['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_USUARIO_ALTA, $vacanteUsuarioAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteUsuarioAlta['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_USUARIO_ALTA, $vacanteUsuarioAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_USUARIO_ALTA, $vacanteUsuarioAlta, $comparison);
    }

    /**
     * Filter the query on the vacante_fecha_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteFechaModifica('2011-03-14'); // WHERE vacante_fecha_modifica = '2011-03-14'
     * $query->filterByVacanteFechaModifica('now'); // WHERE vacante_fecha_modifica = '2011-03-14'
     * $query->filterByVacanteFechaModifica(array('max' => 'yesterday')); // WHERE vacante_fecha_modifica < '2011-03-13'
     * </code>
     *
     * @param     mixed $vacanteFechaModifica The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteFechaModifica($vacanteFechaModifica = null, $comparison = null)
    {
        if (is_array($vacanteFechaModifica)) {
            $useMinMax = false;
            if (isset($vacanteFechaModifica['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_MODIFICA, $vacanteFechaModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteFechaModifica['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_MODIFICA, $vacanteFechaModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_FECHA_MODIFICA, $vacanteFechaModifica, $comparison);
    }

    /**
     * Filter the query on the vacante_usuario_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteUsuarioModifica(1234); // WHERE vacante_usuario_modifica = 1234
     * $query->filterByVacanteUsuarioModifica(array(12, 34)); // WHERE vacante_usuario_modifica IN (12, 34)
     * $query->filterByVacanteUsuarioModifica(array('min' => 12)); // WHERE vacante_usuario_modifica >= 12
     * $query->filterByVacanteUsuarioModifica(array('max' => 12)); // WHERE vacante_usuario_modifica <= 12
     * </code>
     *
     * @param     mixed $vacanteUsuarioModifica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function filterByVacanteUsuarioModifica($vacanteUsuarioModifica = null, $comparison = null)
    {
        if (is_array($vacanteUsuarioModifica)) {
            $useMinMax = false;
            if (isset($vacanteUsuarioModifica['min'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_USUARIO_MODIFICA, $vacanteUsuarioModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteUsuarioModifica['max'])) {
                $this->addUsingAlias(VacantesPeer::VACANTE_USUARIO_MODIFICA, $vacanteUsuarioModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantesPeer::VACANTE_USUARIO_MODIFICA, $vacanteUsuarioModifica, $comparison);
    }

    /**
     * Filter the query by a related Sucursales object
     *
     * @param   Sucursales|PropelObjectCollection $sucursales The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VacantesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursales($sucursales, $comparison = null)
    {
        if ($sucursales instanceof Sucursales) {
            return $this
                ->addUsingAlias(VacantesPeer::SUCURSAL_ID, $sucursales->getSucursalId(), $comparison);
        } elseif ($sucursales instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VacantesPeer::SUCURSAL_ID, $sucursales->toKeyValue('PrimaryKey', 'SucursalId'), $comparison);
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
     * @return VacantesQuery The current query, for fluid interface
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
     * Filter the query by a related Postulantes object
     *
     * @param   Postulantes|PropelObjectCollection $postulantes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VacantesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPostulantes($postulantes, $comparison = null)
    {
        if ($postulantes instanceof Postulantes) {
            return $this
                ->addUsingAlias(VacantesPeer::VACANTE_ID, $postulantes->getVacanteId(), $comparison);
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
     * @return VacantesQuery The current query, for fluid interface
     */
    public function joinPostulantes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function usePostulantesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPostulantes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Postulantes', 'PostulantesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Vacantes $vacantes Object to remove from the list of results
     *
     * @return VacantesQuery The current query, for fluid interface
     */
    public function prune($vacantes = null)
    {
        if ($vacantes) {
            $this->addUsingAlias(VacantesPeer::VACANTE_ID, $vacantes->getVacanteId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
