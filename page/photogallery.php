<div class="photogallery container d-flex flex-wrap">

<?php
function search_img($path){
   $html='';
foreach (glob($path."*.{jpg,png,gif}", GLOB_BRACE) as $filename)
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

//Пример использования:
echo search_img("photogallery/");
?>
   
</div>