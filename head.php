<?php 
if(isset($_GET['page'])){
switch($_GET['page']){
    case 'index':
        $bg_img='body{background-image:url(img/ashton-mullins-138190.jpg)}';
        $cont_left='';
        break;
    case 'crown':
        $bg_img='body{background-image:url(img/ashton-mullins-138190.jpg)}';
            $cont_left='
            <div class="cont_left">
            </div>
            ';
            break;
    case 'earrings':
        $bg_img='body{background-image:url(img/ashton-mullins-138190.jpg)}';
        $cont_left='
            <div class="cont_left">
            </div>
            ';
            break;
    case 'pendant':
        $bg_img='body{background-image:url(img/ashton-mullins-138190.jpg)}';
        $cont_left='
            <div class="cont_left">
            </div>
            ';
            break;
    case 'photogallery':
        $bg_img='body{background-image:url(img/ashton-mullins-138190.jpg)}';
            break;
    case 'kontaсt':
        $bg_img='body{background-image:url(img/wall.jpg); background-repeat:repeat;}';
        $cont_left='';
            break;
    default: case 'index':
        $bg_img='body{background-image:url(img/ashton-mullins-138190.jpg)}';
        $cont_left='';
           }
}else {$bg_img='body{background-image:url(img/ashton-mullins-138190.jpg)}';$cont_left='';}


?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Авторские ювелирные изделия ручной работы Ольги Ребровской. Jewellery of Handicrafts Olga Rebrowskaya">
    <meta name="keywords" content="Ювелирные изделия, ручная работа, женские украшения, короны, авторские украшения">
    <meta name="author" content="Pavel Rebrov">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Украшения ручной работы</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style>
    <?=$bg_img?>
    </style>
 </head>
<body>
<?=$cont_left?>
 <header>
 

