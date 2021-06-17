<?php
	session_start();
	if(isset($_POST["submit_subject"]))
	{
		if(!empty($_POST["section"]) && !empty($_POST["subject"]))
		{
			$_SESSION["Section"] = $_POST["section"];
			$_SESSION["Subject"] = $_POST["subject"];
			$_SESSION["QUENO"] = 0;

			if(!is_dir("ANSWER_FILES"))
			{
				mkdir("ANSWER_FILES");
				chdir("ANSWER_FILES");
			}
			else
				chdir("ANSWER_FILES");

			$file_name = 
						 $_SESSION["Course"]
						 ."_".
						 $_SESSION["Semester"]
						 ."_".
						 $_SESSION["Section"]
						 ."_".
						 $_SESSION["Subject"]
						 ."_".
						 $_SESSION["Scholar"].".txt";
			if(!file_exists($file_name))
			{
				$file_open = fopen($file_name , "w");
				$_SESSION["Flag"] = "True";
			}
			else
				$_SESSION["Flag"] = "False";

			$_SESSION["File"] = $file_name;
		}
	}
	if(isset($_POST["save"]) || isset($_POST["skip"]))
	{
		if(isset($_POST["save"]))
		{
			chdir("ANSWER_FILES");
			if(!empty($_POST["ans"]))
				file_put_contents($_SESSION["File"] , $_SESSION["Que_details"]."Ans : ".$_POST["ans"]."\n\n\n" , FILE_APPEND);
			else
				file_put_contents($_SESSION["File"] , $_SESSION["Que_details"]."Ans : Skipped!"."\n\n\n" , FILE_APPEND);
		}
		elseif(isset($_POST["skip"]))
		{
			chdir("ANSWER_FILES");
			file_put_contents($_SESSION["File"] , $_SESSION["Que_details"]."Ans : Skipped!"."\n\n\n" , FILE_APPEND);
		}

		$_SESSION["QUENO"] = $_SESSION["QUENO"] + 1;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PIMR Online Internal Test</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body id="three">
	<form name="student_details" method="POST" action="">
		<div>
			<img src="images/logo.png" class="logo">
			<fieldset class="thr_page">
				<center>
					<?php
						if($_SESSION["Subject"] == "WD03" && $_SESSION["Flag"]=="True")
						{
							$all_questions = [
								"What is PHP1?",
								"What is PHP2?",
								"What is PHP3?",
								"What is PHP4?",
								"What is PHP5?"
							];

							if($_SESSION["QUENO"] < sizeof($all_questions))
							{
								$no = $_SESSION["QUENO"];
								$noo = $_SESSION["QUENO"]+1; 
								$que = "Q".$noo.". ".$all_questions[$no]; 

								echo "<span class=white id=bold>All Questions : </span>";
								echo "<hr color=white width=20%>";
								for($i=0; $i<sizeof($all_questions); $i++)
								{
									$j=$i+1;
									echo "Q".$j.". ".$all_questions[$i]."<br/>";
								}
								echo "<hr color=white width=20%>";

								echo "<b>".$que."</b><br/><br/>";
								echo "<textarea name=ans rows=16 cols=150>";
								echo "</textarea><br/><br/>";
								echo "<input type=submit name=save value=Save class=round id=submit> ";
								echo "<input type=submit name=skip value=Skip class=round id=submit> ";
								echo " <button id=exit><a href=Index.php target=_self title=Exit>Exit</button></a><br/>";
								$_SESSION["Que_details"] = $que."\n\n";
							}

							if($_SESSION["QUENO"] == sizeof($all_questions))
							{
								echo "<span class=white id=bold>Done! </span>";
								echo "<button id=exit><a href=Index.php target=_self title=Exit>Exit</button></a><br/>";
								//session_unset();
								//session_destroy();
							}			
						}
						else 
						{
							echo "<span class=white id=bold>You're already done! </span>";
							echo " <button id=exit><a href=Index.php target=_self title=Exit>Exit</button></a><br/>";
							//session_unset();
							//session_destroy();
						}
					?>
				</center>
			</fieldset>
		</div>
	</form>
</body>
</html>