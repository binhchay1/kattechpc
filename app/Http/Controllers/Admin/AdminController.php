<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CustomContactRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private $customContactRepository;

    public function __construct(
        CustomContactRepository $customContactRepository
    ) {
        $this->customContactRepository = $customContactRepository;
    }

    public function viewDashBoard()
    {
        return view('admin.dashboard');
    }

    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function listCustomContact()
    {
        $listCustomContact = $this->customContactRepository->paginate();

        return view('admin.custom-contact.index', compact('listCustomContact'));
    }
}
