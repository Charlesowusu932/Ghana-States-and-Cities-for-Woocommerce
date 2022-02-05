<?php
/**
 * Plugin Name: Ghana States and Cities for Woocommerce
 * Plugin URI: #
 * Author: Kofi Design
 * Author URI: #
 * Description: Add CIty Zones to Wocommerce Shipping.
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: ghana-states-and-cities-for-woocommerce
*/

// add basic plugin security.
defined( 'ABSPATH' ) or die;

add_filter( 'woocommerce_states', 'Ghana_states' );

function Ghana_states( $states ) {

    $map = array();

    $cities = array(
        'AA1' => array(
            'Region'     => 'Greater Accra,',
            'city' => '37',
        ),
        'AA2' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Avenor'
        ),
        'AA3' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Abeka'
        ),
        
        'AA4' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Abelempke'
        ),

        'AA5' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Ablekuma'
        ),

        'AA6' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Abossey Okai'
        ),

        'AA7' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Accra Mall'
        ),
        'AA8' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Accra New Town'
        ),

        'AA9' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Achimota'
        ),

        'AA10' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Adabraka'
        ),

        'AA11' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Addogono'
        ),

        'AA12' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Adenta'
        ),

        'AA13' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Adjen Kotoku'
        ),

        'AA14' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Adjiringanor'
        ),

        'AA15' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Afienya'
        ),

        'AA16' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Agbogba'
        ),

        'AA17' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Agege'
        ),

        'AA18' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Airport'
        ),

        'AA19' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Akweteyman'
        ),

        'AA20' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Alajo'
        ),

        'AA21' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Amasaman'
        ),

        'AA22' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Amomoley'
        ),

        'AA23' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Amrahia'
        ),

        'AA24' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Ashaley Botwe'
        ),

        'AA25' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Ashesi'
        ),

        'AA26' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Ashiaman'
        ),

        'AA27' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Ashongman'
        ),

        'AA28' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Asylum Down'
        ),

        'AA29' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Atomic Down'
        ),

        'AA30' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Awoshie'
        ),

     


        'AA31' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Berekuso'
        ),



        'AA32' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Bortianor'
        ),



        'AA33' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Buade'
        ),



        'AA34' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Bubuashie'
        ),



        'AA35' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Burma Camp'
        ),



        'AA36' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Cantoment'
        ),



        'AA37' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Chorkor'
        ),



        'AA38' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Circle'
        ),



        'AA39' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Danfa'
        ),



        'AA40' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Dansoman'
        ),



        'AA41' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Darkuman'
        ),



        'AA42' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Dawenya'
        ),



        'AA43' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Dome'
        ),



        'AA44' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Dzorwulu'
        ),



        'AA45' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'East Legon'
        ),



        'AA46' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'East Legon Hills'
        ),



        'AA47' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Fadama'
        ),



        'AA48' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Gbawe'
        ),



        'AA49' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Gbetsile'
        ),



        'AA50' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Haasto'
        ),



        'AA51' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Jamestown'
        ),



        'AA52' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Kaneshie'
        ),



        'AA53' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Kasoa'
        ),



        'AA54' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Kanda'
        ),



        'AA55' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Kokomlemle'
        ),

        'AA55a' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Korle Bu'
        ),




        'AA56' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Kotobabi'
        ),



        'AA57' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Krokobite'
        ),



        'AA58' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Kwabenya'
        ),



        'AA59' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Kwashiman'
        ),

        'AA60' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Labadi'
        ),

        'AA61' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Labone'
        ),

    

        'AA62' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Laterbiokoshie'
        ),


        'AA63' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Lakeside Estate'
        ),


        'AA64' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Lapaz'
        ),


        'AA65' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Lashibi'
        ),


        'AA66' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Legon'
        ),

        'AA67' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Maamobi'
        ),

        'AA68' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Madina'
        ),



        'AA69' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Makola'
        ),



        'AA70' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Mallam'
        ),



        'AA71' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Mamprobi'
        ),



        'AA72' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Maamobi'
        ),



        'AA73' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Mataheko'
        ),



        'AA74' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Mccarthy Hills'
        ),



        'AA75' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Medie'
        ),



        'AA76' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Michelle Camp'
        ),



        'AA77' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Mile 7'
        ),



        'AA78' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Ministries'
        ),



        'AA79' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Maamobi'
        ),



        'AA80' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Nanakrom'
        ),



        'AA81' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Nautical'
        ),



        'AA82' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Nii Boi Town'
        ),



        'AA83' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Nima'
        ),



        'AA84' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'North Legon'
        ),



        'AA85' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Nungua'
        ),



        'AA86' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Ofankor'
        ),



        'AA87' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Ogbojo'
        ),



        'AA88' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Omanjor'
        ),



        'AA89' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Osu'
        ),



        'AA90' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Oyarifa'
        ),



        'AA91' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Oyibi'
        ),



        'AA92' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Pantang'
        ),



        'AA93' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Pokuase'
        ),



        'AA94' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Prampram'
        ),



        'AA95' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Ridge'
        ),



        'AA96' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Roman Ridge'
        ),



        'AA97' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Sakumono'
        ),


        'AA98' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Santa Maria'
        ),


        
        'AA99' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Santeo'
        ),

        
        'AA100' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Sebrepor'
        ),

        'AA101' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Shiashie'
        ),



        'AA102' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Sowutwom'
        ),



        'AA103' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Spintex'
        ),



        'AA104' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tantra Hill'
        ),



        'AA105' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 2'
        ),



        'AA106' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 1'
        ),



        'AA107' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 10'
        ),



        'AA108' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 12'
        ),



        'AA109' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 3'
        ),



        'AA110' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 4'
        ),



        'AA111' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 5'
        ),



        'AA112' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 6'
        ),



        'AA113' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 7'
        ),



        'AA114' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 8'
        ),



        'AA115' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 9'
        ),



        'AA116' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 19'
        ),



        'AA117' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 20'
        ),



        'AA118' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 22'
        ),



        'AA119' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 25'
        ),



        'AA120' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Comm 11'
        ),



        'AA121' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tema Kpone'
        ),



        'AA122' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tesano'
        ),



        'AA123' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Teshie'
        ),


        'AA124' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tiafa'
        ),



        'AA125' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Trassaco'
        ),


        'AA126' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tseaddo'
        ),



        'AA127' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Tudu'
        ),



        'AA128' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'Weija'
        ),


        'AA129' => array(
            'Region'     => 'Greater Accra,',
            'city' => 'West Land'
        ),

       
















        'AF' => array(
            'Region'     => 'Ahafo'
        ),
        'AH' => array(
            'Region'     => 'Ashanti'
        ),
        'BA' => array(
            'Region'     => 'Brong-Ahafo'
        ),

        'BO' => array(
            'Region'     => 'Bono'
        ),

        'BE' => array(
            'Region'     => 'Bono East'
        ),

        'CP' => array(
            'Region'     => 'Central'
        ),

        'EP' => array(
            'Region'     => 'Eastern'
        ),

        'NE' => array(
            'Region'     => 'North East'
        ),

        'NP' => array(
            'Region'     => 'Northern'
        ),

        'OT' => array(
            'Region'     => 'Oti'
        ),

        'SV' => array(
            'Region'     => 'Savannah'
        ),

        'UE' => array(
            'Region'     => 'Upper East'
        ),
        
        'UW' => array(
            'Region'     => 'Upper West'
        ),


        'TV' => array(
            'Region'     => 'Volta'
        ),
        

        'WP' => array(
            'Region'     => 'Western'
        ),
        
        'WN' => array(
            'Region' => 'Western North'
        ),
        
        
        
        
        
        
        
        
    );

    foreach ( $cities as $city => $cityValue ) {
        $map[$city] = $cityValue['Region'] . ' '. $cityValue['city'];
    }
    
    $states['GH'] = $map;
    
    return $states;
}