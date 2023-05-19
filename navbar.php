<div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">eDera</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="index.php#about" class="nav-item nav-link">About</a>
                        <a href="index.php#property" class="nav-item nav-link">Property</a>
                        <a href="index.php#contact" class="nav-item nav-link">Contact</a>   
</div>                  
                        <?php

                        if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
?>
      <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Profile</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="profile.php" class="dropdown-item">Profile</a>
                                <a href="booked-property.php" class="dropdown-item">Booked Property</a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </div> 


<?php
  
}

else {?>

 <a href="index.php#property" class="btn px-3 d-lg-flex">Register</a>
    <a href="index.php#property" class="btn btn-primary px-3 d-none d-lg-flex">Login</a> 
    </div>
      
    <?php } ?>
</ul>           
            </nav>
        </div>