<?php

namespace OrgManager\OrgmanagerCustom;

use GitHub;
use App\User;
use App\Org;
use Illuminate\Console\Command;

class GetStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orgmanager-custom:getstats {--T|table : Whether to display data in table format}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get OrgManager stats. Internal use.';

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
      if ($this->option('table'))
      {
        $headers = ['Users', 'Organizations', 'Invites'];
        $stats = array();
        $stats = [[User::count(), Org::count(), Org::sum('invitecount')]];
        $this->table($headers, $stats);
      } else
      {
        $this->info('Users: '.User::count());
        $this->info('Orgs: '.Org::count());
        $this->info('Invites: '.Org::sum('invitecount'));
      }
    }
}
