<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd($products);
        return view('front.home.index', [
            'products' => Product::latest()->get()
        ]);
    }

    public function profile()
    {
        return view('front.profile.index');
    }

    public function updateProfile(Request $request, $id)
    {
        $validator = validator($request->all(), $this->rules($id), $this->messages());
        if ($validator->fails()) {
            session()->flash('error', $validator->errors());
            return back();
        }
        // dd($request->all());

        $data = $request->except(['password']);

        try {
            $resource = User::where('id', $id)->first();


            if ($request->password) {
                $data['password'] = bcrypt($request->password);
            }

            $resource->update($data);

            session()->flash('success', __('lang.updated_successfully'));
            return back();
        } catch (\Exception $th) {
            session()->flash('error', $th->getMessage());
            return back();
        }
    }




    public function rules($userId)
    {
        return [
            'name' => 'required|string|max:150',
            "email" => 'required|unique:users,email,' . $userId,
        ];
    }

    public function messages()
    {
        return [
            'required' => 'this input must be required',
            'string' => 'this input must be string',
            "email" => 'this input must be email',
            'unique' => 'this input must be unique',
        ];
    }
}
