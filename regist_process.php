<?php 
  require_once("template/top.php");
  require_once("dbconn.php");
  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $address = $_POST["address"];

  $sql = " INSERT INTO User VALUES(DEFAULT,'".$name."','".$email."','".$age."','".$address."', DEFAULT)";
  $ret = mysqli_query($con, $sql);

  if($ret) {
    header("Location:/inf/login.php");
  }
  else {
    echo "데이터 입력 실패!!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
  } 
  mysqli_close($con);

  require_once("template/bottom.php");
?>

<?php ?>