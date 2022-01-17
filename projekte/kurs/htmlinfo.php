<?php
    $title = "HTML";
    require_once "header.php";
    include_once "listdir.php";
    Navigation::ShowAll();
?>

  <h3>HTML</h3>

<div class="main">

<div class="content wrap">



<!-- Tag10-11 -->

<fieldset class="tag mar-b" id="tag10_11">

  <legend>tag10-11</legend>

  <h3 class="title mar-tb">Position</h3>

  <div class="folder col-50">

    <?php	

        list_dir("/htmlgrundkurs/tag10_11");

    ?>

  </div>

  <div class="top">

    <span><a href="#">Top</a></span>

  </div>

</fieldset>

<!-- end -->

<!-- Tag7-9 -->

<fieldset class="tag mar-b" id="tag7-9">

  <legend>tag7-9</legend>

  <h3 class="title mar-tb">CSS Selektorarten</h3>

  <div class="content_inner">

    <p><b>Einfache Selektoren</b></p>

    <ul>

      <li>

        <p><b>*</b> jedes Element</p>

      </li>

      <li>

        <p><b>element</b> Element mit dem Namen element</p>

      </li>

      <li>

        <p><b>.klasse</b> Element mit der Klasse klasse</p>

      </li>

      <li>

        <p><b>#elementid</b> Element mit der ID elementid</p>

      </li>

    </ul>

    <p><b>Kombinatoren</b> stellen eine logische Beziehung zwischen zwei einfachen oder verbundenen

      Selektoren her.</p>

    <img class="imgscale" src="images/bilder/css_selector.png" alt="" width="741" height="287">

    <!-- Kombinatoren -->
    <br>
    <div>
      В CSS имеется 4 селектора отношений (A и B – это селекторы):

      A>B – выбирает элементы B, расположенные непосредственно в A;
      A B – выбирает элементы B, расположенные в A;
      A+B – выбирает элементы B, каждый из которых расположен сразу же после A (при этом данные элементы должны являться детьми одного родителя, т.е. находиться на одном уровне вложенности);
      A~B – выбирает все элементы B, каждые из которых расположены после A (при этом данные элементы должны являться детьми одного родителя, т.е. находиться на одном уровне вложенности).
    </div>
    <br>

    <ul>

      <!-- Nachfahren-Selektor -->

      <li>

        <h3>Nachfahren-Selektor</h3>

        <p>Die Regel springt alle p-Elemente an, die innerhalb von div-Elementen liegen.</p>

        <p>div p { color: white; background-color: red; }</p>

        <figure>

          <div class="relation">

            <svg viewBox="0 0 312 173.9" width="100%" height="100%">

              <use xlink:href="#alli">

                <g id="alli">

                  <path d="m155 30v12" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m33 52v-10h247v9" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m114 42v10" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m197 42v108" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m128 99v-11h141v9" stroke="#999" stroke-width="1px" fill="none"></path>

                  <rect rx="3" height="32" width="57.37" y="2.26" x="128" fill="hsl(190,20%,80%)"></rect>

                  <path d="m131 2.26c-1.7 0-3 1.34-3 3v13.93h57.3v-13.93c0-1.66-1.4-3-3-3h-51.3z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="25" x="140">div</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="4.347" fill="hsl(190,20%,80%)"></rect>

                  <path d="m7.347 47.7c-1.66 0-3 1.34-3 3v13.93h57.41v-13.93c0-1.66-1.4-3-3-3h-51.41z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="70" x="22">h2</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="169.1" fill="hsl(190,20%,80%)"></rect>

                  <path d="m172.1 47.7c-1.6 0-3 1.34-3 3v13.93h57.4v-13.93c0-1.66-1.4-3-3-3h-51.4z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="70" x="187">ul</text>

                  <g id="li3">

                    <rect rx="3" height="32" width="57.37" y="95.75" x="168.8" fill="hsl(190,20%,80%)"></rect>

                    <path d="m171.8 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                      fill="hsl(190,20%,84%)"></path>

                    <text font-size="20px" y="118" x="191">li</text>

                  </g>

                  <g transform="translate(70)">

                    <g id="li3">

                      <rect rx="3" height="32" width="57.37" y="95.75" x="168.8" fill="hsl(190,20%,80%)"></rect>

                      <path d="m171.8 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                        fill="hsl(190,20%,84%)"></path>

                      <text font-size="20px" y="118" x="191">li</text>

                    </g>

                  </g>

                  <g transform="translate(-70)">

                    <g id="li3">

                      <rect rx="3" height="32" width="57.37" y="95.75" x="168.8" fill="hsl(190,20%,80%)"></rect>

                      <path d="m171.8 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                        fill="hsl(190,20%,84%)"></path>

                      <text font-size="20px" y="118" x="191">li</text>

                    </g>

                  </g>

                </g>

              </use>

              <use xlink:href="#descendant">

                <g id="descendant">

                  <rect rx="3" height="32" width="57.37" y="47.7" x="86.78" fill="hsl(0,70%,80%)"></rect>

                  <path d="m89.78 47.7c-1.66 0-3 1.34-3 3v13.93h57.32v-13.93c0-1.66-1.4-3-3-3h-51.32z"

                    fill="hsl(0,70%,84%)"></path>

                  <text font-size="20px" y="70" x="104">p</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="251.6" fill="hsl(0,70%,80%)"></rect>

                  <path d="m254.6 47.7c-1.6 0-3 1.34-3 3v13.93h57.4v-13.93c0-1.66-1.4-3-3-3h-51.4z"

                    fill="hsl(0,70%,84%)"></path>

                  <text font-size="20px" y="70" x="273">p</text>

                  <rect rx="3" height="32" width="57.37" y="140" x="167.4" fill="hsl(0,70%,80%)"></rect>

                  <path d="m170.4 140c-1.6 0-3 1.3-3 3v13.9h57.4v-13.9c0-1.7-1.4-3-3-3h-51.4z"

                    fill="hsl(0,70%,84%)"></path>

                  <text font-size="20px" y="162" x="189">p</text>

                </g>

              </use>

            </svg>

          </div>

        </figure>

      </li>

      <!-- Kind-Selektor -->

      <li>

        <h3>Kind-Selektor</h3>

        <p>trifft nur auf p-Elemente zu, die direkt unterhalb des div-Elements liegen.</p>

        <p>div > p { color: white; background-color: red; }</p>



        <figure>

          <div class="relation">

            <svg viewBox="0 0 312 173.9" width="100%" height="100%">

              <use xlink:href="#alli">

                <g id="alli">

                  <path d="m155 30v12" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m33 52v-10h247v9" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m114 42v10" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m197 42v108" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m128 99v-11h141v9" stroke="#999" stroke-width="1px" fill="none"></path>

                  <rect rx="3" height="32" width="57.37" y="2.26" x="128" fill="hsl(190,20%,80%)"></rect>

                  <path d="m131 2.26c-1.7 0-3 1.34-3 3v13.93h57.3v-13.93c0-1.66-1.4-3-3-3h-51.3z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="25" x="140">div</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="4.347" fill="hsl(190,20%,80%)"></rect>

                  <path d="m7.347 47.7c-1.66 0-3 1.34-3 3v13.93h57.41v-13.93c0-1.66-1.4-3-3-3h-51.41z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="70" x="22">h2</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="169.1" fill="hsl(190,20%,80%)"></rect>

                  <path d="m172.1 47.7c-1.6 0-3 1.34-3 3v13.93h57.4v-13.93c0-1.66-1.4-3-3-3h-51.4z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="70" x="187">ul</text>

                  <g id="li3">

                    <rect rx="3" height="32" width="57.37" y="95.75" x="168.8" fill="hsl(190,20%,80%)"></rect>

                    <path d="m171.8 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                      fill="hsl(190,20%,84%)"></path>

                    <text font-size="20px" y="118" x="191">li</text>

                  </g>

                  <g transform="translate(70)">

                    <g id="li3">

                      <rect rx="3" height="32" width="57.37" y="95.75" x="168.8" fill="hsl(190,20%,80%)"></rect>

                      <path d="m171.8 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                        fill="hsl(190,20%,84%)"></path>

                      <text font-size="20px" y="118" x="191">li</text>

                    </g>

                  </g>

                  <g transform="translate(-70)">

                    <g id="li3">

                      <rect rx="3" height="32" width="57.37" y="95.75" x="168.8" fill="hsl(190,20%,80%)"></rect>

                      <path d="m171.8 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                        fill="hsl(190,20%,84%)"></path>

                      <text font-size="20px" y="118" x="191">li</text>

                    </g>

                  </g>

                </g>

              </use>

              <use xlink:href="#child">

                <g id="child">

                  <rect rx="3" height="32" width="57.37" y="47.7" x="86.78" fill="hsl(0,70%,80%)"></rect>

                  <path d="m89.78 47.7c-1.66 0-3 1.34-3 3v13.93h57.32v-13.93c0-1.66-1.4-3-3-3h-51.32z"

                    fill="hsl(0,70%,84%)"></path>

                  <text font-size="20px" y="70" x="104">p</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="251.6" fill="hsl(0,70%,80%)"></rect>

                  <path d="m254.6 47.7c-1.6 0-3 1.34-3 3v13.93h57.4v-13.93c0-1.66-1.4-3-3-3h-51.4z"

                    fill="hsl(0,70%,84%)"></path>

                  <text font-size="20px" y="70" x="273">p</text>

                  <rect rx="3" height="32" width="57.37" y="140" x="167.4" fill="hsl(190,20%,80%)"></rect>

                  <path d="m170.4 140c-1.6 0-3 1.3-3 3v13.9h57.4v-13.9c0-1.7-1.4-3-3-3h-51.4z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="162" x="189">p</text>

                </g>

              </use>

            </svg>

          </div>

        </figure>

      </li>

      <!-- Direkte Nachbar-Selektoren -->

      <li>

        <h3>Direkte Nachbar-Selektoren</h3>

        <p>Absteigender Selektor, angewendet auf ein p-Element, das dem h2-Element direkt folgt. h2 und p haben

          dabei immer dieselben Eltern.</p>

        <p>h2 + p { color: white; background-color: red; }</p>

        <figure>

          <div class="relation">

            <svg viewBox="0 0 312 173.9" width="100%" height="100%">

              <use xlink:href="#ascendant">

                <g id="ascendant">

                  <path d="m155 30v12" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m33 52v-10h247v100" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m114 42v10" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m197 42v10" stroke="#999" stroke-width="1px" fill="none"></path>

                  <rect rx="3" height="32" width="57.37" y="2.26" x="128" fill="hsl(190,20%,80%)"></rect>

                  <path d="m131 2.26c-1.7 0-3 1.34-3 3v13.93h57.3v-13.93c0-1.66-1.4-3-3-3h-51.3z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="25" x="140">div</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="4.347" fill="hsl(190,20%,80%)"></rect>

                  <path d="m7.347 47.7c-1.66 0-3 1.34-3 3v13.93h57.41v-13.93c0-1.66-1.4-3-3-3h-51.41z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="70" x="22">h2</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="169.1" fill="hsl(190,20%,80%)"></rect>

                  <path d="m172.1 47.7c-1.6 0-3 1.34-3 3v13.93h57.4v-13.93c0-1.66-1.4-3-3-3h-51.4z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="70" x="194">p</text>

                  <rect rx="3" height="32" width="57.37" y="95.75" x="252" fill="hsl(190,20%,80%)"></rect>

                  <path d="m255 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="118" x="273">li</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="86.78" fill="hsl(0,70%,80%)"></rect>

                  <path d="m89.78 47.7c-1.66 0-3 1.34-3 3v13.93h57.32v-13.93c0-1.66-1.4-3-3-3h-51.32z"

                    fill="hsl(0,70%,84%)"></path>

                  <text font-size="20px" y="70" x="110">p</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="251" fill="hsl(190,20%,80%)"></rect>

                  <path d="m254 47.7c-1.6 0-3 1.34-3 3v13.93h57.4v-13.93c0-1.66-1.4-3-3-3h-51.4z"

                    fill="hsl(190,20%,85%)"></path>

                  <text font-size="20px" y="70" x="273">ul</text>

                  <rect rx="3" height="32" width="57.37" y="140" x="251" fill="hsl(190,20%,80%)"></rect>

                  <path d="m254 140c-1.6 0-3 1.3-3 3v13.9h57.4v-13.9c0-1.7-1.4-3-3-3h-51.4z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="162" x="274">p</text>

                </g>

              </use>

            </svg>

          </div>

        </figure>

      </li>

      <!-- Indirekte Nachbar-Selektoren -->

      <li>

        <h3>Indirekte Nachbar-Selektoren</h3>

        <p>Ein Subsequent Sibling Selektor spricht alle p-Elemente an, die dem h2-Element folgen. h2 und p haben

          dabei immer dieselben Eltern – liegen in derselben Ebene.</p>

        <p>h2 ~ p { color: white; background-color: red; }</p>

        <figure>

          <div class="relation">

            <svg viewBox="0 0 312 173.9" width="100%" height="100%">

              <use xlink:href="#alli">

                <g id="alli">

                  <path d="m155 30v12" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m33 52v-10h247v9" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m114 42v10" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m197 42v108" stroke="#999" stroke-width="1px" fill="none"></path>

                  <path d="m128 99v-11h141v9" stroke="#999" stroke-width="1px" fill="none"></path>

                  <rect rx="3" height="32" width="57.37" y="2.26" x="128" fill="hsl(190,20%,80%)"></rect>

                  <path d="m131 2.26c-1.7 0-3 1.34-3 3v13.93h57.3v-13.93c0-1.66-1.4-3-3-3h-51.3z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="25" x="140">div</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="4.347" fill="hsl(190,20%,80%)"></rect>

                  <path d="m7.347 47.7c-1.66 0-3 1.34-3 3v13.93h57.41v-13.93c0-1.66-1.4-3-3-3h-51.41z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="70" x="22">h2</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="169.1" fill="hsl(190,20%,80%)"></rect>

                  <path d="m172.1 47.7c-1.6 0-3 1.34-3 3v13.93h57.4v-13.93c0-1.66-1.4-3-3-3h-51.4z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="70" x="187">ul</text>

                  <g id="li3">

                    <rect rx="3" height="32" width="57.37" y="95.75" x="168.8" fill="hsl(190,20%,80%)"></rect>

                    <path d="m171.8 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                      fill="hsl(190,20%,84%)"></path>

                    <text font-size="20px" y="118" x="191">li</text>

                  </g>

                  <g transform="translate(70)">

                    <g id="li3">

                      <rect rx="3" height="32" width="57.37" y="95.75" x="168.8" fill="hsl(190,20%,80%)"></rect>

                      <path d="m171.8 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                        fill="hsl(190,20%,84%)"></path>

                      <text font-size="20px" y="118" x="191">li</text>

                    </g>

                  </g>

                  <g transform="translate(-70)">

                    <g id="li3">

                      <rect rx="3" height="32" width="57.37" y="95.75" x="168.8" fill="hsl(190,20%,80%)"></rect>

                      <path d="m171.8 95.75c-1.6 0-3 1.34-3 3v13.95h57.4v-13.95c0-1.66-1.4-3-3-3h-51.4z"

                        fill="hsl(190,20%,84%)"></path>

                      <text font-size="20px" y="118" x="191">li</text>

                    </g>

                  </g>

                </g>

              </use>

              <use xlink:href="#child">

                <g id="child">

                  <rect rx="3" height="32" width="57.37" y="47.7" x="86.78" fill="hsl(0,70%,80%)"></rect>

                  <path d="m89.78 47.7c-1.66 0-3 1.34-3 3v13.93h57.32v-13.93c0-1.66-1.4-3-3-3h-51.32z"

                    fill="hsl(0,70%,84%)"></path>

                  <text font-size="20px" y="70" x="104">p</text>

                  <rect rx="3" height="32" width="57.37" y="47.7" x="251.6" fill="hsl(0,70%,80%)"></rect>

                  <path d="m254.6 47.7c-1.6 0-3 1.34-3 3v13.93h57.4v-13.93c0-1.66-1.4-3-3-3h-51.4z"

                    fill="hsl(0,70%,84%)"></path>

                  <text font-size="20px" y="70" x="273">p</text>

                  <rect rx="3" height="32" width="57.37" y="140" x="167.4" fill="hsl(190,20%,80%)"></rect>

                  <path d="m170.4 140c-1.6 0-3 1.3-3 3v13.9h57.4v-13.9c0-1.7-1.4-3-3-3h-51.4z"

                    fill="hsl(190,20%,84%)"></path>

                  <text font-size="20px" y="162" x="189">p</text>

                </g>

              </use>

            </svg>

          </div>

        </figure>

      </li>

      <li>

        <a href="https://www.mediaevent.de/css/css-selektor-kontextselektor.html" target="_blank">Quelle</a>

      </li>

    </ul>

    <!-- Pseudoelementselektoren -->

    <p><b>Pseudoelementselektoren</b></p>

    <ul>

      <li>

        <p>:hover</p>

      </li>

      <li>

        <p>:before</p>

      </li>

      <li>

        <p>:after</p>

      </li>

      <li>

        <p>. . .</p>

      </li>

    </ul>

    <!-- Selektoren innerhalb eines Elternelementes -->

    <p><b>Selektoren innerhalb eines Elternelementes</b></p>

    <ul>

      <li>

        <p>:first-child</p>

      </li>

      <li>

        <p>:last-child</p>

      </li>

      <li>

        <p>:nth-child(n)</p>

      </li>

      <li>

        <p>. . .</p>

      </li>

    </ul>

  </div>

  <div class="folder col-50">

    <?php	

        list_dir("/htmlgrundkurs/tag7_9");

    ?>

  </div>

  <div class="top">

    <span><a href="#">Top</a></span>

  </div>

