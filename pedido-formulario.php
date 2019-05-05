
<?php 
	include("cabecalho.php");
    include("conecta.php");
    include("banco-categoria.php");
    include("banco-produto.php");
    include("banco-tipo-de-volume.php");
    include("banco-tipo-de-processo.php");
    include("logica-usuario.php");

    verificaUsuario();
    $tiposDeVolume = listaTiposDeVolume($conexao);
    $tiposDeProcesso = listaProcessos($conexao);
    $produtos = listaProduto($conexao);
    $categorias = listaCategorias($conexao);
     function enviaTamanho($nomeDoProduto){
                $key = array_search($nomeDoProduto, $produtos); 
                console_log( $produtos[$key]['precoDeVenda']);
                return $produtos[$key]['precoDeVenda']; 
                           }
    function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
     echo '</script>';
    }
         //$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

//$key = array_search('green', $array); // $key = 2;
//$key = array_search('red', $array);   // $key = 1;
?>
<script src="js/pedido-formulario.js"></script>
<h1>Formulário de pedido</h1>
	<form action="faz-pedido.php" method="post">
    <table class='table'>
        <tr>
            <td>Código do Cliente</td>
            <td><input id="cliente_id" type="text" name="cliente_id" value="digite o codigo do cliente..." class="form-control m-input" /></td>
        </tr>
        <tr>
            <td>CNPJ</td>
            <td><input id="cnpj" type="text" name="cnpj" value="digite o cnpj..." class="form-control m-input" /></td>
        </tr>
        <tr>
            <td>Código do Produto</td>
            <td><input id="codigoDoProduto" type="text" name="codigoDoProduto" value="digite o codigo do produto..." class="form-control m-input" 
            data-precoDeVenda="<?=$produto["precoDeVenda"] ?>"/>
            </td>
        </tr>
    	<tr>
    	<td>Nome do Produto</td>
        <td> 
            <select id = "nomeDoProduto" name="nomeDoProduto"
            class="form-control m-input" >
            <option value="">Selecione o produto...</option>
             <?php
            foreach($produtos as $produto) :?>
            <option data-precoDeVenda="<?=$produto["precoDeVenda"] ?>" value="<?=$produto['produto']?>"><?=$produto['produto']?></option>
            <?php
            endforeach?>
            </select>      
        </td>


   		</tr>
         <tr>
            <td>Preço</td>
            <td><span  id="precoDeVenda"  ></span></td>
        </tr>


        <tr>
        <td>Tipo de Volume</td>
        <td>
            <select name="tipoDeVolume_id" class="form-control m-input">
            <option value="">Selecione o tipo de volume...</option>
            <?php foreach($tiposDeVolume as $tipoDeVolume) : ?>
            <option value="<?=$tipoDeVolume['id']?>"><?=$tipoDeVolume['volume']?></option>
            <?php endforeach ?>
            </select>      
        </td>
        </tr>
       
        <tr>
            <td>Quantidade</td>
            <td><input type="number" id = "quantidade"
                name="quantidade" class="form-control" /></td>
        </tr>
        </tr>
         <tr>
            <td>Valor Total</td>
            <td><span  id="valorTotal"  ></span></td>
        </tr>
        <tr>
            <td>Data de Validade</td>
            <td><input type="date"name="dataDeValidade" class="form-control"></td>
        </tr>
        <tr>
        <td>Categoria</td>
        <td>
            <select name="categoria_id" class="form-control m-input">
            <option value="">Selecione a categoria...</option>
            <?php foreach($categorias as $categoria) : ?>
            <option value="<?=$categoria['id']?>"><?=$categoria['categoria']?></option>
            <?php endforeach ?>
            </select>      
        </td>
        </tr>

        <tr>
        <td>Tipo de Processo</td>
        <td>
            <select name="tipoDeProcesso_id" class="form-control m-input">
            <option value="">Selecione o tipo de processo...</option>
            <?php foreach($tiposDeProcesso as $tipoDeProcesso) : ?>
            <option value="<?=$tipoDeProcesso['id']?>"><?=$tipoDeProcesso['processo']?></option>
            <?php endforeach ?>
            </select>      
        </td>
         <tr>
            <td>Descrição</td>
            <td><input type="text" name="descricao" class="form-control" /></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Enviar" />
            </td>
        </tr>

        </table>
        </form>
    
	<?php include("rodape.php")?>


