<?php
$zipFile = 'wordpress-5.5.1-fr_FR.zip'; // Nom du fichier zip
$extractTo = 'epc-wordpress'; // Répertoire de destination

// Ouvre l'archive ZIP
$zip = new ZipArchive;
if ($zip->open($zipFile) === TRUE) {
    // Extrait le contenu de l'archive dans le répertoire spécifié
    $zip->extractTo($extractTo);
    $zip->close();
    echo 'Archive décompressée avec succès!';
} else {
    echo 'Échec de l\'ouverture de l\'archive!';
}
?>
