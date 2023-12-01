
<?php

   //require_once './includes/header.php';
   //require_once '/includes/nav.php';

//definir la requete
global $pageData;
//var_dump($pageData);
//executer la requete()




?>

<main class="mt-5">

<table class="table table-striped table-bordered">
        <thead class="table-secondary">
            <tr>
            <th scope="col">#</th>
            <th scope="col">email</th>
            <th scope="col">token</th>
            <th scope="col">username</th>
            <th scope="col">fname</th>
             <th scope="col">lname</th>
             <th scope="col">pwd</th>
             <th scope="col">billing_address_id</th>
             <th scope="col">shipping_adress_id</th>
             <th scope="col">role_id</th>
          
             
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="fs-14">
            <?php foreach ($pageData['users'] as $user) {?>
            <tr>
            <th scope="row"><?php echo $user['id']; ?></th>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['token']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['fname']; ?></td>
            <td><?php echo $user['lname']; ?></td>
            <td><?php echo $user['pwd']; ?></td>
            <td><?php echo $user['billing_address_id']; ?></td>
            <td><?php echo $user['shipping_address_id']; ?></td>
            <td><?php echo $user['role_id']; ?></td>
            <td>
            <div>

                <div class="d-inline">
                <a href="?id=<?php echo $user['id']; ?>">
                <span class="badge text-bg-danger fs-12">Supprimer</span>
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
//include './includes/footer.php';
?>
