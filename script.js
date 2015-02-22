$(document).ready(function() {
  $(window).resize(function() {
    // var imgHeight = 0;
	// var imgWidth = 0;

    // var elems = $('.artImage'), i;
    // for (i in elems) {
    //     if(imgHeight < i.style.height) {
    //     	imgHeight = i.style.height;
    //     }
    //     if(imgwidth < i.style.width) {
    //     	imgwidth = i.style.width;
    //     }
    // }

    // var elems = $('.tallestImg');
    var imgHeight = $('.tallestImg').height();
    console.log($('.tallestImg').height());
    console.log("HIIII");
    //$('.carousel').height(imgHeight);

  });
});

// _____________
// var imageGrad = $('.image-grad'),
//     image = $('.header-img');

// function resizeDiv () {
//     imageGrad.height(image.height());
//     imageGrad.width(image.width());
// }

// resizeDiv();

// $(window).resize(function() { resizeDiv(); });