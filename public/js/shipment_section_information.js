
// Get the checkbox
var closet_section_information = document.getElementById("closet_section_information");
var open_section_information = document.getElementById("open_section_information");
var container_section_information= document.getElementById("container_section_information");

container_section_information.style.display = "block";
open_section_information.style.display = "none";


closet_section_information.addEventListener("click", function(evento){
container_section_information.style.display = "none";
open_section_information.style.display = "block";
closet_section_information.style.display = "none";
});

open_section_information.addEventListener("click", function(evento){
container_section_information.style.display = "block";
closet_section_information.style.display = "block";
open_section_information.style.display = "none";
});
