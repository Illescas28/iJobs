<?php



/**
 * This class defines the structure of the 'sucursales' table.
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
class SucursalesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ijobs.map.SucursalesTableMap';

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
        $this->setName('sucursales');
        $this->setPhpName('Sucursales');
        $this->setClassname('Sucursales');
        $this->setPackage('ijobs');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('sucursal_id', 'SucursalId', 'INTEGER', true, null, null);
        $this->addForeignKey('empresa_id', 'EmpresaId', 'INTEGER', 'empresas', 'empresa_id', true, null, null);
        $this->addForeignKey('sepomex_id', 'SepomexId', 'INTEGER', 'sepomex', 'sepomex_id', false, null, null);
        $this->addColumn('sucursal_nombre', 'SucursalNombre', 'VARCHAR', false, 45, null);
        $this->addColumn('sucursal_calle_numero', 'SucursalCalleNumero', 'VARCHAR', false, 45, null);
        $this->addColumn('sucursal_fecha_alta', 'SucursalFechaAlta', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('sucursal_usuario_alta', 'SucursalUsuarioAlta', 'INTEGER', true, null, null);
        $this->addColumn('sucursal_fecha_modifica', 'SucursalFechaModifica', 'TIMESTAMP', false, null, null);
        $this->addColumn('sucursal_usuario_modifica', 'SucursalUsuarioModifica', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresas', 'Empresas', RelationMap::MANY_TO_ONE, array('empresa_id' => 'empresa_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sepomex', 'Sepomex', RelationMap::MANY_TO_ONE, array('sepomex_id' => 'sepomex_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Vacantes', 'Vacantes', RelationMap::ONE_TO_MANY, array('sucursal_id' => 'sucursal_id', ), 'CASCADE', 'CASCADE', 'Vacantess');
    } // buildRelations()

} // SucursalesTableMap
