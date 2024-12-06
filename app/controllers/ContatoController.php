<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class ContatoController extends Controller{

    public function index(){
        $dados = array();
        //$dados['titulos'] = 'Contato - InnovaClick';

        $this->carregarViews('contato',$dados);

    }

    public function enviarEmail(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
            $mensagem = filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_SPECIAL_CHARS);
            $assunto = "CONTATO VIA SITE";

            // var_dump($nome);
            // var_dump($email);
            // var_dump($mensagem);
            // var_dump($assunto);

            //Estrutura para envio de email
            if ($nome && $email && $tel && $mensagem) {          
                // RECONHECER ESTRUTURA PHPMAILER 
                require_once("vendors/phpmailer/src/PHPMailer.php");
                require_once("vendors/phpmailer/src/SMTP.php");
                require_once("vendors/phpmailer/src/Exception.php");

                $phpmail = new PHPMailer(); //Gerando variavel de email

                try {
                    
                    $phpmail-> isSMTP(); //envio por SMTP
                    $phpmail-> SMTPDebug = 0;
    
                    $phpmail-> Host = HOST_EMAIL; //SMTP Servidor de Email
                    $phpmail-> Port = PORT_EMAIL; //Porta do Servidor SMTP
    
                    $phpmail-> SMTPSecure = 'ssl'; //Certificado / Autenticação SMTP
                    $phpmail-> SMTPAuth = true; //Caso necessite ser autenticadp
    
                    $phpmail-> Username = USER_EMAIL; //Email SMTP
                    $phpmail-> Password = PASS_EMAIL; //Senha SMTP

                    //REMETENTE E DESTINATARIO
                    $phpmail-> setFrom(USER_EMAIL , $nome); //Email do remetente
                    $phpmail-> addAddress(USER_EMAIL , $assunto); //Email do destinatário
    
                    $phpmail-> IsHTML(true); //Trabalhar com estrutura HTML

                    $phpmail-> Subject = $assunto; //Assunto enviado pelo método POST
    
                    // Estutura do Email
                    $phpmail-> msgHTML("Nome: $nome <br>
                                        E-Mail: $email <br>
                                        Telefone: $tel <br>
                                        Mensagem: $mensagem");
    
                    $phpmail-> AltBody = "Nome: $nome \n
                                        E-Mail: $email \n
                                        Telefone: $tel \n
                                        Mensagem: $mensagem";
    
                    $phpmail -> send();
                        
                    $dados = array(
                        'mensagem' => 'Obrigado pelo seu contato, em breve respoderemos.',
                        'status' => 'sucesso'
                    );

                    $this ->carregarViews('contato',$dados);
    
                    // ********************E-MAIL DE RESPOSTA****************/
                    $phpmailResposta = new PHPmailer();
        
                    $phpmailResposta->isSMTP(); 
                    $phpmailResposta->SMTPDebug = 0;
                    $phpmailResposta->Host = "smtp.hostinger.com";
                    $phpmailResposta->Port = 465;
                    $phpmailResposta->SMTPSecure = 'ssl';
                    $phpmailResposta->SMTPAuth = true;
                    $phpmailResposta->Username = HOST_EMAIL; //Email SMTP
                    $phpmailResposta->Password = PASS_EMAIL; //Senha SMTP
                    $phpmailResposta->IsHTML(true);
                    $phpmailResposta->setFrom("tipitwo@tipi02.smpsistema.com.br", "INNOVA CLICK"); //Remetente
                    $phpmailResposta->addAddress($email, $nome); //Destinatário
                    $phpmailResposta->Subject = "resposta - ". $assunto;
        
                    $phpmailResposta->msgHTML("$nome <br>
                                                Em breve retornaremos seu contato. <br>
                                                Mensagem: $mensagem <br>
                                                Emcaso de dúvidas entre em contato pelo número <br>
                                                (11)9999-6666");
                    $phpmailResposta->AltBody="$nome \n
                                                Em breve retornaremos seu contato. \n
                                                Mensagem: $mensagem \n
                                                Emcaso de dúvidas entre em contato pelo número \n
                                                (11)9999-6666";
                    $phpmailResposta->send();
                    

                }catch(Exception $e){
                    $dados = array(
                        'mensagem'          => 'Não foi possível enviar o e-mail. Por favor, tente mais tarde',
                        'status'            => 'erro',
                        'nome'              => $email,
                        'telefone'          => $tel,
                        'mensagem_usuario'  => $mensagem
                    );
                    error_log('Erro ao enviar o e-mail ' .$phpmail->ErrorInfo);
                    $this->carregarViews('contato',$dados);
                }
            }else{
                //Ebixir o form sem mensgem
                $dados = array();
                $this->carregarViews('contato',$dados);
            }
        }
    }
}//fim class