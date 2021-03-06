== Description ==
LoCoPaS is a beautiful free responsive page-only WordPress theme with awesome parallax scrolling effect.
 It is a performance based WP template suitable for multipurpose websites like business, agency, portfolio, eCommerce etc.
 It is a fully responsive theme that fits perfectly on any device.
 It is clean, simple, SEO friendly, flexible, multilingual, and feature-rich theme for modern websites.
 The theme is based on WordPress Live Customizer that allows you to customize basic wp_core configurations.
 Concieved for creators and mantainers capables of css-editing and new classes incorporation.
 Post and Comments sections will be hided from admin dashboard.

We specially thank the people from AccessPress for delivering ParallaxSome,
 in which we based our work. (https://accesspressthemes.com/wordpress-themes/parallaxsome/)


=== Tags ===
one-column, no-post, no-comments, no-sidebar, no-emojis, translation-ready, flexible-header, footer-widgets, custom-background, custom-logo, featured-images, theme-options

LoCoPaS WordPress Theme, Copyright 2020 Burgeon EnvironMental Solutions
LoCoPaS GitHub repository: https://github.com/burgeon-env/wp-locopas
LoCoPaS is distributed under the terms of the GNU GPL v3
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A css-editor-oriented theme called LoCoPaS (Low Code ParallaxSome).


== Installation ==

-- If you do not have WP Pusher:
1. In your admin panel, go to Pluggins > Add New.
2. Install and activate WP Pusher plugin.
3. Obtain GitHub token and save it following WP Pusher instructions.

-- With WP Pusher and a GitHub token
1. Go to WP Pusher > Install Theme
2. Add LoCoPaS repository burgeon-env/wp-locopas and use branch v0.5.0, then click Install Theme.
3. Go to Appearance > Themes and click Activate on LoCoPaS to use your new theme right away.
4. (Optional) You can fork burgeon-env/wp-locopas repository to edit it with your favourite IDE.
5. (Optional) Push your modifications and repeat steps 2 and 3 to install your own LoCoPaS repository.


== Documentation ==

1. LoCoPaS hides Post entries from admin page.
2. Distribution of elements inside pages can be achieved by using gallery classes.
3. Responsive alteration of displayed elements can be achieved using <SizeCode>-[hide|show|flex|cont] classes.
3.1. SizeCode:
    - in (1st choice)-> xl (extralarge) > 1801px > lg (large) > 1400px > lp (laptop) > 940px > md (medium) > 640px > tb (tablets) > 480px > sm (smartphones)
4. Best way to alter appeareance is by editing css structure at inc/styles/pages.css (load after footer).
5. All pages can be referenced at css definitions using the id: #page-<NameOfThePage> {}.
6. If you create new style files, add new lines with adapted id and path/to/your/file at inc/locopas-functions.php lines 94 to 102.
7. If you want to keep track of future updates, email us at webmaster@burgeon.life with the subject 'LoCoPaS news'.
8. Future theme versions will be oriented to:
8.1. Improve rendering and time-to-active, specially at js | jQuery level.
8.2. Adapt theme js scripts to be reduced and minimized.

== Third Party scripts and styles under public license ==

= i.e.-> !: no longer used | *: non-upgradable version ==

= Styles =
	!: Font Awesome v4.6.3 under (Font: SIL OFL 1.1, CSS: MIT License)
	http://fontawesome.io

= Scripts =
	!: BxSlider v4.1.2 by Steven Wanderski under MIT License
	http://bxslider.com

	!: jQuery counterup v1.0.2 by Benjamin Intal under GPL v2 License
	https://github.com/bfintal/Counter-Up

	jQuery One Page Nav Plugin v2.2.0 by Trevor Davis under MIT and GPL licenses
	http://github.com/davist11/jQuery-One-Page-Nav

	jQuery ScrollTo v2.1.1 by Ariel Flesler under MIT License
	https://github.com/flesler/jquery.scrollTo

	jQuery Sticky Plugin v0.1.2 by Anthony Garand under GPL License
	https://github.com/garand/sticky/
	https://github.com/garand/sticky/blob/master/LICENSE.md

	!: lightslider v1.1.3 by Sachin N under MIT License
	https://github.com/sachinchoolur/lightslider

	parallax.js v1.4.2 by PixelCog Inc under MIT License
	https://github.com/pixelcog/parallax.js

	!: jQuery PrettyPhoto v3.1.6 by Stephane Caron under GPLv2 License
	http://www.no-margin-for-errors.com/projects/prettyPhoto-jquery-lightbox-clone/

	!: jQuery Waypoints v2.0.5 by Caleb Troughton under MIT License
	https://github.com/imakewebthings/waypoints


== Changelog ==

= 0.5.0 =
	* Better performance on page loading due to cue improvement.
    * Creation of locopas-min.css
    * Improved styling.
    
= 0.4.0 =
	* Improved responsiveness and better styling files distribution

= 0.3.0 =
	* Updated elements and classes to better responsiveness

= 0.2.0 =
	* Code cleaning and first delivery done

= 0.1.1 =
	* code commented out and moved to .old directory

= 0.1.0 =
	* Initial version based on ParallaxSome Theme by AccesPress
