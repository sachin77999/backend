<?php 
namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class MinuteUpdate extends Command
{
    protected $signature='minute:update';
    protected $discription='Command description';
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        //die("connection failed");
     //   $user=User::all();
       // foreach($user as $all)
        //{
       //     $all='';
     //Mail::raw("This is automatically generated Minute Update",function($message)use($all)
     //{
       //  $message->from('sachinsoni77999@gmail.com');
         //$message->to('binnygarg7@gmail.com')->subject('Minute Update');

     //});
 //       }
//$this->info('Minute Update has been send successfully');
$this->mailSend('abhishek07456.cse@gmail.com');
}
 public function mailSend($email)
 {
    require base_path("vendor/autoload.php");
    $mail = new PHPMailer(true);     // Passing `true` enables exceptions

   // try {

        // Email server settings
        $mail->SMTPDebug = 0;
       $mail->isSMTP();
        $mail->Host = 'smtp-mail.outlook.com';             //  smtp host
        $mail->SMTPAuth = true;
        $mail->Username = 'abhishek074561@outlook.com';   //  sender username
        $mail->Password = '#2696@Abhishek';       // sender password
        $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
        $mail->Port = 587;                          // port - 587/465

        $mail->setFrom('abhishek074561@outlook.com', 'sachin soni');
        $mail->addAddress($email);
        //$mail->addCC($request->emailCc);
       // $mail->addBCC($request->emailBcc);

    
        $mail->isHTML(true);                // Set email content format to HTML

        $mail->Subject = 'Hello ';
        $mail->Body    = 'Hello';

        // $mail->AltBody = plain text version of email body;

        if( !$mail->send() ) {
          //  return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
        echo"failed";
        }
        
        else {
           // return back()->with("success", "Email has been sent.");
        echo"done";
        }

   // } //catch (Exception $e) {
        // return back()->with('error','Message could not be sent.');
   // print_r($e);
    //}
}
 }
