<?php
    $title = "PHP";
    require_once "header.php";

    Navigation::ShowAll();
?>
    <h3>PHP Sprachkern und Syntax</h3>
    <fieldset>
        <legend>Welche Aussagen zu einer for-Schleife in PHP sind korrekt?</legend>
        <div>
            <ul class="fragen">
                <li>Die Startanweisung ist die letzte Anweisung im Kopf einer for-Schleife.</li>
                <li class="true">Der Modifikator verändert nach jedem Schleifendurchlauf den Wert der Zählvariablen, sodass die Abbruchbedingung die Schleife irgendwann beenden kann.</li>
                <li class="true">Die Abbruchbedingung überprüft in jedem Schleifendurchlauf die Zählvariable und entscheidet, ob die Schleife beendet werden muss.</li>
                <li>Die Startanweisung verändert nach jedem Schleifendurchlauf den Wert der Zählvariablen, sodass die Abbruchbedingung die Schleife irgendwann beenden kann.</li>
                <li class="true">Die Startanweisung legt den Ausgangswert der Zählvariablen fest.</li>
                
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Aussagen zu Endlos-Schleifen in PHP sind korrekt</legend>
        <div>
            <ul class="fragen">
                <li class="">
                Endlos-Schleifen sind Schleifen, deren Abbruchbedingung niemals true wird bzw. ist.
                </li>
                <li class="">
                Eine while-Schleife mit der Abbruchbedingung $i < 5, in deren Schleifenkörper die Zählvariable $i nicht verändert wird, ist immer eine Endlos-Schleife.
                </li>
                <li class="">
                Eine for-Schleife mit der Startanweisung $i = 0, deren Modifikator die Zählvariable $i nicht verändert, ist immer eine Endlos-Schleife.
                </li>
                <li class="true">
                Endlos-Schleifen sind Schleifen, deren Abbruchbedingung niemals false wird bzw. ist.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Aussagen über PDO sind in PHP korrekt?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Dank PDO ist es bei der Unterstützung mehrerer DBMS komplett unnötig, SQL-Code speziell für einzelne DBMS zu schreiben.
                </li>
                <li class="true">
                PDO bietet eine einheitliche Schnittstelle für unterschiedliche DBMS.
                </li>
                <li class="">
                Um eine Datenbank-Verbindung mit PDO aufzubauen, wird immer die Funktion pdo_connect() verwendet.
                </li>
                <li class="true">
                Die Datenbank-Verbindung ist ein Objekt der Klasse PDO.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was bedeutet der Begriff mixed in der Beschreibung einer Funktion auf php.net, wenn dieser in den runden Klammern vor dem ersten Parameter steht?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Der Begriff mixed steht bei einer Funktion mit mehreren Parametern für eine beliebige Reihenfolge, in welcher die Werte für die Parameter übergeben werden dürfen.
                </li>
                <li class="">
                Der Begriff mixed steht für eine zufällige Zahl, die als Wert für den ersten Parameter übergeben werden muss.
                </li>
                <li class="">
                Der Begriff mixed steht dafür, dass sich der Datentyp des ersten Parameters von dem Datentyp des Rückgabewerts der Funktion unterscheidet.
                </li>
                <li class="true">
                Der Begriff mixed steht für einen nicht eindeutigen Datentyp. Als Wert für den ersten Parameter kann also nicht nur ein bestimmter Datentyp vorkommen.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Sie haben die URL http://example.com/test.php?name=Anton aufgerufen. Wie kann der PHP-Code in der Datei test.php aussehen, um die Ausgabe Hallo Anton zu erzeugen?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                echo "Hallo " . $_REQUEST['name'];
                </li>
                <li class="">
                echo "Hallo " . $_POST['name'];
                </li>
                <li class="true">
                echo "Hallo " . "Anton";
                </li>
                <li class="true">
                echo "Hallo " . $_GET['name'];
                </li>
                <li class="">
                echo "Hallo " . "$Anton";
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche PHP-Ausdrücke erzeugen den booleschen Wert true?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                5 == '5'
                </li>
                <li class="true">
                5 === (7 - 2)
                </li>
                <li class="true">
                5 <= 5
                </li>
                <li class="">
                5 != '5'
                </li>
                <li class="true">
                5 !== '5'
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Sie möchten in einem PHP-Skript anstatt des Statuscodes 200 den Status 404 zurückgeben. Welche Möglichkeiten gibt es, dies umzusetzen?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                http_response_code(404);
                </li>
                <li class="">
                header(404);
                </li>
                <li class="true">
                header('HTTP/1.1 404 Not Found');
                </li>
                <li class="">
                http_request_code(404);
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Sie möchten in PHP einen Variablenbezeichner verwenden, der aus mehreren Wörtern besteht. Was sind gültige Variablen?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                $verschluesseltes_kennwort
                </li>
                <li class="true">
                $verschluesseltesKennwort
                </li>
                <li class="">
                $verschluesseltes-kennwort
                </li>
                <li class="">
                VERSCHLUESSELTES_KENNWORT
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Gegeben sei nachfolgender Session-Inhalt. Was sind gültige PHP-Anweisungen, um die ID 42 aus der Session zu entfernen? Jede Variante, die den Wert entfernt oder ersetzt, ist hierbei als korrekt anzusehen.</legend>
        <div>
            <pre>
                $_SESION = [
                    'last_id' => 42,    
                ];
            </pre>
        <ul class="fragen">
                <li class="true">
                $_SESSION['last_id'] = null;
                </li>
                <li class="true">
                $_SESSION = [];
                </li>
                <li class="true">
                unset($_SESSION['last_id']);
                </li>
                <li class="">
                header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Eine Bündelung von verschiedenen Software-Paketen mit gemeinsamen Installer nennt man …</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Distribution
                </li>
                <li class="">
                Repository
                </li>
                <li class="">
                Datenbank
                </li>
                <li class="">
                Packet
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welchen Wert hat die Variable $ausschnitt in der dritten Zeile des nachfolgenden PHP-Codebeispiels?</legend>
        <div>
        <pre>
        $text = 'das ist ein test';
        $ausschnitt = trim(substr($text, 3, 2));
        echo $ausschnitt;
        </pre>
        <ul class="fragen">
                <li class="">
                's '
                </li>
                <li class="">
                'is'
                </li>
                <li class="">
                's'
                </li>
                <li class="true">
                'i'
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Ausgabe erzeugt die nachfolgende PHP-Anweisung?</legend>
        <div>
            <pre>
                echo (float)'Heute is der 15.3.';
            </pre>
        <ul class="fragen">
                <li class="">
                3
                </li>
                <li class="">
                Dieser Code erzeugt keine Ausgabe.
                </li>
                <li class="true">
                0
                </li>
                <li class="">
                15
                </li>
                <li class="">
                15.3
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Ausgabe erzeugt die nachfolgende PHP-Anweisung?</legend>
        <div>
            <pre>
                echo 3 . 7;
            </pre>
        <ul class="fragen">
                <li class="">
                3
                </li>
                <li class="">
                Dieser Code erzeugt keine Ausgabe.
                </li>
                <li class="true">
                37
                </li>
                <li class="">
                7
                </li>
                <li class="">
                3.7
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Es gibt einige Funktionen in PHP, die Arrays als Parameter übergeben bekommen. Welche Besonderheit haben die Funktionen array_pop() und array_shift()?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Sie liefern sowohl einen Wert des Arrays als auch das komplette als Parameter übergebene Array als Rückgabewert.
                </li>
                <li class="">
                Die Parameteranzahl ist unendlich. Der Wert für den ersten Parameter muss übergeben werden, alle anderen Parameter sind optional.
                </li>
                <li class="true">
                Sie liefern einen Wert als Rückgabewert und verändern das als Parameter übergebene ursprüngliche Array.
                </li>
                <li class="">
                Sie haben keinen Rückgabewert und verändern lediglich das als Parameter übergebene Array.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>In welchem Abschnitt der HTTP-Kommunikation werden die Daten eines umfangreichen HTML-Formulars typischerweise an den Server übertragen?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Entity Body der HTTP-Response
                </li>
                <li class="true">
                Entity Body des HTTP-Requests
                </li>
                <li class="">
                Request-Line
                </li>
                <li class="">
                Status-Line
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was sind korrekte Verkettungen in PHP?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                'Hallo ' . 'Welt'
                </li>
                <li class="true">
                'Rasmus' . ' ' . 'Lerdorf'
                </li>
                <li class="true">
                $vorname . ' ' . $nachname
                </li>
                <li class="">
                'Hallo ' + 'Welt'
                </li>
                <li class="">
                'Rasmus' + ' ' + 'Lerdorf'
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welchen Nachteil hat die sort-Funktion in PHP?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Ein zu sortierendes Array darf nur Zahlen (d. h. Integers oder Floats) als Werte enthalten, sonst kommt es zu einem PHP-Fehler.
                </li>
                <li class="">
                Es gibt keine Möglichkeit das Sortierverhalten (z. B. über Flags) zu beeinflussen. Dies geht nur bei der Funktion flagsort().
                </li>
                <li class="true">
                Bei der Sortierung eines assoziativen Arrays gehen die Schlüssel und ihre Zuordnung zum Wert verloren.
                </li>
                <li class="">
                Es können nur Arrays mit maximal 10 Werten sortiert werden.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Sie haben eine Seite mit einem PHP-Skript mit nachfolgender URL aufgerufen.</legend>
        <div>
            <pre>
            daten.php?obst%5B%5D=Apfel&amp;obst%5B%5D=Kirsche&amp;obst%5B%5D=Banane
            </pre>
        <ul class="fragen">
                <li class="">
                $_GET['obst'][1];
                </li>
                <li class="">
                $_GET['obst'][3];
                </li>
                <li class="">
                $_GET['obst'][0];
                </li>
                <li class="true">
                $_GET['obst'][2];
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Beim Einbinden mehrerer Dateien mit require hat ein Kollege versehentlich einen endlosen Kreislauf in seinem PHP-Projekt verursacht. Was könnte im Verlauf der (nahezu) endlosen Skriptabarbeitung zu einem Abbruch führen?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Die maximale Ausführungszeit wird überschritten.
                </li>
                <li class="true">
                Es wird mehr Arbeitsspeicher benötigt, als verfügbar ist.
                </li>
                <li class="">
                Die minimale Ausführungszeit wird unterschritten.
                </li>
                <li class="">
                Es ist mehr Arbeitsspeicher frei, als benötigt wird.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Ihr Browser teilt dem Webserver beim Aufruf einer Website normalerweise automatisch mit, welche Sprache(n) Sie bevorzugen. In welcher Superglobalen von PHP finden Sie diese Information?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                $_POST['HTTP_ACCEPT_LANGUAGE']
                </li>
                <li class="true">
                $_SERVER['HTTP_ACCEPT_LANGUAGE']
                </li>
                <li class="">
                $_GET['HTTP_ACCEPT_LANGUAGE']
                </li>
                <li class="">
                $_SESSION['HTTP_ACCEPT_LANGUAGE']
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>tmp</legend>
        <div>
        <ul class="fragen">
                <li class="">
                
                </li>
                <li class="">
                
                </li>
                <li class="">
                
                </li>
                <li class="">
                
                </li>
                <li class="">
                
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- #################################################### -->
    <h3>OOP</h3>
    <fieldset>
        <legend>Was testet der instanceof-Operator in PHP? </legend>
        <div>
        <ul class="fragen">
                <li class="">
                Ob das getestete Attribut zu einer bestimmten Klasse gehört.
                </li>
                <li class="">
                Ob das getestete Objekt in einer bestimmten Variable gespeichert ist.
                </li>
                <li class="">
                Ob das getestete Attribut zu einem bestimmten Objekt gehört.
                </li>
                <li class="true">
                Ob das getestete Objekt zu einer bestimmten Klasse gehört.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Aussagen sind in PHP zu virtuellen Attributen korrekt?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Sie werden in der Klasse nicht als Attribut definiert.
                </li>
                <li class="">
                Auf virtuelle Attribute ist nur lesender Zugriff möglich.
                </li>
                <li class="">
                Sie werden in der Klasse mit dem Schlüsselwort virtual definiert.
                </li>
                <li class="true">
                Ein Objekt ohne definierte Methoden kann keine virtuellen Attribute enthalten.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Aussagen über magische Methoden sind in PHP korrekt?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Die Methode __toString() lässt sich über nachfolgenden Code auch manuell aufrufen: 
                <&lt?php
                    $blume = new Blume();
                    $blume -> __toString();
                ?>
                </li>
                <li class="">
                Virtuelle Attribute können nur über magische Methoden verändert werden.
                </li>
                <li class="true">
                Die Methode __construct() ist eine magische Methode.
                </li>
                <li class="true">
                Die Methode __toString() ist eine magische Methode.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Auslöser für magische Methoden gibt es in PHP?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Ein neues Objekt einer bestimmten Klasse wird instanziiert.
                </li>
                <li class="true">
                Sie versuchen, ein Objekt mit echo auszugeben.
                </li>
                <li class="true">
                Sie versuchen, lesend auf ein nicht existierendes Attribut zuzugreifen.
                </li>
                <li class="true">
                Sie versuchen, eine nicht existierende Methode aufzurufen.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Gegeben sei nachfolgender PHP-Code. Sie möchten in der getAutorName-Methode die Arbeit an den Getter getName der Autor-Klasse delegieren. Welche Anweisung ist hierfür korrekt?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                <pre>
                    class Autor
                          {
                              protected $name = 'DragomirCM';
                              public function getName()
                              {
                                  return $this-&gt;name;
                              }
                          }
                          class Buch
                          {
                              protected $titel = 'I was reincarnated as a Magic Academy';
                              protected $autor;
                              public function __construct()
                              {
                                  $this-&gt;autor = new Autor();
                              }
                              public function getTitel()
                              {
                                  return $this-&gt;titel;
                              }
                              public function getAutorName()
                              {
                                  return ...;
                              }
                          }
                          $buch = new Buch();
                </pre>
                </li>
                <li class="true">
                $this->autor->getName()
                </li>
                <li class="">
                $this->getAutor()->getName()
                </li>
                <li class="">
                $buch->getAutor()->getName()
                </li>
                <li class="">
                $buch->autor->getName()
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was wird durch das nachfolgende PHP-Skript ausgegeben? Die Ausgabe von Fehlern ist aktiviert und der Fehlerlevel ist E_ALL</legend>
        <div>
            <pre>
            define('DATEI_NAME', 'daten.txt');
            define('DATEI_NAME', 'neu.txt');
            echo DATEI_NAME;
            </pre>
        <ul class="fragen">
                <li class="">
                Der String 'neu.txt' wird ausgegeben.
                </li>
                <li class="true">
                Eine Hinweis-Meldung von PHP wird ausgegeben.
                </li>
                <li class="">
                Es wird nichts ausgegeben.
                </li>
                <li class="true">
                Der String 'daten.txt' wird ausgegeben.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Ausgabe erzeugt folgender PHP-Code?</legend>
        <div>
            <pre>
                $x = '10.5';
                echo gettype($x);
            </pre>
        <ul class="fragen">
                <li class="">
                double
                </li>
                <li class="">
                Dieser Code erzeugt keine Ausgabe.
                </li>
                <li class="">
                float
                </li>
                <li class="">
                integer
                </li>
                <li class="true">
                string
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Ein Array wird in PHP mittels Destructuring in Variablen zerlegt.</legend>
        <div>
            <pre>
                [ 2 => $a, 1 => $b ] = [ 1, 2, 3 ]
                Welchen Wert hat $a?
            </pre>
        <ul class="fragen">
                <li class="">
                1
                </li>
                <li class="">
                2    
                </li>
                <li class="true">
                3
                </li>
                <li class="">
                ein leeres Array
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wenn Sie Werte an Methoden-Parameter übergeben, welche Datentypen dürfen diese Werte haben?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                String
                </li>
                <li class="true">
                Double
                </li>
                <li class="">
                Class
                </li>
                <li class="true">
                Object
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Gegeben sei nachfolgendes PHP-Skript.</legend>
        <div>
            <pre>
            class PizzaQueue
            {
            protected $orders = [];
            public function setOrders(array $orders)
            {
            foreach ($orders as [$name, $count]) {
            for ($i = 0; $i &lt; $count; $i++) {
            $pizza = new stdClass();
            $pizza-&gt;name = $name;
            $this-&gt;orders[] = $pizza;
            }
            }
            }
            public function getCount()
            {
            return count($this-&gt;orders);
            }
            }
            $pizzaQueue = new PizzaQueue();
            $pizzaQueue-&gt;setOrders([['Calzone', 1], ['Frutti di Mare', 0], ['Tonno', 3]]);
            echo $pizzaQueue-&gt;getCount();
            </pre>
        <ul class="fragen">
                <li class="">
                3
                </li>
                <li class="true">
                4
                </li>
                <li class="">
                5
                </li>
                <li class="">
                2
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie viele Klassen repräsentieren normalerweise eine Datenbanktabelle, wenn Sie Active Record verwenden?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                1 Klasse
                </li>
                <li class="">
                2 Klassen
                </li>
                <li class="">
                3 Klassen
                </li>
                <li class="">
                4 Klassen
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Gegeben ist die Tabelle blog_entries durch folgende Anweisung:</legend>
        <div>
            <pre>
            INSERT INTO blog_entries (titel, inhalt, datum)
            VALUES ('Ein schöner Tag', 'Lorem Ipsum', NOW());
            </pre>
        <ul class="fragen">
                <li class="">
                INSERT INTO blog_entries (titel, datum, inhalt) VALUES ('Ein schöner Tag', 'Lorem Ipsum', NOW());
                </li>
                <li class="">
                INSERT INTO blog_entries (id, titel, inhalt, datum) VALUES ('Ein schöner Tag', 'Lorem Ipsum', '1978-09-03');
                </li>
                <li class="">
                INSERT INTO blog_entries (titel, datum, inhalt) VALUES ('Ein schöner Tag', 'Lorem Ipsum', '1978-09-03');
                </li>
                <li class="">
                INSERT INTO blog_entries (id, titel, inhalt, datum) VALUES ('Ein schöner Tag', 'Lorem Ipsum', NOW());
                </li>
                <li class="true">
                INSERT INTO blog_entries (titel, inhalt, datum) VALUES ('Ein schöner Tag', 'Lorem Ipsum', NOW());
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Identifizieren Sie die Datentypen, die von PHP verwendet werden:</legend>
        <div>
        <ul class="fragen">
                <li class="">
                varchar
                </li>
                <li class="true">
                boolean
                </li>
                <li class="true">
                array
                </li>
                <li class="">
                tinyblob
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie PHP-Code in HTML einbetten?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Das Ende des PHP-Codes kann mit ?> markiert werden.
                </li>
                <li class="true">
                Der Beginn des PHP-Codes kann mit &lt?php markiert werden.
                </li>
                <li class="">
                Der Beginn des PHP-Codes kann mit &ltphp markiert werden.
                </li>
                <li class="">
                Der PHP-Interpreter erkennt ohne besondere Markierung den Beginn und das Ende des PHP-Codes von selbst.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie nennt man das Konzept zur Wiederverwendung von Methoden in Klassen, die nicht oder nur sehr entfernt verwandt sind bzw. nicht verwandt sein sollen?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Law of Demeter
                </li>
                <li class="">
                Single Responsibility Principle
                </li>
                <li class="">
                Single Inheritance
                </li>
                <li class="true">
                Horizontal Reuse
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Auslöser für magische Methoden gibt es in PHP?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Sie versuchen, eine nicht existierende Methode aufzurufen.
                </li>
                <li class="true">
                Sie versuchen, ein Objekt mit echo auszugeben.
                </li>
                <li class="true">
                Sie versuchen, lesend auf ein nicht existierendes Attribut zuzugreifen.
                </li>
                <li class="true">
                Ein neues Objekt einer bestimmten Klasse wird instanziiert.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche PHP-Datentypen können Rückgabewerte von Methoden haben?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                String
                </li>
                <li class="true">
                Integer
                </li>
                <li class="">
                Class
                </li>
                <li class="true">
                Object
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>tmp</legend>
        <div>
        <ul class="fragen">
                <li class="">

                </li>
                <li class="">

                </li>
                <li class="">

                </li>
                <li class="">

                </li>
                <li class="">

                </li>
                <li class="">

                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- ###################################################### -->
    <h3>SQL</h3>

    <fieldset>
        <legend>Mit welchem Diagrammtyp begannen Datenbankentwickler die Modellierung, bevor UML zur Verfügung stand? Gesucht ist die Abkürzung.</legend>
        <div>
        <ul class="fragen">
                <li class="">
                ER-Diagramm
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche der folgenden Begriffe eignen sich als Entities?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Buch
                </li>
                <li class="true">
                Warenkorb
                </li>
                <li class="">
                Ausbilden
                </li>
                <li class="true">
                Auto
                </li>
                <li class="">
                Grün
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Eine Entität im Sinne der Domänmodellierung…</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                …kann ein materielles Objekt darstellen.
                </li>
                <li class="true">
                …kann über Attribute verfügen.
                </li>
                <li class="true">
                …kann ein abstraktes Konzept repräsentieren
                </li>
                <li class="">
                …kann nicht über Attribute verfügen.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche der folgenden Vorgaben zählen üblicherweise zu den SQL-Programmierrichtlinien?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Geben Sie Tabellennamen für Tabellen, die aus Entities entstanden sind, im Plural an.
                </li>
                <li class="true">
                Trennen Sie Begriffe, die aus mehreren Wörtern bestehen, mit einem Underscore.
                </li>
                <li class="">
                Trennen Sie Begriffe, die aus mehreren Wörtern bestehen, mit einem Minus-Zeichen.
                </li>
                <li class="true">
                Vermeiden Sie Umlaute und Sonderzeichen.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Eine Klasse im Klassendiagramm eines Domänenmodells beschreibt …</legend>
        <div>
        <ul class="fragen">
                <li class="">
                … eine Zeile
                </li>
                <li class="true">
                … ein Entity.
                </li>
                <li class="">
                …eine Tabelle
                </li>
                <li class="">
                … ein Attribut
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche der folgenden Mengen liefern das gleiche Ergebnis?</legend>
        <div>
            <ol>
                <li>forenpost = {inhalt, datum}</li>
                <li>forenpost = {inhalt, datum, zeichenanzahl, autor}</li>
                <li>forenpost = {datum, inhalt, autor}</li>
                <li>forenpost = {inhalt, autor, datum}</li>
            </ol>
        <ul class="fragen">
                <li class="true">
                Die Mengen 3 und 4 sind gleich.
                </li>
                <li class="">
                Die Mengen 1 und 2 sind gleich.
                </li>
                <li class="">
                Die Mengen 2 und 3 sind gleich.
                </li>
                <li class="">
                Die Mengen sind alle voneinander verschieden.
                </li>
                <li class="">
                Alle Mengen sind gleich, da nur der Name der Menge zählt.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Aus welchen 3 Aspekten besteht das relationale Modell?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Manipulation
                </li>
                <li class="">
                SQL
                </li>
                <li class="true">
                Struktur
                </li>
                <li class="true">
                Integrität
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Im relationalen DB-Modell besteht eine Relation aus…</legend>
        <div>
        <ul class="fragen">
                <li class="">
                SQL-Anweisungen.
                </li>
                <li class="">
                einem Datenbankschema.
                </li>
                <li class="true">
                einem Heading und einem Body.
                </li>
                <li class="">
                UML-Klassen.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>
        DML, DDL und DCL
        </legend>
        <div>
            <ol>             
                <li>DDL (Data Definition Language)</li>
                <li>DML (Data Manipulation Language)</li>
                <li>DCL (Data Control Language)</li>
            </ol>
        <ul class="fragen">
                <li class="">
                Welcher Teil der SQL-Sprache beschäftigt sich mit der Vergabe und Änderung von Rechten in einer Datenbank?
                DCL
                </li>
                <li class="">
                Welcher Teil der SQL-Sprache beschäftigt sich mit der Definition von Daten?
                DDL
                </li>
                <li class="">
                Welcher Teil der SQL-Sprache beschäftigt sich mit der Manipulation und dem Auslesen von Daten?
                DML
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Mit welchem Schlüsselwort werden in einer SQL-Abfrage Spalten ausgewählt?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                ALTER
                </li>
                <li class="">
                ORDER BY
                </li>
                <li class="true">
                SELECT
                </li>
                <li class="">
                WHERE
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Ergänzen Sie das folgende BNF:
        INSERT INTO tbl_name (col_name, ...) VALUE (value, ...)
        </legend>
        <div>
        <ul class="fragen">
                <li class="">
                INSERT INTO tbl_name (col_name, ...) VALUES (value, ...)
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche der folgenden SQL-Anweisungen gehören zur DML?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                SELECT
                </li>
                <li class="">
                DROP TABLE
                </li>
                <li class="">
                CREATE DATABASE
                </li>
                <li class="true">
                INSERT
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Gegeben ist die Relation seminare = {titel, beschreibung, preis}. Dabei wird garantiert, dass es keine zwei Tupel gibt, die den gleichen titel haben. Welche der folgenden Teilmengen von seminare sind nicht eindeutig?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                {beschreibung}
                </li>
                <li class="true">
                {preis}
                </li>
                <li class="">
                {titel, preis}
                </li>
                <li class="true">
                {beschreibung, preis}
                </li>
                <li class="">
                {titel, beschreibung, preis}
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist ein Identity Field?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Das Muster Identity Field ermöglicht ein 1:1-Mapping zwischen Objekten und Datensätzen.
                </li>
                <li class="">
                Identity Field ist ein anderer Name für Primärschlüssel.
                </li>
                <li class="">
                Ein Primärschlüssel, der aus nur einem Attribut besteht, wird Indentity Field genannt, häufig heißt das Attribut "id" oder "key".
                </li>
                <li class="">
                Ein Indentity Field ist ein Primärschlüssel, der Eindeutigkeit garantiert.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Eine Attributmenge wird <i>eindeutig</i> genannt, wenn Sie anhand der Attribute eine einzige Zeile in einer Tabelle identifizieren können. </legend>
        <div>
        <ul class="fragen">

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Eine Attributmenge heißt <i>irreduzibel</i>, wenn Sie kein Attribut mehr herausnehmen können, ohne dass die Menge ihre Eindeutigkeit verliert.</legend>
        <div>
        <ul class="fragen">

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Mit welchem Schlüsselwort kennzeichnen Sie in MySQL eine Spalte als Alternativschlüssel?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                KEY
                </li>
                <li class="">
                PRIMARY KEY
                </li>
                <li class="true">
                UNIQUE KEY
                </li>
                <li class="">
                FOREIGN KEY
                </li>
                <li class="">
                ALTERNATE KEY
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Gegeben ist folgender BNF-Ausdruck:
            zahl * zahl = produkt</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                3 * 3 = 9
                </li>
                <li class="">
                * 2 3 = 6
                </li>
                <li class="">
                6 = 2 * 3
                </li>
                <li class="true">
                2 * 3 = 7
                </li>
                <li class="true">
                2 * 3 = 6
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>ALTER TABLE</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Entfernen Sie per SQL die Spalte email aus der Tabelle user.
                ALTER TABLE user DROP email;
                </li>
                <li class="">
                Bennen Sie die Tabelle products in stock um.
                ALTER TABLE products RENAME TO stock;
                </li>
                <li class="">
                Entfernen Sie per SQL die Spalte phone_number aus der Tabelle customer.
                <br>
                ALTER TABLE customer DROP phone_number;
                </li>
                <li>ALTER TABLE seminare ADD kategorie VARCHAR(20);</li>
                <li>ALTER TABLE buecher RENAME TO romane;</li>
                <li>ALTER TABLE romane ADD id INTEGER PRIMARY KEY;</li>
                <li>ALTER TABLE romane CHANGE titel titel VARCHAR(50);</li>
                <li>ALTER TABLE romane DROP klappentext;</li>
                <li>ALTER TABLE romane CHANGE seiten seitenzahl INTEGER;</li>
                <li>Erhöhen Sie die maximale Länge eines Titels auf 150 Zeichen.
                <br>
                ALTER TABLE filme CHANGE titel titel VARCHAR(150);
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>SELECT</legend>
        <div>
        <ul class="fragen">
                <li class="">
                SELECT name, vorname, registriert_seit FROM benutzer WHERE registriert_seit < '2009-01-01';
                </li>
                <li class="">
                SELECT titel, preis FROM seminare WHERE preis < 2000;
                </li>
        
                <li class="">
                Geben Sie alle Autos aus, die keine »Automatik-Schaltung« haben:<br>
                SELECT * FROM autos WHERE NOT schaltung = 'Automatik'
                </li>
                
                <p>
                    SELECT * FROM filme;<br>
                    SELECT titel, erscheinungsjahr FROM filme;<br>
                    SELECT DISTINCT erscheinungsjahr FROM filme;<br>
                    SELECT titel, erscheinungsjahr FROM filme WHERE erscheinungsjahr >= 2002;<br>
                    SELECT titel, erscheinungsjahr FROM filme WHERE titel LIKE '%Ring%';<br>
                    SELECT titel, erscheinungsjahr FROM filme WHERE titel LIKE '%Ring%' AND erscheinungsjahr >= 2002;<br>
                    SELECT titel, kurzbeschreibung FROM filme WHERE titel LIKE '%Ring%' OR kurzbeschreibung LIKE '%Ring%';
                </p>
                <li>SELECT id FROM benutzer WHERE login='mhuana' AND password='geheim'</li>
                <li>SELECT titel, preis, preis * 1.19 FROM seminare;</li>
                <li>SELECT titel, preis FROM seminare WHERE preis > 2 * 1000;</li>
                <p>
                    SELECT ROUND(2.715, 2);<br>
                    SELECT UPPER(titel) FROM seminare;<br>
                    SELECT NOW();<br>
                    SELECT SUBSTR(vorname, 1, 1) FROM benutzer;<br>
                    SELECT CONCAT(name, ', ', SUBSTR(vorname, 1, 1), '.') FROM benutzer;<br>
                    SELECT titel, preis AS netto, preis * 1.19 AS brutto FROM seminare;
                    INSERT INTO messages (content, when) VALUES ('I have something to say...', NOW());<br>
                    SELECT produktbez, ROUND(laenge, 1) FROM bretter;<br>
                    
                    SELECT CURTIME();<br>
                    SELECT MONTH(NOW());<br>
                    SELECT FLOOR(RAND() * 6) + 1;<br>
                    SELECT name, (YEAR(NOW()) – YEAR(geburtsdatum)) AS lebensalter FROM regisseure;
                </p>
                <li>
                    Geben Sie alle Filme mit Beschreibung aus, aber kürzen Sie die Beschreibung auf 20 Zeichen und fügen Sie '…' an.<br>
                    SELECT titel, CONCAT(SUBSTR(kurzbeschreibung, 1, 20), '...') AS beschreibung FROM filme;
                </li>
                <li>
                    SELECT COUNT(*) FROM benutzer;<br>
                    SELECT MAX(preis) FROM seminare;<br>
                    Mit der Funktion AVG (average, dt. Durchschnitt) bestimmen Sie den Durchschnittswert aller Werte einer Spalte. <br>
                    SELECT AVG(preis) FROM seminare;<br>
                    SELECT SUM(preis) FROM seminare;
                </li>
                <li>
                    <p>
                        
                        Wie viele Filme kennt die Datenbank?<br>
                        Wie viele Minuten dauert der kürzeste Film seit dem Jahr 2002?<br>
                        Aus wie vielen Zeichen besteht die längste Filmbeschreibung?<br>
                        Wie alt ist der älteste Film?<br>
                        Wie lange dauert ein Science-Fiction-Film im Durchschnitt?<br>
                        Wie viele verschiedene Genres unterscheidet die Datenbank?

                    </p>
                    <p>
                        
                        SELECT COUNT(*) FROM filme;<br>
                        SELECT MIN(spieldauer) FROM filme WHERE erscheinungsjahr >= 2002;<br>
                        SELECT MAX(LENGTH(kurzbeschreibung)) FROM filme;<br>
                        SELECT MAX(YEAR(NOW())-erscheinungsjahr) FROM filme;<br>
                        SELECT AVG(spieldauer) FROM filme WHERE genre="fantasy";<br>
                        SELECT COUNT(DISTINCT genre) FROM filme;

                    </p>
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Vergleichsoperator – den Operator LIKE</legend>
        <div>
        <p>
            'Marco' LIKE 'Marc_' ergibt TRUE<br>
            'Marci' LIKE 'Marc_' ergibt TRUE<br>
            'Marc' LIKE 'Marc_' ergibt FALSE<br>
            'Marc' LIKE 'Marc%' ergibt TRUE<br>
            'Adobe Flash (Grundlagen)' LIKE 'Adobe%' ergibt TRUE<br>
            'Bildbearbeitung mit Adobe PS'' LIKE 'Adobe%' ergibt FALSE<br>
            'Bildbearbeitung mit Adobe PS' LIKE '%Adobe%' ergibt TRUE<br>
            'Datenbanken & SQL' LIKE '%Adobe%' ergibt FALSE
        </p>
        <ul class="fragen">
                          
        <li class="">SELECT titel, preis, kategorie FROM seminare WHERE titel LIKE '%Adobe%';
            <br>
            Das Zeichen »_« ist eine Wildcard, die für ein beliebiges Zeichen steht. Das Zeichen »%« steht sogar für mehrere beliebige Zeichen.
        </li>


            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wo innerhalb einer SQL-Anweisung können Sie Aggregationsfunktionen einsetzen und wo normale Funktionen?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Aggregationsfunktionen lassen sich innerhalb einer WHERE-Condition einsetzen.
                </li>
                <li class="true">
                Normale Funktionen lassen sich innerhalb einer SELECT-Expression einsetzen.
                </li>
                <li class="true">
                Aggregationsfunktionen lassen sich innerhalb einer SELECT-Expression einsetzen.
                </li>
                <li class="true">
                Normale Funktionen lassen sich innerhalb einer WHERE-Condition einsetzen.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche der folgenden Funktionen sind keine Aggregationsfunktionen?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                FLOOR
                </li>
                <li class="true">
                CONCAT
                </li>
                <li class="">
                MAX
                </li>
                <li class="">
                SUM
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>UPDATE DELETE</legend>
        <div>
        <ul class="fragen">
                <li class="">
                UPDATE seminare SET preis = 1999.99 WHERE id = 4;<br>
                UPDATE seminare SET preis = preis * 1.1;<br>
                UPDATE filme SET spieldauer = 152 WHERE titel = 'The Dark Knight';
                </li>
                <li class="">
                DELETE FROM seminare WHERE id = 1;<br>
                DELETE FROM FILME WHERE erscheinungsjahr <= 1998;
                </li>
                <li class="">
                ALTER TABLE regisseure CHANGE name name VARCHAR(80);<br>
                UPDATE regisseure SET name = CONCAT(vorname, ' ', name);<br>
                ALTER TABLE regisseure DROP vorname;
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>ORDER BY</legend>
        <div>
        <ul class="fragen">
                <li class="">
                SELECT titel, preis, kategorie FROM seminare ORDER BY titel;<br>
                SELECT titel, preis, kategorie FROM seminare ORDER BY preis;<br>
                SELECT titel, preis, kategorie FROM seminare ORDER BY kategorie;<br>
                SELECT titel, preis, kategorie FROM seminare ORDER BY kategorie, titel;<br>
                SELECT titel, preis, kategorie FROM seminare ORDER BY kategorie, preis;<br>
                SELECT titel, preis, kategorie FROM seminare ORDER BY preis, kategorie;
                </li>
                <li class="">
                ASC steht für ascending, d.h. aufsteigend <br>
                SELECT titel, preis, kategorie FROM seminare ORDER BY title ASC;
                </li>
                <li class="">
                DESC (descending – absteigend) <br>
                SELECT titel, preis, kategorie FROM seminare ORDER BY titel DESC;
                </li>
                <li class="">
                LIMIT beschränkt Suchergebnisse auf eine fixe Anzahl <br>
                SELECT id, titel FROM seminare LIMIT 3; <br>
                Der erste Parameter ist in diesem Fall die Verschiebung – der sogenannte Offset. Der zweite Parameter gibt erneut die Anzahl an. <br>
                SELECT id, titel FROM seminare LIMIT 3, 3;
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie sortieren Sie die Tabelle seminare nach dem Attribut preis in aufsteigender Reihenfolge?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                SELECT * FROM seminare ORDER BY DESC preis;
                </li>
                <li class="">
                SELECT * FROM seminare ORDER BY ASC preis;
                </li>
                <li class="">
                SELECT * FROM seminare ORDER BY preis DESC;
                </li>
                <li class="true">
                SELECT * FROM seminare ORDER BY preis ASC;
                </li>
                <li class="true">
                SELECT * FROM seminare ORDER BY preis;
                </li>
                <li>
                Filme sortiert ausgeben <br>           
                SELECT * FROM filme ORDER BY titel;<br> 
                SELECT * FROM filme ORDER BY spieldauer DESC;<br> 
                SELECT * FROM filme ORDER BY erscheinungsjahr, titel;<br> 
                Filme ausgeben mit Limit<br>                 
                SELECT * FROM filme WHERE erscheinungsjahr > 2000 LIMIT 2;<br> 
                SELECT * FROM filme WHERE erscheinungsjahr > 2000 LIMIT 2, 2;<br> 


                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Geben Sie maximal 5 Mitarbeiter aus, deren Nachnamen mit »E« beginnen.</legend>
        <div>
        <ul class="fragen">
                <li class="">
                SELECT personal_nr, vorname, nachname FROM mitarbeiter WHERE nachname LIKE'E%' LIMIT 5;
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welches UML-Mittel benötigen Sie, um Attribute in einem Klassendiagramm als NOT NULL zu kennzeichnen? Wie lautet die Kennzeichnung genau?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Sie kennzeichnen die Attribute mit Hilfe der OCL als {not null}.
                </li>
                <li class="">
                SELECT id, titel, preis FROM seminare WHERE preis IS NULL;<br>
                SELECT id, titel, preis FROM seminare WHERE preis IS NOT NULL;<br>
                CREATE TABLE seminare (id INTEGER PRIMARY KEY AUTO_INCREMENT, titel VARCHAR(120) NOT NULL, beschreibung TEXT, preis DECIMAL(6,2));<br>
                ALTER TABLE seminare CHANGE titel titel VARCHAR(120) NOT NULL;<br>
                INSERT INTO seminare (titel, preis) VALUES (NULL, 2500);<br>
                ERROR 1048 (23000): Column 'titel' cannot be null
                </li>
                <li class="">
                NULL-Marker stehen für unbekannte Werte.<br>
                Sie können sie aber auch in anderer Bedeutung verwenden, z.B. als nicht existent.<br>
                Spalten, die Sie als NOT NULL markiert haben, sind Pflichtfelder.<br>
                Zum Abfragen von NULL-Werten benötigen Sie die Operatoren IS NULL und IS NOT NULL.<br>
                </li>
                <li class="">
                SELECT * FROM filme WHERE spieldauer IS NULL;<br>
                SELECT * FROM filme WHERE spieldauer IS NOT NULL ORDER BY spieldauer;<br>
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Für eine E-Book-Software soll ein Tagging-System modelliert werden, mit Hilfe dessen den Büchern einzelne Tags wie Roman, Fachbuch, Spannend, Einfach und Komplex zugeordnet werden können. In welcher Beziehung stehen die Entities Tag und Buch?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Antwort: n:m
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Stellen Sie sich vor, Sie modellieren einen Online-Shop. Welche Kardinalität würde Sie für die Beziehung zwischen Kunde und Warenkorb angeben?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Antwort: 1:n
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>JOIN - Bedingung</legend>
        <div>
        <ul class="fragen">
                <li class="">
                SELECT seminare.titel, seminare.preis,<br>
                seminartermine.beginn, seminartermine.ende,<br>
                seminartermine.raum<br>
                FROM seminare JOIN seminartermine<br>
                ON seminare.id = seminartermine.seminar_id;<br>
                </li>
                <li class="">
                JOIN und WHERE kombinieren<br>
                SELECT seminare.titel, seminare.preis, <br>
                seminartermine.beginn, seminartermine.ende, <br>
                seminartermine.raum<br>
                FROM seminare JOIN seminartermine<br>
                ON seminare.id = seminartermine.seminar_id<br>
                WHERE raum = 'Schulungsraum 1';
                </li>
                <li class="">

                1:n-Beziehungen können Sie mit Hilfe von Fremdschlüsseln realisieren.<br>
                Ein Fremdschlüssel entspricht dem Primärschlüssel einer anderen Tabelle.<br>
                Mit einem JOIN können Sie Daten aus mehreren Tabellen abfragen.

                </li>
                <li class="">

                SELECT filme.titel, regisseure.vorname, regisseure.name FROM filme<br> JOIN regisseure ON filme.regisseur_id = regisseure.id;<br>
                SELECT filme.titel, regisseure.vorname, regisseure.name FROM filme <br>JOIN regisseure ON filme.regisseur_id = regisseure.id WHERE <br>CONCAT(regisseure.vorname, ' ', regisseure.name) = 'Peter Jackson';

                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Die n:m-Beziehung in SQL</legend>
        <div>
        <ul class="fragen">
                <li class="">
                CREATE TABLE nimmt_teil (<br>
                benutzer_id INTEGER, seminartermin_id INTEGER,<br>
                PRIMARY KEY (benutzer_id, seminartermin_id));<br>
                </li>
                <li class="">
                INSERT INTO nimmt_teil (benutzer_id, seminartermin_id) <br>
                VALUES (1, 2);<br>
                INSERT INTO nimmt_teil (benutzer_id, seminartermin_id) <br>
                VALUES (1, 1);<br>
                INSERT INTO nimmt_teil (benutzer_id, seminartermin_id) <br>
                VALUES (2, 2);<br>
                INSERT INTO nimmt_teil (benutzer_id, seminartermin_id) <br>
                VALUES (3, 2);<br>
                </li>
                <li class="">
                Um beim SELECT die Verbindung wieder herzustellen, müssen Sie alle drei Tabellen mit JOIN verbinden. Zudem benötigen Sie nun zwei Join-Bedingungen:<br>
                SELECT seminartermine.beginn, seminartermine.raum, <br>
                benutzer.name, benutzer.vorname <br>
                FROM seminartermine JOIN nimmt_teil <br>
                ON seminartermine.id = nimmt_teil.seminartermin_id JOIN benutzer<br> 
                ON nimmt_teil.benutzer_id = benutzer.id;   <br>
                </li>
                <li class="">
                Eine n:m-Beziehung können Sie mit Hilfe einer Zwischentabelle abbilden.<br>
                Der Primärschlüssel der Zwischentabelle setzt sich aus den beiden Fremdschlüsseln zu den beteiligten Tabellen zusammen. 
                </li>
                <li>
                    
                Geben Sie Filme mit hinterlegten Schauspielern aus.<br>
                Geben Sie alle Filme aus, in denen Christian Bale mitspielt.<br>
                SELECT filme.titel, personen.vorname, personen.name FROM filme JOIN spielt ON <br>spielt.film_id = filme.id JOIN personen ON spielt.schauspieler_id = personen.id;<br>
                SELECT filme.titel, personen.vorname, personen.name FROM filme JOIN spielt ON <br>spielt.film_id = filme.id JOIN personen ON spielt.schauspieler_id = <br>personen.id WHERE CONCAT(personen.vorname, ' ', personen.name) = 'Christian Bale';

                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie viele JOINs benötigen Sie, um eine einfache n:m-Beziehung abzufragen?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Antwort: 2
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was bedeutet die Unterstreichung bei folgender Menge? uebungen = {seminar_titel, kapitel_nr, uebungs_nr, punkte}</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Es handelt sich um die wichtigsten Attribute der Menge.
                </li>
                <li class="true">
                Die Menge {seminar_titel, kapitel_nr, uebungs_nr} ist der Primärschlüssel.
                </li>
                <li class="">
                Die unterstrichenen Attribute sind jeweils gültige Schlüssel.
                </li>
                <li class="">
                Die Menge {seminar_titel, kapitel_nr, uebungs_nr} ist ein Alternativschlüssel.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Eine Entität im Sinne der Domänmodellierung…</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                …kann über Attribute verfügen.
                </li>
                <li class="true">
                …kann ein materielles Objekt darstellen.
                </li>
                <li class="">
                …kann nicht über Attribute verfügen.
                </li>
                <li class="true">
                …kann ein abstraktes Konzept repräsentieren.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Eine Klasse im Klassendiagramm eines Domänenmodells beschreibt …</legend>
        <div>
        <ul class="fragen">
                <li class="">
                …eine Tabelle
                </li>
                <li class="">
                … eine Zeile
                </li>
                <li class="">
                … ein Attribut
                </li>
                <li class="true">
                … ein Entity.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist ein Identity Field?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Ein Indentity Field ist ein Primärschlüssel, der Eindeutigkeit garantiert.
                </li>
                <li class="">
                Ein Primärschlüssel, der aus nur einem Attribut besteht, wird Indentity Field genannt, häufig heißt das Attribut "id" oder "key".
                </li>
                <li class="">
                Identity Field ist ein anderer Name für Primärschlüssel.
                </li>
                <li class="true">
                Das Muster Identity Field ermöglicht ein 1:1-Mapping zwischen Objekten und Datensätzen.
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was stellt eine direkte Abbildung der realen Datenbank dar?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                ein Domänenmodell
                </li>
                <li class="true">
                ein physisches Datenmodell
                </li>
                <li class="">
                das relationale Modell
                </li>
                <li class="">
                ein BNF-Ausdruck
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Gegeben ist die Relation seminare = {titel, beschreibung, preis}. Dabei wird garantiert, dass es keine zwei Tupel gibt, die den gleichen titel haben. Welche der folgenden Teilmengen von seminare sind nicht eindeutig? </legend>
        <div>
        <ul class="fragen">
                <li class="true">
                {beschreibung, preis}
                </li>
                <li class="true">
                {preis}
                </li>
                <li class="">
                {titel, beschreibung, preis}
                </li>
                <li class="">
                {titel, preis}
                </li>
                <li class="true">
                {beschreibung}
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wählen Sie für die folgenden Werte den am besten geeigneten MySQL-Datentyp: 5, 6, 7, 8</legend>
        <div>
        <ul class="fragen">
                <li class="">
                DATE
                </li>
                <li class="true">
                INTEGER
                </li>
                <li class="">
                TEXT
                </li>
                <li class="">
                DECIMAL
                </li>
                <li class="">
                VARCHAR
                </li>

            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche der folgenden SQL-Anweisungen sind in PHP erlaubt, wenn man PDO verwendet?</legend>
        <div>
        <ul class="fragen">
                <li class="true">
                $db->prepare('SELECT * FROM teilnehmer WHERE vorname=:vorname');
                </li>
                <li class="">
                $db->prepare('SELECT * FROM ? LIMIT 1');
                </li>
                <li class="true">
                $db->prepare('SELECT * FROM teilnehmer WHERE vorname=?');
                </li>
                <li class="true">
                $db->prepare('SELECT * FROM teilnehmer WHERE vorname="Marco"');
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie viele Klassen repräsentieren normalerweise eine Datenbanktabelle, wenn Sie Data Mapper verwenden?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                1 Klasse
                </li>
                <li class="true">
                2 Klasse
                </li>
                <li class="">
                3 Klasse
                </li>
                <li class="">
                4 Klasse
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Mit welchem Schlüsselwort wird in PHP ein Trait in einer Klasse aktiviert bzw. in diese eingebunden?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                function
                </li>
                <li class="">
                trait
                </li>
                <li class="true">
                use
                </li>
                <li class="">
                static
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Im relationalen DB-Modell entspricht ein Tupel am ehesten…</legend>
        <div>
        <ul class="fragen">
                <li class="">
                einem Attribut
                </li>
                <li class="">
                einer Tabelle
                </li>
                <li class="true">
                einer Zeile
                </li>
                <li class="">
                einer Spalte
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist nach dem folgenden Code-Block in der Variable $test gespeichert? In $db ist das PDO-Objekt gespeichert.</legend>
        <div>
            <pre>
                $test = $db->query('SELECT * FROM person');
            </pre>
        <ul class="fragen">
                <li class="">
                Die Datensätze, die die Datenbank geliefert hat, in Form eines PHP-Arrays.
                </li>
                <li class="true">
                Ein Objekt der Klasse PDOStatement.
                </li>
                <li class="">
                Die Datensätze, die die Datenbank geliefert hat, in Form eines Strings.
                </li>
                <li class="">
                Ein Objekt der Klasse PDOResult.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Bei welchen der folgenden Datenbank-Management-Systemen handelt es sich um relationale Datenbank-Management-Systeme? </legend>
        <div>
        <ul class="fragen">
                <li class="true">
                Oracle
                </li>
                <li class="true">
                PostgresQL
                </li>
                <li class="true">
                SQLite
                </li>
                <li class="true">
                MySQL
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche der folgenden Vorgaben zählen üblicherweise zu den SQL-Programmierrichtlinien?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Trennen Sie Begriffe, die aus mehreren Wörtern bestehen, mit einem Minus-Zeichen.
                </li>
                <li class="true">
                Vermeiden Sie Umlaute und Sonderzeichen.
                </li>
                <li class="true">
                Trennen Sie Begriffe, die aus mehreren Wörtern bestehen, mit einem Underscore.
                </li>
                <li class="true">
                Geben Sie Tabellennamen für Tabellen, die aus Entities entstanden sind, im Plural an.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche der folgenden Datentypen gibt es in SQL? </legend>
        <div>
        <ul class="fragen">
                <li class="">
                DECIMAL
                </li>
                <li class="true">
                INTEGER
                </li>
                <li class="">
                STRING
                </li>
                <li class="true">
                TEXT
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was passiert, wenn Sie eine DELETE-Anweisung ohne WHERE verwenden?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Es passiert gar nichts. Die Anweisung wird ignoriert.
                </li>
                <li class="">
                Das DBMS meldet einen Fehler.
                </li>
                <li class="true">
                Es werden alle Datensätze gelöscht.
                </li>
                <li class="">
                Der erste Datensatz wird gelöscht.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist ein Datenbank-Management-System (DBMS)?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                DBMS ist eine Systemsprache zur Datenverwaltung
                </li>
                <li class="true">
                Ein DBMS ist das Software-System, das die Daten verwaltet.
                </li>
                <li class="">
                Ein DBSM ist ein Großrechner, auf dem eine Datenbank läuft.
                </li>
                <li class="">
                Ein DBMS ist die eigentliche Sammlung der Daten.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie sortieren Sie die Tabelle seminare nach dem Attribut preis in aufsteigender Reihenfolge?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                SELECT * FROM seminare ORDER BY ASC preis;
                </li>
                <li class="true">
                SELECT * FROM seminare ORDER BY preis;
                </li>
                <li class="true">
                SELECT * FROM seminare ORDER BY preis ASC;
                </li>
                <li class="">
                SELECT * FROM seminare ORDER BY preis DESC;
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist ein Identity Field?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Ein Primärschlüssel, der aus nur einem Attribut besteht, wird Indentity Field genannt, häufig heißt das Attribut "id" oder "key".
                </li>
                <li class="true">
                Das Muster Identity Field ermöglicht ein 1:1-Mapping zwischen Objekten und Datensätzen.
                </li>
                <li class="">
                Ein Indentity Field ist ein Primärschlüssel, der Eindeutigkeit garantiert.
                </li>
                <li class="">
                Identity Field ist ein anderer Name für Primärschlüssel.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist SQL?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                eine Programmiersprache
                </li>
                <li class="true">
                eine Datenbank-Abfragesprache.
                </li>
                <li class="">
                eine Datenbank
                </li>
                <li class="">
                ein DBMS
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie viele Tabellen kann eine Datenbank maximal enthalten?</legend>
        <div>
        <ul class="fragen">
                <li class="">
                Es ist nur eine Tabelle pro Datenbank möglich.
                </li>
                <li class="">
                Maximal 255
                </li>
                <li class="">
                Maximal 1023
                </li>
                <li class="true">
                Manche DBMS haben eine künstliche Begrenzung, aber im Prinzip beliebig viele.
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>tmp</legend>
        <div>
        <ul class="fragen">
                <li class="">
                
                </li>
                <li class="">
                
                </li>
                <li class="">
                
                </li>
                <li class="">
                
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>


<?php
    require_once "footer.php";
?>