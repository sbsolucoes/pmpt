<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class MeAjudaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    protected $attributes;

    /**
     * @var string
     */
    protected $origin;

    public function __construct(array $attributes, string $origin)
    {
        $this->attributes = $attributes;
        $this->origin = $origin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to($this->setEmailTo())
            ->subject($this->getSubject())
            ->view('emails.meAjuda')
            ->with([
                "attributes" => $this->attributes
            ]);
    }


    protected function setEmailTo(): string
    {
        return "{$this->origin}@pedrodetoledo.sp.gov.br";
    }

    protected function getSubject()
    {
        return str_replace(":origin", Str::upper($this->origin), env("MAIL_SUBJECT"));
    }


}
