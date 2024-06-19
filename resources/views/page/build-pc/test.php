<script>
    //pc config
    var category_config = [{
            "id": 277,
            "name": "CPU - B\u1ed9 Vi X\u1eed L\u00fd"
        },
        {
            "id": 278,
            "name": "Main - Bo M\u1ea1ch Ch\u1ee7"
        },
        {
            "id": 283,
            "name": "RAM - B\u1ed9 Nh\u1edb Trong"
        },
        {
            "id": 3274,
            "name": "\u1ed4 C\u1ee9ng SSD 1"
        },
        {
            "id": 3644,
            "name": "\u1ed4 C\u1ee9ng SSD 2"
        },
        {
            "id": 3273,
            "name": "\u1ed4 C\u1ee9ng HDD"
        },
        {
            "id": 279,
            "name": "VGA - Card M\u00e0n H\u00ecnh"
        },
        {
            "id": 282,
            "name": "PSU - Ngu\u1ed3n M\u00e1y T\u00ednh"
        },
        {
            "id": 280,
            "name": "Case - V\u1ecf M\u00e1y T\u00ednh"
        },
        {
            "id": 3270,
            "name": "T\u1ea3n Nhi\u1ec7t Kh\u00ed"
        },
        {
            "id": 3269,
            "name": "T\u1ea3n Nhi\u1ec7t N\u01b0\u1edbc AIO"
        },
        {
            "id": 3630,
            "name": "T\u1ea3n Nhi\u1ec7t N\u01b0\u1edbc Custom"
        },
        {
            "id": 3271,
            "name": "Fan T\u1ea3n Nhi\u1ec7t"
        },
        {
            "id": 281,
            "name": "Monitor - M\u00e0n H\u00ecnh"
        },
        {
            "id": 1235,
            "name": "B\u00e0n Ph\u00edm"
        },
        {
            "id": 1147,
            "name": "Mouse - Chu\u1ed9t"
        },
        {
            "id": 1118,
            "name": "Pad - B\u00e0n Di Chu\u1ed9t"
        },
        {
            "id": 3309,
            "name": "Tai Nghe"
        },
        {
            "id": 3308,
            "name": "Loa"
        },
        {
            "id": 3307,
            "name": "Gh\u1ebf Gaming"
        },
        {
            "id": 3411,
            "name": "B\u00e0n Gaming"
        },
        {
            "id": 3287,
            "name": "Webcam"
        },
        {
            "id": 3341,
            "name": "Microphones"
        },
        {
            "id": 3413,
            "name": "Thi\u1ebft B\u1ecb Studio, Stream"
        },
        {
            "id": 1751,
            "name": "Thi\u1ebft B\u1ecb M\u1ea1ng"
        },
        {
            "id": 3598,
            "name": "Gi\u00e1 treo m\u00e0n h\u00ecnh"
        }
    ];
    var SEARCH_URL = "/ajax/get_json.php?action=pcbuilder&action_type=get-product-category&category_id=332&pc_part_id=43026-30%2C43045-31%2C42928-32%2C41833-33";

    let SAVE_BUILD_ID = '';
    let objBuildPC;
    let objBuildPCVisual;

    //document ready
    $(function() {
        showBuildId(1);

    });

    //Hien thi thong bao noi dung khuyen mai neu co
    function showUserBuildPCPromotion_1(promotion_html, promotion_title) {
        // alert(promotion_html)
        if (promotion_html == '' || promotion_title == '') {
            $(".js-buildpc-promotion-content").html('');
        } else $(".js-buildpc-promotion-content").html('<table><tbody><tr><td>Khuyến mại cho PC trên</td><td> ' + promotion_title + '</td></tr></tbody></table>' + promotion_html);
        //$.fancybox.open({
        //                src  : '#js-buildpc-promotion',
        type: 'inline'
        //            });
    }

    //Hien thi thong bao noi dung khuyen mai neu co
    function showUserBuildPCPromotion(promotion, promotion_title) {
        var $holder = $(".js-buildpc-promotion-content");

        if (promotion_title == '') {
            $holder.html('');
            return;
        }

        var summary = objBuildPCVisual.getConfigSummary();
        var paid_amount = summary.total_value - strToNumber(promotion.cash);

        var show_html = `<table><tbody>
                    <tr><td>Khuyến mại cho PC trên</td><td> ${promotion_title} đ</td></tr>
                    <tr><td>KM 1: Giảm ngay tiền mặt</td><td> ${promotion.cash} đ</td></tr>
                    <tr><td>KM 2: Không giảm tiền mặt, chọn gói sản phẩm trị giá</td><td> ${promotion.optional_package_value} đ</td></tr>
                    <tr><td>Tổng tiền thanh toán (Theo KM 1 giảm tiền mặt)</td><td> ${formatCurrency(paid_amount)} đ</td></tr>
                </tbody>
                </table>`;

        $holder.html(show_html);
    }


    //convert string to number
    function strToNumber(str) {
        str += ''; //convert to str incase it's already a number
        while (str.indexOf(".") > 0) {
            str = str.replace('.', '');
        }
        var result = parseFloat(str);
        return isNaN(result) ? 0 : result;
    }


    function showBuildId(id) {

        SAVE_BUILD_ID = 'buildpc-' + id;
        objBuildPC = new BuildPC(SAVE_BUILD_ID);
        objBuildPCVisual = BuildPCVisual(objBuildPC);

        //show clean layout
        objBuildPCVisual.showLayout(category_config);

        showCategorySpecialOffer(buildpc_category_special_offer);

        $(".js-buildpc-promotion-content").html('');


        // get save-config
        Hura.User.getInfo(SAVE_BUILD_ID, function(pc_config) {
            // console.log(pc_config)
            //set config
            objBuildPC.setConfig(pc_config);

            for (let category_id in pc_config) {
                if (pc_config.hasOwnProperty(category_id)) {
                    objBuildPCVisual.displayProductInCategory(category_id, pc_config[category_id].items[0]);
                }
            }
            //show summary
            objBuildPCVisual.displaySummary();
        });

        _listener();

        function _listener() {
            //listener
            $("#js-buildpc-action").on("click", function(e) {
                var node = e.target;
                if (node.nodeName != 'SPAN') {
                    return;
                }

                var user_action = node.getAttribute("data-action");
                //console.log("user_action = " + user_action);
                //console.log("config = " + JSON.stringify(objBuildPC.getConfig(), true, 4).length);

                if (JSON.stringify(objBuildPC.getConfig(), true, 4).length <= 2) {
                    $.fancybox.open({
                        src: '#opps',
                        type: 'inline'
                    });
                    return false;
                }

                switch (user_action) {
                    case "save": //luu cau hinh
                        Hura.User.updateInfo(SAVE_BUILD_ID, objBuildPC.getConfig(), function(res) {
                            if (res.status == 'success') {
                                alert("Lưu thành công !");
                            }
                        });
                        break;

                    case "download-excel": //tai file excel
                        window.location = exportUrl('xls');
                        break;

                    case "view": //xem va in
                        window.location = exportUrl('html');
                        break;

                    case "create-image": //tao anh
                        //alert("Chức năng đang chờ bổ sung!");
                        downloadImage();
                        break;

                    case "share": //chia se
                        //window.location = exportUrl('html');
                        $.fancybox.open({
                            src: '#popup-share_config',
                            type: 'inline'
                        });
                        break;

                    case "add-cart": //them gio hang
                        //alert("Chức năng đang chờ bổ sung!");
                        addConfigToCart_Hura8();
                        break;
                }
            });
        }

    }

    function checkPromotionByCondition(current_value, arr_category_list) {
        let url = '/ajax/get_json.php?action=promotion&action_type=condition';
        url += '&value=' + current_value;
        url += '&category=' + arr_category_list.join('-');
        $.get(url, function(res) {
            if (res.status === 'success') {
                alert(res.data.promotion);
            }
        })
    }

    function openPopupRebuild() {
        $.fancybox.open({
            src: '#popup-rebuild_config',
            type: 'inline'
        });
    }

    function reBuild() {
        objBuildPCVisual.deleteSelectedConfig();
        Hura.User.updateInfo(SAVE_BUILD_ID, {}, function(res) {
            if (res.status == 'success') {
                //alert("Lưu thành công !");
                location.href = '/buildpc';
            }
        });
    }

    function loadAjaxContent(holder_id, url) {
        objBuildPCVisual.showProductFilter(url);
    }

    function searchKeyword(query) {
        if (query.length < 2) return;
        //console.log("SEARCH_URL", SEARCH_URL)
        objBuildPCVisual.showProductFilter(SEARCH_URL + '&q=' + encodeURIComponent(query));
    }

    $("#buildpc-search-keyword").keypress(function(e) {
        if (e.which == 13) {
            e.preventDefault();
            searchKeyword(this.value);
        }
    });

    $("#js-buildpc-search-btn").on("click", function() {
        searchKeyword($("#buildpc-search-keyword").val());
    });



    function changeTab(holder) {

        $('.list-btn-action li').removeClass('active');
        $(holder).parent().addClass('active')
    }
