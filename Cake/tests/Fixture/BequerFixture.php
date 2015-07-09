<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BequerFixture
 *
 */
class BequerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'bequer';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'bequerid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'n_bequer' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'volume' => ['type' => 'float', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'data_fim_eclosao' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'hora_fim_eclosao' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'data_inicio_eclosao' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'hora_inicio_eclosao' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'contagem_amostra' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['bequerid'], 'length' => []],
            'unique_bequer_nbequer' => ['type' => 'unique', 'columns' => ['n_bequer'], 'length' => []],
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
            'bequerid' => '',
            'n_bequer' => 1,
            'volume' => 1,
            'data_fim_eclosao' => '2015-07-09',
            'hora_fim_eclosao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'data_inicio_eclosao' => '2015-07-09',
            'hora_inicio_eclosao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'contagem_amostra' => 1
        ],
    ];
}
