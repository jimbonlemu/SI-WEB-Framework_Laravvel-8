<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
// Post::create([
//     'judul' => 'Fourth Bumps',
//     'slug'=> 'fourth-bumps',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem beatae quibusdam nostrum nemo cum amet soluta ipsa.',
//     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni incidunt, expedita quos doloremque, eveniet dolores molestias, sint ex quibusdam aut ipsum excepturi! Dicta aliquid in officia, amet impedit delectus numquam dolorem consequuntur dolor a omnis praesentium vel. Modi, provident illum? </p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus ea ullam possimus culpa placeat amet perferendis repellat facilis repellendus vero minima ut animi sint nisi, ducimus nihil vel quasi maiores dolorum atque necessitatibus dicta consequatur pariatur tempora? Explicabo delectus magni numquam voluptas vero? Sit voluptate excepturi nam fuga sequi sint. </p>  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod impedit obcaecati aperiam non corporis nam quisquam necessitatibus animi reprehenderit consequuntur deserunt optio, voluptas magni modi accusamus perferendis dolore! Praesentium quas, error eveniet ad nostrum vel qui saepe? Dolorem suscipit nobis porro eveniet, repudiandae possimus, ipsam sunt ducimus quis velit rem ut. Eaque quibusdam eos ut, atque doloremque adipisci deleniti. Porro placeat quidem rerum quas culpa voluptates possimus! Nobis dolor cumque magni, perspiciatis rem illo sed molestias sint totam amet voluptate nostrum in, eveniet autem libero quaerat dolore necessitatibus atque iure asperiores architecto exercitationem. Ex nostrum ut molestias quod ratione, odit, voluptatem illo error qui, veritatis hic excepturi laudantium minus accusantium vitae fugiat blanditiis ad eligendi officiis nobis praesentium. Sint in voluptatum, soluta ex cumque vel obcaecati quos. Quidem repellendus impedit dicta quibusdam reiciendis odio quis ratione quo inventore ut necessitatibus, et error dolore amet dolorum veritatis iste! Deleniti quisquam soluta veniam officia accusantium ullam cum autem iure iste ducimus unde nisi tempore, optio dicta asperiores officiis doloribus consectetur? Optio reiciendis doloribus molestiae in soluta tempora repudiandae atque labore perspiciatis! Quasi consequatur laboriosam temporibus doloribus voluptate, delectus autem, tempore suscipit reiciendis impedit aliquam magni eos expedita quos maxime voluptatum mollitia reprehenderit veniam recusandae laudantium. Possimus sint aspernatur consequatur dolorem omnis earum dolores deserunt mollitia modi, officiis illo quod facere? In iure necessitatibus modi non sunt tempora, vel mollitia nesciunt dicta facilis quasi magnam, odit earum vero autem aut omnis tempore alias natus rerum. Dolorum tenetur saepe, qui iusto dolore distinctio animi deleniti fuga consequuntur. Harum illum ea natus. Ipsum reprehenderit enim dignissimos voluptatibus impedit nesciunt, illum maiores obcaecati consequuntur dicta eum nobis. Est, cum rerum libero dolor dolore beatae illo itaque alias, possimus nisi velit doloremque laborum eius, error et ipsum dolorum rem fugit! Accusamus ex, quidem quaerat sapiente inventore deleniti aliquam maxime placeat voluptatem omnis voluptatum amet quos, eveniet officia, facere voluptates ipsam cupiditate laudantium architecto tempore repellendus debitis ab fugit. Illum laborum sapiente architecto ex eos nisi dignissimos aliquam commodi quia sequi.</p> '
//     ])
