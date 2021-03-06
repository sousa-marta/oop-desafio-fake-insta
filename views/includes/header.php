<?php

  // session_start();
  //Recupera objeto com informações do usuário:
  $user = isset($_SESSION["user"]) ? $_SESSION["user"] : [];

?>


<!-- Cabeçalho da Página -->
<header>
  <nav class="navbar justify-content-between">
    <a class="navbar-brand" href="/oop-desafio-fake-insta/posts">
      <img width="90" src="views/img/logo.png" alt="" srcset="">Instagram
    </a>
    <div>
      <?php if(isset($user) && $user != []){ ?>
        Olá, <?= $user->firstName ?>
        <a href="/oop-desafio-fake-insta/logout">Sair</a>
      <?php }else { ?>
        <a class="btn btn-signup" href="/oop-desafio-fake-insta/sign-up">Cadastre-se</a>
        <a class="btn btn-signup" href="/oop-desafio-fake-insta/sign-in">Login</a>
      <?php } ?>

      

      <!-- Para utilizar com modal -->
      <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#login-modal" href="#">Login</button> -->

    </div>
  </nav>
</header>

<!-- Modal de Login -->

<!-- 
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="login-modal">Faça login na sua conta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">
        <form action="/oop-desafio-fake-insta/login-user" method="post">
          <div class="form-group">
            <label for="username">Nome de Usuário</label>
            <input type="email" class="form-control"  name="username" id="username" placeholder="Insira seu nome de usuário" required>
          </div>
          <div class="form-group">
            <label for="userPass">Senha</label>
            <input type="password" class="form-control" id="userPass" name="userPass" placeholder="Insira sua senha cadastrada" required>
          </div>
        </form>
      </main>
      <footer class="modal-footer modal-footer-bg-color">
        <button type="submit" class="btn btn-primary col-lg-12">Enviar</button>
      </footer>
    </dialog>
  </div>
</div> 
-->