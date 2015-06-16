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
 * @author        Leonardo Cavalcante, Gustavo Marques
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Gestão Moscamed';
?>
<!DOCTYPE html>
<html>
<!--<head>
  <title>Gestão Moscamed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/stylelogin.css">
</head> -->
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?> 
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('stylelogin.css') ?>
    
    <?= $this->Html->script('jquery-2.1.4.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body id="telalogin">
    <div id="container">
        <div class="page-header"><?= $this->Html->image('mosca.png', array(
        'class' => 'img-thumbnail',
        'width' => 304,
        'height' => 236,
        'comments' => false
    )) ?> 
  </div>
        <div class="col-sm-4"></div>
              <div class="col-sm-4">
                  <div class="panel panel-success" id="panel">
                        <div class="panel-body">
                          <?= $this->Flash->render() ?>
                        <?php echo $this->fetch('content'); ?>
                        </div>
                  </div>
              </div>
              <div class="col-sm-4"></div>
          </div>
        </div>
        <div class="row"></div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="colum-sm-3"></div>
                <div class="colum-sm-6">
                    <p id="textfooter">Desenvolvido pela turma do Engenharia de Software II - UNIVASF - 2015.1</p>
                </div>
                <div class="colum-sm-3"></div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/script.js"></script>
</body> 
</html>
