<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sign;
use App\Models\categories;
use App\Models\contacts;
use App\Models\product;
 use Session;
class dcontroller extends Controller
{
    public function form_save(request $request)
    {
        $add=new sign;
        if($request->isMethod('post'))
        {
            $add->fullname=$request->get('fullname');
            $add->email=$request->get('email');
            $add->password=$request->get('password');
            $add->save();
        }
        return view('index5');
    }
    public function form_submit(request $request)
    {
        $ad=new sign;
        if($request->isMethod('post'))
        {
          $username=$request->get('user');
          $password=$request->get('pass');
          $a=sign::where(['email'=> $username, 'password'=> $password])->first();
          if(!empty($a))
          {
             return view('contactus');
          }
        //   else{
        //       return view('index5') ;
        //   }
          return redirect('contactus');
    } 
}
   public function logout()
   {
    Session()->flush();
    return redirect('signup');
   }
 

   public function display()
   {
    $data=categories::paginate();
    // print_r($data);
    return view('contactus',compact('data'));
   }
  //  public function display1()
  //  {
  //   $data=categories::paginate();
  //   // print_r($data);
  //   return view('index5',compact('data'));
  //  }
 

   public function contact()
   {
    return redirect('contactus');
   }

  //******** inserting data into contactus ********
  
  public function contacts(request $request)
  {
    $add=new contacts;
    if($request->isMethod('post'))
    {
        $add->fullname=$request->get('fullname');
        $add->email=$request->get('email');
        $add->meassage=$request->get('meassage');
        $add->save();
    }
    return redirect('contactus');
  }
  public function show()
  {
    $result=product::get();
    $data=categories::get();
    return view('/index5',compact('result','data'));
  }
  public function home()
  {
    $result=product::get();
    $data=categories::get();
   return view('/index5',compact('result','data'));
  }
  public function display2()
  {
   $data=categories::paginate();
   // print_r($data);
   return view('products',compact('data'));
  }
  public function pro($id)
  {
    // $add=new product;
    $data=categories::paginate();
    $run=product::where('categoryid',$id)->get();
    return view('/products',compact('run','data'));

  }
  public function display3()
  {
   $data=categories::paginate();
   // print_r($data);
   return view('buycart',compact('data'));
  }
  public function production($id)
  {
    // $add=new product;
    $data=categories::paginate();
    $sql=product::where('id',$id)->get();
    return view('/buycart',compact('sql','data'));

  }

}

