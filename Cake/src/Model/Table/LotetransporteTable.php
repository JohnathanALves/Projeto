<?php
namespace App\Model\Table;

use App\Model\Entity\Lotetransporte;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lotetransporte Model
 */
class LotetransporteTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('lotetransporte');
        $this->displayField('lotetransporteid');
        $this->primaryKey('lotetransporteid');
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
            ->add('lotetransporteid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('lotetransporteid', 'create');
            
        $validator
            ->add('fk_separacao', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_separacao', 'create')
            ->notEmpty('fk_separacao');
            
        $validator
            ->add('n_transporte', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_transporte');
            
        $validator
            ->add('qtd_colheres_celula', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_colheres_celula');
            
        $validator
            ->allowEmpty('cor_lote');
            
        $validator
            ->add('qtd_c25_completas_envio', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_c25_completas_envio');
            
        $validator
            ->add('qtd_c25_incompletas_envio', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_c25_incompletas_envio');
            
        $validator
            ->allowEmpty('hora_entrada_bod');
            
        $validator
            ->allowEmpty('hora_saida_upat');
            
        $validator
            ->allowEmpty('hora_saida_moscamed');
            
        $validator
            ->allowEmpty('nome_motorista');
            
        $validator
            ->allowEmpty('nome_supervisor_envio');
            
        $validator
            ->add('data_recebimento', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_recebimento');
            
        $validator
            ->allowEmpty('hora_chegada_lemi');
            
        $validator
            ->add('qtd_c25_completas_recebimento', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_c25_completas_recebimento');
            
        $validator
            ->add('qtd_celulas_incompletas_recebimento', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_celulas_incompletas_recebimento');
            
        $validator
            ->allowEmpty('nome_encarregado_montagem_rd11');
            
        $validator
            ->allowEmpty('hora_inicio_montagem_rd11');
            
        $validator
            ->allowEmpty('hora_termino_montagem_rd11');
            
        $validator
            ->add('qnt_celula_rd11', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_celula_rd11');
            
        $validator
            ->add('qnt_rd11_montadas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_rd11_montadas');
            
        $validator
            ->add('qnt_total_machos_enviados', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_total_machos_enviados');

        return $validator;
    }
}
