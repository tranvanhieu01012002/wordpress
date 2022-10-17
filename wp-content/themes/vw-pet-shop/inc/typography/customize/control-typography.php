<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class VW_Pet_Shop_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'vw-pet-shop' ),
				'family'      => esc_html__( 'Font Family', 'vw-pet-shop' ),
				'size'        => esc_html__( 'Font Size',   'vw-pet-shop' ),
				'weight'      => esc_html__( 'Font Weight', 'vw-pet-shop' ),
				'style'       => esc_html__( 'Font Style',  'vw-pet-shop' ),
				'line_height' => esc_html__( 'Line Height', 'vw-pet-shop' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'vw-pet-shop' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'vw-pet-shop-ctypo-customize-controls' );
		wp_enqueue_style(  'vw-pet-shop-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'vw-pet-shop' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-pet-shop' ),
        'Acme' => __( 'Acme', 'vw-pet-shop' ),
        'Anton' => __( 'Anton', 'vw-pet-shop' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-pet-shop' ),
        'Arimo' => __( 'Arimo', 'vw-pet-shop' ),
        'Arsenal' => __( 'Arsenal', 'vw-pet-shop' ),
        'Arvo' => __( 'Arvo', 'vw-pet-shop' ),
        'Alegreya' => __( 'Alegreya', 'vw-pet-shop' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-pet-shop' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-pet-shop' ),
        'Bangers' => __( 'Bangers', 'vw-pet-shop' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-pet-shop' ),
        'Bad Script' => __( 'Bad Script', 'vw-pet-shop' ),
        'Bitter' => __( 'Bitter', 'vw-pet-shop' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-pet-shop' ),
        'BenchNine' => __( 'BenchNine', 'vw-pet-shop' ),
        'Cabin' => __( 'Cabin', 'vw-pet-shop' ),
        'Cardo' => __( 'Cardo', 'vw-pet-shop' ),
        'Courgette' => __( 'Courgette', 'vw-pet-shop' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-pet-shop' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-pet-shop' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-pet-shop' ),
        'Cuprum' => __( 'Cuprum', 'vw-pet-shop' ),
        'Cookie' => __( 'Cookie', 'vw-pet-shop' ),
        'Chewy' => __( 'Chewy', 'vw-pet-shop' ),
        'Days One' => __( 'Days One', 'vw-pet-shop' ),
        'Dosis' => __( 'Dosis', 'vw-pet-shop' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-pet-shop' ),
        'Economica' => __( 'Economica', 'vw-pet-shop' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-pet-shop' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-pet-shop' ),
        'Francois One' => __( 'Francois One', 'vw-pet-shop' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-pet-shop' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-pet-shop' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-pet-shop' ),
        'Handlee' => __( 'Handlee', 'vw-pet-shop' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-pet-shop' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-pet-shop' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-pet-shop' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-pet-shop' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-pet-shop' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-pet-shop' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-pet-shop' ),
        'Kanit' => __( 'Kanit', 'vw-pet-shop' ),
        'Lobster' => __( 'Lobster', 'vw-pet-shop' ),
        'Lato' => __( 'Lato', 'vw-pet-shop' ),
        'Lora' => __( 'Lora', 'vw-pet-shop' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-pet-shop' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-pet-shop' ),
        'Merriweather' => __( 'Merriweather', 'vw-pet-shop' ),
        'Monda' => __( 'Monda', 'vw-pet-shop' ),
        'Montserrat' => __( 'Montserrat', 'vw-pet-shop' ),
        'Muli' => __( 'Muli', 'vw-pet-shop' ),
        'Marck Script' => __( 'Marck Script', 'vw-pet-shop' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-pet-shop' ),
        'Open Sans' => __( 'Open Sans', 'vw-pet-shop' ),
        'Overpass' => __( 'Overpass', 'vw-pet-shop' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-pet-shop' ),
        'Oxygen' => __( 'Oxygen', 'vw-pet-shop' ),
        'Orbitron' => __( 'Orbitron', 'vw-pet-shop' ),
        'Patua One' => __( 'Patua One', 'vw-pet-shop' ),
        'Pacifico' => __( 'Pacifico', 'vw-pet-shop' ),
        'Padauk' => __( 'Padauk', 'vw-pet-shop' ),
        'Playball' => __( 'Playball', 'vw-pet-shop' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-pet-shop' ),
        'PT Sans' => __( 'PT Sans', 'vw-pet-shop' ),
        'Philosopher' => __( 'Philosopher', 'vw-pet-shop' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-pet-shop' ),
        'Poiret One' => __( 'Poiret One', 'vw-pet-shop' ),
        'Quicksand' => __( 'Quicksand', 'vw-pet-shop' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-pet-shop' ),
        'Raleway' => __( 'Raleway', 'vw-pet-shop' ),
        'Rubik' => __( 'Rubik', 'vw-pet-shop' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-pet-shop' ),
        'Russo One' => __( 'Russo One', 'vw-pet-shop' ),
        'Righteous' => __( 'Righteous', 'vw-pet-shop' ),
        'Slabo' => __( 'Slabo', 'vw-pet-shop' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-pet-shop' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-pet-shop'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-pet-shop' ),
        'Sacramento' => __( 'Sacramento', 'vw-pet-shop' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-pet-shop' ),
        'Tangerine' => __( 'Tangerine', 'vw-pet-shop' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-pet-shop' ),
        'VT323' => __( 'VT323', 'vw-pet-shop' ),
        'Varela Round' => __( 'Varela Round', 'vw-pet-shop' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-pet-shop' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-pet-shop' ),
        'Volkhov' => __( 'Volkhov', 'vw-pet-shop' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-pet-shop' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'vw-pet-shop' ),
			'100' => esc_html__( 'Thin',       'vw-pet-shop' ),
			'300' => esc_html__( 'Light',      'vw-pet-shop' ),
			'400' => esc_html__( 'Normal',     'vw-pet-shop' ),
			'500' => esc_html__( 'Medium',     'vw-pet-shop' ),
			'700' => esc_html__( 'Bold',       'vw-pet-shop' ),
			'900' => esc_html__( 'Ultra Bold', 'vw-pet-shop' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'normal'  => esc_html__( 'Normal', 'vw-pet-shop' ),
			'italic'  => esc_html__( 'Italic', 'vw-pet-shop' ),
			'oblique' => esc_html__( 'Oblique', 'vw-pet-shop' )
		);
	}
}
