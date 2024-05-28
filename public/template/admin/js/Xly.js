


// function pT(i, st, url){
//     $.ajax({
// Loại gửi dữ liệu (POST hoặc GET)
// type: 'get',
// URL Tiếp nhận, xử lý và gửi lại dữ liệu
// url: url,
// { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
// data: { i },
// Kiểu dữ liệu trả về ('html','text','json','xml')
// dataType: 'html',

// success: function(html) {
// Nội dung sẽ được thực thi sau khi nhận được dữ liệu từ server
// }
//     });
// }

function themVaoGioHang(){
    // var data = $('form#them_vao_Gio_Hang').serialize();

    var idKH = $('#idKH_GH').val();
    var idSP = $('#idSP_GH').val();
    var sizeSP_KHcan = $('#sizeSP_KHcan').val();
    var SLSP_KHcan = $('#SLSP_GH').val();
    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'post',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/sanpham/them_gio_hang',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: { idKH, idSP, sizeSP_KHcan, SLSP_KHcan },
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
        // Nội dung sẽ được thực thi sau khi nhận được dữ liệu từ server
            if (results.error === false) {
                // load lại trang
                // alert(results.message);
                // toastr.success('Hãy kiểm tra giỏ hàng của mình!', 'thành công.', 'toast-top-center');
                // location.reload();
                toastr["success"]("Hãy kiểm tra giỏ hàng của mình!", "Thành công")
            }else{
                // alert(results.message);
                // toastr.error('chưa chọn Size cho sản phẩm!', 'Không thành công.', 'toast-top-center');
                toastr["error"]("Chưa chọn Size cho sản phẩm!", "Không thành công")

                // alert('Có thể bạn chưa chọn Size!');
            }
        }
    });
}

function themVaoGioHang2(idSP, sizeSPKHcan, SLSPKHcan){//idKH,
    var data = $('form#them_vao_Gio_Hang').serialize();

    // var idKH = $('#idKH_GH').val();
    // var idSP = $('#idSP_GH').val();
    var size = '#'+sizeSPKHcan;
    var SL = '#'+SLSPKHcan;
    var sizeSP_KHcan = $(size).val();
    var SLSP_KHcan = $(SL).val();
    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'post',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/sanpham/them_gio_hang',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: { idSP, sizeSP_KHcan, SLSP_KHcan },
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
            // Nội dung sẽ được thực thi sau khi nhận được dữ liệu từ server
            if (results.error === false) {
                // alert(results.message);
                // load lại trang
                // location.reload();
                toastr["success"]("Hãy kiểm tra giỏ hàng của mình!", "Thành công")
            }else{
                toastr["error"]("Chưa chọn Size cho sản phẩm!", "Không thành công")
                // alert(results.message);
                // alert('Có thể bạn chưa chọn Size!');
            }
        }
    });
}

// document.getElementById('themVaoyeuthich1').onclick = function () {
function themVaoyeuthich(idKH, idSP){
//     document.getElementById('themVaoyeuthich1').style.display = "none";
//     var idKH = $('#idKH_GH').val();
//     var idSP = $('#idSP_GH').val();
    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'post',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/sanpham/them_yeu_thich',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: { idKH, idSP },
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
        // Nội dung sẽ được thực thi sau khi nhận được dữ liệu từ server
            if (results.error === false) {
                toastr["success"]("Hãy kiểm tra trang yêu thích của mình!", "Thành công");
                $('#themVaoyeuthich') . html('<a id="themVaoyeuthich2" onclick="xoayeuthich(' +idKH +','+ idSP+')" href="#" class="prod-favorites"><i class="fa fa-heart" style="color: black;"></i>Yêu thích</a>');
            }else{
                toastr["error"]("Thêm không thành công!", "Không thành công");
                // alert(results.message);
            }
        }

    });

}

// document.getElementById('themVaoyeuthich1').onclick = function () {
function themVaoyeuthich2(idSP){//idKH,
//     document.getElementById('themVaoyeuthich1').style.display = "none";
//     var idKH = $('#idKH_GH').val();
//     var idSP = $('#idSP_GH').val();
    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'post',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/sanpham/them_yeu_thich',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: { idSP },
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
        // Nội dung sẽ được thực thi sau khi nhận được dữ liệu từ server
            if (results.error === false) {
                // alert('Thành công');
                toastr["success"]("Hãy kiểm tra trang yêu thích của mình!", "Thành công")
                // location.reload();
                // $('#themVaoyeuthich') . html('<a id="themVaoyeuthich2" onclick="xoayeuthich(' +idKH +','+ idSP+')" href="#" class="prod-favorites"><i class="fa fa-heart" style="color: black;"></i>Yêu thích</a>');
            }else{
                toastr["error"]("Sản phẩm đã được thêm vào yêu thích!", "Không thành công")
                // alert(results.message);
            }
        }

    });

}


// document.getElementById('themVaoyeuthich2').onclick = function () {
function xoayeuthich(idKH, idSP){
//     document.getElementById('themVaoyeuthich2').style.display = "none";
//     var idKH = $('#idKH_GH').val();
//     var idSP = $('#idSP_GH').val();
    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'post',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/sanpham/xoa_yeu_thich',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: { idKH, idSP },
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
            // Nội dung sẽ được thực thi sau khi nhận được dữ liệu từ server
            if (results.error === false) {
                // location.reload();
                toastr["success"]("Xóa thành công!", "Thành công")
                $('#themVaoyeuthich') . html('<a id="themVaoyeuthich1" onclick="themVaoyeuthich(' +idKH +','+ idSP+')" href="#" class="prod-favorites"><i class="fa fa-heart" ></i>Yêu thích</a>');
            }else{
                toastr["error"]("Xóa không thành công!", "Không thành công")
                // alert(results.message);
            }
        }
    });
}

