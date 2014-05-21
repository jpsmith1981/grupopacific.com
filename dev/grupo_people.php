<? include 'includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Grupo Pacific - People</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="styles/searchStyle.css" />
<link href="styles/grupo_styles.css?6" rel="stylesheet" type="text/css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<![if !IE]>
<script src="includes/preloader.js" type="text/javascript"></script>
<![endif]>
</head>
<body>
	<header>
		<? include 'includes/grupo_header.php'; ?>
	</header>
	
	
	<section class="content-container">
		<div class="grupo_employeeContentArea">
        	<? if( $_GET['emp']){
					$empId = $_GET['emp']; 
					$datasql = mysql_query("select firstName, lastName, picture, bio, miscFactTitle1, miscFact, email from Grupo_People where peopleId = $empId");
					while ($info = mysql_fetch_array($datasql))
					{
						$firstName = $info[0];
						$lastName = $info[1];
						$picture = trim($info[2]);
						$bio = $info[3];
						$miscFactTitle1 = $info[4];
						$miscFact1 = $info[5];
						$email = $info[6];
						
			?>				
			<div class="grupo_employeeProfile">
            	<img src="images/grupo_employees/thumbnail.php?pic=<?=$picture;?>&ht=400&wd=400" alt="Dick Lund"/>
                <div class="employeeInfo">
                	<h1 class="left"><?=$firstName.' '.$lastName;?></h1>
			<h1 class="right"><a href="<?=$email;?>"><?=$email;?></a></h1>
                    <h2>Bio:</h2>
                    
		    <h3><?=$bio;?></h3>
                    <h2><?=$miscFactTitle1;?></h2>
                    <h3><?=$miscFact1;?></h3>
		    
                                       
                </div>
            </div>		
			<?
            		}
			?>
            <? } 
				else{
			?>
           	
            <div class="employeeArea">
            	<?
                $i=0;
				$datasql = mysql_query("select firstName, lastName, peopleID from Grupo_People order by Priority");
					while ($info = mysql_fetch_array($datasql))
					{
						$firstName = $info[0];
						$lastName = $info[1];
						$peopleID = $info[2];
						
				?>	
                <div class="grupo_employee">
                    <a href="grupo_people.php?emp=<?=$peopleID;?>">
                    <img src="images/grupo_employees/thumbnail.php?pic=<?=$firstName.$lastName;?>.jpg&ht=212&wd=159"
			 onmouseover="this.src='images/grupo_employees/thumbnail.php?pic=<?=$firstName.$lastName;?>Color.jpg&ht=212&wd=159';"
			 onmouseout="this.src='images/grupo_employees/thumbnail.php?pic=<?=$firstName.$lastName;?>.jpg&ht=212&wd=159';"
			 alt="<?=$firstName;?> <?=$lastName;?>"/>
                    <div class="label"><?=$firstName;?> <?=$lastName;?></div></a>
                </div>
                <? $i++;}
				while($i<11){
					?>
                     <div class="grupo_employee_empty">
                     </div>
					<?
				$i++;}?>
                <div class="grupo_employee_empty last">
                	<ul>
                        <li><h6>As-Built Drawings</h6></li>
                           <li><h6>Space Planning</h6></li>
                           <li><h6>Design Development</h6></li>
                           <li><h6>BOMA Analysis</h6></li>
                           <li><h6>Green Design</h6></li>
                           <li><h6>Construction Documents</h6></li>
                           <li><h6>Finish Selection</h6></li>
                           <li><h6>Permitting Process</h6></li>
                           <li><h6>Project Management</h6></li>
                           <li><h6>Graphic Design</h6></li>
                           <li><h6>Web Design/Development</h6></li>
		      		 </ul>
                </div>
                <div class="textArea">
            
		<div class="textSection first">
		<h1>Creating Environments with a Research Driven Approach</h1>
		<h1>INCITE  =  STRATEGY</h1>	    
		</div>
		
		 
              
                            
              </div>


            
            
            <? } ?>
        </div>
               
            </div>
            
	</section>
	<footer>
		<? include 'includes/grupo_footer.php'; ?>
	</footer>
</body>
</html>