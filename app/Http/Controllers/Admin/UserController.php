<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Utility;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
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
        return view('admin.user.create');
    }

    public function storeUser(Request $request)
    {

        $input = $request->except(['_token']);

        $input= $request->all();
        if (isset($input['profile_photo_path'])) {

            $img = $this->utility->saveImageuser($input);
            if ($img) {
                $path = '/images/upload/user/' . $input['profile_photo_path']->getClientOriginalName();
                $input['profile_photo_path'] = $path;
            }
        }

        $user = $this->userRepository->store($input);

        return redirect()->route('admin.user.index');
    }


    public function editUser($id)
    {
        $user = $this->userRepository->show($id);
        return view('admin.user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $input= $request->all();
        if (isset($input['profile_photo_path'])) {
            $img = $this->utility->saveImageUser($input);
            if ($img) {
                $path = '/images/upload/user/' . $input['profile_photo_path']->getClientOriginalName();
                $input['profile_photo_path'] = $path;
            }
        }

        $user = $this->userRepository->update($input, $id);

        return redirect()->route('admin.user.index');
    }


    public function deleteUser()
    {

        alert()->success('Thành công!', 'Xóa sản phẩm thành công!');
        return redirect()->route('admin.users.index');
    }

    public function userSearch(Request $request)
    {
        $filter['name'] = $request->name;
        $users = $this->userRepository->getListuser($filter);
        $categories = $this->userRepository->getCategoriesAndCount();

        return view('pages.users', compact('users', 'categories'));
    }

    public function userDetail(Request $request)
    {
        $id = $request->id;
        $user = $this->userRepository->with('storage')->getById($id);

        return view('pages.detail', compact('user'));
    }
}
