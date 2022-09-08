<!DOCTYPE HTML>  
<html>
<head>
<style>
body 
{
   margin: 7% 40%;
}
</style>
</head>
<body>  
<?php
$oversatttext="";
$text="";
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
<h2>Skriv texten du vill översätta till rövspråk:</h2>

Texten:<br> <textarea name="texten" rows="5" cols="40"></textarea>


  <br><br>

  <input type="submit" name="submit" value="Översätt!">  
</form>

<br><br><br><br>

<?php 

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//A function that takes text an prints the output as "Rövspråk"
function rovsprak($inputText)
{
    //Spliting the text and storing it in an array
    $textLettersArray = str_split($inputText);

    //Declaring an array of constants
    $consonants = array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "z", "x");


    //Looping every letter of the text against every constant to compare them
    //if they match, the letter will double and an "o" letter will be inserted
    //between the double letters. 
    for($i=0; $i< count($textLettersArray); $i++)
{

    for($j=0; $j < count($consonants);$j++)
    {
         /*The function "strtolower()" is used to also compare the small letter version
         of the letter with the constants, and making the added letter small. */            
        if ($textLettersArray[$i] == $consonants[$j] || strtolower($textLettersArray[$i]) == $consonants[$j])
        { $textLettersArray[$i] .= "o" . strtolower($textLettersArray[$i]); }
            
    }
    
                
}

//print out every letter of the new modified array
foreach($textLettersArray as $value)
    {
        echo $value;    
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{



$text = test_input($_POST["texten"]);
$oversatttext = rovsprak($text);

}
?>


</body>
</html>