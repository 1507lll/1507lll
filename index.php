<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="main.css">
    <title>Password Field</title>
</head>
<body>

    <div class="loginPage">

    <form>
        <label for="fname">Student name</label><br>
        <input type="text" id="fname" name="fname" placeholder="Id"><br>
        <label for="lname">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Password"/>
        <i class="bi bi-eye-slash" id="togglePassword"></i>
    </form>
    
    </div>
        <div class="Login_button">
          <input type="button" id="clickMe" class="loginClass"  onclick="checkValid()" value="Submit"/>
        </div>
     


      <script>
          function checkValid() {
             let name = document.getElementById('fname');
             var password = document.getElementById('password');

             if(name.value == 'adinur' && password.value == '12345')
             {
                pageRedirect();
             }else{
                 alert('Invalid');
             }
            }

            function pageRedirect() {
                window.location.href = "https://www.google.com/";
            }   
         

         

      </script>

    
</body>
</html>
