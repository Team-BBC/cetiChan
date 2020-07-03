

<!--main navbar-->
<?php
  $home = '/dashboard/cetiChan/cetiChan/index.php';
  $login ='/dashboard/cetiChan/cetiChan/login.php';
  $createpost = '/dashboard/cetiChan/views/newPost.php';
  //  $bell =;
  //  $settings=;
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand pb-3" href="<?php $home?>">
    <img src="localhost:8080/dashboard/resources/manetologo1.png" width="30" class="d-inline-block align-top" height="30" alt="" >
    CetiChan
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="				navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">    
      <div class="d-flex flex-row bd-highlight">
        <div class="p-2 bd-highlight">
          <li class="nav-item">
            <?php
              echo '<a class="nav-link" href='.$home.'>Home <span class="sr-only">(current)</span></a>'
            ?>
          </li>
        </div>
        <div class="p-2 bd-highlight">
          <li class="nav-item">
            <?php
              echo '<a class="nav-link" href='.$createpost.'>Crear Post</a>'
            ?>
            
          </li>
        </div>
        <!--eliminacion de la campana
        <div class="p-2 bd-highlight">
          <li class="nav-item col px-md-5">
            <a href="" class="nav-link"> <i data-feather="bell"></i></a>
          </li>
        </div>
        -->
        <div class="p-2 bd-highlight">
          <li class="nav-item col px-md-auto">
            <a href="" class="nav-link"> <i data-feather="sliders"></i></a>
          </li>
        </div>
        <div class="p-2 bd-highlight">
          <li class="nav-item col px-md-auto">
            <?php
              echo '<a class="nav-link" href='.$login.'>Login</a>'
            ?>
            
          </li>
        </div>
      </div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
    </form>
  </div>
</nav>

<script>
  feather.replace()
</script>