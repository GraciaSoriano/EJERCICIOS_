<!DOCTYPE html>
<html>
<head>
  <title>Conversor de temperaturas</title>
</head>
<body>
  <?php
    // Definimos la clase TemperatureConverter
    class TemperatureConverter {
      private $celsius;

      public function __construct($celsius) {
        $this->celsius = $celsius;
      }

      public function toFahrenheit() {
        return ($this->celsius * 9/5) + 32;
      }
    }

    // Si se ha enviado un formulario con el valor en Celsius
    if(isset($_POST['celsius'])) {
      // Convertimos el valor a float y creamos un objeto TemperatureConverter
      $celsius = (float)$_POST['celsius'];
      $temperature = new TemperatureConverter($celsius);

      // Mostramos el resultado de la conversión
      $fahrenheit = $temperature->toFahrenheit();
      echo "<p>$celsius grados Celsius son $fahrenheit grados Fahrenheit</p>";
    }
  ?>

  <h1>Conversor de temperaturas</h1>
  <form method="POST">
    <label>Grados Celsius: <input type="number" name="celsius"></label>
    <button type="submit">Convertir</button>
  </form>
</body>
</html>