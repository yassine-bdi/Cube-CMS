<?php 
 $title = 'Cube CMS'; 
 require __DIR__ . DIRECTORY_SEPARATOR . 'Layouts' . DIRECTORY_SEPARATOR . 'skeleton.php'; 
?>   
 
  <body>
    
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">Cube CMS</p>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</header>

<main class="container">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Cube CMS</h1>
    <p class="lead">Quickly build your web page. It’s built with default Bootstrap css framework with your customization, choose your website theme 
      and give us your webpage name and description and let us make our magic
    </p>
  </div>
   
   <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <?php $types = ['animals','cars','sport']; ?>
          <?php for($i=0;$i<3;$i++) : ?>
             <div class="col">
              <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 fw-normal"><?= $types[$i] ?> webpage</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
                  <form action="Loader/webpage_built.php" method="POST">
                    <div class="form-group py-5">
                      <div class="py-3">
                         <input type="text" name="name" placeholder="webpage name" class="form-control " autocomplete="off">
                      </div>
                      <input type="text" name="description" placeholder="webpage description" class="form-control py-5" autocomplete="off">
                    </div>
                    <input type="text" name="type" value="<?= $types[$i] ?>" hidden>
                    <input type="submit" class="form-control btn btn-outline-primary">
                 </form>      
               </div>
              </div>
            </div>
          <?php endfor ?>
      </div>

  
