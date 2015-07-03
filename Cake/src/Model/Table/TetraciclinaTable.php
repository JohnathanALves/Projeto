<?php
namespace App\Model\Table;

use App\Model\Entity\Tetraciclina;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tetraciclina Model
 */
class TetraciclinaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tetraciclina');
        $this->displayField('tetraciclinaid');
        $this->primaryKey('tetraciclinaid');
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
            ->add('tetraciclinaid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('tetraciclinaid', 'create');
            
        $validator
            ->add('fk_controle', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_controle', 'create')
            ->notEmpty('fk_controle');
            
        $validator
            ->add('qtd_larvas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_larvas');
            
        $validator
            ->add('qtd_pupas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_pupas');
            
        $validator
            ->add('qtd_adultos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_adultos');
            
        $validator
            ->add('qtd_adultos_voando', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_adultos_voando');
            
        $validator
            ->add('n_dias', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_dias');
            
        $validator
            ->allowEmpty('nome_responsavel');

        return $validator;
    }
}
