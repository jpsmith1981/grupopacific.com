                <? 

				$projectssql = mysql_query("select ProjectID, ProjectLocation from Grupo_Project_Index ORDER BY RAND()");

				while ($pic = mysql_fetch_array($projectssql))

					{

						$ProjectID = $pic[0];

						$ProjectLocation = $pic[1];

						$sql = "select imgLocation 

							from Grupo_Project_MainPic 

							where Grupo_Project_MainPic.ProjectID = $ProjectID

							UNION 

							select Location

							from Grupo_Project_OtherMedia 

							where Grupo_Project_OtherMedia.ProjectID = $ProjectID

							UNION

							select PictureLocation

							from Grupo_Project_Subproject_Media 

							where Grupo_Project_Subproject_Media.ProjectID = $ProjectID

							ORDER BY RAND()

							LIMIT 1";

						$projectPicture = mysql_query("$sql");

						while ($picLoc = mysql_fetch_array($projectPicture))

							{

							$imgLoc = $ProjectLocation.$picLoc[0];

						$bwThumb = "includes/bwthumbcrop.php?pic=../".$imgLoc."&amp;ht=108&amp;wd=161";

						$colorThumb = "includes/thumbcrop.php?pic=../".$imgLoc."&amp;ht=108&amp;wd=161";

					

				?>

               <div class="cloud">

               		<a href="projects/projectpicker.php?project=<?=$ProjectID;?>"><img src="<?=$colorThumb;?>" onmouseover="this.src='<?=$bwThumb;?>';Stop_Animate();" onmouseout="this.src='<?=$colorThumb;?>';Start_Animate();" alt="Project" /></a>

			

                    

               </div>

				<?

								}

						}

                ?>