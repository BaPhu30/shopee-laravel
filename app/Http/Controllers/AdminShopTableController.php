<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\UserRole;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminShopTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Read
        $Shops = UserRole::with('user')->with('shops')->paginate(6);
        return view('admin.shop-table', compact('Shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Read
        $Users = UserRole::with('user')->with('shops')->where('user_role.role_id', '2')->get();
        return view('admin.shop-table-insert', compact('Users'));
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
            'name' => 'required|string|min:2|max:255|unique:shop',
        ]);

        $Shop = Shop::where('user_role_id', $request->users_id)->first();
        if (empty($Shop)) {
            // User-role-id
            $data['user_role_id'] = $request->users_id;

            // Name Shop
            $data['name'] = $request->name;

            // Avatar
            $avatar = 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png';
            foreach ($request->files as $file) {
                try {
                    $name = Str::random(10);
                    $fileName = time() . '_' . $name;
                    $extension = $file->getClientOriginalExtension();
                    $fullpath = 'phu/shopee/admin/shop' . $fileName . '.' . $extension;
                    $upload = Storage::disk('s3')->put($fullpath, file_get_contents($file), 'public');

                    if ($upload) {
                        $s3 = Storage::disk('s3')->getAdapter()->getClient();
                        $avatar = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                    }
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }
            }
            $data['avatar'] = $avatar;

            // Shopee-mall
            if ($request->shopeeMall == 'on') {
                $data['shopee_mall'] = 1;
            } else {
                $data['shopee_mall'] = 0;
            }

            Shop::create($data);
            return redirect()->route('admin.shop-table');
        }

        return redirect()->back();
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:255|unique:shop',
        ]);
        
        if ($validator->fails()) {
            return response()->json(
                [
                    'Errors' => $validator->fails(),
                ]
            );
        } else {
            // Avatar
            $avatar = $request->avatar;
            foreach ($request->files as $file) {
                try {
                    $name = Str::random(10);

                    $fileName = time() . '_' . $name;
                    $extension = $file->getClientOriginalExtension();
                    $fullpath = 'phu/shopee/admin/' . $fileName . '.' . $extension;
                    $upload = Storage::disk('s3')->put($fullpath, file_get_contents($file), 'public');

                    if ($upload) {
                        $s3 = Storage::disk('s3')->getAdapter()->getClient();
                        $avatar = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                    }
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }
            }

            // Update 
            $Shop = new Shop();
            $Shop = Shop::find($id);
            $Shop->name = $request->name;
            $Shop->avatar = $avatar;
            $Shop->shopee_mall = $request->shopee_mall;
            $Shop->update();
            return response()->json(
                [
                    'Shop' => $Shop,
                ]
            );
        }
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
        $Shop = Shop::find($id);
        $Shop->delete();
    }
}
