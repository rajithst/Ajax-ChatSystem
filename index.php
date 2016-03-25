<?php
include 'db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" media="all"/>
    <script>

        function ajax(){

            var req= new XMLHttpRequest();

            req.onreadystatechange = function (){

                if (req.readyState == 4 && req.status == 200){
                    document.getElementById('chat').innerHTML= req.responseText;
                }

            }

            req.open('GET','chat.php',true);
            req.send();
        }

        setInterval(function(){ ajax();},1000);

    </script>
</head>

<body onload="ajax();">

<div id="container">
    <div id="chat_box">
        <div id="chat"></div>

    </div>

    <form action="index.php" method="post">

        <input type="text" name="name" placeholder="Enter name"/>
        <textarea name="msg" placeholder="enter message"></textarea>
        <input type="submit" value="send"/>

    </form>

    <?php
    if(isset($_POST) === true and empty($_POST) === false){
        $name=$_POST['name'];
        $msg=$_POST['msg'];

        $query="INSERT INTO users (nmes,msg) VALUES ('$name','$msg')";

        $run=$con->query($query);
        if($run){
            echo "<embed loop='false' src='chatsound.wav' hidden='true' autoplay='true'/>";
        }

    }
    ?>


</div>

</body>
</html>