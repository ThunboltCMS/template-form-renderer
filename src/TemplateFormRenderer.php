<?php declare(strict_types=1);

namespace Thunbolt;

use Nette\Application\UI\ITemplateFactory;
use Nette\Forms\Form;
use Nette\Forms\IFormRenderer;

class TemplateFormRenderer implements IFormRenderer {

	/** @var ITemplateFactory */
	private $templateFactory;

	/** @var string */
	private $file;

	public function __construct(ITemplateFactory $templateFactory, string $file) {
		$this->templateFactory = $templateFactory;
		$this->file = $file;
	}

	public function render(Form $form): string {
		$template = $this->templateFactory->createTemplate();

		$template->setFile($this->file);
		$template->form = $form;

		return (string) $template;
	}

}
