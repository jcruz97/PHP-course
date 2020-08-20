<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

/*$room_is_filthy = true;

if( $room_is_filthy==true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}*/



// 1.2 Clean your room Exercise, improved
/*
 Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

 When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if( $room_filthiness == $possible_states[0] ){
	echo "I'm calling the hazardous response team right now !!!";
} else if( $room_filthiness == $possible_states[1] ){
    echo "Yuk, Room is dirty : let's clean it up !";
} else if( $room_filthiness == $possible_states[2] ){
    echo "Come on dude, let's clean every day!";
} else if( $room_filthiness == $possible_states[3] ){
    echo "You are sleeping with someone today aren't you ?";  
} else if( $room_filthiness == $possible_states[4] ){
    echo "Wow you are living in a white room !";   
} else {
	echo "<br>Nothing to do, room is neat.";
}*/

/*
// 2. "Different greetings according to time" Exercise

$now = date("H:i:s"); // How to get the current time in PHP ? Google is your friend ;-)

//Bunch of hour variables to declare for each time-set in my statements below.
//It can be done with an array but I wanted to test like this.
$five_hour = mktime(5, 0, 0);
$nine_hour = mktime(9, 0, 59);
$nine_hour_one_minute = mktime(9, 1, 0);
$noon = mktime(12, 0, 59);
$noon_one_minute = mktime(12, 1, 0);
$sixteen_hour = mktime(16, 0, 59);
$sixteen_hour_one_minute = mktime(16, 1, 0);
$twentyone_hour = mktime(21, 0, 59);
$twentyone_hour_one_minute = mktime(21, 1, 0);
$night = mktime(4, 59, 59);

// Test the value of $now and display the right message according to the specifications.
if ($now > date("H:i:s", $five_hour) AND $now <= date("H:i:s" ,$nine_hour) ){
    echo "Good morning !";
} else if ($now > date("H:i:s" ,$nine_hour_one_minute) AND $now <= date("H:i:s" ,$noon) ){
    echo "Good day !";
} else if ($now > date("H:i:s" ,$noon_one_minute) AND $now <= date("H:i:s" ,$sixteen_hour) ){
    echo "Good afternoon !";
} else if ($now > date("H:i:s" ,$sixteen_hour_one_minute) AND $now <= date("H:i:s" ,$twentyone_hour) ){
    echo "Good evening !";
} else  {
    echo "Good night !";
}*/


/* 3. "Different greetings according to age" Exercise
   4. "Different greetings according to gender" Exercise
   5. "Different greetings according to mothertongue" Exercise
*/

/*
if (isset($_GET['age'])){

	$age  = array(12,18,115);

	if (isset($_GET['gender'])){

	  $greeting_sex= "mister";

	  if ($_GET['gender'] == "female"){
		  $greeting_sex = "misses";
	  }

	}

	if (isset($_GET['mothertongue'])){

		$hello = "Hello";

		if ($_GET['mothertongue'] == "no"){
			$hello = "Aloha";
		}
	}

	if ($_GET['age'] < $age[0]){
		echo "$hello $greeting_sex kiddo!";
	} else if ($_GET['age'] >= $age[0] AND $_GET['age'] < $age[1] ){
		echo "$hello $greeting_sex teenager !";
	} else if ($_GET['age'] >= $age[1] AND $_GET['age'] < $age[2] ){
		echo "$hello $greeting_sex adult !";
	} else if ($_GET['age'] > $age[2]){
		echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
	}
}



<form method="get" action="">
    <input type="" name="age">
	  <label for="age">Age</label><br>
	<input type="radio" name="gender" id="male" value="male">
      <label for="male">Male</label><br>
    <input type="radio" name="gender" id="female" value="female">
      <label for="female">Female</label><br>
	<label>Do you speak English?</label><br>  
	<input type="radio" name="mothertongue" id="yEnglish" value="yes">
      <label for="yEnglish">Yes</label><br>
	<input type="radio" name="mothertongue" id="nEnglish" value="no">
      <label for="nEnglish">No</label><br>
    <input type="submit" name="submit" value="Greet me now">
</form>
*/


//6. The Girl Soccer team Exercise
/*
if (isset($_GET['age'])){

	$age  = array(21,40);

	if (isset($_GET['gender'])){

	  if ($_GET['age'] < $age[0]){
		  echo "Sorry you don't fit the criteria";
	  } else if ($_GET['age'] >= $age[0] AND $_GET['age'] < $age[1] ){
		  echo "Welcome to the team !";
	  } else if (($_GET['age'] >= $age[0] AND $_GET['age'] <= $age[1]) AND ($_GET['gender'] == "male") ){
		  echo "It's an all female team sir!";
	  } else if ($_GET['age'] > $age[1]){
		  echo "Sorry you don't fit the criteria";
	  }

    }
}
/* 7. "Achieve the same, without the ELSE" Exercise

    if (($_GET['age'] >= $age[0] AND $_GET['age'] <= $age[1]) AND ($_GET['gender'] == "female") ){
		echo "Welcome to the team !";
	}

<form method="get" action="">
    <input type="" name="age">
	  <label for="age">Age</label><br>
	<input type="radio" name="gender" id="male" value="male">
      <label for="male">Male</label><br>
    <input type="radio" name="gender" id="female" value="female">
      <label for="female">Female</label><br>
	<input type="" name="playerName" id="cName">
      <label for="cName">Name</label><br>
    <input type="submit" name="submit" value="Greet me now">
</form>

*/
/*
if (isset($_GET['grade'])){
	$grades = array(0,4,5,9,10,11,14,15,18,20);

	if($_GET['grade'] >= $grades[0] AND $_GET['grade'] < $grades[1]){
		echo "This work is really bad. What a dumb kid!";
	} else if($_GET['grade'] >= $grades[2] AND $_GET['grade'] <= $grades[3]){
		echo "This is not sufficient. More studying is required.";
	} else if($_GET['grade'] == $grades[4]){
		echo "Barely enough!";
	} else if($_GET['grade'] >= $grades[5] AND $_GET['grade'] <= $grades[6]){
		echo "Not bad!";
	} else if($_GET['grade'] >= $grades[7] AND $_GET['grade'] <= $grades[8]){
		echo "Bravo, bravissimo!";
	} else if($_GET['grade'] == $grades[9] OR $_GET['grade'] == $grades[10]){
		echo "Too good to be true : confront the cheater!";
	}
}



<form method="get" action="">
    <input type="" name="grade" id="note">
	  <label for="note">Please put your grade here</label>
	<input type="submit" name="submit">  
</form>
*/
?>