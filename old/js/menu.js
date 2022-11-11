window.onload = function () {
    const pages = ['home', 'websites', 'about', 'contact'];
    let firstContent = document.getElementById(pages[0]).innerHTML;
    document.getElementById('contents').innerHTML = firstContent;

    for (let i = 0; i < 4; i++) {
        document.getElementById(pages[i]).addEventListener("click", function (e) { showPage(e); });
    }
}

function showPage(e) {

    let pickPage = e.target.value;
    let contents = document.getElementById(pickPage).innerHTML;
    document.getElementById('contents').innerHTML = contents;
}