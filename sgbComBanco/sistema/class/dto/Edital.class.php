<?php

class Edital {

    var $idEdital;
    var $ediTitulo;
    var $ediDescricao;
    var $ediDataInicial;
    var $ediDataFinal;
    var $ediEstado;

    function getEdiTitulo() {
        return $this->ediTitulo;
    }

    function getEdiDescricao() {
        return $this->ediDescricao;
    }

    function getEdiDataInicial() {
        return $this->ediDataInicial;
    }

    function getEdiDataFinal() {
        return $this->ediDataFinal;
    }

    function getEdiEstado() {
        return $this->ediEstado;
    }

    function setEdiTitulo($ediTitulo) {
        $this->ediTitulo = $ediTitulo;
    }

    function setEdiDescricao($ediDescricao) {
        $this->ediDescricao = $ediDescricao;
    }

    function setEdiDataInicial($ediDataInicial) {
        $this->ediDataInicial = $ediDataInicial;
    }

    function setEdiDataFinal($ediDataFinal) {
        $this->ediDataFinal = $ediDataFinal;
    }

    function setEdiEstado($ediEstado) {
        $this->ediEstado = $ediEstado;
    }

    function setIdEdital($idEdital) {
        $this->idEdital = $idEdital;
    }

    function getIdEdital() {
        return $this->idEdital;
    }

}

?>