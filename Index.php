<!DOCTYPE html>
<html>
<head>
	<title>PIMR Online Internal Test</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<form name="student_details" method="POST" action="section_subject.php">
		<div class="div_main">
			<img src="images/logo.png" class="logo">
			<fieldset class="fieldset">
				<legend class="legend" id="bold">Student Login</legend>
				<center>
						<table border="0px" cellpadding="5" cellspacing="5">
							<!--STUDENT NAME-->
							<tr>
				 				<td class="white" id="bold"> Student Name : </td>
								<td> <input type="text" name="student_name" required="required" class="round"></td>
							</tr>
							<!--STUDENT SCHOLAR NUMBER-->
							<tr>
								<td class="white" id="bold"> Scholar No. : </td>
								<td> <input type="text" name="student_scholar" required="required" class="round"></td>
							</tr>
							<!--STUDENT COURSE-->
							<tr>
								<td class="white" id="bold"> Course : </td>
								<td>
									<?php
										//COURSES
										$temp_course = ["BBA","BCA","B.COM","BA","LAW"];
										echo "<select name=course class=round>";
										foreach ($temp_course as $temp)
											echo "<option value=$temp id=dropdown>",$temp,"</option>";
										echo "</select>";
									?>
								</td>
							</tr>
							<!--STUDENT SEMESTER-->
							<tr>
								<td class="white" id="bold"> Semester : </td>
								<td>
									<?php
										//SEMESTERS
										$temp_semester = ["I","II","III","IV","V","VI"];
										echo "<select name=semester class=round>";
										foreach ($temp_semester as $tempp)
											echo "<option value=$tempp id=dropdown>",$tempp,"</option>";
										echo "</select>";
									?>
								</td>
							</tr>

						</table>
						<br/>
						<!--DETAILS SUBMIT BUTTON--><input type="submit" name="submit" value="Submit" class="round" id="submit"> 
						&nbsp;
						<!--DETAILS RESET BUTTON--><input type="reset" name="reset" value="Reset" class="round" id="reset">
				</center>
			</fieldset>
		</div>
	</form>
</body>
</html>