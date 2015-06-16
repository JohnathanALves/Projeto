<?php
namespace App\Model\Table;

use App\Model\Entity\Separacaoliberacao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Separacaoliberacao Model
 */
class SeparacaoliberacaoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('separacaoliberacao');
        $this->displayField('separacaoliberacaoid');
        $this->primaryKey('separacaoliberacaoid');
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
            ->add('separacaoliberacaoid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('separacaoliberacaoid', 'create');
            
        $validator
            ->add('fk_liberacao', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_liberacao', 'create')
            ->notEmpty('fk_liberacao');
            
        $validator
            ->add('n_separacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_separacao');
            
        $validator
            ->add('data_drenagem_pre', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_drenagem_pre');
            
        $validator
            ->add('data_controle_liberacao_pos', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_controle_liberacao_pos');

        return $validator;
    }
}
