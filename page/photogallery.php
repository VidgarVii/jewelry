<?php

include 'logo.html';

    
function search_img($photodir){
   $html='';
    
      foreach (glob($photodir."*.{jpg,png,gif}", GLOB_BRACE) as $filename){
 $html .= '
    
    <div class="photo2" tabindex="0">
        <img src="'.$filename.'" alt="photo">
    </div>
     ';
}
 return $html; 
}    
if(isset($_GET['photo'])){
    echo '<center>
    <a class="up" href="?page=photogallery"><span class="fa fa-chevron-up" aria-hidden="true" title="Вверх"></span></a></center>
    <div class="container justify-content-center align-self-start d-flex flex-wrap">
    ';
   /* for($i=1;$i<count(glob($photodir."*.{jpg,png,gif}", GLOB_BRACE));$i++){}*/
    
    echo search_img("photogallery/".$_GET['photo']."/");
    

}else {
    echo '
    <div class="container justify-content-center align-self-start d-flex flex-wrap">
    ';
    echo katalog();}
    

    
 function katalog(){
     $url='';
 foreach (scandir('photogallery') as $photo) {
     if(strlen($photo)>2){
     $url.='
     
     <div class="photo">
     <a href="?page=photogallery&photo='.$photo.'">
     <img src="photogallery/'.$photo.'/icon.jpg" alt="photo">
     <span class="hide">'.$photo.'</span>
     </a>
     </div>';
     }
}return $url;} 

?>
   
