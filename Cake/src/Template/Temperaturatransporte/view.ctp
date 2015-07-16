<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar Temperatura e transporte'), ['action' => 'edit', $temperaturatransporte->temperaturatransporteid]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $temperaturatransporte->temperaturatransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $temperaturatransporte->temperaturatransporteid)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Temperatura e transporte'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Temperatura e transporte'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="temperaturatransporte view large-10 medium-9 columns">
    <h2><?= h($temperaturatransporte->temperaturatransporteid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Temperaturatransporteid') ?></h6>
            <p><?= h($temperaturatransporte->temperaturatransporteid) ?></p>
            <h6 class="subheader"><?= __('Fk Lotetransporte') ?></h6>
            <p><?= h($temperaturatransporte->fk_lotetransporte) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Leitura') ?></h6>
            <p><?= $this->Number->format($temperaturatransporte->n_leitura) ?></p>
            <h6 class="subheader"><?= __('Valor Leitura') ?></h6>
            <p><?= $this->Number->format($temperaturatransporte->valor_leitura) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Leitura') ?></h6>
            <?= $this->Text->autoParagraph(h($temperaturatransporte->hora_leitura)); ?>

        </div>
    </div>
</div>
