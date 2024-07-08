<div id="modalDetailImportExport" modal-center="" class="fixed flex flex-col transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
    <div class="w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full modal-content">
        <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
            <h5 class="text-16">{{ __('Chi tiết nhập/xuất sản phẩm') }}</h5>
            <button data-modal-close="extraLargeModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x size-5">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
            <table>
                <thead>
                    <tr class="table100-head">
                        <th class="column1">{{ __('Ngày') }}</th>
                        <th class="column2">{{ __('Mã') }}</th>
                        <th class="column3">{{ __('Tên nhân viên') }}</th>
                        <th class="column5">{{ __('Số lượng') }}</th>
                    </tr>
                </thead>
                <tbody id="table-body-detail">

                </tbody>
            </table>
        </div>
    </div>
</div>
