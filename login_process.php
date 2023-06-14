<?php
    require_once("template/top.php");
    require_once("dbconn.php");

    $sql_login="SELECT login FROM User WHERE name='".$_POST["name"]."'";
    $ret = mysqli_query($con, $sql_login);
    if($ret){
        $count = mysqli_num_rows($ret);
        if($count==0){
            echo $_POST['name']." 아이디의 회원이 없음!!!"."<br><br> <a href='login.php'> <--다시 로그인</a>";
            exit();
        }

        $sql_login_process="UPDATE User SET login = 1 WHERE name ='".$_POST['name']."'"; //로그인한 계정 로그인 상태 변경
        $ret=mysqli_query($con,$sql_login_process); // update된 행의 수 반환
        if($ret==1){ // 1개의 user가 업데이트 됐을 경우
            $sql_count_login = "SELECT name FROM User WHERE login=1";
            $ret = mysqli_query($con,$sql_count_login);
            $count = mysqli_num_rows($ret);
            if($count!=1){// 로그인 상태인 계정이 1개가 아닐 경우
                //모드 로그아웃 상태로 만들고 다시 로그인
                $sql_login_reset="UPDATE User SET login =0";
                mysqli_query($con,$sql_login_reset); 
                echo " 로그인 오류!!! 다시 시도 하세요"."<br><br> <a href='login.php'> <--다시 로그인</a>";
                exit();
            }
        }
        header("Location:/inf/main.php");
    }
   
    else{
    echo "userTBL 데이터 검색 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con).
       "<br><br> <a href='login.php'> <--다시 로그인</a>";
	   exit();
    }
    mysqli_close($con);
    require_once("template/bottom.php");
    ?>