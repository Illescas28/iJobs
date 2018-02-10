<?php


/**
 * Base class that represents a row from the 'empresas' table.
 *
 *
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseEmpresas extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmpresasPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmpresasPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the empresa_id field.
     * @var        int
     */
    protected $empresa_id;

    /**
     * The value for the empresa_nombre field.
     * @var        string
     */
    protected $empresa_nombre;

    /**
     * The value for the empresa_logo_url field.
     * @var        string
     */
    protected $empresa_logo_url;

    /**
     * The value for the empresas_razon_social field.
     * @var        string
     */
    protected $empresas_razon_social;

    /**
     * The value for the empresa_rfc field.
     * @var        string
     */
    protected $empresa_rfc;

    /**
     * The value for the empresa_direccion_fiscal field.
     * @var        string
     */
    protected $empresa_direccion_fiscal;

    /**
     * The value for the empresa_estatus field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $empresa_estatus;

    /**
     * The value for the empresa_fecha_alta field.
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        string
     */
    protected $empresa_fecha_alta;

    /**
     * The value for the empresa_usuario_alta field.
     * @var        int
     */
    protected $empresa_usuario_alta;

    /**
     * The value for the empresa_fecha_actualiza field.
     * @var        string
     */
    protected $empresa_fecha_actualiza;

    /**
     * The value for the empresa_usuario_modifica field.
     * @var        int
     */
    protected $empresa_usuario_modifica;

    /**
     * @var        PropelObjectCollection|Empresacontactos[] Collection to store aggregation of Empresacontactos objects.
     */
    protected $collEmpresacontactoss;
    protected $collEmpresacontactossPartial;

    /**
     * @var        PropelObjectCollection|Sucursales[] Collection to store aggregation of Sucursales objects.
     */
    protected $collSucursaless;
    protected $collSucursalessPartial;

    /**
     * @var        PropelObjectCollection|Usuarios[] Collection to store aggregation of Usuarios objects.
     */
    protected $collUsuarioss;
    protected $collUsuariossPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empresacontactossScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $sucursalessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuariossScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->empresa_estatus = true;
    }

    /**
     * Initializes internal state of BaseEmpresas object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [empresa_nombre] column value.
     *
     * @return string
     */
    public function getEmpresaNombre()
    {

        return $this->empresa_nombre;
    }

    /**
     * Get the [empresa_logo_url] column value.
     *
     * @return string
     */
    public function getEmpresaLogoUrl()
    {

        return $this->empresa_logo_url;
    }

    /**
     * Get the [empresas_razon_social] column value.
     *
     * @return string
     */
    public function getEmpresasRazonSocial()
    {

        return $this->empresas_razon_social;
    }

    /**
     * Get the [empresa_rfc] column value.
     *
     * @return string
     */
    public function getEmpresaRfc()
    {

        return $this->empresa_rfc;
    }

    /**
     * Get the [empresa_direccion_fiscal] column value.
     *
     * @return string
     */
    public function getEmpresaDireccionFiscal()
    {

        return $this->empresa_direccion_fiscal;
    }

    /**
     * Get the [empresa_estatus] column value.
     *
     * @return boolean
     */
    public function getEmpresaEstatus()
    {

        return $this->empresa_estatus;
    }

    /**
     * Get the [optionally formatted] temporal [empresa_fecha_alta] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEmpresaFechaAlta($format = 'Y-m-d H:i:s')
    {
        if ($this->empresa_fecha_alta === null) {
            return null;
        }

        if ($this->empresa_fecha_alta === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->empresa_fecha_alta);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->empresa_fecha_alta, true), $x);
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
     * Get the [empresa_usuario_alta] column value.
     *
     * @return int
     */
    public function getEmpresaUsuarioAlta()
    {

        return $this->empresa_usuario_alta;
    }

    /**
     * Get the [optionally formatted] temporal [empresa_fecha_actualiza] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEmpresaFechaActualiza($format = 'Y-m-d H:i:s')
    {
        if ($this->empresa_fecha_actualiza === null) {
            return null;
        }

        if ($this->empresa_fecha_actualiza === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->empresa_fecha_actualiza);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->empresa_fecha_actualiza, true), $x);
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
     * Get the [empresa_usuario_modifica] column value.
     *
     * @return int
     */
    public function getEmpresaUsuarioModifica()
    {

        return $this->empresa_usuario_modifica;
    }

    /**
     * Set the value of [empresa_id] column.
     *
     * @param  int $v new value
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->empresa_id !== $v) {
            $this->empresa_id = $v;
            $this->modifiedColumns[] = EmpresasPeer::EMPRESA_ID;
        }


        return $this;
    } // setEmpresaId()

    /**
     * Set the value of [empresa_nombre] column.
     *
     * @param  string $v new value
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empresa_nombre !== $v) {
            $this->empresa_nombre = $v;
            $this->modifiedColumns[] = EmpresasPeer::EMPRESA_NOMBRE;
        }


        return $this;
    } // setEmpresaNombre()

    /**
     * Set the value of [empresa_logo_url] column.
     *
     * @param  string $v new value
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaLogoUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empresa_logo_url !== $v) {
            $this->empresa_logo_url = $v;
            $this->modifiedColumns[] = EmpresasPeer::EMPRESA_LOGO_URL;
        }


        return $this;
    } // setEmpresaLogoUrl()

    /**
     * Set the value of [empresas_razon_social] column.
     *
     * @param  string $v new value
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresasRazonSocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empresas_razon_social !== $v) {
            $this->empresas_razon_social = $v;
            $this->modifiedColumns[] = EmpresasPeer::EMPRESAS_RAZON_SOCIAL;
        }


        return $this;
    } // setEmpresasRazonSocial()

    /**
     * Set the value of [empresa_rfc] column.
     *
     * @param  string $v new value
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empresa_rfc !== $v) {
            $this->empresa_rfc = $v;
            $this->modifiedColumns[] = EmpresasPeer::EMPRESA_RFC;
        }


        return $this;
    } // setEmpresaRfc()

    /**
     * Set the value of [empresa_direccion_fiscal] column.
     *
     * @param  string $v new value
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaDireccionFiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empresa_direccion_fiscal !== $v) {
            $this->empresa_direccion_fiscal = $v;
            $this->modifiedColumns[] = EmpresasPeer::EMPRESA_DIRECCION_FISCAL;
        }


        return $this;
    } // setEmpresaDireccionFiscal()

    /**
     * Sets the value of the [empresa_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->empresa_estatus !== $v) {
            $this->empresa_estatus = $v;
            $this->modifiedColumns[] = EmpresasPeer::EMPRESA_ESTATUS;
        }


        return $this;
    } // setEmpresaEstatus()

    /**
     * Sets the value of [empresa_fecha_alta] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaFechaAlta($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->empresa_fecha_alta !== null || $dt !== null) {
            $currentDateAsString = ($this->empresa_fecha_alta !== null && $tmpDt = new DateTime($this->empresa_fecha_alta)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->empresa_fecha_alta = $newDateAsString;
                $this->modifiedColumns[] = EmpresasPeer::EMPRESA_FECHA_ALTA;
            }
        } // if either are not null


        return $this;
    } // setEmpresaFechaAlta()

    /**
     * Set the value of [empresa_usuario_alta] column.
     *
     * @param  int $v new value
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaUsuarioAlta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->empresa_usuario_alta !== $v) {
            $this->empresa_usuario_alta = $v;
            $this->modifiedColumns[] = EmpresasPeer::EMPRESA_USUARIO_ALTA;
        }


        return $this;
    } // setEmpresaUsuarioAlta()

    /**
     * Sets the value of [empresa_fecha_actualiza] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaFechaActualiza($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->empresa_fecha_actualiza !== null || $dt !== null) {
            $currentDateAsString = ($this->empresa_fecha_actualiza !== null && $tmpDt = new DateTime($this->empresa_fecha_actualiza)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->empresa_fecha_actualiza = $newDateAsString;
                $this->modifiedColumns[] = EmpresasPeer::EMPRESA_FECHA_ACTUALIZA;
            }
        } // if either are not null


        return $this;
    } // setEmpresaFechaActualiza()

    /**
     * Set the value of [empresa_usuario_modifica] column.
     *
     * @param  int $v new value
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresaUsuarioModifica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->empresa_usuario_modifica !== $v) {
            $this->empresa_usuario_modifica = $v;
            $this->modifiedColumns[] = EmpresasPeer::EMPRESA_USUARIO_MODIFICA;
        }


        return $this;
    } // setEmpresaUsuarioModifica()

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
            if ($this->empresa_estatus !== true) {
                return false;
            }

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

            $this->empresa_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->empresa_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->empresa_logo_url = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->empresas_razon_social = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->empresa_rfc = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->empresa_direccion_fiscal = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->empresa_estatus = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->empresa_fecha_alta = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->empresa_usuario_alta = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->empresa_fecha_actualiza = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->empresa_usuario_modifica = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = EmpresasPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Empresas object", $e);
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
            $con = Propel::getConnection(EmpresasPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmpresasPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collEmpresacontactoss = null;

            $this->collSucursaless = null;

            $this->collUsuarioss = null;

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
            $con = Propel::getConnection(EmpresasPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmpresasQuery::create()
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
            $con = Propel::getConnection(EmpresasPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EmpresasPeer::addInstanceToPool($this);
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

            if ($this->empresacontactossScheduledForDeletion !== null) {
                if (!$this->empresacontactossScheduledForDeletion->isEmpty()) {
                    EmpresacontactosQuery::create()
                        ->filterByPrimaryKeys($this->empresacontactossScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empresacontactossScheduledForDeletion = null;
                }
            }

            if ($this->collEmpresacontactoss !== null) {
                foreach ($this->collEmpresacontactoss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->sucursalessScheduledForDeletion !== null) {
                if (!$this->sucursalessScheduledForDeletion->isEmpty()) {
                    SucursalesQuery::create()
                        ->filterByPrimaryKeys($this->sucursalessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->sucursalessScheduledForDeletion = null;
                }
            }

            if ($this->collSucursaless !== null) {
                foreach ($this->collSucursaless as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->usuariossScheduledForDeletion !== null) {
                if (!$this->usuariossScheduledForDeletion->isEmpty()) {
                    UsuariosQuery::create()
                        ->filterByPrimaryKeys($this->usuariossScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->usuariossScheduledForDeletion = null;
                }
            }

            if ($this->collUsuarioss !== null) {
                foreach ($this->collUsuarioss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = EmpresasPeer::EMPRESA_ID;
        if (null !== $this->empresa_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmpresasPeer::EMPRESA_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_id`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_nombre`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_LOGO_URL)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_logo_url`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESAS_RAZON_SOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`empresas_razon_social`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_rfc`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_DIRECCION_FISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_direccion_fiscal`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_estatus`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_FECHA_ALTA)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_fecha_alta`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_USUARIO_ALTA)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_usuario_alta`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_FECHA_ACTUALIZA)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_fecha_actualiza`';
        }
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_USUARIO_MODIFICA)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_usuario_modifica`';
        }

        $sql = sprintf(
            'INSERT INTO `empresas` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`empresa_id`':
                        $stmt->bindValue($identifier, $this->empresa_id, PDO::PARAM_INT);
                        break;
                    case '`empresa_nombre`':
                        $stmt->bindValue($identifier, $this->empresa_nombre, PDO::PARAM_STR);
                        break;
                    case '`empresa_logo_url`':
                        $stmt->bindValue($identifier, $this->empresa_logo_url, PDO::PARAM_STR);
                        break;
                    case '`empresas_razon_social`':
                        $stmt->bindValue($identifier, $this->empresas_razon_social, PDO::PARAM_STR);
                        break;
                    case '`empresa_rfc`':
                        $stmt->bindValue($identifier, $this->empresa_rfc, PDO::PARAM_STR);
                        break;
                    case '`empresa_direccion_fiscal`':
                        $stmt->bindValue($identifier, $this->empresa_direccion_fiscal, PDO::PARAM_STR);
                        break;
                    case '`empresa_estatus`':
                        $stmt->bindValue($identifier, (int) $this->empresa_estatus, PDO::PARAM_INT);
                        break;
                    case '`empresa_fecha_alta`':
                        $stmt->bindValue($identifier, $this->empresa_fecha_alta, PDO::PARAM_STR);
                        break;
                    case '`empresa_usuario_alta`':
                        $stmt->bindValue($identifier, $this->empresa_usuario_alta, PDO::PARAM_INT);
                        break;
                    case '`empresa_fecha_actualiza`':
                        $stmt->bindValue($identifier, $this->empresa_fecha_actualiza, PDO::PARAM_STR);
                        break;
                    case '`empresa_usuario_modifica`':
                        $stmt->bindValue($identifier, $this->empresa_usuario_modifica, PDO::PARAM_INT);
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
        $this->setEmpresaId($pk);

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


            if (($retval = EmpresasPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEmpresacontactoss !== null) {
                    foreach ($this->collEmpresacontactoss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSucursaless !== null) {
                    foreach ($this->collSucursaless as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collUsuarioss !== null) {
                    foreach ($this->collUsuarioss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = EmpresasPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getEmpresaId();
                break;
            case 1:
                return $this->getEmpresaNombre();
                break;
            case 2:
                return $this->getEmpresaLogoUrl();
                break;
            case 3:
                return $this->getEmpresasRazonSocial();
                break;
            case 4:
                return $this->getEmpresaRfc();
                break;
            case 5:
                return $this->getEmpresaDireccionFiscal();
                break;
            case 6:
                return $this->getEmpresaEstatus();
                break;
            case 7:
                return $this->getEmpresaFechaAlta();
                break;
            case 8:
                return $this->getEmpresaUsuarioAlta();
                break;
            case 9:
                return $this->getEmpresaFechaActualiza();
                break;
            case 10:
                return $this->getEmpresaUsuarioModifica();
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
        if (isset($alreadyDumpedObjects['Empresas'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Empresas'][$this->getPrimaryKey()] = true;
        $keys = EmpresasPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getEmpresaId(),
            $keys[1] => $this->getEmpresaNombre(),
            $keys[2] => $this->getEmpresaLogoUrl(),
            $keys[3] => $this->getEmpresasRazonSocial(),
            $keys[4] => $this->getEmpresaRfc(),
            $keys[5] => $this->getEmpresaDireccionFiscal(),
            $keys[6] => $this->getEmpresaEstatus(),
            $keys[7] => $this->getEmpresaFechaAlta(),
            $keys[8] => $this->getEmpresaUsuarioAlta(),
            $keys[9] => $this->getEmpresaFechaActualiza(),
            $keys[10] => $this->getEmpresaUsuarioModifica(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collEmpresacontactoss) {
                $result['Empresacontactoss'] = $this->collEmpresacontactoss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSucursaless) {
                $result['Sucursaless'] = $this->collSucursaless->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUsuarioss) {
                $result['Usuarioss'] = $this->collUsuarioss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EmpresasPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setEmpresaId($value);
                break;
            case 1:
                $this->setEmpresaNombre($value);
                break;
            case 2:
                $this->setEmpresaLogoUrl($value);
                break;
            case 3:
                $this->setEmpresasRazonSocial($value);
                break;
            case 4:
                $this->setEmpresaRfc($value);
                break;
            case 5:
                $this->setEmpresaDireccionFiscal($value);
                break;
            case 6:
                $this->setEmpresaEstatus($value);
                break;
            case 7:
                $this->setEmpresaFechaAlta($value);
                break;
            case 8:
                $this->setEmpresaUsuarioAlta($value);
                break;
            case 9:
                $this->setEmpresaFechaActualiza($value);
                break;
            case 10:
                $this->setEmpresaUsuarioModifica($value);
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
        $keys = EmpresasPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setEmpresaId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEmpresaNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmpresaLogoUrl($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmpresasRazonSocial($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmpresaRfc($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmpresaDireccionFiscal($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmpresaEstatus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEmpresaFechaAlta($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEmpresaUsuarioAlta($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEmpresaFechaActualiza($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEmpresaUsuarioModifica($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmpresasPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmpresasPeer::EMPRESA_ID)) $criteria->add(EmpresasPeer::EMPRESA_ID, $this->empresa_id);
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_NOMBRE)) $criteria->add(EmpresasPeer::EMPRESA_NOMBRE, $this->empresa_nombre);
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_LOGO_URL)) $criteria->add(EmpresasPeer::EMPRESA_LOGO_URL, $this->empresa_logo_url);
        if ($this->isColumnModified(EmpresasPeer::EMPRESAS_RAZON_SOCIAL)) $criteria->add(EmpresasPeer::EMPRESAS_RAZON_SOCIAL, $this->empresas_razon_social);
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_RFC)) $criteria->add(EmpresasPeer::EMPRESA_RFC, $this->empresa_rfc);
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_DIRECCION_FISCAL)) $criteria->add(EmpresasPeer::EMPRESA_DIRECCION_FISCAL, $this->empresa_direccion_fiscal);
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_ESTATUS)) $criteria->add(EmpresasPeer::EMPRESA_ESTATUS, $this->empresa_estatus);
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_FECHA_ALTA)) $criteria->add(EmpresasPeer::EMPRESA_FECHA_ALTA, $this->empresa_fecha_alta);
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_USUARIO_ALTA)) $criteria->add(EmpresasPeer::EMPRESA_USUARIO_ALTA, $this->empresa_usuario_alta);
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_FECHA_ACTUALIZA)) $criteria->add(EmpresasPeer::EMPRESA_FECHA_ACTUALIZA, $this->empresa_fecha_actualiza);
        if ($this->isColumnModified(EmpresasPeer::EMPRESA_USUARIO_MODIFICA)) $criteria->add(EmpresasPeer::EMPRESA_USUARIO_MODIFICA, $this->empresa_usuario_modifica);

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
        $criteria = new Criteria(EmpresasPeer::DATABASE_NAME);
        $criteria->add(EmpresasPeer::EMPRESA_ID, $this->empresa_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getEmpresaId();
    }

    /**
     * Generic method to set the primary key (empresa_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setEmpresaId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getEmpresaId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Empresas (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEmpresaNombre($this->getEmpresaNombre());
        $copyObj->setEmpresaLogoUrl($this->getEmpresaLogoUrl());
        $copyObj->setEmpresasRazonSocial($this->getEmpresasRazonSocial());
        $copyObj->setEmpresaRfc($this->getEmpresaRfc());
        $copyObj->setEmpresaDireccionFiscal($this->getEmpresaDireccionFiscal());
        $copyObj->setEmpresaEstatus($this->getEmpresaEstatus());
        $copyObj->setEmpresaFechaAlta($this->getEmpresaFechaAlta());
        $copyObj->setEmpresaUsuarioAlta($this->getEmpresaUsuarioAlta());
        $copyObj->setEmpresaFechaActualiza($this->getEmpresaFechaActualiza());
        $copyObj->setEmpresaUsuarioModifica($this->getEmpresaUsuarioModifica());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEmpresacontactoss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpresacontactos($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSucursaless() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSucursales($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUsuarioss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsuarios($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setEmpresaId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Empresas Clone of current object.
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
     * @return EmpresasPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmpresasPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Empresacontactos' == $relationName) {
            $this->initEmpresacontactoss();
        }
        if ('Sucursales' == $relationName) {
            $this->initSucursaless();
        }
        if ('Usuarios' == $relationName) {
            $this->initUsuarioss();
        }
    }

    /**
     * Clears out the collEmpresacontactoss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresas The current object (for fluent API support)
     * @see        addEmpresacontactoss()
     */
    public function clearEmpresacontactoss()
    {
        $this->collEmpresacontactoss = null; // important to set this to null since that means it is uninitialized
        $this->collEmpresacontactossPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpresacontactoss collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpresacontactoss($v = true)
    {
        $this->collEmpresacontactossPartial = $v;
    }

    /**
     * Initializes the collEmpresacontactoss collection.
     *
     * By default this just sets the collEmpresacontactoss collection to an empty array (like clearcollEmpresacontactoss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpresacontactoss($overrideExisting = true)
    {
        if (null !== $this->collEmpresacontactoss && !$overrideExisting) {
            return;
        }
        $this->collEmpresacontactoss = new PropelObjectCollection();
        $this->collEmpresacontactoss->setModel('Empresacontactos');
    }

    /**
     * Gets an array of Empresacontactos objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresas is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empresacontactos[] List of Empresacontactos objects
     * @throws PropelException
     */
    public function getEmpresacontactoss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpresacontactossPartial && !$this->isNew();
        if (null === $this->collEmpresacontactoss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpresacontactoss) {
                // return empty collection
                $this->initEmpresacontactoss();
            } else {
                $collEmpresacontactoss = EmpresacontactosQuery::create(null, $criteria)
                    ->filterByEmpresas($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpresacontactossPartial && count($collEmpresacontactoss)) {
                      $this->initEmpresacontactoss(false);

                      foreach ($collEmpresacontactoss as $obj) {
                        if (false == $this->collEmpresacontactoss->contains($obj)) {
                          $this->collEmpresacontactoss->append($obj);
                        }
                      }

                      $this->collEmpresacontactossPartial = true;
                    }

                    $collEmpresacontactoss->getInternalIterator()->rewind();

                    return $collEmpresacontactoss;
                }

                if ($partial && $this->collEmpresacontactoss) {
                    foreach ($this->collEmpresacontactoss as $obj) {
                        if ($obj->isNew()) {
                            $collEmpresacontactoss[] = $obj;
                        }
                    }
                }

                $this->collEmpresacontactoss = $collEmpresacontactoss;
                $this->collEmpresacontactossPartial = false;
            }
        }

        return $this->collEmpresacontactoss;
    }

    /**
     * Sets a collection of Empresacontactos objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empresacontactoss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresas The current object (for fluent API support)
     */
    public function setEmpresacontactoss(PropelCollection $empresacontactoss, PropelPDO $con = null)
    {
        $empresacontactossToDelete = $this->getEmpresacontactoss(new Criteria(), $con)->diff($empresacontactoss);


        $this->empresacontactossScheduledForDeletion = $empresacontactossToDelete;

        foreach ($empresacontactossToDelete as $empresacontactosRemoved) {
            $empresacontactosRemoved->setEmpresas(null);
        }

        $this->collEmpresacontactoss = null;
        foreach ($empresacontactoss as $empresacontactos) {
            $this->addEmpresacontactos($empresacontactos);
        }

        $this->collEmpresacontactoss = $empresacontactoss;
        $this->collEmpresacontactossPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empresacontactos objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empresacontactos objects.
     * @throws PropelException
     */
    public function countEmpresacontactoss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpresacontactossPartial && !$this->isNew();
        if (null === $this->collEmpresacontactoss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpresacontactoss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpresacontactoss());
            }
            $query = EmpresacontactosQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresas($this)
                ->count($con);
        }

        return count($this->collEmpresacontactoss);
    }

    /**
     * Method called to associate a Empresacontactos object to this object
     * through the Empresacontactos foreign key attribute.
     *
     * @param    Empresacontactos $l Empresacontactos
     * @return Empresas The current object (for fluent API support)
     */
    public function addEmpresacontactos(Empresacontactos $l)
    {
        if ($this->collEmpresacontactoss === null) {
            $this->initEmpresacontactoss();
            $this->collEmpresacontactossPartial = true;
        }

        if (!in_array($l, $this->collEmpresacontactoss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpresacontactos($l);

            if ($this->empresacontactossScheduledForDeletion and $this->empresacontactossScheduledForDeletion->contains($l)) {
                $this->empresacontactossScheduledForDeletion->remove($this->empresacontactossScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empresacontactos $empresacontactos The empresacontactos object to add.
     */
    protected function doAddEmpresacontactos($empresacontactos)
    {
        $this->collEmpresacontactoss[]= $empresacontactos;
        $empresacontactos->setEmpresas($this);
    }

    /**
     * @param	Empresacontactos $empresacontactos The empresacontactos object to remove.
     * @return Empresas The current object (for fluent API support)
     */
    public function removeEmpresacontactos($empresacontactos)
    {
        if ($this->getEmpresacontactoss()->contains($empresacontactos)) {
            $this->collEmpresacontactoss->remove($this->collEmpresacontactoss->search($empresacontactos));
            if (null === $this->empresacontactossScheduledForDeletion) {
                $this->empresacontactossScheduledForDeletion = clone $this->collEmpresacontactoss;
                $this->empresacontactossScheduledForDeletion->clear();
            }
            $this->empresacontactossScheduledForDeletion[]= clone $empresacontactos;
            $empresacontactos->setEmpresas(null);
        }

        return $this;
    }

    /**
     * Clears out the collSucursaless collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresas The current object (for fluent API support)
     * @see        addSucursaless()
     */
    public function clearSucursaless()
    {
        $this->collSucursaless = null; // important to set this to null since that means it is uninitialized
        $this->collSucursalessPartial = null;

        return $this;
    }

    /**
     * reset is the collSucursaless collection loaded partially
     *
     * @return void
     */
    public function resetPartialSucursaless($v = true)
    {
        $this->collSucursalessPartial = $v;
    }

    /**
     * Initializes the collSucursaless collection.
     *
     * By default this just sets the collSucursaless collection to an empty array (like clearcollSucursaless());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSucursaless($overrideExisting = true)
    {
        if (null !== $this->collSucursaless && !$overrideExisting) {
            return;
        }
        $this->collSucursaless = new PropelObjectCollection();
        $this->collSucursaless->setModel('Sucursales');
    }

    /**
     * Gets an array of Sucursales objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresas is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Sucursales[] List of Sucursales objects
     * @throws PropelException
     */
    public function getSucursaless($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSucursalessPartial && !$this->isNew();
        if (null === $this->collSucursaless || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSucursaless) {
                // return empty collection
                $this->initSucursaless();
            } else {
                $collSucursaless = SucursalesQuery::create(null, $criteria)
                    ->filterByEmpresas($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSucursalessPartial && count($collSucursaless)) {
                      $this->initSucursaless(false);

                      foreach ($collSucursaless as $obj) {
                        if (false == $this->collSucursaless->contains($obj)) {
                          $this->collSucursaless->append($obj);
                        }
                      }

                      $this->collSucursalessPartial = true;
                    }

                    $collSucursaless->getInternalIterator()->rewind();

                    return $collSucursaless;
                }

                if ($partial && $this->collSucursaless) {
                    foreach ($this->collSucursaless as $obj) {
                        if ($obj->isNew()) {
                            $collSucursaless[] = $obj;
                        }
                    }
                }

                $this->collSucursaless = $collSucursaless;
                $this->collSucursalessPartial = false;
            }
        }

        return $this->collSucursaless;
    }

    /**
     * Sets a collection of Sucursales objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sucursaless A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresas The current object (for fluent API support)
     */
    public function setSucursaless(PropelCollection $sucursaless, PropelPDO $con = null)
    {
        $sucursalessToDelete = $this->getSucursaless(new Criteria(), $con)->diff($sucursaless);


        $this->sucursalessScheduledForDeletion = $sucursalessToDelete;

        foreach ($sucursalessToDelete as $sucursalesRemoved) {
            $sucursalesRemoved->setEmpresas(null);
        }

        $this->collSucursaless = null;
        foreach ($sucursaless as $sucursales) {
            $this->addSucursales($sucursales);
        }

        $this->collSucursaless = $sucursaless;
        $this->collSucursalessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Sucursales objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Sucursales objects.
     * @throws PropelException
     */
    public function countSucursaless(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSucursalessPartial && !$this->isNew();
        if (null === $this->collSucursaless || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSucursaless) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSucursaless());
            }
            $query = SucursalesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresas($this)
                ->count($con);
        }

        return count($this->collSucursaless);
    }

    /**
     * Method called to associate a Sucursales object to this object
     * through the Sucursales foreign key attribute.
     *
     * @param    Sucursales $l Sucursales
     * @return Empresas The current object (for fluent API support)
     */
    public function addSucursales(Sucursales $l)
    {
        if ($this->collSucursaless === null) {
            $this->initSucursaless();
            $this->collSucursalessPartial = true;
        }

        if (!in_array($l, $this->collSucursaless->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSucursales($l);

            if ($this->sucursalessScheduledForDeletion and $this->sucursalessScheduledForDeletion->contains($l)) {
                $this->sucursalessScheduledForDeletion->remove($this->sucursalessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Sucursales $sucursales The sucursales object to add.
     */
    protected function doAddSucursales($sucursales)
    {
        $this->collSucursaless[]= $sucursales;
        $sucursales->setEmpresas($this);
    }

    /**
     * @param	Sucursales $sucursales The sucursales object to remove.
     * @return Empresas The current object (for fluent API support)
     */
    public function removeSucursales($sucursales)
    {
        if ($this->getSucursaless()->contains($sucursales)) {
            $this->collSucursaless->remove($this->collSucursaless->search($sucursales));
            if (null === $this->sucursalessScheduledForDeletion) {
                $this->sucursalessScheduledForDeletion = clone $this->collSucursaless;
                $this->sucursalessScheduledForDeletion->clear();
            }
            $this->sucursalessScheduledForDeletion[]= clone $sucursales;
            $sucursales->setEmpresas(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresas is new, it will return
     * an empty collection; or if this Empresas has previously
     * been saved, it will retrieve related Sucursaless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresas.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sucursales[] List of Sucursales objects
     */
    public function getSucursalessJoinSepomex($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SucursalesQuery::create(null, $criteria);
        $query->joinWith('Sepomex', $join_behavior);

        return $this->getSucursaless($query, $con);
    }

    /**
     * Clears out the collUsuarioss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresas The current object (for fluent API support)
     * @see        addUsuarioss()
     */
    public function clearUsuarioss()
    {
        $this->collUsuarioss = null; // important to set this to null since that means it is uninitialized
        $this->collUsuariossPartial = null;

        return $this;
    }

    /**
     * reset is the collUsuarioss collection loaded partially
     *
     * @return void
     */
    public function resetPartialUsuarioss($v = true)
    {
        $this->collUsuariossPartial = $v;
    }

    /**
     * Initializes the collUsuarioss collection.
     *
     * By default this just sets the collUsuarioss collection to an empty array (like clearcollUsuarioss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUsuarioss($overrideExisting = true)
    {
        if (null !== $this->collUsuarioss && !$overrideExisting) {
            return;
        }
        $this->collUsuarioss = new PropelObjectCollection();
        $this->collUsuarioss->setModel('Usuarios');
    }

    /**
     * Gets an array of Usuarios objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresas is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Usuarios[] List of Usuarios objects
     * @throws PropelException
     */
    public function getUsuarioss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUsuariossPartial && !$this->isNew();
        if (null === $this->collUsuarioss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUsuarioss) {
                // return empty collection
                $this->initUsuarioss();
            } else {
                $collUsuarioss = UsuariosQuery::create(null, $criteria)
                    ->filterByEmpresas($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUsuariossPartial && count($collUsuarioss)) {
                      $this->initUsuarioss(false);

                      foreach ($collUsuarioss as $obj) {
                        if (false == $this->collUsuarioss->contains($obj)) {
                          $this->collUsuarioss->append($obj);
                        }
                      }

                      $this->collUsuariossPartial = true;
                    }

                    $collUsuarioss->getInternalIterator()->rewind();

                    return $collUsuarioss;
                }

                if ($partial && $this->collUsuarioss) {
                    foreach ($this->collUsuarioss as $obj) {
                        if ($obj->isNew()) {
                            $collUsuarioss[] = $obj;
                        }
                    }
                }

                $this->collUsuarioss = $collUsuarioss;
                $this->collUsuariossPartial = false;
            }
        }

        return $this->collUsuarioss;
    }

    /**
     * Sets a collection of Usuarios objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $usuarioss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresas The current object (for fluent API support)
     */
    public function setUsuarioss(PropelCollection $usuarioss, PropelPDO $con = null)
    {
        $usuariossToDelete = $this->getUsuarioss(new Criteria(), $con)->diff($usuarioss);


        $this->usuariossScheduledForDeletion = $usuariossToDelete;

        foreach ($usuariossToDelete as $usuariosRemoved) {
            $usuariosRemoved->setEmpresas(null);
        }

        $this->collUsuarioss = null;
        foreach ($usuarioss as $usuarios) {
            $this->addUsuarios($usuarios);
        }

        $this->collUsuarioss = $usuarioss;
        $this->collUsuariossPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Usuarios objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Usuarios objects.
     * @throws PropelException
     */
    public function countUsuarioss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUsuariossPartial && !$this->isNew();
        if (null === $this->collUsuarioss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUsuarioss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUsuarioss());
            }
            $query = UsuariosQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresas($this)
                ->count($con);
        }

        return count($this->collUsuarioss);
    }

    /**
     * Method called to associate a Usuarios object to this object
     * through the Usuarios foreign key attribute.
     *
     * @param    Usuarios $l Usuarios
     * @return Empresas The current object (for fluent API support)
     */
    public function addUsuarios(Usuarios $l)
    {
        if ($this->collUsuarioss === null) {
            $this->initUsuarioss();
            $this->collUsuariossPartial = true;
        }

        if (!in_array($l, $this->collUsuarioss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUsuarios($l);

            if ($this->usuariossScheduledForDeletion and $this->usuariossScheduledForDeletion->contains($l)) {
                $this->usuariossScheduledForDeletion->remove($this->usuariossScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Usuarios $usuarios The usuarios object to add.
     */
    protected function doAddUsuarios($usuarios)
    {
        $this->collUsuarioss[]= $usuarios;
        $usuarios->setEmpresas($this);
    }

    /**
     * @param	Usuarios $usuarios The usuarios object to remove.
     * @return Empresas The current object (for fluent API support)
     */
    public function removeUsuarios($usuarios)
    {
        if ($this->getUsuarioss()->contains($usuarios)) {
            $this->collUsuarioss->remove($this->collUsuarioss->search($usuarios));
            if (null === $this->usuariossScheduledForDeletion) {
                $this->usuariossScheduledForDeletion = clone $this->collUsuarioss;
                $this->usuariossScheduledForDeletion->clear();
            }
            $this->usuariossScheduledForDeletion[]= $usuarios;
            $usuarios->setEmpresas(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresas is new, it will return
     * an empty collection; or if this Empresas has previously
     * been saved, it will retrieve related Usuarioss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresas.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Usuarios[] List of Usuarios objects
     */
    public function getUsuariossJoinPostulantes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuariosQuery::create(null, $criteria);
        $query->joinWith('Postulantes', $join_behavior);

        return $this->getUsuarioss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->empresa_id = null;
        $this->empresa_nombre = null;
        $this->empresa_logo_url = null;
        $this->empresas_razon_social = null;
        $this->empresa_rfc = null;
        $this->empresa_direccion_fiscal = null;
        $this->empresa_estatus = null;
        $this->empresa_fecha_alta = null;
        $this->empresa_usuario_alta = null;
        $this->empresa_fecha_actualiza = null;
        $this->empresa_usuario_modifica = null;
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
            if ($this->collEmpresacontactoss) {
                foreach ($this->collEmpresacontactoss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSucursaless) {
                foreach ($this->collSucursaless as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsuarioss) {
                foreach ($this->collUsuarioss as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collEmpresacontactoss instanceof PropelCollection) {
            $this->collEmpresacontactoss->clearIterator();
        }
        $this->collEmpresacontactoss = null;
        if ($this->collSucursaless instanceof PropelCollection) {
            $this->collSucursaless->clearIterator();
        }
        $this->collSucursaless = null;
        if ($this->collUsuarioss instanceof PropelCollection) {
            $this->collUsuarioss->clearIterator();
        }
        $this->collUsuarioss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmpresasPeer::DEFAULT_STRING_FORMAT);
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
