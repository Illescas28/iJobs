<?php


/**
 * Base class that represents a query for the 'usuarios' table.
 *
 *
 *
 * @method UsuariosQuery orderByUsuarioId($order = Criteria::ASC) Order by the usuario_id column
 * @method UsuariosQuery orderByEmpresaId($order = Criteria::ASC) Order by the empresa_id column
 * @method UsuariosQuery orderByPostulanteId($order = Criteria::ASC) Order by the postulante_id column
 * @method UsuariosQuery orderByUsuarioContrasena($order = Criteria::ASC) Order by the usuario_contrasena column
 * @method UsuariosQuery orderByUsuarioFechaAlta($order = Criteria::ASC) Order by the usuario_fecha_alta column
 * @method UsuariosQuery orderByUsuarioUsuarioAlta($order = Criteria::ASC) Order by the usuario_usuario_alta column
 * @method UsuariosQuery orderByUsuarioFechaModifica($order = Criteria::ASC) Order by the usuario_fecha_modifica column
 * @method UsuariosQuery orderByUsuarioUsuarioModifica($order = Criteria::ASC) Order by the usuario_usuario_modifica column
 *
 * @method UsuariosQuery groupByUsuarioId() Group by the usuario_id column
 * @method UsuariosQuery groupByEmpresaId() Group by the empresa_id column
 * @method UsuariosQuery groupByPostulanteId() Group by the postulante_id column
 * @method UsuariosQuery groupByUsuarioContrasena() Group by the usuario_contrasena column
 * @method UsuariosQuery groupByUsuarioFechaAlta() Group by the usuario_fecha_alta column
 * @method UsuariosQuery groupByUsuarioUsuarioAlta() Group by the usuario_usuario_alta column
 * @method UsuariosQuery groupByUsuarioFechaModifica() Group by the usuario_fecha_modifica column
 * @method UsuariosQuery groupByUsuarioUsuarioModifica() Group by the usuario_usuario_modifica column
 *
 * @method UsuariosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsuariosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsuariosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsuariosQuery leftJoinEmpresas($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresas relation
 * @method UsuariosQuery rightJoinEmpresas($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresas relation
 * @method UsuariosQuery innerJoinEmpresas($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresas relation
 *
 * @method UsuariosQuery leftJoinPostulantes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Postulantes relation
 * @method UsuariosQuery rightJoinPostulantes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Postulantes relation
 * @method UsuariosQuery innerJoinPostulantes($relationAlias = null) Adds a INNER JOIN clause to the query using the Postulantes relation
 *
 * @method Usuarios findOne(PropelPDO $con = null) Return the first Usuarios matching the query
 * @method Usuarios findOneOrCreate(PropelPDO $con = null) Return the first Usuarios matching the query, or a new Usuarios object populated from the query conditions when no match is found
 *
 * @method Usuarios findOneByEmpresaId(int $empresa_id) Return the first Usuarios filtered by the empresa_id column
 * @method Usuarios findOneByPostulanteId(int $postulante_id) Return the first Usuarios filtered by the postulante_id column
 * @method Usuarios findOneByUsuarioContrasena(string $usuario_contrasena) Return the first Usuarios filtered by the usuario_contrasena column
 * @method Usuarios findOneByUsuarioFechaAlta(string $usuario_fecha_alta) Return the first Usuarios filtered by the usuario_fecha_alta column
 * @method Usuarios findOneByUsuarioUsuarioAlta(int $usuario_usuario_alta) Return the first Usuarios filtered by the usuario_usuario_alta column
 * @method Usuarios findOneByUsuarioFechaModifica(string $usuario_fecha_modifica) Return the first Usuarios filtered by the usuario_fecha_modifica column
 * @method Usuarios findOneByUsuarioUsuarioModifica(int $usuario_usuario_modifica) Return the first Usuarios filtered by the usuario_usuario_modifica column
 *
 * @method array findByUsuarioId(int $usuario_id) Return Usuarios objects filtered by the usuario_id column
 * @method array findByEmpresaId(int $empresa_id) Return Usuarios objects filtered by the empresa_id column
 * @method array findByPostulanteId(int $postulante_id) Return Usuarios objects filtered by the postulante_id column
 * @method array findByUsuarioContrasena(string $usuario_contrasena) Return Usuarios objects filtered by the usuario_contrasena column
 * @method array findByUsuarioFechaAlta(string $usuario_fecha_alta) Return Usuarios objects filtered by the usuario_fecha_alta column
 * @method array findByUsuarioUsuarioAlta(int $usuario_usuario_alta) Return Usuarios objects filtered by the usuario_usuario_alta column
 * @method array findByUsuarioFechaModifica(string $usuario_fecha_modifica) Return Usuarios objects filtered by the usuario_fecha_modifica column
 * @method array findByUsuarioUsuarioModifica(int $usuario_usuario_modifica) Return Usuarios objects filtered by the usuario_usuario_modifica column
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseUsuariosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsuariosQuery object.
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
            $modelName = 'Usuarios';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuariosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UsuariosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuariosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuariosQuery) {
            return $criteria;
        }
        $query = new UsuariosQuery(null, null, $modelAlias);

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
     * @return   Usuarios|Usuarios[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuariosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Usuarios A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUsuarioId($key, $con = null)
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
     * @return                 Usuarios A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `usuario_id`, `empresa_id`, `postulante_id`, `usuario_contrasena`, `usuario_fecha_alta`, `usuario_usuario_alta`, `usuario_fecha_modifica`, `usuario_usuario_modifica` FROM `usuarios` WHERE `usuario_id` = :p0';
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
            $obj = new Usuarios();
            $obj->hydrate($row);
            UsuariosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Usuarios|Usuarios[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Usuarios[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuariosPeer::USUARIO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuariosPeer::USUARIO_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the usuario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioId(1234); // WHERE usuario_id = 1234
     * $query->filterByUsuarioId(array(12, 34)); // WHERE usuario_id IN (12, 34)
     * $query->filterByUsuarioId(array('min' => 12)); // WHERE usuario_id >= 12
     * $query->filterByUsuarioId(array('max' => 12)); // WHERE usuario_id <= 12
     * </code>
     *
     * @param     mixed $usuarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByUsuarioId($usuarioId = null, $comparison = null)
    {
        if (is_array($usuarioId)) {
            $useMinMax = false;
            if (isset($usuarioId['min'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_ID, $usuarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioId['max'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_ID, $usuarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosPeer::USUARIO_ID, $usuarioId, $comparison);
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
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByEmpresaId($empresaId = null, $comparison = null)
    {
        if (is_array($empresaId)) {
            $useMinMax = false;
            if (isset($empresaId['min'])) {
                $this->addUsingAlias(UsuariosPeer::EMPRESA_ID, $empresaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empresaId['max'])) {
                $this->addUsingAlias(UsuariosPeer::EMPRESA_ID, $empresaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosPeer::EMPRESA_ID, $empresaId, $comparison);
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
     * @see       filterByPostulantes()
     *
     * @param     mixed $postulanteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByPostulanteId($postulanteId = null, $comparison = null)
    {
        if (is_array($postulanteId)) {
            $useMinMax = false;
            if (isset($postulanteId['min'])) {
                $this->addUsingAlias(UsuariosPeer::POSTULANTE_ID, $postulanteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postulanteId['max'])) {
                $this->addUsingAlias(UsuariosPeer::POSTULANTE_ID, $postulanteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosPeer::POSTULANTE_ID, $postulanteId, $comparison);
    }

    /**
     * Filter the query on the usuario_contrasena column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioContrasena('fooValue');   // WHERE usuario_contrasena = 'fooValue'
     * $query->filterByUsuarioContrasena('%fooValue%'); // WHERE usuario_contrasena LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usuarioContrasena The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByUsuarioContrasena($usuarioContrasena = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usuarioContrasena)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usuarioContrasena)) {
                $usuarioContrasena = str_replace('*', '%', $usuarioContrasena);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuariosPeer::USUARIO_CONTRASENA, $usuarioContrasena, $comparison);
    }

    /**
     * Filter the query on the usuario_fecha_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioFechaAlta('2011-03-14'); // WHERE usuario_fecha_alta = '2011-03-14'
     * $query->filterByUsuarioFechaAlta('now'); // WHERE usuario_fecha_alta = '2011-03-14'
     * $query->filterByUsuarioFechaAlta(array('max' => 'yesterday')); // WHERE usuario_fecha_alta < '2011-03-13'
     * </code>
     *
     * @param     mixed $usuarioFechaAlta The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByUsuarioFechaAlta($usuarioFechaAlta = null, $comparison = null)
    {
        if (is_array($usuarioFechaAlta)) {
            $useMinMax = false;
            if (isset($usuarioFechaAlta['min'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_FECHA_ALTA, $usuarioFechaAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioFechaAlta['max'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_FECHA_ALTA, $usuarioFechaAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosPeer::USUARIO_FECHA_ALTA, $usuarioFechaAlta, $comparison);
    }

    /**
     * Filter the query on the usuario_usuario_alta column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioUsuarioAlta(1234); // WHERE usuario_usuario_alta = 1234
     * $query->filterByUsuarioUsuarioAlta(array(12, 34)); // WHERE usuario_usuario_alta IN (12, 34)
     * $query->filterByUsuarioUsuarioAlta(array('min' => 12)); // WHERE usuario_usuario_alta >= 12
     * $query->filterByUsuarioUsuarioAlta(array('max' => 12)); // WHERE usuario_usuario_alta <= 12
     * </code>
     *
     * @param     mixed $usuarioUsuarioAlta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByUsuarioUsuarioAlta($usuarioUsuarioAlta = null, $comparison = null)
    {
        if (is_array($usuarioUsuarioAlta)) {
            $useMinMax = false;
            if (isset($usuarioUsuarioAlta['min'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_USUARIO_ALTA, $usuarioUsuarioAlta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioUsuarioAlta['max'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_USUARIO_ALTA, $usuarioUsuarioAlta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosPeer::USUARIO_USUARIO_ALTA, $usuarioUsuarioAlta, $comparison);
    }

    /**
     * Filter the query on the usuario_fecha_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioFechaModifica('2011-03-14'); // WHERE usuario_fecha_modifica = '2011-03-14'
     * $query->filterByUsuarioFechaModifica('now'); // WHERE usuario_fecha_modifica = '2011-03-14'
     * $query->filterByUsuarioFechaModifica(array('max' => 'yesterday')); // WHERE usuario_fecha_modifica < '2011-03-13'
     * </code>
     *
     * @param     mixed $usuarioFechaModifica The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByUsuarioFechaModifica($usuarioFechaModifica = null, $comparison = null)
    {
        if (is_array($usuarioFechaModifica)) {
            $useMinMax = false;
            if (isset($usuarioFechaModifica['min'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_FECHA_MODIFICA, $usuarioFechaModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioFechaModifica['max'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_FECHA_MODIFICA, $usuarioFechaModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosPeer::USUARIO_FECHA_MODIFICA, $usuarioFechaModifica, $comparison);
    }

    /**
     * Filter the query on the usuario_usuario_modifica column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioUsuarioModifica(1234); // WHERE usuario_usuario_modifica = 1234
     * $query->filterByUsuarioUsuarioModifica(array(12, 34)); // WHERE usuario_usuario_modifica IN (12, 34)
     * $query->filterByUsuarioUsuarioModifica(array('min' => 12)); // WHERE usuario_usuario_modifica >= 12
     * $query->filterByUsuarioUsuarioModifica(array('max' => 12)); // WHERE usuario_usuario_modifica <= 12
     * </code>
     *
     * @param     mixed $usuarioUsuarioModifica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function filterByUsuarioUsuarioModifica($usuarioUsuarioModifica = null, $comparison = null)
    {
        if (is_array($usuarioUsuarioModifica)) {
            $useMinMax = false;
            if (isset($usuarioUsuarioModifica['min'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_USUARIO_MODIFICA, $usuarioUsuarioModifica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioUsuarioModifica['max'])) {
                $this->addUsingAlias(UsuariosPeer::USUARIO_USUARIO_MODIFICA, $usuarioUsuarioModifica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosPeer::USUARIO_USUARIO_MODIFICA, $usuarioUsuarioModifica, $comparison);
    }

    /**
     * Filter the query by a related Empresas object
     *
     * @param   Empresas|PropelObjectCollection $empresas The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuariosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresas($empresas, $comparison = null)
    {
        if ($empresas instanceof Empresas) {
            return $this
                ->addUsingAlias(UsuariosPeer::EMPRESA_ID, $empresas->getEmpresaId(), $comparison);
        } elseif ($empresas instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuariosPeer::EMPRESA_ID, $empresas->toKeyValue('PrimaryKey', 'EmpresaId'), $comparison);
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
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function joinEmpresas($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useEmpresasQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmpresas($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empresas', 'EmpresasQuery');
    }

    /**
     * Filter the query by a related Postulantes object
     *
     * @param   Postulantes|PropelObjectCollection $postulantes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuariosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPostulantes($postulantes, $comparison = null)
    {
        if ($postulantes instanceof Postulantes) {
            return $this
                ->addUsingAlias(UsuariosPeer::POSTULANTE_ID, $postulantes->getPostulanteId(), $comparison);
        } elseif ($postulantes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuariosPeer::POSTULANTE_ID, $postulantes->toKeyValue('PrimaryKey', 'PostulanteId'), $comparison);
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
     * @return UsuariosQuery The current query, for fluid interface
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
     * @param   Usuarios $usuarios Object to remove from the list of results
     *
     * @return UsuariosQuery The current query, for fluid interface
     */
    public function prune($usuarios = null)
    {
        if ($usuarios) {
            $this->addUsingAlias(UsuariosPeer::USUARIO_ID, $usuarios->getUsuarioId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
