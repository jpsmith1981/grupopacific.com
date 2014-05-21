<?
include '../includes/grupo_declare.php';
session_start();

$projectId = $_GET['project'];


$isExternalPics  = mysql_query("select ProjectPicID from Grupo_Project_MainPic where ProjectID = $projectId limit 1");
while ($externalPic = mysql_fetch_array($isExternalPics))
{
	$externalPicId = $externalPic[0];
}

if($externalPicId)
{


	$isSubProjects = mysql_query("select subProjectID from Grupo_SubProject where ProjectID = $projectId limit 1");
		while ($subProj = mysql_fetch_array($isSubProjects))
		{
			$subOrNot = $subProj[0];
		}
	
	if ($subOrNot)
	{
		header("Location: project.php?project=$projectId");
	}
	
	
	
	else
	{
		$isDescLong = mysql_query("select Description from Grupo_Project_Description where ProjectID = $projectId limit 1");
		while ($fetchedDesc = mysql_fetch_array($isDescLong))
		{
			$description = strlen($fetchedDesc[0]);
		}
		
		if ($description<900)
			header("Location: projectpan.php?project=$projectId");
		else {
			header("Location: projectsingle.php?project=$projectId");
		}
	}
}
else
{
	header("Location: projectpics.php?project=$projectId");
}
	
	?>