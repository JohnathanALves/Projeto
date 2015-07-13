<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $separaco->separacoesid],
                ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $separaco->separacoesid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="separacoes form large-10 medium-9 columns">
    <?= $this->Form->create($separaco); ?>
    <fieldset>
        <legend><?= __('Editar Separação') ?></legend>
        <?php
           echo $this->Form->input('fk_lotebandejas', ['label' => 'Lote bandeja']);
            echo $this->Form->input('data_separacao', array('empty' => true, 'default' => ''), ['label' => 'Data']);
            echo $this->Form->input('n_separacao', ['label' => 'Nº separação']);
            echo $this->Form->input('qtd_colheres_macho', ['label' => 'Quantidade de colheres macho']);
            echo $this->Form->input('qtd_colheres_femea', ['label' => 'Quantidade de colheres fêmeas']);
            echo $this->Form->input('hora_finalizacao', ['label' => 'hora da finalização']);
            echo $this->Form->input('qtd_bdj_descart_ap_separ', ['label' => 'Quandidade de bandejas descartadas ao separar']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
