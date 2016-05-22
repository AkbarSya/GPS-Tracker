<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PhpImap\Mailbox as ImapMailbox;
use PhpImap\IncomingMail;
use PhpImap\IncomingMailAttachment;
use App\Email;

class MailController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }  

    public function getMail()
    {    	
      $email = Email::orderBy('id','desc')->paginate(10);      
      return view('manage.mail')->with('email', $email);
    }

    public function ImapEmail()
    {
      $mailbox = new PhpImap\Mailbox('{imap.gmail.com:993/imap/ssl}INBOX', 'akbar.sya19@gmail.com', 'akbar155', __DIR__);

      // Read all messaged into an array:
      $mailsIds = $mailbox->searchMailbox('ALL');
      if(!$mailsIds) {
          die('Mailbox is empty');
      }

      // Get the first message and save its attachment(s) to disk:
      $mail = $mailbox->getMail($mailsIds[0]);

      var_dump($mail);
      echo "\n\n\n\n\n";
      var_dump($mail->getAttachments());
    }

   	// public function postCompose()
   	// {
   	// 	{
    // 	return view('manage.compose');
    	    
   	// 	}
   	// }
}
