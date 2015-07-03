<?php
namespace App\Model\Table;

use App\Model\Entity\Gaiola;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gaiola Model
 */
class GaiolaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('gaiola');
        $this->displayField('gaiolaid');
        $this->primaryKey('gaiolaid');
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
            ->add('gaiolaid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('gaiolaid', 'create');
            
        $validator
            ->add('fk_lotegaiolas', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_lotegaiolas', 'create')
            ->notEmpty('fk_lotegaiolas');
            
        $validator
            ->add('fk_separacoes', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_separacoes', 'create')
            ->notEmpty('fk_separacoes');

        return $validator;
    }
}
