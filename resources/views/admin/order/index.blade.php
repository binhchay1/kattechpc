@extends('layouts.master-admin')

@section('title')
{{ __('Danh sách đơn hàng') }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/order.css') }}" />
@endsection
@section('content')
<div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12 mt-4">
    <div class="xl:col-span-12">
        <div class="card" id="usersTable">
            <div class="card-body">
                <div class="flex items-center">
                    <h6 class="text-15 grow">{{ __('Danh sách đặt hàng') }}</h6>
                    <div class="lg:col-span-2 ltr:lg:text-right rtl:lg:text-left xl:col-span-2 xl:col-start-11 button-export">
                        <a class="btn btn-warning float-end" style="background: green; color: white" href="{{route('admin.order.export')}}">{{__('Xuất kho')}}</a>
                    </div>
                </div>
            </div>
            <div class="!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500">
                <form action="#!">
                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                        <div class="relative xl:col-span-2">
                            <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{__('Tìm kiếm')}}" autocomplete="off">
                            <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="-mx-5 -mb-5 overflow-x-auto">
                    <table class="w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap">
                        <thead class="text-left">
                            <tr class="relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">

                                <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="code">
                                    {{ __('Mã đơn hàng') }}
                                </th>

                                <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="user">{{ __('Người đặt hàng') }}
                                </th>
                                <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="date">{{ __('Ngày đặt hàng') }}
                                <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="quantity">{{ __('Tổng tiền') }}
                                <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="address">{{ __('Địa chỉ') }}
                                <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="phone">{{ __('Số điện thoại') }}
                                <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="note">{{ __('Ghi chú') }}
                                <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="location">{{ __('Trạng thái') }}
                                </th>
                                <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">{{ __('Hành động') }}</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($listOrders as $order)
                            <tr class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">

                                <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">{{ $order->order_code }}
                                </td>
                                <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">{{ $order->name }}
                                </td>
                                <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">  {{ date("d/m/Y", strtotime($order->order_date)) }}
                                </td>
                                <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"> {{ number_format($order->total, 0, ',', '.') }} đ
                                </td>
                                <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">{{ $order->address }}
                                </td>
                                <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">{{ $order->phone }}
                                </td>
                                <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">{{ $order->notes }}
                                </td>
                                <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 status">
                                    <a href="{{route('activeOrder', $order['id'])}}" class="btn btn-{{$order->status == 1 ? 'success' : 'danger' }}">
                                        {{$order->status == 1 ? "Xác nhận " : "Chưa xác nhận"}}
                                    </a>
                                </td>
                                <td>
                                    <div class="relative dropdown">
                                        <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="usersAction1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="usersAction1">
                                            <li>
                                                <a data-modal-target="addUserModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href=""><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{__('Sửa')}}</span></a>
                                            </li>
                                            <li>
                                                <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{__('Xóa')}}</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <div id="deleteModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
                                    <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                                        <div class="float-right">
                                            <button data-modal-close="deleteModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
                                        </div>
                                        <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                                        <div class="mt-5 text-center">
                                            <h5 class="mb-1">{{ __('Bạn có chắc không?') }}</h5>
                                            <p class="text-slate-500 dark:text-zink-200">{{ __('Bạn có muốn xóa đơn hàng này không?') }}</p>
                                            <div class="flex justify-center gap-2 mt-6">
                                                <button type="reset" data-modal-close="deleteModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">{{__('Hủy')}}</button>
                                                <a href="{{route('admin.order.delete',$order['id'])}}">
                                                    <button class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">{{__('Xóa đơn hàng!')}}</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $listOrders->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>

<script>
    setTimeout(function() {
        $('.alert-block').remove();
    }, 5000);
</script>
@endpush
