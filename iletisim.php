<?php
error_reporting(E_NOTICE^E_ALL);
echo"<pre>";
//print_r($_POST);

$secilenIlgiAlani=array(1=>"Spor yapmak",
                        2=>"Yemek yapmak",
                        3=>"Kodlama",
                        4=>"Enstrüman Çalmak",
                        5=>"Diğer..");



//echo"Seçilen takım = ".$alan;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Form verilerini kullanarak yapmak istediğiniz işlemleri gerçekleştirin

    // Örneğin, form verilerini ekrana yazdırabilirsiniz
    echo "İsim: " . $name . "<br>";
    echo "E-posta: " . $email . "<br>";
    echo "Mesaj: " . $message . "<br>";
    echo "İlgi alanları : <br>";
    foreach($_POST["ilgialani"] as $alan){
        echo $alan."<br>";
    }
}


?>