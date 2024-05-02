<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Variables</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Jersey+10&family=Josefin+Sans&family=Montserrat:wght@400;900&family=Oswald:wght@200;700&display=swap');
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="stylee.css">
   
  </head>
  <body>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  
</nav>
<div class="container my-3">
    <h2>More on PHP variables</h2>
    <h4>Rules for making Variables in PHP</h4>
        <ul>
            <li>
            Variable names must start with a letter or an underscore character.
            </li>
            <li>
            Variable names can contain letters, numbers, and underscores.
            </li>
            <li>
                Variable names are case-sensitive.
             </li>
             <li>
             Variable names should not contain spaces.
             </li>
             <li>
             Variable names should not be the same as any of PHP's reserved words.
             </li>
        </ul>
    </div>

    <div class="datatypes">
        <p>
            <?php
            $name = "Bilal";
            echo $name;

            echo "<br>";
            $x = true;
            $is_friend = false;
            echo var_dump ($x);
            echo "<br>";
            echo var_dump ($is_friend);

            echo "<br>";

            //object - Instances of classes
            // Employee is a class --> bilal can be an object

            //Array
            $friends = array("Bilal", "Tanvesh", "Jaat", "Sumit");
            echo var_dump ($friends);
            // echo "<br>";
            // echo $friends[0];
            // echo "<br>";
            // echo $friends[1];
            // echo "<br>";
            // echo $friends[2];
            // echo "<br>";
            // echo $friends[3];
            ?>
        </p>


    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  </body>
</html>