
<?php
 
?>
 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./../../css/rosof-login.css" />
    <title>Entre ou crie Conta</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  method="post" action="login.php" class="sign-in-form" id="frm_login">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" value="rodrino23"  name="username_l" id="username_l" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" value="A1234i/*" name="password_l" id="password_l" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p><?php if(isset($_GET['error'])&& $_GET['error'] =401):echo "Acesss refused!"; endif;  ?></p>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form method="post" action="register.php" class="sign-up-form" id=frm-registe>
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" id="username"  placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email"  placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password"  placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p><?php if(isset($_GET['error'])&& $_GET['error'] =500):echo "No created!"; endif;  ?></p>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>É novo aqui? ?</h3>
            <p>
             Crie rapidamente uma conta e usufrua dos nossos serviços!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Criar
            </button>
          </div>
          <img src="./../../img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Já possue uma conta?</h3>
            <p>
             Então entre agora mesmo!
            </p>
            <button class="btn transparent" id="sign-in-btn">
            Entrar
            </button>
          </div>
          <img src="./../../img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="./../../js/login.js"></script>
  </body>
</html>
