<!DOCTYPE html>
<html>
<head>
	<title>BMI</title>
	<style type="text/css">
		body {
			background: lightblue;
		}

		div {
			border: 2px solid #F69;
			padding: 10px 40px;
			background: pink;
			width: 300px;
			border-radius: 1px;
			box-shadow: 10px 10px 2px #CCC;
			text-align: center;
			margin-right: auto;
			margin-left: auto;
		}

		h2 {
			color: #F06;
			text-align: center;
		}
	</style>
</head>
<body>
	<div>
		<form>
			<h2>SISTEM PENGIRAAN BMI</h2>
			<br>
			<table> Berat
				<input type="text" name="weight" id="weight"> (kg)
			</table>
			<br>
			<br>
			<table> Tinggi
				<input type="text" name="height" id="height"> (cm)
			</table>
			<br>
			<br>
			<input type="button" name="KIRA" value="KIRA" onclick="BMIcalc()">
			<input type="reset" name="Reset" value="Reset">
		</form>
	</div>

	<script>
		function BMIcalc(){
			var w_txt = document.getElementById('weight');
			var h_txt = document.getElementById('height');

			var w = parseInt(w_txt.value);
			var h = parseInt(h_txt.value);

			h = h / 100;

			var errMsg = "";
			if (w<=0) {
				errMsg = errMsg + "* Weight cannot be negative \n";
			}

			if (h<=0) {
				errMsg = errMsg + "* Height cannot be negative \n";
			}

			if (errMsg != "") {
				alert(errMsg);
			}else{
				var BMI = ((w)/(h*h));
				var resultMsg = "";
				if (BMI < 19) {
					resultMsg = "BMI anda adalah " + BMI.toFixed(2) + " Kurang berat badan";
				}else if (BMI < 25) {
					resultMsg = "BMI anda adalah " + BMI.toFixed(2) + " Berat badan normal";
				}else if (BMI < 30) {
					resultMsg = "BMI anda adalah " + BMI.toFixed(2) + " Lebihan berat badan";
				}else{
					resultMsg = "BMI anda adalah " + BMI.toFixed(2) + " Obes";
				}
				alert(resultMsg);
			}
		}
	</script>
</body>
</html>