<?php


/**
 * Base static class for performing query and update operations on the 'vacante' table.
 *
 *
 *
 * @package propel.generator.sitiowebnd.om
 */
abstract class BaseVacantePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'sitiowebnd';

    /** the table name for this class */
    const TABLE_NAME = 'vacante';

    /** the related Propel class for this table */
    const OM_CLASS = 'Vacante';

    /** the related TableMap class for this table */
    const TM_CLASS = 'VacanteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the vacante_id field */
    const VACANTE_ID = 'vacante.vacante_id';

    /** the column name for the sucursal_id field */
    const SUCURSAL_ID = 'vacante.sucursal_id';

    /** the column name for the vacante_nombre field */
    const VACANTE_NOMBRE = 'vacante.vacante_nombre';

    /** the column name for the vacante_descripcion field */
    const VACANTE_DESCRIPCION = 'vacante.vacante_descripcion';

    /** the column name for the vacante_horario field */
    const VACANTE_HORARIO = 'vacante.vacante_horario';

    /** the column name for the vacante_sueldo field */
    const VACANTE_SUELDO = 'vacante.vacante_sueldo';

    /** the column name for the vacante_sueldo_tipo_pago field */
    const VACANTE_SUELDO_TIPO_PAGO = 'vacante.vacante_sueldo_tipo_pago';

    /** the column name for the vacante_candidatos field */
    const VACANTE_CANDIDATOS = 'vacante.vacante_candidatos';

    /** the column name for the vacante_fecha_inicia field */
    const VACANTE_FECHA_INICIA = 'vacante.vacante_fecha_inicia';

    /** the column name for the vacante_fecha_termina field */
    const VACANTE_FECHA_TERMINA = 'vacante.vacante_fecha_termina';

    /** the column name for the vacante_visitas field */
    const VACANTE_VISITAS = 'vacante.vacante_visitas';

    /** the column name for the vacante_estatus field */
    const VACANTE_ESTATUS = 'vacante.vacante_estatus';

    /** the column name for the vacante_fecha field */
    const VACANTE_FECHA = 'vacante.vacante_fecha';

    /** The enumerated values for the vacante_sueldo_tipo_pago field */
    const VACANTE_SUELDO_TIPO_PAGO_SEMANAL = 'semanal';
    const VACANTE_SUELDO_TIPO_PAGO_QUINCENAL = 'quincenal';
    const VACANTE_SUELDO_TIPO_PAGO_MENSUAL = 'mensual';

    /** The enumerated values for the vacante_estatus field */
    const VACANTE_ESTATUS_ACTIVO = 'activo';
    const VACANTE_ESTATUS_INACTIVO = 'inactivo';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Vacante objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Vacante[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. VacantePeer::$fieldNames[VacantePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('VacanteId', 'SucursalId', 'VacanteNombre', 'VacanteDescripcion', 'VacanteHorario', 'VacanteSueldo', 'VacanteSueldoTipoPago', 'VacanteCandidatos', 'VacanteFechaInicia', 'VacanteFechaTermina', 'VacanteVisitas', 'VacanteEstatus', 'VacanteFecha', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('vacanteId', 'sucursalId', 'vacanteNombre', 'vacanteDescripcion', 'vacanteHorario', 'vacanteSueldo', 'vacanteSueldoTipoPago', 'vacanteCandidatos', 'vacanteFechaInicia', 'vacanteFechaTermina', 'vacanteVisitas', 'vacanteEstatus', 'vacanteFecha', ),
        BasePeer::TYPE_COLNAME => array (VacantePeer::VACANTE_ID, VacantePeer::SUCURSAL_ID, VacantePeer::VACANTE_NOMBRE, VacantePeer::VACANTE_DESCRIPCION, VacantePeer::VACANTE_HORARIO, VacantePeer::VACANTE_SUELDO, VacantePeer::VACANTE_SUELDO_TIPO_PAGO, VacantePeer::VACANTE_CANDIDATOS, VacantePeer::VACANTE_FECHA_INICIA, VacantePeer::VACANTE_FECHA_TERMINA, VacantePeer::VACANTE_VISITAS, VacantePeer::VACANTE_ESTATUS, VacantePeer::VACANTE_FECHA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('VACANTE_ID', 'SUCURSAL_ID', 'VACANTE_NOMBRE', 'VACANTE_DESCRIPCION', 'VACANTE_HORARIO', 'VACANTE_SUELDO', 'VACANTE_SUELDO_TIPO_PAGO', 'VACANTE_CANDIDATOS', 'VACANTE_FECHA_INICIA', 'VACANTE_FECHA_TERMINA', 'VACANTE_VISITAS', 'VACANTE_ESTATUS', 'VACANTE_FECHA', ),
        BasePeer::TYPE_FIELDNAME => array ('vacante_id', 'sucursal_id', 'vacante_nombre', 'vacante_descripcion', 'vacante_horario', 'vacante_sueldo', 'vacante_sueldo_tipo_pago', 'vacante_candidatos', 'vacante_fecha_inicia', 'vacante_fecha_termina', 'vacante_visitas', 'vacante_estatus', 'vacante_fecha', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. VacantePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('VacanteId' => 0, 'SucursalId' => 1, 'VacanteNombre' => 2, 'VacanteDescripcion' => 3, 'VacanteHorario' => 4, 'VacanteSueldo' => 5, 'VacanteSueldoTipoPago' => 6, 'VacanteCandidatos' => 7, 'VacanteFechaInicia' => 8, 'VacanteFechaTermina' => 9, 'VacanteVisitas' => 10, 'VacanteEstatus' => 11, 'VacanteFecha' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('vacanteId' => 0, 'sucursalId' => 1, 'vacanteNombre' => 2, 'vacanteDescripcion' => 3, 'vacanteHorario' => 4, 'vacanteSueldo' => 5, 'vacanteSueldoTipoPago' => 6, 'vacanteCandidatos' => 7, 'vacanteFechaInicia' => 8, 'vacanteFechaTermina' => 9, 'vacanteVisitas' => 10, 'vacanteEstatus' => 11, 'vacanteFecha' => 12, ),
        BasePeer::TYPE_COLNAME => array (VacantePeer::VACANTE_ID => 0, VacantePeer::SUCURSAL_ID => 1, VacantePeer::VACANTE_NOMBRE => 2, VacantePeer::VACANTE_DESCRIPCION => 3, VacantePeer::VACANTE_HORARIO => 4, VacantePeer::VACANTE_SUELDO => 5, VacantePeer::VACANTE_SUELDO_TIPO_PAGO => 6, VacantePeer::VACANTE_CANDIDATOS => 7, VacantePeer::VACANTE_FECHA_INICIA => 8, VacantePeer::VACANTE_FECHA_TERMINA => 9, VacantePeer::VACANTE_VISITAS => 10, VacantePeer::VACANTE_ESTATUS => 11, VacantePeer::VACANTE_FECHA => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('VACANTE_ID' => 0, 'SUCURSAL_ID' => 1, 'VACANTE_NOMBRE' => 2, 'VACANTE_DESCRIPCION' => 3, 'VACANTE_HORARIO' => 4, 'VACANTE_SUELDO' => 5, 'VACANTE_SUELDO_TIPO_PAGO' => 6, 'VACANTE_CANDIDATOS' => 7, 'VACANTE_FECHA_INICIA' => 8, 'VACANTE_FECHA_TERMINA' => 9, 'VACANTE_VISITAS' => 10, 'VACANTE_ESTATUS' => 11, 'VACANTE_FECHA' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('vacante_id' => 0, 'sucursal_id' => 1, 'vacante_nombre' => 2, 'vacante_descripcion' => 3, 'vacante_horario' => 4, 'vacante_sueldo' => 5, 'vacante_sueldo_tipo_pago' => 6, 'vacante_candidatos' => 7, 'vacante_fecha_inicia' => 8, 'vacante_fecha_termina' => 9, 'vacante_visitas' => 10, 'vacante_estatus' => 11, 'vacante_fecha' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        VacantePeer::VACANTE_SUELDO_TIPO_PAGO => array(
            VacantePeer::VACANTE_SUELDO_TIPO_PAGO_SEMANAL,
            VacantePeer::VACANTE_SUELDO_TIPO_PAGO_QUINCENAL,
            VacantePeer::VACANTE_SUELDO_TIPO_PAGO_MENSUAL,
        ),
        VacantePeer::VACANTE_ESTATUS => array(
            VacantePeer::VACANTE_ESTATUS_ACTIVO,
            VacantePeer::VACANTE_ESTATUS_INACTIVO,
        ),
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
        $toNames = VacantePeer::getFieldNames($toType);
        $key = isset(VacantePeer::$fieldKeys[$fromType][$name]) ? VacantePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(VacantePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, VacantePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return VacantePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return VacantePeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = VacantePeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = VacantePeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
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
     * @param      string $column The column name for current table. (i.e. VacantePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(VacantePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(VacantePeer::VACANTE_ID);
            $criteria->addSelectColumn(VacantePeer::SUCURSAL_ID);
            $criteria->addSelectColumn(VacantePeer::VACANTE_NOMBRE);
            $criteria->addSelectColumn(VacantePeer::VACANTE_DESCRIPCION);
            $criteria->addSelectColumn(VacantePeer::VACANTE_HORARIO);
            $criteria->addSelectColumn(VacantePeer::VACANTE_SUELDO);
            $criteria->addSelectColumn(VacantePeer::VACANTE_SUELDO_TIPO_PAGO);
            $criteria->addSelectColumn(VacantePeer::VACANTE_CANDIDATOS);
            $criteria->addSelectColumn(VacantePeer::VACANTE_FECHA_INICIA);
            $criteria->addSelectColumn(VacantePeer::VACANTE_FECHA_TERMINA);
            $criteria->addSelectColumn(VacantePeer::VACANTE_VISITAS);
            $criteria->addSelectColumn(VacantePeer::VACANTE_ESTATUS);
            $criteria->addSelectColumn(VacantePeer::VACANTE_FECHA);
        } else {
            $criteria->addSelectColumn($alias . '.vacante_id');
            $criteria->addSelectColumn($alias . '.sucursal_id');
            $criteria->addSelectColumn($alias . '.vacante_nombre');
            $criteria->addSelectColumn($alias . '.vacante_descripcion');
            $criteria->addSelectColumn($alias . '.vacante_horario');
            $criteria->addSelectColumn($alias . '.vacante_sueldo');
            $criteria->addSelectColumn($alias . '.vacante_sueldo_tipo_pago');
            $criteria->addSelectColumn($alias . '.vacante_candidatos');
            $criteria->addSelectColumn($alias . '.vacante_fecha_inicia');
            $criteria->addSelectColumn($alias . '.vacante_fecha_termina');
            $criteria->addSelectColumn($alias . '.vacante_visitas');
            $criteria->addSelectColumn($alias . '.vacante_estatus');
            $criteria->addSelectColumn($alias . '.vacante_fecha');
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
        $criteria->setPrimaryTableName(VacantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VacantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(VacantePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Vacante
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = VacantePeer::doSelect($critcopy, $con);
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
        return VacantePeer::populateObjects(VacantePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            VacantePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(VacantePeer::DATABASE_NAME);

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
     * @param Vacante $obj A Vacante object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getVacanteId();
            } // if key === null
            VacantePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Vacante object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Vacante) {
                $key = (string) $value->getVacanteId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Vacante object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(VacantePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Vacante Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(VacantePeer::$instances[$key])) {
                return VacantePeer::$instances[$key];
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
        foreach (VacantePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        VacantePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to vacante
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in PostulantePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PostulantePeer::clearInstancePool();
        // Invalidate objects in VacantecorreoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VacantecorreoPeer::clearInstancePool();
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
        $cls = VacantePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = VacantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = VacantePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VacantePeer::addInstanceToPool($obj, $key);
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
     * @return array (Vacante object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = VacantePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = VacantePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + VacantePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VacantePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            VacantePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sucursal table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSucursal(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VacantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VacantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VacantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VacantePeer::SUCURSAL_ID, SucursalPeer::SUCURSAL_ID, $join_behavior);

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
     * Selects a collection of Vacante objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Vacante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VacantePeer::DATABASE_NAME);
        }

        VacantePeer::addSelectColumns($criteria);
        $startcol = VacantePeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(VacantePeer::SUCURSAL_ID, SucursalPeer::SUCURSAL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VacantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VacantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VacantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VacantePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SucursalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SucursalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Vacante) to $obj2 (Sucursal)
                $obj2->addVacante($obj1);

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
        $criteria->setPrimaryTableName(VacantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VacantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VacantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VacantePeer::SUCURSAL_ID, SucursalPeer::SUCURSAL_ID, $join_behavior);

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
     * Selects a collection of Vacante objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Vacante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VacantePeer::DATABASE_NAME);
        }

        VacantePeer::addSelectColumns($criteria);
        $startcol2 = VacantePeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VacantePeer::SUCURSAL_ID, SucursalPeer::SUCURSAL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VacantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VacantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VacantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VacantePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Sucursal rows

            $key2 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = SucursalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SucursalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Vacante) to the collection in $obj2 (Sucursal)
                $obj2->addVacante($obj1);
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
        return Propel::getDatabaseMap(VacantePeer::DATABASE_NAME)->getTable(VacantePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseVacantePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseVacantePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \VacanteTableMap());
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
        return VacantePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Vacante or Criteria object.
     *
     * @param      mixed $values Criteria or Vacante object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Vacante object
        }

        if ($criteria->containsKey(VacantePeer::VACANTE_ID) && $criteria->keyContainsValue(VacantePeer::VACANTE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VacantePeer::VACANTE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(VacantePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Vacante or Criteria object.
     *
     * @param      mixed $values Criteria or Vacante object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(VacantePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(VacantePeer::VACANTE_ID);
            $value = $criteria->remove(VacantePeer::VACANTE_ID);
            if ($value) {
                $selectCriteria->add(VacantePeer::VACANTE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(VacantePeer::TABLE_NAME);
            }

        } else { // $values is Vacante object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(VacantePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the vacante table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += VacantePeer::doOnDeleteCascade(new Criteria(VacantePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(VacantePeer::TABLE_NAME, $con, VacantePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VacantePeer::clearInstancePool();
            VacantePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Vacante or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Vacante object or primary key or array of primary keys
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
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Vacante) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VacantePeer::DATABASE_NAME);
            $criteria->add(VacantePeer::VACANTE_ID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(VacantePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += VacantePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                VacantePeer::clearInstancePool();
            } elseif ($values instanceof Vacante) { // it's a model object
                VacantePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    VacantePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            VacantePeer::clearRelatedInstancePool();
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
        $objects = VacantePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Postulante objects
            $criteria = new Criteria(PostulantePeer::DATABASE_NAME);

            $criteria->add(PostulantePeer::VACANTE_ID, $obj->getVacanteId());
            $affectedRows += PostulantePeer::doDelete($criteria, $con);

            // delete related Vacantecorreo objects
            $criteria = new Criteria(VacantecorreoPeer::DATABASE_NAME);

            $criteria->add(VacantecorreoPeer::VACANTE_ID, $obj->getVacanteId());
            $affectedRows += VacantecorreoPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Vacante object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Vacante $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(VacantePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(VacantePeer::TABLE_NAME);

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

        return BasePeer::doValidate(VacantePeer::DATABASE_NAME, VacantePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Vacante
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = VacantePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(VacantePeer::DATABASE_NAME);
        $criteria->add(VacantePeer::VACANTE_ID, $pk);

        $v = VacantePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Vacante[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(VacantePeer::DATABASE_NAME);
            $criteria->add(VacantePeer::VACANTE_ID, $pks, Criteria::IN);
            $objs = VacantePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseVacantePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVacantePeer::buildTableMap();

