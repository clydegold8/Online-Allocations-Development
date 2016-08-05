<?php
class BlackBird_Customizer {
    public static function BlackBird_Register($wp_customize) {
        self::BlackBird_Sections($wp_customize);
        self::BlackBird_Controls($wp_customize);
    }
    public static function BlackBird_Sections($wp_customize) {
        /**
         * General Section
         */
        $wp_customize->add_section('general_setting_section', array(
            'title' => __('General Settings', 'blackbird'),
            'description' => __('Allows you to customize header logo, favicon, background etc settings for BlackBird Theme.', 'blackbird'), //Descriptive tooltip
            'panel' => '',
            'priority' => '10',
            'capability' => 'edit_theme_options'
            )
        );
        /**
         * Home Page Top Feature Area
         */
        $wp_customize->add_section('home_top_feature_area', array(
            'title' => __('Top Feature Area', 'blackbird'),
            'description' => __('Allows you to setup Top feature area section for BlackBird Theme.', 'blackbird'), //Descriptive tooltip
            'panel' => '',
            'priority' => '11',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Add panel for home page feature area
         */
        $wp_customize->add_panel('home_page_feature_area_panel', array(
            'title' => __('Home Page Feature Area', 'blackbird'),
            'description' => __('Allows you to setup home page feature area section for BlackBird Theme.', 'blackbird'),
            'priority' => '12',
            'capability' => 'edit_theme_options'
        ));
        /**
         * Home Page Feature area setting
         */
        $wp_customize->add_section('home_page_feature_area_heading', array(
            'title' => __('Home Page Heading', 'blackbird'),
            'description' => __('Allows you to setup feature area section heading for BlackBird Theme.', 'blackbird'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
             )
        );
        /**
         * Home Page feature area 1
         */
        $wp_customize->add_section('home_feature_area_section1', array(
            'title' => __('First Feature Area', 'blackbird'),
            'description' => __('Allows you to setup first feature area section for BlackBird Theme.', 'blackbird'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Home Page feature area 2
         */
        $wp_customize->add_section('home_feature_area_section2', array(
            'title' => __('Second Feature Area', 'blackbird'),
            'description' => __('Allows you to setup second feature area section for BlackBird Theme.', 'blackbird'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );

        /**
         * Home Page feature area 3
         */
        $wp_customize->add_section('home_feature_area_section3', array(
            'title' => __('Third Feature Area', 'blackbird'),
            'description' => __('Allows you to setup third feature area section for BlackBird Theme.', 'blackbird'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Social Icon Section
         */
        $wp_customize->add_section('social_icon_section', array(
            'title' => __('Social Icons', 'blackbird'),
            'description' => __('Allows you to setup social site link for BlackBird Theme.', 'blackbird'),
            'panel' => '',
            'priority' => '14',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Style Section
         */
        $wp_customize->add_section('style_section', array(
            'title' => __('Style Setting', 'blackbird'),
            'description' => __('Allows you to change style using custom css for BlackBird Theme.', 'blackbird'),
            'panel' => '',
            'priority' => '15',
            'capability' => 'edit_theme_options'
                )
        );       
    }
    public static function BlackBird_Section_Content() {

        $section_content = array(
            'general_setting_section' => array(
                'blackbird_logo',
                'blackbird_topright_cell',       
                'blackbird_topright_text',
                'blackbird_favicon',
                'blackbird_bodybg'
            ),
            'home_top_feature_area' => array(
                'blackbird_slideimage1',
                'blackbird_sliderheading1',
                'blackbird_sliderdes1',
                'blackbird_Sliderlink1'
            ),
            'home_page_feature_area_heading' => array(
                'blackbird_mainheading'
            ),
            'home_feature_area_section1' => array(
                'blackbird_headline1',
                'blackbird_wimg1',
                'blackbird_feature1',
                'blackbird_link1'
            ),
            'home_feature_area_section2' => array(
                'blackbird_headline2',
                'blackbird_fimg2',
                'blackbird_feature2',
                'blackbird_link2'
            ),
            'home_feature_area_section3' => array(
                'blackbird_headline3',
                'blackbird_fimg3',
                'blackbird_feature3',
                'blackbird_link3'
            ),           
            'social_icon_section' => array(
                'blackbird_facebook',
                'blackbird_twitter',
                'blackbird_linked',
                'blackbird_rss',
            ),
             'style_section' => array(
                'blackbird_customcss'
            )
        );
        return $section_content;
    }

    public static function BlackBird_Settings() {

        $blackbird_settings = array(
            'blackbird_logo' => array(
                'id' => 'blackbird_options[blackbird_logo]',
                'label' => __('Custom Logo', 'blackbird'),
                'description' => __('Choose your own logo. Optimal Size: 221px Wide by 84px Height.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/logo.png'
            ),
            'blackbird_favicon' => array(
                'id' => 'blackbird_options[blackbird_favicon]',
                'label' => __('Custom Favicon', 'blackbird'),
                'description' => __('Here you can upload a Favicon for your Website. Specified size is 16px x 16px.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'blackbird_bodybg' => array(
                'id' => 'blackbird_options[blackbird_bodybg]',
                'label' => __('Background Image', 'blackbird'),
                'description' => __('Choose a suitable background image that will complement your website.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'blackbird_topright_cell' => array(
                'id' => 'blackbird_options[blackbird_topright_cell]',
                'label' => __('Home Page Top Right Cell Info', 'blackbird'),
                'description' => __('Enter your text for home page top right cell info.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('For Reservation Call :', 'blackbird')
            ),
            'blackbird_topright_text' => array(
                'id' => 'blackbird_options[blackbird_topright_text]',
                'label' => __('Home Page Top Right Contact Info', 'blackbird'),
                'description' => __('Enter your text for home page top right contact info.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => '1888-222-5847'
            ),           
 
            'blackbird_slideimage1' => array(
                'id' => 'blackbird_options[blackbird_slideimage1]',
                'label' => __('Home Top Feature Image', 'blackbird'),
                'description' => __('Choose your image for first slider. Optimal size is 950px wide and 390px height.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/slider1.jpg'
            ),
            'blackbird_sliderheading1' => array(
                'id' => 'blackbird_options[blackbird_sliderheading1]',
                'label' => __('Home Top Feature Heading', 'blackbird'),
                'description' => __('Enter your text heading for top image.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Black Bird Theme', 'blackbird')
            ),
            'blackbird_sliderdes1' => array(
                'id' => 'blackbird_options[blackbird_sliderdes1]',
                'label' => __('Home Top Feature Description', 'blackbird'),
                'description' => __('Enter your text description for first slider.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Premium WordPress Themes with Single Click Installation, Just a Click and your website is ready for use.', 'blackbird')
            ),
            'blackbird_Sliderlink1' => array(
                'id' => 'blackbird_options[blackbird_Sliderlink1]',
                'label' => __('Home Top Feature Link URL', 'blackbird'),
                'description' => __('Enter your link url for top image', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
             'blackbird_mainheading' => array(
                'id' => 'blackbird_options[blackbird_mainheading]',
                'label' => __('Home Page Main Heading', 'blackbird'),
                'description' => __('Mention the punch line for your business here.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Black Bird Theme is one of the easiest theme to built your website. Easy website management through Options Panel.', 'blackbird')
            ),
            'blackbird_headline1' => array(
                'id' => 'blackbird_options[blackbird_headline1]',
                'label' => __('First Feature Heading', 'blackbird'),
                'description' => __('Mention the heading for First column that will showcase your business services.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Fully Responsive WordPress Theme', 'blackbird')
            ),
            'blackbird_wimg1' => array(
                'id' => 'blackbird_options[blackbird_wimg1]',
                'label' => __('First Feature Image', 'blackbird'),
                'description' => __('Upload an image for First column. Optimal size is 158px x 165px.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/img1.jpg'
            ),
            'blackbird_feature1' => array(
                'id' => 'blackbird_options[blackbird_feature1]',
                'label' => __('First Feature Description', 'blackbird'),
                'description' => __('Write short description for your First heading.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Blackbird  is a unique responsive WordPress theme. The theme design is fabulous enough giving your visitors the absolute reason to stay on your site.', 'blackbird')
            ),
            'blackbird_link1' => array(
                'id' => 'blackbird_options[blackbird_link1]',
                'label' => __('First feature Link', 'blackbird'),
                'description' => __('Enter your text for First feature Link.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'blackbird_headline2' => array(
                'id' => 'blackbird_options[blackbird_headline2]',
                'description' => __('Mention the heading for Second column that will showcase your business services.', 'blackbird'),
                'label' => __('Second Feature Heading', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Easy Website Customization', 'blackbird')
            ),
            'blackbird_fimg2' => array(
                'id' => 'blackbird_options[blackbird_fimg2]',
                'label' => __('Second Feature Image', 'blackbird'),
                'description' => __('Upload an image for Second column. Optimal size is 158px x 165px.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/img2.jpg'
            ),
            'blackbird_feature2' => array(
                'id' => 'blackbird_options[blackbird_feature2]',
                'label' => __('Second Feature Description', 'blackbird'),
                'description' => __('Write short description for your Second heading.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('You will definitely love the Theme. The speciality of the Theme is the easiness through which you can get the site ready for yourself or your client.', 'blackbird')
            ),
            'blackbird_link2' => array(
                'id' => 'blackbird_options[blackbird_link2]',
                'label' => __('Second feature Link', 'blackbird'),
                'description' => __('Enter your text for Second feature Link.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'blackbird_headline3' => array(
                'id' => 'blackbird_options[blackbird_headline3]',
                'label' => __('Third Feature Heading', 'blackbird'),
                'description' => __('Mention the heading for Third column that will showcase your business services.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Stylish Color Schemes', 'blackbird')
            ),
            'blackbird_fimg3' => array(
                'id' => 'blackbird_options[blackbird_fimg3]',
                'label' => __('Third Feature Image', 'blackbird'),
                'description' => __('Upload an image for Third column. Optimal size is 158px x 165px.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/img3.jpg'
            ),
            'blackbird_feature3' => array(
                'id' => 'blackbird_options[blackbird_feature3]',
                'label' => __('Third Feature Description', 'blackbird'),
                'description' => __('Write short description for your third heading.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Easily controls the look and feel of your whole website and over 10+ stylish color schemes gives your website a <br/>fresh new look.', 'blackbird')
            ),
            'blackbird_link3' => array(
                'id' => 'blackbird_options[blackbird_link3]',
                'label' => __('Third feature Link', 'blackbird'),
                'description' => __('Enter your text for Second feature Link.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'blackbird_customcss' => array(
                'id' => 'blackbird_options[blackbird_customcss]',
                'label' => __('Custom CSS', 'blackbird'),
                'description' => __('Quickly add your custom CSS code to your theme by writing the code in this block.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),            
            'blackbird_facebook' => array(
                'id' => 'blackbird_options[blackbird_facebook]',
                'label' => __('Facebook URL', 'blackbird'),
                'description' => __('Mention the URL of your Facebook here.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'blackbird_twitter' => array(
                'id' => 'blackbird_options[blackbird_twitter]',
                'label' => __('Twitter URL', 'blackbird'),
                'description' => __('Mention the URL of your Twitter here.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'blackbird_linked' => array(
                'id' => 'blackbird_options[blackbird_linked]',
                'label' => __('LinkedIn URL', 'blackbird'),
                'description' => __('Mention the URL of your LinkedIn here.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'blackbird_rss' => array(
                'id' => 'blackbird_options[blackbird_rss]',
                'label' => __('RSS URL', 'blackbird'),
                'description' => __('Mention the URL of your RSS here.', 'blackbird'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            )            
        );
        return $blackbird_settings;
    }
    public static function BlackBird_Controls($wp_customize) {
        $sections = self::BlackBird_Section_Content();
        $settings = self::BlackBird_Settings();
        foreach ($sections as $section_id => $section_content) {
            foreach ($section_content as $section_content_id) {
                switch ($settings[$section_content_id]['setting_type']) {
                    case 'image':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'blackbird_sanitize_url');
                        $wp_customize->add_control(new WP_Customize_Image_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id']
                                )
                        ));
                        break;
                    case 'text':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'blackbird_sanitize_text');
                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;
                    case 'textarea':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'blackbird_sanitize_textarea');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'textarea'
                                )
                        ));
                        break;
                    case 'link':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'blackbird_sanitize_url');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));

                        break;
                    default:
                        break;
                }
            }
        }
    }
    public static function add_setting($wp_customize, $setting_id, $default, $type, $sanitize_callback) {
        $wp_customize->add_setting($setting_id, array(
            'default' => $default,
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array('BlackBird_Customizer', $sanitize_callback),
            'type' => $type
                )
        );
    }
    /**
     * adds sanitization callback funtion : textarea
     * @package BlackBird
     */
    public static function blackbird_sanitize_textarea($value) {
        $value = esc_html($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : url
     * @package BlackBird
     */
    public static function blackbird_sanitize_url($value) {
        $value = esc_url($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : text
     * @package BlackBird
     */
    public static function blackbird_sanitize_text($value) {
        $value = sanitize_text_field($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : email
     * @package BlackBird
     */
    public static function blackbird_sanitize_email($value) {
        $value = sanitize_email($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package BlackBird
     */
    public static function blackbird_sanitize_number($value) {
        $value = preg_replace("/[^0-9+ ]/", "", $value);
        return $value;
    }

}
// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('BlackBird_Customizer', 'BlackBird_Register'));
function inkthemes_registers() {
          wp_register_script( 'inkthemes_jquery_ui', '//code.jquery.com/ui/1.11.0/jquery-ui.js', array("jquery"), true  );
	wp_register_script( 'inkthemes_customizer_script', get_template_directory_uri() . '/js/inkthemes_customizer.js', array("jquery","inkthemes_jquery_ui"), true  );
	wp_enqueue_script( 'inkthemes_customizer_script' );
	wp_localize_script( 'inkthemes_customizer_script', 'ink_advert', array(
		'pro' => __('View PRO version','blackbird'),
		'url' => esc_url('http://www.inkthemes.com/wp-themes/unique-wordpress-theme/'),
		'support_text' => __('Need Help!','blackbird'),
		'support_url' => esc_url('http://www.inkthemes.com/lets-connect/'),	
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'inkthemes_registers' );
