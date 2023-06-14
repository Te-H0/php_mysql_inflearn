<?php require_once("template/top.php");
    require_once("dbconn.php");
    $sql_login_reset="UPDATE User SET login =0";
    mysqli_query($con,$sql_login_reset);// 로그인 창에 오면 모든 계정 로그 아웃 시키기

?>
    <div id="login-content">
        <h1>Login</h1>
        <form  method="post" id="login" action="login_process.php">
            <input type="text"  name="name" placeholder="이름" autocomplete='off' style="width:20vw; margin-bottom:10px ;" required>
        </form>
        <button type="submit" form="login" class="btn btn-primary"
                        style="margin-bottom:10px ;width:20vw">로그인</button>
        <a href="regist.php" class=" btn btn-primary" style="margin-bottom:10px ; width:20vw">회원가입</a>
        <a href="user_list.php" class=" btn btn-primary" style=" width:20vw">회원 목록</a>
    </div>

        
    </div>
<?php require_once("template/bottom.php");?>