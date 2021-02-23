<!DOCTYPE html>
<html>
    <head>
        <title>Đăng kí</title>
        <link rel="stylesheet" href="CSS/1.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <style type="text/css">
             
*{
    margin:0;
    padding:0;
    border:none;
    font-family: 'Open Sans', sans-serif;
      text-decoration:none;
}
body {
    overflow: hidden;
    background-color: #ededed;
}
.to {
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
}
 
.form {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 500px;
    width:450px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
}
h2 {
    margin-top: 50px;
    margin-bottom: 30px;
}
i.fab.fa-app-store-ios {
    display: block;
    margin-bottom: 50px;
    font-size: 28px;
}
 
label {
    margin-left: -126px;
    display: block;
    font-weight: lighter;
 
}
input{
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
}
input[type="text"] {
    padding: 5px;
    width: 70%;
}
 
input#submit {
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom: 10px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#submit:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
    
        </style>
    </head>
    <body>
        <form action="xuly.php" method="POST">
        <div class="to">
            <div class="form">
                <h2>Đăng ký tài khoản</h2>
                <i class="fab fa-app-store-ios"></i>
                <label style="margin-left: -150px;">Username</label>
                <input type="text" name="txtUsername">
                <label>Mật khẩu</label>
                <input type="text" name="txtPassword">    
                <label style="margin-left: -150px;">Email</label>
                <input type="text" name="txtEmail"> 
                <input id="submit" type="submit" name="submit" value="Gửi">
                 <p class="text-whitesmoke text-center"><small>BẠN ĐÃ CÓ TÀI KHOẢN?</small></p>
                        <a class="text-darkyellow" href="http://localhost/gnu/login.php"><small>ĐĂNG NHẬP</small></a>
                  </div>
                  </div>
                  </form>    
            </div>                
        </div>
    </body>
</html>
 