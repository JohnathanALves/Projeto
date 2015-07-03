<?php
namespace App\Model\Table;

use App\Model\Entity\Alimentacao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alimentacao Model
 */
class AlimentacaoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('alimentacao');
        $this->displayField('alimentacaoid');
        $this->primaryKey('alimentacaoid');
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
            ->add('alimentacaoid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('alimentacaoid', 'create');
            
        $validator
            ->add('fk_lotebandejas', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_lotebandejas', 'create')
            ->notEmpty('fk_lotebandejas');
            
        $validator
            ->add('dia', 'valid', ['rule' => 'date'])
            ->allowEmpty('dia');
            
        $validator
            ->add('variacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('variacao');

        return $validator;
    }
}
