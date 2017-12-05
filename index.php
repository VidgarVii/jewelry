
<?php
include 'head.php';
include 'nav.php'; 

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'index':
           include 'page/body.html';
            break;
        case 'crown':
           include 'page/crown.php';
            break;
        case 'earrings':
           include 'page/earrings.php';
            break;
        case 'pendant':
           include 'page/pendant.php';
            break;
        case 'photogallery':
           include 'page/photogallery.php';
            break;
        case 'kontaсt':
           include 'page/kontact.php';
            break;
        default: case 'index':
           include 'page/body.html';
               }
}
else {
    include 'page/body.html';
}



include 'footer.html';
