
<?php
include 'head.php';
include 'nav.php'; 

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'index':
           include 'page/body.html';
            $bg="img/ashton-mullins-138190.jpg";
            $bg_color="rgba(0, 2, 43, 0.85)";
            break;
        case 'crown':
           include 'page/crown.html';
            $bg="img/ashton-mullins-138190.jpg";
            break;
        case 'earrings':
           include 'page/earrings.html';
            $bg="img/ashton-mullins-138190.jpg";
            break;
        case 'pendant':
           include 'page/pendant.html';
            $bg="img/ashton-mullins-138190.jpg";
            break;
        case 'photogallery':
           include 'page/photogallery.php';
            $bg="img/wall.jpg";
            break;
        case 'kontaсt':
           include 'page/kontact.html';
             $bg="img/wall.jpg";
            break;
        default: case 'index':
           include 'page/body.html';
           $bg="img/ashton-mullins-138190.jpg";
    }
}
else {
    include 'page/body.html';
}



include 'footer.html';
