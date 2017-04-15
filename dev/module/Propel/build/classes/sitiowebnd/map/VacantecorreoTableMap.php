<?php



/**
 * This class defines the structure of the 'vacantecorreo' table.
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
class VacantecorreoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sitiowebnd.map.VacantecorreoTableMap';

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
        $this->setName('vacantecorreo');
        $this->setPhpName('Vacantecorreo');
        $this->setClassname('Vacantecorreo');
        $this->setPackage('sitiowebnd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('vacantecorreo_id', 'VacantecorreoId', 'INTEGER', true, null, null);
        $this->addForeignKey('vacante_id', 'VacanteId', 'INTEGER', 'vacante', 'vacante_id', true, null, null);
        $this->addForeignKey('correo_id', 'CorreoId', 'INTEGER', 'correo', 'correo_id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Correo', 'Correo', RelationMap::MANY_TO_ONE, array('correo_id' => 'correo_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Vacante', 'Vacante', RelationMap::MANY_TO_ONE, array('vacante_id' => 'vacante_id', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // VacantecorreoTableMap
