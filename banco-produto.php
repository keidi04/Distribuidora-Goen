<?php  
function listaProduto($conexao){
	$query = "select p.*, c.categoria,tipoProcesso.processo, cliente.razaoSocial, tipoVolume.volume as volume from produtos as p 
join categorias as c on p.categoria_id = c.id
join tiposdevolume as tipoVolume on p.tipoDeVolume_id = tipoVolume.id
join tiposdeprocesso as tipoProcesso on p.tipoDeProcesso_id = tipoProcesso.id
join cliente as cliente on p.cliente_id = cliente.codigo";
    $resultado = mysqli_query($conexao, $query);
    $produtos= array();
while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
    }
    return $produtos;
}
function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao,$id,$codigoDoProduto, $nome, $precoDeCusto,$precoDeVenda,$tipoDeVolume_id, $quantidade, $dataDeValidade, $categoria_id,$codigoDeBarra,$descricao) {
    $codigoDoProduto = mysqli_real_escape_string($conexao, $codigoDoProduto);
    $nome = mysqli_real_escape_string($conexao, $nome);
    $precoDeCusto = mysqli_real_escape_string($conexao, $precoDeCusto);
    $precoDeVenda = mysqli_real_escape_string($conexao, $precoDeVenda);
    $quantidade = mysqli_real_escape_string($conexao, $quantidade);
    $codigoDeBarra = mysqli_real_escape_string($conexao, $codigoDeBarra);
    $descricao = mysqli_real_escape_string($conexao, $descricao);
    $query = "update produtos set codigoDoProduto = {$codigoDoProduto}, produto = '{$nome}', precoDeCusto = {$precoDeCusto}, precoDeVenda = {$precoDeVenda},tipoDeVolume_id = {$tipoDeVolume_id}, quantidade = {$quantidade}, dataDeValidade = '{$dataDeValidade}', categoria_id= {$categoria_id}, codigoDeBarra = {$codigoDeBarra}, descricao = '{$descricao}' where id = {$id}";
    return mysqli_query($conexao, $query);
}

function insereProduto($conexao,$codigoDoProduto, $nome, $precoDeCusto,$precoDeVenda,$tipoDeVolume_id, $quantidade, $dataDeValidade, $categoria_id,$codigoDeBarra,$descricao) {
    $codigoDoProduto = mysqli_real_escape_string($conexao, $codigoDoProduto);
    $nome = mysqli_real_escape_string($conexao, $nome);
    $precoDeCusto = mysqli_real_escape_string($conexao, $precoDeCusto);
    $precoDeVenda = mysqli_real_escape_string($conexao, $precoDeVenda);
    $quantidade = mysqli_real_escape_string($conexao, $quantidade);
    $codigoDeBarra = mysqli_real_escape_string($conexao, $codigoDeBarra);
    $descricao = mysqli_real_escape_string($conexao, $descricao);
    $query = "insert into `produtos` (`codigoDoProduto`, `produto`, `precoDeCusto`, `precoDeVenda`, `tipoDeVolume_id`, `quantidade`, `dataDeValidade`, `categoria_id`, `codigoDeBarra`, `descricao`) values ({$codigoDoProduto},'{$nome}',{$precoDeCusto},{$precoDeVenda},{$tipoDeVolume_id},{$quantidade},'{$dataDeValidade}',{$categoria_id},{$codigoDeBarra},'{$descricao}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;
}

function removeProduto($conexao,$id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}

function enviaPedido($conexao,$nomeDoProduto){
    
}

