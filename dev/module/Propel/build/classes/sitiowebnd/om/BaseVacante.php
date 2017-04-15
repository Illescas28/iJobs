<?php


/**
 * Base class that represents a row from the 'vacante' table.
 *
 *
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseVacante extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VacantePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VacantePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the vacante_id field.
     * @var        int
     */
    protected $vacante_id;

    /**
     * The value for the sucursal_id field.
     * @var        int
     */
    protected $sucursal_id;

    /**
     * The value for the vacante_nombre field.
     * @var        string
     */
    protected $vacante_nombre;

    /**
     * The value for the vacante_descripcion field.
     * @var        string
     */
    protected $vacante_descripcion;

    /**
     * The value for the vacante_horario field.
     * @var        string
     */
    protected $vacante_horario;

    /**
     * The value for the vacante_sueldo field.
     * @var        string
     */
    protected $vacante_sueldo;

    /**
     * The value for the vacante_sueldo_tipo_pago field.
     * @var        string
     */
    protected $vacante_sueldo_tipo_pago;

    /**
     * The value for the vacante_candidatos field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $vacante_candidatos;

    /**
     * The value for the vacante_fecha_inicia field.
     * @var        string
     */
    protected $vacante_fecha_inicia;

    /**
     * The value for the vacante_fecha_termina field.
     * @var        string
     */
    protected $vacante_fecha_termina;

    /**
     * The value for the vacante_visitas field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $vacante_visitas;

    /**
     * The value for the vacante_estatus field.
     * Note: this column has a database default value of: 'inactivo'
     * @var        string
     */
    protected $vacante_estatus;

    /**
     * The value for the vacante_fecha field.
     * @var        string
     */
    protected $vacante_fecha;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        PropelObjectCollection|Postulante[] Collection to store aggregation of Postulante objects.
     */
    protected $collPostulantes;
    protected $collPostulantesPartial;

    /**
     * @var        PropelObjectCollection|Vacantecorreo[] Collection to store aggregation of Vacantecorreo objects.
     */
    protected $collVacantecorreos;
    protected $collVacantecorreosPartial;

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
    protected $postulantesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $vacantecorreosScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->vacante_candidatos = 0;
        $this->vacante_visitas = 0;
        $this->vacante_estatus = 'inactivo';
    }

    /**
     * Initializes internal state of BaseVacante object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [vacante_id] column value.
     *
     * @return int
     */
    public function getVacanteId()
    {

        return $this->vacante_id;
    }

    /**
     * Get the [sucursal_id] column value.
     *
     * @return int
     */
    public function getSucursalId()
    {

        return $this->sucursal_id;
    }

    /**
     * Get the [vacante_nombre] column value.
     *
     * @return string
     */
    public function getVacanteNombre()
    {

        return $this->vacante_nombre;
    }

    /**
     * Get the [vacante_descripcion] column value.
     *
     * @return string
     */
    public function getVacanteDescripcion()
    {

        return $this->vacante_descripcion;
    }

    /**
     * Get the [vacante_horario] column value.
     *
     * @return string
     */
    public function getVacanteHorario()
    {

        return $this->vacante_horario;
    }

    /**
     * Get the [vacante_sueldo] column value.
     *
     * @return string
     */
    public function getVacanteSueldo()
    {

        return $this->vacante_sueldo;
    }

    /**
     * Get the [vacante_sueldo_tipo_pago] column value.
     *
     * @return string
     */
    public function getVacanteSueldoTipoPago()
    {

        return $this->vacante_sueldo_tipo_pago;
    }

    /**
     * Get the [vacante_candidatos] column value.
     *
     * @return int
     */
    public function getVacanteCandidatos()
    {

        return $this->vacante_candidatos;
    }

    /**
     * Get the [optionally formatted] temporal [vacante_fecha_inicia] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVacanteFechaInicia($format = 'Y-m-d H:i:s')
    {
        if ($this->vacante_fecha_inicia === null) {
            return null;
        }

        if ($this->vacante_fecha_inicia === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->vacante_fecha_inicia);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->vacante_fecha_inicia, true), $x);
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
     * Get the [optionally formatted] temporal [vacante_fecha_termina] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVacanteFechaTermina($format = 'Y-m-d H:i:s')
    {
        if ($this->vacante_fecha_termina === null) {
            return null;
        }

        if ($this->vacante_fecha_termina === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->vacante_fecha_termina);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->vacante_fecha_termina, true), $x);
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
     * Get the [vacante_visitas] column value.
     *
     * @return int
     */
    public function getVacanteVisitas()
    {

        return $this->vacante_visitas;
    }

    /**
     * Get the [vacante_estatus] column value.
     *
     * @return string
     */
    public function getVacanteEstatus()
    {

        return $this->vacante_estatus;
    }

    /**
     * Get the [optionally formatted] temporal [vacante_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVacanteFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->vacante_fecha === null) {
            return null;
        }

        if ($this->vacante_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->vacante_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->vacante_fecha, true), $x);
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
     * Set the value of [vacante_id] column.
     *
     * @param  int $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_id !== $v) {
            $this->vacante_id = $v;
            $this->modifiedColumns[] = VacantePeer::VACANTE_ID;
        }


        return $this;
    } // setVacanteId()

    /**
     * Set the value of [sucursal_id] column.
     *
     * @param  int $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setSucursalId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sucursal_id !== $v) {
            $this->sucursal_id = $v;
            $this->modifiedColumns[] = VacantePeer::SUCURSAL_ID;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getSucursalId() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setSucursalId()

    /**
     * Set the value of [vacante_nombre] column.
     *
     * @param  string $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_nombre !== $v) {
            $this->vacante_nombre = $v;
            $this->modifiedColumns[] = VacantePeer::VACANTE_NOMBRE;
        }


        return $this;
    } // setVacanteNombre()

    /**
     * Set the value of [vacante_descripcion] column.
     *
     * @param  string $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_descripcion !== $v) {
            $this->vacante_descripcion = $v;
            $this->modifiedColumns[] = VacantePeer::VACANTE_DESCRIPCION;
        }


        return $this;
    } // setVacanteDescripcion()

    /**
     * Set the value of [vacante_horario] column.
     *
     * @param  string $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteHorario($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_horario !== $v) {
            $this->vacante_horario = $v;
            $this->modifiedColumns[] = VacantePeer::VACANTE_HORARIO;
        }


        return $this;
    } // setVacanteHorario()

    /**
     * Set the value of [vacante_sueldo] column.
     *
     * @param  string $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteSueldo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vacante_sueldo !== $v) {
            $this->vacante_sueldo = $v;
            $this->modifiedColumns[] = VacantePeer::VACANTE_SUELDO;
        }


        return $this;
    } // setVacanteSueldo()

    /**
     * Set the value of [vacante_sueldo_tipo_pago] column.
     *
     * @param  string $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteSueldoTipoPago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_sueldo_tipo_pago !== $v) {
            $this->vacante_sueldo_tipo_pago = $v;
            $this->modifiedColumns[] = VacantePeer::VACANTE_SUELDO_TIPO_PAGO;
        }


        return $this;
    } // setVacanteSueldoTipoPago()

    /**
     * Set the value of [vacante_candidatos] column.
     *
     * @param  int $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteCandidatos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_candidatos !== $v) {
            $this->vacante_candidatos = $v;
            $this->modifiedColumns[] = VacantePeer::VACANTE_CANDIDATOS;
        }


        return $this;
    } // setVacanteCandidatos()

    /**
     * Sets the value of [vacante_fecha_inicia] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteFechaInicia($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->vacante_fecha_inicia !== null || $dt !== null) {
            $currentDateAsString = ($this->vacante_fecha_inicia !== null && $tmpDt = new DateTime($this->vacante_fecha_inicia)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->vacante_fecha_inicia = $newDateAsString;
                $this->modifiedColumns[] = VacantePeer::VACANTE_FECHA_INICIA;
            }
        } // if either are not null


        return $this;
    } // setVacanteFechaInicia()

    /**
     * Sets the value of [vacante_fecha_termina] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteFechaTermina($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->vacante_fecha_termina !== null || $dt !== null) {
            $currentDateAsString = ($this->vacante_fecha_termina !== null && $tmpDt = new DateTime($this->vacante_fecha_termina)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->vacante_fecha_termina = $newDateAsString;
                $this->modifiedColumns[] = VacantePeer::VACANTE_FECHA_TERMINA;
            }
        } // if either are not null


        return $this;
    } // setVacanteFechaTermina()

    /**
     * Set the value of [vacante_visitas] column.
     *
     * @param  int $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteVisitas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_visitas !== $v) {
            $this->vacante_visitas = $v;
            $this->modifiedColumns[] = VacantePeer::VACANTE_VISITAS;
        }


        return $this;
    } // setVacanteVisitas()

    /**
     * Set the value of [vacante_estatus] column.
     *
     * @param  string $v new value
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_estatus !== $v) {
            $this->vacante_estatus = $v;
            $this->modifiedColumns[] = VacantePeer::VACANTE_ESTATUS;
        }


        return $this;
    } // setVacanteEstatus()

    /**
     * Sets the value of [vacante_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacanteFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->vacante_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->vacante_fecha !== null && $tmpDt = new DateTime($this->vacante_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->vacante_fecha = $newDateAsString;
                $this->modifiedColumns[] = VacantePeer::VACANTE_FECHA;
            }
        } // if either are not null


        return $this;
    } // setVacanteFecha()

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
            if ($this->vacante_candidatos !== 0) {
                return false;
            }

            if ($this->vacante_visitas !== 0) {
                return false;
            }

            if ($this->vacante_estatus !== 'inactivo') {
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

            $this->vacante_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->sucursal_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->vacante_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->vacante_descripcion = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->vacante_horario = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->vacante_sueldo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->vacante_sueldo_tipo_pago = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->vacante_candidatos = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->vacante_fecha_inicia = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->vacante_fecha_termina = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->vacante_visitas = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->vacante_estatus = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->vacante_fecha = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = VacantePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Vacante object", $e);
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

        if ($this->aSucursal !== null && $this->sucursal_id !== $this->aSucursal->getSucursalId()) {
            $this->aSucursal = null;
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
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VacantePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSucursal = null;
            $this->collPostulantes = null;

            $this->collVacantecorreos = null;

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
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VacanteQuery::create()
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
            $con = Propel::getConnection(VacantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VacantePeer::addInstanceToPool($this);
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

            if ($this->aSucursal !== null) {
                if ($this->aSucursal->isModified() || $this->aSucursal->isNew()) {
                    $affectedRows += $this->aSucursal->save($con);
                }
                $this->setSucursal($this->aSucursal);
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

            if ($this->postulantesScheduledForDeletion !== null) {
                if (!$this->postulantesScheduledForDeletion->isEmpty()) {
                    PostulanteQuery::create()
                        ->filterByPrimaryKeys($this->postulantesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->postulantesScheduledForDeletion = null;
                }
            }

            if ($this->collPostulantes !== null) {
                foreach ($this->collPostulantes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->vacantecorreosScheduledForDeletion !== null) {
                if (!$this->vacantecorreosScheduledForDeletion->isEmpty()) {
                    VacantecorreoQuery::create()
                        ->filterByPrimaryKeys($this->vacantecorreosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->vacantecorreosScheduledForDeletion = null;
                }
            }

            if ($this->collVacantecorreos !== null) {
                foreach ($this->collVacantecorreos as $referrerFK) {
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

        $this->modifiedColumns[] = VacantePeer::VACANTE_ID;
        if (null !== $this->vacante_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VacantePeer::VACANTE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VacantePeer::VACANTE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_id`';
        }
        if ($this->isColumnModified(VacantePeer::SUCURSAL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_id`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_nombre`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_descripcion`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_HORARIO)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_horario`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_SUELDO)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_sueldo`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_SUELDO_TIPO_PAGO)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_sueldo_tipo_pago`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_CANDIDATOS)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_candidatos`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_FECHA_INICIA)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_fecha_inicia`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_FECHA_TERMINA)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_fecha_termina`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_VISITAS)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_visitas`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_estatus`';
        }
        if ($this->isColumnModified(VacantePeer::VACANTE_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_fecha`';
        }

        $sql = sprintf(
            'INSERT INTO `vacante` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`vacante_id`':
                        $stmt->bindValue($identifier, $this->vacante_id, PDO::PARAM_INT);
                        break;
                    case '`sucursal_id`':
                        $stmt->bindValue($identifier, $this->sucursal_id, PDO::PARAM_INT);
                        break;
                    case '`vacante_nombre`':
                        $stmt->bindValue($identifier, $this->vacante_nombre, PDO::PARAM_STR);
                        break;
                    case '`vacante_descripcion`':
                        $stmt->bindValue($identifier, $this->vacante_descripcion, PDO::PARAM_STR);
                        break;
                    case '`vacante_horario`':
                        $stmt->bindValue($identifier, $this->vacante_horario, PDO::PARAM_STR);
                        break;
                    case '`vacante_sueldo`':
                        $stmt->bindValue($identifier, $this->vacante_sueldo, PDO::PARAM_STR);
                        break;
                    case '`vacante_sueldo_tipo_pago`':
                        $stmt->bindValue($identifier, $this->vacante_sueldo_tipo_pago, PDO::PARAM_STR);
                        break;
                    case '`vacante_candidatos`':
                        $stmt->bindValue($identifier, $this->vacante_candidatos, PDO::PARAM_INT);
                        break;
                    case '`vacante_fecha_inicia`':
                        $stmt->bindValue($identifier, $this->vacante_fecha_inicia, PDO::PARAM_STR);
                        break;
                    case '`vacante_fecha_termina`':
                        $stmt->bindValue($identifier, $this->vacante_fecha_termina, PDO::PARAM_STR);
                        break;
                    case '`vacante_visitas`':
                        $stmt->bindValue($identifier, $this->vacante_visitas, PDO::PARAM_INT);
                        break;
                    case '`vacante_estatus`':
                        $stmt->bindValue($identifier, $this->vacante_estatus, PDO::PARAM_STR);
                        break;
                    case '`vacante_fecha`':
                        $stmt->bindValue($identifier, $this->vacante_fecha, PDO::PARAM_STR);
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
        $this->setVacanteId($pk);

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

            if ($this->aSucursal !== null) {
                if (!$this->aSucursal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursal->getValidationFailures());
                }
            }


            if (($retval = VacantePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPostulantes !== null) {
                    foreach ($this->collPostulantes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVacantecorreos !== null) {
                    foreach ($this->collVacantecorreos as $referrerFK) {
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
        $pos = VacantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getVacanteId();
                break;
            case 1:
                return $this->getSucursalId();
                break;
            case 2:
                return $this->getVacanteNombre();
                break;
            case 3:
                return $this->getVacanteDescripcion();
                break;
            case 4:
                return $this->getVacanteHorario();
                break;
            case 5:
                return $this->getVacanteSueldo();
                break;
            case 6:
                return $this->getVacanteSueldoTipoPago();
                break;
            case 7:
                return $this->getVacanteCandidatos();
                break;
            case 8:
                return $this->getVacanteFechaInicia();
                break;
            case 9:
                return $this->getVacanteFechaTermina();
                break;
            case 10:
                return $this->getVacanteVisitas();
                break;
            case 11:
                return $this->getVacanteEstatus();
                break;
            case 12:
                return $this->getVacanteFecha();
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
        if (isset($alreadyDumpedObjects['Vacante'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Vacante'][$this->getPrimaryKey()] = true;
        $keys = VacantePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getVacanteId(),
            $keys[1] => $this->getSucursalId(),
            $keys[2] => $this->getVacanteNombre(),
            $keys[3] => $this->getVacanteDescripcion(),
            $keys[4] => $this->getVacanteHorario(),
            $keys[5] => $this->getVacanteSueldo(),
            $keys[6] => $this->getVacanteSueldoTipoPago(),
            $keys[7] => $this->getVacanteCandidatos(),
            $keys[8] => $this->getVacanteFechaInicia(),
            $keys[9] => $this->getVacanteFechaTermina(),
            $keys[10] => $this->getVacanteVisitas(),
            $keys[11] => $this->getVacanteEstatus(),
            $keys[12] => $this->getVacanteFecha(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPostulantes) {
                $result['Postulantes'] = $this->collPostulantes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVacantecorreos) {
                $result['Vacantecorreos'] = $this->collVacantecorreos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = VacantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setVacanteId($value);
                break;
            case 1:
                $this->setSucursalId($value);
                break;
            case 2:
                $this->setVacanteNombre($value);
                break;
            case 3:
                $this->setVacanteDescripcion($value);
                break;
            case 4:
                $this->setVacanteHorario($value);
                break;
            case 5:
                $this->setVacanteSueldo($value);
                break;
            case 6:
                $this->setVacanteSueldoTipoPago($value);
                break;
            case 7:
                $this->setVacanteCandidatos($value);
                break;
            case 8:
                $this->setVacanteFechaInicia($value);
                break;
            case 9:
                $this->setVacanteFechaTermina($value);
                break;
            case 10:
                $this->setVacanteVisitas($value);
                break;
            case 11:
                $this->setVacanteEstatus($value);
                break;
            case 12:
                $this->setVacanteFecha($value);
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
        $keys = VacantePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setVacanteId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSucursalId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setVacanteNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVacanteDescripcion($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVacanteHorario($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVacanteSueldo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVacanteSueldoTipoPago($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVacanteCandidatos($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVacanteFechaInicia($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVacanteFechaTermina($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setVacanteVisitas($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setVacanteEstatus($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setVacanteFecha($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VacantePeer::DATABASE_NAME);

        if ($this->isColumnModified(VacantePeer::VACANTE_ID)) $criteria->add(VacantePeer::VACANTE_ID, $this->vacante_id);
        if ($this->isColumnModified(VacantePeer::SUCURSAL_ID)) $criteria->add(VacantePeer::SUCURSAL_ID, $this->sucursal_id);
        if ($this->isColumnModified(VacantePeer::VACANTE_NOMBRE)) $criteria->add(VacantePeer::VACANTE_NOMBRE, $this->vacante_nombre);
        if ($this->isColumnModified(VacantePeer::VACANTE_DESCRIPCION)) $criteria->add(VacantePeer::VACANTE_DESCRIPCION, $this->vacante_descripcion);
        if ($this->isColumnModified(VacantePeer::VACANTE_HORARIO)) $criteria->add(VacantePeer::VACANTE_HORARIO, $this->vacante_horario);
        if ($this->isColumnModified(VacantePeer::VACANTE_SUELDO)) $criteria->add(VacantePeer::VACANTE_SUELDO, $this->vacante_sueldo);
        if ($this->isColumnModified(VacantePeer::VACANTE_SUELDO_TIPO_PAGO)) $criteria->add(VacantePeer::VACANTE_SUELDO_TIPO_PAGO, $this->vacante_sueldo_tipo_pago);
        if ($this->isColumnModified(VacantePeer::VACANTE_CANDIDATOS)) $criteria->add(VacantePeer::VACANTE_CANDIDATOS, $this->vacante_candidatos);
        if ($this->isColumnModified(VacantePeer::VACANTE_FECHA_INICIA)) $criteria->add(VacantePeer::VACANTE_FECHA_INICIA, $this->vacante_fecha_inicia);
        if ($this->isColumnModified(VacantePeer::VACANTE_FECHA_TERMINA)) $criteria->add(VacantePeer::VACANTE_FECHA_TERMINA, $this->vacante_fecha_termina);
        if ($this->isColumnModified(VacantePeer::VACANTE_VISITAS)) $criteria->add(VacantePeer::VACANTE_VISITAS, $this->vacante_visitas);
        if ($this->isColumnModified(VacantePeer::VACANTE_ESTATUS)) $criteria->add(VacantePeer::VACANTE_ESTATUS, $this->vacante_estatus);
        if ($this->isColumnModified(VacantePeer::VACANTE_FECHA)) $criteria->add(VacantePeer::VACANTE_FECHA, $this->vacante_fecha);

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
        $criteria = new Criteria(VacantePeer::DATABASE_NAME);
        $criteria->add(VacantePeer::VACANTE_ID, $this->vacante_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getVacanteId();
    }

    /**
     * Generic method to set the primary key (vacante_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setVacanteId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getVacanteId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Vacante (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSucursalId($this->getSucursalId());
        $copyObj->setVacanteNombre($this->getVacanteNombre());
        $copyObj->setVacanteDescripcion($this->getVacanteDescripcion());
        $copyObj->setVacanteHorario($this->getVacanteHorario());
        $copyObj->setVacanteSueldo($this->getVacanteSueldo());
        $copyObj->setVacanteSueldoTipoPago($this->getVacanteSueldoTipoPago());
        $copyObj->setVacanteCandidatos($this->getVacanteCandidatos());
        $copyObj->setVacanteFechaInicia($this->getVacanteFechaInicia());
        $copyObj->setVacanteFechaTermina($this->getVacanteFechaTermina());
        $copyObj->setVacanteVisitas($this->getVacanteVisitas());
        $copyObj->setVacanteEstatus($this->getVacanteEstatus());
        $copyObj->setVacanteFecha($this->getVacanteFecha());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPostulantes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPostulante($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVacantecorreos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVacantecorreo($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setVacanteId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Vacante Clone of current object.
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
     * @return VacantePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VacantePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Vacante The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSucursal(Sucursal $v = null)
    {
        if ($v === null) {
            $this->setSucursalId(NULL);
        } else {
            $this->setSucursalId($v->getSucursalId());
        }

        $this->aSucursal = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sucursal object, it will not be re-added.
        if ($v !== null) {
            $v->addVacante($this);
        }


        return $this;
    }


    /**
     * Get the associated Sucursal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sucursal The associated Sucursal object.
     * @throws PropelException
     */
    public function getSucursal(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSucursal === null && ($this->sucursal_id !== null) && $doQuery) {
            $this->aSucursal = SucursalQuery::create()->findPk($this->sucursal_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSucursal->addVacantes($this);
             */
        }

        return $this->aSucursal;
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
        if ('Postulante' == $relationName) {
            $this->initPostulantes();
        }
        if ('Vacantecorreo' == $relationName) {
            $this->initVacantecorreos();
        }
    }

    /**
     * Clears out the collPostulantes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Vacante The current object (for fluent API support)
     * @see        addPostulantes()
     */
    public function clearPostulantes()
    {
        $this->collPostulantes = null; // important to set this to null since that means it is uninitialized
        $this->collPostulantesPartial = null;

        return $this;
    }

    /**
     * reset is the collPostulantes collection loaded partially
     *
     * @return void
     */
    public function resetPartialPostulantes($v = true)
    {
        $this->collPostulantesPartial = $v;
    }

    /**
     * Initializes the collPostulantes collection.
     *
     * By default this just sets the collPostulantes collection to an empty array (like clearcollPostulantes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPostulantes($overrideExisting = true)
    {
        if (null !== $this->collPostulantes && !$overrideExisting) {
            return;
        }
        $this->collPostulantes = new PropelObjectCollection();
        $this->collPostulantes->setModel('Postulante');
    }

    /**
     * Gets an array of Postulante objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Vacante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Postulante[] List of Postulante objects
     * @throws PropelException
     */
    public function getPostulantes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPostulantesPartial && !$this->isNew();
        if (null === $this->collPostulantes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPostulantes) {
                // return empty collection
                $this->initPostulantes();
            } else {
                $collPostulantes = PostulanteQuery::create(null, $criteria)
                    ->filterByVacante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPostulantesPartial && count($collPostulantes)) {
                      $this->initPostulantes(false);

                      foreach ($collPostulantes as $obj) {
                        if (false == $this->collPostulantes->contains($obj)) {
                          $this->collPostulantes->append($obj);
                        }
                      }

                      $this->collPostulantesPartial = true;
                    }

                    $collPostulantes->getInternalIterator()->rewind();

                    return $collPostulantes;
                }

                if ($partial && $this->collPostulantes) {
                    foreach ($this->collPostulantes as $obj) {
                        if ($obj->isNew()) {
                            $collPostulantes[] = $obj;
                        }
                    }
                }

                $this->collPostulantes = $collPostulantes;
                $this->collPostulantesPartial = false;
            }
        }

        return $this->collPostulantes;
    }

    /**
     * Sets a collection of Postulante objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $postulantes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Vacante The current object (for fluent API support)
     */
    public function setPostulantes(PropelCollection $postulantes, PropelPDO $con = null)
    {
        $postulantesToDelete = $this->getPostulantes(new Criteria(), $con)->diff($postulantes);


        $this->postulantesScheduledForDeletion = $postulantesToDelete;

        foreach ($postulantesToDelete as $postulanteRemoved) {
            $postulanteRemoved->setVacante(null);
        }

        $this->collPostulantes = null;
        foreach ($postulantes as $postulante) {
            $this->addPostulante($postulante);
        }

        $this->collPostulantes = $postulantes;
        $this->collPostulantesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Postulante objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Postulante objects.
     * @throws PropelException
     */
    public function countPostulantes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPostulantesPartial && !$this->isNew();
        if (null === $this->collPostulantes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPostulantes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPostulantes());
            }
            $query = PostulanteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVacante($this)
                ->count($con);
        }

        return count($this->collPostulantes);
    }

    /**
     * Method called to associate a Postulante object to this object
     * through the Postulante foreign key attribute.
     *
     * @param    Postulante $l Postulante
     * @return Vacante The current object (for fluent API support)
     */
    public function addPostulante(Postulante $l)
    {
        if ($this->collPostulantes === null) {
            $this->initPostulantes();
            $this->collPostulantesPartial = true;
        }

        if (!in_array($l, $this->collPostulantes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPostulante($l);

            if ($this->postulantesScheduledForDeletion and $this->postulantesScheduledForDeletion->contains($l)) {
                $this->postulantesScheduledForDeletion->remove($this->postulantesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Postulante $postulante The postulante object to add.
     */
    protected function doAddPostulante($postulante)
    {
        $this->collPostulantes[]= $postulante;
        $postulante->setVacante($this);
    }

    /**
     * @param	Postulante $postulante The postulante object to remove.
     * @return Vacante The current object (for fluent API support)
     */
    public function removePostulante($postulante)
    {
        if ($this->getPostulantes()->contains($postulante)) {
            $this->collPostulantes->remove($this->collPostulantes->search($postulante));
            if (null === $this->postulantesScheduledForDeletion) {
                $this->postulantesScheduledForDeletion = clone $this->collPostulantes;
                $this->postulantesScheduledForDeletion->clear();
            }
            $this->postulantesScheduledForDeletion[]= clone $postulante;
            $postulante->setVacante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Vacante is new, it will return
     * an empty collection; or if this Vacante has previously
     * been saved, it will retrieve related Postulantes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Vacante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Postulante[] List of Postulante objects
     */
    public function getPostulantesJoinArealaboral($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PostulanteQuery::create(null, $criteria);
        $query->joinWith('Arealaboral', $join_behavior);

        return $this->getPostulantes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Vacante is new, it will return
     * an empty collection; or if this Vacante has previously
     * been saved, it will retrieve related Postulantes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Vacante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Postulante[] List of Postulante objects
     */
    public function getPostulantesJoinEducacion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PostulanteQuery::create(null, $criteria);
        $query->joinWith('Educacion', $join_behavior);

        return $this->getPostulantes($query, $con);
    }

    /**
     * Clears out the collVacantecorreos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Vacante The current object (for fluent API support)
     * @see        addVacantecorreos()
     */
    public function clearVacantecorreos()
    {
        $this->collVacantecorreos = null; // important to set this to null since that means it is uninitialized
        $this->collVacantecorreosPartial = null;

        return $this;
    }

    /**
     * reset is the collVacantecorreos collection loaded partially
     *
     * @return void
     */
    public function resetPartialVacantecorreos($v = true)
    {
        $this->collVacantecorreosPartial = $v;
    }

    /**
     * Initializes the collVacantecorreos collection.
     *
     * By default this just sets the collVacantecorreos collection to an empty array (like clearcollVacantecorreos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVacantecorreos($overrideExisting = true)
    {
        if (null !== $this->collVacantecorreos && !$overrideExisting) {
            return;
        }
        $this->collVacantecorreos = new PropelObjectCollection();
        $this->collVacantecorreos->setModel('Vacantecorreo');
    }

    /**
     * Gets an array of Vacantecorreo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Vacante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Vacantecorreo[] List of Vacantecorreo objects
     * @throws PropelException
     */
    public function getVacantecorreos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVacantecorreosPartial && !$this->isNew();
        if (null === $this->collVacantecorreos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVacantecorreos) {
                // return empty collection
                $this->initVacantecorreos();
            } else {
                $collVacantecorreos = VacantecorreoQuery::create(null, $criteria)
                    ->filterByVacante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVacantecorreosPartial && count($collVacantecorreos)) {
                      $this->initVacantecorreos(false);

                      foreach ($collVacantecorreos as $obj) {
                        if (false == $this->collVacantecorreos->contains($obj)) {
                          $this->collVacantecorreos->append($obj);
                        }
                      }

                      $this->collVacantecorreosPartial = true;
                    }

                    $collVacantecorreos->getInternalIterator()->rewind();

                    return $collVacantecorreos;
                }

                if ($partial && $this->collVacantecorreos) {
                    foreach ($this->collVacantecorreos as $obj) {
                        if ($obj->isNew()) {
                            $collVacantecorreos[] = $obj;
                        }
                    }
                }

                $this->collVacantecorreos = $collVacantecorreos;
                $this->collVacantecorreosPartial = false;
            }
        }

        return $this->collVacantecorreos;
    }

    /**
     * Sets a collection of Vacantecorreo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $vacantecorreos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Vacante The current object (for fluent API support)
     */
    public function setVacantecorreos(PropelCollection $vacantecorreos, PropelPDO $con = null)
    {
        $vacantecorreosToDelete = $this->getVacantecorreos(new Criteria(), $con)->diff($vacantecorreos);


        $this->vacantecorreosScheduledForDeletion = $vacantecorreosToDelete;

        foreach ($vacantecorreosToDelete as $vacantecorreoRemoved) {
            $vacantecorreoRemoved->setVacante(null);
        }

        $this->collVacantecorreos = null;
        foreach ($vacantecorreos as $vacantecorreo) {
            $this->addVacantecorreo($vacantecorreo);
        }

        $this->collVacantecorreos = $vacantecorreos;
        $this->collVacantecorreosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Vacantecorreo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Vacantecorreo objects.
     * @throws PropelException
     */
    public function countVacantecorreos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVacantecorreosPartial && !$this->isNew();
        if (null === $this->collVacantecorreos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVacantecorreos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVacantecorreos());
            }
            $query = VacantecorreoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVacante($this)
                ->count($con);
        }

        return count($this->collVacantecorreos);
    }

    /**
     * Method called to associate a Vacantecorreo object to this object
     * through the Vacantecorreo foreign key attribute.
     *
     * @param    Vacantecorreo $l Vacantecorreo
     * @return Vacante The current object (for fluent API support)
     */
    public function addVacantecorreo(Vacantecorreo $l)
    {
        if ($this->collVacantecorreos === null) {
            $this->initVacantecorreos();
            $this->collVacantecorreosPartial = true;
        }

        if (!in_array($l, $this->collVacantecorreos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVacantecorreo($l);

            if ($this->vacantecorreosScheduledForDeletion and $this->vacantecorreosScheduledForDeletion->contains($l)) {
                $this->vacantecorreosScheduledForDeletion->remove($this->vacantecorreosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Vacantecorreo $vacantecorreo The vacantecorreo object to add.
     */
    protected function doAddVacantecorreo($vacantecorreo)
    {
        $this->collVacantecorreos[]= $vacantecorreo;
        $vacantecorreo->setVacante($this);
    }

    /**
     * @param	Vacantecorreo $vacantecorreo The vacantecorreo object to remove.
     * @return Vacante The current object (for fluent API support)
     */
    public function removeVacantecorreo($vacantecorreo)
    {
        if ($this->getVacantecorreos()->contains($vacantecorreo)) {
            $this->collVacantecorreos->remove($this->collVacantecorreos->search($vacantecorreo));
            if (null === $this->vacantecorreosScheduledForDeletion) {
                $this->vacantecorreosScheduledForDeletion = clone $this->collVacantecorreos;
                $this->vacantecorreosScheduledForDeletion->clear();
            }
            $this->vacantecorreosScheduledForDeletion[]= clone $vacantecorreo;
            $vacantecorreo->setVacante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Vacante is new, it will return
     * an empty collection; or if this Vacante has previously
     * been saved, it will retrieve related Vacantecorreos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Vacante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Vacantecorreo[] List of Vacantecorreo objects
     */
    public function getVacantecorreosJoinCorreo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VacantecorreoQuery::create(null, $criteria);
        $query->joinWith('Correo', $join_behavior);

        return $this->getVacantecorreos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->vacante_id = null;
        $this->sucursal_id = null;
        $this->vacante_nombre = null;
        $this->vacante_descripcion = null;
        $this->vacante_horario = null;
        $this->vacante_sueldo = null;
        $this->vacante_sueldo_tipo_pago = null;
        $this->vacante_candidatos = null;
        $this->vacante_fecha_inicia = null;
        $this->vacante_fecha_termina = null;
        $this->vacante_visitas = null;
        $this->vacante_estatus = null;
        $this->vacante_fecha = null;
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
            if ($this->collPostulantes) {
                foreach ($this->collPostulantes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVacantecorreos) {
                foreach ($this->collVacantecorreos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPostulantes instanceof PropelCollection) {
            $this->collPostulantes->clearIterator();
        }
        $this->collPostulantes = null;
        if ($this->collVacantecorreos instanceof PropelCollection) {
            $this->collVacantecorreos->clearIterator();
        }
        $this->collVacantecorreos = null;
        $this->aSucursal = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VacantePeer::DEFAULT_STRING_FORMAT);
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
