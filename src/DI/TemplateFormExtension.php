<?php declare(strict_types=1);

namespace Thunbolt\DI;

use Nette\DI\CompilerExtension;
use Thunbolt\ITemplateFormRenderer;
use Thunbolt\TemplateFormRenderer;

class TemplateFormExtension extends CompilerExtension {

	public function loadConfiguration(): void {
		$builder = $this->getContainerBuilder();

		$builder->addFactoryDefinition($this->prefix('templateFormRenderer'))
			->setImplement(ITemplateFormRenderer::class);
	}

}
