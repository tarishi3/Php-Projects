<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	
	function convertToMeters($cm){
		$meter = $cm/100;
		return $meter;
	}
	
	function convertToInches($cm){
		$inch = $cm/2.54;
		return $inch;
	}
	
	function calculateBMI($weight, $height, $type){
		if ($type == 0){
			$meter = convertToMeters($height);
			$bmi = $weight/($meter * $meter);
		}
		else {
			$inch = convertToInches($height);
			$bmi = ($weight/($inch * $inch))*703.06957964;
		}
		return round($bmi, 2);
	}
	
?>