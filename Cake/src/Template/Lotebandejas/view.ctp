<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Lotebandeja'), ['action' => 'edit', $lotebandeja->lotebandejasid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lotebandeja'), ['action' => 'delete', $lotebandeja->lotebandejasid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotebandeja->lotebandejasid)]) ?> </li>
        <li><?= $this->Html->link(__('List Lotebandejas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lotebandeja'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="lotebandejas view large-10 medium-9 columns">
    <h2><?= h($lotebandeja->lotebandejasid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Lotebandejasid') ?></h6>
            <p><?= h($lotebandeja->lotebandejasid) ?></p>
            <h6 class="subheader"><?= __('Codigo') ?></h6>
            <p><?= h($lotebandeja->codigo) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qtd Bdj Desc Antes Separacao') ?></h6>
            <p><?= $this->Number->format($lotebandeja->qtd_bdj_desc_antes_separacao) ?></p>
        </div>
    </div>
</div>
