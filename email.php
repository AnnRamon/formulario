<?php 
/* pegar os dados do formulario */
if(isset($_post['email']) && !empty($_post(['email'])));
$nome = addcslashes($_POST['name']);
$email = addcslashes($_post[email]);
$mensagem=addcslashes($_post['nessage']);

/* montar o email pra enviar  */
$to= "ramonjao39@gmail.com";
$subject = "contato do formulario br";
/*CORPO DO EMAIL */
$body = "nome:".$nome."\r\n" ."email:".$email."\r\n"."mensagem:".$mensagem;

        /* cabeçalho do email */
        $header = "from:annohelys.yzarra.salazar@gmail.com"."\r\n"."replay-to:".$email."\r\n"."x=mailer:php/".phpversion();

/* chama a funçao mail*/
if(mail($to,$subject,$body,$header)){
    echo("email enviado co sucesso!");
}
else{
    echo("o email nao pode se enviado");
}


?>