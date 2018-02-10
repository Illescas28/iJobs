<?php


/**
 * Base class that represents a query for the 'postulantes' table.
 *
 *
 *
 * @method PostulantesQuery orderByPostulanteId($order = Criteria::ASC) Order by the postulante_id column
 * @method PostulantesQuery orderByVacanteId($order = Criteria::ASC) Order by the vacante_id column
 * @method PostulantesQuery orderByArealaboralId($order = Criteria::ASC) Order by the arealaboral_id column
 * @method PostulantesQuery orderByEducacionId($order = Criteria::ASC) Order by the educacion_id column
 * @method PostulantesQuery orderByPostulanteCorreo($order = Criteria::ASC) Order by the postulante_correo column
 * @method PostulantesQuery orderByPostulanteNombreCompleto($order = Criteria::ASC) Order by the postulante_nombre_completo column
 * @method PostulantesQuery orderByPostulanteTelefono($order = Criteria::ASC) Order by the postulante_telefono column
 * @method PostulantesQuery orderByPostulanteEnlace($order = Criteria::ASC) Order by the postulante_enlace column
 * @method PostulantesQuery orderByPostulanteMensaje($order = Criteria::ASC) Order by the postulante_mensaje column
 * @method PostulantesQuery orderByPostulanteCvUrl($order = Criteria::ASC) Order by the postulante_cv_url column
 * @method PostulantesQuery orderByPostulanteEducacionEstatus($order = Criteria::ASC) Order by the postulante_educacion_estatus column
 * @method PostulantesQuery orderByPostulanteEducacionCertificado($order = Criteria::ASC) Order by the postulante_educacion_certificado column
 * @method PostulantesQuery orderByPostulanteEstatus($order = Criteria::ASC) Order by the postulante_estatus column
 * @method PostulantesQuery orderByPostulanteFechaAlta($order = Criteria::ASC) Order by the postulante_fecha_alta column
 * @method PostulantesQuery orderByPostulanteUsuarioAlta($order = Criteria::ASC) Order by the postulante_usuario_alta column
 * @method PostulantesQuery orderByPostulanteFechaModifica($order = Criteria::ASC) Order by the postulante_fecha_modifica column
 * @method PostulantesQuery orderByPostulanteUsuarioModifica($order = Criteria::ASC) Order by the postulante_usuario_modifica column
 *
 * @method PostulantesQuery groupByPostulanteId() Group by the postulante_id column
 * @method PostulantesQuery groupByVacanteId() Group by the vacante_id column
 * @method PostulantesQuery groupByArealaboralId() Group by the arealaboral_id column
 * @method PostulantesQuery groupByEducacionId() Group by the educacion_id column
 * @method PostulantesQuery groupByPostulanteCorreo() Group by the postulante_correo column
 * @method PostulantesQuery groupByPostulanteNombreCompleto() Group by the postulante_nombre_completo column
 * @method PostulantesQuery groupByPostulanteTelefono() Group by the postulante_telefono column
 * @method PostulantesQuery groupByPostulanteEnlace() Group by the postulante_enlace column
 * @method PostulantesQuery groupByPostulanteMensaje() Group by the postulante_mensaje column
 * @method PostulantesQuery groupByPostulanteCvUrl() Group by the postulante_cv_url column
 * @method PostulantesQuery groupByPostulanteEducacionEstatus() Group by the postulante_educacion_estatus column
 * @method PostulantesQuery groupByPostulanteEducacionCertificado() Group by the postulante_educacion_certificado column
 * @method PostulantesQuery groupByPostulanteEstatus() Group by the postulante_estatus column
 * @method PostulantesQuery groupByPostulanteFechaAlta() Group by the postulante_fecha_alta column
 * @method PostulantesQuery groupByPostulanteUsuarioAlta() Group by the postulante_usuario_alta column
 * @method PostulantesQuery groupByPostulanteFechaModifica() Group by the postulante_fecha_modifica column
 * @method PostulantesQuery groupByPostulanteUsuarioModifica() Group by the postulante_usuario_modifica column
 *
 * @method PostulantesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PostulantesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PostulantesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PostulantesQuery leftJoinAreaslaborales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Areaslaborales relation
 * @method PostulantesQuery rightJoinAreaslaborales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Areaslaborales relation
 * @method PostulantesQuery innerJoinAreaslaborales($relationAlias = null) Adds a INNER JOIN clause to the query using the Areaslaborales relation
 *
 * @method PostulantesQuery leftJoinEducacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Educacion relation
 * @method PostulantesQuery rightJoinEducacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Educacion relation
 * @method PostulantesQuery innerJoinEducacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Educacion relation
 *
 * @method PostulantesQuery leftJoinVacantes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vacantes relation
 * @method PostulantesQuery rightJoinVacantes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vacantes relation
 * @method PostulantesQuery innerJoinVacantes($relationAlias = null) Adds a INNER JOIN clause to the query using the Vacantes relation
 *
 * @method PostulantesQuery leftJoinUsuarios($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuarios relation
 * @method PostulantesQuery rightJoinUsuarios($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuarios relation
 * @method PostulantesQuery innerJoinUsuarios($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuarios relation
 *
 * @method Postulantes findOne(PropelPDO $con = null) Return the first Postulantes matching the query
 * @method Postulantes findOneOrCreate(PropelPDO $con = null) Return the first Postulantes matching the query, or a new Postulantes object populated from the query conditions when no match is found
 *
 * @method Postulantes findOneByVacanteId(int $vacante_id) Return the first Postulantes filtered by the vacante_id column
 * @method Postulantes findOneByArealaboralId(int $arealaboral_id) Return the first Postulantes filtered by the arealaboral_id column
 * @method Postulantes findOneByEducacionId(int $educacion_id) Return the first Postulantes filtered by the educacion_id column
 * @method Postulantes findOneByPostulanteCorreo(string $postulante_correo) Return the first Postulantes filtered by the postulante_correo column
 * @method Postulantes findOneByPostulanteNombreCompleto(string $postulante_nombre_completo) Return the first Postulantes filtered by the postulante_nombre_completo column
 * @method Postulantes findOneByPostulanteTelefono(string $postulante_telefono) Return the first Postulantes filtered by the postulante_telefono column
 * @method Postulantes findOneByPostulanteEnlace(string $postulante_enlace) Return the first Postulantes filtered by the postulante_enlace column
 * @method Postulantes findOneByPostulanteMensaje(string $postulante_mensaje) Return the first Postulantes filtered by the postulante_mensaje column
 * @method Postulantes findOneByPostulanteCvUrl(string $postulante_cv_url) Return the first Postulantes filtered by the postulante_cv_url column
 * @method Postulantes findOneByPostulanteEducacionEstatus(string $postulante_educacion_estatus) Return the first Postulantes filtered by the postulante_educacion_estatus column
 * @method Postulantes findOneByPostulanteEducacionCertificado(boolean $postulante_educacion_certificado) Return the first Postulantes filtered by the postulante_educacion_certificado column
 * @method Postulantes findOneByPostulanteEstatus(boolean $postulante_estatus) Return the first Postulantes filtered by the postulante_estatus column
 * @method Postulantes findOneByPostulanteFechaAlta(string $postulante_fecha_alta) Return the first Postulantes filtered by the postulante_fecha_alta column
 * @method Postulantes findOneByPostulanteUsuarioAlta(int $postulante_usuario_alta) Return the first Postulantes filtered by the postulante_usuario_alta column
 * @method Postulantes findOneByPostulanteFechaModifica(string $postulante_fecha_modifica) Return the first Postulantes filtered by the postulante_fecha_modifica column
 * @method Postulantes findOneByPostulanteUsuarioModifica(int $postulante_usuario_modifica) Return the first Postulantes filtered by the postulante_usuario_modifica column
 *
 * @method array findByPostulanteId(int $postulante_id) Return Postulantes objects filtered by the postulante_id column
 * @method array findByVacanteId(int $vacante_id) Return Postulantes objects filtered by the vacante_id column
 * @method array findByArealaboralId(int $arealaboral_id) Return Postulantes objects filtered by the arealaboral_id column
 * @method array findByEducacionId(int $educacion_id) Return Postulantes objects filtered by the educacion_id column
 * @method array findByPostulanteCorreo(string $postulante_correo) Return Postulantes objects filtered by the postulante_correo column
 * @method array findByPostulanteNombreCompleto(string $postulante_nombre_completo) Return Postulantes objects filtered by the postulante_nombre_completo column
 * @method array findByPostulanteTelefono(string $postulante_telefono) Return Postulantes objects filtered by the postulante_telefono column
 * @method array findByPostulanteEnlace(string $postulante_enlace) Return Postulantes objects filtered by the postulante_enlace column
 * @method array findByPostulanteMensaje(string $postulante_mensaje) Return Postulantes objects filtered by the postulante_mensaje column
 * @method array findByPostulanteCvUrl(string $postulante_cv_url) Return Postulantes objects filtered by the postulante_cv_url column
 * @method array findByPostulanteEducacionEstatus(string $postulante_educacion_estatus) Return Postulantes objects filtered by the postulante_educacion_estatus column
 * @method array findByPostulanteEducacionCertificado(boolean $postulante_educacion_certificado) Return Postulantes objects filtered by the postulante_educacion_certificado column
 * @method array findByPostulanteEstatus(boolean $postulante_estatus) Return Postulantes objects filtered by the postulante_estatus column
 * @method array findByPostulanteFechaAlta(string $postulante_fecha_alta) Return Postulantes objects filtered by the postulante_fecha_alta column
 * @method array findByPostulanteUsuarioAlta(int $postulante_usuario_alta) Return Postulantes objects filtered by the postulante_usuario_alta column
 * @method array findByPostulanteFechaModifica(string $postulante_fecha_modifica) Return Postulantes objects filtered by the postulante_fecha_modifica column
 * @method array findByPostulanteUsuarioModifica(int $postulante_usuario_modifica) Return Postulantes objects filtered by the postulante_usuario_modifica column
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BasePostulantesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePostulantesQuery object.
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
            $modelName = 'Postulantes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PostulantesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PostulantesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PostulantesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PostulantesQuery) {
            return $criteria;
        }
        $query = new PostulantesQuery(null, null, $modelAlias);

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
     * @return   Postulantes|Postulantes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PostulantesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PostulantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Postulantes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPostulanteId($key, $con = null)
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
     * @return                 Postulantes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `postulante_id`, `vacante_id`, `arealaboral_id`, `educacion_id`, `postulante_correo`, `postulante_nombre_completo`, `postulante_telefono`, `postulante_enlace`, `postulante_mensaje`, `postulante_cv_url`, `postulante_educacion_estatus`, `postulante_educacion_certificado`, `postulante_estatus`, `postulante_fecha_alta`, `postulante_usuario_alta`, `postulante_fecha_modifica`, `postulante_usuario_modifica` FROM `postulantes` WHERE `postulante_id` = :p0';
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
            $obj = new Postulantes();
            $obj->hydrate($row);
            PostulantesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Postulantes|Postulantes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Postulantes[]|mixed the list of results, formatted by the current formatter
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
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the postulante_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteId(1234); // WHERE postulante_id = 1234
     * $query->filterByPostulanteId(array(12, 34)); // WHERE postulante_id IN (12, 34)
     * $query->filterByPostulanteId(array('min' => 12)); // WHERE postulante_id >= 12
     * $query->filterByPostulanteId(array('max' => 12)); // WHERE postulante_id <= 12
     * </code>
     *
     * @param     mixed $postulanteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteId($postulanteId = null, $comparison = null)
    {
        if (is_array($postulanteId)) {
            $useMinMax = false;
            if (isset($postulanteId['min'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_ID, $postulanteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postulanteId['max'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_ID, $postulanteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_ID, $postulanteId, $comparison);
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
     * @see       filterByVacantes()
     *
     * @param     mixed $vacanteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByVacanteId($vacanteId = null, $comparison = null)
    {
        if (is_array($vacanteId)) {
            $useMinMax = false;
            if (isset($vacanteId['min'])) {
                $this->addUsingAlias(PostulantesPeer::VACANTE_ID, $vacanteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteId['max'])) {
                $this->addUsingAlias(PostulantesPeer::VACANTE_ID, $vacanteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::VACANTE_ID, $vacanteId, $comparison);
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
     * @see       filterByAreaslaborales()
     *
     * @param     mixed $arealaboralId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByArealaboralId($arealaboralId = null, $comparison = null)
    {
        if (is_array($arealaboralId)) {
            $useMinMax = false;
            if (isset($arealaboralId['min'])) {
                $this->addUsingAlias(PostulantesPeer::AREALABORAL_ID, $arealaboralId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arealaboralId['max'])) {
                $this->addUsingAlias(PostulantesPeer::AREALABORAL_ID, $arealaboralId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::AREALABORAL_ID, $arealaboralId, $comparison);
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
     * @see       filterByEducacion()
     *
     * @param     mixed $educacionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByEducacionId($educacionId = null, $comparison = null)
    {
        if (is_array($educacionId)) {
            $useMinMax = false;
            if (isset($educacionId['min'])) {
                $this->addUsingAlias(PostulantesPeer::EDUCACION_ID, $educacionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($educacionId['max'])) {
                $this->addUsingAlias(PostulantesPeer::EDUCACION_ID, $educacionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::EDUCACION_ID, $educacionId, $comparison);
    }

    /**
     * Filter the query on the postulante_correo column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteCorreo('fooValue');   // WHERE postulante_correo = 'fooValue'
     * $query->filterByPostulanteCorreo('%fooValue%'); // WHERE postulante_correo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postulanteCorreo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteCorreo($postulanteCorreo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postulanteCorreo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postulanteCorreo)) {
                $postulanteCorreo = str_replace('*', '%', $postulanteCorreo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_CORREO, $postulanteCorreo, $comparison);
    }

    /**
     * Filter the query on the postulante_nombre_completo column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteNombreCompleto('fooValue');   // WHERE postulante_nombre_completo = 'fooValue'
     * $query->filterByPostulanteNombreCompleto('%fooValue%'); // WHERE postulante_nombre_completo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postulanteNombreCompleto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteNombreCompleto($postulanteNombreCompleto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postulanteNombreCompleto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postulanteNombreCompleto)) {
                $postulanteNombreCompleto = str_replace('*', '%', $postulanteNombreCompleto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_NOMBRE_COMPLETO, $postulanteNombreCompleto, $comparison);
    }

    /**
     * Filter the query on the postulante_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteTelefono('fooValue');   // WHERE postulante_telefono = 'fooValue'
     * $query->filterByPostulanteTelefono('%fooValue%'); // WHERE postulante_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postulanteTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteTelefono($postulanteTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postulanteTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postulanteTelefono)) {
                $postulanteTelefono = str_replace('*', '%', $postulanteTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_TELEFONO, $postulanteTelefono, $comparison);
    }

    /**
     * Filter the query on the postulante_enlace column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteEnlace('fooValue');   // WHERE postulante_enlace = 'fooValue'
     * $query->filterByPostulanteEnlace('%fooValue%'); // WHERE postulante_enlace LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postulanteEnlace The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteEnlace($postulanteEnlace = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postulanteEnlace)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postulanteEnlace)) {
                $postulanteEnlace = str_replace('*', '%', $postulanteEnlace);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_ENLACE, $postulanteEnlace, $comparison);
    }

    /**
     * Filter the query on the postulante_mensaje column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteMensaje('fooValue');   // WHERE postulante_mensaje = 'fooValue'
     * $query->filterByPostulanteMensaje('%fooValue%'); // WHERE postulante_mensaje LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postulanteMensaje The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteMensaje($postulanteMensaje = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postulanteMensaje)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postulanteMensaje)) {
                $postulanteMensaje = str_replace('*', '%', $postulanteMensaje);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_MENSAJE, $postulanteMensaje, $comparison);
    }

    /**
     * Filter the query on the postulante_cv_url column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteCvUrl('fooValue');   // WHERE postulante_cv_url = 'fooValue'
     * $query->filterByPostulanteCvUrl('%fooValue%'); // WHERE postulante_cv_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postulanteCvUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteCvUrl($postulanteCvUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postulanteCvUrl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postulanteCvUrl)) {
                $postulanteCvUrl = str_replace('*', '%', $postulanteCvUrl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_CV_URL, $postulanteCvUrl, $comparison);
    }

    /**
     * Filter the query on the postulante_educacion_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteEducacionEstatus('fooValue');   // WHERE postulante_educacion_estatus = 'fooValue'
     * $query->filterByPostulanteEducacionEstatus('%fooValue%'); // WHERE postulante_educacion_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postulanteEducacionEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteEducacionEstatus($postulanteEducacionEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postulanteEducacionEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postulanteEducacionEstatus)) {
                $postulanteEducacionEstatus = str_replace('*', '%', $postulanteEducacionEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_EDUCACION_ESTATUS, $postulanteEducacionEstatus, $comparison);
    }

    /**
     * Filter the query on the postulante_educacion_certificado column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteEducacionCertificado(true); // WHERE postulante_educacion_certificado = true
     * $query->filterByPostulanteEducacionCertificado('yes'); // WHERE postulante_educacion_certificado = true
     * </code>
     *
     * @param     boolean|string $postulanteEducacionCertificado The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteEducacionCertificado($postulanteEducacionCertificado = null, $comparison = null)
    {
        if (is_string($postulanteEducacionCertificado)) {
            $postulanteEducacionCertificado = in_array(strtolower($postulanteEducacionCertificado), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_EDUCACION_CERTIFICADO, $postulanteEducacionCertificado, $comparison);
    }

    /**
     * Filter the query on the postulante_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteEstatus(true); // WHERE postulante_estatus = true
     * $query->filterByPostulanteEstatus('yes'); // WHERE postulante_estatus = true
     * </code>
     *
     * @param     boolean|string $postulanteEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteEstatus($postulanteEstatus = null, $comparison = null)
    {
        if (is_string($postulanteEstatus)) {
            $postulanteEstatus = in_array(strtolower($postulanteEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_ESTATUS, $postulanteEstatus, $comparison);
    }

    /**
     * Filter the query on the postulante_fecha_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteFechaAlta('2011-03-14'); // WHERE postulante_fecha_alta = '2011-03-14'
     * $query->filterByPostulanteFechaAlta('now'); // WHERE postulante_fecha_alta = '2011-03-14'
     * $query->filterByPostulanteFechaAlta(array('max' => 'yesterday')); // WHERE postulante_fecha_alta < '2011-03-13'
     * </code>
     *
     * @param     mixed $postulanteFechaAlta The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteFechaAlta($postulanteFechaAlta = null, $comparison = null)
    {
        if (is_array($postulanteFechaAlta)) {
            $useMinMax = false;
            if (isset($postulanteFechaAlta['min'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_FECHA_ALTA, $postulanteFechaAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postulanteFechaAlta['max'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_FECHA_ALTA, $postulanteFechaAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_FECHA_ALTA, $postulanteFechaAlta, $comparison);
    }

    /**
     * Filter the query on the postulante_usuario_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteUsuarioAlta(1234); // WHERE postulante_usuario_alta = 1234
     * $query->filterByPostulanteUsuarioAlta(array(12, 34)); // WHERE postulante_usuario_alta IN (12, 34)
     * $query->filterByPostulanteUsuarioAlta(array('min' => 12)); // WHERE postulante_usuario_alta >= 12
     * $query->filterByPostulanteUsuarioAlta(array('max' => 12)); // WHERE postulante_usuario_alta <= 12
     * </code>
     *
     * @param     mixed $postulanteUsuarioAlta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteUsuarioAlta($postulanteUsuarioAlta = null, $comparison = null)
    {
        if (is_array($postulanteUsuarioAlta)) {
            $useMinMax = false;
            if (isset($postulanteUsuarioAlta['min'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_USUARIO_ALTA, $postulanteUsuarioAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postulanteUsuarioAlta['max'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_USUARIO_ALTA, $postulanteUsuarioAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_USUARIO_ALTA, $postulanteUsuarioAlta, $comparison);
    }

    /**
     * Filter the query on the postulante_fecha_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteFechaModifica('2011-03-14'); // WHERE postulante_fecha_modifica = '2011-03-14'
     * $query->filterByPostulanteFechaModifica('now'); // WHERE postulante_fecha_modifica = '2011-03-14'
     * $query->filterByPostulanteFechaModifica(array('max' => 'yesterday')); // WHERE postulante_fecha_modifica < '2011-03-13'
     * </code>
     *
     * @param     mixed $postulanteFechaModifica The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteFechaModifica($postulanteFechaModifica = null, $comparison = null)
    {
        if (is_array($postulanteFechaModifica)) {
            $useMinMax = false;
            if (isset($postulanteFechaModifica['min'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_FECHA_MODIFICA, $postulanteFechaModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postulanteFechaModifica['max'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_FECHA_MODIFICA, $postulanteFechaModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_FECHA_MODIFICA, $postulanteFechaModifica, $comparison);
    }

    /**
     * Filter the query on the postulante_usuario_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteUsuarioModifica(1234); // WHERE postulante_usuario_modifica = 1234
     * $query->filterByPostulanteUsuarioModifica(array(12, 34)); // WHERE postulante_usuario_modifica IN (12, 34)
     * $query->filterByPostulanteUsuarioModifica(array('min' => 12)); // WHERE postulante_usuario_modifica >= 12
     * $query->filterByPostulanteUsuarioModifica(array('max' => 12)); // WHERE postulante_usuario_modifica <= 12
     * </code>
     *
     * @param     mixed $postulanteUsuarioModifica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function filterByPostulanteUsuarioModifica($postulanteUsuarioModifica = null, $comparison = null)
    {
        if (is_array($postulanteUsuarioModifica)) {
            $useMinMax = false;
            if (isset($postulanteUsuarioModifica['min'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_USUARIO_MODIFICA, $postulanteUsuarioModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postulanteUsuarioModifica['max'])) {
                $this->addUsingAlias(PostulantesPeer::POSTULANTE_USUARIO_MODIFICA, $postulanteUsuarioModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantesPeer::POSTULANTE_USUARIO_MODIFICA, $postulanteUsuarioModifica, $comparison);
    }

    /**
     * Filter the query by a related Areaslaborales object
     *
     * @param   Areaslaborales|PropelObjectCollection $areaslaborales The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PostulantesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAreaslaborales($areaslaborales, $comparison = null)
    {
        if ($areaslaborales instanceof Areaslaborales) {
            return $this
                ->addUsingAlias(PostulantesPeer::AREALABORAL_ID, $areaslaborales->getArealaboralId(), $comparison);
        } elseif ($areaslaborales instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PostulantesPeer::AREALABORAL_ID, $areaslaborales->toKeyValue('PrimaryKey', 'ArealaboralId'), $comparison);
        } else {
            throw new PropelException('filterByAreaslaborales() only accepts arguments of type Areaslaborales or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Areaslaborales relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function joinAreaslaborales($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Areaslaborales');

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
            $this->addJoinObject($join, 'Areaslaborales');
        }

        return $this;
    }

    /**
     * Use the Areaslaborales relation Areaslaborales object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AreaslaboralesQuery A secondary query class using the current class as primary query
     */
    public function useAreaslaboralesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAreaslaborales($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Areaslaborales', 'AreaslaboralesQuery');
    }

    /**
     * Filter the query by a related Educacion object
     *
     * @param   Educacion|PropelObjectCollection $educacion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PostulantesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEducacion($educacion, $comparison = null)
    {
        if ($educacion instanceof Educacion) {
            return $this
                ->addUsingAlias(PostulantesPeer::EDUCACION_ID, $educacion->getEducacionId(), $comparison);
        } elseif ($educacion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PostulantesPeer::EDUCACION_ID, $educacion->toKeyValue('PrimaryKey', 'EducacionId'), $comparison);
        } else {
            throw new PropelException('filterByEducacion() only accepts arguments of type Educacion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Educacion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function joinEducacion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Educacion');

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
            $this->addJoinObject($join, 'Educacion');
        }

        return $this;
    }

    /**
     * Use the Educacion relation Educacion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EducacionQuery A secondary query class using the current class as primary query
     */
    public function useEducacionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEducacion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Educacion', 'EducacionQuery');
    }

    /**
     * Filter the query by a related Vacantes object
     *
     * @param   Vacantes|PropelObjectCollection $vacantes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PostulantesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVacantes($vacantes, $comparison = null)
    {
        if ($vacantes instanceof Vacantes) {
            return $this
                ->addUsingAlias(PostulantesPeer::VACANTE_ID, $vacantes->getVacanteId(), $comparison);
        } elseif ($vacantes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PostulantesPeer::VACANTE_ID, $vacantes->toKeyValue('PrimaryKey', 'VacanteId'), $comparison);
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
     * @return PostulantesQuery The current query, for fluid interface
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
     * Filter the query by a related Usuarios object
     *
     * @param   Usuarios|PropelObjectCollection $usuarios  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PostulantesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarios($usuarios, $comparison = null)
    {
        if ($usuarios instanceof Usuarios) {
            return $this
                ->addUsingAlias(PostulantesPeer::POSTULANTE_ID, $usuarios->getPostulanteId(), $comparison);
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
     * @return PostulantesQuery The current query, for fluid interface
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
     * @param   Postulantes $postulantes Object to remove from the list of results
     *
     * @return PostulantesQuery The current query, for fluid interface
     */
    public function prune($postulantes = null)
    {
        if ($postulantes) {
            $this->addUsingAlias(PostulantesPeer::POSTULANTE_ID, $postulantes->getPostulanteId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
