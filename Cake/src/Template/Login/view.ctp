<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Login'), ['action' => 'edit', $login->usuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Login'), ['action' => 'delete', $login->usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $login->usuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Login'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Login'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="login view large-10 medium-9 columns">
    <h2><?= h($login->usuario) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Usuario') ?></h6>
            <p><?= h($login->usuario) ?></p>
            <h6 class="subheader"><?= __('Senha') ?></h6>
            <p><?= h($login->senha) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($login->email) ?></p>
        </div>
    </div>
</div>
