<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
<form method="post" action="vorm.php">
	
			<input type="hidden" name="registreerimise-aeg" value="2016-02-12">
		
			<table class="tabel">
				<caption>Sisselogimine</caption>
				
				<tr>
					<th>
						<label for="username-id">
							<p>Kasutajanimi</p>
						</label>
					</th>
					
					<td>
						<input type="text" name="username" id="username-id" placeholder="Kirjuta siia kasutajanimi">
					</td>
				</tr>
				
				<tr>
					<th>
						<label for="password-id">
							<p>Parool</p>
						</label>
					</th>
					<td>
						<input type="password" name="password" id="password-id" placeholder="Sisesta siia parool">
					</td>
				</tr>
	
				<tr>
					<td colspan="2">
						<label>
							<input type="checkbox" name="remember_me" value="pea meeles">
							<text>Jata mind meelde</text>
						</label>
					</td>
				</tr>
				
				<tr>
					<td colspan="2">
						<button type="submit"><em>Logi sisse</em></button>
					</td>
				</tr>
				
			</table>
	
		</form>
<?php
	header("content-type: text/plain; charset=utf-8");
	var_dump($_POST);
?>
</body>
</html>