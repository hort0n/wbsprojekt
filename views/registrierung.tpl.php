<?php
    require_once 'php/header.php';
?>

<div class="container">
    <form method="post" name="RegisterForm">
        <div class="row justify-content-center">
            <div class="col-66 mar-tb"><span>
            <?php
             if(!empty($pageData['exist-user'])){
                echo $pageData['exist-user'];                
             }else if(!empty($pageData['passwoerter-ungleich'])){
                echo $pageData['passwoerter-ungleich'];
             }else if(!empty($pageData['reg-erfolgrech'])){
                echo $pageData['reg-erfolgrech'];
             }else{
                 echo "* Bitte alle Felder ausfülen";
             }

             ?>
            
            <!-- * Bitte felder ausfühlen. -->
            </span></div>
            <div class="col-66 mar-tb">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="input-control mar-tb" placeholder="Name" required>
                <small id="nameHelp" class="form-text text-muted">mindestens 4 Buchstaben (klein, groß)</small>
            </div>
            <div class="col-66 mar-tb">
                <label for="email">E-Mail</label>
                <input type="text" name="email" id="email" class="input-control mar-tb" placeholder="E-Mail" required>
            </div>
            <div class="col-66">
                <label for="password">Passwort</label>
                <input type="password" class="input-control mar-tb" id="password"  placeholder="Passwort" name="password" required>
                <small id="pwdHelp" class="">mindestends 8 Zeichen, aus kleinen und großen Buchstaben sowie Zahlen</small>
            </div>
            <div class="col-66 mar-tb">
                <label for="wpassword">Passwort wiederholen</label>
                <input type="password" class="input-control mar-tb" id="wpassword"  placeholder="Passwort widerhollen" name="wpassword" required>
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <!-- <input type="submit" class="btn btn-primary form-group col-8" value="Senden"> -->
            <button id="register" class="btn col-66">Senden</button>
        </div>
    </form>
</div>

<script src="js/script.js"></script>
</body>
</html>