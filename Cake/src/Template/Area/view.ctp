<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->fk_liberacao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->fk_liberacao], ['confirm' => __('Are you sure you want to delete # {0}?', $area->fk_liberacao)]) ?> </li>
        <li><?= $this->Html->link(__('List Area'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="area view large-10 medium-9 columns">
    <h2><?= h($area->fk_liberacao) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($area->nome) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Fk Liberacao') ?></h6>
            <p><?= $this->Number->format($area->fk_liberacao) ?></p>
            <h6 class="subheader"><?= __('N Area') ?></h6>
            <p><?= $this->Number->format($area->n_area) ?></p>
            <h6 class="subheader"><?= __('Qtd Rd11 Liberadas') ?></h6>
            <p><?= $this->Number->format($area->qtd_rd11_liberadas) ?></p>
        </div>
    </div>
</div>
