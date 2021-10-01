<?php

namespace App\Http\Controllers;

use App\Repository\IRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    private $_repository;

    public function __construct(IRepository $repository)
    {
        $this->_repository = $repository;
        $this->middleware('auth');
    }
    public function index()
    {
        $brandandproduct = $this->_repository->BrandAndProduct();
        return view('admin.dashboard',compact('brandandproduct'));
    }


    public function adminbrand()
    {
         $brands =  $this->_repository->GetAllBrands();
        return view('admin.brand',compact('brands'));
    }


    public function adminCreateBrand(Request $request)
    {

        $this->validate($request,[
            "brand_name"=> "required | unique:brands",
            "brand_image" => "required",
            "brand_detail" => "required"
        ]);

        try {

            $resp = $this->_repository->CreateBrand($request);

            if($resp)
            {
                return back()->with(["success" => "Brand was created"]);
            }
            else
            {
                return back()->with(["failure" => "An error has occured"]);
            }

        }
        catch(\Throwable $th)
        {
            return back()->with(["failure" => "An error has occured"]);
        }


    }

    public function adminupdateBrand(Request $request, $id)
    {
        $this->validate($request, [
            "brand_name" => 'required|unique:brands,brand_name,' . $id,
            "brand_detail" => "required"

        ]);


        try {

            $resp = $this->_repository->UpdateBrand($id, $request);
            if ($resp) {
                return back()->with(["success" => "Brand was updated"]);
            } else {
                return back()->with(["failure" => "An error has occured"]);
            }
        } catch (\Throwable $th)
        {
            return back()->with(['failure' => 'An error has occured']);
        }

    }


    public function deleteBrand($id)
    {
        try
        {
            $resp = $this->_repository->DeleteBrand($id);
            $explodeResp = explode(":",$resp);
            if($explodeResp[0] == "success")
            {
                return back()->with(['success' => $resp]);
            }
            else
            {
                return back()->with(['failure' => $resp]);
            }
        }
        catch(\Throwable $throwable)
        {
            return back()->with(['failure' => 'An error has occured']);
        }

    }



    public function ViewProduct()
    {
        $products = $this->_repository->GetAllProducts();
        $brands = $this->_repository->GetAllBrands();
        return View('admin.viewproduct',compact('products','brands'));
    }

   public function CreateProduct(Request $request)
   {
       $this->validate($request, [
           "product_name" => "required | unique:brand_products",
           "product_image" => "required",
           "product_detail" => "required",
           "brand_id" => "required"
       ]);

       try
       {
           $resp = $this->_repository->CreateProduct($request);
           if($resp)
           {
               return back()->with(['success'=>'Product was created']);
           }

           return back()->with(['failure'=>'Product was not created']);
       }
       catch(\Throwable $throwable)
       {
           return back()->with(['failure' => 'An error has occurred']);
       }



   }


    public function deleteProduct($id)
    {
        try
        {
            $resp = $this->_repository->DeleteProduct($id);
            $explodeResp = explode(":",$resp);
            if($explodeResp[0] == "success")
            {
                return back()->with(['success' => $resp]);
            }
            else
            {
                return back()->with(['failure' => $resp]);
            }
        }
        catch(\Throwable $throwable)
        {
            return back()->with(['failure' => 'An error has occured']);
        }
    }



  public function UpdateProduct(Request $request, $id)
  {
      $this->validate($request, [
          "product_name" => "required",
          "product_detail" => "required",
          "brand_id" => "required"

      ]);

      try {

          $resp = $this->_repository->UpdateProduct($id, $request);

          $respExplode = explode(":",$resp);
          if ($respExplode[0] == "success") {
              return back()->with(["success" => $respExplode[1]]);
          } else {
              return back()->with(["failure" => $respExplode[1] ]);
          }
      } catch (\Throwable $th)
      {
          return back()->with(['failure' => 'An error has occured']);
      }




  }



























}
