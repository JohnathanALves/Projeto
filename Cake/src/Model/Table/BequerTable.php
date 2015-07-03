<?php
namespace App\Model\Table;

use App\Model\Entity\Bequer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bequer Model
 */
class BequerTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('bequer');
        $this->displayField('bequerid');
        $this->primaryKey('bequerid');
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
            ->add('bequerid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('bequerid', 'create');
            
        $validator
            ->add('n_bequer', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_bequer');
            
        $validator
            ->add('volume', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('volume');
            
        $validator
            ->add('data_fim_eclosao', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_fim_eclosao');
            
        $validator
            ->allowEmpty('hora_fim_eclosao');
            
        $validator
            ->add('data_inicio_eclosao', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_inicio_eclosao');
            
        $validator
            ->allowEmpty('hora_inicio_eclosao');
            
        $validator
            ->add('contagem_amostra', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('contagem_amostra');

        return $validator;
    }
}
