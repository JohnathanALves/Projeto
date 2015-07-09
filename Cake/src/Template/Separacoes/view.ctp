<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $separaco->separacoesid]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $separaco->separacoesid], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $separaco->separacoesid)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="separacoes view large-10 medium-9 columns">
    <h2><?= h($separaco->separacoesid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Separações ID') ?></h6>
            <p><?= h($separaco->separacoesid) ?></p>
            <h6 class="subheader"><?= __('Lote bandejas') ?></h6>
            <p><?= h($separaco->fk_lotebandejas) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Nº da Separação') ?></h6>
            <p><?= $this->Number->format($separaco->n_separacao) ?></p>
            <h6 class="subheader"><?= __('Quantidade de Colheres Macho') ?></h6>
            <p><?= $this->Number->format($separaco->qtd_colheres_macho) ?></p>
            <h6 class="subheader"><?= __('Quantidade de Colheres Femea') ?></h6>
            <p><?= $this->Number->format($separaco->qtd_colheres_femea) ?></p>
            <h6 class="subheader"><?= __('Quantidade de Bandejas descartadas ao Separar') ?></h6>
            <p><?= $this->Number->format($separaco->qtd_bdj_descart_ap_separ) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data') ?></h6>
            <p><?= h($separaco->data_separacao) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Horário da Finalização') ?></h6>
            <?= $this->Text->autoParagraph(h($separaco->hora_finalizacao)); ?>

        </div>
    </div>
</div>
