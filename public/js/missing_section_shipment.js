

function validation_1() {

    // Get the checkbox
   var checkBox_awb_copy = document.getElementById("awb_copy");
   var file_awb_copy = document.getElementById("file_awb_copy");
   
   var checkBox_manifest = document.getElementById("manifest");
   var file_manifest = document.getElementById("file_manifest");
   
   var checkBox_photos = document.getElementById("photos");
   var file_photos = document.getElementById("file_photos");
   
   var checkBox_others = document.getElementById("others");
   var file_others = document.getElementById("file_others");

     
   
     
   if (checkBox_awb_copy.checked == true){
     file_awb_copy.style.display = "block";
     } else {
       file_awb_copy.style.display = "none";
     }
   
     if (checkBox_manifest.checked == true){
     file_manifest.style.display = "block";
     } else {
       file_manifest.style.display = "none";
     }
   
     if (checkBox_photos.checked == true){
       file_photos.style.display = "block";
     } else {
       file_photos.style.display = "none";
     }
   
     if (checkBox_others.checked == true){
       file_others.style.display = "block";
     } else {
       file_others.style.display = "none";
     }
   }



    // Get the checkbox
    var closet_missing_section_shipment = document.getElementById("closet_missing_section_shipment");
    var open_missing_section_shipment = document.getElementById("open_missing_section_shipment");
    var container_missing_section_shipment= document.getElementById("container_missing_section_shipment");
    
    container_missing_section_shipment.style.display = "none";
    closet_missing_section_shipment.style.display = "none";
    
    closet_missing_section_shipment.addEventListener("click", function(evento){
      container_missing_section_shipment.style.display = "none";
      open_missing_section_shipment.style.display = "block";
      closet_missing_section_shipment.style.display = "none";
        });
        
        open_missing_section_shipment.addEventListener("click", function(evento){
          container_missing_section_shipment.style.display = "block";
          closet_missing_section_shipment.style.display = "block";
          open_missing_section_shipment.style.display = "none";
        });
