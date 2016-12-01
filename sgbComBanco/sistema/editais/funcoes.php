<?php

require_once('../config.php');
require_once('../crud.php');
$editais = null;
$edital = null;

/**
 *  Listagem de editais
 */
function index() {
    global $editais;
    $editais = DAOFactory::getEditalDAO()->queryAll();
}

function add() {
    if (!empty($_POST['titulo'])) {


        $titulo = $_POST['titulo'];
        $desc = $_POST['descricao'];
        $dti = $_POST['dataInicial'];
        $dtf = $_POST['dataFinal'];

        $edital = new Edital();

        $edital->setEdiTitulo($titulo);
        $edital->setEdiDescricao($desc);
        $edital->setEdiDataInicial($dti);
        $edital->setEdiDataFinal($dtf);

        DAOFactory::getEditalDAO()->insert($edital);

        header('location: index.php');
    }
}

function edit() {

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        if (isset($_POST['titulo'])) {

            $id = $_GET['id'];
            $titulo = $_POST['titulo'];
            $desc = $_POST['descricao'];
            $dti = $_POST['dataInicial'];
            $dtf = $_POST['dataFinal'];

            global $edital;
            $edital = new Edital();

            $edital->setEdiTitulo($titulo);
            $edital->setEdiDescricao($desc);
            $edital->setEdiDataInicial($dti);
            $edital->setEdiDataFinal($dtf);

            DAOFactory::getEditalDAO()->update($edital);

            header('location: index.php');
        } else {

            global $edital;
            $edital = DAOFactory::getEditalDAO()->load($id);
        }
    } else {
        header('location: index.php');
    }

    if ($id != null) {

        $id = $_GET['id'];
        $titulo = $_POST['titulo'];
        $desc = $_POST['descricao'];
        $dti = $_POST['dataInicial'];
        $dtf = $_POST['dataFinal'];

        global $edital;
        $edital = new Edital();

        $edital->setEdiTitulo($titulo);
        $edital->setEdiDescricao($desc);
        $edital->setEdiDataInicial($dti);
        $edital->setEdiDataFinal($dtf);

        DAOFactory::getEditalDAO()->update($edital);

        header('location: index.php');
    }
}

function view($id = null) {
    global $edital;
    $edital = DAOFactory::getEditalDAO()->load($id);
}

function delete($id = null) {
    global $edital;
    $edital = DAOFactory::getEditalDAO()->delete($id);
    header('location: index.php');
}
