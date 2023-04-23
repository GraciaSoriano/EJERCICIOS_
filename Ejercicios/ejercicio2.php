<!DOCTYPE html>
<html>
<head>
  <title>Evaluador de temperaturas</title>
</head>
<body>
  <?php
    
    class TemperaturaEvaluador {
      private $celsius;

      public function __construct($celsius) {
        $this->celsius = $celsius;
      }

      public function evaluate() {
        if ($this->celsius <= 0) {
          echo "<p style='color: blue;'>Temperatura máximamente FRIA</p>";
        } else if ($this->celsius <= 30) {

          
          echo "<p style='color: gren;'>Temperatura Estable</p>";
          
        } else {
          echo "<p style='color: red;'>Temperatura máximamente CALIENTE</p>";
        }
      }
    }

    
    if(isset($_POST['celsius'])) {
      // Convertimos el valor a float y creamos un objeto TemperaturaEvaluador
      $celsius = (float)$_POST['celsius'];
      $temperature = new TemperaturaEvaluador($celsius);

      // Mostramos el resultado de la evaluación
      $temperature->evaluate();
    }
  ?>

  <h1>Evaluador de temperaturas</h1>
  <form method="POST">
    <label>Grados Celsius: <input type="number" name="celsius"></label>
    <button type="submit">Evaluar</button>
  </form>
</body>
</html>