<?phP
$name = $_POST['username'];
$email = $_POST['email'];
$pas = $_POST['password'];

if (trim($name) == "") {
   echo "Вы не ввели имя пользователя";
} else if(strlen(trim($name))<=1){
   echo "Такого имени не существует";
} elseif (trim($email)== "" || trim($pas) == "" || trim($_POST['message'])== "") {
   echo "Введите данные";
}
else {
//   $_POST['password'] = sha1($pas);
//   echo "<h1>Все данные</h1>";/// <p>$name</p><p>$email</p><p>$pas</p><p>$_POST[message]</p>";
//   foreach ($_POST as $key => $value) {
//      echo "<p>$value</p>";
//   }
   header("Location: about.php ");
   exit;
  
}