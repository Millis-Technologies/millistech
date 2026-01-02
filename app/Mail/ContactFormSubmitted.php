<?php

namespace App\Mail;

use App\Models\FormSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable {
    use Queueable, SerializesModels;

    public function __construct(public FormSubmission $submission) {
    }

    public function envelope(): Envelope {
        return new Envelope(
            to: 'mmillis@pm.me',
            subject: 'Contact Form Submission from ' . $this->submission->name,
        );
    }

    public function content() {
        return new \Illuminate\Mail\Mailables\Content(
            view: 'emails.contact-form',
            with: [
                'name' => $this->submission->name,
                'email' => $this->submission->email,
                'message' => $this->submission->message,
            ]
        );
    }

    public function attachments(): array {
        return [];
    }
}
