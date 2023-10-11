<?php
    session_start();
    echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jq.js"></script>
    <script>
        $(function(){ 
            setInterval(refresh, 1000);
        });
        function refresh(){
            $("$logs").load('display.php');
        }
        function main(){            
            var logs = $('#message').val();
            $.ajax({
                type:"POST",
                url:"post.php",
                data:{logs},
                success:function(){
                    refresh();
                }
            });
        }
    </script>
</head>
<body>
    <div id="chat">
        <div id="logs"></div>
        <div id="form">
            <textarea id="message"></textarea>
            <button onclick="main()">Küld</button>
        </div>
    </div>
    <a href="logout.php"></a>
</body>
</html>