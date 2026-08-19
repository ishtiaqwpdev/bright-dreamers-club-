<?php
/**
 * Form definitions for Bright Dreamers Club theme forms.
 *
 * All admin recipients, subjects, user email copy, and success messages live here.
 * User email bodies marked DRAFT — review before going live.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default admin notification recipient(s).
 *
 * @return string[]
 */
function bdc_forms_default_admin_recipients() {
	if ( function_exists( 'bdc_get_form_admin_recipients' ) ) {
		return bdc_get_form_admin_recipients();
	}

	$email = apply_filters( 'bdc_forms_admin_email', get_option( 'admin_email' ) );

	return array_filter( array( sanitize_email( $email ) ) );
}

/**
 * Base form definitions (fields + default copy).
 *
 * @return array<string, array<string, mixed>>
 */
function bdc_get_forms_base_config() {
	$admin_recipients = bdc_forms_default_admin_recipients();

	return array(
		'newsletter_signup'      => array(
			'label'             => 'Newsletter Signup',
			'admin_recipients'  => $admin_recipients,
			'admin_subject'     => 'New Newsletter Signup — Bright Dreamers',
			'user_email_field'  => 'email',
			'user_name_field'   => 'full_name',
			'user_subject'      => 'Welcome to Bright Dreamers 💛', // DRAFT — review before go-live.
			'user_body'         => array(
				'Hi {{first_name}},',
				'Welcome to Bright Dreamers!',
				'Thank you for subscribing and becoming part of our growing community.',
				'From time to time, we\'ll share inspiring stories, new experiences and projects, volunteer and partnership opportunities, community highlights, and ways you can help young ideas grow.',
				'Bright Dreamers is a place where children are encouraged to dream, create, explore their ideas, and turn them into meaningful real-world experiences.',
				'We\'re happy to have you with us.',
			),
			'success'           => array(
				'title'   => 'You\'re subscribed! 💛',
				'lead'    => 'Thank you for joining the Bright Dreamers community.',
				'text'    => 'We\'ll keep you updated with inspiring stories, new experiences, volunteer and partnership opportunities, and ways to support young ideas.',
				'tagline' => 'Dream • Create • Grow • Give',
				'note'    => 'A welcome email is on its way to your inbox.',
			),
			'fields'            => array(
				'full_name' => array(
					'label'    => 'Full Name',
					'type'     => 'text',
					'required' => true,
				),
				'email'     => array(
					'label'    => 'Email Address',
					'type'     => 'email',
					'required' => true,
				),
				'receive'   => array(
					'label'    => 'What would you like to receive?',
					'type'     => 'checkbox_group',
					'required' => false,
					'options'  => array(
						'program-updates'  => 'Program updates',
						'new-experiences'  => 'New experiences',
						'volunteer'        => 'Volunteer opportunities',
						'partnership'      => 'Partnership news',
						'community'        => 'Community highlights',
					),
				),
				'role'      => array(
					'label'    => 'What is your role?',
					'type'     => 'checkbox_group',
					'required' => false,
					'options'  => array(
						'parent'    => 'Parent / Guardian',
						'volunteer' => 'Volunteer',
						'partner'   => 'Partner / Sponsor',
						'supporter' => 'Community Supporter',
						'educator'  => 'Educator',
					),
				),
			),
		),
		'donation_interest'      => array(
			'label'             => 'Donation Interest',
			'admin_recipients'  => $admin_recipients,
			'admin_subject'     => 'New Donation Interest — Bright Dreamers',
			'user_email_field'  => 'email',
			'user_name_field'   => 'full_name',
			'user_subject'      => 'Thank you for your interest in giving — Bright Dreamers', // DRAFT
			'user_body'         => array(
				'Hi {{first_name}},',
				'Thank you for reaching out about supporting Bright Dreamers.',
				'We received your donation interest form and appreciate your kindness. Our team will follow up with check-giving instructions and any details you requested.',
				'Every gift — large or small — helps children explore ideas, build confidence, and create meaningful projects in our community.',
				'If you have questions before we connect, simply reply to this email.',
			),
			'success'           => array(
				'title'   => 'Thank you for your generosity! 💛',
				'lead'    => 'We received your donation interest form.',
				'text'    => 'Our team will be in touch soon with check-giving instructions and any information you requested. We\'re grateful you want to help young ideas grow.',
				'tagline' => 'Dream • Create • Grow • Give',
				'note'    => 'A confirmation email is on its way to your inbox.',
			),
			'fields'            => array(
				'full_name'          => array(
					'label'    => 'Full Name',
					'type'     => 'text',
					'required' => true,
				),
				'email'              => array(
					'label'    => 'Email Address',
					'type'     => 'email',
					'required' => true,
				),
				'organization'       => array(
					'label'    => 'Organization',
					'type'     => 'text',
					'required' => false,
				),
				'support'            => array(
					'label'    => 'I would like to support',
					'type'     => 'checkbox_group',
					'required' => true,
					'options'  => array(
						'general'      => 'General Support',
						'materials'    => 'Materials & Supplies',
						'child-led'    => 'Child-Led Projects',
						'community'    => 'Community Projects',
						'dream-market' => 'Dream Market',
						'other'        => 'Other',
					),
				),
				'amount'             => array(
					'label'    => 'Estimated Donation Amount',
					'type'     => 'text',
					'required' => false,
				),
				'message'            => array(
					'label'    => 'Message / Notes',
					'type'     => 'textarea',
					'required' => false,
				),
				'check_instructions' => array(
					'label'    => 'Check donation instructions requested',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Yes' ),
				),
			),
		),
		'apply_to_join'          => array(
			'label'             => 'Apply to Join',
			'admin_recipients'  => $admin_recipients,
			'admin_subject'     => 'New Apply to Join Application — Bright Dreamers',
			'user_email_field'  => 'email',
			'user_name_field'   => 'guardian_name',
			'user_subject'      => 'We received your Bright Dreamers application 💛', // DRAFT
			'user_body'         => array(
				'Hi {{first_name}},',
				'Thank you for sharing your child\'s spark with us.',
				'We received your Apply to Join application and our team will review it carefully. Bright Dreamers is a small, intentional community, and we read every application with care.',
				'If we need anything else, we\'ll reach out using the contact information you provided.',
				'We\'re grateful you took the time to tell us about your child.',
			),
			'success'           => array(
				'title'   => 'Application received! 💛',
				'lead'    => 'Thank you for sharing your child\'s story with us.',
				'text'    => 'Our team will review your application carefully and be in touch if we need anything else. Every child\'s journey begins differently — we\'re honored you reached out.',
				'tagline' => 'Dream • Create • Grow • Give',
				'note'    => 'A confirmation email is on its way to your inbox.',
			),
			'supports_files'    => true,
			'file_fields'       => array( 'idea_file' ),
			'fields'            => array(
				'guardian_name'      => array( 'label' => 'Parent or Guardian Name', 'type' => 'text', 'required' => true ),
				'email'              => array( 'label' => 'Email', 'type' => 'email', 'required' => true ),
				'phone'              => array( 'label' => 'Phone', 'type' => 'tel', 'required' => true ),
				'city'               => array( 'label' => 'City', 'type' => 'text', 'required' => true ),
				'child_first_name'   => array( 'label' => 'Child\'s First Name', 'type' => 'text', 'required' => true ),
				'child_age'          => array(
					'label'    => 'Child\'s Age',
					'type'     => 'select',
					'required' => true,
					'options'  => array_combine( range( 6, 17 ), array_map( 'strval', range( 6, 17 ) ) ),
				),
				'child_love_doing'   => array( 'label' => 'What does your child love doing?', 'type' => 'textarea', 'required' => true ),
				'child_curious'      => array( 'label' => 'What is your child curious about right now?', 'type' => 'textarea', 'required' => false ),
				'child_dream'        => array( 'label' => 'Idea, project, or dream to explore', 'type' => 'textarea', 'required' => false ),
				'child_question'     => array( 'label' => 'A question for the child', 'type' => 'textarea', 'required' => false ),
				'interest'           => array(
					'label'    => 'Experiences of interest',
					'type'     => 'checkbox_group',
					'required' => false,
					'options'  => array(
						'creative-makers'      => 'Creative Makers',
						'young-ideas-lab'      => 'Young Ideas Lab',
						'create-for-cause'     => 'Create for a Cause',
						'community-adventures' => 'Community Adventures',
						'not-sure'             => 'Not sure yet',
					),
				),
				'child_gain'         => array( 'label' => 'What would you like your child to gain?', 'type' => 'textarea', 'required' => false ),
				'group_comfort'      => array(
					'label'    => 'Comfort in group projects',
					'type'     => 'radio',
					'required' => false,
					'options'  => array(
						'very'          => 'Very comfortable',
						'somewhat'      => 'Somewhat comfortable',
						'needs-support' => 'Needs gentle support',
					),
				),
				'parent_involvement' => array(
					'label'    => 'Parent/guardian involvement understood',
					'type'     => 'checkbox',
					'required' => false,
					'options'  => array( 'yes' => 'Yes' ),
				),
				'idea_file'          => array( 'label' => 'Optional idea upload', 'type' => 'file', 'required' => false ),
				'consent_guardian'   => array(
					'label'    => 'Guardian confirmation',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Confirmed' ),
				),
				'consent_contact'    => array(
					'label'    => 'Contact permission',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Agreed' ),
				),
				'consent_privacy'    => array(
					'label'    => 'Privacy Policy agreement',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Agreed' ),
				),
			),
		),
		'partner_inquiry'        => array(
			'label'             => 'Partner Inquiry',
			'admin_recipients'  => $admin_recipients,
			'admin_subject'     => 'New Partner Inquiry — Bright Dreamers',
			'user_email_field'  => 'email',
			'user_name_field'   => 'contact_person',
			'user_subject'      => 'Thank you for your partnership inquiry — Bright Dreamers', // DRAFT
			'user_body'         => array(
				'Hi {{first_name}},',
				'Thank you for reaching out about partnering with Bright Dreamers.',
				'We received your inquiry and appreciate the time you took to share your idea, offering, or way you\'d like to support children.',
				'Our team reviews each partnership inquiry thoughtfully. If it looks like a good fit, we\'ll be in touch using the contact details you provided.',
				'We\'re grateful for partners who believe in young ideas and kind hearts.',
			),
			'success'           => array(
				'title'   => 'Inquiry received! 💛',
				'lead'    => 'Thank you for reaching out about partnering with us.',
				'text'    => 'We review each inquiry carefully and will be in touch if it looks like a good fit. We\'re building partnerships intentionally — and we\'re glad you shared your idea.',
				'tagline' => 'Dream • Create • Grow • Give',
				'note'    => 'A confirmation email is on its way to your inbox.',
			),
			'supports_files'    => true,
			'file_fields'       => array( 'partner_file' ),
			'fields'            => array(
				'organization_name'    => array( 'label' => 'Organization or Individual Name', 'type' => 'text', 'required' => true ),
				'contact_person'     => array( 'label' => 'Contact Person', 'type' => 'text', 'required' => true ),
				'role_title'         => array( 'label' => 'Role / Title', 'type' => 'text', 'required' => true ),
				'website_social'     => array( 'label' => 'Website or Social Link', 'type' => 'text', 'required' => false ),
				'email'              => array( 'label' => 'Email Address', 'type' => 'email', 'required' => true ),
				'organization_type'  => array(
					'label'    => 'Organization Type',
					'type'     => 'select',
					'required' => true,
					'options'  => array(
						'nonprofit'  => 'Nonprofit Organization',
						'business'   => 'Business / Company',
						'school'     => 'School / Educational Institution',
						'community'  => 'Community Group',
						'individual' => 'Individual',
						'other'      => 'Other',
					),
				),
				'city_area'          => array( 'label' => 'City / Area', 'type' => 'text', 'required' => true ),
				'best_contact'       => array(
					'label'    => 'Best Way to Reach You',
					'type'     => 'select',
					'required' => true,
					'options'  => array(
						'email'  => 'Email',
						'phone'  => 'Phone',
						'either' => 'Either Email or Phone',
					),
				),
				'partnership_interest' => array(
					'label'    => 'Partnership Interest',
					'type'     => 'checkbox_group',
					'required' => false,
					'options'  => array(
						'sponsor'         => 'Sponsor a Project',
						'supplies'        => 'Donate Supplies or Materials',
						'workshop'        => 'Offer a Workshop or Skill',
						'space'           => 'Provide Space or Venue',
						'event'           => 'Support an Event or Market',
						'group-volunteer' => 'Volunteer as a Group',
						'business'        => 'Business Collaboration',
						'community'       => 'Community Partnership',
						'other'           => 'Other',
					),
				),
				'why_partner'        => array( 'label' => 'Why partner with Bright Dreamers?', 'type' => 'textarea', 'required' => true ),
				'opportunity_offer'  => array( 'label' => 'Opportunity or support offered', 'type' => 'textarea', 'required' => true ),
				'who_help'           => array( 'label' => 'Who would this help and how?', 'type' => 'textarea', 'required' => true ),
				'resources'          => array(
					'label'    => 'Resources You Can Offer',
					'type'     => 'checkbox_group',
					'required' => false,
					'options'  => array(
						'materials' => 'Materials',
						'funding'   => 'Funding',
						'skills'    => 'Skills / Mentorship',
						'space'     => 'Space',
						'services'  => 'Services',
						'community' => 'Community Connections',
						'promotion' => 'Promotion',
						'other'     => 'Other',
					),
				),
				'timeline'           => array( 'label' => 'Estimated timeline or availability', 'type' => 'text', 'required' => false ),
				'partner_file'       => array( 'label' => 'Optional upload', 'type' => 'file', 'required' => false ),
				'agreement_review'   => array(
					'label'    => 'Review process understood',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Agreed' ),
				),
				'agreement_no_guarantee' => array(
					'label'    => 'No guarantee understood',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Agreed' ),
				),
				'agreement_contact'  => array(
					'label'    => 'Contact & Privacy agreement',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Agreed' ),
				),
			),
		),
		'contact'                => array(
			'label'             => 'Contact',
			'admin_recipients'  => $admin_recipients,
			'admin_subject'     => 'New Contact Message — Bright Dreamers',
			'user_email_field'  => 'email',
			'user_name_field'   => 'name',
			'user_subject'      => 'We received your message — Bright Dreamers', // DRAFT
			'user_body'         => array(
				'Hi {{first_name}},',
				'Thank you for reaching out to Bright Dreamers.',
				'We received your message and someone from our team will get back to you as soon as we can.',
				'If your question is urgent, you can also reply directly to this email.',
				'We\'re glad you connected with us.',
			),
			'success'           => array(
				'title'   => 'Message sent! 💛',
				'lead'    => 'Thank you for reaching out to Bright Dreamers.',
				'text'    => 'We received your message and will get back to you as soon as we can. Your note is safe with us.',
				'tagline' => 'Dream • Create • Grow • Give',
				'note'    => 'A confirmation email is on its way to your inbox.',
			),
			'fields'            => array(
				'name'    => array( 'label' => 'Your Name', 'type' => 'text', 'required' => true ),
				'email'   => array( 'label' => 'Email Address', 'type' => 'email', 'required' => true ),
				'subject' => array( 'label' => 'Subject', 'type' => 'text', 'required' => true ),
				'message' => array( 'label' => 'Message', 'type' => 'textarea', 'required' => true ),
			),
		),
		'volunteer_application'  => array(
			'label'             => 'Volunteer Application',
			'admin_recipients'  => $admin_recipients,
			'admin_subject'     => 'New Volunteer Application — Bright Dreamers',
			'user_email_field'  => 'email',
			'user_name_field'   => 'first_name',
			'user_subject'      => 'Thank you for applying to volunteer — Bright Dreamers', // DRAFT
			'user_body'         => array(
				'Hi {{first_name}},',
				'Thank you for applying to volunteer with Bright Dreamers.',
				'We received your application and appreciate your willingness to share your time and talents with children in our community.',
				'Our team will review your information and be in touch about next steps if there\'s a good match.',
				'Every hour given helps a child\'s dream grow — thank you for being a Bright Dreamer.',
			),
			'success'           => array(
				'title'   => 'Application received! 💛',
				'lead'    => 'Thank you for applying to volunteer with Bright Dreamers.',
				'text'    => 'We received your application and will review it carefully. If there\'s a good match, our team will be in touch about next steps.',
				'tagline' => 'Dream • Create • Grow • Give',
				'note'    => 'A confirmation email is on its way to your inbox.',
			),
			'fields'            => array(
				'first_name'           => array( 'label' => 'First Name', 'type' => 'text', 'required' => true ),
				'last_name'            => array( 'label' => 'Last Name', 'type' => 'text', 'required' => true ),
				'email'                => array( 'label' => 'Email Address', 'type' => 'email', 'required' => true ),
				'phone'                => array( 'label' => 'Phone Number', 'type' => 'tel', 'required' => true ),
				'city'                 => array( 'label' => 'City', 'type' => 'text', 'required' => true ),
				'state'                => array(
					'label'    => 'State / Province',
					'type'     => 'select',
					'required' => true,
					'options'  => array(
						'AL'     => 'Alabama',
						'AK'     => 'Alaska',
						'AZ'     => 'Arizona',
						'CA'     => 'California',
						'CO'     => 'Colorado',
						'FL'     => 'Florida',
						'GA'     => 'Georgia',
						'IL'     => 'Illinois',
						'NY'     => 'New York',
						'TX'     => 'Texas',
						'WA'     => 'Washington',
						'OTHER'  => 'Other',
					),
				),
				'zip'                  => array( 'label' => 'ZIP / Postal Code', 'type' => 'text', 'required' => true ),
				'date_of_birth'        => array( 'label' => 'Date of Birth', 'type' => 'date', 'required' => true ),
				'why_volunteer'        => array( 'label' => 'Why volunteer?', 'type' => 'textarea', 'required' => true ),
				'skills'               => array( 'label' => 'Skills and experiences', 'type' => 'textarea', 'required' => true ),
				'availability'         => array(
					'label'    => 'Availability',
					'type'     => 'checkbox_group',
					'required' => false,
					'options'  => array(
						'weekday-morning'   => 'Weekdays (Morning)',
						'weekday-afternoon' => 'Weekdays (Afternoon)',
						'evenings'          => 'Evenings',
						'weekends'          => 'Weekends',
						'flexible'          => 'Flexible',
					),
				),
				'hours_commitment'     => array(
					'label'    => 'Hours commitment',
					'type'     => 'select',
					'required' => true,
					'options'  => array(
						'1-3'       => '1–3 hours per month',
						'4-8'       => '4–8 hours per month',
						'1-3-week'  => '1–3 hours per week',
						'4-8-week'  => '4–8 hours per week',
						'8-plus'    => '8+ hours per week',
					),
				),
				'interest'             => array(
					'label'    => 'Areas of interest',
					'type'     => 'checkbox_group',
					'required' => false,
					'options'  => array(
						'children'  => 'Working with Children',
						'programs'  => 'Programs & Activities',
						'events'    => 'Events & Fundraising',
						'marketing' => 'Marketing & Communications',
						'admin'     => 'Administration & Office Support',
						'other'     => 'Other',
					),
				),
				'volunteered_before'   => array(
					'label'    => 'Volunteered before',
					'type'     => 'radio',
					'required' => false,
					'options'  => array(
						'yes' => 'Yes',
						'no'  => 'No',
					),
				),
				'volunteer_history'    => array( 'label' => 'Previous volunteer experience', 'type' => 'textarea', 'required' => false ),
				'reference_name'       => array( 'label' => 'Reference Full Name', 'type' => 'text', 'required' => true ),
				'reference_relationship' => array( 'label' => 'Reference Relationship', 'type' => 'text', 'required' => true ),
				'reference_email'      => array( 'label' => 'Reference Email', 'type' => 'email', 'required' => true ),
				'reference_phone'      => array( 'label' => 'Reference Phone', 'type' => 'tel', 'required' => true ),
				'agreement_truth'      => array(
					'label'    => 'Information accuracy',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Confirmed' ),
				),
				'agreement_guidelines' => array(
					'label'    => 'Policies agreement',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Agreed' ),
				),
			),
		),
		'photo_media_consent'    => array(
			'label'             => 'Photo & Media Consent',
			'admin_recipients'  => $admin_recipients,
			'admin_subject'     => 'New Photo & Media Consent Form — Bright Dreamers',
			'user_email_field'  => 'email',
			'user_name_field'   => 'guardian_name',
			'user_subject'      => 'We received your Photo & Media Consent form — Bright Dreamers', // DRAFT
			'user_body'         => array(
				'Hi {{first_name}},',
				'Thank you for submitting the Photo & Media Consent form for your child.',
				'We received your preferences and will honor the consent level you selected. You may update or withdraw consent at any time by contacting us.',
				'We take your child\'s privacy and dignity seriously — thank you for trusting us with these important decisions.',
			),
			'success'           => array(
				'title'   => 'Consent received! 💛',
				'lead'    => 'Thank you for submitting your Photo & Media Consent form.',
				'text'    => 'We received your preferences and will honor the consent level you selected. You may update or withdraw consent at any time by contacting our team.',
				'tagline' => 'Dream • Create • Grow • Give',
				'note'    => 'A confirmation email is on its way to your inbox.',
			),
			'fields'            => array(
				'child_name'     => array( 'label' => 'Child\'s Full Name', 'type' => 'text', 'required' => true ),
				'child_dob'      => array( 'label' => 'Child Date of Birth', 'type' => 'date', 'required' => true ),
				'guardian_name'  => array( 'label' => 'Parent / Guardian Full Name', 'type' => 'text', 'required' => true ),
				'email'          => array( 'label' => 'Email Address', 'type' => 'email', 'required' => true ),
				'phone'          => array( 'label' => 'Phone Number', 'type' => 'tel', 'required' => false ),
				'consent_level'  => array(
					'label'    => 'Consent Level',
					'type'     => 'radio',
					'required' => true,
					'options'  => array(
						'full'    => 'Full Consent',
						'limited' => 'Limited Consent',
						'none'    => 'No Consent',
					),
				),
				'usage'          => array(
					'label'    => 'Approved Usage',
					'type'     => 'checkbox_group',
					'required' => false,
					'options'  => array(
						'activities'    => 'Club activities & projects',
						'website'       => 'Website & newsletters',
						'social'        => 'Social media channels',
						'promotional'   => 'Promotional materials',
						'presentations' => 'Presentations & reports',
						'community'     => 'Community engagement',
					),
				),
				'terms_agree'    => array(
					'label'    => 'Terms agreement',
					'type'     => 'checkbox',
					'required' => true,
					'options'  => array( '1' => 'Agreed' ),
				),
				'signature_name' => array( 'label' => 'Digital Signature (Full Name)', 'type' => 'text', 'required' => true ),
				'signature_date' => array( 'label' => 'Signature Date', 'type' => 'date', 'required' => true ),
			),
		),
	);
}

/**
 * Active form config merged with saved Bright Dreamers theme settings.
 *
 * @return array<string, array<string, mixed>>
 */
function bdc_get_forms_config() {
	$config = bdc_get_forms_base_config();

	if ( function_exists( 'bdc_apply_saved_form_settings' ) ) {
		$config = bdc_apply_saved_form_settings( $config );
	}

	return $config;
}

/**
 * Get a single form config by ID.
 *
 * @param string $form_id Form identifier.
 * @return array<string, mixed>|null
 */
function bdc_get_form_config( $form_id ) {
	$config = bdc_get_forms_config();

	return isset( $config[ $form_id ] ) ? $config[ $form_id ] : null;
}
