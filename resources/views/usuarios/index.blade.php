<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <!-- BOOTSTRAP VERSÃO 4.0 -->

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.21.0/css/jquery.fileupload.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">  
   <link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}">

   <!-- JQuery and Popper-->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



   <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.21.0/js/vendor/jquery.ui.widget.js" type="text/javascript" charset="utf-8" ></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.21.0/js/jquery.fileupload.js" type="text/javascript" charset="utf-8" ></script>

   <meta name="csrf-token" content="{{ csrf_token() }}" />


   <title>Estágio</title>

   <!-- Fonts -->


</head>
<body>
    <!--Navbar exemplo do boostrap 4.0(acréscimo da classe ml-auto que coloca tudo que tem dentro de ul a direita. Unica solução que achei no bootstrap 4.0) -->

    <nav class="navbar-dark bg-dark navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#">
            <!-- CONSTANCE -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#cadastro">CADASTRO<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabela">TABELA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobreMim">SOBRE MIM</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- / -->

    
    <div class="espacamentoTop container">
        <div class="row">
            <div class="text-center col">
                <button class="btn btn-dark" id="btnCadastrar">CADASTRAR USUARIO</button>
                <a href='#CadastroPerfil' id="btnCadastrarPerfil" class="btn btn-dark">CADASTRAR PERFIL</a>
                <a href='#CadastroPerfil' id="btnTabelaHide" class="btn btn-dark">ESCONDER TABELAS</a>
                <a href='#CadastroPerfil' id="btnTabelaShow" class="btn btn-dark">MOSTRAR TABELAS</a>
            </div>
        </div>

        <!-- O código HTML foi dividido em section's para facilitar o entendimento é a organização de cada parte do código  -->

        <!-- Section Inicio Inicio -->

        <!-- <section id="inicio" class="espacamentoTop tamanhoDatela ">
            <img src="imagens/73.jpg" class="img-fluid" alt="Responsive image">
            <div class="d-flex justify-content-center">
                <h1>CONSTANCE</h1>
            </div>
        </section> -->

        <!-- Section Fim Inicio-->

        <!-- Section Inicio Cadastro -->

      
        <section id="cadastro" class="tamanhoDatela espacamentoTop">

            <div class="d-flex justify-content-center marginBottom">
                <h1>CADASTRO</h1>
            </div>
            <form action="" id="usuario" method="">

            <div class="form-group">
                <label for="idNome">Nome</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idNome" name="idNome" placeholder="Nome" required>
            </div>

            <div class="form-group">
                <label for="idEmail">Email</label>
                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" id="idEmail" name="idEmail" placeholder="Email" >
            </div>

            <div class="form-group">
                <label for="idDataNasc">Data de Nascimento</label>
                <input type="date" class="form-control border-top-0 border-right-0 border-left-0" id="idDataNasc" name="idDataNasc" placeholder="Data de Nascimento" >
            </div>

            <div class="form-group">
                <label for="inputTelefone">Telefone</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idTelefone" name="idTelefone" placeholder="Telefone" >
            </div>

            <div class="form-group">
                <label for="idCargo">Cargo</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idCargo" name="idCargo" placeholder="Cargo" required>
            </div>

            <div class="form-group">
                <label for="idSalario">Salário</label>
                <input type="number" class="form-control border-top-0 border-right-0 border-left-0" id="idSalario" name="idSalario" placeholder="" required>
            </div>
            <div class="form-group">

                <label for="idPerfil">Escolha seu tipo de usuário</label>
                <select id="idPerfil" name="idPerfil" class="form-control">

                </select>

            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-secondary btn-lg">CADASTRAR</button>
            </div>
        </form>

    </section>

    <!-- Section Fim Cadastro -->

    <!-- Section Inicio Tabela -->

    <section id="tabela" class="tamanhoDatela espacamentoTop">

        <div class="d-flex justify-content-center">
            <h1>TABELA USUÁRIOS</h1>
        </div>
        <div class="row">
            <div class="col-md-12 mg-b50">
                <input type="text" onkeyup="myFunction()" class="form-control" id="myInput" placeholder="Pesquisa simples por nome">
            </div>


            <div class="col-md-12">

                <table class="table table-striped table-dark table-responsive w-100 d-block d-md-table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Data Nasc</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Salario</th>
                            <th scope="col" class="text-center">Foto</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Descrição</th>

                        </tr>
                    </thead>
                    <tbody id="conteudo">       
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="tabelaPerfil" class="tamanhoDatela espacamentoTop">

        <div class="d-flex justify-content-center">
            <h1>TABELA PERFIL</h1>
        </div>
        <div class="row">
            <div class="col-md-12 mg-b50">
                <input type="text" onkeyup="myFunctionPerfil()" class="form-control" id="myInputPerfil" placeholder="Pesquisa simples por nome">
            </div>


            <div class="col-md-12">

                <table class="table table-striped table-dark table-responsive w-100 d-block d-md-table" id="myTablePerfil">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Descrição</th>


                        </tr>
                    </thead>
                    <tbody id="conteudoPerfil">     
                    </tbody>
                </table>
            </div>
        </div>
    </section>



    <section id="editarSection" class="mg-b50 tamanhoDatela espacamentoTop">
        <form  class="" id="editar" action="">
            <div class="d-flex justify-content-center marginBottom">
                <h1>Editar</h1>
            </div>

            <input type="hidden" name="id" id="id">

            <div class="form-group">
                <label for="idNome">Nome</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idNomeEdit" name="idNome" placeholder="Nome" required>
            </div>

            <div class="form-group">
                <label for="idDescrição">Email</label>
                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" id="idEmailEdit" name="idEmail" placeholder="Email" >
            </div>

            <div class="form-group">
                <label for="idDataNasc">Data de Nascimento</label>
                <input type="date" class="form-control border-top-0 border-right-0 border-left-0" id="idDataNascEdit" name="idDataNasc" placeholder="Data de Nascimento" >
            </div>

            <div class="form-group">
                <label for="inputTelefone">Telefone</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idTelefoneEdit" name="idTelefone" placeholder="Telefone" >
            </div>

            <div class="form-group">
                <label for="idCargo">Cargo</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idCargoEdit" name="idCargo" placeholder="Cargo" required>
            </div>

            <div class="form-group">
                <label for="idSalario">Salário</label>
                <input type="number" class="form-control border-top-0 border-right-0 border-left-0" id="idSalarioEdit" name="idSalario" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="idFoto">Foto</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idFotoEdit" name="idFoto" placeholder="" required>
            </div>
            <div class="form-group">

                <label for="idPerfil1">Escolha seu tipo de usuário</label>
                <select id="idPerfil1" name="idPerfil1" class="form-control">

                </select>

            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" id="" class="btn btn-secondary btn-lg">EDITAR</button>
            </div>
        </form>
    </section>

    <section id="cadastroperfil" class="mg-b50 tamanhoDatela espacamentoTop">
        <form  class="" id="cadastrarPerfil" action="">
            <div class="d-flex justify-content-center marginBottom">
                <h1>CADASTRO</h1>
            </div>
            <div class="form-group">
                <label for="idPerfil">Nome</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idPerfil" name="idPerfil" placeholder="Ex: Administrador" required>
            </div>

            <div class="form-group">
                <label for="idDesc">Email</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idDesc" name="idDesc" placeholder="Descrição do perfil" >
            </div>


            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-secondary btn-lg">CADASTRAR</button>
            </div>
        </form>
    </section>



    <section id="editarperfilSection" class="mg-b50 tamanhoDatela espacamentoTop">
        <form  class="" id="editarperfilform" action="">
            <div class="d-flex justify-content-center marginBottom">
                <h1>CADASTRO PERFIL</h1>
            </div>
                

            <input type="hidden" name="idperfil" id="idperfil">

            <div class="form-group">
                <label for="idNomePerfilEdit">Nome Perfil</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idNomePerfilEdit" name="idNomePerfilEdit" placeholder="Ex: Administrador" required>
            </div>

            <div class="form-group">
                <label for="idPerfilDescEdit">Descrição Perfil</label>
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="idPerfilDescEdit" name="idPerfilDescEdit" placeholder="Descrição do perfil" >
            </div>


            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-secondary btn-lg">EDITAR</button>
            </div>
        </form>
    </section>








    <!-- Section Fim Tabela -->

</div>

<!-- Section Inicio SobreMim -->

<section id="sobreMim">
    <footer class="darkFooter">
        <div class="d-flex justify-content-center">
            <p class="text-muted">Uriel Alves Costa</p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-muted">UNA Contagem</p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-muted">alvesuriel699@gmail.com</p>
        </div>
    </footer>
</section>

<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Cadastro de imagem</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


    <form action="upload" id="cadastrarImagem"  enctype="multipart/form-data" method="post">
       <input id="idImagem" type="hidden" name="idImagem" value="" >

           <div class="form-group">

            <input id="fileupload" type="file" name="fileupload" value="">
        </div>
        

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
        </div>
    </form>
            


</div>

<!-- Modal footer -->
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>

</div>


<!-- Section Fim SobreMim -->
</body>


</html>
