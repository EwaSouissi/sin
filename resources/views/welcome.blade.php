<!doctype html>
<html>
    <head>
        <title>ProjektSIN</title> 
        <meta charset="utf-8">
        <link rel='stylesheet' href="{{asset('main.css')}}">
        <link rel='stylesheet' href="{{asset('css/bootstrap.min.css')}}">
        <script src="{{asset('jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('jquery.js')}}"></script>
        
    </head>
    <body class="conteiner-fluid">
        
        <div class="conteiner-fluid">
        <div class="row">
          <div class="col-md-2"></div>
          <div class=" col-md-8 col-xs-12">
        <nav class="main-menu">
            @include('menu')
        </nav>
          </div></div></div>
        <div class="row">
            <div class="col-md-2"></div>
                <div class=" col-md-8 col-xs-12">           
        <section class="main-section">
      
            <article>
             
                @yield('content')
                
            </article>
           
        </section>
            </div> 
            <div class="col-md-2"></div>
        </div> 
        <aside>
         
        </aside>
   
        
      
    <div class="bgChanger">
    <button id="bgChanger" type="button" class="btn btn-danger" onclick="changeBg('{{asset("351379.jpg")}}','{{asset("tlo.jpg")}}')">dzień/noc</button>
    </div>
        <div class="sonda hidden-xs hidden-sm " >
        <script type = "text/javascript" src = "//www.deszczowce.pl/skrypty/sonda/sonda.php?key=1797430152"></script>
        </div>
        <div class="conteiner-fluid">
        <div class="row">
          <div class="col-md-2"></div>
          <div class=" col-md-8 col-xs-12">
        <div class="imieniny">
        <script type = "text/javascript"> document.write("Dziś są imieniny: ");</script><script type = "text/javascript" src = "http://www.deszczowce.pl/skrypty/imieniny.php"></script><script type = "text/javascript">document.write("")</script>
        </div>
        </body>
    <div class="link"
    <text>Potrzebujesz prawdziwego artykułu?</text>
    <a target="_blank" href="https://pl.wikipedia.org/wiki/Wikipedia:Strona_g%C5%82%C3%B3wna">Kliknij tutaj</a>
    </div>
          </div></div></div>
        <br/>
        <br/>
        <br/>
        <br/>
    <footer>

    <div class="Flash">
<marquee behavior="alternate" bgcolor="66CCFF">KONKURS!! Do wygrania lot w jedną stronę do Meksyku! </marquee>
    </div>
    
   </footer>
</html>