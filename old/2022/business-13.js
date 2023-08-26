var slideNumber = 1;
var slidesLoaded;
var slidingSlides;

function checkIllegalMoves() {

    if (slidingSlides.children.length == slideNumber) { document.getElementById("BusinessSlidesNext").style.visibility = "hidden"; }
    else { document.getElementById("BusinessSlidesNext").style.visibility = "visible"; }

    if (1 == slideNumber) { document.getElementById("BusinessSlidesPrev").style.visibility = "hidden"; }
    else { document.getElementById("BusinessSlidesPrev").style.visibility = "visible"; }
}

function nextSlide() {
    let elements = document.getElementById("BusinessSlidesPagecounter").children;

    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.remove("active")
    }

    if (slidingSlides.children.length > slideNumber) {
        slidingSlides.style.marginLeft = -(++slideNumber - 1) * 100 + "%";
    }

    if (slidingSlides.children.length < slideNumber) {
        slideNumber = slidingSlides.children[0].children.length
    }

    elements[slideNumber-1].classList.add("active")

    checkIllegalMoves();
}
function prevSlide() {

    let elements = document.getElementById("BusinessSlidesPagecounter").children;

    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.remove("active")
    }

    if (slideNumber > 1) {
        slidingSlides.style.marginLeft = -(--slideNumber - 1) * 100 + "%";
    }

    if (slideNumber < 1) {
        slideNumber = 1
    }

    elements[slideNumber-1].classList.add("active")
    
    checkIllegalMoves();
}
function newSlide( element) {
    var name = element.id.split( "_icon")[0]
    var newSlides = document.querySelector( "#BusinessSlides > div[name='"+name+"']");

    if (slidingSlides) {
        slidingSlides.style.display = "none";
        slidingSlides.style.marginLeft = "0%";
    }
    else {document.querySelector( "#sponsorDefault").style.display = "none";}
    newSlides.style.display = "flex";

    slidingSlides = newSlides
    slideNumber = 1;
    slidesLoaded = slidingSlides.children.length;
    document.getElementById("BusinessSlidesPagecounter").innerHTML = '<div class="active"></div>' + '<div></div>'.repeat(slidesLoaded-1)
    checkIllegalMoves();
}