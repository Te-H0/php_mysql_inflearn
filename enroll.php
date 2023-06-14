<?php
    require_once("template/top.php");
    require_once("login_session.php");
    $course=$_GET["CourseID"];
    $user=$_GET["UserID"];
    $price=$_GET["price"];
    $sql="SELECT enroll_id FROM Enrollment
        WHERE course_id='".$course."' AND user_id='".$user."'";
    $ret = mysqli_query($con,$sql);
    if($ret){
        $count = mysqli_num_rows($ret);
        if($count==1){
            echo "<div class='jumbotron'>이미 등록한 강의 입니다! <br><br> <a href='course_list.php'>돌아가기</a></div>";
        }
        else{
            $sql2="SELECT title FROM Course WHERE course_id='".$course."'";
            $sql3="INSERT INTO Enrollment VALUES(DEFAULT,'".$user."','".$course."','".$price."',DEFAULT)";
            $ret = mysqli_query($con,$sql2);
            if($ret){
                $row = mysqli_fetch_array($ret);
                $ret = mysqli_query($con,$sql3);
                if($ret){
                    echo "<div class='jumbotron'>".$row['title']."를 성공적으로 신청하였습니다!<br><br> <a href='course_list.php'>돌아가기</a></div>";
                }
                else{
                    
                    echo "등록 오류","<br>";
                echo "실패 원인 :".mysqli_error($con).
           "<br><br> <a href='login.php'> <--다시 로그인</a>";;
           exit();
                }
            }
            else{
                echo "저장하면서 타이틀 가져온거 오류","<br>";
                echo "실패 원인 :".mysqli_error($con).
           "<br><br> <a href='login.php'> <--다시 로그인</a>";;
           exit();
            }
           
            
           
        }
    }
    else{
           echo "실패 원인 :".mysqli_error($con).
           "<br><br> <a href='login.php'> <--다시 로그인</a>";;
           exit();
        }
    mysqli_close($con);
?>