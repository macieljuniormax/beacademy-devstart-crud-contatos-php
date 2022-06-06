<h1>Editar Contato</h1>
<hr>

<form action="" method="POST">
  <label for="nome">Nome</label>
  <input  value="<?php echo $dados[0]; ?>" class="form-control mb-3" type="text" placeholder="Digite seu nome" id="nome" name="nome"> 

  <label for="email">E-mail</label>
  <input  value="<?php echo $dados[1]; ?>" class="form-control mb-3" type="email" placeholder="Digite seu e-mail" id="email" name="email"> 
  
  <label for="telefone">Telefone</label>
  <input  value="<?php echo $dados[2]; ?>" class="form-control mb-3" type="tel" placeholder="Digite seu telefone" id="telefone" name="telefone"> 

  <button class="btn btn-primary">Enviar</button>
</form>