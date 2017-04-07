<!-- Top navbar -->
<div clasS="top-navbar">
  <div class="container">
    <ul class="nav navbar-nav">
      <li class="link"><a href="#">Poeng</a></li>
      <li class="link"><a href="#">Byoversikt</a></li>
      <li class="link"><a href="#">Statistikk</a></li>
      <li class="link"><a href="#">Wiki</a></li>
      <li class="link"><a href="#">Chat</a></li>
      <li class="link"><a href="#">Support</a></li>
    </ul>
  </div>
</div>

<!-- Main image -->
<div id="main-image">
</div>

<!-- Bottom navbar -->
<nav class="navbar navbar-default mynavbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Mafiasquad</a>
    </div>

    <?php if($page == "logginn" || $page == "registrer") { ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3" required>Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword3" required>Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-gradient">Sign in</button>
                </form>
            </ul>
        </div><!-- /.navbar-collapse -->
    <?php } else { ?>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brukernavn <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Min profil</a></li>
            <li><a href="#">Rediger profil</a></li>
            <li class="divider"></li>
            <li><a href="#">Logg ut</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
      <?php } ?>
  </div><!-- /.container-fluid -->
</nav>
