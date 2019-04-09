<?php

declare(strict_types=1);

namespace App\Forms;

use Nette;


final class SignUpFormData
{
	use Nette\SmartObject;

	/** @var string */
	public $username;

	/** @var string */
	public $email;

	/** @var string */
	public $password;
}
