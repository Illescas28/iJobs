<?php



/**
 * This class defines the structure of the 'empresas' table.
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
class EmpresasTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ijobs.map.EmpresasTableMap';

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
        $this->setName('empresas');
        $this->setPhpName('Empresas');
        $this->setClassname('Empresas');
        $this->setPackage('ijobs');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('empresa_id', 'EmpresaId', 'INTEGER', true, null, null);
        $this->addColumn('empresa_nombre', 'EmpresaNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('empresa_logo_url', 'EmpresaLogoUrl', 'LONGVARCHAR', false, null, null);
        $this->addColumn('empresas_razon_social', 'EmpresasRazonSocial', 'VARCHAR', false, 255, null);
        $this->addColumn('empresa_rfc', 'EmpresaRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('empresa_direccion_fiscal', 'EmpresaDireccionFiscal', 'LONGVARCHAR', false, null, null);
        $this->addColumn('empresa_estatus', 'EmpresaEstatus', 'BOOLEAN', true, 1, true);
        $this->addColumn('empresa_fecha_alta', 'EmpresaFechaAlta', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('empresa_usuario_alta', 'EmpresaUsuarioAlta', 'INTEGER', true, null, null);
        $this->addColumn('empresa_fecha_actualiza', 'EmpresaFechaActualiza', 'TIMESTAMP', false, null, null);
        $this->addColumn('empresa_usuario_modifica', 'EmpresaUsuarioModifica', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresacontactos', 'Empresacontactos', RelationMap::ONE_TO_MANY, array('empresa_id' => 'empresa_id', ), 'CASCADE', 'CASCADE', 'Empresacontactoss');
        $this->addRelation('Sucursales', 'Sucursales', RelationMap::ONE_TO_MANY, array('empresa_id' => 'empresa_id', ), 'CASCADE', 'CASCADE', 'Sucursaless');
        $this->addRelation('Usuarios', 'Usuarios', RelationMap::ONE_TO_MANY, array('empresa_id' => 'empresa_id', ), 'CASCADE', 'CASCADE', 'Usuarioss');
    } // buildRelations()

} // EmpresasTableMap
