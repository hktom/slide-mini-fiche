<?php

function get_data($params){
    $data=[];
    $_query = new WP_Query(array(
        'post_type' => $params['post_type'],
        'post__in'=>$params['post_in'],
        ));
    
    if ($_query->have_posts()) {
        while ($_query->have_posts()) {
            $_query->the_post();
            $data[]=array(
                //'date'=>get_the_date('j M Y'),
                'title'=>get_the_title(),
                'img'=>get_the_post_thumbnail_url(get_the_ID(),'full'),
                'date'=>get_the_date('j/m/Y'),
                'site_web'=>get_field('lien_vers_la_solution'),
                'lien_externe'=>get_field('liens_ext'),
                'email'=>get_field('adress_mail_contact'),
                'country'=>get_field('pays_enreg_structure'),
                'country_deploiement'=>get_field('pays_solution_deployee'),
                'autre_zone'=>get_field('autre_zone'),
                'year'=>get_field('annee_creation_entreprise'),
                'employe'=>get_field('nombre_employe'),
                'presentation_de_la_solution'=>get_field('la_solution'),
                'description_de_la_solution'=>get_field('description_solution'),
                'categorie'=>get_field('categorie_solution'),
                'autre_categorie_solution'=>get_field('other_categorie_solution'),
                'stade'=>get_field('stade_de_developpement'),
                'fonds'=>get_field('fonds'),
                'type'=>get_field('type_fonds'),
                'montant'=>get_field('montant_fonds'),
                'la_solution_a_deja_leve_de_fond'=>get_field('solution_leve_fonds'),
                'la_solution_a_deja_leve_de_fond_yes'=>get_field('solution_leve_fonds_oui'),
                'investisseur'=>get_field('investisseur'),
                'suivie_structure'=>get_field('suivie_structure'),
                'suivie_structure_yes'=>get_field('suivie_structure_oui'),
                'accompagnement'=>get_field('accompagnement_par_une_structure'),
                'solution_price'=>get_field('solution_prix'),
                'price_distinction'=>get_field('prix_et_distinctions_'),
                'mot_clé'=>get_field('un_chiffre__mot_cle'),
                'a_lire'=>get_field('a_lire'),
                'link'=>get_permalink(),
                'secteurs'=>get_the_terms($_query->ID, 'mf_secteurs'),
                //'content'=>get_the_content(),
                //'categories'=>get_the_category(),
                //'post_tag' => get_the_tags(),
                // 'fonction'=>get_field('fonction'),
                // 'on_board'=>get_field('on_board'),
                // 'banner_image'=>get_field('banner_image'),
                // 'url'=>get_field('url'),
            );            
        }
        wp_reset_postdata();
       
      }

    return $data;
}