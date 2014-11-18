<?php

$un[] = "aaaa";
$un[] = "aa";
$un[] = "aaa";


$username = "";

// nao entrou
if (!isset($_GET['vuser'])) {
	echo json_encode(FALSE);
	return;
}

//

$username = trim($_GET['vuser']);

if (in_array($username, $un)) {
	echo json_encode(FALSE);
} else {
	echo json_encode(TRUE);
}
?>