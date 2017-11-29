<?php

include 'head.html'; 
include 'nav.php'; 

switch ($_GET['page']){
    case 'index':
       include 'body.html';
        break;
    case 'crown':
       include 'crown.html';
        break;
    case 'earrings':
       include 'earrings.html';
        break;
    case 'pendant':
       include 'pendant.html';
        break;
    case 'photogallery':
       include 'photogallery.html';
        break;
    case 'kontaсt':
       include 'kontaсt.html';
        break;
    default:
        include 'body.html';
}


include 'footer.html';
 

   