<?php
/**
* elgg_profiler
*
* Class description here or bellow...
* 
* @author German Bortoli & Diego Gallardo
* @link http://community.elgg.org/pg/profile/pedroprez
* @copyright (c) Keetup 2010
* @link http://www.keetup.com/
* @license GNU General Public License (GPL) version 2
*/

/* [To delete] 
*  This is an class example.
*  This is the MyClass class, an extension of elggObject
*/

/**
 * Class description here
 * @author German Bortoli & Diego Gallardo
 */
class MyClass extends ElggObject {
	protected function initialise_attributes() {
		parent::initialise_attributes();
 
		$this->attributes['subtype'] = "myclass";
	}
	public function __construct($guid = null) {
		parent::__construct($guid);
	}
 
	public function getSomethingOfMyClass() {
		return true;
	}
}