<?php
namespace App\Model\Table;

use App\Model\Entity\Temperaturatransporte;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Temperaturatransporte Model
 */
class TemperaturatransporteTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('temperaturatransporte');
        $this->displayField('temperaturatransporteid');
        $this->primaryKey('temperaturatransporteid');
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
            ->add('temperaturatransporteid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('temperaturatransporteid', 'create');
            
        $validator
            ->add('fk_lotetransporte', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_lotetransporte', 'create')
            ->notEmpty('fk_lotetransporte');
            
        $validator
            ->add('n_leitura', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('n_leitura');
            
        $validator
            ->allowEmpty('hora_leitura');
            
        $validator
            ->add('valor_leitura', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor_leitura');

        return $validator;
    }
}
