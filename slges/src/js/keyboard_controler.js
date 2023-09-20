document.onkeydown = checkKey;

function checkKey(e) {
	e = e || window.event;
	if (e.keyCode == '39') {
		window.open('01_viewer.php?id=$next', target='_self');
	}
	else if (e.keyCode == '37') {
		window.open('01_viewer.php?id=$bevor', target='_self');
	}
	else if (e.keyCode == '38') {
		window.open('01_zoomer.php?id=$bild_id', target='_self');
	}
	else if (e.keyCode == '115') {
		window.open('01_insert.php?d_hash_id=255&bild_id=$bild_id', target='_self');
	}
}
