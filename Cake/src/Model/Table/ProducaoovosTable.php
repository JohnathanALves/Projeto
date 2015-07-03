<?php
namespace App\Model\Table;

use App\Model\Entity\Producaoovo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Producaoovos Model
 */
class ProducaoovosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('producaoovos');
        $this->displayField('producaoovosid');
        $this->primaryKey('producaoovosid');
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
            ->add('producaoovosid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('producaoovosid', 'create');
            
        $validator
            ->add('fk_lotegaiolas', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_lotegaiolas', 'create')
            ->notEmpty('fk_lotegaiolas');
            
        $validator
            ->add('qtd_gaiolas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_gaiolas');
            
        $validator
            ->add('data_alimentacao_sangue', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_alimentacao_sangue');
            
        $validator
            ->add('data_coleta', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_coleta');
            
        $validator
            ->add('peso_ovos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('peso_ovos');

        return $validator;
    }
}
