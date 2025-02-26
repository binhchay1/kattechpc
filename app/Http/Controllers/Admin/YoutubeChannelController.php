<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\YoutubeRequest;
use App\Http\Requests\YoutubeUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\YoutubeChannelRepository;

class YoutubeChannelController extends Controller
{
    private $youtubeChannelRepository;

    public function __construct(
        YoutubeChannelRepository $youtubeChannelRepository
    ) {
        $this->youtubeChannelRepository = $youtubeChannelRepository;
    }

    public function index()
    {
        $listYoutubeChannel = $this->youtubeChannelRepository->index();

        return view('admin.youtube.index', compact('listYoutubeChannel'));
    }

    public function createYoutubeChannel()
    {
        return view('admin.youtube.create');
    }

    public function storeYoutubeChannel(YoutubeRequest $request)
    {
        $input = $request->except(['_token']);
        if ($request->hasfile('thumbnail')) {
            if (isset($input['thumbnail'])) {
                $input['thumbnail']->move(public_path('images/upload/youtube-channel/'), $input['thumbnail']->getClientOriginalName());
                $input['thumbnail'] = '/images/upload/youtube-channel/' . $input['thumbnail']->getClientOriginalName();
            }
        }

        $this->youtubeChannelRepository->create($input);

        return redirect()->route('admin.youtube.index')->with('success', __('Đường dẫn youtube thêm thành công'));
    }

    public function editYoutubeChannel($id)
    {
        $youtubeChannel = $this->youtubeChannelRepository->show($id);

        return view('admin.youtube.edit', compact('youtubeChannel'));
    }

    public function updateYoutubeChannel(YoutubeUpdateRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        if ($request->hasfile('thumbnail')) {
            if (isset($input['thumbnail'])) {
                $input['thumbnail']->move(public_path('images/upload/youtube-channel/'), $input['thumbnail']->getClientOriginalName());
                $input['thumbnail'] = '/images/upload/youtube-channel/' . $input['thumbnail']->getClientOriginalName();
            }
        }
        $input = $this->youtubeChannelRepository->update($input, $id);

        return redirect()->route('admin.youtube.index')->with('success', __('Đường dẫn youtube cập nhật thành công'));
    }

    public function deleteYoutubeChannel($id)
    {
        $youtubeChannel = $this->youtubeChannelRepository->destroy($id);
        if (empty($youtubeChannel)) {
            return redirect('/404');
        }

        return back()->with('success', __('Đường dẫn youtube xóa thành công'));
    }
}
