<?php
namespace App\Http\Controllers;

use Prettus\Repository\Criteria\RequestCriteria;
use TCG\Voyager\Facades\Voyager;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;
use App\Models\Subscriptor;
use App\Repositories\GalleryRepository;
use App\Repositories\PostRepository;
use App\Http\Controllers\AppBaseController;

use App\Mail\contacto as contactoMail;
use Illuminate\Mail\Message;

use App\Mail\fechavencimiento as vencimiento;

use Mail;
use Response;
use Auth;
use Session;




class HomeController
{
    private $galleryRepository;
    private $postRepository;
    public $category;
    public $carbon;

    //ublic function __construct(GalleryRepository $galleryRepo)
    //{
      
      //$this->galleryRepository = $galleryRepo;
      //$this->carbon = new \Carbon\Carbon();
      //$this->category = \App\Models\Category::where('home', 1)
       //     ->orderBy('order', 'ASC')
        //    ->get();
      //$this->carbon = new \Carbon\Carbon(); 
    //}

    public function index(Request $request)
    {



        /*$this->drop_sessionFiltro();



        $sliders = new  \App\Models\Slider();*/

         $sliders = \App\Slider::get();

        $posts = \App\Models\Post::where('destacado',1)->orderBy('updated_at', 'DESC')->get();

        $buildings = \App\Models\Building::where('habilitado',1)->get();

        $leads = \App\Models\LeadParameters::first();

        //dd($posts);

        return view('home.index')->with('posts', $posts)->with('buildings', $buildings)->with('sliders', $sliders)->with('leads', $leads);
            /*->with('allfierros', $this->allfierros())          
            ->with('publicidad', $this->publicidades('home', NULL))
            ->with('categorias',$this->category);     */                   

    }

    public function contact( Request $request){
      return view('home.contact');
    }

    public function about( Request $request){
      return view('home.about');
    }

    public function project (Request $request){
      return view('home.project');
    }

    public function services (Request $request){
      return view('home.services');
    }

    public function blog (Request $request){

     $posts = \App\Models\Post::orderBy('created_at','DESC')->paginate(4);

     $lastposts= \App\Models\Post::where('destacado','1')->take(2)->get();    
       
      return view('home.blog')->with('posts', $posts)->with('lastposts', $lastposts);
    }

    public function send_contact(Request $request){


            //dd("FRANCO");
        $subject = $request->get('subject');
        $email = $request->get('email');
        //dd($email);
       \Mail::send('emails.contacto',
             array(
                  'name' => $request->get('name'),
                  'email' => $request->get('email'),
                  'localidad' => $request->get('localidad'),                 
                  'telefono' => $request->get('telefono'),
                  'bodyMessage' => $request->get('message')
              ), function($message)
            {
                $message->from('franco_emanuel@hotmail.com');
                $message->to('test@dsadesarrollosinmobiliarios.com.ar')->subject('prueba');
            });

       return redirect('/')->with('message', 'Thanks for contacting us!');
    }
}
   