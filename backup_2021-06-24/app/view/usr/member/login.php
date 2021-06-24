<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
$pageTitleIcon = '<i class="fas fa-sign-in-alt"></i>';
$pageTitle = "로그인 페이지";
?>
<?php require_once __DIR__ . "/../head.php"; ?>

<section class="secion-login">
  <div class="login-box w-1/2 mx-auto">
    <form action="doLogin" method="POST">
    <div class="input-text">             
      <span>LoginID</span>
      <input class= "w-full p-2" type="text" name="loginId" placeholder="아이디를 입력해주세요." style="background-color: #e2e2e2;" >
      </div>
        <span>PassWord</span>
        <input class="w-full p-2"type="password" name="loginPw" placeholder="비밀번호를 입력해주세요." style="background-color: #e2e2e2;"> 
      </div>
      <div class = "text-center">
        <input type="submit" class = "btn btn-info" value="Login">
      </div>
    </form>
  </div>
</section>

<?php require_once __DIR__ . "/../foot.php"; ?>