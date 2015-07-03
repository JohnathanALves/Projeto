<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlimentacaoFixture
 *
 */
class AlimentacaoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alimentacao';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'alimentacaoid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_lotebandejas' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'dia' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'variacao' => ['type' => 'float', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['alimentacaoid'], 'length' => []],
            'fk_alimentacao_lotebandejas' => ['type' => 'foreign', 'columns' => ['fk_lotebandejas'], 'references' => ['lotebandejas', 'lotebandejasid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'alimentacaoid' => '',
            'fk_lotebandejas' => '',
            'dia' => '2015-07-03',
            'variacao' => 1
        ],
    ];
}
