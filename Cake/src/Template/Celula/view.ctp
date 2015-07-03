<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Celula'), ['action' => 'edit', $celula->celulaid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Celula'), ['action' => 'delete', $celula->celulaid], ['confirm' => __('Are you sure you want to delete # {0}?', $celula->celulaid)]) ?> </li>
        <li><?= $this->Html->link(__('List Celula'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Celula'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="celula view large-10 medium-9 columns">
    <h2><?= h($celula->celulaid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Celulaid') ?></h6>
            <p><?= h($celula->celulaid) ?></p>
            <h6 class="subheader"><?= __('Fk Controletransporte') ?></h6>
            <p><?= h($celula->fk_controletransporte) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Celula') ?></h6>
            <p><?= $this->Number->format($celula->n_celula) ?></p>
            <h6 class="subheader"><?= __('Qtd Pupas Mortas') ?></h6>
            <p><?= $this->Number->format($celula->qtd_pupas_mortas) ?></p>
            <h6 class="subheader"><?= __('Qtd Adultos Emergidos') ?></h6>
            <p><?= $this->Number->format($celula->qtd_adultos_emergidos) ?></p>
        </div>
    </div>
</div>
