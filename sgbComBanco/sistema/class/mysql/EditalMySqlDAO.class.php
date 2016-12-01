<?php

class EditalMySqlDAO implements EditalDAO {

    public function load($id) {
        $sql = 'SELECT * FROM edital WHERE idEdital = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    public function queryAll() {
        $sql = 'SELECT * FROM edital';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM edital ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function delete($idEdital) {
        $sql = 'DELETE FROM edital WHERE idEdital = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idEdital);
        return $this->executeUpdate($sqlQuery);
    }

    public function insert($edital) {
        $sql = 'INSERT INTO edital (ediTitulo, ediDescricao, ediDataInicial, ediDataFinal, ediEstado) VALUES (?, ?, ?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($edital->ediTitulo);
        $sqlQuery->set($edital->ediDescricao);
        $sqlQuery->set($edital->ediDataInicial);
        $sqlQuery->set($edital->ediDataFinal);
        $sqlQuery->setNumber($edital->ediEstado);

        $id = $this->executeInsert($sqlQuery);
        $edital->idEdital = $id;
        return $id;
    }

    public function update($edital) {
        $sql = 'UPDATE edital SET ediTitulo = ?, ediDescricao = ?, ediDataInicial = ?, ediDataFinal = ?, ediEstado = ? WHERE idEdital = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($edital->ediTitulo);
        $sqlQuery->set($edital->ediDescricao);
        $sqlQuery->set($edital->ediDataInicial);
        $sqlQuery->set($edital->ediDataFinal);
        $sqlQuery->setNumber($edital->ediEstado);

        $sqlQuery->setNumber($edital->idEdital);
        return $this->executeUpdate($sqlQuery);
    }

    public function clean() {
        $sql = 'DELETE FROM edital';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByEdiTitulo($value) {
        $sql = 'SELECT * FROM edital WHERE ediTitulo = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByEdiDescricao($value) {
        $sql = 'SELECT * FROM edital WHERE ediDescricao = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByEdiDataInicial($value) {
        $sql = 'SELECT * FROM edital WHERE ediDataInicial = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByEdiDataFinal($value) {
        $sql = 'SELECT * FROM edital WHERE ediDataFinal = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByEdiEstado($value) {
        $sql = 'SELECT * FROM edital WHERE ediEstado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByEdiTitulo($value) {
        $sql = 'DELETE FROM edital WHERE ediTitulo = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByEdiDescricao($value) {
        $sql = 'DELETE FROM edital WHERE ediDescricao = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByEdiDataInicial($value) {
        $sql = 'DELETE FROM edital WHERE ediDataInicial = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByEdiDataFinal($value) {
        $sql = 'DELETE FROM edital WHERE ediDataFinal = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByEdiEstado($value) {
        $sql = 'DELETE FROM edital WHERE ediEstado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    protected function readRow($row) {
        $edital = new Edital();

        $edital->idEdital = $row['idEdital'];
        $edital->ediTitulo = $row['ediTitulo'];
        $edital->ediDescricao = $row['ediDescricao'];
        $edital->ediDataInicial = $row['ediDataInicial'];
        $edital->ediDataFinal = $row['ediDataFinal'];
        $edital->ediEstado = $row['ediEstado'];

        return $edital;
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