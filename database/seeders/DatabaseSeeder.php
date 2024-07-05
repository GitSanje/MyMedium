<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();
        
        $startTime = microtime(true); // Start timing
         Posts::factory(100)->create();

        // $totalPosts = 200000;
        // $batchSize = 1000;
        // $posts = [];
        // // Insert posts in batches
        // for ($i = 0; $i < $totalPosts; $i ++){
        //     $post = Posts::factory()->make();
        //     // Convert to array after ensuring correct format
        //      $postArray = $post->toArray();
        //     $postArray['publication_date'] = Carbon::parse($postArray['publication_date'])->format('Y-m-d H:i:s');

        //     // Add post to the batch
        //     $posts[] = $postArray;
            
        //     //   for ($j = 0; $j < $batchSize; $j++) {
        //     //     $posts[] = Posts::factory()->make()->toArray();
        //     // }
        //      // Insert batch of posts into the database
        //     // DB::table('posts')->insert($posts);
        //     // Insert in batches of 1000 for optimization
        //     if ($i > 0 && $i % 1000 == 0) {
        //         DB::table('posts')->insert($posts);
        //         $posts = [];
        //     }

        // }
        //  // Insert any remaining posts
        //  if (!empty($posts)) {
        //     DB::table('posts')->insert($posts);
        // }

        $endTime = microtime(true); // End timing
        $executionTime = ($endTime - $startTime); // Calculate execution time
        
        echo "Seeding completed in: " . number_format($executionTime, 2) . " seconds\n";



    
    }
}
