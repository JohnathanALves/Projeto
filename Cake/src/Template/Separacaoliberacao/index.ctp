<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="separacaoliberacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Separa/libera ID') ?></th>
            <th><?= $this->Paginator->sort('Liberação') ?></th>
            <th><?= $this->Paginator->sort('nº separação') ?></th>
            <th><?= $this->Paginator->sort('Data drenagem_pré') ?></th>
            <th><?= $this->Paginator->sort('Data controle liberação_pós') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($separacaoliberacao as $separacaoliberacao): ?>
        <tr>
            <td><?= h($separacaoliberacao->separacaoliberacaoid) ?></td>
            <td><?= h($separacaoliberacao->fk_liberacao) ?></td>
            <td><?= $this->Number->format($separacaoliberacao->n_separacao) ?></td>
            <td><?= h($separacaoliberacao->data_drenagem_pre) ?></td>
            <td><?= h($separacaoliberacao->data_controle_liberacao_pos) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $separacaoliberacao->separacaoliberacaoid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $separacaoliberacao->separacaoliberacaoid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $separacaoliberacao->separacaoliberacaoid], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $separacaoliberacao->separacaoliberacaoid)]) ?>
            </td>
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
