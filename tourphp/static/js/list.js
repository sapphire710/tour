// window.onload = function() {
//     var img = document.querySelectorAll(".banner-img");
//     var bg = document.querySelector(".banner-bg");
// var dot=document.querySelectorAll(".")
//     img[0].style.opacity = 1;
//     index = 0;
//     timer = null;
//     timer = setInterval(() => {
//         clean();
//         index++;
//         if (index == img.length) {
//             index = 0;
//         }
//         display();

//     }, 1000);

//     function clean() {
//         for (var i = 0; i < 2; i++) {
//             img[i].style.opacity = 0;
//             img[i].style.zIndex = 0;
//         }
//     }

//     function display() {
//         img[index].style.opacity = 1;
//         img[index].style.zIndex = 3;
//     }

//     bg.onmouseover = function() {
//         clearInterval(timer);

//     }

//     bg.onmouseout = function() {
//         timer = setInterval(() => {
//             clean();
//             index++;
//             if (index == img.length) {
//                 index = 0;
//             }
//             display();

//         }, 1000);
//     }

var smbox = document.querySelectorAll(".guide-smbox");
var contant = document.querySelectorAll(".contant");

for (let i = 0; i < smbox.length; i++) {
    smbox[i].onmouseover = function() {
            for (j = 0; j < smbox.length; j++) {
                contant[j].style.display = "none";
            }
            contant[i].style.display = "block";

        }
        // smbox[i].onmouseout = function() {
        //     contant[i].style.display = "none";
        // }
}
// }