window.onload = function(){

    const buttonId = [
        "buttonHome",
        "buttonWebsites",
        "buttonAbout",
        "buttonContact"
    ];

    document.getElementById("idHome").scrollIntoView();

    for(let i=0; i<buttonId.length; i++){
        document.getElementById(buttonId[i]).addEventListener("click", function(){openWebsite(i);});
    }   
}

function openWebsite(id){

    const pages = [
        "idHome",
        "idWebsites",
        "idAbout",
        "idContact"
    ];

    document.getElementById(pages[id]).scrollIntoView();
}