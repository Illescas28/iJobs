<?php



/**
 * This class defines the structure of the 'sepomex' table.
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
class SepomexTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ijobs.map.SepomexTableMap';

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
        $this->setName('sepomex');
        $this->setPhpName('Sepomex');
        $this->setClassname('Sepomex');
        $this->setPackage('ijobs');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('sepomex_id', 'SepomexId', 'INTEGER', true, null, null);
        $this->addColumn('sepomex_idestado', 'SepomexIdestado', 'SMALLINT', true, 5, null);
        $this->addColumn('sepomex_estado', 'SepomexEstado', 'VARCHAR', true, 35, null);
        $this->addColumn('sepomex_idmunicipio', 'SepomexIdmunicipio', 'SMALLINT', true, 5, null);
        $this->addColumn('sepomex_municipio', 'SepomexMunicipio', 'VARCHAR', true, 60, null);
        $this->addColumn('sepomex_ciudad', 'SepomexCiudad', 'VARCHAR', false, 60, null);
        $this->addColumn('sepomex_zona', 'SepomexZona', 'VARCHAR', true, 15, null);
        $this->addColumn('sepomex_cp', 'SepomexCp', 'SMALLINT', true, 9, null);
        $this->addColumn('sepomex_asentamiento', 'SepomexAsentamiento', 'VARCHAR', true, 70, null);
        $this->addColumn('sepomex_tipo', 'SepomexTipo', 'VARCHAR', true, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Sucursales', 'Sucursales', RelationMap::ONE_TO_MANY, array('sepomex_id' => 'sepomex_id', ), 'CASCADE', 'CASCADE', 'Sucursaless');
    } // buildRelations()

} // SepomexTableMap
