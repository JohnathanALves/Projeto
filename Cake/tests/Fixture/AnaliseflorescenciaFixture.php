<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnaliseflorescenciaFixture
 *
 */
class AnaliseflorescenciaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'analiseflorescencia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'analiseflorescenciaid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_controle' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'data' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'qtd_total_larvas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_total_larvas_florescentes' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nome_responsavel' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['analiseflorescenciaid'], 'length' => []],
            'fk_analiseflorescencia_controle' => ['type' => 'foreign', 'columns' => ['fk_controle'], 'references' => ['controle', 'controleid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'analiseflorescenciaid' => '',
            'fk_controle' => '',
            'data' => '2015-07-03',
            'qtd_total_larvas' => 1,
            'qtd_total_larvas_florescentes' => 1,
            'nome_responsavel' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
