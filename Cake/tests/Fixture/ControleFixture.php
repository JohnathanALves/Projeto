<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ControleFixture
 *
 */
class ControleFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'controle';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'controleid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_separacoes' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'qtd_pupa_colher' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_total_bandejas_separ' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_bandejas_controle' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_total_colheres_macho' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_total_colheres_femea' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_total_colheres_colonia' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'total_colheres_controle' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nome_responsavel' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'foto_cefalotorax' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['controleid'], 'length' => []],
            'fk_controle_separacoes' => ['type' => 'foreign', 'columns' => ['fk_separacoes', 'fk_separacoes', 'fk_separacoes', 'fk_separacoes'], 'references' => ['separacoes', 'separacoesid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'controleid' => '',
            'fk_separacoes' => '',
            'qtd_pupa_colher' => 1,
            'qtd_total_bandejas_separ' => 1,
            'qtd_bandejas_controle' => 1,
            'qtd_total_colheres_macho' => 1,
            'qtd_total_colheres_femea' => 1,
            'qtd_total_colheres_colonia' => 1,
            'total_colheres_controle' => 1,
            'nome_responsavel' => 'Lorem ipsum dolor sit amet',
            'foto_cefalotorax' => 1
        ],
    ];
}
