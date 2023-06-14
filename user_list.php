<?php 
    require_once("template/top.php");
    require_once("dbconn.php");
    $sql="SELECT * FROM User";
    $ret=mysqli_query($con,$sql);
    if($ret){
        $n=1;
        echo "<table class='table'>
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>이름</th>
                <th scope='col'>이메일</th>
                <th scope='col'>나이</th>
                <th scope='col'>주소</th>
            </tr>
        </thead>
        <tbody>";
while($row = mysqli_fetch_array($ret)) {
    echo "<tr>";
    echo "<th scope='row'>$n</th>";
    echo "<td>",$row['name'],"</td>";
    echo "<td>",$row['email'],"</td>";
    echo "<td>",$row['age'],"</td>";
    echo "<td>",$row['address'],"</td>";
    echo "</tr>";
    $n+=1;
}
echo "</tbody>";
echo "<a href='login.php' class=' btn btn-primary' ; width:20vw'>뒤로가기</a>";
    }
    else{
        echo "오류!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con).
       "<br><br> <a href='login.php'> <--다시 로그인</a>";;
	   exit();
    }
?>
<?php require_once("template/bottom.php");?>