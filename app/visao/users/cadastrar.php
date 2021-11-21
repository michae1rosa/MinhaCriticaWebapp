<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--    <meta name="viewport"content="width=device-width, initial-scale=1.0">-->

      <link rel="stylesheet" type="text/css" href="estilos/login.css" />
        <title>Minha Critica APP - Cadastro</title>


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


<body class="flex items-center justify-center">
  <div id="registra">
    <form class="bg-white shadow-md rounded px-8 py-10 mb-4" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Nome
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="nome" type="text" placeholder="Seu nome" pattern=".{4,}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="meu@email.com" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Senha
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="senha" type="password" placeholder="******************" pattern=".{4,}" required>
        </div>

        <div class="flex items-center justify-between">
            <a class="inline-block align-baseline font-bold text-sm text-primary hover:text-blue-900" href="login.php">
                Possui cadastro? Entre.
            </a>
			<div class="card-footer">
			 <input type="submit" value="Cadastrar" class="submit" >
            <button class="font-bold text-blue bg-primary py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">

            </button>
        </div>
    </form>
</body>

</html>