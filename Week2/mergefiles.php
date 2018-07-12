





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


// mklink C:\xampp2\htdocs\mergeFiles.php
C:\Users\Zerorandom\Documents\GitHub\CCSD