<?php
namespace App\Model\Table;

use App\Model\Entity\Controletransporte;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Controletransporte Model
 */
class ControletransporteTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('controletransporte');
        $this->displayField('controletransporteid');
        $this->primaryKey('controletransporteid');
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
            ->add('controletransporteid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('controletransporteid', 'create');
            
        $validator
            ->add('fk_lotetransporte', 'valid', ['rule' => 'uuid'])
            ->requirePresence('fk_lotetransporte', 'create')
            ->notEmpty('fk_lotetransporte');
            
        $validator
            ->allowEmpty('hora_controle');
            
        $validator
            ->allowEmpty('situação_dia1');
            
        $validator
            ->allowEmpty('situação_dia2');
            
        $validator
            ->allowEmpty('situação_dia3');
            
        $validator
            ->allowEmpty('comentario');

        return $validator;
    }
}
