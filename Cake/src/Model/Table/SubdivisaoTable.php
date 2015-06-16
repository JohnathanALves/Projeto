<?php
namespace App\Model\Table;

use App\Model\Entity\Subdivisao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subdivisao Model
 */
class SubdivisaoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('subdivisao');
        $this->displayField('subdivisaoid');
        $this->primaryKey('subdivisaoid');
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
            ->add('subdivisaoid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('subdivisaoid', 'create');
            
        $validator
            ->add('fk_liberacao', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_liberacao', 'create')
            ->notEmpty('fk_liberacao');
            
        $validator
            ->add('fk_bairro', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_bairro', 'create')
            ->notEmpty('fk_bairro');
            
        $validator
            ->add('data_liberacao', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_liberacao');
            
        $validator
            ->allowEmpty('nome');
            
        $validator
            ->allowEmpty('supervisor');
            
        $validator
            ->add('qtd_alvo_rd11', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_alvo_rd11');
            
        $validator
            ->add('qtd_rd11_real', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_rd11_real');

        return $validator;
    }
}
