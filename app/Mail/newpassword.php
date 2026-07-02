<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class newpassword extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      echo "string";
      //die();
         
     
 // return $this->from('hello@mailtrap.io')
 //            ->to('bonjour@mailtrap.io')
 //            ->cc('hola@mailtrap.io')
 //                   ->subject('Auf Wiedersehen')
 //                   ->markdown('mails.exmpl')
 //                   ->with([
 //                     'name' => 'New Mailtrap User',
 //                     'link' => '/inboxes/'
 //                   ]);
 //    }
           return $this->from($this->data['email'])->view('web/email/password')->with('data', $this->data);
      
      // else if ($this->data['subject']=='subscribe') {

      //      return $this->from($this->data['email'])->subject('subscribe')->view('users/email/subscribe')->with('data', $this->data);
      // }
      // else{

      //    echo "Faild to mail";
      // }




    }
}

?>