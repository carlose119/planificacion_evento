<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Planificaciones Model
 *
 * @method \App\Model\Entity\Planificacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Planificacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Planificacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Planificacione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Planificacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Planificacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Planificacione findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlanificacionesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('planificaciones');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        
        $this->hasMany('PlanificacionDetalles', [
            'foreignKey' => 'planificacion_id'
        ]);
        
        $this->belongsTo('Canchas', [
            'foreignKey' => 'cancha_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->notEmpty('evento', 'Ingrese el nombre del evento');

        $validator
                ->notEmpty('cancha_id', 'Seleccione la cancha');

        $validator
                ->date('fecha')
                ->notEmpty('fecha', 'Seleccione la fecha');

        $validator
                ->time('hora')
                ->notEmpty('hora', 'Seleccione la hora');

        $validator
                ->allowEmpty('descripcion');

        $validator
                ->boolean('activo')
                ->allowEmpty('activo');

        $validator
                ->boolean('eliminado')
                ->allowEmpty('eliminado');

        return $validator;
    }

}
