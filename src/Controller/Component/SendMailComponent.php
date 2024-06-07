<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Mailer\Mailer;

/**
 * SendMail component
 */
class SendMailComponent extends Component
{
    protected $mailer;

    /**
     * Default configuration.
     *
     * @var array
    */
    protected $_defaultConfig = [];

    public function initialize(array $config): void
    {
        $this->mailer = new Mailer('default');
    }

    public function send($message)
    {
        echo $message . "<br>";
        $this->mailer
            ->setFrom(['tom@svr.home.com' => 'My Site'])
            ->setTo('tom@svr.home.com')
            ->setSubject('NewPost')
            ->deliver('My message');

        /** 
        // send mail
        $this->mailer
            ->setEmailFormat('html')
            ->setFrom('fumiko@svr.home.com')
            ->setTo('tom@svr.home.com')  // target_list to send email
            ->setSubject('新しい投稿がありました')
            ->setViewVars(['article' => $article])
            ->viewBuilder()
                ->setTemplate('default')
                ->setLayout('default');
        $this->mailer->deliver();
        */
        //return $this->redirect(['action' => 'index']);
    }
}
