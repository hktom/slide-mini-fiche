<?php $fields=$settings['language']=='fr'?$fields_fr:$fields_en;?>
<style type="text/css"></style>
<link href="<?php echo plugin_dir_url( __DIR__ ).'/src/main.css';?>" rel="stylesheet">


<!-- // SlideOut -->
<div id="slideOut">
<!--   // Tab -->
  <div class="slideOutTab">
    <div>
    <?php echo $fields['about'];?>
    </div>
  </div>
  
  <div class="modal-content">
    
  <!-- <div class="modal-header"> 
    <h4 class="modal-title">La mini fiche</h4> 
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>  
  </div> -->

    <div class="modal-body">
      <!-- <p>One fine body…</p> -->

      <div class="container-fluid w-100 px-0">
       <div class="row">
       
       <div class="date-mini-fiche"><?php echo $fields['last_update'];?> : <?php renderData(get_the_date('j/m/Y'), $settings['language']); ?></div>
       
       <div class="mini-fiche-title"><?php echo get_the_title(); ?></div>
       
       <?php if(get_the_post_thumbnail_url(get_the_ID(), 'full')):?>
       
       <div class="col-6">
       <img class="w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"/>
       </div>
       <?php endif;?>

       <div class="col-6">
          <div class="container-fluid px-0" style="margin-top:50%">
          <?php button_icon('lien_vers_la_solution', $settings['website_icon'], 'mini_fiche_color_icon_1', 'mini_fiche_bgcolor_icon_1', $settings['size_icon_1'], $fields['website_link']);?>
          
          <?php button_icon('adress_mail_contact', $settings['email_icon'], 
          'mini_fiche_color_icon_2', 'mini_fiche_bgcolor_icon_2', $settings['size_icon_2'], $fields['others_link']);?>
        
          <?php button_icon('liens_ext', $settings['links_icon'], 
          'mini_fiche_color_icon_3', 'mini_fiche_bgcolor_icon_3', $settings['size_icon_3'], $fields['email_link']);?>
        
          </div>
       </div>

       </div>
    </div>

    <?php

        simple_field($settings['title_icon_size'], "pays_enreg_structure", $settings['native_country_icon']);
        
        $k = 0;
        foreach ($fields as $key => $value) {
            if ($k != 5 && $k != 0) {
                simple_field($value, $key);
            } else if ($k == 0) {
                secteurs_terms_field($key, $settings['title_icon_size'], $settings['terms_icon']);
                countries_field($fields['region_impacted']);
            } else {
                compose_field("type_fonds", "montant_fonds", $value);
            }

            $k++;
            //if($K==5) break;
        }
   ;?>

    </div>


    <!-- <div class="modal-footer"> </div> -->
  </div>

</div>

<script type="text/javascript">
this.$slideOut = $('#slideOut');
// Slideout show

$("#slideOut").toggleClass('showSlideOut');

this.$slideOut.find('.slideOutTab').on('click', function() {
  $("#slideOut").toggleClass('showSlideOut');
});

</script>