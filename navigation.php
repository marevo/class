<nav role="navigation" class="navbar navbar-default navbar-fixed-top">

    <!-- Toggle menu for mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!-- default menu -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('nav').append('<h1>Этот текст добавлен с помощью jQuery - значит эта библиотека подключена</h1>');
            $('h1').fadeOut(3000);
            $('h1').fadeIn(5000);

        });
    </script>
</nav>