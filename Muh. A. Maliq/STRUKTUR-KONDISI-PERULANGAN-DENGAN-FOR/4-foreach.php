<?php
	$arrPresiden = array("Soekarno", "Soeharto", "Habibie", "Gusdur","Megawati", "SBY", "Jokowi");
	echo "Presiden RI dari masa ke masa :<br>";
	echo "<ol>";
	foreach ($arrPresiden as $presiden) {
		echo "<li>$presiden</li>";
	}
	echo "</ol>";
?>