<?php


namespace App\Repository;
use App\Models\Brand;
use App\Models\BrandProduct;
use File;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Image;
use Mail;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;


class R_Repository implements IRepository
{

    private $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function GetAllBrands()
    {
        return $this->brand->orderBy('created_at', 'desc')->paginate(40);
    }

    public function BrandAndProduct()
    {
        $brands = $this->brand->orderBy('created_at', 'desc')->get();
        $products = BrandProduct::all();
        return [$brands,$products];
    }

    public function CreateBrand(Request $attributes)
    {

        try {

            $brandCreate = new Brand();
            $brandCreate->brand_name = ucfirst($attributes->brand_name);
            $brandCreate->brand_detail = $attributes->brand_detail;
            $image = $attributes->file('brand_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'assets/images/brandimages/' . $filename;
            Image::make($image->getRealPath())->resize(400, 100)->save($path);
            $brandCreate->brand_image = 'assets/images/brandimages/' . $filename;
            $brandCreate->save();
            return true;
        } catch (\Throwable $th) {
            return false;
        }


    }

    public function UpdateBrand($id, Request $request)
    {
        try {
            if ($request->file('brand_image')) {


                $brand = Brand::findOrFail($id);
                $brand->brand_name = ucfirst($request->brand_name);
                $brand->brand_detail = $request->brand_detail;
                File::delete($brand->brand_image);
                $image = $request->file('brand_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $path = 'assets/images/brandimages/' . $filename;
                //  return $path;
                Image::make($image->getRealPath())->resize(400, 100)->save($path);
                $brand->brand_image = 'assets/images/brandimages/' . $filename;

                $brand->save();
                return true;

            } else {
                $brand = Brand::findOrFail($id);
                $brand->brand_name = ucfirst($request->brand_name);
                $brand->brand_detail = $request->brand_detail;
                $brand->save();
                return true;

            }

            return false;

        } catch (\Throwable $th) {
            return false;
        }

    }

    public function DeleteBrand($id)
    {
        try {
            $brand = Brand::findOrFail($id);
            if (count($brand->BrandProducts) > 0) {
                return "failure:Brand can not be deleted as it has products linked to it";
            } else {
                File::delete($brand->brand_image);
                $brand->delete();
                return "success: Brand was deleted";
            }
        } catch (\Throwable $th) {
            return "failure:An error has occured";
        }


    }


    public function GetAllProducts()
    {

        return BrandProduct::all();

    }
    public function GetAllProductPaginate()
    {

        return BrandProduct::where('product_name','!=', null)->paginate(40);

    }


    public function CreateProduct(Request $attributes)
    {
        try {

            $prodCreate = new BrandProduct();
            $prodCreate->product_name = ucfirst($attributes->product_name);
            $prodCreate->product_detail = $attributes->product_detail;
            $prodCreate->brand_id = $attributes->brand_id;
            $image = $attributes->file('product_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'assets/images/productimages/' . $filename;
            Image::make($image->getRealPath())->resize(270, 367)->save($path);
            $prodCreate->product_image = 'assets/images/productimages/' . $filename;
            $prodCreate->save();
            return true;
        } catch (\Throwable $th) {
            return false;
        }

    }


    public function GetBrandById($brandid)
    {
        try {
            $brand = Brand::findOrFail($brandid);
            $products = BrandProduct::where('brand_id', $brandid)->paginate(40);
            return [$brand, $products];
        } catch (\Throwable $throwable) {
            return null;
        }
    }

    public function DeleteProduct($id)
    {
        try {
            $product = BrandProduct::findOrFail($id);
            File::delete($product->product_image);
            $product->delete();
            return "success: product was deleted";

        } catch (\Throwable $th) {
            return "failure:An error has occured";
        }

    }


    public function UpdateProduct($id, Request $request)
    {

        $checkifNameExist = BrandProduct::where('product_name',$request->product_name)
                            ->where('id','!=', $id)->get();


        if(count($checkifNameExist) > 0)
        {
            return "failure: product name already exist";
        }
        try
        {
            if($request->file('product_image'))
            {


                $product = BrandProduct::findOrFail($id);

                $product->product_name = ucfirst($request->product_name);
                $product->product_detail = $request->product_detail;
                $product->brand_id = $request->brand_id;
                File::delete($product->product_image);
                $image = $request->file('product_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $path = 'assets/images/productimages/' . $filename;
                //  return $path;
                Image::make($image->getRealPath())->resize(400, 400)->save($path);
                $product->product_image = 'assets/images/productimages/' . $filename;

                $product->save();
                return "success:update was successful";

            }
            else
            {
                $product = BrandProduct::findOrFail($id);
                $product->product_name = ucfirst($request->product_name);
                $product->product_detail = $request->product_detail;
                $product->brand_id = $request->brand_id;
                $product->save();
                return  "success:update was successful";;

            }

            return "failure:An error as occurred";
        }
        catch (\Throwable $throwable)
        {
            return "failure:{$throwable->getMessage()}";
        }


    }


    public function SendEmail(Request $request)
    {
        try
        {

            \Mail::send('contactForm', array(
                'name' => "{$request->get('firstname')} {$request->get('lastname')}" ,
                'email' => $request->get('email'),
                'subject' => ucwords($request->get('subject')),
                'content' => $request->get('message'),
            ), function($message) use ($request){
                $message->from($request->email);
                $message->to('ordained07@gmail.com', 'Admin')->subject(ucwords($request->get('subject')));
            });

            return "success:Thank you for contacting us";


        }
        catch(\Throwable $th)
        {
               return $th;
          //  return "failure: sorry your email could not be sent -- {$th->getMessage()}";
        }



    }


    public function Search(Request $request)
    {
        try
        {
           $result = Search::add(Brand::class, 'brand_name')
                ->add(BrandProduct::class, 'product_name')
               ->beginWithWildcard()
                ->paginate(20)
                ->get("{$request->search}");

           $message = ($result->count() > 0 ) ? "200:You result search is {$result->count()}" : "201:No result for your search";

            return ["success" => $message, "result" => $result];
        }
        catch(\Throwable $throwable)
        {
           return ["failure" => $throwable->getMessage(), "result" => null];
        }
    }



}













