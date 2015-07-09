<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MontagemFixture
 *
 */
class MontagemFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'montagem';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'montagemid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_lotebandejas' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'fk_bequer' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'data_montagem' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'nome_responsavel' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'qtd_bandejas_montadas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'tipo_bandeja' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['montagemid'], 'length' => []],
            'fk_montagem_lotebandejas' => ['type' => 'foreign', 'columns' => ['fk_lotebandejas'], 'references' => ['lotebandejas', 'lotebandejasid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fk_montagem_bequer' => ['type' => 'foreign', 'columns' => ['fk_bequer'], 'references' => ['bequer', 'bequerid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'montagemid' => '',
            'fk_lotebandejas' => '',
            'fk_bequer' => '',
            'data_montagem' => '2015-07-09',
            'nome_responsavel' => 'Lorem ipsum dolor sit amet',
            'qtd_bandejas_montadas' => 1,
            'tipo_bandeja' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
