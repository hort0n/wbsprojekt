<?php
    require_once 'php/header.php';
?>

<div class="container col-100 bg-dark-grey border-grey text-light d-flex justify-content-end">
    <div class="container col-50 d-flex flex-direction-column justify-content-space-around">

        <div class="css-typing center">
                    <h2 class="mar-l">
                        &lt;&quest;php
                    </h2>
                    <h2 class="mar-l">
                        $name = "sergey gusev";
                    </h2>
                    <h2 class="mar-l">
                        $job = "web developer";
                    </h2>
        </div>

<!--         <div class="mar-tb center">
            <ul >
                <li>Login/Logout</li>
                <li>Einfache Benutzerverwaltung</li>
                <li>Gästebuchverwaltung</li>
            </ul>
        </div> -->
        <div class="mar-tb">
            <?php
                Navigation::ShowWorks();
            ?>
        </div>
        
    </div>

    <div class="container col-50">
        <img class="foto imgscale" src="img/f_klein.jpg" width="544" height="676" alt="">
    </div>
</div>
<div class="container col-100 bg-dark text-light">
<div class="footer" style="padding:0.5em 0">

    <p style="margin:0 0; text-align:center;">

        <small>&copy; Copyright 2021, Example Corporation</small>

    </p>

    <ul class="d-flex justify-content-center mar-t">

        <li>

            <a href="https://facebook.com" target="_blank" title="Facebook">

                <svg id="facebook" viewBox="0 0 320 512" width="1em" height="1em">

                    <path

                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"

                        fill="#fff"></path>

                </svg>

            </a>

        </li>

        <li class="mar-lr">

            <a href="https://twitter.com" target="_blank" title="Tweet about this page">

                <svg id="twitter" viewBox="0 0 512 512" width="1em" height="1em">

                    <path

                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"

                        fill="#fff"></path>

                </svg>

            </a>

        </li>

        <li>

            <a href="https://github.com" target="_blank" title="Github Repository">

                <svg viewBox="0 0 16 16" height="1em" width="1em" aria-hidden="true">

                    <path

                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"

                        fill="#fff"></path>

                </svg>

            </a>

        </li>

    </ul>

</div>
</div>

<script src="js/script.js"></script>
</body>
</html>