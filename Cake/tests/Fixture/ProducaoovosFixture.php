<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProducaoovosFixture
 *
 */
class ProducaoovosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'producaoovosid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_lotegaiolas' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'qtd_gaiolas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'data_alimentacao_sangue' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'data_coleta' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'peso_ovos' => ['type' => 'float', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['producaoovosid'], 'length' => []],
            'fk_producaoovos_lotegaiolas' => ['type' => 'foreign', 'columns' => ['fk_lotegaiolas'], 'references' => ['lotegaiolas', 'lotegaiolasid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'producaoovosid' => '',
            'fk_lotegaiolas' => '',
            'qtd_gaiolas' => 1,
            'data_alimentacao_sangue' => '2015-07-03',
            'data_coleta' => '2015-07-03',
            'peso_ovos' => 1
        ],
    ];
}
