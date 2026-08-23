<?php
/**
 * Shared hero for media-policy layout pages (privacy, photo-media).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_template_part(
	'template-parts/page-hero',
	null,
	array(
		'section_class'   => isset( $hero_section_class ) ? trim( str_replace( 'page-hero', '', $hero_section_class ) ) : 'media-policy-hero',
		'aria_label'      => isset( $hero_aria_label ) ? $hero_aria_label : '',
		'headline'        => isset( $hero_title ) ? $hero_title : '',
		'supporting_copy' => bdc_hero_join_copy(
			isset( $hero_text ) ? $hero_text : '',
			isset( $hero_text_second ) ? $hero_text_second : ''
		),
		'hero_image'      => isset( $hero_banner_url ) ? $hero_banner_url : '',
		'hero_image_alt'  => isset( $hero_banner_alt ) ? $hero_banner_alt : '',
		'media_class'     => 'about-hero__media media-policy-hero__media',
		'image_class'     => 'about-hero__banner media-policy-hero__banner',
	)
);
