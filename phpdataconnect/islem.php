<?php
include 'connect.php';

if (isset($_POST['insertislem'])) {
  $kaydet=$db->prepare("INSERT into bilgilerim set
    bilgilerim_ad=:bilgilerim_ad,
    bilgilerim_soyad=:bilgilerim_soyad,
    bilgilerim_mail=:bilgilerim_mail,
    bilgilerim_yas=:bilgilerim_yas");
//sağ kısım takma isimler, alttaki sol taraf da takma isim.
  $insert=$kaydet->execute(array(
    'bilgilerim_ad' => $_POST['bilgilerim_ad'],
    'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
    'bilgilerim_mail' => $_POST['bilgilerim_mail'],
    'bilgilerim_yas' => $_POST['bilgilerim_yas'] ));

if ($insert) {
  Header("Location:index.php?durum=ok");
}
else{
  Header("Location:index.php?durum=no");
}

}

 ?>
