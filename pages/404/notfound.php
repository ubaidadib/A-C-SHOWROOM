<?php
class notfound
{

	public function display_notfound($page)
	{
		$connect = new connect();
		$conn = $connect->getConn();
?>
		<!DOCTYPE html>
		<html lang="en">

		<head>

			<link href="css/notfoundstyles.css" rel="stylesheet" />

		</head>

		<body>


			<h1>404</h1>
			<div class="cloak__wrapper">
				<div class="cloak__container">
					<div class="cloak"></div>
				</div>
			</div>
			<div class="info">
				<h2>Wir können diese Seite nicht finden</h2>
				<p>Wir sind uns ziemlich sicher, dass diese Seite früher hier war, aber anscheinend verschwunden ist. Wir entschuldigen uns in seinem Namen.</p>
				<a href="index.php?p=home" target="_blank" rel="noreferrer noopener">A&C Cars GmbH</a>


			</div>

		</body>

		</html>
<?php }
}


?>