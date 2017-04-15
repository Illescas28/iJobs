<?php


/**
 * Base class that represents a row from the 'sucursal' table.
 *
 *
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseSucursal extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SucursalPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SucursalPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the sucursal_id field.
     * @var        int
     */
    protected $sucursal_id;

    /**
     * The value for the empresa_id field.
     * @var        int
     */
    protected $empresa_id;

    /**
     * The value for the sepomex_id field.
     * @var        int
     */
    protected $sepomex_id;

    /**
     * The value for the sucursal_nombre field.
     * @var        string
     */
    protected $sucursal_nombre;

    /**
     * The value for the sucursal_calle_numero field.
     * @var        string
     */
    protected $sucursal_calle_numero;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Sepomex
     */
    protected $aSepomex;

    /**
     * @var        PropelObjectCollection|Vacante[] Collection to store aggregation of Vacante objects.
     */
    protected $collVacantes;
    protected $collVacantesPartial;

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
    protected $vacantesScheduledForDeletion = null;

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
     * Get the [empresa_id] column value.
     *
     * @return int
     */
    public function getEmpresaId()
    {

        return $this->empresa_id;
    }

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
     * Get the [sucursal_nombre] column value.
     *
     * @return string
     */
    public function getSucursalNombre()
    {

        return $this->sucursal_nombre;
    }

    /**
     * Get the [sucursal_calle_numero] column value.
     *
     * @return string
     */
    public function getSucursalCalleNumero()
    {

        return $this->sucursal_calle_numero;
    }

    /**
     * Set the value of [sucursal_id] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sucursal_id !== $v) {
            $this->sucursal_id = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_ID;
        }


        return $this;
    } // setSucursalId()

    /**
     * Set the value of [empresa_id] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setEmpresaId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->empresa_id !== $v) {
            $this->empresa_id = $v;
            $this->modifiedColumns[] = SucursalPeer::EMPRESA_ID;
        }

        if ($this->aEmpresa !== null && $this->aEmpresa->getEmpresaId() !== $v) {
            $this->aEmpresa = null;
        }


        return $this;
    } // setEmpresaId()

    /**
     * Set the value of [sepomex_id] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSepomexId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sepomex_id !== $v) {
            $this->sepomex_id = $v;
            $this->modifiedColumns[] = SucursalPeer::SEPOMEX_ID;
        }

        if ($this->aSepomex !== null && $this->aSepomex->getSepomexId() !== $v) {
            $this->aSepomex = null;
        }


        return $this;
    } // setSepomexId()

    /**
     * Set the value of [sucursal_nombre] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_nombre !== $v) {
            $this->sucursal_nombre = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_NOMBRE;
        }


        return $this;
    } // setSucursalNombre()

    /**
     * Set the value of [sucursal_calle_numero] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalCalleNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_calle_numero !== $v) {
            $this->sucursal_calle_numero = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_CALLE_NUMERO;
        }


        return $this;
    } // setSucursalCalleNumero()

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

            $this->sucursal_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->empresa_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->sepomex_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->sucursal_nombre = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->sucursal_calle_numero = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = SucursalPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Sucursal object", $e);
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

        if ($this->aEmpresa !== null && $this->empresa_id !== $this->aEmpresa->getEmpresaId()) {
            $this->aEmpresa = null;
        }
        if ($this->aSepomex !== null && $this->sepomex_id !== $this->aSepomex->getSepomexId()) {
            $this->aSepomex = null;
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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SucursalPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpresa = null;
            $this->aSepomex = null;
            $this->collVacantes = null;

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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SucursalQuery::create()
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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SucursalPeer::addInstanceToPool($this);
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

            if ($this->aEmpresa !== null) {
                if ($this->aEmpresa->isModified() || $this->aEmpresa->isNew()) {
                    $affectedRows += $this->aEmpresa->save($con);
                }
                $this->setEmpresa($this->aEmpresa);
            }

            if ($this->aSepomex !== null) {
                if ($this->aSepomex->isModified() || $this->aSepomex->isNew()) {
                    $affectedRows += $this->aSepomex->save($con);
                }
                $this->setSepomex($this->aSepomex);
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

            if ($this->vacantesScheduledForDeletion !== null) {
                if (!$this->vacantesScheduledForDeletion->isEmpty()) {
                    VacanteQuery::create()
                        ->filterByPrimaryKeys($this->vacantesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->vacantesScheduledForDeletion = null;
                }
            }

            if ($this->collVacantes !== null) {
                foreach ($this->collVacantes as $referrerFK) {
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

        $this->modifiedColumns[] = SucursalPeer::SUCURSAL_ID;
        if (null !== $this->sucursal_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SucursalPeer::SUCURSAL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_id`';
        }
        if ($this->isColumnModified(SucursalPeer::EMPRESA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_id`';
        }
        if ($this->isColumnModified(SucursalPeer::SEPOMEX_ID)) {
            $modifiedColumns[':p' . $index++]  = '`sepomex_id`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_nombre`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_CALLE_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_calle_numero`';
        }

        $sql = sprintf(
            'INSERT INTO `sucursal` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`sucursal_id`':
                        $stmt->bindValue($identifier, $this->sucursal_id, PDO::PARAM_INT);
                        break;
                    case '`empresa_id`':
                        $stmt->bindValue($identifier, $this->empresa_id, PDO::PARAM_INT);
                        break;
                    case '`sepomex_id`':
                        $stmt->bindValue($identifier, $this->sepomex_id, PDO::PARAM_INT);
                        break;
                    case '`sucursal_nombre`':
                        $stmt->bindValue($identifier, $this->sucursal_nombre, PDO::PARAM_STR);
                        break;
                    case '`sucursal_calle_numero`':
                        $stmt->bindValue($identifier, $this->sucursal_calle_numero, PDO::PARAM_STR);
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
        $this->setSucursalId($pk);

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

            if ($this->aEmpresa !== null) {
                if (!$this->aEmpresa->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpresa->getValidationFailures());
                }
            }

            if ($this->aSepomex !== null) {
                if (!$this->aSepomex->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSepomex->getValidationFailures());
                }
            }


            if (($retval = SucursalPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collVacantes !== null) {
                    foreach ($this->collVacantes as $referrerFK) {
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
        $pos = SucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSucursalId();
                break;
            case 1:
                return $this->getEmpresaId();
                break;
            case 2:
                return $this->getSepomexId();
                break;
            case 3:
                return $this->getSucursalNombre();
                break;
            case 4:
                return $this->getSucursalCalleNumero();
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
        if (isset($alreadyDumpedObjects['Sucursal'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Sucursal'][$this->getPrimaryKey()] = true;
        $keys = SucursalPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSucursalId(),
            $keys[1] => $this->getEmpresaId(),
            $keys[2] => $this->getSepomexId(),
            $keys[3] => $this->getSucursalNombre(),
            $keys[4] => $this->getSucursalCalleNumero(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSepomex) {
                $result['Sepomex'] = $this->aSepomex->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collVacantes) {
                $result['Vacantes'] = $this->collVacantes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSucursalId($value);
                break;
            case 1:
                $this->setEmpresaId($value);
                break;
            case 2:
                $this->setSepomexId($value);
                break;
            case 3:
                $this->setSucursalNombre($value);
                break;
            case 4:
                $this->setSucursalCalleNumero($value);
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
        $keys = SucursalPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSucursalId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEmpresaId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSepomexId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSucursalNombre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSucursalCalleNumero($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SucursalPeer::DATABASE_NAME);

        if ($this->isColumnModified(SucursalPeer::SUCURSAL_ID)) $criteria->add(SucursalPeer::SUCURSAL_ID, $this->sucursal_id);
        if ($this->isColumnModified(SucursalPeer::EMPRESA_ID)) $criteria->add(SucursalPeer::EMPRESA_ID, $this->empresa_id);
        if ($this->isColumnModified(SucursalPeer::SEPOMEX_ID)) $criteria->add(SucursalPeer::SEPOMEX_ID, $this->sepomex_id);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NOMBRE)) $criteria->add(SucursalPeer::SUCURSAL_NOMBRE, $this->sucursal_nombre);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_CALLE_NUMERO)) $criteria->add(SucursalPeer::SUCURSAL_CALLE_NUMERO, $this->sucursal_calle_numero);

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
        $criteria = new Criteria(SucursalPeer::DATABASE_NAME);
        $criteria->add(SucursalPeer::SUCURSAL_ID, $this->sucursal_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getSucursalId();
    }

    /**
     * Generic method to set the primary key (sucursal_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSucursalId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSucursalId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Sucursal (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEmpresaId($this->getEmpresaId());
        $copyObj->setSepomexId($this->getSepomexId());
        $copyObj->setSucursalNombre($this->getSucursalNombre());
        $copyObj->setSucursalCalleNumero($this->getSucursalCalleNumero());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getVacantes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVacante($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSucursalId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Sucursal Clone of current object.
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
     * @return SucursalPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SucursalPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Sucursal The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpresa(Empresa $v = null)
    {
        if ($v === null) {
            $this->setEmpresaId(NULL);
        } else {
            $this->setEmpresaId($v->getEmpresaId());
        }

        $this->aEmpresa = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empresa object, it will not be re-added.
        if ($v !== null) {
            $v->addSucursal($this);
        }


        return $this;
    }


    /**
     * Get the associated Empresa object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empresa The associated Empresa object.
     * @throws PropelException
     */
    public function getEmpresa(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpresa === null && ($this->empresa_id !== null) && $doQuery) {
            $this->aEmpresa = EmpresaQuery::create()->findPk($this->empresa_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpresa->addSucursals($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Sepomex object.
     *
     * @param                  Sepomex $v
     * @return Sucursal The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSepomex(Sepomex $v = null)
    {
        if ($v === null) {
            $this->setSepomexId(NULL);
        } else {
            $this->setSepomexId($v->getSepomexId());
        }

        $this->aSepomex = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sepomex object, it will not be re-added.
        if ($v !== null) {
            $v->addSucursal($this);
        }


        return $this;
    }


    /**
     * Get the associated Sepomex object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sepomex The associated Sepomex object.
     * @throws PropelException
     */
    public function getSepomex(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSepomex === null && ($this->sepomex_id !== null) && $doQuery) {
            $this->aSepomex = SepomexQuery::create()->findPk($this->sepomex_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSepomex->addSucursals($this);
             */
        }

        return $this->aSepomex;
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
        if ('Vacante' == $relationName) {
            $this->initVacantes();
        }
    }

    /**
     * Clears out the collVacantes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addVacantes()
     */
    public function clearVacantes()
    {
        $this->collVacantes = null; // important to set this to null since that means it is uninitialized
        $this->collVacantesPartial = null;

        return $this;
    }

    /**
     * reset is the collVacantes collection loaded partially
     *
     * @return void
     */
    public function resetPartialVacantes($v = true)
    {
        $this->collVacantesPartial = $v;
    }

    /**
     * Initializes the collVacantes collection.
     *
     * By default this just sets the collVacantes collection to an empty array (like clearcollVacantes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVacantes($overrideExisting = true)
    {
        if (null !== $this->collVacantes && !$overrideExisting) {
            return;
        }
        $this->collVacantes = new PropelObjectCollection();
        $this->collVacantes->setModel('Vacante');
    }

    /**
     * Gets an array of Vacante objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Vacante[] List of Vacante objects
     * @throws PropelException
     */
    public function getVacantes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVacantesPartial && !$this->isNew();
        if (null === $this->collVacantes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVacantes) {
                // return empty collection
                $this->initVacantes();
            } else {
                $collVacantes = VacanteQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVacantesPartial && count($collVacantes)) {
                      $this->initVacantes(false);

                      foreach ($collVacantes as $obj) {
                        if (false == $this->collVacantes->contains($obj)) {
                          $this->collVacantes->append($obj);
                        }
                      }

                      $this->collVacantesPartial = true;
                    }

                    $collVacantes->getInternalIterator()->rewind();

                    return $collVacantes;
                }

                if ($partial && $this->collVacantes) {
                    foreach ($this->collVacantes as $obj) {
                        if ($obj->isNew()) {
                            $collVacantes[] = $obj;
                        }
                    }
                }

                $this->collVacantes = $collVacantes;
                $this->collVacantesPartial = false;
            }
        }

        return $this->collVacantes;
    }

    /**
     * Sets a collection of Vacante objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $vacantes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setVacantes(PropelCollection $vacantes, PropelPDO $con = null)
    {
        $vacantesToDelete = $this->getVacantes(new Criteria(), $con)->diff($vacantes);


        $this->vacantesScheduledForDeletion = $vacantesToDelete;

        foreach ($vacantesToDelete as $vacanteRemoved) {
            $vacanteRemoved->setSucursal(null);
        }

        $this->collVacantes = null;
        foreach ($vacantes as $vacante) {
            $this->addVacante($vacante);
        }

        $this->collVacantes = $vacantes;
        $this->collVacantesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Vacante objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Vacante objects.
     * @throws PropelException
     */
    public function countVacantes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVacantesPartial && !$this->isNew();
        if (null === $this->collVacantes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVacantes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVacantes());
            }
            $query = VacanteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collVacantes);
    }

    /**
     * Method called to associate a Vacante object to this object
     * through the Vacante foreign key attribute.
     *
     * @param    Vacante $l Vacante
     * @return Sucursal The current object (for fluent API support)
     */
    public function addVacante(Vacante $l)
    {
        if ($this->collVacantes === null) {
            $this->initVacantes();
            $this->collVacantesPartial = true;
        }

        if (!in_array($l, $this->collVacantes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVacante($l);

            if ($this->vacantesScheduledForDeletion and $this->vacantesScheduledForDeletion->contains($l)) {
                $this->vacantesScheduledForDeletion->remove($this->vacantesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Vacante $vacante The vacante object to add.
     */
    protected function doAddVacante($vacante)
    {
        $this->collVacantes[]= $vacante;
        $vacante->setSucursal($this);
    }

    /**
     * @param	Vacante $vacante The vacante object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeVacante($vacante)
    {
        if ($this->getVacantes()->contains($vacante)) {
            $this->collVacantes->remove($this->collVacantes->search($vacante));
            if (null === $this->vacantesScheduledForDeletion) {
                $this->vacantesScheduledForDeletion = clone $this->collVacantes;
                $this->vacantesScheduledForDeletion->clear();
            }
            $this->vacantesScheduledForDeletion[]= clone $vacante;
            $vacante->setSucursal(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->sucursal_id = null;
        $this->empresa_id = null;
        $this->sepomex_id = null;
        $this->sucursal_nombre = null;
        $this->sucursal_calle_numero = null;
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
            if ($this->collVacantes) {
                foreach ($this->collVacantes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aSepomex instanceof Persistent) {
              $this->aSepomex->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collVacantes instanceof PropelCollection) {
            $this->collVacantes->clearIterator();
        }
        $this->collVacantes = null;
        $this->aEmpresa = null;
        $this->aSepomex = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SucursalPeer::DEFAULT_STRING_FORMAT);
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
