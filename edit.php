<?php
/* Esto producirá un error. Fíjese en el html
 * que se muestra antes que la llamada a header() */
header('Location: http://localhost:3000/administradores/');
exit;
?>