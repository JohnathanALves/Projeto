<?php
namespace App\Model\Table;

use App\Model\Entity\Ovo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ovos Model
 */
class OvosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('ovos');
        $this->displayField('ovosid');
        $this->primaryKey('ovosid');
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
            ->add('ovosid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('ovosid', 'create');
            
        $validator
            ->add('fk_bequer', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_bequer', 'create')
            ->notEmpty('fk_bequer');
            
        $validator
            ->add('data_origem_dos_ovos', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_origem_dos_ovos');
            
        $validator
            ->add('gramas_ovos_utilizados', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('gramas_ovos_utilizados');

        return $validator;
    }
}
