window.addEventListener('load',function(){

    let nave = document.querySelector("#xia");
    let navList = document.querySelector(".nav-list");
    let xialak = document.querySelector(".xialakuang");
    let shouy = document.querySelector(".shouy");
    let zdJiantou = document.querySelector(".zhiding");
    // let navr = document.querySelector('.navr1')
    // let navr1 = document.querySelector('.navr2')


    window.onscroll = function() {
        let scrollTop = document.documentElement.scrollTop || document.body.scrollTop
        if (scrollTop >= 100) {
            nave.style.top = 0;
        } else {
            nave.style.top = -58 + "px";
        }
        if (scrollTop >= 200) {
            zdJiantou.style.display = "block"
        } else {
            zdJiantou.style.display = "none"
        }
    };


    zdJiantou.onclick = function() {
        GoTop()
    };

    var currentPosition, timer;

    function GoTop() {
        timer = setInterval(() => { runToTop() }, 1);
    }

    function runToTop() {
        currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
        currentPosition -= 10;
        if (currentPosition > 0) {
            window.scrollTo(0, currentPosition);
        } else {
            window.scrollTo(0, 0);
            clearInterval(timer);
        }
    }
    // window.scrollTo(0, document.body.scrollHeight);



    window.addEventListener("resize", () => {
        var ww = window.innerWidth;
        if (ww > 992) {
            xialak.style.display = "none";
            navList.style.display = "none";
        }
    });


    navList.onclick = function() {
        xialak.style.display = xialak.style.display == "none" ? "block" : "none";
        shouy.innerHTML = xialak.style.display == "none" ? "首页" : "关闭";
    };


})
