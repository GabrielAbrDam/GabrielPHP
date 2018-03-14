<?php

// ****************** EXERCICE 3 ************************
//*******************************************************

// *********** Request **********************************
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"] ?? null;
    $title = $_POST["title"] ?? null;
    $actor = $_POST["actor"] ?? null;
    $director = $_POST["director"] ?? null;
    $producer = $_POST["producer"] ?? null;
    $year_of_prod = $_POST["year_of_prod"] ?? null;
    $language = $_POST["language"] ?? null;
    $category = $_POST["category"] ?? null;
    $storyline = $_POST["storyline"] ?? null;
    
    $maxCharactar = ($title && $director && $category && $producer && $storyline) >= 5;
    $inputSuccess = $title && $actor &&  $director && $producer && $year_of_prod && $language && $category && $storyline; 
    $storyline = 'https://www.youtube.com/watch?v=5dsGWM5XGdg&t=2s';
    
    // **************** connection ******************************************
    if($id && $title && $actor && $director && $producer && $year_of_prod  && $language && $category && $storyline){

        try {
            $connection = new PDO('mysql:hose=locqlhost;dbname=db_projet_individuel','root'); // sorry for the db name ... impossible to create db name "exercice3". "movie" db appears automatically in db_projet_individuel all the time
        }catch (PDOException $e){
            echo"Error";
        }
        $sql = "INSERT INTO track(id, title, actor, director, producer, year_of_prod, language, category, storyline) VALUES(:id, :title, :actor, :director, :producer, :year_of_prod, :language, :category, :storyline)";
        $statement = $connection->prepare($sql);
       
        if(!$statement->execute()){
            echo "INSERT FAILED";
            return;
        }
        $returnedData = $statement->fetchALL();
        foreach ($returnedData as $value){
            echo "title : " . $value["title"];
            echo "Director : " . $value["director"];
            echo "Year of production : " . $value["year_of_prod"];
        }
        
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice3</title>
        <meta charset="utf-8"/>
        <style>
/* **************************if error in input message in RED  ******************************* */
        p{
        color:red;
        }
        
        </style>
    </head>
    <body>
    

    <h1>Movies</h1>
    <!-- ************************************ FORM *************************************************  -->
        <form method="POST">
        	<label>Title:</label>
            <input type="text" name="title" placeholder="Title"/>
            <!-- ************************** Title : Display Error message  ****************************-->
           	<?php 
           	if (! ($inputSuccess ?? true)) {
            ?>
    		<div>
    			<p>Error in your Title, min:5 characters!</p>
    		</div>
    		<?php
            }?>
            <br/>
            <label>Actors:</label>
            <input type="text" name="actors" placeholder="Actors"/>
            <!-- ************************** Actors :Display Error message ****************************-->
            <?php 
            if (! ($inputSuccess ?? true)) {
            ?>
    		<div>
    			<p>Error in your Actors, min:5 characters!</p>
    		</div>
    		<?php
            }?>   
            <br/>
            <label>Director:</label>
            <input type="text" name="Director" placeholder="Director"/>
			 <!-- **************************Director : Display Error message ****************************-->          
            <?php 
            if (! ($inputSuccess ?? true)) {
            ?>
    		<div>
    			<p>Error in your Director, min:5 characters!</p>
    		</div>
    		<?php
            }?>
            <br/>
            <label>Producer:</label>
            <input type="text" name="Producer" placeholder=" Producer"/>
            <!-- **************************Producer : Display Error message ****************************-->            
            <?php 
            if (! ($inputSuccess ?? true)) {
            ?>
    		<div>
    			<p>Error in your Producer, min:5 characters!</p>
    		</div>
    		<?php
            }?>
            <br/>
            <label>year_of_prod :</label>
            <input type="text" name="year_of_prod" placeholder="Year of production"/>
            <!-- **************************year of production: Display Error message ****************************-->            
            <?php 
            if (! ($inputSuccess ?? true)) {
            ?>
    		<div>
    			<p>Error in your year of production, min:5 characters!</p>
    		</div>
    		<?php
            }?>
            <br/>
            <label>Language :</label>
    		<input type="text" name="Language" placeholder="Language"/>
    		<!-- **************************Language : Display Error message ****************************-->  
    		<?php 
    		if (! ($inputSuccess ?? true)) {
            ?>
    		<div>
    			<p>Error in your Language, min:5 characters!</p>
    		</div>
    		<?php
            }?>
            <br/>
            <label>Category :</label>
    		<input type="text" name="Category" placeholder="Category"/>
    		<!-- **************************Category: Display Error message ****************************-->  
    		<?php 
    		if (! ($inputSuccess ?? true)) {
            ?>
    		<div>
    			<p>Error in your Category, min:5 characters!</p>
    		</div>
    		<?php
            }?>
            <br/>
            <label> Storyline :</label>
    		<input type="text" name="Storyline" placeholder="Storyline"/>
    		<!-- **************************Storyline: Display Error message ****************************-->  
    		<?php 
    		if (! ($inputSuccess ?? true)) {
            ?>
    		<div>
    			<p>Error in your Storyline, min:5 characters!</p>
    		</div>
    		<?php
            }?>
            <br/>
            <button type="submit">Submit</button>
            <br/>
    	</form>
    </body>
</html>































