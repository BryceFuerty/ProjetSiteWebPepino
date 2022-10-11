<div id="sidebar" class="sidebar-offcanvas">
    <div style="padding-top: 30px;" class="col-md-12">
        <ul class="nav nav-pills flex-column">
            
			<?php
				// on récupère le nom du script executé sans son chemin
				$page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME);
				// echo $page;
				echo '<li class="nav-item">';
				if ($page == 'index.php') {
					echo '<a class="nav-link active" href="index.php">Accueil</a>';
				}
				else {
					echo '<a class="nav-link" href="index.php">Accueil</a>';
				}
				echo '</li>';
				
				
				echo '<li class="nav-item">';
				if ($page == 'Exo 1.php') {
					echo '<a class="nav-link active" href="Exo 1.php">Exo 1</a>';
				}
				else {
					echo '<a class="nav-link" href="Exo 1.php">Exo 1</a>';
				}
				echo '</li>';
				
				
				echo '<li class="nav-item">';
				if ($page == 'Exo 2.php') {
					echo '<a class="nav-link active" href="Exo 2.php">Exo 1_2</a>';
				}
				else {
					echo '<a class="nav-link" href="Exo 2.php">Exo 2</a>';
				}
				echo '</li>';
				
				
				echo '<li class="nav-item">';
				if ($page == 'Exo 3.php') {
					echo '<a class="nav-link active" href="Exo 3.php">Exo 3</a>';
				}
				else {
					echo '<a class="nav-link" href="Exo 3.php">Exo 3</a>';
				}
				echo '</li>';	
        
        
			?>
        </ul>
    </div>
</div>

