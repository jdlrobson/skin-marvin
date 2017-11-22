<?php

/**
 * Marvin.
 * @ingroup Skins
 */
class SkinMarvin extends SkinTemplate {
	public $skinname = 'marvin';
	public $template = 'SkinMarvinTemplate';
	public function getDefaultModules() {
		return [
			'core' => [],
		];
	}
}
