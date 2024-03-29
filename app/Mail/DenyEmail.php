<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DenyEmail extends Mailable
{
    use Queueable, SerializesModels;

        public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
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
        return $this->subject('SiCUti - Cuti Anda Tidak Dapat Disetujui')->view('mail.deny');
    }
}
