<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the project.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->callSilent('storage:link');
        $this->callSilent('migrate:refresh');
        $this->callSilent('db:seed');

        $user = User::first();
        $this->table(['Name', 'Email', 'Password'], [
            [
                $user->name,
                $user->email,
                'password',
            ],
        ]);

        return Command::SUCCESS;
    }
}
