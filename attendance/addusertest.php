<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <center>
        <fieldset style="background-color: bisque; width: 40%; height: 40%; " />
        <legend allign="left">Login Credentials</legend>
        <form method="post" action="adduser.php" >
           username <input type="text" name="username" /><br><br> <!-- Put as many input types as variables and name them the name that u use to recieve. DUH!  -->  
          pass <input type="password" name="password" /><br><br>
          name <input type="text" name="name" /><br><br>
            <input type="submit" value="Login" />
            
        </form></center>
    </body>
</html>
