<?php

namespace App\Http\Controllers\Page;

use App\Enums\User;
use App\Enums\Utility;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    private $userRepository ;
    private $utility;
    
    public function __construct(
        UserRepository $userRepository,
        Utility $utility
    
    ) {
        $this->userRepository = $userRepository;
        $this->utility = $utility;
    }
    
    public function show()
    {
        if (empty(Auth::user())) {
            abort(404);
        }
        $idUser = Auth::user()->id;
        $dataUser = $this->userRepository->show($idUser);
        $genderUser = User::SEX;
        if (empty($dataUser)) {
            abort(404);
        }
        $genderUser = User::SEX;
        return view('page.account.show', compact('dataUser', 'genderUser'));
    }
    
    public function update(UserUpdateRequest $request, $userIdHash)
    {
      
        $input = $request->except(['_token']);
        if (isset($input['profile_photo_path'])) {
            $img = $this->utility->saveImageUser($input);
            if ($img) {
                $path = 'images/upload/user/' . $input['profile_photo_path']->getClientOriginalName();
                $input['profile_photo_path'] = $path;
            }
        }
        $this->userRepository->update($input, $userIdHash);
        return back()->with('success', __('Thông tin đã được cập nhập thành công!'));
    }
    
    public function changePassword()
    {
        return view('page.account.change-password');
    }
    
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", __("Mật khẩu không đúng!"));
        }
        
        \App\Models\User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        
        return back()->with("success", __("Mật khẩu đã thay đổi thành công!"));
    }
    
    public function orderHistory ()
    {
        if (empty(Auth::user())) {
            abort(404);
        }
        $idUser = Auth::user()->id;
        $dataUser = $this->userRepository->show($idUser);
        $genderUser = User::SEX;
        if (empty($dataUser)) {
            abort(404);
        }
        $genderUser = User::SEX;
        return view('page.account.order-history', compact('dataUser'));
    }
    
    
}
