<?php

new PhoenixTeam_Styles();

class PhoenixTeam_Styles {

    public function __construct ()
    {
        add_action('wp_enqueue_scripts', array($this, 'phoenix_theme_styles')); // Add Theme Stylesheets
        add_action('wp_enqueue_scripts', array($this, 'conditional_styles')); // Add Conditional Page Scripts
    }

    // Load styles
    public function phoenix_theme_styles ()
    {
        global $data;
        $port_layout = isset($data['port_layout']) ? $data['port_layout'] : '2-cols';
        $theme_skin = isset($data['theme_skin']) ? $data['theme_skin'] : 'default';
        $custom_skin = isset($data['custom_skin']) ? $data['custom_skin'] : false;
        $custom_skin_color = isset($data['custom_skin_color']) ? $data['custom_skin_color'] : null;
        $css_code = isset($data['css_code']) ? $data['css_code'] : null;
        $footer_skin = isset($data['footer_skin']) ? $data['footer_skin'] : 'light';

        switch ($port_layout) {
            case '2-cols': $cube_css = 'cubeportfolio-2'; break;
            case '3-cols': $cube_css = 'cubeportfolio-3'; break;
            case 'full': $cube_css = 'cubeportfolio-3'; break;
            case '4-cols': $cube_css = 'cubeportfolio-4'; break;
            default: $cube_css = 'cubeportfolio-2'; break;
        }

        wp_register_style(THEME_SLUG . '-bootstrap', THEME_URI . '/assets/css/bootstrap.min.css', array(), '3.2.0', 'all');
        wp_register_style(THEME_SLUG . '-navstylechange', THEME_URI . '/assets/css/navstylechange.css', array(), '1.0', 'all');
        wp_register_style(THEME_SLUG . '-jcarousel', THEME_URI . '/assets/css/jcarousel.responsive.css', array(), '1.0', 'all');
        wp_register_style(THEME_SLUG . '-fontello', THEME_URI . '/assets/css/fontello.css', array(), '1.0', 'all');
        wp_register_style(THEME_SLUG . '-fontawesome', THEME_URI . '/assets/css/font-awesome.min.css', array(), '4.1.0', 'all');
        wp_register_style(THEME_SLUG . '-responsive', THEME_URI . '/assets/css/responsive.css', array(), '1.0', 'all');
        wp_register_style(THEME_SLUG . '-bxslider', THEME_URI . '/assets/css/jquery.bxslider.css', array(), '1.0', 'all');
        wp_register_style(THEME_SLUG . '-testimonialrotator', THEME_URI . '/assets/css/testimonialrotator.css', array(), '1.0', 'all');
        wp_register_style(THEME_SLUG . '-magnific', THEME_URI . '/assets/css/magnific.css', array(), '1.0', 'all');
        wp_register_style(THEME_SLUG . '-footer-dark-skin', THEME_URI . '/assets/css/layouts/dark-skin.css', array(), '1.0', 'all');
        wp_register_style(THEME_SLUG . '-cubeportfolio', THEME_URI . '/assets/css/'. $cube_css .'.min.css', array(), '1.0', 'all');
        wp_register_style(THEME_SLUG . '-main', get_stylesheet_uri(), array(), '1.0', 'all');

        if ($theme_skin != 'default' && !$custom_skin) {
            wp_register_style(THEME_SLUG . '-theme-skin', THEME_URI . '/assets/css/layouts/'. $theme_skin .'.css', array(), '1.0', 'all');
        }

        wp_enqueue_style(THEME_SLUG . '-bootstrap');
        wp_enqueue_style(THEME_SLUG . '-navstylechange');
        wp_enqueue_style(THEME_SLUG . '-cubeportfolio');
        wp_enqueue_style(THEME_SLUG . '-jcarousel');
        wp_enqueue_style(THEME_SLUG . '-fontello');
        wp_enqueue_style(THEME_SLUG . '-fontawesome');
        wp_enqueue_style(THEME_SLUG . '-main');
        wp_enqueue_style(THEME_SLUG . '-bxslider');
        wp_enqueue_style(THEME_SLUG . '-testimonialrotator');
        wp_enqueue_style(THEME_SLUG . '-magnific');
        wp_enqueue_style(THEME_SLUG . '-responsive');

        if ($footer_skin == 'dark')
            wp_enqueue_style(THEME_SLUG . '-footer-dark-skin');

        if ($theme_skin != 'default')
            wp_enqueue_style(THEME_SLUG . '-theme-skin');

        if ($custom_skin && $custom_skin_color) {
            $custom_skin_css =
            '/* Custom Color CSS */' . "\n" .
                'a {color: '.$custom_skin_color.';}' . "\n" .
                '.hi-icon-effect .hi-icon {color: '.$custom_skin_color.';}' . "\n" .
                'ul.social-links li a:hover {color: '.$custom_skin_color.';}' . "\n" .
                '.search-active i {color: '.$custom_skin_color.';}' . "\n" .
                '.phoenix-menu-wrapper li a:hover {color:'.$custom_skin_color.' !important;  border-color:'.$custom_skin_color.';}' . "\n" .
                '.phoenix-menu-wrapper li.current a {color: '.$custom_skin_color.';}' . "\n" .
                '.phoenix-menu-wrapper li:hover a {color: '.$custom_skin_color.'}' . "\n" .
                '.phoenix-menu-wrapper ul li ul {border-top:1px solid '.$custom_skin_color.';}' . "\n" .
                '.center-line {background: '.$custom_skin_color.';}' . "\n" .
                '.hi-icon-effect .hi-icon:after {background: '.$custom_skin_color.';}' . "\n" .
                '.grid figcaption {background: '.$custom_skin_color.';}' . "\n" .
                '.first-letter {background: '.$custom_skin_color.';}' . "\n" .
                '.list-check li i {color: '.$custom_skin_color.';}' . "\n" .
                '.blog-icon i {color: '.$custom_skin_color.';}' . "\n" .
                '.view-fifth .mask {background: '.$custom_skin_color.';}' . "\n" .
                '.jcarousel-control-prev, .jcarousel-control-next {color: '.$custom_skin_color.';}' . "\n" .
                '.jcarousel-control-prev:hover, .jcarousel-control-next:hover {color: '.$custom_skin_color.';}' . "\n" .
                '.page-in-name span {color: '.$custom_skin_color.';}' . "\n" .
                '.page-in-bread a {color: '.$custom_skin_color.';}' . "\n" .
                '.progress-bar-info {background-color: '.$custom_skin_color.';}' . "\n" .
                '.soc-about li a:hover{color:'.$custom_skin_color.';}' . "\n" .
                '.fact-icon {color: '.$custom_skin_color.';}' . "\n" .
                '.serv-marg i {color: '.$custom_skin_color.';}' . "\n" .
                '.serv-icon i {color: '.$custom_skin_color.';}' . "\n" .
                '.plan.featured h3 {color: '.$custom_skin_color.';}' . "\n" .
                '.plan.featured .price {color: '.$custom_skin_color.';}' . "\n" .
                '.btn-price {background-color: '.$custom_skin_color.';border-color: '.$custom_skin_color.';}' . "\n" .
                '.btn-price:hover {background-color: #fff;border-color: '.$custom_skin_color.';color:'.$custom_skin_color.';}' . "\n" .
                '.oops {color: '.$custom_skin_color.';}' . "\n" .
                '.ac-container input:checked + label, .ac-container input:checked + label:hover {color: '.$custom_skin_color.';}' . "\n" .
                '.ac-container label:hover { background: #f9f9f9; color:'.$custom_skin_color.'; }' . "\n" .
                '.cbp-l-filters-button .cbp-filter-item-active {background-color: '.$custom_skin_color.';border-color: '.$custom_skin_color.';}' . "\n" .
                '.cbp-l-filters-button .cbp-filter-counter:before {border-top: 4px solid '.$custom_skin_color.';}' . "\n" .
                '.cbp-l-filters-button .cbp-filter-counter {background-color: '.$custom_skin_color.';}' . "\n" .
                '.cbp-caption-zoom .cbp-caption-activeWrap {background-color: rgba(167, 147, 110,0.8);}' . "\n" .
                '.item-heart i {color: '.$custom_skin_color.';}' . "\n" .
                '.btn-item:hover {color: '.$custom_skin_color.';}' . "\n" .
                '.blog-category li i {color: '.$custom_skin_color.';}' . "\n" .
                '.tags-blog li a:hover {color: '.$custom_skin_color.';}' . "\n" .
                '.tweet_text a {color: '.$custom_skin_color.';}' . "\n" .
                '.cl-blog-type {color: '.$custom_skin_color.';}' . "\n" .
                '.cl-blog-name a:hover {color: '.$custom_skin_color.';}' . "\n" .
                '.cl-blog-read a:hover {color: '.$custom_skin_color.';}' . "\n" .
                '.pride_pg .current {color: '.$custom_skin_color.';border: 1px solid '.$custom_skin_color.';}' . "\n" .
                '.pride_pg a:hover {color: '.$custom_skin_color.';border:1px solid '.$custom_skin_color.';}' . "\n" .
                '.soc-blog li a:hover{color:'.$custom_skin_color.';}' . "\n" .
                '.comm_name {color: '.$custom_skin_color.';}' . "\n" .
                '.recentcomments a {color: #2E97DE !important;}' . "\n" .
                '.shortcode_tab_item_title:hover {color: '.$custom_skin_color.';}' . "\n" .
                '.shortcode_tab_item_title.active {color: '.$custom_skin_color.';}' . "\n" .
                '.tooltip_s {color: '.$custom_skin_color.';}' . "\n" .
                '.index_4_prev:hover {border:1px solid '.$custom_skin_color.';}' . "\n" .
                '.index_4_next:hover {border:1px solid '.$custom_skin_color.';}' . "\n" .
                '.phoenix-menu-wrapper ul li.current-menu-item a, .phoenix-menu-wrapper ul li.current_page_item a {color: '.$custom_skin_color.';}' . "\n" .
                '.wpb_accordion_header.ui-accordion-header-active a {color: '.$custom_skin_color.' !important;}' . "\n" .
                '.phoenix-team-progerssbar-outside .vc_single_bar.bar_turquoise .vc_bar {background-color: '.$custom_skin_color.' !important;}' . "\n" .
                '.wpb_accordion_header.ui-state-hover a{color: '.$custom_skin_color.' !important;}' . "\n" .
                '.widget ul li > a:before {color: '.$custom_skin_color.';}' . "\n" .
                '.phoenix-menu-wrapper ul li ul li a:hover {color: '.$custom_skin_color.' !important;}' . "\n" .


                '@media screen and (max-width: 991px) {' . "\n" .
                '.menu-main-menu-container {  background: '.$custom_skin_color.';}' . "\n" .
                '.phoenix-menu-wrapper button {background: '.$custom_skin_color.';}' . "\n" .
                '.phoenix-menu-wrapper button:hover, .phoenix-menu-wrapper button.dl-active, .dl-menuwrapper ul { background: '.$custom_skin_color.'; }' . "\n" .
                '.phoenix-menu-wrapper ul li a {background: '.$custom_skin_color.';}' . "\n" .
                '.phoenix-menu-wrapper ul ul {background: '.$custom_skin_color.';}' . "\n" .
                '.phoenix-menu-wrapper ul li ul li a:hover {color:#fff; }' . "\n" .
                '.phoenix-menu-wrapper ul li.current-menu-item a,'.
                '.phoenix-menu-wrapper ul li.current_page_item a {color: #fff;}' . "\n" .
                '.phoenix-menu-wrapper li a:hover {color: #FFF !important;}' . "\n" .
                '.phoenix-menu-wrapper ul li a {background: '.$custom_skin_color.' !important;}' . "\n" .
                '.phoenix-menu-wrapper ul li ul li a:hover {color: #fff !important; border-color: rgba(255,255,255,0.35) !important;}' . "\n" .
                '.phoenix-menu-wrapper ul li a:hover {color: #fff !important; border-color: rgba(255,255,255,0.35) !important;}' . "\n" .
                '}' . "\n" .

            '/* Custom Color CSS END */';

            wp_add_inline_style( THEME_SLUG . '-responsive', $custom_skin_css );
        }

        if ($css_code)
            wp_add_inline_style( THEME_SLUG . '-responsive', '/* Custom CSS */' . "\n" . $css_code . "\n" . '/* Custom CSS END */' );

        $this->custom_background();
    }


