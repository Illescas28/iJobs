<?php



/**
 * This class defines the structure of the 'vacantes' table.
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
class VacantesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ijobs.map.VacantesTableMap';

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
        $this->setName('vacantes');
        $this->setPhpName('Vacantes');
        $this->setClassname('Vacantes');
        $this->setPackage('ijobs');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('vacante_id', 'VacanteId', 'INTEGER', true, null, null);
        $this->addForeignKey('sucursal_id', 'SucursalId', 'INTEGER', 'sucursales', 'sucursal_id', true, null, null);
        $this->addColumn('vacante_nombre', 'VacanteNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('vacante_descripcion', 'VacanteDescripcion', 'VARCHAR', true, 1020, null);
        $this->addColumn('vacante_horario', 'VacanteHorario', 'VARCHAR', true, 250, null);
        $this->addColumn('vacante_sueldo', 'VacanteSueldo', 'DECIMAL', false, 10, null);
        $this->addColumn('vacante_sueldo_tipo_pago', 'VacanteSueldoTipoPago', 'CHAR', false, null, null);
        $this->getColumn('vacante_sueldo_tipo_pago', false)->setValueSet(array (
  0 => 'semanal',
  1 => 'quincenal',
  2 => 'mensual',
));
        $this->addColumn('vacante_candidatos', 'VacanteCandidatos', 'INTEGER', false, null, 0);
        $this->addColumn('vacante_fecha_inicia', 'VacanteFechaInicia', 'TIMESTAMP', false, null, null);
        $this->addColumn('vacante_fecha_termina', 'VacanteFechaTermina', 'TIMESTAMP', false, null, null);
        $this->addColumn('vacante_visitas', 'VacanteVisitas', 'INTEGER', false, null, 0);
        $this->addColumn('vacante_estatus', 'VacanteEstatus', 'CHAR', true, null, 'inactivo');
        $this->getColumn('vacante_estatus', false)->setValueSet(array (
  0 => 'activo',
  1 => 'inactivo',
));
        $this->addColumn('vacante_fecha_alta', 'VacanteFechaAlta', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('vacante_usuario_alta', 'VacanteUsuarioAlta', 'INTEGER', true, null, null);
        $this->addColumn('vacante_fecha_modifica', 'VacanteFechaModifica', 'TIMESTAMP', false, null, null);
        $this->addColumn('vacante_usuario_modifica', 'VacanteUsuarioModifica', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Sucursales', 'Sucursales', RelationMap::MANY_TO_ONE, array('sucursal_id' => 'sucursal_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Postulantes', 'Postulantes', RelationMap::ONE_TO_MANY, array('vacante_id' => 'vacante_id', ), 'CASCADE', 'CASCADE', 'Postulantess');
    } // buildRelations()

} // VacantesTableMap
