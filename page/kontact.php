<div class="kontact container">
    <center> <h4><strong> Для того чтобы оформить заказ Вам необходимо:</strong></h4></center><br>
<ol>
<li> связаться со мной одним из следующих способов:
<br> написать мне личное сообщение о том украшении, которое хотели бы приобрести (можно скинуть ссылку на фото). <ul>
 <li> Ссылка на мою страницу <a href="https://vk.com/id15240696">Вконтакте</a>;
<li>написать письмо на электронную почту <a href="mailto:orebrovskaya@gmail.com">orebrovskaya@gmail.com</a>; 
<li> позвонить по телефону 8-927-846-91-26. Или через Viber или Whatsup
    </ul>
<li> обозначить дату мероприятия или фотосессии,

<li> указать на какой срок берете украшение,

<li> договориться о времени встречи и внести залог и стоимость за аренду,

<li> в назначенный день и время забрать изделие и вернуть его в целости и сохранности.
    </ol>
<div>
    <center> <h4><strong>А так же можете оставить Ваши контактные данные и мы с вами свяжемся</strong></h4></center>
    <div class="obr_svaz">
    <div class="front side">
   <div class="content">
        <img src="img/logo.png" alt="logo">
         <h1>Olga Rebrovskaya</h1>
         <h2>Украшения ручной работы</h2>
    </div>
 </div>
 <div class="back side">
   <div class="content"> 
        
         <h1>Contact Me</h1>
            <form method="POST">
                <label for="name">Введите Ваше Имя :</label>
                <input type="text" name="name">
                <label for="email">Your E-mail :</label>
                <input type="email" name="email" required >
                <label for="message">Your message :</label>
                <textarea name="message" placeholder="Введите сообщение"></textarea>
                <input class="baton" type="submit" value="Отправить">
            </form>
     </div>
</div>
</div>
</div>
</div>
<?php
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']))
{   $text=htmlspecialchars(trim($_POST['message']));
    $name=htmlspecialchars(trim($_POST['name']));
    $email=htmlspecialchars(trim($_POST['email']));
    $date=date('l jS \of F Y h:i:s A');
    $msg="
        $date
        Имя: $name 
        E-mail: $email 
        Сообщение: \n $text";
    file_put_contents('msg.txt', $msg, FILE_APPEND);
 $error='';
} else {$error="Введите данные корректно";}

?>