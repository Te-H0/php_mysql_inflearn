<?php  
       require_once("template/top_nav.php");
       require_once("login_session.php");
      

       ?>
            <div id="main-content" style="margin-top:10vh">
                <form class=" row g-3" method="post" action="edit_process.php">
                <div class="col-12" style="display:none">
                    <input type="text" class="form-control" name="id" autocomplete="off"
                            value=<?php echo $user_row['user_id']?> required>
                    </div>
                    <div class="col-12">
                        <label for="name" class="form-label">이름</label>
                        <input type="text" class="form-control" name="name" placeholder="이름" autocomplete="off"
                            value=<?php echo $user_row['name']?> required>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">이메일</label>
                        <input type="text" class="form-control" name="email" placeholder="이메일" autocomplete="off"
                            value=<?php echo $user_row['email']?> required>
                    </div>
                    <div class="col-12">
                        <label for="age" class="form-label">나이</label>
                        <input type="number" class="form-control" name="age" placeholder="나이" autocomplete="off"
                            value=<?php echo $user_row['age']?> required>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">주소</label>
                        <input type="text" class="form-control" name="address" placeholder="주소" autocomplete="off"
                            value=<?php echo $user_row['address']?> required>
                    </div>
                    <div class="col-12">
                        <button class=" btn btn-primary" style="width:20vw">!등 록!</button>
                    </div>
                    <div class="col-12">
                        <a href="login.php" class=" btn btn-primary" style="width:20vw">뒤로가기</a>
                    </div>
                </form>

            </div>

            <?php require_once("template/bottom.php");?>