<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP myAdmin Bağlantısı</title>
  </head>
  <body>
    <h1> Veritabanı PDO Kayıt İşlemleri </h1>

    <?php

    if (isset($_GET['durum']) && $_GET['durum']=="ok") {
      echo 'Kayıt işlemi başarılı';
    } elseif (isset($_GET['durum']) && $_GET['durum']=="no") {
      echo 'Kayıt işlemi başarısız';
    }
    ?>

    <br>
    <form action="islem.php" method="POST">
      <input type="text" required="" name="bilgilerim_ad" placeholder="Adınızı Giriniz.."></input><br><br>
      <input type="text" required="" name="bilgilerim_soyad" placeholder="Soyadnızı Giriniz.."></input><br><br>
      <input type="email" required="" name="bilgilerim_mail" placeholder="Mailinizi Giriniz.."></input><br><br>
      <input type="text" required="" name="bilgilerim_yas" placeholder="Yaşınızı Giriniz.."></input><br><br>


      <button type="submit" name="insertislem">Gönder</button>
    </form>

    <h2>Kayıtların Listelenmesi</h2>


    <?php
    $kayitcek=$db->prepare("SELECT * from bilgilerim");
    $kayitcek->execute();
    $datalar=$kayitcek->fetch(PDO::FETCH_ASSOC);
    print_r($kayitcek);

    ?>

  </body>
</html>
