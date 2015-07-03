<?php
namespace App\Model\Table;

use App\Model\Entity\Controle;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Controle Model
 */
class ControleTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('controle');
        $this->displayField('controleid');
        $this->primaryKey('controleid');
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
            ->add('controleid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('controleid', 'create');
            
        $validator
            ->add('fk_separacoes', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_separacoes', 'create')
            ->notEmpty('fk_separacoes');
            
        $validator
            ->add('qtd_pupa_colher', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_pupa_colher');
            
        $validator
            ->add('qtd_total_bandejas_separ', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_total_bandejas_separ');
            
        $validator
            ->add('qtd_bandejas_controle', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_bandejas_controle');
            
        $validator
            ->add('qtd_total_colheres_macho', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_total_colheres_macho');
            
        $validator
            ->add('qtd_total_colheres_femea', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_total_colheres_femea');
            
        $validator
            ->add('qtd_total_colheres_colonia', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_total_colheres_colonia');
            
        $validator
            ->add('total_colheres_controle', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('total_colheres_controle');
            
        $validator
            ->allowEmpty('nome_responsavel');
            
        $validator
            ->add('foto_cefalotorax', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('foto_cefalotorax');

        return $validator;
    }
}
