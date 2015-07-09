<div class="aliquota index large-10 medium-9 columns">
    <div class="message">
    Número do bequer: <?php echo $n_bequer ?>
    </div>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('fk_bequer') ?></th> -->
            <th><?= $this->Paginator->sort('n_aliquota') ?></th>
            <th><?= $this->Paginator->sort('qtd_larvas') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ListAliquota as $list): ?>
        <tr>
            <!--<td><?= h($list->fk_bequer) ?></td>-->
            <td><?= $this->Number->format($list->n_aliquota) ?></td>
            <td><?= $this->Number->format($list->qtd_larvas) ?></td>
            <td class="actions">
                <!--<?= $this->Html->link(__('View'), ['action' => 'view', $list->aliquotaid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $list->aliquotaid]) ?>-->
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->aliquotaid,$list->fk_bequer,$n_bequer], ['confirm' => __('Tem certeza que deseja apagar este registro?')]) ?>
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

    <?= $this->Form->create($aliquotum); ?>
    <fieldset>
        <legend><?= __('Adicionar alíquota') ?></legend>
        <?php
            //echo $this->Form->text('fk_bequer',['disabled']);
            //echo $this->Form->input('n_bequer',['value'=> $n_bequer, 'disabled']);
            echo $this->Form->input('n_aliquota', ['label'=>'Numero da alíquota']);
            echo $this->Form->input('qtd_larvas', ['label'=>'Quantidade de larvas']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Html->link(
                                'Voltar',
                                ['controller' => 'bequer'],
                                ['class' => 'button']
                            ); ?>
    <?= $this->Form->end() ?>
</div>
