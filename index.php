<?php
    require 'simple_html_dom.php';

    $url = 'http://www.adorocinema.com/filmes/filme-238132/';
    
    $result = file_get_html($url);
    $filmes = array();


   preg_match('/titlebar-title-lg"[^>]*>(.*?)<\/div[^>]*>/',$result,$match);
   $filmes['titulo'] = $match[1];
   echo "<h1>".$filmes['titulo']."</h1>";

   preg_match('/titlebar-title-md"[^>]*>(.*?)<\/div[^>]*>/',$result,$match);
   $filmes['sinopse'] = $match[1];
   echo "<h2>".$filmes['sinopse']."</h2>";

   preg_match('/certificate-text"[^>]*>(.*?)<\/span[^>]*>/',$result,$match);
   $filmes['alerta'] = $match[1];
   echo "<h4>".$filmes['alerta']."</h4>";

   
   preg_match_all('/description">(.*?)<\/div[^>]*?>/s',$result,$match2);

    //echo "<h2>".$filmes['teste']."</h2>";
  //print_r($match2);

 $filmes['descricao'] = $match2[0][0];

 $descricao = explode(">",$filmes['descricao']);

 echo "<p>".$descricao[1]."</p>";



  






   //echo "<h4>".$filmes['descricao']."</h4>";
   
   




    //preg_match('/<span itemprop=\"name\">(.*?)<\/span>/',$result,$match);
   //$filmes[0] = $match[0];

   //echo($filmes[0]);


?>