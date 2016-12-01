<?php

interface MembroFamiliaDAO {

    public function load($idMembroFamilia, $candidatoIdCandidato);

    public function queryAll();

    public function queryAllOrderBy($orderColumn);

    public function delete($idMembroFamilia, $candidatoIdCandidato);

    public function insert($membroFamilia);

    public function update($membroFamilia);

    public function clean();

    public function queryByMemNome($value);

    public function queryByMemCpf($value);

    public function queryByMemRg($value);

    public function queryByCanEmail($value);

    public function queryByCanRendaBruta1($value);

    public function queryByCanRendaBruta2($value);

    public function queryByCanRendaBruta3($value);

    public function deleteByMemNome($value);

    public function deleteByMemCpf($value);

    public function deleteByMemRg($value);

    public function deleteByCanEmail($value);

    public function deleteByCanRendaBruta1($value);

    public function deleteByCanRendaBruta2($value);

    public function deleteByCanRendaBruta3($value);
}

?>