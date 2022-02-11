const images = document.querySelectorAll('.car');
console.log(images);
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
            console.log(getImageUrl);

            imgNameWithExtension = getImageUrl.split("/uploads/");
            console.log(imgNameWithExtension);
            imgNameWithoutExtension = imgNameWithExtension[1].replace(/\.[^/.]+$/, "");
            console.log(imgNameWithoutExtension);
            extension = imgNameWithExtension[1].split('.').pop();
            console.log(extension);

            getLatestOpenedImg = index;
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
                let distanceImageToEdgde = ((windowWidth - imgWidth)/2) -80;

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
        if(calcNewImage > images.length){
            calcNewImage = 1 ;
        }
    } 
    else if(changeDirection == 0 ) {
        calcNewImage = getLatestOpenedImg -1 ;
        if(calcNewImage < 1){
            calcNewImage = images.length ;
        }
    }

    newImage.setAttribute("src","../uploads/"+ imgNameWithoutExtension + calcNewImage + '.'+extension);
    newImage.setAttribute("id","currentImg");
    getLatestOpenedImg =calcNewImage;
}