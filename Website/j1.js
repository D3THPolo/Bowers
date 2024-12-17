function fadeIn() {
    var element = document.getElementById("fadeElement");
    var opacity = 0;  // Initial opacity
    var intervalID = setInterval(function() {
        if (opacity < 1) {
            opacity += 0.01;  // Increase opacity gradually
            element.style.opacity = opacity;
        } else {
            clearInterval(intervalID);  // Stop once fully visible
        }
    }, 10);  // 10ms interval for smooth animation
}
