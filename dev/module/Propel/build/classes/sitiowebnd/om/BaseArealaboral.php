<?php


/**
 * Base class that represents a row from the 'arealaboral' table.
 *
 *
 *
 * @package    propel.generator.sitiowebnd.om
 */
abstract class BaseArealaboral extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ArealaboralPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ArealaboralPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the arealaboral_id field.
     * @var        int
     */
    protected $arealaboral_id;

    /**
     * The value for the arealaboral_nombre field.
     * @var        string
     */
    protected $arealaboral_nombre;

    /**
     * @var        PropelObjectCollection|Postulante[] Collection to store aggregation of Postulante objects.
     */
    protected $collPostulantes;
    protected $collPostulantesPartial;

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
     * Get the [arealaboral_id] column value.
     *
     * @return int
     */
    public function getArealaboralId()
    {

        return $this->arealaboral_id;
    }

    /**
     * Get the [arealaboral_nombre] column value.
     *
     * @return string
     */
    public function getArealaboralNombre()
    {

        return $this->arealaboral_nombre;
    }

    /**
     * Set the value of [arealaboral_id] column.
     *
     * @param  int $v new value
     * @return Arealaboral The current object (for fluent API support)
     */
    public function setArealaboralId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->arealaboral_id !== $v) {
            $this->arealaboral_id = $v;
            $this->modifiedColumns[] = ArealaboralPeer::AREALABORAL_ID;
        }


        return $this;
    } // setArealaboralId()

    /**
     * Set the value of [arealaboral_nombre] column.
     *
     * @param  string $v new value
     * @return Arealaboral The current object (for fluent API support)
     */
    public function setArealaboralNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arealaboral_nombre !== $v) {
            $this->arealaboral_nombre = $v;
            $this->modifiedColumns[] = ArealaboralPeer::AREALABORAL_NOMBRE;
        }


        return $this;
    } // setArealaboralNombre()

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

            $this->arealaboral_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->arealaboral_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 2; // 2 = ArealaboralPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Arealaboral object", $e);
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
            $con = Propel::getConnection(ArealaboralPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ArealaboralPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collPostulantes = null;

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
            $con = Propel::getConnection(ArealaboralPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ArealaboralQuery::create()
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
            $con = Propel::getConnection(ArealaboralPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ArealaboralPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ArealaboralPeer::AREALABORAL_ID;
        if (null !== $this->arealaboral_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ArealaboralPeer::AREALABORAL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ArealaboralPeer::AREALABORAL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`arealaboral_id`';
        }
        if ($this->isColumnModified(ArealaboralPeer::AREALABORAL_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`arealaboral_nombre`';
        }

        $sql = sprintf(
            'INSERT INTO `arealaboral` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`arealaboral_id`':
                        $stmt->bindValue($identifier, $this->arealaboral_id, PDO::PARAM_INT);
                        break;
                    case '`arealaboral_nombre`':
                        $stmt->bindValue($identifier, $this->arealaboral_nombre, PDO::PARAM_STR);
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
        $this->setArealaboralId($pk);

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


            if (($retval = ArealaboralPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPostulantes !== null) {
                    foreach ($this->collPostulantes as $referrerFK) {
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
        $pos = ArealaboralPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getArealaboralId();
                break;
            case 1:
                return $this->getArealaboralNombre();
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
        if (isset($alreadyDumpedObjects['Arealaboral'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Arealaboral'][$this->getPrimaryKey()] = true;
        $keys = ArealaboralPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArealaboralId(),
            $keys[1] => $this->getArealaboralNombre(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collPostulantes) {
                $result['Postulantes'] = $this->collPostulantes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ArealaboralPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setArealaboralId($value);
                break;
            case 1:
                $this->setArealaboralNombre($value);
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
        $keys = ArealaboralPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setArealaboralId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setArealaboralNombre($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ArealaboralPeer::DATABASE_NAME);

        if ($this->isColumnModified(ArealaboralPeer::AREALABORAL_ID)) $criteria->add(ArealaboralPeer::AREALABORAL_ID, $this->arealaboral_id);
        if ($this->isColumnModified(ArealaboralPeer::AREALABORAL_NOMBRE)) $criteria->add(ArealaboralPeer::AREALABORAL_NOMBRE, $this->arealaboral_nombre);

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
        $criteria = new Criteria(ArealaboralPeer::DATABASE_NAME);
        $criteria->add(ArealaboralPeer::AREALABORAL_ID, $this->arealaboral_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getArealaboralId();
    }

    /**
     * Generic method to set the primary key (arealaboral_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setArealaboralId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getArealaboralId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Arealaboral (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArealaboralNombre($this->getArealaboralNombre());

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

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setArealaboralId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Arealaboral Clone of current object.
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
     * @return ArealaboralPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ArealaboralPeer();
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
        if ('Postulante' == $relationName) {
            $this->initPostulantes();
        }
    }

    /**
     * Clears out the collPostulantes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Arealaboral The current object (for fluent API support)
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
     * If this Arealaboral is new, it will return
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
                    ->filterByArealaboral($this)
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
     * @return Arealaboral The current object (for fluent API support)
     */
    public function setPostulantes(PropelCollection $postulantes, PropelPDO $con = null)
    {
        $postulantesToDelete = $this->getPostulantes(new Criteria(), $con)->diff($postulantes);


        $this->postulantesScheduledForDeletion = $postulantesToDelete;

        foreach ($postulantesToDelete as $postulanteRemoved) {
            $postulanteRemoved->setArealaboral(null);
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
                ->filterByArealaboral($this)
                ->count($con);
        }

        return count($this->collPostulantes);
    }

    /**
     * Method called to associate a Postulante object to this object
     * through the Postulante foreign key attribute.
     *
     * @param    Postulante $l Postulante
     * @return Arealaboral The current object (for fluent API support)
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
        $postulante->setArealaboral($this);
    }

    /**
     * @param	Postulante $postulante The postulante object to remove.
     * @return Arealaboral The current object (for fluent API support)
     */
    public function removePostulante($postulante)
    {
        if ($this->getPostulantes()->contains($postulante)) {
            $this->collPostulantes->remove($this->collPostulantes->search($postulante));
            if (null === $this->postulantesScheduledForDeletion) {
                $this->postulantesScheduledForDeletion = clone $this->collPostulantes;
                $this->postulantesScheduledForDeletion->clear();
            }
            $this->postulantesScheduledForDeletion[]= $postulante;
            $postulante->setArealaboral(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Arealaboral is new, it will return
     * an empty collection; or if this Arealaboral has previously
     * been saved, it will retrieve related Postulantes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Arealaboral.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Arealaboral is new, it will return
     * an empty collection; or if this Arealaboral has previously
     * been saved, it will retrieve related Postulantes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Arealaboral.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Postulante[] List of Postulante objects
     */
    public function getPostulantesJoinVacante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PostulanteQuery::create(null, $criteria);
        $query->joinWith('Vacante', $join_behavior);

        return $this->getPostulantes($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->arealaboral_id = null;
        $this->arealaboral_nombre = null;
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
            if ($this->collPostulantes) {
                foreach ($this->collPostulantes as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPostulantes instanceof PropelCollection) {
            $this->collPostulantes->clearIterator();
        }
        $this->collPostulantes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ArealaboralPeer::DEFAULT_STRING_FORMAT);
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
