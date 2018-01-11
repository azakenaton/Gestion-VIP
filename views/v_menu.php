<?php
/*
 * TP PHP
 * Vue menu
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 * menu: http://www.w3schools.com/bootstrap/bootstrap_ref_comp_navs.asp
 */
?>
<!-- Menu du site -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
				<li <?php echo ($page==='index' ? 'class="active"':'')?>>
					<a href="index.php">
						<?= MENU_ACCUEIL ?>
					</a>
				</li>
        <?php if(isset($_SESSION['logged'])){ ?>
        <li <?php echo($page==='ajout' ? 'class="active"':'')?>>
					<a href="index.php?page=ajout">
						 <?= MENU_AJOUT?>
					</a>
				</li> 
        <?php }
                else{
                    
                } ?>
        <?php if(isset($_SESSION['logged'])){ ?>
        <li <?php echo($page==='ajoutcat' ? 'class="active"':'')?>>
					<a href="index.php?page=ajoutcat">
						 <?= MENU_AJOUTCAT?>
					</a>
				</li> 
        <?php }
                else{
                    
                } ?>
      
    </ul>
      
    <?php if(!isset($_SESSION['logged'])){ ?>
    <ul class="nav navbar-nav navbar-right">
        <li <?php echo($page==='connexion' ? 'class="active"':'')?>>
            <a href="index.php?page=connexion">
                <?= MENU_CONNEXION ?>
    </a>
        </li>
      </ul>
    <?php }
      else{ ?>
          <ul class="nav navbar-nav navbar-right">
        <li <?php echo($page==='connexion' ? 'class="active"':'')?>>
            <a href="index.php?page=deconnexion">
                <?= MENU_DECONNEXION ?>
        </a>
        </li>
    </ul>
    <?php } ?>
  </div>
</nav>


