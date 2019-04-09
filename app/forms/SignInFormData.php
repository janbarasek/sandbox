<?php

declare(strict_types=1);

namespace App\Forms;

use Nette;


final class SignInFormData
{
	use Nette\SmartObject;

	/** @var string */
	public $username;

	/** @var string */
	public $password;

	/** @var bool */
	public $remember;
}
