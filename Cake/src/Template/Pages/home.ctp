<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Moscamed Brasil';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
   
    <div id="container">

        <div id="content">

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Controle Transporte') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'controletransporte','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'controletransporte','action' => 'index']) ?> </li>
                </ul>
            </div>

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Bairro') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'bairro','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'bairro','action' => 'index']) ?> </li>
                </ul>
            </div>

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Controle Liberação') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'Controleliberacao','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'Controleliberacao','action' => 'index']) ?> </li>
                </ul>
            </div>

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Separação/<br>Liberação') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'separacaoliberacao','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'separacaoliberacao','action' => 'index']) ?> </li>
                </ul>
            </div>

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Subdivisao') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'subdivisao','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'subdivisao','action' => 'index']) ?> </li>
                </ul>
            </div>

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Temperatura Transporte') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'temperaturatransporte','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'temperaturatransporte','action' => 'index']) ?> </li>
                </ul>
            </div>

             <div class="actions columns large-2 medium-3">
                <h3><?= __('Lote Transporte') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'lotetransporte','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'lotetransporte','action' => 'index']) ?> </li>
                </ul>
            </div>

        </div>

        <footer>
        </footer>
    </div>
</body>
</html>
