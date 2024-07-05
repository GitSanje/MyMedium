<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use App\Models\Posts;

class PreCachePosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pre-cache posts data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Posts::orderBy('publication_date', 'desc')
          ->chunk(200, function($posts) {
            foreach( $posts as $post){
                $cacheKey = 'post_' . $post->id;
                Cache::put($cacheKey , $post, 3600);// Cache each post for 1 hour
            }
          });

          $this->info('Posts data has been pre-cached.');
    }
}
