<?php
namespace App\Model\Table;

use App\Model\Entity\Celula;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Celula Model
 */
class CelulaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('celula');
        $this->displayField('celulaid');
        $this->primaryKey('celulaid');
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
            ->add('celulaid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('celulaid', 'create');
            
        $validator
            ->add('fk_controletransporte', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_controletransporte', 'create')
            ->notEmpty('fk_controletransporte');
            
        $validator
            ->add('n_celula', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_celula');
            
        $validator
            ->add('qtd_pupas_mortas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_pupas_mortas');
            
        $validator
            ->add('qtd_adultos_emergidos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_adultos_emergidos');

        return $validator;
    }
}
