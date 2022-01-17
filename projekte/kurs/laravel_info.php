<fieldset>
        <legend>Welche HTTP-Methode nutzt die Resource Action show? </legend>
        <div>
        <ul class="fragen">
                <li class="">
                Post
                </li>
                <li class="">
                Patch
                </li>
                <li class="true">
                Get
                </li>
                <li class="">
                Put
                </li>
            </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche HTTP-Methode nutzt die Resource Action store?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Get  
            </li>
            <li class="">
            Patch
            </li>
            <li class="">
            Put
            </li>
            <li class="true">
            Post
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie erstellen Sie einen Single Action Controller – der Controller enthält also nur eine einzige Action? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Anstatt der Schreibweise public function actionName() wird die Schreibweise invokable function actionName() genutzt.
            </li>
            <li class="">
            Beim manuellen Erstellen des Controllers wird _invokable an den Controllernamen gehängt.
            </li>
            <li class="true">
            Beim Erstellen des Controllers mit Artisan wird das Flag --invokable angehängt.
            </li>
            <li class="true">
            Der Controller enthält die magische Methode __invoke.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Es werden mit einem Formular folgende Werte an den Controller übertragen: gender, age, country, languages. Wie können Sie überprüfen, ob der Parameter gender in der Request vorhanden ist und einen Wert hat?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Mit der Methode filled() und dem Namen des Parameters.
            </li>
            <li class="">
            Mit der Methode has() und dem Namen des Parameters.
            </li>
            <li class="true">
            Mit einer if-Abfrage, in der der Parameter mit Hilfe von Helper-Funktionen oder gegen null geprüft wird.
            </li>
            <li class="">
            Mit der Methode missing() und dem Namen des Parameters.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welcher Codeschnipsel ist korrekt, um der Weiterleitung den Statuscode 308 "Permanently Redirect" zu geben? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            return redirect()-&gt;away('http://example.org', Response::HTTP_PERMANENTLY_REDIRECT);
            </li>
            <li class="true">
            return redirect()-&gt;away('http://example.org', Symfony\Component\HttpFoundation\Response::HTTP_PERMANENTLY_REDIRECT);
            </li>
            <li class="true">
            return redirect()-&gt;away('http://example.org', 308);
            </li>
            <li class="">
            return redirect()-&gt;away('http://example.org');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche dieser Codeschnipsel gibt keine View wieder? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            return Illuminate\Support\Facades\View::make('welcome'); 
            </li>
            <li class="">
            return view('welcome');
            </li>
            <li class="">
            return response()->view('welcome');
            </li>
            <li class="true">
            return redirect()->view('welcome');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie wird eine View erstellt? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Ich muss die View mit der Endung .blade.php von Hand erstellen.
            </li>
            <li class="">
            Ich muss den entsprechenden Artisan Command nutzen.
            </li>
            <li class="true">
            Ich installiere ein Drittanbieter Paket, um die View mit Artisan zu erstellen zu können.
            </li>
            <li class="true">
            Ich muss mir einen eigenen Artisan Command schreiben, um die View mit Artisan erstellen zu können.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie fügen Sie Inhalte zum Anfang eines Stack hinzu? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            @add('stackname')
            ...
            @endadd
            </li>
            <li class="">
            @push('stackname)
            ...
            @endpush
            </li>
            <li class="true">
            @prepend('stackname')
            ...
            @endprepend 
            </li>
            <li class="">
            @push
            ...
            @endpush
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welchen Unterschied gibt es zwischen {{-- --}} und <!-- -->?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Mit HTML-Kommentaren ist der Kommentar nicht im gerenderten HTML-Quellcode sichtbar.
            </li>
            <li class="true">
            Mit Blade-Kommentaren wird der Inhalt nicht gerendert und ist nicht im gerenderten HTML- Quellcode vorhanden.
            </li>
            <li class="">
            Mit Blade-Kommentaren wird der Inhalt gerendert und ist im gerenderten HTML-Quellcode vorhanden.
            </li>
            <li class="true">
            Mit HTML-Kommentaren ist der Kommentar im gerenderten HTML-Quellcode sichtbar.
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie eine Variable bzw. mehrere Variablen an eine Komponente weitergeben? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Ich kann @slot('variablenname') @endslot bei mehreren Variablen innerhalb von @component('path') und @endcomponent verwenden. Innerhalb der Komponente wird der Wert, den ich zwischen @slot und @endslot schreibe, unter dem definierten Variablennamen verfügbar.
            </li>
            <li class="true">
            Bei einer zu übergebenden Variable schreibe ich den Wert der Variable zwischen @component('path') und @endcomponent. Dieser Wert wird für die Variable $slot eingesetzt.
            </li>
            <li class="">
            Ich muss zwischen @component('path) und @endcomponent eine Konstante definieren. Diese wird mit const variablenname = wert definiert und ist unter dem Variablennamen in der Komponente verfügbar.
            </li>
            <li class="">
            Ich muss die Variablennamen als zusätzliche Parameter in @component('path', var1, var2 ,...) @endcomponent angeben und die jeweiligen Werte in der magischen Methode __construct zwischen @component und @endcomponent zuweisen
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was macht @yield? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            @yield definiert eine Section in der Child View.
            </li>
            <li class="true">
            @yield definiert in der Parent View, wo die Child View Inhalte einsetzen kann.
            </li>
            <li class="">
            @yield erweitert die Child View um die Parent View.
            </li>
            <li class="">
            @yield definiert in der Child View, wo die Parent View Inhalte einsetzen kann.
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie einzelne Komponenten einbinden? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Mit @component @endcomponent
            </li>
            <li class="true">
            Mit @component('path') @endcomponent
            </li>
            <li class="true">
            Mit @include('path)
            </li>
            <li class="">
            Mit @include
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Aussagen über Template Inheritance sind zutreffend? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Template Inheritance macht das Layout der Website überflüssig.
            </li>
            <li class="">
            Template Inheritance macht CSS und Javascript überflüssig.
            </li>
            <li class="true">
            Template Inheritance erlaubt das Vererben von erstellten Layouts.
            </li>
            <li class="true">
            Template Inheritance ermöglicht eine Parent-Child-Beziehung zwischen Views.
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können PHP-Variablen mit Blade ausgegeben werden? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            {{ $var }}
            </li>
            <li class="true">
            {!! $var !!}
            </li>
            <li class="true">
            &ltphp echo $var; ?>
            </li>
            <li class="">
            {{-- $var --}}
            </li>
            <li class="true">
            &lt?=$var?>
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was zeichnet Blade-Kontrollstrukturen aus? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Sie beginnen immer mit @.
            </li>
            <li class="">
            Sie müssen immer in einem geöffneten PHP-Tag stehen.
            </li>
            <li class="">
            Sie müssen immer in {{ }} geschweiften Klammern stehen.
            </li>
            <li class="">
            Sie beginnen immer mit #.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Warum wird der String &lth1> Hallo Welt &lt/h1> mit der normalen Blade-Ausgabe {{ }} nicht korrekt angezeigt? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Der HTML-Code wird durch die Funktion htmlspecialchars escaped.
            </li>
            <li class="">
            Weil Javascript verwendet werden muss, um HTML-Code einzufügen.
            </li>
            <li class="true">
            Sonderzeichen im HTML-Code werden escaped und dadurch in HTML-Sonderzeichen umgewandelt z. B. &lt in <;
            </li>
            <li class="">
            Weil HTML-Code in einer String nicht gespeichert werden kann.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist notwendig, um Laravel an eine Datenbank anzubinden?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            eine vorhandene Datenbank.
            </li>
            <li class="true">
            die Konfiguration der Datenbankzugangsdaten mittels der Environment Variables (Umgebungsvariablen) in der .env oder direkt in der Datei config/database.php.
            </li>
            <li class="">
            ein Fallback-Wert in der Datei config/database.php.
            </li>
            <li class="true">
            der Datenbanktyp.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welchem der genannten Column Modifier ist seine korrekte Funktion zugeordnet? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            comment() | Diese Spalte dient nur dazu, um Kommentare in der Datenbank zu hinterlegen.
            </li>
            <li class="true">
            charset() | Definiert den zu nutzenden Zeichensatz.
            </li>
            <li class="">
            nullable() | Die Spalte ist immer null.
            </li>
            <li class="true">
            default() | Die Spalte erhält einen sogenannten Fallback-Wert, der genutzt wird, wenn kein Wert angegeben wird.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie prüfen, ob die Spalte role der Tabelle users vorhanden ist? Wenn die Spalte vorhanden ist, wird der Text "Rolle vorhanden" ausgegeben. Gegeben sei eine Tabelle, die durch Migrieren der dargestellten Migration erstellt wurde erstellt ist:</legend>
        <div>
        <pre>
        &lt;?php
        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateUsersTable extends Migration
        {
        public function up()
        {
        Schema::create('users', function (Blueprint $table) {
        $table-&gt;bigIncrements('id');
        $table-&gt;string('name');
        $table-&gt;date('birth');
        $table-&gt;integer('role');
        $table-&gt;timestamps();
        });
        }
        }
        </pre>
        <p>Antwort;</p>
        <p>Antwort: if(Illuminate\Support\Facades\Schema::hasColumn('users', 'role')) { var_dump('Rolle vorhanden'); }</p>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Geben Sie die Methode an, die Sie nutzen müssen, um die Spalte name in einer neuen Migration zu löschen?</legend>
        <div>
        <p>Antwort:</p>
        <p>$table->dropColumn('name');</p>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist der Unterschied zwischen einem Parameter und einem Argument? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Ein Argument ist eine Variable in der Deklaration einer Funktion.
            </li>
            <li class="true">
            Ein Parameter ist eine Variable in der Deklaration einer Funktion.
            </li>
            <li class="true">
            Ein Argument ist der tatsächliche Wert dieser Variable, der an die Funktion weitergegeben wird.
            </li>
            <li class="">
            Ein Parameter ist der tatsächliche Wert dieser Variable, der an die Funktion weitergegeben wird.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Warum verwendet man Parameter Binding?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Es ist ein Schutz gegen Cross Site Scripting (XSS).
            </li>
            <li class="">
            Es ist ein Schutz gegen Cross Site Request Forgery (CSFR).
            </li>
            <li class="">
            Es ist eine Validierung der Werte, bevor diese in der Datenbank gespeichert werden.
            </li>
            <li class="true">
            Es ist ein Schutz gegen SQL Injections.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was machtstdClass? Markiere die zutreffenden Aussagen.</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            wandelt ein Array in ein Objekt um 
            </li>
            <li class="true">
            Arrow-Schreibweise verfügbar, um auf Werte zuzugreifen
            </li>
            <li class="true">
            ermöglicht Zugriff auf das Objekt sowie auf Parameter einer Klasse, ohne formal eine Klasse zu definieren
            </li>
            <li class="true">
            erstellt eine anonyme Klasse
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist der erste Parameter der Methode chunk()?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            die Anzahl der Stücke, die für alle Zeilen verwendet werden sollen.
            </li>
            <li class="">
            ein Closure, um die Zeilen zu verarbeiten.
            </li>
            <li class="true">
            die Anzahl der Zeilen pro Stück.
            </li>
            <li class="">
            die Anzahl der Stücke pro Zeile.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Erweitern Sie den Code, sodass Sie die Gesamtsumme der Punkte aller Prüfungen erhalten?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: $all_points = DB::table('exams')->sum('points');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist die Aufgabe der Methode table() der FacadeDB? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Die Methode der Facade DB gibt eine Instanz des Query Builders der als Parameter definierten Tabelle wieder.
            </li>
            <li class="">
            Die Methode der Facade DB wird verwendet, um bereits vorhandene Tabellen in einer Migration zu nutzen.
            </li>
            <li class="">
            Die Methode der Facade DB gibt die Tabelle wieder.
            </li>
            <li class="">
            Die Methode bindet die Tabelle an die Query.
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Erweitern Sie den Code so, dass von allen Nutzern (Tabelle users) nur der Name ausgegeben wird (Spalte name). Der Wiedergabewert soll eine Collection sein, die alle Werte enthält.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            DB::table('users')->pluck('name');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie prüfen, ob der Wert der Spalte column im vordefinierten Array [1,2,3,4,5,6] verfügbar ist?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: ...->whereIn('column', [1,2,3,4,5,6])
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie mit einer Methode des Query Builders prüfen, ob ein Wert zwischen 40 und 100 liegt?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: ...->whereBetween('column', [40,100])
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Erweitern Sie den Code, sodass Sie erfolgreich den Punktedurchschnitt aller Prüfungen erhalten?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: $average_points = DB::table('exams')->avg('points');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was haben die Methoden find und first im Gegensatz zur get-Methode gemeinsam?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Ein JSON-Objekt wird wiedergegeben.
            </li>
            <li class="true">
            Ein einzelnes stdClass-Objekt wird wiedergegeben.
            </li>
            <li class="">
            Eine Collection, in der jedes Element ein stdClass-Objekt ist, wird wiedergegeben.
            </li>
            <li class="">
            Eine Collection, in der jedes Element ein Array ist, wird wiedergegeben.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welcher Aufbau der insert-Methode des Query Builders ist korrekt? Kreuzen Sie alle gültigen Antworten an. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            DB::table('users')-&gt;insert('name'=&gt;'niclas', 'name'=&gt;'max' );
            </li>
            <li class="true">
            DB::table('users')-&gt;insert([ ['name'=&gt;'niclas'], ['name'=&gt;'max'] ]);
            </li>
            <li class="true">
            $users = DB::table('users');
            </li>
            <li class="true">
            $users = DB::table('users'); <br>
            $users-&gt;insert( ['name'=&gt;'niclas'] );
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie prüfen, ob der Wert der Spalte column kleiner als der Wert der Spalte big ist?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: ...->whereColumn('column', '<', 'big')
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie die Datenbankwerte anhand der Spalte created_at absteigend sortiert ausgeben?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: ...->orderBy('created_at', 'desc')->get();
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Markieren Sie die korrekten Aussagen über Chunking.</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Das Chunking kann als zweiten Parameter ein Closure erhalten, in dem die Werte verarbeitet werden können.
            </li>
            <li class="true">
            Man verwendet Chunking, um Performance-Problemen bei großen Abfragen entgegenzuwirken.
            </li>
            <li class="true">
            Beim Chunking wird die Anfrage in Stücke mit zuvor definierter Größe zerteilt.
            </li>
            <li class="">
            Das Chunking filtert automatisch alle Zeilen.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Es gelte folgende Beziehung: Artikel können mehrere Kommentare haben. Wie können Sie alle Artikel enthalten, die eine Beziehung zu mindestens fünf Kommentaren haben? Die Beziehung zu den Kommentaren ist in der Methode comments definiert.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: $articles = App\Article::has('comments', '>=', 5)->get();
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Warum verwendet man Mass Assignment? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Mass Assignment kann verhindern, dass ein Angreifer Datenbankspalten ändert, die nicht geändert werden sollen.
            </li>
            <li class="">
            Mass Assignment verknüpft große Datenmengen, um eine bessere Performance zu erzielen.
            </li>
            <li class="">
            Mass Assignment verhindert alle Angriffe auf die Datenbank.
            </li>
            <li class="true">
            Mass Assignment ist ein Schutz gegen SQL Injections.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Gegeben sei eine Tabelle mit den Spalten title, text und den Timestamps. Sie wollen die create-Methode nutzen, um Model Instanzen zu erstellen und diese in der Datenbank zu speichern. Welcher Code funktioniert? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            //Model <br>
            protected $guarded = ['title', 'text']; <br>
            $post = App\Post::create(['title' =&gt; 'Test', 'text' =&gt; 'testing mass assignment']);
            </li>
            <li class="true">
            //Model <br>
            protected $fillable = ['title', 'text']; <br>
            $post = App\Post::create(['title' =&gt; 'Test', 'text' =&gt; 'testing mass assignment']);
            </li>
            <li class="">
            //Model <br>
            protected $fillable = []; <br>
            $post = App\Post::create(['title' =&gt; 'Test', 'text' =&gt; 'testing mass assignment']);
            </li>
            <li class="true">
            //Model <br>
            protected $guarded = []; <br>
            $post = App\Post::create(['title' =&gt; 'Test', 'text' =&gt; 'testing mass assignment']);
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie die im Model definierte, mitzuladende Beziehung comments explizit in einer Anfrage ausschließen, sodass diese nicht mit abgefragt wird?
        </legend>
        <div>
        <ul class="fragen">
            <li class="">
            protected $with('comments');
            </li>
            <li class="">
            $articles = App\Article::without('comments')->get();
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Es seien Artikel und zugehörige Kommentare. Sie wollen die Gesamtanzahl der Kommentare in einer Übersicht zeigen. Wie rufen Sie diese am besten ab? Die Beziehung zu den Kommentaren ist in der Methode comments definiert.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: $articles = App\Article::withCount('comments')->get(); <br>
            foreach($articles as $article) { echo $article->comments_count; }
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie im Model festlegen, dass die Spalte price nicht im Mass Assignment genutzt werden darf?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: protected $guarded = ['price'];
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie fügen Sie die Zeitstempel created_at und updated_at automatisch beim Erstellen von Beziehungen zu einer Pivot-Tabelle hinzu (diese sind bereits in der Migration definiert)? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Indem ich die Methode withTimestamps() an die belongsToMany-Methode anhänge.
            </li>
            <li class="">
            Die Spalten werden automatisch befüllt, wenn diese in der Migration vorhanden sind.
            </li>
            <li class="true">
            Indem ich in der Migration den Default-Wert now() setze.
            </li>
            <li class="">
            Es reicht, wenn ich die Spalten in der Migration definiere. Ich muss die Werte aber für das Mass Assignment verfügbar machen.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie einen Fehler wiedergeben, wenn eine von Ihnen gesuchte Modelinstanz nicht existiert? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            $user = App\User::findOrFail(1);
            </li>
            <li class="">
            $user = App\User::find(1);
            </li>
            <li class="true">
            $user = App\User::find(1); <br>
            $user ? 'user found' : response('Error', 404);
            </li>
            <li class="">
            $user = App\User-&gt;findOrFail(1);
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie Elemente aus dem Papierkorb beim Soft Deleting wiederherstellen?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            $trashed = $users->onlyTrashed(); $trashed->first()->restore(); 
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie benennen Sie die Eigenschaft, unter der Sie die Pivot-Tabelle aufrufen, um? Die Pivot-Tabelle soll unter der Eigenschaft role verfügbar sein.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: return $this->belongsToMany('App\User')->as('role');
            </li>

       </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie im Model definieren, dass bei einem Artikel standardmäßig immer die Kommentare (definiert als comments) mitgeladen werden?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: protected $with = ['comments'];
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie die Tabelle im Model festlegen, wenn Sie nicht die Konvention einhalten?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: protected $table = 'tablename';
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wann rufen Sie eine Beziehung als Methode und wann als dynamische Eigenschaft auf? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Wenn ich Methoden an die Query anhänge, rufe ich die Beziehung als dynamische Eigenschaft auf.
            </li>
            <li class="">
            Wenn ich keine Methoden an die Query anhänge, rufe ich die Beziehung als Methode auf.
            </li>
            <li class="true">
            Wenn ich keine Methoden an die Query anhänge, rufe ich die Beziehung als dynamische Eigenschaft auf.
            </li>
            <li class="true">
            Wenn ich Methoden an die Query anhänge, rufe ich die Beziehung als Methode auf.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist Eloquent? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Eloquent ist ein Konzept, um Daten in kleinen Textdateien zu speichern.
            </li>
            <li class="">
            Eloquent ist eine Datenbank.
            </li>
            <li class="true">
            Eloquent ist ein Konzept zum Abbilden von Objekten in relationalen Datenbanken.
            </li>
            <li class="true">
            Eloquent ist ein ORM (object relational mapper).
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Aussagen über Tinker sind wahr? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Tinker erlaubt den Zugriff auf Eloquent-Beziehungen.
            </li>
            <li class="true">
            Tinker ermöglicht es, Code in der Applikation auszuführen.
            </li>
            <li class="true">
            Tinker ermöglicht die Interaktion mit der gesamten Laravel-Applikation.
            </li>
            <li class="true">
            Tinker ist ein Kommandozeilentool.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Es soll eine neue Collection mit dem Namen $book_titles, welche nur die Titel der Bücher enthält, erstellt werden. Diese Titel sollen alphabetisch absteigend sortiert sein. Außerdem soll die Collection nach dem Sortieren neu indexiert werden.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <pre>
            $books = collect(
            ['title' =&gt; 'Don Carlos', 'price' =&gt; '20', 'author' =&gt; 'Friedrich Schiller'],
            ['title' =&gt; 'Robinson Crusoe', 'price' =&gt; '30', 'author' =&gt; 'Daniel Defoe'],
            ['title' =&gt; 'Nathan der Weise', 'price' =&gt; '10', 'author' =&gt; 'Gotthold Ephraim Lessing'],
            ['title' =&gt; 'Oliver Twist', 'price' =&gt; '15', 'author' =&gt; 'Charles Dickens'],
            ['title' =&gt; 'Sofies Welt', 'price' =&gt; '25', 'author' =&gt; 'Jostein Gaarder'],
            ['title' =&gt; 'Eine kurze Geschichte der Zeit', 'price' =&gt; '40', 'author' =&gt; 'Stephen Hawking'],
            ['title' =&gt; 'American Psycho', 'price' =&gt; '19', 'author' =&gt; 'Bret Easton Ellis'],
            ['title' =&gt; 'Die Blechtrommel', 'price' =&gt; '27', 'author' =&gt; 'Günter Grass'],
            ['title' =&gt; 'Die Physiker', 'price' =&gt; '8', 'author' =&gt; 'Friedrich Dürrenmatt'],
            ['title' =&gt; 'Buddenbrooks', 'price' =&gt; '47', 'author' =&gt; 'Thomas Mann']
            );
            </pre>
            $book_titles= $books->pluck('title')->sortDesc()->values();
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie können Sie die Methode abbreviate() zu den Collection-Methoden hinzufügen? Füllen Sie anschließend die Methode so aus, dass alle Vögel nach dem fünften Zeichen abgekürzt werden.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <pre>
                use Illuminate\Support\Collection;
                use Illuminate\Support\Str;
                $birds = collect([
                    'Amsel','Bachstelze', 'Blaumeise',
                    'Buchfink', 'Buntspecht', 'Dohle',
                    'Eichelhäher', 'Elster', 'Feldsperling',
                    'Fitis', 'Gimpel'
                    ]);
                Collection::macro('abbreviate', function ($limit) {
                    return $this-&gt;map(function ($value) use($limit){
                        return Str::limit($value, $limit);
                    });
                    });
                //kürze alle Vögel nach dem fünften Zeichen ab.
                $abbreviated_birds = $birds-&gt;abbreviate(5)
            </pre>

            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Warum verwenden wir in den Formularen den Blade Shotcut @csrf ?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Mittels des CSRF Shortcuts kann Laravel über einen Hashwert herausfinden, ob wir es sind, die die Anfrage senden.
            </li>
            <li class="">
            Der CSRF Shortcut dient der Validierung der Nutzereingaben.
            </li>
            <li class="">
            Mittels des CSRF Token kann Laravel ähnlich wie Google Analytics das Nutzerverhalten in Bezug auf das Formular analysieren.
            </li>
            <li class="">
            Der CSRF Shortcut teilt Laravel mit, dass wir die HTTP-Methoden PUT und PATCH anstatt von POST verwenden wollen.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wozu dient die message-Methode, wenn Sie eine eigene Validierungsregel erstellt haben?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Es wird die Fehlermeldung definiert, die beim Scheitern der Validierungsregeln zurückgegeben wird.
            </li>
            <li class="">
            Es lässt sich eine Nachricht definieren, die vor der eigentlichen Validierung angezeigt wird.
            </li>
            <li class="">
            Es lässt sich eine Nachricht definieren, die bei erfolgreicher Validierung in die Logs geschrieben wird.
            </li>
            <li class="">
            Die Validierung kann eine Nachricht des Nutzers erhalten, um diese bei der Validierung zu berücksichtigen.
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Validieren Sie den Titel 'title' der Anfrage. Es soll eine notwendige String mit maximal 30 Zeichen sein. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            $request->validate([ 'title' => 'required|string|max:30' ]);
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>In welcher Methode definieren Sie die Validierungsregeln in einer erstellten Form-Request-Klasse?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            messages()
            </li>
            <li class="">
            authorize()
            </li>
            <li class="true">
            rules()
            </li>
            <li class="">
            __construct()
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Warum verwendet man für das sichere Speichern von Passwörtern Hashing?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Weil Bcrypt beim Hashing sehr langsam ist.
            </li>
            <li class="true">
            Weil ein Hash nicht wieder in seinen ursprünglichen Textzustand zurückversetzt werden kann. Man kann lediglich prüfen, ob zwei Hashes gleich sind.
            </li>
            <li class="true">
            Weil die Zeit zum Generieren des Hashs mit steigender Rechenleistung verringert werden kann.
            </li>
            <li class="">
            Weil man das Passwort dann wieder entschlüsseln kann, um es beim Anmelden zu vergleichen.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie schützt sich Laravel gegen SQL Injections?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            gar nicht.
            </li>
            <li class="">
            mit einem Verschlüsselungsalgorithmus, der die Parameter jeder Anfrage mehrfach verschlüsselt.
            </li>
            <li class="">
            mit dem CSRF Token.
            </li>
            <li class="true">
            mit Parameter Binding, das vom Query Builder verwendet wird.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie kannst du eine Factory erstellen und dabei zeitgleich das zu verwendende Model definieren?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            php artisan make:factory -m User UserFactory
            </li>
            <li class="true">
            php artisan make:factory --model=User UserFactory
            </li>
            <li class="">
            php artisan make:factory UserFactory
            </li>
            <li class="">
            php artisan make:factory -m=User UserFactory
            </li>
            <li class="true">
            php artisan make:model User -f
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Rufe die Article Factory auf und erstelle 10 Instanzen in der Datenbank, ohne die make-Methode zu verwenden.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            <pre>
            &lt;?php
                use Faker\Generator as Faker;

                $factory-&gt;define(App\Article::class, function (Faker $faker) {
                return [
                //
                'title' =&gt; $faker-&gt;word,
                'text' =&gt; $faker-&gt;sentence,
                ];
                });
            </pre>
            Antwort: <br>
            factory(App\Article::class, 10)->create();
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Prüfe, ob es in der Session einen Key 'name' mit zugeordnetem Wert gibt. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: <br>
            session()->has('name');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Speichere den Namen $name = 'anonym'; mit dem Key 'name' mittels der Helper-Funktion in der Session.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: <br>
            session(['name' => $name]);
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Erhalte die Daten mit dem Key 'name' über die Request aus der Session. Ist kein Wert vorhanden, soll "Lorem Ipsum" als Fallback verwendet werden.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: <br>
            $request->session()->get('name', "Lorem Ipsum");
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Session Driver gibt es? Kreuze die vorhandenen an.</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            database Driver
            </li>
            <li class="true">
            cookie Driver
            </li>
            <li class="true">
            file Drive
            </li>
            <li class="true">
            redis Driver
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Die Schreibweise deleteSelectedFile() bezeichnet man als …</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Pascal Case
            </li>
            <li class="">
            Kebab Case
            </li>
            <li class="">
            Snake Case
            </li>
            <li class="true">
            Camel Case
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Warum verwendet man die MVC-Architektur?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Die MVC-Architektur verleiht dem Code mehr Struktur.
            </li>
            <li class="true">
            Die Models und Views können separat voneinander bearbeitet werden, da diese nicht direkt voneinander abhängig sind.
            </li>
            <li class="true">
            Das Prinzip der Separation of Concerns (auf Deutsch »Trennung der Zuständigkeiten«) wird umgesetzt.
            </li>
            <li class="true">
            Die Rollenverteilung im Team wird einfacher.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wofür steht CRUD im Kontext von Controller Resources und APIs? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Create Resource Under Defined
            </li>
            <li class="">
            Connect Reconnect Update Drop
            </li>
            <li class="true">
            Create Read Update Delete
            </li>
            <li class="">
            Connect Resource Update Definition
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Die Schreibweise UserController bezeichnet man als …</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Pascal Case
            </li>
            <li class="">
            Snake Case
            </li>
            <li class="">
            Camel Case
            </li>
            <li class="">
            Kebab Case
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Die Domain einer Laravel-Applikation lautet routinglaravel.test. Der angezeigte Code zeigt eine voll funktionsfähige Route. Welche der folgenden URL bzw. URLs kann diese Route handhaben? </legend>
        <div>
            <pre>
            &lt;?php

                Route::get('user/{id?}', function ($id = null) {
                if ($id) {
                return $id;
                }
                return 'Keine ID';
                });
            </pre>
        <ul class="fragen">
            <li class="true">
            http://routinglaravel.test/user/
            </li>
            <li class="true">
            http://routinglaravel.test/user/1
            </li>
            <li class="true">
            http://routinglaravel.test/user/eins
            </li>
            <li class="">
            http://routinglaravel.test/user/1/eins
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie verlassen Sie die Vagrant Box, wenn Sie bereits mit ihr verbunden sind?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            exit
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Die View …</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            repräsentiert die Benutzeroberfläche.
            </li>
            <li class="">
            repräsentiert die Schnittstelle zwischen Datenverwaltung und Benutzeroberfläche.
            </li>
            <li class="">
            repräsentiert die Datenverwaltung.
            </li>
            <li class="">
            repräsentiert das Request Handling.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was müssen Sie beachten, wenn Sie Tabellenspalten bearbeiten und oder löschen wollen? Markieren Sie die zutreffenden Aussagen. </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Ich muss die Bibliothek doctrine/dbal via Composer zu meinem Laravel-Projekt hinzufügen.
            </li>
            <li class="">
            Ich muss in der Datenbank ein Data Abstraction Layer installieren.
            </li>
            <li class="true">
            Ich sollte eine neue Migration erstellen und mit der Methode table der Facade Schema auf die vorhandene Tabelle zugreifen.
            </li>
            <li class="">
            Ich muss ein neues Model erstellen, da vorhandene Spalten sich nicht verändern lassen.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Route enthält die korrekte Implementierung der Controller Actions index als Callback?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Route::get('/user', 'UserController(index)');
            </li>
            <li class="true">
            Route::get('/user', 'UserController@index');
            </li>
            <li class="">
            Route::get('/user', 'UserController->index');
            </li>
            <li class="">
            Route::get('/user', 'index from UserController');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Aussagen über PHP Artisan sind korrekt?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Artisan bietet die Möglichkeit, eigene Befehle zu schreiben.
            </li>
            <li class="true">
            Artisan macht die Nutzung vorkonfigurierter Befehle möglich.
            </li>
            <li class="true">
            Artisan ist in Laravel integriert.
            </li>
            <li class="true">
            Artisan ist eine Schnittstelle der Kommandozeile.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie bringen Sie eine Laravel-Webanwendung mit einem Artisan Command in den Wartungsmodus?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            php artisan down
            </li>
            <li class="">
            php artisan app:down
            </li>
            <li class="">
            php artisan maintenance
            </li>
            <li class="">
            php artisan app:maintenance
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Es werden mit einem Formular folgende Werte an den Controller übertragen: gender, age, country, languages. Welcher der Codeschnipsel erlaubt Zugriff auf die Parameter gender und age?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            $request-&gt;except(['gender','age']);
            </li>
            <li class="true">
            $request-&gt;all(); 
            </li>
            <li class="true">
            $request-&gt;input();  
            </li>
            <li class="true">
            $request-&gt;only(['gender', 'age']);
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist notwendig, um Laravel an eine Datenbank anzubinden?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            ein Fallback-Wert in der Datei config/database.php.
            </li>
            <li class="true">
            eine vorhandene Datenbank.
            </li>
            <li class="true">
            die Konfiguration der Datenbankzugangsdaten mittels der Environment Variables (Umgebungsvariablen) in der .env oder direkt in der Datei config/database.php.
            </li>
            <li class="true">
            der Datenbanktyp.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Eine View</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            kann sich aus mehreren Views zusammensetzen.
            </li>
            <li class="true">
            ist der für den Nutzer sichtbare Teil.
            </li>
            <li class="true">
            trennt die Logik der Applikation von der optischen Oberfläche.
            </li>
            <li class="true">
            kann mit normalem HTML gefüllt werden.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Geben Sie das Verzeichnis an, in dem die Middlewares gespeichert werden, wenn Sie sie mit Artisan erstellen. Im Beispiel wurde die Middleware CheckAge erstellt. Beachten Sie bitte, dass die Antwort case-sensitive ist. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: app/ Http/middleware/CheckAge.php
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Geben Sie den Befehl ein, mit dem Sie mit Artisan die Middleware »GenerateThumbnail« erstellen?</legend>
        <div>
        <ul class="fragen">
            <li class="">
                <p>Antwort:</p>
                <p>php artisan make:middleware GenerateThumbnail</p>
            
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie geben Sie im Routing der Middleware CheckAge mit dem Key check.age den Parameter $age weiter? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: ->middleware( 'check.age:age' );
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Es sei eine Middleware CheckAge im Ordner app/Http/Middleware. Registrieren Sie diese als Route Middleware im Kernel mit dem Key check.age. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: protected $routeMiddleware = [ 'check.age' => \App\Http\Middleware\CheckAge::class , ];
                du wolltest mini php framework aufziehen und über MVC was erzehlen, bist du schon bereit? ich da Interesse drauf
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Loggen Sie die Nachricht 'ein kritischer Fehler ist aufgetreten' im Standard-Log-Channel mithilfe der Helper-Funktion. Das Log Level des Fehlers ist 'critical'. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: logger()->critical('ein kritischer Fehler ist aufgetreten');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Loggen Sie die Nachricht 'ein Fehler ist aufgetreten' im Channel single mithilfe der Log Facade. Dieser ist nicht der Standard-Log-Channel. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: Log::channel('single')->notice ('ein Fehler ist aufgetreten');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Warum wird das Passwort als Hash gespeichert?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            Der Hash wird nur verwendet, da ein vom Nutzer gewähltes, kurzes Passwort dadurch länger wird und dadurch sicherer aussieht.
            </li>
            <li class="true">
            Da sich der Hash nicht mehr in das ursprüngliche Passwort zurück entschlüsseln lässt.
            </li>
            <li class="true">
            Damit das Passwort nicht in reiner Textform in der Datenbank gespeichert wird.
            </li>
            <li class="">
            Da das Passwort verschlüsselt wird und sich einfach wieder entschlüsseln lässt.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie funktioniert der Anmeldevorgang mit dem offiziellen OAuth-Package Socialite? Definieren Sie die korrekte Reihenfolge der Schritte. Verwenden sie hierfür die Zahlen 1 bis 6. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            1| Der Nutzer wählt in der Laravel Class die Option um sich mit einem externen Provider anzumelden. 
            </li>
            <li class="">
            2| Die Laravel-Applikation leitet zum gewählten Provider weiter. 
            </li>
            <li class="">
            3| Aufgrund übermittelter Daten wie der Client_Id kann der Provider die Laravel-Applikation identifizieren. 
            </li>
            <li class="">
            4| Der Nutzer meldet sich mit seinen vorhandenen Anmeldedaten an. 
            </li>
            <li class="">
            5| Der Nutzer stimmt dem Datenaustausch zwischen Laravel-Applikation und Provider zu. 
            </li>
            <li class="">
            6| Der Provider leitet an die beim Provider definierte Callback URL weiter und übermittelt dabei die Daten der beim Provider angemeldeten Person. 
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Markieren Sie die Codeschnipsel als richtig, mit denen die Nutzer ID erfolgreich in der Variable $id gespeichert wird. </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            $id = auth()-&gt;user()-&gt;id;
            </li>
            <li class="true">
            $id = Illuminate\Support\Facades\Auth::user()-&gt;id;
            </li>
            <li class="true">
            $id = request()-&gt;user()-&gt;id;
            </li>
            <li class="true">
            //controller
                use Illuminate\Http\Request;
                ...
                function store(Request $request)
                {
                $id = $request-&gt;user()-&gt;id;
                }
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Ändern Sie die Route, zu der der Nutzer weitergeleitet wird, wenn er ohne angemeldet zu sein versucht, eine durch die Middleware auth gesicherte Route zu besuchen, auf login-first. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            namespace App\Http\Middleware; use Illuminate\Auth\Middleware\Authenticate as Middleware; class Authenticate extends Middleware { /** * Get the path the user should be redirected to when they are not authenticated. * * @param \Illuminate\Http\Request $request * @return string|null */ protected function redirectTo($request) { return route('login-first'); } }
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Mit welchem Helper kann auf den Pfad storage/ zugegriffen werden? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            storage()
            </li>
            <li class="">
            public('storage')
            </li>
            <li class="">
            public_path('storage')
            </li>
            <li class="true">
            storage_path()
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Hängen Sie den Kontoauszug $statement an die Mail an. Der Kontoauszug ist in der Disk bank gespeichert. In der Variable $statement ist der Pfad des Kontoauszugs ausgehend vom Root-Pfad der Disk gespeichert. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Antwort: <br>
            return $this->markdown('emails.statement') -> attachFromStorageDisk('bank', $statement);
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Markieren Sie die gewählte Benachrichtigung als gelesen.</legend>
        <div>
        <ul class="fragen">
            <li class="">
            $notification = $user->unreadNotifications->first(); <br>
            $notification ->markAsRead();
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Der Job soll mit dem dispatch Helper in der Queue mit dem Namen 'urgent' ausgeführt werden. Vervollständigen Sie den Code. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            dispatch(function () { Log::info('urgent log'); }) ->onQueue('urgent');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Der Beispielcode wird ausgeführt. Es taucht jedoch keine Nachricht in Ihren Logs auf. Was könnte die Ursache dafür sein? </legend>
        <div>
            <pre>
            &lt?php
            dispatch(function () {
                Log::info('Info Log');
            });
            </pre>
        <ul class="fragen">
            <li class="true">
            Es ist kein Worker gestartet.
            </li>
            <li class="true">
            Es ist kein Worker für die Connection default gestartet.
            </li>
            <li class="true">
            Das Log Level ist für den default-Logger zu niedrig.
            </li>
            <li class="true">
            Der Worker arbeitet nicht die Queue default ab.
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche Events eines Eloquent-Model treten in seinem Life Cycle auf, wenn eine Modelinstanz erstmalig in der Datenbank gespeichert wurde? </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            saved
            </li>
            <li class="true">
            created
            </li>
            <li class="true">
            saving
            </li>
            <li class="true">
            creating
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Lassen Sie sich alle registrierten Events samt den zugehörigen Event Listenern mithilfe von Artisan anzeigen. Vervollständigen Sie dafür die Terminaleingabe. </legend>
        <div>
        <ul class="fragen">
            <li class="">
            php artisan event:list
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche HTTP-Methoden müssen wir mit dem Blade Shortcut @method angeben, da diese nicht von HTML unterstüzt werden?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            PUT
            </li>
            <li class="true">
            PATCH
            </li>
            <li class="">
            GET
            </li>
            <li class="">
            POST
            </li>
            <li class="true">
            DELETE
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie wird eine Migration erstellt und was ist bezüglich der Konventionen zu beachten? Markieren Sie die korrekten Aussagen. </legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Ich kann beim Erstellen der Migration mit dem Flag --path angeben, wo meine Migration gespeichert wird.
            </li>
            <li class="true">
            Ich kann sämtliche Flags weglassen, wenn ich die Namenskonventionen von Laravel einhalte.
            </li>
            <li class="">
            Ich muss das Flag --create oder --table angeben, um festzulegen, ob eine neue Tabelle erstellt oder eine vorhandene verwendet werden soll.
            </li>
            <li class="true">
            Ich erstelle eine Migration mit einem Artisan Command.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Wie kannst du eine Factory erstellen und dabei zeitgleich das zu verwendende Model definieren?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            php artisan make:factory --model=User UserFactory
            </li>
            <li class="">
            php artisan make:factory UserFactory
            </li>
            <li class="">
            php artisan make:factory -m=User UserFactory
            </li>
            <li class="true">
            php artisan make:factory -m User UserFactory
            </li>
            <li class="true">
            php artisan make:model User -f
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welche HTTP-Statuscodes zeigen Ihnen, dass ein Fehler aufgetreten ist? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            2xx
            </li>
            <li class="">
            3xx
            </li>
            <li class="true">
            5xx
            </li>
            <li class="">
            1xx
            </li>
            <li class="true">
            4xx
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welcher bzw. welche Codeauschnitte entsprechen dem korrekten Aufbau einer Weiterleitung?</legend>
        <div>
        <ul class="fragen">
            <li class="true">
            Route::redirect('/von', '/nach', statuscode);
            </li>
            <li class="">
            Route::redirect('/von', statuscode '/nach');
            </li>
            <li class="">
            Route::redirect(statuscode, '/nach', '/von');
            </li>
            <li class="true">
            Route::redirect('/von', '/nach');
            </li>
            <li class="">
            Route::redirect('/nach', '/von');
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Was ist Eloquent? </legend>
        <div>
        <ul class="fragen">
            <li class="">
            Eloquent ist ein Konzept, um Daten in kleinen Textdateien zu speichern.
            </li>
            <li class="true">
            Eloquent ist ein Konzept zum Abbilden von Objekten in relationalen Datenbanken.
            </li>
            <li class="true">
            Eloquent ist ein ORM (object relational mapper).
            </li>
            <li class="">
            Eloquent ist eine Datenbank.
            </li>

        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Welcher Befehl wird genutzt, um eine Vagrant Box hinzufügen?</legend>
        <div>
        <ul class="fragen">
            <li class="">
            vagrant box attach
            </li>
            <li class="true">
            vagrant box add
            </li>
            <li class="">
            vagrant box append
            </li>
            <li class="">
            vagrant box define
            </li>
            <li class="">
            vagrant box create
            </li>
        </ul>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>