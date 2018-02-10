<?php



/**
 * This class defines the structure of the 'usuarios' table.
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
class UsuariosTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ijobs.map.UsuariosTableMap';

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
        $this->setName('usuarios');
        $this->setPhpName('Usuarios');
        $this->setClassname('Usuarios');
        $this->setPackage('ijobs');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('usuario_id', 'UsuarioId', 'INTEGER', true, null, null);
        $this->addForeignKey('empresa_id', 'EmpresaId', 'INTEGER', 'empresas', 'empresa_id', false, null, null);
        $this->addForeignKey('postulante_id', 'PostulanteId', 'INTEGER', 'postulantes', 'postulante_id', false, null, null);
        $this->addColumn('usuario_contrasena', 'UsuarioContrasena', 'VARCHAR', true, 16, null);
        $this->addColumn('usuario_fecha_alta', 'UsuarioFechaAlta', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('usuario_usuario_alta', 'UsuarioUsuarioAlta', 'INTEGER', true, null, null);
        $this->addColumn('usuario_fecha_modifica', 'UsuarioFechaModifica', 'TIMESTAMP', false, null, null);
        $this->addColumn('usuario_usuario_modifica', 'UsuarioUsuarioModifica', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresas', 'Empresas', RelationMap::MANY_TO_ONE, array('empresa_id' => 'empresa_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Postulantes', 'Postulantes', RelationMap::MANY_TO_ONE, array('postulante_id' => 'postulante_id', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // UsuariosTableMap
