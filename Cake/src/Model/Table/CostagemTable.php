<?php
namespace App\Model\Table;

use App\Model\Entity\Costagem;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Costagem Model
 */
class CostagemTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('costagem');
        $this->displayField('costagemid');
        $this->primaryKey('costagemid');
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
            ->add('costagemid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('costagemid', 'create');
            
        $validator
            ->add('fk_separacoes', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_separacoes', 'create')
            ->notEmpty('fk_separacoes');
            
        $validator
            ->add('n_amostra', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_amostra');
            
        $validator
            ->add('qtd_macho', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_macho');
            
        $validator
            ->add('qtd_femea', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_femea');
            
        $validator
            ->allowEmpty('nome_responsavel');
            
        $validator
            ->allowEmpty('sexo');

        return $validator;
    }
}
