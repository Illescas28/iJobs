<?php


/**
 * Base class that represents a row from the 'sepomex' table.
 *
 *
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseSepomex extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SepomexPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SepomexPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the sepomex_id field.
     * @var        int
     */
    protected $sepomex_id;

    /**
     * The value for the sepomex_idestado field.
     * @var        int
     */
    protected $sepomex_idestado;

    /**
     * The value for the sepomex_estado field.
     * @var        string
     */
    protected $sepomex_estado;

    /**
     * The value for the sepomex_idmunicipio field.
     * @var        int
     */
    protected $sepomex_idmunicipio;

    /**
     * The value for the sepomex_municipio field.
     * @var        string
     */
    protected $sepomex_municipio;

    /**
     * The value for the sepomex_ciudad field.
     * @var        string
     */
    protected $sepomex_ciudad;

    /**
     * The value for the sepomex_zona field.
     * @var        string
     */
    protected $sepomex_zona;

    /**
     * The value for the sepomex_cp field.
     * @var        int
     */
    protected $sepomex_cp;

    /**
     * The value for the sepomex_asentamiento field.
     * @var        string
     */
    protected $sepomex_asentamiento;

    /**
     * The value for the sepomex_tipo field.
     * @var        string
     */
    protected $sepomex_tipo;

    /**
     * @var        PropelObjectCollection|Sucursal[] Collection to store aggregation of Sucursal objects.
     */
    protected $collSucursals;
    protected $collSucursalsPartial;

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
    protected $sucursalsScheduledForDeletion = null;

    /**
     * Get the [sepomex_id] column value.
     *
     * @return int
     */
    public function getSepomexId()
    {

        return $this->sepomex_id;
    }

    /**
     * Get the [sepomex_idestado] column value.
     *
     * @return int
     */
    public function getSepomexIdestado()
    {

        return $this->sepomex_idestado;
    }

    /**
     * Get the [sepomex_estado] column value.
     *
     * @return string
     */
    public function getSepomexEstado()
    {

        return $this->sepomex_estado;
    }

    /**
     * Get the [sepomex_idmunicipio] column value.
     *
     * @return int
     */
    public function getSepomexIdmunicipio()
    {

        return $this->sepomex_idmunicipio;
    }

    /**
     * Get the [sepomex_municipio] column value.
     *
     * @return string
     */
    public function getSepomexMunicipio()
    {

        return $this->sepomex_municipio;
    }

    /**
     * Get the [sepomex_ciudad] column value.
     *
     * @return string
     */
    public function getSepomexCiudad()
    {

        return $this->sepomex_ciudad;
    }

    /**
     * Get the [sepomex_zona] column value.
     *
     * @return string
     */
    public function getSepomexZona()
    {

        return $this->sepomex_zona;
    }

    /**
     * Get the [sepomex_cp] column value.
     *
     * @return int
     */
    public function getSepomexCp()
    {

        return $this->sepomex_cp;
    }

    /**
     * Get the [sepomex_asentamiento] column value.
     *
     * @return string
     */
    public function getSepomexAsentamiento()
    {

        return $this->sepomex_asentamiento;
    }

    /**
     * Get the [sepomex_tipo] column value.
     *
     * @return string
     */
    public function getSepomexTipo()
    {

        return $this->sepomex_tipo;
    }

    /**
     * Set the value of [sepomex_id] column.
     *
     * @param  int $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sepomex_id !== $v) {
            $this->sepomex_id = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_ID;
        }


        return $this;
    } // setSepomexId()

    /**
     * Set the value of [sepomex_idestado] column.
     *
     * @param  int $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexIdestado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sepomex_idestado !== $v) {
            $this->sepomex_idestado = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_IDESTADO;
        }


        return $this;
    } // setSepomexIdestado()

    /**
     * Set the value of [sepomex_estado] column.
     *
     * @param  string $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sepomex_estado !== $v) {
            $this->sepomex_estado = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_ESTADO;
        }


        return $this;
    } // setSepomexEstado()

    /**
     * Set the value of [sepomex_idmunicipio] column.
     *
     * @param  int $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexIdmunicipio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sepomex_idmunicipio !== $v) {
            $this->sepomex_idmunicipio = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_IDMUNICIPIO;
        }


        return $this;
    } // setSepomexIdmunicipio()

    /**
     * Set the value of [sepomex_municipio] column.
     *
     * @param  string $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexMunicipio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sepomex_municipio !== $v) {
            $this->sepomex_municipio = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_MUNICIPIO;
        }


        return $this;
    } // setSepomexMunicipio()

    /**
     * Set the value of [sepomex_ciudad] column.
     *
     * @param  string $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sepomex_ciudad !== $v) {
            $this->sepomex_ciudad = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_CIUDAD;
        }


        return $this;
    } // setSepomexCiudad()

    /**
     * Set the value of [sepomex_zona] column.
     *
     * @param  string $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexZona($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sepomex_zona !== $v) {
            $this->sepomex_zona = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_ZONA;
        }


        return $this;
    } // setSepomexZona()

    /**
     * Set the value of [sepomex_cp] column.
     *
     * @param  int $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sepomex_cp !== $v) {
            $this->sepomex_cp = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_CP;
        }


        return $this;
    } // setSepomexCp()

    /**
     * Set the value of [sepomex_asentamiento] column.
     *
     * @param  string $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexAsentamiento($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sepomex_asentamiento !== $v) {
            $this->sepomex_asentamiento = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_ASENTAMIENTO;
        }


        return $this;
    } // setSepomexAsentamiento()

    /**
     * Set the value of [sepomex_tipo] column.
     *
     * @param  string $v new value
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSepomexTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sepomex_tipo !== $v) {
            $this->sepomex_tipo = $v;
            $this->modifiedColumns[] = SepomexPeer::SEPOMEX_TIPO;
        }


        return $this;
    } // setSepomexTipo()

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

            $this->sepomex_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->sepomex_idestado = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->sepomex_estado = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->sepomex_idmunicipio = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->sepomex_municipio = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->sepomex_ciudad = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->sepomex_zona = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->sepomex_cp = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->sepomex_asentamiento = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->sepomex_tipo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = SepomexPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Sepomex object", $e);
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
            $con = Propel::getConnection(SepomexPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SepomexPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSucursals = null;

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
            $con = Propel::getConnection(SepomexPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SepomexQuery::create()
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
            $con = Propel::getConnection(SepomexPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SepomexPeer::addInstanceToPool($this);
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

            if ($this->sucursalsScheduledForDeletion !== null) {
                if (!$this->sucursalsScheduledForDeletion->isEmpty()) {
                    SucursalQuery::create()
                        ->filterByPrimaryKeys($this->sucursalsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->sucursalsScheduledForDeletion = null;
                }
            }

            if ($this->collSucursals !== null) {
                foreach ($this->collSucursals as $referrerFK) {
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

        $this->modifiedColumns[] = SepomexPeer::SEPOMEX_ID;
        if (null !== $this->sepomex_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SepomexPeer::SEPOMEX_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_ID)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_id`';
        }
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_IDESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_idestado`';
        }
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_estado`';
        }
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_IDMUNICIPIO)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_idmunicipio`';
        }
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_MUNICIPIO)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_municipio`';
        }
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_ciudad`';
        }
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_ZONA)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_zona`';
        }
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_CP)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_cp`';
        }
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_ASENTAMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_asentamiento`';
        }
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_tipo`';
        }

        $sql = sprintf(
            'INSERT INTO `sepomex` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`sepomex_id`':
                        $stmt->bindValue($identifier, $this->sepomex_id, PDO::PARAM_INT);
                        break;
                    case '`sepomex_idestado`':
                        $stmt->bindValue($identifier, $this->sepomex_idestado, PDO::PARAM_INT);
                        break;
                    case '`sepomex_estado`':
                        $stmt->bindValue($identifier, $this->sepomex_estado, PDO::PARAM_STR);
                        break;
                    case '`sepomex_idmunicipio`':
                        $stmt->bindValue($identifier, $this->sepomex_idmunicipio, PDO::PARAM_INT);
                        break;
                    case '`sepomex_municipio`':
                        $stmt->bindValue($identifier, $this->sepomex_municipio, PDO::PARAM_STR);
                        break;
                    case '`sepomex_ciudad`':
                        $stmt->bindValue($identifier, $this->sepomex_ciudad, PDO::PARAM_STR);
                        break;
                    case '`sepomex_zona`':
                        $stmt->bindValue($identifier, $this->sepomex_zona, PDO::PARAM_STR);
                        break;
                    case '`sepomex_cp`':
                        $stmt->bindValue($identifier, $this->sepomex_cp, PDO::PARAM_INT);
                        break;
                    case '`sepomex_asentamiento`':
                        $stmt->bindValue($identifier, $this->sepomex_asentamiento, PDO::PARAM_STR);
                        break;
                    case '`sepomex_tipo`':
                        $stmt->bindValue($identifier, $this->sepomex_tipo, PDO::PARAM_STR);
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
        $this->setSepomexId($pk);

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


            if (($retval = SepomexPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collSucursals !== null) {
                    foreach ($this->collSucursals as $referrerFK) {
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
        $pos = SepomexPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSepomexId();
                break;
            case 1:
                return $this->getSepomexIdestado();
                break;
            case 2:
                return $this->getSepomexEstado();
                break;
            case 3:
                return $this->getSepomexIdmunicipio();
                break;
            case 4:
                return $this->getSepomexMunicipio();
                break;
            case 5:
                return $this->getSepomexCiudad();
                break;
            case 6:
                return $this->getSepomexZona();
                break;
            case 7:
                return $this->getSepomexCp();
                break;
            case 8:
                return $this->getSepomexAsentamiento();
                break;
            case 9:
                return $this->getSepomexTipo();
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
        if (isset($alreadyDumpedObjects['Sepomex'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Sepomex'][$this->getPrimaryKey()] = true;
        $keys = SepomexPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSepomexId(),
            $keys[1] => $this->getSepomexIdestado(),
            $keys[2] => $this->getSepomexEstado(),
            $keys[3] => $this->getSepomexIdmunicipio(),
            $keys[4] => $this->getSepomexMunicipio(),
            $keys[5] => $this->getSepomexCiudad(),
            $keys[6] => $this->getSepomexZona(),
            $keys[7] => $this->getSepomexCp(),
            $keys[8] => $this->getSepomexAsentamiento(),
            $keys[9] => $this->getSepomexTipo(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSucursals) {
                $result['Sucursals'] = $this->collSucursals->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SepomexPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSepomexId($value);
                break;
            case 1:
                $this->setSepomexIdestado($value);
                break;
            case 2:
                $this->setSepomexEstado($value);
                break;
            case 3:
                $this->setSepomexIdmunicipio($value);
                break;
            case 4:
                $this->setSepomexMunicipio($value);
                break;
            case 5:
                $this->setSepomexCiudad($value);
                break;
            case 6:
                $this->setSepomexZona($value);
                break;
            case 7:
                $this->setSepomexCp($value);
                break;
            case 8:
                $this->setSepomexAsentamiento($value);
                break;
            case 9:
                $this->setSepomexTipo($value);
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
        $keys = SepomexPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSepomexId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSepomexIdestado($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSepomexEstado($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSepomexIdmunicipio($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSepomexMunicipio($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSepomexCiudad($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSepomexZona($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSepomexCp($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSepomexAsentamiento($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSepomexTipo($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SepomexPeer::DATABASE_NAME);

        if ($this->isColumnModified(SepomexPeer::SEPOMEX_ID)) $criteria->add(SepomexPeer::SEPOMEX_ID, $this->sepomex_id);
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_IDESTADO)) $criteria->add(SepomexPeer::SEPOMEX_IDESTADO, $this->sepomex_idestado);
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_ESTADO)) $criteria->add(SepomexPeer::SEPOMEX_ESTADO, $this->sepomex_estado);
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_IDMUNICIPIO)) $criteria->add(SepomexPeer::SEPOMEX_IDMUNICIPIO, $this->sepomex_idmunicipio);
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_MUNICIPIO)) $criteria->add(SepomexPeer::SEPOMEX_MUNICIPIO, $this->sepomex_municipio);
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_CIUDAD)) $criteria->add(SepomexPeer::SEPOMEX_CIUDAD, $this->sepomex_ciudad);
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_ZONA)) $criteria->add(SepomexPeer::SEPOMEX_ZONA, $this->sepomex_zona);
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_CP)) $criteria->add(SepomexPeer::SEPOMEX_CP, $this->sepomex_cp);
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_ASENTAMIENTO)) $criteria->add(SepomexPeer::SEPOMEX_ASENTAMIENTO, $this->sepomex_asentamiento);
        if ($this->isColumnModified(SepomexPeer::SEPOMEX_TIPO)) $criteria->add(SepomexPeer::SEPOMEX_TIPO, $this->sepomex_tipo);

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
        $criteria = new Criteria(SepomexPeer::DATABASE_NAME);
        $criteria->add(SepomexPeer::SEPOMEX_ID, $this->sepomex_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getSepomexId();
    }

    /**
     * Generic method to set the primary key (sepomex_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSepomexId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSepomexId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Sepomex (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSepomexIdestado($this->getSepomexIdestado());
        $copyObj->setSepomexEstado($this->getSepomexEstado());
        $copyObj->setSepomexIdmunicipio($this->getSepomexIdmunicipio());
        $copyObj->setSepomexMunicipio($this->getSepomexMunicipio());
        $copyObj->setSepomexCiudad($this->getSepomexCiudad());
        $copyObj->setSepomexZona($this->getSepomexZona());
        $copyObj->setSepomexCp($this->getSepomexCp());
        $copyObj->setSepomexAsentamiento($this->getSepomexAsentamiento());
        $copyObj->setSepomexTipo($this->getSepomexTipo());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getSucursals() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSucursal($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSepomexId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Sepomex Clone of current object.
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
     * @return SepomexPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SepomexPeer();
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
        if ('Sucursal' == $relationName) {
            $this->initSucursals();
        }
    }

    /**
     * Clears out the collSucursals collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sepomex The current object (for fluent API support)
     * @see        addSucursals()
     */
    public function clearSucursals()
    {
        $this->collSucursals = null; // important to set this to null since that means it is uninitialized
        $this->collSucursalsPartial = null;

        return $this;
    }

    /**
     * reset is the collSucursals collection loaded partially
     *
     * @return void
     */
    public function resetPartialSucursals($v = true)
    {
        $this->collSucursalsPartial = $v;
    }

    /**
     * Initializes the collSucursals collection.
     *
     * By default this just sets the collSucursals collection to an empty array (like clearcollSucursals());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSucursals($overrideExisting = true)
    {
        if (null !== $this->collSucursals && !$overrideExisting) {
            return;
        }
        $this->collSucursals = new PropelObjectCollection();
        $this->collSucursals->setModel('Sucursal');
    }

    /**
     * Gets an array of Sucursal objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sepomex is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Sucursal[] List of Sucursal objects
     * @throws PropelException
     */
    public function getSucursals($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSucursalsPartial && !$this->isNew();
        if (null === $this->collSucursals || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSucursals) {
                // return empty collection
                $this->initSucursals();
            } else {
                $collSucursals = SucursalQuery::create(null, $criteria)
                    ->filterBySepomex($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSucursalsPartial && count($collSucursals)) {
                      $this->initSucursals(false);

                      foreach ($collSucursals as $obj) {
                        if (false == $this->collSucursals->contains($obj)) {
                          $this->collSucursals->append($obj);
                        }
                      }

                      $this->collSucursalsPartial = true;
                    }

                    $collSucursals->getInternalIterator()->rewind();

                    return $collSucursals;
                }

                if ($partial && $this->collSucursals) {
                    foreach ($this->collSucursals as $obj) {
                        if ($obj->isNew()) {
                            $collSucursals[] = $obj;
                        }
                    }
                }

                $this->collSucursals = $collSucursals;
                $this->collSucursalsPartial = false;
            }
        }

        return $this->collSucursals;
    }

    /**
     * Sets a collection of Sucursal objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sucursals A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sepomex The current object (for fluent API support)
     */
    public function setSucursals(PropelCollection $sucursals, PropelPDO $con = null)
    {
        $sucursalsToDelete = $this->getSucursals(new Criteria(), $con)->diff($sucursals);


        $this->sucursalsScheduledForDeletion = $sucursalsToDelete;

        foreach ($sucursalsToDelete as $sucursalRemoved) {
            $sucursalRemoved->setSepomex(null);
        }

        $this->collSucursals = null;
        foreach ($sucursals as $sucursal) {
            $this->addSucursal($sucursal);
        }

        $this->collSucursals = $sucursals;
        $this->collSucursalsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Sucursal objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Sucursal objects.
     * @throws PropelException
     */
    public function countSucursals(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSucursalsPartial && !$this->isNew();
        if (null === $this->collSucursals || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSucursals) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSucursals());
            }
            $query = SucursalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySepomex($this)
                ->count($con);
        }

        return count($this->collSucursals);
    }

    /**
     * Method called to associate a Sucursal object to this object
     * through the Sucursal foreign key attribute.
     *
     * @param    Sucursal $l Sucursal
     * @return Sepomex The current object (for fluent API support)
     */
    public function addSucursal(Sucursal $l)
    {
        if ($this->collSucursals === null) {
            $this->initSucursals();
            $this->collSucursalsPartial = true;
        }

        if (!in_array($l, $this->collSucursals->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSucursal($l);

            if ($this->sucursalsScheduledForDeletion and $this->sucursalsScheduledForDeletion->contains($l)) {
                $this->sucursalsScheduledForDeletion->remove($this->sucursalsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Sucursal $sucursal The sucursal object to add.
     */
    protected function doAddSucursal($sucursal)
    {
        $this->collSucursals[]= $sucursal;
        $sucursal->setSepomex($this);
    }

    /**
     * @param	Sucursal $sucursal The sucursal object to remove.
     * @return Sepomex The current object (for fluent API support)
     */
    public function removeSucursal($sucursal)
    {
        if ($this->getSucursals()->contains($sucursal)) {
            $this->collSucursals->remove($this->collSucursals->search($sucursal));
            if (null === $this->sucursalsScheduledForDeletion) {
                $this->sucursalsScheduledForDeletion = clone $this->collSucursals;
                $this->sucursalsScheduledForDeletion->clear();
            }
            $this->sucursalsScheduledForDeletion[]= $sucursal;
            $sucursal->setSepomex(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sepomex is new, it will return
     * an empty collection; or if this Sepomex has previously
     * been saved, it will retrieve related Sucursals from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sepomex.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sucursal[] List of Sucursal objects
     */
    public function getSucursalsJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SucursalQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getSucursals($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->sepomex_id = null;
        $this->sepomex_idestado = null;
        $this->sepomex_estado = null;
        $this->sepomex_idmunicipio = null;
        $this->sepomex_municipio = null;
        $this->sepomex_ciudad = null;
        $this->sepomex_zona = null;
        $this->sepomex_cp = null;
        $this->sepomex_asentamiento = null;
        $this->sepomex_tipo = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
            if ($this->collSucursals) {
                foreach ($this->collSucursals as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collSucursals instanceof PropelCollection) {
            $this->collSucursals->clearIterator();
        }
        $this->collSucursals = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SepomexPeer::DEFAULT_STRING_FORMAT);
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
