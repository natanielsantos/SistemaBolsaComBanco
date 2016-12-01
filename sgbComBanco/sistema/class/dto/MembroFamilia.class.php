<?php

class MembroFamilia {

    var $idMembroFamilia;
    var $memNome;
    var $memCpf;
    var $memRg;
    var $canEmail;
    var $canRendaBruta1;
    var $canRendaBruta2;
    var $canRendaBruta3;
    var $candidatoIdCandidato;

    function getIdMembroFamilia() {
        return $this->idMembroFamilia;
    }

    function getMemNome() {
        return $this->memNome;
    }

    function getMemCpf() {
        return $this->memCpf;
    }

    function getMemRg() {
        return $this->memRg;
    }

    function getCanEmail() {
        return $this->canEmail;
    }

    function getCanRendaBruta1() {
        return $this->canRendaBruta1;
    }

    function getCanRendaBruta2() {
        return $this->canRendaBruta2;
    }

    function getCanRendaBruta3() {
        return $this->canRendaBruta3;
    }

    function getCandidatoIdCandidato() {
        return $this->candidatoIdCandidato;
    }

    function setIdMembroFamilia($idMembroFamilia) {
        $this->idMembroFamilia = $idMembroFamilia;
    }

    function setMemNome($memNome) {
        $this->memNome = $memNome;
    }

    function setMemCpf($memCpf) {
        $this->memCpf = $memCpf;
    }

    function setMemRg($memRg) {
        $this->memRg = $memRg;
    }

    function setCanEmail($canEmail) {
        $this->canEmail = $canEmail;
    }

    function setCanRendaBruta1($canRendaBruta1) {
        $this->canRendaBruta1 = $canRendaBruta1;
    }

    function setCanRendaBruta2($canRendaBruta2) {
        $this->canRendaBruta2 = $canRendaBruta2;
    }

    function setCanRendaBruta3($canRendaBruta3) {
        $this->canRendaBruta3 = $canRendaBruta3;
    }

    function setCandidatoIdCandidato($candidatoIdCandidato) {
        $this->candidatoIdCandidato = $candidatoIdCandidato;
    }


}

?>