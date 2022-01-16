<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Book;

class sampleComand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'insert data to database';

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
     * @return int
     */
    public function handle()
    {
        $book = new Book;
        $book->book_name = 'sample book 2';
        $book->author = 'sample author 2';
        $book->description = 'sample description 2';
        $book->price = '300000';
        $book->save();
        $this->info('Data inserted successfully');
        return Command::SUCCESS;
    }
}