    private function custom_background ()
    {
        global $data;
        $boxed = isset($data['boxed_swtich']) ? $data['boxed_swtich'] : 'full';

        if ($boxed == 'boxed') {

            $bg_size = ( isset($data['boxed_background']['background-size']) && $data['boxed_background']['background-size'] != null ) ? 'background-size: '. $data['boxed_background']['background-size'] . "; " : null;
            $bg_color = ( isset($data['boxed_background']['background-color']) && $data['boxed_background']['background-color'] != null ) ? 'background-color: ' .$data['boxed_background']['background-color'] . "; " : null;
            $bg_image = ( isset($data['boxed_background']['background-image']) && $data['boxed_background']['background-image'] != null ) ? 'background-image: url("' . $data['boxed_background']['background-image'] . '")' . "; " : null;
            $bg_repeat = ( isset($data['boxed_background']['background-repeat']) && $data['boxed_background']['background-repeat'] != null ) ? 'background-repeat: ' . $data['boxed_background']['background-repeat'] . "; " : null;
            $bg_position = ( isset($data['boxed_background']['background-position']) && $data['boxed_background']['background-position'] != null ) ? 'background-position: ' . $data['boxed_background']['background-position'] . "; " : null;
            $bg_attachment = ( isset($data['boxed_background']['background-attachment']) && $data['boxed_background']['background-attachment'] != null ) ? 'background-attachment: ' . $data['boxed_background']['background-attachment'] . "; " : null;

            $boxed_css = " body { ";
                if ($bg_size) $boxed_css .= $bg_size;
                if ($bg_color) $boxed_css .= $bg_color;
                if ($bg_image) $boxed_css .= $bg_image;
                if ($bg_repeat) $boxed_css .= $bg_repeat;
                if ($bg_position) $boxed_css .= $bg_position;
                if ($bg_attachment) $boxed_css .= $bg_attachment;
            $boxed_css .= " }";

            wp_add_inline_style( THEME_SLUG . '-main', '/* Boxed CSS Layout */' . $boxed_css . '/* Boxed CSS Layout END */' );

            return true;
        }

        return false;
    }


    public function conditional_styles ()
    {
        if ( is_singular(THEME_SLUG . '_portfolio') ) {
            wp_dequeue_style(THEME_SLUG . '-cubeportfolio');
            wp_register_style(THEME_SLUG . '-cubeportfolio-single', THEME_URI . '/assets/css/cubeportfolio-3.min.css', array(), '1.0', 'all');
            wp_enqueue_style(THEME_SLUG . '-cubeportfolio-single');
        }
    }

}
