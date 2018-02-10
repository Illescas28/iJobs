<?php



/**
 * This class defines the structure of the 'areaslaborales' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.ijobs.map
 */
class AreaslaboralesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ijobs.map.AreaslaboralesTableMap';

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
        $this->setName('areaslaborales');
        $this->setPhpName('Areaslaborales');
        $this->setClassname('Areaslaborales');
        $this->setPackage('ijobs');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('arealaboral_id', 'ArealaboralId', 'INTEGER', true, null, null);
        $this->addColumn('arealaboral_clave', 'ArealaboralClave', 'VARCHAR', true, 45, null);
        $this->addColumn('arealaboral_nombre', 'ArealaboralNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('arealaboral_fecha_alta', 'ArealaboralFechaAlta', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('arealaboral_usuario_alta', 'ArealaboralUsuarioAlta', 'INTEGER', true, null, null);
        $this->addColumn('arealaboral_fecha_modifica', 'ArealaboralFechaModifica', 'TIMESTAMP', false, null, null);
        $this->addColumn('arealaboral_usuario_modifica', 'ArealaboralUsuarioModifica', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Postulantes', 'Postulantes', RelationMap::ONE_TO_MANY, array('arealaboral_id' => 'arealaboral_id', ), 'CASCADE', 'CASCADE', 'Postulantess');
    } // buildRelations()

} // AreaslaboralesTableMap
