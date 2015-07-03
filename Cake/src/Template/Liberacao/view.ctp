<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Liberacao'), ['action' => 'edit', $liberacao->liberacaoid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Liberacao'), ['action' => 'delete', $liberacao->liberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $liberacao->liberacaoid)]) ?> </li>
        <li><?= $this->Html->link(__('List Liberacao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Liberacao'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="liberacao view large-10 medium-9 columns">
    <h2><?= h($liberacao->liberacaoid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Liberacaoid') ?></h6>
            <p><?= h($liberacao->liberacaoid) ?></p>
            <h6 class="subheader"><?= __('Fk Lotetransporte') ?></h6>
            <p><?= h($liberacao->fk_lotetransporte) ?></p>
            <h6 class="subheader"><?= __('Percepcao Da Presenca De Femeas') ?></h6>
            <p><?= h($liberacao->percepcao_da_presenca_de_femeas) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Tempo De Manipulacao') ?></h6>
            <p><?= $this->Number->format($liberacao->tempo_de_manipulacao) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Inicial') ?></h6>
            <?= $this->Text->autoParagraph(h($liberacao->hora_inicial)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Termino') ?></h6>
            <?= $this->Text->autoParagraph(h($liberacao->hora_termino)); ?>

        </div>
    </div>
</div>
