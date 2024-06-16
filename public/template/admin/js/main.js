
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url)
{
    if (confirm( 'Bạn có chắc chắn muốn xóa không?')) {
        $.ajax({
            type: 'delete',
            datatype: 'json',
            data: { id },
            url: url,
            success: function(result) {
                // console.log(result);
                if (result.error === false) {
                    alert(result.message);
                    // load lại trang
                    location.reload();
                }else{
                    alert(result.message);
                    alert('Xóa lỗi vui lòng thử lại');
                }
            }
        })

    }
}

function mailTtin(){
    var data = $('form#ID_form').serialize();
    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'POST',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/addmailTt',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: data,
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
            // console.log(results);
            if (results.error === false) {
                // alert(results.message);
                // load lại trang
                // location.reload();
                toastr["success"]("kiểm tra mail của bạn!", "Thành công")
                $('#nhapmail').val(null);
            }else{
                // alert(results.message);
                toastr["error"]("Kiểm tra xem bạn đã nhập Mail hay chưa. Có thể mail của bạn đã được sử dụng cho dịch vụ này!!", "Không thành công")
                // alert('Kiểm tra xem bạn đã nhập Mail hay chưa. Có thể mail của bạn đã được sử dụng cho dịch vụ này!!');
            }
        }
    });
}
function f_mailTtin(){
    var data = $('form#f_ID_form').serialize();
    $.ajax({
        // Loại gửi dữ liệu (POST hoặc GET)
        type: 'POST',
        // URL Tiếp nhận, xử lý và gửi lại dữ liệu
        url: '/trangchu/addmailTt',
        // { Các biến dữ liệu được gửi lên server.(ten_bien1:dữliệu,ten_bien2:dữliệu,...). Có thể sử dụng  var data = $('form#ID_form').serialize(); để lấy toàn bộ dữ liệu từ 1 form có id là ID_form},
        data: data,
        // Kiểu dữ liệu trả về ('html','text','json','xml')
        dataType: 'json',

        success: function(results) {
            // console.log(results);
            if (results.error === false) {
                // alert(results.message);
                // load lại trang
                // location.reload();
                toastr["success"]("kiểm tra mail của bạn!", "Thành công")
                $('#f_nhapmail').val(null);
            }else{
                // alert(results.message);
                toastr["error"]("Kiểm tra xem bạn đã nhập Mail hay chưa. Có thể mail của bạn đã được sử dụng cho dịch vụ này!!", "Không thành công")
                // alert('Kiểm tra xem bạn đã nhập Mail hay chưa. Có thể mail của bạn đã được sử dụng cho dịch vụ này!!');
            }
        }
    });
}


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

/*upload file*/
function xoaAnh(){
    $('#upload').val(null);
    $('#image_show') . html('');
    $('#logo').val('');
}
$('#upload').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){

                $('#image_show') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#logo').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

$('#avt').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){

                $('#anh') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img class="ADDAVT" src="'+ results.url +'" alt="Aspernatur excepturi rem" /></a>');
                $('#linkavt').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh1(){
    $('#upload1').val(null);
    $('#image_show1') . html('');
    $('#anh1').val('');
}
$('#upload1').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show1') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh1').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh2(){
    $('#upload2').val(null);
    $('#image_show2') . html('');
    $('#anh2').val('');
}
$('#upload2').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show2') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh2').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh3(){
    $('#upload3').val(null);
    $('#image_show3') . html('');
    $('#anh3').val('');
}
$('#upload3').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show3') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh3').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh4(){
    $('#upload4').val(null);
    $('#image_show4') . html('');
    $('#anh4').val('');
}
$('#upload4').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show4') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh4').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh5(){
    $('#upload5').val(null);
    $('#image_show5') . html('');
    $('#anh5').val('');
}
$('#upload5').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show5') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh5').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh6(){
    $('#upload6').val(null);
    $('#image_show6') . html('');
    $('#anh6').val('');
}
$('#upload6').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show6') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh6').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh7(){
    $('#upload7').val(null);
    $('#image_show7') . html('');
    $('#anh7').val('');
}
$('#upload7').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show7') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh7').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh8(){
    $('#upload8').val(null);
    $('#image_show8') . html('');
    $('#anh8').val('');
}
$('#upload8').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show8') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh8').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh9(){
    $('#upload9').val(null);
    $('#image_show9') . html('');
    $('#anh9').val('');
}
$('#upload9').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show9') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh9').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

function xoaAnh10(){
    $('#upload10').val(null);
    $('#image_show10') . html('');
    $('#anh10').val('');
}
$('#upload10').change(function () {
    // console.log('1234')
    const  form = new FormData();
    form.append('file', $(this)[0].files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        datatype: 'json',
        data: form,
        url: '/trangchu/admin/upload/services',
        success: function (results) {
            // alert(results);
            if (results.error == false){
                $('#image_show10') . html('<a href="'+ results.url +'" target="_blank">' +
                    '<img src="'+ results.url +'" width="100px" /></a>');
                $('#anh10').val(results.url);
            }else{
                alert('upload file lỗi!!');
            }
        }
    });
});

