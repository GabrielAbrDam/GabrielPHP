<?php 

// ****************** EXERCICE 1 ************************
//*******************************************************

//Array with keys and values  ******************************************************
$array = ['firstname' => 'Gabriel',
          'lastname' => 'Abreu Damaso', 
          'address' => 'rue du PHP',
          'postalCode' => 'Abreu Damaso',
          'City' => 'rue du PHP',
          'email' => 'gabriel.abreudamaso@gmail.com',
          'telephone' => '691999999',
    
//convert UKdate in Frenchdate:   **************************************************
         $UKdateOfBirth = '1983-09-02'=>$FrenchdateOfBirth = date('d-m-Y', strtotime($UKdateOfBirth))]; 

?>
<!-- **************** display in HTML  ***********************--> 
<ul>
<?php 
foreach ($array as $key => $value){
    echo "<li>$key / $value</li>";   
}
?>
</ul>




