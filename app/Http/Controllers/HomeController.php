<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\TrainingData;
use App\Models\Internship;
use App\Models\join;
use App\Models\contact;
use App\Models\publication;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function internship()
    {
        return view('intern');
    }

    public function career()
    {
        return view('career');
    }

    public function features()
    {
        return view('feature');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contact()
    {
        return view('contact');
    }

    public function service()
    {
        return view('service');
    }

    public function Thank()
    {
        return view('thank');
    }

    public function legalDoc()
    {
        return view('legalDoc');
    }

    public function mobileSer()
    {
        return view('mobileSer');
    }
 
    public function webSer()
    {
        return view('webSer');
    }

    public function cyberSer()
    {
        return view('cyberSer');
    }

    public function digitalSer()
    {
        return view('digitalSer');
    }

    public function hostSer()
    {
        return view('hostSer');
    }

    public function login()
    {
        return view('login');
    }

    public function publication()
    {
        return view('publication');
    }
   
    public function commerce()
    {
        return view('commerce');
    }

    public function mobileTech()
    {
        return view('mobileTech');
    }

    public function cms()
    {
        return view('cms');
    }



    // here i am going to the writing of the code
    public function admin(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
    
            if (isset($data['email'], $data['password'], $data['secret_code'])) {
                if ($data['email'] === "edgevertisepvt@gmail.com" &&
                    $data['password'] === "India@24x7" &&
                    $data['secret_code'] === "1992") {
                        $clientData = Client::all();
                        $total_clients = Client::count();
                        $contact = contact::all();
                        $total_contact = contact::count();
                        $internship = Internship::all(); 
                        $total_intern = internship::count();
                        $training = TrainingData::all();
                        $total_training = trainingData::count();
                        $Jobs = join::all();
                        $total_jobs = join::count();
                        $public = publication::all();
                        $total_public = publication::count(); 
                    return view('admin', compact('clientData',
                     'total_clients',
                     'contact',
                     'total_contact',
                     'internship',
                     'total_intern',
                     'training',
                     'total_training',
                     'Jobs',
                     'total_jobs',
                     'public',
                     'total_public'
                    ));
                }
            }
    
            return back()->withErrors(['error' => 'Invalid credentials. Please try again.']);
        }
        else
        {
            $clientData = Client::all();
            $contact = contact::all();
            $internship = Internship::all();
            $training = TrainingData::all();
            $Jobs = join::all();
            $public = publication::all();
        return view('admin', compact('clientData','contact','internship','training','Jobs','public'));
        }
    }

    
    // Here i am storing the data of the clients message to call them and connectivity
    public function postClient(Request $request)
    {

        $addData=Client::create($request->all());
        if($addData)
        {
            return redirect('/thank');
        }
        else
        {
            return redirect('/')->with('message','data not added');
        }


    }

            
// Here i am storing the Training data to connect him
    public function trainingData(Request $request)
    {

        $addData=TrainingData::create($request->all());
        if($addData)
        {
            return redirect('/thank');
        }
        else
        {
            return redirect('/')->with('message','data not added');
        }


    }


 // Here i am creating the internship data for resume
    public function storeInternshipData(Request $request)
    {
        if($request->hasFile('resume'))
        {
            $file=$request->file('resume');
            $filename=rand(11111,9999999).'.pdf';
            $file->move('uploads', $filename);
            $path='uploads/'.$filename;
            $uploadData=Internship::create([
                "name"=>$request->name,
                "email"=>$request->email,
                "resume"=>$path
            ]);
            if($uploadData)
            {
                return redirect('/thank');
            }
            else
            {
                dd("did not uploaded You DATA, Kindly Uload PDF Formate");
            }

        }
        else
        {
           dd("need pdf File, Kindly upload PDF File");
        }
    }
// Here i storing the jobs data on the portals
     public function jobData(Request $request)
       {
        if($request->hasFile('resume'))
        {
            $file=$request->file('resume');
            $filename=rand(11111,9999999).'.pdf';
            $file->move('resume', $filename);
            $path='resume/'.$filename;
            $uploadData=join::create([
                "name"=>$request->name,
                "exprience"=>$request->exprience,
                "email"=>$request->email,
                "resume"=>$path
            ]);
            if($uploadData)
            {
                return redirect('/thank');
            }
            else
            {
                dd("did not uploaded You DATA, Kindly Uload PDF Formate");
            }

        }
        else
        {
           dd("need pdf File, Kindly upload PDF File");
        }
       }

// Here i am creating a controller to stored the sms data
public function smsData(Request $request)
    {
        $addData=contact::create($request->all());
        if($addData)
        {
            return redirect('/thank');
        }
        else
        {
            return redirect('/')->with('message','data not added');
        }

    }

// Here i am writing the code of the take the data from the publication page
public function publicationData(Request $request)
    {

        $pubData=publication::create($request->all());
        if($pubData)
        {
            return redirect('/thank');
        }
        else
        {
            return redirect('/')->with('message','data not added');
        }


    }
    
}