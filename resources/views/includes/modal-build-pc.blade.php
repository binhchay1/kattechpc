<style>
    #js-modal-popup {
        position: fixed;
        z-index: 37;
        padding-top: 25px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .popup-select{
        background-color: #fefefe;
        margin: auto;
        border: 1px solid #888;
        width: 60%;
        overflow-y: initial !important;
    }

    #form-header {
        margin: 0;
        background: red;
        padding: 10px;
    }

    .title-popup {
        color: white;
        text-align: center;
        vertical-align: middle;
        line-height: 90px;
    }

    #popup-main {
        margin: 0;
    }

    .popup-main_filter{
        background: #eee;
        padding: 20px;
        height: 90vh;
        overflow-y: auto;

    }

    .popup-main_content {
        padding: 20px;
        height: 90vh;
        overflow-y: auto;
    }

    #buy-product {
        background: red;
        border-radius: 10px;
        color: white;
        padding: 10px;
    }

    .p-name {
        font-weight: 700;
    }

    .p-price {
        color: #ec1b23;
        font-weight: bold;
        font-size: 18px;
        font-family: 'Roboto';
        font-style: normal;
        margin-top: 5px;
    }

    .product-market-price {
        margin: 0;
    }
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    body{
        background: #f2f2f2;
        font-family: 'Open Sans', sans-serif;
    }

    .search {
        width: 100%;
        position: relative;
        display: flex;
    }

    .searchTerm {
        width: 100%;
        border: 3px solid white;
        border-right: none;
        padding: 5px;
        height: 37px;
        border-radius: 5px 0 0 5px;
        outline: none;
        color: #9DBFAF;
    }

    .searchTerm:focus{
        color: #00B4CC;
    }

    .searchButton {

        width: 50px;
        height: 36px;
        border: 1px solid #ebf1f1;
        background: white;
        text-align: center;
        color: black;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
    }

    /*Resize the wrap to see the search bar change!*/
    .wrap{
        width: 80%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .btn-1:hover {
        text-decoration: none;
    }

</style>


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
                    @foreach($products as $product)
                    <div class="row p-item">
                        <div class="col-lg-3">
                            <a href="/cpu-amd-ryzen-9-5900x" class="p-img">
                                <img src="/media/product/250-17131-cpu-amd-ryzen-9-5900xcpu-amd-ryzen-9-5900xcpu-amd-ryzen-9-5900xcpu-amd-ryzen-9-5900x.jpg">
                            </a>
                        </div>
                        <div class="col-lg-6 info">
                            <a href="" class="p-name">{{$product->name}}</a>
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
                                            | <b>Mã SP:</b> {{$product->code}}

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @if($product->new_price !=null)
                            <span class="p-price">{{number_format($product->new_price)}}</span>

                            <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    {{number_format($product->price)}}<u>đ</u>
                                </p>
                                <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                                <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-{{$new_price}}%</div>
                            </div>
                            @else
                            <span class="p-price">{{number_format($product->price)}}</span>
                            @endif
                        </div>
                        <div class="col-lg-3" style="margin-top:10px ">
                            <a class="btn-1" href="{{ route('addBuildPC', $product['slug']) }}">
                            <span id="buy-product" class="btn-buy js-select-product"  data-id="17131">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                        <hr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
