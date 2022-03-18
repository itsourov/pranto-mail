<style>
  .big-button {
  display: block;
  width: 100%;
  
  border: none;
  background-color: #04AA6D;
  color: white;
  padding: 14px 28px;
  font-size: 200%;
  cursor: pointer;
  text-align: center;
}

</style>
<?php



$to = $_GET['to'];
$subject = "Hi ".$_GET['name']. ", ". $_GET['sign'];

if ($_GET['cat']=="video") {
 $msg = 'Hey there it\'s Mari! I want to personally thank you for trusting me and confiding in me with your question/questions! I promise to be as unbiased and honest as I usually am on TikTok. So you will send 25$ to my Venmo - Username is Wh0rescope Or send it to my Cashapp username is $Wh0rescope
 IF you are outside of the US I accept PayPal my email is Wh0rescope1@gmail.com make sure to send it as a friend or as a donation only. Don\'t send it as a business because I\'m not selling you a product 🙂 Let me know what time you sent it and please text My number (fake number I use to communicate with you for your privacy and safety) 1(657) 377-5192 ! Text me what you want me to make a video about and I\'ll get started ASAP! Can\'t wait to help you out! 🙂
 And if you don\'t feel comfortable you can always text what you want to this email!';
}elseif($_GET['cat']=="birth"){
    $msg = "Hey there it's Mari! Thank you for trusting me to give you a brief understanding of your birth-chart. This is your affordable way to see if those expensive birth chart readings are worth your while! I'll need to know where you were born! City and state, and this ones kinda hard to find but what TIME you were born. If you really can't find that part we'll make it work lol. And your birthday (month day and year From there I will give you a brief understanding of what the houses mean and i'll go over your big 3 ( sun moon and rising) 😁 I'll send it to this email once I'm done! So you will send 20$ to my Venmo - Username is Wh0rescope Or send it to my Cashapp username is \$Wh0rescope
   
    IF you are outside of the US I accept PayPal my email is Wh0rescope1@gmail.com make sure to send it as a friend or as a donation only. Don't send it as a business because I'm not selling you a product 🙂 Let me know what time you sent it and let's get started.";
}elseif($_GET['cat']=="phone"){

    $money = $_GET['money'];

  $msg = "Hey there it's Mari ! I want to personally thank you for trusting me and confiding in me with your question/questions! I promise to be as unbiased and honest as I usually am on TikTok. So you will send $money$ to my Venmo - Username is Wh0rescope Or send it to my Cashapp username is \$Wh0rescope
  IF you are outside of the US I accept PayPal my email is Wh0rescope1@gmail.com make sure to send it as a friend or as a donation only. Don't send it as a business because I'm not selling you a product 🙂 Let me know what time you sent it and what day works best for you! I'll make sure I'm available at whatever time best comforts you! My number (fake number I use to communicate with you for your privacy and safety) is 1(657) 377-5192 ! Can't wait to help you out in whatever way I can! Or We can do a call through Instagram!";

}

echo '<a class="big-button" href="mailto:'.$to.'?subject='.$subject.'&body='.$msg.'">Email send!</a>';


?>
<br>
<table border="1">
<tr>
  <td>
to:
  </td>
  <td>
    <?php echo $to; ?>
  </td>
</tr>
<tr>
  <td>
Subject:
  </td>
  <td>
    <?php echo $subject; ?>
  </td>
</tr>
<tr>
  <td>
body:
  </td>
  <td>
    <?php echo $msg; ?>
  </td>
</tr>
</table>