</script>

<script>
    function hura_read_cookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return Base64.decode(c.substring(nameEQ.length, c.length));
        }
        return null;
    }

    function hura_erase_cookie(name) {
        hura_create_cookie(name, "", -1);
    }

    function openPopupRebuild() {
        $.fancybox.open({
            src: '#popup-rebuild_config',
            type: 'inline'
        });
    }

    function reBuild() {
        //BuildPCVisual.deleteSelectedConfig();
        Hura.User.updateInfo("buildpc", {}, function(res) {
            if (res.status == 'success') {
                alert("Lưu thành công !");
                location.href = '/buildpc';
            }
        });
    }

    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        } else {
            return false;
        }
    }

    function shareFB() {
        var url = "https://nguyencongpc.vn/buildpc?sharebuild=" + Hura.User.getUserId();

        window.open('https://www.facebook.com/sharer.php?u=' + url, '_blank');
    }

    function sendEmailFriend() {
        var error = "";
        var send_friend_from_email = $("#send_friend_from_email").val();
        var send_friend_to_email = $("#send_friend_to_email").val();

        if (validateEmail(send_friend_from_email) == false || validateEmail(send_friend_to_email) == false) {
            alert("Bạn chưa điền email hoặc email chưa chính xác. Vui lòng kiểm tra lại");
            return false;
        }

        var $status = $("#send-friend-status");
        //$status.html("....");
        var excel = "https://nguyencongpc.vn/" + exportUrl('xls');
        var message = $("#send_friend_message").val() + "\n<br/><b>File cấu hình: </b>" + '<a href="' + excel + '" class="red">' + excel + '</a>';

        var payload = {
            //bat buoc
            from_email: $("#send_friend_from_email").val(),
            to_email: $("#send_friend_to_email").val(),
            //tuy chon
            from_name: $("#send_friend_from_name").val(),
            subject: "A friend sent you this link",
            cc_email: $("#send_cc_email").val(),
            message: message
        };

        $.post("/ajax/post.php", {
            action: 'email',
            action_type: 'send-to-friend',
            info: payload
        }, function(data) {

            //console.log("data",data);
            var res = JSON.parse(data);
            $status.html(res.status + ": " + res.message);
            //console.log("sendEmailFriend result = " + data);

            if (res.status == 'success') {
                alert("Đã gửi thành công");
                $.fancybox.close();
            } else {
                alert(res.message);
            }
        });
    }

    function saveConfig() {
        var config_name = $("#js-save-config-name").val();
        if (config_name.length < 5) {
            alert("Chưa nhập tên cấu hình ");
        } else {

            var $status_holder = $("#js-save-config-status");
            //$status_holder.html('...');

            var params = {
                action_type: "save-buildpc",
                uid: Hura.User.getUserId(),
                config_id: 1,
                config_name: config_name
            };

            Hura.Ajax.post("user", params).then(function(data) {
                //console.log(data);
                $("#js-save-config-id").val(data.data);
                alert("Đã lưu thành công");
                $.fancybox.close();
            })
        }
    }

    function openSelection(a) {
        $(a).click();
    }

    function removeSelection(a) {
        $("#js-selected-item-" + a).empty();
    }

    function closePopup() {
        $('.mask-popup').removeClass('active');
        $('.popup-select').removeClass('active');
        $('body').css('overflow', 'auto');
    }

    $(document).ajaxStop(function() {
        $('.show-filter').on('click', function() {
            $(this).parents('.title-filter').siblings('ul').toggle(500);
            $(this).toggleClass('rotate');
        });

    });

    //pc config
    var category_config = [{
            "id": 277,
            "name": "CPU - B\u1ed9 Vi X\u1eed L\u00fd"
        },
        {
            "id": 278,
            "name": "Main - Bo M\u1ea1ch Ch\u1ee7"
        },
        {
            "id": 283,
            "name": "RAM - B\u1ed9 Nh\u1edb Trong"
        },
        {
            "id": 3274,
            "name": "\u1ed4 C\u1ee9ng SSD 1"
        },
        {
            "id": 3644,
            "name": "\u1ed4 C\u1ee9ng SSD 2"
        },
        {
            "id": 3273,
            "name": "\u1ed4 C\u1ee9ng HDD"
        },
        {
            "id": 279,
            "name": "VGA - Card M\u00e0n H\u00ecnh"
        },
        {
            "id": 282,
            "name": "PSU - Ngu\u1ed3n M\u00e1y T\u00ednh"
        },
        {
            "id": 280,
            "name": "Case - V\u1ecf M\u00e1y T\u00ednh"
        },
        {
            "id": 3270,
            "name": "T\u1ea3n Nhi\u1ec7t Kh\u00ed"
        },
        {
            "id": 3269,
            "name": "T\u1ea3n Nhi\u1ec7t N\u01b0\u1edbc AIO"
        },
        {
            "id": 3630,
            "name": "T\u1ea3n Nhi\u1ec7t N\u01b0\u1edbc Custom"
        },
        {
            "id": 3271,
            "name": "Fan T\u1ea3n Nhi\u1ec7t"
        },
        {
            "id": 281,
            "name": "Monitor - M\u00e0n H\u00ecnh"
        },
        {
            "id": 1235,
            "name": "B\u00e0n Ph\u00edm"
        },
        {
            "id": 1147,
            "name": "Mouse - Chu\u1ed9t"
        },
        {
            "id": 1118,
            "name": "Pad - B\u00e0n Di Chu\u1ed9t"
        },
        {
            "id": 3309,
            "name": "Tai Nghe"
        },
        {
            "id": 3308,
            "name": "Loa"
        },
        {
            "id": 3307,
            "name": "Gh\u1ebf Gaming"
        },
        {
            "id": 3411,
            "name": "B\u00e0n Gaming"
        },
        {
            "id": 3287,
            "name": "Webcam"
        },
        {
            "id": 3341,
            "name": "Microphones"
        },
        {
            "id": 3413,
            "name": "Thi\u1ebft B\u1ecb Studio, Stream"
        },
        {
            "id": 1751,
            "name": "Thi\u1ebft B\u1ecb M\u1ea1ng"
        },
        {
            "id": 3598,
            "name": "Gi\u00e1 treo m\u00e0n h\u00ecnh"
        }
    ];

    function exportUrl(ftype) {
        var export_url = "/export_file.php?content_type=" + SAVE_BUILD_ID + "&u=" + Hura.User.getUserId() + "&file_type=";
        return export_url + ftype;

    }

    function downloadImage() {
        var ids = '';
        $(".js-item-row .contain-item-drive").each(function() {
            var id = $(this).attr("data-product_id");
            ids += "-" + id
        });

        var seconds = new Date().getTime() / 1000;
        var export_url = "/export_file.php?content_type=" + SAVE_BUILD_ID + "&f=" + parseInt(seconds) + "&u=" + Hura.User.getUserId() + "&file_type=";
        var url = "https://nguyencongpc.vn" + export_url + 'image';
        var tool = "https://screenshot.hurasoft.com/screenshot.php?url=";
        window.open(tool + encodeURIComponent(url), '_blank');
    }

    // function addConfigToCart() {
    //     Hura.User.updateInfo("buildpc", BuildPC.getConfig(), function (res) {
    //       if(res.status == 'success') { console.log("Lưu thành công !");}
    //     });

    //     //get config saved
    //     Hura.User.getInfo("buildpc", function (pc_config) {
    //         for(var category_id in pc_config) {
    //             if(pc_config.hasOwnProperty(category_id)) {
    //                 BuildPCVisual.displayProductInCategory(category_id, pc_config[category_id].items[0]);
    //                 var pro = JSON.stringify(pc_config[category_id].items[0], true, 4);
    //                 pro = JSON.parse(pro);
    //                 //console.log("config item = " + JSON.stringify(pc_config[category_id].items[0], true, 4));
    //                 addProductToCart(pro.id, 0, 1, '')
    //             }
    //         }
    //         alert("Đã thêm sản phẩm vào giỏ hàng");
    //         //showCartNotify();
    //     });
    // }

    function addConfigToCart_Hura8() {
        Hura.User.updateInfo(SAVE_BUILD_ID, objBuildPC.getConfig(), function(res) {
            if (res.status == 'success') {
                console.log("Lưu thành công !");
            }
        });

        //get saved config
        Hura.User.getInfo(SAVE_BUILD_ID, async function(pc_config) {

            let track_add_total = 0,
                total_item = 0;
            for (var category_id in pc_config) {
                if (pc_config.hasOwnProperty(category_id) && pc_config[category_id].items != undefined) {
                    total_item += 1;
                }
            }


            for (var category_id in pc_config) {
                if (pc_config.hasOwnProperty(category_id) && pc_config[category_id].items != undefined) {

                    pc_config[category_id].items.forEach(async function(product_info) {

                        // console.log('product_info', product_info);

                        let props = {
                            quantity: product_info.quantity,
                            buyer_note: ''
                        };

                        await Hura.Cart.Product.add(product_info.id, 0, props);
                        track_add_total += 1;
                    });


                }
            }


            modalSuccess();
            change_cart_amount();

            setTimeout(function() {
                $(".success-form").fadeOut();
                location.href = '/cart';
            }, 1000);


        });
    }
</script>
