let indexValue = 0;
function slideShow() {
    const container = document.querySelector('.container-image');
    const imgList = container.querySelectorAll('.image img');

    for (let i = 0; i < imgList.length; i++) {
        imgList[i].style.display = 'none';
    }

    indexValue++;
    if (indexValue > imgList.length) {
        indexValue = 1;
    }

    imgList[indexValue - 1].style.display = 'block';
    setTimeout(slideShow, 1500);
}

slideShow();