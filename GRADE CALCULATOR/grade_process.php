<?php
    $username = $_POST['username'];
    $grade= $_POST['grade'];
   
    

    if($grade>=80)
    {
        echo "Hello " . $username . ", " . "Your grade = A"; //displaying result
    }
    else if($grade>75 && $grade<79){
        echo "Hello " . $username . ", " . "Your grade = B+";
    }
    else if($grade>70 && $grade<74){
        echo "Hello " . $username . ", " . "Your grade = B";
    }
    else if($grade>65 && $grade<69){
        echo "Hello " . $username . ", " . "Your grade = C+";
    }
    else if($grade>60 && $grade<64){
        echo "Hello " . $username . ", " . "Your grade = C";
    }
    else if($grade>55 && $grade<59){
        echo "Hello " . $username . ", " . "Your grade = D";
    }
    else if($grade>50 && $grade<54){
        echo "Hello " . $username . ", " . "Your grade = E";
    }
    else if($grade>0 && $grade<49){
        echo "Hello " . $username . ", " . "Your grade = F";
    }
    else
        echo "Please enter a valid grade";

            
?>