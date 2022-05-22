function slider(){
    var i=0;
    var images=["Images/b1.jpg","Images/b2.PNG","Images/b3.jpg","Images/b4.jpg","Images/b5.jpg"];
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