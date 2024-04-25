<div id="js-modal-popup">
    <div class="mask-popup active" onclick="closePopup()">
    </div>
    <div class="popup-select active ">
        <div class=" row header" id="form-header">
            <div class="col-lg-4 title-popup">
                <h4 class="">Chọn linh kiện</h4>

            </div>
            <div class="col-lg-6">
                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="Bạn cần link kiện gì?">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-2" style="text-align: right; color: white; font-size: 35px">
                <span class="close-popup" onclick="closePopup()"><i class="fa fa-times"></i></span>
            </div>
        </div>

        <div class="row popup-main" id="popup-main">
            <div class="col-lg-4 popup-main_filter w-30 float_l">
                <h4>Lọc sản phẩm theo</h4>
                <div class="list-filter">
                    <div class="gr-filter brand">
                        <h5 class="title-filter">Hãng sản xuất </h5>

                        <ul id="js-brand-filter" class="ul-filter">
                            <li>
                                <label style="cursor: pointer;">
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;brand=intel&amp;category_id=277')">
                                    <span class="value-filter">Intel (98)</span>
                                </label>
                            </li>

                            <li>
                                <label style="cursor: pointer;">
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;brand=amd&amp;category_id=277')">
                                    <span class="value-filter">AMD (46)</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="gr-filter">
                        <h5 class="title-filter">Khoảng giá </h5>
                        <ul id="js-price-filter" class="ul-filter">
                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=duoi-1trieu')">
                                    <span class="value-filter">Dưới 1 triệu (17)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=1trieu-2trieu')">
                                    <span class="value-filter">1 triệu - 2 triệu (19)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=2trieu-5trieu')">
                                    <span class="value-filter">2 triệu - 5 triệu (37)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=5trieu-7trieu')">
                                    <span class="value-filter">5 triệu - 7 triệu (20)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=7trieu-10trieu')">
                                    <span class="value-filter">7 triệu - 10 triệu (20)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=10trieu-15trieu')">
                                    <span class="value-filter">10 triệu - 15 triệu (13)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=15trieu-20trieu')">
                                    <span class="value-filter">15 triệu - 20 triệu (3)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=20trieu-50trieu')">
                                    <span class="value-filter">20 triệu - 50 triệu (3)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=50trieu-100trieu')">
                                    <span class="value-filter">50 triệu - 100 triệu (6)</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;p=tren-100trieu')">
                                    <span class="value-filter">Trên 100 triệu (6)</span>
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
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;loai-cpu=server')">
                                        <span class="value-filter">SERVER (27)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;loai-cpu=desktop')">
                                        <span class="value-filter">DESKTOP (117)</span>
                                    </label>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div><!--list-filter-->
            </div><!--popup-main_filter-->

            <div class=" col-lg-8 popup-main_content w-70 float_r">
                <div class="sort-paging clear">

                    <div class="sort-block float_l">
                        <span>Sắp xếp: </span>
                        <select onchange="objBuildPCVisual.showProductFilter(this.value)" id="js-sort-holder">
                            <option value="">Tùy chọn</option>
                            <option value="https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;sort=new">Mới nhất</option>
                            <option value="https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;sort=price-asc">Giá tăng dần</option>
                            <option value="https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;sort=price-desc">Giá giảm dần</option>
                            <option value="https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;sort=view">Lượt xem</option>
                            <option value="https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;sort=comment">Trao đổi</option>
                            <option value="https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;sort=rating">Đánh giá</option>
                            <option value="https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;sort=name">Tên A-&gt;Z</option>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
