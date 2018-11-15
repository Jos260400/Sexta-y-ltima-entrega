<!DOCTYPE html>
<html>
<head>
    <title>Welcome to MYCHATAPP</title>
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="signup.css";
</head>
<body>
    <center>
    <div id="SignUp Div">
        <form id="form2" method="post" action="Insert User.php">
            <h2>SignUp Form</h2>
            <table>
                <tr>
                    <td><input type="text" name="UserName" placeholder="Enter Your Name" required></td>
                </tr>

                <tr>
                    <td><input type="email" name="UserMail" placeholder="Enter Your Email" required></td>
                </tr>

                <tr>
                    <td><input type="password" name="UserPassword" placeholder="Enter Your Password" required></td>
                </tr>

                <tr>
                    <td><input id="btn2" type="submit" value="SignUp"></td>
                </tr>
                <?php
                    if(isset($_GET['success'])){
                ?>
                <tr>
                    <td></td><td><span style="color: green;">UserInserted</span></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </div> 
    </center>
</body>
</html>