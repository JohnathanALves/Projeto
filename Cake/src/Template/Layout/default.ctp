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
    <header>
        <div class="header-title">
            <span> Moscamed Brasil </span>
        </div>
        <div class="header-help">
            <span><?= $this->Html->link(__('Home'), ['controller' => 'pages','action' => 'index']) ?></span>
             <span><?= $this->Html->link(__('Sair'), ['controller' => 'loginmoscamed','action' => 'logout']) ?></span>
             <span><?= $this->Html->image("config.png", [ 'url' => ['controller' => 'loginmoscamed', 'action' => 'index']]); ?></span>
        </div>
<<<<<<< HEAD
        <div class="header-title">
            <span><?= $this->Html->link(__('Home'), ['controller' => 'pages','action' => 'index']) ?></span>
        </div>
        
=======
>>>>>>> 4a51ec7b87d1e94422bf96a6dba50354037cbc36
        <!--
        <div class="header-help">
            <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
            <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
        </div>
        -->
    </header>
    <div id="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>
