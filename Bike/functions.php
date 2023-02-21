<?php
//functions and table

function pdo_connect_mysql() {
    global $db;
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'bezos';
    try {
    	return  $db = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }
}

function bookItem($db , $itemId , $name , $email , $date , $time){
//check if the item is available at the specified date and time
$stmt = $db->prepare('SELECT COUNT(*) FROM bookings WHERE item_id = ? AND date = ? AND time = ?');
$stmt->execute([$itemId , $date , $time]);
$count = $stmt->fetchColumn();
if($count > 0){
    //item is already booked at this date and time
    return false;
} else {
    //Item is available book it
    $stmt = $db->prepare('INSERT INTO bookings (item_id, name , email , date , time ) VALUES (? ,? ,?,?,?)');
    $stmt->execute([$itemId ,$name , $email ,$date ,$time]);
    return true;
}

}


//fucntion to retrieve all bookings for a menu item

function getItemBookings($db, $itemId){
    $stmt = $db->prepare('SELECT * FROM bookings WHERE item_id = ? ORDER BY date ASC, time ASC');
    $stmt->execute([$itemId]);
    $bookings = $stmt->fetchAll(PDO::FECTH_ASSOC);
    return $bookings;
}


//this is the changed function for client

function getClient(){
    global $db;
    $stmt = $db->prepare('SELECT * FROM clients');
    $stmt->execute();
    $clientsTable = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $clientsTable;
}


function Register(){
    //Hash the password before storing it in the database
    $hashed_password = password_hash($password , PASSWORD_DEFAULT);
    //insert the new client record into the clients table
    $sql = "INSERT INTO clients (name , email , password) VALUES (:name , :email , :password)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name' , $name);
    $stmt->bindParam(':email' , $email);
    $stmt->bindParam(':password' , $hashed_password);
    try{

        $stmt->execute();
        //return the id of the newly created client
        return $db->lastInsertId();
    } catch (PDOException $exception){
        return false;
    }



}


function login($email ,$password){
//retrieve the client recor with the specified email address
$sql = "SELECT * FROM clients WHERE email = :email";
$stmt = $db->prepare($sql);
$tmt->bindParam(':email' , $email);
try {
    $stmt->execute();
    $client = $stmt->fetch(PDO::FECTH_ASSOC);
    if ($client !== false){
        //verify the password against the hashed password stored in the db
        if(password_verify($password , $client["password"])){
            //start a new session for the client and store
            session_start();
            $_SESSION["client_id"] = $client["id"];
            return true;

        }
    }
    return false;
} catch (PDOException $exception){
    return false;
}


}

function logout(){
    session_start();
    //destroy session
    session_destroy();
}









?>