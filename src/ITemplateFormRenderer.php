<?php

declare(strict_types=1);

namespace Thunbolt;

interface ITemplateFormRenderer {

	/**
	 * @param string $file
	 * @return TemplateFormRenderer
	 */
	public function create(string $file): TemplateFormRenderer;

}
