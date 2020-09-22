<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class NewAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates a new admin in database. it receives an email and password.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::create([
            'name' => 'admin',
            'email' => $this->argument('email'),
            'email_verified_at' => now(),
            'password' => bcrypt($this->argument('password')),
            'type' => 'admin',
        ]);
        echo "Admin created successfully";
    }
}
