<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['document'])) {
    $destination = __DIR__ . '/uploads/' . basename($_FILES['document']['name']);
    if (!is_dir(dirname($destination))) mkdir(dirname($destination));
    echo move_uploaded_file($_FILES['document']['tmp_name'], $destination)
        ? 'Fichier envoye.' : 'Echec de l envoi.';
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="document" required>
    <button>Envoyer</button>
</form>
