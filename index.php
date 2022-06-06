<?php

  $url = explode("?", $_SERVER["REQUEST_URI"]) ;

  include "telas/head.php";
  include "telas/menu.php";
  include "telas/footer.php";
  include "acoes.php";

  match ($url[0]) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    '/editar' => editar(),
    '/excluir' => excluir(),
    default => erro404(),
  }
?>