<?php

include 'head.html'; 
include 'nav.php'; 

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'index':
           include 'page/body.html';
            break;
        case 'crown':
           include 'page/crown.html';
            break;
        case 'earrings':
           include 'page/earrings.html';
            break;
        case 'pendant':
           include 'page/pendant.html';
            break;
        case 'photogallery':
           include 'page/photogallery.html';
            break;
        case 'kontaсt':
           include 'page/kontact.html';
            break;
        default: case 'index':
           include 'page/body.html';
    }
}
else {
    include 'body.html';
}


include 'footer.html';
