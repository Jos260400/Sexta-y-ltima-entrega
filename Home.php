<?php
    session_start();

?> 
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="home.css">

    <title>Welcome to MYchat</title>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#ChatText").keyup(function(e){
                
                if(e.keyCode==13){
                    var ChatText=$("#ChatText").val();
                    $.ajax({
                        type:'POST',
                        url: 'InsertMessage.php',
                        data:{ChatText:ChatText},
                        success:function(){
                            $("#ChatMessages").load("DisplayMessages.php");
                            $("#ChatText").val("");
                        }
                    });
                }
            });

            setInterval(function(){
            $("#ChatMessages").load("DisplayMessages.php");
            },1500);


            $("#ChatMessages").load("DisplayMessages.php")
        });
       
    </script>
</head>
<body>
    <center><h2 style="color: orange;font-family: tahoma; font-size: 30px;">Welcome <span><?php echo $_SESSION['UserName'
        ];?></span></h2></center>
    <br><br>
        <div id="ChatBig">
        <div id="ChatMessages" class="scrollbar">
        </div>
        <textarea id="ChatText" name="ChatText" placeholder="Type Message..."></textarea>
    </div>
</body>
</html>
