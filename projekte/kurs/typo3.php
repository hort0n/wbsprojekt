<?php
    $title = "typo3";
    require_once "header.php";

    Navigation::ShowAll();
?>
<h3>typo3</h3>

<!-- Default PAGE object -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="Seite config">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p></p>
            <h4>Seite config</h4>
            <pre><code>
            page = PAGE
            page.config {
                htmlTag_langKey = de
                locale_all = de_DE
                language = de
            }
            </code></pre>
            <h4>Default PAGE object</h4>
            <pre><code>
                page = PAGE
                page.10 = TEXT
                page.10.value = HELLO KURS!
            </code></pre>
            <h4></h4>
            <pre><code>

            </code></pre>
            <pre><code>
    Seite ->
        New TYPO3 site ->
            Neu ->
                Seitentitel ->
                    Speichern WebDesign(rootseite activiren)

    WebDesign(rootseite)
        Weitere Optionen
            Mehrere seiten erzeugen

    WebDesign(rootseite)
        Template
            Template für neue Website erstellen
                Info/Bearbeiten
                    Setup
            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<!-- CSS datei einbinden -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="CSS, js datei einbinden">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p></p>
            <h4>CSS datei einbinden</h4>
            <pre><code>
            page.includeCSS{
                file1 = fileadmin/template/index.css
                file1.media = all
            }
            </code></pre>
            <h4></h4>
            <pre><code>
                #CSS Dateien einbinden++++++++++++++++++++++++++++++++++++++
                seite.includeCSS {
                    datei1 = fileadmin/template/bootstrap/css/bootstrap.css
                    datei2 = fileadmin/template/fancybox/jquery.fancybox-1.3.4.css
                    datei3 = fileadmin/template/index.css
                }
                </code></pre>
            <h4>js datei einbinden</h4>
            <pre><code>
                #JS Dateien einbinden++++++++++++++++++++++++++++++++++++++++
                seite.includeJS {
                    file1 = http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js
                    file2 = fileadmin/template/fancybox/jquery.fancybox-1.3.4.pack.js
                    file3 = fileadmin/template/js/index.js 
                }
            </code></pre>
            <h4></h4>
            <pre><code>
            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<!-- HTML datei einbinden -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="HTML datei einbinden">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p></p>
            <h4>Layout einbinden ###DOK###</h4>
            <pre><code>
            page.10 = TEMPLATE
            page.10{
                template = FILE
                template.file = fileadmin/layout/index.html
                workOnSubpart = DOK

                marks.LOGO = IMAGE
                marks.LOGO.file = fileadmin/layout/nordsee.jpg

                marks.NAV = HMENU
                marks.NAV.1 = TMENU
                marks.NAV.1.NO.linkWrap = &lt;p> | &lt;/p>
                
                marks.INHALT = CONTENT
                marks.INHALT.table = tt_content
            }
            </code></pre>
            <h4></h4>
            <pre><code>
            #Layout einbinden++++++++++++++++++++++++++++++++++++++++++++
            seite.10 = FLUIDTEMPLATE
            seite.10 {
                file = fileadmin/template/index.html
                
                #Variablen ansprechen
                variables {

                }
            }
            </code></pre>
            <h4></h4>
            <pre><code>
            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<!-- Bild einbinden -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="Bild einbinden">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p></p>
            <h4>Bild einbinden ###LOGO###</h4>
            <pre><code>                
                marks.LOGO = IMAGE
                marks.LOGO{
                file=fileadmin/templates/hamburg.jpg
                altText = Hamburg
                titleText= Hamburg Weihnachten - Binnenalster
                }
            </code></pre>
            <h4></h4>
            <pre><code>
            #im bild, ein IMAGE erzeugen
            bild = IMAGE
            bild {
                file = fileadmin/template/images/rapsfeld.jpg
                altText = Rapsfelder
                titleText = Hamburg - Rapsfeld
                params = class="img-fluid"
            }
            </code></pre>
            <h4></h4>
            <pre><code>
            #in header TEXT schreiben
            header = TEXT
            header.data = leveltitle:0
            </code></pre>
            <h4></h4>
            <pre><code>
            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<!-- tmp -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="@import">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p></p>
            <h4>typoscript</h4>
            <pre><code>
                @import "fileadmin/template/template.typoscript"
            </code></pre>
            <h4></h4>
            <pre><code>
            page = PAGE
            page.config {
                htmlTag_langKey = de
                locale_all = de_DE
                language = de
            }
            #CSS
            page.includeCSS{
                file1 = fileadmin/template/index.css
            }

            #template
            page.10 = TEMPLATE
            page.10 {
                template = FILE
                template.file = fileadmin/template/index.html
                workOnSubpart = DOC

                #DOMAIN
                marks.DOMAIN = TEXT
                marks.DOMAIN.value = Messe und Expostadt&lt;span> Hannover&lt;/span>
                marks.DOMAIN.wrap = &lt;h1> | &lt;/h1>
                #PFAD
                marks.PFAD = HMENU
                marks.PFAD {
                    wrap = &lt;p>Sie befinden sich hier: &nbsp | &lt;/p>
                    1 = TMENU
                    special = rootline
                    1.NO.linkWrap = | / |
                    1.CUR = 1
                    1.CUR.doNotLinkIt = 1
                }
                #NAV
                marks.NAV = HMENU
                marks.NAV {
                    wrap = &lt;ul> | &lt;/ul>
                    1 = TMENU
                    1.NO.linkWrap = &lt;li> | &lt;/li>


                    1.CUR = 1
                    #1.CUR.linkWrap = &lt;li class = "current"> | &lt;/li>
                    1.CUR < .1.NO
                    1.CUR.ATagParams = class = "current"
                }
                #INHALT
                marks.INHALT = CONTENT
                marks.INHALT.table = tt_content
                marks.CONTENT.select.orderBy = sorting
                #end marks.INHALT
            }
            #end page.10
            </code></pre>
            <h4>template.typoscript</h4>
            <pre><code>
                # Default PAGE object:
                seite  = PAGE
                seite.config {
                htmlTag_langKey = de
                locale_all = de_DE
                language = de
                }

                seite.meta.viewport = width=device-width, initial-scale=1

                #CSS Datei einbinden+++++++++++++++++++++++++++++++++++++++
                seite.includeCSS {
                    file1 = fileadmin/template/bootstrap4/css/bootstrap.css
                    file2 = fileadmin/template/main.css
                }
                #JS Dateien einbinden++++++++++++++++++++++++++++++++++++++

                #Template (Layout) einbinden+++++++++++++++++++++++++++++++
                seite.10 = FLUIDTEMPLATE
                seite.10 {
                    file = fileadmin/template/vorlage.html

                    variables {
                        #Domain
                        #RootLine        
                        #Navi
                    }
                }
            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<!-- tmp -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="datum rootline, nav, content">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p></p>
            <h4>Datum</h4>
            <pre><code>
            #Datum
            marks.DATE = TEXT
            marks.DATE.data = date:d.m.Y - H:i:s
            marks.DATE.wrap = &lt;p>Heute ist:&nbsp; | &lt;/p>
            </code></pre>
            <h4></h4>
            <pre><code>
                #rootline
                marks.PATH = HMENU
                marks.PATH {
                    wrap = &lt;p>Sie befinden sich hier: &nbsp; | &lt;/p>
                    1 = TMENU
                    special = rootline
                    1.NO.linkWrap = | &gt;&gt; |

                    1.CUR = 1
                    1.CUR.doNotLinkIt = 1
                }
            </code></pre>
            <h4></h4>
            <pre><code>
                #Haupt Nav
                marks.NAV = HMENU
                marks.NAV {
                    wrap = &lt;ul> | &lt;/ul>
                    1 = TMENU
                    1.NO.linkWrap = &lt;li> | &lt;/li>

                    special = directory
                    special.value = 9

                    1.CUR = 1
                    #1.CUR.linkWrap = &lt;li> | &lt;/li>
                    1.CUR < .1.NO
                    1.CUR.ATagParams = class = "current"
                }
                #ende marks.NAV
            </code></pre>
            <h4></h4>
            <pre><code>
                #Content
                marks.CONTENT = CONTENT
                marks.CONTENT.table = tt_content
                marks.CONTENT.select.orderBy = sorting
                #ende marks.CONTENT
            </code></pre>
            <h4>Menüs mit mehreren (geschachtelten) Ebenen</h4>
            <pre><code>
            #navigation
            nav = HMENU
            nav {
                #1.Ebene
                1 = TMENU
                1.wrap = &lt;ul class="nav navbar-nav w-100"> | &lt;/ul>
                #1.NO.linkWrap = &lt;li class="nav-item"> | &lt;/li>
                1.NO.wrapItemAndSub = &lt;li class="nav-item"> | &lt;/li>
                1.NO.ATagParams = class="nav-link"

                #Zustand Seiten mit Unterseiten
                1.IFSUB = 1
                1.IFSUB.wrapItemAndSub = &lt;li class="nav-item dropdown"> | &lt;/li>
                1.IFSUB.ATagParams = class="nav-link dropdown-toggle text-white"

                #Zustand wenn untermenu Activ ist
                1.ACTIFSUB = 1
                1.ACTIFSUB < .1.IFSUB
                1.ACTIFSUB.wrapItemAndSub = &lt;li class="btn btn-sm btn-secondary"> | &lt;/li>

                #1.expAll = 1
                1.expAll = 0
                
                #2.Ebene
                #2 = TMENU
                #2.wrap = &lt;ul class="nav navbar-nav"> | &lt;/ul>
                ##2.NO.linkWrap = &lt;li class="nav-item"> | &lt;/li>
                #2.NO.wrapItemAndSub = &lt;li class="nav-item"> | &lt;/li>
                #2.NO.ATagParams = class="nav-link"
                
                #Aktiv Zustand
                1.CUR = 1
                1.CUR < .1.NO
                1.CUR.ATagParams = class="btn btn-primary btn-sm w-100"

                2 < .1
                #3 < .1
                #4 < .1
            }
            #ende nav
            </code></pre>
            <h4>login und logout</h4>
            <pre><code>
            #login und logout
            log = RECORDS
            log.tables = tt_content
            log.source = 4
            </code></pre>
            <h4>im main, den Inhalt anzeigen</h4>
            <pre><code>
            #im main, den Inhalt anzeigen
            main < styles.content.get
            main.table = tt_content
            main.select.orderBy = sorting
            </code></pre>
            <h4></h4>
            <pre><code>
            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<!-- Users -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="users, gruppen">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p></p>
            <h4>Datenstz Frontend user</h4>
            <pre><code>
            Neuer Datensatz ->
                Website-Benutzergruppe
            Neuer Datensatz ->
                Website-Benutzer
            </code></pre>
            <h4>Datensatz Algemeine daten</h4>
            <pre><code>
            Assistenten ->
                Anmeldeformular ->
                    uberschrift -> login/loguot 
                        Typ -> Verborgen
                        Speicherort Benutzer -> Frontend user 

            </code></pre>
            <h4></h4>
            <pre><code>

            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

    <!-- tmp -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="Erweiterungen">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p></p>
            <h4>Grid Elements</h4>
            <pre><code>
                gridelements_9.5.0.zip
                Ordner Gridelements erstellen
                Neuer Datensatz erstellen ->
                    CE Backend Layout ->
                        Titel -> (100% spalte, 2 spalten, 3 spalten)
                            Konfiguration
                                Name
                                Spaltennummer

                #xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                # Ausgabe der Grid Elemente anpassen 
                tt_content.gridelements_pi1.20.10.setup {
                # ID des gridelements
                1 < lib.gridelements.defaultGridSetup
                1 {
                columns {
                    # colPos ID
                    1 < .default
                    1.wrap = &lt;div class="col-md-4">|&lt;/div>
                        
                        # colPos ID
                    2 < .default
                    2.wrap = &lt;div class="col-md-4">|&lt;/div>
                        
                        # colPos ID
                    3 < .default
                    3.wrap = &lt;div class="col-md-4">|&lt;/div>
                
                }
                # Optional kann das gesamte Element noch einen wrap bekommen
                wrap = &lt;div class="row">|&lt;/div>
                }
                #ende 3 spaltiges layout
                
                # ID des gridelements-------------------------
                2 < lib.gridelements.defaultGridSetup
                2 {
                columns {
                    # colPos ID
                    4 < .default
                    4.wrap = &lt;div class="col-md-6">|&lt;/div>
                        
                        # colPos ID
                    5 < .default
                    5.wrap = &lt;div class="col-md-6">|&lt;/div>
                }
                # Optional kann das gesamte Element noch einen wrap bekommen
                wrap = &lt;div class="row">|&lt;/div>
                }
                #ende 2 spaltiges layout----------------------
                
                # ID des gridelements-------------------------
                3 < lib.gridelements.defaultGridSetup
                3 {
                columns {
                    # colPos ID
                    6 < .default
                    6.wrap = &lt;div class="col-md-12">|&lt;/div>
                }
                # Optional kann das gesamte Element noch einen wrap bekommen
                wrap = &lt;div class="row">|&lt;/div>
                }
                #ende 1 spaltiges layout----------------------

                } 
                #ende setup gridelements

            #############################
            Seite -> Home + Raster Elemente
            </code></pre>
            <h4></h4>
            <pre><code>

            </code></pre>
            <h4></h4>
            <pre><code>

            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

    <!-- tmp -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="tmp">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p></p>
            <h4></h4>
            <pre><code>

            </code></pre>
            <h4></h4>
            <pre><code>

            </code></pre>
            <h4></h4>
            <pre><code>

            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<fieldset>
    <legend>tmp</legend>
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="tmp">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <pre><code>
                </code></pre>
            <pre><code>
                </code></pre>
        </div>
    </div>
    <!-- end Item -->
    <div class="top">
        <span><a href="#">Top</a></span>
    </div>
</fieldset>

<?php
    require_once "footer.php";
?>