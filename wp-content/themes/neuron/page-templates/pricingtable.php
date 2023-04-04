<?php 

/**
 * Template Name: Pricing Table
 */

 get_header();

 $pricing = get_post_meta(get_the_ID(), "_neuron_pt_pricing_table", true);
 $services = get_post_meta(get_the_ID(), "_neuron_service", true);

 ?>
<?php
       
// print_r($pricing); ?>


<div class="container">
    <div class="row">
        <?php

        foreach($pricing as $ptc):           

        ?>
        
        <div class="col-md-4">
            <h2><?php echo esc_html($ptc['_neuron_pt_pricing_caption']) ?></h2>

            <ul>

                    <?php 
                        foreach($ptc['_neuron_pt_pricing_option'] as $pto):

                    ?>

                    <li><?php echo esc_html($pto); ?></li>


                    <?php

                    endforeach;

                    ?>

            </ul>

            <h3><?php echo esc_html($ptc['_neuron_pt_price']) ?></h3>
            
        </div>

       

        <?php 
            endforeach;

        ?>

    </div>

    <div class="row mt10">
        <?php 
           foreach($services as $service):
                $neuron_service_icon = $service['_neuron_icon'];
        
        ?>

        <div class="col-md-4">
            <i class="fa <?php echo esc_attr($neuron_service_icon); ?>"></i>
            <h2><?php echo esc_html($service['_neuron_title']); ?></h2>
            <?php echo apply_filters("the_content", $service['_neuron_content']); ?>
        </div>

        <?php 

           endforeach;          
        
        ?>

    </div>
</div>




<?php
 get_footer();