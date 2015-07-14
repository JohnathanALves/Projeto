<div class="producaoovos index large-10 medium-9 columns">
  <div class="message">
    Codigo do Lote: <?php echo $codigo_lote ?> 
    </div>
  
    <table cellpadding="0" cellspacing="0">
    <thead>
       <tr>
            <!--<th><?= $this->Paginator->sort('codigo_lote') ?></th> 
            <th><?= $this->Paginator->sort('fk_lotegaiolas') ?></th> -->
            <th><?= $this->Paginator->sort('qtd_gaiolas') ?></th>
            <th><?= $this->Paginator->sort('data_alimentacao_sangue') ?></th>
            <th><?= $this->Paginator->sort('data_coleta') ?></th>
            <th><?= $this->Paginator->sort('peso_ovos') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($producaoovos as $list): ?>
        <tr>
           <!-- <td><?= h($producaoovo->producaoovosid) ?></td>
            <td><?= h($producaoovo->fk_lotegaiolas) ?></td> -->
            <td><?= $this->Number->format($list->qtd_gaiolas) ?></td>
            <td><?= h($list->data_alimentacao_sangue) ?></td>
            <td><?= h($list->data_coleta) ?></td>
            <td><?= $this->Number->format($list->peso_ovos) ?></td>
            <td class="actions">
               <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $producaoovo->producaoovosid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producaoovo->producaoovosid]) ?> -->
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $list->producaoovosid], ['confirm' => __('Are you sure you want to delete # {0}?', $list->producaoovosid)]) ?>
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

    <?= $this->Form->create($producaoovo); ?>
    <fieldset>
        <legend><?= __('Adicionar producao de ovos') ?></legend>
        <?php
            //echo $this->Form->input('fk_lotegaiolas');
            echo $this->Form->input('qtd_gaiolas');
            echo $this->Form->input('data_alimentacao_sangue', array('empty' => true, 'default' => ''));
            echo $this->Form->input('data_coleta', array('empty' => true, 'default' => ''));
            echo $this->Form->input('peso_ovos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Html->link(
                                'Voltar',
                                ['controller' => 'lotegaiolas'],
                                ['class' => 'button']
                            ); ?>
    <?= $this->Form->end() ?>
</div>