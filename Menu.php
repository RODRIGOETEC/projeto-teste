<?php
  $paginas = ['Noticias'=>'Noticias aqui!','sobre'=>'estou na pagina sobre'
  ,'Recomendações'=> 'Recomendações de Jogos e outras coisas','Loja'=>'conteudo loja','Contato'=>'Contato de ajuda'];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Projeto</title>
  <style>
    <?php include "css_menu.php" ?>
  </style>
</head>
<body>
    <header>
        <?php
        foreach ($paginas as $key => $value) {
            echo '<a href ="page='.$key.'">'.ucfirst($key).'</a>';
        }
        ?>
    </header>
    <style>
    h1 {
        margin: 30px;
        padding: 10px;
        box-sizing: border-box;
        text-align: center;
        font-size: 30
    }
    </style>
    <h1> Space Techs </h1> 
    <form name="fomr1" method="post">
    <fieldset>
    <legend>Oque é o site</legend>

    <table>
    <p>Aqui nesse site você encontrará conteudo da cultura Geek e Tech como: Animes, Jogos, series, Filmes e muito mais. <br>
     Tambem tera nossa loja onde você pode comprar ou até mesmo divulgar e vender seus produtos,
      lembrando que terá as regras para se cumprir para que o site seja 100% seguro
  </p>
  </table>
  </fieldset>
  </form>
  <br>
  <br>
  <form name="fomr2" method="post">
  <fieldset>
    <table>
      
      <legend>Curiosidade</legend>
      <p>*Anime de Solo Leveling foi adiado para 2024, sem data pra lançamento </p>
        <p>*O nome Kratos, de God Of War, vem da palavra grega “cratos” que significa poder</p>
        <p>*O lamen Ichiraku de Naruto já existiu na vida real</p>
        <p>*Os personagens de Code Geass adoram pizza porque o anime foi financiado pela Pizza Hut</p>
  </table>
  </fieldset>
  </form>
<br>
<br>
  <form name="form3" method="Post">
    <fieldset>
    <legend>BOLO</legend>

    <table>
      <p>shugduysygud</p>
  </table>
  </fieldset>
  </form>
  <form name="form3" method="Post">
    <fieldset>
    <legend>BOLO</legend>

    <table>
      <p>shjghgjvhjghjhugduysygud</p>
  </table>
  </fieldset>
  </form>
  
</body>
</html>