</fieldset>

<!-- end -->

<!-- Tag6 -->

<fieldset class="tag" id="tag6">

  <legend>tag6</legend>

  <h3 class="title mar-tb">Formularaufbau, Übermittlungsmethoden</h3>

  <div class="content_inner">

    <img class="imgscale" src="images/bilder/formular.jpg" alt="" width="690" height="289">

    <p>Formulare bieten einen Dialog mit dem Besucher einer HTML-Seite. Dahinter steht das form-Tag mit

      Eingabefeldern, Abfragen und Textfeldern</p>

    <p>Beispiel:</p>

    <p>&lt;form action="form.php" method="post" id="formid"></p>

    <ul>

      <li>

        <p>action="form.php" - weiterverarbeitende Anwendung</p>

      </li>

      <li>

        <p>Versand-Methode: get oder post</p>

      </li>

    </ul>

    <div class="clearfix">

      <div class="col-33 mar-l fl-l">

        <p>Eingabefelder für Daten</p>

        <ul>

          <li>input</li>

          <li>select</li>

          <li>option</li>

          <li>textarea</li>

        </ul>

      </div>

      <div class="col-33 mar-lr fl-l">

        <p>Absenden des Formulars</p>

        <ul>

          <li>input</li>

          <li>button</li>

        </ul>

      </div>

      <div class="col-33 mar-r fl-l">

        <p>Darstellung des Formulars</p>

        <ul>

          <li>fieldset</li>

          <li>legend</li>

          <li>label</li>

          <li>optgroup</li>

        </ul>

      </div>

    </div>

  </div>

  <div class="folder col-50 mar-t">

    <?php	

        list_dir("/htmlgrundkurs/tag6");

    ?>

  </div>

  <div class="top">

    <span><a href="#">Top</a></span>

  </div>

