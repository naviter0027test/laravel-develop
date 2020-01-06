$(document).ready(function() {
    $('.advImg button').on('click', function() {
        var advImg = $(this).parent().parent();
        var productName = $($(advImg).find('.productName')).text();
        var buyMoney = $($(advImg).find('.buyInfo label')).text();
        var postData = {
            products : [{
                name : productName,
                price : buyMoney
            }]
        };
        $.post('/linepay/start', postData, function(data) {
            console.log(data);
            if(data['status'] == true && data['res']['returnCode'] == '0000') {
                if(confirm('是否前往付款?'))
                    location.href = data['res']['info']['paymentUrl']['web'];
            }
        });
    });
});
