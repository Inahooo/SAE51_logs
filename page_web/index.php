<!DOCTYPE html>
<html>
<head>
    <title>Ma Calculatrice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ma Calculatrice</h1>
    <form method="post" action="">
        <input type="number" name="nombre1" placeholder="Premier nombre" required>
        <select name="operation">
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="number" name="nombre2" placeholder="Deuxième nombre" required>
        <button type="submit">Calculer</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $operation = $_POST['operation'];

        // Validation des données 
        if (!is_numeric($nombre1) || !is_numeric($nombre2)) {
            echo "<p>Veuillez entrer des nombres valides.</p>";
        } else {
            switch ($operation) {
                case 'addition':
                    $resultat = $nombre1 + $nombre2;
                    break;
                // ... autres opérations ...
                case 'division':
                    if ($nombre2 == 0) {
                        echo "<p>Division par zéro impossible.</p>";
                    } else {
                        $resultat = $nombre1 / $nombre2;
                    }
                    break;
                default:
                    echo "<p>Opération invalide.</p>";
            }

            if (isset($resultat)) {
                echo "<p>Le résultat est : " . $resultat . "</p>";
            }
        }
    }
    ?>
</body>
</html>