</fieldset>

<!-- end -->

<!-- Tag5 -->

<fieldset class="tag mar-b" id="tag5">

  <legend>tag5</legend>

  <h3 class="title mar-tb">Übung - Verweise</h3>

  <div class="folder col-50">

    <?php	

        list_dir("/htmlgrundkurs/tag5");

    ?>

  </div>

  <div class="top">

    <span><a href="#">Top</a></span>

  </div>

</fieldset>

<!-- end -->

<!-- Tag4 -->

<fieldset class="tag mar-b" id="tag4">

  <legend>tag4</legend>

  <h3 class="title mar-tb">Anker-Element></h3>

  <div class="content_inner mar-b">

    <img class="imgscale" src="images/bilder/anchor-element.png" alt="" width="1146" height="294">

  </div>

  <div class="folder col-50">

    <?php	

        list_dir("/htmlgrundkurs/tag4");

    ?>

  </div>

  <div class="top">

    <span><a href="#">Top</a></span>

  </div>

</fieldset>

<!-- end -->

<!-- Tag3 -->

<fieldset class="tag mar-b" id="tag3">

  <legend>tag3</legend>

  <h3 class="title mar-tb">Bilder einbinden</h3>

  <div class="folder col-50">

    <?php	

        list_dir("/htmlgrundkurs/tag3");

    ?>

  </div>

  <div class="top">

    <span><a href="#">Top</a></span>

  </div>

