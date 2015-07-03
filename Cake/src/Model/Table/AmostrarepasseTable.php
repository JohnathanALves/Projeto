<?php
namespace App\Model\Table;

use App\Model\Entity\Amostrarepasse;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Amostrarepasse Model
 */
class AmostrarepasseTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('amostrarepasse');
        $this->displayField('amostrarepasseid');
        $this->primaryKey('amostrarepasseid');
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
            ->add('amostrarepasseid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('amostrarepasseid', 'create');
            
        $validator
            ->add('fk_controle', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_controle', 'create')
            ->notEmpty('fk_controle');
            
        $validator
            ->add('n_amostra', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_amostra');
            
        $validator
            ->add('qtd_machos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_machos');
            
        $validator
            ->add('qtd_femeas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_femeas');
            
        $validator
            ->allowEmpty('nome_responsavel');

        return $validator;
    }
}
