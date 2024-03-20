<?php

namespace App\Http\Controllers\Admin;

use App\Enums\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $userRepository;
    
    public function __construct(
        UserRepository $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProfile(string $id)
    {
        $user = $this->userRepository->show($id);
        if (empty($user)) {
            abort(404);
        }
        $genderUser = User::SEX;
        
    
        return view('admin.profile.edit', compact('user','genderUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProfile(UserUpdateRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        if (isset($input['profile_photo_path'])) {
            $img = $this->utility->saveImageUser($input);
            if ($img) {
                $path = '/images/upload/user/' . $input['profile_photo_path']->getClientOriginalName();
                $input['profile_photo_path'] = $path;
            }
        }
    
        $user = $this->userRepository->update($input, $id);
    
        return back()->with('success', __('Thông tin được thay đổi thành công'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
