<?php


/**
 * Base class that represents a row from the 'vacantes' table.
 *
 *
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BaseVacantes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VacantesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VacantesPeer
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
     * The value for the vacante_fecha_alta field.
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        string
     */
    protected $vacante_fecha_alta;

    /**
     * The value for the vacante_usuario_alta field.
     * @var        int
     */
    protected $vacante_usuario_alta;

    /**
     * The value for the vacante_fecha_modifica field.
     * @var        string
     */
    protected $vacante_fecha_modifica;

    /**
     * The value for the vacante_usuario_modifica field.
     * @var        int
     */
    protected $vacante_usuario_modifica;

    /**
     * @var        Sucursales
     */
    protected $aSucursales;

    /**
     * @var        PropelObjectCollection|Postulantes[] Collection to store aggregation of Postulantes objects.
     */
    protected $collPostulantess;
    protected $collPostulantessPartial;

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
    protected $postulantessScheduledForDeletion = null;

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
     * Initializes internal state of BaseVacantes object.
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
     * Get the [optionally formatted] temporal [vacante_fecha_alta] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVacanteFechaAlta($format = 'Y-m-d H:i:s')
    {
        if ($this->vacante_fecha_alta === null) {
            return null;
        }

        if ($this->vacante_fecha_alta === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->vacante_fecha_alta);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->vacante_fecha_alta, true), $x);
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
     * Get the [vacante_usuario_alta] column value.
     *
     * @return int
     */
    public function getVacanteUsuarioAlta()
    {

        return $this->vacante_usuario_alta;
    }

    /**
     * Get the [optionally formatted] temporal [vacante_fecha_modifica] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVacanteFechaModifica($format = 'Y-m-d H:i:s')
    {
        if ($this->vacante_fecha_modifica === null) {
            return null;
        }

        if ($this->vacante_fecha_modifica === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->vacante_fecha_modifica);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->vacante_fecha_modifica, true), $x);
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
     * Get the [vacante_usuario_modifica] column value.
     *
     * @return int
     */
    public function getVacanteUsuarioModifica()
    {

        return $this->vacante_usuario_modifica;
    }

    /**
     * Set the value of [vacante_id] column.
     *
     * @param  int $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_id !== $v) {
            $this->vacante_id = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_ID;
        }


        return $this;
    } // setVacanteId()

    /**
     * Set the value of [sucursal_id] column.
     *
     * @param  int $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setSucursalId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sucursal_id !== $v) {
            $this->sucursal_id = $v;
            $this->modifiedColumns[] = VacantesPeer::SUCURSAL_ID;
        }

        if ($this->aSucursales !== null && $this->aSucursales->getSucursalId() !== $v) {
            $this->aSucursales = null;
        }


        return $this;
    } // setSucursalId()

    /**
     * Set the value of [vacante_nombre] column.
     *
     * @param  string $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_nombre !== $v) {
            $this->vacante_nombre = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_NOMBRE;
        }


        return $this;
    } // setVacanteNombre()

    /**
     * Set the value of [vacante_descripcion] column.
     *
     * @param  string $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_descripcion !== $v) {
            $this->vacante_descripcion = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_DESCRIPCION;
        }


        return $this;
    } // setVacanteDescripcion()

    /**
     * Set the value of [vacante_horario] column.
     *
     * @param  string $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteHorario($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_horario !== $v) {
            $this->vacante_horario = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_HORARIO;
        }


        return $this;
    } // setVacanteHorario()

    /**
     * Set the value of [vacante_sueldo] column.
     *
     * @param  string $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteSueldo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vacante_sueldo !== $v) {
            $this->vacante_sueldo = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_SUELDO;
        }


        return $this;
    } // setVacanteSueldo()

    /**
     * Set the value of [vacante_sueldo_tipo_pago] column.
     *
     * @param  string $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteSueldoTipoPago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_sueldo_tipo_pago !== $v) {
            $this->vacante_sueldo_tipo_pago = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_SUELDO_TIPO_PAGO;
        }


        return $this;
    } // setVacanteSueldoTipoPago()

    /**
     * Set the value of [vacante_candidatos] column.
     *
     * @param  int $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteCandidatos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_candidatos !== $v) {
            $this->vacante_candidatos = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_CANDIDATOS;
        }


        return $this;
    } // setVacanteCandidatos()

    /**
     * Sets the value of [vacante_fecha_inicia] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteFechaInicia($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->vacante_fecha_inicia !== null || $dt !== null) {
            $currentDateAsString = ($this->vacante_fecha_inicia !== null && $tmpDt = new DateTime($this->vacante_fecha_inicia)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->vacante_fecha_inicia = $newDateAsString;
                $this->modifiedColumns[] = VacantesPeer::VACANTE_FECHA_INICIA;
            }
        } // if either are not null


        return $this;
    } // setVacanteFechaInicia()

    /**
     * Sets the value of [vacante_fecha_termina] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteFechaTermina($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->vacante_fecha_termina !== null || $dt !== null) {
            $currentDateAsString = ($this->vacante_fecha_termina !== null && $tmpDt = new DateTime($this->vacante_fecha_termina)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->vacante_fecha_termina = $newDateAsString;
                $this->modifiedColumns[] = VacantesPeer::VACANTE_FECHA_TERMINA;
            }
        } // if either are not null


        return $this;
    } // setVacanteFechaTermina()

    /**
     * Set the value of [vacante_visitas] column.
     *
     * @param  int $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteVisitas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_visitas !== $v) {
            $this->vacante_visitas = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_VISITAS;
        }


        return $this;
    } // setVacanteVisitas()

    /**
     * Set the value of [vacante_estatus] column.
     *
     * @param  string $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vacante_estatus !== $v) {
            $this->vacante_estatus = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_ESTATUS;
        }


        return $this;
    } // setVacanteEstatus()

    /**
     * Sets the value of [vacante_fecha_alta] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteFechaAlta($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->vacante_fecha_alta !== null || $dt !== null) {
            $currentDateAsString = ($this->vacante_fecha_alta !== null && $tmpDt = new DateTime($this->vacante_fecha_alta)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->vacante_fecha_alta = $newDateAsString;
                $this->modifiedColumns[] = VacantesPeer::VACANTE_FECHA_ALTA;
            }
        } // if either are not null


        return $this;
    } // setVacanteFechaAlta()

    /**
     * Set the value of [vacante_usuario_alta] column.
     *
     * @param  int $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteUsuarioAlta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_usuario_alta !== $v) {
            $this->vacante_usuario_alta = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_USUARIO_ALTA;
        }


        return $this;
    } // setVacanteUsuarioAlta()

    /**
     * Sets the value of [vacante_fecha_modifica] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteFechaModifica($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->vacante_fecha_modifica !== null || $dt !== null) {
            $currentDateAsString = ($this->vacante_fecha_modifica !== null && $tmpDt = new DateTime($this->vacante_fecha_modifica)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->vacante_fecha_modifica = $newDateAsString;
                $this->modifiedColumns[] = VacantesPeer::VACANTE_FECHA_MODIFICA;
            }
        } // if either are not null


        return $this;
    } // setVacanteFechaModifica()

    /**
     * Set the value of [vacante_usuario_modifica] column.
     *
     * @param  int $v new value
     * @return Vacantes The current object (for fluent API support)
     */
    public function setVacanteUsuarioModifica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_usuario_modifica !== $v) {
            $this->vacante_usuario_modifica = $v;
            $this->modifiedColumns[] = VacantesPeer::VACANTE_USUARIO_MODIFICA;
        }


        return $this;
    } // setVacanteUsuarioModifica()

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
            $this->vacante_fecha_alta = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->vacante_usuario_alta = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->vacante_fecha_modifica = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->vacante_usuario_modifica = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = VacantesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Vacantes object", $e);
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

        if ($this->aSucursales !== null && $this->sucursal_id !== $this->aSucursales->getSucursalId()) {
            $this->aSucursales = null;
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
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VacantesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSucursales = null;
            $this->collPostulantess = null;

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
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VacantesQuery::create()
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
            $con = Propel::getConnection(VacantesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VacantesPeer::addInstanceToPool($this);
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

            if ($this->aSucursales !== null) {
                if ($this->aSucursales->isModified() || $this->aSucursales->isNew()) {
                    $affectedRows += $this->aSucursales->save($con);
                }
                $this->setSucursales($this->aSucursales);
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

            if ($this->postulantessScheduledForDeletion !== null) {
                if (!$this->postulantessScheduledForDeletion->isEmpty()) {
                    PostulantesQuery::create()
                        ->filterByPrimaryKeys($this->postulantessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->postulantessScheduledForDeletion = null;
                }
            }

            if ($this->collPostulantess !== null) {
                foreach ($this->collPostulantess as $referrerFK) {
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

        $this->modifiedColumns[] = VacantesPeer::VACANTE_ID;
        if (null !== $this->vacante_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VacantesPeer::VACANTE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VacantesPeer::VACANTE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_id`';
        }
        if ($this->isColumnModified(VacantesPeer::SUCURSAL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_id`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_nombre`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_descripcion`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_HORARIO)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_horario`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_SUELDO)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_sueldo`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_SUELDO_TIPO_PAGO)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_sueldo_tipo_pago`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_CANDIDATOS)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_candidatos`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_FECHA_INICIA)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_fecha_inicia`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_FECHA_TERMINA)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_fecha_termina`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_VISITAS)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_visitas`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_estatus`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_FECHA_ALTA)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_fecha_alta`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_USUARIO_ALTA)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_usuario_alta`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_FECHA_MODIFICA)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_fecha_modifica`';
        }
        if ($this->isColumnModified(VacantesPeer::VACANTE_USUARIO_MODIFICA)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_usuario_modifica`';
        }

        $sql = sprintf(
            'INSERT INTO `vacantes` (%s) VALUES (%s)',
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
                    case '`vacante_fecha_alta`':
                        $stmt->bindValue($identifier, $this->vacante_fecha_alta, PDO::PARAM_STR);
                        break;
                    case '`vacante_usuario_alta`':
                        $stmt->bindValue($identifier, $this->vacante_usuario_alta, PDO::PARAM_INT);
                        break;
                    case '`vacante_fecha_modifica`':
                        $stmt->bindValue($identifier, $this->vacante_fecha_modifica, PDO::PARAM_STR);
                        break;
                    case '`vacante_usuario_modifica`':
                        $stmt->bindValue($identifier, $this->vacante_usuario_modifica, PDO::PARAM_INT);
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

            if ($this->aSucursales !== null) {
                if (!$this->aSucursales->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursales->getValidationFailures());
                }
            }


            if (($retval = VacantesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPostulantess !== null) {
                    foreach ($this->collPostulantess as $referrerFK) {
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
        $pos = VacantesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getVacanteFechaAlta();
                break;
            case 13:
                return $this->getVacanteUsuarioAlta();
                break;
            case 14:
                return $this->getVacanteFechaModifica();
                break;
            case 15:
                return $this->getVacanteUsuarioModifica();
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
        if (isset($alreadyDumpedObjects['Vacantes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Vacantes'][$this->getPrimaryKey()] = true;
        $keys = VacantesPeer::getFieldNames($keyType);
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
            $keys[12] => $this->getVacanteFechaAlta(),
            $keys[13] => $this->getVacanteUsuarioAlta(),
            $keys[14] => $this->getVacanteFechaModifica(),
            $keys[15] => $this->getVacanteUsuarioModifica(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSucursales) {
                $result['Sucursales'] = $this->aSucursales->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPostulantess) {
                $result['Postulantess'] = $this->collPostulantess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = VacantesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setVacanteFechaAlta($value);
                break;
            case 13:
                $this->setVacanteUsuarioAlta($value);
                break;
            case 14:
                $this->setVacanteFechaModifica($value);
                break;
            case 15:
                $this->setVacanteUsuarioModifica($value);
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
        $keys = VacantesPeer::getFieldNames($keyType);

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
        if (array_key_exists($keys[12], $arr)) $this->setVacanteFechaAlta($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setVacanteUsuarioAlta($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setVacanteFechaModifica($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setVacanteUsuarioModifica($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VacantesPeer::DATABASE_NAME);

        if ($this->isColumnModified(VacantesPeer::VACANTE_ID)) $criteria->add(VacantesPeer::VACANTE_ID, $this->vacante_id);
        if ($this->isColumnModified(VacantesPeer::SUCURSAL_ID)) $criteria->add(VacantesPeer::SUCURSAL_ID, $this->sucursal_id);
        if ($this->isColumnModified(VacantesPeer::VACANTE_NOMBRE)) $criteria->add(VacantesPeer::VACANTE_NOMBRE, $this->vacante_nombre);
        if ($this->isColumnModified(VacantesPeer::VACANTE_DESCRIPCION)) $criteria->add(VacantesPeer::VACANTE_DESCRIPCION, $this->vacante_descripcion);
        if ($this->isColumnModified(VacantesPeer::VACANTE_HORARIO)) $criteria->add(VacantesPeer::VACANTE_HORARIO, $this->vacante_horario);
        if ($this->isColumnModified(VacantesPeer::VACANTE_SUELDO)) $criteria->add(VacantesPeer::VACANTE_SUELDO, $this->vacante_sueldo);
        if ($this->isColumnModified(VacantesPeer::VACANTE_SUELDO_TIPO_PAGO)) $criteria->add(VacantesPeer::VACANTE_SUELDO_TIPO_PAGO, $this->vacante_sueldo_tipo_pago);
        if ($this->isColumnModified(VacantesPeer::VACANTE_CANDIDATOS)) $criteria->add(VacantesPeer::VACANTE_CANDIDATOS, $this->vacante_candidatos);
        if ($this->isColumnModified(VacantesPeer::VACANTE_FECHA_INICIA)) $criteria->add(VacantesPeer::VACANTE_FECHA_INICIA, $this->vacante_fecha_inicia);
        if ($this->isColumnModified(VacantesPeer::VACANTE_FECHA_TERMINA)) $criteria->add(VacantesPeer::VACANTE_FECHA_TERMINA, $this->vacante_fecha_termina);
        if ($this->isColumnModified(VacantesPeer::VACANTE_VISITAS)) $criteria->add(VacantesPeer::VACANTE_VISITAS, $this->vacante_visitas);
        if ($this->isColumnModified(VacantesPeer::VACANTE_ESTATUS)) $criteria->add(VacantesPeer::VACANTE_ESTATUS, $this->vacante_estatus);
        if ($this->isColumnModified(VacantesPeer::VACANTE_FECHA_ALTA)) $criteria->add(VacantesPeer::VACANTE_FECHA_ALTA, $this->vacante_fecha_alta);
        if ($this->isColumnModified(VacantesPeer::VACANTE_USUARIO_ALTA)) $criteria->add(VacantesPeer::VACANTE_USUARIO_ALTA, $this->vacante_usuario_alta);
        if ($this->isColumnModified(VacantesPeer::VACANTE_FECHA_MODIFICA)) $criteria->add(VacantesPeer::VACANTE_FECHA_MODIFICA, $this->vacante_fecha_modifica);
        if ($this->isColumnModified(VacantesPeer::VACANTE_USUARIO_MODIFICA)) $criteria->add(VacantesPeer::VACANTE_USUARIO_MODIFICA, $this->vacante_usuario_modifica);

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
        $criteria = new Criteria(VacantesPeer::DATABASE_NAME);
        $criteria->add(VacantesPeer::VACANTE_ID, $this->vacante_id);

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
     * @param object $copyObj An object of Vacantes (or compatible) type.
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
        $copyObj->setVacanteFechaAlta($this->getVacanteFechaAlta());
        $copyObj->setVacanteUsuarioAlta($this->getVacanteUsuarioAlta());
        $copyObj->setVacanteFechaModifica($this->getVacanteFechaModifica());
        $copyObj->setVacanteUsuarioModifica($this->getVacanteUsuarioModifica());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPostulantess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPostulantes($relObj->copy($deepCopy));
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
     * @return Vacantes Clone of current object.
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
     * @return VacantesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VacantesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Sucursales object.
     *
     * @param                  Sucursales $v
     * @return Vacantes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSucursales(Sucursales $v = null)
    {
        if ($v === null) {
            $this->setSucursalId(NULL);
        } else {
            $this->setSucursalId($v->getSucursalId());
        }

        $this->aSucursales = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sucursales object, it will not be re-added.
        if ($v !== null) {
            $v->addVacantes($this);
        }


        return $this;
    }


    /**
     * Get the associated Sucursales object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sucursales The associated Sucursales object.
     * @throws PropelException
     */
    public function getSucursales(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSucursales === null && ($this->sucursal_id !== null) && $doQuery) {
            $this->aSucursales = SucursalesQuery::create()->findPk($this->sucursal_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSucursales->addVacantess($this);
             */
        }

        return $this->aSucursales;
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
        if ('Postulantes' == $relationName) {
            $this->initPostulantess();
        }
    }

    /**
     * Clears out the collPostulantess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Vacantes The current object (for fluent API support)
     * @see        addPostulantess()
     */
    public function clearPostulantess()
    {
        $this->collPostulantess = null; // important to set this to null since that means it is uninitialized
        $this->collPostulantessPartial = null;

        return $this;
    }

    /**
     * reset is the collPostulantess collection loaded partially
     *
     * @return void
     */
    public function resetPartialPostulantess($v = true)
    {
        $this->collPostulantessPartial = $v;
    }

    /**
     * Initializes the collPostulantess collection.
     *
     * By default this just sets the collPostulantess collection to an empty array (like clearcollPostulantess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPostulantess($overrideExisting = true)
    {
        if (null !== $this->collPostulantess && !$overrideExisting) {
            return;
        }
        $this->collPostulantess = new PropelObjectCollection();
        $this->collPostulantess->setModel('Postulantes');
    }

    /**
     * Gets an array of Postulantes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Vacantes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Postulantes[] List of Postulantes objects
     * @throws PropelException
     */
    public function getPostulantess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPostulantessPartial && !$this->isNew();
        if (null === $this->collPostulantess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPostulantess) {
                // return empty collection
                $this->initPostulantess();
            } else {
                $collPostulantess = PostulantesQuery::create(null, $criteria)
                    ->filterByVacantes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPostulantessPartial && count($collPostulantess)) {
                      $this->initPostulantess(false);

                      foreach ($collPostulantess as $obj) {
                        if (false == $this->collPostulantess->contains($obj)) {
                          $this->collPostulantess->append($obj);
                        }
                      }

                      $this->collPostulantessPartial = true;
                    }

                    $collPostulantess->getInternalIterator()->rewind();

                    return $collPostulantess;
                }

                if ($partial && $this->collPostulantess) {
                    foreach ($this->collPostulantess as $obj) {
                        if ($obj->isNew()) {
                            $collPostulantess[] = $obj;
                        }
                    }
                }

                $this->collPostulantess = $collPostulantess;
                $this->collPostulantessPartial = false;
            }
        }

        return $this->collPostulantess;
    }

    /**
     * Sets a collection of Postulantes objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $postulantess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Vacantes The current object (for fluent API support)
     */
    public function setPostulantess(PropelCollection $postulantess, PropelPDO $con = null)
    {
        $postulantessToDelete = $this->getPostulantess(new Criteria(), $con)->diff($postulantess);


        $this->postulantessScheduledForDeletion = $postulantessToDelete;

        foreach ($postulantessToDelete as $postulantesRemoved) {
            $postulantesRemoved->setVacantes(null);
        }

        $this->collPostulantess = null;
        foreach ($postulantess as $postulantes) {
            $this->addPostulantes($postulantes);
        }

        $this->collPostulantess = $postulantess;
        $this->collPostulantessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Postulantes objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Postulantes objects.
     * @throws PropelException
     */
    public function countPostulantess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPostulantessPartial && !$this->isNew();
        if (null === $this->collPostulantess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPostulantess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPostulantess());
            }
            $query = PostulantesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVacantes($this)
                ->count($con);
        }

        return count($this->collPostulantess);
    }

    /**
     * Method called to associate a Postulantes object to this object
     * through the Postulantes foreign key attribute.
     *
     * @param    Postulantes $l Postulantes
     * @return Vacantes The current object (for fluent API support)
     */
    public function addPostulantes(Postulantes $l)
    {
        if ($this->collPostulantess === null) {
            $this->initPostulantess();
            $this->collPostulantessPartial = true;
        }

        if (!in_array($l, $this->collPostulantess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPostulantes($l);

            if ($this->postulantessScheduledForDeletion and $this->postulantessScheduledForDeletion->contains($l)) {
                $this->postulantessScheduledForDeletion->remove($this->postulantessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Postulantes $postulantes The postulantes object to add.
     */
    protected function doAddPostulantes($postulantes)
    {
        $this->collPostulantess[]= $postulantes;
        $postulantes->setVacantes($this);
    }

    /**
     * @param	Postulantes $postulantes The postulantes object to remove.
     * @return Vacantes The current object (for fluent API support)
     */
    public function removePostulantes($postulantes)
    {
        if ($this->getPostulantess()->contains($postulantes)) {
            $this->collPostulantess->remove($this->collPostulantess->search($postulantes));
            if (null === $this->postulantessScheduledForDeletion) {
                $this->postulantessScheduledForDeletion = clone $this->collPostulantess;
                $this->postulantessScheduledForDeletion->clear();
            }
            $this->postulantessScheduledForDeletion[]= clone $postulantes;
            $postulantes->setVacantes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Vacantes is new, it will return
     * an empty collection; or if this Vacantes has previously
     * been saved, it will retrieve related Postulantess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Vacantes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Postulantes[] List of Postulantes objects
     */
    public function getPostulantessJoinAreaslaborales($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PostulantesQuery::create(null, $criteria);
        $query->joinWith('Areaslaborales', $join_behavior);

        return $this->getPostulantess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Vacantes is new, it will return
     * an empty collection; or if this Vacantes has previously
     * been saved, it will retrieve related Postulantess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Vacantes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Postulantes[] List of Postulantes objects
     */
    public function getPostulantessJoinEducacion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PostulantesQuery::create(null, $criteria);
        $query->joinWith('Educacion', $join_behavior);

        return $this->getPostulantess($query, $con);
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
        $this->vacante_fecha_alta = null;
        $this->vacante_usuario_alta = null;
        $this->vacante_fecha_modifica = null;
        $this->vacante_usuario_modifica = null;
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
            if ($this->collPostulantess) {
                foreach ($this->collPostulantess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aSucursales instanceof Persistent) {
              $this->aSucursales->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPostulantess instanceof PropelCollection) {
            $this->collPostulantess->clearIterator();
        }
        $this->collPostulantess = null;
        $this->aSucursales = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VacantesPeer::DEFAULT_STRING_FORMAT);
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
