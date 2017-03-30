<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\Utility\Hash;
use Cake\Utility\Text;

/**
 * Campaign mailer.
 */
class CampaignMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Campaign';
    public function merge($user, $subjectTemplate, $bodyTemplate)
    {
        $variables = Hash::flatten(['user' => $user->toArray()]);
        $options = [
            'before' => '{{',
            'after' => '}}'
        ];
        $subject = Text::insert($subjectTemplate, $variables, $options);
        return $this
            ->to($user['email'])
            ->template('campaign')
            ->set(compact('variables', 'bodyTemplate', 'options'))
            ->emailFormat('both')
            ->subject($subject);
    }
}