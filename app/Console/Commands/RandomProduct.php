<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class RandomProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:random';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sets random product into database for testing';

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
     */
    public function handle()
    {
        Product::create([
           'name' => Str::random(10),
        ]);
        $this->info('Random product successfully inserted into database');
    }
}
