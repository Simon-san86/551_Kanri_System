<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tenpos Model
 *
 * @method \App\Model\Entity\Tenpo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tenpo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tenpo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tenpo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tenpo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tenpo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tenpo findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TenposTable extends Table
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

        $this->table('tenpos');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('name');

        $validator
            ->time('open')
            ->allowEmpty('open');

        $validator
            ->time('closed')
            ->allowEmpty('closed');

        $validator
            ->allowEmpty('holiday');

        $validator
            ->allowEmpty('zip');

        $validator
            ->allowEmpty('area');

        $validator
            ->allowEmpty('prefecture');

        $validator
            ->allowEmpty('adress');

        $validator
            ->allowEmpty('tel');

        return $validator;
    }
}
