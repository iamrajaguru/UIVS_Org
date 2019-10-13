
 <header>

      <nav class="navbar navbar-expand-md navbar-dark bg">

        <a class="navbar-brand" style="font-family: Algerian" href="#">UIVS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item <?php if($page=='home'){echo'active';}?>">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item dropdown  <?php if($page=='events' or $page=='occasional'){echo'active';}?>">
              <a class="nav-link dropdown-toggle"  href="<?php if($page=='home'){echo'./sub/event.php';}else{ echo'./event.php';}?> "
              id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Events
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item <?php if($page=='events'){echo'active';}?>" href="<?php if($page=='home'){echo'./sub/event.php';}else{ echo'./event.php';}?> " >Regular Activities</a>
                <a class="dropdown-item <?php if($page=='occasional'){echo'active';}?>" href="<?php if($page=='home'){echo'./sub/occassional.php';}else{ echo'./occassional.php';}?> ">Occasional Events</a>
           </li>
           <li class="nav-item  <?php if($page=='shala'){echo'active';}?>">
              <a class="nav-link" href="<?php if($page=='home'){echo'./sub/shala.php';}else{echo'./shala.php';}?> ">Padashala & Goshala</a>
            </li>
            <li class="nav-item  <?php if($page=='photogallery'){echo'active';}?>">
              <a class="nav-link" href="<?php if($page=='home'){echo'./sub/photogallery.php';}else{echo'./photogallery.php';}?> ">Photogallery</a>
            </li>
            <li class="nav-item  <?php if($page=='about'){echo'active';}?>">
              <a class="nav-link" href="<?php if($page=='home'){echo'./sub/aboutus.php';}else{echo'./aboutus.php';}?> ">About Us</a>
            </li>
            <li class="nav-item  <?php if($page=='contact'){echo'active';}?>">
              <a class="nav-link" href="<?php if($page=='home'){echo'./sub/contactus.php';}else{echo'./contactus.php';}?> ">Contact Us</a>
            </li>
          </ul>
        </div>

      </nav>
      
  
  
  </header>