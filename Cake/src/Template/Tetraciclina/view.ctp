<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tetraciclina'), ['action' => 'edit', $tetraciclina->tetraciclinaid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tetraciclina'), ['action' => 'delete', $tetraciclina->tetraciclinaid], ['confirm' => __('Are you sure you want to delete # {0}?', $tetraciclina->tetraciclinaid)]) ?> </li>
        <li><?= $this->Html->link(__('List Tetraciclina'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tetraciclina'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tetraciclina view large-10 medium-9 columns">
    <h2><?= h($tetraciclina->tetraciclinaid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Tetraciclinaid') ?></h6>
            <p><?= h($tetraciclina->tetraciclinaid) ?></p>
            <h6 class="subheader"><?= __('Fk Controle') ?></h6>
            <p><?= h($tetraciclina->fk_controle) ?></p>
            <h6 class="subheader"><?= __('Nome Responsavel') ?></h6>
            <p><?= h($tetraciclina->nome_responsavel) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qtd Larvas') ?></h6>
            <p><?= $this->Number->format($tetraciclina->qtd_larvas) ?></p>
            <h6 class="subheader"><?= __('Qtd Pupas') ?></h6>
            <p><?= $this->Number->format($tetraciclina->qtd_pupas) ?></p>
            <h6 class="subheader"><?= __('Qtd Adultos') ?></h6>
            <p><?= $this->Number->format($tetraciclina->qtd_adultos) ?></p>
            <h6 class="subheader"><?= __('Qtd Adultos Voando') ?></h6>
            <p><?= $this->Number->format($tetraciclina->qtd_adultos_voando) ?></p>
            <h6 class="subheader"><?= __('N Dias') ?></h6>
            <p><?= $this->Number->format($tetraciclina->n_dias) ?></p>
        </div>
    </div>
</div>
