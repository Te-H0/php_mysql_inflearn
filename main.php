<?php require_once("template/top_nav.php");
      require_once("login_session.php"); ?>
          <div class="jumbotron">INFLEARN</div>

          <form
            method="GET"
            action="course_list.php"
          >
            <input
              id="main_search"
              name="keyword"
              type="text"
              placeholder="배우고 싶은 지식을 입력해보세요."
            />
          </form>
<?php require_once("template/bottom.php") ?>
       
