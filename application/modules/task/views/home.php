<?php
	echo "<h1>Welcome</h1>";
	// print_r($data);
	foreach ($query->result() as $row) {
				echo "<ul>";
				echo '<li><h4>'.$row->article_title.'</h4><br>';
				echo ''.$row->author.'<br>';
				echo ''.$row->postdate.'<br>';
				echo ''.$row->content.'</li><br><br>';
				echo "</ul>";
			}
	
?>