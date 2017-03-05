<?php

namespace OrgManager\OrgmanagerCustom;

use App\Org;
use Illuminate\Console\Command;

class ListOrganizations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orgmanager-custom:listorgs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all organizations in the system. Internal use.';

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
        $orgs = Org::all(['id', 'name', 'description', 'userid', 'invitecount'])->toArray();
        $headers = ['ID', 'Name', 'Description', 'User ID', 'Invite Count'];
        $this->table($headers, $orgs);
    }
}
