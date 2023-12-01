<?php
   include "./includes/fonction.php";

//definir la requete

//executer la requete()
$voitures =affichervoiture();

?> 

<?php
include './includes/header.php';
?>

<main>

<table class="table table-striped table-bordered">
        <thead class="table-secondary">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Marque</th>
            <th scope="col">Model</th>
            <th scope="col">Annee</th>
            <th scope="col">Prix</th>
            <th scope="col">Quantite</th>
            <th scope="col">Description</th>
            
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="fs-14">
            <?php foreach ($voitures as $voiture) {?>
            <tr>
            <th scope="row"><?php echo $voiture['idVoiture']; ?></th>
            <td><?php echo $voiture['marque']; ?></td>
            <td><?php echo $voiture['model']; ?></td>
            <td><?php echo $voiture['Annee']; ?></td>
            <td><?php echo $voiture['prix']; ?></td>
            <td><?php echo $voiture['quantite']; ?></td>
            <td><?php echo $voiture['description']; ?>
        </td>
           

            <td>
            <div>
            <div class="d-inline">
                <a href="modifiervoiture.php?id=<?php echo $voiture['idVoiture']; ?>">
                <span class="badge text-bg-warning fs-12">Modifier </span>
                </a>
                </div>
                <div class="d-inline">
                <a href="suprimervoiture.php?id=<?php echo $voiture['idVoiture']; ?>">
                <span class="badge text-bg-danger fs-12">Supprimer</span>
                    </a>

                    </div>
            <div class="d-inline">
                <a href="voitureDetail.php?id=<?php echo $voiture['idVoiture']; ?>">
                <span class="badge text-bg-success fs-12">Visualiser</span>
                    </a>

            </div>
            </div>
            </td>
            </tr>

        <?php } ?>
            
        </tbody>
        </table>








</main>



<?php
include './includes/footer.php';
?>
