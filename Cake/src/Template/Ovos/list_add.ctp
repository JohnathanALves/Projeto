<div class="ovos index large-10 medium-9 columns">
    <div class="message">
    Número do bequer: <?php echo $n_bequer ?>
    </div>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('ovosid') ?></th> -->
            <!--<th><?= $this->Paginator->sort('fk_bequer') ?></th>-->
            <th><?= $this->Paginator->sort('data_origem_dos_ovos') ?></th>
            <th><?= $this->Paginator->sort('gramas_ovos_utilizados') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ListOvos as $list): ?>
        <tr>
            <!--<td><?= h($list->ovosid) ?></td>-->
            <!--<td><?= h($list->fk_bequer) ?></td>-->
            <td><?= h($list->data_origem_dos_ovos) ?></td>
            <td><?= $this->Number->format($list->gramas_ovos_utilizados) ?></td>
            <td class="actions">
                <!--<?= $this->Html->link(__('View'), ['action' => 'view', $ovo->ovosid]) ?>-->
                <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $ovo->ovosid]) ?>-->
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->ovosid,$list->fk_bequer,$n_bequer], ['confirm' => __('Tem certeza que deseja apagar este registro?')]) ?>
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

    <?= $this->Form->create($ovo); ?>
    <fieldset>
        <legend><?= __('Adicionar ovos') ?></legend>
        <?php
            //echo $this->Form->text('ovosid');
            $this->Form->templates([
                'dateWidget' => '<div class="input time">{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}</div>'
            ]);
            echo $this->Form->input('data_origem_dos_ovos');
            echo $this->Form->input('gramas_ovos_utilizados');
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