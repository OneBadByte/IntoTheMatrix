<?php

$file = fopen("testFile.txt" , 'w') or die("failed to create file");

$text = <<<_END

Line 1
Line 2
Line 3


_END;


fwrite($file, $text) or die("could not write to file");
fclose($fh);
echo "file 'testFile.txt written successfully";