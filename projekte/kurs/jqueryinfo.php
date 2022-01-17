<?php
    $title = "jQuery";
    require_once "header.php";

    Navigation::ShowAll();
?>
<h3>jQuery</h3>
<!-- подключить jQuery -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="jQuery">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p>Библиотека jQuery - это один файл JavaScript, который подключается в HTML теге &lt;script> (обратите внимание, что тег &lt;script> должен располагаться внутри тега &lt;head>):</p>
            <p>// von google server https://developers.google.com/speed/libraries</p>
            <pre><code>
    &lt;head>
        &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">&lt;/script>
    &lt;/head>
            </code></pre>
            <p>// von Microsoft CDN</p>
            <pre><code>
    &lt;head>
        &lt;script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js">&lt;/script>
    &lt;/head>
            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
<!-- Синтаксис -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="Базовый синтаксис">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <p>Базовый синтаксис имеет следующий вид:</p>
            <p>$(селектор).действие()</p>
            <p>Примеры:</p>
            <p>$(this).hide() - скрывает текущий элемент</p>
            <p>$("p").hide() - скрывает все элементы &lt;p></p>
            <p>$(".test").hide() - скрывает все элементы с атрибутом class="test"</p>
            <p>$("#test").hide() - скрывает элемент с атрибутом id="test"</p>
            <h4>Событие готовности документа</h4>
            <pre><code>
            $(document).ready(function(){
                // методы jQuery пишем сюда...
            });
            </code></pre>
            <h4>В jQuery также есть короткая форма записи события готовности документа:</h4>
            <pre><code>
            $(function(){
                // методы jQuery пишем сюда...
            });
            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->
