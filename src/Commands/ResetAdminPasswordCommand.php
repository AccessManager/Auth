<?php

namespace AccessManager\Auth\Commands;


use AccessManager\Auth\Models\User;
use Illuminate\Console\Command;
use AccessManager\Helpers\GetConsolePasswordTrait;

class ResetAdminPasswordCommand extends Command
{
    use GetConsolePasswordTrait;

    protected $signature = "admin:reset";

    protected $description = "Reset password for admin account.";

    public function handle( User $user )
    {
        $username = $this->ask("Please enter username for admin account");
        $account = $user->where('username', $username)->first();
        if( $account == null )
        {
            $this->error("no such user:{$username}, try again with correct username "); exit(0);
        }
        $this->info("resetting password for: {$account->username} ({$account->name})");
        $account->password = $this->getConfirmedPassword();
        $account->save();
        $this->info("password reset successful.");
    }

}