  /* -----------------------jquery-------------------- */
  window.onload = function() {

    $.get("./footer.html", function(data, status) {
        document.querySelector("footer").innerHTML = data;
    });
    $.get("./header.html", function(data, status) {
        document.querySelector("header").innerHTML = data;
    });

}
  // tạo sự kiện kéo xuống header sẽ đổi màu 
  let header = document.querySelector("header")
  window.addEventListener("scroll", function() {
          k = window.pageYOffset;
          if (k > 0) {
              header.classList.add("sticky")
          } else {
              header.classList.remove("sticky")
          }
      })
      //

  /* ------------------------- menu side bar category-------------------------- */
  let itemSliderBar = document.querySelectorAll(".category-left-li");
  itemSliderBar.forEach(function(menu, index) {
      menu.addEventListener("click", function() {
      menu.classList.toggle("block")
      })
  })
/* -----------------------------------PRODUCT----------------------------------------- */
let lImg = document.querySelector(".product-content-left-imgbig img"); // ấn vào ảnh thì ảnh sẽ hiện lên thành ảnh to
let sImg = document.querySelectorAll(".product-content-left-imgsmall img");
  sImg.forEach(function(imgItem, e){
      imgItem.addEventListener("click",function(){
        lImg.src = imgItem.src; 
  })

  })


let preserve = document.querySelector(".preserve");
let detail = document.querySelector(".detail");
    if(preserve){
        preserve.addEventListener("click",function(){
        document.querySelector(".product-content-right-product-bottom-content-detail").style.display = "none";
        document.querySelector(".product-content-right-product-bottom-content-preserve").style.display = "block";
    })
}
    if(detail){
        detail.addEventListener("click",function(){
        document.querySelector(".product-content-right-product-bottom-content-detail").style.display = "block";
        document.querySelector(".product-content-right-product-bottom-content-preserve").style.display = "none";
    })
}
let buttonTop = document.querySelector(".product-content-right-product-bottom-top")
    if(buttonTop) {
        buttonTop.addEventListener("click",function(){
            document.querySelector(".product-content-right-product-bottom-content-l").classList.toggle("active1");
            
        })
}
/* ------------------------------------------------------------------------------------- */