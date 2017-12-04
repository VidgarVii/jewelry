<header>
<div class="border container justify-content-center align-self-start d-flex flex-wrap">

<?php
    
function search_img($photodir){
   $html='';
foreach (glob($photodir."*.{jpg,png,gif}", GLOB_BRACE) as $filename)
{
 $html .= '
    
    <div class="photo">
    <img src="'.$filename.'" alt="photo">
    <span class="hide">Описание</span>
    </div>
';
}
 return $html; 
}
    
 foreach (scandir('photogallery') as $photodir) {
     if(strlen($photodir)>2){
     $url='
     <div class="photo">
     <a href="/photogallery/'.$photodir.'/">
     <img src="photogallery/'.$photodir.'/icon.jpg" alt="photo">
     <span class="hide">'.$photodir.'</span>
     </a>
     </div>';
     }
   //echo search_img("photogallery/".$photodir."/");
     echo $url;
 }
    


?>
   
</div>