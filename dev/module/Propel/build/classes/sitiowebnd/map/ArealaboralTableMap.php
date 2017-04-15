<?php



/**
 * This class defines the structure of the 'arealaboral' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.sitiowebnd.map
 */
class ArealaboralTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sitiowebnd.map.ArealaboralTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('arealaboral');
        $this->setPhpName('Arealaboral');
        $this->setClassname('Arealaboral');
        $this->setPackage('sitiowebnd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('arealaboral_id', 'ArealaboralId', 'INTEGER', true, null, null);
        $this->addColumn('arealaboral_nombre', 'ArealaboralNombre', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Postulante', 'Postulante', RelationMap::ONE_TO_MANY, array('arealaboral_id' => 'arealaboral_id', ), 'CASCADE', 'CASCADE', 'Postulantes');
    } // buildRelations()

} // ArealaboralTableMap
