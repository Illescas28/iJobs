<?php



/**
 * This class defines the structure of the 'empresacontactos' table.
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
class EmpresacontactosTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ijobs.map.EmpresacontactosTableMap';

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
        $this->setName('empresacontactos');
        $this->setPhpName('Empresacontactos');
        $this->setClassname('Empresacontactos');
        $this->setPackage('ijobs');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('empresacontacto_id', 'EmpresacontactoId', 'INTEGER', true, null, null);
        $this->addForeignKey('empresa_id', 'EmpresaId', 'INTEGER', 'empresas', 'empresa_id', true, null, null);
        $this->addColumn('empresacontacto_nombre', 'EmpresacontactoNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('empresacontacto_email', 'EmpresacontactoEmail', 'VARCHAR', true, 255, null);
        $this->addColumn('empresacontacto_telefono', 'EmpresacontactoTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('empresacontacto_movil', 'EmpresacontactoMovil', 'VARCHAR', false, 45, null);
        $this->addColumn('empresacontacto_fecha_alta', 'EmpresacontactoFechaAlta', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('empresacontacto_usuario_alta', 'EmpresacontactoUsuarioAlta', 'INTEGER', true, null, null);
        $this->addColumn('empresacontacto_fecha_modifica', 'EmpresacontactoFechaModifica', 'TIMESTAMP', false, null, null);
        $this->addColumn('empresacontacto_usuario_modifica', 'EmpresacontactoUsuarioModifica', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresas', 'Empresas', RelationMap::MANY_TO_ONE, array('empresa_id' => 'empresa_id', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // EmpresacontactosTableMap
