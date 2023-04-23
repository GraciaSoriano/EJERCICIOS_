<!DOCTYPE html>
<html>
<head>
	<title>Juego de Azar</title>
	<style>
		table {
			border-collapse: collapse;
			margin-bottom: 20px;
		}
		th, td {
			border: 1px solid purple;
			padding: 10px;
			text-align: center;
		}
	</style>
	<script>
		function jugar() {
			var numero = Jugar.getElementById("numero").value;
			var costo = Jugar.getElementById("costo").value;
			if (numero >= 0 && numero <= 100 && costo >= 1 && costo <= 10) {
				Jugar.getElementById("jugar-btn").disabled = true;
				Jugar.getElementById("numero").disabled = true;
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						var resultado = JSON.parse(this.responseText);
						if (resultado.gano) {
							alert("¡Felicidades! Ganaste $" + resultado.dinero_ganado);
						} else {
							alert("Lo siento, no ganaste esta vez. ¡Suerte para la próxima!");
						}
						Jugar.getElementById("jugar-btn").disabled = false;
						Jugar.getElementById("numero").disabled = false;
						Jugar.getElementById("numero").value = "";
					}
				};
				xhttp.open("GET", "jugar.php/numero=" + numero + "&costo=" + costo, true);
				xhttp.send();
			} else {
				alert("Ingrese un número entre 0 y 100 y un costo entre $1 y $10.");
			}
		}
	</script>
</head>
<body>
	<h1>Juego de Azar</h1>
	<p>Ingrese un numero entre 0 y 100 y un costo entre $1 y $10 para jugar:</p>
	<input type="number" id="numero" min="0" max="100">
	<select id="costo">
		<option value="1">$1</option>
		<option value="2">$2</option>
		<option value="3">$3</option>
		<option value="4">$4</option>
		<option value="5">$5</option>
		<option value="6">$6</option>
		<option value="7">$7</option>
		<option value="8">$8</option>
		<option value="9">$9</option>
		<option value="10">$10</option>
	</select>
	<button type="button" id="jugar-btn" onclick="jugar()">Jugar</button>
	<table>
		<thead>
			<tr>
				<th>Costo</th>
				<th>Premio</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>$1</td>
				<td>$70</td>
			</tr>
			<tr>
				<td>$2</td>
				<td>$140</td>
			</tr>
			<tr>
				<td>$3</td>
				<td>$210</td>
			</tr>
			<tr>
				<td>$4</td>
				<td>$280</td>
			</tr>
			<tr>
				<td>$5</td>
				<td>$350</td>
			</tr>
			<tr>
				<td>$6</td>
				<td>$420</td>
			</tr>
			<tr>
				<td>$7</td>
				<td>$490</td>
			</tr>
			<tr>
				<td>$8</td>
				<td>$560</td>
			</tr>
			<tr>
				<td>$9</td>
				<td>$630</td>
			</tr>
			<tr>
				<td>$10</td>
				<td>$700</td>
			</tr>
		</tbody>
	</table>
</body>
</html>