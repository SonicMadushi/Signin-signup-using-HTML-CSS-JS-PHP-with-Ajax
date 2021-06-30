<?php
session_start();

if (isset($_SESSION["id"])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css/">
    </head>

    <body class="b">
    <div class="container-fluid">
<div class="row">
<div class="col-lg-7"></div>
<div class="ui">
        <h1>Hi <?php echo $_SESSION["fn"] . " " . $_SESSION["ln"]; ?></h1>
        <p class="t" id="txt"></p>
        <p id="msg"></p>
        <h2> <?php echo $_SESSION["mobile"]; ?></h2>
        <h2> <?php echo $_SESSION["city"]; ?></h2>

        <form action="savechat.php" method="POST">

        <select class="s1" name="t">
           <?php

          $dbms = new mysqli ("localhost","root","Madushi927@","chat_app","3306");
          $q = "SELECT * FROM user WHERE `id`!='".$_SESSION['id']."' ORDER BY `first_name` ASC;";
          $resultset = $dbms->query($q);
          $r = $resultset->num_rows;

          for($i=0;$i<$r;$i++){
             $d = $resultset->fetch_assoc();

             ?>
              <option value="<?php echo $d['id']?>"><?php echo $d["first_name"]." ".$d["last_name"];?></option>
             <?php
          }

           ?>
        </select>

        <div class="d1">
             <?php
                $dbms = new mysqli ("localhost","root","Madushi927@","chat_app","3306");
                $q =  "SELECT * FROM chat WHERE `user_from`='".$_SESSION['id']."' OR `user_to`='".$_SESSION['id']."'; ";
                $resultset = $dbms->query($q);
                $r = $resultset->num_rows;

                for($x=0;$x<$r;$x++){

                    $d = $resultset->fetch_assoc();

                    ?>
                    <p><?php echo $d["content"]; ?> @ <?php echo $d["date_time"]; ?></p>
                    <?php

                }

             ?>
        </div>

        <input class="t1" type="text" name="c">

        <button class="b1" type="submit">Send</button>

        </form>
</div>
    </div>
    
    </body>

    </html>

<?php


} else {

?>

    <script src="script.js"></script>
    <script>
        gotosignin();
    </script>

<?php


}

?>
