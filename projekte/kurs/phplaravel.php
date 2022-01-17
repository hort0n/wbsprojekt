<?php
    $title = "LARAVEL";
    require_once "header.php";

    Navigation::ShowAll();
?>
    <fieldset><!-- artisan -->
        <legend>artisan</legend>
        <div>
        <ul class="fragen">
            <li>
            php artisan -V
            </li>
            <li>php artisan key:generate</li>
            <li>
            php artisan list
            </li>
            <li >
            php artisan route:list
            </li>
            <li>
            php artisan make:controller ControllerName
            </li>
            <li>php artisan make:controller ControllerName --resource</li>
            <li>
            php artisan make:model ModelName <br>

            model für die Tabelle interest: <br>
            php artisan make:model Interest <br>

            model für die Tabelle article mit migtation: <br>
            php artisan make:model Article -m <br>
            danach php artisan migrate <br>
            <p>Wenn deine Tabelle einen anderen Namen hat, legst du die Tabelle manuell fest, und zwar mit der Variable $table. Du setzt in dein Model protected $table 'tablename' ein. Außerdem geht das Model davon aus, dass eine Spalte mit dem Namen »id« vorhanden und der Primärschlüssel ist. Wenn das nicht der Fall ist, musst du den Primärschlüssel deiner Tabelle manuell angeben. Dazu kannst du protected $primaryKey 'columnname' nutzen. </p>
            </li>
            <li>
                <h3>DB</h3>
                1.phpmaadmin - create db
                2. php artisan migrate
                (php artisan migrate:fresh) - del tables and new migrate
                3. create custom migration: <br>
                php artisan make:migration create_farben_table --create=farben
            </li>
            <li>
            php artisan make:migration action_tablename_table
            --table gibst du den Namen einer existierenden Tabelle an
            --create legst du fest, dass eine neue Tabelle erstellt wird und gibst ihr einen Namen
            --path erstellt die Migration in dem von dir definierten Pfad
            </li>
            <li>
            php artisan make:migration create_posts_table 
            //hat das gleiche Resultat wie
            php artisan make:migration erstelle_eine_schoene_post_tabelle --create="posts" 
            </li>
            <li>
            php artisan make:migration add_role_to_users_table
            //hat das gleiche Resultat wie: 
            php artisan make:migration fuege_spalte_rolle_zu_nutzer_hinzu --table="users"
            </li>
            <li><h3>Namenskonvention Tabellenspalten</h3></li>
            <li>$table->increments('column_name'); <br> Autoincrement, equivalent zu UNSIGNED INTEGER (Primärschlüssel)</li>
            <li>$table->char('column_name', 100); 	CHAR mit optionaler Länge</li>
            <li>$table->string('column_name', 100); 	VARCHAR mit optionaler Länge</li>
            <li>$table->text('column_name'); 	TEXT</li>
            <li>$table->date('column_name'); 	DATE</li>
            <li>$table->dateTime('column_name'); 	DATETIME</li>
            <li>$table->time('column_name'); 	TIME</li>
            <li>$table->timestamp('column_name'); 	TIMESTAMP</li>
            <li>$table->integer('column_name'); 	INTEGER</li>
            <li>$table->decimal('column_name', 8, 2); 	DECIMAL mit Gesamtstellen und Nachkommastellen</li>
            <li>$table->float('column_name', 8, 2); 	FLOAT mit Gesamtstellen und Nachkommastellen</li>
            <li>$table->binary('column_name'); 	BLOB</li>
            <li>$table->boolean('column_name'); 	BOOLEAN</li>
            <li>$table->enum('column_name', ['enum_value_1', 'enum_value_2', ...]); 	ENUM</li>
            <li>$table->json('column_name'); 	JSON</li>
            <li>$table->timestamps(); 	Fügt zwei Spalten hinzu und hängt an beide den Column Modifier nullable() an:  created_at TIMESTAMP updated_at TIEMSTAMP</li>
            <li>$table->softDeletes(); 	fügt die Spalte deleted_at TIMESTAMP mit dem Modifier nullable() hinzu</li>
            </ul>
            <h3>Column Modifier</h3>
            <pre>                
            ->autoIncrement() erstellt eine Spalte INTEGER als Autoincrement (Primärschlüssel).
            ->charset('charset') setzt den zu nutzenden Zeichensatz.
            ->collation('collationname') legt die Kollation der Spalte fest.
            ->comment('comment') fügt einen Kommentar zur Spalte hinzu.
            ->default('default_value') setzt einen Standardwert der Spalte,
            auf den zurückgegriffen wird, wenn kein Wert definiert wird.
            ->nullable(): NULL-Werte dürfen in die Spalte eingesetzt werden.
            ->unsigned(): Die Spalte ist ein INTEGER UNSIGNED.
            Wenn ->useCurrent() an eine TIMESTAMP-Spalte
            angehängt wird, wird CURRENT_TIMESTAMP
            als default() Wert genutzt.
            </pre>
            <h3>Tabellenspalte umbenennen</h3>
            <p>$table->renameColumn('username', 'name');</p>
            <h3>Tabellenspalte löschen </h3>
            <p>$table->dropColumn('name');</p>
            <h3>Tabellenspalte Attribut ändern</h3>
            <p>Wenn du die Spaltenlänge nachträglich ändern möchtest oder einer Spalte nach dem Erstellen einen Standardwert zuweisen möchtest, funktioniert dies mit der change()-Methode. Du hängst diese als letzte Methode an: </p>
            <pre>
            &lt?php
            //vorher
            $table->string('name');
            //nachher
            $table->string('name')->default('noname')->change();
            </pre>
            <h3>Existenz von Tabelle und Tabellenspalte prüfen</h3>
            <p>Du kannst mithilfe der Facade Schema prüfen, ob eine Tabelle oder eine Tabellenspalte verfügbar sind. Dazu nutzt du die Methoden hasTable() und hasColumn(). hasTable() erhält als Parameter die Tabelle, hasColumn() erhält als ersten Parameter eine Tabelle und als zweiten Parameter die Spalte. Diese Abfragen kannst du mit anderen Kontrollstrukturen kombinieren wie z. B.</p>
            <pre>
            &lt?php
            if (Schema::hasColumn('users', 'role')) {
                var_dump('Rolle vorhanden');
            }
            </pre>
            <h3>Spezifische Datenbankverbindung im Schema nutzen</h3>
            <p>Sollte deine Applikation mehrere Datenbankverbindungen nutzen, musst du bei Verwendung einer Verbindung, die nicht die Standardverbindung ist, im Schema die connection()-Methode nutzen.  </p>
            <pre>
            &lt?php
            Schema::connection('sqlite')->create('posts', function (Blueprint $table) {
                ...
            });
            </pre>
            <h3>Tabellen umbenennen und löschen</h3>
            <p>Wenn du nämlich die drop() Methode auf eine Tabelle anwenden möchtest, die entweder schon gelöscht wurde und/oder nicht existiert (z. B. wurde der Tabellenname falsch geschrieben), erhältst du eine Fehlermeldung. Bei dropIfExists() würde hingegen der »drop« nicht ausgeführt werden, weil die angegebene Tabelle nicht vorhanden ist. Es würde also kein Fehler ausgegeben werden. 

            Solltest du eine Tabelle umbenennen wollen, musst du die Methode rename() benutzen. Die Parameter sind hier alter Tabellenname, neuer Tabellenname.  </p>
            <pre>
            &lt?php

            Schema::rename('nutzer', 'users');
            Schema::dropIfExists('nutzer'); //würde keine Tabelle löschen 
            Schema::dropIfExists('users');
            </pre>
            <h3>Indexe</h3>
            <p>Mit dem Schema Builder kannst auch verschiedene Indexe verwenden. Dazu gibt es zwei Möglichkeiten. Zum einen besteht die Möglichkeit, den Index nach dem Definieren der Spalte zu setzen:  </p>
            <p>$table->string('username'); <br>
                $table->unique('username');</p>
            <p>Zum anderen kannst du mit »Method Chaining« den Index beim Definieren der Spalte anhängen</p>
            <p>$table->string('username')->unique();</p>
            <pre>
            Die Anzahl der verfügbaren Index-Typen ist überschaubar:

            primary() fügt einen Primärschlüssel hinzu.
            primary('parent_id') fügt einen Composite Key hinzu.
            unique() unique Index.
            index() einfacher Index.
            </pre>
            <h3>Fremdschlüssel</h3>
            <p>
                Du kannst in Laravel mithilfe des Schema Builder auf Datenbankebene mit Fremdschlüsseln eine Beziehung zwischen zwei Tabellen herstellen. Angenommen, wir haben eine Tabelle unserer Nutzer und eine Tabelle aller Nutzerposts. Jeder Post soll nun eine Spalte mit der Nutzer-ID haben, die auf die ID der Nutzertabelle verweist. </p>
            <pre>
            &lt?php

                Schema::table('posts', function (Blueprint $table) {
                    $table->integer('user_id');
                    $table->foreign('user_id')->references('id')->on('users');
                });
            </pre>
            <h2>Raw Queries</h2>
            <h3>Insert – speichere Daten in der Datenbank</h3>
            <p>Um Daten einzufügen, nutzen wir die insert()-Methode der Facade DB. Das erste Argument ist die Raw SQL Query und das zweite Argument die Daten/Parameter, die zur Query gebunden werden müssen.</p>
            <p>DB::insert('insert into posts (id) values (?)', ['4']); </p>
            <p>Anstatt des ? beim Parameter Binding kannst du Namen für die einzelnen Parameter verwenden (Named Binding). Verwende dazu die Schreibweise :parametername und in der Initialisierung des Parameters 'parametername' => value. </p>
            <p>DB::insert('insert into posts (id) values (:id)', ['id' => 4]);</p>
            <h3>Select – lies Datenbankinformationen</h3>
            <p>Mit der Methode select() wählst du Daten aus. Das erste Argument ist wieder die Raw SQL Query, das zweite Argument sind die Parameter, die an die Query gebunden werden müssen. Meistens sind dies bei der Methode select() die Parameter der where-Abfrage. </p>
            <p>$posts = DB::select('select * from posts where id = ?', [4]);</p>
            <p>Es wird bei der Methode select() immer ein Array ausgegeben. Jedes Array-Objekt ist ein stdClass-Objekt. Um ein einzelnes Array-Objekt zu nutzen, musst du mit einer Schleife über das Array iterieren. </p>
            <pre>
                foreach($posts as $post) {
                    echo $post->id;
                }
            </pre>
            <h3>Update – aktualisiere Datenbankinformationen</h3>
            <p>Um Datenbankzeilen zu bearbeiten, nutzen wir die update()-Methode. Die Anzahl der bearbeiteten Zeilen wird als Wiedergabewert genutzt. </p>
            <p>$edited = DB::update('update posts set id = 6 where id = ?', [4]);</p>
            <h3>Delete – Daten löschen</h3>
            <p>Zum Löschen wird die delete()-Methode verwendet. Auch hier wird die Anzahl der betroffenen Zeilen wiedergegeben. </p>
            <p>$removed = DB::delete('delete from posts where id = ?', [6]); </p>
            <h3>Statement</h3>
            <p>Wenn die Datenbankoperation, die ausgeführt werden soll, keinen Wiedergabewert hat, wird die statement()-Methode genutzt. </p>
            <p>DB::statement('drop table posts'); </p>
 
            <hr>

            <h2>Query Builder – Datenbankabfragen ohne SQL schreiben</h2>
            <p>Der Query Builder wird dir die Arbeit enorm erleichtern und du wirst dir wahrscheinlich wünschen, ihn viel früher kennengelernt zu haben. Wie auch bei den Raw Queries wird Parameter Binding von PDO genutzt, um einen Schutz vor SQL Injections zu integrieren. </p>
            <h3>Debugging</h3>
            <p>Wenn es ums Debuggen der Query geht, ist uns Entwicklern jedes Hilfsmittel willkommen. Der Query Builder bietet dafür gleich drei Möglichkeiten, die du jeweils nur an die Query ranhängen musst. dd() zeigt die Debug-Informationen und stoppt dann die Ausführung der Anfrage. dump() zeigt die Debug-Informationen an, lässt die Anfragen danach aber durchführen. toSQL() gibt die auszuführende Datenbank-Query aus. Die Ergebnisse kannst du dann mit den Helpern dump(), dd() oder ddd() ausgeben. ddd() ist in Laravel 6 dazu gekommen und gibt neben dem Dump and Die (Informationen ausgeben und Ausführung stoppen) die Ignition-Error-Seite aus. </p>
            <pre>                
            dump()
            dd() = dump, die
            ddd() = dump, debug, die
            //Methoden des Query Builders

            DB::table('interests')->dump();

            DB::table('interests')->dd();

            DB::table('interests')->toSQL();

            //Ausgabe des Ergebnisses mittels der Helper

            dump(DB::table('interests')->toSQL());
            dd(DB::table('interests')->toSQL());
            ddd(DB::table('interests')->toSQL())
            </pre>
            <p>Du kannst auch Event Listener verwenden, die dir über den Query Builder zur Verfügung stehen. Wie diese genau funktionieren, lernst du aber erst in der nächsten Class. Über enableQueryLog() loggst du alle nachfolgend ausgeführten Queries. Diesen Log erhältst du mittels getQueryLog(). Jede Query ermöglicht dir Zugriff auf die ausgeführte SQL Query, die Bindings und die Execution Time.</p>
            <pre>
            DB::enableQueryLog(); // Enable query log

            DB::table('interests')->get();

            dd(DB::getQueryLog()); // Show results of log
            </pre>
            <p>Mittels der listen-Methode, die das DB-Objekt nach Events prüft, erhältst du wie beim Query Log neben der SQL Query auch die Bindings und die für die Query benötigte Zeit. Zusätzlich ist die verwendete Connection ist sichtbar. Führe den Listener vor Ausführung der Queries aus.</p>
            <pre>
            DB::listen(function ($sql) {
                dump($sql);
            });
            DB::table('interests')->get();
            </pre>
            <h3>Insert – Inhalte einfügen</h3>
            <p>Damit wir Ergebnisse ausgeben lassen können, müssen wir zuvor Elemente einfügen. Dazu nutzt du die insert()-Methode. Als Argument gibst du ein Array mit der Spalte als Key sowie dem zuzuweisenden Wert an. </p>
            <p>DB::table('interests')->insert(['text'=>'interesse','id'=>1]);</p>
            <p>Du musst bei einer ID mit Autoinkrement übrigens keine manuelle ID angeben. Die ID wird automatisch hochgezählt. Es reicht also:  </p>
            <p>DB::table('interests')->insert(['text'=>'interesse']);   </p>
            <p>Du kannst auch Array Nesting nutzen, um mehrere Zeilen mit einer Query in der Datenbank zu erstellen. Ein Array repräsentiert dabei eine Zeile.  </p>
            <pre>
            DB::table('interests')->insert([
                ['text' => 'coding'],
                ['text' => 'sport'],
            ]);
            </pre>
            <p>Wenn du nicht sicher bist, ob ein Element schon in der Datenbank existiert, du aber das neue Element nur einfügen möchtest, wenn es noch nicht existiert, kannst du die Methode insertOrIgnore() nutzen. Die Parameter sind gleich der normalen insert()-Methode.</p>
            <h3>Query Chaining</h3>
            <p>Der Query Builder bietet außerdem die Möglichkeit, einzelne Teile einer Query in Variablen zu speichern. Diesen Variablen kannst du wie gewohnt weitere Methoden anhängen. Das ist vor allem dann sinnvoll, wenn du eine Tabelle in mehreren Queries nutzen möchtest. Dir steht damit die Möglichkeit offen, eine Query aus mehreren Teilen zusammensetzen. </p>
            <pre>
            DB::table('interests')->insert(
                ['text' => 'test']
            );

            $interests = DB::table('interests');
            $interests->insert(
                ['text' => 'test']
            );
            $interests->get();
            </pre>
            <h3>Daten abrufen</h3>
            <p>Jetzt, wo wir verfügbare Daten haben, können wir diese aus der Datenbank abfragen. Um ein Resultat der Abfrage zu erhalten, hängst du die get()-Methode an. Durch die get()-Methode wird eine Collection (Illuminate\Support\Collection) wiedergegeben. Jedes Element der Collection ist ein Objekt der stdClass. Um einen Wert anzuwählen, musst du über die Collection iterieren und dann jede Spalte als Objekt-Eigenschaft auswählen</p>
            <p>Um ein einzelnes Element zu erhalten, kannst du anstatt der get()-Methode die first()- Methode nutzen. Dabei wird nur eine einzelne Zeile als stdClass-Objekt wiedergegeben. Dadurch brauchst du keine Schleife mehr, um auf die Elemente der stdClass zuzugreifen. Es ist ja schließlich keine Collection vorhanden. </p>
            <p>Um eine einzelne Zeile anhand seiner ID zu erhalten, kannst du die find()-Methode nutzen. Diese benötigt als Parameter die id der Tabellenzeile. Die find()-Methode gibt ebenfalls ein stdClass Objekt anstatt einer Collection wieder.  </p>
            <p>Benötigst du nur eine einzelne Spalte einer einzelnen Zeile, dann steht dir die value()-Methode zur Verfügung. Hierbei musst du als Parameter den Spaltennamen angeben und zuvor die Zeile eingeschränkt haben. Dies würde z. B. mit der where()-Methode möglich sein. </p>
            <p>Wenn du nicht nur eine einzelne Spalte von einer Zeile, sondern diese Spalte von mehreren Zeilen erhalten möchtest, bietet dir der Query Builder die Methode pluck(). Für den ersten Parameter gibst du die benötigte Spalte an. Die Methode hat als Wiedergabewert eine Collection des Spaltenwerts jeder Zeile. Das könntest du z. B. verwenden, um alle E-Mail-Adressen deiner Nutzer zu exportieren. Du kannst einen eigenen Key für die gewählte Spalte auswählen, dieser muss jedoch auch eine Spalte der Tabelle sein (Key Column).</p>
            <pre>
            $interests = DB::table('interests')->pluck('text');
            /* Wiedergabewert
            Collection {#268 ▼
            #items: array:9 [▼
            0=>"test"
            1=>"Kochen"
            2=>"testtext"
            3=>"testtext"
            4=>"testtext"
            5=>"testtext"
            6=>"testtext"
            7=>"testtext"
            8=>"testtext"
            ]
            } */

            //id als key

            $interests=DB::table('interests')->pluck('text', 'id');

            /*
            Wiedergabewert
            Collection {#268 ▼
            #items: array:9 [▼
            1=>"test"
            5=>"Kochen"
            51=>"testtext"
            52=>"testtext"
            53=>"testtext"
            54=>"testtext"
            55=>"testtext"
            56=>"testtext"
            57=>"testtext"
            ]
            } */
            </pre>
            <h3>Select – Daten auswählen </h3>
            <p>Wie bereits erwähnt, kannst du mit der pluck()-Methode eine Collection aus einer ausgewählten Spalte erhalten, die für jedes Element ein stdClass-Objekt aufweist. Natürlich kann es vorkommen, dass es nicht ausreicht, nur eine Spalte für die Collection auszuwählen. Wenn du mehrere Spalten auswählen möchtest, musst du die select()-Methode nutzen.</p>
            <p>
            Falls du eine Query aus mehreren Einzelqueries zusammensetzt und in einer vorherigen Query bereits die select()-Methode benutzt hast, musst du nun auf die addSelect()-Methode zurückgreifen. Mit ihr fügst du weitere Spalten zu deiner Auswahl hinzu
            </p>
            <pre>
            $query = DB::table('interests')->select('text');
            $interests = $query->addSelect('id')->get(); 
            </pre>
            <h3>where-Abfragen – Bedingungen festlegen</h3>
            <p>Um where-Abfragen in der Query zu nutzen, hängst du die where()-Methode in der Query an. In der where()-Methode gibst du drei Parameter an.</p>
            <pre>
                
            Der erste Parameter ist die abzugleichende Spalte.
            Der zweite Parameter ist der Vergleichsoperator. Wenn du den "="
            Operator verwendest, kannst du den zweiten Parameter weglassen.
            Der dritte Parameter ist der Wert,
            mit dem abgeglichen wird.

            $interests = DB::table('interests')->where('id',1)->get();
            //erhalte alle Interessen, wo die ID gleich 1 ist.
            $interets = DB::table('interests')->where('id', '>', 50)->get();
            </pre>
            <p>Wenn eine Bedingung oder eine andere Bedingung erfüllt sein sollen, verwendet man die orWhere-Methode. Die Parameter sind die gleichen wie bei der normalen where()-Methode. </p>
            <p>Es gibt noch einige weitere Varianten der where()-Methoden, die dir die Arbeit erleichtern: whereBetween() prüft, ob der Wert der Spalte zwischen zwei definierten Werten liegt. Die gegenteilige Methode whereNotBetween() prüft, ob der Wert nicht zwischen zwei definierten Werten liegt. Der erste Parameter der Funktion ist die Spalte und der zweite Parameter ein Array zweier Prüfziffern. Für beide Methoden lässt sich auch ein »or« wie bei orWhere() nutzen. Also orWhereBetween() und orWhereNotBetween(). </p>
            <pre>
            ->whereBetween('id', [10, 20])
            //nur die Zeilen, wo die Spalte 'id' zwischen 10 und 20 ist.
            DB::table('interests')->whereIn('id', [1,2,3,5,8,13,21,34]);
            </pre>
            <h4>where-Closures</h4>
            <p>Falls dir die gegebenen where-Methoden nicht ausreichen sollten und du eigene, fortgeschrittene where-Abfragen schreiben möchtest, kannst du der where()-Methode ein Closure übergeben. Dies teilt dem Query Builder mit, hier eine eingeschränkte Gruppe zu nutzen. Das Closure erhält eine Instanz des Query Builders. Mithilfe dieser Instanz kannst du Einschränkungen innerhalb dieser Gruppe festlegen. Die Gruppe wird dann in der SQL-Abfrage von Klammern eingegrenzt. Mit dieser Vorgehensweise kannst du mehrere where-Abfragen gruppieren. </p>
            <pre>
            DB::table('interests')
                ->where('text', '=', 'beispiel')
                ->where(function ($query) {
                    $query->where('id', '>=', 50)
                        ->orWhere('id', '=', '1');
                })
                ->get();

                /*
                * ergibt folgenden SQL Code
                *select * from interests where text = 'beispiel' and (id >= 50 or id = 1)
                */
            </pre>
            <p>Du kannst auch Variablen aus dem Parent Scope an das Closureweitergeben. Dazu nutzt du das use-Keyword.</p>
            <pre>
            $id = 1;
            $date = \Carbon\Carbon::now();

            DB::table('interests')
                ->where('text', '=', 'beispiel')
                ->where(function ($query) use ($id, $date) {
                    $query->where('id', '=', $id);
                    $query->where('created_at', '=', $date);
                })
                ->get();
            </pre>
            <p>Seit PHP-Version 7.4 kannst du auch die kürzere Version, sogenannte Arrow Functions, nutzen. Die Arrow Function hat immer Zugriff auf Variablen des Parent Scope. Dadurch kannst du dir das use-Keyword sparen. function() kannst du durch fn() ersetzen.</p>
            <pre>
            $id = 1;
            DB::table('interests')->where(fn($query) => $query->where('id', '=', $id))->get(); 
            </pre>
            <h3>when-Abfragen</h3>
            <p>In manchen Fällen wird dir die where-Abfrage nicht ausreichen. Wenn du Parameter einer ankommenden Request abgleichen möchtest, kannst du die when()-Methode nutzen. Die Methode benötigt zwei Parameter und kann einen optionalen dritten Parameter haben. Der erste Parameter ist ein beliebiger Wert. Wenn dieser vorhanden, also »true«, ist, wird der zweite Parameter ausgeführt. Der zweite Parameter ist eine Closure-Funktion. Der dritte, optionale Parameter, ist ebenfalls eine Closure-Funktion und wird ausgeführt, wenn der Wert des ersten Parameters null oder false ist.</p>
            <pre>
            $sortBy = null;

            $interests = DB::table('interests')
            ->when($sortBy, function ($query, $sortBy) {
                return $query->select($sortBy);
            }, function ($query) {
                return $query->select('name');
            })
            ->get();
            </pre>
            <h3>Inhalte aktualisieren – Update</h3>
            <p>Um einen vorhandenen Wert zu aktualisieren, nutzen wir die update()-Methode des Query Builders. Die Methode akzeptiert, wie auch insert, ein Array mit sogenannten »column value pairs«. In den meisten Fällen schränken wir die update()-Methode ein, da sonst alle Zeilen aktualisiert würden. Du stellst z. B. mit der where-Methode sicher, dass nur eine Zeile mit einer bestimmten ID aktualisiert wird und nicht alle Zeilen unserer Tabelle. </p>
            <pre>
            DB::table('interests')
            ->where('id',1)
            ->update(['text'=>"dies ist ein test]);
            </pre>
            <p>Falls du in deiner Applikation den Fall benötigst, dass du eine bestimmte Zeile aktualisieren möchtest und, wenn diese nicht vorhanden ist, eine neue Zeile einfügst, bietet dir Laravel mit der updateOrInsert()-Methode die Möglichkeit dazu.</p>
            <pre>
            ->updateOrInsert(
                ['text'=>'beispieltext'],
                ['id'=>1]
            )
            </pre>
            <h3>Inhalte löschen – Delete</h3>
            <p>Mit der delete()-Methode löschen wir Zeilen in Tabellen. Du kannst keine Parameter angeben. Alle Zeilen, die im vorherigen Teil der Query verfügbar sind, werden gelöscht. Deshalb ist sehr zu empfehlen, die verfügbaren Zeilen einzuschränken. Die where-Methode bietet sich an, um nur ausgewählte Zeilen zu löschen. </p>
            <pre>
            DB::table('interests')->where('id', 50)->delete();
            </pre>
            <h3>Datenbankwerte sortiert ausgeben</h3>
            <p>Du hast beim Auswählen deiner Daten das Problem, dass diese immer anhand der ID sortiert ausgegeben werden? Wenn du die Sortierung anhand einer anderen Spalte vornehmen möchtest, musst du die orderBy-Methode verwenden. Du benötigst zwei Parameter. Der erste Parameter ist die Spalte, nach der sortiert wird, und der zweite kennzeichnet, ob du aufsteigend asc oder absteigend desc sortierst. </p>
            <pre>
            $interests = DB::table('interests')
            ->orderBy('id', 'asc')
            ->get();
            </pre>
            <p>Wenn du anhand eines Datums sortieren möchtest, bietet der Query Builder auch hier zwei Methoden an, nämlich latest() und oldest(). In beiden Methoden gibst du als Parameter die jeweilige Spalte, nach der sortiert werden soll, an. Achtung, diese sollte die Werte im Format Date enthalten. latest() sortiert deine Werte vom neusten zum ältesten Wert und oldest() vom ältesten zum neusten Wert.  </p>
            <p>Um deine Werte zu gruppieren, kannst du groupBy() verwenden. Du gibst als Parameter wieder die jeweilige Spalte bzw. jeweiligen Spalten an. Mit der angehängten having()-Methode legst du Bedingungen für die Gruppierungen fest. having() ist eine äquivalente Einschränkung wie where().  </p>
            <p>Die Anzahl an Suchergebnissen schränkst du ein mit den Methoden offset() und limit(). Mit offset werden so viele Ergebnisse wie als Parameter definiert übersprungen. Mit limit hingegen werden nur so viele Ergebnisse wie als Parameter festgelegt ausgegeben.  </p>
            <p>Wenn du Ergebnisse in zufälliger Reihenfolge benötigst, nutze die Methode inRandomOrder() und gib den Spaltennamen an. Wenn du z. B. ein Gewinnspiel durchführst und einen zufälligen Nutzer auswählen möchtest, kannst du die Methode sehr gut anwenden. </p>
            <pre>
            table('users')
            ->inRandomOrder()
            ->first();
            </pre>
            <h3>Chunking</h3>
            <p>Der englische Begriff chunking bedeutet auf Deutsch so viel wie stückeln.</p>
            <p>Der erste Parameter der chunk()-Methode ist die Anzahl an Zeilen, die ein Stück haben soll, der zweite Parameter ist ein Closure. Im Closure kannst du dann die Ergebnisse verarbeiten, z. B. Posts löschen oder bestimmte Posts bearbeiten. Wenn du den Prozess unterbrechen möchtest und keine weiteren Chunks ausführen möchtest, gibst du im Closure return false; an.  </p>
            <pre>
            DB::table('posts')->orderBy('id')->chunk(100, function ($posts) {
                foreach ($posts as $post) {
                    //tu irgendwas mit den posts z.B. löschen oder bearbeiten

                    //aktion bis zur id 9712 durchführen und dann das chunking abbrechen
                    if ($post->id===9712) {
                        return false;
                    }
                }
            });
            </pre>
            <h3>Aggregatfunktionen – Abfrageergebnisse zusammenfassen und auswerten</h3>
            <p>Du möchtest in deinem Forum die Maximalanzahl der Posts, die höchste Like-Anzahl sowie die durchschnittliche Anzahl an Likes ausgeben. Wie geht das am einfachsten? Du könntest natürlich mit einer Schleife über alle Posts iterieren und eine Berechnung durchführen. Das geht einfacher. Mit Aggregatfunktionen löst du das schnell und einfach. Die – meiner Meinung nach – wichtigsten Methoden:  </p>
            <pre>
                
            count() -> gibt die Gesamtanzahl der Werte aus.
            max() -> gibt den höchsten Wert aller Werte der Spalte aus. Benötigt
            einen Spaltennamen als Parameter.
            min() -> gibt den Minimalwert aller Werte der Spalte aus
            Benötigt ebenfalls den Spaltennamen als Parameter.
            avg() -> bildet von allen Werten der Spalte den Durchschnittswert.
            Der Spaltenname muss als Parameter angegeben werden.
            sum() -> rechnet alle Werte der Spalte zusammen und gibt
            die Summe aus. Dafür muss der Spaltenname
            als Parameter angegeben werden.

            $post_count = DB::table('posts')->count();
            $highest_like = DB::table('posts')->max('likes');
            $average_likes = DB::table('posts')->avg('likes');

            </pre>
            <h3>Joins</h3>
            <p>Mit Joins kombinierst du Werte aus mehreren Tabellen. Anstatt mehrere Anfragen an die Datenbank zu senden, fragst du mit einem Statement mehrere Tabellen ab. Damit du die Joins nutzen kannst, müssen die Spalten miteinander verknüpft sein. Beispielsweise hat die Tabelle posts eine Spalte user_id, um jedem Post einen Nutzer zuzuordnen. Ich setzte voraus, dass dir die Begriffe Join, inner Join, left Join,  right Join sowie Cross Join geläufig sind. </p>
            <p>Um einen inner Join durchzuführen, nutzen wir die join()-Methode. Der erste Parameter ist der Tabellenname und die weiteren Parameter zeigen die Verknüpfung der Spalten. Beim left und right join werden dieselben Parameter genutzt. Lediglich die Methodennamen ändern sich in leftJoin() und rightJoin(). Für einen cross join nutzt du die Methode crossJoin() und gibst als Parameter die Tabelle an, mit der ein Cross Join durchgeführt werden soll. </p>
            <pre>
            $users = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
            </pre>
            <h3>Unions – Queries vereinen</h3>
            <p>Wie du ganz zu Beginn der Lektion gelernt hast, können wir die Queries in mehrere Einzelstücke aufteilen und aneinanderhängen. Wenn du zwei Queries hast und diese zu einer Query vereinen möchtest, kannst du die union()-Methode nutzen. Als Parameter gibst du die erste Query an. Die erste Query und die zweite Query werden dann zu einer Query vereint. Wenn du dir die Debug-Informationen der Queries anzeigen lässt, siehst du sehr anschaulich, wie die beiden Anfragen zu einer einzigen vereint werden. Du kannst außerdem aus der Anfrage selbst ersehen, dass im Codebeispiel die Variable $second die Union enthält. </p>
            <pre>
            $first = DB::table('interests')->whereNull('created_at');

            $second = DB::table('interests')
            ->where('id', '>', 50)
            ->union($first);


            var_dump($first);
            var_dump($second);

            /*
            *$first - SQL : select * from `interests` where `created_at` is null
            from: "interests"
            +joins: null
            +wheres: array:1 [▼
            0 => array:3 [▼
            "type" => "Null"
            "column" => "created_at"
            "boolean" => "and"
            */

            /*
            *$second SQL:    (select * from `interests` where `id` > ?) union (select * from `interests` where `created_at` is null)
            +from: "interests"
            +joins: null
            +wheres: array:1 [▼
            0 => array:5 [▼
            "type" => "Basic"
            "column" => "id"
            "operator" => ">"
            "value" => 50
            "boolean" => "and"
            +groups: null
            +havings: null
            +orders: null
            +limit: null
            +offset: null
            +unions: array:1 [▼
            0 => array:2 [▼
            "query" => Builder {#267 ▼
            +wheres: array:1 [▼
            0 => array:3 [▼
            "type" => "Null"
            "column" => "created_at"
            "boolean" => "and"
            ]
            ]
            */

            </pre>
            <pre>
            //Aufgabe 1
            $posts = DB::table('posts');

            //Aufgabe 2
            $count_posts = $posts->count();
            var_dump($count_posts);
            //Aufgabe 3
            DB::insert('insert into posts (title, text) value (?,?)', ['uebungsaufgabe', 'das ist schoen']);
            //Aufgabe 4
            $update = $posts->whereBetween('id', [6, 10])->whereNull('interest_id')->update(['text' => 'neuer Text']);
            var_dump($update);
            //Aufgabe 5
            $created = $posts->whereId(1)->value('created_at');
            var_dump($created);
            //Aufgabe 6
            $order_posts = $posts->whereNotNull(['text', 'interest_id'])->orderBy('id', 'desc')->get();
            var_dump($order_posts);
            //Aufgabe 7
            $deleted = $posts->whereNull('text')->orWhereNull('interest_id')->delete();
            var_dump($deleted);
            </pre>
            <h3>Raw Expressions</h3>
            <p>Es kann natürlich passieren, dass dir die Methoden des Query Builders immer noch nicht ausreichen. Die Entwickler von Laravel haben diesen Fall bei der Entwicklung berücksichtigt. Du kannst Raw SQL Queries in den Query Builder integrieren. Um eine Abfrage als solche zu kennzeichnen, wird die Methode DB::raw() genutzt.</p>
            <pre>
            $users = DB::table('users')
            ->select(DB::raw('count(*) as user_count, status'))
            ->get();
            </pre>
            <p>Für einige der schon beschriebenen Methoden gibt es eigene Raw-Methoden. In diese spezifischen Methoden kannst du dann deine Raw Query einsetzen. Die Methoden akzeptieren neben der Raw Query als ersten Parameter ein Array von Werten, die zur Query gebunden sind (Parameter Binding). </p>
            <pre>
                
            selectRaw()
            whereRaw orWhereRaw()
            havingRaw orHavingRaw()
            orderByRaw()

            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- tinker -->
        <legend>tinker</legend>
        <div>
        <ul class="fragen">
            <li class="">
                php artisan tinker
            </li>
            <li class="">
            model aufrufen, einträge zehlen: <br>
            App\Interest::count();
            </li>
            <li class="">
            eintrag mid id 3 aufrufen: <br>
            $interest = App\Interest::findOrFail(3);
            </li>
            <li class="">
            text in interest äntern: <br>
            $interest->text = 'Neuer Text'; <br>
            ausgeben: <br>
            $interest;
            </li>
            <li class="">
            speichern in datenbank: <br>
            $interest->save();
            </li>
            <li class="">
            neuer interest erstellen: <br>
            $interest = new App\Interest; <br>
            $interest->text = "Laravel"; <br>
            $interest->save(); <br>
            mit create methode: <br>
            $interest = App\Interest::create(['text'=>'neuer text', 'noch eine spalte'=>'text']);
            </li>
            <li class="">
            interest löschen: <br>
            zuerst interest auswehlen <br>
            $inrterest = App\Interest::findOrFail(7); <br>
            dann löschen <br>
            $interest->delete();
            
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- collection -->
        <legend>collection</legend>
        <div>
        <ul class="fragen">
            <li class="">
            
            </li>
            <li class="">
            unique methode <br>
            $collect = collect( ['eloquent','laravel','laravel','collection','collection','model','migration','eloquent','collection','php','php','php']); <br>
            $collect->unique()->map(function($item){ return strtoupper($item);}); <br>
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
    <fieldset><!-- composer -->
        <legend>composer</legend>
        <div>
        <ul class="fragen">
            <li class="">
            composer create-project laravel/laravel path/test-app 7
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
    <fieldset><!-- Middleware -->
        <legend>Middleware</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <p> Middleware ermöglicht es uns, auf einer Anfrage Logik auszuführen, z. B. könnten wir in einem Login-System herausfinden, ob der Nutzer angemeldet ist.</p>
            <p> Middlewares die bereits in Laravel integriert sind. Dazu zählt z. B. die CSRF Middleware. Diese prüft, ob wir den CSRF Token in unseren Formularen nutzen. Eine weitere integrierte Middleware ist die Auth Middleware, mit der wir prüfen, ob ein Nutzer bereits angemeldet ist. Für Middlewares steht das Verzeichnis app/HTTP/Middleware als Speicherort zur Verfügung.</p>
            </li>
            <li class="">
            <p>mit dem Artisan Command wird Middleware erstellt:</p>
            <p><b>php artisan make:middleware Name.</b></p>
            </li>
            <li class="">
                <p>middleware in Kernel.php registrieren:</p>
                <pre>
                protected $routeMiddleware = [
                    //......
                    'easteregg' => \App\Http\Middleware\EasterEgg::class,
                ];
                </pre>
            </li>
            <li class="">
            <p>in Route middleware anhengen:</p>
            <pre>
            Route::post('/', function () {
                return 'POST SUCCESS';
            })->middleware('easteregg');
            </pre>
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
    <fieldset><!-- logging -->
        <legend>tmp</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Konfigurationsdatei für das Logging unter dem Pfad config/logging.php zu finden.
            </li>
            <li class="">
            <p>Der daily-Driver erstellt täglich eine neue Datei, in der die Logs des Tages gespeichert werden. In der Konfiguration kannst du mit dem Key days die Anzahl der zu speichernden Logs einstellen. Neuere Logs ersetzen hierbei die ältesten Logs. Der Standardwert ist sieben Tage. Wenn du alle Log-Dateien sichern möchtest, setze die days auf 0.</p>
            </li>
            <li class="">
            IP-Adressen-Logging
            <pre>
                use\Illuminate\Support\Facades\Log
                
                Route::get('/', function(){
                    Log::channel('daily')->info(request()->ip());
                    return view('welcome');
                });
            </pre>
            </li>
            <li class="">
            storage\logs\*.log zu finden
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
    <fieldset><!-- Authentifizieren – Login -->
        <legend>Authentifizieren – Login</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <ol class="default">
                        <li class="default">Gehe via SSH in deine Vagrant Box.</li>
                        <li class="default">Navigiere in das Verzeichnis, in dem deine Laravel-Applikation liegt.</li>
                        <li class="default">Füge das gerade angesprochene Composer Package hinzu.
                            <span class="command">composer require laravel/ui</span>.
                        </li>
                        <li class="default">
                            <span class="command">php artisan ui vue --auth</span>: Führe den Artisan Command aus, um das Auth-System in deine Applikation zu holen.
                        </li>
                        <li class="default">Migriere die Datenbank mit
                            <span class="command">php artisan migrate</span>.
                        </li>
                        <li class="default">Rufe die
                            <i>/</i> Route auf. Dort müsstest du schon »Login« und »Register« in der oberen rechten Ecke sehen. Wenn du aber auf »Login« klickst, wird eine ungestylte Seite angezeigt. Deshalb müssen wir noch die Javascript- und CSS-Dateien erhalten.
                        </li>
                        <li class="default">Führe in deinem Applikationsverzeichnis (immer noch in der Vagrant Box) den Befehl
                            <code translate="no">npm install</code> (npm install --no-bin-links) aus. Npm ist wie Composer nur für Javascript.
                        </li>
                        <li class="default">Anschließend muss der Befehl
                            <span class="command">npm run dev</span> ausgeführt werden. Dadurch wird ein sogenannte Bundler ausgeführt, der jeweils eine Javascript- und CSS-Datei im Verzeichnis
                            <i>public/css</i> und
                            <i>public/js</i> erstellt.
                            
                            <p class="default">Wenn du jetzt die
                                <i>/</i> Route öffnest und auf »Register« klickst, kannst du dich in deiner Applikation registrieren und anschließend mit diesen Daten anmelden. Habe ich zuviel versprochen? Je nachdem wie deine Internetleitung ist, haben wir ein Login-System in unter fünf Minuten hinzugefügt.
                                
                            </p>
                        </li>
                    </ol>
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
    <fieldset><!-- Datei - Upload -->
        <legend>Datei - Upload</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <p>Zuerst schauen wir uns die Konfiguration des Dateisystems an. Öffne dazu die Config filesystems.php. Zuerst sehen wir für default und cloud die festgelegten Disks. Die Einstellung, welche Disk standardmäßig verwendet werden soll, definiertst du in der .env. Lass uns noch die einzelnen Disks näher anschauen: Jede Disk wird durch einen festgelegten Key repräsentiert. Diesen Key kannst du z. B. dann angeben, wenn du festlegen möchtest, dass diese Disk die Standarddisk für die Cloud-Implementierung ist. </p>
            <p>Jede Disk hat einen definierten Storage Driver und einen Speicherort, an dem die Dateien gespeichert werden. Bei Amazon S3 musst du z. B. für den Speicherort die Zugangsdaten für dein S3 angeben. Du kannst so viele Disks definieren, wie du willst, und auch die Driver mehrfach verwenden. Der Speicherort bei lokalen Storage Drivers wird mit der Eigenschaft root angegeben. Die Dateien werden in der Applikation nicht im public Ordner sondern im storage Ordner gespeichert. Dieser Order wird durch die Helper-Funktion storage_path() definiert. </p>
            <p>
            Die erste definierte Disk ist die Disk local. Sie verwendet auch den Driver local. Mit der Eigenschaft root wird der Speicherort der Disk festgelegt. Der Standardwert ist, wie du sehen kannst, storage_path('app'), also storage/app/. Zu jeder Disk lässt sich außerdem die Sichtbarkeit festlegen, also ob die Dateien für jedemann einsehbar sind. Du kannst diese mit der Eigenschaft visiblity und als public oder private definieren. Die Berechtigungen sind für Dateien bei public 0664 und private 0600, bei Ordnern haben wir public 0775 und private 0700. Du fragst dich bestimmt, was diese komischen Zahlenkombinationen bedeuten. Das sind die Unix-Dateiberechtigungen. Schau dir zum Verständnis die Grafik an, falls du mit dem Prinzip nicht vertraut bist. 
            </p>
            <p>Die Berechtigungen bei public und private kannst du ebenfalls anpassen. Auf die Disk local folgt direkt die Disk public. Diese wird für sämtliche Dateien benötigt, die öffentlich einsehbar sind, wie z. B. das Profilbild eines Nutzers. Die Dateien werden im Pfad storage/app/public/ gesichert. Wie du schon weißt, kann der Nutzer clientseitig nur auf den Ordner public/ unserer Applikation zugreifen. Aus diesem Grund müssen wir die öffentlichen Storage-Dateien mit dem Public-Verzeichnis verknüpfen. Du kannst die Verknüpfung mit Artisan erstellen: php artisan storage:link. Du kannst die zu erstellenden Links auch in dem entsprechenden Array erweitern oder verändern. Nachdem du dies getan hast, ist der unter der root-Eigenschaft definierte Pfad der Disk public mit dem Pfad verknüpft, der als url-Eigenschaft definiert ist. Das ist standardmäßig der Pfad public/storage. Eine Datei mit dem Namen test.txt würde also bei Verwendung der public-Disk im Ordner storage/app/public/test.txt gespeichert werden. Durch die Verlinkung ist die Datei aber öffentlich unter dem Pfad public/storage/test.txt bzw im Browser unter advanced-laravel.test/storage/test.txt aufrufbar. Für die weiteren Driver schaust du am besten in die Doku. Das Funktionsprinzip ist gleich. Es werden nur zusätzlich die Zugangsdaten zu den entsprechenden Services benötigt. </p>
            <p>Das Dateisystem ist nun konfiguriert. Nun wollen wir den Nutzer eine Datei hochladen lassen. Dazu benötigen wir zunächst ein Formular. Im Formular müssen drei Dinge beachtet werden, die von HTML vorgegeben sind. Zum einen können Dateien über einen Input vom Typ file ausgewählt werden. Dieses funktioniert nur bei Formularen die die Post-HTTP-Methode verwenden. Zum anderen muss das Formular das Attribut enctype auf multipart/form-data setzen, da sonst der Dateiname und nicht die Datei selbst übertragen werden. </p>
            <h3>Datei hochladen</h3>
            <p>
            Nachdem der Nutzer eine Datei ausgewählt und das Formular abgesendet hat, müssen wir uns mit Laravel um die Verarbeitung kümmern. Ich würde die Datei zuerst immer validieren bevor irgendetwas anderes mit der Datei geschieht. Du kannst zwar im HTML-Input akzeptierte Dateitypen einstellen, allerdings der Nutzer kann diese im Quelltext verändern. Neben dem Dateityp und der Dateigröße validiere ich außerdem immer, ob die Datei erfolgreich hochgeladen wurde, oder ob beim Upload etwas schief ging. Die entsprechenden Methoden der Validierung findest du in den Docs. 
            </p>
            <p>Jetzt können wir die Dateien in unserem Dateisystem speichern. Zuvor ist es natürlich sinnvoll, den Dateinamen z. B. in der Datenbank zu speichern, um die Datei später entsprechend aufrufen zu können. Außerdem solltest du den Dateinamen so anpassen, dass keine doppelten Dateien auftreten. Aber ein Schritt nach dem anderen: Um eine Datei zu sichern, bieten sich zwei Möglichkeiten an. Hänge die Methode store oder storeAs an die Instanz der hochgeladenen Datei an. Der erste Parameter ist der Pfad, unter dem die Datei gespeichert werden soll. Bei der storeAs-Methode bestimmt der zweite Parameter den Dateinamen. Außerdem kannst du die Facade Storage Illuminate\Support\Facades\Storage-Methoden putFile und putFileAs verwenden. Der erste Parameter ist der Pfad, der zweite die Dateiinstanz, und mit dem dritten lassen sich Optionen wie die Sichtbarkeit, also public oder private, die zu nutzende Disk und vieles anderes definieren. Wenn du keine Disk spezifizierst, wird die Standarddisk verwendet. Bei der putFileAs-Methode sind die Optionen der vierte Parameter. Der dritte Parameter ist der Dateiname. Hier noch ein paar weitere spannende Methoden, die ich häufig verwende. Diese werden an die Dateiinstanz angehängt: </p>
            <pre>
                
                getClientOriginalName() → gibt den Dateinamen
                des Clients wieder.
                extension() → gibt die Dateiendung wieder.
                getClientOriginalExtension() → gibt die Dateiendung des Clients wieder.
                getClientMimeType() → gibt den MIME-Typ
                wie z. B. Image wieder.

            </pre>
            <h3>Datei erhalten</h3>
            <p>Nachdem eine Datei hochgeladen wurde, wollen wir natürlich Zugriff auf diese erhalten. Am einfachsten geht dies mit der Facade Storage. Mit der get-Methode kannst du eine Datei unter Angabe des Pfades erhalten. Natürlich steht dir auch dort wieder vorher die zu verwendende Disk zur Auswahl. Ausgegangen wird beim Pfad von der root-URL der jeweiligen Disk. Du kannst auch den Download der Datei im Browser des Nutzers erzwingen. Nutze dazu die gleichnamige Methode und gib den Dateipfad an diese weiter. Mit dem zweiten Parameter kannst du übrigens den Dateinamen, der für den Nutzer sichtbar ist, ändern. </p>
            <p>Am besten eignen sich aber die entsprechenden Helper-Funktionen, um auf eine Datei zuzugreifen. Zum einen die Helper-Funktion storage_path(), die auf den Pfad storage/ zugreift, und zum anderen die Helper-Funktion asset(), die auf den public/-Ordner zugreift. Diese wird vor allem bei Dateien benötigt, die in der Public Disk gespeichert werden und öffentlich zugänglich sind. </p>    
            <h3>Datei löschen </h3>
            <p>Zum Löschen von Dateien nimmst du am besten die Storage-Facade mit der delete-Methode. Du kannst natürlich auch hier die Disk auswählen. </p>
            <pre>
            &lt?php
            Storage::delete('path to file');
            Storage::disk('...')->delete('path to file');
            </pre>
            </li>
            <li class="">
            
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Tooling -->
        <legend>damit das Entwickeln mit Laravel noch komfortabler wird</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <p>Es gibt einige nützliche Tools, die ich verwende und die mir den Umgang mit Laravel noch einmal mehr erleichtern. Eines dieser Tools habe ich dir in der Übung des Familienstammbaums bereits gezeigt. Vielleicht ist dir ja noch ein weiteres in der composer.json des Template von memorily aufgefallen ;) Ich liste dir hier noch ein paar meiner Daily Driver auf, die ich in vielen Projekten verwende. Das bedeutet natürlich nicht, jedes Tool in jedem Projekt zu verwenden :P </p>
            </li>
            <li class="">
            <p>https://github.com/barryvdh/laravel-debugbar Mit Laravel Debugbar erhältst du einen Rundumblick, was in deiner Applikation vor sich geht. Du siehst die getätigten Queries, die geladenen Views und Models. Außerdem können aufgetretene Events angezeigt werden. Meiner Meinung nach das hilfreichste Tool bei der Entwicklung von Laravel-Applikationen. </p>
            </li>
            <li class="">
            <p>https://github.com/beyondcode/laravel-query-detector Du kannst N + 1 Probleme zwar anhand der getätigten Queries in Debugbar erkennen, aber wenn es schnell und eindeutig sein soll, empfehle ich dir den N + 1 Query Detector von Marcel Pociot. Dieser meldet sich bei dir mit einem Alert, sobald ein ein N + 1 Problem auftritt. </p>
            </li>
            <li class="">
            <p>https://github.com/calebporzio/awesome-helpers Ein paar Helper, die auf den ersten Blick vielleicht unnötig erscheinen, im Laufe der Zeit aber eine Menge Zeit ersparen. </p>
            </li>
            <li class="">
            <p>Ich habe PHP Insights als Github Action in jede Einsendeaufgabe hinzugefügt. Es analysiert den Code in der Kommandozeile und bewertet die Code-Qualität. Die Probleme im Code werden natürlich angezeigt. Damit kannst du dem Bewerter bei der nächsten Einsendeaufgabe zuvorkommen ;) https://github.com/nunomaduro/phpinsights</p>
            </li>
            <li class="">
            <p>Wenn du mit Laravel produktiv arbeitest, wird dir der Begriff Spatie öfter begegnen. Spatie ist eine belgische Webagentur, die sich auf Laravel spezialisiert hat. Meiner Meinung nach ist deren Open-Source-Arbeit herausragend. Schau dir bei Gelegenheit Packages aus dem Hause Spatie näher an, denn sie gehören mit zu den beliebtesten in der Community. https://spatie.be/open-source/packages</p>
            </li>
            <li class="">
            
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Mails -->
        <legend>Mails</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <p>Wenn du in deiner .env die Konstante MAIL_MAILER=log setzt und den MAIL_LOG_CHANNEL=stack hinzufügst, kannst du die Funktion des Passwortzurücksetzens schon einmal ausprobieren. Die E-Mail zum Zurücksetzen des Passworts wird dann in deine Log-Datei geschrieben. </p>
            </li>
            <li class="">
            <h3>Mailable</h3>
            <p>Jede E-Mail, die mit Laravel versendet wird, erweitert die Klasse Mailable. Sobald die erste Mail-Klasse erstellt wird, ist diese im Ordner app/Mail verfügbar. Um eine Mail zu erstellen, verwenden wir wie immer einen Artisan Command. Diesem gibst du den Namen der zu erstellenden E-Mail-Klasse mit. </p>
            <pre>php artisan make:mail Test</pre>
            <p>Zack, schon ist die erste eigene E-Mail-Klasse erstellt! Lass uns die Klasse einmal analysieren: Es wird die Klasse Mailable erweitert, außerdem sind der Constructor und die build-Methode vorhanden. In der build-Methode wird eine View wiedergegeben. Wenn du dir die Mailable-Klasse näher anschaust, siehst du schon die Methoden und Eigenschaften, um die es gleich gehen wird. In der build-Methode können wir sämtliche Methoden der Mailable-Klasse aufrufen. Wir beschränken uns zunächst auf die notwendigsten Dinge einer E-Mail. An wen die E-Mail gehen soll, legen wir nicht in der erstellten Mail-Klasse fest, da der Empfänger ja sonst festgeschrieben wäre. Wir können aber definieren, von wem die E-Mail kommt. Dafür wird die in der Konfiguration definierte globale Absenderadresse verwendet. Diese kannst du aber bei jeder generierten E-Mail mit der from-Methode in der build-Methode überschreiben. Dieser gibst du die zu verwendende E-Mail-Adresse mit.</p>
            <p>Neben dem Absender kannst du auch noch den Betreff der E-Mail-Adresse mittels der Methode subject definieren. Natürlich ist auch ein dynamischer Betreff aus Parametern möglich. Alle benötigten Abhängigkeiten kannst du via Constructor Injection verfügbar machen oder an die build-Methode weitergeben. Da jetzt feststeht, von wem die E-Mail kommt und was wir laut Betreff überhaupt wollen, sollten wir die eigentliche Nachricht verfassen. Dafür haben wir verschiedene Möglichkeiten. Zum einen können wir eine Blade View als E-Mail-Vorlage verwenden, zum anderen schreiben wir die E-Mail in Markdown-Syntax. Bei beiden Möglichkeiten könnnen wir Attribute an die Nachricht weitergeben und auch Anhänge an den Nutzer versenden. </p>
            <pre>
            &lt?php

            public function build()
            {
                return $this
                ->from('test@test.de', 'TEST')
                ->subject('Hallo Welt')
                ->view('view.name');
            }
            </pre>
            </li>
            <li class="">
            <h3>Blade E-Mail </h3>
            <p>Mit der view-Methode kannst du inmitten der build-Methode unserer Mail-Klasse ein Blade View Template auswählen, die für die E-Mail verwendet werden soll. Dadurch kannst du alle Möglichkeiten der Blade Templating Engine auch in E-Mails verwenden. Die Konvention besagt jedoch, dass E-Mails in einem gleichnamigen Ordner im Pfad resources/views gespeichert werden sollten. </p>
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
    <fieldset><!-- Notifications -->
        <legend>Notifications</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <p>Zusätzlich zu den kennengelernten E-Mails können wir in Laravel verschiedene Kanäle nutzen, um Benachrichtigungen zu versenden. Die bekannteste Benachrichtigungsform neben der E-Mail ist die SMS. Auch Slack-Nachrichten sind möglich. Benachrichtigungen können auch in der Datenbank gespeichert werden, um sie dem Nutzer auf der Website anzuzeigen. Aus meiner Erfahrung heraus ist die E-Mail-Benachrichtigung die häufigste Benachrichtigungsform in Laravel. </p>
            <p>Wie auch bei den E-Mails wird jede Benachrichtigung durch eine Klasse repräsentiert. Zum Erstellen solltest du wie gewohnt Artisan verwenden. </p>
            <pre>
            php artisan make:notification NotificationName
            </pre>
            <p>Die neue Benachrichtigung wird unter dem Pfad app/Notifications gespeichert. </p>
            <p>Schau dir jetzt die neu erstelle Benachrichtigung an. Jede erstellte Benachrichtigung erweitert die Klasse Notification. Wir haben in der Klasse zuerst den Constructor, dann die via-Methode und dann Methoden die mit to... beginnen. Die mit to beginnenden Methoden sind die sogenannten Message building Methods. Diese konvertieren die Nachricht in ein vom verwendeten Channel zu verarbeitendes Format. </p>
            <p>Die via-Methode entscheidet, an welche Channel die Benachrichtgung gesendet wird. Wir verwenden die in Laravel integrierten Channels mail, database und slack. Außerdem inkludiert sind broadcast und nexmo. Nexmo ist eine kostenpflichtige API, während Broadcast dem Übermitteln über Websockets dient. Da Websockets nicht Thema dieser Class sind und ich diese Vorkenntnisse definitiv nicht von dir erwarte, ist Broadcasting nicht Teil dieser Class. </p>
            <p>
            Laravel wäre aber nicht Laravel, wenn es nur die in das Framework integrierten Channels geben würde. Der modulare Aufbau ist den verschiedenen Funktionen des Frameworks gemein. Unter der Seite Laravel Notification Channels findest du alle vorhandenen Benachrichtigungschannels und wie du diese in deine Applikation einbinden kannst. Wir werden im Folgenden gemeinsam eine Twitter-Benachrichtigung erstellen. 
            </p>
            </li>
            <li class="">
            <h3>E-Mail-Benachrichtigungen</h3>
            <p>Eine E-Mail-Benachrichtigung wird mittels der toMail-Methode definiert und sollte eine MailMessage-Instanz zurückgeben. Dabei wird der Channel mail verwendet. Wie bei der Mail-Klasse mit Markdown wird sowohl eine HTML-Mail als auch die reine Textnachricht gerendert. Ein Beispiel siehst du in der erstellten Benachrichtigung. Öffne doch mal die MailMessage-Klasse. In VS Code hältst du auf dem Mac die Command-Taste gedrückt und klickst die Klasse an. Wenn du Windows verwendest, ist die Tastenbelegung anders. Halte die Taste Steuerung (Strg) gedrückt und klicke dann die Klasse an. Alternativ kannst du Rechtsklick auf die eingebundene Klasse machen und dann auf »go to definition« klicken. Dort siehst du die erweiterte Klasse und ihre verschiedenen Methoden und Eigenschaften. Wenn du das gerade ausprobierst, wirst du merken, dass das nicht funktioniert. VS Code ist ein reiner Text Editor, der erst durch die verschiedenen Plugins richtig mächtig wird. Ich verwende das Plugin PHP Intelephense. Dies erweitert VS Code um einen ganzen Haufen Funktionen. Ich möchte dieses Plugin nicht mehr in meinem Arbeitsalltag missen. Teste es doch mal :) </p>
            <pre>
            line() | Erstellt eine neue Zeile.
            action() | Erstellt einen Button in der Mail.
            Es wird der Text und als zweiter Parameter eine URL benötigt.
            view() | Gib ein Blade Template zum Rendern mit.
            subject() | Ändert den Betreff, um nicht den
            Klassennamen als solchen zu verwenden.
            mailer() | Anstatt des Mailers default kannst du auch
            einen anderen Mailer definieren.
            markdown() | Definiere das zu verwendende Markdown Template. 
            </pre>
            <p>Um Markdown direkt beim Erstellen der Benachrichtigung zu verwenden, muss das Flag --markdown mit dem zu erstellenden Dateinamen angehängt werden. Das sollte dir aber auch bekannt vorkommen. Die Markdown-Komponenten sind die gleichen wie bei der Mail-Klasse. Du kannst diese auch dort bearbeiten oder neue hinzufügen.</p>
            <pre>
            return (new MailMessage())
            ->greeting('Hello!')
            ->line('One of your invoices has been paid!')
            ->action('View Invoice', $url)
            ->line('Thank you for using our application!');

            return (new MailMessage())->view(
                'emails.name',
                ['invoice' => $this->invoice]
            );
            </pre>
            <p>Besonders spannend ist, dass du auch eine Instanz einer Mailable-Klasse anstatt einer MailMessage-Instanz wiedergeben kannst. Es ist also möglich, eine Mail in der Notification wiederzugeben, indem der Channel mail verwendet wird und du eine Mailable-Instanz in der toMail-Methode wiedergibst. </p>
            <pre>return (new Mailable($this->invoice))->to($this->user->email);</pre>
            <p>Du kannst natürlich wie bei der Mail das Notification Template exportieren und bearbeiten.</p>
            <pre>php artisan vendor:publish --tag=laravel-notifications</pre>
            <p>Du kannst die toMail-Methode auf der Benachrichtigung aufrufen und als Wiedergabewert einer Closure Route nutzen, um die E-Mail im Browser rendern zu lassen. Auch dieses Verhalten überschneidet sich mit den Mailable-Mails. </p>
            </li>
            <li class="">
            <h3>Benachrichtigung versenden</h3>
            <p>Um eine Benachrichtigung zu versenden, haben wir mehr als eine Möglichkeit zur Verfügung. Du kannst die Notification-Facade oder den vom User Model verwendeten Trait Notifiable nutzen. Beim Trait ist die notify-Methode für uns relevant. Die notify-Methode benötigt eine neue Instanz der Notification. Wie bei den Mails ist darauf zu achten, dass die benötigten Parameter mitgegeben werden. Du kannst den Trait natürlich auch in anderen Models verwenden. </p>
            <pre>$user->notify(new Welcome());</pre>
            <p>Bei der Facade verwendest du wie bei den Mails die send-Methode und gibst eine Instanz der Benachrichtigung als zweiten Parameter mit. Als erster Parameter werden alle zu benachrichtigenden Modelinstanzen benötigt. </p>
            <pre>Notification::send($user,new Welcome($welcome));</pre>
            </li>
            <li class="">
            <h3>SMS-Benachrichtigung</h3>
            <p>Stelle dir folgendes Szenario vor: Wir haben eine Applikation, bei der Personen ihre Laravel-Kenntnisse anhand einer Zertifikatsprüfung beweisen können. Ich möchte unseren fiktiven Nutzern bei einer bestandenen Zertifizierung eine SMS mit meinen Glückwünschen zusenden. Natürlich könnten wir auch alternativ eine Zwei-Faktor-Authentifizierung in unsere Applikation einbauen. Zunächst einmal sollen es aber nur Glückwünsche sein. In der Laravel-Dokumentation wird auf Nexmo's API verwiesen. Ich persönlich stehe mehr auf die APIs von Twilio. Twilio ist aber ebenfalls eine kostenpflichtige API. Du kannst auch einen kostenlosen Test-Account erstellen. Dabei können aber SMS nur an eigene Telefonnummern versendet werden. </p>
            <p>Auf der Seite Laravel Notification Channels findest du zu den verschiedenen Channels ausführliche Anleitungen. Zuerst füge ich in meinem Projekt via Composer das Twilio-Paket hinzu. </p>
            <pre>composer require laravel-notification-channels/twilio</pre>
            <p>Anschließend gebe ich meine API-Zugangsdaten von Twilio in der .env ein. Die zeige ich hier aber aus gutem Grund nicht ;) Soweit sind wir mit dem notwendigen Setup durch. Jetzt können in sämtlichen Benachrichtigungen die Twilio-Channel eingebunden werden. Alle verfügbaren Klassen findest du unter dem Namespace NotificationChannels\Twilio\... . In der via-Methode gibst du an, dass die Benachrichtigung via Twilio abgesendet werden soll. Dann definierst du eine toTwilio-Methode. In dieser gibst du die von dir gewählt Twilio-Klasse aus, über die die Benachrichtigung versendet werden soll. Ich würde sagen, dass von den Klassen nur TwilioSmsMessage für SMS-Nachrichten und TwilioCallMessage für Anrufe gebraucht werden. Der SMS gibst du mit der content-Methode den Textinhalt der SMS mit</p>
            <pre>
            &lt?php

            namespace App\Notifications;

            use Illuminate\Bus\Queueable;
            use Illuminate\Contracts\Queue\ShouldQueue;
            use Illuminate\Notifications\Messages\MailMessage;
            use Illuminate\Notifications\Notification;
            use NotificationChannels\Twilio\TwilioChannel;
            use NotificationChannels\Twilio\TwilioSmsMessage;

            class Test extends Notification
            {
                use Queueable;

                public function __construct()
                {
                }

                public function via($notifiable)
                {
                    return [TwilioChannel::class];
                }

                public function toTwilio($notifiable)
                {
                    return (new TwilioSmsMessage())
                        ->content("Herzlichen Glückwunsch zum Zertifikat");
                }
            }
            </pre>
            <p>Sobald du die Benachrichtigung absendest, wirst du einen Fehler erhalten. Die Benachrichtigung hat keine Zieltelefonnummer, an die die Benachrichtigung gehen soll. Der Twilio-Channel schaut im zu benachrichtigenden Model, in diesem Fall dem User-Model, nach einer phone_number Eigenschaft. Die ist bei uns aber nicht vorhanden. Aus diesem Grund definiere ich mit der Methode routeNotificationForTwilio die Telefonnummer im zu benachrichtigenden Model. </p>
            <pre>
            &lt?php

                public function routeNotificationForTwilio()
                {
                    return '+49176*******';
                }
            </pre>
            <p>Du kannst die Nachricht natürlich verändern und z. B. Parameter übergeben.</p>
            <pre>
            &lt?php

                return (new TwilioSmsMessage())->content
                ("Herzlichen Glückwunsch zum Zertifikat
                {$this->user->name}. Du hast es dir verdient! Das
                Zertifikat wurde an deine
                E-Mail-Adresse {$this->user->email} geschickt.");
            </pre>
            </li>
            <li class="">
            <h3>Datenbankbenachrichtigung</h3>
            <p>Der database-Channel speichert die Benachrichtigung in einer Datenbanktabelle. Du fragst dich sicherlich, wofür das gut sein soll, oder? Ich nutze das Speichern in der Datenbank sehr oft, um nach Benachrichtigungen zu suchen und diese im Webinterface des Nutzers anzeigen zu lassen. Wir könnten z. B. in der Einsendeaufgabe der letzten Class eine Benachrichtigung im Nutzerinterface anzeigen lassen, wenn ein Punkt auf der To-do-Liste schon sehr lange dort ist. </p>
            <p>
            Um die Benachrichtigungen in der Datenbank speichern zu können, braucht es zuerst einmal eine Tabelle. Damit du nicht selbst herausfinden musst, welche Spalten mit welchen Datentypen gebraucht werden, vertrauen wir mal wieder auf Artisan. 
            </p>
            <pre>php artisan notifications:table</pre>
            <p>Nachdem du die Migration erstellt und anschließen migriert hat, ist eine entsprechende Tabelle vorhanden. Jetzt musst du die Benachrichtigung nur noch in der Tabelle speichern. Schau dir mal die von uns erstellte Notification an. Neben der toMail-Methode ist die Methode toArray vorhanden. Der Kommentar besagt, dass die Methode ein Array wiedergibt, das die Benachrichtigung repräsentiert. Dieses PHP Array wird in der data-Spalte der notifications Tabelle gespeichert. Wenn du dich in der Dokumentation oder im Web umschaust, wirst du auf die Methode toDatabase stoßen. Der Unterschied ist, dass die toDatabase-Methode nur den Channel database nutzt. Die toArray-Methode verwendet neben dem database auch den Channel broadcast. Die toArray-Methode gibt das Array beim Broadcasting im JSON-Format an das Javascript Frontend weiter. Das bedeutet, dass du sowohl den Channel database als auch den Channel broadcast in der via-Methode definieren kannst, wenn du die toArray-Methode verwendest. </p>
            </li>
            <li class="">
            
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Queue -->
        <legend>Queue – Aufgaben verzögert ausführen</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <h3>Aufgaben in die Warteschlange</h3>
            <p>Queueing ist ein wichtiges Konzept, das in produktiven Umgebungen immer zum Einsatz kommt. Dir ist wahrscheinlich aufgefallen, dass die Website extrem lange lädt, wenn eine E-Mail via Mailtrap abgesendet wurde. Das liegt unter anderem daran, dass die Applikation von einer externen API abhängt. Dies ist normalerweise noch kein Problem, kann aber eines werden, wenn der Nutzer so lange warten muss, bis die externe API die Aufgabe ausgeführt hat. Um dir das Prinzip von Queues zu erklären, nutze ich ein anschauliches Beispiel eines Imbisses. Wir können Aufgaben synchron und asynchron ausführen</p>
            </li>
            <li class="">
            <h3>Redis Queue</h3>
            <p>Um den Driver redis zu verwenden, benötigen wir eine In Memory Redis Datenbank.</p>
            <p>Redis was ist das?
            Kurzgesagt: Redis steht für Remote Dictionary Server und ist eine NoSQL In Memory Keyvalue Datenbank. Uff! Gehen wir das mal Schritt für Schritt durch. Vergleichen wir Redis am besten mit der bis jetzt verwendeten MySQL-Datenbank. MySQL ist eine relationale Datenbank, die auf Tabellen setzt. Für jede Tabelle ist ein Schema definiert. Das bedeutet, dass für jede Tabelle bzw. Tabellenspalte der Datentyp und die Datenstruktur im Vorhinein festgelegt sind. Um diese zu ändern, müssen wir die Tabelle verändern. Die gesamten Tabellen werden auf der Festplatte des Server bzw. deines Rechners gespeichert. </p>
            <p>Und Redis? Redis ist ein In Memory-Datenspeicher. Die Daten werden also im Arbeitspeicher gespeichert und können um ein Vielfaches schneller abgerufen werden. Selbst auf modernen SSDs treten heute Verzögerungen aufgrund der Suchzeit in der SSD auf. Aus dem RAM sind die Daten blitzschnell innerhalb von Mikrosekunden zugänglich. Keyvalue bedeutet, dass in Redis im Gegensatz zu SQL nicht Schemata, sondern Paare aus Schlüssel und Wert gespeichert werden. Das Spannende ist, dass der Datensatz als Schlüssel fungiert und den Wert darstellt. Der Key ist jedoch immer einzigartig und lässt sich mit dem Primary Key einer Datenbank vergleichen. Die typische Datenstruktur sind Strings. Diese repäsentieren den Key sowie den Wert bis zu einer Größe von 512 MB. Es sind aber noch andere Datentypen möglich. </p>
            <p>Doch wofür eignet sich Redis? Redis eignet sich sehr gut für Caching und Warteschlangen – aber nur bedingt als Datenbank. Seine Stärken spielt es aus, wenn Daten schnell und einfach zur Verfügung stehen sollen. Für komplexe Datenbankabfragen wie bei Beziehungen ist Redis jedoch ungeeignet. Da Redis eine In Memory-Datenbank ist, wird der Arbeitsspeicher gebraucht, um dort die Daten zu speichern. Davon braucht Redis aber nicht gerade wenig. Aus diesem Grund kann Redis kostenintensiv werden, sobald der Server skaliert werden muss. </p>
            <p>Redis ist schon in deiner Homestead Box installiert. Das ist ein großer Vorteil. Du kannst also direkt loslegen. Damit wir die Queue in der Datenbank speichern können, müssen wir zuerst einmal eine Verbindung zwischen Laravel und der Redis-Datenbank herstellen. Um Redis verwenden zu können, benötigen wir ein zusätzliches Composer Package. </p>
            <pre>composer require predis/predis</pre>
            <p>Anschließend kannst du in deiner .env die QUEUE_CONNECTION von sync auf redis setzen. Voilà, jetzt solltest du eine Änderung des Resultats in deiner Log-Datei feststellen, wenn du die Seite neu lädst.</p>
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
    <fieldset><!-- Events  -->
        <legend>Events – auf Ereignisse reagieren</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <p>einmal ein Event und einen Listener erstellen</p>
            <pre>                
            php artisan make:event Name
            php artisan make:listener Name
            </pre>
            <p>Dabei werden in den Ordnern app/Events bzw. app/Listeners die jeweiligen Klassen erstellt. </p>
            <p>Die Events und Listener müssen noch registriert werden. Gehe doch mal in den EventServiceProvider. Hier werden unter der Eigenschaft $listen die Events mit ihren zugehörigen Listenern registriert. Du kannst dir das Ganze wie eine if then Beziehung vorstellen. Wenn ein Event auftritt, dann werden die definierten Listener aufgerufen. Hierbei ist die Event-Klasse der Key und der Listener bzw. die Listener-Klassen die Values. </p>
            <p>Neben Artisan, wo du explizit Events und Listener erstellen kannst, hast du noch eine andere praktische Möglichkeit, indem du im EventServiceProvider die benötigten Events und Listener registrierst und die Dateien mittels des Artisan Command php artisan event:generate generierst. Wenn Klassen schon vorhanden sind, werden diese nicht überschrieben, sondern einfach ignoriert. </p>
            <p>Um zu prüfen, welche Events mit welchen zugehörigen Listenern verfügbar sind, kannst du mit dem Artisan Command php artisan event:list alle in der Applikation registrierten Events und Listener anzeigen lassen. Mach das doch gleich mal, dann siehst du, ob du die Übung erfolgreich absolviert hast. Es sollte bei dir das Event mit zwei zugehörigen Listenern vorhanden sein. </p>
            </li>
            <li class="">
            <p>Oftmals ist es aber unsinnig, für jedes Life Cycle Event eine eigene Event-Klasse und zugehörige Listener zu erstellen. Das wäre schier zu viel Overhead. Aus diesem Grund kannst du direkt zu einem Life Cycle Event einen Listener registrieren. Die dafür benötigte Klasse nennt man Observer. Du kannst hierbei die Listener für die Life Cycle Events eines Models in einer Klasse gruppieren. Die oben genannten Life Cycle Events sind im Observer als Methode vorhanden und erhalten als ersten Parameter die Modelinstanz. Um einen Observer zu erstellen, verwendest du am besten Artisan: php artisan make:observer ModelnameObserver. Mit dem Flag -m Modelname kannst du das Model gleich mit definieren, wodurch die entsprechenden Event-Methoden erstellt werden. </p>
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
    <fieldset><!-- Code zu Übungsvideos -->
        <legend>Code zu Übungsvideos</legend>
        <div>
        <ul class="fragen">
            <li class="">
            https://github.com/Cosnavel/webmasters-laravel-fuer-fortgeschrittene
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Datenübermittlung an die View -->
        <legend>Datenübermittlung an die View</legend>
        <div>
        <ul class="fragen">
            <li class="">
                <h3>Übermitteln von Daten als Inline Array</h3>
                <b>return view('welcome', ['user' => 'Niclas']); </b>
                <p>In der View sind die Daten unter dem Key verfügbar. Du kannst diese mit &lt?=$key?> wiedergeben</p>
                <p>Du kannst auch ein Array von Daten übergeben.</p>
                <b>return view('welcome',['user'=>['Niclas','Thomas','Eduard']]); </b>
                <p>Wenn du mehrere Variablen mitgeben möchtest, trennst du diese durch ein Komma.</p>
                <b>return view('welcome', ['user' => 'Niclas', 'framework' => 'laravel']);</b>
            </li>
            <li class="">
                <h3>Übergeben der Variable als Array</h3>
                <p>Hierbei können wir eine vorhandene Variable weitergeben. Es ist dennoch notwendig, einen Key festzulegen.</p>
                <b>$user = 'Niclas';</b><br>
                <b>return view('welcome',['user'=>$user]); </b>
            </li>
            <li class="">
                <h3>Anhängen der Methode with() </h3>
                <p>Du musst dabei beachten, dass nur bei einer zu übergebenden Variable keine Arrow-Schreibweise notwendig ist. </p>
                <b>return view('welcome')->with('user',$user);  </b>
                <p>Bei mehreren Parametern ist sie jedoch notwendig. </p>
                <b>return view('welcome')->with(['user'=>$user, 'framework'=> 'laravel']); </b>
                <p>Die with-Methode lässt sich bei nur einem Parameter noch mehr vereinfachen. Du gibst den Key großgeschrieben nach dem with an. Die Variable ist in der View kleingeschrieben verfügbar. </p>
                <b>return view('welcome')->withUser($user);   </b>
            </li>
            <li class="">
                <h3>die compact()-Methode</h3>
                <p>Mein persönlicher Favorit ist die compact-Methode. Die Key-Value-Schreibweise entfällt. Das übernimmt die Methode. In der compact-Methode wird die Variable ohne Dollarzeichen in Single Quotes angegeben. Dies ist dann automatisch der Key. Bei mehreren Variablen werden diese mit einem Komma getrennt. </p>
                <b>$user = 'Niclas'; $framework='Laravel';</b><br>
                <b>return view('welcome',compact('user','framework'));</b>
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset><!-- Blade-Kontrollstrukturen -->
        <legend>Blade-Kontrollstrukturen</legend>
        <div>
        <ul class="fragen">
            <li class="">
                <h3>If-Abfragen</h3>
                <pre>
                @if($number === 1)
                Die Nummer ist eins. 
                @elseif($number > 1 )
                Die Nummer ist größer als eins.
                @else
                Die Nummer ist kleiner eins.
                @endif
                </pre>
                <p>Es gibt für drei typische if-Abfragen noch weitere Vereinfachungen. Mit der isset()-Funktion überprüfst du, ob eine Variable definiert und nicht null ist. @if(isset($var)) @endif vereinfachen wir zu @isset($var) @endisset. Ebenso verhält es sich mit der Funktion empty(). Sie überprüft, ob eine Variable definiert, nicht leer und ungleich null ist. In Blade nutzt man @empty($var) @endempty. Die dritte und letzte Möglichkeit der Vereinfachung ist der @unless-Shortcut. Du kannst diesen mit »so lange nicht« übersetzen. Schau dir folgendes Beispiel an: </p>
                <pre>
                @unless ($number > 5)
                Die Nummer ist nicht größer als 5.
                @endunless
                </pre>
                <p>Solange $number nicht größer als 5 ist, gib folgenden Text aus: »Die Nummer ist nicht größer als 5.« Vergleichen kannst du dies mit:  </p>
                <pre>
                @if (!($number>5))
                Die Nummer ist nicht größer als 5.
                @endif
                </pre>
            </li>
            <li class="">
            <h3>Switch-Abfragen</h3>
            <p>Switch-Abfragen verhalten sich ähnlich wie if-Abfragen. Sie starten mit @switch($var) und enden mit @endswitch. Die weiteren Shortcuts sind @case(), @break, @default. Diese Shortcuts werden genauso verwendet wie bei standardmäßigen Switch-Abfragen in PHP.</p>
            </li>
            <li class="">
            <h3>Schleifen</h3>
            <p>Für verschiedene Schleifenarten stehen ebenfalls Shortcuts zur Verfügung, die genauso wie in normalem PHP funktionieren. Es gibt for, foreach und while-Schleifen als Shortcuts. Sie starten mit einem @ und der entsprechenden Schleife und enden mit @end sowie der entsprechenden Schleife. Continue und Break stehen ebenfalls zur Verfügung, um die Schleife zu unterbrechen.</p>
            <pre>
            @for()
            @endfor

            @foreach()
            @endforeach

            @while()
            @endwhile
            </pre>
            <p>
            $loop->iteration zeigt die derzeitige Iteration der Schleife.
            $loop->index zeigt den Index der derzeitigen Iteration. 
            $loop->count Gesamtzahl der Elemente des Arrays, das durch die Schleife iteriert wird.
            $loop->remaining noch verbleibende zu iterierende Elemente.
            $loop->first gibt einen Booleschen Wert (true oder false) wieder, wenn die derzeitige Iteration die erste Iteration der Schleife ist.
            $loop->last gibt einen Booleschen Wert (true oder false) wieder, wenn die derzeitige Iteration die letzte Iteration der Schleife ist.
            </p>
            <pre>              
            $loop->iteration zeigt die derzeitige Iteration der Schleife.
            $loop->index zeigt den Index der derzeitigen Iteration. 
            $loop->count Gesamtzahl der Elemente des Arrays,
            das durch die Schleife iteriert wird.
            $loop->remaining noch verbleibende zu iterierende Elemente.
            $loop->first gibt einen Booleschen Wert (true oder false) wieder,
            wenn die derzeitige Iteration die erste Iteration der Schleife ist.
            $loop->last gibt einen Booleschen Wert (true oder false) wieder,
            wenn die derzeitige Iteration die letzte Iteration der Schleife ist.

            </pre>
            </li>
            <li class="">
            <h3>Inline-PHP</h3>
            <p>Wenn du wider Erwarten doch einmal inline PHP in der Blade-Datei ausführen möchtest, kannst du dies mit dem Shortcut @php @endphp tun. Der Inhalt wird zwischen die beiden Shortcuts geschrieben. </p>
            </li>
            <li class="">
            <h3>Kommentare</h3>
            <p>Solltest du in der Blade-Datei HTML-Code wie in HTML mit auskommentieren, ist dieser in der gerenderten HTML-Seite im Quellcode sichtbar. Wenn du Blade-Kommentare verwendest, wird der Inhalt nicht gerendert und ist auch nicht im Quellcode vorhanden. Dazu nutzt du die Schreibweise {{-- --}}</p>
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

<?php
    require_once "footer.php";
?>