<?php
/**
 * Accessibility page — hero section.
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
		'section_class'   => 'accessibility-hero',
		'aria_label'      => $accessibility_hero_aria_label,
		'headline'        => $accessibility_hero_title,
		'supporting_copy' => $accessibility_hero_text,
		'hero_image'      => $accessibility_hero_banner_url,
		'hero_image_alt'  => $accessibility_hero_banner_alt,
		'media_class'     => 'about-hero__media accessibility-hero__media',
		'image_class'     => 'about-hero__banner accessibility-hero__banner',
	)
);
