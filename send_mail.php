<?PHP
$subject			=	"Tester de E-mail";
$body				=	$_POST['emailHtml'];
$nome_remetente		=	"Perillo Santana";
$email_remetente	=	"contato@perillosantana.com.br";


$id = $_POST['email'];
$to = $_POST['email'];
$status = 1;

$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: $nome_remetente <$email_remetente>";
mail($to,$subject,$body,$headers);
printf("(<font face=’tahoma’>$id ) mensagem para <b>$to</b> <font color=’#ff0000’><b>enviada com sucesso!</b></font></font>");