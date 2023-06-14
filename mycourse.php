<?php
    require_once("template/top_nav.php");
    require_once("login_session.php");
    $user_id=$user_row['user_id'];
    // course, teacher, enrollment join 후 user_id의 수강 내역 불러오기
    $sql1 ="SELECT Course.title, Teacher.name, Course.category, Enrollment.date 
            FROM Course, Teacher, Enrollment 
            WHERE Course.teacher_id=Teacher.teacher_id 
            AND Enrollment.course_id=Course.course_id 
            AND Enrollment.user_id='".$user_id."'";

    $ret = mysqli_query($con,$sql1);
    if($ret){
        
        $n= 1;
        echo "<table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>강좌명</th>
                        <th scope='col'>강사</th>
                        <th scope='col'>카테고리</th>
                        <th scope='col'>신청날짜</th>
                        
                    </tr>
                </thead>
                <tbody>";
        while($row = mysqli_fetch_array($ret)) {
            $price = ($row['price']*(1-$row['discount']/100));
            echo "<tr>";
            echo "<th scope='row'>$n</th>";
            echo "<td>",$row['title'],"</td>";
            echo "<td>",$row['teacher'],"</td>";
            echo "<td>",$row['category'],"</td>";
            echo "<td>",$row['date'],"</td>";
            echo "</tr>";
            $n+=1;
        }
    } 
        
    

    else{
    echo "실패 원인 :".mysqli_error($con);}
    mysqli_close($con);

    require_once("template/bottom.php");
?>