function divi_child_theme_setup() {
   if ( class_exists('ET_Builder_Module')) {
      get_template_part( 'custom-modules/card_blurb' );

      $cbm3 = new FDL_Builder_Module_Card_Blurb();
      
      add_shortcode( 'et_pb_blurb4', array($cbm3, '_shortcode_callback') );
   }
}
add_action('et_builder_ready', 'divi_child_theme_setup');
