<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifikasiBorrowing extends Mailable
{
    use Queueable, SerializesModels;

    // Variabel ini harus public agar bisa terbaca di file blade email
    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->subject('Update Status Peminjaman: ' . $this->details['status'])
                    ->view('emails.notifikasi_borrowing');
    }
}