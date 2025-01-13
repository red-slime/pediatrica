<?php
/**
 * @license GPL-3.0-or-later
 *
 * Modified using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace TEC\Common\StellarWP\Models\Repositories\Contracts;

use TEC\Common\StellarWP\Models\Contracts\Model;

interface Deletable {
	/**
	 * Inserts a model record.
	 *
	 * @since 1.0.0
	 *
	 * @param Model $model
	 *
	 * @return bool
	 */
	public function delete( Model $model ) : bool;
}
