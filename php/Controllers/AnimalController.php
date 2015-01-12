<?php
/**
 * Created by PhpStorm.
 * User: daedeloth
 * Date: 12/01/15
 * Time: 11:35
 */

/**
 * @SWG\Resource(
 *     apiVersion="1.0",
 *     swaggerVersion="1.2",
 *     resourcePath="/animals"
 * )
 */

/**
 * @SWG\Api(
 *   path="/animals/cats",
 *   description="Operations on cats",
 * 	 @SWG\Operation(
 *     	method="GET",
 * 	   	summary="Return a round",
 *		type="Cat", nickname="get"
 * 	  )
 * )
 *
 * @SWG\Api(
 *   path="/animals/mammals",
 *   description="Operations on mammals",
 * 	 @SWG\Operation(
 *     	method="GET",
 * 	   	summary="Return a round",
 *		type="Mammal", nickname="get"
 * 	  )
 * )
 */

class AnimalController {



}