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
     * @return void
     */
    public function build(): void
    {
        $this->to($this->getEmailTo())
            ->subject($this->getSubject())
            ->view('emails.meAjuda')
            ->with([
                "attributes" => $this->attributes
            ]);
    }

    /**
     * Para quem tem que enviar o email
     * @return string[]
     */
    protected function getEmailTo(): array
    {
        return ["webmaster@pedrodetoledo.sp.gov.br", "{$this->origin}@pedrodetoledo.sp.gov.br"];
    }

    protected function getSubject()
    {
        return str_replace(":origin", Str::upper($this->origin), env("MAIL_SUBJECT"));
    }


}
