<h1>1Hello</h1>
<?php
  /* check connection */
  if (mysqli_connect_errno()) {
      printf("MySQL connecttion failed: %s", mysqli_connect_error());
  } else {
      /* print server version */
      printf("MySQL Server %s", mysqli_get_server_info($link));
  }
  /* close connection */
  mysqli_close($link);
?>
<h1>World</h1>
