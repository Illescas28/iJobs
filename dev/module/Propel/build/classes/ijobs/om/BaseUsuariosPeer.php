<?php


/**
 * Base static class for performing query and update operations on the 'usuarios' table.
 *
 *
 *
 * @package propel.generator.ijobs.om
 */
abstract class BaseUsuariosPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'ijobs';

    /** the table name for this class */
    const TABLE_NAME = 'usuarios';

    /** the related Propel class for this table */
    const OM_CLASS = 'Usuarios';

    /** the related TableMap class for this table */
    const TM_CLASS = 'UsuariosTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the usuario_id field */
    const USUARIO_ID = 'usuarios.usuario_id';

    /** the column name for the empresa_id field */
    const EMPRESA_ID = 'usuarios.empresa_id';

    /** the column name for the postulante_id field */
    const POSTULANTE_ID = 'usuarios.postulante_id';

    /** the column name for the usuario_contrasena field */
    const USUARIO_CONTRASENA = 'usuarios.usuario_contrasena';

    /** the column name for the usuario_fecha_alta field */
    const USUARIO_FECHA_ALTA = 'usuarios.usuario_fecha_alta';

    /** the column name for the usuario_usuario_alta field */
    const USUARIO_USUARIO_ALTA = 'usuarios.usuario_usuario_alta';

    /** the column name for the usuario_fecha_modifica field */
    const USUARIO_FECHA_MODIFICA = 'usuarios.usuario_fecha_modifica';

    /** the column name for the usuario_usuario_modifica field */
    const USUARIO_USUARIO_MODIFICA = 'usuarios.usuario_usuario_modifica';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Usuarios objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Usuarios[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. UsuariosPeer::$fieldNames[UsuariosPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('UsuarioId', 'EmpresaId', 'PostulanteId', 'UsuarioContrasena', 'UsuarioFechaAlta', 'UsuarioUsuarioAlta', 'UsuarioFechaModifica', 'UsuarioUsuarioModifica', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('usuarioId', 'empresaId', 'postulanteId', 'usuarioContrasena', 'usuarioFechaAlta', 'usuarioUsuarioAlta', 'usuarioFechaModifica', 'usuarioUsuarioModifica', ),
        BasePeer::TYPE_COLNAME => array (UsuariosPeer::USUARIO_ID, UsuariosPeer::EMPRESA_ID, UsuariosPeer::POSTULANTE_ID, UsuariosPeer::USUARIO_CONTRASENA, UsuariosPeer::USUARIO_FECHA_ALTA, UsuariosPeer::USUARIO_USUARIO_ALTA, UsuariosPeer::USUARIO_FECHA_MODIFICA, UsuariosPeer::USUARIO_USUARIO_MODIFICA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('USUARIO_ID', 'EMPRESA_ID', 'POSTULANTE_ID', 'USUARIO_CONTRASENA', 'USUARIO_FECHA_ALTA', 'USUARIO_USUARIO_ALTA', 'USUARIO_FECHA_MODIFICA', 'USUARIO_USUARIO_MODIFICA', ),
        BasePeer::TYPE_FIELDNAME => array ('usuario_id', 'empresa_id', 'postulante_id', 'usuario_contrasena', 'usuario_fecha_alta', 'usuario_usuario_alta', 'usuario_fecha_modifica', 'usuario_usuario_modifica', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. UsuariosPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('UsuarioId' => 0, 'EmpresaId' => 1, 'PostulanteId' => 2, 'UsuarioContrasena' => 3, 'UsuarioFechaAlta' => 4, 'UsuarioUsuarioAlta' => 5, 'UsuarioFechaModifica' => 6, 'UsuarioUsuarioModifica' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('usuarioId' => 0, 'empresaId' => 1, 'postulanteId' => 2, 'usuarioContrasena' => 3, 'usuarioFechaAlta' => 4, 'usuarioUsuarioAlta' => 5, 'usuarioFechaModifica' => 6, 'usuarioUsuarioModifica' => 7, ),
        BasePeer::TYPE_COLNAME => array (UsuariosPeer::USUARIO_ID => 0, UsuariosPeer::EMPRESA_ID => 1, UsuariosPeer::POSTULANTE_ID => 2, UsuariosPeer::USUARIO_CONTRASENA => 3, UsuariosPeer::USUARIO_FECHA_ALTA => 4, UsuariosPeer::USUARIO_USUARIO_ALTA => 5, UsuariosPeer::USUARIO_FECHA_MODIFICA => 6, UsuariosPeer::USUARIO_USUARIO_MODIFICA => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('USUARIO_ID' => 0, 'EMPRESA_ID' => 1, 'POSTULANTE_ID' => 2, 'USUARIO_CONTRASENA' => 3, 'USUARIO_FECHA_ALTA' => 4, 'USUARIO_USUARIO_ALTA' => 5, 'USUARIO_FECHA_MODIFICA' => 6, 'USUARIO_USUARIO_MODIFICA' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('usuario_id' => 0, 'empresa_id' => 1, 'postulante_id' => 2, 'usuario_contrasena' => 3, 'usuario_fecha_alta' => 4, 'usuario_usuario_alta' => 5, 'usuario_fecha_modifica' => 6, 'usuario_usuario_modifica' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = UsuariosPeer::getFieldNames($toType);
        $key = isset(UsuariosPeer::$fieldKeys[$fromType][$name]) ? UsuariosPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(UsuariosPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, UsuariosPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return UsuariosPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. UsuariosPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(UsuariosPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(UsuariosPeer::USUARIO_ID);
            $criteria->addSelectColumn(UsuariosPeer::EMPRESA_ID);
            $criteria->addSelectColumn(UsuariosPeer::POSTULANTE_ID);
            $criteria->addSelectColumn(UsuariosPeer::USUARIO_CONTRASENA);
            $criteria->addSelectColumn(UsuariosPeer::USUARIO_FECHA_ALTA);
            $criteria->addSelectColumn(UsuariosPeer::USUARIO_USUARIO_ALTA);
            $criteria->addSelectColumn(UsuariosPeer::USUARIO_FECHA_MODIFICA);
            $criteria->addSelectColumn(UsuariosPeer::USUARIO_USUARIO_MODIFICA);
        } else {
            $criteria->addSelectColumn($alias . '.usuario_id');
            $criteria->addSelectColumn($alias . '.empresa_id');
            $criteria->addSelectColumn($alias . '.postulante_id');
            $criteria->addSelectColumn($alias . '.usuario_contrasena');
            $criteria->addSelectColumn($alias . '.usuario_fecha_alta');
            $criteria->addSelectColumn($alias . '.usuario_usuario_alta');
            $criteria->addSelectColumn($alias . '.usuario_fecha_modifica');
            $criteria->addSelectColumn($alias . '.usuario_usuario_modifica');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UsuariosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuariosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Usuarios
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = UsuariosPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return UsuariosPeer::populateObjects(UsuariosPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            UsuariosPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Usuarios $obj A Usuarios object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getUsuarioId();
            } // if key === null
            UsuariosPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Usuarios object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Usuarios) {
                $key = (string) $value->getUsuarioId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Usuarios object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(UsuariosPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Usuarios Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(UsuariosPeer::$instances[$key])) {
                return UsuariosPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (UsuariosPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        UsuariosPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to usuarios
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = UsuariosPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = UsuariosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = UsuariosPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UsuariosPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Usuarios object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = UsuariosPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = UsuariosPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + UsuariosPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UsuariosPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            UsuariosPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Empresas table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpresas(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UsuariosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuariosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UsuariosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Postulantes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPostulantes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UsuariosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuariosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UsuariosPeer::POSTULANTE_ID, PostulantesPeer::POSTULANTE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Usuarios objects pre-filled with their Empresas objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Usuarios objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresas(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UsuariosPeer::DATABASE_NAME);
        }

        UsuariosPeer::addSelectColumns($criteria);
        $startcol = UsuariosPeer::NUM_HYDRATE_COLUMNS;
        EmpresasPeer::addSelectColumns($criteria);

        $criteria->addJoin(UsuariosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UsuariosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UsuariosPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = UsuariosPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UsuariosPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EmpresasPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EmpresasPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpresasPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EmpresasPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Usuarios) to $obj2 (Empresas)
                $obj2->addUsuarios($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Usuarios objects pre-filled with their Postulantes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Usuarios objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPostulantes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UsuariosPeer::DATABASE_NAME);
        }

        UsuariosPeer::addSelectColumns($criteria);
        $startcol = UsuariosPeer::NUM_HYDRATE_COLUMNS;
        PostulantesPeer::addSelectColumns($criteria);

        $criteria->addJoin(UsuariosPeer::POSTULANTE_ID, PostulantesPeer::POSTULANTE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UsuariosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UsuariosPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = UsuariosPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UsuariosPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PostulantesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PostulantesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PostulantesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PostulantesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Usuarios) to $obj2 (Postulantes)
                $obj2->addUsuarios($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UsuariosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuariosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UsuariosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);

        $criteria->addJoin(UsuariosPeer::POSTULANTE_ID, PostulantesPeer::POSTULANTE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Usuarios objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Usuarios objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UsuariosPeer::DATABASE_NAME);
        }

        UsuariosPeer::addSelectColumns($criteria);
        $startcol2 = UsuariosPeer::NUM_HYDRATE_COLUMNS;

        EmpresasPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpresasPeer::NUM_HYDRATE_COLUMNS;

        PostulantesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PostulantesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(UsuariosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);

        $criteria->addJoin(UsuariosPeer::POSTULANTE_ID, PostulantesPeer::POSTULANTE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UsuariosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UsuariosPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = UsuariosPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UsuariosPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Empresas rows

            $key2 = EmpresasPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = EmpresasPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpresasPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpresasPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Usuarios) to the collection in $obj2 (Empresas)
                $obj2->addUsuarios($obj1);
            } // if joined row not null

            // Add objects for joined Postulantes rows

            $key3 = PostulantesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = PostulantesPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = PostulantesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PostulantesPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Usuarios) to the collection in $obj3 (Postulantes)
                $obj3->addUsuarios($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Empresas table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpresas(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UsuariosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuariosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UsuariosPeer::POSTULANTE_ID, PostulantesPeer::POSTULANTE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Postulantes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPostulantes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UsuariosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuariosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UsuariosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Usuarios objects pre-filled with all related objects except Empresas.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Usuarios objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpresas(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UsuariosPeer::DATABASE_NAME);
        }

        UsuariosPeer::addSelectColumns($criteria);
        $startcol2 = UsuariosPeer::NUM_HYDRATE_COLUMNS;

        PostulantesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PostulantesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(UsuariosPeer::POSTULANTE_ID, PostulantesPeer::POSTULANTE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UsuariosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UsuariosPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = UsuariosPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UsuariosPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Postulantes rows

                $key2 = PostulantesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PostulantesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = PostulantesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PostulantesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Usuarios) to the collection in $obj2 (Postulantes)
                $obj2->addUsuarios($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Usuarios objects pre-filled with all related objects except Postulantes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Usuarios objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPostulantes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UsuariosPeer::DATABASE_NAME);
        }

        UsuariosPeer::addSelectColumns($criteria);
        $startcol2 = UsuariosPeer::NUM_HYDRATE_COLUMNS;

        EmpresasPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpresasPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(UsuariosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UsuariosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UsuariosPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = UsuariosPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UsuariosPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Empresas rows

                $key2 = EmpresasPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = EmpresasPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = EmpresasPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpresasPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Usuarios) to the collection in $obj2 (Empresas)
                $obj2->addUsuarios($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(UsuariosPeer::DATABASE_NAME)->getTable(UsuariosPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseUsuariosPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseUsuariosPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \UsuariosTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return UsuariosPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Usuarios or Criteria object.
     *
     * @param      mixed $values Criteria or Usuarios object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Usuarios object
        }

        if ($criteria->containsKey(UsuariosPeer::USUARIO_ID) && $criteria->keyContainsValue(UsuariosPeer::USUARIO_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.UsuariosPeer::USUARIO_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Usuarios or Criteria object.
     *
     * @param      mixed $values Criteria or Usuarios object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(UsuariosPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(UsuariosPeer::USUARIO_ID);
            $value = $criteria->remove(UsuariosPeer::USUARIO_ID);
            if ($value) {
                $selectCriteria->add(UsuariosPeer::USUARIO_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(UsuariosPeer::TABLE_NAME);
            }

        } else { // $values is Usuarios object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the usuarios table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(UsuariosPeer::TABLE_NAME, $con, UsuariosPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UsuariosPeer::clearInstancePool();
            UsuariosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Usuarios or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Usuarios object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            UsuariosPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Usuarios) { // it's a model object
            // invalidate the cache for this single object
            UsuariosPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UsuariosPeer::DATABASE_NAME);
            $criteria->add(UsuariosPeer::USUARIO_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                UsuariosPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(UsuariosPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            UsuariosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Usuarios object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Usuarios $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(UsuariosPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(UsuariosPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(UsuariosPeer::DATABASE_NAME, UsuariosPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Usuarios
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = UsuariosPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(UsuariosPeer::DATABASE_NAME);
        $criteria->add(UsuariosPeer::USUARIO_ID, $pk);

        $v = UsuariosPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Usuarios[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(UsuariosPeer::DATABASE_NAME);
            $criteria->add(UsuariosPeer::USUARIO_ID, $pks, Criteria::IN);
            $objs = UsuariosPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseUsuariosPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUsuariosPeer::buildTableMap();

