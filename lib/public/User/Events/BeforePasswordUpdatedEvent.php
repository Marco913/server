<?php declare(strict_types=1);

/**
 * @copyright 2019 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @author 2019 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace OCP\User\Events;

use OCP\EventDispatcher\Event;
use OCP\IUser;

/**
 * @since 18.0.0
 */
class BeforePasswordUpdatedEvent extends Event {

	/** @var IUser */
	private $user;

	/** @var string */
	private $password;

	/** @var string */
	private $recoveryPassword;

	/**
	 * @param IUser $user
	 * @param string $password
	 * @param string $recoveryPassword
	 * @since 18.0.0
	 */
	public function __construct(IUser $user,
								string $password,
								string $recoveryPassword) {
		parent::__construct();
		$this->user = $user;
		$this->password = $password;
		$this->recoveryPassword = $recoveryPassword;
	}

	/**
	 * @return IUser
	 * @since 18.0.0
	 */
	public function getUser(): IUser {
		return $this->user;
	}

	/**
	 * @return string
	 * @since 18.0.0
	 */
	public function getPassword(): string {
		return $this->password;
	}

	/**
	 * @return string
	 * @since 18.0.0
	 */
	public function getRecoveryPassword(): string {
		return $this->recoveryPassword;
	}

}
