<?php
    require_once("template/top_nav.php");
    require_once("login_session.php");

    mysqli_close($con);
    ?>





    
    <div class="jumbotron info-jumbotron">
        <a class="btn btn-primary info-button" href="edit_profile.php" role="button"> 정보 수정</a>
        <a class="btn btn-primary info-button" href="mycourse.php" role="button">수강 내역</a>
    </div>