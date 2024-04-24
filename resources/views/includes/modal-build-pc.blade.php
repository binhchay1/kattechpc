<div id="js-modal-popup">
    <div class="mask-popup active" onclick="closePopup()">
    </div>
    <div class="popup-select active">
        <div class="header">
            <h4>Chọn linh kiện</h4>
            <form action="">
                <input type="text" value="" id="buildpc-search-keyword" class="input-search" placeholder="Bạn cần tìm linh kiện gì?" data-url="https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277">
                <span class="btn-search"><i class="fa fa-search" id="js-buildpc-search-btn"></i></span>
                <div class="icon-menu-filter-mobile"><i class="fa fa-list"></i></div>
            </form>

            <span class="close-popup" onclick="closePopup()"><i class="fa fa-times"></i></span>
        </div>

        <div class="popup-main">
            <div class="popup-main_filter w-30 float_l">
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

                            <h5 class="title-filter"> Socket </h5>

                            <ul id="js-attr-list" class="ul-filter">

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=am5')">
                                        <span class="value-filter">AM5 (13)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-1700')">
                                        <span class="value-filter">LGA 1700 (51)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=swrx8')">
                                        <span class="value-filter">sWRX8 (4)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=trx40')">
                                        <span class="value-filter">TRX40 (1)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=socket-am4')">
                                        <span class="value-filter">AM4 (21)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=am3')">
                                        <span class="value-filter">AM3+ (6)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-3647')">
                                        <span class="value-filter">LGA 3647 (4)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-2066')">
                                        <span class="value-filter">LGA 2066 (2)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-2011-v3')">
                                        <span class="value-filter">LGA 2011-v3 (14)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-2011')">
                                        <span class="value-filter">LGA 2011 (14)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-1366')">
                                        <span class="value-filter">LGA 1366 (4)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-1200')">
                                        <span class="value-filter">LGA 1200 (16)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-1151-v2')">
                                        <span class="value-filter">LGA 1151-V2 (6)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-1151')">
                                        <span class="value-filter">LGA 1151 (5)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;socket=lga-1150')">
                                        <span class="value-filter">LGA 1150 (5)</span>
                                    </label>
                                </li>

                            </ul>

                            <h5 class="title-filter"> Số nhân </h5>

                            <ul id="js-attr-list" class="ul-filter">

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=64')">
                                        <span class="value-filter">64 (5)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=32-so-nhan')">
                                        <span class="value-filter">32 (8)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=28-so-nhan')">
                                        <span class="value-filter">28 (1)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=26')">
                                        <span class="value-filter">26 (1)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=24-so-nhan')">
                                        <span class="value-filter">24 (16)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=22')">
                                        <span class="value-filter">22 (2)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=20')">
                                        <span class="value-filter">20 (9)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=18')">
                                        <span class="value-filter">18 (3)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=16-so-nhan')">
                                        <span class="value-filter">16 (12)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=14')">
                                        <span class="value-filter">14 (9)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=12-so-nhan')">
                                        <span class="value-filter">12 (10)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=10')">
                                        <span class="value-filter">10 (10)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=8')">
                                        <span class="value-filter">8 (20)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=6')">
                                        <span class="value-filter">6 (17)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=4')">
                                        <span class="value-filter">4 (14)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-nhan=2')">
                                        <span class="value-filter">2 (5)</span>
                                    </label>
                                </li>

                            </ul>

                            <h5 class="title-filter"> Số luồng </h5>

                            <ul id="js-attr-list" class="ul-filter">

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=128')">
                                        <span class="value-filter">128 (4)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=64')">
                                        <span class="value-filter">64 (2)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=56')">
                                        <span class="value-filter">56 (1)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=52')">
                                        <span class="value-filter">52 (1)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=48')">
                                        <span class="value-filter">48 (5)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=44')">
                                        <span class="value-filter">44 (2)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=40')">
                                        <span class="value-filter">40 (2)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=36')">
                                        <span class="value-filter">36 (3)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=32')">
                                        <span class="value-filter">32 (12)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=28')">
                                        <span class="value-filter">28 (6)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=24')">
                                        <span class="value-filter">24 (12)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=20')">
                                        <span class="value-filter">20 (12)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=16')">
                                        <span class="value-filter">16 (32)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=12')">
                                        <span class="value-filter">12 (21)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=8-so-luong')">
                                        <span class="value-filter">8 (15)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=6-so-luong')">
                                        <span class="value-filter">6 (3)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=4-so-luong')">
                                        <span class="value-filter">4 (5)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;so-luong=2-so-luong')">
                                        <span class="value-filter">2 (2)</span>
                                    </label>
                                </li>

                            </ul>

                            <h5 class="title-filter"> Dòng CPU </h5>

                            <ul id="js-attr-list" class="ul-filter">

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=amd-epyc')">
                                        <span class="value-filter">AMD EPYC (1)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=amd-ryzen-threadripper')">
                                        <span class="value-filter">AMD Ryzen Threadripper (12)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=amd-ryzen-9')">
                                        <span class="value-filter">AMD Ryzen 9 (7)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=amd-ryzen-7')">
                                        <span class="value-filter">AMD Ryzen 7 (10)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=amd-ryzen-5')">
                                        <span class="value-filter">AMD Ryzen 5 (13)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=amd-ryzen-3')">
                                        <span class="value-filter">AMD Ryzen 3 (3)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=intel-xeon')">
                                        <span class="value-filter">Intel Xeon (29)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=intel-core-i9')">
                                        <span class="value-filter">Intel Core i9 (14)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=intel-core-i7')">
                                        <span class="value-filter">Intel Core i7 (16)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=intel-core-i5')">
                                        <span class="value-filter">Intel Core i5 (23)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=intel-core-i3')">
                                        <span class="value-filter">Intel Core i3 (10)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=intel-pentium')">
                                        <span class="value-filter">Intel Pentium (4)</span>
                                    </label>
                                </li>

                                <li>
                                    <label style="cursor: pointer;">
                                        <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://nguyencongpc.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;dong-cpu=intel-celeron')">
                                        <span class="value-filter">Intel Celeron (1)</span>
                                    </label>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div><!--list-filter-->
            </div><!--popup-main_filter-->

            <div class="popup-main_content w-70 float_r">
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
                            2
                        </a>

                        <a href="javascript:void(0);" onclick="objBuildPCVisual.showProductFilter('/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;pc_part_id=&amp;page=3')">
                            3
                        </a>

                        <a href="javascript:void(0);" onclick="objBuildPCVisual.showProductFilter('/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;pc_part_id=&amp;page=4')">
                            4
                        </a>

                        <a href="javascript:void(0);" onclick="objBuildPCVisual.showProductFilter('/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;pc_part_id=&amp;page=5')">
                            5
                        </a>

                        <a href="javascript:void(0);" onclick="objBuildPCVisual.showProductFilter('/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;pc_part_id=&amp;page=6')">
                            6
                        </a>

                        <a href="javascript:void(0);" onclick="objBuildPCVisual.showProductFilter('/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;pc_part_id=&amp;page=7')">
                            7
                        </a>

                        <a href="javascript:void(0);" onclick="objBuildPCVisual.showProductFilter('/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=277&amp;pc_part_id=&amp;page=2')">
                            next
                        </a>
                    </div>
                </div>

                <div class="list-product-select" id="js-holder-p_item">
                    <div class="p-item">
                        <a href="/cpu-amd-ryzen-9-5900x" class="p-img">
                            <img src="/media/product/250-17131-cpu-amd-ryzen-9-5900xcpu-amd-ryzen-9-5900xcpu-amd-ryzen-9-5900xcpu-amd-ryzen-9-5900x.jpg" alt="CPU AMD Ryzen 9 5900X (12 Nhân / 24 Luồng | 3.7GHz Boost 4.8GHz | 64MB Cache | PCIe 4.0)">
                        </a>

                        <div class="info">
                            <a href="/cpu-amd-ryzen-9-5900x" class="p-name">CPU AMD Ryzen 9 5900X (12 Nhân / 24 Luồng | 3.7GHz Boost 4.8GHz | 64MB Cache | PCIe 4.0)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP002423B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">6.990.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    15.600.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-55%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="17131">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i7-14700f-tray-lga1700-20-core28-thread-base-21ghz-turbo-54ghz-cache-33mb" class="p-img">
                            <img src="/media/product/250-26474-cpuit14700__4_bf2f88a4-5cec-447d.png" alt="CPU Intel Core i7 14700F Tray New (LGA1700, 20 Core/28 Thread, Base 2.1Ghz/ Turbo 5.4Ghz, Cache 33MB)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i7-14700f-tray-lga1700-20-core28-thread-base-21ghz-turbo-54ghz-cache-33mb" class="p-name">CPU Intel Core i7 14700F Tray New (LGA1700, 20 Core/28 Thread, Base 2.1Ghz/ Turbo 5.4Ghz, Cache 33MB)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000045T

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">6.990.000đ</span>

                            <div class="product-martket-main d-flex align-items-center">
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="26474">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-amd-ryzen-9-5950x" class="p-img">
                            <img src="/media/product/250-17133-ryzen-9-5950x.jpg" alt="CPU AMD Ryzen 9 5950X (16 Nhân / 32 Luồng | 3.4GHz Boost 4.9GHz | 72MB Cache | PCIe 4.0)">
                        </a>

                        <div class="info">
                            <a href="/cpu-amd-ryzen-9-5950x" class="p-name">CPU AMD Ryzen 9 5950X (16 Nhân / 32 Luồng | 3.4GHz Boost 4.9GHz | 72MB Cache | PCIe 4.0)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP002540B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">8.700.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    17.990.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-52%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="17133">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i9-12900k" class="p-img">
                            <img src="/media/product/250-21239-sp394843bsp394843bsp394843bsp394843b.jpg" alt="CPU Intel Core i9-12900K (3.9GHz turbo 5.2GHz | 16 nhân 24 luồng | 30MB Cache | 125W)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i9-12900k" class="p-name">CPU Intel Core i9-12900K (3.9GHz turbo 5.2GHz | 16 nhân 24 luồng | 30MB Cache | 125W)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP394843B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">7.490.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    13.490.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-44%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="21239">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i5-14600k" class="p-img">
                            <img src="/media/product/250-25343-14600k.png" alt="CPU Intel Core i5 14600K (Up 5.30 GHz, 14 Nhân 20 Luồng, 24MB Cache, Raptor Lake Refresh)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i5-14600k" class="p-name">CPU Intel Core i5 14600K (Up 5.30 GHz, 14 Nhân 20 Luồng, 24MB Cache, Raptor Lake Refresh)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000031B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">5.990.000đ</span>

                            <div class="product-martket-main d-flex align-items-center">
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="25343">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i7-12700f-up-to-480ghz-12-nhan-20-luong-25m-cache-alder-lake" class="p-img">
                            <img src="/media/product/250-21484-byc-i712700ftray_3cb379dd859541e7829df40615c08cc1_1024x1024.webp" alt="CPU Intel Core i7-12700F TRAY (Up To 4.80GHz, 12 Nhân 20 Luồng, 25M Cache, Alder Lake)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i7-12700f-up-to-480ghz-12-nhan-20-luong-25m-cache-alder-lake" class="p-name">CPU Intel Core i7-12700F TRAY (Up To 4.80GHz, 12 Nhân 20 Luồng, 25M Cache, Alder Lake)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP3940854T

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">4.790.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    8.990.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-47%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="21484">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-amd-ryzen-7-7700x" class="p-img">
                            <img src="/media/product/250-23317-77.jpg" alt="CPU AMD Ryzen 7 7700X (4,5 GHz Boost 5,4 GHz | 8 Cores / 16 Threads | 32 MB Cache| PCIe 5.0)">
                        </a>

                        <div class="info">
                            <a href="/cpu-amd-ryzen-7-7700x" class="p-name">CPU AMD Ryzen 7 7700X (4,5 GHz Boost 5,4 GHz | 8 Cores / 16 Threads | 32 MB Cache| PCIe 5.0)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 tháng </td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000005B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">7.890.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    10.990.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-28%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="23317">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i9-13900k" class="p-img">
                            <img src="/media/product/250-23428-i9-13900k.jpg" alt="CPU Intel Core i9 13900K (5.80GHz, 24 Nhân 32 Luồng, 36M Cache, Raptor Lake)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i9-13900k" class="p-name">CPU Intel Core i9 13900K (5.80GHz, 24 Nhân 32 Luồng, 36M Cache, Raptor Lake)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 tháng </td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000010B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">9.990.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    16.490.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-39%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="23428">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-amd-ryzen-9-7950x" class="p-img">
                            <img src="/media/product/250-23316-cpu-amd-ryzen-9-7950x.jpg" alt="CPU AMD Ryzen 9 7950X (4,5 GHz Boost 5,7 GHz | 16 Cores / 32 Threads | 64 MB Cache| PCIe 5.0)">
                        </a>

                        <div class="info">
                            <a href="/cpu-amd-ryzen-9-7950x" class="p-name">CPU AMD Ryzen 9 7950X (4,5 GHz Boost 5,7 GHz | 16 Cores / 32 Threads | 64 MB Cache| PCIe 5.0)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 tháng </td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000003B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">12.900.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    15.990.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-19%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="23316">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i3-12100f" class="p-img">
                            <img src="/media/product/250-21492-cpu-intel-core-i3-12100f.jpg" alt="CPU Intel Core i3 12100F (3.3GHz turbo up to 4.3GHz, 4 nhân 8 luồng, 12MB Cache)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i3-12100f" class="p-name">CPU Intel Core i3 12100F (3.3GHz turbo up to 4.3GHz, 4 nhân 8 luồng, 12MB Cache)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP3940860T

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">1.390.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    2.990.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-54%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="21492">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-amd-ryzen-5-4600g" class="p-img">
                            <img src="/media/product/250-24969-cpu-asdamd-ryzen-5-4600g.jpg" alt="CPU AMD Ryzen 5 4600G (3.7GHz Boost 4.2GHz / 6 nhân 12 luồng / 11MB / AM4)">
                        </a>

                        <div class="info">
                            <a href="/cpu-amd-ryzen-5-4600g" class="p-name">CPU AMD Ryzen 5 4600G (3.7GHz Boost 4.2GHz / 6 nhân 12 luồng / 11MB / AM4)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000027H

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">2.150.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    3.190.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-33%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="24969">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-amd-athlon-3000g" class="p-img">
                            <img src="/media/product/250-25403-b----vi-x----l---amd-athlon-3000g.jpg" alt="Bộ vi xử lý AMD Athlon 3000G Tray ( 3.5GHz / 2 nhân 4 luồng / 5MB / AM4)">
                        </a>

                        <div class="info">
                            <a href="/cpu-amd-athlon-3000g" class="p-name">Bộ vi xử lý AMD Athlon 3000G Tray ( 3.5GHz / 2 nhân 4 luồng / 5MB / AM4)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP001508T

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">800.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    1.790.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-55%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="25403">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i5-13400-1" class="p-img">
                            <img src="/media/product/250-26252-69894_cpu_intel_core_i5_13400_up.jpg" alt="CPU Intel Core i5 13400 (up to 4.6GHz, 10 nhân 16 luồng, 20MB Cache, 65W)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i5-13400-1" class="p-name">CPU Intel Core i5 13400 (up to 4.6GHz, 10 nhân 16 luồng, 20MB Cache, 65W)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000015B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">4.390.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    6.590.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-33%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="26252">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i3-10105f-tray-37ghz-turbo-44ghz-4-nhan-8-luong-6mb-cache-65w" class="p-img">
                            <img src="/media/product/250-25782-250-18428-cpu-intel-core-i3-1010.jpg" alt="CPU Intel Core I3-10105F Tray New  (3.7GHz Turbo 4.4Ghz | 4 Nhân 8 Luồng | 6MB Cache | 65W)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i3-10105f-tray-37ghz-turbo-44ghz-4-nhan-8-luong-6mb-cache-65w" class="p-name">CPU Intel Core I3-10105F Tray New (3.7GHz Turbo 4.4Ghz | 4 Nhân 8 Luồng | 6MB Cache | 65W)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP003346T

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">990.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    2.400.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-59%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="25782">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i7-13700" class="p-img">
                            <img src="/media/product/250-24739-intel-core-i7-13700intel-core-i7-13700intel-core-i7-13700.jpg" alt="CPU Intel Core I7-13700 (2.10 GHz up to 5.20 GHz, 30M  16 nhân 24 luồng, Socket 1700)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i7-13700" class="p-name">CPU Intel Core I7-13700 (2.10 GHz up to 5.20 GHz, 30M 16 nhân 24 luồng, Socket 1700)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng </td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000030B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">6.800.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    10.350.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-34%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="24739">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i5-13400" class="p-img">
                            <img src="/media/product/250-24016-cpu-intel-core-i5-13400-tray.png" alt="CPU Intel Core i5-13400 TRAY (Up To 4.60GHz, 10 Nhân 16 Luồng, 20MB Cache, LGA 1700)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i5-13400" class="p-name">CPU Intel Core i5-13400 TRAY (Up To 4.60GHz, 10 Nhân 16 Luồng, 20MB Cache, LGA 1700)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 tháng </td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000015T

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">3.690.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    7.150.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-48%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="24016">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i5-13400f" class="p-img">
                            <img src="/media/product/250-24017-cpu000016b.jpg" alt="CPU Intel Core i5-13400F (Up To 4.60GHz, 10 Nhân 16 Luồng, 20 MB Cache, LGA 1700)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i5-13400f" class="p-name">CPU Intel Core i5-13400F (Up To 4.60GHz, 10 Nhân 16 Luồng, 20 MB Cache, LGA 1700)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 tháng </td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> CPU000016B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">3.800.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    6.250.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-39%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="24017">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-amd-ryzen-5-4500-nguyen-cong-pc" class="p-img">
                            <img src="/media/product/250-22160-cpu-amd-ryzen-5-4500--3-6-ghz-.jpg" alt="CPU AMD Ryzen 5 4500 (3,6 GHz Boost 4,1 GHz | 6 Cores / 12 Threads | 8MB Cache| PCIe 3.0)">
                        </a>

                        <div class="info">
                            <a href="/cpu-amd-ryzen-5-4500-nguyen-cong-pc" class="p-name">CPU AMD Ryzen 5 4500 (3,6 GHz Boost 4,1 GHz | 6 Cores / 12 Threads | 8MB Cache| PCIe 3.0)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 tháng </td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP181106H

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">1.750.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    2.990.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-41%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="22160">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-amd-ryzen-7-5700x-nguyen-cong-pc" class="p-img">
                            <img src="/media/product/250-22159-ryzen-7-5700x.jpg" alt="CPU AMD Ryzen 7 5700X (3,4 GHz Boost 4,6 GHz | 8 Cores / 16 Threads | 32MB Cache|  PCIe 4.0)">
                        </a>

                        <div class="info">
                            <a href="/cpu-amd-ryzen-7-5700x-nguyen-cong-pc" class="p-name">CPU AMD Ryzen 7 5700X (3,4 GHz Boost 4,6 GHz | 8 Cores / 16 Threads | 32MB Cache| PCIe 4.0)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 tháng </td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP180553H

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">4.190.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    8.600.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-51%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="22159">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>

                    <div class="p-item">
                        <a href="/cpu-intel-core-i7-12700k" class="p-img">
                            <img src="/media/product/250-21251-i7-12700k.png" alt="CPU Intel Core i7-12700K (3.8GHz turbo 5.0Ghz | 12 nhân 20 luồng | 25MB Cache | 125W)">
                        </a>

                        <div class="info">
                            <a href="/cpu-intel-core-i7-12700k" class="p-name">CPU Intel Core i7-12700K (3.8GHz turbo 5.0Ghz | 12 nhân 20 luồng | 25MB Cache | 125W)</a>

                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>36 Tháng</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            Còn hàng
                                            | <b>Mã SP:</b> SP394842B

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="p-price">5.290.000đ</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    7.390.000<u>đ</u>
                                </p>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-28%</div>
                            </div>

                        </div>

                        <span class="btn-buy js-select-product" onclick="closePopup()" data-id="21251">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
