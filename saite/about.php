<?phP
 $title = "Про нас";
   require "Block/header.php";
?>
<h1>About</h1>

<form action = "check_post.php" method = "POST">
   <input type = "text" name = "username" placeholder = "Введите имя" class = "form-control"><br>
   <input type = "email" name = "email" placeholder ="Введите email" class = "form-control"><br>
   <input type = "password" name = "password" placeholder ="Введите пароль" class = "form-control"><br>
   <textarea name="message" class= "form-control" placeholder = "Введите сообщение"></textarea><br>
   <input type = "submit" value = " Отправить" class = "btn btn-success"> <br>
</form>

<?phP
   require "Block/footer.php";
?>
