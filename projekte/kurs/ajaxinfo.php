<?php
    $title = "AJAX";
    require_once "header.php";

    Navigation::ShowAll();
?>

<h3>AJAX</h3>

<!-- new Item -->
<div class="sticker-left sticker-info" data-sticker="JQuery-AJAX">
  <div class="item_content">
      <div>
          <h3></h3>
      </div>
      <p>  AJAX = Асинхронный JavaScript и XML (англ. Asynchronous JavaScript and XML).</p>
      <p>AJAX – это технология, позволяющая обмениваться данными между клиентом и сервером, что в свою очередь позволяет обновлять части веб-страницы не перезагружая страницу целиком.</p>
      <p>Библиотека jQuery предоставляет несколько методов, реализующих функционал AJAX.</p>
      <p>&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  &lt;/script></p>
      <!--<pre><code>
          </code></pre> -->

  </div>
  <div class="top">
    <span><a href="#">Top</a></span>
  </div>
</div>

<!-- end Item -->
<!-- new Item -->
<div class="sticker-left sticker-info" data-sticker="$.ajax()">
  <div class="item_content">
      <div>
          <h3>Простые запросы через jQuery</h3>
      </div>
      <p> С помощью jQuery отправить AJAX запрос очень просто - вся работа делается через метод $.ajax(). Этот метод принимает параметром объект с настройками.
      Самая главная настройка - url: адрес страницы, на который отправляется запрос.
      Давайте, например, отправим запрос на страницу ajax.html: </p>
      <pre><code>
        $.ajax({
          url: 'ajax.html',
        });
      </code></pre>
      <p> Запрос отправится, но результата мы не дождемся - мы просто не сказали, что делать, когда страница ajax.html ответит нам.
      Для этого существует метод .done - параметром он принимает функцию, которая выполнится после ответа страницы (в нашем случае страницы ajax.html).
      Эта функция в свою очередь ожидает параметром переменную - в нее положится ответ страницы.
      Итак, давайте пошлем AJAX запрос на страницу ajax.html, полученный ответ положим в переменную text и запишем его в блок #result: </p>
      <pre><code>
        $.ajax({
          url: 'ajax.html',
        })
        .done(function(text) {
          $('#result').html(text);
        });
      </code></pre>
      <p> По умолчанию метод $.ajax() шлет запросы асинхронно. Это значит, что окно браузера не замирает в ожидании ответа страницы, а продолжает свою работу. А когда через некоторое время страница ответит - тогда и выполнится метод done.
      Если же произошла какая-то ошибка и страница по этому url нам не отвечает - мы можем отловить это событие с помощью метода fail: </p>
      <pre><code>
        $.ajax({
          url: 'ajax.html',
        })
        .done(function(text) {
          $('#result').html(text);
        })
        .fail(function() {
          $('#result').html('Ошибка загрузки');
        });
      </code></pre>
        <p> При запросе выполнится или метод done при успехе или метод fail при ошибке.
        Существует также метод always, который выполнится в любом случае: </p>
      <pre><code>
        $.ajax({
          url: 'ajax.html',
        })
        .always(function(html) {
          $('#result').html(html);
        });
      </code></pre>
      <p> Предыдущие запросы отправлялись методом GET. Это значит, что мы просто обращались на определенный адрес и ожидали ответа.

      Можно также отправлять запросы методом POST. В этом случае мы кроме обращения на определенный url можем еще отправить туда некоторые данные, например, данные из формы, которую заполнил пользователь.

      Как отправить такой запрос: для этого необходимо добавить еще две настройки в наш объект: свойство method указать 'POST' и тогда в data можно положить данные, которые отправятся на сервер методом POST: </p>
      <pre><code>
        $.ajax({
          url: 'ajax.html',
          method: 'POST',
          data: {name: 'Вася', age: 25}
        })
        .done(function(text) {
          $('#result').html(text);
        });
      </code></pre>
  </div>
  <div class="top">
    <span><a href="#">Top</a></span>
  </div>
</div>
<!-- end Item -->
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
  <div class="top">
    <span><a href="#">Top</a></span>
  </div>
</div>
<!-- end Item -->


  <fieldset>
    <legend>einfache anfrage mit ajax</legend>
    <div>
      <pre>
      $("#item1").click(function(){
        $.ajax({
            url: "data1.html",
            cache: false
        })
          .done(function(data){
              $(".right").html(data);
          });
      });
      </pre>
    </div>
    <div class="top">
            <span><a href="#">Top</a></span>
    </div>
  </fieldset>
  <fieldset>
    <legend>full control</legend>
    <div>
      <pre>
        funcBefore(){
          $("#infoteg").text ("warte auf data...");
        }
        funcSuccess(data){
          $("#infoteg").text (data);
        }
        $(document).ready (function (){
          $("element").bind("click", function (){
            $.ajax ({
              url: "auswertung.php",
              type: "POST",
              data: ({name: admin, number: 5}),
              dataType: "html",
              beforeSend: funcBefore,
              success: funcSuccess
            });
          });
        });
        //auswertung.php
        &lt;?php
          echo "name: ".$_POST['name']." number: ".$_POST['number'];
        ?>
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