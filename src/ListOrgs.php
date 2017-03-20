<?php

namespace OrgManager\OrgmanagerCustom;

use GitHub;
use App\Org;
use Illuminate\Console\Command;

class ListOrgs extends Command
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
    protected $description = 'Lists all the organizations registered in OrgManager. Internal use.';

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
        $headers = ['ID', 'Name', 'URL', 'Description', 'Invites'];
        $orgs = Org::all(['id', 'name', 'url', 'description', 'invitecount'])->toArray();
        $this->table($headers, $orgs);
    }
}
