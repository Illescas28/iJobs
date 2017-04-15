<?php


/**
 * Base static class for performing query and update operations on the 'postulante' table.
 *
 *
 *
 * @package propel.generator.sitiowebnd.om
 */
abstract class BasePostulantePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'sitiowebnd';

    /** the table name for this class */
    const TABLE_NAME = 'postulante';

    /** the related Propel class for this table */
    const OM_CLASS = 'Postulante';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PostulanteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the postulante_id field */
    const POSTULANTE_ID = 'postulante.postulante_id';

    /** the column name for the vacante_id field */
    const VACANTE_ID = 'postulante.vacante_id';

    /** the column name for the arealaboral_id field */
    const AREALABORAL_ID = 'postulante.arealaboral_id';

    /** the column name for the educacion_id field */
    const EDUCACION_ID = 'postulante.educacion_id';

    /** the column name for the postulante_correo field */
    const POSTULANTE_CORREO = 'postulante.postulante_correo';

    /** the column name for the postulante_nombre_completo field */
    const POSTULANTE_NOMBRE_COMPLETO = 'postulante.postulante_nombre_completo';

    /** the column name for the postulante_telefono field */
    const POSTULANTE_TELEFONO = 'postulante.postulante_telefono';

    /** the column name for the postulante_enlace field */
    const POSTULANTE_ENLACE = 'postulante.postulante_enlace';

    /** the column name for the postulante_mensaje field */
    const POSTULANTE_MENSAJE = 'postulante.postulante_mensaje';

    /** the column name for the postulante_curriculum_vitae field */
    const POSTULANTE_CURRICULUM_VITAE = 'postulante.postulante_curriculum_vitae';

    /** the column name for the postulante_educacion_estatus field */
    const POSTULANTE_EDUCACION_ESTATUS = 'postulante.postulante_educacion_estatus';

    /** the column name for the postulante_educacion_certificado field */
    const POSTULANTE_EDUCACION_CERTIFICADO = 'postulante.postulante_educacion_certificado';

    /** The enumerated values for the postulante_educacion_estatus field */
    const POSTULANTE_EDUCACION_ESTATUS_TRUNCO = 'trunco';
    const POSTULANTE_EDUCACION_ESTATUS_PASANTE = 'pasante';
    const POSTULANTE_EDUCACION_ESTATUS_TITULADO = 'titulado';
    const POSTULANTE_EDUCACION_ESTATUS_CURSANDO = 'cursando';

    /** The enumerated values for the postulante_educacion_certificado field */
    const POSTULANTE_EDUCACION_CERTIFICADO_SI = 'si';
    const POSTULANTE_EDUCACION_CERTIFICADO_NO = 'no';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Postulante objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Postulante[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PostulantePeer::$fieldNames[PostulantePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('PostulanteId', 'VacanteId', 'ArealaboralId', 'EducacionId', 'PostulanteCorreo', 'PostulanteNombreCompleto', 'PostulanteTelefono', 'PostulanteEnlace', 'PostulanteMensaje', 'PostulanteCurriculumVitae', 'PostulanteEducacionEstatus', 'PostulanteEducacionCertificado', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('postulanteId', 'vacanteId', 'arealaboralId', 'educacionId', 'postulanteCorreo', 'postulanteNombreCompleto', 'postulanteTelefono', 'postulanteEnlace', 'postulanteMensaje', 'postulanteCurriculumVitae', 'postulanteEducacionEstatus', 'postulanteEducacionCertificado', ),
        BasePeer::TYPE_COLNAME => array (PostulantePeer::POSTULANTE_ID, PostulantePeer::VACANTE_ID, PostulantePeer::AREALABORAL_ID, PostulantePeer::EDUCACION_ID, PostulantePeer::POSTULANTE_CORREO, PostulantePeer::POSTULANTE_NOMBRE_COMPLETO, PostulantePeer::POSTULANTE_TELEFONO, PostulantePeer::POSTULANTE_ENLACE, PostulantePeer::POSTULANTE_MENSAJE, PostulantePeer::POSTULANTE_CURRICULUM_VITAE, PostulantePeer::POSTULANTE_EDUCACION_ESTATUS, PostulantePeer::POSTULANTE_EDUCACION_CERTIFICADO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('POSTULANTE_ID', 'VACANTE_ID', 'AREALABORAL_ID', 'EDUCACION_ID', 'POSTULANTE_CORREO', 'POSTULANTE_NOMBRE_COMPLETO', 'POSTULANTE_TELEFONO', 'POSTULANTE_ENLACE', 'POSTULANTE_MENSAJE', 'POSTULANTE_CURRICULUM_VITAE', 'POSTULANTE_EDUCACION_ESTATUS', 'POSTULANTE_EDUCACION_CERTIFICADO', ),
        BasePeer::TYPE_FIELDNAME => array ('postulante_id', 'vacante_id', 'arealaboral_id', 'educacion_id', 'postulante_correo', 'postulante_nombre_completo', 'postulante_telefono', 'postulante_enlace', 'postulante_mensaje', 'postulante_curriculum_vitae', 'postulante_educacion_estatus', 'postulante_educacion_certificado', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PostulantePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('PostulanteId' => 0, 'VacanteId' => 1, 'ArealaboralId' => 2, 'EducacionId' => 3, 'PostulanteCorreo' => 4, 'PostulanteNombreCompleto' => 5, 'PostulanteTelefono' => 6, 'PostulanteEnlace' => 7, 'PostulanteMensaje' => 8, 'PostulanteCurriculumVitae' => 9, 'PostulanteEducacionEstatus' => 10, 'PostulanteEducacionCertificado' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('postulanteId' => 0, 'vacanteId' => 1, 'arealaboralId' => 2, 'educacionId' => 3, 'postulanteCorreo' => 4, 'postulanteNombreCompleto' => 5, 'postulanteTelefono' => 6, 'postulanteEnlace' => 7, 'postulanteMensaje' => 8, 'postulanteCurriculumVitae' => 9, 'postulanteEducacionEstatus' => 10, 'postulanteEducacionCertificado' => 11, ),
        BasePeer::TYPE_COLNAME => array (PostulantePeer::POSTULANTE_ID => 0, PostulantePeer::VACANTE_ID => 1, PostulantePeer::AREALABORAL_ID => 2, PostulantePeer::EDUCACION_ID => 3, PostulantePeer::POSTULANTE_CORREO => 4, PostulantePeer::POSTULANTE_NOMBRE_COMPLETO => 5, PostulantePeer::POSTULANTE_TELEFONO => 6, PostulantePeer::POSTULANTE_ENLACE => 7, PostulantePeer::POSTULANTE_MENSAJE => 8, PostulantePeer::POSTULANTE_CURRICULUM_VITAE => 9, PostulantePeer::POSTULANTE_EDUCACION_ESTATUS => 10, PostulantePeer::POSTULANTE_EDUCACION_CERTIFICADO => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('POSTULANTE_ID' => 0, 'VACANTE_ID' => 1, 'AREALABORAL_ID' => 2, 'EDUCACION_ID' => 3, 'POSTULANTE_CORREO' => 4, 'POSTULANTE_NOMBRE_COMPLETO' => 5, 'POSTULANTE_TELEFONO' => 6, 'POSTULANTE_ENLACE' => 7, 'POSTULANTE_MENSAJE' => 8, 'POSTULANTE_CURRICULUM_VITAE' => 9, 'POSTULANTE_EDUCACION_ESTATUS' => 10, 'POSTULANTE_EDUCACION_CERTIFICADO' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('postulante_id' => 0, 'vacante_id' => 1, 'arealaboral_id' => 2, 'educacion_id' => 3, 'postulante_correo' => 4, 'postulante_nombre_completo' => 5, 'postulante_telefono' => 6, 'postulante_enlace' => 7, 'postulante_mensaje' => 8, 'postulante_curriculum_vitae' => 9, 'postulante_educacion_estatus' => 10, 'postulante_educacion_certificado' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        PostulantePeer::POSTULANTE_EDUCACION_ESTATUS => array(
            PostulantePeer::POSTULANTE_EDUCACION_ESTATUS_TRUNCO,
            PostulantePeer::POSTULANTE_EDUCACION_ESTATUS_PASANTE,
            PostulantePeer::POSTULANTE_EDUCACION_ESTATUS_TITULADO,
            PostulantePeer::POSTULANTE_EDUCACION_ESTATUS_CURSANDO,
        ),
        PostulantePeer::POSTULANTE_EDUCACION_CERTIFICADO => array(
            PostulantePeer::POSTULANTE_EDUCACION_CERTIFICADO_SI,
            PostulantePeer::POSTULANTE_EDUCACION_CERTIFICADO_NO,
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
        $toNames = PostulantePeer::getFieldNames($toType);
        $key = isset(PostulantePeer::$fieldKeys[$fromType][$name]) ? PostulantePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PostulantePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PostulantePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PostulantePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return PostulantePeer::$enumValueSets;
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
        $valueSets = PostulantePeer::getValueSets();

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
        $values = PostulantePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. PostulantePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PostulantePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PostulantePeer::POSTULANTE_ID);
            $criteria->addSelectColumn(PostulantePeer::VACANTE_ID);
            $criteria->addSelectColumn(PostulantePeer::AREALABORAL_ID);
            $criteria->addSelectColumn(PostulantePeer::EDUCACION_ID);
            $criteria->addSelectColumn(PostulantePeer::POSTULANTE_CORREO);
            $criteria->addSelectColumn(PostulantePeer::POSTULANTE_NOMBRE_COMPLETO);
            $criteria->addSelectColumn(PostulantePeer::POSTULANTE_TELEFONO);
            $criteria->addSelectColumn(PostulantePeer::POSTULANTE_ENLACE);
            $criteria->addSelectColumn(PostulantePeer::POSTULANTE_MENSAJE);
            $criteria->addSelectColumn(PostulantePeer::POSTULANTE_CURRICULUM_VITAE);
            $criteria->addSelectColumn(PostulantePeer::POSTULANTE_EDUCACION_ESTATUS);
            $criteria->addSelectColumn(PostulantePeer::POSTULANTE_EDUCACION_CERTIFICADO);
        } else {
            $criteria->addSelectColumn($alias . '.postulante_id');
            $criteria->addSelectColumn($alias . '.vacante_id');
            $criteria->addSelectColumn($alias . '.arealaboral_id');
            $criteria->addSelectColumn($alias . '.educacion_id');
            $criteria->addSelectColumn($alias . '.postulante_correo');
            $criteria->addSelectColumn($alias . '.postulante_nombre_completo');
            $criteria->addSelectColumn($alias . '.postulante_telefono');
            $criteria->addSelectColumn($alias . '.postulante_enlace');
            $criteria->addSelectColumn($alias . '.postulante_mensaje');
            $criteria->addSelectColumn($alias . '.postulante_curriculum_vitae');
            $criteria->addSelectColumn($alias . '.postulante_educacion_estatus');
            $criteria->addSelectColumn($alias . '.postulante_educacion_certificado');
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
        $criteria->setPrimaryTableName(PostulantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PostulantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PostulantePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Postulante
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PostulantePeer::doSelect($critcopy, $con);
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
        return PostulantePeer::populateObjects(PostulantePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PostulantePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

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
     * @param Postulante $obj A Postulante object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPostulanteId();
            } // if key === null
            PostulantePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Postulante object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Postulante) {
                $key = (string) $value->getPostulanteId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Postulante object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PostulantePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Postulante Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PostulantePeer::$instances[$key])) {
                return PostulantePeer::$instances[$key];
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
        foreach (PostulantePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PostulantePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to postulante
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
        $cls = PostulantePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PostulantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PostulantePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PostulantePeer::addInstanceToPool($obj, $key);
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
     * @return array (Postulante object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PostulantePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PostulantePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PostulantePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PostulantePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PostulantePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Arealaboral table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinArealaboral(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PostulantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PostulantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PostulantePeer::AREALABORAL_ID, ArealaboralPeer::AREALABORAL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Educacion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEducacion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PostulantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PostulantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PostulantePeer::EDUCACION_ID, EducacionPeer::EDUCACION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Vacante table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinVacante(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PostulantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PostulantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PostulantePeer::VACANTE_ID, VacantePeer::VACANTE_ID, $join_behavior);

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
     * Selects a collection of Postulante objects pre-filled with their Arealaboral objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Postulante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinArealaboral(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PostulantePeer::DATABASE_NAME);
        }

        PostulantePeer::addSelectColumns($criteria);
        $startcol = PostulantePeer::NUM_HYDRATE_COLUMNS;
        ArealaboralPeer::addSelectColumns($criteria);

        $criteria->addJoin(PostulantePeer::AREALABORAL_ID, ArealaboralPeer::AREALABORAL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PostulantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PostulantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PostulantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PostulantePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ArealaboralPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ArealaboralPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ArealaboralPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ArealaboralPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Postulante) to $obj2 (Arealaboral)
                $obj2->addPostulante($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Postulante objects pre-filled with their Educacion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Postulante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEducacion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PostulantePeer::DATABASE_NAME);
        }

        PostulantePeer::addSelectColumns($criteria);
        $startcol = PostulantePeer::NUM_HYDRATE_COLUMNS;
        EducacionPeer::addSelectColumns($criteria);

        $criteria->addJoin(PostulantePeer::EDUCACION_ID, EducacionPeer::EDUCACION_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PostulantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PostulantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PostulantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PostulantePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EducacionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EducacionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EducacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EducacionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Postulante) to $obj2 (Educacion)
                $obj2->addPostulante($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Postulante objects pre-filled with their Vacante objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Postulante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinVacante(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PostulantePeer::DATABASE_NAME);
        }

        PostulantePeer::addSelectColumns($criteria);
        $startcol = PostulantePeer::NUM_HYDRATE_COLUMNS;
        VacantePeer::addSelectColumns($criteria);

        $criteria->addJoin(PostulantePeer::VACANTE_ID, VacantePeer::VACANTE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PostulantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PostulantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PostulantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PostulantePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = VacantePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = VacantePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = VacantePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    VacantePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Postulante) to $obj2 (Vacante)
                $obj2->addPostulante($obj1);

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
        $criteria->setPrimaryTableName(PostulantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PostulantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PostulantePeer::AREALABORAL_ID, ArealaboralPeer::AREALABORAL_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::EDUCACION_ID, EducacionPeer::EDUCACION_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::VACANTE_ID, VacantePeer::VACANTE_ID, $join_behavior);

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
     * Selects a collection of Postulante objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Postulante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PostulantePeer::DATABASE_NAME);
        }

        PostulantePeer::addSelectColumns($criteria);
        $startcol2 = PostulantePeer::NUM_HYDRATE_COLUMNS;

        ArealaboralPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArealaboralPeer::NUM_HYDRATE_COLUMNS;

        EducacionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EducacionPeer::NUM_HYDRATE_COLUMNS;

        VacantePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VacantePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PostulantePeer::AREALABORAL_ID, ArealaboralPeer::AREALABORAL_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::EDUCACION_ID, EducacionPeer::EDUCACION_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::VACANTE_ID, VacantePeer::VACANTE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PostulantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PostulantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PostulantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PostulantePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Arealaboral rows

            $key2 = ArealaboralPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ArealaboralPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ArealaboralPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ArealaboralPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Postulante) to the collection in $obj2 (Arealaboral)
                $obj2->addPostulante($obj1);
            } // if joined row not null

            // Add objects for joined Educacion rows

            $key3 = EducacionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = EducacionPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = EducacionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EducacionPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Postulante) to the collection in $obj3 (Educacion)
                $obj3->addPostulante($obj1);
            } // if joined row not null

            // Add objects for joined Vacante rows

            $key4 = VacantePeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = VacantePeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = VacantePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VacantePeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Postulante) to the collection in $obj4 (Vacante)
                $obj4->addPostulante($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Arealaboral table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptArealaboral(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PostulantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PostulantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PostulantePeer::EDUCACION_ID, EducacionPeer::EDUCACION_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::VACANTE_ID, VacantePeer::VACANTE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Educacion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEducacion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PostulantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PostulantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PostulantePeer::AREALABORAL_ID, ArealaboralPeer::AREALABORAL_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::VACANTE_ID, VacantePeer::VACANTE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Vacante table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptVacante(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PostulantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PostulantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PostulantePeer::AREALABORAL_ID, ArealaboralPeer::AREALABORAL_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::EDUCACION_ID, EducacionPeer::EDUCACION_ID, $join_behavior);

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
     * Selects a collection of Postulante objects pre-filled with all related objects except Arealaboral.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Postulante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptArealaboral(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PostulantePeer::DATABASE_NAME);
        }

        PostulantePeer::addSelectColumns($criteria);
        $startcol2 = PostulantePeer::NUM_HYDRATE_COLUMNS;

        EducacionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EducacionPeer::NUM_HYDRATE_COLUMNS;

        VacantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + VacantePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PostulantePeer::EDUCACION_ID, EducacionPeer::EDUCACION_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::VACANTE_ID, VacantePeer::VACANTE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PostulantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PostulantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PostulantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PostulantePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Educacion rows

                $key2 = EducacionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = EducacionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = EducacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EducacionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Postulante) to the collection in $obj2 (Educacion)
                $obj2->addPostulante($obj1);

            } // if joined row is not null

                // Add objects for joined Vacante rows

                $key3 = VacantePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = VacantePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = VacantePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    VacantePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Postulante) to the collection in $obj3 (Vacante)
                $obj3->addPostulante($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Postulante objects pre-filled with all related objects except Educacion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Postulante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEducacion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PostulantePeer::DATABASE_NAME);
        }

        PostulantePeer::addSelectColumns($criteria);
        $startcol2 = PostulantePeer::NUM_HYDRATE_COLUMNS;

        ArealaboralPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArealaboralPeer::NUM_HYDRATE_COLUMNS;

        VacantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + VacantePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PostulantePeer::AREALABORAL_ID, ArealaboralPeer::AREALABORAL_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::VACANTE_ID, VacantePeer::VACANTE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PostulantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PostulantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PostulantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PostulantePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Arealaboral rows

                $key2 = ArealaboralPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ArealaboralPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ArealaboralPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ArealaboralPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Postulante) to the collection in $obj2 (Arealaboral)
                $obj2->addPostulante($obj1);

            } // if joined row is not null

                // Add objects for joined Vacante rows

                $key3 = VacantePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = VacantePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = VacantePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    VacantePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Postulante) to the collection in $obj3 (Vacante)
                $obj3->addPostulante($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Postulante objects pre-filled with all related objects except Vacante.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Postulante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptVacante(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PostulantePeer::DATABASE_NAME);
        }

        PostulantePeer::addSelectColumns($criteria);
        $startcol2 = PostulantePeer::NUM_HYDRATE_COLUMNS;

        ArealaboralPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArealaboralPeer::NUM_HYDRATE_COLUMNS;

        EducacionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EducacionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PostulantePeer::AREALABORAL_ID, ArealaboralPeer::AREALABORAL_ID, $join_behavior);

        $criteria->addJoin(PostulantePeer::EDUCACION_ID, EducacionPeer::EDUCACION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PostulantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PostulantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PostulantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PostulantePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Arealaboral rows

                $key2 = ArealaboralPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ArealaboralPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ArealaboralPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ArealaboralPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Postulante) to the collection in $obj2 (Arealaboral)
                $obj2->addPostulante($obj1);

            } // if joined row is not null

                // Add objects for joined Educacion rows

                $key3 = EducacionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = EducacionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = EducacionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EducacionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Postulante) to the collection in $obj3 (Educacion)
                $obj3->addPostulante($obj1);

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
        return Propel::getDatabaseMap(PostulantePeer::DATABASE_NAME)->getTable(PostulantePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePostulantePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePostulantePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PostulanteTableMap());
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
        return PostulantePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Postulante or Criteria object.
     *
     * @param      mixed $values Criteria or Postulante object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Postulante object
        }

        if ($criteria->containsKey(PostulantePeer::POSTULANTE_ID) && $criteria->keyContainsValue(PostulantePeer::POSTULANTE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PostulantePeer::POSTULANTE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Postulante or Criteria object.
     *
     * @param      mixed $values Criteria or Postulante object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PostulantePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PostulantePeer::POSTULANTE_ID);
            $value = $criteria->remove(PostulantePeer::POSTULANTE_ID);
            if ($value) {
                $selectCriteria->add(PostulantePeer::POSTULANTE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PostulantePeer::TABLE_NAME);
            }

        } else { // $values is Postulante object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the postulante table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PostulantePeer::TABLE_NAME, $con, PostulantePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PostulantePeer::clearInstancePool();
            PostulantePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Postulante or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Postulante object or primary key or array of primary keys
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
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PostulantePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Postulante) { // it's a model object
            // invalidate the cache for this single object
            PostulantePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PostulantePeer::DATABASE_NAME);
            $criteria->add(PostulantePeer::POSTULANTE_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PostulantePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PostulantePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PostulantePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Postulante object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Postulante $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PostulantePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PostulantePeer::TABLE_NAME);

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

        return BasePeer::doValidate(PostulantePeer::DATABASE_NAME, PostulantePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Postulante
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PostulantePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PostulantePeer::DATABASE_NAME);
        $criteria->add(PostulantePeer::POSTULANTE_ID, $pk);

        $v = PostulantePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Postulante[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PostulantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PostulantePeer::DATABASE_NAME);
            $criteria->add(PostulantePeer::POSTULANTE_ID, $pks, Criteria::IN);
            $objs = PostulantePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePostulantePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePostulantePeer::buildTableMap();

