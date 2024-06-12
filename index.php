<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $born = $_GET['ageBorn'];
        $actually = date("Y");
        $year = $_GET['ageActually'] ?? $actually
    ?>

    <main>
        <h2>Calculando sua idade</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ageBorn">Em que ano você nasceu?</label>
            <input type="number" name="ageBorn" id="ageBorn" max="<?=$actually?>" required>    
            
            <!-- Usando o resultado da função que pega o ano em que estamos -->
            <label for="ageActually">Quer saber sua idade em que ano? (Estamos em <strong><?=$actually?></strong>)</label>
            <input type="number" name="ageActually" id="ageActually" required>

            <input type="submit" value="Qual será minha idade?">
        </form>    
    </main>

    <section>
        <h2>Resultado</h2>

        <?php 

            // idade da pessoa no ano escolhido
            $age = $year - $born;

            echo "<p>Quem nasceu em $born, em $year tem <strong>$age anos</strong>.</p>";
        ?>

    </section>
</body>
</html>