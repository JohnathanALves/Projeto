<div class="actions columns large-2 medium-3">
    <h3><?= __('Ir para') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo formulário de célula'), ['action' => 'list_add', $controle_transporte_id, $lote_id]) ?></li>
</div>
<div class="celula index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!-- <th><?= $this->Paginator->sort('celulaid') ?></th> -->
            <!-- <th><?= $this->Paginator->sort('fk_controletransporte') ?></th> -->
            <th><?= $this->Paginator->sort('n_celula', 'Nº da célula') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupas_mortas', 'Quantidade de pupas mortas') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos_emergidos', 'Quantidade de adultos emergidos') ?></th>
            <!-- <th class="actions"><?= __('Opções') ?></th> -->
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_celula as $list): ?>
        <tr>
            <td><?= $this->Number->format($list->n_celula) ?></td>
            <td><?= $this->Number->format($list->qtd_pupas_mortas) ?></td>
            <td><?= $this->Number->format($list->qtd_adultos_emergidos) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>