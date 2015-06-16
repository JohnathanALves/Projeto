<?php
namespace App\Model\Table;

use App\Model\Entity\Controleliberacao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Controleliberacao Model
 */
class ControleliberacaoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('controleliberacao');
        $this->displayField('controleliberacaoid');
        $this->primaryKey('controleliberacaoid');
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
            ->add('controleliberacaoid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('controleliberacaoid', 'create');
            
        $validator
            ->add('fk_separacaoliberacao', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_separacaoliberacao', 'create')
            ->notEmpty('fk_separacaoliberacao');
            
        $validator
            ->add('n_rd11_controle', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_rd11_controle');
            
        $validator
            ->add('qtd_pupas_vivas_pre', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_pupas_vivas_pre');
            
        $validator
            ->add('qtd_pupas_mortas_pre', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_pupas_mortas_pre');
            
        $validator
            ->add('qtd_adultos_vivos_pre', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_adultos_vivos_pre');
            
        $validator
            ->add('qtd_adultos_mortos_pre', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_adultos_mortos_pre');
            
        $validator
            ->add('qtd_pupas_vivas_pos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_pupas_vivas_pos');
            
        $validator
            ->add('qtd_pupas_mortas_pos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_pupas_mortas_pos');
            
        $validator
            ->add('qtd_adultos_vivos_pos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_adultos_vivos_pos');
            
        $validator
            ->add('qtd_adultos_mortos_pos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_adultos_mortos_pos');

        return $validator;
    }
}
