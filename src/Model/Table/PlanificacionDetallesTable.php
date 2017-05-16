<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlanificacionDetalles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Planificacions
 * @property \Cake\ORM\Association\BelongsTo $Trabajadors
 * @property \Cake\ORM\Association\BelongsTo $Cargos
 *
 * @method \App\Model\Entity\PlanificacionDetalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlanificacionDetalle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlanificacionDetalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlanificacionDetalle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlanificacionDetalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlanificacionDetalle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlanificacionDetalle findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlanificacionDetallesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('planificacion_detalles');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Planificaciones', [
            'foreignKey' => 'planificacion_id'
        ]);
        $this->belongsTo('Trabajadores', [
            'foreignKey' => 'trabajador_id'
        ]);
        $this->belongsTo('Cargos', [
            'foreignKey' => 'cargo_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');
        
        $validator
            ->numeric('trabajador_id', 'Seleccione el trabajador');

        $validator
            ->time('horas')
            ->notEmpty('horas', 'Seleccione la cantidad de horas');

        $validator
            ->numeric('pago', 'Ingrese el pago, solo numeros');

        $validator
            ->boolean('eliminado')
            ->allowEmpty('eliminado');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['planificacion_id'], 'Planificaciones'));
        $rules->add($rules->existsIn(['trabajador_id'], 'Trabajadores'));
        $rules->add($rules->existsIn(['cargo_id'], 'Cargos'));

        return $rules;
    }
}
