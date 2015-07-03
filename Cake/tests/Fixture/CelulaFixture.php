<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CelulaFixture
 *
 */
class CelulaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'celula';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'celulaid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_controletransporte' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'n_celula' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_pupas_mortas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_adultos_emergidos' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['celulaid'], 'length' => []],
            'fk_celula_controletransporte' => ['type' => 'foreign', 'columns' => ['fk_controletransporte'], 'references' => ['controletransporte', 'controletransporteid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'celulaid' => '',
            'fk_controletransporte' => '',
            'n_celula' => 1,
            'qtd_pupas_mortas' => 1,
            'qtd_adultos_emergidos' => 1
        ],
    ];
}
