<?php
namespace App\Model\Table;

use App\Model\Entity\Area;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Area Model
 */
class AreaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('area');
        $this->displayField('fk_liberacao');
        $this->primaryKey(['fk_liberacao', 'n_area']);
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
            ->add('fk_liberacao', 'valid', ['rule' => 'numeric']);
            //->allowEmpty('fk_liberacao', 'create');
            
        $validator
            ->add('n_area', 'valid', ['rule' => 'numeric']);
            //->allowEmpty('n_area', 'create');
            
        $validator
            ->allowEmpty('nome');
            
        $validator
            ->add('qtd_rd11_liberadas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtd_rd11_liberadas');

        return $validator;
    }
}
