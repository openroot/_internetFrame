<!-- Begin page content -->
<main>
	<div class="container-fluid">
		<?php
			$go = (isset($_GET["go"]) && !empty($_GET["go"])) ? $_GET["go"] : "cover";

			if (file_exists("php/require_once/html/body/main/go/{$go}/{$go}.php")) {
				require_once("go/{$go}/{$go}.php");
			}
			else {
				echo "<h5>It is not ready yet.</h5>";
			}
		?>
	</div>
</main>