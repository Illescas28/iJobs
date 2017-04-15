<?php


/**
 * Base class that represents a query for the 'usuario' table.
 *
 *
 *
 * @method UsuarioQuery orderByUsuarioId($order = Criteria::ASC) Order by the usuario_id column
 * @method UsuarioQuery orderByUsuarioNombre($order = Criteria::ASC) Order by the usuario_nombre column
 * @method UsuarioQuery orderByUsuarioContrasena($order = Criteria::ASC) Order by the usuario_contrasena column
 *
 * @method UsuarioQuery groupByUsuarioId() Group by the usuario_id column
 * @method UsuarioQuery groupByUsuarioNombre() Group by the usuario_nombre column
 * @method UsuarioQuery groupByUsuarioContrasena() Group by the usuario_contrasena column
 *
 * @method UsuarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsuarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsuarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Usuario findOne(PropelPDO $con = null) Return the first Usuario matching the query
 * @method Usuario findOneOrCreate(PropelPDO $con = null) Return the first Usuario matching the query, or a new Usuario object populated from the query conditions when no match is found
 *
 * @method Usuario findOneByUsuarioNombre(string $usuario_nombre) Return the first Usuario filtered by the usuario_nombre column
 * @method Usuario findOneByUsuarioContrasena(string $usuario_contrasena) Return the first Usuario filtered by the usuario_contrasena column
 *
 * @method array findByUsuarioId(int $usuario_id) Return Usuario objects filtered by the usuario_id column
 * @method array findByUsuarioNombre(string $usuario_nombre) Return Usuario objects filtered by the usuario_nombre column
 * @method array findByUsuarioContrasena(string $usuario_contrasena) Return Usuario objects filtered by the usuario_contrasena column
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseUsuarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsuarioQuery object.
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
            $modelName = 'Usuario';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UsuarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioQuery) {
            return $criteria;
        }
        $query = new UsuarioQuery(null, null, $modelAlias);

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
     * @return   Usuario|Usuario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Usuario A model object, or null if the key is not found
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
     * @return                 Usuario A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `usuario_id`, `usuario_nombre`, `usuario_contrasena` FROM `usuario` WHERE `usuario_id` = :p0';
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
            $obj = new Usuario();
            $obj->hydrate($row);
            UsuarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Usuario|Usuario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Usuario[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuarioPeer::USUARIO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuarioPeer::USUARIO_ID, $keys, Criteria::IN);
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
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByUsuarioId($usuarioId = null, $comparison = null)
    {
        if (is_array($usuarioId)) {
            $useMinMax = false;
            if (isset($usuarioId['min'])) {
                $this->addUsingAlias(UsuarioPeer::USUARIO_ID, $usuarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioId['max'])) {
                $this->addUsingAlias(UsuarioPeer::USUARIO_ID, $usuarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::USUARIO_ID, $usuarioId, $comparison);
    }

    /**
     * Filter the query on the usuario_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioNombre('fooValue');   // WHERE usuario_nombre = 'fooValue'
     * $query->filterByUsuarioNombre('%fooValue%'); // WHERE usuario_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usuarioNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByUsuarioNombre($usuarioNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usuarioNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usuarioNombre)) {
                $usuarioNombre = str_replace('*', '%', $usuarioNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::USUARIO_NOMBRE, $usuarioNombre, $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UsuarioPeer::USUARIO_CONTRASENA, $usuarioContrasena, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Usuario $usuario Object to remove from the list of results
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function prune($usuario = null)
    {
        if ($usuario) {
            $this->addUsingAlias(UsuarioPeer::USUARIO_ID, $usuario->getUsuarioId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
