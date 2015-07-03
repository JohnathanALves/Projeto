<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Amostrarepasse'), ['action' => 'edit', $amostrarepasse->amostrarepasseid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Amostrarepasse'), ['action' => 'delete', $amostrarepasse->amostrarepasseid], ['confirm' => __('Are you sure you want to delete # {0}?', $amostrarepasse->amostrarepasseid)]) ?> </li>
        <li><?= $this->Html->link(__('List Amostrarepasse'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amostrarepasse'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="amostrarepasse view large-10 medium-9 columns">
    <h2><?= h($amostrarepasse->amostrarepasseid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Amostrarepasseid') ?></h6>
            <p><?= h($amostrarepasse->amostrarepasseid) ?></p>
            <h6 class="subheader"><?= __('Fk Controle') ?></h6>
            <p><?= h($amostrarepasse->fk_controle) ?></p>
            <h6 class="subheader"><?= __('Nome Responsavel') ?></h6>
            <p><?= h($amostrarepasse->nome_responsavel) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Amostra') ?></h6>
            <p><?= $this->Number->format($amostrarepasse->n_amostra) ?></p>
            <h6 class="subheader"><?= __('Qtd Machos') ?></h6>
            <p><?= $this->Number->format($amostrarepasse->qtd_machos) ?></p>
            <h6 class="subheader"><?= __('Qtd Femeas') ?></h6>
            <p><?= $this->Number->format($amostrarepasse->qtd_femeas) ?></p>
        </div>
    </div>
</div>
