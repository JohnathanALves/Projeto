<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Analiseflorescencium'), ['action' => 'edit', $analiseflorescencium->analiseflorescenciaid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Analiseflorescencium'), ['action' => 'delete', $analiseflorescencium->analiseflorescenciaid], ['confirm' => __('Are you sure you want to delete # {0}?', $analiseflorescencium->analiseflorescenciaid)]) ?> </li>
        <li><?= $this->Html->link(__('List Analiseflorescencia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Analiseflorescencium'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="analiseflorescencia view large-10 medium-9 columns">
    <h2><?= h($analiseflorescencium->analiseflorescenciaid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Analiseflorescenciaid') ?></h6>
            <p><?= h($analiseflorescencium->analiseflorescenciaid) ?></p>
            <h6 class="subheader"><?= __('Fk Controle') ?></h6>
            <p><?= h($analiseflorescencium->fk_controle) ?></p>
            <h6 class="subheader"><?= __('Nome Responsavel') ?></h6>
            <p><?= h($analiseflorescencium->nome_responsavel) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qtd Total Larvas') ?></h6>
            <p><?= $this->Number->format($analiseflorescencium->qtd_total_larvas) ?></p>
            <h6 class="subheader"><?= __('Qtd Total Larvas Florescentes') ?></h6>
            <p><?= $this->Number->format($analiseflorescencium->qtd_total_larvas_florescentes) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data') ?></h6>
            <p><?= h($analiseflorescencium->data) ?></p>
        </div>
    </div>
</div>
