<?php
/**
 * Created by PhpStorm.
 * User: daedeloth
 * Date: 12/01/15
 * Time: 11:32
 */
namespace Models\Mammals;
use Models\Animal;

/**
 * Class Mammal
 * @SWG\Model()
 */
class Mammal extends Animal {

	/**
	 * @SWG\Property()
	 * @var string $family
	 */
	private $family;

}