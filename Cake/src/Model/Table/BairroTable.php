<?php
namespace App\Model\Table;

use App\Model\Entity\Bairro;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bairro Model
 */
class BairroTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('bairro');
        $this->displayField('bairroid');
        $this->primaryKey('bairroid');
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
            ->add('bairroid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('bairroid', 'create');
            
        $validator
            ->add('data', 'valid', ['rule' => 'date'])
            ->allowEmpty('data');
            
        $validator
            ->allowEmpty('nome');
            
        $validator
            ->allowEmpty('fase');
            
        $validator
            ->add('qtd_real_rd11', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_real_rd11');
            
        $validator
            ->add('liberacao_semana', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('liberacao_semana');
            
        $validator
            ->add('populacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('populacao');
            
        $validator
            ->add('alocacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('alocacao');

        return $validator;
    }
}
