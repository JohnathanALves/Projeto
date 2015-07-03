<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CostagemFixture
 *
 */
class CostagemFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'costagem';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'costagemid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_separacoes' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'n_amostra' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_macho' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_femea' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nome_responsavel' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'sexo' => ['type' => 'string', 'length' => 1, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['costagemid'], 'length' => []],
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
            'costagemid' => '',
            'fk_separacoes' => '',
            'n_amostra' => 1,
            'qtd_macho' => 1,
            'qtd_femea' => 1,
            'nome_responsavel' => 'Lorem ipsum dolor sit amet',
            'sexo' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
