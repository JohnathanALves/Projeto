<div class="actions columns large-2 medium-3">
    <h3><?= __('Opções') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $login->usuario],
                ['confirm' => __('Você está certo disto? # {0}?', $login->usuario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Login(s)'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="login form large-10 medium-9 columns">
    <?= $this->Form->create($login); ?>
    <fieldset>
        <legend><?= __('Editar Usuário') ?></legend>
        <?php
            echo $this->Form->password('senha');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submeter')) ?>
    <?= $this->Form->end() ?>
</div>
