<?php
/**
 * Financial Transparency page — hero section.
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
		'section_class'   => 'financial-hero about-hero',
		'aria_label'      => $financial_transparency_hero_aria_label,
		'headline'        => $financial_transparency_hero_title,
		'supporting_copy' => $financial_transparency_hero_text,
		'hero_image'      => $financial_transparency_hero_banner_url,
		'hero_image_alt'  => $financial_transparency_hero_banner_alt,
		'media_class'     => 'about-hero__media financial-hero__media',
		'image_class'     => 'about-hero__banner financial-hero__banner',
	)
);
