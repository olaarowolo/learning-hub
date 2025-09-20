<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;
use Illuminate\Support\Facades\Log;

class BookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $recipientType;

    public function __construct(Booking $booking, $recipientType)
    {
        $this->booking = $booking;
        $this->recipientType = $recipientType;
    }

    public function build()
    {
        $subject = $this->recipientType === 'user' ? 'Booking Confirmation' : 'New Booking Received';

        Log::debug('Building BookingNotification email', [
            'recipientType' => $this->recipientType,
            'booking' => $this->booking->toArray(),
        ]);

        return $this->view('emails.booking-notification')
                    ->subject($subject)
                    ->with([
                        'name' => (string) $this->booking->name,
                        'email' => (string) $this->booking->email,
                        'message' => (string) $this->booking->message,
                    ]);
    }
}
