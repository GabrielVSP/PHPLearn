<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'mailer/src/Exception.php';
    require 'mailer/src/PHPMailer.php';
    require 'mailer/src/SMTP.php';

    class email
    {

        private $mailer;

        public function __construct($host, $username, $password, $name)
        {

            $this->mailer = new PHPMailer(true);

            //Server settings
            $this->mailer->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $this->mailer->isSMTP();                                            //Send using SMTP
            $this->mailer->Host       = $host;                     //Set the SMTP server to send through
            $this->mailer->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mailer->Username   = $username;                     //SMTP username
            $this->mailer->Password   = $password;                               //SMTP password
            $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mailer->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $this->mailer->isHTML(true);
            $this->mailer->setFrom($username, $name);
            //$this->mailer->addAddress('bielvirgiliosp@gmail.com', 'Joe User')
            $this->mailer->CharSet = "UTF-8";
        } 

        public function addAdress($email,$name)
        {

            $this->mailer->addAddress($email, $name);

        }

        public function format($info)
        {

            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body    = $info['corpo'];
            $this->mailer->AltBody = strip_tags($info['corpo']);

        }

        public function sendEmail() {

            if(/*$this->mailer->send()*/true)
            {
                return true;
            }
            else
            {
                return '';
            }

        }
            
    }
?>