<?php
require_once('userModel.php');
$modelNguoiDung = new modelNguoiDung();
class userController
{
  static  function indexAction()
  {
    echo "đây là actionindex";
  }
  static  function deleteAction()
  {
    echo "đây là deleteindex";
  }
  static  function showLoginAction()
  {
    include "login.php";
  }
  static function viewUserAction()
  {
    global $modelNguoiDung;
    $lsNguoiDung = $modelNguoiDung->danhsachNguoiDung();
    include "danhsach.php";
  }
  static function addUserAction()
  {
    global $modelNguoiDung;
    $user = $_POST;
    $message = $modelNguoiDung->themNguoiDung($user) ? 'Thêm thành công' : 'Thêm thất bại';
?>
    <span><?php echo ($message) ?> </span>
<?php
  }
  static function viewAddUserAction()
  {
    include 'them-nguoi-dung.php';
  }
  static  function doLoginAction()
  {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123456") {
      $_SESSION["username"] = "admin";
    } else {
      $messageError = "Sai username và password";
      include "login.php";
    }
  }
}
