<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Canchas Model
 *
 * @property \Cake\ORM\Association\HasMany $Planificaciones
 *
 * @method \App\Model\Entity\Cancha get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cancha newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cancha[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cancha|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cancha patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cancha[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cancha findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CanchasTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('canchas');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Planificaciones', [
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
                ->allowEmpty('nombre');

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
