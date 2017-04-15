<?php



/**
 * This class defines the structure of the 'postulante' table.
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
class PostulanteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sitiowebnd.map.PostulanteTableMap';

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
        $this->setName('postulante');
        $this->setPhpName('Postulante');
        $this->setClassname('Postulante');
        $this->setPackage('sitiowebnd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('postulante_id', 'PostulanteId', 'INTEGER', true, null, null);
        $this->addForeignKey('vacante_id', 'VacanteId', 'INTEGER', 'vacante', 'vacante_id', true, null, null);
        $this->addForeignKey('arealaboral_id', 'ArealaboralId', 'INTEGER', 'arealaboral', 'arealaboral_id', false, null, null);
        $this->addForeignKey('educacion_id', 'EducacionId', 'INTEGER', 'educacion', 'educacion_id', false, null, null);
        $this->addColumn('postulante_correo', 'PostulanteCorreo', 'VARCHAR', true, 255, null);
        $this->addColumn('postulante_nombre_completo', 'PostulanteNombreCompleto', 'VARCHAR', true, 255, null);
        $this->addColumn('postulante_telefono', 'PostulanteTelefono', 'VARCHAR', true, 15, null);
        $this->addColumn('postulante_enlace', 'PostulanteEnlace', 'VARCHAR', false, 255, null);
        $this->addColumn('postulante_mensaje', 'PostulanteMensaje', 'VARCHAR', true, 1020, null);
        $this->addColumn('postulante_curriculum_vitae', 'PostulanteCurriculumVitae', 'VARCHAR', true, 255, null);
        $this->addColumn('postulante_educacion_estatus', 'PostulanteEducacionEstatus', 'CHAR', false, null, null);
        $this->getColumn('postulante_educacion_estatus', false)->setValueSet(array (
  0 => 'trunco',
  1 => 'pasante',
  2 => 'titulado',
  3 => 'cursando',
));
        $this->addColumn('postulante_educacion_certificado', 'PostulanteEducacionCertificado', 'CHAR', false, null, null);
        $this->getColumn('postulante_educacion_certificado', false)->setValueSet(array (
  0 => 'si',
  1 => 'no',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Arealaboral', 'Arealaboral', RelationMap::MANY_TO_ONE, array('arealaboral_id' => 'arealaboral_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Educacion', 'Educacion', RelationMap::MANY_TO_ONE, array('educacion_id' => 'educacion_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Vacante', 'Vacante', RelationMap::MANY_TO_ONE, array('vacante_id' => 'vacante_id', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PostulanteTableMap
