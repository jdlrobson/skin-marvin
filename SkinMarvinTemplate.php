<?php

/**
 * Marvin.
 * @ingroup Skins
 */
/**
 * BaseTemplate class for the fallback skin
 */
class SkinMarvinTemplate extends BaseTemplate {
	public function execute() {
		echo <<<HTML
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="/w/load.php?modules=skins.marvin.styles&amp;raw=1&amp;only=styles">
	<script>
		mw = {};
	</script>
</head>
<body'>
HTML;
		echo '<noscript>';
		echo Html::warningBox( 'Marvin requires JavaScript to function appropriately.' );
		echo '<h1>';
		$this->html( 'title' );
		echo '</h1>';
		$this->html( 'bodytext' );
		echo '</noscript>';
		echo <<<HTML
</body>
<script src="/w/load.php?modules=skins.marvin.scripts&amp;raw=1&amp;only=scripts"></script>
</html>'
HTML;
	}
}
