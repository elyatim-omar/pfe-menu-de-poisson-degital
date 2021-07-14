<?php

class Product implements JsonSerializable {
	public function jsonSerialize()
    {
        return array(
			 'id' => $this->_id,
             'Firstname' => $this->_Firstname,
             'Lastname' => $this->_Lastname,
           
        );
    }
	private $_id;
	private $_Firstname;
	private $_Lastname;

	
	public function __construct() {
	
	}
	// public function __construct($data) {
	// 	$this->fill($data);
	// }
		public function getId() { return $this->_id; }
		public function getName() { return $this->_Firstname; }
		public function getLast() { return $this->_Lastname; }
	


		public function setId($id){
			$this->_id = (int) $id;
		}

		public function setFirst($Firstname){	
					$this->_Firstname = $Firstname;
			
		}
		public function setLast($Lastname){
					$this->_Lastname = $Lastname;
		}

	

}
?>