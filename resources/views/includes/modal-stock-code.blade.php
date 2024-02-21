<div class="modal fade" id="modalStockCode" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Change Stock Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <input type="text" id="stock-code-search" onkeyup="searchStockCode()" placeholder="Search for stock code.." title="Type in a stock code">
                        <ul id="stock-code-list">
                            @foreach($listStockCode as $code)
                            <li class="item-list-stock-code">
                                <input class="form-check-input" type="checkbox" name="stock_code" value="{{ $code['code'] }}" <?php $code['status'] == 1 ? print_r('checked') : '' ?>>
                                <label>
                                    {{ $code['name'] }}
                                </label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" onclick="saveStockCode()">Save changes</button>
            </div>
        </div>
    </div>
</div>