<?php

interface CandidatoDAO{

	
	public function load($idCandidato, $editalIdEdital);

	
	public function queryAll();
	
	
	public function queryAllOrderBy($orderColumn);
	
	
	public function delete($idCandidato, $editalIdEdital);
	
	
	public function insert($candidato);
	
	
	public function update($candidato);	

	
	public function clean();

	public function queryByIdMatricula($value);

	public function queryByCanNome($value);

	public function queryByCanCpf($value);

	public function queryByCanRg($value);

	public function queryByCanCidade($value);

	public function queryByCanBairro($value);

	public function queryByCanLogradouro($value);

	public function queryByCanNumero($value);

	public function queryByCanEmail($value);

	public function queryByCanRendaBruta1($value);

	public function queryByCanRendaBruta2($value);

	public function queryByCanRendaBruta3($value);


	public function deleteByIdMatricula($value);

	public function deleteByCanNome($value);

	public function deleteByCanCpf($value);

	public function deleteByCanRg($value);

	public function deleteByCanCidade($value);

	public function deleteByCanBairro($value);

	public function deleteByCanLogradouro($value);

	public function deleteByCanNumero($value);

	public function deleteByCanEmail($value);

	public function deleteByCanRendaBruta1($value);

	public function deleteByCanRendaBruta2($value);

	public function deleteByCanRendaBruta3($value);


}
?>