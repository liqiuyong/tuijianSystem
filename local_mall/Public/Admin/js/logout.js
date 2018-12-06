/**
 * Created by Administrator on 2018/11/20.
 */

function logout() {

    if (window.confirm("是否确认注销登录?")){




        $.post(
            'logout.html',
            {},
            function (data) {
                if (data.status == 1){
                    alert(data.msg);
                    window.location.href = "./index.html";
                }else {
                    alert(data.msg);

                }
            }
            ,'json'
        )
    }
}




function charge() {
    $.post(
        'charge.html',

        $('#form2').serialize(),
        function (data) {
//				    console.log(data);
            if (data.status == 1){
                alert(data.msg);
                window.location.href="charge_status.html?order_num="+data.order_num;
            }else if (data.status == 2){
                alert(data.msg);
                window.location.href="geren.html";
            }

            else {
                alert(data.msg);

            }
        }
        , 'json'

    )
    return false;
}


//提现
function get_cash() {
    $.post(

        'get_cash.html',

        $('#form2').serialize(),
        function (data) {
//				    console.log(data);
            if (data.status == 1){
                alert(data.msg);
                window.location.href="charge_status.html?order_num="+data.order_num;
            }else if (data.status == 2){
                alert(data.msg);
                window.location.href="geren.html";
            }

            else {
                alert(data.msg);

            }
        }
        , 'json'

)
    return false;


}





function get_inviteCode() {
    $.post(
        'get_inviteCode.html',
        {},
        function (data) {
            if (data.status == 1){
                $("#invite_p").html("推荐码:"+data.invite_code);
                $("#invite_p").show();
                $("#invite_p2").html("推荐码:"+data.invite_code);
                $("#invite_p2").show();
            }
            alert(data.msg);
        }
        ,'json'
    )
}


function get_qrcode() {
//            alert(123)
    $.post(
        'get_qrcode',
        {},
        function (data) {
            if (data.status == 1){
                alert(data.msg);
                $newSrc = "qrcode.html?invite_code="+data.invite_code;
                $("#erweima").attr('src',$newSrc);
                $("#erweima-div").show();
                $("#erweima2").attr('src',$newSrc);
                $("#erweima-div2").show();

            }else {
                alert(data.msg);
            }
        }

    )
}



//提交按钮-----手机端提交

function sub_geren() {
    //                var img1 = $("#img1").attr('src');
//                var img2 = $("#img2").attr('src');
    var real_name = $("#real_name_2").val();
    var real_card = $("#real_card_2").val();
    var bank_name = $("#bank_name_2").val();
    var bank_card = $("#bank_card_2").val();
    var sub_bank_name = $("#sub_bank_name_2").val();
    var tr_password = $("#tr_password_2").val();

    $.post(
        "geren.html",
        {
//                        img1 : img1,
//                        img2 : img2,
            real_card : real_card,
            real_name : real_name,
            bank_name : bank_name,
            bank_card : bank_card,
            sub_bank_name : sub_bank_name,
            tr_password: tr_password
        },
        function (data) {
            if (data.status == 1){
                alert(data.msg);
                window.location.href = "./index_m.html";
            }else {
//                            $("#info").html(data.msg);
                alert(data.msg)
            }
        }
        ,'json'
    )
}




//手机端图片上传


//		图片1上传
$("#m_file").change(function(){
    // $("#info").html("");
    var formdata = new FormData;
    //把jQuery对象转成js对象  .get(0)
    var dataArr = $('#m_file').get(0).files;

    for (var i=0; i<dataArr.length; i++){
        formdata.append('myfiles['+i+']',dataArr[i]);
    }
    $.ajax({
        url:"upload_img.html",
        type:"POST",
        data:formdata,
        contentType:false,
        processData:false,
        success:function(data){
            // $("#info").html(data);
            if (data.status == 1){
                console.log(data.msg);
                console.log(data.src);
//                            $('.pic1').css( "background-image","url("+data.src+")");
                $("#pic1").attr('src',data.src);
//							$("#file").hide();
//							$("#img1").attr('src',data.src);
//							$("#img1").show();
            }else{
                console.log(data.msg);
                // $("#info").text("上传存在错误1");
                alert("上传存在错误");
            }

        },
        error:function () {
            // $("#info").html('上传存在错误2');
            alert('上传错误,请重新上传');
        },
        dataType:"json"
    });

})


//		图片2上传
$("#m_file2").change(function(){
    // $("#info").html("");
    var formdata = new FormData;
    //把jQuery对象转成js对象  .get(0)
    var dataArr = $('#m_file2').get(0).files;

    for (var i=0; i<dataArr.length; i++){
        formdata.append('myfiles_2['+i+']',dataArr[i]);
    }
    $.ajax({
        url:"upload_img.html",
        type:"POST",
        data:formdata,
        contentType:false,
        processData:false,
        success:function(data){
            // $("#info").html(data);
            if (data.status == 1){
                console.log(data.msg);
                console.log(data.src);
                $("#pic2").attr('src',data.src);
//							$("#file2").hide();
//							$("#img2").attr('src',data.src);
//							$("#img2").show();
            }else{
                console.log(data.msg);
                alert("上传存在错误");
            }

        },
        error:function () {
            alert('上传错误,请重新上传');
        },
        dataType:"json"
    });

})



// $("#sub-btn2").click(function () {
//
// //                var img1 = $("#img1").attr('src');
// //                var img2 = $("#img2").attr('src');
//     var real_name = $("#real_name_2").val();
//     var real_card = $("#real_card_2").val();
//     var bank_name = $("#bank_name_2").val();
//     var bank_card = $("#bank_card_2").val();
//
//     $.post(
//         "geren.html",
//         {
// //                        img1 : img1,
// //                        img2 : img2,
//             real_card : real_card,
//             real_name : real_name,
//             bank_name : bank_name,
//             bank_card : bank_card,
//         },
//         function (data) {
//             if (data.status == 1){
//                 alert(data.msg);
//                 window.location.href = "./index.html";
//             }else {
// //                            $("#info").html(data.msg);
//                 alert(data.msg)
//             }
//         }
//         ,'json'
//     )
//
// })