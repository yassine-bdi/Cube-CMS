<?php 
require 'pageMaker.php'; 
$title = $_POST['name']; 
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Layouts' . DIRECTORY_SEPARATOR . 'skeleton.php'; 
if(isset($_POST['name'])  && isset($_POST['description'])) {
     $name=$_POST['name']; 
     $description = $_POST['description']; 
     $type = $_POST['type'];
     $page= new pageMaker($name,$description,$type); 
}
?>  
   <!-- Custom styles for this template -->
    <link href="../Layouts/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
   <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
       <header class="mb-auto">
         <div>
          <h3 class="float-md-start mb-0"><?php $page->getName(); ?></h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
             <a class="nav-link active" aria-current="page" href="#">Home</a>
             <a class="nav-link" href="#">Features</a>
             <a class="nav-link" href="#">Contact</a>
          </nav>
    </div>
       </header>

    <main class="px-3x" style="padding-top: 20%;">
       <h1><?php $page->getName(); ?></h1>
       <p class="lead"><?php $page->getDescription(); ?></p>
       <p class="lead">
       <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
       </p> 
    </main>
</body>
   <div style="padding-top:35%">
<footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
</footer>
</div>
</div>
<style>
      .bd-placeholder-img {
        font-size: 6.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body { 
          background-image: url('<?php $page->getImage(); ?>');
          background-repeat: no-repeat;
          background-position: center;
      }
    </style>

    
  
    