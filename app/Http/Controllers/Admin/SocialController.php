<?php

namespace App\Http\Controllers;

use App\Repositories\SocialRepository;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    private $socialRepository;

    public function __construct(
        SocialRepository $socialRepository
    ) {
        $this->socialRepository = $socialRepository;
    }

    public function index()
    {
        $social = $this->socialRepository->index();

        return view('admin.social.index', compact('social'));
    }

    public function storeSocial(Request $request)
    {
        $input = $request->except(['_token']);
        $social = $this->socialRepository->index();

        if (isset($social)) {
            $this->socialRepository->update($input, $social->id);
        } else {
            $this->socialRepository->create($input);
        }

        return redirect()->route('admin.social.index')->with('success',  __('Mạng xã hội thay đổi thành công'));
    }
}
