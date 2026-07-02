<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
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
/*
      echo "<pre>";
        print_r($data);
        die();   */

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

    
      if ($this->data['subject']=='contact') {

 return $this->from($this->data['email'])->subject('Contact Us')->view('web/email/contact')->with('data', $this->data);
      }
      else if ($this->data['subject']=='subscribe') {

        return $this->from($this->data['email'])->subject('subscribe')->view('web/email/subscribe')->with('data', $this->data);
             }
             else if ($this->data['subject']=='product') {

                return $this->from($this->data['email'])->subject('Product')->view('web/email/product')->with('data', $this->data);
                     }
                     else if ($this->data['subject']=='trackorder') {

                        return $this->from($this->data['email'])->subject('trackorder')->view('web/email/trackorder')->with('data', $this->data);
                             }
                              else if ($this->data['subject']=='callback') {
    
                                  return $this->from($this->data['email'])->subject('Request A Call')->view('web/email/callback')->with('data', $this->data);
                              }
                              else if ($this->data['subject']=='promotion') {
    
                                  return $this->from($this->data['email'])->subject('Promotions')->view('web/email/promotion')->with('data', $this->data);
                              }
          else{

        echo "Failed To send ";
      }




    }
}

?>
