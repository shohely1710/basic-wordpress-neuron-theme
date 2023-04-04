
// alert(neuron_pf.format);
; (function($){
    $(document).ready(function(){
        $("#post-formats-select .post-format").on("click", function(){
            if($(this).attr("id")== "post-format-image"){
                $("#_neuron_image_information").show();
            }else{
                $("#_neuron_image_information").hide();
            }
        });

  

    if(neuron_pf.format != "image") {
        $("#_neuron_image_information").hide();
    }

});


})(jQuery);