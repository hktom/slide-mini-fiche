<div id="slideOut">
  <div class="slideOutTab">
    <div>
    <?php echo $label['about'];?>
    </div>
  </div>
  
  <div class="modal-content">
    <div class="modal-body">
      <div class="container-fluid w-100 px-0">
            <div class="row">
       
            <div class="date-mini-fiche"><?php echo $label['last_update'];?> : 
            <?php echo renderData($data[0]['date'], $settings['language']); ?></div>
       
       <div class="mini-fiche-title"><?php echo $data[0]['title'];?></div>
       
          <?php if($data[0]['img']):?>
          <div class="col-6">
          <img class="w-100" src="<?php echo $data[0]['img']; ?>"/>
          </div>
          <?php endif;?>

       <div class="col-6">
          <div class="container-fluid px-0" style="margin-top:50%">
          <?php echo button_icon($data[0]['site_web'], $settings['website_icon'], 'mini_fiche_color_icon_1', 'mini_fiche_bgcolor_icon_1', $settings['size_icon_1'], 'Website');?>
          
          <?php echo button_icon('mailto:'.$data[0]['email'], $settings['email_icon'], 
          'mini_fiche_color_icon_2', 'mini_fiche_bgcolor_icon_2', $settings['size_icon_2'], 'Email');?>
        
          <?php echo button_icon($data[0]['lien_externe'], $settings['links_icon'], 
          'mini_fiche_color_icon_3', 'mini_fiche_bgcolor_icon_3', $settings['size_icon_3'], 'Liens externe');?>
        
          </div>
       </div>

       </div>
    </div>

    <?php

        echo simple_field_icon($settings['title_icon_size'], $data[0]['country'], $settings['native_country_icon']);

        echo secteurs_terms_field_icon($settings['title_icon_size'], $data[0]['categorie'], $data[0]['secteurs'], $settings['terms_icon']);

        echo  countries_field($label['region_impacted'], $data[0]['country_deploiement'], $data[0]['autre_zone']);

        echo simple_field($label['annee_creation_entreprise'], $data[0]['year']);

        echo simple_field($label['nombre_employe'], $data[0]['employe']);

        echo simple_field($label['description_solution'], $data[0]['description_de_la_solution']);

        //echo simple_field($label['categorie_solution'], $data[0]['categorie']);

        echo simple_field($label['stade_de_developpement'], $data[0]['stade']);

        echo simple_field($label['investisseur'], $data[0]['investisseur']);
        
        echo simple_field($label['accompagnement_par_une_structure'], $data[0]['accompagnement']);
        
        echo simple_field($label['prix_et_distinctions_'], $data[0]['price_distinction']);
      

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