
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMM-Somada Music Market</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <h1 id="pagina" style="position: absolute;opacity: 0;">{{$pagina}}</h1>
        <header>
            <div id="logo">
                <div id="loguinho">
                    <img style="height: 100%;" src="svg/media/logo.png">
                </div>
            </div>
            <div class="navbar" id="divNav">
                <ul>
                    <li id="home">
                        <a href="home">INICÍO</a>
                    </li>
                    <li id="apresentacao">
                        <a href="apresentacao">APRESENTAÇÃO</a>
                    </li>
                    <li id="programa">
                        <a href="programa">PROGRAMAÇÃO</a>
                    </li>
                    <li id="contactar">
                        <a href="contactar">CONTACTAR</a>
                    </li>
                    <li id="last">
                        <a href="inscricao">FAÇA PARTE</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="{{ $class}}" id="banner">
            <div id="centro">
               @yield('centerContent')  
            </div>
            <div id="TituloAbrev">
                <div>
                    <h1>@yield('TituloAbrevContent')</h1>
                </div>
            </div>      
        </div>
        @yield('parte1Content')
        @yield('eventoContent')
        @yield('parte2Content')
        
        @yield('patrocinadoresContent')
        @yield('footerContent')
        <div id="emRiba"><a href="#">^</a>
            <p>Ir pra cima</p>
        </div>
    </body>
</html>
