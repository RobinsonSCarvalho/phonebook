<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contacts Model
 *
 * @property \Cake\ORM\Association\HasMany $Phones
 *
 * @method \App\Model\Entity\Contact get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contact newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contact|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contact findOrCreate($search, callable $callback = null, $options = [])
 */

/**
  @SWG\Definition(
  definition="ContactsTable",
  required={"id","name","status","created","modified"},
  @SWG\Property(
  property="id",
  type="integer",
  description="Identificador do Contact"
  ),
  @SWG\Property(
  property="name",
  type="string",
  description="Nome do Contact"
  ),
  @SWG\Property(
  property="email",
  type="string",
  description="Email do Contact"
  ),
  @SWG\Property(
  property="address",
  type="string",
  description="Endereço do Contact"
  )
  )
 */
class ContactsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('contacts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Phones', [
            'foreignKey' => 'contact_id'
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
                ->requirePresence('name', 'create')
                ->notEmpty('name');

        $validator
                ->email('email')
                ->requirePresence('email', 'create')
                ->notEmpty('email')
                ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
                ->requirePresence('address', 'create')
                ->notEmpty('address');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

    public function salvaPhone($phone = []) {
        $Phones = \Cake\ORM\TableRegistry::get('Phones');
        $Phones->deleteAll(['contact_id' => $phone->id]);
        if (count($phone->phone) > 0) {
            foreach ($phone->phone as $key => $value) {
                if (!empty($value['valor'])) {
                    $save = $Phones->newEntity();
                    $save->contact_id = $phone->id;
                    $save->phone = $value['valor'];
                    $Phones->save($save);
                }
            }
        }
    }

    public function afterSave(\Cake\Event\Event $event, \Cake\Datasource\EntityInterface $entity, \ArrayObject $options) {
        $this->salvaPhone($event->data['entity']);
    }

}
