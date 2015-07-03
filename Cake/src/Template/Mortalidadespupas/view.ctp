<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Mortalidadespupa'), ['action' => 'edit', $mortalidadespupa->mortalidadespupasid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mortalidadespupa'), ['action' => 'delete', $mortalidadespupa->mortalidadespupasid], ['confirm' => __('Are you sure you want to delete # {0}?', $mortalidadespupa->mortalidadespupasid)]) ?> </li>
        <li><?= $this->Html->link(__('List Mortalidadespupas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mortalidadespupa'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="mortalidadespupas view large-10 medium-9 columns">
    <h2><?= h($mortalidadespupa->mortalidadespupasid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Mortalidadespupasid') ?></h6>
            <p><?= h($mortalidadespupa->mortalidadespupasid) ?></p>
            <h6 class="subheader"><?= __('Fk Lotegaiolas') ?></h6>
            <p><?= h($mortalidadespupa->fk_lotegaiolas) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Pupas G1') ?></h6>
            <p><?= $this->Number->format($mortalidadespupa->pupas_g1) ?></p>
            <h6 class="subheader"><?= __('Pupas G2') ?></h6>
            <p><?= $this->Number->format($mortalidadespupa->pupas_g2) ?></p>
            <h6 class="subheader"><?= __('Pupas G3') ?></h6>
            <p><?= $this->Number->format($mortalidadespupa->pupas_g3) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Observacao') ?></h6>
            <p><?= h($mortalidadespupa->data_observacao) ?></p>
        </div>
    </div>
</div>
