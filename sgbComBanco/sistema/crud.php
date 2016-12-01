<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/CandidatoDAO.class.php');
	require_once('class/dto/Candidato.class.php');
	require_once('class/mysql/CandidatoMySqlDAO.class.php');
	require_once('class/mysql/ext/CandidatoMySqlExtDAO.class.php');
	require_once('class/dao/EditalDAO.class.php');
	require_once('class/dto/Edital.class.php');
	require_once('class/mysql/EditalMySqlDAO.class.php');
	require_once('class/mysql/ext/EditalMySqlExtDAO.class.php');
	require_once('class/dao/MembroFamiliaDAO.class.php');
	require_once('class/dto/MembroFamilia.class.php');
	require_once('class/mysql/MembroFamiliaMySqlDAO.class.php');
	require_once('class/mysql/ext/MembroFamiliaMySqlExtDAO.class.php');

?>