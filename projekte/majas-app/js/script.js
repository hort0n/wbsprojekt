var image = null;
var slider = document.getElementById("slider");
var output = document.getElementById("demo");
var lumval = document.getElementById("lumval");
var windowWidth = window.innerWidth/3

// https://stackoverflow.com/questions/67861003/resize-image-during-upload-canvas-and-simpleimage-library
/* function upload() {
  //Get input from file input
  var fileinput = document.getElementById("finput");
  //Make new SimpleImage from file input
  image = new SimpleImage(fileinput);
  
  //Get canvas
  var canvas = document.getElementById("can");
  //Draw image on canvas
  image.drawTo(canvas);
} */



/*     var openFile = function(event) {
      var input = event.target;
  
      var reader = new FileReader();
      reader.onload = function(){
        var dataURL = reader.result;
        var output = document.getElementById('output');
        output.src = dataURL;
      };
      reader.readAsDataURL(input.files[0]);
    }; */


    let imgInput = document.getElementById('image-input');
    var img = document.createElement("img");
    // get canvas element
    var canvas = document.getElementById("canvas");
    
    
    imgInput.addEventListener('change', function (e) {
      if (e.target.files) {
          let imageFile = e.target.files[0];
          var reader = new FileReader();
          reader.onload = function (e) {
              img.onload = function (event) {
              var MAX_WIDTH = 450;
              var MAX_HEIGHT = 500;

              var width = img.width;
              var height = img.height;

                  // Change the resizing logic
                  if (width > height) {
                      if (width > MAX_WIDTH) {
                          height = height * (MAX_WIDTH / width);
                          width = MAX_WIDTH;
                      }
                  } else {
                      if (height > MAX_HEIGHT) {
                          width = width * (MAX_HEIGHT / height);
                          height = MAX_HEIGHT;
                      }
                  }
                  
                  canvas.width = width;
                  canvas.height = height;
                  
                  var ctx = canvas.getContext("2d");

                  // Actual resizing
                  ctx.drawImage(img, 0, 0, width, height);
              }
              img.src = e.target.result;
          }
          reader.readAsDataURL(imageFile);
      }
    });




function makeGray() {
  //change all pixels of image to gray

  // get image
  //var image = document.getElementById("canvas");
  //Make new SimpleImage from file input
  image = new SimpleImage(canvas);

  for (var pixel of image.values()) {
    var avg = (pixel.getRed()+pixel.getGreen()+pixel.getBlue())/3;
    pixel.setRed(avg);
    pixel.setGreen(avg);
    pixel.setBlue(avg);
  }
  //display new image
 //var canvas = document.getElementById("canvas");
 
  image.drawTo(canvas);

}

function con(){
  // get image
  
  var canvas = document.getElementById("canvas");
  //Make new SimpleImage from file input
  image = new SimpleImage(canvas);

  imageHeight = image.height
  imageWidght = image.width
  document.getElementById("lumval").innerHTML = []
  imageWidth = image.width
  xpos = getRandomInt(0,imageWidth)
  ypos = getRandomInt(0, imageHeight)

  var boxcanv = document.getElementById("box")
  boxcanv.width = imageWidght
  boxcanv.height = imageHeight
  
  //Calculate luminance from RGB values
  var greenVal = image.getGreen(xpos,ypos)
  var blueVal = image.getBlue(xpos,ypos)
  var redVal = image.getRed(xpos,ypos)

  luminance = 0.2126*redVal+0.7152*greenVal+0.0722*blueVal

  var canvas = document.getElementById("box");
  const ctx = canvas.getContext('2d');
  ctx.beginPath();
  ctx.rect(xpos,ypos,50,50); // x:250, y:250, w:100, h:100
  ctx.lineWidth = "10";
  ctx.strokeStyle = 'rgb(216,67,21)'; // fill color
  ctx.stroke(); // stroke previous shapes


  console.log('xpos:', xpos ,'ypos:', ypos,'rgb vals:',redVal, greenVal, blueVal,'luminance:', luminance)
  sliderVal = slider.value
  console.log('slider val:', sliderVal, 'difference to luminance:', luminance-sliderVal)

}

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min;
}

slider.oninput = function() {
  output.innerHTML = this.value  + "%";
  sliderVal = slider.value
  console.log(sliderVal)

  rgbValBox = 'rgb('+String(sliderVal)+','+String(sliderVal)+','+String(sliderVal)+')'
  valbox.style.backgroundColor = rgbValBox
  
}

function scoring() {

diff = lumInPercent- document.getElementById("slider").value
if (Math.abs(diff) > 100) {
  score = "-100"
} else if (Math.abs(diff) > 90){
  score = "-80"
}
else if (Math.abs(diff) > 80){
  score = "-60"
}
else if (Math.abs(diff) > 70){
  score = "-40"
}
else if (Math.abs(diff) > 60){
  score = "-20"
}
else if (Math.abs(diff) > 50){
  score = "+20"
}
else if (Math.abs(diff) > 40){
  score = "+40"
}
else if (Math.abs(diff) > 30){
  score = "+60"
}
else if (Math.abs(diff) > 20){
  score = "+80"
}
else if (Math.abs(diff) > 10){
  score = "+100"
}
else if (Math.abs(diff) > 0){
  score = "+999"
}


}

function submit(){
  lumInPercent = Math.round(luminance*100/238)
  document.getElementById("lumval").innerHTML = lumInPercent  + "%"
  rgbLumBox = 'rgb('+String(luminance)+','+String(luminance)+','+String(luminance)+')'
  lumbox.style.backgroundColor = rgbLumBox

  scoring()
  document.getElementById("score").innerHTML = score + " points"
 
}