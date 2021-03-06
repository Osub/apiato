<?php

namespace App\Containers\Seeder\UI\CLI\Commands;

use App\Ship\Parents\Commands\ConsoleCommand;

/**
 * Class SeedTestingDataCommand
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class SeedTestingDataCommand extends ConsoleCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "apiato:seed-test";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Seed testing data.";

    /**
     * SeedTestingDataCommand constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function handle()
    {
        $this->call('db:seed', [
            '--class' => 'App\Containers\Seeder\Data\Testing\Seeders\TestingDataSeeder'
        ]);

        $this->info('Testing Data Seeded Successfully.');
    }

}
