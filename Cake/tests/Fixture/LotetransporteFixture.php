<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LotetransporteFixture
 *
 */
class LotetransporteFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'lotetransporte';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'lotetransporteid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_separacao' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'n_transporte' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_colheres_celula' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cor_lote' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'qtd_c25_completas_envio' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_c25_incompletas_envio' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'hora_entrada_bod' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'hora_saida_upat' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'hora_saida_moscamed' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'nome_motorista' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nome_supervisor_envio' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'data_recebimento' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'hora_chegada_lemi' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'qtd_c25_completas_recebimento' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qtd_celulas_incompletas_recebimento' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nome_encarregado_montagem_rd11' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'hora_inicio_montagem_rd11' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'hora_termino_montagem_rd11' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'qnt_celula_rd11' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qnt_rd11_montadas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qnt_total_machos_enviados' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['lotetransporteid'], 'length' => []],
            'fk_lotetransporte_separacao' => ['type' => 'foreign', 'columns' => ['fk_separacao'], 'references' => ['separacoes', 'separacoesid'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'lotetransporteid' => '',
            'fk_separacao' => '',
            'n_transporte' => 1,
            'qtd_colheres_celula' => 1,
            'cor_lote' => 'Lorem ipsum dolor sit amet',
            'qtd_c25_completas_envio' => 1,
            'qtd_c25_incompletas_envio' => 1,
            'hora_entrada_bod' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'hora_saida_upat' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'hora_saida_moscamed' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'nome_motorista' => 'Lorem ipsum dolor sit amet',
            'nome_supervisor_envio' => 'Lorem ipsum dolor sit amet',
            'data_recebimento' => '2015-07-03',
            'hora_chegada_lemi' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'qtd_c25_completas_recebimento' => 1,
            'qtd_celulas_incompletas_recebimento' => 1,
            'nome_encarregado_montagem_rd11' => 'Lorem ipsum dolor sit amet',
            'hora_inicio_montagem_rd11' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'hora_termino_montagem_rd11' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'qnt_celula_rd11' => 1,
            'qnt_rd11_montadas' => 1,
            'qnt_total_machos_enviados' => 1
        ],
    ];
}
