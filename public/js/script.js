/* O código desenvolvido abaixo foi feito a pensando em mostrar todos os usuários do banco assim que a página fosse carregada. */

// $(function () {

//     var form;
//     $('#fileUpload').change(function (event) {
//         form = new FormData();
//         form.append('fileUpload', event.target.files[0]); // para apenas 1 arquivo
//         //var name = event.target.files[0].content.name; // para capturar o nome do arquivo com sua extenção
//     });

//     $('#btnEnviar').click(function () {
//         $.ajax({
//             url: 'URL SERVER', // Url do lado server que vai receber o arquivo
//             data: form,
//             processData: false,
//             contentType: false,
//             type: 'POST',
//             success: function (data) {
//                 // utilizar o retorno
//             }
//         });
//     });
// });




var objeto = {

	listEditImagem : function (id) {
		$.ajax({
			type: "GET",
			url: "/list-edit-usuarios",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: {
				id:id
			},
			success: function(dados){
				var html = null;
				result = dados;

				$('#idImagem').val(result[0].id);	

			}
		})
		
	},

	listEditPerfil : function (id) {
		$.ajax({
			type: "GET",
			url: "/list-edit-perfil",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: {
				id:id
			},
			success: function(dados){
				var html = null;
				var result = dados;

				

				$('#idperfil').val(result[0].idPerfil);	

				$('#idNomePerfilEdit').val(result[0].nomePerfil);

				$('#idPerfilDescEdit').val(result[0].descricao);
				
			}
		})
	},



	listagemPerfil : function() {
		$.ajax({
			url: "/listar-perfil",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			type: "GET",
			success: function(dados){
				var html = null;
				var result = dados;

				for(var i=0; i < result.length; i++){
					html += "<tr>" +
					"<td>" + result[i].idPerfil + "</td>" +
					"<td>" + result[i].nomePerfil + "</td>" +
					"<td>" + result[i].descricao + "</td>" +
					"<td><a href='#editarperfil' class='listEditPerfil btn btn-dark' data-id='" + result[i].idPerfil + "'>Editar</span></a>"+
					"<td><a href='#' class='deletarPerfil btn btn-info' data-id='" + result[i].idPerfil + "'>Excluir</span></a>" 
					"</tr>"

				}
				// 
				$("#conteudoPerfil").html(html);

				$('.listEditPerfil').click(function(){
					$('#cadastroperfil').hide();
					$('#editarperfilSection').show();
					$('#editarSection').hide();

					var id = $(this).attr('data-id');
					objeto.listEditPerfil(id);

				})	

				$('.deletarPerfil').click(function(e){
					e.preventDefault();
					var id = $(this).attr('data-id');
					
					objeto.deletarPerfil(id);
				})
			}
		})
	},

	editarPerfil : function(dados){


		$.ajax({
			type: "POST",
			url: "/edit-perfil",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: dados,
			success: function()
			{
				/* Chamando a função de busca para que imprima na tela o usuário novo assim que for cadastrado. */
				
				objeto.listagemPerfil();
			}

		});
	},

	editar : function(dados){
		

		$.ajax({
			type: "POST",
			url: "/edit-usuarios",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: dados,
			success: function()
			{
				/* Chamando a função de busca para que imprima na tela o usuário novo assim que for cadastrado. */
				objeto.busca();
			}

		});
	},

	listEdit : function (id) {
		$.ajax({
			type: "GET",
			url: "/list-edit-usuarios",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

			data: {
				id:id
			},
			success: function(dados){
				var html = null;
				// var result = JSON.parse(dados);

				result = dados;

				$('#id').val(result[0].id);	
				$('#idNomeEdit').val(result[0].nome);
				$('#idEmailEdit').val(result[0].email);
				$('#idTelefoneEdit').val(result[0].telefone);
				$('#idDataNascEdit').val(result[0].dataNasc);
				$('#idCargoEdit').val(result[0].cargo);
				$('#idSalarioEdit').val(result[0].salario);
				$('#idFotoEdit').val(result[0].id);

			}
		})
		
	},

	deletarPerfil : function (id){
		
		$.ajax({
			type: "POST",
			url: "/delete-perfil",
			data: {
				id: id
			},
			success: function(id)
			{
				/* Chamando a função de busca para que imprima na tela o usuário novo assim que for cadastrado. */
				objeto.listagemPerfil();

			}

		});
	},

	deletar : function (id){
		
		$.ajax({
			type: "POST",
			url: "/delete-usuarios",
			data: {
				id: id
			},
			success: function(id)
			{
				/* Chamando a função de busca para que imprima na tela o usuário novo assim que for cadastrado. */
				objeto.busca();
			}

		});
	},

	buscaPerfil1 : function() {
		$.ajax({
			url: "/listar-perfil",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			type: "GET",
			success: function(dados){
				var html = null;
				var result = dados;
				console.log(dados);

				
				for(var i=0; i < result.length; i++){
					html += "<option value='"+ result[i].idPerfil +"'>" + result[i].nomePerfil+"</option>" 
					
					

				}
				
				$("#idPerfil1").html(html);	
			}


		})


	},

	buscaPerfil : function() {
		$.ajax({
			url: "/listar-perfil",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			type: "GET",
			success: function(dados){
				var html = null;
				var result = dados;


				for(var i=0; i < result.length; i++){

					html += "<option value='"+ result[i].idPerfil +"'>" + result[i].nomePerfil+"</option>" 
					
					

				}
				
				$("#idPerfil").html(html);



				

			}



		})


	},

	cadastrarPerfil : function(dados){
		
		$.ajax({
			type: "POST",
			url: "/create-perfil",
			data: dados,
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},

			success: function(response)
			{
				/* Chamando a função de busca para que imprima na tela o usuário novo assim que for cadastrado. */
				objeto.listagemPerfil();
			}

		});
	},

	cadastrar : function(dados){



		$.ajax({
			type: "POST",
			url: "/create-usuarios",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: dados,
			success: function()
			{
				

				objeto.busca();
			}

		});
	},

	
	

	busca : function() {


		$.ajax({
			url: "/listar-usuarios",
			type: "GET",
			success: function(dados){
				var html = null;
				var newHtml = null;
				
				result = dados;
				for(var i=0; i < result.length; i++){

					



					html += "<tr>" +
					"<td>" + result[i].id + "</td>" +
					"<td>" + result[i].nome + "</td>" +
					"<td>" + result[i].email + "</td>" +
					"<td>" + result[i].telefone + "</td>" +
					"<td>" + result[i].dataNasc + "</td>" +
					"<td>" + result[i].cargo + "</td>" +
					"<td>" + result[i].salario + "</td>" 

					if (result[i].foto!=null) {


						

						html +="<td><img class='mg-r20' src='categories/" + result[i].foto + "'><button type='button' class='EnviarIdUsuario btn btn-primary' data-id='" + result[i].id + "' data-toggle='modal' data-target='#myModal'>Editar foto</button></td>"


					}else{

						

						html += "<td><button type='button' class='EnviarIdUsuario btn btn-primary' data-id='" + result[i].id + "' data-toggle='modal' data-target='#myModal'>Cadastrar foto</button></td>"
					}

					html += "<td>" + result[i].nomePerfil + "</td>" +
					"<td><a href='#editar' class='listEdit btn btn-dark' data-id='" + result[i].id + "'>Editar</span></a>"+
					"<td><a href='#' class='deletar btn btn-info' data-id='" + result[i].id + "'>Excluir</span></a>" 
					"</tr>"

				}


				$("#conteudo").html(html);	
				
				$('.deletar').click(function(e){
					e.preventDefault();
					var id = $(this).attr('data-id');
					objeto.deletar(id);
				})

				$('.listEdit').click(function(){
					$('#cadastro').hide();
					$('#editarSection').show();
					$('#editarperfilSection').hide();
					var id = $(this).attr('data-id');
					objeto.buscaPerfil1();
					console.log(id);
					objeto.listEdit(id);

				})

				$('.EnviarIdUsuario').click(function(){



					var id = $(this).attr('data-id');
					
					objeto.listEditImagem(id);

				})


				
				
			}

			

		})


	}
}		
/* Chamando a função de busca para que imprima na tela todos os usuários do banco assim que a página for carregada. */

