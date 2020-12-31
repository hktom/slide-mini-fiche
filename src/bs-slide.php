<?php $fields=$settings['language']=='fr'?$fields_fr:$fields_en;?>
<style type="text/css">

#slideOut {
  margin-top:165px;
  position: fixed;
  width: 350px;
  z-index:8888 !important;
  /* height: 800px; */
  top: 30px;
  right: -350px;
  /* Animation  */
  transition-property: all;
  transition-duration: .5s;
  transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
}


/* Display slideOut */

.showSlideOut {
  right: 0px !important;
}


/* Tab */

.slideOutTab {
  margin-top: 50px;
  position: absolute;
  left: -40px;
  height: 200px;
  width: 40px;
  cursor:pointer !important;
  /* -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
  box-shadow: 0 5px 15px rgba(0, 0, 0, .5); */
  /* background: #F2AB34; */
  /* border-radius: 15px 0px 0px 15px */
}

.slideOutTab div {
  text-align: center;
  position: relative;
  right: 70px;
  top: 90px;
  /* background: #F2AB34; */
  width: 180px;
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  writing-mode: lr-tb;
}

.modal-content{
  border-radius: 0px !important;
}

.modal-body {
    height: 500px;
    overflow-y: scroll;
    border-radius: 0px !important;
}

/* width */
.modal-body::-webkit-scrollbar{
  width: 7px;
}

/* .modal-body::-moz-scrollbar{
  width: 10px;
} */

/* Track */
.modal-body::-webkit-scrollbar-track{
  background: transparent; 
}

/* .modal-body::-moz-scrollbar-track {
  background: #f1f1f1; 
} */
 
/* Handle */
.modal-body::-webkit-scrollbar-thumb{
  background: #DA4039; 
}

/* .modal-body::-moz-scrollbar-thumb {
  background: #888; 
} */

/* Handle on hover */
.modal-body::-webkit-scrollbar-thumb:hover{
  background: #DA4039; 
}

/* .modal-body::-moz-scrollbar-thumb:hover{
  background: #555; 
} */


</style>


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

       <div class="col-6">
       <div class="mini-fiche-title"><?php echo get_the_title(); ?></div>
       <img class="w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"/>
       </div>

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