<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Lote de gaiola'), ['action' => 'add_dependant']) ?></li>
    </ul>
</div>
<div class="lotegaiolas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('lotegaiolasid') ?></th>-->
            <th><?= $this->Paginator->sort('codigo_lote') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($lotegaiolas as $lotegaiola): ?>
        <tr>
            <!--<td><?= h($lotegaiola->lotegaiolasid) ?></td>-->
            <td><?= h($lotegaiola->codigo_lote) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Nova Produção Ovos'), ['controller' => 'producaoovos','action' => 'list_add', $lotegaiola->lotegaiolasid,$lotegaiola->codigo_lote]) ?> <br>
                <?= $this->Html->link(__('Mortalidade Pupas'), ['controller' => 'mortalidadespupas','action' => 'list_add', $lotegaiola->lotegaiolasid,$lotegaiola->codigo_lote]) ?> <br>
                <?= $this->Html->link(__('Visualizar'), ['controller'=>'lotegaiolas','action' => 'view_all_info', $lotegaiola->lotegaiolasid,$lotegaiola->codigo_lote]) ?>  <!-Tirar segundo argumento->
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $lotegaiola->lotegaiolasid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $lotegaiola->lotegaiolasid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotegaiola->lotegaiolasid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
