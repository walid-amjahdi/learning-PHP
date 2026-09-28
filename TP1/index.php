<html>
    <?php
        echo "<h3>pathinfo()</h3>";
        echo "<p>Retourne un tableau associatif contenant les informations sur un chemin de fichier (dirname,
            basename, extension, filename).</p>" ;
        print_r(pathinfo("TP1/index.php"));
    ?>
</html>