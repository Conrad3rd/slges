<?php
session_start();
# User
$_SESSION['conrad'] = "conrad1984";

if (isset($_SESSION['conrad'])) {
	echo "session conrad ist gesetzt";
} else {
	echo "session conrad ist NICHT gesetzt";
}

?>
