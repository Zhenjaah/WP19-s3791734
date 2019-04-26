function nameChangerIndex() {
    document.title = "Webprogramming (LIX019P05) - Index";
}

function nameChangerSecond() {
    document.title = "Webprogramming (LIX019P05) - Second";
}

function addArticle() {
    var article2 = document.createElement("ARTICLE");

    var heading = document.createElement("H1");
    var headingText = document.createTextNode("This is my second article");
    heading.appendChild(headingText);
    article2.appendChild(heading);

    var para = document.createElement("P");
    var paraText = document.createTextNode("A little paragraph.");
    para.appendChild(paraText);
    article2.appendChild(para);

    document.getElementsByClassName("col-md-12")[0].appendChild(article2);
}

function addSidebar() {
    var divCol = document.createElement("DIV");

    var headingSidebar = document.createElement("H1");
    var headingSidebarText = document.createTextNode("Sidebar");
    headingSidebar.appendChild(headingSidebarText);
    divCol.appendChild(headingSidebar);

    document.getElementsByClassName("col-md-4")[0].appendChild(divCol);
}

function openGoogle() {
    window.open("http://www.google.com/");
    //return false;
    document.footer.getElementsByTagName("a")[4].setAttribute("target"), "blank";
    // the attribute above is not needed in Chrome because window.open already opens in a new window
}

function colorChanger() {
    var redItems = document.getElementsByClassName("nav-item");
    for (var i = 0; i < redItems.length; i++) {
        redItems[i].style.color = "red";
    }
}

function wp19check() {
    var wpList = {
        Week1: "Assignment 1",
        Week2: "Lecture: no lecture",
        Week3: "Assignment 2",
        Week4: "Assignment: none",
        Week5: "Assignment 3",
        Week6: "Assignment: none",
        Week7: "Assignment: none, Lecture: Guest lecture"
    };

    var article3 = document.createElement("ARTICLE");
    var listPrint = Object.entries(wpList);

    var para = document.createElement("P");

    for (i = 0; i < listPrint.length; i++) {

        var paraText = document.createTextNode(listPrint[i] + "\n");
        para.appendChild(paraText);
        article3.appendChild(para);

        document.getElementsByClassName("col-md-12")[0].appendChild(article3);
    }
}

function assignment1() {
    nameChangerSecond();
    addArticle();
    colorChanger();
    wp19check();
    // addSidebar();
}

window.addEventListener('load', assignment1(), nameChangerIndex()); {
    console.log('Document Object Model has been loaded.');
}