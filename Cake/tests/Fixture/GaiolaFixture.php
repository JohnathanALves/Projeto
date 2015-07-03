<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GaiolaFixture
 *
 */
class GaiolaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gaiola';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'gaiolaid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_lotegaiolas' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'fk_separacoes' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['gaiolaid'], 'length' => []],
            'fk_gaiola_separacoes' => ['type' => 'foreign', 'columns' => ['fk_separacoes'], 'references' => ['separacoes', 'separacoesid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_gaiola_lotegaiolas' => ['type' => 'foreign', 'columns' => ['fk_lotegaiolas'], 'references' => ['lotegaiolas', 'lotegaiolasid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'gaiolaid' => '',
            'fk_lotegaiolas' => '',
            'fk_separacoes' => ''
        ],
    ];
}
