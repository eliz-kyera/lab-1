<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class general_class extends db_connection
{
	//--INSERT--//
	//methods
    

    function addCustomer_cls($name, $email, $password, $country, $city, $contact){
        //write the sql
        $sql= "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`) VALUES ('$name', '$email', '$password', '$country', '$city', '$contact')";
        //execute the sql
        return $this->db_query($sql);

    }
}

//--SELECT--//
// function login_customer($a){

//     $sql =" SELECT * FROM `customer` WHERE `customer_email` = '$email'";

//     return $this -> db_fetch_one($sql);
// }
?>
	

	
	//--UPDATE--//



	//--DELETE--//
	

}

?>