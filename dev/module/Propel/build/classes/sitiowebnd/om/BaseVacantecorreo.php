<?php


/**
 * Base class that represents a row from the 'vacantecorreo' table.
 *
 *
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseVacantecorreo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VacantecorreoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VacantecorreoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the vacantecorreo_id field.
     * @var        int
     */
    protected $vacantecorreo_id;

    /**
     * The value for the vacante_id field.
     * @var        int
     */
    protected $vacante_id;

    /**
     * The value for the correo_id field.
     * @var        int
     */
    protected $correo_id;

    /**
     * @var        Correo
     */
    protected $aCorreo;

    /**
     * @var        Vacante
     */
    protected $aVacante;

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
     * Get the [vacantecorreo_id] column value.
     *
     * @return int
     */
    public function getVacantecorreoId()
    {

        return $this->vacantecorreo_id;
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
     * Get the [correo_id] column value.
     *
     * @return int
     */
    public function getCorreoId()
    {

        return $this->correo_id;
    }

    /**
     * Set the value of [vacantecorreo_id] column.
     *
     * @param  int $v new value
     * @return Vacantecorreo The current object (for fluent API support)
     */
    public function setVacantecorreoId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacantecorreo_id !== $v) {
            $this->vacantecorreo_id = $v;
            $this->modifiedColumns[] = VacantecorreoPeer::VACANTECORREO_ID;
        }


        return $this;
    } // setVacantecorreoId()

    /**
     * Set the value of [vacante_id] column.
     *
     * @param  int $v new value
     * @return Vacantecorreo The current object (for fluent API support)
     */
    public function setVacanteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vacante_id !== $v) {
            $this->vacante_id = $v;
            $this->modifiedColumns[] = VacantecorreoPeer::VACANTE_ID;
        }

        if ($this->aVacante !== null && $this->aVacante->getVacanteId() !== $v) {
            $this->aVacante = null;
        }


        return $this;
    } // setVacanteId()

    /**
     * Set the value of [correo_id] column.
     *
     * @param  int $v new value
     * @return Vacantecorreo The current object (for fluent API support)
     */
    public function setCorreoId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->correo_id !== $v) {
            $this->correo_id = $v;
            $this->modifiedColumns[] = VacantecorreoPeer::CORREO_ID;
        }

        if ($this->aCorreo !== null && $this->aCorreo->getCorreoId() !== $v) {
            $this->aCorreo = null;
        }


        return $this;
    } // setCorreoId()

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

            $this->vacantecorreo_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->vacante_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->correo_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = VacantecorreoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Vacantecorreo object", $e);
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

        if ($this->aVacante !== null && $this->vacante_id !== $this->aVacante->getVacanteId()) {
            $this->aVacante = null;
        }
        if ($this->aCorreo !== null && $this->correo_id !== $this->aCorreo->getCorreoId()) {
            $this->aCorreo = null;
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
            $con = Propel::getConnection(VacantecorreoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VacantecorreoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCorreo = null;
            $this->aVacante = null;
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
            $con = Propel::getConnection(VacantecorreoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VacantecorreoQuery::create()
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
            $con = Propel::getConnection(VacantecorreoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VacantecorreoPeer::addInstanceToPool($this);
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

            if ($this->aCorreo !== null) {
                if ($this->aCorreo->isModified() || $this->aCorreo->isNew()) {
                    $affectedRows += $this->aCorreo->save($con);
                }
                $this->setCorreo($this->aCorreo);
            }

            if ($this->aVacante !== null) {
                if ($this->aVacante->isModified() || $this->aVacante->isNew()) {
                    $affectedRows += $this->aVacante->save($con);
                }
                $this->setVacante($this->aVacante);
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

        $this->modifiedColumns[] = VacantecorreoPeer::VACANTECORREO_ID;
        if (null !== $this->vacantecorreo_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VacantecorreoPeer::VACANTECORREO_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VacantecorreoPeer::VACANTECORREO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`vacantecorreo_id`';
        }
        if ($this->isColumnModified(VacantecorreoPeer::VACANTE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`vacante_id`';
        }
        if ($this->isColumnModified(VacantecorreoPeer::CORREO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`correo_id`';
        }

        $sql = sprintf(
            'INSERT INTO `vacantecorreo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`vacantecorreo_id`':
                        $stmt->bindValue($identifier, $this->vacantecorreo_id, PDO::PARAM_INT);
                        break;
                    case '`vacante_id`':
                        $stmt->bindValue($identifier, $this->vacante_id, PDO::PARAM_INT);
                        break;
                    case '`correo_id`':
                        $stmt->bindValue($identifier, $this->correo_id, PDO::PARAM_INT);
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
        $this->setVacantecorreoId($pk);

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

            if ($this->aCorreo !== null) {
                if (!$this->aCorreo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCorreo->getValidationFailures());
                }
            }

            if ($this->aVacante !== null) {
                if (!$this->aVacante->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVacante->getValidationFailures());
                }
            }


            if (($retval = VacantecorreoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = VacantecorreoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getVacantecorreoId();
                break;
            case 1:
                return $this->getVacanteId();
                break;
            case 2:
                return $this->getCorreoId();
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
        if (isset($alreadyDumpedObjects['Vacantecorreo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Vacantecorreo'][$this->getPrimaryKey()] = true;
        $keys = VacantecorreoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getVacantecorreoId(),
            $keys[1] => $this->getVacanteId(),
            $keys[2] => $this->getCorreoId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCorreo) {
                $result['Correo'] = $this->aCorreo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aVacante) {
                $result['Vacante'] = $this->aVacante->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = VacantecorreoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setVacantecorreoId($value);
                break;
            case 1:
                $this->setVacanteId($value);
                break;
            case 2:
                $this->setCorreoId($value);
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
        $keys = VacantecorreoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setVacantecorreoId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setVacanteId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCorreoId($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VacantecorreoPeer::DATABASE_NAME);

        if ($this->isColumnModified(VacantecorreoPeer::VACANTECORREO_ID)) $criteria->add(VacantecorreoPeer::VACANTECORREO_ID, $this->vacantecorreo_id);
        if ($this->isColumnModified(VacantecorreoPeer::VACANTE_ID)) $criteria->add(VacantecorreoPeer::VACANTE_ID, $this->vacante_id);
        if ($this->isColumnModified(VacantecorreoPeer::CORREO_ID)) $criteria->add(VacantecorreoPeer::CORREO_ID, $this->correo_id);

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
        $criteria = new Criteria(VacantecorreoPeer::DATABASE_NAME);
        $criteria->add(VacantecorreoPeer::VACANTECORREO_ID, $this->vacantecorreo_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getVacantecorreoId();
    }

    /**
     * Generic method to set the primary key (vacantecorreo_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setVacantecorreoId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getVacantecorreoId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Vacantecorreo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setVacanteId($this->getVacanteId());
        $copyObj->setCorreoId($this->getCorreoId());

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
            $copyObj->setVacantecorreoId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Vacantecorreo Clone of current object.
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
     * @return VacantecorreoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VacantecorreoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Correo object.
     *
     * @param                  Correo $v
     * @return Vacantecorreo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCorreo(Correo $v = null)
    {
        if ($v === null) {
            $this->setCorreoId(NULL);
        } else {
            $this->setCorreoId($v->getCorreoId());
        }

        $this->aCorreo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Correo object, it will not be re-added.
        if ($v !== null) {
            $v->addVacantecorreo($this);
        }


        return $this;
    }


    /**
     * Get the associated Correo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Correo The associated Correo object.
     * @throws PropelException
     */
    public function getCorreo(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCorreo === null && ($this->correo_id !== null) && $doQuery) {
            $this->aCorreo = CorreoQuery::create()->findPk($this->correo_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCorreo->addVacantecorreos($this);
             */
        }

        return $this->aCorreo;
    }

    /**
     * Declares an association between this object and a Vacante object.
     *
     * @param                  Vacante $v
     * @return Vacantecorreo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVacante(Vacante $v = null)
    {
        if ($v === null) {
            $this->setVacanteId(NULL);
        } else {
            $this->setVacanteId($v->getVacanteId());
        }

        $this->aVacante = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Vacante object, it will not be re-added.
        if ($v !== null) {
            $v->addVacantecorreo($this);
        }


        return $this;
    }


    /**
     * Get the associated Vacante object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Vacante The associated Vacante object.
     * @throws PropelException
     */
    public function getVacante(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aVacante === null && ($this->vacante_id !== null) && $doQuery) {
            $this->aVacante = VacanteQuery::create()->findPk($this->vacante_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVacante->addVacantecorreos($this);
             */
        }

        return $this->aVacante;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->vacantecorreo_id = null;
        $this->vacante_id = null;
        $this->correo_id = null;
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
            if ($this->aCorreo instanceof Persistent) {
              $this->aCorreo->clearAllReferences($deep);
            }
            if ($this->aVacante instanceof Persistent) {
              $this->aVacante->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCorreo = null;
        $this->aVacante = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VacantecorreoPeer::DEFAULT_STRING_FORMAT);
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
