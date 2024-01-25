var i = 0;
var count = 10;

function next(){
    var id = "text"+i;
    var t = document.getElementById(id);
    t.style.display = "none";
    i++;
    if (i > 0){
        var t = document.getElementById("prev");
        t.style.opacity = 1;
    }
    if (i >= count){
        i=count-1;
    }
    if (i == count-1){
        var t = document.getElementById("next");
        t.style.opacity = 0;
    }
    var id = "text"+i;
    var t = document.getElementById(id);
    t.style.display = "inline";
}

function prev(){
    var id = "text"+i;
    var t = document.getElementById(id);
    t.style.display = "none"
    i--;
    if (i <= count){
        var t = document.getElementById("next");
        t.style.opacity = 1;
    }
    if (i < 0){
        i=0;
    }
    if (i==0){
        var t = document.getElementById("prev");
        t.style.opacity = 0;
    }
    var id = "text"+i;
    var t = document.getElementById(id);
    t.style.display = "inline";
        
}