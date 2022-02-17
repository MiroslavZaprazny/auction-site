const images = document.querySelectorAll('.car');
let getLatestOpenedImg;
const windowWidth = window.innerWidth;
let container = document.body;
let nextBtn;
let prevBtn;
let imgNameWithoutExtension;
let extension;

if(images){
    images.forEach(function(image, index){
        image.onclick = function(){
            let getImageUrl =image.getAttribute("src");
            
            imgNameWithExtension = getImageUrl.split("/uploads/");
            imgNameWithoutExtension = imgNameWithExtension[1].replace(/\.[^/.]+$/, "");
            extension = imgNameWithExtension[1].split('.').pop();

            getLatestOpenedImg = index ;

            let newImgWindow = document.createElement("div");
            container.appendChild(newImgWindow);

            newImgWindow.setAttribute("class","img-window");
            newImgWindow.setAttribute("onclick","closeImg()");

            let newImg = document.createElement("img");
            newImgWindow.appendChild(newImg);
            newImg.setAttribute("src","../"+getImageUrl);
            newImg.setAttribute("id","currentImg");

            newImg.onload = function(){
                let imgWidth= this.width;
                let distanceImageToEdgde = ((windowWidth - imgWidth)/2) -30;

                nextBtn =document.createElement("a");
                let nextBtnText =document.createTextNode("Next");
                nextBtn.appendChild(nextBtnText);
                container.appendChild(nextBtn);

                nextBtn.setAttribute("class","img-btn-next");
                nextBtn.setAttribute("onclick","changeImage(1)");
                nextBtn.style.cssText="right: " + distanceImageToEdgde + "px;";

                prevBtn =document.createElement("a");
                let prevBtnText =document.createTextNode("Prev");
                prevBtn.appendChild(prevBtnText);
                container.appendChild(prevBtn);

                prevBtn.setAttribute("class","img-btn-prev");
                prevBtn.setAttribute("onclick","changeImage(0)");
                prevBtn.style.cssText = "left: " + distanceImageToEdgde + "px;";

            }
        }
   });
}
function closeImg(){
    document.querySelector(".img-window").remove();
    document.querySelector(".img-btn-next").remove();
    document.querySelector(".img-btn-prev").remove();
}

function changeImage(changeDirection){
    document.querySelector("#currentImg").remove();

    let getImageWindow = document.querySelector(".img-window");
    let newImage = document.createElement("img");
    getImageWindow.appendChild(newImage);

    let calcNewImage;
    if(changeDirection == 1){
        calcNewImage = getLatestOpenedImg +1;
        if(calcNewImage > images.length - 1){
            calcNewImage = 0 ;
        }
    } 
    else if(changeDirection == 0 ) {
        calcNewImage = getLatestOpenedImg -1 ;
        if(calcNewImage < 0){
            calcNewImage = images.length - 1 ;
        }
    }

    let newImgName = imgNameWithoutExtension.substring(0,imgNameWithoutExtension.length -1 );

    newImage.setAttribute("src","../uploads/"+ newImgName + calcNewImage + '.' + extension);
    newImage.setAttribute("id","currentImg");
    getLatestOpenedImg =calcNewImage;
}