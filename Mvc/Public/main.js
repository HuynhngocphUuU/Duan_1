var index = 1;
        changeIMG =function(){
            var imgs =["/Mvc/Public/img/slider_1.webp", "/Mvc/Public/img/slider_1.webp"];
            document.getElementById("slider").src=imgs[index];
            index++;
            if(index==2){
                index=0;
            }

        }
        setInterval(changeIMG, 2500);