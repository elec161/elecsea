<?php
if(isset($_POST['ok'])){
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];

$name=$_POST['name'];
$phone=$_POST['phone'];
$headers="from: ".$phone;
$count=0;
$doubt=$_POST['msg'];
$to='saumyatatutorials@gmail.com';
if($q1=="a"){$count++;}
if($q2=="c"){$count++;}
if($q3=="a"){$count++;}
if($q4=="b"){$count++;}
if($q5=="b"){$count++;}
if($q6=="a"){$count++;}
if($count >= 4){echo "you passed";}
else{
echo "you fail";
}
echo "<h3>you got $count marks";
$msg="name:".$name."\n"."phone.no:".$phone."\n"."marks:".$count."\n\n"."and has this doubt"."\n\n".$doubt;
if(mail($to,$headers,$msg)){
echo "<h1>THANKS!!!</h1><br><p>your response was sent!</p>";
}
else{
echo "<h3>AWW snap server is busy or has crashed or session is over</h3>";
}

}
?>
