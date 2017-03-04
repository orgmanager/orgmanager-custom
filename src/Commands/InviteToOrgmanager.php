<?php

namespace OrgManager\OrgmanagerCustom;

use App\User;
use App\Org;
use GitHub;
use Illuminate\Console\Command;

class InviteToOrgmanager extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orgmanager:invitetoorg';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Invites all the users to the Orgmanager organization. Internal use.';

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
     * @return mixed
     */
    public function handle()
    {
        $users = User::all();
        $total = User::count();
        $org = Org::where('name', 'orgmanager')->firstOrFail();
        if ($this->confirm('Do you invite '.$total.' users?')) {
            $this->output->progressStart($total);
            foreach ($users as $user) {
            if (!$this->checkMembership($org, $user->github_username)) {
                $this->call('orgmanager:joinorg', [
                    'org'      => $org->id,
                   'username' => $user->github_username,
                 ]);
}
                $this->output->progressAdvance();
            }
            $this->output->progressFinish();
            $this->info('Successfully invited '.$total.' users.');
        }
    }

protected function checkMembership(Org $org, $username)
    {
        Github::authenticate($org->user->token, null, 'http_token');
        try {
            Github::api('organization')->members()->show($org->name, $username);
        } catch (Github\Exception\RuntimeException $e) {
            return false;
        }

        return true;
}
}
