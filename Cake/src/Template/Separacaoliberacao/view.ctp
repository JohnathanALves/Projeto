<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Separacaoliberacao'), ['action' => 'edit', $separacaoliberacao->separacaoliberacaoid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Separacaoliberacao'), ['action' => 'delete', $separacaoliberacao->separacaoliberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $separacaoliberacao->separacaoliberacaoid)]) ?> </li>
        <li><?= $this->Html->link(__('List Separacaoliberacao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Separacaoliberacao'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="separacaoliberacao view large-10 medium-9 columns">
    <h2><?= h($separacaoliberacao->separacaoliberacaoid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Separacaoliberacaoid') ?></h6>
            <p><?= h($separacaoliberacao->separacaoliberacaoid) ?></p>
            <h6 class="subheader"><?= __('Fk Liberacao') ?></h6>
            <p><?= h($separacaoliberacao->fk_liberacao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Separacao') ?></h6>
            <p><?= $this->Number->format($separacaoliberacao->n_separacao) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Drenagem Pre') ?></h6>
            <p><?= h($separacaoliberacao->data_drenagem_pre) ?></p>
            <h6 class="subheader"><?= __('Data Controle Liberacao Pos') ?></h6>
            <p><?= h($separacaoliberacao->data_controle_liberacao_pos) ?></p>
        </div>
    </div>
</div>
