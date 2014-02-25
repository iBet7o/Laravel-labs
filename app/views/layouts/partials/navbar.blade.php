<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{ HTML::link('/', 'Laravel Labs', array('class' => 'navbar-brand')) }}
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
            <ul class="nav navbar-nav">
                <li class="active">
                    {{ HTML::link('/', 'Home') }}
                </li>
                <li>
                    {{ HTML::linkRoute('usuarios', 'Usuarios') }}
                </li>
            </ul>
        </div>
    </div>
</nav>
