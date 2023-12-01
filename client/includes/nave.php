<section class="py-0">

<div class="container-small">
  <div class="ecommerce-topbar">
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <div class="row gx-0 gy-2 w-100 flex-between-center">
        <div class="col-auto"><a class="text-decoration-none" href="../../../index.html">
            
          </a></div>
        <div class="col-auto order-md-1">
          <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
            <li class="nav-item d-flex align-items-center">
              <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label>
              </div>
            </li>
            
            

            <?php if( isset( $_SESSION['cart']))

{?> <li class="nav-item"><a class="nav-link px-2 icon-indicator icon-indicator-primary" href="cart.php" role="button"><span class="text-700" data-feather="shopping-cart" style="height:20px;width:20px;"></span><span class="icon-indicator-number"><?php echo $nbrElement;?></span></a></li>
  <?php }
?>





            
            
            
            
            <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="monprofil.php" role="button" ><span class="text-700" data-feather="user" style="height:20px;width:20px;"></span></a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="public/img/team/72x72/57.webp" alt="" />

                      </div>
                      <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                    </div>
                    <div class="mb-3 mx-3">
                      <input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" />
                    </div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-6">
          <div class="search-box ecommerce-search-box w-100">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
              <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>

            </form>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
<!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<!-- < nav menue ============================-->
<nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between">
<div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
  <ul class="navbar-nav justify-content-end align-items-center">
    <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0 active" href="acceuil.php">Home</a></li>
    <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link pe-0" href=".php">Mes commandes</a></li>
<?php if( isset( $_SESSION['panier']))

   {?> <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link pe-0" href="cart.php">Checkout</a></li>
  <?php }
  ?>
    <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link pe-0" href="logout.php">Quitter</a></li>
  </ul>
</div>
</nav>