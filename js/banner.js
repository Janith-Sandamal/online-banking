function slider(){
    var i=0;
    var images=["/images/banner1.png","/images/banner2.png","/images/banner3.png","/images/banner4.png","/images/banner5.png"];
    var time=3000;
    function changeImg(){
        document.getElementById("slideimg").src=images[i];
        if(i<images.length-1){
            i++;
        }else{
            i=0;
        }
        setTimeout(changeImg,time);
    }
    changeImg();
}