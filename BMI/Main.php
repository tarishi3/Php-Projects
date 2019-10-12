<?php include "includes/header.php"?>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
			<div id="contenttext">
				<?php include "includes/title.php"?>
					<div class="bodytext" style="padding:12px;" align="justify">
					
					<strong><br /><br />
					<font color=#CC0000>* Required Fields</font>
					</strong><br /><br />
					<?php
						include "includes/functions.php";
						$weight = 0;
						$height = 0;
						$weightErr = "";
						$heightErr = "";
						$weightType = 0;
						
						if(isset($_POST['submit'])){
							if (empty($_POST["inputWeight"])) {
							$weightErr = "Error: weight is required!";
							} else {
							$weight = $_POST["inputWeight"];
							}
						
							if (empty($_POST["inputHeight"])) {
							$heightErr = "Error: height is required!";
							} else {
							$height = $_POST["inputHeight"];
							}
							
							if (!empty($_POST["weightMetric"])){
								$weightType = $_POST["weightMetric"];	
							}
						}
						
					?>
					<form  action="#" method="POST"> 
						Weight: <input type="text" name="inputWeight" />
						<select name="weightMetric" style="color: blue">
						  <option value="0" >Kg</option>
						  <option value="1">Lbs</option>
						</select>
						<strong><font color =#CC0000 > * <?php echo $weightErr;?></font></strong>
						</br></br>
						Height: <input type="text" name="inputHeight" />
						<font color = "blue" > Cm </font>
						<strong><font color =#CC0000 > * <?php echo $heightErr;?></font></strong>
						</br></br>
						<input type="submit" name="submit" value="Calculate BMI" style="background-color: #CC0000; color: white; font-weight: bold" />
						</br></br>
						<?php 
						if(isset($_POST['submit']) && !empty($_POST['inputHeight'] && !empty($_POST['inputWeight'])))
						{
							$bmi = calculateBMI($weight, $height, $weightType);
							echo "<strong><font color = #CC0000 >Your BMI = ".$bmi."</font></strong></br>";
						}
					?>
					</form>
				</div>
			</div>
			<?php include "includes/footer.php"?>
		</div>
	</div>
</body>
</html>