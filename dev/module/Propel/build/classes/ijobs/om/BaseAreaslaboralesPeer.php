<?php


/**
 * Base static class for performing query and update operations on the 'areaslaborales' table.
 *
 *
 *
 * @package propel.generator.ijobs.om
 */
abstract class BaseAreaslaboralesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'ijobs';

    /** the table name for this class */
    const TABLE_NAME = 'areaslaborales';

    /** the related Propel class for this table */
    const OM_CLASS = 'Areaslaborales';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AreaslaboralesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the arealaboral_id field */
    const AREALABORAL_ID = 'areaslaborales.arealaboral_id';

    /** the column name for the arealaboral_clave field */
    const AREALABORAL_CLAVE = 'areaslaborales.arealaboral_clave';

    /** the column name for the arealaboral_nombre field */
    const AREALABORAL_NOMBRE = 'areaslaborales.arealaboral_nombre';

    /** the column name for the arealaboral_fecha_alta field */
    const AREALABORAL_FECHA_ALTA = 'areaslaborales.arealaboral_fecha_alta';

    /** the column name for the arealaboral_usuario_alta field */
    const AREALABORAL_USUARIO_ALTA = 'areaslaborales.arealaboral_usuario_alta';

    /** the column name for the arealaboral_fecha_modifica field */
    const AREALABORAL_FECHA_MODIFICA = 'areaslaborales.arealaboral_fecha_modifica';

    /** the column name for the arealaboral_usuario_modifica field */
    const AREALABORAL_USUARIO_MODIFICA = 'areaslaborales.arealaboral_usuario_modifica';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Areaslaborales objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Areaslaborales[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AreaslaboralesPeer::$fieldNames[AreaslaboralesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ArealaboralId', 'ArealaboralClave', 'ArealaboralNombre', 'ArealaboralFechaAlta', 'ArealaboralUsuarioAlta', 'ArealaboralFechaModifica', 'ArealaboralUsuarioModifica', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('arealaboralId', 'arealaboralClave', 'arealaboralNombre', 'arealaboralFechaAlta', 'arealaboralUsuarioAlta', 'arealaboralFechaModifica', 'arealaboralUsuarioModifica', ),
        BasePeer::TYPE_COLNAME => array (AreaslaboralesPeer::AREALABORAL_ID, AreaslaboralesPeer::AREALABORAL_CLAVE, AreaslaboralesPeer::AREALABORAL_NOMBRE, AreaslaboralesPeer::AREALABORAL_FECHA_ALTA, AreaslaboralesPeer::AREALABORAL_USUARIO_ALTA, AreaslaboralesPeer::AREALABORAL_FECHA_MODIFICA, AreaslaboralesPeer::AREALABORAL_USUARIO_MODIFICA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AREALABORAL_ID', 'AREALABORAL_CLAVE', 'AREALABORAL_NOMBRE', 'AREALABORAL_FECHA_ALTA', 'AREALABORAL_USUARIO_ALTA', 'AREALABORAL_FECHA_MODIFICA', 'AREALABORAL_USUARIO_MODIFICA', ),
        BasePeer::TYPE_FIELDNAME => array ('arealaboral_id', 'arealaboral_clave', 'arealaboral_nombre', 'arealaboral_fecha_alta', 'arealaboral_usuario_alta', 'arealaboral_fecha_modifica', 'arealaboral_usuario_modifica', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AreaslaboralesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ArealaboralId' => 0, 'ArealaboralClave' => 1, 'ArealaboralNombre' => 2, 'ArealaboralFechaAlta' => 3, 'ArealaboralUsuarioAlta' => 4, 'ArealaboralFechaModifica' => 5, 'ArealaboralUsuarioModifica' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('arealaboralId' => 0, 'arealaboralClave' => 1, 'arealaboralNombre' => 2, 'arealaboralFechaAlta' => 3, 'arealaboralUsuarioAlta' => 4, 'arealaboralFechaModifica' => 5, 'arealaboralUsuarioModifica' => 6, ),
        BasePeer::TYPE_COLNAME => array (AreaslaboralesPeer::AREALABORAL_ID => 0, AreaslaboralesPeer::AREALABORAL_CLAVE => 1, AreaslaboralesPeer::AREALABORAL_NOMBRE => 2, AreaslaboralesPeer::AREALABORAL_FECHA_ALTA => 3, AreaslaboralesPeer::AREALABORAL_USUARIO_ALTA => 4, AreaslaboralesPeer::AREALABORAL_FECHA_MODIFICA => 5, AreaslaboralesPeer::AREALABORAL_USUARIO_MODIFICA => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AREALABORAL_ID' => 0, 'AREALABORAL_CLAVE' => 1, 'AREALABORAL_NOMBRE' => 2, 'AREALABORAL_FECHA_ALTA' => 3, 'AREALABORAL_USUARIO_ALTA' => 4, 'AREALABORAL_FECHA_MODIFICA' => 5, 'AREALABORAL_USUARIO_MODIFICA' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('arealaboral_id' => 0, 'arealaboral_clave' => 1, 'arealaboral_nombre' => 2, 'arealaboral_fecha_alta' => 3, 'arealaboral_usuario_alta' => 4, 'arealaboral_fecha_modifica' => 5, 'arealaboral_usuario_modifica' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
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
        $toNames = AreaslaboralesPeer::getFieldNames($toType);
        $key = isset(AreaslaboralesPeer::$fieldKeys[$fromType][$name]) ? AreaslaboralesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AreaslaboralesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AreaslaboralesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AreaslaboralesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. AreaslaboralesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AreaslaboralesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AreaslaboralesPeer::AREALABORAL_ID);
            $criteria->addSelectColumn(AreaslaboralesPeer::AREALABORAL_CLAVE);
            $criteria->addSelectColumn(AreaslaboralesPeer::AREALABORAL_NOMBRE);
            $criteria->addSelectColumn(AreaslaboralesPeer::AREALABORAL_FECHA_ALTA);
            $criteria->addSelectColumn(AreaslaboralesPeer::AREALABORAL_USUARIO_ALTA);
            $criteria->addSelectColumn(AreaslaboralesPeer::AREALABORAL_FECHA_MODIFICA);
            $criteria->addSelectColumn(AreaslaboralesPeer::AREALABORAL_USUARIO_MODIFICA);
        } else {
            $criteria->addSelectColumn($alias . '.arealaboral_id');
            $criteria->addSelectColumn($alias . '.arealaboral_clave');
            $criteria->addSelectColumn($alias . '.arealaboral_nombre');
            $criteria->addSelectColumn($alias . '.arealaboral_fecha_alta');
            $criteria->addSelectColumn($alias . '.arealaboral_usuario_alta');
            $criteria->addSelectColumn($alias . '.arealaboral_fecha_modifica');
            $criteria->addSelectColumn($alias . '.arealaboral_usuario_modifica');
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
        $criteria->setPrimaryTableName(AreaslaboralesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AreaslaboralesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AreaslaboralesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AreaslaboralesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Areaslaborales
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AreaslaboralesPeer::doSelect($critcopy, $con);
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
        return AreaslaboralesPeer::populateObjects(AreaslaboralesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AreaslaboralesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AreaslaboralesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AreaslaboralesPeer::DATABASE_NAME);

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
     * @param Areaslaborales $obj A Areaslaborales object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getArealaboralId();
            } // if key === null
            AreaslaboralesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Areaslaborales object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Areaslaborales) {
                $key = (string) $value->getArealaboralId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Areaslaborales object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AreaslaboralesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Areaslaborales Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AreaslaboralesPeer::$instances[$key])) {
                return AreaslaboralesPeer::$instances[$key];
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
        foreach (AreaslaboralesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AreaslaboralesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to areaslaborales
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in PostulantesPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PostulantesPeer::clearInstancePool();
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
        $cls = AreaslaboralesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AreaslaboralesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AreaslaboralesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AreaslaboralesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Areaslaborales object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AreaslaboralesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AreaslaboralesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AreaslaboralesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AreaslaboralesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AreaslaboralesPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(AreaslaboralesPeer::DATABASE_NAME)->getTable(AreaslaboralesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAreaslaboralesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAreaslaboralesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AreaslaboralesTableMap());
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
        return AreaslaboralesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Areaslaborales or Criteria object.
     *
     * @param      mixed $values Criteria or Areaslaborales object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AreaslaboralesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Areaslaborales object
        }

        if ($criteria->containsKey(AreaslaboralesPeer::AREALABORAL_ID) && $criteria->keyContainsValue(AreaslaboralesPeer::AREALABORAL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AreaslaboralesPeer::AREALABORAL_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AreaslaboralesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Areaslaborales or Criteria object.
     *
     * @param      mixed $values Criteria or Areaslaborales object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AreaslaboralesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AreaslaboralesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AreaslaboralesPeer::AREALABORAL_ID);
            $value = $criteria->remove(AreaslaboralesPeer::AREALABORAL_ID);
            if ($value) {
                $selectCriteria->add(AreaslaboralesPeer::AREALABORAL_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AreaslaboralesPeer::TABLE_NAME);
            }

        } else { // $values is Areaslaborales object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AreaslaboralesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the areaslaborales table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AreaslaboralesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += AreaslaboralesPeer::doOnDeleteCascade(new Criteria(AreaslaboralesPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(AreaslaboralesPeer::TABLE_NAME, $con, AreaslaboralesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AreaslaboralesPeer::clearInstancePool();
            AreaslaboralesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Areaslaborales or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Areaslaborales object or primary key or array of primary keys
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
            $con = Propel::getConnection(AreaslaboralesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Areaslaborales) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AreaslaboralesPeer::DATABASE_NAME);
            $criteria->add(AreaslaboralesPeer::AREALABORAL_ID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(AreaslaboralesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += AreaslaboralesPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                AreaslaboralesPeer::clearInstancePool();
            } elseif ($values instanceof Areaslaborales) { // it's a model object
                AreaslaboralesPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    AreaslaboralesPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AreaslaboralesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = AreaslaboralesPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Postulantes objects
            $criteria = new Criteria(PostulantesPeer::DATABASE_NAME);

            $criteria->add(PostulantesPeer::AREALABORAL_ID, $obj->getArealaboralId());
            $affectedRows += PostulantesPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Areaslaborales object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Areaslaborales $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AreaslaboralesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AreaslaboralesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AreaslaboralesPeer::DATABASE_NAME, AreaslaboralesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Areaslaborales
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AreaslaboralesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AreaslaboralesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AreaslaboralesPeer::DATABASE_NAME);
        $criteria->add(AreaslaboralesPeer::AREALABORAL_ID, $pk);

        $v = AreaslaboralesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Areaslaborales[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AreaslaboralesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AreaslaboralesPeer::DATABASE_NAME);
            $criteria->add(AreaslaboralesPeer::AREALABORAL_ID, $pks, Criteria::IN);
            $objs = AreaslaboralesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAreaslaboralesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAreaslaboralesPeer::buildTableMap();

