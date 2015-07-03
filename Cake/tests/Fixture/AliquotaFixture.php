<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AliquotaFixture
 *
 */
class AliquotaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aliquota';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'aliquotaid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_bequer' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'n_aliquota' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_larvas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['aliquotaid'], 'length' => []],
            'fk_aliquota_bequer' => ['type' => 'foreign', 'columns' => ['fk_bequer'], 'references' => ['bequer', 'bequerid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'aliquotaid' => '',
            'fk_bequer' => '',
            'n_aliquota' => 1,
            'qtd_larvas' => 1
        ],
    ];
}
