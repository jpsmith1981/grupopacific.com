<?php
session_start();
$_SESSION['layOut'] += 1;
$projectId = $_GET['project'];

$projectPicture = mysql_query("select subProjectID from Grupo_SubProject where ProjectID = $project limit 1");
				while ($picLoc = mysql_fetch_array($projectPicture))
					{
					$imgLoc = $projLocation.$picLoc[0];
				?>
					<img src="../includes/thumbnail.php?pic=../<?php echo $imgLoc;?>&ht=350&wd=466" alt="" class="<?php if($counter==0)echo 'active';?>"  />
				<?php
				$counter++;
				}
				?>

if ($_SESSION['layOut'] == 2)
{
	$_SESSION['layOut'] = 0;
	header("Location: projects/project1.php?project=$projectId");
}

	
	?>