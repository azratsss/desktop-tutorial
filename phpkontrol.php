<?php
    if(isset($_POST['email'],$_POST['sifre'])&&($_POST['email']=='B221210099@sakarya.edu.tr')
    &&($_POST['sifre']=='B221210099'))
    {
        echo("Hoşgeldin B221210099");
        echo"<p><a href='webodev.html'>&lt;Anasayfaya geri dön&gt;</a></p>";

    }
    else
    {
        echo("Hatalı giriş yaptınız!");
        echo"<p><a href='log.html'>&lt;Login sayfasına dön&gt;</a></p>";
    }
   


?>