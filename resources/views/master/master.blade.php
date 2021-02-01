<html>
    <head>
        <script src="https://kit.fontawesome.com/d994d080ae.js" crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/public/src/css/main.css">

        <title>INIZIO - vstupní test</title>
    </head>
    <body>
        <header class="position-fixed" style="width: 100%; z-index: 2000; background-color: #ad0707;">

            <div class="container d-flex">
                <div class="col-6 p-3 pb-0">
                    <p><a style="font-size: 1.2rem;" class="my-0" href="/"><b>ičoSNIFFER</b></a></p>
                </div>

                <div class="col-6 d-lg-flex d-none justify-content-end p-3 pb-0">
                    <a class="my-0 mx-3" href="/">Domů</a>
                    <a class="my-0 mx-3" href="/sniff">Čmuchej</a>
                    <a class="my-0 mx-3" href="/history">Historie</a>
                </div>
            </div>

        </header>

        @yield('content')

        <footer class="px-5 py-3">
            <div class="d-flex flex-wrap justify-content-between">
                <p class="m-0 px-lg-5">Pro <b>INIZIO academy</b>, Adam Beranovský za <b>REBOOT ateliér</b></p>
                <p class="m-0 pt-4 pt-lg-0 px-lg-5"><a class="m-0" href="http://rebo.ot.it">rebo.ot.it</a></p>
            </div>
        </footer>
    </body>
</html>
