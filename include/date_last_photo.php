<?php
$template->set_filenames( array('date' => 'date_last_photo.tpl'));

setlocale (LC_TIME, 'fr_FR','fra');

$query = pwg_db_fetch_assoc(pwg_query("
SELECT date_available 
FROM ".IMAGES_TABLE."
ORDER BY date_available DESC
LIMIT 1;"))
;

$template->assign("datePicture", $query);

$template->parse('date');
$template->p();

?>