<html>
<body>
<h1>Login Error</h1>
<link rel="stylesheet" type="text/css" href="../css/styles3.css">
<p align="center">You have entered wrong username or password</p>
<div id='login'>
            <form action='ltest.php' method='post'>
               <br/>  <br/><br/>
          
                <input class='login-text' type='text' name='username' value='Username' onFocus="if(this.value == 'Username') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Username';}">
                <input class='login-text' type='password' name='password' value='Password' onFocus="if(this.value == 'Password') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Password';}">
                <input class='login-button' type='submit' name='login' value='Login'>
</form>
</body>
</html>
