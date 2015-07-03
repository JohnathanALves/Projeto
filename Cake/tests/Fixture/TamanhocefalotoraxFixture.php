<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TamanhocefalotoraxFixture
 *
 */
class TamanhocefalotoraxFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tamanhocefalotorax';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'tamanhocefalotoraxid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_controle' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'n_replicata' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'macho' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'femea' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['tamanhocefalotoraxid'], 'length' => []],
            'fk_tamanhocefalotorax_controle' => ['type' => 'foreign', 'columns' => ['fk_controle'], 'references' => ['controle', 'controleid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'tamanhocefalotoraxid' => '',
            'fk_controle' => '',
            'n_replicata' => 1,
            'macho' => 1,
            'femea' => 1
        ],
    ];
}
