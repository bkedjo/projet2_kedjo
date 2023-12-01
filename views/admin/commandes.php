<?php 

//isAuthenticated();
//executer la requete()

$commandes =getAllCommande();








// var_dump($commandes);

// $mesvoitures=getAllCommande();
include "./includes/header.php";
include "./includes/nav.php";
?>

<div class="container-small">

          <div class="d-flex justify-content-between align-items-end mb-4">
            <h2 class="mt-5 mb-0">Les commandes</h2>

          </div>

          <div class="px-0">
            <div class="table-responsive scrollbar">
              <table class="table fs--1 text-900 mb-0">
                <thead class="bg-200">
                  <tr>
                    <th scope="col" style="width: 24px;"></th>
                    <th scope="col" style="min-width: 60px;">Numero</th>
                    <th scope="col" style="min-width: 60px;">Date</th>
                    <!-- <th scope="col" style="min-width: 60px;">Quantite</th> -->
                    <th class="ps-5" scope="col" style="min-width: 150px;">Prix Total</th>
                    <th class="ps-5" scope="col" style="min-width: 150px;">Client</th>
                    <th scope="col" style="width: 24px;"></th>
                  </tr>
                </thead>
                <tbody>

       




                <?php  foreach ($commandes as $commande) { ?>


                  <tr>
                    <td class="border-0"></td>
                    <td class="align-middle"><?php echo $commande['idcommande']; ?></td>
                    <td class="align-middle">
                      <p class="line-clamp-1 mb-0 fw-semi-bold"><?php echo $commande['date_commande']; ?></p>
                    </td>
                    <!-- <td class="align-middle ps-5"><?php echo $commande['quantiteDemande']; ?></td> -->
                    <td class="align-middle ps-5"><?php echo $commande['prixTotal']; ?></td>
                    <td class="align-middle ps-5"><?php echo $commande['email']; ?></td>
                    <td class="border-0"></td>
                  </tr>
                  <?php 
                } ?>
                </tbody>
              </table>
            </div>

          </div>

        </div>