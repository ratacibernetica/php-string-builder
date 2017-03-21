<?php
namespace ratacibernetica;

class StringBuilder {
	public $strings;

	public function append($str){
		$this->strings[] = $str;
	}

	public function join(){
 		return implode('', $this->strings);
	}
}

