<?php
  try {

  $db=new PDO("mysql:host=localhost;dbname=datalar;charset=utf8;",'root','');
//  echo '<h1>Veritabanı bağlantısı başarılı</h1>';
//$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

}catch(PDOExpception $e){
  echo $e->getMessage();
}
