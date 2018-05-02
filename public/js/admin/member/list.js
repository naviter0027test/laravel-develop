$(document).ready(function() {
    $('.del').on("click", function() {
        var newsId = $(this).attr('value');
        console.log('/index.php/admin/news/'+newsId);
        if(confirm("確定刪除?")) {
            $("#deleteMember").attr("action", '/index.php/admin/member/'+newsId);
            $("#deleteMember").submit();
        }
        return false;
    });
});
