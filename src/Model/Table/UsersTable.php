<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Groups
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id',
            'joinType' => 'INNER'
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
                ->email('email')
                ->requirePresence('email', 'create')
                ->notEmpty('email', 'Ingrese el email')
                ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
                ->requirePresence('username', 'create')
                ->notEmpty('username', 'Ingrese el nombre de usuario')
                ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
                ->requirePresence('password', 'create')
                ->notEmpty('password', 'Ingrese la clave', 'create');

        $validator
                ->requirePresence('nombre', 'create')
                ->notEmpty('nombre', 'Ingrese el nombre');

        $validator
                ->requirePresence('apellido', 'create')
                ->notEmpty('apellido', 'Ingrese el apellido');

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
        $rules->add($rules->isUnique(['email'], 'El email ya se encuentra registrado'));
        $rules->add($rules->isUnique(['username'], 'El nombre de usuario ya se encuentra registrado'));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));

        return $rules;
    }

    public function recoverPassword($id) {
        $user = $this->get($id);
        return $user->password;
    }

    public function findAuth(\Cake\ORM\Query $query, array $options) {
        $query
                //->select(['id', 'username', 'password'])
                ->where(['Users.activo' => 1]);

        return $query;
    }

    public function findAuthAdmin(\Cake\ORM\Query $query, array $options) {
        $query
                //->select(['id', 'mail', 'password'])
                ->where(['Users.activo' => 1, 'Users.group_id' => 1]);

        return $query;
    }

}
