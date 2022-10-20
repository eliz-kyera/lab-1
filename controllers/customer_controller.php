<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data




//--INSERT--//

// function add_customer_controller($name, $email, $password, $country, $city, $contact)
// {
//     //create customer instance
//     $customer_instance = new Customer();
//     //call the method from the class
//     return $customer_instance->add_customer($name, $email, $password, $country, $city, $contact);
// }
function addCustomer_ctr($name, $email, $password, $country, $city, $contact){
    //create an instance of the class
    $add_newcustomer = new general_class();
    
    //run the methods
    return $add_customer->addCustomer_cls($name, $email, $password, $country, $city, $contact);
    }


//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>