$.ajaxSetup({

	headers: {

		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

	}

});



objeto.busca();
objeto.listagemPerfil();


// var obj = new objeto;




$(document).ready(function(){

	$.ajaxSetup({

		headers: {

			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

		}

	});

	


	var form;






	$('#btnTabelaShow').click(function(){

		objeto.buscaPerfil();

		$('#tabela').show();
		$('#tabelaPerfil').show();



	})


	$('#btnTabelaHide').click(function(){

		objeto.buscaPerfil();

		$('#tabela').hide();
		$('#tabelaPerfil').hide();


	})



	$('#btnCadastrarPerfil').click(function(){

		objeto.buscaPerfil();
		$('#editarperfil').hide();
		$('#cadastroperfil').show();
		$('#cadastro').hide();

		$('#editarSection').hide();

	})

	$('#btnCadastrar').click(function(){

		objeto.buscaPerfil();

		$('#cadastroperfil').hide();
		$('#cadastro').show();
		$('#editarSection').hide();

	})

	$('#btnEditar').click(function(){



		$('#cadastro').hide();
		$('#editarSection').show();

	})

	$('#editarperfilSection').hide();
	$('#cadastroperfil').hide();
	$('#cadastro').hide();
	$('#editarSection').hide();

	$('.listEdit').click(function(){
		$('#cadastro').hide();
		$('#editarSection').show();
		$('#editarperfilSection').hide();

		var id = $(this).attr('data-id');
		objeto.buscaPerfil1();
		objeto.listEdit(id);

	})

	$('.EnviarIdUsuario').click(function(){


		var id = $(this).attr('data-id');
		objeto.listEditImagem(id);

	})


	$('.listEditPerfil').click(function(){



		$('#cadastroperfil').hide();
		$('#editarperfilSection').show();
		$('#editarSection').hide();

		var id = $(this).attr('data-id');
		objeto.listEditPerfil(id);

	})

	$('#editarperfil').submit(function(){


		var dados = $( this ).serialize();
		console.log(dados);
		objeto.editarPerfil(dados);

		return false;		
	})

	$('#editar').submit(function(){


		var dados = $( this ).serialize();
		console.log(dados);
		objeto.editar(dados);
		$('#editarSection').hide();

		return false;		
	})

	$('#editarperfilform').submit(function(){

		var dados = $( this ).serialize();
		objeto.editarPerfil(dados);

		$('#editarperfilSection').hide();


		return false;		
	})







	$('#cadastrarPerfil').submit(function(){

		var dados = $( this ).serialize();


		objeto.cadastrarPerfil(dados);

		return false;		
	})

	$('#usuario').submit(function(){
		var dados = $( this ).serialize();


		objeto.cadastrar(dados);

		$('#cadastro').hide();
		$('#tabela').show();


		return false;		
	})
//Função aqui funciona só uma vez, por causa do document .ready

$('.deletarPerfil').click(function(e){
	e.preventDefault();
	var id = $(this).attr('data-id');
	
	objeto.deletarPerfil(id);
})

$('.deletar').click(function(e){
	e.preventDefault();
	var id = $(this).attr('data-id');
	objeto.deletar(id);
})


});

function myFunction() {
	var input, filter, table, tr, td, i;
	input = document.getElementById("myInput");

	filter = input.value.toUpperCase();

	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
		}       
	}
}

function myFunctionPerfil() {
	var input, filter, table, tr, td, i;
	input = document.getElementById("myInputPerfil");

	filter = input.value.toUpperCase();

	table = document.getElementById("myTablePerfil");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
		}       
	}
}

















