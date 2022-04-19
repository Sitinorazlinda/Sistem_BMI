<!DOCTYPE html>
<html>
<head>
	<title>BMI</title>
	
	</style>
</head>
<body>
	<div>
		<form>
			<h2>SISTEM PENGIRAAN BMI</h2>
			<br>
			<table> Masukkan berat
				<input type="text" name="weight" id="weight"> (kg)
			</table>
			<br>
			<br>
			<table> Masukkan tinggis
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
					resultMsg = "BMI anda adalah " + BMI.toFixed(2) + " Anda sangat kurus";
				}else if (BMI < 25) {
					resultMsg = "BMI anda adalah " + BMI.toFixed(2) + " Berat badan anda normal";
				}else if (BMI < 30) {
					resultMsg = "BMI anda adalah " + BMI.toFixed(2) + " berat badan anda berlebihan";
				}else{
					resultMsg = "BMI anda adalah " + BMI.toFixed(2) + " Amaran anda di fasa obesiti";
				}
				alert(resultMsg);
			}
		}
		
	</script>
	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
	<div class="elfsight-app-33139e5a-1090-40c9-82c5-fa8aed222df6"></div>
</body>
</html>