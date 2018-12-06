/**
 * Created by Administrator on 2018/11/26.
 */

$(function () {
    //        var browserWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

//		if(browserWidth < 768)
    if(window.screen.width<=768){
        dynamicLoadCss("{$Think.ADMIN_CSS}/sm.min.css");
        dynamicLoadCss("{$Think.ADMIN_CSS}/sm-extend.min.css");
        dynamicLoadCss("{$Think.ADMIN_CSS}/myPagination.css");
        dynamicLoadJs("{$Think.ADMIN_JS}/myPagination.js");

        dynamicLoadJs("{$Think.ADMIN_JS}/zepto.min.js");
        dynamicLoadJs("{$Think.ADMIN_JS}/sm.min.js");
        dynamicLoadJs("{$Think.ADMIN_JS}/sm-extend.min.js");


    }


})

/**
 * 动态加载JS
 * @param {string} url 脚本地址
 * @param {function} callback  回调函数
 */
function dynamicLoadJs(url, callback) {
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;
    if(typeof(callback)=='function'){
        script.onload = script.onreadystatechange = function () {
            if (!this.readyState || this.readyState === "loaded" || this.readyState === "complete"){
                callback();
                script.onload = script.onreadystatechange = null;
            }
        };
    }
    head.appendChild(script);
}

/**
 * 动态加载CSS
 * @param {string} url 样式地址
 */
function dynamicLoadCss(url) {
    var head = document.getElementsByTagName('head')[0];
    var link = document.createElement('link');
    link.type='text/css';
    link.rel = 'stylesheet';
    link.href = url;
    head.appendChild(link);
}