<?php
    require_once('funcoes.php');
    index();
    
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Editais</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="insere.php"><i class="fa fa-plus"></i> Novo Edital</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Titulo</th>
		<th>Descrição</th>
		<th>Data Inicial</th>
		<th>Data Final</th>
	</tr>
</thead>
<tbody>
<?php if ($editais != null) : ?>
<?php foreach ($editais as $edital) : ?>
	<tr>
		<td><?php echo $edital->idEdital; ?></td>
		<td><?php echo $edital->ediTitulo; ?></td>
		<td><?php echo $edital->ediDescricao; ?></td>
                <td><?php echo $edital->ediDataInicial; ?></td>
                <td><?php echo $edital->ediDataFinal; ?></td>
		<td class="actions text-right">
			<a href="visualizar.php?id=<?php echo $edital->idEdital; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edite.php?id=<?php echo $edital->idEdital; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $edital->idEdital; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>