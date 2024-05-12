<div id="js-modal-popup">
    <div class="mask-popup active">
    </div>
    <div class="popup-select active">
        <div class="row header" id="form-header">
            <div class="col-lg-4 title-popup">
                <h4>{{ __('Chọn linh kiện') }}</h4>
            </div>
            <div class="col-lg-6">
                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="{{ __('Bạn cần link kiện gì?') }}">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-2" style="text-align: right; color: white; font-size: 35px">
                <span class="close-popup"><i class="fa fa-times"></i></span>
            </div>
        </div>

        <div class="row popup-main" id="popup-main">
            <div class="col-lg-4 popup-main_filter w-30 float_l">
                <h4>{{ __('Lọc sản phẩm theo') }}</h4>
                <div class="list-filter">
                    <div class="gr-filter brand">
                        <h5 class="title-filter">{{ __('Hãng sản xuất') }} </h5>
                        <ul id="js-brand-filter" class="ul-filter">
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="value-filter">Intel (98)</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="gr-filter">
                        <h5 class="title-filter">{{ __('Khoảng giá') }} </h5>
                        <ul id="js-price-filter" class="ul-filter">
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="value-filter">{{ ('Dưới 1 triệu') }} (17)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="value-filter">{{ __('10 triệu - 15 triệu') }} (17)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="value-filter">{{ __('15 triệu - 20 triệu') }} (17)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="value-filter">{{ __('20 triệu - 30 triệu') }} (17)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="value-filter">{{ __('30 triệu - 50 triệu') }} (17)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="value-filter">{{ __('50 triệu - 100 triệu') }} (17)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="value-filter">{{ __('Trên 100 triệu') }} (17)</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="gr-filter" id="js-attr-filter">
                        <h5 class="title-filter"> </h5>
                        <div id="js-attr-list" class="ul-filter">
                            <h5 class="title-filter"> Loại CPU </h5>
                            <ul id="js-attr-list" class="ul-filter">
                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox">
                                        <span class="value-filter">SERVER (27)</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-8 popup-main_content w-70 float_r">
                <div class="sort-paging clear">
                    <div class="sort-block float_l">
                        <span>{{ __('Sắp xếp') }}: </span>
                        <select onchange="productWithFilter(this.value)" id="js-sort-holder">
                            <option value="">{{ __('Tùy chọn') }}</option>
                            <option value="">{{ ('Mới nhất') }}</option>
                        </select>
                    </div>

                    <div class="paging-block float_r paging-ajax js-paging">
                        <a href="javascript:void(0);" class="active" onclick="objBuildPCVisual.showProductFilter('/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;pc_part_id=')">
                            1
                        </a>

                        <a href="javascript:void(0);" onclick="objBuildPCVisual.showProductFilter('/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;pc_part_id=&amp;page=2')">
                            next
                        </a>
                    </div>
                </div>

                <div class="list-product-select" id="js-holder-p_item">

                </div>
            </div>
        </div>
    </div>
</div>
