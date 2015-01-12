<?php
/**
 * Created by PhpStorm.
 * User: daedeloth
 * Date: 12/01/15
 * Time: 11:32
 */

namespace Models\Mamals\Cats;
use Models\Mammals\Mammal;

/**
 * Class Cat
 * @SWG\Model()
 */
class Cat extends Mammal {

	/**
	 * @SWG\Property()
	 * @var string $brand
	 */
	private $brand;

}