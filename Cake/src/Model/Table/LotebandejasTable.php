<?php
namespace App\Model\Table;

use App\Model\Entity\Lotebandeja;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lotebandejas Model
 */
class LotebandejasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('lotebandejas');
        $this->displayField('lotebandejasid');
        $this->primaryKey('lotebandejasid');
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
            ->add('lotebandejasid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('lotebandejasid', 'create');
            
        $validator
            ->add('qtd_bdj_desc_antes_separacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_bdj_desc_antes_separacao');
            
        $validator
            ->allowEmpty('codigo');

        return $validator;
    }
}
