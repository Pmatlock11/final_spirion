<?php
/* Include all js and css files for active theme */
function nb_cpf_embedCssJs() {
    wp_enqueue_style( 'nbcpf-intlTelInput-style', NB_CPF_URL . '/assets/css/intlTelInput.min.css' );
	wp_enqueue_style( 'nbcpf-countryFlag-style', NB_CPF_URL . '/assets/css/countrySelect.min.css' );
	wp_enqueue_script( 'nbcpf-intlTelInput-script', NB_CPF_URL . '/assets/js/intlTelInput.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'nbcpf-countryFlag-script', NB_CPF_URL . '/assets/js/countrySelect.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'nbcpf-countryFlag-custom-script', NB_CPF_URL . '/assets/js/custom_script.js', array( 'jquery' ) );
    
}

add_action( 'wp_enqueue_scripts', 'nb_cpf_embedCssJs' );