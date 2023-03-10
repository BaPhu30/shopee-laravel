<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CategoryChild;
use App\Models\Users;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ShopProductTableController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('shop.login');
    }

    public function createLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'pass' => 'required|string|min:6|max:255',
        ]);

        $User = Users::with('userRoles')->where('users.email', $request->email)->first();

        if ($User->userRoles[0]->role_id == 2) {
            $Shop = Shop::where('id', $User->userRoles[0]->id)->first();
            session(['user' => $User, 'id' => $Shop->id]);
            return redirect()->route('shop.product-table', ['id' => $Shop->id]);
        }

        return redirect()->route('shop');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = DB::table('product')
        ->join('shop','product.shop_id','=','shop.id')
        ->join('category_child','category_child.id','=','product.category_child_id')
        ->select('product.*', 'shop.*', 'category_child.name as name_category')
        ->where('shop.id', session('id'))
        ->get();
        return view('shop.product-table', compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CategoryChilds = CategoryChild::get();
        $Shops = Shop::get();
        return view('shop.product-table-insert', compact('CategoryChilds', 'Shops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sold' => 'required|string',
        ]);

        $data = $request->all();
        // img
        $filesImage = [];
        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $fileImage) {
                try {
                    $name = Str::random(10);
                    $fileName = time() . '_' . $name;
                    $extension = $fileImage->getClientOriginalExtension();
                    $fullpath = 'phu/shopee/admin/product/' . $fileName . '.' . $extension;
                    $upload = Storage::disk('s3')->put($fullpath, file_get_contents($fileImage), 'public');

                    if ($upload) {
                        $s3 = Storage::disk('s3')->getAdapter()->getClient();
                        $nameImage = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                    }
                    $filesImage[] = $nameImage;
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }
            }
            $img = implode(', ', $filesImage);
        }
        $data['img'] = $img;

        // video
        $filesVideo = [];
        if ($request->hasfile('video')) {
            foreach ($request->file('video') as $fileVideo) {
                try {
                    $name = Str::random(10);
                    $fileName = time() . '_' . $name;
                    $extension = $fileVideo->getClientOriginalExtension();
                    $fullpath = 'phu/shopee/admin/product/' . $fileName . '.' . $extension;
                    $upload = Storage::disk('s3')->put($fullpath, file_get_contents($fileVideo), 'public');

                    if ($upload) {
                        $s3 = Storage::disk('s3')->getAdapter()->getClient();
                        $video = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                    }
                    $filesVideo[] = $video;
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }
            }
            $video = implode(', ', $filesVideo);
            $data['video'] = $video;
        } else {
            $data['video'] = NULL;
        }

        Product::create($data);
        return redirect()->route('shop.product-table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sold' => 'required|string',
        ]);

        // img
        $img = $request->imageOld;
        $filesImage = [];
        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $fileImage) {
                try {
                    $name = Str::random(10);
                    $fileName = time() . '_' . $name;
                    $extension = $fileImage->getClientOriginalExtension();
                    $fullpath = 'phu/shopee/admin/product/' . $fileName . '.' . $extension;
                    $upload = Storage::disk('s3')->put($fullpath, file_get_contents($fileImage), 'public');

                    if ($upload) {
                        $s3 = Storage::disk('s3')->getAdapter()->getClient();
                        $nameImage = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                    }
                    $filesImage[] = $nameImage;
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }
            }
            $img = implode(', ', $filesImage);
        }

        // video
        $video = $request->videoOld;
        $filesVideo = [];
        if ($request->hasfile('video')) {
            foreach ($request->file('video') as $fileVideo) {
                try {
                    $name = Str::random(10);
                    $fileName = time() . '_' . $name;
                    $extension = $fileVideo->getClientOriginalExtension();
                    $fullpath = 'phu/shopee/admin/product/' . $fileName . '.' . $extension;
                    $upload = Storage::disk('s3')->put($fullpath, file_get_contents($fileVideo), 'public');

                    if ($upload) {
                        $s3 = Storage::disk('s3')->getAdapter()->getClient();
                        $video = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                    }
                    $filesVideo[] = $video;
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }
            }
            $video = implode(', ', $filesVideo);
        }

        // Update 
        $Product = new Product();
        $Product = Product::find($id);
        $Product->title = $request->title;
        $Product->img = $img;
        $Product->video = $video;
        $Product->sold = $request->sold;
        $Product->update();
        $Product = Product::with('categoryChild')->with('shop')->find($id);
        return response()->json(
            [
                'Product' => $Product,
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete
        $Product = Product::find($id);
        $Product->delete();
    }
}
