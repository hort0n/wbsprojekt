<?php
    $title = "JavaScript";
    require_once "header.php";

    Navigation::ShowAll();
?>

    <h3>JavaScript</h3>
    <!-- Variablen -->
    <fieldset>
        <legend>Variablen</legend>
        <div>
            <pre>
                // Kommentar
                /*
                    Kommentar
                */
                var a = "5";
                var b = 12;
                // string + verketung
                alert(a+b);
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- Steurelemente -->
    <fieldset>
        <legend>Steurelemente</legend>
        <div>
            <pre>
                //Ein steurelement raussuchen
                var textfeld1 = <b>document.getElementById("zahl1");</b>
                oder
                var textfeld1 = <b>document.querySelector("zahl1");</b>
                var zahl1 = textfeld1.value;
            
                var zahl2 = document.getElementById("zahl2").value;
                // Zeichenkette in eine Zahl umwandeln
                var z1 = parseInt(zahl1);
                var zahl2 = parseInt(document.getElementById("zahl2").value);
                ------------------
                &lt;input type="button" id="add" value="Addieren" onclick="berechne('+');">
                &lt;input type="button" id="sub" value="Substragieren" onclick="berechne('-');">
                &lt;input type="button" id="multi" value="Multiplezieren" onclick="berechne('*');">
                &lt;input type="button" id="div" value="Dividiren" onclick="berechne('/');">
                function berechne(operation){
                    var z1 = document.getElementById("zahl1");
                    var z2 = document.getElementById("zahl2");
                    if(z1 === "" ){
                        alert("Feld darf nicht leer sein!");
                    }else{
                        var zahl1 = parseInt(z1.value);
                        var zahl2 = parseInt(z2.value);
                        switch (operation){
                            case '+': alert(zahl1 + zahl2); break;
                            case '-': alert(zahl1 - zahl2); break;
                            case '*': alert(zahl1 * zahl2); break;
                            case '/': alert(zahl1 / zahl2); break;
                        }
                    }
                }
                -----------------
                var quader = document.getElementById("quader");
                quader.innerHTML="Hallo JavaScript";
                quader.setAttribute("style","background-color: red;");
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- Operatoren -->
    <fieldset>
        <legend>Operatoren</legend>
        <div>
            <pre>
                // Incrementoperator
                    var x = 0;
                    x = x + 1;
                    //x++   x wird zuerst ausgegeben und DANN erst erhöt
                    //++x   x wird zuerst erhöt und DANN ausgegeben
                // Decrementoperator
                //x--   x wird zuerst ausgegeben und DANN erst veringert
                //--x   x wird zuerst veringert und DANN ausgegeben
                // Zuweisungsoperatoren
                /*
                =   Wertzuweisung
                +=  Addition und directe zuweisung
                -=
                /=
                %=
                */
                ------------------
                var a = 5;
                var typ = typeof a;
                alert(typ);
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- Verzweigungen -->
    <fieldset>
        <legend>Verzweigungen</legend>
        <div>
            <pre>
                ==  ist gleich
                !=  ist nicht gleich
                &lt;   ist kleiner als
                >   ist grösser als
                &lt;=  ist kleiner ODER gleich
                =>  ist grösser ODER gleich
                ------------------
                var tim = 17;
                var tom = 10;
                if(tim > tom){
                    alert("Tim ist älter!");
                }else if(tim &lt; tom){
                    alert("Tim ist jünger!");
                }else{
                    alert("Tom und Tom sind gleich alt!");
                }
                ------------------
                switch (tim){
                    case 16:
                        alert("Tim darf Bier trinken!");
                        break;
                    case 18:
                        alert("Tim ist volljährig");
                        break;
                    default:
                        alert("Tim hat kein spezieelles Alters erreicht");
                }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- Math random -->
    <fieldset>
        <legend>Math random</legend>
        <div>
            <pre>
                var zahl = Math.floor( 1 + Math.random() * 15);
                // Math.random -> 0 ... 1
                // Math.random*49 -> 0 ... 48
                // 1+Math.random*49 -> 1 ... 49
            
                // Eine Zufallszahl generieren:
                var zahl = Math.floor(1 + Math.random() * 49);
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- Schleifen -->
    <fieldset>
        <legend>Schleifen</legend>
        <div>
            <pre>
                //Zählschleife
                    for(var i = 1; i &lt;= 10; i++){   //i+=4
                        ausgabe.innerHTML += (4 * i) + "&ltbr>";
                    }
                //einfache, kopfgesteuerte schleife
                    var i = 0;
                    while( i &lt;= 10 ){
                        ausgabe.innerHTML += (3 * i) + "&lt;br>";
                        i++;
                    }
                // fußgesteuerte schleife
                i = 0;
                do{
                    ausgabe.innerHTML += (3 * i) + "&lt;br>";
                    i++;
                }while( i &lt; 10 );
                ------------------
                ausgabe.innerHTML = "";
                for (var i =1;i &lt;=20;i++) {
                    if(i == 5){
                        //Aktuellen Durchlauf abbrechen, mit dem nächsten Durchlauf weitermachen
                        continue;
                    }
                    ausgabe.innerHTML += i + "&lt;br>";
                    if(i==11){
                        // Schleife komplett abbrechen
                        break;
                    }
                }
                //foreach
                let arr = [1, 2, 3, 4, 5];
                let sum = 0;
                //elem, index, arr
                arr.forEach(function(elem) {
                    sum += elem;
                });
                console.log(sum);

                var txt = "";
                var numbers = [45, 4, 9, 16, 25];
                numbers.forEach(myFunction);

                function myFunction(value, index, array) {
                txt = txt + value + "&lt;br>"; 
                }
                ---------------------
                arr.forEach(element => console.log(element));

                ----------------------
                var divs = Array.prototype.slice.call(document.querySelectorAll("div"), 0);
                console.log(divs);

            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- Arrays -->
    <fieldset>
        <legend>Arrays</legend>
        <div>
            <h3>Преобразование массива в строку</h3>
        </div>
        <div class="sticker-left sticker-info stiker-hidden" data-sticker="toString()">

        <p>метод toString() преобразует массив в строку из значений элементов массива, разделенных запятыми.</p>
        <p>В результате будет выведена строка "Банан, Апельсин, Яблоко, Манго".</p>
        <pre><code>            
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            document.getElementById("demo").innerHTML = fruits.toString(); 
        </code></pre>
        </div>

        <div class="sticker-left sticker-info" data-sticker="join()">
        <p>Метод join() также объединяет все элементы массива в одну строку. Он действует как метод toString(), но при этом позволяет указать разделитель:</p>
        <p>В результате будет выведена строка "Банан * Апельсин * Яблоко * Манго".</p>
        <pre><code>            
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            document.getElementById("demo").innerHTML = fruits.join(" * ");
        </code></pre>
        </div>
        <div>
            <h3>Удаление и добавление элементов</h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="pop()">
        <p>Метод pop() удаляет последний элемент массива:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            fruits.pop(); // удаляет последний элемент ("Манго") массива fruits 
        </code></pre>
        <p>При этом метод pop() возвращает значение удаленного элемента:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            var x = fruits.pop(); // в переменной x будет строка "Манго"
        </code></pre>
        </div>
        <div class="sticker-left sticker-info" data-sticker="push()">
            <p>Метод push() добавляет новый элемент в конец массива:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            fruits.push("Киви"); // добавляет новый элемент ("Киви") в конец массива fruits 
        </code></pre>
        <p>При этом метод push() возвращает новую длину массива:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            var x =  fruits.push("Киви"); // в переменной x будет 5 
        </code></pre>
        </div>
        <div class="sticker-left sticker-info" data-sticker="shift()">
        <p>Метод shift() удаляет первый элемент массива и сдвигает оставшиеся элементы к меньшим индексам:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            fruits.shift();            // удаляет первый элемент "Банан" из массива fruits 
        </code></pre>
        <p>При этом метод shift() возвращает значение удаленного элемента:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            var x = fruits.shift();      // в переменной x будет строка "Банан"
        </code></pre>
        </div>
        <div class="sticker-left sticker-info" data-sticker="unshift()">
        <p>Метод unshift() добавляет новый элемент в начало массива и передвигает другие элементы:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            fruits.unshift("Лимон");    // добавляет новый элемент "Лимон" в массив fruits     
        </code></pre>
        <p>При этом метод unshift() возвращает новую длину массива:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            var x =  fruits.unshift("Лимон");   // в переменной x будет 5 
        </code></pre>
        </div>
        <div>
            <h3>Изменение значений элементов</h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="length">
            <p>Доступ к значениям элементов массива осуществляется по номеру индекса элемента. Нумерация индексов начинается с 0. Индекс первого элемента массива [0], второго - [1], третьего - [2] и т. д.</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            fruits[0] = "Киви";        // изменит значение первого элемента массива fruits на "Киви"
        </code></pre>
        <p>Свойство length позволяет легко добавлять новые элементы в конец массива:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            fruits[fruits.length] = "Киви";          // добавляет новый элемент в массив fruit
        </code></pre>
        </div>
        <div>
            <h3>Стирание элементов</h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="delete">
            <p>В связи с тем, что массивы в JavaScript являются объектами, существует еще один способ удаления элементов массива — при помощи оператора delete:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            delete fruits[0];           // значение первого элемента массива fruits изменится на undefined 
        </code></pre>
        <p>Внимание! Использование оператора delete может оставить в массиве неучитываемые "дыры" из значений undefined. Для удаления элементов массива лучше использовать метод pop() или shift().</p>
        </div>
        <div>
            <h3>Добавление группы элементов</h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="splice()">
            <p>Метод splice() используется для добавления в массив группы новых элементов:</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            fruits.splice(2, 0, "Лимон", "Киви"); 
        </code></pre>
        <p>Первый параметр (2) определяет позицию, куда вставляются новые элементы.</p>
        <p>Второй параметр (0) определяет, сколько элементов должно быть удалено.</p>
        <p>Остальные параметры ("Лимон" , "Киви") определяют вставляемые элементы.</p>
        <p>Метод splice() также можно использовать для удаления элементов из массива. Делает он это безопасно и чисто, не оставляя в массиве "дыр":</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Яблоко", "Манго"];
            fruits.splice(0, 1);        // удаляет первый элемент массива fruits 
        </code></pre>
        <p>Первый параметр (0) определяет позицию, куда вставляются новые элементы.</p>
        <p>Второй параметр (1) определяет, сколько элементов должно быть удалено.</p>
        <p>Остальные параметры не заданы. Новые элементы не вставляются.</p>
        </div>
        <!-- new Item -->
        <div>
            <h3>Слияние массивов</h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="concat()">
        <p>Метод concat() создает новый массив путем слияния (объединения) существующих массивов.</p>
        <pre><code>
            var myGirls = ["Cecilie", "Lone"];
            var myBoys = ["Emil", "Tobias", "Linus"];
            var myChildren = myGirls.concat(myBoys);  // Слияние массивов myGirls и myBoys 
        </code></pre>
        <p>Метод concat() не изменяет существующие массивы. Он создает новый массив.</p>
        <p>Метод concat() в параметрах может принимать любое число массивов.</p>
        <p>Пример (Слияние трех массивов):</p>
        <pre><code>
            var arr1 = ["Cecilie", "Lone"];
            var arr2 = ["Emil", "Tobias", "Linus"];
            var arr3 = ["Robin", "Morgan"];
            var myChildren = arr1.concat(arr2, arr3);     // Массив arr1 объединяется с arr2 и arr3 
        </code></pre>
        <p>В качестве параметров метод concat() может принимать как переменные, так и значения.</p>
        <p>Пример (Слияние массива со значением):</p>
        <pre><code>
            var arr1 = ["Cecilie", "Lone"];
            var myChildren = arr1.concat(["Emil", "Tobias", "Linus"]);    
        </code></pre>
        </div>
        <!-- end Item -->
        <!-- new Item -->
        <div>
            <h3>Извлечение части массива</h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="slice()">
        <p>Метод slice() позволяет извлечь (вырезать) часть массива в новый массив.</p>
        <p>В следующем примере извлекается часть массив, начиная с элемента с индексом 1 ("Апельсин"):</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Лимон", "Яблоко", "Манго"];
            var citrus = fruits.slice(1); 
        </code></pre>
        <p>Метод slice() принимает два параметра. Например, slice(1, 3). В этом случае метод slice() выбирает элементы, начиная с элемента с индексом, указанным в первом параметре, и заканчивая (но не включая) элементом с индексом, указанным во втором параметре. Если второй параметр не задан, то извлекаются все элементы до конца массива.</p>
        </div>
        <!-- end Item -->
        <!-- new Item -->
        <div>
            <h3>Автоматическое применение toString()</h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="toString()">
            <p>Если элементами массива являются примитивные значения, то JavaScript автоматически преобразует массив в строку из разделенных запятыми значений его элементов.
            Это всегда происходит при попытке вывода массива.Следующие два примера дадут одинаковые результаты:</p>
        <p>Пример 1</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Лимон", "Яблоко", "Манго"];
            document.getElementById("demo").innerHTML = fruits.toString(); 
        </code></pre>
        <p>Пример 2</p>
        <pre><code>
            var fruits = ["Банан", "Апельсин", "Лимон", "Яблоко", "Манго"];
            document.getElementById("demo").innerHTML = fruits; 
        </code></pre>
        </div>
        <!-- end Item -->
        <!-- new Item -->
        <div>
            <h3></h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="diverse info">
        <pre><code>
        var ausgabe = document.getElementById("ausgabe");
                var temperatur = new Array(18, "Horst", 15);
                /*
                temperatur[0] = 18;
                temperatur[1] = 25;
                temperatur[2] = 15;
                var ausgabe = "";
                for(var i = 0; i &lt;= 2; i++){
                    ausgabe += temperatur[i] + " ";
                } */
                temperatur.sort();
                ausgabe.innerHTML = temperatur.join("&lt;br>");
                -----------------
                var points = new Array(40, 100); // Создается массив с двумя элементами (40 и 100)
                var points = new Array(40);  // Создается массив с 40 элементами типа undefined!!!!!               
                -----------------
                var liste = new Array();
                liste.push(zahl);
                -----------------
                var listeFarben = new Array("blau", "gelb", "grün", "schwarz", "pink");
                listeFarben.<b>forEach</b>(function(farbe, i, listeFarben) {
                    var neu = new Array();
                    neu.push(farbe);
                });
                oder
                listeFarben.<b>forEach</b>(myFunction);
                myFunction(farbe, i){
                    var neu = new Array();
                    neu.push(farbe);
                }
                --------------------
                Array.forEach():
                
                var fruits, text;
                fruits = ["Banana", "Orange", "Apple", "Mango"];

                text = "&lt;ul>";
                fruits.forEach(myFunction);
                text += "&lt;/ul>";

                function myFunction(value) {
                text += "&lt;li>" + value + "&lt;/li>";
                }
        </code></pre>
        </div>
        <!-- end Item -->
        <!-- new Item -->
        <div>
            <h3></h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="tmp">
        <pre><code>

        </code></pre>
        <pre><code>

        </code></pre>
        </div>
        <!-- end Item -->
        <!-- new Item -->
        <div>
            <h3></h3>
        </div>
        <div class="sticker-left sticker-info" data-sticker="tmp">
        <pre><code>

        </code></pre>
        <pre><code>

        </code></pre>
        </div>
        <!-- end Item -->




    </fieldset>
    <!-- String -->
    <fieldset>
        <legend>String</legend>
        <div>
            <pre>
                var ausgabe = document.getElementById("ausgabe");
                var eingabe = "Hallo Wellt";
                <h3>// Mit charAt kann man auf eine beliebige Stelle eines Strings zugreifen</h3>
                ausgabe.innerHTML += eingabe.charAt(0) + "&lt;br>"; // H
                ausgabe.innerHTML += eingabe.charAt(4) + "&lt;br>"; // o
                ausgabe.innerHTML += eingabe[4] + "&lt;br>"; // o
                <h3>// indexOf gibt die Pos des ersten Vorkommens zurück</h3>
                <h3>Метод indexOf() возвращает индекс (позицию) первого вхождения заданного текста в строке:</h3>
                var str = "Please locate where 'locate' occurs!";
                var pos = str.indexOf("locate");

                ausgabe.innerHTML += eingabe.indexOf("W") + "&lt;br>"; // 6
                ausgabe.innerHTML += eingabe.indexOf("el") + "&lt;br>"; // 7
                ausgabe.innerHTML += eingabe.indexOf(" ") + "&lt;br>"; // 5
                ausgabe.innerHTML += eingabe.indexOf("l") + "&lt;br>"; // 2
                ausgabe.innerHTML += eingabe.indexOf("l", 5) + "&lt;br>"; // 8
                <h3>// lastIndexOf arbeitet wie indexOf, nur sucht es von Ende des Strings bis zum Anfang</h3>
                <h3>Метод lastIndexOf() возвращает индекс последнего вхождения заданного текста в строке:</h3>
                var str = "Please locate where 'locate' occurs!";
                var pos = str.lastIndexOf("locate");
                Если подстрока не найдена, то оба метода, indexOf() и lastIndexOf(), вернут -1. 
                ausgabe.innerHTML += eingabe.lastIndexOf("l") + "&lt;br>"; // 8
                ausgabe.innerHTML += eingabe.substring(6) + "&lt;br>"; // Welt
                ausgabe.innerHTML += "|" + eingabe.substring(0, 5) + "|&lt;br>"; // Hallo
                <h3>// CSV</h3>
                //
                eingabe = "Max;Mustermann;Buchhaltung;1234";
                var daten = eingabe.split(";"); // das Ergebnis ist ein Array
                ausgabe.innerHTML += daten[0] + "&lt;br>";
                ausgabe.innerHTML += daten[1] + "&lt;br>";
                ausgabe.innerHTML += daten[2] + "&lt;br>";
                ausgabe.innerHTML += daten[3] + "&lt;br>";

                <h3>Извлечение части строки</h3>
                Существует три метода, позволяющих извлечь часть строки:
                slice(начало, конец)
                substring(начало, конец)
                substr(начало, длина)
                Метод slice()

                Метод slice() извлекает часть строки и возвращает
                извлеченную часть в новой строке.
                Этот метод принимает 2 параметра: начальный и конечный
                индекс (позицию).
                В следующем примере вырезается часть строки, начиная с позиции 7 и заканчивая позицией 13:
                
                var str = "Apple, Banana, Kiwi";
                var res = str.slice(7, 13);

                Метод substring()

                Метод substring() похож на метод slice(). Разница
                между ними в том, что метод substring() не может
                принимать в качестве параметров отрицательные значения.
                
                var str = "Apple, Banana, Kiwi";
                var res = str.substring(7, 13);

                Метод substr()

                Метод substr() аналогичен методу slice(). Разница
                между ними в том, что вторым параметром в методе substr()
                задается длина извлекаемой подстроки.

                var str = "Apple, Banana, Kiwi";
                var res = str.substr(7, 6);

                <h3>Замена содержимого строки</h3>
                Метод replace() ищет в строке заданную подстроку
                и заменяет ее другим значением:
                Метод replace() не изменяет исходную строку.
                Он возвращает новую строку.
                По умолчанию, метод replace() заменяет первую совпавшую подстроку:

                str = "Посетите Microsoft!";
                var n = str.replace("Microsoft", "MSiter");
                Чтобы заменить подстроку независимо от регистра букв,
                используйте регулярное выражение с флагом /i:
                
                str = "Посетите Microsoft!";
                var n = str.replace(/MICROSOFT/i, "MSiter");

                Обратите внимание, что регулярные выражения записываются без кавычек.
                Чтобы заменить все найденные совпадения,
                используйте регулярное выражение с флагом /g:
                
                str = "Посетите Microsoft и Microsoft!";
                var n = str.replace(/Microsoft/g, "MSiter");

                <h3>Изменение регистра букв</h3>
                Метод toUpperCase() позволяет преобразовать строку в верхний регистр:
                var text1 = "Hello World!";
                var text2 = text1.toUpperCase();
                Метод toLowerCase() позволяет преобразовать строку в нижний регистр:
                var text1 = "Hello World!";
                var text2 = text1.toLowerCase();
                
                <h3>Метод concat()</h3>
                Метод concat() объединяет две и больше строк:
                var text1 = "Hello";
                var text2 = "World";
                var text3 = text1.concat(" ", text2);

                Следует помнить, что все методы строк возвращают новую строку.
                Они никак не изменяют исходную строку. Если говорить формально, строки
                обладают иммунитетом. Они не могут изменяться, их можно только заменить.

                <h3>Извлечение символа из строки</h3>

                Существует 2 безопасных метода для извлечения символа из строки:
                    charAt(позиция)
                    charCodeAt(позиция)

                Метод charAt()
                Метод charAt() возвращает символ строки, расположенный в заданнй позиции:
                var str = "HELLO WORLD";
                str.charAt(0);            // вернет H

                Метод charCodeAt()
                Метод charCodeAt() возвращает код символа строки, расположенного в заданной позиции:
                var str = "HELLO WORLD";
                str.charCodeAt(0);         // вернет 72 
                
                <h3>Преобразование строки в массив</h3>
                При помощи метода split() строку можно преобразовать в массив:
                var txt = "a,b,c,d,e";   // Строка
                txt.split(",");          // Разделение по запятым
                txt.split(" ");          // Разделение по пробелам
                txt.split("|");          // Разделение по вертикальной черте

                Если в качестве разделителя указана пустая строка
                "", то будет возвращен массив, в котором строка разделена посимвольно:
                
                var txt = "Hello";       // Строка
                txt.split("");           // Разделение по символам


            </pre>
        </div>
    </fieldset>
    <!-- Function -->
    <fieldset>
        <legend>Function</legend>
        <div>
            <pre>
                //Parameter -> Variable, die einen Wert akzeptiert,
                 der einer Funktion bei ihrem Aufruf übergeben wird
                function meineFunktion(myText){
                    var ausgabe = "Hallo " + myText;
                    alert(ausgabe);
                }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- DOM -->
    <fieldset>
        <legend>DOM</legend>
        <div>
            <pre>
                function add(){
                    // Document Object Model
                    var liste = document.getElementById("liste");
                   // ein neues Element erstellen
                    var neuesElement = document.createElement("li");
                    neuesElement.innerHTML = "Hallo";
                    liste.appendChild(neuesElement);
                }
                function insert(){
                    var liste = document.getElementById("liste");
                    var neuesElement = document.createElement("li");
                    neuesElement.innerHTML = "Welt!";
                    liste.insertBefore(neuesElement, document.getElementById("content"));
                }
                function move(){
                    listitem = document.getElementById("listitem");
                    //document.getElementById("liste2").appendChild(listitem.cloneNode(true));
                    document.getElementById("liste1").removeChild(listitem);
            
                    // Die Atribute eines Elementes manipulieren
                    document.getElementById("liste1").setAttribute("style", "background: green;");
                }
                // appendChild
                var neuesElement = document.createElement("li");
                neuesElement.innerHTML = "Hallo";
                liste.appendChild(neuesElement);
                // insertBefore
                var liste = document.getElementById("liste");
                var neuesElement = document.createElement("li");
                neuesElement.innerHTML = "Welt!";
                liste.insertBefore(neuesElement, document.getElementById("content"));
                -----------------
                <code class="language-javascript">
                    var table = document.getElementById("table");
                    for ( var i = 1; i &lt;= 10; i++ ) {
                    var tr = document.createElement("tr");
                        for ( var n = 1; n &lt;= 10; n++ ) {
                            var td = document.createElement("td");
                            td.innerHTML += (i * n) + " ";
                            tr.appendChild(td);
                        }
                    table.appendChild(tr);
                    }
                </code>
                -----------------
                // removeChild eines Elementes
                document.getElementById("liste1").removeChild(listitem);
                -----------------
                <h3>// Die Atribute eines Elementes manipulieren</h3>
                document.getElementById("liste1").setAttribute("style", "background: green;");
                var bild = document.getElementById("bild");
                bild.setAttribute("src", "img/bild2.jpg");

                document.getElementById("name").setAttribute("style", "");
                document.getElementById("name").setAttribute("style", "display: none");

                sendbtn.setAttribute("disabled", true);
                document.getElementById("absenden").removeAttribute("disabled");
                ---------------- 
                <h3>В JavaScript для выполнения операций, связанных с атрибутами, имеется 
                    четыре метода:</h3>

                .hasAttribute('имя_атрибута') – проверяет наличие указанного атрибута у 
                элемента. Если проверяемый атрибут есть у элемента, то данный метод возвращает 
                true, в противном случае - false.
                .getAttribute('имя_атрибута') – получает значение атрибута. Если указанного 
                атрибута нет у элемента, то данный метод возвращает пустую строку ("") или 
                null.
                .setAttribute('имя_атрибута', 'значение_атрибута') – устанавливает указанный 
                атрибут с указанным значением элементу. Если указанный атрибут есть у 
                элемента, то данный метод тогда просто изменит ему значение.
                .removeAttribute('имя_атрибута') - удаляет указанный атрибут у элемента.

                -----------------
                var klasse = (zeile.getAttribute("class") != "mark") ? "mark" : "";
                zeile.setAttribute("class", klasse);
                -----------------
                var tr = document.createElement("tr");
                tr.setAttribute("id", id);
                tr.setAttribute("onclick", "toggle("+id+");");

                ----------------
                .boxblue{
                    background-color: blue;
                }
                btn2.addEventListener("click", function(){
                    box.classList.toggle("boxblue");
                });
                classList.add("foo");
                classList.toggle("foo");
                classList.remove("foo");
                // Klasse "foo" durch "bar" ersetzen
                div.classList.replace("foo", "bar");
                ----------------
                Mehrere Elementen ansprechen:
                const toggle = document.querySelectorAll('.spoiler-trigger');
                toggle.forEach($element => {
                $element.onclick = function () {
                    this.nextElementSibling.classList.toggle('hide');
                }
                });





            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- Event -->    
    <fieldset>
        <legend>Event</legend>
        <!-- new Item -->
        <div class="sticker-left sticker-info" data-sticker="onclick()">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <pre><code>
            &lt;button id="btn" onClick="myFunction()">&lt;/button>
            function myFunction(){
            }
            &lt;button id="btn" onclick="myFunction(this.id)">Click&lt;/button>
            function myFunction(id){
                alert(id);
            }
            document.getElementById("btn").onclick = function(){
                myFunction()
            };
            </code></pre>
            <pre><code>
                &lt;button id="1">Button 1</button>
                &lt;button id="2">Button 2</button>
                &lt;button id="3">Button 3</button>

                &lt;script type="text/javascript">
                var reply_click = function()
                {
                    alert("Button clicked, id "+this.id+", text"+this.innerHTML);
                }
                document.getElementById('1').onclick = reply_click;
                document.getElementById('2').onclick = reply_click;
                document.getElementById('3').onclick = reply_click;
                &lt;/script>
            </code></pre>
            <pre><code>
                </code></pre>
        </div>
        </div>
        <!-- end Item -->

        <div>
            <pre>
                Events – Ereignisse – sind der Kern aller interaktiven Anwendungen:
                Das Drücken einer Taste oder der Mausklick.
                var body = document.getElementsByTagName("body")[0];
                var i = 0;
                var ausgabe = document.getElementById("ausgabe");
                /* body.addEventListener("mousemove", function(){
                    i++;
                    ausgabe.innerHTML = i;
                }); */
                /* body.addEventListener("mousemove", function(){
                    ausgabe.innerHTML = "X: " + event.pageX + "&lt;br>";
                    ausgabe.innerHTML += "Y: " + event.pageY + "&lt;br>";
                }); */
                ausgabe.addEventListener("mousemove", function(){
                    ausgabe.innerHTML = "X: " + event.offsetX + "&lt;br>";
                    ausgabe.innerHTML += "Y: " + event.offsetY + "&lt;br>";
                });
                -----------------
                var btn = document.querySelector("#btn");
                btn.onclick = function(){
                    alert("id = " + this.id);
                };
                -----------------
                function ondivclick(){
                    var btn = event.target;
                    alert(btn.innerHTML);
                }
            
                document.getElementById("first").addEventListener("click", ondivclick);
                document.getElementById("second").addEventListener("click", ondivclick);
                document.getElementById("third").addEventListener("click", ondivclick);
                -----------------
                // setTimeout( Funktion, Zeit in ms )
                // window.setTimeout(createTarget, 2000);
                //window.setTimeout(createTarget, 2000);
                //window.setInterval(createTarget, 2000);
                var timer = window.setInterval(timingErreicht, 2000);
                function timingErreicht(){
                    // einen zufor gestellten Timer wieder beenden
                    window.clearInterval(timer);
                    spielfeld.removeChild(event.target);
                }
                -----------------
                var bewegung = window.setInterval(moveTarget, 10);
                function moveTarget(){
                        //Ziel? -> actuellesZiel
                        posX = posX + richtungX;
                        posY = posY + richtungY;
                        if(posX > 750){
                                richtungX = -1;
                        }
                        if(posX < 0){
                                richtungX = 1;
                        }
                        if(posY > 350){
                                richtungY = -1;
                        }
                        if(posY < 0){
                                richtungY = 1;
                        }
                        aktuellesZiel.setAttribute("style", "top: " + posY + "px; left: " + posX + "px;");
                }
                ------------------
                * {
                    margin: 0px;
                    padding: 0px;
                }
            
                #spielfeld {
                    background-color: #eee;
                    width: 800px;
                    height: 400px;
                    margin: 0px auto;
                    position: relative;
                    cursor: crosshair;
                }
            
                .target {
                    background-color: #990000;
                    width: 50px;
                    height: 50px;
                    border-radius: 25px;
            
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color: white;
                    position: absolute;
                    cursor: crosshair;
                }
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <!-- regex -->
    <fieldset>
        <legend>regex</legend>
        <div>
            <pre>
            In JavaScript werden reguläre Ausdrücke zwischen Schrägstrichen notiert:
            var pruefeAufOF = /OF/;
            
            Hier ist OF der regulärer Ausdruck. Es ist ein sogenanntes
            Zeichenliteral und steht für sich selbst. Mit ihm kann man
            testen, ob ein anderer String die Zeichenfolge OF enthält:
            
            var t1 = /OF/.test('OF-C 79');
            
            test() ist eine Regex-Methode. Sie gibt true zurück,
            wenn der ihr übergebene String das durch den Regex
            beschriebene Muster enthält.
            
            .  steht für genau ein beliebiges Zeichen ausgenommen den Zeilenumbruch.
            .. zwei beliebiges Zeichen
            [ae] eine mögliche Zeichen a oder e
            /\d/ steht für eine Ziffer (engl.: digit) und ist identisch
            mit /[0-9]/
            /\w/ steht für ein alphanumerisches Zeichen oder den
            Unterstrich (engl.: word character). /\w/ ist identisch mit /[0-9a-zA-Z_]/
            /[\da-z]/ steht für eine Ziffer oder einen Kleinbuchstaben.
            Insgesamt gibt es 15 Zeichen, die man maskieren muss, wenn man
            nach ihnen suchen möchte: * + ? . ( ) [ ] { } \ / | ^ $
            let t1 = /\./.test('Z. B.');
            Mit ^ und $ kann man festlegen, dass das Pattern am Anfang
            bzw. am Ende des zu durchsuchenden Strings stehen soll.
            ^[0-9] muss mit zifer anfangen
            Abkürzungen für häufig benutze Zeichenklassen:
            /\d/       eine Ziffer, entspricht /[0-9]/
            /\D/       keine Ziffer, entspricht /[^0-9]/
            /\w/       Wort-Zeichen, entspricht /[a-zA-Z0-9_]/
            /\W/       kein Wort-Zeichen, entspricht /[^a-zA-Z0-9_]/

            var email = document.getElementById("email").value;
            var regExEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]+$/.test(email);
            var regExTel = /^\+?([0-9\/ -]+)$/.test(tel);
            var regExKnr = /[A-Z]{1}[0-9]{5}/.test(knr);
            var regExName = /[a-zA-Z-]+\s*[a-zA-Z]*/.test(name);
            ------------------------------
            Das Passwort muss aus mindestens neun Zeichen bestehen.
            Das Passwort muss Großbuchstaben aufweisen.
            Das Passwort muss Kleinbuchstaben aufweisen.
            Im Passwort müssen Ziffern vorkommen.
            Im Passwort müssen Sonderzeichen vorkommen.
            Aus jedem der vier oben genannten Zeichentypen müssen
            mindestens zwei Zeichen vorkommen. Also zwei
            Großbuchstaben, zwei Kleinbuchstaben usw.
            */

            /* function isValid(pw) {
                return pw.length > 9 &&
                                /[A-Z].*[A-Z]/.test(pw) &&
                                /[a-z].*[a-z]/.test(pw) &&
                                /[0-9].*[0-9]/.test(pw) &&
                                /[^A-Za-z0-9].*[^A-Za-z0-9]/.test(pw)                         
            }

            console.log(isValid("AAbb22$$abc"));
            console.log(isValid("Ab1%Ba3$test"));
            console.log(isValid("AAbb22$$"));
            console.log(isValid("Abb22$$abc"));
            console.log(isValid("AAb22$$ABC"));
            console.log(isValid("AAbb2$$abc"));
            console.log(isValid("AAbb22$abc"));

            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>www</legend>
        <div>
            <pre>
                https://msiter.ru/tutorials/javascript
            </pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>примеры</legend>
            <!-- new Item -->
            <div class="sticker-left sticker-info" data-sticker="create element">
            <div class="item_content">
                <div>
                    <h3></h3>
                </div>
                <pre><code>
                    var p = document.createElement("p");
                    p.innerHTML = 'Ein bisschen Text muss sein';
                    document.body.appendChild(p);
                </code></pre>
                <pre><code>
                    </code></pre>
            </div>
            </div>
            <!-- end Item -->
            <!-- new Item -->
            <div class="sticker-left sticker-info" data-sticker="drag&drop">
            <div class="item_content">
                <div>
                    <h3></h3>
                </div>
                <pre><code>
                    var ausgabe = document.getElementById("ausgabe");

                    var gecklikt;
                    var target;
                    ausgabe.addEventListener("mousedown", function(e){
                        gecklikt = true;
                        target = e.target;
                        console.log(gecklikt);
                    });
                    ausgabe.addEventListener("mouseup", function(e){
                        gecklikt = false;
                        target = null;
                        console.log(gecklikt);
                    });

                    document.addEventListener("mousemove", function(e){
                        var posX = e.pageX - 50;
                        var posY = e.pageY - 50;

                        if(gecklikt){
                            ausgabe.setAttribute("style", "left: " + posX + "px; top: " + posY + "px;");
                        }
                    });
                </code></pre>
                <pre><code>
                    const heightOutput = document.querySelector('#height');
                    const widthOutput = document.querySelector('#width');

                    function reportWindowSize() {
                    heightOutput.textContent = window.innerHeight;
                    widthOutput.textContent = window.innerWidth;
                    }

                    window.onresize = reportWindowSize;
                </code></pre>
            </div>
            </div>
            <!-- end Item -->

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