<div class="modal fade" id="modalDetailImportExport" tabindex="-1" aria-labelledby="modalDetailImportExportLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailImportExportLabel">{{ __('Chi tiết nhập/xuất sản phẩm') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="content-table-order-history">
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
</div>
