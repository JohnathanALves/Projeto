<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Controle'), ['action' => 'edit', $controle->controleid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Controle'), ['action' => 'delete', $controle->controleid], ['confirm' => __('Are you sure you want to delete # {0}?', $controle->controleid)]) ?> </li>
        <li><?= $this->Html->link(__('List Controle'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Controle'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="controle view large-10 medium-9 columns">
    <h2><?= h($controle->controleid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Controleid') ?></h6>
            <p><?= h($controle->controleid) ?></p>
            <h6 class="subheader"><?= __('Fk Separacoes') ?></h6>
            <p><?= h($controle->fk_separacoes) ?></p>
            <h6 class="subheader"><?= __('Nome Responsavel') ?></h6>
            <p><?= h($controle->nome_responsavel) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qtd Pupa Colher') ?></h6>
            <p><?= $this->Number->format($controle->qtd_pupa_colher) ?></p>
            <h6 class="subheader"><?= __('Qtd Total Bandejas Separ') ?></h6>
            <p><?= $this->Number->format($controle->qtd_total_bandejas_separ) ?></p>
            <h6 class="subheader"><?= __('Qtd Bandejas Controle') ?></h6>
            <p><?= $this->Number->format($controle->qtd_bandejas_controle) ?></p>
            <h6 class="subheader"><?= __('Qtd Total Colheres Macho') ?></h6>
            <p><?= $this->Number->format($controle->qtd_total_colheres_macho) ?></p>
            <h6 class="subheader"><?= __('Qtd Total Colheres Femea') ?></h6>
            <p><?= $this->Number->format($controle->qtd_total_colheres_femea) ?></p>
            <h6 class="subheader"><?= __('Qtd Total Colheres Colonia') ?></h6>
            <p><?= $this->Number->format($controle->qtd_total_colheres_colonia) ?></p>
            <h6 class="subheader"><?= __('Total Colheres Controle') ?></h6>
            <p><?= $this->Number->format($controle->total_colheres_controle) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Foto Cefalotorax') ?></h6>
            <p><?= $controle->foto_cefalotorax ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
