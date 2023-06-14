<?php
    require_once("template/top_nav.php");
    require_once("login_session.php");
    $value = $_GET['keyword'];
    if($value=='all'){
    // nav(화면 상단)의 강의를 클릭해서 들어온 경우 course, teacher join 후 모든 강의 가져오기
    $sql1="SELECT Course.course_id, Course.title title, Teacher.name teacher, Course.category, Course.price, Course.discount 
    FROM Course,Teacher 
    WHERE (Course.teacher_id=Teacher.teacher_id)";
    }
    else{
        // main 화면의 검색 또는 키워드 메뉴 클릭한 경우 course, teacher join 후 LIKE '%%"으로 
        // 관련 강의 검색하기
        $sql1="SELECT Course.course_id, Course.title title, Teacher.name teacher, Course.category, Course.price, Course. discount 
        FROM Course,Teacher 
        WHERE (Course.teacher_id=Teacher.teacher_id) 
        AND (Course.category LIKE '%".$value."%' OR Teacher.name LIKE '%".$value."%' OR Course.title LIKE '%".$value."%')";
        
    }

    $ret = mysqli_query($con,$sql1);
    if($ret){
        $n= 1;
        echo "<div class='course_nav'><ul class='nav nav-pills'>
        <li role='presentation' class=''>
        <form method='get' action='course_list.php' >
        <input
        type='text'
        id='course_search'
        name='keyword'
        placeholder='기술 검색'>
        </form>
      </li>
        <li role='presentation'><a href='course_list.php?keyword=java' >java</a></li>
        <li role='presentation'><a href='course_list.php?keyword=spring'>spring</a></li>
        <li role='presentation'><a href='course_list.php?keyword=mvc'>mvc</a></li>
        <li role='presentation'><a href='course_list.php?keyword=backend'>backend</a></li>
        <li role='presentation'><a href='course_list.php?keyword=springboot'>springboot</a></li>
        <li role='presentation'><a href='course_list.php?keyword=network'>network</a></li>
        <li role='presentation'><a href='course_list.php?keyword=c'>c</a></li>
        <li role='presentation'><a href='course_list.php?keyword=figma'>figma</a></li>
        <li role='presentation'><a href='course_list.php?keyword=html'>html</a></li>
        <li role='presentation'><a href='course_list.php?keyword=css'>css</a></li>
        <li role='presentation'><a href='course_list.php?keyword=nodejs'>nodejs</a></li>
        <li role='presentation' class=''><a href='course_list.php?keyword=python'>python</a></li>
        
        </ul></div>";
        echo "<table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>강좌명</th>
                        <th scope='col'>강사</th>
                        <th scope='col'>카테고리</th>
                        <th scope='col'>가격</th>
                        <th scope='col'>수강</th>
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
            echo "<td>",$price,"</td>";
            echo "<TD>", "<a type='button' href='enroll.php?CourseID=", $row['course_id'],"&&UserID=",$user_row['user_id'],"&&price=",$price,"'>신청</a></TD>";
            echo "</tr>";
            $n+=1;
        }
        echo "</tbody>";
    } 
        
    

    else{
    echo "실패 원인 :".mysqli_error($con);
    }
    mysqli_close($con);

    require_once("template/bottom.php");
?>