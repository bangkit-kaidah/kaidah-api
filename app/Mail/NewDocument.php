<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewDocument extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $source = $this->mailData['source'];
        $receiver_name = $this->mailData['receiver_name'];

        return $this->subject('Notifikasi Perubahan Terbaru '.$source)->view('emails.new_document')
        ->with([
            'source' => $source,
            'receiver_name' => $receiver_name,
        ]);
    }
}
