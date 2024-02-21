<div class="modal fade" id="modalSector" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Change Sector</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <ul id="industry-list">
                            @foreach($listSector as $key => $industry)
                            <li class="item-list-industry">
                                <input class="form-check-input" type="checkbox" name="industry" value="{{ $key }}" <?php $industry['status'] == 1 ? print_r('checked') : '' ?>>
                                <label>
                                    {{ $industry['name'] }}
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
                <button type="button" class="btn btn-primary" onclick="saveSector()">Save changes</button>
            </div>
        </div>
    </div>
</div>
