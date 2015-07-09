<?php
namespace App\Model\Table;

use App\Model\Entity\Lotegaiola;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lotegaiolas Model
 */
class LotegaiolasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('lotegaiolas');
        $this->displayField('lotegaiolasid');
        $this->primaryKey('lotegaiolasid');
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
            ->add('lotegaiolasid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('lotegaiolasid', 'create');
            
        $validator
            ->allowEmpty('codigo_lote');

        return $validator;
    }
}
