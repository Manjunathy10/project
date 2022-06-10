<html>  
    
<body>  
<form method="post">  
Enter First Number :  
<input type="number" name="a" /><br><br>  
Enter Second Number:  
<input type="number" name="b" /><br><br>  
<input  type="submit" name="submit" value="swap">  
</form>  
<?php  
//with variable
if(isset($_POST['submit']))  

        $a = $_POST['a'];  
        $b = $_POST['b'];  
        

$c=$a;  
$a=$b;  
$b=$c;  
echo "With using variable<br>";
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";  
    

//without using third variable 
    if(isset($_POST['submit']))  

        $a = $_POST['a'];  
        $b = $_POST['b'];  
        

$a=$a+$b;  
$b=$a-$b;  
$a=$a-$b;  
echo "Without using third variable<br>";
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";  
    
?>  

</body>  
</html> 
