<?php
namespace App\Model\Table;

use App\Model\Entity\Montagem;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Montagem Model
 */
class MontagemTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('montagem');
        $this->displayField('montagemid');
        $this->primaryKey('montagemid');
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
            ->add('montagemid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('montagemid', 'create');
            
        $validator
            ->add('fk_lotebandejas', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_lotebandejas', 'create')
            ->notEmpty('fk_lotebandejas');
            
        $validator
            ->add('fk_bequer', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_bequer', 'create')
            ->notEmpty('fk_bequer');
            
        $validator
            ->add('data_montagem', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_montagem');
            
        $validator
            ->allowEmpty('nome_responsavel');
            
        $validator
            ->add('qtd_bandejas_montadas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_bandejas_montadas');
            
        $validator
            ->allowEmpty('tipo_bandeja');

        return $validator;
    }
}
