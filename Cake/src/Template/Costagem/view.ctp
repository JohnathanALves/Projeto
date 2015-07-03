<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Costagem'), ['action' => 'edit', $costagem->costagemid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Costagem'), ['action' => 'delete', $costagem->costagemid], ['confirm' => __('Are you sure you want to delete # {0}?', $costagem->costagemid)]) ?> </li>
        <li><?= $this->Html->link(__('List Costagem'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Costagem'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="costagem view large-10 medium-9 columns">
    <h2><?= h($costagem->costagemid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Costagemid') ?></h6>
            <p><?= h($costagem->costagemid) ?></p>
            <h6 class="subheader"><?= __('Fk Separacoes') ?></h6>
            <p><?= h($costagem->fk_separacoes) ?></p>
            <h6 class="subheader"><?= __('Nome Responsavel') ?></h6>
            <p><?= h($costagem->nome_responsavel) ?></p>
            <h6 class="subheader"><?= __('Sexo') ?></h6>
            <p><?= h($costagem->sexo) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Amostra') ?></h6>
            <p><?= $this->Number->format($costagem->n_amostra) ?></p>
            <h6 class="subheader"><?= __('Qtd Macho') ?></h6>
            <p><?= $this->Number->format($costagem->qtd_macho) ?></p>
            <h6 class="subheader"><?= __('Qtd Femea') ?></h6>
            <p><?= $this->Number->format($costagem->qtd_femea) ?></p>
        </div>
    </div>
</div>
