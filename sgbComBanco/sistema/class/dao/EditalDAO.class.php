<?php

interface EditalDAO {

    public function load($id);

    public function queryAll();

    public function queryAllOrderBy($orderColumn);

    public function delete($idEdital);

    public function insert($edital);

    public function update($edital);

    public function clean();

    public function queryByEdiTitulo($value);

    public function queryByEdiDescricao($value);

    public function queryByEdiDataInicial($value);

    public function queryByEdiDataFinal($value);

    public function queryByEdiEstado($value);

    public function deleteByEdiTitulo($value);

    public function deleteByEdiDescricao($value);

    public function deleteByEdiDataInicial($value);

    public function deleteByEdiDataFinal($value);

    public function deleteByEdiEstado($value);
}

?>