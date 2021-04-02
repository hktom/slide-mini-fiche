<?php
function simple_field_icon($label, $data, $icon)
{
    $html="";
    if($data!="" && $icon!=""){
    
    $html.=' <div class="my-1">
        <div class="d-flex justify-content-start mt-4">
        <div class="title_icon '.$label.'" style="margin-right:5px">
            <i class="'.$icon['value'].'"></i>
         </div>
        <div class="mini_fiche_slide_content"> '.$data.' </div>
        </div>
     </div>';
    
    }

    return $html;

}

function simple_field($label, $data)
{
    $html="";
    if($data!=""){

    $html.='
        <div class="my-4">
        <div class="mini_fiche_slide_label">'.$label.'</div>
        <div class="mini_fiche_slide_content">'.$data.'</div>
     </div> 
        ';
    }

    return $html;

}


function countries_field($label, $data, $data_2)
{
    $html="";

    if($data!="" || $data_2!=""){
        $html.='<div class="my-4">
        <div class="mini_fiche_slide_label">'.$label.' </div>
        <div class="mini_fiche_slide_content">';

    //countries
     $countries = explode(",", $data);
     for ($i = 0; $i <= count($countries) - 1; $i++) {
         if ($countries[count($countries) - 1] != $countries[$i]):
             $html.= $countries[$i] . " |";
         else:
             $html.= $countries[$i];
         endif;
     }

    //others zone
    $countries = explode(",", $data_2);
     for ($i = 0; $i <= count($countries) - 1; $i++) {
         if ($countries[count($countries) - 1] != $countries[$i]):
             $html.= $countries[$i] . " |";
         else:
             $html.= $countries[$i];
         endif;
     }
     $html.= '</div></div>';
    }

    return $html;
}

function secteurs_terms_field_icon($label, $data, $secteurs, $icon)
{

    //$terms = get_the_terms($query->ID, 'mf_secteurs');
    $html="";
    if($icon!='' && $data !=""){

    $html.='<div class="mt-4 d-flex justify-content-start">
       <div class="title_icon '.$label.'" style="margin-right:5px">
       <i class="'.$icon['value'].'"></i> 
       </div>
       <div class="mini_fiche_slide_content">'.$data.'<br/>';

    foreach ($secteurs as $key => $value) {
        if (count($secteurs) - 1 != $key) {
            $html.=$value->name . " | ";
        } else {
            $html.=$value->name;
        }

    }

 $html.=' </div> </div>';
    }

    return $html;
    
}

function secteurs_terms_field($label, $data, $secteurs)
{

    //$terms = get_the_terms($query->ID, 'mf_secteurs');
    $html="";

    $html.= '<div class="my-4">
       <div class="mini_fiche_slide_label">' . $label . '</div>
       <div class="mini_fiche_slide_content">'.$data.'<br/>';

    foreach ($terms as $key => $value) {
        if (count($terms) - 1 != $key) {
            $html.= $value->name . " | ";
        } else {
            $html.= $value->name;
        }

    }

    $html.='</div></div>';
    return $html;
    
}


function renderData($mydate, $lang){
    $date_fr=["jan", "fev", "mars", "avr", "mai", "juin", "juil", "août", "sep", "oct", "nov", "déc"];
    $date_en=["jan", "feb", "march", "apr", "may", "june", "july", "aug", "sep", "oct", "nov", "dec"];

    $date=$lang=='fr'?$date_fr:$date_en;
    $parts = explode("/", $mydate);
    return  $parts[0]." ".$date[$parts[1]-1]." ".$parts[2];
}



function button_icon($data, $icon, $color, $bgColor, $icon_size, $label){
    $html='';
    if($data!=""){    
    $html.='
    <a target="_blank" title="'.$label.'" href="'.$data.'" style="transition:0.2s" class="p-2 '.$icon_size.' '.$bgColor.' '.$color.' 
    "><i class="'.$icon['value'].'"></i></a>';
    }

    return $html;

}