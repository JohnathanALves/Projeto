<?php
namespace App\Model\Table;

use App\Model\Entity\Analiseflorescencium;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Analiseflorescencia Model
 */
class AnaliseflorescenciaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('analiseflorescencia');
        $this->displayField('analiseflorescenciaid');
        $this->primaryKey('analiseflorescenciaid');
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
            ->add('analiseflorescenciaid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('analiseflorescenciaid', 'create');
            
        $validator
            ->add('fk_controle', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_controle', 'create')
            ->notEmpty('fk_controle');
            
        $validator
            ->add('data', 'valid', ['rule' => 'date'])
            ->allowEmpty('data');
            
        $validator
            ->add('qtd_total_larvas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_total_larvas');
            
        $validator
            ->add('qtd_total_larvas_florescentes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_total_larvas_florescentes');
            
        $validator
            ->allowEmpty('nome_responsavel');

        return $validator;
    }
}
