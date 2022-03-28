const eye = document.querySelector(".feather-eye");
const eyeoff = document.querySelector(".feather-eye-off");
const passwordField = document.querySelector("input[type=password]");

eye.addEventListener("click", () => {
    eye.style.display = "none";
    eyeoff.style.display = "block";
    passwordField.type = "text";
});

eyeoff.addEventListener("click", () => {
    eyeoff.style.display = "none";
    eye.style.display = "block";
    passwordField.type = "password";
});

//Changement de l'image //
function changeImage() {
    // on selectionne via l'id la balise img
    var image = document.getElementById('img_map');
    if (image.src.match("planhotel.png")) {
        image.src = "../images/planhotel2.PNG";
        document.getElementById("btn_imgmap").innerHTML = "Etage 1";
        document.getElementById("name_etage").innerHTML = "Actuellement: Etage 2";
        var d = document.getElementById('point_rouge');
        d.style.display = 'none';



    } else {
        image.src = "../images/planhotel.png";
        document.getElementById("btn_imgmap").innerHTML = "Etage 2 ";
        document.getElementById("name_etage").innerHTML = "Actuellement: Etage 1";
        var d = document.getElementById('point_bleu');
        d.style.display = 'none';
    }


}
//-------------------------//



// Area Plan Hotel //

function getAreaCenter(shape, coords) {
    var coordsArray = coords.split(','),
        center = [];
    if (shape == 'circle') {
        // For circle areas the center is given by the first two values
        center = [coordsArray[0], coordsArray[1]];
    } else {
        // For rect and poly areas we need to loop through the coordinates
        var coord,
            minX = maxX = parseInt(coordsArray[0], 10),
            minY = maxY = parseInt(coordsArray[1], 10);
        for (var i = 0, l = coordsArray.length; i < l; i++) {
            coord = parseInt(coordsArray[i], 10);
            if (i % 2 == 0) { // Even values are X coordinates
                if (coord < minX) {
                    minX = coord;
                } else if (coord > maxX) {
                    maxX = coord;
                }
            } else { // Odd values are Y coordinates
                if (coord < minY) {
                    minY = coord;
                } else if (coord > maxY) {
                    maxY = coord;
                }
            }
        }
        center = [parseInt((minX + maxX) / 2, 10), parseInt((minY + maxY) / 2, 10)];
    }
    return (center);
}

var area = document.getElementById('area');
var center = getAreaCenter(area.getAttribute('shape'), area.getAttribute('coords'));
console.log('X-center: ' + center[0] + ', Y-center: ' + center[1]);
placeDiv(center[0], center[1])










function placeDiv(x_pos, y_pos) {
    var d = document.getElementById('point_rouge');
    d.style.position = "absolute";
    d.style.left = x_pos + 'px';
    d.style.top = y_pos + 'px'
    d.style.color = '#00ff7f';
    d.style.width = '20px';
    d.style.height = '20px';
    d.style.zindex = '3';
    d.style.display = 'block';
    d.style.borderRadius = "80%";

}




function getAreaCenter(shape, coords) {
    var coordsArray = coords.split(','),
        center = [];
    if (shape == 'circle') {
        // For circle areas the center is given by the first two values
        center = [coordsArray[0], coordsArray[1]];
    } else {
        // For rect and poly areas we need to loop through the coordinates
        var coord,
            minX = maxX = parseInt(coordsArray[0], 10),
            minY = maxY = parseInt(coordsArray[1], 10);
        for (var i = 0, l = coordsArray.length; i < l; i++) {
            coord = parseInt(coordsArray[i], 10);
            if (i % 2 == 0) { // Even values are X coordinates
                if (coord < minX) {
                    minX = coord;
                } else if (coord > maxX) {
                    maxX = coord;
                }
            } else { // Odd values are Y coordinates
                if (coord < minY) {
                    minY = coord;
                } else if (coord > maxY) {
                    maxY = coord;
                }
            }
        }
        center = [parseInt((minX + maxX) / 2, 10), parseInt((minY + maxY) / 2, 10)];
    }
    return (center);
}





function over(obj) {
    var areax = obj.id
    var area = document.getElementById(areax);
    var center = getAreaCenter(area.getAttribute('shape'), area.getAttribute('coords'));
    placeDiv(center[0], center[1]);
}




/* 
    var id = obj.dataset.id
    var data = id
    $.ajax({
        type: "GET",
        url: 'request.php',
        data: data,
        dataType: 'json',
        success: function (response) {
            alert(response)
        },
        error: function () {
            window.alert("error ajax");
        }
    }); */