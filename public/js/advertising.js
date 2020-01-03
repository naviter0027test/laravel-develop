$(document).ready(function() {
    $('.advImg button').on('click', function() {
        var advImg = $(this).parent().parent();
        var productName = $($(advImg).find('.productName')).text();
        var buyMoney = $($(advImg).find('.buyInfo label')).text();
        var postData = {
            productName : productName,
            amount : buyMoney
        };
        console.log(postData);
    });
});
