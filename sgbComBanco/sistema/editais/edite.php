<?php 
  require_once('funcoes.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar</h2>

<form action="edite.php?id=<?php echo $edital->getIdEdital();?>" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Titulo</label>
      <input type="text" class="form-control" name="titulo" value="<?php echo $edital->getEdiTitulo(); ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Descrição</label>
      <input type="text" class="form-control" name="descricao" <?php echo $edital->getEdiDescricao(); ?>>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data Inicial</label>
      <input type="text" class="form-control" name="datainicial" <?php echo $edital->getEdiDataInicial(); ?>>
    </div>
      <div class="form-group col-md-2">
      <label for="campo3">Data Final</label>
      <input type="text" class="form-control" name="datafinal" <?php echo $edital->getEdiDataFinal(); ?>>
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