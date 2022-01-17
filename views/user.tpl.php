<?php
    require_once 'php/header.php';
?>
    <div class='container'>
        <h2>User Control</h2>
    </div>

    <div class='container'>
        <div class="row justify-content-center">
                <div class="col-66 mar-tb"><span>
                    <?php
                        if(!empty($_SESSION['aktiv-success'])){
                            echo $_SESSION['aktiv-success'];
                            $_SESSION['aktiv-success']='';
                        }else if(!empty($_SESSION['update-fehlt'])){
                            echo $_SESSION['update-fehlt'];
                        }else if(!empty($pageData['activateuser'])){
                            echo $pageData['activateuser'];
                        }else if(!empty($pageData['lockuser'])){
                            echo $pageData['lockuser'];
                        }else if(!empty($pageData['deluser'])){
                            echo $pageData['deluser'];
                        }else{
                            echo "* Benutzerliste: aktivieren, sperren oder löschen ";    
                        }
                    ?>

                    
                    <!-- * Bitte felder ausfühlen. -->
                    </span>
                </div>
            <ul class="userlist col-66 mar-tb">
                <?php
                    
                    foreach($pageData['userList'] as $key=>$value){ ?>
                        <li>
                            <!-- <div class="col-66 mar-tb"> -->
                            <form method="post" name="form-user">    
                                <div class="d-flex justify-content-between mar-t pad-lr">
                                    <h5 class="mar-tb">Benutzer: <span class=""><?=$value['email']?></span></h5>
                                    <small class="mar-tb">Rolle: <?=$value['rolle']?></small>
                                </div>
                                <div class="d-flex justify-content-between pad-lr mar-tb">
                                    <small class="mar-b">Status: </small>
                                    <input type="hidden" name="username" value="<?=$value['email']?>">
                                    <div>
                                        <label for="aktiv-<?=$value['id']?>">aktivieren:</label>
                                        <input class="statususer" style = "cursor: pointer;" name="action" type="radio" id="aktiv-<?=$value['id']?>" value="activateuser-<?=$value['id']?>"
                                        <?php echo ($value['flag'] != "0") ? "checked=checked" : "";?> >
                                    </div>

                                    <div>
                                        <label for="lockuser-<?=$value['id']?>">sperren:</label>
                                        <input class="statususer" style = "cursor: pointer;" name="action" type="radio" id="lockuser-<?=$value['id']?>" value="lockuser-<?=$value['id']?>" <?php echo ($value['flag'] == "0") ? "checked=checked" : "";?>>
                                    </div>

                                    <div>
                                        <label for="deluser-<?=$value['id']?>">löschen:</label>     
                                        <input class="deluser" style = "cursor: pointer;" name="action" type="radio" id="deluser-<?=$value['id']?>" value="deluser-<?=$value['id']?>">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mar-b pad-lr">
                                    <small class="mar-tb">Erstellt am: <?=$value['created_at']?></small>
                                    <button style = "color: #fff; background-color:#000; border-color:#000; border: 1px solid transparent; padding: 0 3px; cursor: pointer; margin-bottom:3px;">Send</button>
                                </div>
                            </form>    
                    </li>
                    <?php
                    }
                ?>
            </ul>
        </div>
    </div>
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
    <script src="js/script.js"></script>
</body>
</html>