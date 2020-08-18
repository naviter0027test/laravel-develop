
(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

window.fbAsyncInit = function() {
    FB.init({
        xfbml : true,
        version : 'v8.0'
    });
    //記錄用戶行為資料 可在後台查看用戶資訊
    FB.AppEvents.logPageView();   
};

$(document).ready(function() {
});
