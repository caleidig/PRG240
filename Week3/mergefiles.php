<?

function FileNameEndsInCSV ($fn)
{
	$sz=strlen($filename);
	if($sz<4)
		return false;
	$j = $sz -4;
	$properExtention = ($fn[j+0] == ".")&&($fn[j+1] == "c")&&($fn[j+2] == "s")&&($fn[j+3] == "v");

	//for($i=0;$i<$sz;$i++)
	//{
	//	$fn = $filename[$i];
		//echo $fn;
	//}
}

function FileAsString ($filename, $skip_1st_line)
{
	$bigString="";
	$handle = fopen ($filename, "r");
	if (FALSE === $handle)
	{
		echo "Failed to open file <br/r>";
	}
	else 
	{ 
		IF ($skip_1st_line == true)
		{
			$string = fgets ($handle);
		}
		while(!foef($handle))
		{
			$string = fgets ($handle);
			$size = strlen ($string );
			if($size >3)
			{
				$bigString .= $string;
			}
		}
	}	
	$bigString="";
	$Dir = "records";
	if (is_dir ($Dir)) {
	$files = scandir ($Dir);
	$firstfile = true;
	$hasProperExtension=False;
	foreach($files as $FileName){
		$isSpecialFolder = ( $FileName == "." ) || ( $FileName == "..");
		if(!$isSpecialFolder){$hasProperExtension = FileNameEndsInCSV($FileName);}
		$gtg = (!$isSpecialFolder) && $hasProperExtension;
		if($gtg)
		{
			echo "File $FileName is a valid CSV file... Merging...<br/>";
			if($firstfile == true){
			$bigString = FileAsString($FileName,False);
			$firstfile = false;
		}
		else {
			$bigString = FileAsString($FileName,true);
		}
		
		}
	}
}
$bigString = $string;
$bigString .= $string;
$bigString .= $string;
}
}
}
return $bigString;
}


$bigString = FileAsString("record1.csv");

$filename_output = "merged.csv";
$out = fopen($filename_output, "w");
fprintf($out, "%s", $bigString);
fclose($out);

?>
// mklink C:\xampp2\htdocs\mergeFiles.php
C:\Users\Zerorandom\Documents\GitHub\CCSD