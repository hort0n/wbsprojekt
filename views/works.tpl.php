<?php
    require_once 'php/header.php';
?>

        <div class="main mar-t">        
          <div class="works grow">

          <div class="works_item col-25">
                <img class="works_img" src="img/works/hulk.jpg" alt="Hulk Layout" width="650" height="251">
                <div class="works_content">
                    <a class="work_link" href="projekte/hulk" title="Hulk Layout">
                        <div class="works_title">
                            <h3>Hulk Layout</h3>
                        </div>
                        <div class="works_text">
                            Hamburger Menu
                        </div>
                    </a>
                </div>
            </div>

            <div class="works_item col-25">
                <img class="works_img" src="img/works/wbs-training.jpg" alt="Grundkurs Layout" width="650" height="186">

                <div class="works_content">
                    <a class="work_link" href="projekte/kurs" title="Grundkurs Layout">
                        <div class="works_title">
                            <h3>Kurs Layout</h3>
                        </div>
                        <div class="works_text">
                            Kurs Unterlagen
                        </div>
                    </a>
                </div>
            </div>
            <div class="works_item col-25">
                <img class="works_img" src="img/works/flug.jpg" alt="Flug Layout" width="650" height="280">
                <div class="works_content">
                    <a class="work_link" href="projekte/flug" title="Flug Layout">
                        <div class="works_title">
                            <h3>Flug Layout</h3>
                        </div>
                        <div class="works_text">
                            Landing Page
                        </div>
                    </a>
                </div>
            </div>
            <div class="works_item col-25">
                <img class="works_img" src="img/works/anwalt.jpg" alt="Anwalt Layout" width="650" height="246">
                <div class="works_content">
                    <a class="work_link" href="projekte/anwalt" title="Anwalt Layoutt">
                        <div class="works_title">
                            <h3>Anwalt Layout</h3>
                        </div>
                        <div class="works_text">
                            Simple HTML Layout
                        </div>
                    </a>

                </div>
            </div>
            <div class="works_item col-25">
                <img class="works_img" src="img/works/kuba.jpg" alt="Kuba Layout" width="650" height="222">
                <div class="works_content">
                    <a class="work_link" href="projekte/kuba" title="Kuba Layoutt">
                        <div class="works_title">
                            <h3>Kuba Layout</h3>
                        </div>
                        <div class="works_text">
                            Landing Page, Photo slider
                        </div>
                    </a>
                </div>
            </div>

            <div class="works_item col-25">
                <img class="works_img" src="img/works/simple_layout.jpg" alt="Simple HTML Layout" width="650"
                    height="151">
                <div class="works_content">
                    <a class="work_link" href="projekte/simple_layout"
                        title="Simple HTML Layout">
                        <div class="works_title">
                            <h3>Simple HTML Layout</h3>
                        </div>
                        <div class="works_text">
                            Versteckte Überschrift mit Hintergrundgrafik
                        </div>
                    </a>
                </div>
            </div>

            <div class="works_item col-25">
                <img class="works_img" src="img/works/tee.jpg" alt="Tee Layout" width="650" height="169">
                <div class="works_content">
                    <a class="work_link" href="projekte/tee" title="Tee Layout">
                        <div class="works_title">
                            <h3>Tee Layout</h3>
                        </div>
                        <div class="works_text">
                            Bildergalerie
                        </div>
                    </a>
                </div>
            </div>
            <div class="works_item col-25">
                <img class="works_img" src="img/works/family.jpg" alt="Family Layout" width="650" height="241">
                <div class="works_content">
                    <a class="work_link" href="projekte/family" title="Family Layout">
                        <div class="works_title">
                            <h3>Family Layout</h3>
                        </div>
                        <div class="works_text">
                            Kontaktformular, Impressum
                        </div>
                    </a>
                </div>
            </div>


            <?php
                if(!empty($_SESSION['rolle']) && $_SESSION['rolle'] == 'dev'){                      
            ?>    
                <div class="works_item col-25">
                    <img class="works_img" src="img/works/majasapp.jpg" alt="Majas App" width="650" height="241">
                    <div class="works_content">
                        <a class="work_link" href="projekte/majas-app" title="Majas App">
                            <div class="works_title">
                                <h3>Majas App</h3>
                            </div>
                            <div class="works_text">
                                Value exercise
                            </div>
                        </a>
                    </div>
                </div>
            <?php
                }
            ?>


        </div>


        </div>
        <script src="js/script.js"></script>
</body>
</html>