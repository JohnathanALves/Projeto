<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ControletransporteFixture
 *
 */
class ControletransporteFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'controletransporte';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'controletransporteid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_lotetransporte' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'hora_controle' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'situação_dia1' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'situação_dia2' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'situação_dia3' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'comentario' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['controletransporteid'], 'length' => []],
            'fk_controletransporte_lotetransporte' => ['type' => 'foreign', 'columns' => ['fk_lotetransporte'], 'references' => ['lotetransporte', 'lotetransporteid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'controletransporteid' => '',
            'fk_lotetransporte' => '',
            'hora_controle' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'situação_dia1' => 'Lorem ipsum dolor sit amet',
            'situação_dia2' => 'Lorem ipsum dolor sit amet',
            'situação_dia3' => 'Lorem ipsum dolor sit amet',
            'comentario' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
