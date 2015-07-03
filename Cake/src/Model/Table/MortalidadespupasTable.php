<?php
namespace App\Model\Table;

use App\Model\Entity\Mortalidadespupa;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mortalidadespupas Model
 */
class MortalidadespupasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('mortalidadespupas');
        $this->displayField('mortalidadespupasid');
        $this->primaryKey('mortalidadespupasid');
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
            ->add('mortalidadespupasid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('mortalidadespupasid', 'create');
            
        $validator
            ->add('fk_lotegaiolas', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_lotegaiolas', 'create')
            ->notEmpty('fk_lotegaiolas');
            
        $validator
            ->add('data_observacao', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_observacao');
            
        $validator
            ->add('pupas_g1', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pupas_g1');
            
        $validator
            ->add('pupas_g2', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pupas_g2');
            
        $validator
            ->add('pupas_g3', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pupas_g3');

        return $validator;
    }
}