</fieldset>

<!-- end -->

<!-- Tag2 -->

<fieldset class="tag mar-b" id="tag2">

  <legend>tag2</legend>

  <h3 class="title mar-tb">Listen, Listenarten und Listenpunktdarstellung</h3>

  <div class="folder col-50">

    <?php	

        list_dir("/htmlgrundkurs/tag2");

    ?>

  </div>

  <div class="top">

    <span><a href="#">Top</a></span>

  </div>

</fieldset>

<!-- end -->

<!-- Tag1 -->

<fieldset class="tag" id="tag1">

  <legend>tag1</legend>

  <h3 class="title mar-tb">Inhaltsstruktur, Überschriften, Textabsätzen</h3>

  <div class="folder col-50">

    <?php	

        list_dir("/htmlgrundkurs/tag1");

    ?>

  </div>

  <div class="top">

    <span><a href="#">Top</a></span>

  </div>

</fieldset>

<!-- end -->
<fieldset>
    <legend>display grid</legend>
    <div>
      <pre>
      body {
          display: grid;
          grid-template-columns: 1fr 300px 500px 1fr; // 1fr links und rechts, col 300px und col 500px
      }
      nav {
          grid-column: 2;
      }
      main {
          grid-column: 3;
      }
      </pre>
    </div>
    <div class="top">
        <span><a href="#">Top</a></span>
    </div>
</fieldset>
<fieldset>
    <legend>vertikal centrieren</legend>
    <div>
      <pre>
      nav > ul > li {
          display: flex;
          align-items: center;
      }
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

</div>

</div>



  <?php
    require_once "footer.php";
  ?>