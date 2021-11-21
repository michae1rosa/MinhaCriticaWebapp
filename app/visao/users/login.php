<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--    <meta name="viewport"content="width=device-width, initial-scale=1.0">-->

      <link rel="stylesheet" type="text/css" href="estilos/login.css" />
        <title>Minha Critica APP - Login</title>


           <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS -->


    <link href="estilos/materialize.css" rel="stylesheet">

    <div class="header-1">
        <div class="logo">
            <img src="img/logo.png" alt="" />

        </div>




    </head>


    <nav class="blue-grey">

<ul class="right">
<li class="nav-item"><a class="nav-link active" href="home.html">Início </a></li>
    <li><a href="login.php"><i class="material-icons left">account_circle</i> Cadastro</a></li>
    <li><a href="pesquisa.html"><i class="material-icons left">search</i> Pesquisar</a></li>
</ul>

</nav>




    <body>
        <div id="login">
            <form class="card">
                <div class="card-header">
                </div>
        <form class="bg-white shadow-md rounded px-8 py-10 mb-4" method="GET">
     <!--  ?php require 'app/visao/alert.php' ?>-->
                <div class="card-content">
                    <div class="card-content-area">
                        <label for="email">Usuário</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email"  type="email" placeholder="meu@email.com" value="<?= $_GET['email'] ?>" required>
                     <!--   <input type="text" id="usuario" autocomplete="on">-->
                    </div>
                    <div class="card-content-area">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>

                        <label for="password">Senha</label>
				<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" autocomplete="off" name="senha" type="password" placeholder="******************" pattern=".{4,}" required>
                    <!--    <input type="password" id="password" autocomplete="off">-->
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Login" class="submit">
                    <button class="font-bold text-white bg-primary py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"></button>

                    <a href="#" class="recuperar_senha">Esqueceu a senha?</a>
                </div>
                <div class="text-center">
                    <span class="txt1">
                       Não tem uma conta?
                    </span>
                    <a class="txt2" href="#">
                   <!-- <form class="bg-white shadow-md rounded px-8 py-10 mb-4" method="POST">-->
                    <a class="inline-block align-baseline font-bold text-sm text-primary hover:text-blue-900" href="cadastrar.php">
                       Crie aqui sua conta
                    </a>
                </div>
                    </body>
            </form>
        </div>

</html>

