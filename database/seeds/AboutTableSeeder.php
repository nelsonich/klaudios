<?php

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            "title" => "About Us",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit consequatur architecto obcaecati eveniet cupiditate eaque quisquam sed incidunt suscipit omnis et ex voluptatum, beatae veritatis excepturi blanditiis esse expedita dignissimos rem optio commodi quasi repellat! Ipsa pariatur id, voluptates blanditiis quidem maxime exercitationem repudiandae ad saepe adipisci natus iusto eos inventore debitis odio laudantium optio soluta reiciendis repellendus, perspiciatis officiis! Doloremque expedita neque dolor alias molestias, odit dolore odio consequuntur perspiciatis distinctio, tempore cupiditate, ab dolores totam est officiis consectetur? Eligendi magnam beatae praesentium ipsam provident sequi molestiae nisi quo illo reprehenderit, ullam adipisci labore magni dolor earum veniam veritatis?",
            "image" => "about.png"
        ]);
    }
}
