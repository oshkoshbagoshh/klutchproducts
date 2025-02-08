<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\Csv\Reader;
use League\Csv\Statement;

class convert_csv_to_json extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:convert_csv_to_json {input_csv} {output_json}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Converts a CSV file to JSON format';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $inputCsv = $this->argument('input_csv');
        $outputJson = $this->argument('output_json');
        if (! file_exists($inputCsv)) {
            $this->error("The file {$inputCsv} does not exist.");

            return;
        }

        try {
            // Load the CSV file
            $csv = Reader::createFromPath($inputCsv, 'r');
            $csv->setHeaderOffset(0); // Assumes the first row contains headers

            // Fetch all records as associative arrays
            $stmt = new Statement;
            $records = $stmt->process($csv);

            // for demo purposes

            print_r($records);

            // Convert records to JSON
            $json = json_encode(iterator_to_array($records), JSON_PRETTY_PRINT);

            // Save JSON to output file
            file_put_contents($outputJson, $json);

            $this->info("CSV has been successfully converted to JSON and saved to {$outputJson}");
        } catch (\Exception $e) {
            $this->error('An error occurred: '.$e->getMessage());
        }
    }
}
