<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AmostrarepasseFixture
 *
 */
class AmostrarepasseFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'amostrarepasse';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'amostrarepasseid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_controle' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'n_amostra' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_machos' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_femeas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nome_responsavel' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['amostrarepasseid'], 'length' => []],
            'fk_amostrarepasse_controle' => ['type' => 'foreign', 'columns' => ['fk_controle'], 'references' => ['controle', 'controleid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'amostrarepasseid' => '',
            'fk_controle' => '',
            'n_amostra' => 1,
            'qtd_machos' => 1,
            'qtd_femeas' => 1,
            'nome_responsavel' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
