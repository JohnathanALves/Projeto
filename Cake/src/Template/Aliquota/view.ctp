<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Aliquotum'), ['action' => 'edit', $aliquotum->aliquotaid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aliquotum'), ['action' => 'delete', $aliquotum->aliquotaid], ['confirm' => __('Are you sure you want to delete # {0}?', $aliquotum->aliquotaid)]) ?> </li>
        <li><?= $this->Html->link(__('List Aliquota'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aliquotum'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="aliquota view large-10 medium-9 columns">
    <h2><?= h($aliquotum->aliquotaid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Aliquotaid') ?></h6>
            <p><?= h($aliquotum->aliquotaid) ?></p>
            <h6 class="subheader"><?= __('Fk Bequer') ?></h6>
            <p><?= h($aliquotum->fk_bequer) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Aliquota') ?></h6>
            <p><?= $this->Number->format($aliquotum->n_aliquota) ?></p>
            <h6 class="subheader"><?= __('Qtd Larvas') ?></h6>
            <p><?= $this->Number->format($aliquotum->qtd_larvas) ?></p>
        </div>
    </div>
</div>
