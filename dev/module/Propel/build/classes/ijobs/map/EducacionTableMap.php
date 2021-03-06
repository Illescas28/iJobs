<?php



/**
 * This class defines the structure of the 'educacion' table.
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
class EducacionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ijobs.map.EducacionTableMap';

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
        $this->setName('educacion');
        $this->setPhpName('Educacion');
        $this->setClassname('Educacion');
        $this->setPackage('ijobs');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('educacion_id', 'EducacionId', 'INTEGER', true, null, null);
        $this->addColumn('educacion_nombre', 'EducacionNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('educacion_descripcion', 'EducacionDescripcion', 'LONGVARCHAR', false, null, null);
        $this->addColumn('educacion_fecha_alta', 'EducacionFechaAlta', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('educacion_usuario_alta', 'EducacionUsuarioAlta', 'INTEGER', true, null, null);
        $this->addColumn('educacion_fecha_modifica', 'EducacionFechaModifica', 'TIMESTAMP', false, null, null);
        $this->addColumn('educacion_usuario_modifica', 'EducacionUsuarioModifica', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Postulantes', 'Postulantes', RelationMap::ONE_TO_MANY, array('educacion_id' => 'educacion_id', ), 'CASCADE', 'CASCADE', 'Postulantess');
    } // buildRelations()

} // EducacionTableMap
