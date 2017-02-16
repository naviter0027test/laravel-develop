$(document).ready(function() {
    $('.del').on("click", function() {
        var newsId = $(this).attr('value');
        console.log('/index.php/admin/news/'+newsId);
        if(confirm("確定刪除?")) {
            $("#deleteNews").attr("action", '/index.php/admin/news/'+newsId);
            $("#deleteNews").submit();
        }
        /* ajax 寫法
        $.ajax({
            url: '/index.php/admin/news/'+newsId,
            type: 'DELETE', 
            data: {'_token': $("[name=_token]").val()},
            success: function(result, status, xhr) {
                console.log(result);
            },
            error: function(result, status, xhr) {
                console.log(result);
                console.log(result['responseText']);
            }
        });
        */
        return false;
    });
});
