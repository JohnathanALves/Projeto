<?php
namespace App\Model\Table;

use App\Model\Entity\Aliquotum;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aliquota Model
 */
class AliquotaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('aliquota');
        $this->displayField('aliquotaid');
        $this->primaryKey('aliquotaid');
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
            ->add('aliquotaid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('aliquotaid', 'create');
            
        $validator
            ->add('fk_bequer', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_bequer', 'create')
            ->notEmpty('fk_bequer');
            
        $validator
            ->add('n_aliquota', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_aliquota');
            
        $validator
            ->add('qtd_larvas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_larvas');

        return $validator;
    }
}
