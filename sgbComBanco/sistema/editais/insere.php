<?php 
  require_once('funcoes.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Edital</h2>

<form action="insere.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Titulo</label>
      <input type="text" class="form-control" name="titulo">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Descrição</label>
      <input type="text" class="form-control" name="descricao">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data Inicial</label>
      <input type="text" class="form-control" name="datainicial">
    </div>
      <div class="form-group col-md-2">
      <label for="campo3">Data Final</label>
      <input type="text" class="form-control" name="datafinal">
    </div>
  </div>
   
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>