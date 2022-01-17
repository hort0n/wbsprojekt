<?php
    require_once 'php/header.php';
?>

<div class="container">
        <h2 class="mar-tb">Gästebuch</h2>
</div>

<div class="row justify-content-center">
    <div class="col-66 mar-tb">
        <?php
            
            if(!empty($_SESSION['user'])){
                if(!empty($pageData['newpost'])){
                    echo $pageData['newpost'];                
                }else if(!empty($pageData['delpost'])){
                    echo $pageData['delpost'];
                }else{
                    echo "* Neue Post hier";
                }
            }
        ?>
    </div>
</div>


<?php

/*     echo "<pre>";
    if(!empty($pageData['newpost'])){
        var_dump($pageData['newpost']);
    }       
    echo "</pre>"; */

    if(!empty($_SESSION['user'])){
        include 'views/post.tpl.php';
    }else{
        echo "<div class='container'><span>* Um ein Komentar zu schreiben, bitte einloggen.</span></div>";
    }

?>



<div class="container">
    <ul>
    
        <?php
            
            foreach($pageData['content'] as $key=>$value){ ?>
                <li>
                
                    <div class="">
                        <form method="post" name="form-delpost">   
                            <!-- <div class="d-flex w-100 justify-content-between"> -->

                            <div class="d-flex justify-content-between mar-tb">
                                <h4 class="mb-1"><?=$value['titel']?></h4>
                                <small>Autor: <?=$value['name']?></small>
                            </div>
                            <p class="bg-dark-grey text-light pad-lr pad-tb mar-tb"><?=$value['post']?></p>
                            
                            <div class="d-flex justify-content-between">
                                <small class="grow">Erstellt am: <?=$value['created_at']?></small>
                                <?php if(!empty($_SESSION['rolle']) && $_SESSION['rolle'] == 'admin') : ?> 
                                    <input type="hidden" name="action" value="delpost">
                                    <input type="hidden" name="postid" value="postid-<?=$value['postid']?>">

                                    <label class="mar-r">Dieser Beitrag löschen</label>
                                    <button class="delpost" style = "color: #fff; background-color:#000; border-color:#000; border: 1px solid transparent; width:21px;" name="<?=$value['name']?>">X</button>                                     
                                <?php endif;?>
                            </div>
                          
                        </form>
                    </div>
                        
                    <br>
            </li>
            <?php
            }
        ?>
        
    </ul>
</div>
    
    


<script src="js/script.js"></script>
</body>
</html>