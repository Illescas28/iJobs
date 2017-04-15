<?php


/**
 * Base class that represents a query for the 'vacante' table.
 *
 *
 *
 * @method VacanteQuery orderByVacanteId($order = Criteria::ASC) Order by the vacante_id column
 * @method VacanteQuery orderBySucursalId($order = Criteria::ASC) Order by the sucursal_id column
 * @method VacanteQuery orderByVacanteNombre($order = Criteria::ASC) Order by the vacante_nombre column
 * @method VacanteQuery orderByVacanteDescripcion($order = Criteria::ASC) Order by the vacante_descripcion column
 * @method VacanteQuery orderByVacanteHorario($order = Criteria::ASC) Order by the vacante_horario column
 * @method VacanteQuery orderByVacanteSueldo($order = Criteria::ASC) Order by the vacante_sueldo column
 * @method VacanteQuery orderByVacanteSueldoTipoPago($order = Criteria::ASC) Order by the vacante_sueldo_tipo_pago column
 * @method VacanteQuery orderByVacanteCandidatos($order = Criteria::ASC) Order by the vacante_candidatos column
 * @method VacanteQuery orderByVacanteFechaInicia($order = Criteria::ASC) Order by the vacante_fecha_inicia column
 * @method VacanteQuery orderByVacanteFechaTermina($order = Criteria::ASC) Order by the vacante_fecha_termina column
 * @method VacanteQuery orderByVacanteVisitas($order = Criteria::ASC) Order by the vacante_visitas column
 * @method VacanteQuery orderByVacanteEstatus($order = Criteria::ASC) Order by the vacante_estatus column
 * @method VacanteQuery orderByVacanteFecha($order = Criteria::ASC) Order by the vacante_fecha column
 *
 * @method VacanteQuery groupByVacanteId() Group by the vacante_id column
 * @method VacanteQuery groupBySucursalId() Group by the sucursal_id column
 * @method VacanteQuery groupByVacanteNombre() Group by the vacante_nombre column
 * @method VacanteQuery groupByVacanteDescripcion() Group by the vacante_descripcion column
 * @method VacanteQuery groupByVacanteHorario() Group by the vacante_horario column
 * @method VacanteQuery groupByVacanteSueldo() Group by the vacante_sueldo column
 * @method VacanteQuery groupByVacanteSueldoTipoPago() Group by the vacante_sueldo_tipo_pago column
 * @method VacanteQuery groupByVacanteCandidatos() Group by the vacante_candidatos column
 * @method VacanteQuery groupByVacanteFechaInicia() Group by the vacante_fecha_inicia column
 * @method VacanteQuery groupByVacanteFechaTermina() Group by the vacante_fecha_termina column
 * @method VacanteQuery groupByVacanteVisitas() Group by the vacante_visitas column
 * @method VacanteQuery groupByVacanteEstatus() Group by the vacante_estatus column
 * @method VacanteQuery groupByVacanteFecha() Group by the vacante_fecha column
 *
 * @method VacanteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VacanteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VacanteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VacanteQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method VacanteQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method VacanteQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method VacanteQuery leftJoinPostulante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Postulante relation
 * @method VacanteQuery rightJoinPostulante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Postulante relation
 * @method VacanteQuery innerJoinPostulante($relationAlias = null) Adds a INNER JOIN clause to the query using the Postulante relation
 *
 * @method VacanteQuery leftJoinVacantecorreo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vacantecorreo relation
 * @method VacanteQuery rightJoinVacantecorreo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vacantecorreo relation
 * @method VacanteQuery innerJoinVacantecorreo($relationAlias = null) Adds a INNER JOIN clause to the query using the Vacantecorreo relation
 *
 * @method Vacante findOne(PropelPDO $con = null) Return the first Vacante matching the query
 * @method Vacante findOneOrCreate(PropelPDO $con = null) Return the first Vacante matching the query, or a new Vacante object populated from the query conditions when no match is found
 *
 * @method Vacante findOneBySucursalId(int $sucursal_id) Return the first Vacante filtered by the sucursal_id column
 * @method Vacante findOneByVacanteNombre(string $vacante_nombre) Return the first Vacante filtered by the vacante_nombre column
 * @method Vacante findOneByVacanteDescripcion(string $vacante_descripcion) Return the first Vacante filtered by the vacante_descripcion column
 * @method Vacante findOneByVacanteHorario(string $vacante_horario) Return the first Vacante filtered by the vacante_horario column
 * @method Vacante findOneByVacanteSueldo(string $vacante_sueldo) Return the first Vacante filtered by the vacante_sueldo column
 * @method Vacante findOneByVacanteSueldoTipoPago(string $vacante_sueldo_tipo_pago) Return the first Vacante filtered by the vacante_sueldo_tipo_pago column
 * @method Vacante findOneByVacanteCandidatos(int $vacante_candidatos) Return the first Vacante filtered by the vacante_candidatos column
 * @method Vacante findOneByVacanteFechaInicia(string $vacante_fecha_inicia) Return the first Vacante filtered by the vacante_fecha_inicia column
 * @method Vacante findOneByVacanteFechaTermina(string $vacante_fecha_termina) Return the first Vacante filtered by the vacante_fecha_termina column
 * @method Vacante findOneByVacanteVisitas(int $vacante_visitas) Return the first Vacante filtered by the vacante_visitas column
 * @method Vacante findOneByVacanteEstatus(string $vacante_estatus) Return the first Vacante filtered by the vacante_estatus column
 * @method Vacante findOneByVacanteFecha(string $vacante_fecha) Return the first Vacante filtered by the vacante_fecha column
 *
 * @method array findByVacanteId(int $vacante_id) Return Vacante objects filtered by the vacante_id column
 * @method array findBySucursalId(int $sucursal_id) Return Vacante objects filtered by the sucursal_id column
 * @method array findByVacanteNombre(string $vacante_nombre) Return Vacante objects filtered by the vacante_nombre column
 * @method array findByVacanteDescripcion(string $vacante_descripcion) Return Vacante objects filtered by the vacante_descripcion column
 * @method array findByVacanteHorario(string $vacante_horario) Return Vacante objects filtered by the vacante_horario column
 * @method array findByVacanteSueldo(string $vacante_sueldo) Return Vacante objects filtered by the vacante_sueldo column
 * @method array findByVacanteSueldoTipoPago(string $vacante_sueldo_tipo_pago) Return Vacante objects filtered by the vacante_sueldo_tipo_pago column
 * @method array findByVacanteCandidatos(int $vacante_candidatos) Return Vacante objects filtered by the vacante_candidatos column
 * @method array findByVacanteFechaInicia(string $vacante_fecha_inicia) Return Vacante objects filtered by the vacante_fecha_inicia column
 * @method array findByVacanteFechaTermina(string $vacante_fecha_termina) Return Vacante objects filtered by the vacante_fecha_termina column
 * @method array findByVacanteVisitas(int $vacante_visitas) Return Vacante objects filtered by the vacante_visitas column
 * @method array findByVacanteEstatus(string $vacante_estatus) Return Vacante objects filtered by the vacante_estatus column
 * @method array findByVacanteFecha(string $vacante_fecha) Return Vacante objects filtered by the vacante_fecha column
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseVacanteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVacanteQuery object.
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
            $modelName = 'Vacante';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VacanteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VacanteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VacanteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VacanteQuery) {
            return $criteria;
        }
        $query = new VacanteQuery(null, null, $modelAlias);

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
     * @return   Vacante|Vacante[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VacantePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Vacante A model object, or null if the key is not found
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
     * @return                 Vacante A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `vacante_id`, `sucursal_id`, `vacante_nombre`, `vacante_descripcion`, `vacante_horario`, `vacante_sueldo`, `vacante_sueldo_tipo_pago`, `vacante_candidatos`, `vacante_fecha_inicia`, `vacante_fecha_termina`, `vacante_visitas`, `vacante_estatus`, `vacante_fecha` FROM `vacante` WHERE `vacante_id` = :p0';
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
            $obj = new Vacante();
            $obj->hydrate($row);
            VacantePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Vacante|Vacante[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Vacante[]|mixed the list of results, formatted by the current formatter
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
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VacantePeer::VACANTE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VacantePeer::VACANTE_ID, $keys, Criteria::IN);
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
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterByVacanteId($vacanteId = null, $comparison = null)
    {
        if (is_array($vacanteId)) {
            $useMinMax = false;
            if (isset($vacanteId['min'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_ID, $vacanteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteId['max'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_ID, $vacanteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantePeer::VACANTE_ID, $vacanteId, $comparison);
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
     * @see       filterBySucursal()
     *
     * @param     mixed $sucursalId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterBySucursalId($sucursalId = null, $comparison = null)
    {
        if (is_array($sucursalId)) {
            $useMinMax = false;
            if (isset($sucursalId['min'])) {
                $this->addUsingAlias(VacantePeer::SUCURSAL_ID, $sucursalId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sucursalId['max'])) {
                $this->addUsingAlias(VacantePeer::SUCURSAL_ID, $sucursalId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantePeer::SUCURSAL_ID, $sucursalId, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(VacantePeer::VACANTE_NOMBRE, $vacanteNombre, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(VacantePeer::VACANTE_DESCRIPCION, $vacanteDescripcion, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(VacantePeer::VACANTE_HORARIO, $vacanteHorario, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterByVacanteSueldo($vacanteSueldo = null, $comparison = null)
    {
        if (is_array($vacanteSueldo)) {
            $useMinMax = false;
            if (isset($vacanteSueldo['min'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_SUELDO, $vacanteSueldo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteSueldo['max'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_SUELDO, $vacanteSueldo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantePeer::VACANTE_SUELDO, $vacanteSueldo, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(VacantePeer::VACANTE_SUELDO_TIPO_PAGO, $vacanteSueldoTipoPago, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterByVacanteCandidatos($vacanteCandidatos = null, $comparison = null)
    {
        if (is_array($vacanteCandidatos)) {
            $useMinMax = false;
            if (isset($vacanteCandidatos['min'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_CANDIDATOS, $vacanteCandidatos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteCandidatos['max'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_CANDIDATOS, $vacanteCandidatos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantePeer::VACANTE_CANDIDATOS, $vacanteCandidatos, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterByVacanteFechaInicia($vacanteFechaInicia = null, $comparison = null)
    {
        if (is_array($vacanteFechaInicia)) {
            $useMinMax = false;
            if (isset($vacanteFechaInicia['min'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_FECHA_INICIA, $vacanteFechaInicia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteFechaInicia['max'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_FECHA_INICIA, $vacanteFechaInicia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantePeer::VACANTE_FECHA_INICIA, $vacanteFechaInicia, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterByVacanteFechaTermina($vacanteFechaTermina = null, $comparison = null)
    {
        if (is_array($vacanteFechaTermina)) {
            $useMinMax = false;
            if (isset($vacanteFechaTermina['min'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_FECHA_TERMINA, $vacanteFechaTermina['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteFechaTermina['max'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_FECHA_TERMINA, $vacanteFechaTermina['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantePeer::VACANTE_FECHA_TERMINA, $vacanteFechaTermina, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterByVacanteVisitas($vacanteVisitas = null, $comparison = null)
    {
        if (is_array($vacanteVisitas)) {
            $useMinMax = false;
            if (isset($vacanteVisitas['min'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_VISITAS, $vacanteVisitas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteVisitas['max'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_VISITAS, $vacanteVisitas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantePeer::VACANTE_VISITAS, $vacanteVisitas, $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(VacantePeer::VACANTE_ESTATUS, $vacanteEstatus, $comparison);
    }

    /**
     * Filter the query on the vacante_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByVacanteFecha('2011-03-14'); // WHERE vacante_fecha = '2011-03-14'
     * $query->filterByVacanteFecha('now'); // WHERE vacante_fecha = '2011-03-14'
     * $query->filterByVacanteFecha(array('max' => 'yesterday')); // WHERE vacante_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $vacanteFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VacanteQuery The current query, for fluid interface
     */
    public function filterByVacanteFecha($vacanteFecha = null, $comparison = null)
    {
        if (is_array($vacanteFecha)) {
            $useMinMax = false;
            if (isset($vacanteFecha['min'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_FECHA, $vacanteFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteFecha['max'])) {
                $this->addUsingAlias(VacantePeer::VACANTE_FECHA, $vacanteFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VacantePeer::VACANTE_FECHA, $vacanteFecha, $comparison);
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VacanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(VacantePeer::SUCURSAL_ID, $sucursal->getSucursalId(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VacantePeer::SUCURSAL_ID, $sucursal->toKeyValue('PrimaryKey', 'SucursalId'), $comparison);
        } else {
            throw new PropelException('filterBySucursal() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VacanteQuery The current query, for fluid interface
     */
    public function joinSucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sucursal');

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
            $this->addJoinObject($join, 'Sucursal');
        }

        return $this;
    }

    /**
     * Use the Sucursal relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursal', 'SucursalQuery');
    }

    /**
     * Filter the query by a related Postulante object
     *
     * @param   Postulante|PropelObjectCollection $postulante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VacanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPostulante($postulante, $comparison = null)
    {
        if ($postulante instanceof Postulante) {
            return $this
                ->addUsingAlias(VacantePeer::VACANTE_ID, $postulante->getVacanteId(), $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
     */
    public function joinPostulante($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function usePostulanteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPostulante($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Postulante', 'PostulanteQuery');
    }

    /**
     * Filter the query by a related Vacantecorreo object
     *
     * @param   Vacantecorreo|PropelObjectCollection $vacantecorreo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VacanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVacantecorreo($vacantecorreo, $comparison = null)
    {
        if ($vacantecorreo instanceof Vacantecorreo) {
            return $this
                ->addUsingAlias(VacantePeer::VACANTE_ID, $vacantecorreo->getVacanteId(), $comparison);
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
     * @return VacanteQuery The current query, for fluid interface
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
     * @param   Vacante $vacante Object to remove from the list of results
     *
     * @return VacanteQuery The current query, for fluid interface
     */
    public function prune($vacante = null)
    {
        if ($vacante) {
            $this->addUsingAlias(VacantePeer::VACANTE_ID, $vacante->getVacanteId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
