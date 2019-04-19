<?php
include("cabecalho.php");
    include("conecta.php");
    include("banco-categoria.php");
    include("banco-produto.php");
    $produtos = listaProduto($conexao);
    $categorias = listaCategorias($conexao);
?>
      <tr>
        <td>Nome do Produto</td>
        <td> 
            <select id = "resposta" name="nomeDoProduto" onchange="enviaTamanho(this.value);" 
            class="form-control m-input" >      

             <?php
            foreach($produtos as $produto) :?>
            <option value="<?=$produto['produto']?>"><?=$produto['produto']?></option>
            <?php
            endforeach?>
            </select>
         </td>
      </tr>
<script type="text/javascript">
function enviaTamanho(tamanho) {
   var xmlhttp;

   if (window.XMLHttpRequest) {
       xmlhttp = new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
   } else {
       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
   }

   xmlhttp.onreadystatechange = function() { 
      if (xmlhttp.readyState == XMLHttpRequest.DONE) {
         if (xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            document.getElementById("resposta").innerHTML= xmlhttp.responseText;

         } else if (xmlhttp.status == 400) {
            alert('There was an error 400');
         } else {
            alert('something else other than 200 was returned');
         }
      }
   };
   xmlhttp.open("POST","guarda-camiseta.php", true);
   xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
   xmlhttp.send("tamanho=" + tamanho);
}
</script>
<?php  
$tamanho = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $tamanho = filter_input(INPUT_POST, 'tamanho');
}

if (!empty($tamanho)) {
   echo "Recebi o tamanho $tamanho da sua camiseta, obrigado!";
} else {
   echo 'Não recebi o tamanho da sua camiseta!';
}
?>