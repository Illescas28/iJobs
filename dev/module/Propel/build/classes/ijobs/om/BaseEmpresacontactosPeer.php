<?php


/**
 * Base static class for performing query and update operations on the 'empresacontactos' table.
 *
 *
 *
 * @package propel.generator.ijobs.om
 */
abstract class BaseEmpresacontactosPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'ijobs';

    /** the table name for this class */
    const TABLE_NAME = 'empresacontactos';

    /** the related Propel class for this table */
    const OM_CLASS = 'Empresacontactos';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EmpresacontactosTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the empresacontacto_id field */
    const EMPRESACONTACTO_ID = 'empresacontactos.empresacontacto_id';

    /** the column name for the empresa_id field */
    const EMPRESA_ID = 'empresacontactos.empresa_id';

    /** the column name for the empresacontacto_nombre field */
    const EMPRESACONTACTO_NOMBRE = 'empresacontactos.empresacontacto_nombre';

    /** the column name for the empresacontacto_email field */
    const EMPRESACONTACTO_EMAIL = 'empresacontactos.empresacontacto_email';

    /** the column name for the empresacontacto_telefono field */
    const EMPRESACONTACTO_TELEFONO = 'empresacontactos.empresacontacto_telefono';

    /** the column name for the empresacontacto_movil field */
    const EMPRESACONTACTO_MOVIL = 'empresacontactos.empresacontacto_movil';

    /** the column name for the empresacontacto_fecha_alta field */
    const EMPRESACONTACTO_FECHA_ALTA = 'empresacontactos.empresacontacto_fecha_alta';

    /** the column name for the empresacontacto_usuario_alta field */
    const EMPRESACONTACTO_USUARIO_ALTA = 'empresacontactos.empresacontacto_usuario_alta';

    /** the column name for the empresacontacto_fecha_modifica field */
    const EMPRESACONTACTO_FECHA_MODIFICA = 'empresacontactos.empresacontacto_fecha_modifica';

    /** the column name for the empresacontacto_usuario_modifica field */
    const EMPRESACONTACTO_USUARIO_MODIFICA = 'empresacontactos.empresacontacto_usuario_modifica';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Empresacontactos objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Empresacontactos[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EmpresacontactosPeer::$fieldNames[EmpresacontactosPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('EmpresacontactoId', 'EmpresaId', 'EmpresacontactoNombre', 'EmpresacontactoEmail', 'EmpresacontactoTelefono', 'EmpresacontactoMovil', 'EmpresacontactoFechaAlta', 'EmpresacontactoUsuarioAlta', 'EmpresacontactoFechaModifica', 'EmpresacontactoUsuarioModifica', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('empresacontactoId', 'empresaId', 'empresacontactoNombre', 'empresacontactoEmail', 'empresacontactoTelefono', 'empresacontactoMovil', 'empresacontactoFechaAlta', 'empresacontactoUsuarioAlta', 'empresacontactoFechaModifica', 'empresacontactoUsuarioModifica', ),
        BasePeer::TYPE_COLNAME => array (EmpresacontactosPeer::EMPRESACONTACTO_ID, EmpresacontactosPeer::EMPRESA_ID, EmpresacontactosPeer::EMPRESACONTACTO_NOMBRE, EmpresacontactosPeer::EMPRESACONTACTO_EMAIL, EmpresacontactosPeer::EMPRESACONTACTO_TELEFONO, EmpresacontactosPeer::EMPRESACONTACTO_MOVIL, EmpresacontactosPeer::EMPRESACONTACTO_FECHA_ALTA, EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_ALTA, EmpresacontactosPeer::EMPRESACONTACTO_FECHA_MODIFICA, EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_MODIFICA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('EMPRESACONTACTO_ID', 'EMPRESA_ID', 'EMPRESACONTACTO_NOMBRE', 'EMPRESACONTACTO_EMAIL', 'EMPRESACONTACTO_TELEFONO', 'EMPRESACONTACTO_MOVIL', 'EMPRESACONTACTO_FECHA_ALTA', 'EMPRESACONTACTO_USUARIO_ALTA', 'EMPRESACONTACTO_FECHA_MODIFICA', 'EMPRESACONTACTO_USUARIO_MODIFICA', ),
        BasePeer::TYPE_FIELDNAME => array ('empresacontacto_id', 'empresa_id', 'empresacontacto_nombre', 'empresacontacto_email', 'empresacontacto_telefono', 'empresacontacto_movil', 'empresacontacto_fecha_alta', 'empresacontacto_usuario_alta', 'empresacontacto_fecha_modifica', 'empresacontacto_usuario_modifica', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EmpresacontactosPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('EmpresacontactoId' => 0, 'EmpresaId' => 1, 'EmpresacontactoNombre' => 2, 'EmpresacontactoEmail' => 3, 'EmpresacontactoTelefono' => 4, 'EmpresacontactoMovil' => 5, 'EmpresacontactoFechaAlta' => 6, 'EmpresacontactoUsuarioAlta' => 7, 'EmpresacontactoFechaModifica' => 8, 'EmpresacontactoUsuarioModifica' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('empresacontactoId' => 0, 'empresaId' => 1, 'empresacontactoNombre' => 2, 'empresacontactoEmail' => 3, 'empresacontactoTelefono' => 4, 'empresacontactoMovil' => 5, 'empresacontactoFechaAlta' => 6, 'empresacontactoUsuarioAlta' => 7, 'empresacontactoFechaModifica' => 8, 'empresacontactoUsuarioModifica' => 9, ),
        BasePeer::TYPE_COLNAME => array (EmpresacontactosPeer::EMPRESACONTACTO_ID => 0, EmpresacontactosPeer::EMPRESA_ID => 1, EmpresacontactosPeer::EMPRESACONTACTO_NOMBRE => 2, EmpresacontactosPeer::EMPRESACONTACTO_EMAIL => 3, EmpresacontactosPeer::EMPRESACONTACTO_TELEFONO => 4, EmpresacontactosPeer::EMPRESACONTACTO_MOVIL => 5, EmpresacontactosPeer::EMPRESACONTACTO_FECHA_ALTA => 6, EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_ALTA => 7, EmpresacontactosPeer::EMPRESACONTACTO_FECHA_MODIFICA => 8, EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_MODIFICA => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('EMPRESACONTACTO_ID' => 0, 'EMPRESA_ID' => 1, 'EMPRESACONTACTO_NOMBRE' => 2, 'EMPRESACONTACTO_EMAIL' => 3, 'EMPRESACONTACTO_TELEFONO' => 4, 'EMPRESACONTACTO_MOVIL' => 5, 'EMPRESACONTACTO_FECHA_ALTA' => 6, 'EMPRESACONTACTO_USUARIO_ALTA' => 7, 'EMPRESACONTACTO_FECHA_MODIFICA' => 8, 'EMPRESACONTACTO_USUARIO_MODIFICA' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('empresacontacto_id' => 0, 'empresa_id' => 1, 'empresacontacto_nombre' => 2, 'empresacontacto_email' => 3, 'empresacontacto_telefono' => 4, 'empresacontacto_movil' => 5, 'empresacontacto_fecha_alta' => 6, 'empresacontacto_usuario_alta' => 7, 'empresacontacto_fecha_modifica' => 8, 'empresacontacto_usuario_modifica' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = EmpresacontactosPeer::getFieldNames($toType);
        $key = isset(EmpresacontactosPeer::$fieldKeys[$fromType][$name]) ? EmpresacontactosPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EmpresacontactosPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EmpresacontactosPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EmpresacontactosPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EmpresacontactosPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EmpresacontactosPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESACONTACTO_ID);
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESA_ID);
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESACONTACTO_NOMBRE);
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESACONTACTO_EMAIL);
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESACONTACTO_TELEFONO);
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESACONTACTO_MOVIL);
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESACONTACTO_FECHA_ALTA);
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_ALTA);
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESACONTACTO_FECHA_MODIFICA);
            $criteria->addSelectColumn(EmpresacontactosPeer::EMPRESACONTACTO_USUARIO_MODIFICA);
        } else {
            $criteria->addSelectColumn($alias . '.empresacontacto_id');
            $criteria->addSelectColumn($alias . '.empresa_id');
            $criteria->addSelectColumn($alias . '.empresacontacto_nombre');
            $criteria->addSelectColumn($alias . '.empresacontacto_email');
            $criteria->addSelectColumn($alias . '.empresacontacto_telefono');
            $criteria->addSelectColumn($alias . '.empresacontacto_movil');
            $criteria->addSelectColumn($alias . '.empresacontacto_fecha_alta');
            $criteria->addSelectColumn($alias . '.empresacontacto_usuario_alta');
            $criteria->addSelectColumn($alias . '.empresacontacto_fecha_modifica');
            $criteria->addSelectColumn($alias . '.empresacontacto_usuario_modifica');
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
        $criteria->setPrimaryTableName(EmpresacontactosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EmpresacontactosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EmpresacontactosPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Empresacontactos
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EmpresacontactosPeer::doSelect($critcopy, $con);
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
        return EmpresacontactosPeer::populateObjects(EmpresacontactosPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EmpresacontactosPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EmpresacontactosPeer::DATABASE_NAME);

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
     * @param Empresacontactos $obj A Empresacontactos object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getEmpresacontactoId();
            } // if key === null
            EmpresacontactosPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Empresacontactos object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Empresacontactos) {
                $key = (string) $value->getEmpresacontactoId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Empresacontactos object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EmpresacontactosPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Empresacontactos Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EmpresacontactosPeer::$instances[$key])) {
                return EmpresacontactosPeer::$instances[$key];
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
        foreach (EmpresacontactosPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EmpresacontactosPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to empresacontactos
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
        $cls = EmpresacontactosPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EmpresacontactosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EmpresacontactosPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EmpresacontactosPeer::addInstanceToPool($obj, $key);
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
     * @return array (Empresacontactos object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EmpresacontactosPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EmpresacontactosPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EmpresacontactosPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EmpresacontactosPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EmpresacontactosPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(EmpresacontactosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EmpresacontactosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EmpresacontactosPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EmpresacontactosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);

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
     * Selects a collection of Empresacontactos objects pre-filled with their Empresas objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Empresacontactos objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresas(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EmpresacontactosPeer::DATABASE_NAME);
        }

        EmpresacontactosPeer::addSelectColumns($criteria);
        $startcol = EmpresacontactosPeer::NUM_HYDRATE_COLUMNS;
        EmpresasPeer::addSelectColumns($criteria);

        $criteria->addJoin(EmpresacontactosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EmpresacontactosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EmpresacontactosPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = EmpresacontactosPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EmpresacontactosPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Empresacontactos) to $obj2 (Empresas)
                $obj2->addEmpresacontactos($obj1);

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
        $criteria->setPrimaryTableName(EmpresacontactosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EmpresacontactosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EmpresacontactosPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EmpresacontactosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);

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
     * Selects a collection of Empresacontactos objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Empresacontactos objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EmpresacontactosPeer::DATABASE_NAME);
        }

        EmpresacontactosPeer::addSelectColumns($criteria);
        $startcol2 = EmpresacontactosPeer::NUM_HYDRATE_COLUMNS;

        EmpresasPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpresasPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(EmpresacontactosPeer::EMPRESA_ID, EmpresasPeer::EMPRESA_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EmpresacontactosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EmpresacontactosPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = EmpresacontactosPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EmpresacontactosPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Empresacontactos) to the collection in $obj2 (Empresas)
                $obj2->addEmpresacontactos($obj1);
            } // if joined row not null

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
        return Propel::getDatabaseMap(EmpresacontactosPeer::DATABASE_NAME)->getTable(EmpresacontactosPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEmpresacontactosPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEmpresacontactosPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EmpresacontactosTableMap());
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
        return EmpresacontactosPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Empresacontactos or Criteria object.
     *
     * @param      mixed $values Criteria or Empresacontactos object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Empresacontactos object
        }

        if ($criteria->containsKey(EmpresacontactosPeer::EMPRESACONTACTO_ID) && $criteria->keyContainsValue(EmpresacontactosPeer::EMPRESACONTACTO_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EmpresacontactosPeer::EMPRESACONTACTO_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(EmpresacontactosPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Empresacontactos or Criteria object.
     *
     * @param      mixed $values Criteria or Empresacontactos object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EmpresacontactosPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EmpresacontactosPeer::EMPRESACONTACTO_ID);
            $value = $criteria->remove(EmpresacontactosPeer::EMPRESACONTACTO_ID);
            if ($value) {
                $selectCriteria->add(EmpresacontactosPeer::EMPRESACONTACTO_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EmpresacontactosPeer::TABLE_NAME);
            }

        } else { // $values is Empresacontactos object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EmpresacontactosPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the empresacontactos table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EmpresacontactosPeer::TABLE_NAME, $con, EmpresacontactosPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EmpresacontactosPeer::clearInstancePool();
            EmpresacontactosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Empresacontactos or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Empresacontactos object or primary key or array of primary keys
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
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EmpresacontactosPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Empresacontactos) { // it's a model object
            // invalidate the cache for this single object
            EmpresacontactosPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EmpresacontactosPeer::DATABASE_NAME);
            $criteria->add(EmpresacontactosPeer::EMPRESACONTACTO_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EmpresacontactosPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EmpresacontactosPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EmpresacontactosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Empresacontactos object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Empresacontactos $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EmpresacontactosPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EmpresacontactosPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EmpresacontactosPeer::DATABASE_NAME, EmpresacontactosPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Empresacontactos
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EmpresacontactosPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EmpresacontactosPeer::DATABASE_NAME);
        $criteria->add(EmpresacontactosPeer::EMPRESACONTACTO_ID, $pk);

        $v = EmpresacontactosPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Empresacontactos[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpresacontactosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EmpresacontactosPeer::DATABASE_NAME);
            $criteria->add(EmpresacontactosPeer::EMPRESACONTACTO_ID, $pks, Criteria::IN);
            $objs = EmpresacontactosPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEmpresacontactosPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEmpresacontactosPeer::buildTableMap();

