<?php

namespace App\Http\Controllers\Admin;

use App\Enums\User;
use App\Enums\Utility;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function App\Http\Controllers\alert;

class UserController extends Controller
{
    private $userRepository ;
    private $utility;

    public function __construct(
        UserRepository $userRepository,
        Utility $utility

    ) {
        $this->userRepository = $userRepository;
        $this->utility = $utility;
    }

    public function index()
    {
        $listUsers = $this->userRepository->index();
        return view('admin.user.index', compact('listUsers'));
    }

    public function show($id)
    {
        $user = $this->userRepository->show($id);
    }

    public function createUser()
    {
        $genderUser = User::SEX;
        return view('admin.user.create', compact('genderUser'));
    }

    public function storeUser(UserRequest $request)
    {
        $input = $request->except(['_token']);
        $input= $request->all();
        $input['password'] = Hash::make( $input['password']);
        if (isset($input['profile_photo_path'])) {

            $img = $this->utility->saveImageuser($input);
            if ($img) {
                $path = '/images/upload/user/' . $input['profile_photo_path']->getClientOriginalName();
                $input['profile_photo_path'] = $path;
            }
        }

        $user = $this->userRepository->store($input);
        return redirect()->route('admin.user.index')->with('success', 'User successfully added.');
    }


    public function editUser($id)
    {
        $user = $this->userRepository->show($id);
        $genderUser = User::SEX;

        return view('admin.user.edit', compact('user','genderUser'));
    }

    public function updateUser(UserUpdateRequest $request, $id)
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

        return redirect()->route('admin.user.index')->with('success', 'User successfully updated.');
    }


    public function deleteUser($id)
    {

        $this->userRepository->destroy($id);

        return back()->with('success', 'User successfully deleted.');
    }

    public function userSearch(Request $request)
    {
        $filter['name'] = $request->name;
        $users = $this->userRepository->getListuser($filter);
        $categories = $this->userRepository->getCategoriesAndCount();

        return view('pages.users', compact('users', 'categories'));
    }
    
}
