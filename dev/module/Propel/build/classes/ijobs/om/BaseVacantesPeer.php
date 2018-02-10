<?php


/**
 * Base static class for performing query and update operations on the 'vacantes' table.
 *
 *
 *
 * @package propel.generator.ijobs.om
 */
abstract class BaseVacantesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'ijobs';

    /** the table name for this class */
    const TABLE_NAME = 'vacantes';

    /** the related Propel class for this table */
    const OM_CLASS = 'Vacantes';

    /** the related TableMap class for this table */
    const TM_CLASS = 'VacantesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the vacante_id field */
    const VACANTE_ID = 'vacantes.vacante_id';

    /** the column name for the sucursal_id field */
    const SUCURSAL_ID = 'vacantes.sucursal_id';

    /** the column name for the vacante_nombre field */
    const VACANTE_NOMBRE = 'vacantes.vacante_nombre';

    /** the column name for the vacante_descripcion field */
    const VACANTE_DESCRIPCION = 'vacantes.vacante_descripcion';

    /** the column name for the vacante_horario field */
    const VACANTE_HORARIO = 'vacantes.vacante_horario';

    /** the column name for the vacante_sueldo field */
    const VACANTE_SUELDO = 'vacantes.vacante_sueldo';

    /** the column name for the vacante_sueldo_tipo_pago field */
    const VACANTE_SUELDO_TIPO_PAGO = 'vacantes.vacante_sueldo_tipo_pago';

    /** the column name for the vacante_candidatos field */
    const VACANTE_CANDIDATOS = 'vacantes.vacante_candidatos';

    /** the column name for the vacante_fecha_inicia field */
    const VACANTE_FECHA_INICIA = 'vacantes.vacante_fecha_inicia';

    /** the column name for the vacante_fecha_termina field */
    const VACANTE_FECHA_TERMINA = 'vacantes.vacante_fecha_termina';

    /** the column name for the vacante_visitas field */
    const VACANTE_VISITAS = 'vacantes.vacante_visitas';

    /** the column name for the vacante_estatus field */
    const VACANTE_ESTATUS = 'vacantes.vacante_estatus';

    /** the column name for the vacante_fecha_alta field */
    const VACANTE_FECHA_ALTA = 'vacantes.vacante_fecha_alta';

    /** the column name for the vacante_usuario_alta field */
    const VACANTE_USUARIO_ALTA = 'vacantes.vacante_usuario_alta';

    /** the column name for the vacante_fecha_modifica field */
    const VACANTE_FECHA_MODIFICA = 'vacantes.vacante_fecha_modifica';

    /** the column name for the vacante_usuario_modifica field */
    const VACANTE_USUARIO_MODIFICA = 'vacantes.vacante_usuario_modifica';

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
     * An identity map to hold any loaded instances of Vacantes objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Vacantes[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. VacantesPeer::$fieldNames[VacantesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('VacanteId', 'SucursalId', 'VacanteNombre', 'VacanteDescripcion', 'VacanteHorario', 'VacanteSueldo', 'VacanteSueldoTipoPago', 'VacanteCandidatos', 'VacanteFechaInicia', 'VacanteFechaTermina', 'VacanteVisitas', 'VacanteEstatus', 'VacanteFechaAlta', 'VacanteUsuarioAlta', 'VacanteFechaModifica', 'VacanteUsuarioModifica', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('vacanteId', 'sucursalId', 'vacanteNombre', 'vacanteDescripcion', 'vacanteHorario', 'vacanteSueldo', 'vacanteSueldoTipoPago', 'vacanteCandidatos', 'vacanteFechaInicia', 'vacanteFechaTermina', 'vacanteVisitas', 'vacanteEstatus', 'vacanteFechaAlta', 'vacanteUsuarioAlta', 'vacanteFechaModifica', 'vacanteUsuarioModifica', ),
        BasePeer::TYPE_COLNAME => array (VacantesPeer::VACANTE_ID, VacantesPeer::SUCURSAL_ID, VacantesPeer::VACANTE_NOMBRE, VacantesPeer::VACANTE_DESCRIPCION, VacantesPeer::VACANTE_HORARIO, VacantesPeer::VACANTE_SUELDO, VacantesPeer::VACANTE_SUELDO_TIPO_PAGO, VacantesPeer::VACANTE_CANDIDATOS, VacantesPeer::VACANTE_FECHA_INICIA, VacantesPeer::VACANTE_FECHA_TERMINA, VacantesPeer::VACANTE_VISITAS, VacantesPeer::VACANTE_ESTATUS, VacantesPeer::VACANTE_FECHA_ALTA, VacantesPeer::VACANTE_USUARIO_ALTA, VacantesPeer::VACANTE_FECHA_MODIFICA, VacantesPeer::VACANTE_USUARIO_MODIFICA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('VACANTE_ID', 'SUCURSAL_ID', 'VACANTE_NOMBRE', 'VACANTE_DESCRIPCION', 'VACANTE_HORARIO', 'VACANTE_SUELDO', 'VACANTE_SUELDO_TIPO_PAGO', 'VACANTE_CANDIDATOS', 'VACANTE_FECHA_INICIA', 'VACANTE_FECHA_TERMINA', 'VACANTE_VISITAS', 'VACANTE_ESTATUS', 'VACANTE_FECHA_ALTA', 'VACANTE_USUARIO_ALTA', 'VACANTE_FECHA_MODIFICA', 'VACANTE_USUARIO_MODIFICA', ),
        BasePeer::TYPE_FIELDNAME => array ('vacante_id', 'sucursal_id', 'vacante_nombre', 'vacante_descripcion', 'vacante_horario', 'vacante_sueldo', 'vacante_sueldo_tipo_pago', 'vacante_candidatos', 'vacante_fecha_inicia', 'vacante_fecha_termina', 'vacante_visitas', 'vacante_estatus', 'vacante_fecha_alta', 'vacante_usuario_alta', 'vacante_fecha_modifica', 'vacante_usuario_modifica', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. VacantesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('VacanteId' => 0, 'SucursalId' => 1, 'VacanteNombre' => 2, 'VacanteDescripcion' => 3, 'VacanteHorario' => 4, 'VacanteSueldo' => 5, 'VacanteSueldoTipoPago' => 6, 'VacanteCandidatos' => 7, 'VacanteFechaInicia' => 8, 'VacanteFechaTermina' => 9, 'VacanteVisitas' => 10, 'VacanteEstatus' => 11, 'VacanteFechaAlta' => 12, 'VacanteUsuarioAlta' => 13, 'VacanteFechaModifica' => 14, 'VacanteUsuarioModifica' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('vacanteId' => 0, 'sucursalId' => 1, 'vacanteNombre' => 2, 'vacanteDescripcion' => 3, 'vacanteHorario' => 4, 'vacanteSueldo' => 5, 'vacanteSueldoTipoPago' => 6, 'vacanteCandidatos' => 7, 'vacanteFechaInicia' => 8, 'vacanteFechaTermina' => 9, 'vacanteVisitas' => 10, 'vacanteEstatus' => 11, 'vacanteFechaAlta' => 12, 'vacanteUsuarioAlta' => 13, 'vacanteFechaModifica' => 14, 'vacanteUsuarioModifica' => 15, ),
        BasePeer::TYPE_COLNAME => array (VacantesPeer::VACANTE_ID => 0, VacantesPeer::SUCURSAL_ID => 1, VacantesPeer::VACANTE_NOMBRE => 2, VacantesPeer::VACANTE_DESCRIPCION => 3, VacantesPeer::VACANTE_HORARIO => 4, VacantesPeer::VACANTE_SUELDO => 5, VacantesPeer::VACANTE_SUELDO_TIPO_PAGO => 6, VacantesPeer::VACANTE_CANDIDATOS => 7, VacantesPeer::VACANTE_FECHA_INICIA => 8, VacantesPeer::VACANTE_FECHA_TERMINA => 9, VacantesPeer::VACANTE_VISITAS => 10, VacantesPeer::VACANTE_ESTATUS => 11, VacantesPeer::VACANTE_FECHA_ALTA => 12, VacantesPeer::VACANTE_USUARIO_ALTA => 13, VacantesPeer::VACANTE_FECHA_MODIFICA => 14, VacantesPeer::VACANTE_USUARIO_MODIFICA => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('VACANTE_ID' => 0, 'SUCURSAL_ID' => 1, 'VACANTE_NOMBRE' => 2, 'VACANTE_DESCRIPCION' => 3, 'VACANTE_HORARIO' => 4, 'VACANTE_SUELDO' => 5, 'VACANTE_SUELDO_TIPO_PAGO' => 6, 'VACANTE_CANDIDATOS' => 7, 'VACANTE_FECHA_INICIA' => 8, 'VACANTE_FECHA_TERMINA' => 9, 'VACANTE_VISITAS' => 10, 'VACANTE_ESTATUS' => 11, 'VACANTE_FECHA_ALTA' => 12, 'VACANTE_USUARIO_ALTA' => 13, 'VACANTE_FECHA_MODIFICA' => 14, 'VACANTE_USUARIO_MODIFICA' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('vacante_id' => 0, 'sucursal_id' => 1, 'vacante_nombre' => 2, 'vacante_descripcion' => 3, 'vacante_horario' => 4, 'vacante_sueldo' => 5, 'vacante_sueldo_tipo_pago' => 6, 'vacante_candidatos' => 7, 'vacante_fecha_inicia' => 8, 'vacante_fecha_termina' => 9, 'vacante_visitas' => 10, 'vacante_estatus' => 11, 'vacante_fecha_alta' => 12, 'vacante_usuario_alta' => 13, 'vacante_fecha_modifica' => 14, 'vacante_usuario_modifica' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        VacantesPeer::VACANTE_SUELDO_TIPO_PAGO => array(
            VacantesPeer::VACANTE_SUELDO_TIPO_PAGO_SEMANAL,
            VacantesPeer::VACANTE_SUELDO_TIPO_PAGO_QUINCENAL,
            VacantesPeer::VACANTE_SUELDO_TIPO_PAGO_MENSUAL,
        ),
        VacantesPeer::VACANTE_ESTATUS => array(
            VacantesPeer::VACANTE_ESTATUS_ACTIVO,
            VacantesPeer::VACANTE_ESTATUS_INACTIVO,
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
        $toNames = VacantesPeer::getFieldNames($toType);
        $key = isset(VacantesPeer::$fieldKeys[$fromType][$name]) ? VacantesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(VacantesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, VacantesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return VacantesPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return VacantesPeer::$enumValueSets;
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
        $valueSets = VacantesPeer::getValueSets();

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
        $values = VacantesPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. VacantesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(VacantesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(VacantesPeer::VACANTE_ID);
            $criteria->addSelectColumn(VacantesPeer::SUCURSAL_ID);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_NOMBRE);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_DESCRIPCION);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_HORARIO);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_SUELDO);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_SUELDO_TIPO_PAGO);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_CANDIDATOS);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_FECHA_INICIA);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_FECHA_TERMINA);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_VISITAS);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_ESTATUS);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_FECHA_ALTA);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_USUARIO_ALTA);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_FECHA_MODIFICA);
            $criteria->addSelectColumn(VacantesPeer::VACANTE_USUARIO_MODIFICA);
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
            $criteria->addSelectColumn($alias . '.vacante_fecha_alta');
            $criteria->addSelectColumn($alias . '.vacante_usuario_alta');
            $criteria->addSelectColumn($alias . '.vacante_fecha_modifica');
            $criteria->addSelectColumn($alias . '.vacante_usuario_modifica');
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
        $criteria->setPrimaryTableName(VacantesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VacantesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(VacantesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Vacantes
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = VacantesPeer::doSelect($critcopy, $con);
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
        return VacantesPeer::populateObjects(VacantesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            VacantesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(VacantesPeer::DATABASE_NAME);

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
     * @param Vacantes $obj A Vacantes object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getVacanteId();
            } // if key === null
            VacantesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Vacantes object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Vacantes) {
                $key = (string) $value->getVacanteId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Vacantes object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(VacantesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Vacantes Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(VacantesPeer::$instances[$key])) {
                return VacantesPeer::$instances[$key];
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
        foreach (VacantesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        VacantesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to vacantes
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
        $cls = VacantesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = VacantesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = VacantesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VacantesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Vacantes object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = VacantesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = VacantesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + VacantesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VacantesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            VacantesPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sucursales table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSucursales(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VacantesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VacantesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VacantesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VacantesPeer::SUCURSAL_ID, SucursalesPeer::SUCURSAL_ID, $join_behavior);

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
     * Selects a collection of Vacantes objects pre-filled with their Sucursales objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Vacantes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursales(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VacantesPeer::DATABASE_NAME);
        }

        VacantesPeer::addSelectColumns($criteria);
        $startcol = VacantesPeer::NUM_HYDRATE_COLUMNS;
        SucursalesPeer::addSelectColumns($criteria);

        $criteria->addJoin(VacantesPeer::SUCURSAL_ID, SucursalesPeer::SUCURSAL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VacantesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VacantesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VacantesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VacantesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SucursalesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SucursalesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SucursalesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SucursalesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Vacantes) to $obj2 (Sucursales)
                $obj2->addVacantes($obj1);

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
        $criteria->setPrimaryTableName(VacantesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VacantesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VacantesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VacantesPeer::SUCURSAL_ID, SucursalesPeer::SUCURSAL_ID, $join_behavior);

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
     * Selects a collection of Vacantes objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Vacantes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VacantesPeer::DATABASE_NAME);
        }

        VacantesPeer::addSelectColumns($criteria);
        $startcol2 = VacantesPeer::NUM_HYDRATE_COLUMNS;

        SucursalesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SucursalesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VacantesPeer::SUCURSAL_ID, SucursalesPeer::SUCURSAL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VacantesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VacantesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VacantesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VacantesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Sucursales rows

            $key2 = SucursalesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = SucursalesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SucursalesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SucursalesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Vacantes) to the collection in $obj2 (Sucursales)
                $obj2->addVacantes($obj1);
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
        return Propel::getDatabaseMap(VacantesPeer::DATABASE_NAME)->getTable(VacantesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseVacantesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseVacantesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \VacantesTableMap());
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
        return VacantesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Vacantes or Criteria object.
     *
     * @param      mixed $values Criteria or Vacantes object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Vacantes object
        }

        if ($criteria->containsKey(VacantesPeer::VACANTE_ID) && $criteria->keyContainsValue(VacantesPeer::VACANTE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VacantesPeer::VACANTE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(VacantesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Vacantes or Criteria object.
     *
     * @param      mixed $values Criteria or Vacantes object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(VacantesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(VacantesPeer::VACANTE_ID);
            $value = $criteria->remove(VacantesPeer::VACANTE_ID);
            if ($value) {
                $selectCriteria->add(VacantesPeer::VACANTE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(VacantesPeer::TABLE_NAME);
            }

        } else { // $values is Vacantes object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(VacantesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the vacantes table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += VacantesPeer::doOnDeleteCascade(new Criteria(VacantesPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(VacantesPeer::TABLE_NAME, $con, VacantesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VacantesPeer::clearInstancePool();
            VacantesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Vacantes or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Vacantes object or primary key or array of primary keys
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
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Vacantes) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VacantesPeer::DATABASE_NAME);
            $criteria->add(VacantesPeer::VACANTE_ID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(VacantesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += VacantesPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                VacantesPeer::clearInstancePool();
            } elseif ($values instanceof Vacantes) { // it's a model object
                VacantesPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    VacantesPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            VacantesPeer::clearRelatedInstancePool();
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
        $objects = VacantesPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Postulantes objects
            $criteria = new Criteria(PostulantesPeer::DATABASE_NAME);

            $criteria->add(PostulantesPeer::VACANTE_ID, $obj->getVacanteId());
            $affectedRows += PostulantesPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Vacantes object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Vacantes $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(VacantesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(VacantesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(VacantesPeer::DATABASE_NAME, VacantesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Vacantes
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = VacantesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(VacantesPeer::DATABASE_NAME);
        $criteria->add(VacantesPeer::VACANTE_ID, $pk);

        $v = VacantesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Vacantes[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(VacantesPeer::DATABASE_NAME);
            $criteria->add(VacantesPeer::VACANTE_ID, $pks, Criteria::IN);
            $objs = VacantesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseVacantesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVacantesPeer::buildTableMap();

