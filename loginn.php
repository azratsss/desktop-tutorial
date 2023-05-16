<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Kullanıcı adı ve şifre alanlarının boş bırakılmadığını kontrol edin
  if (empty($username) || empty($password)) {
    header('Location: loginn.php');
    exit;
  }

  // Kullanıcı adı e-posta adresi biçiminde değilse, kullanıcı login sayfasına geri yönlendirilmelidir
  if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    header('Location: loginn.php');
    exit;
  }

  // Şifre doğrulama işlemi
  $student_number = preg_replace('/[^0-9]/', '', $username);
  if ($password !== $student_number) {
    header('Location: loginn.php');
    exit;
  }

  // Login işlemi başarılı olduğunda kullanıcıyı karşılayan mesajı görüntüleyin
  echo 'Hoşgeldiniz ' . $student_number;
}
?>