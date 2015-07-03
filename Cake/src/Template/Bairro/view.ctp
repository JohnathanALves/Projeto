<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $bairro->bairroid]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $bairro->bairroid], ['confirm' => __('Are you sure you want to delete # {0}?', $bairro->bairroid)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bairro view large-10 medium-9 columns">
    <h2><?= h($bairro->bairroid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Bairro ID') ?></h6>
            <p><?= h($bairro->bairroid) ?></p>
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($bairro->nome) ?></p>
            <h6 class="subheader"><?= __('Fase') ?></h6>
            <p><?= h($bairro->fase) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qtd Real Rd11') ?></h6>
            <p><?= $this->Number->format($bairro->qtd_real_rd11) ?></p>
            <h6 class="subheader"><?= __('Liberação Semana') ?></h6>
            <p><?= $this->Number->format($bairro->liberacao_semana) ?></p>
            <h6 class="subheader"><?= __('População') ?></h6>
            <p><?= $this->Number->format($bairro->populacao) ?></p>
            <h6 class="subheader"><?= __('Alocação') ?></h6>
            <p><?= $this->Number->format($bairro->alocacao) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data') ?></h6>
            <p><?= h($bairro->data) ?></p>
        </div>
    </div>
</div>
