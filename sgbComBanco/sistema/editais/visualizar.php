<?php 
	require_once('funcoes.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Edital <?php echo $edital->getEdiTitulo(); ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Titulo:</dt>
	<dd><?php echo $edital->getEdiTitulo(); ?></dd>

	<dt>Descrição:</dt>
	<dd><?php echo $edital->getEdiDescricao(); ?></dd>

	<dt>Data Inicial:</dt>
	<dd><?php echo $edital->getEdiDataInicial(); ?></dd>
        
        <dt>Data Final:</dt>
	<dd><?php echo $edital->getEdiDataFinal(); ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edite.php?id=<?php echo $edital->getIdEdital(); ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>