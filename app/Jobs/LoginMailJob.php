<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\LoginMail;

class LoginMailJob implements ShouldQueue
{
    use Queueable;

    public $email;
    
    /**
     * Create a new job instance.
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $data = ["name" => "Kamlesh Patel", "email" => "kamleshp52170@gmail.com"];
        Mail::to($this->email)->send(new LoginMail($data));
    }
}
