var backgroundElement;
var mainContainer;
var contentContainer;
var siteVersion;
var cachedTabs = {};

let done = false;
let t_prev, t_0;

function toggleCategory(el) {
    elements = el.getElementsByClassName("opposite")

    for (let i=0; i< elements.length; i++) {
        elements[i].className = "opposite activeCategory"
    }

    buttons = document.getElementsByClassName("buttonDiv")
    for (let i=0; i< buttons.length; i++) {
        if (buttons[i] != el) {
            elements = buttons[i].getElementsByClassName("opposite")
            for (let j=0; j< elements.length; j++) {
                elements[j].className = "opposite"
            }
        }
    }

    loadCategory(el.attributes.name.value)
    mainContainer.scrollTo(0, 0)
}

document.addEventListener( 'DOMContentLoaded', (event) => {
    siteVersion = document.querySelector( "#root").getAttribute( "version");
    mainContainer = document.getElementById( "mainContainer");
    backgroundElement = document.getElementById( 'backgroundVideo');
    contentContainer = document.getElementById( 'contentContainer');
    
    if (document.URL.search("#") != -1) {
        toggleCategory( document.querySelector("#navigationBar > [name='" + document.URL.split("#").pop() + "']"))
    }
    else {
        loadCategory("Start")
        console.log("dot")
    }

    setTimeout( function() {
        let elements = document.getElementsByClassName("opposite")
        for (let i=0; i< elements.length; i++) {
            elements[i].style = ""
        }
    }, 500)
});

async function downloadFile(filepath) {
	let response = await fetch(filepath);
		
	if(response.status != 200) {
        console.warn("Server Error loading '"+filepath+"'")
        return ""
	}

	let text_data = await response.text();

	return text_data;
}

async function loadCategory(name) {
    let textData;
    if (cachedTabs[name+"-"+siteVersion+".html"] === undefined) {
        textData = await downloadFile(name+"-"+siteVersion+".html");
    }
    else {
        textData = cachedTabs[name+"-"+siteVersion+".html"];
    }

    document.URL = document.URL.split("#")[0]
    if (name != "Start")
    {
        window.history.replaceState( {}, null, document.URL.split("#")[0] + "#" + name)
    }
    else  {
        window.history.replaceState( {}, null, document.URL.split("#")[0])
    }

    if (textData == "") {
        document.getElementById("contentContainer").innerHTML = "<div class='row' style='box-shadow : none;'><div class='secondary accent' style='padding : 10px;'><h1>Page didn't load properly</h1><p>Try loading the page again.</p><p>If reloading doesn't work, check your computer's internet access.</p>"
    }
    else {
        document.getElementById("contentContainer").style.visibility = "hidden";
        document.getElementById("contentContainer").innerHTML = textData
        setTimeout(function(event) {
            document.getElementById("contentContainer").style.visibility = "visible";
        }, 300);
        
        if (cachedTabs[name+"-"+siteVersion+".html"] === undefined) {
            cachedTabs[name+"-"+siteVersion+".html"] = textData;
        }
    }

    eName = undefined;
    if (name == "Foretag") eName = "business";
    if (name == "Schema") eName = "schedule";
    if (name == "Om_Oss") eName = "omOss";
    
    if (eName != undefined) {
        if (document.head.querySelector("[name='"+eName+"-"+siteVersion+".js']") == undefined) {
            var script = document.createElement("script");
            script.src = eName+"-"+siteVersion+".js";
            script.setAttribute("name", eName+"-"+siteVersion+".js");

            document.head.appendChild(script);
        }
        
        if (document.head.querySelector("[name='"+eName+"Page-"+siteVersion+".css']") == undefined) {
            var style = document.createElement("link");
            style.rel = "stylesheet";
            style.type = "text/CSS";
            style.href = "CSS/"+eName+"Page-"+siteVersion+".css";
            style.setAttribute("name", eName+"Page-"+siteVersion+".css");

            document.head.appendChild(style);
        }
    }
}

function shiftBG() {
    
    let parentPos = mainContainer.children[0].getBoundingClientRect();
    let childPos = contentContainer.getBoundingClientRect();

    let overflow
    if (window.innerWidth / (1.1*window.innerHeight) > 810 / 540) {
        overflow = window.innerWidth * 540 / 810 - window.innerHeight
    }
    else {
        overflow = window.innerHeight * 0.1
    }
    let height = childPos.bottom - parentPos.bottom;
    
    if (document.getElementById("mainContainer").scrollTop / height < 0) {backgroundElement.style.top = "0px"; return}

    backgroundElement.style.top = -(document.getElementById("mainContainer").scrollTop / height) * overflow + 'px';
}



// Only used for vertical (mobile) version
function toggleNavigationBar() {
    let element = document.getElementById("mobileNavigationBarContainer")
    if ( element.classList.contains("active")) { element.classList.remove("active")}
    else { element.classList.add("active")}
}

// Only used for vertical (mobile) version
function closeNavigationBar() {
    let element = document.getElementById("mobileNavigationBarContainer")
    if ( element.classList.contains("active")) { element.classList.remove("active")}
}