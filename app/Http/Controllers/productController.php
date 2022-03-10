<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Repositories\productRepository;
use App\Http\Controllers\AppBaseController;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Flash;
use Response;

use App\Models\metaSeo ;

class productController extends AppBaseController
{
    /** @var  productRepository */
    private $productRepository;

    public function __construct(productRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $products = product::Orderby('id', 'desc')->paginate(10);
        
        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    

    /**
     * Store a newly created product in storage.
     *
     * @param CreateproductRequest $request
     *
     * @return Response
     */
    public function store(CreateproductRequest $request)
    {
        $input = $request->all();

        if(empty($input['Link'])){

            $input['Link'] = convertSlug($input['Name']);
        }

        if(!empty($input['Price'])){

            $input['Price'] = str_replace(',', '', $input['Price']);
        }

        if ($request->hasFile('Image')) {

            $file_upload = $request->file('Image');

            $name = time() . '_' . $file_upload->getClientOriginalName();

            $filePath = $file_upload->storeAs('uploads/product', $name, 'public');

            $input['Image'] = $filePath;
        }

        //add meta seo cho product

        $meta_title = $input['ProductSku'].', '.$input['Name'].' giá rẻ, Trả góp 0%';

        $meta_content = 'Mua '.$input['Name'].' giá rẻ. Miễn phí giao hàng & Lắp đặt. Đổi lỗi trong 7 ngày đầu. Liên hệ hotline 0247.303.6336 để mua hàng và biết thêm thông tin chi tiết'; 

        $inputs_meta['meta_title'] = $meta_title;

        $inputs_meta['meta_content'] = $meta_content;

        $inputs_meta['meta_og_content'] = $meta_content;

        $inputs_meta['meta_og_title'] = $meta_title;

        $meta_model = new metaSeo();

        $meta_model->create($inputs_meta);

        $input['Meta_id'] = $meta_model->id;

        $product = $this->productRepository->create($input);
        
        return Redirect()->back()->with('id', $product->id);

        // return redirect(route('products.index'));
    }

    /**
     * Display the specified product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified product in storage.
     *
     * @param int $id
     * @param UpdateproductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductRequest $request)
    {
        $product = $this->productRepository->find($id);

        $input  = $request->all();

        if(empty($input['Link'])){

            $input['Link'] = convertSlug($input['Name']);
        }


        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        if(!empty($input['Price'])){

            $input['Price'] = str_replace(',', '', $request->Price);
        }

        if ($request->hasFile('Image')) {

            $file_upload = $request->file('Image');

            $name = time() . '_' . $file_upload->getClientOriginalName();

            $filePath = $file_upload->storeAs('uploads/product', $name, 'public');

            $input['Image'] = $filePath;
        }

        $product = $this->productRepository->update($input, $id);

        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }

    public function FindbyNameOrModel(Request $request)
    {
        $clearData = trim($request->search);

        $data      = $clearData;

        $resultProduct = Product::select('id')->where('Name', $data)->OrWhere('ProductSku', $data)->first();

        if(!empty($resultProduct)){


            $products = Product::where('id', $resultProduct->id)->paginate(10);

            return view('products.index')
            ->with('products', $products);

        }
        else{
            Flash::error('Không tìm thấy sản phẩm, vui lòng tìm kiếm lại"');

            return redirect(route('products.index'));
            
        }
        
    }

    public function selectProductByCategory($cate_id)
    {
       $products = Product::where('Group_id', $cate_id)->orderBy('id', 'desc')->paginate(10);

       return view('products.index')
            ->with('products', $products);

        if (empty($product)) {

            Flash::error('Product not found');

            return redirect(route('products.index'));
        }


    }

    public function FindbyNameOrModelOfFrontend(Request $request)
    {
        $clearData = trim($request->key);

        $data      = $clearData;

        $resultProduct = Product::select('id')->where('Name', $data)->OrWhere('ProductSku', $data)->first();

        if(!empty($resultProduct)){

            $products = Product::where('id', $resultProduct->id)->paginate(10);

    
            return view('frontend.category')
            ->with('data', $products);

        }
        else{
            $data = [];
            return view('frontend.category', compact('data'));
            // Flash::error('Không tìm thấy sản phẩm, vui lòng tìm kiếm lại"');
        }
        
    }

    public function search()
    {
        $array['ProductSku'] = 'UA50AU9000KXXVS';

        $array['Price'] = '500';
        $search = product::where($array)->get();
        print_r($search);
    }
}
