  <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
require 'functions.php';
if (isset($_POST["Register"])){

  if (Registrasi($_POST)>0){
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href ='login.php');
          </script>";
  }else{
    echo "<script>
            alert('Registrasi Gagal');
          </script>";
  }
}
?>
<!DOCTYPE html>
  <html>
  <head>
    <title>Masuk Ke Halaman Registrasi</title>
    <style type="text/css">
      body{
        background:-webkit-linear-gradient(bottom, #FFFFFF,#288BB6);
        background-repeat: no-repeat;}
        #card{
          background:white;
          border-radius: 8px;
          box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
          height: 4 0px;
          margin: 6rem auto 8.1rem auto;
          width: 500px;}
          #card-content {
          padding: 100px 44px;}
          #card-title {
          font-family: "Raleway Thin", sans-serif;
          letter-spacing: 4px;
          padding-bottom: 23px;
          padding-top: 13px;
          text-align: center;}
          .underline-title {
          background: -webkit-linear-gradient(right, #4683AB , #2ec06f);
          height: 2px;
          margin: -1.1rem auto 0 auto;
          width: 100px;}
          a {
            text-decoration:line-through;
          }
          label {
              font-family: "Raleway", Arial;
              font-size: 11pt;
          }
          #forgot-pass {
              color: #4683AB;
              font-family: "Raleway", Arial;
              font-size: 1pt;
              margin-top: 10px;
              text-align: right;
          }
          .form {
              align-items: left;
              display: flex;
              flex-direction: column;
          }
          .form-border {
              background: -webkit-linear-gradient(right, #0068D6 , #0068D6);
              height: 1px;
              width: 14%;
          }
          .form-content {
              background: #fbfbfb;
              border: none;
              outline: none;
              padding-top: 14px;
          }
          #signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #3579A6, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;}

    </style>
  </head>
  <body>
    <center>
      <form action="" method="post">
      <table>
        <tr>
          <div id="card-content"> 
            <div id="card-title">
              <h2>Registrasi</h2>
              <div class="underline-title"></div>
            </div>
          </div>
        </tr>
        <tr>
        <label for="user-username" style="padding-top:13px">&nbsp;Username</label>
        <br>
        <input
         id="user-email"
         class="form-content"
         type="Username"
         name="Username"
         autocomplete="on"
         required />
        <div class="form-border"></div>
          </div>
        </tr>
        <tr>
        <label for="pas-password" style="padding-top:13px">&nbsp;password</label>
        <br>
        <input
         id="user-password"
         class="form-content"
         type="password"
         name="password"
         autocomplete="on"
         required />
        <div class="form-border"></div>
          </div>
        </tr> 
      </table>
      <div>
       <label for="Berhasil">Semoga Berhasil</label>
       <input type="checkbox" name="remember">
      <div>
        <br>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN"/>
    </form>
    </center>
  </body>
</html>