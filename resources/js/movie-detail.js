function showModal1(){
    if(document.getElementById("modalComment-1").style.display === "none"){
        document.getElementById("modalComment-1").style.display = "flex";
    } else if(document.getElementById("modalComment-1").style.display === "flex"){
        document.getElementById("modalComment-1").style.display = "none";
    }
}

function showModal2(){
    if(document.getElementById("modalComment-2").style.display === "none"){
        document.getElementById("modalComment-2").style.display = "flex";
    } else if(document.getElementById("modalComment-2").style.display === "flex"){
        document.getElementById("modalComment-2").style.display = "none";
    }
}

function closeModal1(){
    if(document.getElementById("deleted-1").style.display === "flex"){
        document.getElementById("modalComment-1").style.display = "none";
    }
}

function closeModal2(){
    if(document.getElementById("deleted-2").style.display === "flex"){
        document.getElementById("modalComment-2").style.display = "none";
    }
}

function verifyModal(){
    if(document.getElementById("modalComment-2").style.display === "none"){
        document.getElementById("modalComment-1").style.display = "none";
        if(document.getElementById("modalComment-1").style.display === "flex"){
            document.getElementById("modalComment-1").style.display = "none";
        }
        document.getElementById("modalComment-2").style.display = "flex";
    }
}