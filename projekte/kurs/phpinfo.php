<?php
    $title = "PHP";
    require_once "header.php";

    Navigation::ShowAll();
?>

    <h3>PHP</h3>
    <fieldset><!-- anmelde daten -->
        <legend>anmelde daten</legend>
        <div>
            <pre>
                $server = "localhost";
                $user = "root";
                $password = "";
                $database = "php_kurs";
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- mysqli() -->
        <legend>mysqli()</legend>
        <div>
            <pre>
                // Verbindung zur Datenbank aufbauen
                $mysql = new mysqli($server, $user, $password, $database);
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- prüfen connect -->
        <legend>prüfen connect</legend>
        <div>
            <pre>
            if ( $mysql->connect_errno ) {
                // connect_error -> Text des Verbindungsfehlers
                echo "Verbindungsfehler: ".$mysql->connect_error."&lt;br>";
            } else {
                echo "Verbindung erfolgreich!&lt;br>";
            }
            // Zeichensatz für die Verbindung festlegen
            $mysql->set_charset("utf8mb4");
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- add data -->
        <legend>add data</legend>
        <div>
            <pre>
                if ( isset( $_POST["add"] ) ) {
                    $name = $_POST["name"];
                    $age = $_POST["age"];
                    $email = $_POST["email"];
                    $sql = "INSERT INTO kunden
                            (name, age, email)
                            VALUES
                            ('$name', $age, '$email')";
                    if ( $result = $mysql->query($sql) ) {
                        echo "Hinzugefügt";
                    }
               }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- show data -->
        <legend>show data</legend>
        <div>
            <pre>
            $sql = "SELECT * FROM einkaufsliste";
            if($result = $mysql->query($sql)){
                echo "Erfolgreich!";
                echo "&lt;table border=1>";
                echo "&lt;th>Anzahl</th>";
                echo "&lt;th>Bezeichnung</th>";
                while($row = $result->fetch_assoc()){
                    echo "&lt;tr>";
                    echo "&lt;td>" . $row["anzahl"] . "</td>";
                    echo "&lt;td>" . $row["bezeichnung"] . "</td>";
                    echo "&lt;/tr>";
                }
                echo "&lt;/table>";
            }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- update -->
        <legend>update</legend>
        <div>
            <pre>
            $mysql = new mysqli("localhost", "root", "", "liste");
            $id = $_POST['id'];
            $anzahl = $_POST['anzahl'];
            $bezeichnung = $_POST['bezeichnung'];
            $sql = "UPDATE artikel
                    SET
                        anzahl = $anzahl,
                        bezeichnung = '$bezeichnung'
                    WHERE
                        ID=$id";
            if ( $result = $mysql->query($sql) ) {
                echo "Erfolgt!&lt;br>";
            }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- delete data -->
        <legend>delete data</legend>
        <div>
            <pre>
                if ( isset( $_GET["mode"] ) && $_GET["mode"]=="delete" ) {
                    $sql = "DELETE FROM kunden
                            WHERE ID=".$_GET["id"];
            
                    if ( $result = $mysql->query($sql) ) {
                            echo "Gelöscht!&lt;br>";
                    }
                }
                echo "&lt;td>&lt;a href='index.php?mode=delete&id=".$row["ID"]."'>Löschen&lt;/td>";
            
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Datenmodellierung -->
        <legend>Datenmodellierung</legend>
        <div>
            <p>...</p>
            <p>...</p>
            <p>...</p>
            <img class="imgscale" src="images/Beispiel_Modellierung.png" height="300" width="500" alt="">
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>

    <fieldset><!-- OOP -->
        <legend>OOP</legend>
        <div>
            <pre>
                Eine Klasse ist eine samlung von Variablen und Funktionen, die eine gemeinsamen Zweck erfüllen.
                Eine Klasse beschreibt die Struktur und das Verhalten einer Menge gleichartiger Objekte.
                Ein Objekt ist ein Exemplar (Instanz) einer  Klasse das sich entsprechend der Definition  der Klasse verhält.
                Sichtbarkeiten von Eigenschaften (Klassenvariable)
                und Methoden (Klassenfunktion) unterschieden sich in Drei Gruppen (public, protected und private).
                Zugriffsmodifikator:
                    public -> auch außerhalb dieser Klasse gültig
                    private -> nur innerhalb dieser Klasse gültig
                    protected -> nur innerhalb dieser Klasse und vererbten Klassen
            </pre>
            <pre>
                // klassen automatisch laden
                spl_autoload_register( function ($className) {
                    $file = $className.".php";
                    if ( file_exists($file) ) include($file);
                });
            </pre>
            <pre>
                // felder
                public $ID;
                public $anzahl;
                public $bezeichnung;
            </pre>
            <pre>
                // metoden
                public function ausgeben() {
                    echo "<tr>";
                    echo "<td>".$this->ID."</td>";
                    echo "<td>".$this->anzahl."</td>";
                    echo "<td>".$this->bezeichnung."</td>";
                    echo "</tr>";
                }
                public function addToDB($mysql) {
                    $sql = "INSERT INTO einkaufsliste
                                    (anzahl, bezeichnung)
                                    VALUES
                                    ($this->anzahl, '$this->bezeichnung')";
                    $mysql->query($sql);
                }
                // fetch_object
                while ( $article = $result->fetch_object("Artikel") ) {
                    $article->ausgeben();
                }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    
    <fieldset><!-- PDO -->
        <legend>PDO</legend>
        <div>
            <h4>Einführung in PDO</h4>
            <p>
            PDO steht für PHP Data Objects und stellt für alle von PHP unterstützten DBMS eine einheitliche Schnittstelle zur Verfügung. Dies vereinfacht die Unterstützung mehrerer unterschiedlicher Systeme ungemein, da man im Gegensatz zu früheren Vorgehensweisen keine DBMS-spezifischen Funktionen mehr benötigt
            </p>
            <h4>Das PDO-Objekt</h4>
            <p>Die OOP führt einen neuen Datentyp ein, der ihr den Namen gegeben hat, nämlich Objekte. Diese sind Behälter für Informationen, ähnlich wie es Arrays sind. Der Unterschied zu Arrays besteht darin, dass nicht nur Werte, sondern auch Funktionen in einem Objekt enthalten sein können. Diese an Objekte gebundenen Funktionen nennt man Methoden.</p>
            <p>Ebenfalls ein wenig anders ist die Art, wie Objekte erzeugt werden. Für jedes Objekt gibt es eine Art Bauplan, genannt Klasse, aus der Sie ein neues Objekt erzeugen. Dieser Bauplan legt also fest, welche Informationen in einem Objekt abgelegt werden können (z. B. die Zugangsdaten unserer Datenbank) und welche Methoden nutzbar sind (z. B. Ausführung eines SQL-Befehls mit dieser Datenbank). Zur Erzeugung eines Objekts gibt es das Schlüsselwort new.</p>
            <pre>
            &lt?php

                $db = new PDO();
            </pre>
            <p>Eine Datenbank wird durch ein Objekt der Klasse PDO repräsentiert, das mittels new erzeugt wird. Beachten Sie, dass die Klasse PDO komplett großgeschrieben wird, da es sich um eine Abkürzung handelt.</p>

            <h4>Der DSN</h4>
            <p>Wenn Sie den obigen Code ausführen, erhalten Sie von PHP eine Warnung, dass dem Konstruktor __construct()23 mindestens ein Parameter übergeben werden muss. Dies ist auch ganz logisch, da wir unsere Zugangsdaten noch nicht übergeben bzw. auch nicht gesagt haben, welche Datenbank wir überhaupt benötigen. Letzteres geschieht in Form des sogenannten DSN (Data Source Name). Dieser beschreibt, wo die Datenbank zu finden ist, und er wird als URI (Uniform Resource Identifier) angegeben. Die Form des URI ist für jedes DBMS unterschiedlich. Für MySQL besteht er aus folgenden Elementen:</p>
            <ul>
                <li>Datenbank-Typ: Der Typ der Datenbank (bzw. des DBMS), mit der sich PDO verbinden soll. Für MySQL ist dies der String mysql.</li>
                <li>host: Hier können Sie den Hostnamen des Datenbank-Servers angeben, mit dem Sie sich verbinden wollen. Wenn sich die Datenbank auf dem gleichen Rechner wie der Webserver befindet, können Sie hier localhost verwenden.</li>
                <li>port: Der TCP/IP-Port, auf dem der Datenbank-Server lauscht. Der Standard-Port von MySQL ist 3306. Dieser Parameter ist optional und kann somit weggelassen werden.</li>
                <li>dbname: Der Name der Datenbank, mit der Sie sich verbinden wollen.</li>
            </ul>
            <p>
            Eine Datenbank mit dem Namen mysql existiert in jeder MySQL-Installation und sie enthält unter anderem eine Tabelle user. Um sich also beispielsweise mit dieser Datenbank auf Ihrem lokalen Rechner zu verbinden, würde prinzipiell folgender Code funktionieren:
            </p>
            <pre>
            &lt?php

                $db = new PDO('mysql:host=localhost;dbname=mysql;port=3306');
            </pre>
            <p>MySQL ist jedoch ein DBMS, das einen Login erfordert, bevor es Zugang zu seinen Datenbanken gewährt. Daher müssen Sie dem Konstruktor von PDO noch einen Benutzernamen und ein Passwort übergeben. In den meisten Entwicklungsumgebungen ist das der Benutzer root.24 Beachten Sie, dass diese Daten weitere Parameter und nicht Teil des DSN sind.</p>
            <pre>
            &lt?php

                $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');
            </pre>

            <pre>
            $host = '192.168.2.177';
            $db = 'php_test';
            $user = 'horton';
            $password = 'test';
            try {
                $pdo = new PDO("mysql:host=$host; dbname=$db; charset=UTF8", $user, $password);
                echo "Verbindung mit Database erfolgreich hergestellt!";
            } catch (PDOException $e) {
                echo 'Verbindung Fehler ' . $e->getMessage();
            }
            </pre>
            <h4>PDO#query()</h4>
            <p>Ein PDO-Objekt, also das, was von new PDO() erzeugt wird, verfügt über mehrere Methoden, um SQL-Anweisungen an die konfigurierte Datenbank zu senden. Im Verlauf der Class werden Sie noch weitere Methoden kennenlernen, beginnen werden wir aber mit der Methode PDO#query(). Diese Methode akzeptiert als Parameter einen String mit einer SQL-Anweisung und führt diese auch tatsächlich aus.</p>
            <pre>
            &lt?php

                $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

                $db->query('SELECT * FROM user');
            </pre>
            <p>Der Unterschied zu einer normalen Funktion ist jedoch die etwas andere Schreibweise. Da eine Methode zu einem Objekt gehört, werden beide auch zusammen geschrieben. Im obigen Beispiel wird die Methode query(), die im PDO-Objekt $db enthalten ist, in Zeile 5 aufgerufen. Der Pfeil-Operator (->) trennt das Objekt von dem Methodennamen.</p>
            <p>Der Methode PDO#query() übergeben wir dann als Parameter die gewünschte SQL-Anweisung. Wir benutzen hier SELECT, um die Datensätze der Tabelle user auszulesen. Im Browser sehen Sie jedoch weiterhin nur eine leere Seite, da unser Code immer noch nichts ausgibt.</p>

            <h4>PDO#errorInfo()</h4>
            <p>In dieses Beispiel habe ich bewusst einen gravierenden Fehler eingebaut. Eine Tabelle duser gibt es nämlich in der Datenbank mysql nicht und trotzdem hat PHP keinen Fehler gemeldet.</p>
            <pre>
            &lt?php

                $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

                $db->query('SELECT * FROM duser'); // falscher Tabellenname

                ?>
                &ltpre>&lt?php var_dump($db->errorInfo()); ?>&lt/pre>
            </pre>
            <p>Um zu sehen, ob die letzte SQL-Anweisung erfolgreich war oder was im Fehlerfall das Problem war, gibt es die Methode PDO#errorInfo(). Diese liefert ein Array zurück, bestehend aus zwei Fehlercodes und einer für uns hilfreicheren Fehlermeldung. Falls kein Fehler aufgetreten ist, enthält das Ergebnis den Zahlencode 0000 als ersten Wert.</p>

            <h4>Ergebnisse verarbeiten: Die Klasse PDOStatement</h4>
            <p>Wenn eine SQL-Abfrage ohne Fehler durchgeführt wird, erhalten Sie als Rückgabewert der Methode PDO#query() ein neues Objekt, das als Klasse PDOStatement hat. Es repräsentiert das Ergebnis der SQL-Anweisung und Sie können es verwenden, um die Ergebnisdaten auszulesen und weiterzuverarbeiten.</p>
            <pre>
            &lt?php

            $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

            $statement = $db->query('SELECT * FROM user');

            ?>
            &ltpre>&lt?php var_dump($statement); ?>&lt/pre>
            </pre>
            <p>Als Ausgabe des var_dump() erhalten Sie object(PDOStatement)#2 (1) { ["queryString"]=> string(18) "SELECT * FROM user" }. Wie erwartet handelt es sich bei $statement um ein Objekt der Klasse PDOStatement. Auffällig ist, dass Sie in der Ausgabe nur das Original-SQL und keine Ergebnisdatensätze sehen können.</p>
            <p>
            Der Grund ist, dass das Objekt das Ergebnis nicht enthält, es repräsentiert es nur - ein kleiner, aber wichtiger Unterschied. Das Objekt hat also nicht die Datensätze vorrätig, es weiß aber, wie es an diese herankommt. Sie können das Objekt somit jederzeit nach dem eigentlichen Ergebnis fragen und erhalten so die Datensätze.
            </p>
            <h4>
            PDOStatement#fetchAll()
            </h4>
            <p>Dies erreichen Sie über die Methode PDOStatement#fetchAll(), die das Ergebnis des SELECT in Form eines mehrdimensionalen Arrays zurückgibt.</p>
            <pre>
            &lt?php

            $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

            $statement = $db->query('SELECT Host, User FROM user');
            $daten = $statement->fetchAll();

            ?>
            &ltpre>&lt?php var_dump($daten); ?>&lt/pre>
            </pre>
            <p>Statt des Dumps werden wir nun die Datensätze als Liste ausgeben. Da es sich bei den Datensätzen um ein reguläres PHP-Array handelt, können Sie es prima mit einer foreach-Schleife durchlaufen.</p>
            <pre>
            &lt?php

            $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

            $statement = $db->query('SELECT Host, User FROM user');
            $daten = $statement->fetchAll();

            ?>
            &lt!DOCTYPE html>
            &lthtml>

            &lthead>
            &ltmeta charset="utf-8" />
            &lttitle>PDO&lt/title>
            &lt/head>

            &ltbody>

            &lth1>MySQL-Benutzer&lt/h1>
            &ltul>
            &lt?php foreach ($daten as $benutzer): ?>
                &ltli>
                            Host: &lt?= $benutzer['Host'] ?>&ltbr />
                            User: &lt?= $benutzer['User'] ?>
                            &lt/li>
                            &lt?php endforeach; ?>
                            &lt/ul>

                &lt/body>

                &lt/html>
            </pre>
            <h4>PDOStatement#fetch()</h4>
            <p>Hin und wieder möchten Sie nur einen einzelnen Datensatz aus einer Datenbank auslesen. Beispielsweise soll nur eine bestimmte Nachricht oder nur ein Artikel eines Produktkatalogs gezeigt werden. Sie wissen also, dass nur ein einzelner Datensatz zurückkommen wird.</p>
            <p>Prinzipiell können Sie auch in diesem Fall mit PDOStatement#fetchAll() arbeiten, dies hat jedoch einen kleinen Nachteil. Auch wenn nur ein Datensatz von der Abfrage zurückkommt, wird dieser trotzdem in ein zweidimensionales Array verpackt.</p>
            <pre>
            &lt?php

                $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

                $statement = $db->query('SELECT Host, User FROM user WHERE User = "root" AND Host = "localhost" LIMIT 1');
                $daten = $statement->fetchAll();

                ?>
                &ltpre>&lt?php var_dump($daten); ?>&lt/pre>
            </pre>
            <p>Um mit dem Datensatz arbeiten zu können, müssen Sie erst auf den Index 0 des numerischen Arrays zugreifen. Das ist unnötiger Code und schadet der Lesbarkeit. Viel besser ist es, stattdessen die Methode PDOStatement#fetch() zu verwenden, die immer nur einen Datensatz zurückgibt.</p>
            <pre>
            &lt?php

            $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

            $statement = $db->query('SELECT Host, User FROM user WHERE User = "root" AND Host = "localhost" LIMIT 1');
            $daten = $statement->fetch();

            ?>
            &ltpre>&lt?php var_dump($daten); ?>&lt/pre>
            </pre>
            <p>Für den Fall, dass die Ergebnisdaten mehrere Datensätze enthalten, liefert PDOStatement#fetch() den ersten Datensatz zurück. Rufen Sie die Methode erneut auf, erhalten Sie den zweiten, danach den dritten usw. Das Spiel geht solange weiter, bis alle Datensätze durchlaufen sind. Dann liefert die Methode false.</p>
            <p>Durch dieses Verhalten können Sie die Methode auch sehr bequem in einer while-Schleife verwenden. Diese läuft so lange, wie PDOStatement#fetch() ein Array mit Daten (also einen Datensatz) liefert.</p>
            <pre>
            &lt?php

            $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

            $statement = $db->query('SELECT Host, User FROM user');

            ?>
            &lt!DOCTYPE html>
            &lthtml>

            &lthead>
            &ltmeta charset="utf-8" />
            &lttitle>PDO&lt/title>
            &lt/head>

            &ltbody>

            &lth1>MySQL-Benutzer&lt/h1>
            &ltul>
            &lt?php while ($benutzer = $statement->fetch()): ?>
                &ltli>
                            Host: &lt?= $benutzer['Host'] ?>&ltbr />
                            User: &lt?= $benutzer['User'] ?>
                            &lt/li>
                            &lt?php endwhile; ?>
                            &lt/ul>

                &lt/body>

                &lt/html>
            </pre>
            <h4>PDO-Attribute</h4>
            <p>Die Datenbank-Verbindung, also das PDO-Objekt, kann mit verschiedenen Attributen an Ihre speziellen Bedürfnisse angepasst werden. Die Schreibweise der einzelnen Attribute ist zwar, vorsichtig ausgedrückt, gewöhnungsbedürftig, folgt dafür aber einem festen Schema.</p>
            <p>Der Name eines solchen Attributs wird komplett in Großbuchstaben geschrieben und besteht aus dem Präfix PDO, zwei Doppelpunkten :: und dem eigentlichen Namen, z. B. ATTR_ERRMODE. Der vollständige Name lautet also PDO::ATTR_ERRMODE.</p>
            <h4>PDO-Attribute beim Erzeugen des PDO-Objekts setzen</h4>
            <p>Sie können beim Erzeugen eines PDO-Objekts, also wenn Sie new PDO() aufrufen, als vierten Parameter ein Array mit den Attributen übergeben, die Sie ändern wollen.</p>
            <pre>
            &lt?php

            $optionen = [];

            $db = new PDO(
                'mysql:host=localhost;dbname=mysql',
                'root',
                '',
                $optionen
            );

            $statement = $db->query('SELECT Host, User FROM user WHERE User = "root" AND Host = "localhost" LIMIT 1');
            $daten = $statement->fetch();

            ?>
            &ltpre>&lt?php var_dump($daten); ?>&lt/pre>
            </pre>
            <h4>Fehlerverhalten einstellen (PDO::ATTR_ERRMODE)</h4>
            <p>Wann immer Sie eine fehlerhafte SQL-Anweisung abschicken, meldet MySQL einen Fehler. Dieser wird jedoch standardmäßig von PDO nicht angezeigt. Das ist an sich vollkommen in Ordnung. Während Sie jedoch die Webseite entwickeln, benötigen Sie möglichst viele Informationen über alle Probleme in Ihrer Programmierung. Daher ist es sinnvoll, die MySQL-Fehlermeldungen standardmäßig anzuzeigen. Dieses Verhalten können Sie über das Attribut PDO::ATTR_ERRMODE beeinflussen.</p>
            <p>Es sind drei Einstellungen möglich:</p>
            <ul>
                <li>PDO::ERRMODE_SILENT: Dies ist der Standardfall. PDO reicht keine Fehlermeldungen von MySQL weiter. Wenn Sie die Meldungen sehen wollen, müssen Sie sie von Hand über die Methode PDO#errorInfo() ausgeben.</li>
                <li>PDO::ERRMODE_WARNING: Ist diese Einstellung aktiv, wird von PDO jedesmal eine PHP-Warnung erzeugt, wenn MySQL einen Fehler meldet. Das PHP-Skript selbst läuft weiter, nur die Meldung wird im Browser angezeigt</li>
                <li>PDO::ERRMODE_EXCEPTION: Ist PDO::ERRMODE_EXCEPTION gesetzt, wird das Skript sofort mit einem PHP-Fehler abgebrochen.</li>
            </ul>
            <pre>
            &lt?php

            $optionen = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];

            $db = new PDO(
                'mysql:host=localhost;dbname=mysql',
                'root',
                '',
                $optionen
            );

            $db->query('SELECT * FROM duser'); // falscher Tabellenname
            </pre>
        </div>
        <div>
            <pre>
            //create
            $name = $_POST['name'];
            $email = $_POST['email'];
            $get_id = $_GET['id'];

            if(isset($_POST['add'])){
            $sql = "INSERT INTO users (name, email) VALUE (?,?)";
            $query = $pdo->prepare($sql);
            $query->execute([$name, $email]);
                if($query){
                    //Seite reload
                    header("Location: ".$_SERVER['HTTP_REFERER']);
                }
            }
            </pre>
            <p>Die Abarbeitung dieses Beispiels wird mit einem Fatal error: Uncaught PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mysql.duser' doesn't exist abgebrochen, da die SQL-Anweisung fehlerhaft ist. Während der Entwicklung von PHP-Code ist PDO::ERRMODE_EXCEPTION somit sehr zu empfehlen, da man Probleme sofort bemerkt. Im produktiven Einsatz sollte man stattdessen aber besser PDO::ERRMODE_SILENT verwenden.</p>
            <h4>Fetch-Modus (PDO::ATTR_DEFAULT_FETCH_MODE)</h4>
            <p>Wenn Sie normalerweise mit den Methoden PDOStatement#fetchAll() oder PDOStatement#fetch() Datensätze auslesen, werden diese als kombiniertes assoziatives und numerisches Array zurückgeliefert. Für den sehr häufig vorkommenden Fall, dass Sie nicht beide Versionen der Daten benötigen, können Sie sich auch entweder nur das assoziative oder nur das numerische Array zurückgeben lassen.</p>
            <p>Dies können Sie über das Attribut PDO::ATTR_DEFAULT_FETCH_MODE einstellen. Es existiert eine recht große Anzahl an möglichen Werten, die häufigsten drei möchte ich Ihnen nun vorstellen:</p>
            <ul>
                <li>PDO::FETCH_BOTH: Dies ist die Standard-Einstellung. Sie bewirkt, dass jede Tabellenspalte im Ergebnis-Array sowohl mit ihrem numerischen Index als auch mit ihrem Namen auftaucht.</li>
                <li>PDO::FETCH_NUM: Mit dieser Einstellung werden nur noch die numerischen Indizes zurückgeliefert.</li>
                <li>PDO::FETCH_ASSOC: Mit dieser Einstellung wird nur noch das assoziative Array mit den Spaltennamen als Schlüssel zurückgeliefert. Diese Einstellung möchte ich Ihnen als sinnvollen Standard wärmstens ans Herz legen.</li>
            </ul>
            <pre>
            &lt?php

            $optionen = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            $db = new PDO(
                'mysql:host=localhost;dbname=mysql',
                'root',
                '',
                $optionen
            );

            $statement = $db->query('SELECT Host, User FROM user WHERE User = "root" AND Host = "localhost" LIMIT 1');
            $daten = $statement->fetch();

            ?>
            &ltpre>&lt?php var_dump($daten); ?>&lt/pre>
            </pre>
            <p>In diesem Beispiel erhalten wir also ein assoziatives Array mit den Spaltennamen Host und User als Schlüssel.</p>
            <p>Wenn Sie für einzelne Abfragen vom Standard-Fetch-Modus abweichen wollen, können Sie den gewünschten Modus einfach den Methoden PDOStatement#fetchAll() oder PDOStatement#fetch() als ersten Parameter übergeben.</p>
            <pre>
            &lt?php

            $optionen = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            $db = new PDO(
                'mysql:host=localhost;dbname=mysql',
                'root',
                '',
                $optionen
            );

            $statement = $db->query('SELECT Host, User FROM user WHERE User = "root" AND Host = "localhost" LIMIT 1');
            $daten = $statement->fetch(PDO::FETCH_NUM);

            ?>
            &ltpre>&lt?php var_dump($daten); ?>&lt/pre>
            </pre>
            <p>Der Standardfall bleibt weiterhin bei der alten Einstellung PDO::FETCH_ASSOC, und nur für den einen Aufruf von PDOStatement#fetch() in Zeile 15 wird PDO::FETCH_NUM als Modus eingestellt.</p>

            <h4>Gepufferte Abfragen (PDO::MYSQL_ATTR_USE_BUFFERED_QUERY)</h4>
            <p>Bei aktuelleren PHP-Versionen - ich konnte leider nicht herausfinden, ab welcher Version genau sich das Verhalten geändert hat - verwendet PDO bei MySQL-Datenbanken sogenannte gepufferte Abfragen (buffered queries). Das Resultat einer Abfrage (also beispielsweise der oder die Datensätze) wird sofort vom MySQL-Server übertragen und von PHP im Arbeitsspeicher des Webservers vorgehalten. Diese Vorgehensweise hat den Vorteil, dass Datenbank-Abfragen nicht durch vorherige Abfragen im gleichen Skript blockiert werden können.</p>
            <p>Wenn Sie mit einer Abfrage fertig sind und die Daten nicht weiter benötigen, sollten Sie jedoch das PDOStatement-Objekt mithilfe von unset() löschen, da ansonsten unnötig Ressourcen verschwendet werden</p>
            <p>Wenn Sie sich in Ihrem Code auf dieses Verhalten verlassen möchten, empfehle ich, PDO::MYSQL_ATTR_USE_BUFFERED_QUERY explizit auf true zu setzen. Man weiß ja nie, auf welcher Version von PHP genau der Code laufen wird oder wann mal wieder eine Einstellung von den PHP-Entwicklern stillschweigend umgestellt wird.</p>
            <pre>
            &lt?php

            $optionen = [
                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
            ];

            $db = new PDO(
                'mysql:host=localhost;dbname=mysql',
                'root',
                '',
                $optionen
            );

            $statement = $db->query('SELECT Host, User FROM user');
            $daten = $statement->fetchAll();

            // Sobald alle Datensätze mit fetch/fetchAll ausgelesen sind, wird das
            // PDOStatement-Objekt nicht länger benötigt und kann weggeräumt werden.
            unset($statement);

            ?>
            &ltpre>&lt?php var_dump($daten); ?>&lt/pre>
            </pre>
            <p>Falls Sie den Code in einer Funktion (oder Methode) aufrufen, die ohnehin kurz darauf endet, ist das ausdrückliche Löschen der Abfrage mit unset() natürlich unnötig. Mit dem Ende der Funktion wird automatisch auch die Abfrage gelöscht, da alle lokalen Variablen beim Verlassen einer Funktion weggeräumt werden.</p>
            <h4>Ressourcen-sparendere Vorgehensweise</h4>
            <p>Alternativ können Sie die gepufferten Abfragen auch deaktivieren. Pro Datenbank-Verbindung kann dann zu einem bestimmten Zeitpunkt immer nur eine einzige Abfrage aktiv sein.</p>
            <pre>
            &lt?php

            $optionen = [
                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => false,
            ];

            $db = new PDO(
                'mysql:host=localhost;dbname=mysql',
                'root',
                '',
                $optionen
            );

            $statement = $db->query('SELECT Host, User FROM user');

            ?>
            &lt!DOCTYPE html>
            &lthtml>

            &lthead>
            &ltmeta charset="utf-8" />
            &lttitle>PDO&lt/title>
            &lt/head>

            &ltbody>

            &lth1>MySQL-Benutzer&lt/h1>
            &ltul>
            &lt?php while ($benutzer = $statement->fetch()): ?>
                &ltli>
                            Host: &lt?= $benutzer['Host'] ?>&ltbr />
                            User: &lt?= $benutzer['User'] ?>
                            &lt/li>
                            &lt?php endwhile; ?>
                            &lt/ul>

                &lt/body>

                &lt/html>
            </pre>
            <p>Diese Vorgehensweise kann bei sehr vielen Datensätzen von Vorteil sein, da von PHP nicht alle Datensätze vorgehalten werden müssen. Dafür ist die Dreiteilung des Codes nicht mehr 100-prozentig, da nun das Auslesen der einzelnen Datensätze Teil der Ausgabe ist.</p>
            <p>Die Einstellung PDO::MYSQL_ATTR_USE_BUFFERED_QUERY existiert nur für MySQL. Wenn Sie mit anderen Datenbanken (Oracle, PostgreSQL, ...) arbeiten, können Sie nur mit PDOStatement#fetchAll() und unset() arbeiten, um das Problem der sich blockierenden Abfragen zu umgehen.</p>
            <h4>Vorschlag für eine Standard-PDO-Verbindung</h4>
            <p>Zum Abschluss all der Attribute und Einstellungsmöglichkeiten hier noch einmal eine Standardkonfiguration für MySQL in der Übersicht. Von nun an werde ich in den weiteren Codebeispielen die Datenbankverbindung nicht mehr explizit angeben, sondern diese als Datei per require_once aus einem Ordner inc einbinden.</p>
            <pre>
            &lt?php

            $optionen = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // nur zur Entwicklung!
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
            ];

            $db = new PDO(
                'mysql:host=localhost;dbname=unicode_test', // neue DB!
                'root',
                '',
                $optionen
            );
            </pre>
            <h4>Prepared Statements</h4>
            <p>Zuerst wird mit der Methode PDO#prepare() das SQL festgelegt. Diese Methode liefert Ihnen das bereits bekannte PDOStatement-Objekt zurück. Danach wird das SQL mit der Methode PDOStatement#execute() ausgeführt. Jetzt fragen Sie sich vielleicht, worin der Vorteil liegt, eine Anweisung durch zwei zu ersetzen. Der Vorteil von Prepared Statements liegt darin, dass in ihnen Platzhalter (?) verwendet werden können, die Sie erst beim PDOStatement#execute() mit Werten befüllen. Diese Werte werden der Methode als Parameter in Form eines Arrays übergeben.</p>
            <pre>
            &lt?php

            require_once 'inc/datenbank.inc.php';

            $daten = [
                'Top Gun',
                '1986-08-07',
                110,
                1,
            ];

            $sql = 'INSERT INTO filme (titel, veroeffentlichung, dauer, genre_id) VALUES (?, ?, ?, ?)';

            $statement = $db->prepare($sql);
            $statement->execute($daten);
            </pre>
            <p>Die Werte in der zweiten runden Klammer im SQL wurden einfach durch Fragezeichen ersetzt. Beachten Sie auch, dass um die Fragezeichen keine Anführungszeichen mehr stehen. Repräsentiert ein Platzhalter eine Datenbankspalte mit Text (z. B. VARCHAR), wird dieser automatisch in Anführungszeichen gesetzt.</p>
            <p>Da im SQL nun aber die Werte für das INSERT fehlen, müssen sie beim Aufruf von PDOStatement#execute() in Zeile 15 in Form eines numerischen Arrays nachgereicht werden. Die Werte müssen hierbei in der Reihenfolge im Array stehen, wie sie in der SQL- Anfrage stehen würden.</p>
            <p>Sehen Sie, wie viel übersichtlicher der Code jetzt geworden ist? Keine Stringverknüpfungen mehr, keine Vermischung von Anführungszeichen - als ich zum ersten Mal mit Prepared Statements gearbeitet habe, war ich spontan begeistert!</p>
            <h4>Mehrfaches Ausführen von Prepared Statements</h4>
            <p>Ein weiterer Vorteil von Prepared Statements ist, dass ein einzelnes Statement mehrmals mit PDOStatement#execute() ausgeführt werden kann. Sie müssen das eigentliche SQL nur einmal schreiben und mit PDO#prepare() vorbereiten und können es mit verschiedenen Werten so oft Sie wollen wiederverwenden.</p>
            <pre>
            &lt?php

            require_once 'inc/datenbank.inc.php';

            // falls die Tabellen schon existieren, wegräumen
            $db->query('DROP TABLE IF EXISTS genres');
            $db->query('DROP TABLE IF EXISTS filme');

            $db->query(
                'CREATE TABLE genres (
                    id INTEGER PRIMARY KEY AUTO_INCREMENT,
                    titel VARCHAR(255) UNIQUE KEY
                ) DEFAULT CHARSET = utf8'
            );

            $db->query(
                'CREATE TABLE filme (
                    id INTEGER PRIMARY KEY AUTO_INCREMENT,
                    titel VARCHAR(255),
                    veroeffentlichung DATE,
                    dauer INT(5),
                    genre_id INTEGER
                ) DEFAULT CHARSET = utf8'
            );

            $genres = ["Action", "Drama", "Komödie", "Sci-Fi"];

            $statement = $db->prepare('INSERT INTO genres (titel) VALUES (?)');
            foreach ($genres as $title) {
                $statement->execute([$title]);
            }
            $id = $db->lastInsertId();

            $db->query(
                'INSERT INTO filme (titel, veroeffentlichung, dauer, genre_id) VALUES
                    ("Dune", "1984-12-14",  137, ' . $id . '),
                    ("Total Recall", "1990-07-26",  113, ' . $id . ')
                '
            );

            </pre>
            <p>Wir haben in Zeile 30 auf dasselbe Prepared Statement mehrfach die Methode PDOStatement#execute() mit verschiedenen Werten aus dem Array $genres aufgerufen. Das ist im Prinzip dasselbe, wie vier Mal ein PDO#query() mit den kompletten Anweisungen abzusetzen, nur kürzer und ohne String-Verkettungen.</p>
            <p>Da wir in Zeile 32 PDO#lastInsertId() erst nach der foreach-Schleife aufrufen, erhalten wir hiermit die ID vom letzten Schleifendurchlauf.</p>
            <h4>Prepared Statements mit benannten Platzhaltern</h4>
            <p>Statt der bereits bekannten Fragezeichen können Sie auch benannte Platzhalter in Prepared Statements verwenden. Dies hat mehrere Vorteile:</p>
            <ul>
                <li>Benannte Platzhalter machen die SQL-Anweisung noch lesbarer. Anstatt eines Fragezeichens steht tatsächlich da, was an dieser Stelle erwartet wird.</li>
                <li>Mit benannten Platzhaltern müssen Sie PDOStatement#execute() ein assoziatives Array übergeben. Gerade wenn Daten schon in Form eines assoziativen Arrays vorliegen, ist es so nicht mehr notwendig, dieses Array zu einem numerischen umzubauen. Ein verbreiteter Anwendungsfall sind die Formulardaten in der Superglobalen $_POST.</li>
                <li>Bei assoziativen Arrays ist natürlich auch die Reihenfolge der Einträge nicht mehr wichtig, nur noch die Namen der Schlüssel. Sie müssen also nicht mehr darauf achten, die Parameter im Array in der korrekten Reihenfolge zu halten. Das macht Ihren Code robuster gegen Fehler.</li>
                
            </ul>
            <p>Benannte Platzhalter verwenden die Syntax :platzhalter, also z. B. :titel oder :dauer. Der Doppelpunkt vor dem Namen ist für PDO der Anhaltspunkt, dass es sich hierbei nicht um einen gewöhnlichen String handelt, sondern eben um einen benannten Platzhalter. Sie dürfen ihn nicht weglassen.</p>
            <p>Der Methode PDOStatement#execute() übergeben wir nun ein assoziatives Array, wobei die Schlüssel den Namen der Platzhalter entsprechen, nur ohne den Doppelpunkt. Aus :titel wird also 'titel'</p>
            <pre>
            &lt?php

            require_once 'inc/datenbank.inc.php';

            $daten = [
                'titel' => 'Top Gun',
                'veroeffentlichung' => '1986-08-07',
                'dauer' => 110,
                'genre' => 1,
            ];

            $sql = 'INSERT INTO filme (titel, veroeffentlichung, dauer, genre_id) VALUES (:titel, :veroeffentlichung, :dauer, :genre)';

            $statement = $db->prepare($sql);
            $statement->execute($daten);

            </pre>
            <p>Falls übrigens derselbe Platzhalter im SQL mehrfach vorkommen sollte, müssen Sie im Fall benannter Platzhalter den Wert der Methode PDOStatement#execute() nur einmal übergeben. Ansonsten gilt: Sie müssen PDOStatement#execute() exakt so viele Werte übergeben, wie Sie Platzhalter im SQL verwendet haben. </p>
        </div>
        <div>
            <pre>
                //read
                $sql = $pdo->prepare("SELECT * FROM users");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_OBJ);
                foreach($result as $res){
                    $res->id;
                    $res->name;
                    $res->email;
                }

            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>

    <fieldset><!-- SQL Anfrage -->
        <legend>SQL Anfrage</legend>
        <div>
            <pre>
                SELECT column_name(s) FROM table_name
                INSERT INTO table_name (col1, col2, col3,...)
                    VALUES (val1, val2, val3,...)
                $sql = "INSERT INTO mitarbeiter
                            (persnr, vorname, nachname, ressort_id)
                        VALUES
                            ($persnr, '$vorname', '$nachname', $ressort_id)";
                UPDATE table_name SET
                        col1=val1, col2=val2,...
                    WHERE some_col=some_val
                    $sql = "UPDATE mitarbeiter
                            SET
                                vorname='$vorname',
                                nachname='$nachname',
                                ressort_id=$ressort_id
                            WHERE
                                persnr=$persnr";
                DELETE FROM table_name
                    WHERE some_col = some_val
                $sql = "DELETE FROM mitarbeiter
                            WHERE persnr=".$_GET["id"];
            
                Mittels dem JOIN-Statement lassen sich die Werte aus mehreren Tabellen kombinieren.
                SELECT Inhalte aus Tabelle A und B
                    FROM Tabelle A
                    JOIN Tabelle B ON gemeinsame Felder
                    WHERE Bedingungen
            
                $sql = "SELECT
                    mitarbeiter.persnr,
                    mitarbeiter.vorname,
                    mitarbeiter.nachname,
                    ressort.ID
                        FROM mitarbeiter
                        JOIN ressort
                        ON mitarbeiter.ressort_id=ressort.ID
                        WHERE
                            mitarbeiter.persnr=".$_GET["id"];
                $sql = "SELECT count(persnr) AS anzahl FROM mitarbeiter
                            WHERE ressort_id=".$ressort_id;
            
                $sql = "SELECT *,
                            (SELECT count(persnr) AS anzahl FROM
                                mitarbeiter WHERE ressort_id=ressort.ID) as count
                        FROM ressort";
                $sql = "<b>SELECT</b> ID, bezeichnung FROM ressort";
                -------------------------------------------
                $sql = "<b>SELECT</b>
                mitarbeiter.persnr,
                mitarbeiter.vorname,
                mitarbeiter.nachname,
                ressort.bezeichnung AS ressort
                FROM ".self::$table."
                JOIN ressort
                    ON mitarbeiter.ressort_id=ressort.ID";
                -------------------------------------------
                $sql = "<b>SELECT</b>
                mitarbeiter.persnr,
                mitarbeiter.vorname,
                mitarbeiter.nachname,
                ressort.ID
                FROM ".self::$table."
                JOIN ressort
                ON mitarbeiter.ressort_id=ressort.ID
                WHERE
                    mitarbeiter.persnr=".$_GET["id"];
                -------------------------------------------
                $sql = "<b>INSERT</b> INTO ".self::$table."
                (persnr, vorname, nachname, ressort_id)
                VALUES
                ($persnr, '$vorname', '$nachname', $ressort_id)";
                -------------------------------------------
                $sql = "<b>DELETE</b> FROM ".self::$table."
                WHERE persnr=".$_GET["id"];
                -------------------------------------------
                $sql = "<b>UPDATE</b> ".self::$table."
                SET
                    vorname='$vorname',
                    nachname='$nachname',
                    ressort_id=$ressort_id
                WHERE
                    persnr=$persnr";
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>

    <fieldset><!-- static -->
        <legend>static</legend>
        <div>
            <pre>
                Mittels dem Schlüsselwort static könnte man in OOP,
                statische Methoden und Eigenschaften definieren.
                Diese Methoden und Eigenschaften sind nicht an ein einzelnes Objekt gekoppelt,
                sondern sie gelten global.
                Statische Methoden werden häufig verwendet,
                um gewisse Funktionalitäten zu kapseln
                // normale Klassenelemente (funktionen/variablen)
                // Jedes Objekt hat seine eigenen Funktionen und Variablen
                // Beliebig viele eigenständige Objekte sind möglich!
                // statische Klassenelemente
                // Die gesamte Klasse gilt als ein einziges, eigenes Objekt!
                // Kann von überall OHNE dass zuvor ein Objekt mit new erzeugt werden muss, genutzt werden!
                // Zugriff auf statische Elemente:
                // Klassenname::$variable
                // Klassenname::funktion()
            
                // Zugriff auf nicht-statische Elemente (normal):
                // $objekt->variable
                // $objekt->funktion()
            
                // Static field
                private static $table = "ressort";
                // zugreiefen self::$table
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- SQL class -->
        <legend>SQL class</legend>
        <div>
            <pre>
                class SQL {
                    private static $server = "localhost";
                    private static $user = "root";
                    private static $password = "";
                    private static $database = "php_projekt";
            
                    public static $i;
            
                    public static function init() {
                        self::$i = new mysqli(self::$server,
                                            self::$user,
                                            self::$password,
                                            self::$database);
            
                        if ( self::$i->connect_errno ) {
                            echo "Verbindungsfehler: ".self::$i->connect_error;
                        }
                        self::$i->set_charset("utf8mb4");
                    }
                    public static function query($sql) {
                        $result = self::$i->query($sql);
            
                        // Falls die Query irgendwie fehlerhaft ist (z.B. Syntaxfehler im SQL), können wir
                        // uns eine Fehlermeldung ausgeben lassen:
                        if ( !$result )  {
                            echo self::$i->error;
                        }
                        return $result;
                    }
                }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Nav Class -->
        <legend>Nav Class</legend>
        <div>
            <pre>
                class Navigation {
                    public static function ShowAll() {
                        $current = basename($_SERVER['PHP_SELF']);
                        echo "&lt;nav>
                            &lt;ul>";
                            self::ShowLink("index.php", "Mitarbeiter", $current);
                            self::ShowLink("ressort.php", "Ressorts", $current);
                        echo "&lt;/ul>
                        &lt;/nav>";
                    }
                    private static function ShowLink($link, $label, $current) {
                        $class = "";
                            if ( $link == $current ) {
                            $class = "class='current'";
                        }
                        echo "&lt;li>&lt;a $class href='$link'>$label&lt;/a>&lt;/li>";
                    }
                }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Debugger Class -->
        <legend>Debugger Class</legend>
        <div>
            <pre>
                class Debugger {
                    public static function print_pre($value) {
                        echo "&ltpre>";
                        print_r($value);
                        echo "&lt/pre>";
                    }
                    public static function showAll() {
                        echo "&ltdiv id='debug'>
                        &lth3>REQUEST</h3>";
                        self::print_pre($_REQUEST);
                        echo "&lt/div>";
                    }
                }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>

    <fieldset><!-- Konditionaloperator -->
        <legend>Konditionaloperator</legend>
        <div>
            <pre>
                // Konditionaloperator
                // $variable = (Bedingung) ? [Wenn true] : [Wenn false];
                // Ist die Bedingung wahr, dann wir der Variable der Wert von "Wenn true" zugewiesen
                // Ansonsten wird "Wenn false" zugewiesen
                $selected = ($row["ID"] == $_GET["id"]) ? " selected" : "";
            
                echo "&lt;option value='".$row["ID"]."' $selected>".$row["bezeichnung"]."&lt;/option>";
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Regular expression -->
        <legend>Regular expression</legend>
        <div>
            <pre>
                <p>
                    <br>Reguläre Ausdrücke sind eine bestimmte Form von Suchmustern,<br>dienen dafür, um Texte zu durchsuchen und zu überprüfen.
                </p>
                <p>
                    <br>In PHP braucht man für reguläre Ausdrücke<br> hauptsächlich die zwei Funktionen preg_match($muster, $text) und preg_replace($muster, $ersetzen, $text)<br> . Mit preg_match() wird überprüft, ob $text einem gewissen $muster entspricht,<br> den wir per regulärem Ausdruck definiert haben.<br> Mit preg_replace() können wir, ähnlich wie mit str_replace(), gewisse Textstellen ersetzen<br>
                </p>
                $text = "Wir haben 13 Katzen";
                $muster = "/1[0123456789]/";
                if(preg_match($muster, $text)) {
                echo "Eingabe enthält das Muster";
                } else {
                echo "Eingabe enthält nicht das Muster";
                }
                -------------------------------------------
                .       Wildcard
                []      Prüft ob Eines der Zeichen enthalten ist
                ^       Prüft den Anfang des Textes.(kann auch für "nicht" stehen)
                $       Prüft das Ende des Textes
                |       Alternative (ODER)
                ?       optionales Zeichen
                *       Wiederholung des vorherigen Elements (0-n)
                +       Wiederholung des vorherigen Elements (1-n)
                {n}     mindestens n-mal Widerholt
                {n,m}   mindestens n-mal Widerholt, maximal m-mal
                -------------------------------------------
                $pattern = array();
                $pattern["name"] = "/[a-zA-Z ]/";
                $pattern["email"] = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]+$/";
                $pattern["tel"] = "/^\+?([0-9\/ -]+)$/";
                $pattern["knr"] = "/K[0-9]+/";
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>

    <fieldset><!-- if anweisung -->
        <legend>if anweisung </legend>
        <div>
            <pre>
            &lt;li class="&lt;?php echo empty($page) ? 'active' : ''; ?>">
                &lt;a href="index.php">Home&lt;/a>
	    &lt;/li>
            ---------------------
            &lt;?php 
	        if( isset($_SESSION['email']) ) {
	    ?>
            &lt;li>
                &lt;a href="index.php">Mein Profil&lt;/a>
            &lt;/li>
            &lt;li>
                &lt;a href="index.php">Logout&lt;/a>
            &lt;/li>
	    &lt;?php
	    }
	        else
	    {
		echo '&lt;p>Du solls doch einloggen&lt;/p>';
	    }
	    ?>

        &lt;li class="&lt;?php echo ($page == 'about') ? 'active' : '' ?>">
		&lt;a href="index.php?page=about">About&lt;/a>
        &lt;/li>

        &lt;?php if(isset($meldung)) : ?>
            &lt;p class="msg"> &lt;?= $meldung; ?> &lt;/p>
            &lt;?php endif; ?>


            &lt;option value="male"&lt;?= $pageData['gender'] == 'male' ? ' selected="selected"' : '' ; ?>>Male&lt;/option>
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Datum und Zeit -->
        <legend>Datum und Zeit</legend>
        <div>

            <h3>time()</h3>
            <p>echo time();</p>
            <p>Die Ausgabe des Skripts war bei meinem ersten Test des Listings 1211535397.</p>

            <h3>strftime()</h3>
            <p>string strftime ( string $format [, int $ Timestamp ] )</p>
            <p>echo strftime('%d.%m.%Y');</p>
            <p>echo strftime('%H Uhr %M und %S Sekunden');</p>
            <pre>                
            %d: Tag des Monats (1 - 31)
            %m: Monat (1 - 12)
            %Y: Vierstellige Jahreszahl (z. B. 2005)
            %H: Zweistellige Stunden im 24-Stunden-Format (z. B. 18)
            %M: Zweistellige Minuten
            %S: Zweistellige Sekunden
            </pre>
            <h3>mktime()</h3>
            <p>Um den Jahreswechsel 2008-2009, also 01.01.2009 00:00:00 als Timestamp zu erhalten, müssen wir</p>
            <p>mktime(0, 0, 0, 1, 1, 2009);</p>
            <p>Den Timestamp für eine Minute vor diesem Jahreswechsel müssen Sie als</p>
            <p>mktime(23, 59, 0, 12, 31, 2008);</p>
            <h3>Datumsstrings zerlegen</h3>
            <pre>
            &lt?php

                $datum = '17.04.2006';
                $uhrzeit = '23:05:00';

                $datumTeile = explode('.', $datum);
                $uhrzeitTeile = explode(':', $uhrzeit);

                $timestamp = mktime(
                    $uhrzeitTeile[0],
                    $uhrzeitTeile[1],
                    $uhrzeitTeile[2],
                    $datumTeile[1],
                    $datumTeile[0],
                    $datumTeile[2]
                );

                echo strftime('%Y-%m-%d %H:%M', $timestamp);
            ?>
            </pre>
            <p>oder</p>
            <pre>
            &lt?php

                $datum = '17.04.2006';
                $uhrzeit = '23:05:00';

                [$tag, $monat, $jahr] = explode('.', $datum);
                [$stunde, $minute, $sekunde] = explode(':', $uhrzeit);

                $timestamp = mktime(
                    $stunde,
                    $minute,
                    $sekunde,
                    $monat,
                    $tag,
                    $jahr
                );

                echo strftime('%Y-%m-%d %H:%M', $timestamp);
            ?>
            </pre>
            <h3>strtotime()</h3>
            <p>Da Sie einen solchen Umwandlungscode von Strings in Timestamps bestimmt häufiger benötigen, bietet er sich geradezu für eine Funktion an.</p>
            <p>int strtotime ( string $time [, int $now ] )</p>
            <pre>
            &lt?php

                function ermittleTimestamp($datum, $uhrzeit)
                {
                    return strtotime($datum . ' ' . $uhrzeit);
                }

                $datum = '17.04.2006';
                $uhrzeit = '23:05:00';

                echo strftime(
                    '%Y-%m-%d %H:%M',
                    ermittleTimestamp($datum, $uhrzeit)
                );
            </pre>
            <pre>
            &lt?php

            function ermittleTimestamp($datum, $uhrzeit)
            {
                [$tag, $monat, $jahr] = explode('.', $datum);
                [$stunde, $minute, $sekunde] = explode(':', $uhrzeit);

                $timestamp = mktime(
                    $stunde,
                    $minute,
                    $sekunde,
                    $monat,
                    $tag,
                    $jahr
                );

                return $timestamp;
            }

            $datum = '17.04.2006';
            $uhrzeit = '23:05:00';

            echo strftime(
                '%Y-%m-%d %H:%M',
                ermittleTimestamp($datum, $uhrzeit)
            );
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Arrays -->
        <legend>Arrays</legend>
        <div>
            <p>
            Arrays werden sehr ähnlich wie normale Variablen erzeugt, indem man ihnen einen Wert zuweist. Die Schreibweise unterscheidet sich ein wenig, da Arrays mehr als einen Wert aufnehmen können. Hinter den Namen der Variablen werden eckige Klammern geschrieben, um zu zeigen, dass es sich um ein Array handelt. Dies wird als Index-Operator bezeichnet.
            </p>

            <pre>
                &lt?php
                // das ist eine normale Variablenzuweisung
                $variable1 = 'Wert';

                // so wird einem Array ein Wert zugewiesen
                $variable2[] = 'Wert';
            </pre>
            <p>Die eckigen Klammern sagen PHP, dass es nicht eine Variable vom Typ string mit dem String 'Wert' befüllen soll, sondern eine vom Typ array.</p>
            <p>Wie können Sie nun mehrere Werte in einem Array speichern? Genauso, wie Sie den ersten Wert gespeichert haben:</p>
            <pre>
            &lt?php

                $werte[] = 'Erster Wert';
                $werte[] = 'Zweiter Wert';
                $werte[] = 'Dritter Wert';
                $werte[] = 4;
                $werte[] = 5.0;
                $werte[] = true;
            </pre>
            <p>Dieses Array hat nun sechs verschiedene Werte gespeichert, sofern die Variable $werte vorher noch nicht existierte. Beachten Sie vor allem, dass es kein Problem ist, verschiedene Datentypen in einem Array abzulegen.</p>
            <h3>Auslesen von Werten</h3>
            <p>Sie kennen nun eine Methode, um Werte in einem Array abzulegen. Aber wie holt man diese Werte wieder heraus? Dazu müssen Sie wissen, wie PHP die einzelnen Werte in einem Array ablegt (in welcher Schublade des Schranks welcher Wert landet). Die einzelnen sogenannten Indizes (Schubladen) werden einfach durchnummeriert, wobei mit der Ziffer 0 begonnen wird. Da die Indizes Nummern sind, werden diese Arrays auch numerische Arrays genannt.</p>
            <p>Gehen wir in unserem letzten Beispiel von einer bisher nicht existierenden Array-Variable aus, so ist der String 'Erster Wert' im Index 0 gelandet und der Integer 4 im Index 3. Wenn Sie diese Werte wieder auslesen wollen, schreiben Sie einfach den gewünschten Indexwert in die eckigen Klammern:</p>
            <pre>
            &lt?php

                $werte[] = 'Erster Wert';
                $werte[] = 'Zweiter Wert';
                $werte[] = 'Dritter Wert';
                $werte[] = 4;
                $werte[] = 5.0;
                $werte[] = true;

                // gibt 'Erster Wert' aus
                echo $werte[0];

                // gibt 4 aus
                echo $werte[3];

                // gibt PHP-Hinweis und 'Array' aus
                echo $werte;
            </pre>
            <h3>Erzeugen mit explizitem Index</h3>
            <p>Wenn Sie auf die eben beschriebene Art einem Array neue Werte hinzufügen, werden den Werten Indizes in aufsteigender Nummer zugeordnet (erst 0, dann 1, dann 2, etc.). Wenn Sie einen Wert einem speziellen Index zuweisen möchten, z. B., um einen bereits vorhandenen Wert zu überschreiben, müssen Sie den gewünschten Index in die eckigen Klammern schreiben. Wenn in den Klammern ein Index steht, verwendet PHP diesen statt des nächsten freien.</p>
            <pre>
                &lt?php

                $werte[] = 1;
                $werte[] = 2;
                $werte[] = 3;
                $werte[] = 4;

                // der Wert im Index 2 (die Zahl 3) wird nun überschrieben
                $werte[2] = 'drei';

                // ein neuer Index (Nummer 4) wird angelegt
                $werte[] = 5;

                // ein neuer Index (Nummer 8) wird explizit angelegt
                $werte[8] = 9;

                // ein neuer Index (Nummer 9) wird angelegt
                $werte[] = 10;

                // gibt 10 aus
                echo $werte[9];
            </pre>
            <h3>Erzeugen mittels array()</h3>
            <p>Eine Alternative zur Array-Erzeugung mittels Index-Operator ist eine array()-Anweisung.6 Der Vorteil ist, dass Sie mehrere Werte gleichzeitig zuweisen können, anstatt nur einen Wert pro Anweisung.</p>
            <pre>
            &lt?php

                $werte = array(1, 2, 3, 4, 5, 6, 7, 8);

                // der vorhandene Index 3 wird überschrieben
                $werte[3] = 'vier';

                // ein neuer Index (8) wird angehängt
                $werte[] = 9;

                echo $werte[8]; // gibt 9 aus
            </pre>
            <pre>
            &lt?php

                $werte = array();

                // Array schrittweise befüllen
                $werte[] = 'Christin';
                $werte[] = 'Marco';
                $werte[] = 'Monika';

                echo $werte[2]; // gibt 'Monika' aus
            </pre>
            <h3>Erzeugen mittels kurzer Array-Syntax</h3>
            <p>Zum Erzeugen eines Arrays mit mehreren Werten kann seit PHP 5.4 auch eine kurze Array-Syntax mit eckigen Klammern anstatt array() verwendet werden. Die vorherige Schreibweise ist dadurch nicht komplett obsolet, aber die neue Schreibweise ist kürzer und lesbarer. Ich werde sie deshalb in allen nachfolgenden Beispielen verwenden.</p>
            <pre>
            &lt?php

                $werte = [1, 2, 3, 4, 5, 6, 7, 8];

                // ein neuer Index (8) wird angehängt
                $werte[] = 9;

                echo $werte[8]; // gibt 9 aus
            </pre>
            <h3>Assoziative Arrays</h3>
            <p>Sie sehen, es wird einfach statt einer Zahl (oder gar nichts) ein String in die eckigen Klammern geschrieben. Diese assoziativen Indizes, auch Schlüssel genannt, haben den Vorteil, dass wir hier Namen verwenden können, die uns etwas sagen, also Assoziationen auslösen. Daher kommt auch der Name dieses Array-Typs. Sie müssen sich nicht merken, welcher Wert im Index 25 liegt, sondern können meist schon am Namen des Schlüssels erkennen, worum es sich handelt.</p>
            <pre>
            &lt?php

                $emails = [];

                $emails['hans'] = 'hans@example.com';
                $emails['sabine'] = 'sabine@example.com';
                $emails['heiko'] = 'heiko@example.com';
                $emails['jan'] = 'jan@example.com';

                echo $emails['heiko'];
            </pre>
            <p>
            Ein grundlegender Unterschied zwischen numerischen und assoziativen Arrays besteht darin, dass numerische Arrays eine Reihenfolge haben. Sie können durch den Index feststellen, welcher Wert vor und hinter einem anderen Wert im Array steht. Wenn Sie Strings als Schlüssel verwenden, verlieren Sie diesen Vorteil. Dafür können Sie mit den Namen der Indizes mehr anfangen als mit reinen Nummern.
            </p>
            <h3>Der Doppelpfeil-Operator (=>)</h3>
            <p>
            Sie können auch bei assoziativen Arrays die array()-Anweisung oder die kurze Array-Syntax mit eckigen Klammern verwenden, um gleich mehrere Werte zuzuweisen. Sie müssen nur vor jedem Wert ausdrücklich den Index angeben. Dies geschieht mit dem Doppelpfeil-Operator (=>), den Sie zwischen Index und Wert schreiben müssen:
            </p>
            <pre>
            &lt?php

                $emails = [
                    'hans' => 'hans@example.com',
                    'sabine' => 'sabine@example.com',
                    'heiko' => 'heiko@example.com',
                    'jan' => 'jan@example.com',
                ];
            </pre>
            <h3>Nützliche Array-Funktionen</h3>
            <h4>is_array()</h4>
            <p>Die erste und einfachste Funktion ist is_array(), die wie ihre Kollegen is_int() oder is_string() prüft, ob eine Variable den passenden Datentyp enthält. Diese Funktion prüft also, ob in der übergebenen Variable ein Array liegt.
            bool is_array ( mixed $var )

            Zurückgegeben wird true, wenn es sich um ein Array handelt, ansonsten false.
            </p>
            <h4>count()</h4>
            <p>Die Funktion count() zählt die Elemente in einem Array und liefert die Anzahl als Integer-Wert zurück.</p>
            <pre>
            &lt?php

                $emails = [
                    'hans' => 'hans@example.com',
                    'sabine' => 'sabine@example.com',
                    'heiko' => 'heiko@example.com',
                    'jan' => 'jan@example.com',
                ];

                echo count($emails);
            </pre>
            <h4>in_array()</h4>
            <p>Die Funktion in_array() sagt Ihnen, ob sich ein bestimmter Wert in einem Array befindet.</p>
            <p>Der erste Parameter $needle ist der Wert, nach dem gesucht werden soll, und $haystack das Array, das durchsucht wird. Mit dem optionalen Parameter $strict legen Sie fest, dass keine Typkonvertierung für die Identifizierung der Nadel erlaubt ist (true). Es wird true zurückgegeben, wenn sich der gesuchte Wert im Array befindet.</p>
            <pre>
            &lt?php

            $staedte = [
                'Hamburg',
                'München',
                'Stuttgart',
                'Köln',
                'Frankfurt',
                'Berlin',
            ];
            $test1 = 'Nürnberg';
            $test2 = 'Köln';
            $test3 = 'Dresden';

            ?>
            &lt!DOCTYPE html>
            &lthtml>

            &lthead>
            &ltmeta charset="utf-8" />
            &lttitle>in_array()&lt/title>
            &lt/head>

            &ltbody>
                Ist die Stadt &lt?php echo $test1; ?> in der Liste?
                &lt?php echo in_array($test1, $staedte); ?>&ltbr />

                Ist die Stadt &lt?php echo $test2; ?> in der Liste?
                &lt?php echo in_array($test2, $staedte); ?>&ltbr />

                Ist die Stadt &lt?php echo $test3; ?> in der Liste?
                &lt?php echo in_array($test3, $staedte); ?>&ltbr />
                &lt/body>

                &lt/html>
            </pre>
            <p>Die Stadt Köln ist im Array $staedte, also wird beim zweiten Test true bzw. 1 zurückgegeben.</p>
            <h4>array_pop()</h4>
            <p>Die Funktion array_pop() liefert den letzten Wert eines Arrays zurück und entfernt diesen aus dem Array.</p>
            <p>Wurde ein Array schrittweise befüllt, so kann man durch eine Kombination von array_pop() mit array_keys() sehr einfach den zuletzt vergebenen Index ermitteln.</p>
            <pre>
            &lt?php

                $werte = [1, 2, 3, 4];

                $werte[] = 5;
                $werte[] = 10;

                $indizes = array_keys($werte);

                // gibt den höchsten Index (hier 5) aus
                echo array_pop($indizes);
            </pre>
            <p>Da array_keys() das Original-Array $werte nicht verändert, bleibt auch der Aufruf von array_pop() ohne Auswirkung auf dieses. Es wird allerdings der Rückgabewert von array_keys() in $schluessel verändert.</p>
            <p>Wichtig ist lediglich, dass wir den Rückgabewert von array_keys() zunächst in einer Variablen zwischenspeichern und diese dann als Parameter für array_pop() verwenden, da wir sonst eine PHP-Meldung erhalten.</p>
            <h4>array_shift()</h4>
            <p>Die Funktion array_shift() ist das direkte Gegenstück von array_pop() und liefert den ersten Wert eines Arrays (unabhängig vom tatsächlichen Array-Index) zurück. Auch dieser Wert wird durch die Funktion aus dem Original-Array entfernt.</p>
            <pre>
                &lt?php

                $variable = [5 => 1, 2, 3, 4];

                $variable[] = 5;
                $variable[] = 10;

                // gibt den ersten Wert (also 1) aus
                echo array_shift($variable);
            </pre>
            <h3>Zweidimensionale Arrays</h3>
            <h4>Zweidimensionale Arrays erzeugen</h4>
            <p>Ein zweidimensionales Array ist ein Array, dessen Elemente wieder aus Arrays bestehen. Die Elemente der inneren Arrays bestehen allerdings aus einfachen Datentypen. Wir reden hier von zwei Dimensionen, da in dem Array eine zweite Ebene von Arrays liegt.</p>
            <pre>
            &lt?php

                $zahlen = [
                    [3, 5, 7, 12],
                    [2, 78, 96, 117],
                    [4, 45, 94, 101],
                ];
            </pre>
            <p>Anstatt wie bisher direkt Zahlen oder Strings als Elemente des Arrays $zahlen zu verwenden, liegen dort wieder Arrays. Vergessen Sie nicht die Kommas zwischen den Elementen, also auch hinter jedem inneren Array.</p>
            <h4>Zweidimensionale Arrays auslesen</h4>
            <pre>
            &lt?php
                $zahlen = [
                    [3, 5, 7, 12],
                    [2, 78, 96, 117],
                    [4, 45, 94, 101],
                ];

                echo $zahlen[2][1] . ', '; // gibt 45 aus
                echo $zahlen[0][3] . ', '; // gibt 12 aus
                echo $zahlen[1][0] . ', '; // gibt 2 aus
                echo $zahlen[2][2];        // gibt 94 aus
            </pre>
            <h4>Formatierung</h4>
            <pre>
            &lt?php

                $staedte = [
                    [
                        'name' => 'München',
                        'land' => 'Deutschland',
                        'einwohner' => 1300000,
                    ],
                    [
                        'name' => 'Berlin',
                        'land' => 'Deutschland',
                        'einwohner' => 3400000,
                    ],
                    [
                        'name' => 'Paris',
                        'land' => 'Frankreich',
                        'einwohner' => 2200000,
                    ],
                    [
                        'name' => 'London',
                        'land' => 'England',
                        'einwohner' => 7500000,
                    ],
                ];
            </pre>
            <p>Sie können natürlich auch ein mehrdimensionales Array in mehreren Schritten aufbauen. Dafür verwenden Sie wie bisher den Index-Operator [].</p>
            <pre>
            &lt?php

                $staedte = [];

                $staedte[] = [
                    'name' => 'München',
                    'land' => 'Deutschland',
                    'einwohner' => 1300000,
                ];

                $staedte[] = [
                    'name' => 'Berlin',
                    'land' => 'Deutschland',
                    'einwohner' => 3400000,
                ];

                $staedte[] = [
                    'name' => 'Paris',
                    'land' => 'Frankreich',
                    'einwohner' => 2200000,
                ];

                $staedte[] = [
                    'name' => 'London',
                    'land' => 'England',
                    'einwohner' => 7500000,
                ];

            </pre>
            <p>Hier erzeugen wir zuerst ein leeres Array (Zeile 3) und fügen dann jedes innere Array einzeln hinzu. Wenn Ihnen diese Schreibweise mehr zusagt, können Sie sie gerne verwenden.</p>
            <h4>Mehrdimensionale Arrays</h4>
            <p>Ein mehrdimensionales Array ist ein Array mit mindestens zwei Dimensionen. Ein zweidimensionales Array ist übrigens ein Spezialfall des mehrdimensionalen Arrays, welcher häufig auch als Matrix bezeichnet wird. Wenn ein Array mehrere Dimensionen hat, bedeutet dies, dass in dem äußersten Array wieder Arrays liegen, in denen dann wiederum Arrays liegen, in denen dann wiederum Arrays liegen...</p>
            <pre>
            &lt?php

                $staedte = [
                    [
                        'name' => 'München',
                        'land' => 'Deutschland',
                        'einwohner' => 1300000,
                        'partnerstaedte' => [
                            'Bordeaux',
                            'Cincinnati',
                            'Edinburgh',
                            'Harare',
                            'Kiew',
                        ],
                    ],
                    [
                        'name' => 'Berlin',
                        'land' => 'Deutschland',
                        'einwohner' => 3400000,
                        'partnerstaedte' => [
                            'Paris',
                            'Budapest',
                            'Mexiko City',
                            'Tokio',
                            'Istanbul',
                            'Moskau',
                        ],
                    ],
                    [
                        'name' => 'Paris',
                        'land' => 'Frankreich',
                        'einwohner' => 2200000,
                        'partnerstaedte' => [
                            'Rom',
                            'Berlin',
                            'Kyoto',
                            'Mexiko City',
                            'Seoul',
                            'Washington',
                        ],
                    ],
                ];
            </pre>
            <p>Dieses dreidimensionale Array enthält Städte mit den Eigenschaften name, land, einwohner und partnerstaedte. Das letzte Element partnerstaedte ist wiederum ein Array, da eine Stadt ja mehrere Partner haben kann. Dieses Array bildet die dritte Ebene.</p>
            <h4>Verschachtelte foreach-Schleifen</h4>
            <p>Sie haben gelernt, ein eindimensionales Array mit einer foreach-Schleife auszulesen. Was tun Sie aber, wenn Sie mehrere Dimensionen von numerischen Arrays haben?

            Sie benötigen für jede Ebene eine weitere foreach-Schleife, die in der Schleife für die vorherige Ebene liegt. Genauso, wie Sie die Arrays verschachteln, tun Sie dies auch bei den Schleifen.
            </p>
            <pre>
            &lt?php

                $zahlen = [
                    [3, 5, 7, 12],
                    [2, 78, 96, 117],
                    [4, 45, 94, 101],
                ];

                ?>
                &lt!DOCTYPE html>
                &lthtml>

                &lthead>
                &ltmeta charset="utf-8" />
                &lttitle>Verschachtelte foreach-Schleifen&lt/title>
                &lt/head>

                &ltbody>
                &ltp>Zweidimensionales Array als HTML-Liste ausgeben:&lt/p>

                &ltul>
                &lt?php foreach ($zahlen as $index => $zeile) { ?>
                    &ltli>
                                Zeile: &lt?php echo $index + 1; ?>
                                &ltul>
                                &lt?php foreach ($zeile as $zahl) { ?>
                                    &ltli>&lt?php echo $zahl; ?>&lt/li>
                                    &lt?php } ?>
                                    &lt/ul>
                                    &lt/li>
                                    &lt?php } ?>
                                    &lt/ul>
                                    &lt/body>

                                    &lt/html>
            </pre>
            <p>Wir geben hier das zweidimensionale Array $zahlen als eine verschachtelte HTML-Liste (&ltul>) aus. Sehen Sie, wie die äußere Array-Dimension in der äußeren &ltul> und die innere Dimension in der inneren &ltul> liegt?</p>
            <p>Die äußere foreach-Schleife stellt das jeweilige Array-Element in der Variablen $zeile bereit. Die innere Schleife nimmt genau diese Variable und zerlegt sie weiter in die Variable $zahl, die dann die eigentlichen Integer-Werte enthält.</p>
            <p>Sie können auch foreach-Schleifen und den direkten Zugriff auf Array-Elemente mischen. Sehen Sie sich folgendes Skript an:</p>
            <pre>
            &lt?php

                $staedte = [
                    [
                        'name' => 'München',
                        'land' => 'Deutschland',
                        'einwohner' => 1300000,
                        'partnerstaedte' => [
                            'Bordeaux',
                            'Cincinnati',
                            'Edinburgh',
                            'Harare',
                            'Kiew',
                        ],
                    ],
                    [
                        'name' => 'Berlin',
                        'land' => 'Deutschland',
                        'einwohner' => 3400000,
                        'partnerstaedte' => [
                            'Paris',
                            'Budapest',
                            'Mexiko City',
                            'Tokio',
                            'Istanbul',
                            'Moskau',
                        ],
                    ],
                    [
                        'name' => 'Paris',
                        'land' => 'Frankreich',
                        'einwohner' => 2200000,
                        'partnerstaedte' => [
                            'Rom',
                            'Berlin',
                            'Kyoto',
                            'Mexiko City',
                            'Seoul',
                            'Washington',
                        ],
                    ],
                ];

                ?>
                &lt!DOCTYPE html>
                &lthtml>

                &lthead>
                    &ltmeta charset="utf-8" />
                    &lttitle>Städte&lt/title>
                &lt/head>

                &ltbody>
                &lth1>Städte&lt/h1>

                &lttable>
                &lttr>
                &ltth>Name&lt/th>
                &ltth>Land&lt/th>
                &ltth>Einwohner&lt/th>
                &ltth>Partnerstädte&lt/th>
                &lt/tr>
                &lt?php foreach ($staedte as $stadt) { ?>
                    &lttr>
                    &lttd>&lt?php echo $stadt['name']; ?>&lt/td>
                    &lttd>&lt?php echo $stadt['land']; ?>&lt/td>
                    &lttd>&lt?php echo $stadt['einwohner']; ?>&lt/td>
                    &lttd>
                    &ltul>
                    &lt?php foreach ($stadt['partnerstaedte'] as $partner) { ?>
                        &ltli>&lt?php echo $partner; ?>&lt/li>
                        &lt?php } ?>
                        &lt/ul>
                        &lt/td>
                        &lt/tr>
                        &lt?php } ?>
                        &lt/table>

                        &lt/body>

                        &lt/html>
            </pre>
            <p>Wir geben hier das dreidimensionale Array $staedte in einer Tabelle aus. Die Partnerstädte werden in der vierten Spalte in einer &ltul> ausgegeben.</p>

            <h3>Array-Sortierung</h3>
            <p>Beginnen wir mit der Sortierung von Werten in einem Array. Nicht immer kommen solche Daten aus einer Datenbank, wo wir bereits im Rahmen der Datenbank-Abfrage mit ORDER BY die Sortierung anpassen können. Die Sortierung auf DB-Ebene ist nämlich in der Regel von der Performance her zu bevorzugen. Doch manchmal haben wir diese Möglichkeit eben nicht und wir sollten uns deshalb mit den Alternativen beschäftigen. Schauen wir uns zunächst ein eindimensionales Array mit Preisen an.</p>
            <pre>
            [1 => 3.5, 3 => 1.5, 4 => 3.25, 8 => 1.75]
            </pre>
            <p>Wir möchten dieses Array nun so sortieren, dass der kleinste Preis zuerst kommt und das Array mit dem höchsten Wert endet. Dies ist beispielsweise mit der Funktion sort() möglich.</p>
            <pre>
            &lt?php

                $zahlen = [1 => 3.5, 3 => 1.5, 4 => 3.25, 8 => 1.75];

                sort($zahlen);

                ?>
                &ltpre>&lt?php var_dump($zahlen); ?>&lt/pre>
            </pre>
            <p>Es ist somit eine numerische Sortierung erfolgt und es wurde beginnend bei 0 neu indexiert. Doch was passiert, wenn wir statt Zahlen Strings als Werte verwenden?</p>
            <pre>
            &lt?php

            $programmiersprachen = ['PHP', 'JavaScript', 'Ruby', 'perl'];

            sort($programmiersprachen);

            ?>
            &ltpre>&lt?php var_dump($programmiersprachen); ?>&lt/pre>
            </pre>
            <p>In diesem Fall erfolgt eine alphabetische Sortierung, wobei, wie schon bei den Vergleichsoperatoren erwähnt, Großbuchstaben kleiner als Kleinbuchstaben sind und deshalb zuerst kommen.</p>
            <p>Vor dem gleichen Problem stehen wir auch bei dem nachfolgenden Beispiel:</p>
            <pre>
            &lt?php

            $bilder = ['bild2.jpg', 'bild10.jpg', 'Bild4.jpg', 'bild1.jpg'];

            sort($bilder);

            ?>
            &ltpre>&lt?php var_dump($bilder); ?>&lt/pre>
            </pre>
            <p>Schauen wir uns die Ausgabe des Beispiels genauer an, so gilt 'Bild4.jpg' < 'bild1.jpg' (und 'bild10.jpg' < 'bild2.jpg'). Wir würden jedoch gerne die Groß- und Kleinschreibung bei der Sortierung ignorieren. Dies ist seit PHP 5.4 mittels des optionalen zweiten Parameters der sort-Funktion möglich.</p>
            <pre>
            &lt?php

            $bilder = ['bild2.jpg', 'bild10.jpg', 'Bild4.jpg', 'bild1.jpg'];

            sort($bilder, SORT_STRING | SORT_FLAG_CASE);

            ?>
            &ltpre>&lt?php var_dump($bilder); ?>&lt/pre>
            </pre>
            <p>Wir müssen lediglich als Wert für den zweiten Parameter die Konstanten SORT_STRING und SORT_FLAG_CASE angeben. Wie schon bei der Funktion htmlspecialchars() werden diese sogenannten Flags mittels Pipe-Symbol kombiniert. Dies drückt aus, dass bei der Sortierung alle Werte als Strings betrachtet werden sollen und die Sortierung unabhängig von Groß- und Kleinschreibung erfolgen soll. Es gilt somit: 'bild1.jpg' < 'bild10.jpg' < 'bild2.jpg' < 'Bild4.jpg'. Wir möchten jedoch eigentlich eine sogenannte natürliche Reihenfolge, bei der das Bild mit der Nummer 10 der letzte Wert ist.</p>
            <h3>Benutzerdefinierte Vergleichsfunktionen</h3>
            <p>Neben den vorgefertigten Sortierfunktionen bietet PHP auch die Möglichkeit einer benutzerdefinierten Sortierung. Hierfür dienen die Funktionen usort(), uasort() und uksort() (u für user-defined), denen man die Vergleichsregeln für zwei Werte bzw. Keys mitteilen kann. Dies geschieht in Form sogenannter Vergleichsfunktionen, auf die ich gleich noch zu sprechen kommen werde. Wie schon bei sort() gehen bei usort() die Indizes verloren. Bei den anderen beiden Funktionen bleiben hingegen die Indizes und ihre Zuordnung zum Wert erhalten, womit sie sich für assoziative Arrays eignen.</p>
            <pre>
            &lt?php

            function vergleichsfunktion($a, $b)
            {
                if ($a < $b) {
                    $ergebnis = -1;
                } elseif ($a > $b) {
                    $ergebnis = 1;
                } else {
                    $ergebnis = 0;
                }
                
                return $ergebnis;
            }

            $zahlen = [1 => 3.5, 3 => 1.5, 4 => 3.25, 8 => 1.75];

            usort($zahlen, 'vergleichsfunktion');

            ?>
            &ltpre>&lt?php var_dump($zahlen); ?>&lt/pre>
            </pre>
            <p>In PHP gibt es ein paar Funktionen (hier usort), denen man als Wert für einen der Parameter eine Funktion (hier vergleichsfunktion) mitteilen muss.32 Man bezeichnet die Funktionen, die als Parameter übergeben werden, auch als Rückruffunktionen (engl. callback functions) bzw. Callbacks. Jede fertige oder benutzerdefinierte PHP-Funktion kann theoretisch als Callback verwendet werden, Sprachkonstrukte (z. B. empty() oder isset()) sind hingegen ausgeschlossen. In der Praxis würden die meisten Funktionen aber zu keinem sinnvollen Ergebnis führen, da sie nicht das benötigte Ergebnis liefern.</p>
            <p>
            Im Falle der Vergleichsfunktionen benötigen wir eine negative Zahl (meist -1), wenn $a kleiner als $b ist und deshalb im sortierten Array $a zuerst kommen soll. Soll hingegen $b zuerst kommen, so muss eine positive Zahl (meist 1) zurückgegeben werden. Sind $a und $b gleich, so gibt man normalerweise eine 0 zurück.

            Ist der Rückgabewert einer Vergleichsfunktion kein Integer, so erfolgt eine Typumwandlung. Bei einem Float würden hierbei die Nachkommastellen einfach verworfen.
            </p>
            <p>In einigen Spezialfällen kann man sehr kurze Vergleichsfunktionen formulieren.</p>
            <pre>
            &lt?php

            function vergleichsfunktion($a, $b)
            {
                return $a - $b;
            }

            $zahlen = [3, 1, -3, -1, 8];

            usort($zahlen, 'vergleichsfunktion');

            ?>
            &ltpre>&lt?php var_dump($zahlen); ?>&lt/pre>
            </pre>
            <p>Wirklich sinnvoll ist dieses Beispiel jedoch nur mit einem Array aus Ganzzahlen, da wir hier ja das Ergebnis einer Subtraktion als Rückgabewert verwenden. Bei Fließkommazahlen würde übrigens durch besagte Typumwandlung aus allen Nachkommazahlen zwischen -1 und 1 der Integer 0, was das Ergebnis verfälschen würde.</p>
            <pre>
            &lt?php

            function vergleichsfunktion($a, $b)
            {
                return !($a < $b);
            }

            $zahlen = [3.5, 3, 0.75, 1.5, 4, -3.25, 1.75, 0.5, -0.25];

            usort($zahlen, 'vergleichsfunktion');

            ?>
            &ltpre>&lt?php var_dump($zahlen); ?>&lt/pre>
            </pre>
            <p>Der Lösungsansatz dieses Beispiels basiert auf der Annahme, dass man eigentlich nur den Rückgabewert 1 wirklich benötigt, da in diesem Fall $a und $b die Position im Array vertauschen müssen. Wenn $b größer als $a ist, ist der boolesche Ausdruck !($a < $b) nämlich !false bzw. true, was durch die Typumwandlung zum Integer 1 wird.</p>
            <h4>Der Spaceship-Operator</h4>
            <p>Wirklich lesbar ist die letzte Vergleichsfunktion nicht und über die dahinter liegende Annahme lässt sich trefflich streiten. Die Funktion ist jedoch kürzer als die bessere Variante ($a < $b) ? -1 : (($a > $b) ? 1 : 0) mit zwei verschachtelten ternären Operatoren und wesentlich kürzer als eine ausführliche Schreibweise mit if-elseif-else-Anweisung, deshalb wurde mit PHP 7.0 der sogenannte Spaceship-Operator eingeführt.</p>
            <pre>
            &lt?php

            function vergleichsfunktion($a, $b)
            {
                return $a <=> $b;
            }

            $zahlen = [3.5, 3, 0.75, 1.5, 4, -3.25, 1.75, 0.5, -0.25];

            usort($zahlen, 'vergleichsfunktion');

            ?>
            &ltpre>&lt?php var_dump($zahlen); ?>&lt/pre>
            </pre>
            <p>Dieser neue Vergleichsoperator hat nicht umsonst große Ähnlichkeit mit den Kleiner-als- und Größer-als-Operatoren, er befolgt nämlich ähnliche Regeln (z. B. in Bezug auf Strings). Der Ausdruck wird allerdings zu -1, 0 oder 1 ausgewertet, sofern $a kleiner als, gleich oder größer als $b ist. Weiterführende Beispiele finden Sie im entsprechenden RFC.</p>
            <p>Sind im Ausdruck $a <=> $b die Werte der beiden Variablen numerische Arrays, so werden die Werte der beiden Arrays links beginnend so lange verglichen, bis zwei unterschiedliche Werte in den Arrays gefunden wurden. Dies kann man dazu ausnutzen, in einem mehrdimensionalen Array nach mehreren Werten zu sortieren.</p>
            <pre>
            &lt?php

            function vergleichsfunktion($a, $b)
            {
                return [$a['nachname'], $a['vorname']] <=> [$b['nachname'], $b['vorname']];
            }

            $personen = [
                ['vorname' => 'Hans', 'nachname' => 'Schmidt'],
                ['vorname' => 'Frank', 'nachname' => 'Meier'],
                ['vorname' => 'Elisabeth', 'nachname' => 'Maier'],
                ['vorname' => 'Elisabeth', 'nachname' => 'Schmidt'],
            ];

            usort($personen, 'vergleichsfunktion');

            ?>
            &ltpre>&lt?php var_dump($personen); ?>&lt/pre>
            </pre>
            <p>In diesem Beispiel werden die Werte des numerischen Arrays, welche Personen in Form eines assoziativen Arrays beschreiben, zunächst nach dem Nachnamen der Person sortiert. Nur wenn dieser gleich sein sollte, wird durch die Array-Schreibweise vor und hinter dem Spaceship-Operator in Zeile 5 noch der Vorname der Person für den Vergleich hinzugezogen. Hierzu müssen wir lediglich in Zeile 5 zwei neue numerische Arrays aus Nachname und Vorname erzeugen, welche als ersten Wert den Nachnamen (das erste Sortierkriterium) enthalten.</p>
            <h4>Anonyme Funktionen</h4>
            <p>Bereits seit PHP 5.3 gibt es sogenannte anonyme Funktionen, womit Funktionen ohne Namen gemeint sind. Ähnlich wie bei Javascript lassen sich so definierte Funktionen an eine Variable binden oder direkt als Wert für einen Callback-Parameter angeben.</p>
            <pre>
            &lt?php

                $zahlen = [3, 1, -3, -1, 8];

                usort($zahlen, function ($a, $b) {
                    return $a <=> $b;
                });

                ?>
                &ltpre>&lt?php var_dump($zahlen); ?>&lt/pre>
            </pre>
            <p>Mit PHP 7.4 ist eine, an die ES6-Syntax von Javascript angelehnte, noch etwas kürzere Schreibweise von anonymen Funktionen möglich. Im Gegensatz zu Javascript benötigen wir hierfür jedoch das Schlüsselwort fn.</p>
            <pre>
            &lt?php

                $zahlen = [3, 1, -3, -1, 8];

                usort($zahlen, fn($a, $b) => $a <=> $b);

                ?>
                &ltpre>&lt?php var_dump($zahlen); ?>&lt/pre>
            </pre>

            <h4>Der Splat-Operator</h4>
            <p>Sie erinnern sich sicher noch an die Funktion mktime(). Diese erwartet die Angabe eines Zeitpunkts in Form von sechs Werten. Gehen wir für unser Beispiel davon aus, dass wir diese Angaben in korrekter Reihenfolge in einem numerischen Array vorliegen haben.</p>
            <pre>
            &lt?php

                $zeitpunkt = [23, 59, 0, 12, 31, 2008];

                [$stunde, $minute, $sekunde, $monat, $tag, $jahr] = $zeitpunkt;
                $timestamp = mktime($stunde, $minute, $sekunde, $monat, $tag, $jahr);

                echo $timestamp;
            </pre>
            <p>Man könnte Daten eines solchen Arrays nun mittels Destructuring in einzelne Variablen aufteilen und diese dann als Werte für die Parameter verwenden. Dies wäre aber relativ viel Schreibaufwand für ein solch kleines Problem.</p>
            <pre>
            &lt?php

                $zeitpunkt = [23, 59, 0, 12, 31, 2008];

                $timestamp = mktime(...$zeitpunkt);

                echo $timestamp;
            </pre>
            <p>Wesentlich kürzer geht es mit dem sogenannten Splat-Operator ..., der mit PHP 5.6 eingeführt wurde. Diesen notiert man beim Funktionsaufruf vor der Array-Variable. Ähnlich wie beim Destructuring wird das Array in einzelne Werte zerlegt, und jeder Wert landet in einer Parametervariable. Hierbei erfolgt die Zuordnung von links nach rechts, d. h. der erste Wert des Arrays landet im ersten Parameter. Diesen Vorgang bezeichnet man auch als Argument Unpacking. Wir können hiermit grundsätzlich eine beliebige Anzahl von Parametervariablen befüllen, solange die Anzahl der Werte im Array zur Funktionsdefinition passt.</p>
            <pre>
            &lt?php

                $zeitpunkt = [12, 31, 2008];

                $timestamp = mktime(23, 59, 0, ...$zeitpunkt);

                echo $timestamp;
            </pre>
            <p>Vor dem Splat-Operator ist die Angabe weiterer Werte möglich, die Zuordnung zu den Parametern verschiebt sich entsprechend. Allerdings kann das Array mit dem Splat-Operator immer nur als letzter Wert übergeben werden. Es ist auch nur ein Splat-Operator pro Aufruf möglich.</p>
            <h4>
            Variadische Funktionen
            </h4>
            <p>Betrachten wir nun den umgekehrten Fall, also die Übergabe einer beliebigen Anzahl von Werten. Funktionen, denen Sie eine beliebige Anzahl von Werten übergeben können, nennt man Variadische Funktionen. Im PHP-Bereich ist die Funktion sprintf() ein Beispiel für eine solche Funktion.</p>
            <pre>
            &lt?php

                echo sprintf('Herzlich willkommen.');
                echo sprintf('Herzlich willkommen %s %s.', 'Arthur', 'Dent');
            </pre>
            <p>Sie ist verwandt mit der bereits bekannten Funktion vsprintf(), nimmt aber nach dem Formatstring einzelne Werte (und kein Array) zur Befüllung der Platzhalter entgegen. Da der Formatstring eine beliebige Anzahl von Platzhaltern enthalten kann, muss danach somit die passende Anzahl von Werten folgen (hier 0 bzw. 2).</p>
            <p>Wie können Sie in PHP selbst eine solche Funktion definieren? Auch hierfür lässt sich der Splat-Operator einsetzen. Nehmen wir als Beispiel eine Funktion, der man eine beliebige Anzahl von Zahlen übergeben kann, und von der man dann die Gesamtsumme als Rückgabewert erhält.</p>
            <pre>
            &lt?php

            function summiere(...$zahlen)
            {
                $summe = 0;
                foreach ($zahlen as $zahl) {
                    $summe += $zahl;
                }
                
                return $summe;
            }

            echo summiere(); // 0
            echo summiere(1); // 1
            echo summiere(1, 2, 3); // 6
            </pre>
            <p>Wir müssen also lediglich in der Funktionsdefinition den Splat-Operator vor der Parameter-Variablen notieren. Die übergebenen Werte werden dann als numerisches Array in der entsprechenden Variable gesammelt.</p>
            <pre>
            &lt?php

                function summiere(...$zahlen)
                {
                    return array_sum($zahlen);
                }

                echo summiere(); // 0
                echo summiere(1); // 1
                echo summiere(1, 2, 3); // 6
            </pre>
            <p>Da es mit array_sum() allerdings bereits eine fertige Funktion zum Summieren aller Werte eines Arrays gibt, können wir diese auch einfach in unserer Funktionsdefinition verwenden und so einige Codezeilen sparen.</p>
            <pre>
            &lt?php

                function multipliziere($multiplikator, ...$zahlen)
                {
                    $ergebnis = [];
                    foreach ($zahlen as $zahl) {
                        $ergebnis[] = $zahl * $multiplikator;
                    }
                    
                    return $ergebnis;
                }

                ?>
                &ltpre>&lt?php var_dump(multipliziere(2)); ?>&lt/pre>
                &ltpre>&lt?php var_dump(multipliziere(1, 2, 3)); ?>&lt/pre>
                &ltpre>&lt?php var_dump(multipliziere(2, 1, 2, 3)); ?>&lt/pre>
                &ltpre>&lt?php var_dump(multipliziere(-1, 1, 2, 3)); ?>&lt/pre>
            </pre>
            <p>Gibt man in der Definition vor dem Splat-Operator noch weitere Parameter an, so landen nur die überzähligen Werte im Array. In anderen Programmiersprachen ist diese Vorgehensweise deswegen auch als Rest Parameter bekannt.</p>
            <h3>
            Dereferenzierung
            </h3>
            <p>Kommen wir nun zu den Rückgabewerten. Wir haben eine Funktion, die ein numerisches Array zurückliefert. In unserem Code wollen wir an einer Stelle den ersten Wert des Arrays und an einer anderen Stelle bzw. in einer ganz anderen Datei beispielsweise den dritten Wert verwenden. Damit die Funktion wiederverwendbar ist, soll diese jedoch immer das komplette Array liefern. Vor PHP 5.4 war folgende Vorgehensweise üblich, die Sie in älterem Code noch oft finden werden.</p>
            <pre>
            &lt?php

                function holeDaten()
                {
                    return [1, 2, 3, 4, 5];
                }

                $daten = holeDaten();
                echo $daten[0];
            </pre>
            <p>
            Es musste also zunächst das komplette Array ermittelt und in einer Variablen abgelegt werden. Erst danach war ein Zugriff mittels Index-Operator möglich.
            </p>
            <pre>
            &lt?php

                function holeDaten()
                {
                    return [1, 2, 3, 4, 5];
                }

                echo holeDaten()[0];
            </pre>
            <p>
            Seit PHP 5.4 ist dies bei Funktionsaufrufen nicht mehr nötig. Man kann den Index-Operator direkt hinter dem Funktionsaufruf notieren, was als Dereferenzierung von Funktionen bezeichnet wird.
            </p>
            <h3>
            Destructuring
            </h3>
            <p>Gehen wir noch einmal genauer auf das Destructuring ein, welches wir bereits an der einen oder anderen Stelle zum Zerlegen eines Arrays in einzelne Variablen verwendet haben. Wir verwenden hierbei die mit PHP 5.4 eingeführte kurze Array-Syntax mit eckigen Klammern. Die Zerlegung mittels dieser Syntax ist jedoch erst seit PHP 7.1 möglich</p>
            <pre>
            &lt?php

            [$a, $b, $c] = [1, 2, 3]; // $a = 1, $b = 2, $c = 3

            var_dump($a, $b, $c);

            [$a, $b, $c, $d] = [1, 2, 3]; // Undefined offset: 3

            [$a,] = [1, 2, 3]; // $a = 1
            [$a] = [1, 2, 3]; // $a = 1

            var_dump($a);

            [$a, , $b] = [1, 2, 3]; // $a = 1, $b = 3

            var_dump($a, $b);

            [0 => $a, 2 => $b] = [1, 2, 3]; // $a = 1, $b = 3

            var_dump($a, $b);

            </pre>
            <p>Bei der Zerlegung wird beginnend mit der ersten angegebenen Variablen jeder Variable ein Wert aus dem Array zugewiesen. Werden mehr Variablen als Werte angegeben, so erhalten wir eine entsprechende Hinweismeldung. Werden weniger Variablen angegeben als Werte vorhanden sind, so verfallen die überzähligen Werte einfach ungenutzt. Man kann durch ein abschließendes Komma vor der schließenden eckigen Klammer diesen Umstand verdeutlichen, was ich in solchen Fällen gerne mache. Dieses Komma ist jedoch optional und man kann es somit auch einfach weglassen.</p>
            <p>
            Genauso ist es möglich zwei Kommas hintereinander zu notieren, um einen Wert des Arrays bei der Zuweisung zu überspringen. Persönlich verwende ich in solchen Fällen aber lieber die Variante mit expliziter Angabe der Indizes. Letztere Variante funktioniert übrigens auch mit assoziativen Arrays.
            </p>
            <p>
            Gehen wir nun davon aus, dass uns eine Funktion ein numerisches Array zurückliefert. Dieses Mal geht es jedoch um ein zweidimensionales Array, und die zweite Ebene wird von weiteren numerischen Arrays (beispielsweise mit dem Titel und dem Preis eines Buchs) gebildet.
            </p>
            <pre>
            &lt?php

            function holeDaten()
            {
                return [
                    ['Der Graf von Monte Christo', 9.95],
                    ['Per Anhalter durch die Galaxis', 7.95]
                ];
            }

            $daten = holeDaten();

            ?>
            &lt!DOCTYPE html>
            &lthtml>

            &lthead>
            &ltmeta charset="utf-8" />
            &lttitle>foreach-Schleife ohne Destructuring&lt/title>
            &lt/head>

            &ltbody>
            &ltul>
            &lt?php foreach ($daten as $buch): ?>
                &ltli>
                &lt?= $buch[0] ?>&ltbr />
                &lt?= $buch[1] ?>
                &lt/li>
                &lt?php endforeach; ?>
                &lt/ul>
            &lt/body>

            &lt/html>
            </pre>
            <p>
            Dummerweise haben wir die einzelnen Buchdatensätze jedoch nicht als assoziative Arrays vorliegen, was die Lesbarkeit unseres Codes bei der Ausgabe mit foreach etwas erschwert. Ist der Preis jetzt der Index 0 oder 1? Gehen wir weiter davon aus, dass wir die Funktion nicht ändern können. Wir möchten jedoch trotzdem unsere Ausgabe etwas lesbarer gestalten.
            </p>
            <pre>
            &lt?php

            function holeDaten()
            {
                return [
                    ['Der Graf von Monte Christo', 9.95],
                    ['Per Anhalter durch die Galaxis', 7.95]
                ];
            }

            $daten = holeDaten();

            ?>
            &lt!DOCTYPE html>
            &lthtml>

            &lthead>
            &ltmeta charset="utf-8" />
            &lttitle>foreach-Schleife mit Destructuring&lt/title>
            &lt/head>

            &ltbody>
            &ltul>
                &lt?php foreach ($daten as [$titel, $preis]): ?>
                &ltli>
                    &lt?= $titel ?>&ltbr />
                    &lt?= $preis ?>
                &lt/li>
                &lt?php endforeach; ?>
            &lt/ul>
            &lt/body>

            &lt/html>
            </pre>
            <p>
            Es ist seit PHP 7.1 möglich, bei einer foreach-Schleife direkt ein Destructuring hinter dem Schlüsselwort as vorzunehmen. Man spart sich also wie bei der Funktions-Dereferenzierung eine unnötige Variable für den gesamten Buchdatensatz. Außerdem ist so der Index-Operator für den Zugriff auf Titel und Preis unnötig, und wir können stattdessen die wesentlich lesbareren Variablen $titel und $preis verwenden.
            </p>
            <p>
            Das Symmetric Array Destructuring von PHP ist sehr ähnlich zum Destructuring in ECMAScript 6 bei Javascript, allerdings ist die PHP-Variante bei weitem noch nicht so mächtig. Derzeit ist in PHP beispielsweise noch keine Kombination mit dem Splat-Operator (z. B. [$a, ...$rest] = [1, 2, 3, 4]) möglich.
            </p>

        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Strings -->
        <legend>Strings</legend>
        <div>
            <h3>Strings formatieren</h3>
            <p>Strings liegen nicht immer in der Form vor, wie wir uns das vielleicht wünschen würden. Gerade bei Benutzereingaben müssen wir in der Lage sein, kleine Fehler in der Eingabe auszubessern oder zumindest zu erkennen.</p>
            <h4>trim()</h4>
            <p>Die Funktion trim() entfernt Leerzeichen um einen String. Diese Funktion werden Sie relativ häufig benötigen, um Formulareingaben zu korrigieren. Viele Benutzer geben in Formularfeldern hin und wieder versehentlich Leerzeichen ein, die sie nicht bemerken.</p>
            <pre>
            &lt?php

                $gespeicherterBenutzername = 'admin';
                $benutzerEingabe = 'admin  ';

                if ($gespeicherterBenutzername == $benutzerEingabe) {
                    echo 'Alles OK';
                }

                if ($gespeicherterBenutzername == trim($benutzerEingabe)) {
                    echo 'Jetzt ist alles OK';
                }
            </pre>
            <h4>strtoupper()</h4>
            <p>Die nächsten vier Funktionen beschäftigen sich mit der Groß- und Kleinschreibung in Strings. Die Funktion strtoupper() wandelt einen kompletten String in Großbuchstaben um.</p>
            <pre>
            &lt?php

                $text = 'Hallo Welt';
                echo strtoupper($text);
            </pre>
            <h4>strtolower()</h4>
            <p>Die Funktion strtolower() ist das Gegenstück zu strtoupper(). Sie wandelt einen String in Kleinbuchstaben um.</p>
            <p>Diese Funktion wird häufig verwendet, um Benutzereingaben mit vorhandenen Daten besser vergleichen zu können. Stellen Sie sich vor, Sie wollen Ihren Besuchern ein Suchfeld zur Verfügung stellen, in dem Sie nach anderen registrierten Benutzern der Webseite suchen können.</p>
            <pre>
            &lt?php

                $namen = [
                    [
                        'vorname' => 'Marco',
                        'nachname' => 'Emrich',
                    ],
                    [
                        'vorname' => 'Heiko',
                        'nachname' => 'Marr',
                    ],
                    [
                        'vorname' => 'Jan',
                        'nachname' => 'Teriete',
                    ],
                ];

                $eingabe1 = 'heiko';
                $eingabe2 = 'heiko ';
                $eingabe3 = 'Heiko';

                echo ' Ohne strtolower: ';

                foreach ($namen as $name) {
                    if ($eingabe1 == $name['vorname']) {
                        echo 'Eingabe 1 gefunden! ';
                    }
                    if ($eingabe2 == $name['vorname']) {
                        echo 'Eingabe 2 gefunden! ';
                    }
                    if ($eingabe3 == $name['vorname']) {
                        echo 'Eingabe 3 gefunden! ';
                    }
                }

                echo ' Mit strtolower: ';

                foreach ($namen as $name) {
                    if (strtolower(trim($eingabe1)) == strtolower($name['vorname'])) {
                        echo 'Eingabe 1 gefunden! ';
                    }
                    if (strtolower(trim($eingabe2)) == strtolower($name['vorname'])) {
                        echo 'Eingabe 2 gefunden! ';
                    }
                    if (strtolower(trim($eingabe3)) == strtolower($name['vorname'])) {
                        echo 'Eingabe 3 gefunden! ';
                    }
                }
            </pre>
            <p>Dieses Skript erzeugt ein Array $namen, das die Vor- und Nachnamen mehrerer Personen enthält, und drei Variablen, $eingabe1, 2 und 3, die Benutzereingaben enthalten. Stellen Sie sich vor, sie würden aus einem Formular stammen.</p>
            <p>In der ersten foreach-Schleife (Zeilen 24-34) wird für jeden Namen und jede Benutzereingabe überprüft, ob sie übereinstimmen. Wenn ja, wird der Satz Eingabe X gefunden! ausgegeben. Diese Schleife gibt nur den Satz Eingabe 3 gefunden! aus, da nur die dritte if-Anweisung (Zeilen 31-33) true erzeugt.</p>
            <p>Ganz anders sieht es bei der zweiten foreach-Schleife (Zeilen 38-48) aus. Alle drei Eingaben erzeugen beim Vornamen Heiko einen Treffer, da sowohl der Suchbegriff als auch der Name mit strtolower() vereinheitlicht wurden. Beim Suchbegriff wurden zusätzlich noch mit trim() etwaige Leerzeichen um den Suchbegriff entfernt, wodurch auch die ansonsten problematische zweite if-Anweisung (Zeilen 42-44) true erzeugt.</p>
            <h4>ucfirst()</h4>
            <p>Die Funktion ucfirst() ändert den ersten Buchstaben eines Strings auf den entsprechenden Großbuchstaben. War dieser Buchstabe bereits groß oder gar kein Buchstabe, wird der Originalstring zurückgegeben.</p>
            <pre>
            &lt?php

                $vorname = 'arthur';
                echo ucfirst($vorname);
            </pre>
            <p>Diese Funktion benötigen Sie hin und wieder, wenn Sie beispielsweise wissen, dass der erste Buchstabe einer Benutzereingabe für die weitere Verarbeitung groß geschrieben sein muss.</p>
            <h4>htmlspecialchars()</h4>
            <p>Die Funktion htmlspecialchars() ist für Ihre Zukunft als PHP-Entwickler wahrscheinlich eine der wichtigsten, die Sie jemals kennenlernen werden. Auf den ersten Blick sieht es nicht spektakulär aus, was diese Funktion tut. Sie wandelt in einem übergebenen String alle HTML-Sonderzeichen (<, >, &, ") in die entsprechenden HTML-Entities (&lt;, &gt;, &amp;, &quot;) um.</p>
            <p>Warum ist diese Funktion nun so wichtig? Sie wird dazu verwendet, Benutzereingaben zu maskieren. Wenn ein Benutzer in ein Formular etwas eingibt und es absendet, und Sie die Eingaben auf der Folgeseite unverändert anzeigen, haben Sie eine riesige Sicherheitslücke in Ihrer Programmierung. Denn diese Eingabe kann alles mögliche enthalten.</p>
            <p>Sehen Sie sich das folgende Beispiel an. Stellen Sie sich bitte vor, in der Variablen $benutzerEingabe liegt Text, den ein Besucher in ein Formularfeld eingegeben hat:</p>
            <pre>
            &lt?php

                $benutzerEingabe = '&ltp style="color: #ff0000;">Das hier ist rot!&lt/p>';

                ?>
                &lt!DOCTYPE html>
                &lthtml>

                &lthead>
                    &ltmeta charset="utf-8" />
                    &lttitle>Gefahren!&lt/title>
                &lt/head>

                &ltbody>
                &ltp>
                        Vielen Dank für Ihre Eingabe.
                        &lt/p>
                        &lt?php echo $benutzerEingabe; ?>
                &lt/body>

                &lt/html>

            </pre>
            <p>Die HTML-Formatierungen in der Variablen werden vom Browser ausgewertet, der angezeigte Text ist also rot. Dass Besucher auf die Optik oder gar das Layout Ihrer HTML-Seite Einfluss nehmen können, können wir natürlich nicht zulassen.</p>
            <p>Einen Text rot zu färben ist eine Sache. Auf diese Weise kann aber auch ein &ltdiv> über den eigentlichen Inhalt Ihrer Seite gelegt und dort zum Beispiel Werbung angezeigt werden.</p>
            <p>Allerdings sollte man die Sicherheit des Codes noch ein wenig erhöhen, indem man der Funktion htmlspecialchars() noch ein paar Informationen mitteilt. Dies geht über die optionalen Parameter $flags und $encoding:</p>
            <pre>
            &lt?php

                $benutzerEingabe = '
                &ltscript type="text/javascript">
                        document.body.innerHTML = "Diese Seite gehört jetzt mir!";
                        &lt/script>';

                ?>
                &lt!DOCTYPE html>
                &lthtml>

                &lthead>
                &ltmeta charset="utf-8" />
                &lttitle>Gefahren!&lt/title>
                &lt/head>

                &ltbody>
                &ltp>
                        Vielen Dank für Ihre Eingabe.
                        &lt/p>
                        &lt?php echo htmlspecialchars($benutzerEingabe, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>
                &lt/body>

                &lt/html>
            </pre>
            <p>Über den zweiten Parameter $flags von htmlspecialchars() machen wir gleich zwei Vorgaben, indem wir als Wert ENT_QUOTES und ENT_HTML5 übergeben. Hierbei handelt es sich um zwei sogenannte Konstanten14, die durch einen senkrechten Strich (Pipe-Symbol) getrennt sind. Durch ENT_QUOTES wird neben dem doppelten Anführungszeichen nun auch das einfache Anführungszeichen in seine HTML-Entity (&#039;) umgewandelt. Durch ENT_HTML5 und 'UTF-8' legen wir außerdem den von uns verwendeten HTML-Standard und Zeichensatz fest.</p>

        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Dateien als Speichermedium -->
        <legend>Dateien als Speichermedium</legend>
        <div>
            <h4>file_put_contents()</h4>
            <p>Um Daten in einer Datei abzulegen, gibt es in PHP sehr viele verschiedene Möglichkeiten. Eine recht einfache Möglichkeit ist die Funktion file_put_contents():</p>
            <pre>
            &lt?php

            $text = 'Hallo Welt';
            file_put_contents('hallo.txt', $text);
            </pre>
            <p>Beachten Sie, dass die Funktion file_put_contents() die Datei neu anlegt, falls sie noch nicht existiert, und den alten Inhalt ohne Warnung überschreibt, falls die Datei schon existiert. Möchten Sie dies nicht, so müssen Sie dies mittels des Parameters $flags festlegen. Ich werde jedoch im Folgenden die bisherigen Daten grundsätzlich überschreiben.</p>
            <h4>file_get_contents()</h4>
            <p>Die Funktion file_get_contents() ist das Gegenstück zu file_put_contents(). Mit ihr können Sie einen Datenstring wieder aus einer Datei auslesen. Die Funktion gibt den Inhalt der Datei als String zurück.</p>
            <p>Wenn die Datei in einem anderen Verzeichnis liegt als das PHP-Skript, müssen Sie diesen Pfad in dem Parameter angeben. Liegt die Textdatei beispielsweise eine Ebene höher, müssen Sie als Parameter '../dateiname.txt' verwenden.</p>
            <pre>
            &lt?php

                $daten = file_get_contents('hallo.txt');
                echo $daten;
            </pre>
            <p>Wenn die Datei aus dem vorherigen Beispiel existiert, wird hier der Text Hallo Welt ausgegeben. Existiert die Datei nicht, wird eine PHP-Warnung ausgegeben.</p>
            <h4>serialize()</h4>
            <p>Solange Sie nur einfache Strings speichern wollen, sind Sie mit den Funktionen aus dem Abschnitt 16.2 gut bedient. Sobald Sie allerdings komplexere Datenstrukturen, wie Arrays oder sogar Objekte, abspeichern müssen, haben Sie ein Problem. Derartige Daten lassen sich nicht so einfach abspeichern.</p>
            <p>Da Dateien nur Text oder binäre Daten aufnehmen können, müssen wir Datenstrukturen wie Arrays erst in eines der beiden Formate umwandeln. Die PHP-Entwickler haben sich für die erste Variante entschieden, nämlich komplexe Datentypen in Strings umzuwandeln, bevor sie abgespeichert werden können.</p>
            <p>Die Funktion serialize() erfüllt exakt diesen Zweck. Sie wandelt beispielsweise ein ein- oder mehrdimensionales Array in einen String um.</p>
            <pre>
            &lt?php

                $personen = ['Thorsten', 'Marco', 'Frank'];
                $daten = serialize($personen);

                echo $daten;
            </pre>
            <p>Die Ausgabe dieses Skripts lautet:</p>
            <pre>
            a:3:{i:0;s:8:"Thorsten";i:1;s:5:"Marco";i:2;s:5:"Frank";}
            </pre>
            <p>
            Jetzt können wir als Menschen das Array nur noch schwer erkennen, aber dafür haben wir nun einen String, den wir problemlos speichern können. Die Funktion hierfür kennen Sie bereits:
            </p>
            <pre>
            &lt?php

            $personen = ['Thorsten', 'Marco', 'Frank'];
            $daten = serialize($personen);
            file_put_contents('personen.txt', $daten);
            </pre>
            <h4>unserialize()</h4>
            <p>Der einzige Parameter für unserialize() ist ein vorher mit serialize() formatierter String. Welcher Datentyp von der Funktion zurückgegeben wird, hängt davon ab, was die ursprünglichen Daten waren, da unserialize() diese exakt wiederherstellt.</p>
            <p>Liegt dieser String in einer Textdatei, können Sie ihn mit file_get_contents() wie gewohnt auslesen.</p>
            <pre>
            &lt?php

            $personen = unserialize(file_get_contents('personen.txt'));

            ?>
            &lt!DOCTYPE html>
            &lthtml>

            &lthead>
            &ltmeta charset="utf-8" />
            &lttitle>Personen&lt/title>
            &lt/head>

            &ltbody>
            &lth1>Personen&lt/h1>
            &ltul>
            &lt?php foreach ($personen as $p) { ?>
                &ltli>&lt?php echo $p; ?>&lt/li>
                &lt?php } ?>
                &lt/ul>
            &lt/body>

            &lt/html>
            </pre>
            <h4>
            Serialisierte Daten aktualisieren
            </h4>
            <p>Die Funktion file_put_contents() überschreibt standardmäßig eine bereits existierende Datei, wenn sie aufgerufen wird. Dieses Verhalten könnten wir zwar über den Parameter $flags ändern, aber es ist ohnehin nicht möglich, an serialisierte Daten etwas anzuhängen.</p>
            <p>Wir benötigen eine Möglichkeit, Daten, die zum Beispiel in einem serialisierten Array liegen, zu aktualisieren, ohne die vorhandenen Daten zu zerstören.</p>
            <p>Da es nicht möglich ist, einen serialisierten String direkt anzupassen, müssen Sie zuerst den String in die ursprünglichen Daten zurückverwandeln. Danach können Sie mit PHP wie gewohnt alle Änderungen an den Daten vornehmen. Zum Abschluss wird der komplette Datenbestand wieder serialisiert und mit file_put_contents() gespeichert.</p>
            <pre>
            &lt?php

            $neuePerson = 'Christian';

            $personen = unserialize(file_get_contents('personen.txt'));
            $personen[] = $neuePerson;
            file_put_contents('personen.txt', serialize($personen));
            </pre>
            <p>Da Sie diese Funktionalität wahrscheinlich mehrfach in einem Projekt brauchen werden, lohnt es sich vielleicht, eine kleine Funktion dafür zu schreiben.</p>
            <pre>
            &lt?php

            function speicherePerson($person)
            {
                $personen = unserialize(file_get_contents('personen.txt'));
                $personen[] = $person;
                file_put_contents('personen.txt', serialize($personen));
            }

            $neuePerson = 'Heiko';
            speicherePerson($neuePerson);
            </pre>
            <p>Um die Lesbarkeit zu verbessern, lohnt es sich, die Funktion in zwei Funktionen aufzutrennen.</p>
            <pre>
            &lt?php

            function holePersonen()
            {
                return unserialize(file_get_contents('personen.txt'));
            }

            function speicherePerson($person)
            {
                $personen = holePersonen();
                $personen[] = $person;
                file_put_contents('personen.txt', serialize($personen));
            }

            $neuePerson = 'Christin';
            speicherePerson($neuePerson);

            </pre>
            <p>So haben wir zudem den Vorteil, dass wir das Auslesen mit holePersonen() wiederverwenden können.</p>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Konstanten -->
        <legend>Konstanten</legend>
        <div>
            <p>Konstanten sind das Gegenteil von Variablen. Wenn Sie eine Variable mit einem Wert belegen und ein paar Zeilen später mit einem zweiten, enthält die Variable den zweiten Wert.</p>
            <p>Eine Konstante kann mit der Funktion define() erzeugt werden.</p>
            <p>Die Funktion akzeptiert als ersten Parameter einen String, der den Namen der Konstanten darstellt und als zweiten den Wert, den Sie ihr zuweisen möchten. Mit dem dritten optionalen Parameter $case_insensitive könnte man Groß-/Kleinschreibungs-unabhängige Konstanten erstellen. Diese Möglichkeit ist jedoch nicht wirklich gebräuchlich, da es eigentlich Konvention ist, eine Konstante komplett in Großbuchstaben zu benennen. Ein Unterschied zu Variablen ist zudem, dass die Bezeichner von Konstanten nicht mit einem Dollar-Zeichen beginnen.</p>
            <pre>
            &lt?php

                $dateiName = 'daten.txt';
                echo $dateiName;

                define('DATEI_NAME', 'daten.txt');
                echo DATEI_NAME;

                $dateiName = 'neu.txt';
                echo $dateiName;

                define('DATEI_NAME', 'neu.txt');
                echo DATEI_NAME;
            </pre>
            <p>Einmal definiert, lässt sich eine Konstante nicht mehr ändern.</p>
            <p>Seit PHP 5.3 kann man Konstanten alternativ auch mit dem Schlüsselwort const erzeugen.</p>
            <pre>
            &lt?php

                // Beispiele fuer skalare Datentypen
                const LOGS = true;
                define('DEBUG', false);

                const MIN_LENGTH = 10;
                define('MAX_LENGTH', 255);

                // Arrays mit const ab PHP 5.6
                const RANGE5 = [10, 255];

                // Arrays mit define ab PHP 7
                define('RANGE7', [10, 255]);
            </pre>
            <p>
            Beachten Sie, dass Konstanten ursprünglich nur für skalare Datentypen (Integer, Float, Boolean und String) gedacht waren.
            </p>
            <p>
            Seit PHP 5.6 ist jedoch der zusammengesetzte Datentyp Array als Wert möglich, sofern man anstatt define() das Schlüsselwort const verwendet. Ab PHP 7 können Array-Konstanten auch mit define() definiert werden.
            </p>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>tmp</legend>
        <div>
            <pre>
                
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>

<?php
    require_once "footer.php";
?>