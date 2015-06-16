<?php $this->layout = 'loginMoscamed'; ?>
<div id="content">
  <form role="form" method="post" onsubmit="return verifica()">
    <div class="form-group">
      <label for="email" >Email:</label>
      <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Digite o e-mail...">
        <div class="alert alert-danger" id="alertlogin" hidden>
          <a href="#" class="close" id="hidelogin" aria-label="close">&times</a>
        Campo obrigatório!
      </div>
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control input-sm" id="senha" name="senha" placeholder="Digite a senha...">
      <div class="alert alert-danger" id="alertsenha" hidden>
        <a href="#" class="close" id="hidesenha" aria-label="close">&times</a>
      Campo obrigatório!
    </div>
    </div>
    <div class="checkbox">              
      <label><input type="checkbox"> Lembrar</label>
    </div>
    <input type="submit" class="btn btn-success btn-block" value="Entrar"></input>
  </form>
<div id="content">