<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tamanhocefalotorax'), ['action' => 'edit', $tamanhocefalotorax->tamanhocefalotoraxid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tamanhocefalotorax'), ['action' => 'delete', $tamanhocefalotorax->tamanhocefalotoraxid], ['confirm' => __('Are you sure you want to delete # {0}?', $tamanhocefalotorax->tamanhocefalotoraxid)]) ?> </li>
        <li><?= $this->Html->link(__('List Tamanhocefalotorax'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tamanhocefalotorax'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tamanhocefalotorax view large-10 medium-9 columns">
    <h2><?= h($tamanhocefalotorax->tamanhocefalotoraxid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Tamanhocefalotoraxid') ?></h6>
            <p><?= h($tamanhocefalotorax->tamanhocefalotoraxid) ?></p>
            <h6 class="subheader"><?= __('Fk Controle') ?></h6>
            <p><?= h($tamanhocefalotorax->fk_controle) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Replicata') ?></h6>
            <p><?= $this->Number->format($tamanhocefalotorax->n_replicata) ?></p>
            <h6 class="subheader"><?= __('Macho') ?></h6>
            <p><?= $this->Number->format($tamanhocefalotorax->macho) ?></p>
            <h6 class="subheader"><?= __('Femea') ?></h6>
            <p><?= $this->Number->format($tamanhocefalotorax->femea) ?></p>
        </div>
    </div>
</div>
