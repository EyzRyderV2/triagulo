<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Verificador de Triângulo</title>
</head>
<body>
  <h1>Verifique o Tipo de Triângulo</h1>
  <form method="post">
    <label for="lado1">Lado 1:</label>
    <input type="number" name="lado1" required step="any"><br><br>

    <label for="lado2">Lado 2:</label>
    <input type="number" name="lado2" required step="any"><br><br>

    <label for="lado3">Lado 3:</label>
    <input type="number" name="lado3" required step="any"><br><br>

    <input type="submit" value="Verificar">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = floatval($_POST["lado1"]);
    $lado2 = floatval($_POST["lado2"]);
    $lado3 = floatval($_POST["lado3"]);

    // Verifica existência de triângulo
    if (
      $lado1 + $lado2 > $lado3 &&
      $lado1 + $lado3 > $lado2 &&
      $lado2 + $lado3 > $lado1
    ) {
      echo "<h2>É possível formar um triângulo.</h2>";

      if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "<p>Tipo: Triângulo Equilátero</p>";
        echo '<img src="equilatero.png" alt="Triângulo Equilátero" width="200">';
      } elseif ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3) {
        echo "<p>Tipo: Triângulo Escaleno</p>";
        echo '<img src="escaleno.png" alt="Triângulo Escaleno" width="200">';
      } else {
        echo "<p>Tipo: Triângulo Isósceles</p>";
        echo '<img src="isosceles.png" alt="Triângulo Isósceles" width="200">';
      }

    } else {
      echo "<h2>Os valores informados não formam um triângulo válido.</h2>";
    }
  }
?>
</body>
</html>
