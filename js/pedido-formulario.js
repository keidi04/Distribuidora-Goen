$.when( $.ready ).then(function() {
		$('#codigoDoProduto').on("blur",function(){
			var preco = $("#precoDeVenda");
			var input = $("#codigoDoProduto").val();
			console.log(input);
   
		});
        $("#nomeDoProduto").on("change", function(evt){
            
            var option = $("#nomeDoProduto").find(":selected");
            console.log(option);
            var optionValues = option.data();
            console.log(optionValues);
            var preco = $("#precoDeVenda");
            preco.html(optionValues.precodevenda);
           	$("#quantidade").on("input",function(){
           		var pegaPreco = $("#precoDeVenda").text();
           		var pegaQuantidade = $("#quantidade").val();
           		var valor = pegaPreco*pegaQuantidade;
           		var selecionaValor = $("#valorTotal");
           		selecionaValor.text(valor);
           	});

        });
      });



	
