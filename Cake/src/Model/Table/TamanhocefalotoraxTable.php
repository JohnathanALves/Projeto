<?php
namespace App\Model\Table;

use App\Model\Entity\Tamanhocefalotorax;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tamanhocefalotorax Model
 */
class TamanhocefalotoraxTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tamanhocefalotorax');
        $this->displayField('tamanhocefalotoraxid');
        $this->primaryKey('tamanhocefalotoraxid');
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
            ->add('tamanhocefalotoraxid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('tamanhocefalotoraxid', 'create');
            
        $validator
            ->add('fk_controle', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_controle', 'create')
            ->notEmpty('fk_controle');
            
        $validator
            ->add('n_replicata', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_replicata');
            
        $validator
            ->add('macho', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('macho');
            
        $validator
            ->add('femea', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('femea');

        return $validator;
    }
}
