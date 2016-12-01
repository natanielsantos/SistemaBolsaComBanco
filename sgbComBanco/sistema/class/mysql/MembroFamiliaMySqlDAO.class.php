<?php

class MembroFamiliaMySqlDAO implements MembroFamiliaDAO {

    public function load($idMembroFamilia, $candidatoIdCandidato) {
        $sql = 'SELECT * FROM membro_familia WHERE idMembroFamilia = ?  AND candidato_idCandidato = ? ';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idMembroFamilia);
        $sqlQuery->setNumber($candidatoIdCandidato);

        return $this->getRow($sqlQuery);
    }

    public function queryAll() {
        $sql = 'SELECT * FROM membro_familia';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM membro_familia ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function delete($idMembroFamilia, $candidatoIdCandidato) {
        $sql = 'DELETE FROM membro_familia WHERE idMembroFamilia = ?  AND candidato_idCandidato = ? ';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idMembroFamilia);
        $sqlQuery->setNumber($candidatoIdCandidato);

        return $this->executeUpdate($sqlQuery);
    }

    public function insert($membroFamilia) {
        $sql = 'INSERT INTO membro_familia (memNome, memCpf, memRg, canEmail, canRendaBruta1, canRendaBruta2, canRendaBruta3, idMembroFamilia, candidato_idCandidato) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($membroFamilia->memNome);
        $sqlQuery->set($membroFamilia->memCpf);
        $sqlQuery->set($membroFamilia->memRg);
        $sqlQuery->set($membroFamilia->canEmail);
        $sqlQuery->set($membroFamilia->canRendaBruta1);
        $sqlQuery->set($membroFamilia->canRendaBruta2);
        $sqlQuery->set($membroFamilia->canRendaBruta3);


        $sqlQuery->setNumber($membroFamilia->idMembroFamilia);

        $sqlQuery->setNumber($membroFamilia->candidatoIdCandidato);

        $this->executeInsert($sqlQuery);
        //$membroFamilia->id = $id;
        //return $id;
    }

    public function update($membroFamilia) {
        $sql = 'UPDATE membro_familia SET memNome = ?, memCpf = ?, memRg = ?, canEmail = ?, canRendaBruta1 = ?, canRendaBruta2 = ?, canRendaBruta3 = ? WHERE idMembroFamilia = ?  AND candidato_idCandidato = ? ';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($membroFamilia->memNome);
        $sqlQuery->set($membroFamilia->memCpf);
        $sqlQuery->set($membroFamilia->memRg);
        $sqlQuery->set($membroFamilia->canEmail);
        $sqlQuery->set($membroFamilia->canRendaBruta1);
        $sqlQuery->set($membroFamilia->canRendaBruta2);
        $sqlQuery->set($membroFamilia->canRendaBruta3);


        $sqlQuery->setNumber($membroFamilia->idMembroFamilia);

        $sqlQuery->setNumber($membroFamilia->candidatoIdCandidato);

        return $this->executeUpdate($sqlQuery);
    }

    public function clean() {
        $sql = 'DELETE FROM membro_familia';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByMemNome($value) {
        $sql = 'SELECT * FROM membro_familia WHERE memNome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByMemCpf($value) {
        $sql = 'SELECT * FROM membro_familia WHERE memCpf = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByMemRg($value) {
        $sql = 'SELECT * FROM membro_familia WHERE memRg = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanEmail($value) {
        $sql = 'SELECT * FROM membro_familia WHERE canEmail = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanRendaBruta1($value) {
        $sql = 'SELECT * FROM membro_familia WHERE canRendaBruta1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanRendaBruta2($value) {
        $sql = 'SELECT * FROM membro_familia WHERE canRendaBruta2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCanRendaBruta3($value) {
        $sql = 'SELECT * FROM membro_familia WHERE canRendaBruta3 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByMemNome($value) {
        $sql = 'DELETE FROM membro_familia WHERE memNome = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByMemCpf($value) {
        $sql = 'DELETE FROM membro_familia WHERE memCpf = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByMemRg($value) {
        $sql = 'DELETE FROM membro_familia WHERE memRg = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanEmail($value) {
        $sql = 'DELETE FROM membro_familia WHERE canEmail = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanRendaBruta1($value) {
        $sql = 'DELETE FROM membro_familia WHERE canRendaBruta1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanRendaBruta2($value) {
        $sql = 'DELETE FROM membro_familia WHERE canRendaBruta2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCanRendaBruta3($value) {
        $sql = 'DELETE FROM membro_familia WHERE canRendaBruta3 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    protected function readRow($row) {
        $membroFamilia = new MembroFamilia();

        $membroFamilia->idMembroFamilia = $row['idMembroFamilia'];
        $membroFamilia->memNome = $row['memNome'];
        $membroFamilia->memCpf = $row['memCpf'];
        $membroFamilia->memRg = $row['memRg'];
        $membroFamilia->canEmail = $row['canEmail'];
        $membroFamilia->canRendaBruta1 = $row['canRendaBruta1'];
        $membroFamilia->canRendaBruta2 = $row['canRendaBruta2'];
        $membroFamilia->canRendaBruta3 = $row['canRendaBruta3'];
        $membroFamilia->candidatoIdCandidato = $row['candidato_idCandidato'];

        return $membroFamilia;
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