<?php
    require_once 'php/header.php';
?>


<div class="">
    <form method="post" name="loginForm">
        <div class="container row justify-content-center">
          <div class="col-66 pad-b mar-t">
            <span>
              <?php
                if(!empty($_SESSION['meldung'])){
                  echo $_SESSION['meldung'];
                }else{
                  echo '* Melde dich an.';
                }
              ?>
            </span>
          </div>

          <div class="col-66">
            <label for="loginName">E-Mail</label>
            <input type="text" name="loginName" id="loginName" class="input-control mar-tb" placeholder="E-Mail" required autofocus>
          </div>

          <div class="col-66">
            <label for="loginPasswort">Passwort</label>
            <input type="password" class="input-control mar-tb" id="loginPasswort"  placeholder="Passwort" name="loginPasswort" required>
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
                
            <button type="submit" id="loginSubmit" class="btn col-66 mar-tb">Einloggen</button>
          
          <div class="col-66 mar-t">
            <a href="registrierung">zur Registrierung</a>
        </div>
        </div>
    </form>
</div>



<script src="js/script.js"></script>
</body>
</html>