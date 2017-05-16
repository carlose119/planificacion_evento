<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrabajadorCalificaciones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Planificacions
 * @property \Cake\ORM\Association\BelongsTo $Trabajadors
 *
 * @method \App\Model\Entity\TrabajadorCalificacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrabajadorCalificacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrabajadorCalificacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrabajadorCalificacione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrabajadorCalificacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrabajadorCalificacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrabajadorCalificacione findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrabajadorCalificacionesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('trabajador_calificaciones');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Planificaciones', [
            'foreignKey' => 'planificacion_id'
        ]);
        $this->belongsTo('Trabajadores', [
            'foreignKey' => 'trabajador_id'
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
                ->integer('planificacion_id', 'Solo numeros')
                ->notEmpty('planificacion_id', 'Seleccione la planificación');
        
        $validator
                ->integer('trabajador_id', 'Solo numeros')
                ->notEmpty('trabajador_id', 'Seleccione el trabajador');
        
        $validator
                ->integer('calificacion', 'Solo numeros')
                ->notEmpty('calificacion', 'Ingrese la calificación');

        $validator
                ->allowEmpty('comentarios');

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
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['planificacion_id'], 'Planificaciones'));
        $rules->add($rules->existsIn(['trabajador_id'], 'Trabajadores'));

        return $rules;
    }

}
