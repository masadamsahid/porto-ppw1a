function toggleMobNav(){

    let bottomvalue = document.getElementById("mobile-nav").style.bottom;

    if (bottomvalue === "-40%"){
        document.getElementById("mobile-nav").style.bottom = "0%";
    }else{
        document.getElementById("mobile-nav").style.bottom = "-40%";
    }
}