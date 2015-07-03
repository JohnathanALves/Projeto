<?php
namespace App\Model\Table;

use App\Model\Entity\Liberacao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Liberacao Model
 */
class LiberacaoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('liberacao');
        $this->displayField('liberacaoid');
        $this->primaryKey('liberacaoid');
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
            ->add('liberacaoid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('liberacaoid', 'create');
            
        $validator
            ->add('fk_lotetransporte', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_lotetransporte', 'create')
            ->notEmpty('fk_lotetransporte');
            
        $validator
            ->allowEmpty('hora_inicial');
            
        $validator
            ->allowEmpty('hora_termino');
            
        $validator
            ->add('tempo_de_manipulacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('tempo_de_manipulacao');
            
        $validator
            ->allowEmpty('percepcao_da_presenca_de_femeas');

        return $validator;
    }
}
