/**
 * Created by Administrator on 2018/11/27.
 */




//手机充值
function charge_m() {
    $.post(
        'charge.html',

        $('#form2').serialize(),
        function (data) {
//				    console.log(data);
            if (data.status == 1){
                alert(data.msg);
                window.location.href="charge_status_m.html?order_num="+data.order_num;
            }else if (data.status == 2){
                alert(data.msg);
                window.location.href="geren_m.html";
            }

            else {
                alert(data.msg);

            }
        }
        , 'json'

    )
    return false;
}


//提现---手机
function get_cash_m() {
    $.post(

        'get_cash.html',

        $('#form2').serialize(),
        function (data) {
//				    console.log(data);
            if (data.status == 1){
                alert(data.msg);
                window.location.href="charge_status_m.html?order_num="+data.order_num;
            }else if (data.status == 2){
                alert(data.msg);
                window.location.href="geren_m.html";
            }

            else {
                alert(data.msg);

            }
        }
        , 'json'

    )
    return false;


}









$('form').submit(function () {

    $.post(
        'charge.html',

        $('#form1').serialize(),
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

})


$("#sub-btn-m").click(function () {
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
})



//手机订单详情页面， 支付按钮触发改变订单状态

$("#fukun_m").click(function () {
    var order_num = $("#order_num").val();
    var charge_type = $("#charge_type").val();
    // alert(charge_type);
    // return;
    $.post(
        'charge_status.html',
        {
            charge_type : charge_type,
            charge_status: 2,
            order_num : order_num
        },
        function (data) {
            if (data.status == 1){
                alert(data.msg);
//                    window.location.reload();
                window.location.href = 'order_list_m.html'
            }else {
                alert(data.msg);
            }
        }
        ,'json'
    )
})