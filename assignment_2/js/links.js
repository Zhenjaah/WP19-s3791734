$(document).ready(function new_elements(){
    $("div#myLinkList").append('<ul id="myLinks"><li><a href="http://google.com" target="_blank">Google</a></li></ul>');
    $("ul#myLinks").append('<li><a href="https://facebook.com" target="_blank">Facebook</a></li>')
    $("div#myLinkList").append('<button id="fader">Fade button</button>');
    $("div#myLinkList").append('</br></br><button id="deleter">Delete button</button>');
});

$("#deleter").click(function(){
    var id = $(this).data("id");
    $("*[data-id=" + id + "]").remove();
});

$(document).ready(function fader() {
    $("button#fader").click(function fade() {
        $("ul#myLinks").fadeToggle();
    });
});

$(document).ready(function () {
    $("div#myLinkList").append('</br></br><input id="urlName" type="text" placeholder="Please enter link name"></br><input type="text" id="linkInput" placeholder="Please enter URL here">')
    $("div#myLinkList").append('</br><button id="linkAdd">Click here to add link to list</button>');
});

$(document).ready(function () {
    $("#linkAdd").click(function () {
        var inp = $("#linkInput").val();
        var lin = $("#urlName").val();
        $('ul#myLinks').append('<li><a target="_blank" href="https://'+ inp +'">' + lin + '</a></li>');
    })
});
