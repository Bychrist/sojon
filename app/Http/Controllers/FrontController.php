<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Repository\IRepository;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\View\View;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class FrontController extends Controller
{
    private $_repository;

    public function __construct(IRepository $repository)
    {
        $this->_repository = $repository;

    }
    public function About()
    {
        return view('about');
    }

    public function Contact()
    {

        return view('contact');
    }


    public function Product()
    {

        try
        {

            $products = Product::inRandomOrder()->paginate(20);
            $categories = Category::inRandomOrder()->paginate(5);

            return view('product',compact('categories','products'));

        } catch (\Throwable $th)
        {

            Toastr::error($th->getMessage(),'Failure');
            return redirect()->back();
        }


    }



    public function SingleProduct($productId)
    {

        try
        {
            $product = Product::find($productId);
             if($product == null)
             {
                Toastr::success('Product was not found','Failure');
                return redirect()->back();
             }

            return view('singleproduct',compact('product'));
        }
        catch (\Throwable $th)
        {
             Toastr::error($th->getMessage(),'Failure');
            return redirect()->back();
        }



    }


   public function PostEmail(Request $request)
  {

      try {


        $this->validate($request, [
            "themeple_name" => "required",
            "themeple_email" => "required | email",
            "themeple_subject" => "required",
            "themeple_message" => "required"
        ]);



          \Mail::to('ordained07@yahoo.com')->send(new \App\Mail\ContactEmail($request,$request->themeple_email));

          Toastr::success('Email has been sent we will get in touch with you shortly','Success');
          return redirect()->back();

      }
     catch (\Throwable $th)
    {
        Toastr::error($th->getMessage(),'Failure');
        return redirect()->back();
    }













  }


   public function SingleCategory($id)
  {
      try
      {
          $products = Product::where('category_id',$id)->orderBy('product_name','asc')->paginate(20);
          if($products->count() < 1)
          {
               Toastr::error('No record found', 'Failure');
               return redirect()->back();
          }
          return view('singlecategory',compact('products'));
      } catch (\Throwable $th)
     {
         Toastr::error($th->getMessage(), 'Failure');
          return redirect()->back();
      }
  }




    public function Brands()
    {
        $brands = $this->_repository->GetAllBrands();
        return view('brands',compact('brands'));
    }

    public function BrandAndProduct($brandid)
    {
        $brands = $this->_repository->GetBrandById($brandid);
        return view('brandandproduct',compact('brands'));
    }

    public function EmailSubmission(Request $request)
    {
       $this->validate($request, [
           "firstname" => "required",
           "lastname" => "required",
           "email" => "required|email",
           "subject" => "required",
           "message" => "required"
       ]);


        try {

               $resp = $this->_repository->SendEmail($request);
               $respExplode = explode(":",$resp);
               return back()->with([$respExplode[0] => $respExplode[1]]);

        }
        catch (\Throwable $throwable)
        {

            return back()->with([ "failure" => "{$throwable->getMessage()}"]);
        }


    }

    public function Search(Request $request)
    {
        try
        {
              $resp = $this->_repository->Search($request);
              $resultData = $resp['result'];
              $explodeSuccessMessage = explode(':',$resp["success"]);
              if($explodeSuccessMessage[0] == "200")
              {

                  return view('search', compact('resultData'));
              }
              else{
                  return back()->with(["failure"=> $resp["success"]]);
              }

        }
        catch (\Throwable $th)
        {
            return back()->with(["failure"=> "Failure occurred: {$th->getMessage()}"]);
        }

    }



    public function GetAllProductPaginate()
    {
        try
        {
            $resp = $this->_repository->GetAllProductPaginate();
            return view('allproduct',compact('resp'));
        }
        catch(\Throwable $th)
        {
            return back()->with(["failure"=> "Failure occurred: {$th->getMessage()}"]);
        }
    }



}
