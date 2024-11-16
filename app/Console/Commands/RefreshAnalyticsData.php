<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RefreshAnalyticsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'analytics:refresh {--fresh : Wipe all data before seeding}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh analytics data with fresh sample data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        if ($this->option('fresh')) {
            if ($this->confirm('This will wipe all existing data. Are you sure?')) {
                $this->info('Wiping existing data....');
                $this->call('migrate:fresh');
            } else {
                return;
            }
        }
        $this->info('Seeding analytics data...');


        DB::beginTransaction();

        try {
            $this->call('db:seed', [
                '--class' => 'DatabaseSeeder'
            ]);

            DB::commit();
            $this->info('Analytics data has been refreshed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            $this->error('An error occured while seeding data: ' . $e->getMessage());
        }
    }
}
