<?php require_once("template/top.php")?>
            <div id="main-content" style="margin-top:10vh">
                <form class=" row g-3" method="post" action="regist_process.php?value=new">
                    <div class="col-12">
                        <label for="name" class="form-label">이름</label>
                        <input type="text" class="form-control" name="name" placeholder="이름" autocomplete="off"
                            required>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">이메일</label>
                        <input type="text" class="form-control" name="email" placeholder="이메일" autocomplete="off"
                            required>
                    </div>
                    <div class="col-12">
                        <label for="age" class="form-label">나이</label>
                        <input type="number" class="form-control" name="age" placeholder="나이" autocomplete="off"
                            required>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">주소</label>
                        <input type="text" class="form-control" name="address" placeholder="주소" autocomplete="off"
                            required>
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