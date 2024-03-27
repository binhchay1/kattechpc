<?php

namespace App\Http\Controllers\Admin;

use App\Enums\User;
use App\Enums\Utility;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function App\Http\Controllers\alert;

class UserController extends Controller
{
    private $userRepository ;
    private $utility;
    private $roleRepository;

    public function __construct(
        UserRepository $userRepository,
        Utility $utility,
        RoleRepository $roleRepository

    ) {
        $this->userRepository = $userRepository;
        $this->utility = $utility;
        $this->roleRepository = $roleRepository;
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
        $roles = $this->roleRepository->index();
        return view('admin.user.create', compact('genderUser', 'roles'));
    }

    public function storeUser(UserRequest $request)
    {
        $input = $request->except(['_token']);
        $input= $request->all();
        $input['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $input['role'] = 'user'; // password
        if (isset($input['profile_photo_path'])) {

            $this->utility->saveImageuser($input);
            $path = '/images/upload/user/' . $input['profile_photo_path']->getClientOriginalName();
            $input['profile_photo_path'] = $path;
        }

        $user = $this->userRepository->store($input);
        return redirect()->route('admin.user.index')->with('success', __('Người dùng được thêm thành công'));
    }


    public function editUser($id)
    {
        $roles = $this->roleRepository->index();
        $user = $this->userRepository->show($id);
        if (empty($user)) {
            abort(404);
        }
        $genderUser = User::SEX;

        return view('admin.user.edit', compact('user','genderUser', 'roles'));
    }

    public function updateUser(UserUpdateRequest $request, $id)
    {
        $input = $request->except(['_token']);
        if (isset($input['profile_photo_path'])) {
           $this->utility->saveImageUser($input);
           
            $path = '/images/upload/user/' . $input['profile_photo_path']->getClientOriginalName();
            $input['profile_photo_path'] = $path;
        
        }

        $user = $this->userRepository->update($input, $id);

        return redirect()->route('admin.user.index')->with('success',__('Thông tin người dùng được thay đổi thành công'));
    }


    public function deleteUser($id)
    {

        $this->userRepository->destroy($id);

        return back()->with('success',__('Thông tin người dùng được thành công'));
    }
    

//    public function userSearch(Request $request)
//    {
//        $filter['name'] = $request->name;
//        $users = $this->userRepository->getListuser($filter);
//        $categories = $this->userRepository->getCategoriesAndCount();
//
//        return view('pages.users', compact('users', 'categories'));
//    }

}
