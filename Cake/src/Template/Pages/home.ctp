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
                <h3><?= __('Liberação') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'liberacao','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'liberacao','action' => 'index']) ?> </li>
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
            <div class="actions columns large-2 medium-3">
                <h3><?= __('Separações') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'separacoes','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'separacoes','action' => 'index']) ?> </li>
                </ul>
            </div>
            <div class="actions columns large-2 medium-3">
                <h3><?= __('Contagem') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'costagem','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'costagem','action' => 'index']) ?> </li>
                </ul>
            </div>
            <div class="actions columns large-2 medium-3">
                <h3><?= __('Controle') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'controle','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'controle','action' => 'index']) ?> </li>
                </ul>
            </div>
            <div class="actions columns large-2 medium-3">
                <h3><?= __('Tetraciclina') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'tetraciclina','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'tetraciclina','action' => 'index']) ?> </li>
                </ul>
            </div>
            <div class="actions columns large-2 medium-3">
                <h3><?= __('Celula') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'celula','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'celula','action' => 'index']) ?> </li>
                </ul>
            </div>
            <div class="actions columns large-2 medium-3">
                <h3><?= __('Amostra/<br>Repasse') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'amostrarepasse','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'amostrarepasse','action' => 'index']) ?> </li>
                </ul>
            </div>
            
            <div class="actions columns large-2 medium-3">
                <h3><?= __('Analise Florescencia') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'analiseflorescencia','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'analiseflorescencia','action' => 'index']) ?> </li>
                </ul>
            </div>

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Tamanho cefalotorax') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'tamanhocefalotorax','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'tamanhocefalotorax','action' => 'index']) ?> </li>
                </ul>
            </div>

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Gaiola') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'gaiola','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'gaiola','action' => 'index']) ?> </li>
                </ul>
            </div>

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Lote gaiolas') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'lotegaiolas','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'lotegaiolas','action' => 'index']) ?> </li>
                </ul>
            </div>

           <!-- <div class="actions columns large-2 medium-3">
                <h3><?= __('Mortalidade pupas') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'mortalidadespupas','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'mortalidadespupas','action' => 'index']) ?> </li>
                </ul>
            </div>

            <div class="actions columns large-2 medium-3">
                <h3><?= __('Produção de ovos') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'producaoovos','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'producaoovos','action' => 'index']) ?> </li>
                </ul>
            </div>  -->
                  
            <div class="actions columns large-2 medium-3">
                <h3><?= __('Montagem') ?></h3>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'montagem','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'montagem','action' => 'index']) ?> </li>
                </ul>
                <h5><?= __('Lote bandejas') ?></h5>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'lotebandejas','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar'), ['controller' => 'lotebandejas','action' => 'index']) ?> </li>
                </ul>
                <h5><?= __('Bequer') ?></h5>
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Novo formulário'), ['controller' => 'bequer','action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('Listar formulários'), ['controller' => 'bequer','action' => 'index']) ?> </li>
                </ul>
            </div>

        <footer>
        </footer>
    </div>
</body>
</html>
<html>


