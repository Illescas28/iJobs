<?php


/**
 * Base class that represents a row from the 'usuarios' table.
 *
 *
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseUsuarios extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UsuariosPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UsuariosPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the usuario_id field.
     * @var        int
     */
    protected $usuario_id;

    /**
     * The value for the empresa_id field.
     * @var        int
     */
    protected $empresa_id;

    /**
     * The value for the postulante_id field.
     * @var        int
     */
    protected $postulante_id;

    /**
     * The value for the usuario_contrasena field.
     * @var        string
     */
    protected $usuario_contrasena;

    /**
     * The value for the usuario_fecha_alta field.
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        string
     */
    protected $usuario_fecha_alta;

    /**
     * The value for the usuario_usuario_alta field.
     * @var        int
     */
    protected $usuario_usuario_alta;

    /**
     * The value for the usuario_fecha_modifica field.
     * @var        string
     */
    protected $usuario_fecha_modifica;

    /**
     * The value for the usuario_usuario_modifica field.
     * @var        int
     */
    protected $usuario_usuario_modifica;

    /**
     * @var        Empresas
     */
    protected $aEmpresas;

    /**
     * @var        Postulantes
     */
    protected $aPostulantes;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
    }

    /**
     * Initializes internal state of BaseUsuarios object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [usuario_id] column value.
     *
     * @return int
     */
    public function getUsuarioId()
    {

        return $this->usuario_id;
    }

    /**
     * Get the [empresa_id] column value.
     *
     * @return int
     */
    public function getEmpresaId()
    {

        return $this->empresa_id;
    }

    /**
     * Get the [postulante_id] column value.
     *
     * @return int
     */
    public function getPostulanteId()
    {

        return $this->postulante_id;
    }

    /**
     * Get the [usuario_contrasena] column value.
     *
     * @return string
     */
    public function getUsuarioContrasena()
    {

        return $this->usuario_contrasena;
    }

    /**
     * Get the [optionally formatted] temporal [usuario_fecha_alta] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUsuarioFechaAlta($format = 'Y-m-d H:i:s')
    {
        if ($this->usuario_fecha_alta === null) {
            return null;
        }

        if ($this->usuario_fecha_alta === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->usuario_fecha_alta);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->usuario_fecha_alta, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [usuario_usuario_alta] column value.
     *
     * @return int
     */
    public function getUsuarioUsuarioAlta()
    {

        return $this->usuario_usuario_alta;
    }

    /**
     * Get the [optionally formatted] temporal [usuario_fecha_modifica] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUsuarioFechaModifica($format = 'Y-m-d H:i:s')
    {
        if ($this->usuario_fecha_modifica === null) {
            return null;
        }

        if ($this->usuario_fecha_modifica === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->usuario_fecha_modifica);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->usuario_fecha_modifica, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [usuario_usuario_modifica] column value.
     *
     * @return int
     */
    public function getUsuarioUsuarioModifica()
    {

        return $this->usuario_usuario_modifica;
    }

    /**
     * Set the value of [usuario_id] column.
     *
     * @param  int $v new value
     * @return Usuarios The current object (for fluent API support)
     */
    public function setUsuarioId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->usuario_id !== $v) {
            $this->usuario_id = $v;
            $this->modifiedColumns[] = UsuariosPeer::USUARIO_ID;
        }


        return $this;
    } // setUsuarioId()

    /**
     * Set the value of [empresa_id] column.
     *
     * @param  int $v new value
     * @return Usuarios The current object (for fluent API support)
     */
    public function setEmpresaId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->empresa_id !== $v) {
            $this->empresa_id = $v;
            $this->modifiedColumns[] = UsuariosPeer::EMPRESA_ID;
        }

        if ($this->aEmpresas !== null && $this->aEmpresas->getEmpresaId() !== $v) {
            $this->aEmpresas = null;
        }


        return $this;
    } // setEmpresaId()

    /**
     * Set the value of [postulante_id] column.
     *
     * @param  int $v new value
     * @return Usuarios The current object (for fluent API support)
     */
    public function setPostulanteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->postulante_id !== $v) {
            $this->postulante_id = $v;
            $this->modifiedColumns[] = UsuariosPeer::POSTULANTE_ID;
        }

        if ($this->aPostulantes !== null && $this->aPostulantes->getPostulanteId() !== $v) {
            $this->aPostulantes = null;
        }


        return $this;
    } // setPostulanteId()

    /**
     * Set the value of [usuario_contrasena] column.
     *
     * @param  string $v new value
     * @return Usuarios The current object (for fluent API support)
     */
    public function setUsuarioContrasena($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usuario_contrasena !== $v) {
            $this->usuario_contrasena = $v;
            $this->modifiedColumns[] = UsuariosPeer::USUARIO_CONTRASENA;
        }


        return $this;
    } // setUsuarioContrasena()

    /**
     * Sets the value of [usuario_fecha_alta] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Usuarios The current object (for fluent API support)
     */
    public function setUsuarioFechaAlta($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->usuario_fecha_alta !== null || $dt !== null) {
            $currentDateAsString = ($this->usuario_fecha_alta !== null && $tmpDt = new DateTime($this->usuario_fecha_alta)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->usuario_fecha_alta = $newDateAsString;
                $this->modifiedColumns[] = UsuariosPeer::USUARIO_FECHA_ALTA;
            }
        } // if either are not null


        return $this;
    } // setUsuarioFechaAlta()

    /**
     * Set the value of [usuario_usuario_alta] column.
     *
     * @param  int $v new value
     * @return Usuarios The current object (for fluent API support)
     */
    public function setUsuarioUsuarioAlta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->usuario_usuario_alta !== $v) {
            $this->usuario_usuario_alta = $v;
            $this->modifiedColumns[] = UsuariosPeer::USUARIO_USUARIO_ALTA;
        }


        return $this;
    } // setUsuarioUsuarioAlta()

    /**
     * Sets the value of [usuario_fecha_modifica] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Usuarios The current object (for fluent API support)
     */
    public function setUsuarioFechaModifica($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->usuario_fecha_modifica !== null || $dt !== null) {
            $currentDateAsString = ($this->usuario_fecha_modifica !== null && $tmpDt = new DateTime($this->usuario_fecha_modifica)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->usuario_fecha_modifica = $newDateAsString;
                $this->modifiedColumns[] = UsuariosPeer::USUARIO_FECHA_MODIFICA;
            }
        } // if either are not null


        return $this;
    } // setUsuarioFechaModifica()

    /**
     * Set the value of [usuario_usuario_modifica] column.
     *
     * @param  int $v new value
     * @return Usuarios The current object (for fluent API support)
     */
    public function setUsuarioUsuarioModifica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->usuario_usuario_modifica !== $v) {
            $this->usuario_usuario_modifica = $v;
            $this->modifiedColumns[] = UsuariosPeer::USUARIO_USUARIO_MODIFICA;
        }


        return $this;
    } // setUsuarioUsuarioModifica()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->usuario_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->empresa_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->postulante_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->usuario_contrasena = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->usuario_fecha_alta = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->usuario_usuario_alta = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->usuario_fecha_modifica = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->usuario_usuario_modifica = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = UsuariosPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Usuarios object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aEmpresas !== null && $this->empresa_id !== $this->aEmpresas->getEmpresaId()) {
            $this->aEmpresas = null;
        }
        if ($this->aPostulantes !== null && $this->postulante_id !== $this->aPostulantes->getPostulanteId()) {
            $this->aPostulantes = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UsuariosPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpresas = null;
            $this->aPostulantes = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UsuariosQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(UsuariosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                UsuariosPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEmpresas !== null) {
                if ($this->aEmpresas->isModified() || $this->aEmpresas->isNew()) {
                    $affectedRows += $this->aEmpresas->save($con);
                }
                $this->setEmpresas($this->aEmpresas);
            }

            if ($this->aPostulantes !== null) {
                if ($this->aPostulantes->isModified() || $this->aPostulantes->isNew()) {
                    $affectedRows += $this->aPostulantes->save($con);
                }
                $this->setPostulantes($this->aPostulantes);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = UsuariosPeer::USUARIO_ID;
        if (null !== $this->usuario_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UsuariosPeer::USUARIO_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UsuariosPeer::USUARIO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_id`';
        }
        if ($this->isColumnModified(UsuariosPeer::EMPRESA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_id`';
        }
        if ($this->isColumnModified(UsuariosPeer::POSTULANTE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_id`';
        }
        if ($this->isColumnModified(UsuariosPeer::USUARIO_CONTRASENA)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_contrasena`';
        }
        if ($this->isColumnModified(UsuariosPeer::USUARIO_FECHA_ALTA)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_fecha_alta`';
        }
        if ($this->isColumnModified(UsuariosPeer::USUARIO_USUARIO_ALTA)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_usuario_alta`';
        }
        if ($this->isColumnModified(UsuariosPeer::USUARIO_FECHA_MODIFICA)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_fecha_modifica`';
        }
        if ($this->isColumnModified(UsuariosPeer::USUARIO_USUARIO_MODIFICA)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_usuario_modifica`';
        }

        $sql = sprintf(
            'INSERT INTO `usuarios` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`usuario_id`':
                        $stmt->bindValue($identifier, $this->usuario_id, PDO::PARAM_INT);
                        break;
                    case '`empresa_id`':
                        $stmt->bindValue($identifier, $this->empresa_id, PDO::PARAM_INT);
                        break;
                    case '`postulante_id`':
                        $stmt->bindValue($identifier, $this->postulante_id, PDO::PARAM_INT);
                        break;
                    case '`usuario_contrasena`':
                        $stmt->bindValue($identifier, $this->usuario_contrasena, PDO::PARAM_STR);
                        break;
                    case '`usuario_fecha_alta`':
                        $stmt->bindValue($identifier, $this->usuario_fecha_alta, PDO::PARAM_STR);
                        break;
                    case '`usuario_usuario_alta`':
                        $stmt->bindValue($identifier, $this->usuario_usuario_alta, PDO::PARAM_INT);
                        break;
                    case '`usuario_fecha_modifica`':
                        $stmt->bindValue($identifier, $this->usuario_fecha_modifica, PDO::PARAM_STR);
                        break;
                    case '`usuario_usuario_modifica`':
                        $stmt->bindValue($identifier, $this->usuario_usuario_modifica, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setUsuarioId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEmpresas !== null) {
                if (!$this->aEmpresas->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpresas->getValidationFailures());
                }
            }

            if ($this->aPostulantes !== null) {
                if (!$this->aPostulantes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPostulantes->getValidationFailures());
                }
            }


            if (($retval = UsuariosPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = UsuariosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getUsuarioId();
                break;
            case 1:
                return $this->getEmpresaId();
                break;
            case 2:
                return $this->getPostulanteId();
                break;
            case 3:
                return $this->getUsuarioContrasena();
                break;
            case 4:
                return $this->getUsuarioFechaAlta();
                break;
            case 5:
                return $this->getUsuarioUsuarioAlta();
                break;
            case 6:
                return $this->getUsuarioFechaModifica();
                break;
            case 7:
                return $this->getUsuarioUsuarioModifica();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Usuarios'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Usuarios'][$this->getPrimaryKey()] = true;
        $keys = UsuariosPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUsuarioId(),
            $keys[1] => $this->getEmpresaId(),
            $keys[2] => $this->getPostulanteId(),
            $keys[3] => $this->getUsuarioContrasena(),
            $keys[4] => $this->getUsuarioFechaAlta(),
            $keys[5] => $this->getUsuarioUsuarioAlta(),
            $keys[6] => $this->getUsuarioFechaModifica(),
            $keys[7] => $this->getUsuarioUsuarioModifica(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpresas) {
                $result['Empresas'] = $this->aEmpresas->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPostulantes) {
                $result['Postulantes'] = $this->aPostulantes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = UsuariosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setUsuarioId($value);
                break;
            case 1:
                $this->setEmpresaId($value);
                break;
            case 2:
                $this->setPostulanteId($value);
                break;
            case 3:
                $this->setUsuarioContrasena($value);
                break;
            case 4:
                $this->setUsuarioFechaAlta($value);
                break;
            case 5:
                $this->setUsuarioUsuarioAlta($value);
                break;
            case 6:
                $this->setUsuarioFechaModifica($value);
                break;
            case 7:
                $this->setUsuarioUsuarioModifica($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = UsuariosPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setUsuarioId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEmpresaId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPostulanteId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUsuarioContrasena($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUsuarioFechaAlta($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUsuarioUsuarioAlta($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUsuarioFechaModifica($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUsuarioUsuarioModifica($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UsuariosPeer::DATABASE_NAME);

        if ($this->isColumnModified(UsuariosPeer::USUARIO_ID)) $criteria->add(UsuariosPeer::USUARIO_ID, $this->usuario_id);
        if ($this->isColumnModified(UsuariosPeer::EMPRESA_ID)) $criteria->add(UsuariosPeer::EMPRESA_ID, $this->empresa_id);
        if ($this->isColumnModified(UsuariosPeer::POSTULANTE_ID)) $criteria->add(UsuariosPeer::POSTULANTE_ID, $this->postulante_id);
        if ($this->isColumnModified(UsuariosPeer::USUARIO_CONTRASENA)) $criteria->add(UsuariosPeer::USUARIO_CONTRASENA, $this->usuario_contrasena);
        if ($this->isColumnModified(UsuariosPeer::USUARIO_FECHA_ALTA)) $criteria->add(UsuariosPeer::USUARIO_FECHA_ALTA, $this->usuario_fecha_alta);
        if ($this->isColumnModified(UsuariosPeer::USUARIO_USUARIO_ALTA)) $criteria->add(UsuariosPeer::USUARIO_USUARIO_ALTA, $this->usuario_usuario_alta);
        if ($this->isColumnModified(UsuariosPeer::USUARIO_FECHA_MODIFICA)) $criteria->add(UsuariosPeer::USUARIO_FECHA_MODIFICA, $this->usuario_fecha_modifica);
        if ($this->isColumnModified(UsuariosPeer::USUARIO_USUARIO_MODIFICA)) $criteria->add(UsuariosPeer::USUARIO_USUARIO_MODIFICA, $this->usuario_usuario_modifica);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(UsuariosPeer::DATABASE_NAME);
        $criteria->add(UsuariosPeer::USUARIO_ID, $this->usuario_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getUsuarioId();
    }

    /**
     * Generic method to set the primary key (usuario_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setUsuarioId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getUsuarioId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Usuarios (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEmpresaId($this->getEmpresaId());
        $copyObj->setPostulanteId($this->getPostulanteId());
        $copyObj->setUsuarioContrasena($this->getUsuarioContrasena());
        $copyObj->setUsuarioFechaAlta($this->getUsuarioFechaAlta());
        $copyObj->setUsuarioUsuarioAlta($this->getUsuarioUsuarioAlta());
        $copyObj->setUsuarioFechaModifica($this->getUsuarioFechaModifica());
        $copyObj->setUsuarioUsuarioModifica($this->getUsuarioUsuarioModifica());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setUsuarioId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Usuarios Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return UsuariosPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UsuariosPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empresas object.
     *
     * @param                  Empresas $v
     * @return Usuarios The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpresas(Empresas $v = null)
    {
        if ($v === null) {
            $this->setEmpresaId(NULL);
        } else {
            $this->setEmpresaId($v->getEmpresaId());
        }

        $this->aEmpresas = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empresas object, it will not be re-added.
        if ($v !== null) {
            $v->addUsuarios($this);
        }


        return $this;
    }


    /**
     * Get the associated Empresas object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empresas The associated Empresas object.
     * @throws PropelException
     */
    public function getEmpresas(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpresas === null && ($this->empresa_id !== null) && $doQuery) {
            $this->aEmpresas = EmpresasQuery::create()->findPk($this->empresa_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpresas->addUsuarioss($this);
             */
        }

        return $this->aEmpresas;
    }

    /**
     * Declares an association between this object and a Postulantes object.
     *
     * @param                  Postulantes $v
     * @return Usuarios The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPostulantes(Postulantes $v = null)
    {
        if ($v === null) {
            $this->setPostulanteId(NULL);
        } else {
            $this->setPostulanteId($v->getPostulanteId());
        }

        $this->aPostulantes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Postulantes object, it will not be re-added.
        if ($v !== null) {
            $v->addUsuarios($this);
        }


        return $this;
    }


    /**
     * Get the associated Postulantes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Postulantes The associated Postulantes object.
     * @throws PropelException
     */
    public function getPostulantes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPostulantes === null && ($this->postulante_id !== null) && $doQuery) {
            $this->aPostulantes = PostulantesQuery::create()->findPk($this->postulante_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPostulantes->addUsuarioss($this);
             */
        }

        return $this->aPostulantes;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->usuario_id = null;
        $this->empresa_id = null;
        $this->postulante_id = null;
        $this->usuario_contrasena = null;
        $this->usuario_fecha_alta = null;
        $this->usuario_usuario_alta = null;
        $this->usuario_fecha_modifica = null;
        $this->usuario_usuario_modifica = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aEmpresas instanceof Persistent) {
              $this->aEmpresas->clearAllReferences($deep);
            }
            if ($this->aPostulantes instanceof Persistent) {
              $this->aPostulantes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aEmpresas = null;
        $this->aPostulantes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UsuariosPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
