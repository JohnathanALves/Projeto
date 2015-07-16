<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ovo'), ['action' => 'edit', $ovo->ovosid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ovo'), ['action' => 'delete', $ovo->ovosid], ['confirm' => __('Are you sure you want to delete # {0}?', $ovo->ovosid)]) ?> </li>
        <li><?= $this->Html->link(__('List Ovos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ovo'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ovos view large-10 medium-9 columns">
    <h2><?= h($ovo->ovosid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Ovosid') ?></h6>
            <p><?= h($ovo->ovosid) ?></p>
            <h6 class="subheader"><?= __('Fk Bequer') ?></h6>
            <p><?= h($ovo->fk_bequer) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Data Origem Dos Ovos') ?></h6>
            <p><?= h($ovo->data_origem_dos_ovos) ?></p>
            <h6 class="subheader"><?= __('Gramas Ovos Utilizados') ?></h6>
            <p><?= $this->Number->format($ovo->gramas_ovos_utilizados) ?></p>
        </div>
    </div>
</div>
