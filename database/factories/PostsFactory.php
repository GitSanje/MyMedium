<?php


namespace Database\Factories;

use App\Models\User;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    $title = $this->faker->sentence(2);
      //$title = $this->faker->catchPhrase(); // Generates a catchy phrase for the title
      //$imagePath = $this->faker->image(storage_path('app/public'), 640, 480, null, false);
    //   $imagePath = 'imgs/default.png';
    //   $imageUrl = Storage::url($imagePath);

       $publicationDate = Carbon::parse($this->faker->dateTimeBetween('-1 year', 'now'))->format('Y-m-d H:i:s');
    
       $categories = ['Technology', 'Health', 'Travel', 'Food', 'Education', 'Finance', 'Entertainment', 'Sports', 'Lifestyle', 'Science'];
       $category= $this->faker->randomElement($categories);
       $imageUrl = $this->faker->imageUrl(640,480, $category, true,'Faker');
       $tags = ['AI', 'Machine Learning', 'Web Development', 'Fitness', 'Recipes', 'Investing', 'Movies', 'Football', 'Fashion', 'Physics'];
       $postArray= [
            'title' => rtrim($title, '.'),
            'user_id' => $this->faker->numberBetween(1,30),
             //'user_id' => User::factory(),
             'slug' => Str::slug($title, '-'),
             'content' => $this->faker->paragraph(5),
             'category' =>$category,
             'tags' => implode(',', $this->faker->randomElements($tags, rand(2,3))),
             'image' =>$imageUrl ,
             'publication_date'=> $publicationDate,

        ];
       // $postArray['publication_date'] = Carbon::parse($postArray['publication_date'])->format('Y-m-d H:i:s');
        return $postArray;
    }

 /**
     * Configure the model factory.
     */
    // public function configure()
    // {
    //     return $this->afterMaking(function (Posts $post) {
    //         // Ensure publication_date is formatted correctly after making the model instance
    //         $post->publication_date = Carbon::parse($post->publication_date)->format('Y-m-d H:i:s');
    //         //echo "after making: " . $post->publication_date;
    //     })->afterCreating(function (Posts $post) {
    //         // Format publication_date after creating the model instance
    //         $post->update(['publication_date' => Carbon::parse($post->publication_date)->format('Y-m-d H:i:s')]);
    //         //echo "after creating: " . $post->publication_date;
    //     });
    // }
}
