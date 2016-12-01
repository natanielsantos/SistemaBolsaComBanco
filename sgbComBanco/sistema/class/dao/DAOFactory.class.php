<?php

class DAOFactory {

    public static function getCandidatoDAO() {
        return new CandidatoMySqlExtDAO();
    }

    public static function getEditalDAO() {
        return new EditalMySqlExtDAO();
    }

    public static function getMembroFamiliaDAO() {
        return new MembroFamiliaMySqlExtDAO();
    }

}

?>