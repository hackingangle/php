<?php
/**
 * 面向对象-继承
 */
abstract class Mailer
{
    abstract public function sendMail($to, $from = 'Me', $body = 'Hello');
}

class UserMailer extends Mailer
{
    public function sendMail($to, $from = 'Me', $body = 'Hello')
    {
        echo "sending from [UserMailer]...\n";
    }
}

class AdminMailer extends Mailer
{
    public function sendMail($to, $from = 'Me', $body = 'Hello')
    {
        echo "sending from [AdminMailer]...\n";
    }
}

$userMailer = new AdminMailer;
$userMailer->sendMail('Nanji');
