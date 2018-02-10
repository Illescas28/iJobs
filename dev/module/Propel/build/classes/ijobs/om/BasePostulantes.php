<?php


/**
 * Base class that represents a row from the 'postulantes' table.
 *
 *
 *
 * @package    propel.generator.ijobs.om
 */
abstract class BasePostulantes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PostulantesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PostulantesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the postulante_id field.
     * @var        int
     */
    protected $postulante_id;

    /**
     * The value for the vacante_id field.
     * @var        int
     */
    protected $vacante_id;

    /**
     * The value for the arealaboral_id field.
     * @var        int
     */
    protected $arealaboral_id;

    /**
     * The value for the educacion_id field.
     * @var        int
     */
    protected $educacion_id;

    /**
     * The value for the postulante_correo field.
     * @var        string
     */
    protected $postulante_correo;

    /**
     * The value for the postulante_nombre_completo field.
     * @var        string
     */
    protected $postulante_nombre_completo;

    /**
     * The value for the postulante_telefono field.
     * @var        string
     */
    protected $postulante_telefono;

    /**
     * The value for the postulante_enlace field.
     * @var        string
     */
    protected $postulante_enlace;

    /**
     * The value for the postulante_mensaje field.
     * @var        string
     */
    protected $postulante_mensaje;

    /**
     * The value for the postulante_cv_url field.
     * @var        string
     */
    protected $postulante_cv_url;

    /**
     * The value for the postulante_educacion_estatus field.
     * @var        string
     */
    protected $postulante_educacion_estatus;

    /**
     * The value for the postulante_educacion_certificado field.
     * @var        boolean
     */
    protected $postulante_educacion_certificado;

    /**
     * The value for the postulante_estatus field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $postulante_estatus;

    /**
     * The value for the postulante_fecha_alta field.
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        string
     */
    protected $postulante_fecha_alta;

    /**
     * The value for the postulante_usuario_alta field.
     * @var        int
     */
    protected $postulante_usuario_alta;

    /**
     * The value for the postulante_fecha_modifica field.
     * @var        string
     */
    protected $postulante_fecha_modifica;

    /**
     * The value for the postulante_usuario_modifica field.
     * @var        int
     */
    protected $postulante_usuario_modifica;

    /**
     * @var        Areaslaborales
     */
    protected $aAreaslaborales;

    /**
     * @var        Educacion
     */
    protected $aEducacion;

    /**
     * @var        Vacantes
     */
    protected $aVacantes;

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
    protected $usuariossScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->postulante_estatus = true;
    }

    /**
     * Initializes internal state of BasePostulantes object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [vacante_id] column value.
     *
     * @return int
     */
    public function getVacanteId()
    {

        return $this->vacante_id;
    }

    /**
     * Get the [arealaboral_id] column value.
     *
     * @return int
     */
    public function getArealaboralId()
    {

        return $this->arealaboral_id;
    }

    /**
     * Get the [educacion_id] column value.
     *
     * @return int
     */
    public function getEducacionId()
    {

        return $this->educacion_id;
    }

    /**
     * Get the [postulante_correo] column value.
     *
     * @return string
     */
    public function getPostulanteCorreo()
    {

        return $this->postulante_correo;
    }

    /**
     * Get the [postulante_nombre_completo] column value.
     *
     * @return string
     */
    public function getPostulanteNombreCompleto()
    {

        return $this->postulante_nombre_completo;
    }

    /**
     * Get the [postulante_telefono] column value.
     *
     * @return string
     */
    public function getPostulanteTelefono()
    {

        return $this->postulante_telefono;
    }

    /**
     * Get the [postulante_enlace] column value.
     *
     * @return string
     */
    public function getPostulanteEnlace()
    {

        return $this->postulante_enlace;
    }

    /**
     * Get the [postulante_mensaje] column value.
     *
     * @return string
     */
    public function getPostulanteMensaje()
    {

        return $this->postulante_mensaje;
    }

    /**
     * Get the [postulante_cv_url] column value.
     *
     * @return string
     */
    public function getPostulanteCvUrl()
    {

        return $this->postulante_cv_url;
    }

    /**
     * Get the [postulante_educacion_estatus] column value.
     *
     * @return string
     */
    public function getPostulanteEducacionEstatus()
    {

        return $this->postulante_educacion_estatus;
    }

    /**
     * Get the [postulante_educacion_certificado] column value.
     *
     * @return boolean
     */
    public function getPostulanteEducacionCertificado()
    {

        return $this->postulante_educacion_certificado;
    }

    /**
     * Get the [postulante_estatus] column value.
     *
     * @return boolean
     */
    public function getPostulanteEstatus()
    {

        return $this->postulante_estatus;
    }

    /**
     * Get the [optionally formatted] temporal [postulante_fecha_alta] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPostulanteFechaAlta($format = 'Y-m-d H:i:s')
    {
        if ($this->postulante_fecha_alta === null) {
            return null;
        }

        if ($this->postulante_fecha_alta === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->postulante_fecha_alta);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->postulante_fecha_alta, true), $x);
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
     * Get the [postulante_usuario_alta] column value.
     *
     * @return int
     */
    public function getPostulanteUsuarioAlta()
    {

        return $this->postulante_usuario_alta;
    }

    /**
     * Get the [optionally formatted] temporal [postulante_fecha_modifica] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPostulanteFechaModifica($format = 'Y-m-d H:i:s')
    {
        if ($this->postulante_fecha_modifica === null) {
            return null;
        }

        if ($this->postulante_fecha_modifica === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->postulante_fecha_modifica);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->postulante_fecha_modifica, true), $x);
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
     * Get the [postulante_usuario_modifica] column value.
     *
     * @return int
     */
    public function getPostulanteUsuarioModifica()
    {

        return $this->postulante_usuario_modifica;
    }

    /**
     * Set the value of [postulante_id] column.
     *
     * @param  int $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->postulante_id !== $v) {
            $this->postulante_id = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_ID;
        }


        return $this;
    } // setPostulanteId()

    /**
     * Set the value of [vacante_id] column.
     *
     * @param  int $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setVacanteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_id !== $v) {
            $this->vacante_id = $v;
            $this->modifiedColumns[] = PostulantesPeer::VACANTE_ID;
        }

        if ($this->aVacantes !== null && $this->aVacantes->getVacanteId() !== $v) {
            $this->aVacantes = null;
        }


        return $this;
    } // setVacanteId()

    /**
     * Set the value of [arealaboral_id] column.
     *
     * @param  int $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setArealaboralId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->arealaboral_id !== $v) {
            $this->arealaboral_id = $v;
            $this->modifiedColumns[] = PostulantesPeer::AREALABORAL_ID;
        }

        if ($this->aAreaslaborales !== null && $this->aAreaslaborales->getArealaboralId() !== $v) {
            $this->aAreaslaborales = null;
        }


        return $this;
    } // setArealaboralId()

    /**
     * Set the value of [educacion_id] column.
     *
     * @param  int $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setEducacionId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->educacion_id !== $v) {
            $this->educacion_id = $v;
            $this->modifiedColumns[] = PostulantesPeer::EDUCACION_ID;
        }

        if ($this->aEducacion !== null && $this->aEducacion->getEducacionId() !== $v) {
            $this->aEducacion = null;
        }


        return $this;
    } // setEducacionId()

    /**
     * Set the value of [postulante_correo] column.
     *
     * @param  string $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteCorreo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postulante_correo !== $v) {
            $this->postulante_correo = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_CORREO;
        }


        return $this;
    } // setPostulanteCorreo()

    /**
     * Set the value of [postulante_nombre_completo] column.
     *
     * @param  string $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteNombreCompleto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postulante_nombre_completo !== $v) {
            $this->postulante_nombre_completo = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_NOMBRE_COMPLETO;
        }


        return $this;
    } // setPostulanteNombreCompleto()

    /**
     * Set the value of [postulante_telefono] column.
     *
     * @param  string $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postulante_telefono !== $v) {
            $this->postulante_telefono = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_TELEFONO;
        }


        return $this;
    } // setPostulanteTelefono()

    /**
     * Set the value of [postulante_enlace] column.
     *
     * @param  string $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteEnlace($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postulante_enlace !== $v) {
            $this->postulante_enlace = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_ENLACE;
        }


        return $this;
    } // setPostulanteEnlace()

    /**
     * Set the value of [postulante_mensaje] column.
     *
     * @param  string $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteMensaje($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postulante_mensaje !== $v) {
            $this->postulante_mensaje = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_MENSAJE;
        }


        return $this;
    } // setPostulanteMensaje()

    /**
     * Set the value of [postulante_cv_url] column.
     *
     * @param  string $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteCvUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postulante_cv_url !== $v) {
            $this->postulante_cv_url = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_CV_URL;
        }


        return $this;
    } // setPostulanteCvUrl()

    /**
     * Set the value of [postulante_educacion_estatus] column.
     *
     * @param  string $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteEducacionEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postulante_educacion_estatus !== $v) {
            $this->postulante_educacion_estatus = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_EDUCACION_ESTATUS;
        }


        return $this;
    } // setPostulanteEducacionEstatus()

    /**
     * Sets the value of the [postulante_educacion_certificado] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteEducacionCertificado($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->postulante_educacion_certificado !== $v) {
            $this->postulante_educacion_certificado = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_EDUCACION_CERTIFICADO;
        }


        return $this;
    } // setPostulanteEducacionCertificado()

    /**
     * Sets the value of the [postulante_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->postulante_estatus !== $v) {
            $this->postulante_estatus = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_ESTATUS;
        }


        return $this;
    } // setPostulanteEstatus()

    /**
     * Sets the value of [postulante_fecha_alta] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteFechaAlta($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->postulante_fecha_alta !== null || $dt !== null) {
            $currentDateAsString = ($this->postulante_fecha_alta !== null && $tmpDt = new DateTime($this->postulante_fecha_alta)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->postulante_fecha_alta = $newDateAsString;
                $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_FECHA_ALTA;
            }
        } // if either are not null


        return $this;
    } // setPostulanteFechaAlta()

    /**
     * Set the value of [postulante_usuario_alta] column.
     *
     * @param  int $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteUsuarioAlta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->postulante_usuario_alta !== $v) {
            $this->postulante_usuario_alta = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_USUARIO_ALTA;
        }


        return $this;
    } // setPostulanteUsuarioAlta()

    /**
     * Sets the value of [postulante_fecha_modifica] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteFechaModifica($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->postulante_fecha_modifica !== null || $dt !== null) {
            $currentDateAsString = ($this->postulante_fecha_modifica !== null && $tmpDt = new DateTime($this->postulante_fecha_modifica)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->postulante_fecha_modifica = $newDateAsString;
                $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_FECHA_MODIFICA;
            }
        } // if either are not null


        return $this;
    } // setPostulanteFechaModifica()

    /**
     * Set the value of [postulante_usuario_modifica] column.
     *
     * @param  int $v new value
     * @return Postulantes The current object (for fluent API support)
     */
    public function setPostulanteUsuarioModifica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->postulante_usuario_modifica !== $v) {
            $this->postulante_usuario_modifica = $v;
            $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_USUARIO_MODIFICA;
        }


        return $this;
    } // setPostulanteUsuarioModifica()

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
            if ($this->postulante_estatus !== true) {
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

            $this->postulante_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->vacante_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->arealaboral_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->educacion_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->postulante_correo = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->postulante_nombre_completo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->postulante_telefono = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->postulante_enlace = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->postulante_mensaje = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->postulante_cv_url = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->postulante_educacion_estatus = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->postulante_educacion_certificado = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->postulante_estatus = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->postulante_fecha_alta = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->postulante_usuario_alta = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->postulante_fecha_modifica = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->postulante_usuario_modifica = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = PostulantesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Postulantes object", $e);
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

        if ($this->aVacantes !== null && $this->vacante_id !== $this->aVacantes->getVacanteId()) {
            $this->aVacantes = null;
        }
        if ($this->aAreaslaborales !== null && $this->arealaboral_id !== $this->aAreaslaborales->getArealaboralId()) {
            $this->aAreaslaborales = null;
        }
        if ($this->aEducacion !== null && $this->educacion_id !== $this->aEducacion->getEducacionId()) {
            $this->aEducacion = null;
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
            $con = Propel::getConnection(PostulantesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PostulantesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAreaslaborales = null;
            $this->aEducacion = null;
            $this->aVacantes = null;
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
            $con = Propel::getConnection(PostulantesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PostulantesQuery::create()
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
            $con = Propel::getConnection(PostulantesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PostulantesPeer::addInstanceToPool($this);
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

            if ($this->aAreaslaborales !== null) {
                if ($this->aAreaslaborales->isModified() || $this->aAreaslaborales->isNew()) {
                    $affectedRows += $this->aAreaslaborales->save($con);
                }
                $this->setAreaslaborales($this->aAreaslaborales);
            }

            if ($this->aEducacion !== null) {
                if ($this->aEducacion->isModified() || $this->aEducacion->isNew()) {
                    $affectedRows += $this->aEducacion->save($con);
                }
                $this->setEducacion($this->aEducacion);
            }

            if ($this->aVacantes !== null) {
                if ($this->aVacantes->isModified() || $this->aVacantes->isNew()) {
                    $affectedRows += $this->aVacantes->save($con);
                }
                $this->setVacantes($this->aVacantes);
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

        $this->modifiedColumns[] = PostulantesPeer::POSTULANTE_ID;
        if (null !== $this->postulante_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PostulantesPeer::POSTULANTE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_id`';
        }
        if ($this->isColumnModified(PostulantesPeer::VACANTE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_id`';
        }
        if ($this->isColumnModified(PostulantesPeer::AREALABORAL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`arealaboral_id`';
        }
        if ($this->isColumnModified(PostulantesPeer::EDUCACION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`educacion_id`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_CORREO)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_correo`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_NOMBRE_COMPLETO)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_nombre_completo`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_telefono`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_ENLACE)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_enlace`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_MENSAJE)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_mensaje`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_CV_URL)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_cv_url`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_EDUCACION_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_educacion_estatus`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_EDUCACION_CERTIFICADO)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_educacion_certificado`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_estatus`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_FECHA_ALTA)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_fecha_alta`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_USUARIO_ALTA)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_usuario_alta`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_FECHA_MODIFICA)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_fecha_modifica`';
        }
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_USUARIO_MODIFICA)) {
            $modifiedColumns[':p' . $index++]  = '`postulante_usuario_modifica`';
        }

        $sql = sprintf(
            'INSERT INTO `postulantes` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`postulante_id`':
                        $stmt->bindValue($identifier, $this->postulante_id, PDO::PARAM_INT);
                        break;
                    case '`vacante_id`':
                        $stmt->bindValue($identifier, $this->vacante_id, PDO::PARAM_INT);
                        break;
                    case '`arealaboral_id`':
                        $stmt->bindValue($identifier, $this->arealaboral_id, PDO::PARAM_INT);
                        break;
                    case '`educacion_id`':
                        $stmt->bindValue($identifier, $this->educacion_id, PDO::PARAM_INT);
                        break;
                    case '`postulante_correo`':
                        $stmt->bindValue($identifier, $this->postulante_correo, PDO::PARAM_STR);
                        break;
                    case '`postulante_nombre_completo`':
                        $stmt->bindValue($identifier, $this->postulante_nombre_completo, PDO::PARAM_STR);
                        break;
                    case '`postulante_telefono`':
                        $stmt->bindValue($identifier, $this->postulante_telefono, PDO::PARAM_STR);
                        break;
                    case '`postulante_enlace`':
                        $stmt->bindValue($identifier, $this->postulante_enlace, PDO::PARAM_STR);
                        break;
                    case '`postulante_mensaje`':
                        $stmt->bindValue($identifier, $this->postulante_mensaje, PDO::PARAM_STR);
                        break;
                    case '`postulante_cv_url`':
                        $stmt->bindValue($identifier, $this->postulante_cv_url, PDO::PARAM_STR);
                        break;
                    case '`postulante_educacion_estatus`':
                        $stmt->bindValue($identifier, $this->postulante_educacion_estatus, PDO::PARAM_STR);
                        break;
                    case '`postulante_educacion_certificado`':
                        $stmt->bindValue($identifier, (int) $this->postulante_educacion_certificado, PDO::PARAM_INT);
                        break;
                    case '`postulante_estatus`':
                        $stmt->bindValue($identifier, (int) $this->postulante_estatus, PDO::PARAM_INT);
                        break;
                    case '`postulante_fecha_alta`':
                        $stmt->bindValue($identifier, $this->postulante_fecha_alta, PDO::PARAM_STR);
                        break;
                    case '`postulante_usuario_alta`':
                        $stmt->bindValue($identifier, $this->postulante_usuario_alta, PDO::PARAM_INT);
                        break;
                    case '`postulante_fecha_modifica`':
                        $stmt->bindValue($identifier, $this->postulante_fecha_modifica, PDO::PARAM_STR);
                        break;
                    case '`postulante_usuario_modifica`':
                        $stmt->bindValue($identifier, $this->postulante_usuario_modifica, PDO::PARAM_INT);
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
        $this->setPostulanteId($pk);

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

            if ($this->aAreaslaborales !== null) {
                if (!$this->aAreaslaborales->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAreaslaborales->getValidationFailures());
                }
            }

            if ($this->aEducacion !== null) {
                if (!$this->aEducacion->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEducacion->getValidationFailures());
                }
            }

            if ($this->aVacantes !== null) {
                if (!$this->aVacantes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVacantes->getValidationFailures());
                }
            }


            if (($retval = PostulantesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = PostulantesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPostulanteId();
                break;
            case 1:
                return $this->getVacanteId();
                break;
            case 2:
                return $this->getArealaboralId();
                break;
            case 3:
                return $this->getEducacionId();
                break;
            case 4:
                return $this->getPostulanteCorreo();
                break;
            case 5:
                return $this->getPostulanteNombreCompleto();
                break;
            case 6:
                return $this->getPostulanteTelefono();
                break;
            case 7:
                return $this->getPostulanteEnlace();
                break;
            case 8:
                return $this->getPostulanteMensaje();
                break;
            case 9:
                return $this->getPostulanteCvUrl();
                break;
            case 10:
                return $this->getPostulanteEducacionEstatus();
                break;
            case 11:
                return $this->getPostulanteEducacionCertificado();
                break;
            case 12:
                return $this->getPostulanteEstatus();
                break;
            case 13:
                return $this->getPostulanteFechaAlta();
                break;
            case 14:
                return $this->getPostulanteUsuarioAlta();
                break;
            case 15:
                return $this->getPostulanteFechaModifica();
                break;
            case 16:
                return $this->getPostulanteUsuarioModifica();
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
        if (isset($alreadyDumpedObjects['Postulantes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Postulantes'][$this->getPrimaryKey()] = true;
        $keys = PostulantesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPostulanteId(),
            $keys[1] => $this->getVacanteId(),
            $keys[2] => $this->getArealaboralId(),
            $keys[3] => $this->getEducacionId(),
            $keys[4] => $this->getPostulanteCorreo(),
            $keys[5] => $this->getPostulanteNombreCompleto(),
            $keys[6] => $this->getPostulanteTelefono(),
            $keys[7] => $this->getPostulanteEnlace(),
            $keys[8] => $this->getPostulanteMensaje(),
            $keys[9] => $this->getPostulanteCvUrl(),
            $keys[10] => $this->getPostulanteEducacionEstatus(),
            $keys[11] => $this->getPostulanteEducacionCertificado(),
            $keys[12] => $this->getPostulanteEstatus(),
            $keys[13] => $this->getPostulanteFechaAlta(),
            $keys[14] => $this->getPostulanteUsuarioAlta(),
            $keys[15] => $this->getPostulanteFechaModifica(),
            $keys[16] => $this->getPostulanteUsuarioModifica(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAreaslaborales) {
                $result['Areaslaborales'] = $this->aAreaslaborales->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEducacion) {
                $result['Educacion'] = $this->aEducacion->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aVacantes) {
                $result['Vacantes'] = $this->aVacantes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = PostulantesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPostulanteId($value);
                break;
            case 1:
                $this->setVacanteId($value);
                break;
            case 2:
                $this->setArealaboralId($value);
                break;
            case 3:
                $this->setEducacionId($value);
                break;
            case 4:
                $this->setPostulanteCorreo($value);
                break;
            case 5:
                $this->setPostulanteNombreCompleto($value);
                break;
            case 6:
                $this->setPostulanteTelefono($value);
                break;
            case 7:
                $this->setPostulanteEnlace($value);
                break;
            case 8:
                $this->setPostulanteMensaje($value);
                break;
            case 9:
                $this->setPostulanteCvUrl($value);
                break;
            case 10:
                $this->setPostulanteEducacionEstatus($value);
                break;
            case 11:
                $this->setPostulanteEducacionCertificado($value);
                break;
            case 12:
                $this->setPostulanteEstatus($value);
                break;
            case 13:
                $this->setPostulanteFechaAlta($value);
                break;
            case 14:
                $this->setPostulanteUsuarioAlta($value);
                break;
            case 15:
                $this->setPostulanteFechaModifica($value);
                break;
            case 16:
                $this->setPostulanteUsuarioModifica($value);
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
        $keys = PostulantesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setPostulanteId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setVacanteId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setArealaboralId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEducacionId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPostulanteCorreo($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPostulanteNombreCompleto($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPostulanteTelefono($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPostulanteEnlace($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPostulanteMensaje($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPostulanteCvUrl($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPostulanteEducacionEstatus($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPostulanteEducacionCertificado($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPostulanteEstatus($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPostulanteFechaAlta($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPostulanteUsuarioAlta($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPostulanteFechaModifica($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPostulanteUsuarioModifica($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PostulantesPeer::DATABASE_NAME);

        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_ID)) $criteria->add(PostulantesPeer::POSTULANTE_ID, $this->postulante_id);
        if ($this->isColumnModified(PostulantesPeer::VACANTE_ID)) $criteria->add(PostulantesPeer::VACANTE_ID, $this->vacante_id);
        if ($this->isColumnModified(PostulantesPeer::AREALABORAL_ID)) $criteria->add(PostulantesPeer::AREALABORAL_ID, $this->arealaboral_id);
        if ($this->isColumnModified(PostulantesPeer::EDUCACION_ID)) $criteria->add(PostulantesPeer::EDUCACION_ID, $this->educacion_id);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_CORREO)) $criteria->add(PostulantesPeer::POSTULANTE_CORREO, $this->postulante_correo);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_NOMBRE_COMPLETO)) $criteria->add(PostulantesPeer::POSTULANTE_NOMBRE_COMPLETO, $this->postulante_nombre_completo);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_TELEFONO)) $criteria->add(PostulantesPeer::POSTULANTE_TELEFONO, $this->postulante_telefono);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_ENLACE)) $criteria->add(PostulantesPeer::POSTULANTE_ENLACE, $this->postulante_enlace);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_MENSAJE)) $criteria->add(PostulantesPeer::POSTULANTE_MENSAJE, $this->postulante_mensaje);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_CV_URL)) $criteria->add(PostulantesPeer::POSTULANTE_CV_URL, $this->postulante_cv_url);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_EDUCACION_ESTATUS)) $criteria->add(PostulantesPeer::POSTULANTE_EDUCACION_ESTATUS, $this->postulante_educacion_estatus);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_EDUCACION_CERTIFICADO)) $criteria->add(PostulantesPeer::POSTULANTE_EDUCACION_CERTIFICADO, $this->postulante_educacion_certificado);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_ESTATUS)) $criteria->add(PostulantesPeer::POSTULANTE_ESTATUS, $this->postulante_estatus);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_FECHA_ALTA)) $criteria->add(PostulantesPeer::POSTULANTE_FECHA_ALTA, $this->postulante_fecha_alta);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_USUARIO_ALTA)) $criteria->add(PostulantesPeer::POSTULANTE_USUARIO_ALTA, $this->postulante_usuario_alta);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_FECHA_MODIFICA)) $criteria->add(PostulantesPeer::POSTULANTE_FECHA_MODIFICA, $this->postulante_fecha_modifica);
        if ($this->isColumnModified(PostulantesPeer::POSTULANTE_USUARIO_MODIFICA)) $criteria->add(PostulantesPeer::POSTULANTE_USUARIO_MODIFICA, $this->postulante_usuario_modifica);

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
        $criteria = new Criteria(PostulantesPeer::DATABASE_NAME);
        $criteria->add(PostulantesPeer::POSTULANTE_ID, $this->postulante_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getPostulanteId();
    }

    /**
     * Generic method to set the primary key (postulante_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPostulanteId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPostulanteId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Postulantes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setVacanteId($this->getVacanteId());
        $copyObj->setArealaboralId($this->getArealaboralId());
        $copyObj->setEducacionId($this->getEducacionId());
        $copyObj->setPostulanteCorreo($this->getPostulanteCorreo());
        $copyObj->setPostulanteNombreCompleto($this->getPostulanteNombreCompleto());
        $copyObj->setPostulanteTelefono($this->getPostulanteTelefono());
        $copyObj->setPostulanteEnlace($this->getPostulanteEnlace());
        $copyObj->setPostulanteMensaje($this->getPostulanteMensaje());
        $copyObj->setPostulanteCvUrl($this->getPostulanteCvUrl());
        $copyObj->setPostulanteEducacionEstatus($this->getPostulanteEducacionEstatus());
        $copyObj->setPostulanteEducacionCertificado($this->getPostulanteEducacionCertificado());
        $copyObj->setPostulanteEstatus($this->getPostulanteEstatus());
        $copyObj->setPostulanteFechaAlta($this->getPostulanteFechaAlta());
        $copyObj->setPostulanteUsuarioAlta($this->getPostulanteUsuarioAlta());
        $copyObj->setPostulanteFechaModifica($this->getPostulanteFechaModifica());
        $copyObj->setPostulanteUsuarioModifica($this->getPostulanteUsuarioModifica());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
            $copyObj->setPostulanteId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Postulantes Clone of current object.
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
     * @return PostulantesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PostulantesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Areaslaborales object.
     *
     * @param                  Areaslaborales $v
     * @return Postulantes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAreaslaborales(Areaslaborales $v = null)
    {
        if ($v === null) {
            $this->setArealaboralId(NULL);
        } else {
            $this->setArealaboralId($v->getArealaboralId());
        }

        $this->aAreaslaborales = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Areaslaborales object, it will not be re-added.
        if ($v !== null) {
            $v->addPostulantes($this);
        }


        return $this;
    }


    /**
     * Get the associated Areaslaborales object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Areaslaborales The associated Areaslaborales object.
     * @throws PropelException
     */
    public function getAreaslaborales(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAreaslaborales === null && ($this->arealaboral_id !== null) && $doQuery) {
            $this->aAreaslaborales = AreaslaboralesQuery::create()->findPk($this->arealaboral_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAreaslaborales->addPostulantess($this);
             */
        }

        return $this->aAreaslaborales;
    }

    /**
     * Declares an association between this object and a Educacion object.
     *
     * @param                  Educacion $v
     * @return Postulantes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEducacion(Educacion $v = null)
    {
        if ($v === null) {
            $this->setEducacionId(NULL);
        } else {
            $this->setEducacionId($v->getEducacionId());
        }

        $this->aEducacion = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Educacion object, it will not be re-added.
        if ($v !== null) {
            $v->addPostulantes($this);
        }


        return $this;
    }


    /**
     * Get the associated Educacion object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Educacion The associated Educacion object.
     * @throws PropelException
     */
    public function getEducacion(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEducacion === null && ($this->educacion_id !== null) && $doQuery) {
            $this->aEducacion = EducacionQuery::create()->findPk($this->educacion_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEducacion->addPostulantess($this);
             */
        }

        return $this->aEducacion;
    }

    /**
     * Declares an association between this object and a Vacantes object.
     *
     * @param                  Vacantes $v
     * @return Postulantes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVacantes(Vacantes $v = null)
    {
        if ($v === null) {
            $this->setVacanteId(NULL);
        } else {
            $this->setVacanteId($v->getVacanteId());
        }

        $this->aVacantes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Vacantes object, it will not be re-added.
        if ($v !== null) {
            $v->addPostulantes($this);
        }


        return $this;
    }


    /**
     * Get the associated Vacantes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Vacantes The associated Vacantes object.
     * @throws PropelException
     */
    public function getVacantes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aVacantes === null && ($this->vacante_id !== null) && $doQuery) {
            $this->aVacantes = VacantesQuery::create()->findPk($this->vacante_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVacantes->addPostulantess($this);
             */
        }

        return $this->aVacantes;
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
        if ('Usuarios' == $relationName) {
            $this->initUsuarioss();
        }
    }

    /**
     * Clears out the collUsuarioss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Postulantes The current object (for fluent API support)
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
     * If this Postulantes is new, it will return
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
                    ->filterByPostulantes($this)
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
     * @return Postulantes The current object (for fluent API support)
     */
    public function setUsuarioss(PropelCollection $usuarioss, PropelPDO $con = null)
    {
        $usuariossToDelete = $this->getUsuarioss(new Criteria(), $con)->diff($usuarioss);


        $this->usuariossScheduledForDeletion = $usuariossToDelete;

        foreach ($usuariossToDelete as $usuariosRemoved) {
            $usuariosRemoved->setPostulantes(null);
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
                ->filterByPostulantes($this)
                ->count($con);
        }

        return count($this->collUsuarioss);
    }

    /**
     * Method called to associate a Usuarios object to this object
     * through the Usuarios foreign key attribute.
     *
     * @param    Usuarios $l Usuarios
     * @return Postulantes The current object (for fluent API support)
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
        $usuarios->setPostulantes($this);
    }

    /**
     * @param	Usuarios $usuarios The usuarios object to remove.
     * @return Postulantes The current object (for fluent API support)
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
            $usuarios->setPostulantes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Postulantes is new, it will return
     * an empty collection; or if this Postulantes has previously
     * been saved, it will retrieve related Usuarioss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Postulantes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Usuarios[] List of Usuarios objects
     */
    public function getUsuariossJoinEmpresas($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuariosQuery::create(null, $criteria);
        $query->joinWith('Empresas', $join_behavior);

        return $this->getUsuarioss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->postulante_id = null;
        $this->vacante_id = null;
        $this->arealaboral_id = null;
        $this->educacion_id = null;
        $this->postulante_correo = null;
        $this->postulante_nombre_completo = null;
        $this->postulante_telefono = null;
        $this->postulante_enlace = null;
        $this->postulante_mensaje = null;
        $this->postulante_cv_url = null;
        $this->postulante_educacion_estatus = null;
        $this->postulante_educacion_certificado = null;
        $this->postulante_estatus = null;
        $this->postulante_fecha_alta = null;
        $this->postulante_usuario_alta = null;
        $this->postulante_fecha_modifica = null;
        $this->postulante_usuario_modifica = null;
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
            if ($this->collUsuarioss) {
                foreach ($this->collUsuarioss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aAreaslaborales instanceof Persistent) {
              $this->aAreaslaborales->clearAllReferences($deep);
            }
            if ($this->aEducacion instanceof Persistent) {
              $this->aEducacion->clearAllReferences($deep);
            }
            if ($this->aVacantes instanceof Persistent) {
              $this->aVacantes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collUsuarioss instanceof PropelCollection) {
            $this->collUsuarioss->clearIterator();
        }
        $this->collUsuarioss = null;
        $this->aAreaslaborales = null;
        $this->aEducacion = null;
        $this->aVacantes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PostulantesPeer::DEFAULT_STRING_FORMAT);
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
