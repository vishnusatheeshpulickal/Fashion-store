<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="login">
  <div class="form">
    <form class="login-form" action="../logics/admin-login.php" method="POST">
      <span class="material-icons">lock</span>
      <input type="text" name="username" placeholder="Username" required/>
      <input type="password" name="password" placeholder="password" required />
      <button name="log-btn" type="submit">login</button>
    </form>  
  </div>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

body {
  background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
}

.login {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  font-family: 'Comfortaa', cursive;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border-radius: 10px;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}

.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  border-radius: 5px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;
}

.form input:focus {
  background: #dbdbdb;
}

.form button {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  background: #4b6cb7;
  width: 100%;
  border: 0;
  border-radius: 5px;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form button:active {
  background: #395591;
}

.form span {
  font-size: 75px;
  color: #4b6cb7;
  margin-bottom:10px;
}
</style>
