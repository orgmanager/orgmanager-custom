<?php

namespace OrgManager\OrgmanagerCustom;

use GitHub;
use Illuminate\Console\Command;

class ListUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orgmanager-custom:listusers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lists all the users registered in OrgManager. Internal use.';

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
        $headers = ['ID', 'Name', 'Email', 'GitHub'];
        $users = User::all(['id', 'name', 'email', 'github_username'])->toArray();
        $this->table($headers, $users);
    }
}
