<?php
function simple_field($label, $field, $icon='')
{

    if (get_field($field) != "") {
        ?>

 <?php if($icon!=''):;?>

 <div class="my-1">
       <div class="d-flex justify-content-start mt-4">
       <div class="title_icon <?php echo $label;?>" style="margin-right:5px">
           <i class="<?php echo $icon['value'];?>"></i>
        </div>
       <div class="mini_fiche_slide_content"><?php the_field($field);?> </div>
       </div>
       
    </div>

 <?php else:?>

    <div class="my-4">
       <div class="mini_fiche_slide_label"><?php echo $label; ?></div>
       <div class="mini_fiche_slide_content"><?php the_field($field);?> </div>
    </div>

<?php endif;?>

   <?php
}

}

function compose_field($field_1, $field_2, $label)
{

    if (get_field($field_1) != "" && get_field($field_2) != "") {
        ?>
   <div class="my-4">
       <div class="mini_fiche_slide_label"><?php echo $label; ?></div>
       <div class="mini_fiche_slide_content">
       <?php the_field($field_1);?> pour <?php the_field($field_2);?> €
       </div>
    </div>

   <?php
}

}

function countries_field($label)
{

    echo '<div class="my-4">
       <div class="mini_fiche_slide_label">'.$label.' </div>
       <div class="mini_fiche_slide_content">';
    $countries = explode(",", get_field("pays_solution_deployee"));
    for ($i = 0; $i <= count($countries) - 1; $i++) {
        if ($countries[count($countries) - 1] != $countries[$i]):
            echo $countries[$i] . " |";
        else:
            echo $countries[$i];
        endif;
    }
    echo '
  </div>
  </div>
  ';
}

function secteurs_terms_field($field, $label, $icon='')
{

    $terms = get_the_terms($query->ID, 'mf_secteurs');

    if($icon!=''){

        echo '<div class="mt-4 d-flex justify-content-start">
       <div class="title_icon '.$label.'" style="margin-right:5px">
       <i class="'.$icon['value'].'"></i> 
       </div>
       <div class="mini_fiche_slide_content">';
    the_field($field);
    echo "<br/>";

    foreach ($terms as $key => $value) {
        if (count($terms) - 1 != $key) {
            echo $value->name . " | ";
        } else {
            echo $value->name;
        }

    }

    echo '
  </div>
  </div>
  ';
    }
    else
    {
        echo '<div class="my-4">
       <div class="mini_fiche_slide_label">' . $label . '</div>
       <div class="mini_fiche_slide_content">';
    the_field($field);
    echo "<br/>";

    foreach ($terms as $key => $value) {
        if (count($terms) - 1 != $key) {
            echo $value->name . " | ";
        } else {
            echo $value->name;
        }

    }

    echo '
  </div>
  </div>
  ';
    }
    
}


function renderData($mydate, $lang){
    $date_fr=["jan", "fev", "mars", "avr", "mai", "juin", "juil", "août", "sep", "oct", "nov", "déc"];
    $date_en=["jan", "feb", "march", "apr", "may", "june", "july", "aug", "sep", "oct", "nov", "dec"];

    $date=$lang=='fr'?$date_fr:$date_en;
    $parts = explode("/", $mydate);
    echo  $parts[0]." ".$date[$parts[1]-1]." ".$parts[2];
}

$fields_fr = [
    "categorie_solution" => "Catégorie",
    "description_solution" => "Description",
    "annee_creation_entreprise" => "Année de création",
    "nombre_employe" => "Nb d’employé.e.s",
    "stade_de_developpement" => "Stade",
    "Besoin en financement"=>"Besoin en financement",
    "investisseur" => "Investisseurs",
    "accompagnement_par_une_structure" => "Accompagnement par une structure",
    "prix_et_distinctions_" => "Prix et distinctions",
    "last_update" => "Date de mise à jour",
    "website_link" => "Lien du Website",
    "others_link" => "Autres liens",
    "email_link" => "Ecrire un email",
    "native_country" => "Pays d’enregistrement de la structure",
    "region_impacted" => "Pays de déploiement",
    "about" => "A propos",
    
];

$fields_en = [
    "categorie_solution" => "Categories",
    "description_solution" => "Description",
    "annee_creation_entreprise" => "Year of establishment",
    "nombre_employe" => "Number of employees",
    "stade_de_developpement" => "Maturity level",
    "Besoin en financement"=>"Fundraising need",
    "investisseur" => "Curent investor(s)",
    "accompagnement_par_une_structure" => "Support(s) via hubs, incubations, programs",
    "prix_et_distinctions_" => "Awards and honors",
    "last_update" => "Last update",
    "website_link" => "Website link",
    "others_link" => "Others link",
    "email_link" => "Send en email",
    "native_country" => "Native country",
    "region_impacted" => "Regions impacted",
    "about" => "About",
];


function button_icon($field, $icon, $color, $bgColor, $icon_size, $label){
    if(get_field($field)!=""){
        //'.get_field($field).'
        echo '
    <a target="_blank" title="'.$label.'" href="#" style="transition:0.2s" class="p-2 '.$icon_size.' '.$bgColor.' '.$color.' 
    "><i class="'.$icon['value'].'"></i></a>';
    }
}