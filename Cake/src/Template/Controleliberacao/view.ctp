<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Controleliberacao'), ['action' => 'edit', $controleliberacao->controleliberacaoid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Controleliberacao'), ['action' => 'delete', $controleliberacao->controleliberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $controleliberacao->controleliberacaoid)]) ?> </li>
        <li><?= $this->Html->link(__('List Controleliberacao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Controleliberacao'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="controleliberacao view large-10 medium-9 columns">
    <h2><?= h($controleliberacao->controleliberacaoid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Controleliberacaoid') ?></h6>
            <p><?= h($controleliberacao->controleliberacaoid) ?></p>
            <h6 class="subheader"><?= __('Fk Separacaoliberacao') ?></h6>
            <p><?= h($controleliberacao->fk_separacaoliberacao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Rd11 Controle') ?></h6>
            <p><?= $this->Number->format($controleliberacao->n_rd11_controle) ?></p>
            <h6 class="subheader"><?= __('Qtd Pupas Vivas Pre') ?></h6>
            <p><?= $this->Number->format($controleliberacao->qtd_pupas_vivas_pre) ?></p>
            <h6 class="subheader"><?= __('Qtd Pupas Mortas Pre') ?></h6>
            <p><?= $this->Number->format($controleliberacao->qtd_pupas_mortas_pre) ?></p>
            <h6 class="subheader"><?= __('Qtd Adultos Vivos Pre') ?></h6>
            <p><?= $this->Number->format($controleliberacao->qtd_adultos_vivos_pre) ?></p>
            <h6 class="subheader"><?= __('Qtd Adultos Mortos Pre') ?></h6>
            <p><?= $this->Number->format($controleliberacao->qtd_adultos_mortos_pre) ?></p>
            <h6 class="subheader"><?= __('Qtd Pupas Vivas Pos') ?></h6>
            <p><?= $this->Number->format($controleliberacao->qtd_pupas_vivas_pos) ?></p>
            <h6 class="subheader"><?= __('Qtd Pupas Mortas Pos') ?></h6>
            <p><?= $this->Number->format($controleliberacao->qtd_pupas_mortas_pos) ?></p>
            <h6 class="subheader"><?= __('Qtd Adultos Vivos Pos') ?></h6>
            <p><?= $this->Number->format($controleliberacao->qtd_adultos_vivos_pos) ?></p>
            <h6 class="subheader"><?= __('Qtd Adultos Mortos Pos') ?></h6>
            <p><?= $this->Number->format($controleliberacao->qtd_adultos_mortos_pos) ?></p>
        </div>
    </div>
</div>
