<?php

declare(strict_types=1);
if ( ! defined('ABSPATH') || ! defined('WP_LIBRARY')  || ! defined( 'rozard' ) || ! defined( 'rozard_forms' )  ){ exit; }


if ( ! function_exists('proto_render_time_field') ){ 

    function proto_render_time_field( $field_id, $attrb, $field ){

        $value = ( ! empty ( $field['value' ]) ) ? $field['value'] : current_time('h:m:s') ;

        printf('<input type="time" id="%s" name="%s" %s value="%s">',
            esc_attr( $field_id ),
            esc_attr( $field_id ), 
            $attrb,
            esc_attr( $value )
        );
    }
}
