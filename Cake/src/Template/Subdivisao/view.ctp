<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Subdivisao'), ['action' => 'edit', $subdivisao->subdivisaoid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subdivisao'), ['action' => 'delete', $subdivisao->subdivisaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $subdivisao->subdivisaoid)]) ?> </li>
        <li><?= $this->Html->link(__('List Subdivisao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subdivisao'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="subdivisao view large-10 medium-9 columns">
    <h2><?= h($subdivisao->subdivisaoid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Subdivisaoid') ?></h6>
            <p><?= h($subdivisao->subdivisaoid) ?></p>
            <h6 class="subheader"><?= __('Fk Liberacao') ?></h6>
            <p><?= h($subdivisao->fk_liberacao) ?></p>
            <h6 class="subheader"><?= __('Fk Bairro') ?></h6>
            <p><?= h($subdivisao->fk_bairro) ?></p>
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($subdivisao->nome) ?></p>
            <h6 class="subheader"><?= __('Supervisor') ?></h6>
            <p><?= h($subdivisao->supervisor) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qtd Alvo Rd11') ?></h6>
            <p><?= $this->Number->format($subdivisao->qtd_alvo_rd11) ?></p>
            <h6 class="subheader"><?= __('Qtd Rd11 Real') ?></h6>
            <p><?= $this->Number->format($subdivisao->qtd_rd11_real) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Liberacao') ?></h6>
            <p><?= h($subdivisao->data_liberacao) ?></p>
        </div>
    </div>
</div>
