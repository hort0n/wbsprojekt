<?php
    require_once 'php/header.php';
?>
    <div class="container col-66 mar-b">
        <h2 class="mar-b">Profile</h2>
    </div>


<div class="container">



    <form method="post" action="/profile/updateUserInfo" name="updateUserInfoForm">
    
        <div class="row justify-content-center">
            <div class="col-66 mar-tb"><span>
                <?php

                if(!empty($_SESSION['update-success'])){
                    echo $_SESSION['update-success'];
                    
                }else if(!empty($_SESSION['update-fehlt'])){
                    echo $_SESSION['update-fehlt'];
        
                    
                }else{
                    echo "* Bearbeitung Benutzerdaten";
                    
                }
                ?>
                
                <!-- * Bitte felder ausfühlen. -->
                </span>
            </div>

            <?php if(isset($meldung)) : ?>
            <p class="col-66 msg"> <?= $meldung; ?> </p>
            <?php endif; ?>
            
    

            <div class="col-66">
                <label for="gender">Anrede</label>
                <select name="gender" id="gender" class="custom-select mar-tb">
                    
                        <option value="none">Gender</option>
                        <option value="herr"<?= $pageData['gender'] == 'herr' ? ' selected="selected"' : '' ; ?>>Herr</option>
                        <option value="frau"<?= $pageData['gender'] == 'frau' ? ' selected="selected"' : '' ; ?>>Frau</option>
                        <option value="divers"<?= $pageData['gender'] == 'divers' ? ' selected="selected"' : '' ; ?>>Divers</option>
                   
                </select>
             </div>




            <div class="col-66">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="input-control mar-tb" value="<?php echo $pageData['name'] ?>" required>
                <small id="nameHelp" class="form-text text-muted">mindestens 4 Buchstaben (klein, groß)</small>
            </div>



            <div class="col-66">
                <label for="email">E-Mail</label>
                <input type="text" name="email" id="email" class="input-control mar-tb" value="<?php echo $pageData['email'] ?>" disabled>
            </div>

            <div class="col-66">
                <label for="motto">Motto</label>
                <input type="text" class="input-control mar-tb" id="motto" name="motto" value="<?php echo $pageData['motto'] ?>">
            </div>

            <div class="col-66">
                <label for="ueber-mich">über Mich</label>
                <textarea class="input-control mar-tb" name="ueber-mich" id="ueber-mich" cols="30" rows="10"><?php echo $pageData['ueber_mich'] ?></textarea>
            </div>

            <button id="btn-update-profile" class="btn col-66 mar-tb">Update Profile</button>
        </div>


    </form>
    <hr class="col-66 center">
    <form method="post" action="/profile/updatePassword" name="changePasswordForm">

        <div class="row justify-content-center">
        <!-- <span class="form-group col-8 p-0">Passwort wechseln</span> -->
        <div class="col-66 mar-tb">
            <span><?php
                    if(!empty($_SESSION['update-password'])){
                        echo $_SESSION['update-password'];
                    }else{
                        echo "* Passwort wechseln";
                    }
                ?>
            </span>
        </div>
        <div class="col-66">
            <label for="password">Passwort</label>
            <input type="password" class="input-control mar-tb" id="password"  placeholder="Passwort" name="password" required>
            <small id="pwdHelp" class="form-text text-muted">mindestends 8 Zeichen, aus kleinen und großen Buchstaben sowie Zahlen</small>
        </div>
        <div class="col-66 mar-tb">
            <label for="wpassword">Passwort widerholen</label>
            <input type="password" class="input-control mar-tb" id="wpassword"  placeholder="Passwort widerholen" name="wpassword" required>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <button id="btn-update-password" class="btn col-66 mar-b">Update Passwort</button>
        </div>
    </form>

</div>

<script src="js/script.js"></script>
</body>
</html>