<?php
	if(isset($_POST["submit"]))
	{
		session_start();
			$_SESSION["Name"] = $_POST["student_name"];
			$_SESSION["Scholar"] = $_POST["student_scholar"];
			$_SESSION["Course"] = $_POST["course"];
			$_SESSION["Semester"] = $_POST["semester"];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PIMR Online Internal Test</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<form name="student_details" method="POST" action="question.php">
		<div class="div_main">
			<img src="images/logo.png" class="logo">
			<fieldset class="sec_page">
				<center>
					<?php

						if(isset($_POST["submit"]))
						{
							echo "<table border=0px cellpadding=5 cellspacing=5>";
								if($_POST["course"]=="BCA" && $_POST["semester"]=="I")
								{
							
									echo "<tr>";
										echo "<td class=white id=bold>Section : </td>";
										echo "<td>";
											$temp_section = ["A","B"];
											echo "<select class=round name=section>";
											foreach ($temp_section as $temppp)
												echo "<option value=$temppp id=dropdown> ",$temppp,"</option>";
											echo "</select><br/>";
										echo "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td class=white id=bold>Subject : </td>";	
										echo "<td>";
											$temp_subject = ["ENGLISH01","MATHS01","FMIS","C","ITA","WD01"];
											echo "<select class=round name=subject>";
											foreach ($temp_subject as $temppp)
												echo "<option value=$temppp id=dropdown> ",$temppp,"</option>";
											echo "</select>";
										echo "</td>";
									echo "</tr>";

								}

								elseif($_POST["course"]=="BCA" && $_POST["semester"]=="II")
								{
									echo "<tr>";
										echo "<td class=white id=bold>Section : </td>";
										echo "<td>";
											$temp_section = ["A","B"];
											echo "<select class=round class=round class=round name=section>";
											foreach ($temp_section as $temppp)
												echo "<option value=$temppp id=dropdown> ",$temppp,"</option>";
											echo "</select><br/>";
										echo "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td class=white id=bold>Subject : </td>";	
										echo "<td>";
											$temp_subject = ["ENGLISH02","MATHS02","DCE","C++","UNIX","ESHIP"];
											echo "<select class=round name=subject>";
											foreach ($temp_subject as $temppp)
												echo "<option value=$temppp id=dropdown> ",$temppp,"</option>";
											echo "</select>";
										echo "</td>";
									echo "</tr>";
								}

								elseif($_POST["course"]=="BCA" && $_POST["semester"]=="III")
								{
									echo "<tr>";
										echo "<td class=white id=bold>Section : </td>";
										echo "<td>";
											$temp_section = ["A","B"];
											echo "<select class=round name=section>";
											foreach ($temp_section as $temppp)
												echo "<option value=$temppp id=dropdown> ",$temppp,"</option>";
											echo "</select><br/>";
										echo "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td class=white id=bold>Subject : </td>";	
										echo "<td>";
											$temp_subject = ["BC","CGM","DS","DBMS","STATISTICS","WD02"];
											echo "<select class=round name=subject>";
											foreach ($temp_subject as $temppp)
												echo "<option value=$temppp id=dropdown> ",$temppp,"</option>";
											echo "</select>";
										echo "</td>";
									echo "</tr>";
								}

								elseif($_POST["course"]=="BCA" && $_POST["semester"]=="IV")
								{
									echo "<tr>";
										echo "<td class=white id=bold>Section : </td>";
										echo "<td>";
											$temp_section = ["A","B"];
											echo "<select class=round name=section>";
											foreach ($temp_section as $temppp)
												echo "<option value=$temppp id=dropdown> ",$temppp,"</option>";
											echo "</select><br/>";
										echo "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td class=white id=bold>Subject : </td>";	
										echo "<td>";
											$temp_subject = ["EVS","RIT","MA","RDBMS","ACCOUNT'S","WD03"];
											echo "<select class=round name=subject>";
											foreach ($temp_subject as $temppp)
												echo "<option value=$temppp id=dropdown> ",$temppp,"</option>";
											echo "</select>";
										echo "</td>";
									echo "</tr>";
								}

 							echo "</table><br/>";
							echo "<input type=submit name=submit_subject value=Submit class=round id=submit> ";
							echo " <button id=exit><a href=Index.php target=_self title=Exit>Exit</button></a><br/>";
						}

					?>
				</center>
			</fieldset>
		</div>
	</form>
</body>
</html>