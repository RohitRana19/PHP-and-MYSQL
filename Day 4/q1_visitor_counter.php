<?php

        $file = file_get_contents("count.txt");
	$visitor = $file;
	$visitor_count = $visitor+1;
	$new_file=fopen("count.txt","w");
	fwrite ($new_file,$visitor_count);
        echo "Number of visitors : $visitor";
?>