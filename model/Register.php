<?php
class Register{

  // public function registerUser() {
  public static function registerUser(){
    $control = array(0=>false,1=> 'error');
    if(isset($_POST ['save'])) {
      $errorString = "";
      $name = $_POST['name'];
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      if(!$email){
        $errorString .= "Неправильный email<br />";
      }

      $password = $_POST['password'];
      $confirm  = $_POST['confirm'];
      if(!$password || !$confirm || mb_strlen($password) < 6){
        $errorString .= "Пароль должен быть больше 6 символов<br />";
      }

      if($password != $confirm){
        $errorString .= "Пароли не совпадают<br />";
      }

      if(mb_strlen($errorString) == 0){
        $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $date = Date("Y-m-d");
        $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `registration_date`, `pass`) VALUES (NULL, '$name', '$email', '$passwordHash', '', '$date', '$password')";
        $db = new Database();
        $item = $db->executeRun($sql);
        if($item){
          $control = array(0 => true);
        } else {
          $control = array(0 => false, 1 => 'error');
        }
      } else {
        // error handling
        $control = array(0 => false, 1 => $errorString);
      }
    }

    return $control;
  }

}
?> 