<div class="alimentacao index large-10 medium-9 columns">
    <div class="message">
    Número do lote: <?php echo $n_bandeja ?>
    </div>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('alimentacaoid') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_lotebandejas') ?></th>-->
            <th><?= $this->Paginator->sort('dia') ?></th>
            <th><?= $this->Paginator->sort('variacao') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ListAlimentacao as $list): ?>
        <tr>
            <!--<td><?= h($list->alimentacaoid) ?></td>-->
            <!--<td><?= h($list->fk_lotebandejas) ?></td>-->
            <td><?= h($list->dia) ?></td>
            <td><?= $this->Number->format($list->variacao) ?></td>
            <td class="actions">
               <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $list->alimentacaoid]) ?>-->
               <!-- <?= $this->Html->link(__('Edit'), ['action' => 'edit', $list->alimentacaoid]) ?>-->
               <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->alimentacaoid,$list->fk_lotebandejas,$n_bandeja], ['confirm' => __('Tem certeza que deseja apagar este registro?')]) ?>
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

    <?= $this->Form->create($alimentacao); ?>
    <fieldset>
        <legend><?= __('Adicionar Alimentação') ?></legend>
        <?php
            $this->Form->templates([
                'dateWidget' => '<div class="input time">{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}</div>'
            ]);
            //echo $this->Form->input('fk_lotebandejas');
            echo $this->Form->input('dia', ['label'=>'Data'], array('empty' => false, 'default' => ''));
            echo $this->Form->input('variacao', ['label'=>'Variação']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Html->link(
                                'Voltar',
                                ['controller' => 'lotebandejas'],
                                ['class' => 'button']
                            ); ?>
    <?= $this->Form->end() ?>
</div>