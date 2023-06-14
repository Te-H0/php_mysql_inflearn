<?php 
    require_once("dbconn.php");
    $sql="SELECT *  FROM User WHERE login =1";
    $ret = mysqli_query($con,$sql);
    if($ret){
        $count = mysqli_num_rows($ret);
        if($count==1){
            $user_row=mysqli_fetch_array($ret);
        }
        else{//로그인한 유저가 1명이 아닐 경우 로그인 페이지로 이동(로그인 페이지로 이동 시 자동 모든 아이디 로그아웃 설정 해둠.)
            header("Location:/inf/login.php");
        }
    }

?>