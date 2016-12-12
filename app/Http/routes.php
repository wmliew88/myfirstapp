<?php
//add model to use
Use App\Post;
Use App\User;
Use App\Role;
Use App\Country;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
Route::get('/', function () {
    return view('welcome');
//    return "hello";
});
//
//Route::get('/about', function () {
////    return view('welcome');
//    return "about";
//});
//
////Route::get('/post/{id}/{name}', function ($id, $name){
//////    return view('welcome');
////    return "post ". $id ." ". $name;
////});
//
//Route::get('admin/posts/example', array('as'=>'admin.home', function (){
//
//    $url =  route('admin.home');
//    return "my url is " . $url;
//}));
//
//
//
//////////
//
//
////Route::get('/post/{id}', 'PostsController@index' );
//
//Route::resource('posts','PostsController');
//
//Route::get('/contact','PostsController@contact');



/*
linking to PostsController of the function show_post
*/
//Route::get('post/{id}/{name}/{password}&{address}','PostsController@show_post');


//Route::get('/insert', function(){
//    DB::insert('insert into posts (title,content)values (?,?)', ['laravel 1 title ','laravel2'] );
//} );

//
//Route::get('/getdata',function ()
//{
//    $results = DB::select('select * from posts where id=?', [1] );
//    return  $results;
//
//
////    foreach ($results as $post)
////        return $post->content;
//}
//);


//Route::get('/update',function ()
//{
//  $updated = DB::update('update posts set title = "update title" where id = ?', [1] );
//
//  return $updated;
//}
//);
//
//
//Route::get('/delete',function ()
//{
//    $deleted = DB::delete('delete from posts where id = ?', [1] );
//
//    return $deleted;
//}
//);



//ELOQUENT - ways to retrieve data lec50
//Route::get('/read',function ()
//{
//    $posts = Post::all(); //display all
//
//    $posts = Post::find(2);
//    $posts = Post::where('id',2)->orderBy('id','desc')->take(1)->get();
//    $posts = Post::findOrFail(1);
//    $posts = Post::where('id','>',1)->firstOrFail();
//    return $posts;

//    foreach($posts as $post)
//    {
//        return $post->title; // return only dict mothers name which is 'title'
//    }
//});


//ELOQUENT - insert/saving  data lec51
Route::get('/eloinsert',function ()
{
    $post = new Post;
    $post->user_id = '11';
    $post->title = "eloquent title 1";
    $post->content = "contents 111";
    $post->save();
});


//ELOQUENT - Create data and configure mass data
//Route::get('/createmass',function ()
//{
//    Post::create(['title'=>'creating method title', 'content'=>'wow mtheosd created']);
//});


//ELOQUENT - update with eloquent
//Route::get('/update2',function (){
//
//    Post::where('id',2)->where('is_admin',0)->update(['title'=>'new php title','content'=>'i love myself add oil']);
//});

//ELOQUENT - delete data
//Route::get('/delete',function (){
//    $post=Post::find(1);
//    $post = Post::where('id',[1,2]);
//    $post->delete();
//    Post::destroy(1,2);
//});

//SOft delete lec 55
//Route::get('/softdel',function (){
//    Post::find(1)->delete();
//});

// retreieve soft delete data
//Route::get('/readsoftdel',function (){
//    $post = Post::onlyTrashed()->get(); //withTrashed means include non delete data as well
//    return $post;
//});

//restore soft delete data lec57
//Route::get('/restoresoftdel',function (){
//    $post = Post::onlyTrashed()->restore(); //withTrashed means include non delete data as well //->forcedelete to delete permanently
//});


//Eloquent Relationship
// ONE TO ONE lec60
//Route::get('/user/{id}/post',function($id)
//{
//    return User::find($id)->post->title;
//
//});

//INVERSE ONE TO ONE LEC61
//Route::get('/post/{id}/user',function ($id)
//{
//   return Post::find($id)->user->name;
//});

// ONE TO MANY RELATIONSHIP
//Route::get('/posts',function()
//{
//    $user= User::find(1);
//
//    foreach($user -> posts as $post)
//        echo $post->title. "<br>";
//
//});

// Many to Many relationship
//Route::get('/user/{id}/role',function($id)
//{
////    $user = User::find($id)->roles()->orderBy('id','desc')->get();
////    return $user;
//
//    $user = User::find($id);
//    foreach($user->roles as $role)
////        return $role->name;
//        return $role->created_at;
//});


// Accessing the intermediate(pivot) table
//Route::get('user/pivot',function ()
//{
//    $user = User::find(1);
//
//    foreach($user->roles as $role) //roles find in User model
//        echo $role->pivot->created_at;
//
//});

// lec68
//Route::get('/user/{id}/country',function ($id){
//    $country = Country::find($id);
//    $user = User::find($id);
//
//    foreach($country->posts as $post)
//        echo $user->name."<br>".
//            $post->user_id ."---". $post->title."<br><br>";
//});


