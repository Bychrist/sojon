<?php


namespace App\Repository;
use Illuminate\Http\Request;


    interface IRepository
    {
        public function GetAllBrands();
        public function GetBrandById($brandid);
        public function CreateBrand(Request $attributes);
        public function UpdateBrand($id, Request $attributes);
        public function DeleteBrand($id);
        public function DeleteProduct($id);
        public function GetAllProducts();
        public function CreateProduct(Request $attributes);
        public function UpdateProduct($id, Request $request);
        public function BrandAndProduct();
        public function SendEmail(Request $request);
        public function Search(Request $request);
        public function GetAllProductPaginate();
    }
