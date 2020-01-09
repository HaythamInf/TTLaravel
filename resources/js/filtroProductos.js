var slider = document.getElementById("rango_precio");
var output = document.getElementById("slider_precio");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = this.value;
}