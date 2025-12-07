<?php
require_once 'backend.php';

if (isset($_POST['name']) && isset($_POST['number'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    
    // Rimuovi i caratteri '/' dalla data
    $number = str_replace('/', '', filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING));

    // Calcolo del numero fortunato (semplificato)
    $sum = array_sum(str_split($number));
    $sum = $sum > 9 ? array_sum(str_split((string)$sum)) : $sum;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lettore Cold Reading</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($_POST['name']) && isset($_POST['number'])): ?>
        <h1 class="title">La tua Lettura del futuro</h1>
        <p>Ciao <em><?php echo htmlspecialchars($name); ?></em>,</p>

        <h2>Generale</h2>
        <p><?php echo getFrase('generale', 'passato', $frasi); ?></p>
        <p><?php echo getFrase('generale', 'presente', $frasi); ?></p>
        <p><?php echo getFrase('generale', 'futuro', $frasi); ?></p>

        <h2>Amore</h2>
        <p><?php echo getFrase('amore', 'passato', $frasi); ?></p>
        <p><?php echo getFrase('amore', 'presente', $frasi); ?></p>
        <p><?php echo getFrase('amore', 'futuro', $frasi); ?></p>

        <h2>Salute</h2>
        <p><?php echo getFrase('salute', 'passato', $frasi); ?></p>
        <p><?php echo getFrase('salute', 'presente', $frasi); ?></p>
        <p><?php echo getFrase('salute', 'futuro', $frasi); ?></p>

        <h2>Lavoro</h2>
        <p><?php echo getFrase('lavoro', 'passato', $frasi); ?></p>
        <p><?php echo getFrase('lavoro', 'presente', $frasi); ?></p>
        <p><?php echo getFrase('lavoro', 'futuro', $frasi); ?></p>

        <p>Il tuo numero fortunato è: <em><?php echo $sum; ?></em></p>

        <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">Nuova lettura</a>

    <?php else: ?>
    <h1 class="title">Prova la tua lettura del futuro</h1>
        <form method="post">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" placeholder="Nome" required><br><br>

            <label for="number">Data di nascita:</label>
            <input type="text" name="number" id="number" placeholder="GG/MM/AAAA" required><br><br>

            <button type="submit">Via alla tua lettura</button>
        </form>
    <?php endif; ?>
</body>
</html>
    <?php endif; ?>
</body>
</html>