<!-- Селекторы -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="Базовые селекторы">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <pre><code>
                Основные CSS селекторы, которые используются для выборки элементов в jQuery:
                    $("*")	Выбирает все элементы
                    $(this)	Выбирает текущий HTML элемент
                    $("p.intro")	Выбирает все элементы &lt;p> с атрибутом class="intro"
                    $("p:first")	Выбирает первый элемент &lt;p>
                    $("ul li:first")	Выбирает первый элемент &lt;li> первого элемента &lt;ul>
                    $("ul li:first-child")	Выбирает первый элемент &lt;li> каждого элемента &lt;ul>
                    $("[href]")	Выбирает все элементы с атрибутом href
                    $("a[target='_blank']")	Выбирает все элементы &lt;a>, значение атрибута target
                    которых равно "_blank"
                    $("a[target!='_blank']")	Выбирает все элементы &lt;a>, значение атрибута target
                    которых не равно "_blank"
                    $(":button")	Выбирает все элементы &lt;button>, а также элементы &lt;input> с атрибутом
                    type="button"
                    $("tr:even")	Выбирает все четные элементы &lt;tr>
                    $("tr:odd")	Выбирает все нечетные элементы &lt;tr>
                    $('.class') – по классу;
                    $('#id') – по id;
                    $('tag') – по тегу;
                    $('*') – все элементы;
                    $('selector1,selector2,...') – по группе селекторов (выбирает
                    все элементы, соответствующие хотя бы одному из указанных
                    селекторов);
                    $('selector1selector2...') – по комбинации селекторов
                    (выбирает элементы, которые должны соответствовать всем
                    указанным селекторам).
                    CSS селекторы для идентификации элементов по их атрибутам::
                    [attr] – по атрибуту независимо от его значения;
                    [attr=value] – по атрибуту со значением, точно равным заданному;
                    [attr^=value] – по атрибуту со значением, начинающимся точно с заданной строки;
                    [attr|=value] – по атрибуту со значением, равным заданной строке или начинающимся
                    с этой строки, за которой следует дефис (-);
                    [attr$=value] – по атрибуту со значением, оканчивающимся точно на заданную строку
                    (при сравнении учитывается регистр);
                    [attr*=value] – по атрибуту со значением, содержащим заданную подстроку;
                    [attr~=value] – по атрибуту со значением, содержащим заданное слово,
                    отделённое пробелами;
                    [attr!=value] – выбирает элементы, которые не содержат указанного атрибута,
                    либо имеют указанный атрибут, но не с заданным значением.
                    ----------------------
                    Выберем изображения &lt;img> с атрибутом alt:
                    &lt;img src="photo-1.jpg" alt="">
                    &lt;img src="photo-2.jpg" alt="Фото">
                    &lt;img src="photo-3.jpg">
                    &lt;script>
                    // используем селектор [attr]
                    var $elements = $('img[alt]');
                    &lt;/script>
                    ----------------------
                    Найдём элементы с атрибутом type="button":
                    &lt;input type="button" value="Рассчитать стоимость заказа">
                    &lt;button type="button">Информация о заказе&lt;/button>
                    &lt;input type="submit" value="Отправить заказ">
                    &lt;script>
                    // используем селектор [attr=value]
                    var elements = $('[type="button"]');
                    &lt;/script>
                    ---------------------
                    Найдём все элементы с атрибутом href, содержащим подстроку «youtube»:
                    &lt;a href="http://www.youtube.com/">...&lt;/a>
                    &lt;a href="#">...&lt;/a>
                    &lt;div>...&lt;/div>
                    &lt;script>
                    // используем селектор [attr*=value]
                    var elements = $('[href*="youtube"]');
                    &lt;/script>
                </code></pre>
            <pre><code>
                </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<!-- События -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="События">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <table class="blueTable">
                <tr>
                    <th>События мыши:</th>
                    <th>События клавиатуры:</th>
                    <th>События формы:</th>
                    <th>События документа/окна:</th>
                </tr>
                <tr>
                    <td>click</td>
                    <td>keypress</td>
                    <td>submit</td>
                    <td>load</td>
                </tr>
                <tr>
                    <td>dblclick</td>
                    <td>keydown</td>
                    <td>change</td>
                    <td>resize</td>
                </tr>
                <tr>
                    <td>mouseenter</td>
                    <td>keyup</td>
                    <td>focus</td>
                    <td>scroll</td>
                </tr>
                <tr>
                    <td>mouseleave</td>
                    <td></td>
                    <td>blur</td>
                    <td>unload</td>
                </tr>
            </table>
            <h4>Часто используемые методы событий jQuery</h4>
            <p>Метод click() присоединяет функцию обработчика события к элементу HTML, которая выполняется, когда пользователь "кликает" мышкой на элемент HTML.</p>
        <pre><code>
            $("p").click(function(){
            $(this).hide();
            }); 
        </code></pre>
        <p>Метод dblclick() присоединяет функцию обработчика события к элементу HTML, которая выполняется, когда пользователь совершает двойное нажатие мышкой на элемент HTML:</p>
        <pre><code>
            $("p").dblclick(function(){
            $(this).hide();
            }); 
        </code></pre>
        <p>Метод mouseenter() присоединяет функцию обработчика события к элементу HTML, которая выполняется, когда указатель мыши заходит на элемент HTML:</p>
        <pre><code>
            $("#p1").mouseenter(function(){
            alert("Вы зашли на элемент p1!");
            });
        </code></pre>
        <p>Метод mouseleave() присоединяет функцию обработчика события к элементу HTML, которая выполняется, когда указатель мыши выходит за границы элемента HTML:</p>
        <pre><code>
            $("#p1").mouseleave(function(){
            alert("Пока! Вы покидаете элемент p1!");
            });
        </code></pre>
        <p>Метод mouseup() присоединяет функцию обработчика события к элементу HTML, которая выполняется, когда отпущена любая из стандартных клавиш мыши (левая, средняя или правая) на элементе HTML:</p>
        <pre><code>
            $("#p1").mouseup(function(){
            alert("Mouse up over p1!");
            }); 
        </code></pre>
        <p>Метод hover() в параметрах принимает две функции и по сути является комбинацией методов mouseenter() и mouseleave(). Первая функция выполняется, когда указатель мыши заходит на элемент HTML, а вторая, когда указатель мыши покидает границы элемента HTML:</p>
        <pre><code>
            $("#p1").hover(function(){
            alert("Вы заходите на элемент p1!");
            },
            function(){
            alert("Пока! Вы покидаете элемент p1!");
            }); 
        </code></pre>
        <p>Метод focus() присоединяет функцию обработчика события к полю HTML формы. Функция выполняется, когда поле формы получает фокус:</p>
        <pre><code>
            $("input").focus(function(){
            $(this).css("background-color", "#cccccc");
            }); 
        </code></pre>
        <p>Метод blur() присоединяет функцию обработчика события к полю HTML формы. Функция выполняется, когда поле формы теряет фокус:</p>
        <pre><code>
            $("input").blur(function(){
            $(this).css("background-color", "#ffffff");
            }); 
        </code></pre>
        <p>Метод on() присоединяет один или несколько обработчиков событий к выбранному элементу. Присоединяем событие "нажатие кнопки мыши" к элементу &lt;p>:</p>
        <pre><code>
            $("p").on("click", function(){
            $(this).hide();
            });
        </code></pre>
        <p>Присоединяем несколько событий к элементу &lt;p>:</p>
        <pre><code>
            $("p").on({
            mouseenter: function(){
                $(this).css("background-color", "lightgray");
            }, 
            mouseleave: function(){
                $(this).css("background-color", "lightblue");
            }, 
            click: function(){
                $(this).css("background-color", "yellow");
            } 
            }); 
        </code></pre>
            <!--         <pre><code>
        </code></pre> -->
        </div>
    </div>
    <!-- end Item -->
        <!-- new Item -->
        <div class="sticker-left sticker-info" data-sticker="hide(), show()">
        <div class="item_content">
            <div>
                <h3>jQuery методы hide() и show()</h3>
            </div>
            <p>При помощи jQuery методов hide() и show() вы можете скрывать и показывать HTML элементы:</p>
            <pre><code>
            $("#hide").click(function(){
            $("p").hide();
            });
            $("#show").click(function(){
            $("p").show();
            });
            </code></pre>
            <p>Синтаксис:</p>
            <p>$(селектор).hide(speed,callback);</p>
            <p>Необязательный параметр speed определяет скорость скрывания/показывания и может принимать следующие значения: "slow", "fast" или число миллисекунд.
            Необязательный параметр callback – это функция, которая выполняется после того, как метод hide() или show() завершит работу (подробнее о таких функциях будет рассказано в следующих главах).
            В следующем примере в методе hide() задается параметр speed в миллисекундах:</p>
            <pre><code>
                $("button").click(function(){
                $("p").hide(1000);
                });
            </code></pre>
        </div>
    </div>
    <!-- end Item -->
        <!-- new Item -->
        <div class="sticker-left sticker-info" data-sticker="toggle()">
        <div class="item_content">
            <div>
                <h3>jQuery метод toggle()</h3>
            </div>
            <p>Также, между состояниями "скрыть" и "показать" можно переключаться при помощи метода toggle().
                В этом случае скрытые элементы показываются, а видимые скрываются:</p>
            <pre><code>
                $("button").click(function(){
                $("p").toggle();
                }); 
            </code></pre>
            <p>Синтаксис:</p>
            <p>$(селектор).toggle(speed,callback);</p>
            <p>Необязательный параметр speed может принимать: "slow", "fast" или число миллисекунд.
                Необязательный параметр callback – это функция, которая выполняется после того, как метод toggle() завершит работу.</p>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<!-- Извлечение контента и атрибутов -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="Извлечение контента и атрибутов">
        <div class="item_content">
            <div>
                <h3>Получение контента - text(), html(), val()</h3>
            </div>
            <p>text() - устанавливает или возвращает текстовое содержимое выбранных элементов</p>
            <p>html() - устанавливает или возвращает содержимое выбранных элементов (включая разметку HTML)</p>
            <p>val() - устанавливает или возвращает значение полей форм</p>
            <p>Следующий пример демонстрирует как получить контент при помощи jQuery методов text() и html():</p>
            <pre><code>
            $("#btn1").click(function(){
                alert("Text: " + $("#test").text());
            });
            $("#btn2").click(function(){
                alert("HTML: " + $("#test").html());
            });
            </code></pre>
            <p>Следующий пример демонстрирует как получить значение поля ввода при помощи jQuery метода val():</p>
            <pre><code>
            $("#btn1").click(function(){
                alert("Value: " + $("#test").val());
            }); 
            </code></pre>
            <p>Функция обратного вызова в методах text(), html() и val()</p>
            <p>
            Все три метода jQuery, описанные выше, - text(), html(), val() - также могут использоваться с функцией обратного вызова.
            Функция обратного вызова имеет два параметра: индекс текущего элемента в списке отобранных элементов и исходное (старое) значение. Из функции вы можете вернуть строку, которая будет использоваться как новое значение.
            В следующем примере демонстрируется использование методов text() и html() с функцией обратного вызова:
            </p>
            <pre><code>
            $("#btn1").click(function(){
            $("#test1").text(function(i, origText){
                return "Старый текст: " + origText + " Новый текст: Hello world!
                (index: " + i + ")"; 
            });
            });

            $("#btn2").click(function(){
            $("#test2").html(function(i, origText){
                return "Старый html: " + origText + " Новый html: Hello <b>world!</b>
                (index: " + i + ")"; 
            });
            });
            </code></pre>
            <pre><code>
            Чтение HTML контента элемента:
            $('#myDiv').html(); //returns innerHtml of #myDiv
            //add &lt;p>This is paragraph.&lt;/p> to #emptyDiv
            $('#emptyDiv').html('&lt;p>This is paragraph.&lt;/p>');
            
            Для того чтобы получить HTML контент всех найденных
            элементов необходимо воспользоваться циклом (например, each):
            $('p').each(function(){
                // выведем содержимое текущего элемента в консоль
                console.log($(this).html());
            });
            Замена контента элемента указанным текстом:
            &lt;div id="info">
                Некоторый контент...
            &lt;/div>
            &lt;script>  
                $('#info').text('&lt;p>Другой контент...&lt;/p>');
            &lt;/script>
            $('#myDiv').text(); //returns "This is paragraph."
            $('p').text(); //returns "This is paragraph."
            //removes all the content from #emptyDiv and inserts "This is some text." to it
            $('#emptyDiv').text('This is some text.');
            Получение значения элемента формы:
            $('input:Submit').val(); //returns "Save"
            //set value of input text to "Steve"
            $('input:text').val('Steve');
            $('input:text').val(); //returns "Steve"

            &lt;input name="color" type="radio" value="white"> Белый&lt;br>
            &lt;input name="color" type="radio" value="green" checked> Зелёный<br>
            &lt;input name="color" type="radio" value="brown"> Коричневый&lt;br>
            ...
            &lt;script>
            // получим значение первого элемента в коллекции
            var valColor = $('input[name="color"]').val();
            console.log(valColor); // white
            // получим значение выбранной (checked) радиокнопки
            var valCheckedColor = $( "input[type=radio][name=color]:checked" ).val();
            console.log(valCheckedColor); // green
            &lt;/script>

            </code></pre>
        </div>
    </div>
    <!-- end Item -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="attr()">
        <div class="item_content">
            <div>
                <h3>Получение атрибутов</h3>
            </div>
            <p>jQuery метод attr() позволяет получить значения атрибутов.</p>
            <pre><code>
            $("button").click(function(){
                alert($("#w3s").attr("href"));
            });
            </code></pre>
            <p>В следующем примере демонстрируется как изменить (установить) значение атрибута href ссылки:</p>
            <pre><code>
            $("button").click(function(){
                $("#w3s").attr("href", "https://msiter.ru/tutorials/jquery/");
            });
            </code></pre>
            <p>В следующем примере демонстрируется как установить одновременно значения атрибутов href и title ссылки:</p>
            <pre><code>
            $("button").click(function(){
                $("#w3s").attr({
                    "href" : "https://msiter.ru/tutorials/jquery/",
                    "title" : "Учебник по jQuery"
                });
            }); 
            </code></pre>
            <p>Функция обратного вызова в методе attr()
                Метод attr() также может использоваться с функцией обратного вызова.
                Функция обратного вызова имеет два параметра: индекс текущего элемента в списке отобранных элементов и исходное (старое) значение. Из функции вы можете вернуть строку, которая будет использоваться как новое значение атрибута.
                В следующем примере демонстрируется использование метода attr() с функцией обратного вызова:</p>
            <pre><code>
            $("button").click(function(){
                $("#w3s").attr("href", function(i, origValue){
                    return origValue + "/jquery/"; 
                });
            }); 
            </code></pre>
            <pre><code>
            $("div").attr("style","background-color: blue;");
            $('p').attr('style'); // returns "font-size:16px;font-weight:bold"
            $("#button2").click(function (e) {
                $("img").attr("width", "200");
            });    
            $("#button5").click(function (e) {
                $("#div5 img").attr({ "width": "600", "height": "500", "src": "dog1.jpg"});
            });
            $("#jquader").html("Hallo zurück!");
            $("#jquader").attr("style","background-color: green;");
            $("div").attr("style","background-color: blue;");
            $("ul > li:first-child").attr("style","color: red;");
            <h3>//CSS Klassen umschalten</h3>
            &lt;style>
                .highlight{color: yellow;}
            &lt;/style>
            $("#div").click(function(){
                $("#div").toggleClass("highlight");
            });
            -------------------

            $("tr").click(function(){
                $(this).toggleClass("heightlight");
            });
            // in style.css
            .heightlight{
                background-color: #fffhhh;
            }
            </code></pre>
        </div>
    </div>
    <!-- end Item -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="prop()">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <pre><code>
                var style = $('p').prop('style');
                style.fontWeight; // returns "bold" 

                $('div').prop('class','yellowDiv'); // add class="yellowDiv" to all div elements
            </code></pre>
            <!--<pre><code>
                </code></pre> -->
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->
<!-- Добавление элементов -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="Добавление элементов">
        <div class="item_content">
            <div>
                <h3>
                    Добавление элементов
                </h3>
            </div>
                <p>append() - Вставляет контент в конец отобранных элементов
                prepend() - Вставляет контент в начало отобранных элементов
                after() - Вставляет контент после отобранных элементов
                before() - Вставляет контент перед отобранными элементами
            </p>
            <h4>jQuery метод append() вставляет контент В КОНЕЦ отобранных HTML элементов.</h4>
            <pre><code>
                $("p").append("Присоединенный в конец текст."); 
            </code></pre>
            <p>jQuery метод prepend() вставляет контент В НАЧАЛО отобранных HTML элементов.</p>
            <pre><code>
                $("p").prepend("Присоединенный в начало текст.");
            </code></pre>
            <p>Добавление нескольких новых элементов при помощи append() и prepend()</p>
            <p>В обоих предыдущих примерах мы всего лишь вставляли некий текст/HTML в начало/конец отобранных HTML элементов.
            Тем не менее, и метод append(), и метод prepend() в качестве параметров могут принимать любое число новых элементов. Новые элементы могут генерироваться при помощи текста/HTML (как мы это делали в предыдущих примерах), либо при помощи jQuery, кода JavaScript или элементов DOM.
            В следующем примере мы создаем несколько новых элементов. Элементы создаются при помощи текста/HTML, jQuery и JavaScript/DOM. Затем мы присоединяем новые элементы при помощи метода append() (это также работает и с методом prepend()):
            </p>
            <pre><code>
            function appendText() {
            var txt1 = "&lt;p>Text.&lt;/p>";               // Создаем элемент при помощи HTML  
            var txt2 = $("&lt;p>&lt;/p>").text("Text.");   // Создаем элемент при помощи jQuery
            var txt3 = document.createElement("p");  // Создаем элемент при помощи DOM
            txt3.innerHTML = "Text.";
            $("body").append(txt1, txt2, txt3);      // Присоединяем новые элементы
            } 
            </code></pre>
            <h4>
            jQuery методы after() и before()
            </h4>
            <p>jQuery метод after() вставляет контент ПОСЛЕ отобранных HTML элементов.
            jQuery метод before() вставляет контент ПЕРЕД отобранными HTML элементами.
            </p>            
            <pre><code>
            $("img").after("Текст после элемента");
            $("img").before("Текст перед элементом"); 
            </code></pre>
            <p>Добавление нескольких новых элементов при помощи after() и before()</p>
            <p>
            Также, оба метода, и after(), и before() могут принимать в качестве параметров любое число новых элементов. Новые элементы могут генерироваться при помощи текста/HTML (как мы это делали в предыдущих примерах), либо при помощи jQuery, кода JavaScript или элементов DOM.

            В следующем примере мы создаем несколько новых элементов. Элементы создаются при помощи текста/HTML, jQuery и JavaScript/DOM. Затем мы присоединяем новые элементы при помощи метода after() (это также работает и с методом before()):
            </p>
            <pre><code>
            function afterText() {
            var txt1 = "&lt;b>I &lt;/b>";                  // Создаем элемент при помощи HTML  
            var txt2 = $("&lt;i>&lt;/i>").text("love ");   // Создаем элемент при помощи jQuery
            var txt3 = document.createElement("b");  // Создаем элемент при помощи DOM
            txt3.innerHTML = "jQuery!";
            $("img").after(txt1, txt2, txt3);        // Вставим новые элементы после &lt;img>
            }
            </code></pre>
            <!--<pre><code>
                </code></pre> -->
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->
<!-- Удаление элементов -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="remove(), empty()">
        <div class="item_content">
            <div>
                <h3>
                    Удаление элементов
                </h3>
            </div>
            <p>remove() - удаляет отобранный элемент (и его дочерние элементы)</p>
            <p>удаляет дочерние элементы отобранного элемента</p>
            <p>jQuery метод remove() удаляет отобранные элементы (и его дочерние элементы).</p>
            <pre><code>
                $("#div1").remove(); 
            </code></pre>
            <p>jQuery метод empty() удаляет дочерние элементы отобранных элементов.</p>
            <pre><code>
                $("#div1").empty();
            </code></pre>
            <h4>Фильтрация удаляемых элементов</h4>
            <p>jQuery метод remove() также принимает параметр, который позволяет отфильтровывать удаляемые элементы.
            В этом параметре передается строка селектора jQuery.
            В следующем примере удаляются все элементы &lt;p> с атрибутом class="test":
            </p>
            <pre><code>
                $("p").remove(".test"); 
            </code></pre>
            <p>В следующем примере удаляются все элементы &lt;p> с атрибутом class="test" или class="demo":</p>
            <pre><code>
                $("p").remove(".test, .demo"); 
            </code></pre>
            <!--<pre><code>
                </code></pre> -->
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->
<!-- Изменение CSS классов -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="addClass(), removeClass(), toggleClass()">
        <div class="item_content">
            <div>
                <h3>Манипулирование классами CSS</h3>
            </div>
            <p>
            addClass() - добавляет один или несколько классов отобранным элементам
            removeClass() - удаляет один или несколько классов у отобранных элементов
            toggleClass() - добавляет или удаляет класс(ы) по принципу переключателя (добавляет, если элемент не содержит класса, и удаляет, если класс есть)
            css() - возвращает или устанавливает значение атрибута style
            </p>
            <p>Во всех примерах в этой главе для наглядности используются следующие стили:</p>
            <pre><code>
                .important {
                    font-weight: bold;
                    font-size: xx-large;
                }

                .blue {
                    color: blue;
                }
            </code></pre>
            <h4>jQuery метод addClass()</h4>
            <p>В следующем примере показано, как добавлять атрибут class к различным элементам. При этом во время добавления классов можно выбрать несколько элементов:</p>
            <pre><code>
            $("button").click(function(){
                $("h1, h2, p").addClass("blue");
                $("div").addClass("important");
            }); 
            </code></pre>
            <p>Также, в методе addClass() можно задавать несколько классов:</p>
            <pre><code>
            $("button").click(function(){
                $("#div1").addClass("important blue");
            });
            </code></pre>
            <h4>jQuery метод removeClass()</h4>
            <p>
            В следующем примере показано, как удалять заданный атрибут class у различных элементов:  
            </p>
            <pre><code>
            $("button").click(function(){
                $("h1, h2, p").removeClass("blue");
            }); 
            </code></pre>
            <h4>jQuery метод toggleClass()</h4>
            <p>В следующем примере показано, как использовать jQuery метод toggleClass(). Этот метод переключает между добавлением/удалением классов у выбранных элементов:</p>
            <pre><code>
            $("button").click(function(){
                $("h1, h2, p").toggleClass("blue");
            }); 
            </code></pre>
            <!-- <pre><code>

            </code></pre> -->
        </div>
    </div>
    <!-- end Item -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="css()">
        <div class="item_content">
            <div>
                <h3>Метод css()</h3>
            </div>
            <p>jQuery метод css() возвращает или устанавливает одно или несколько свойств стилей отобранных элементов.</p>
            <p>
            В следующем примере будет возвращено значение свойства background-color ПЕРВОГО найденного элемента &lt;p>:</p>
            <pre><code>
                $("p").css("background-color"); 
            </code></pre>
            <h4>Установка CSS свойства</h4>
            <p>В следующем примере будет установлено значение свойства background-color для ВСЕХ найденных элементов &lt;p>:</p>
            <pre><code>
                $("p").css("background-color", "yellow"); 
            </code></pre>
            <h4>Установка нескольких CSS свойств</h4>
            <p>В следующем примере будут установлены значения свойств background-color и font-size для ВСЕХ найденных элементов &lt;p>:</p>
            <pre><code>
                $("p").css({"background-color": "yellow", "font-size": "200%"}); 
            </code></pre>
            <!-- <pre><code>
                </code></pre> -->
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->
<!-- Размеры элемента -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="width(), height()">
        <div class="item_content">
            <div>
                <h3>Методы jQuery для работы с размерами элементов</h3>
            </div>
            <p>width()</p>
            <p>height()</p>
            <p>innerWidth()</p>
            <p>innerHeight()</p>
            <p>outerWidth()</p>
            <p>outerHeight()</p>
            <h4>jQuery методы width() и height()</h4>
            <p>Метод width() устанавливает или возвращает ширину элемента (исключая значения padding, border и margin).
            Метод height() устанавливает или возвращает высоту элемента (исключая значения padding, border и margin).
            В следующем примере возвращается ширина и высота заданного элемента &lt;div>:</p>
            <pre><code>
            $("button").click(function(){
                var txt = "";
                txt += "Ширина: " + $("#div1").width() + "</br>";
                txt += "Высота: " + $("#div1").height();
                $("#div1").html(txt);
            });
            </code></pre>
            <h4>jQuery методы innerWidth() и innerHeight()</h4>
            <p>Метод innerWidth() возвращает ширину элемента (включая значения padding).
            Метод innerHeight() возвращает высоту элемента (включая значения padding).
            В следующем примере возвращается внутренняя ширина/высота заданного элемента &lt;div>:</p>
            <pre><code>
            $("button").click(function(){
                var txt = "";
                txt += "Внутренняя ширина: " + $("#div1").innerWidth() + "&lt;/br>";
                txt += "Внутренняя высота: " + $("#div1").innerHeight();
                $("#div1").html(txt);
            }); 
            </code></pre>
            <h4>jQuery методы outerWidth() и outerHeight()</h4>
            <p>Метод outerWidth() возвращает, так называемую, наружную ширину элемента (включая значения padding и border).

            Метод outerHeight() возвращает, так называемую, наружную высоту элемента (включая значения padding и border)

            В следующем примере возвращается наружная ширина/высота заданного элемента &lt;div>:</p>
            <pre><code>
            $("button").click(function(){
                var txt = "";
                txt += "Наружная ширина: " + $("#div1").outerWidth() + "&lt;/br>";
                txt += "Наружная высота: " + $("#div1").outerHeight();
                $("#div1").html(txt);
            }); 
            </code></pre>
            <p>Обращение к методу с параметром outerWidth(true) возвращает ширину элемента, включая значения padding, border и margin.

            Обращение к методу с параметром outerHeight(true) возвращает ширину элемента, включая значения padding, border и margin.</p>
            <pre><code>

            $("button").click(function(){
                var txt = "";
                txt += "Наружная ширина (+margin): " + $("#div1").outerWidth(true) + "</br>";
                txt += "Наружная высота (+margin): " + $("#div1").outerHeight(true);
                $("#div1").html(txt);
            }); 
            </code></pre>
            <h4>Еще примеры с jQuery методами width() и height()</h4>
            <p>В следующем примере возвращается ширина и высота HTML документа и окна (область видимости браузера):</p>
            <pre><code>
            $("button").click(function(){
                var txt = "";
                txt += "Ширина/высота документа: " + $(document).width();
                txt += "x" + $(document).height() + "\n";
                txt += "Ширина/высота окна: " + $(window).width();
                txt += "x" + $(window).height();
                alert(txt);
            });
            </code></pre>
            <p>В следующем примере устанавливается ширина и высота заданного элемента &lt;div>:</p>
            <pre><code>
            $("button").click(function(){
                $("#div1").width(500).height(500);
            });
            </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->
