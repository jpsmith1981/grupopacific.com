<?php
ob_start();
include '../includes/grupo_declare.php';
session_start();

$projectId = $_GET['project'];


$isExternalPics  = mysql_query("select ProjectPicID,imgLocation from Grupo_Project_MainPic where ProjectID = $projectId limit 1");
while ($externalPic = mysql_fetch_array($isExternalPics))
{
	$externalPicId = $externalPic[0];
	$photoLocation = $externalPic[1];
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
		$projectLoc = mysql_query("select ProjectLocation from Grupo_Project_Index where ProjectID = $projectId limit 1");
		while ($proDir = mysql_fetch_array($projectLoc))
		{
			$externalPicId = '../'.$proDir[0].$photoLocation;
			
		}
		list($width, $height) = getimagesize($externalPicId);
			
		if ($height/$width<.55)
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
ob_flush();
	?>