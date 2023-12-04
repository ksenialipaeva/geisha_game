var i = 0;
var count = 3;

function next(){
    var id = "text"+i;
    var t = document.getElementById(id);
    t.style.display = "none";
    i++;
    if (i >= count){
        i=count-1;
    }
    if (i==count-1){
        var b = document.getElementById("next");
        b.style.opacity = 0;
    }
    var b = document.getElementById("prev");
    b.style.opacity = 0;
    var id = "text"+i;
    var t = document.getElementById(id);
    t.style.display = "inline";
}

function prev(){
    var id = "text"+i;
    var t = document.getElementById(id);
    t.style.display = "none"
    i--;
    if (i < 0){
        i=0;
    }
    if (i==0){
        var b = document.getElementById("prev");
        b.style.opacity = 0;
    }
    w
    var id = "text"+i;
    var t = document.getElementById(id);
    t.style.display = "inline";
        
}