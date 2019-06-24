<?php
class Validate{
	private $_passed = false,
			$_errors = array(),
			$_db = null;

	public function __construct() {
		$this->_db = DB::getInstance();
	}
	public function check($source, $items = array()){
		foreach($items as $item => $rules) {
			foreach($rules as $rule =>$rule_value) {
				
				$value = trim($source[$item]);
				$item  = escape($item);
				
				if($rule === 'required' && empty($value)) {
					$this->addError("<h2 align='center'>{$item} is required. </h2>");
				} else if(!empty($value)) {
					switch($rule) {
					case 'min':
						if(strlen($value) < $rule_value) {
							$this->addError("<h2 align='center'>{$item} must be a minimum of {$rule_value} characters. </h2>");
						}
					break;
					case 'max':
						if(strlen($value) > $rule_value) {
							$this->addError("<h2 align='center'>{$item} must be a maximum of {$rule_value} characters. </h2>");
						}

					break;
					case 'matches':
						if($value != $source[$rule_value]) {
							$this->addError("<h2 align='center'>{$rule_value} must match {$item}. </h2>");
						}

					break;
						case 'numeric':
						if(is_numeric($value) === true) {
							$this->addError("<h2 align='center'>{$item} cannot contain numbers. </h2>");
						}

					break;

					case 'unique':
						$check = $this->_db->get($rule_value, array($item, '=', $value));
						if($check->count()) {
							$this->addError("<h2 align='center'>Sorry, but an account with this {$item} already exists </h2>");
						}
					break;
				}
				}
			}
		}

		if(empty($this->_errors)) {
			$this->_passed = true;
		}
		return $this;

	}

	public function addError($error) {
		$this->_errors[] = $error;

	}

	public function errors() {
		return $this->_errors;
	}

	public function passed () {
		return $this->_passed;
	}
}

