@if ($message = Session::get('success'))
    <div
        class="relative p-3 pr-12 text-sm bg-green-500 border border-transparent rounded-md text-green-50 alert-block">
        <button
            class="absolute top-0 bottom-0 right-0 p-3 text-green-200 transition hover:text-green-100"><i
                data-lucide="x" class="h-5"></i></button>
        <span class="font-bold">{{$message}}</span>
    </div>
@endif

@if ($message = Session::get('error'))
    <div
        class="relative p-3 pr-12 text-sm bg-red-500 border border-transparent rounded-md text-red-50 alert-block">
        <button
            class="absolute top-0 bottom-0 right-0 p-3 text-red-200 transition hover:text-red-100"><i
                data-lucide="x" class="h-5"></i></button>
        <span class="font-bold">{{$message}}</span>
    </div>

@endif


@if ($message = Session::get('warning'))
    <div
        class="relative p-3 pr-12 text-sm bg-purple-500 border border-transparent rounded-md text-purple-50 alert-block">
        <button
            class="absolute top-0 bottom-0 right-0 p-3 text-purple-200 transition hover:text-purple-100"><i
                data-lucide="x" class="h-5"></i></button>
        <span class="font-bold">{{$message}}</span>
    </div>

@endif

