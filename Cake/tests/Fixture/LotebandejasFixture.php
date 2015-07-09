<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LotebandejasFixture
 *
 */
class LotebandejasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'lotebandejasid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'qtd_bdj_desc_antes_separacao' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'codigo' => ['type' => 'string', 'length' => 40, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['lotebandejasid'], 'length' => []],
            'lotebandejas_codigo_key' => ['type' => 'unique', 'columns' => ['codigo'], 'length' => []],
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
            'lotebandejasid' => '',
            'qtd_bdj_desc_antes_separacao' => 1,
            'codigo' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
