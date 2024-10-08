<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Se não estiver logado, redireciona para a página de login
    header("Location: ../back/logIn.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <style>

    * {
        font-family: 'Inter', sans-serif;
    }
    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        position: relative;
        background-image: url('assets/sarinha.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        height: 150vh;
      
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;

    }



    .bem-vindo {
      background-color: rgba(255, 255, 255, 0.4 );  
      font-family: Arial, Helvetica, sans-serif;
      position: absolute;
      margin-top: 80px;
      left: 0;
      width: 100%;
      height: 260px;
      color: white;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: space-between; /* Alterado de flex-direction: space-around; */
      padding-bottom: 20px; /* Adicionado para dar espaço na parte inferior */
    }

    .bem-vindo h1 {
        font-size: 100px;
        font-weight: 100;
        font-family: 'Julius Sans One', sans-serif;
        margin-top: 40px;
    }
 
    nav {
      background-color: yellow;
      padding: 5px;
      display: flex;
      height: 70px;
      display: flex;
      align-items: center;
    }

    nav img {
      margin-top: 8px;
      height: 50px; 
      margin-left: 25px;
      width: 100px;
      align-self: flex-start; 
    }    
    
    .tituloPrincipal {
      color: white;
      font-size: 100px;
      text-align: left;
      margin-top: 20px;
      font-family: 'Julius Sans One', sans-serif;
      width: 430px;
      line-height: 100px;
      margin-left: 60px;
      margin-top: 60px;

    }

    footer {
      height: 400px;
      background-color: aliceblue;
      opacity: 0.4;
      width: 100%;
      filter: blur(30x);
    }

    .leftcard {
      
    }

    .linha {
      height: 1px;
      background-color: white;
      margin-top: 30px;
    }

    .linha-vertical {
      width: 1px;
      height: 336px;
      opacity: 0.4;
      background-color: black;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    .leftcard {
      display: flex;
      justify-content: left;
      margin-top: 10px;
      height: 50px;
      width: 400px;
      margin-left: 40px;
    }

    .rightcard {
      display: flex;
      justify-content: right;
      height: 50px;
      margin-top: -45px;
      margin-right: 250px;

    }

    .textleft {
      margin-top: 110px;
      margin-left: -380px;
      width: 440px;
      text-align: left;
      font-size: 20px;
      line-height: 25px;
      font-family: 'Julius Sans One', sans-serif;
      font-weight: 800;
    }

    .textright {

      width: 400px;
    }




  </style>
</head>
<body>
  
  <nav>
  <a href="landingPage.php"><img src="assets/loguinho-removebg-preview (1).png" alt="Logo"></a>
  </nav>

  <p class="tituloPrincipal">
    JUNTOS POR UM MUNDO MELHOR 
  </p>

  
  <footer>
    <div class="linha-vertical">
    </div>
    <div class="leftcard">
      <a href="">
        <img src="./assets/leftCard.svg" alt="">
      </a>
      <p class="textleft">Escolha/selecione uma turma por curso e 
        registre a ocorrência diretamente pelo nome do aluno.</p>
    </div>
    <div class="rightcard">
      <a href="">
        <img src="./assets/rightCard.svg" alt="">
      </a>
      <p class="textright">Escolha/selecione uma turma por curso e 
        registre a ocorrência diretamente pelo nome do aluno.</p>
    </div>
    <hr class="linha">
  </footer>

</body>
</html>
