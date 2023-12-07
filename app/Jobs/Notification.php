<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class Notification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $messageText = 'Добавлен новый товар';
        $subject = 'На сайте добавлен новый товар';

        Mail::send([], [], function ($message) use ($subject, $messageText) {
            $message->to(config('products.email'))
                ->subject($subject)
                ->setBody($messageText, 'text/html');
        });
    }

}
