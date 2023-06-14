<?php 
require_once("template/top.php");
require_once("login_session.php");
  $id = $_POST["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $address = $_POST["address"];

  $sql = " UPDATE User SET name='".$name."',email='".$email."',age='".$age."',address='".$address."' WHERE user_id='".$id."'";
  $ret = mysqli_query($con, $sql);

  if($ret) {
    header("Location:/inf/myinfo.php");
  }
  else {
    echo "데이터 입력 실패!!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
  } 
  mysqli_close($con);

  require_once("template/bottom.php");
?>

<?php ?>