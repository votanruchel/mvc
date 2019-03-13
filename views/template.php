<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confira a mais nova noticia</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/master.css'?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/m-style.css'?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="<?php echo BASE_URL.'assets/js/jquery-3.3.1.min.js'?>"></script>
    <script src="<?php echo BASE_URL.'assets/js/bootstrap.min.js'?>"></script>

  </head>

  <body>
    <div class="container-fluid background-grey">
      <div class="container">
        <i class="fas fa-laptop"></i><span>   Aqui voce encontra noticias e produtos revolucionarios todos os dias.</span>
      </div>
    </div>

    <div class="container-fluid top-bar">
      <div class="container int-top-bar">
        <div class="menu">
          <i  id="menu-icon" class="fas fa-bars fa-lg"></i><span id="menu-text">MENU</span>
        </div>
        <div class="menu-search">
          <input placeholder="BUSCAR" type="search" name="search" id="busca-campo" autocomplete="off" tabindex="1">
          <label for="busca-campo" class="lupa">
              <i class="fas fa-search" style="color: #FFF;"></i>
          </label>
        </div>
      </div>
    </div>

    <?php $this->loadViewInTemplate($viewName,$viewData); ?>
</body>

</html>
