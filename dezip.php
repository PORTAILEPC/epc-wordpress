<?php
$zipFile = 'wordpress-5.5.1-fr_FR.zip'; // Nom du fichier zip
$extractTo = 'epc-wordpress'; // R�pertoire de destination

// Ouvre l'archive ZIP
$zip = new ZipArchive;
if ($zip->open($zipFile) === TRUE) {
    // Extrait le contenu de l'archive dans le r�pertoire sp�cifi�
    $zip->extractTo($extractTo);
    $zip->close();
    echo 'Archive d�compress�e avec succ�s!';
} else {
    echo '�chec de l\'ouverture de l\'archive!';
}
?>
