<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo login'), ['action' => 'add']) ?></li>
    </ul>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit']) ?></li>
    </ul>
     <ul class="side-nav">
        <li><?= $this->Html->link(__('Sair'), ['action' => 'logout']) ?></li>
    </ul>
</div>