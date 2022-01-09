<?Php
require_once("lib/PromptPayQR.php");

$PromptPayQR = new PromptPayQR(); // new object
$PromptPayQR->size = 8; // ขนาดรูปของ QR
$PromptPayQR->id = '0804964806'; // PromptPay ID
$PromptPayQR->amount = 200; //  set ราคา
echo '<img src="' . $PromptPayQR->generate() . '" />';

