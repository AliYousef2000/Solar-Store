function popgv(){
    var cat = document.getElementById("prodcat").value ;
    if(cat == 1){
        document.getElementById("gvp").style.display = "block";
        document.getElementById("gvi").style.display = "none";
        document.getElementById("gvb").style.display = "none";
        document.getElementById("gvo").style.display = "none";
    }
    else if(cat == 2){
        document.getElementById("gvp").style.display = "none";
        document.getElementById("gvi").style.display = "block";
        document.getElementById("gvb").style.display = "none";
        document.getElementById("gvo").style.display = "none";
    }else if(cat == 3){
        document.getElementById("gvp").style.display = "none";
        document.getElementById("gvi").style.display = "none";
        document.getElementById("gvb").style.display = "block";
        document.getElementById("gvo").style.display = "none";
    }else if(cat == 4){
        document.getElementById("gvp").style.display = "none";
        document.getElementById("gvi").style.display = "none";
        document.getElementById("gvb").style.display = "none";
        document.getElementById("gvo").style.display = "block";
    }
}