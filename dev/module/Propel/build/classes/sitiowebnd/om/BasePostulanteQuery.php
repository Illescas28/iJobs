<?php


/**
 * Base class that represents a query for the 'postulante' table.
 *
 *
 *
 * @method PostulanteQuery orderByPostulanteId($order = Criteria::ASC) Order by the postulante_id column
 * @method PostulanteQuery orderByVacanteId($order = Criteria::ASC) Order by the vacante_id column
 * @method PostulanteQuery orderByArealaboralId($order = Criteria::ASC) Order by the arealaboral_id column
 * @method PostulanteQuery orderByEducacionId($order = Criteria::ASC) Order by the educacion_id column
 * @method PostulanteQuery orderByPostulanteCorreo($order = Criteria::ASC) Order by the postulante_correo column
 * @method PostulanteQuery orderByPostulanteNombreCompleto($order = Criteria::ASC) Order by the postulante_nombre_completo column
 * @method PostulanteQuery orderByPostulanteTelefono($order = Criteria::ASC) Order by the postulante_telefono column
 * @method PostulanteQuery orderByPostulanteEnlace($order = Criteria::ASC) Order by the postulante_enlace column
 * @method PostulanteQuery orderByPostulanteMensaje($order = Criteria::ASC) Order by the postulante_mensaje column
 * @method PostulanteQuery orderByPostulanteCurriculumVitae($order = Criteria::ASC) Order by the postulante_curriculum_vitae column
 * @method PostulanteQuery orderByPostulanteEducacionEstatus($order = Criteria::ASC) Order by the postulante_educacion_estatus column
 * @method PostulanteQuery orderByPostulanteEducacionCertificado($order = Criteria::ASC) Order by the postulante_educacion_certificado column
 *
 * @method PostulanteQuery groupByPostulanteId() Group by the postulante_id column
 * @method PostulanteQuery groupByVacanteId() Group by the vacante_id column
 * @method PostulanteQuery groupByArealaboralId() Group by the arealaboral_id column
 * @method PostulanteQuery groupByEducacionId() Group by the educacion_id column
 * @method PostulanteQuery groupByPostulanteCorreo() Group by the postulante_correo column
 * @method PostulanteQuery groupByPostulanteNombreCompleto() Group by the postulante_nombre_completo column
 * @method PostulanteQuery groupByPostulanteTelefono() Group by the postulante_telefono column
 * @method PostulanteQuery groupByPostulanteEnlace() Group by the postulante_enlace column
 * @method PostulanteQuery groupByPostulanteMensaje() Group by the postulante_mensaje column
 * @method PostulanteQuery groupByPostulanteCurriculumVitae() Group by the postulante_curriculum_vitae column
 * @method PostulanteQuery groupByPostulanteEducacionEstatus() Group by the postulante_educacion_estatus column
 * @method PostulanteQuery groupByPostulanteEducacionCertificado() Group by the postulante_educacion_certificado column
 *
 * @method PostulanteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PostulanteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PostulanteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PostulanteQuery leftJoinArealaboral($relationAlias = null) Adds a LEFT JOIN clause to the query using the Arealaboral relation
 * @method PostulanteQuery rightJoinArealaboral($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Arealaboral relation
 * @method PostulanteQuery innerJoinArealaboral($relationAlias = null) Adds a INNER JOIN clause to the query using the Arealaboral relation
 *
 * @method PostulanteQuery leftJoinEducacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Educacion relation
 * @method PostulanteQuery rightJoinEducacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Educacion relation
 * @method PostulanteQuery innerJoinEducacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Educacion relation
 *
 * @method PostulanteQuery leftJoinVacante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vacante relation
 * @method PostulanteQuery rightJoinVacante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vacante relation
 * @method PostulanteQuery innerJoinVacante($relationAlias = null) Adds a INNER JOIN clause to the query using the Vacante relation
 *
 * @method Postulante findOne(PropelPDO $con = null) Return the first Postulante matching the query
 * @method Postulante findOneOrCreate(PropelPDO $con = null) Return the first Postulante matching the query, or a new Postulante object populated from the query conditions when no match is found
 *
 * @method Postulante findOneByVacanteId(int $vacante_id) Return the first Postulante filtered by the vacante_id column
 * @method Postulante findOneByArealaboralId(int $arealaboral_id) Return the first Postulante filtered by the arealaboral_id column
 * @method Postulante findOneByEducacionId(int $educacion_id) Return the first Postulante filtered by the educacion_id column
 * @method Postulante findOneByPostulanteCorreo(string $postulante_correo) Return the first Postulante filtered by the postulante_correo column
 * @method Postulante findOneByPostulanteNombreCompleto(string $postulante_nombre_completo) Return the first Postulante filtered by the postulante_nombre_completo column
 * @method Postulante findOneByPostulanteTelefono(string $postulante_telefono) Return the first Postulante filtered by the postulante_telefono column
 * @method Postulante findOneByPostulanteEnlace(string $postulante_enlace) Return the first Postulante filtered by the postulante_enlace column
 * @method Postulante findOneByPostulanteMensaje(string $postulante_mensaje) Return the first Postulante filtered by the postulante_mensaje column
 * @method Postulante findOneByPostulanteCurriculumVitae(string $postulante_curriculum_vitae) Return the first Postulante filtered by the postulante_curriculum_vitae column
 * @method Postulante findOneByPostulanteEducacionEstatus(string $postulante_educacion_estatus) Return the first Postulante filtered by the postulante_educacion_estatus column
 * @method Postulante findOneByPostulanteEducacionCertificado(string $postulante_educacion_certificado) Return the first Postulante filtered by the postulante_educacion_certificado column
 *
 * @method array findByPostulanteId(int $postulante_id) Return Postulante objects filtered by the postulante_id column
 * @method array findByVacanteId(int $vacante_id) Return Postulante objects filtered by the vacante_id column
 * @method array findByArealaboralId(int $arealaboral_id) Return Postulante objects filtered by the arealaboral_id column
 * @method array findByEducacionId(int $educacion_id) Return Postulante objects filtered by the educacion_id column
 * @method array findByPostulanteCorreo(string $postulante_correo) Return Postulante objects filtered by the postulante_correo column
 * @method array findByPostulanteNombreCompleto(string $postulante_nombre_completo) Return Postulante objects filtered by the postulante_nombre_completo column
 * @method array findByPostulanteTelefono(string $postulante_telefono) Return Postulante objects filtered by the postulante_telefono column
 * @method array findByPostulanteEnlace(string $postulante_enlace) Return Postulante objects filtered by the postulante_enlace column
 * @method array findByPostulanteMensaje(string $postulante_mensaje) Return Postulante objects filtered by the postulante_mensaje column
 * @method array findByPostulanteCurriculumVitae(string $postulante_curriculum_vitae) Return Postulante objects filtered by the postulante_curriculum_vitae column
 * @method array findByPostulanteEducacionEstatus(string $postulante_educacion_estatus) Return Postulante objects filtered by the postulante_educacion_estatus column
 * @method array findByPostulanteEducacionCertificado(string $postulante_educacion_certificado) Return Postulante objects filtered by the postulante_educacion_certificado column
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BasePostulanteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePostulanteQuery object.
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
            $modelName = 'Postulante';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PostulanteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PostulanteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PostulanteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PostulanteQuery) {
            return $criteria;
        }
        $query = new PostulanteQuery(null, null, $modelAlias);

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
     * @return   Postulante|Postulante[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PostulantePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Postulante A model object, or null if the key is not found
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
     * @return                 Postulante A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `postulante_id`, `vacante_id`, `arealaboral_id`, `educacion_id`, `postulante_correo`, `postulante_nombre_completo`, `postulante_telefono`, `postulante_enlace`, `postulante_mensaje`, `postulante_curriculum_vitae`, `postulante_educacion_estatus`, `postulante_educacion_certificado` FROM `postulante` WHERE `postulante_id` = :p0';
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
            $obj = new Postulante();
            $obj->hydrate($row);
            PostulantePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Postulante|Postulante[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Postulante[]|mixed the list of results, formatted by the current formatter
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
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_ID, $keys, Criteria::IN);
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
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function filterByPostulanteId($postulanteId = null, $comparison = null)
    {
        if (is_array($postulanteId)) {
            $useMinMax = false;
            if (isset($postulanteId['min'])) {
                $this->addUsingAlias(PostulantePeer::POSTULANTE_ID, $postulanteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postulanteId['max'])) {
                $this->addUsingAlias(PostulantePeer::POSTULANTE_ID, $postulanteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_ID, $postulanteId, $comparison);
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
     * @see       filterByVacante()
     *
     * @param     mixed $vacanteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function filterByVacanteId($vacanteId = null, $comparison = null)
    {
        if (is_array($vacanteId)) {
            $useMinMax = false;
            if (isset($vacanteId['min'])) {
                $this->addUsingAlias(PostulantePeer::VACANTE_ID, $vacanteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vacanteId['max'])) {
                $this->addUsingAlias(PostulantePeer::VACANTE_ID, $vacanteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantePeer::VACANTE_ID, $vacanteId, $comparison);
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
     * @see       filterByArealaboral()
     *
     * @param     mixed $arealaboralId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function filterByArealaboralId($arealaboralId = null, $comparison = null)
    {
        if (is_array($arealaboralId)) {
            $useMinMax = false;
            if (isset($arealaboralId['min'])) {
                $this->addUsingAlias(PostulantePeer::AREALABORAL_ID, $arealaboralId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arealaboralId['max'])) {
                $this->addUsingAlias(PostulantePeer::AREALABORAL_ID, $arealaboralId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantePeer::AREALABORAL_ID, $arealaboralId, $comparison);
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
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function filterByEducacionId($educacionId = null, $comparison = null)
    {
        if (is_array($educacionId)) {
            $useMinMax = false;
            if (isset($educacionId['min'])) {
                $this->addUsingAlias(PostulantePeer::EDUCACION_ID, $educacionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($educacionId['max'])) {
                $this->addUsingAlias(PostulantePeer::EDUCACION_ID, $educacionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostulantePeer::EDUCACION_ID, $educacionId, $comparison);
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
     * @return PostulanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_CORREO, $postulanteCorreo, $comparison);
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
     * @return PostulanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_NOMBRE_COMPLETO, $postulanteNombreCompleto, $comparison);
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
     * @return PostulanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_TELEFONO, $postulanteTelefono, $comparison);
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
     * @return PostulanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_ENLACE, $postulanteEnlace, $comparison);
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
     * @return PostulanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_MENSAJE, $postulanteMensaje, $comparison);
    }

    /**
     * Filter the query on the postulante_curriculum_vitae column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteCurriculumVitae('fooValue');   // WHERE postulante_curriculum_vitae = 'fooValue'
     * $query->filterByPostulanteCurriculumVitae('%fooValue%'); // WHERE postulante_curriculum_vitae LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postulanteCurriculumVitae The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function filterByPostulanteCurriculumVitae($postulanteCurriculumVitae = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postulanteCurriculumVitae)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postulanteCurriculumVitae)) {
                $postulanteCurriculumVitae = str_replace('*', '%', $postulanteCurriculumVitae);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_CURRICULUM_VITAE, $postulanteCurriculumVitae, $comparison);
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
     * @return PostulanteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_EDUCACION_ESTATUS, $postulanteEducacionEstatus, $comparison);
    }

    /**
     * Filter the query on the postulante_educacion_certificado column
     *
     * Example usage:
     * <code>
     * $query->filterByPostulanteEducacionCertificado('fooValue');   // WHERE postulante_educacion_certificado = 'fooValue'
     * $query->filterByPostulanteEducacionCertificado('%fooValue%'); // WHERE postulante_educacion_certificado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postulanteEducacionCertificado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function filterByPostulanteEducacionCertificado($postulanteEducacionCertificado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postulanteEducacionCertificado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postulanteEducacionCertificado)) {
                $postulanteEducacionCertificado = str_replace('*', '%', $postulanteEducacionCertificado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostulantePeer::POSTULANTE_EDUCACION_CERTIFICADO, $postulanteEducacionCertificado, $comparison);
    }

    /**
     * Filter the query by a related Arealaboral object
     *
     * @param   Arealaboral|PropelObjectCollection $arealaboral The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PostulanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArealaboral($arealaboral, $comparison = null)
    {
        if ($arealaboral instanceof Arealaboral) {
            return $this
                ->addUsingAlias(PostulantePeer::AREALABORAL_ID, $arealaboral->getArealaboralId(), $comparison);
        } elseif ($arealaboral instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PostulantePeer::AREALABORAL_ID, $arealaboral->toKeyValue('PrimaryKey', 'ArealaboralId'), $comparison);
        } else {
            throw new PropelException('filterByArealaboral() only accepts arguments of type Arealaboral or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Arealaboral relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function joinArealaboral($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Arealaboral');

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
            $this->addJoinObject($join, 'Arealaboral');
        }

        return $this;
    }

    /**
     * Use the Arealaboral relation Arealaboral object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArealaboralQuery A secondary query class using the current class as primary query
     */
    public function useArealaboralQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinArealaboral($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Arealaboral', 'ArealaboralQuery');
    }

    /**
     * Filter the query by a related Educacion object
     *
     * @param   Educacion|PropelObjectCollection $educacion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PostulanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEducacion($educacion, $comparison = null)
    {
        if ($educacion instanceof Educacion) {
            return $this
                ->addUsingAlias(PostulantePeer::EDUCACION_ID, $educacion->getEducacionId(), $comparison);
        } elseif ($educacion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PostulantePeer::EDUCACION_ID, $educacion->toKeyValue('PrimaryKey', 'EducacionId'), $comparison);
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
     * @return PostulanteQuery The current query, for fluid interface
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
     * Filter the query by a related Vacante object
     *
     * @param   Vacante|PropelObjectCollection $vacante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PostulanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVacante($vacante, $comparison = null)
    {
        if ($vacante instanceof Vacante) {
            return $this
                ->addUsingAlias(PostulantePeer::VACANTE_ID, $vacante->getVacanteId(), $comparison);
        } elseif ($vacante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PostulantePeer::VACANTE_ID, $vacante->toKeyValue('PrimaryKey', 'VacanteId'), $comparison);
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
     * @return PostulanteQuery The current query, for fluid interface
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
     * @param   Postulante $postulante Object to remove from the list of results
     *
     * @return PostulanteQuery The current query, for fluid interface
     */
    public function prune($postulante = null)
    {
        if ($postulante) {
            $this->addUsingAlias(PostulantePeer::POSTULANTE_ID, $postulante->getPostulanteId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
