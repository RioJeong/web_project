<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>contact</title>
  <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>
  <nav>
    <p>
      <a href="main.html">MAIN</a>&emsp;&emsp;&emsp;
      <a href="profile.html">PROFILE</a>&emsp;&emsp;&emsp;
      <a href="timeline.html">TIMELINE</a>&emsp;&emsp;&emsp;
      <a href="contact.html">CONTACT</a>
    </p>
  </nav>
  <div>
    <p>
      Contact
    </p>
    <div class="form">
        <?php
        $db = new mysqli("localhost","estr1006","dbsdud1217","estr1006");
        mysqli_set_charset($db,"utf8");

        if (mysqli_connect_errno()){
        echo "error: " . mysqli_connect_error();
        exit;
        }

        $name = $_GET["name"];
        $phone= $_GET["phone"];
        $email= $_GET["email"];
        $title= $_GET["title"];
        $contents= $_GET["contents"];

        $sql = "insert into contact (name, phone, email, title, contents)
        values ('$name', '$phone', '$email', '$title', '$contents')";
        if (mysqli_query($db,$sql)){
        echo $name."님 제출 완료되었습니다! 확인하고 연락드리겠습니다";
        } else {
        echo "제출 실패했습니다!";
        }
        ?>
    </div>
  </div>

  <footer>
    <p>
      Copyright 2018© Jeong YoonYoung
    </p>
  </footer>
</body>

</html>