// document.getElementById('themVaoyeuthich2').onclick = function () {
function xoayeuthich2(idKH, idSP){
//     document.getElementById('themVaoyeuthich2').style.display = "none";
//     var idKH = $('#idKH_GH').val();
//     var idSP = $('#idSP_GH').val();
    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'post',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/sanpham/xoa_yeu_thich',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: { idKH, idSP },
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
            // Nội dung sẽ được thực thi sau khi nhận được dữ liệu từ server
            if (results.error === false) {
                toastr["success"]("Xóa thành công!", "Thành công")
                location.reload();
                // $('#themVaoyeuthich') . html('<a id="themVaoyeuthich1" onclick="themVaoyeuthich(' +idKH +','+ idSP+')" href="#" class="prod-favorites"><i class="fa fa-heart" ></i>Yêu thích</a>');
            }else{
                toastr["error"]("Xóa không thành công!", "Không thành công")
                // alert(results.message);
            }
        }
    });
}

// function themVaoGioHang2(idsp, idkh){
//     var from = '"'+'#' + idsp +'"';
//
//     alert(data);
//     var idKH = idkh;
//     var idSP = idsp;
//     var sizeSP_KHcan = document.getElementById(idsp).value;
//     alert(sizeSP_KHcan);
//     var SLSP_KHcan = document.querySelector(SL).value;
//     $.ajax({
//         // Loại gửi dữ liệu (POST hoặc GET)
//         type: 'post',
//         // URL Tiếp nhận, xử lý và gửi lại dữ liệu
//         url: '/trangchu/sanpham/them_gio_hang',
//         // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
//         data: { idKH, idSP, sizeSP_KHcan, SLSP_KHcan },
//         // Kiểu dữ liệu trả về ('html','text','json','xml')
//         dataType: 'json',
//
//         success: function(results) {
//         // Nội dung sẽ được thực thi sau khi nhận được dữ liệu từ server
//             if (results.error === false) {
//                 alert(results.message);
//                 // load lại trang
//                 location.reload();
//                 alert(results.message);
//             }else{
//                 alert(results.message);
//                 alert('Kiểm tra xem bạn đã chọn Size chưa!!');
//             }
//         }
//     });
// }

function updateSL(idSPGH, SL){
    var SL = '#'+SL;
    var SLSP_KHcan = $(SL).val();

    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'POST',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/giohang/updateSL',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: { idSPGH, SLSP_KHcan },
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
            if (results.error === false) {
                // alert(results.message);

                // location.reload();
                toastr["success"]("Update thành công!", "Thành công")
                // alert(results.message);
            }else{

                // location.reload();
                toastr["error"]("Update không thành công!", "Không thành công")
                // alert(results.message);
                // alert('Kiểm tra xem bạn đã chọn Size chưa!!');
            }
        }
    });
}

function xoaSPGH(id){

    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'POST',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/giohang/xoa',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: { id },
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
            if (results.error === false) {
                // alert(results.message);
                location.reload();
                toastr["success"]("Xóa thành công sản phẩm!", "Thành công")
                // alert(results.message);
            }else{
                location.reload();
                toastr["error"]("Xóa không thành công!", "Không thành công")
                // alert(results.message);
                // alert('Kiểm tra xem bạn đã chọn Size chưa!!');
            }
        }
    });
}

// function xoaDC(id){
//     $.ajax({
//         // Loại gửi dữ liệu (POST hoặc GET)
//         type: 'POST',
//         // URL Tiếp nhận, xử lý và gửi lại dữ liệu
//         url: '/trangchu/tai_khoan/xoaDC',
//         // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
//         data: { id },
//         // Kiểu dữ liệu trả về ('html','text','json','xml')
//         dataType: 'json',
//
//         success: function(results) {
//             if (results.error === false) {
//                 // alert(results.message);
//                 location.reload();
//                 toastr["success"]("Xóa thành công địa chỉ!", "Thành công")
//             }else{
//                 location.reload();
//                 toastr["error"]("Xóa không thành công!", "Không thành công")
//                 // alert('Kiểm tra xem bạn đã chọn Size chưa!!');
//             }
//         }
//     });
// }


// $('#SLSP_KH').change(function () {
//
//     var idKH = $('#idKH_GH').val();
//     var SLSP_KHcan = $('#SLSP_KH').val();
//     $.ajax({
//         // Loại gửi dữ liệu (POST hoặc GET)
//         type: 'POST',
//         // URL Tiếp nhận, xử lý và gửi lại dữ liệu
//         url: '/trangchu/sanpham/gio_hang/updateSL',
//         // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
//         data: { idKH, idSP, sizeSP_KHcan, SLSP_KHcan },
//         // Kiểu dữ liệu trả về ('html','text','json','xml')
//         dataType: 'json',
//
//         success: function(results) {
//             if (results.error === false) {
//                 // alert(results.message);
//                 location.reload();
//                 // alert(results.message);
//             }else{
//                 location.reload();
//                 // alert(results.message);
//                 // alert('Kiểm tra xem bạn đã chọn Size chưa!!');
//             }
//         }
//     });
// });
