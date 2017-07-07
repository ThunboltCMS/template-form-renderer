<?php

declare(strict_types=1);

namespace Thunbolt;

interface ITemplateFormRenderer {

	/**
	 * @param string $file
	 * @return ITemplateFormRenderer
	 */
	public function create(string $file): ITemplateFormRenderer;

}
