<?php
/**
 * Terms page — hero section.
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
		'section_class'   => 'terms-hero about-hero',
		'aria_label'      => $terms_hero_aria_label,
		'headline'        => $terms_hero_title,
		'supporting_copy' => $terms_hero_text,
		'hero_image'      => $terms_hero_banner_url,
		'hero_image_alt'  => $terms_hero_banner_alt,
		'media_class'     => 'about-hero__media terms-hero__media',
		'image_class'     => 'about-hero__banner terms-hero__banner',
	)
);
