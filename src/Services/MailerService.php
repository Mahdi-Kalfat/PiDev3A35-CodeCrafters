<?php

namespace App\Services;

use Symfony\Component\Mailer\Exception\TransportException;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class MailerService
{
    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $twig;

    /**
     * MailerService constructor.
     *
     * @param MailerInterface $mailer
     * @param Environment $twig
     */
    public function __construct(MailerInterface $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    /**
     * @param string $subject
     * @param string $from
     * @param string $to
     * @param string $mail
     * @param bool $isHtml Whether the content of the email is HTML.
     * @throws TransportExceptionInterface
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function send(string $subject, string $from, string $to, string $mail, bool $isHtml = false): void
    {
        try {
            $email = (new Email())
                ->from($from)
                ->to($to)
                ->subject($subject);

            if ($isHtml) {
                $email->html($mail);
            } else {
                $email->text($mail);
            }

            $this->mailer->send($email);
        } catch (TransportException $e) {
            print $e->getMessage() . "\n";
            throw $e;
        }
    }
}
