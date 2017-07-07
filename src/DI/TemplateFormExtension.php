<?php

declare(strict_types=1);

namespace Thunbolt\DI;

use Nette\DI\CompilerExtension;
use Thunbolt\ITemplateFormRenderer;
use Thunbolt\TemplateFormRenderer;

class TemplateFormExtension extends CompilerExtension {

	public function loadConfiguration() {
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('templateFormRenderer'))
			->setClass(ITemplateFormRenderer::class)
			->setFactory(TemplateFormRenderer::class);
	}

}
