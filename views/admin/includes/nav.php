


<div class="container py-3">
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Voitures</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07">
              <li><a class="dropdown-item" href="ajoutervoiture.php" target="contentFrame">Nouveau</a></li>
              <li><a class="dropdown-item" href="index.php">Mes voitures</a></li>
             
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Clients</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07">
              <li><a class="dropdown-item" href="mesclients.php">Mes clients</a></li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="commandes.php">Commandes</a>
          </li>

        </ul>

      </div>



        <div class="text-end">
        <a class="navbar-brand fs-14" href="#"><?php echo $_SESSION['email']; ?> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
      <div class="text-end">
      <a class="navbar-brand fs-14" href="logout.php"> 
          <button type="button" class="btn btn-outline-light ms-2 me-2 fs-14">Quitter</button>
          </a>
        </div>


    </div>
  </nav>
</header>