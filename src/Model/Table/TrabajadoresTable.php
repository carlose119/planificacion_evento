<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trabajadores Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cargos
 *
 * @method \App\Model\Entity\Trabajadore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trabajadore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Trabajadore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trabajadore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trabajadore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trabajadore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trabajadore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrabajadoresTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('trabajadores');
        $this->displayField('Datos');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cargos', [
            'foreignKey' => 'cargo_id'
        ]);
        $this->belongsToMany('Canchas', [
            'foreignKey' => 'trabajador_id',
            'targetForeignKey' => 'cancha_id',
            'joinTable' => 'canchas_trabajadores'
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
                ->notEmpty('nombre', 'Ingrese el nombre');

        $validator
                ->notEmpty('apellido', 'Ingrese el apellido');

        $validator
                ->notEmpty('numero_identidad', 'Ingrese el numero de identidad');

        $validator
                ->numeric('telefono', 'Ingrese el telefono, solo numeros');

        $validator
                ->email('email', false, 'Ingrese un email valido')
                ->notEmpty('email', 'Ingrese el email');

        $validator
                ->allowEmpty('direccion');

        $validator
                ->boolean('activo')
                ->allowEmpty('activo');

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
        $rules->add($rules->isUnique(['email'], 'El email ya esta registrado'));
        $rules->add($rules->isUnique(['numero_identidad'], 'El numero de identidad ya esta registrado'));
        $rules->add($rules->isUnique(['telefono'], 'El telefono ya esta registrado'));
        $rules->add($rules->existsIn(['cargo_id'], 'Cargos'));

        return $rules;
    }

}