<!-- Обход элементов -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="parent(), parents()">
        <div class="item_content">
            <div>
                <h3>Перемещение вверх по дереву DOM</h3>
            </div>
            <p>parent()</p>
            <p>parents()</p>
            <p>parentsUntil()</p>
            <h4>jQuery метод parent()</h4>
            <p>Метод parent() возвращает непосредственный родительский элемент выбранного элемента.

            Это метод перемещается только на один уровень вверх по дереву DOM.

            В следующем примере возвращается прямой родительский элемент каждого элемента &lt;span>:</p>
            <pre><code>    
                $(document).ready(function(){
                    $("span").parent();
                }); 
            </code></pre>
            <h4>jQuery метод parents()</h4>
            <p>Метод parents() возвращает все родительские элементы вплоть до корневого (<html>) выбранного элемента.
            В следующем примере возвращаются все предки всех элементов &lt;span>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("span").parents();
                });
            </code></pre>
            <p>Также, можно использовать необязательный параметр, чтобы отфильтровывать результаты поиска.
            В следующем примере возвращаются все предки всех элементов &lt;span>, если они являются элементами &lt;ul>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("span").parents("ul");
                });
            </code></pre>
            <h4>jQuery метод parentsUntil()</h4>
            <p>Метод parentsUntil() возвращает все родительские элементы между двумя заданными элементами.

            В следующем примере возвращаются все родительские элементы между элементами &lt;span> и &lt;div>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("span").parentsUntil("div");
                }); 
            </code></pre>
        </div>
    </div>
    <!-- end Item -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="children(), find()">
        <div class="item_content">
            <div>
                <h3>Проход вниз по дереву DOM</h3>
            </div>
            <p>children()</p>
            <p>find()</p>
            <h4>jQuery метод children()</h4>
            <p>Метод children() возвращает все прямые потомки выбранного элемента.

            Этот метод проходит только по первому уровню вниз по дереву DOM.

            В следующем примере находятся элементы &lt;div> и возвращаются прямые потомки каждого такого элемента:</p>
            <pre><code>
                $(document).ready(function(){
                    $("div").children();
                }); 
            </code></pre>
            <p>Также, можно указать необязательный параметр, чтобы фильтровать поиск потомков.

            В следующем примере возвращаются все элементы &lt;p> с классом "first", которые являются прямыми потомками элементов &lt;div>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("div").children("p.first");
                }); 
            </code></pre>
            <h4>jQuery метод find()</h4>
            <p>Метод find() возвращает все потомки выбранного элемента вплоть до последнего.

            В следующем примере возвращаются все элементы &lt;span>, которые являются потомками элементов &lt;div>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("div").find("span");
                }); 
            </code></pre>
            <p>В следующем примере возвращаются вообще все потомки элементов &lt;div>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("div").find("*");
                });
            </code></pre>
        </div>
    </div>
    <!-- end Item -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="siblings(), next(), prev()">
        <div class="item_content">
            <div>
                <h3>Проход по одному уровню дерева DOM - Соседи</h3>
            </div>
            <p>siblings()</p>
            <p>next()</p>
            <p>nextAll()</p>
            <p>nextUntil()</p>
            <p>prev()</p>
            <p>prevAll()</p>
            <p>prevUntil()</p>
            <h4>jQuery метод siblings()</h4>
            <p>Метод siblings() возвращает все элементы, находящиеся на одном уровне с выбранным элементом.
            В следующем примере возвращаются все соседние элементы от &lt;h2>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("h2").siblings();
                }); 
            </code></pre>
            <p>Также можно использовать необязательный параметр для фильтрации найденных элементов.

            В следующем примере возвращаются все элементы &lt;p>, находящиеся на одном уровне с элементом &lt;h2>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("h2").siblings("p");
                }); 
            </code></pre>
            <h4>jQuery метод next()</h4>
            <p>Метод next() возвращает следующий соседний элемент от выбранного элемента.
            В следующем примере возвращаются следующий соседний элемент от &lt;h2>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("h2").next();
                }); 
            </code></pre>
            <h4>jQuery метод nextAll()</h4>
            <p>Метод nextAll() возвращает все следующие соседние элементы от выбранного элемента.

            В следующем примере возвращаются все следующие соседние элементы от &lt;h2>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("h2").nextAll();
                });
            </code></pre>
            <h4>jQuery метод nextUntil()</h4>
            <p>Метод nextUntil() возвращает все следующие соседние элементы между двумя заданными аргументами.

            В следующем примере возвращаются все соседние элементы между элементами &lt;h2> и &lt;h6>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("h2").nextUntil("h6");
                }); 
            </code></pre>
            <h4>jQuery методы prev(), prevAll() и prevUntil()</h4>
            <p>Методы prev(), prevAll() и prevUntil() работают также как описанные выше методы, только в обратном направлении: они возвращают предшествующие соседние элементы (обход назад по элементам одного уровня дерева DOM, а не вперед).</p>
        </div>
    </div>
    <!-- end Item -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="first(), last() и eq()">
        <div class="item_content">
            <div>
                <h3>Обход элементов в jQuery - Фильтрация</h3>
            </div>
            <p>Базовые методы фильтрации - это first(), last() и eq(). Они позволяют выбрать заданный элемент основываясь на его позиции в группе элементов.

            Другие методы фильтрации, вроде filter() и not(), позволяют отобрать элементы, которые либо соответствуют, либо нет, определенным критериям.</p>
            <h4>jQuery метод first()</h4>
            <p>Метод first() возвращает первый элемент из заданного набора.
            В следующем примере отбирается первый элемент &lt;div>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("div").first();
                });
            </code></pre>
            <h4>jQuery метод last()</h4>
            <p>Метод last() возвращает последний элемент из заданного набора.
            В следующем примере отбирается последний элемент &lt;div>:</p>
            <pre><code>
                $(document).ready(function(){
                    $("div").last();
                });
            </code></pre>
            <h4>jQuery метод eq()</h4>
            <p>Метод eq() возвращает элемент с определенным индексным номером в отобранном наборе элементов.

            Отсчет индексных номеров начинается с 0, таким образом у первого элемента будет номер 0, а не 1.

            В следующем примере отбирается второй элемент &lt;p> (индексный номер 1):</p>
            <pre><code>
                $(document).ready(function(){
                    $("p").eq(1);
                });
            </code></pre>
            <h4>jQuery метод filter()</h4>
            <p>Метод filter() позволяет задавать критерий фильтрации. При этом элементы, не соответствующие заданным критериям, не будут попадать в отобранный набор.
            В следующем примере возвращаются все элементы &lt;p> с классом "intro":</p>
            <pre><code>
                $(document).ready(function(){
                    $("p").filter(".intro");
                }); 
            </code></pre>
            <h4>jQuery метод not()</h4>
            <p>Метод not() возвращает все элементы, которые не соответствуют заданным критериям. Таким образом, действие метода not() противоположно действию метода filter().
            В следующем примере возвращаются все элементы &lt;p>, у которых нет класса "intro":</p>
            <pre><code>
                $(document).ready(function(){
                    $("p").not(".intro");
                });
            </code></pre>
        </div>
    </div>
    <!-- end Item -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="Цепочки">
        <div class="item_content">
            <div>
                <h3>Цепочки jQuery</h3>
                <p>
                В jQuery вы можете присоединять друг к другу действия/методы.

                Связывание в цепочки позволяет выполнять несколько методов jQuery (с одним и тем же элементом) в одном выражении.

                До сих пор мы записывали выражения jQuery одно за раз (одно за другим).

                Однако, существует особый способ записи выражений jQuery, который называется "связывание в цепочку". При этом способе мы можем с одним и тем же элементом запускать несколько команд jQuery друг за другом. В этом случае браузеру не приходится отыскивать нужный элемент больше одного раза.

                Чтобы связать в цепочку несколько команд, вам всего лишь достаточно присоединить следующую команду к предыдущей.

                В следующем примере в цепочку связываются команды css(), slideUp() и slideDown(). Сначала элемент "p1" станет красным, затем свернется и затем развернется:
                </p>
            </div>
            <pre><code>
                $("#p1").css("color", "red").slideUp(2000).slideDown(2000); 
            </code></pre>
            <p>При необходимости мы могли бы добавить больше команд.

            При связывании в цепочку строка кода может быть довольно длинной. К счастью, jQuery не очень строг к синтаксису – вы можете отформатировать код как угодно, например, при помощи переноса на новую строку и отступов.

            Следующая запись также отлично работает:</p>
            <pre><code>
                $("#p1").css("color", "red")
                .slideUp(2000)
                .slideDown(2000); 
            </code></pre>
        </div>
    </div>
    <!-- end Item -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="each">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <pre><code>
                $('div')[0].style.backgroundColor = 'red'; 
 
                // if there is multiple elements 
                
                $('div').each(function() { 
                    this.style.backgroundColor = 'red'; 
                })
            </code></pre>
            <pre><code>
                </code></pre>
        </div>
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>
    <!-- end Item -->

