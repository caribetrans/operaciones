// Get the checkbox
var closet_damage_section_shipment = document.getElementById("closet_damage_section_shipment");
var open_damage_section_shipment = document.getElementById("open_damage_section_shipment");
var container_damage_section_shipment= document.getElementById("container_damage_section_shipment");

container_damage_section_shipment.style.display = "none";
closet_damage_section_shipment.style.display = "none";

closet_damage_section_shipment.addEventListener("click", function(evento){
    container_damage_section_shipment.style.display = "none";
    open_damage_section_shipment.style.display = "block";
    closet_damage_section_shipment.style.display = "none";
    });
    
    open_damage_section_shipment.addEventListener("click", function(evento){
        container_damage_section_shipment.style.display = "block";
        closet_damage_section_shipment.style.display = "block";
        open_damage_section_shipment.style.display = "none";
    });
    