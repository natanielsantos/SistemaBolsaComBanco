<?php

class CandidatoMySqlDAO implements CandidatoDAO {

    public function load($idCandidato, $editalIdEdital) {
        $sql = 'SELECT * FROM candidato WHERE idCandidato = ?  AND edital_idEdital = ? ';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idCandidato);
        $sqlQuery->setNumber($editalIdEdital);

        return $this->getRow($sqlQuery);
    }

    public function queryAll() {
        $sql = 'SELECT * FROM candidato';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM candidato ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function delete($idCandidato, $editalIdEdital) {
        $sql = 'DELETE FROM candidato WHERE idCandidato = ?  AND edital_idEdital = ? ';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idCandidato);
        $sqlQuery->setNumber($editalIdEdital);

        return $this->executeUpdate($sqlQuery);
    }

    public function insert($candidato) {
        $sql = 'INSERT INTO candidato (idMatricula, canNome, canCpf, canRg, canCidade, canBairro, canLogradouro, canNumero, canEmail, canRendaBruta1, canRendaBruta2, canRendaBruta3, idCandidato, edital_idEdital) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($candidato->idMatricula);
        $sqlQuery->set($candidato->canNome);
        $sqlQuery->set($candidato->canCpf);
        $sqlQuery->set($candidato->canRg);
        $sqlQuery->set($candidato->canCidade);
        $sqlQuery->set($candidato->canBairro);
        $sqlQuery->set($candidato->canLogradouro);
        $sqlQuery->setNumber($candidato->canNumero);
        $sqlQuery->set($candidato->canEmail);
        $sqlQuery->set($candidato->canRendaBruta1);
        $sqlQuery->set($candidato->canRendaBruta2);
        $sqlQuery->set($candidato->canRendaBruta3);


        $sqlQuery->setNumber($candidato->idCandidato);

        $sqlQuery->setNumber($candidato->editalIdEdital);

        $this->executeInsert($sqlQuery);
        //$candidato->id = $id;
        //return $id;
    }

    public function update($candidato) {
        $sql = 'UPDATE candidato SET idMatricula = ?, canNome = ?, canCpf = ?, canRg = ?, canCidade = ?, canBairro = ?, canLogradouro = ?, canNumero = ?, canEmail = ?, canRendaBruta1 = ?, canRendaBruta2 = ?, canRendaBruta3 = ? WHERE idCandidato = ?  AND edital_idEdital = ? ';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($candidato->idMatricula);
        $sqlQuery->set($candidato->canNome);
        $sqlQuery->set($candidato->canCpf);
        $sqlQuery->set($candidato->canRg);
        $sqlQuery->set($candidato->canCidade);
        $sqlQuery->set($candidato->canBairro);
        $sqlQuery->set($candidato->canLogradouro);
        $sqlQuery->setNumber($candidato->canNumero);
        $sqlQuery->set($candidato->canEmail);
        $sqlQuery->set($candidato->canRendaBruta1);
        $sqlQuery->set($candidato->canRendaBruta2);
        $sqlQuery->set($candidato->canRendaBruta3);


        $sqlQuery->setNumber($candidato->idCandidato);

        $sqlQuery->setNumber($candidato->editalIdEdital);

        return $this->executeUpdate($sqlQuery);
    }

    public function clean() {
        $sql = 'DELETE FROM candidato';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByIdMatricula($value) {
        $sql = 'SELECT * FROM candidato WHERE idMatricula = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanNome($value) {
        $sql = 'SELECT * FROM candidato WHERE canNome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanCpf($value) {
        $sql = 'SELECT * FROM candidato WHERE canCpf = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanRg($value) {
        $sql = 'SELECT * FROM candidato WHERE canRg = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanCidade($value) {
        $sql = 'SELECT * FROM candidato WHERE canCidade = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanBairro($value) {
        $sql = 'SELECT * FROM candidato WHERE canBairro = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanLogradouro($value) {
        $sql = 'SELECT * FROM candidato WHERE canLogradouro = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanNumero($value) {
        $sql = 'SELECT * FROM candidato WHERE canNumero = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanEmail($value) {
        $sql = 'SELECT * FROM candidato WHERE canEmail = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanRendaBruta1($value) {
        $sql = 'SELECT * FROM candidato WHERE canRendaBruta1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanRendaBruta2($value) {
        $sql = 'SELECT * FROM candidato WHERE canRendaBruta2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanRendaBruta3($value) {
        $sql = 'SELECT * FROM candidato WHERE canRendaBruta3 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByIdMatricula($value) {
        $sql = 'DELETE FROM candidato WHERE idMatricula = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanNome($value) {
        $sql = 'DELETE FROM candidato WHERE canNome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanCpf($value) {
        $sql = 'DELETE FROM candidato WHERE canCpf = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanRg($value) {
        $sql = 'DELETE FROM candidato WHERE canRg = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanCidade($value) {
        $sql = 'DELETE FROM candidato WHERE canCidade = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanBairro($value) {
        $sql = 'DELETE FROM candidato WHERE canBairro = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanLogradouro($value) {
        $sql = 'DELETE FROM candidato WHERE canLogradouro = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanNumero($value) {
        $sql = 'DELETE FROM candidato WHERE canNumero = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanEmail($value) {
        $sql = 'DELETE FROM candidato WHERE canEmail = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanRendaBruta1($value) {
        $sql = 'DELETE FROM candidato WHERE canRendaBruta1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanRendaBruta2($value) {
        $sql = 'DELETE FROM candidato WHERE canRendaBruta2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanRendaBruta3($value) {
        $sql = 'DELETE FROM candidato WHERE canRendaBruta3 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    protected function readRow($row) {
        $candidato = new Candidato();

        $candidato->idCandidato = $row['idCandidato'];
        $candidato->idMatricula = $row['idMatricula'];
        $candidato->canNome = $row['canNome'];
        $candidato->canCpf = $row['canCpf'];
        $candidato->canRg = $row['canRg'];
        $candidato->canCidade = $row['canCidade'];
        $candidato->canBairro = $row['canBairro'];
        $candidato->canLogradouro = $row['canLogradouro'];
        $candidato->canNumero = $row['canNumero'];
        $candidato->canEmail = $row['canEmail'];
        $candidato->canRendaBruta1 = $row['canRendaBruta1'];
        $candidato->canRendaBruta2 = $row['canRendaBruta2'];
        $candidato->canRendaBruta3 = $row['canRendaBruta3'];
        $candidato->editalIdEdital = $row['edital_idEdital'];

        return $candidato;
    }

    protected function getList($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        $ret = array();
        for ($i = 0; $i < count($tab); $i++) {
            $ret[$i] = $this->readRow($tab[$i]);
        }
        return $ret;
    }

    protected function getRow($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        if (count($tab) == 0) {
            return null;
        }
        return $this->readRow($tab[0]);
    }

    protected function execute($sqlQuery) {
        return QueryExecutor::execute($sqlQuery);
    }

    protected function executeUpdate($sqlQuery) {
        return QueryExecutor::executeUpdate($sqlQuery);
    }

    protected function querySingleResult($sqlQuery) {
        return QueryExecutor::queryForString($sqlQuery);
    }

    protected function executeInsert($sqlQuery) {
        return QueryExecutor::executeInsert($sqlQuery);
    }

}

?>