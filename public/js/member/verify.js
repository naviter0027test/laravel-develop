$(document).ready(function() {
    $("#sendMail").submit(function() {
        $.post($(this).attr("action"), $(this).serialize(), function(data) {
            data = JSON.parse(data);
            if(data['status'] == 200) {
                alert("寄送成功，請至郵箱並啟用您的帳號");
            }
            else {
                alert("出現錯誤");
            }
        });
        return false;
    });
});
