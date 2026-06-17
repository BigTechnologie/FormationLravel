<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Post;
use EsperoSoft\Faker\Faker;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Http\Requests\UserFormRequest;
use App\Models\User;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $title = "Bienvenue Chez Dawan";

        $description = "<h3>Bienvenue dans la description du Framework Lraravel</h3>";

        
        $faker = new Faker();

        if(Category::count() === 0) {
            for($i = 0; $i < 10; $i++) {
                Category::create([
                    "name" => $faker->title(25),
                    "description" => $faker->title(60),
                    "imageUrl" => $faker->image()
                ]);
            }
        }

        if(Post::count() === 0) {
            for($i = 0; $i < 100; $i++) {
            $title = $faker->title(30);
            Post::create([
                "title" => $title,
                "slug" => Str::slug($title),
                "description" => $faker->title(60),
                "content" => $faker->text(),
                "imageUrl" => $faker->image(),
                "category_id" => rand(1,10)
            ]);
        }
        }
        

        $posts = Post::paginate(20);

        //return view('blog.home', ['title' => $title, 'description' => $description, 'posts' => $posts]);
        return view('blog.home', compact('title', 'description', 'posts'));
    }

    public function show(string $slug, int $id) 
    {
        $post = Post::find($id);
        if($post->slug !== $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }

        return view('blog.show', ['post' => $post]);
    }

    public function categories()
    {
        $categories = Category::paginate(4);
        return view('blog.categories', ["categories" => $categories]);
    }

    public function showCategory($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts()->paginate(8);

        return view('blog.showCategory', ["category" => $category, "posts" => $posts]);
    }

    public function register()
    {
        return view("blog.register");
    }

    public function registerSave(UserFormRequest $request)
    {
        $data = $request->validated();
        //dd($data); 
        $data["password"] = bcrypt($data["password"]);
        //dd($data);
        $user = User::create($data);

        return redirect()->route("admin.post.index")->with("success", "Votre inscription a réussi");
    }

    public function login()
    {
        return view("blog.login");
    }

    public function authenticate(LoginFormRequest $request)
    {
        $user = $request->validated();
        //dd($user);
        if(Auth::attempt($user)) {
            return redirect()->route("welcome")->with("success", "You are well connected !");
        }else {
            return redirect()->route("login")->with("error", "Incorrect indentifiers !");
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route("welcome")->with("success", "You are disconnected !");
        
    }



}

// page1 => nb elm par page * (page courente -1) => 20*(2-1) = 20