<!-- jQuery-UI -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="jQuery-UI">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <h4>подключить jQuery-UI</h4>
            <pre><code>
            &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">&lt;/script>
            // nach dem jQuery
            &lt;script src="https://ajax.googleapis.com/ajax/libs/
            jqueryui/1.12.1/jquery-ui.min.js">&lt;/script>                
            
            &lt;link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/
            jqueryui/1.12.1/themes/smoothness/jquery-ui.css">                
            // vor eigene css
            &lt;link rel="stylesheet" href="css/style.css">
            </code></pre>
            <h4>benutzung</h4>
            <pre><code>
                &lt;div id="dialog" title="Überschrift">
                    &lt;p>Lorem ipsum doloer sit amet&lt;/p>
                &lt;/div>
                $("#dialog").dialog();
                --------------------
                &lt;input type="button" id="btnDialog" value="Dialog">
                $("#btnDialog").click( function() {
                    $("#dialog").dialog({
                    resizable: false,
                    width: 400,
                    modal: true,
                    buttons: {
                            "Delete all items": function() {
                                    $(this).dialog("close");
                            },
                            Cancel: function() {
                                    $(this).dialog("close");
                            }
                    }
                });
                });
                $("#dialog").hide();
                ----------------------
                &lt;div id="accordion">
                    &lt;h3>Section 1&lt;/h3>
                        &lt;div>
                            &lt;p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. &lt;/p>
                        &lt;/div>
                &lt;/div>
                $("#accordion").accordion();

            </code></pre>
        </div>
    <!-- end Item -->
        <div class="top">
            <span><a href="#">Top</a></span>
        </div>
    </div>

    <!-- methods -->
    <fieldset>
    <legend>methods</legend>
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="on()">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <pre><code>
            // использование в качестве обработчика анонимной функции
            $('.btn').on('click', function() {
            // действия, которые будут выполнены при наступлении события...
            console.log($(this).text());
            });
            --------------------
            //Присоединяем несколько событий к элементу &lt;p>:
            $("p").on({
                    mouseenter: function(){
                        $(this).css("background-color", "lightgray");
                    }, 
                    mouseleave: function(){
                        $(this).css("background-color", "lightblue");
                    }, 
                    click: function(){
                        $(this).css("background-color", "yellow");
                    } 
                    }); 
            --------------------
            // использование обычной функции в качестве обработчика
            var myFunction = function() {
            console.log($(this).text());
            }
            $('.btn').on('click', myFunction);
            --------------------
            $('.btn').click(function() {
            // действия, которые будут выполнены при наступлении события...
            console.log($(this).text());
            });
            --------------------
            $('#demo').on('click', function(e){
            // e – объект Event, содержащий дополнительную информацию о произошедшем событии
            // часто используемые свойства объекта Event
            e.preventDefault(); //отменить выполнение действия по умолчанию
            e.stopPropagation(); //остановить дальнейшее всплытие события
            // e.type – получить тип события
            // e.target – ссылка на элемент, на котором произошло событие
            // e.currentTarget - ссылка на текущий элемент (для
            которого сработал обработчик). Это свойство, как правило 
            равно функции this.
            // e.currentTarget === this
            // e.which – код клавиши (для мыши), код кнопки или символа (для клавиатуры)
            //e.pageX, e.pageY – координаты курсора, относительно левого верхнего угла документа
            });
            </code></pre>
            <!-- <pre><code>
                </code></pre> -->
        </div>
    </div>
    <!-- end Item -->
    <div class="top">
        <span><a href="#">Top</a></span>
    </div>


</fieldset>

<fieldset>
    <legend>примеры</legend>
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="window scroll resize">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <pre><code>
                $(window).resize(function(e){
                    console.log(e);                   
                });

                $(window).scroll(function (event) {
                    var sc = $(window).scrollTop();
                    console.log(sc);
                });
                $(window).scroll(function(e) {
                    console.log(window.scrollY);
                });
            </code></pre>
            <pre><code>
            $("div").click(function(){
                $("div").removeClass("box");
                $(this).addClass("box");
            });
            </code></pre>
            <pre><code>
                </code></pre>
        </div>
    </div>
    <!-- end Item -->
    <!-- new Item -->
    <div class="sticker-left sticker-info" data-sticker="create element">
        <div class="item_content">
            <div>
                <h3></h3>
            </div>
            <pre><code>
                var ul = $("<ul>");
                $("body").append(ul);
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