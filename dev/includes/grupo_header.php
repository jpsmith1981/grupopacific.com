                <div class="headerLogo">
                    <a href="<?php echo $site_root?>home.php"><img src="<?php echo $site_root?>images/Logo.gif" alt="Grupo"/></a>
                    
                </div>
              
		<?php
		$pagename = basename($_SERVER["PHP_SELF"]);
	
		
		?>
        <div class="headerNav">
        
			<nav>
				<ul>
                <li><a href="<?php echo $site_root?>home.php" <?php if($pagename == "home.php")echo ' style="color:#6989C6" '; ?>>Home</a></li>
				<li><a href="<?php echo $site_root?>grupo_about.php" <?php if($pagename == "grupo_about.php")echo ' style="color:#6989C6" '; ?>>About</a></li>
                <li><a href="<?php echo $site_root?>grupo_portfolio.php" <?php if($pagename == "grupo_portfolio.php")echo ' style="color:#6989C6" '; ?>>Portfolio</a></li>
				<li><a href="<?php echo $site_root?>grupo_people.php" <?php if($pagename == "grupo_people.php")echo ' style="color:#6989C6" '; ?>>People</a></li>
				<!--<li><a href="<?php echo $site_root?>grupo_currents.php" <?php if($pagename == "grupo_currents.php")echo ' style="color:#6989C6" '; ?>>Currents</a></li>-->
				<li><a href="<?php echo $site_root?>grupo_contact.php" <?php if($pagename == "grupo_contact.php")echo ' style="color:#6989C6" '; ?>>Contact</a></li>
			    </ul>
			</nav>
		</div>
		
		<div class="headerSearch">
			<form action ="<?php echo $site_root?>grupo_portfolio.php" class="form-wrapper cf" autocomplete="off" name = "formname" method = "post">
				<input type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']?>" id="uniqueId" />
				<input type = "text" name = "qry" id = "qry" placeholder="Search here..." required />
				<input type="submit" value="Search" class="button" />
			</form>
		</div>