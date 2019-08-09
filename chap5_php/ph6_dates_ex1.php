<?php
// affichez la date du jour au format mardi 2 juillet 2019
setlocale(LC_TIME, 'french');
echo 'Nous sommes le '.strftime('%A %d %B %Y', time());
?>