<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class NewCandidateForJob extends Notification
{
    use Queueable;
    public $candidate;
    public $job;
    /**
     * Create a new notification instance.
     */
    public function __construct($candidate,$job)
    {
        // dd($candidate,$job);
        $this->job=$job;
        $this->candidate=$candidate;
      
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
        // return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
    public function toDatabase(object $notifiable): array
    {
        $id = base64_encode($this->job->id);
        $url = URL::route('jobs-applicants',$id);
        // {{ route('jobs-applicants', base64_encode($item->id)) }}
        // dump($this->job);
        // dd($this->candidate);
        return [
            'title' => 'New Applicant For Postion '.$this->job->vacant_position,
            'body' => $this->candidate->first_name.$this->candidate->last_name.' has Applied for'.$this->job->vacant_position,
            'url' => $url,
        ];
    }
}
