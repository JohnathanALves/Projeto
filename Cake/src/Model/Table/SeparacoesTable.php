<?php
namespace App\Model\Table;

use App\Model\Entity\Separaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Separacoes Model
 */
class SeparacoesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('separacoes');
        $this->displayField('separacoesid');
        $this->primaryKey('separacoesid');
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
            ->add('separacoesid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('separacoesid', 'create');
            
        $validator
            ->add('fk_lotebandejas', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_lotebandejas', 'create')
            ->notEmpty('fk_lotebandejas');
            
        $validator
            ->add('data_separacao', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_separacao');
            
        $validator
            ->add('n_separacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_separacao');
            
        $validator
            ->add('qtd_colheres_macho', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_colheres_macho');
            
        $validator
            ->add('qtd_colheres_femea', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_colheres_femea');
            
        $validator
            ->allowEmpty('hora_finalizacao');
            
        $validator
            ->add('qtd_bdj_descart_ap_separ', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_bdj_descart_ap_separ');

        return $validator;
    }
}
