<?php

declare(strict_types=1);

namespace App\Forms;

use Nette;
use Nette\Application\UI\Form;


final class FormFactory
{
	use Nette\SmartObject;

	public function create(string $mappedType = \stdClass::class): Form
	{
		$form = new Form;
		$form->setMappedType($mappedType);
		return $form;
	}
}
