

function focusEvent( element) {
    if (element.classList.contains("active")) return null;
    
    element.classList.add( "active")
}

function unfocusEvent( element) {
    if (element) element.classList.remove( "active");
    else return null;
}

function clickCatcher( event) {
    document.querySelectorAll(".timeBlock.active").forEach( function(element) {
        if (element == event.target ) return null;
        else if (element.contains( event.target)) return null;
        else unfocusEvent( element);
    });
}

document.addEventListener("click", clickCatcher)