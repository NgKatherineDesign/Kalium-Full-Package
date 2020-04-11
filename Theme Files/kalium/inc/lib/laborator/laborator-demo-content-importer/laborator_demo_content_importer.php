<?php
/**
 * Laborator 1 Click Demo Content Importer
 *
 * @version 1.2
 * @author  Arlind Nushi
 * @link    www.laborator.co
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

define( 'LAB_1CL_DEMO_INSTALLER_PATH', str_replace( ABSPATH, '', dirname( __FILE__ ) . '/' ) );
define( 'LAB_1CL_DEMO_INSTALLER_STYLESHEET', kalium()->locateFileUrl( 'inc/lib/laborator/laborator-demo-content-importer/demo-content-importer.css' ) );
define( 'LAB_1CL_DEMO_INSTALLER_REMOTE_PATH', 'https://demo-content.kaliumtheme.com/' );

// Get Demo Content Packs
function lab_1cl_demo_installer_get_packs() {
	return array(
		array(
			// Pack Info
			'name'        => 'Main Demo',
			'desc'        => 'This will install Kalium main site demo content. It includes all theme features. All images are grey (takes 2-5 mins to install).',

			// Pack Data
			'thumb'       => 'demo-content/main/screenshot.png',
			'file'        => 'demo-content/main/content.xml',
			'products'    => 'demo-content/main/products.xml',
			'options'     => 'demo-content/main/options.json',
			'layerslider' => '',//'demo-content/main/layerslider.zip',
			'revslider'   => array(
				'demo-content/main/revslider-darkslider.zip',
				'demo-content/main/revslider-homepage.zip',
			),
			'custom_css'  => 'demo-content/main/css.json',
			'widgets'     => 'demo-content/main/widgets.wie',
			'typolab'     => 'demo-content/main/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'Blog',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'portfolio-post-type' ),

			'url' => 'https://demo.kaliumtheme.com/main/',
		),

		array(
			// Pack Info
			'name'        => 'Agency',
			'desc'        => 'This will install Kalium Agency site demo content in grey images format.',

			// Pack Data
			'thumb'       => 'demo-content/agency/screenshot.png',
			'file'        => 'demo-content/agency/content.xml',
			'products'    => '',
			'options'     => 'demo-content/agency/options.json',
			'layerslider' => '',
			'revslider'   => '',
			'custom_css'  => 'demo-content/agency/css.json',
			'widgets'     => 'demo-content/agency/widgets.wie',
			'typolab'     => 'demo-content/agency/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'Blog',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'portfolio-post-type' ),

			'url' => 'https://demo.kaliumtheme.com/agency/',
		),

		array(
			// Pack Info
			'name'        => 'Fashion',
			'desc'        => 'This will install Kalium Fashion site demo content with colored image placeholders.',

			// Pack Data
			'thumb'       => 'demo-content/fashion/screenshot.png',
			'file'        => 'demo-content/fashion/content.xml',
			'products'    => '',
			'options'     => 'demo-content/fashion/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/fashion/revslider-homepage-full.zip',
				'demo-content/fashion/revslider-homepage-slider.zip',
				'demo-content/fashion/revslider-parallax-1.zip',
				'demo-content/fashion/revslider-parallax-2.zip',
				'demo-content/fashion/revslider-parallax-3.zip',
				'demo-content/fashion/revslider-shop-accessories.zip',
				'demo-content/fashion/revslider-shop-men.zip',
				'demo-content/fashion/revslider-shop-shoes.zip',
				'demo-content/fashion/revslider-shop-women.zip',
			),
			'custom_css'  => 'demo-content/fashion/css.json',
			'widgets'     => 'demo-content/fashion/widgets.wie',
			'typolab'     => 'demo-content/fashion/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'News',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'woocommerce' => array(
				// Pages
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'myaccount'  => 'Account',

				// Thumbnails
				'thumbnails' => array(
					'cropping' => 'uncropped',
				),

				// Other Options
				'options'    => array(
					'woocommerce_catalog_columns' => 3,
					'woocommerce_catalog_rows'    => 4,
				),
			),

			'requires' => array( 'woocommerce' ),

			'url' => 'https://demo.kaliumtheme.com/fashion/',
		),

		array(
			// Pack Info
			'name'        => 'Bookstore',
			'desc'        => 'This will install Kalium Bookstore site demo content with colored image placeholders. This demo may take a while to import!',

			// Pack Data
			'thumb'       => 'demo-content/bookstore/screenshot.jpg',
			'child-theme' => 'demo-content/bookstore/kalium-child-bookstore.zip',
			'file'        => 'demo-content/bookstore/content.xml',
			'products'    => '',
			'options'     => 'demo-content/bookstore/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/bookstore/revslider-bookstore.zip',
			),
			'custom_css'  => '',
			'widgets'     => 'demo-content/bookstore/widgets.wie',
			'typolab'     => 'demo-content/bookstore/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'Blog',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'woocommerce' => array(
				// Pages
				'shop'       => 'Books',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'myaccount'  => 'My account',

				// Thumbnails
				'thumbnails' => array(
					'cropping'               => 'custom',
					'cropping_custom_width'  => 50,
					'cropping_custom_height' => 76,
					'image_width'            => 300,
				),

				// Other Options
				'options'    => array(
					'woocommerce_shop_page_display'        => 'both',
					'woocommerce_category_archive_display' => 'both',
					'woocommerce_catalog_columns'          => 3,
					'woocommerce_catalog_rows'             => 4,
				),
			),

			'requires' => array( 'woocommerce', 'portfolio-post-type', 'mailchimp-for-wp' ),

			'url' => 'https://demo.kaliumtheme.com/bookstore/',

			'data' => array(
				'product_category_thumbnails' => '[{"tax":"product_cat","id":15,"name":"Uncategorized","slug":"uncategorized"},{"tax":"product_cat","id":155,"name":"Biography","slug":"biography"},{"tax":"product_cat","id":157,"name":"Children\'s","slug":"childrens-books"},{"tax":"product_cat","id":167,"name":"Cooking","slug":"cooking"},{"tax":"product_cat","id":162,"name":"Drama","slug":"drama"},{"tax":"product_cat","id":166,"name":"Family","slug":"lifestyle"},{"tax":"product_cat","id":168,"name":"Fiction","slug":"fiction"},{"tax":"product_cat","id":165,"name":"History","slug":"history"},{"tax":"product_cat","id":159,"name":"Mystery","slug":"crime-thrillers-mystery"},{"tax":"product_cat","id":171,"name":"Politics","slug":"politics"},{"tax":"product_tag","id":176,"name":"Education","slug":"education"},{"tax":"pa_book-author","id":141,"name":"A. J. Finn","slug":"a-j-finn"},{"tax":"pa_book-author","id":211,"name":"Anne Frank","slug":"annelies-marie-frank"},{"tax":"pa_book-author","id":206,"name":"Camille Pag\u00e1n","slug":"camille-pagan"},{"tax":"pa_book-author","id":218,"name":"Daniel H. Pink","slug":"daniel-h-pink"},{"tax":"pa_book-author","id":220,"name":"Danielle Steel","slug":"danielle-steel"},{"tax":"pa_book-author","id":215,"name":"David Quammen","slug":"david-quammen"},{"tax":"pa_book-author","id":142,"name":"Delia Owens","slug":"delia-owens"},{"tax":"pa_book-author","id":143,"name":"Dr. Seuss","slug":"dr-seuss"},{"tax":"pa_book-author","id":217,"name":"Elliot Ackerman","slug":"elliot-ackerman"},{"tax":"pa_book-author","id":198,"name":"Etaf Rum","slug":"etaf-rum"},{"tax":"pa_book-author","id":216,"name":"Heather Morris","slug":"heather-morris"},{"tax":"pa_book-author","id":264,"name":"Ismail Kadare","slug":"ismail-kadare"},{"tax":"pa_book-author","id":199,"name":"James Holland","slug":"james-holland"},{"tax":"pa_book-author","id":144,"name":"Joanna Gaines","slug":"joanna-gaines"},{"tax":"pa_book-author","id":145,"name":"Jordan B. Peterson","slug":"jordan-b-peterson"},{"tax":"pa_book-author","id":204,"name":"Katie Parla","slug":"katie-parla"},{"tax":"pa_book-author","id":212,"name":"Kirk Wallace Johnson","slug":"kirk-wallace-johnson"},{"tax":"pa_book-author","id":197,"name":"Kristin Fields","slug":"kristin-fields"},{"tax":"pa_book-author","id":146,"name":"Lisa Wingate","slug":"lisa-wingate"},{"tax":"pa_book-author","id":203,"name":"Mark Hyman M.D.","slug":"mark-hyman-m-d"},{"tax":"pa_book-author","id":147,"name":"Mark Manson","slug":"mark-manson"},{"tax":"pa_book-author","id":200,"name":"Marlon James","slug":"marlon-james"},{"tax":"pa_book-author","id":209,"name":"Maya Angelou","slug":"maya-angelou"},{"tax":"pa_book-author","id":205,"name":"Michael Pollan","slug":"michael-pollan"},{"tax":"pa_book-author","id":148,"name":"Michael Wolff","slug":"michael-wolff"},{"tax":"pa_book-author","id":149,"name":"Michelle Obama","slug":"michelle-obama"},{"tax":"pa_book-author","id":213,"name":"Namwali Serpell","slug":"namwali-serpell"},{"tax":"pa_book-author","id":208,"name":"Ned Vizzini","slug":"ned-vizzini"},{"tax":"pa_book-author","id":210,"name":"Patrick Radden Keefe","slug":"patrick-radden-keefe"},{"tax":"pa_book-author","id":214,"name":"Peter Heller","slug":"peter-heller"},{"tax":"pa_book-author","id":150,"name":"R. J. Palacio","slug":"r-j-palacio"},{"tax":"pa_book-author","id":151,"name":"Rachel Hollis","slug":"rachel-hollis"},{"tax":"pa_book-author","id":207,"name":"Ralph Ellison","slug":"ralph-ellison"},{"tax":"pa_book-author","id":152,"name":"Sigrid Nunez","slug":"sigrid-nunez"},{"tax":"pa_book-author","id":195,"name":"Stephen Hawking","slug":"stephen-hawking"},{"tax":"pa_book-author","id":219,"name":"Susan Bernhard","slug":"susan-bernhard"},{"tax":"pa_book-author","id":153,"name":"Tara Westover","slug":"tara-westover"},{"tax":"pa_book-author","id":202,"name":"Tomi Adeyemi","slug":"tomi-adeyemi"},{"tax":"pa_book-author","id":201,"name":"Trevor Noah","slug":"trevor-noah"},{"tax":"pa_format","id":223,"name":"Audio CD","slug":"audio-cd"},{"tax":"pa_format","id":93,"name":"Audiobook","slug":"audiobook"},{"tax":"pa_format","id":91,"name":"Hardcover","slug":"hardcover"},{"tax":"pa_format","id":94,"name":"Kindle Books","slug":"kindle-books"},{"tax":"pa_format","id":92,"name":"Paperback","slug":"paperback"},{"tax":"pa_language","id":86,"name":"English","slug":"english"},{"tax":"pa_language","id":87,"name":"French","slug":"french"},{"tax":"pa_language","id":90,"name":"German","slug":"german"},{"tax":"pa_language","id":89,"name":"Japanese","slug":"japanese"},{"tax":"pa_language","id":88,"name":"Spanish","slug":"spanish"},{"tax":"pa_pages","id":259,"name":"192","slug":"192"},{"tax":"pa_pages","id":265,"name":"208","slug":"208"},{"tax":"pa_pages","id":129,"name":"212","slug":"212"},{"tax":"pa_pages","id":121,"name":"251","slug":"251"},{"tax":"pa_pages","id":237,"name":"256","slug":"256"},{"tax":"pa_pages","id":245,"name":"264","slug":"264"},{"tax":"pa_pages","id":254,"name":"270","slug":"270"},{"tax":"pa_pages","id":234,"name":"272","slug":"272"},{"tax":"pa_pages","id":240,"name":"283","slug":"283"},{"tax":"pa_pages","id":244,"name":"288","slug":"288"},{"tax":"pa_pages","id":255,"name":"304","slug":"304"},{"tax":"pa_pages","id":128,"name":"316","slug":"316"},{"tax":"pa_pages","id":119,"name":"321","slug":"321"},{"tax":"pa_pages","id":226,"name":"350","slug":"350"},{"tax":"pa_pages","id":231,"name":"352","slug":"352"},{"tax":"pa_pages","id":116,"name":"400","slug":"400"},{"tax":"pa_pages","id":113,"name":"409","slug":"409"},{"tax":"pa_pages","id":96,"name":"448","slug":"448"},{"tax":"pa_pages","id":233,"name":"464","slug":"464"},{"tax":"pa_pages","id":115,"name":"480","slug":"480"},{"tax":"pa_pages","id":248,"name":"544","slug":"544"},{"tax":"pa_pages","id":261,"name":"576","slug":"576"},{"tax":"pa_pages","id":250,"name":"640","slug":"640"},{"tax":"pa_publisher","id":236,"name":"Atlantic Monthly Press","slug":"atlantic-monthly-press"},{"tax":"pa_publisher","id":256,"name":"Ballantine Books","slug":"ballantine-books"},{"tax":"pa_publisher","id":228,"name":"Bantam","slug":"bantam"},{"tax":"pa_publisher","id":238,"name":"Clarkson Potter","slug":"clarkson-potter"},{"tax":"pa_publisher","id":246,"name":"Disney-Hyperion","slug":"disney-hyperion"},{"tax":"pa_publisher","id":232,"name":"Doubleday","slug":"doubleday"},{"tax":"pa_publisher","id":229,"name":"Harper","slug":"harper"},{"tax":"pa_publisher","id":243,"name":"Harper Paperbacks","slug":"harper-paperbacks"},{"tax":"pa_publisher","id":249,"name":"Henry Holt and Co","slug":"henry-holt-and-co-2"},{"tax":"pa_publisher","id":118,"name":"Henry Holt and Co.","slug":"henry-holt-and-co"},{"tax":"pa_publisher","id":262,"name":"Hogarth","slug":"hogarth"},{"tax":"pa_publisher","id":258,"name":"Knopf","slug":"knopf"},{"tax":"pa_publisher","id":221,"name":"Lake Union Publishing","slug":"lake-union-publishing"},{"tax":"pa_publisher","id":225,"name":"Little A","slug":"little-a"},{"tax":"pa_publisher","id":239,"name":"Little, Brown Spark","slug":"little-brown-spark"},{"tax":"pa_publisher","id":251,"name":"Modern Library","slug":"modern-library"},{"tax":"pa_publisher","id":253,"name":"Penguin Press","slug":"penguin-press"},{"tax":"pa_publisher","id":114,"name":"Quercus","slug":"quercus"},{"tax":"pa_publisher","id":112,"name":"Random House","slug":"random-house"},{"tax":"pa_publisher","id":235,"name":"Riverhead Books","slug":"riverhead-books"},{"tax":"pa_publisher","id":263,"name":"Simon & Schuster","slug":"simon-schuster"},{"tax":"pa_publisher","id":242,"name":"Spiegel & Grau","slug":"spiegel-grau"},{"tax":"pa_publisher","id":120,"name":"Thomas Nelson","slug":"thomas-nelson"},{"tax":"pa_publisher","id":98,"name":"Viking","slug":"viking"},{"tax":"pa_publisher","id":125,"name":"William Morrow Cookbooks","slug":"william-morrow-cookbooks"},{"tax":"pa_publisher","id":117,"name":"Windmill Books","slug":"windmill-books"},{"tax":"pa_year-published","id":241,"name":"1993","slug":"1993"},{"tax":"pa_year-published","id":252,"name":"1994","slug":"1994"},{"tax":"pa_year-published","id":227,"name":"1998","slug":"1998"},{"tax":"pa_year-published","id":247,"name":"2007","slug":"2007"},{"tax":"pa_year-published","id":257,"name":"2009","slug":"2009"},{"tax":"pa_year-published","id":127,"name":"2014","slug":"2014"},{"tax":"pa_year-published","id":126,"name":"2016","slug":"2016"},{"tax":"pa_year-published","id":97,"name":"2018","slug":"2018"},{"tax":"pa_year-published","id":230,"name":"2019","slug":"2019"}]',
			),
		),

		array(
			// Pack Info
			'name'        => 'Wedding',
			'desc'        => 'This will install Kalium Wedding site demo content with colored image placeholders. This demo may take a while to import!',

			// Pack Data
			'thumb'       => 'demo-content/wedding/screenshot.jpg',
			'file'        => 'demo-content/wedding/content.xml',
			'products'    => '',
			'options'     => 'demo-content/wedding/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/wedding/revslider-intro.zip',
			),
			'custom_css'  => 'demo-content/wedding/css.json',
			'widgets'     => '',
			'typolab'     => 'demo-content/wedding/typolab.json',

			'frontpage' => 'Homepage',
			'postspage' => 'Blog',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'ninja-forms' ),

			'url' => 'https://demo.kaliumtheme.com/wedding/',
		),

		array(
			// Pack Info
			'name'        => 'Medical',
			'desc'        => 'This will install Kalium Medical site demo content with colored image placeholders. This demo may take a while to import!',

			// Pack Data
			'thumb'       => 'demo-content/medical/screenshot.jpg',
			'file'        => 'demo-content/medical/content.xml',
			'products'    => '',
			'options'     => 'demo-content/medical/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/medical/revslider-hospital-slider.zip',
			),
			'custom_css'  => 'demo-content/medical/css.json',
			'widgets'     => 'demo-content/medical/widgets.wie',
			'typolab'     => 'demo-content/medical/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'News',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'portfolio-post-type', 'ninja-forms' ),

			'url' => 'https://demo.kaliumtheme.com/medical/',
		),

		array(
			// Pack Info
			'name'        => 'Automotive',
			'desc'        => 'This will install Kalium Automotive site demo content with colored image placeholders. This demo may take a while to import!',

			// Pack Data
			'thumb'       => 'demo-content/automotive/screenshot.jpg',
			'file'        => 'demo-content/automotive/content.xml',
			'products'    => '',
			'options'     => 'demo-content/automotive/options.json',
			'prdctfltr'   => 'demo-content/automotive/prdctfltr.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/automotive/revslider-about.zip',
				'demo-content/automotive/revslider-homepage-slider.zip',
			),
			'custom_css'  => 'demo-content/automotive/css.json',
			'widgets'     => 'demo-content/automotive/widgets.wie',
			'typolab'     => 'demo-content/automotive/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'News',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'woocommerce' => array(
				// Pages
				'shop'       => 'Cars',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'myaccount'  => 'My account',

				// Thumbnails
				'thumbnails' => array(
					'cropping'               => 'custom',
					'cropping_custom_width'  => 5,
					'cropping_custom_height' => 3,
					'image_width'            => 600,
				),

				// Other Options
				'options'    => array(
					'woocommerce_category_archive_display' => 'both',
					'woocommerce_catalog_columns'          => 3,
					'woocommerce_catalog_rows'             => 8,
				),
			),

			'requires' => array( 'woocommerce', 'prdctfltr' ),

			'url' => 'https://demo.kaliumtheme.com/automotive/',

			'data' => array(
				'product_taxonomy_atts_export' => '[{"tax":"product_cat","id":234,"name":"Motorcycle","slug":"motorcycle"},{"tax":"product_cat","id":143,"name":"Small","slug":"small"},{"tax":"product_cat","id":16,"name":"Hatchback","slug":"hatchback"},{"tax":"product_cat","id":131,"name":"Convertible","slug":"convertible"},{"tax":"product_cat","id":142,"name":"Sport","slug":"sport"},{"tax":"product_cat","id":17,"name":"Sedan","slug":"sedan"},{"tax":"product_cat","id":19,"name":"Estate","slug":"estate"},{"tax":"product_cat","id":18,"name":"SUV","slug":"suv"},{"tax":"product_cat","id":21,"name":"Van","slug":"van"},{"tax":"product_cat","id":161,"name":"Truck","slug":"truck"},{"tax":"product_cat","id":141,"name":"Hybrid-Electric","slug":"hybrid"},{"tax":"product_tag","id":226,"name":"SUV Award","slug":"suv-award"},{"tax":"product_tag","id":229,"name":"bmw","slug":"bmw"},{"tax":"product_tag","id":230,"name":"4er","slug":"4er"},{"tax":"product_tag","id":232,"name":"convertible","slug":"convertible"},{"tax":"pa_brand","id":156,"name":"Alfa Romeo","slug":"alfa-romeo"},{"tax":"pa_brand","id":114,"name":"Audi","slug":"audi"},{"tax":"pa_brand","id":115,"name":"BMW","slug":"bmw"},{"tax":"pa_brand","id":128,"name":"Citro\u00ebn","slug":"citroen"},{"tax":"pa_brand","id":123,"name":"Fiat","slug":"fiat"},{"tax":"pa_brand","id":122,"name":"Ford","slug":"ford"},{"tax":"pa_brand","id":154,"name":"Honda","slug":"honda"},{"tax":"pa_brand","id":155,"name":"Hyundai","slug":"hyundai"},{"tax":"pa_brand","id":153,"name":"Infiniti","slug":"infiniti"},{"tax":"pa_brand","id":119,"name":"Jaguar","slug":"jaguar"},{"tax":"pa_brand","id":147,"name":"Jeep","slug":"jeep"},{"tax":"pa_brand","id":118,"name":"Land Rover","slug":"land-rover"},{"tax":"pa_brand","id":121,"name":"Mazda","slug":"mazda"},{"tax":"pa_brand","id":116,"name":"Mercedes Benz","slug":"mercedes-benz"},{"tax":"pa_brand","id":152,"name":"Mini","slug":"mini"},{"tax":"pa_brand","id":146,"name":"Mitsubishi","slug":"mitsubishi"},{"tax":"pa_brand","id":124,"name":"Nissan","slug":"nissan"},{"tax":"pa_brand","id":127,"name":"Peugeot","slug":"peugeot"},{"tax":"pa_brand","id":148,"name":"Porsche","slug":"porsche"},{"tax":"pa_brand","id":126,"name":"Renault","slug":"renault"},{"tax":"pa_brand","id":145,"name":"Seat","slug":"seat"},{"tax":"pa_brand","id":151,"name":"Skoda","slug":"skoda"},{"tax":"pa_brand","id":150,"name":"Smart","slug":"smart"},{"tax":"pa_brand","id":144,"name":"Suzuku","slug":"suzuku"},{"tax":"pa_brand","id":149,"name":"Tesla","slug":"tesla"},{"tax":"pa_brand","id":120,"name":"Toyota","slug":"toyota"},{"tax":"pa_brand","id":125,"name":"Vauxhall","slug":"vauxhall"},{"tax":"pa_brand","id":235,"name":"Vespa","slug":"vespa"},{"tax":"pa_brand","id":117,"name":"Volkswagen","slug":"volkswagen"},{"tax":"pa_brand","id":129,"name":"Volvo","slug":"volvo"},{"tax":"pa_color","id":34,"name":"Beige","slug":"beige"},{"tax":"pa_color","id":22,"name":"Black","slug":"black"},{"tax":"pa_color","id":24,"name":"Blue","slug":"blue"},{"tax":"pa_color","id":41,"name":"Brown","slug":"brown"},{"tax":"pa_color","id":37,"name":"Green","slug":"green"},{"tax":"pa_color","id":25,"name":"Metallic","slug":"metallic"},{"tax":"pa_color","id":36,"name":"Orange","slug":"orange"},{"tax":"pa_color","id":38,"name":"Purple","slug":"purple"},{"tax":"pa_color","id":23,"name":"Red","slug":"red"},{"tax":"pa_color","id":35,"name":"Silver","slug":"silver"},{"tax":"pa_color","id":40,"name":"White","slug":"white"},{"tax":"pa_color","id":39,"name":"Yellow","slug":"yellow"},{"tax":"pa_doors","id":109,"name":"2\/3","slug":"23"},{"tax":"pa_doors","id":110,"name":"4\/5","slug":"45"},{"tax":"pa_doors","id":111,"name":"6\/7","slug":"67"},{"tax":"pa_fuel","id":27,"name":"Diesel","slug":"diesel"},{"tax":"pa_fuel","id":30,"name":"Electric","slug":"electric"},{"tax":"pa_fuel","id":29,"name":"Hybrid","slug":"hybrid"},{"tax":"pa_fuel","id":28,"name":"Petrol","slug":"petrol"},{"tax":"pa_horsepower","id":183,"name":"101","slug":"101"},{"tax":"pa_horsepower","id":178,"name":"105","slug":"105"},{"tax":"pa_horsepower","id":133,"name":"110","slug":"110"},{"tax":"pa_horsepower","id":168,"name":"120","slug":"120"},{"tax":"pa_horsepower","id":187,"name":"125","slug":"125"},{"tax":"pa_horsepower","id":170,"name":"140","slug":"140"},{"tax":"pa_horsepower","id":177,"name":"150","slug":"150"},{"tax":"pa_horsepower","id":167,"name":"160","slug":"160"},{"tax":"pa_horsepower","id":165,"name":"170","slug":"170"},{"tax":"pa_horsepower","id":175,"name":"172","slug":"172"},{"tax":"pa_horsepower","id":164,"name":"180","slug":"180"},{"tax":"pa_horsepower","id":132,"name":"185","slug":"185"},{"tax":"pa_horsepower","id":139,"name":"190","slug":"190"},{"tax":"pa_horsepower","id":112,"name":"220","slug":"220"},{"tax":"pa_horsepower","id":157,"name":"230","slug":"230"},{"tax":"pa_horsepower","id":137,"name":"235","slug":"235"},{"tax":"pa_horsepower","id":182,"name":"240","slug":"240"},{"tax":"pa_horsepower","id":159,"name":"243","slug":"243"},{"tax":"pa_horsepower","id":162,"name":"255","slug":"255"},{"tax":"pa_horsepower","id":172,"name":"300","slug":"300"},{"tax":"pa_horsepower","id":171,"name":"310","slug":"310"},{"tax":"pa_horsepower","id":169,"name":"350","slug":"350"},{"tax":"pa_horsepower","id":176,"name":"360","slug":"360"},{"tax":"pa_horsepower","id":174,"name":"380","slug":"380"},{"tax":"pa_horsepower","id":181,"name":"385","slug":"385"},{"tax":"pa_horsepower","id":160,"name":"580","slug":"580"},{"tax":"pa_horsepower","id":186,"name":"89","slug":"89"},{"tax":"pa_horsepower","id":184,"name":"90","slug":"90"},{"tax":"pa_interior-features","id":65,"name":"Auxiliary heating","slug":"auxiliary-heating"},{"tax":"pa_interior-features","id":66,"name":"Bluetooth","slug":"bluetooth"},{"tax":"pa_interior-features","id":64,"name":"CD player","slug":"cd-player"},{"tax":"pa_interior-features","id":67,"name":"Central locking","slug":"central-locking"},{"tax":"pa_interior-features","id":68,"name":"Cruise control","slug":"cruise-control"},{"tax":"pa_interior-features","id":69,"name":"Electric heated seats","slug":"electric-heated-seats"},{"tax":"pa_interior-features","id":70,"name":"Electric seat adjustment","slug":"electric-seat-adjustment"},{"tax":"pa_interior-features","id":71,"name":"Electric side mirror","slug":"electric-side-mirror"},{"tax":"pa_interior-features","id":72,"name":"Electric windows","slug":"electric-windows"},{"tax":"pa_interior-features","id":73,"name":"Hands-free kit","slug":"hands-free-kit"},{"tax":"pa_interior-features","id":74,"name":"Head-up display","slug":"head-up-display"},{"tax":"pa_interior-features","id":75,"name":"Isofix","slug":"isofix"},{"tax":"pa_interior-features","id":79,"name":"MP3 interface","slug":"mp3-interface"},{"tax":"pa_interior-features","id":78,"name":"Multifunction steering wheel","slug":"multifunction-steering-wheel"},{"tax":"pa_interior-features","id":77,"name":"Navigation system","slug":"navigation-system"},{"tax":"pa_interior-features","id":76,"name":"On-board computer","slug":"on-board-computer"},{"tax":"pa_interior-features","id":80,"name":"Power Assisted Steering","slug":"power-assisted-steering"},{"tax":"pa_interior-features","id":81,"name":"Rain sensor","slug":"rain-sensor"},{"tax":"pa_interior-features","id":82,"name":"Ski bag","slug":"ski-bag"},{"tax":"pa_interior-features","id":83,"name":"Start-stop system","slug":"start-stop-system"},{"tax":"pa_interior-features","id":86,"name":"Sunroof","slug":"sunroof"},{"tax":"pa_interior-features","id":85,"name":"Tuner\/radio","slug":"tunerradio"},{"tax":"pa_interior-features","id":84,"name":"Ventilated Seats","slug":"ventilated-seats"},{"tax":"pa_kilometers","id":140,"name":"0","slug":"0"},{"tax":"pa_kilometers","id":180,"name":"10000","slug":"10000"},{"tax":"pa_kilometers","id":185,"name":"1200","slug":"1200"},{"tax":"pa_kilometers","id":158,"name":"12000","slug":"12000"},{"tax":"pa_kilometers","id":173,"name":"20000","slug":"20000"},{"tax":"pa_kilometers","id":166,"name":"25000","slug":"25000"},{"tax":"pa_kilometers","id":136,"name":"5000","slug":"5000"},{"tax":"pa_kilometers","id":179,"name":"50000","slug":"50000"},{"tax":"pa_kilometers","id":163,"name":"7800","slug":"7800"},{"tax":"pa_security","id":87,"name":"ABS","slug":"abs"},{"tax":"pa_security","id":88,"name":"Adaptive Cruise Control","slug":"adaptive-cruise-control"},{"tax":"pa_security","id":89,"name":"Adaptive lighting","slug":"adaptive-lighting"},{"tax":"pa_security","id":90,"name":"Blind Spot Monitor","slug":"blind-spot-monitor"},{"tax":"pa_security","id":91,"name":"Collision Avoidance System","slug":"collision-avoidance-system"},{"tax":"pa_security","id":92,"name":"Daytime running lights","slug":"daytime-running-lights"},{"tax":"pa_security","id":93,"name":"ESP","slug":"esp"},{"tax":"pa_security","id":94,"name":"Fog lamp","slug":"fog-lamp"},{"tax":"pa_security","id":95,"name":"Immobilizer","slug":"immobilizer"},{"tax":"pa_security","id":96,"name":"Keyless Entry","slug":"keyless-entry"},{"tax":"pa_security","id":97,"name":"Lane Departure Warning","slug":"lane-departure-warning"},{"tax":"pa_security","id":98,"name":"LED Headlights","slug":"led-headlights"},{"tax":"pa_security","id":99,"name":"Light sensor","slug":"light-sensor"},{"tax":"pa_security","id":100,"name":"Traction control","slug":"traction-control"},{"tax":"pa_security","id":101,"name":"Xenon headlights","slug":"xenon-headlights"},{"tax":"pa_sensors","id":104,"name":"Camera","slug":"camera"},{"tax":"pa_sensors","id":102,"name":"Front sensors","slug":"front-sensors"},{"tax":"pa_sensors","id":103,"name":"Rear sensors","slug":"rear-sensors"},{"tax":"pa_sensors","id":105,"name":"Self-steering systems","slug":"self-steering-systems"},{"tax":"pa_system","id":106,"name":"AWD (All Wheel Drive)","slug":"awd-all-wheel-drive"},{"tax":"pa_system","id":108,"name":"FWD (Fear Wheel Drive)","slug":"fwd-fear-wheel-drive"},{"tax":"pa_system","id":107,"name":"RWD (Rear Wheel Drive)","slug":"rwd-rear-wheel-drive"},{"tax":"pa_transmission","id":32,"name":"Automatic","slug":"automatic"},{"tax":"pa_transmission","id":31,"name":"Manual","slug":"manual"},{"tax":"pa_transmission","id":33,"name":"Semi-automatic","slug":"semi-automatic"}]',
			),
		),

		array(
			// Pack Info
			'name'        => 'Law',
			'desc'        => 'This will install Kalium Law site demo content with colored image placeholders.',

			// Pack Data
			'thumb'       => 'demo-content/law/screenshot.jpg',
			'file'        => 'demo-content/law/content.xml',
			'products'    => '',
			'options'     => 'demo-content/law/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/law/revslider-homepage-slider.zip',
			),
			'custom_css'  => 'demo-content/law/css.json',
			'widgets'     => 'demo-content/law/widgets.wie',
			'typolab'     => 'demo-content/law/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'News',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array(),

			'url' => 'https://demo.kaliumtheme.com/law/',
		),

		array(
			// Pack Info
			'name'        => 'Hotel',
			'desc'        => 'This will install Kalium Hotel site demo content with colored image placeholders.',

			// Pack Data
			'thumb'       => 'demo-content/hotel/screenshot.jpg',
			'file'        => 'demo-content/hotel/content.xml',
			'products'    => '',
			'options'     => 'demo-content/hotel/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/hotel/revslider-hotel-slider.zip',
			),
			'custom_css'  => 'demo-content/hotel/css.json',
			'widgets'     => 'demo-content/hotel/widgets.wie',
			'typolab'     => 'demo-content/hotel/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'Events',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'portfolio-post-type' ),

			'url' => 'https://demo.kaliumtheme.com/hotel/',
		),

		array(
			// Pack Info
			'name'        => 'Architecture',
			'desc'        => 'This will install Kalium Architecture site demo content with colored image placeholders.',

			// Pack Data
			'thumb'       => 'demo-content/architecture/screenshot.jpg',
			'file'        => 'demo-content/architecture/content.xml',
			'products'    => 'demo-content/main/products.xml',
			'options'     => 'demo-content/architecture/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/architecture/revslider-architecture.zip',
				'demo-content/architecture/revslider-home-two.zip',
			),
			'custom_css'  => 'demo-content/architecture/css.json',
			'widgets'     => 'demo-content/architecture/widgets.wie',
			'typolab'     => 'demo-content/architecture/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'News',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'portfolio-post-type' ),

			'url' => 'https://demo.kaliumtheme.com/architecture/',
		),

		array(
			// Pack Info
			'name'        => 'Restaurant',
			'desc'        => 'This will install Kalium Restaurant site demo content with colored image placeholders.',

			// Pack Data
			'thumb'       => 'demo-content/restaurant/screenshot.jpg',
			'file'        => 'demo-content/restaurant/content.xml',
			'products'    => '',
			'options'     => 'demo-content/restaurant/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/restaurant/revslider-homepage.zip',
			),
			'custom_css'  => 'demo-content/restaurant/css.json',
			'widgets'     => 'demo-content/restaurant/widgets.wie',
			'typolab'     => 'demo-content/restaurant/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'News',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array(),

			'url' => 'https://demo.kaliumtheme.com/restaurant/',
		),

		array(
			// Pack Info
			'name'        => 'Construction',
			'desc'        => 'This will install Kalium Construction site demo content with colored image placeholders.',

			// Pack Data
			'thumb'       => 'demo-content/construction/screenshot.jpg',
			'file'        => 'demo-content/construction/content.xml',
			'products'    => '',
			'options'     => 'demo-content/construction/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/construction/revslider-home.zip',
			),
			'custom_css'  => 'demo-content/construction/css.json',
			'widgets'     => 'demo-content/construction/widgets.wie',
			'typolab'     => 'demo-content/construction/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'News',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'portfolio-post-type' ),

			'url' => 'https://demo.kaliumtheme.com/construction/',
		),

		array(
			// Pack Info
			'name'        => 'Travel',
			'desc'        => 'This will install Kalium Travel site demo content with colored image placeholders.',

			// Pack Data
			'thumb'       => 'demo-content/travel/screenshot.png',
			'file'        => 'demo-content/travel/content.xml',
			'products'    => '',
			'options'     => 'demo-content/travel/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/travel/revslider-main-slider.zip',
			),
			'custom_css'  => 'demo-content/travel/css.json',
			'widgets'     => 'demo-content/travel/widgets.wie',
			'typolab'     => 'demo-content/travel/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'News',
			'menus'     => array( 'main-menu' => 'Basic' ),

			'requires' => array( 'portfolio-post-type', 'ninja-forms', 'bookingcom-official-searchbox' ),

			'url' => 'https://demo.kaliumtheme.com/travel/',
		),

		array(
			// Pack Info
			'name'        => 'Photography',
			'desc'        => 'This will install Kalium Photography site demo content in grey images format.',

			// Pack Data
			'thumb'       => 'demo-content/photography/screenshot.png',
			'file'        => 'demo-content/photography/content.xml',
			'products'    => '',
			'options'     => 'demo-content/photography/options.json',
			'layerslider' => '',
			'revslider'   => '',
			'custom_css'  => 'demo-content/photography/css.json',
			'widgets'     => 'demo-content/photography/widgets.wie',
			'typolab'     => 'demo-content/photography/typolab.json',

			'frontpage' => 'Work',
			'postspage' => 'Blog',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'portfolio-post-type', 'ninja-forms' ),

			'url' => 'https://demo.kaliumtheme.com/photography/',
		),

		array(
			// Pack Info
			'name'        => 'Landing Page',
			'desc'        => 'This will install Kalium Landing page demo content in original images format.',

			// Pack Data
			'thumb'       => 'demo-content/landing/screenshot.png',
			'file'        => 'demo-content/landing/content.xml',
			'products'    => '',
			'options'     => 'demo-content/landing/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/landing/revslider-landing.zip',
				'demo-content/landing/revslider-apple-watch.zip',
			),
			'custom_css'  => 'demo-content/landing/css.json',
			'widgets'     => '',
			'typolab'     => 'demo-content/landing/typolab.json',

			'frontpage' => 'Homepage',
			'postspage' => 'Blog',
			'menus'     => array( 'main-menu' => 'One Page Menu' ),

			'requires' => array(),

			'url' => 'https://demo.kaliumtheme.com/landing/',
		),

		array(
			// Pack Info
			'name'        => 'Shop',
			'desc'        => 'This will install Kalium Shop site demo content in colored images format.',

			// Pack Data
			'thumb'       => 'demo-content/shop/screenshot.png',
			'file'        => 'demo-content/shop/content.xml',
			'products'    => '',
			'options'     => 'demo-content/shop/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/shop/revslider-shop_slider.zip',
			),
			'custom_css'  => 'demo-content/shop/css.json',
			'widgets'     => 'demo-content/shop/widgets.wie',
			'typolab'     => 'demo-content/shop/typolab.json',

			'frontpage' => 'Homepage',
			'postspage' => 'Blog',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'woocommerce' => array(
				// Pages
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'myaccount'  => 'My Account',

				// Thumbnails
				'thumbnails' => array(
					'cropping'               => 'custom',
					'cropping_custom_width'  => 11,
					'cropping_custom_height' => 14,
					'image_width'            => 550,
				),

				// Other Options
				'options'    => array(
					'woocommerce_catalog_columns' => 3,
					'woocommerce_catalog_rows'    => 4,
				),
			),

			'requires' => array( 'woocommerce' ),

			'url' => 'https://demo.kaliumtheme.com/shop/',
		),

		array(
			// Pack Info
			'name'        => 'Education',
			'desc'        => 'This will install Kalium Education site demo content in colored images format.',

			// Pack Data
			'thumb'       => 'demo-content/education/screenshot.png',
			'file'        => 'demo-content/education/content.xml',
			'products'    => '',
			'options'     => 'demo-content/education/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/education/revslider-contact.zip',
				'demo-content/education/revslider-blog.zip',
				'demo-content/education/revslider-homepage-slider.zip',
				'demo-content/education/revslider-courses.zip',
				'demo-content/education/revslider-news.zip',
			),
			'custom_css'  => 'demo-content/education/css.json',
			'widgets'     => 'demo-content/education/widgets.wie',
			'typolab'     => 'demo-content/education/typolab.json',

			'frontpage' => 'Homepage',
			'postspage' => 'News',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'portfolio-post-type' ),

			'url' => 'https://demo.kaliumtheme.com/education/',
			'new' => true,
		),

		array(
			// Pack Info
			'name'        => 'Fitness',
			'desc'        => 'This will install Kalium Fitness site demo content in colored images format.',

			// Pack Data
			'thumb'       => 'demo-content/fitness/screenshot.png',
			'file'        => 'demo-content/fitness/content.xml',
			'products'    => '',
			'options'     => 'demo-content/fitness/options.json',
			'layerslider' => '',
			'revslider'   => array(
				'demo-content/fitness/revslider-membership.zip',
				'demo-content/fitness/revslider-homepage.zip',
			),
			'custom_css'  => 'demo-content/fitness/css.json',
			'widgets'     => 'demo-content/fitness/widgets.wie',
			'typolab'     => 'demo-content/fitness/typolab.json',

			'frontpage' => 'Home',
			'postspage' => 'Blog',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'woocommerce' => array(
				// Pages
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'myaccount'  => 'My Account',

				// Thumbnails
				'thumbnails' => array(
					'cropping'               => 'custom',
					'cropping_custom_width'  => 4,
					'cropping_custom_height' => 5,
					'image_width'            => 300,
				),

				// Other Options
				'options'    => array(
					'woocommerce_catalog_columns' => 3,
					'woocommerce_catalog_rows'    => 4,
				),
			),

			'requires' => array( 'portfolio-post-type', 'woocommerce' ),

			'url' => 'https://demo.kaliumtheme.com/fitness/',
			'new' => true,
		),

		array(
			// Pack Info
			'name'        => 'Freelancer',
			'desc'        => 'This will install Kalium Freelancer site demo content in colored images format.',

			// Pack Data
			'thumb'       => 'demo-content/freelancer/screenshot.png',
			'file'        => 'demo-content/freelancer/content.xml',
			'products'    => 'demo-content/main/products.xml',
			'options'     => 'demo-content/freelancer/options.json',
			'layerslider' => '',
			'revslider'   => '',
			'custom_css'  => 'demo-content/freelancer/css.json',
			'widgets'     => 'demo-content/freelancer/widgets.wie',
			'typolab'     => 'demo-content/freelancer/typolab.json',

			'frontpage' => 'Portfolio',
			'postspage' => 'Blog',
			'menus'     => array( 'main-menu' => 'Main Menu' ),

			'requires' => array( 'portfolio-post-type' ),

			'url' => 'https://demo.kaliumtheme.com/freelancer/',
		),

		array(
			// Pack Info
			'name'        => 'Blogging',
			'desc'        => 'This will install Kalium Blogging site demo content in colored images format.',

			// Pack Data
			'thumb'       => 'demo-content/blogging/screenshot.png',
			'file'        => 'demo-content/blogging/content.xml',
			'products'    => 'demo-content/main/products.xml',
			'options'     => 'demo-content/blogging/options.json',
			'layerslider' => '',
			'revslider'   => '',
			'custom_css'  => 'demo-content/blogging/css.json',
			'widgets'     => 'demo-content/blogging/widgets.wie',
			'typolab'     => 'demo-content/blogging/typolab.json',

			'menus' => array( 'main-menu' => 'Main Menu' ),

			'url' => 'https://demo.kaliumtheme.com/blogging/',
		),
	);
}

// Importer Page
function lab_1cl_demo_installer_menu() {
	wp_register_style( 'lab-1cl-demo-installer', LAB_1CL_DEMO_INSTALLER_STYLESHEET, null, kalium()->getVersion() );
	wp_enqueue_style( 'lab-1cl-demo-installer' );
}

add_action( 'admin_menu', 'lab_1cl_demo_installer_menu' );

// 1-click demo content installer page
function lab_1cl_demo_installer_page() {

	// Change Media Download Status
	if ( isset( $_POST['lab_change_media_status'] ) ) {
		update_option( 'lab_1cl_demo_installer_download_media', kalium()->post( 'lab_1cl_demo_installer_download_media' ) ? true : false );
	}

	wp_enqueue_script( 'thickbox' );
	wp_enqueue_style( 'thickbox' );

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	include 'demo-content-page.php';
}

// Get demo content package based on name
function lab_1cl_demo_installer_get_pack( $name ) {
	foreach ( lab_1cl_demo_installer_get_packs() as $pack ) {
		if ( sanitize_title( $pack['name'] ) == $name ) {
			return $pack;
		}
	}

	return null;
}

// Import Content Pack
function lab_1cl_demo_installer_admin_init() {

	if ( kalium()->url->get( 'page' ) == 'laborator-demo-content-installer' && ( $pack_name = kalium()->url->get( 'install-pack' ) ) ) {
		$pack = lab_1cl_demo_installer_get_pack( $pack_name );

		if ( $pack ) {
			if ( is_plugin_active( 'wordpress-importer/wordpress-importer.php' ) ) {
				deactivate_plugins( array( 'wordpress-importer/wordpress-importer.php' ) );
				update_option( 'lab_should_activate_wp_importer', true );

				wp_redirect( admin_url( 'admin.php?page=laborator-demo-content-installer&install-pack="' . sanitize_title( $pack_name ) ) );
				exit;
			}

			require 'demo-content-install-pack.php';
			die();
		}
	}
}

add_action( 'admin_init', 'lab_1cl_demo_installer_admin_init' );

// Save Custom CSS Options
function lab_1cl_demo_installer_custom_css_save( $custom_css_vars ) {
	foreach ( $custom_css_vars as $var_name => $value ) {
		update_option( $var_name, $value );
	}
}

// Get Packpage Contents to Install
function lab_1cl_demo_installer_pack_content_types( $pack ) {
	$active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

	$full_path     = ABSPATH . LAB_1CL_DEMO_INSTALLER_PATH;
	$content_packs = array();

	// Child Theme
	if ( isset( $pack['child-theme'] ) && $pack['child-theme'] ) {
		$content_packs[] = array(
			'type'        => 'child-theme',
			'title'       => 'Install ' . $pack['name'] . ' Child Theme',
			'description' => 'This will install and activate child theme associated with this demo content type.',
			'checked'     => isset( $pack['child_theme_checked'] ) ? $pack['child_theme_checked'] : true,
			'disabled'    => false,
			'requires'    => array(),
			'size'        => 0,
		);
	}

	// WP Content
	if ( isset( $pack['file'] ) && $pack['file'] ) {
		$xml_file_size = '';

		$file_content_pack = array(
			'type'        => 'xml-wp-content',
			'title'       => 'WordPress Content',
			'description' => 'This will import posts, pages, comments, custom fields, terms, navigation menus and custom posts.',
			'checked'     => isset( $pack['file_checked'] ) ? $pack['file_checked'] : true,
			'requires'    => array(),
			'size'        => size_format( $xml_file_size, 2 ),
		);

		if ( isset( $pack['requires'] ) && is_array( $pack['requires'] ) && count( $pack['requires'] ) ) {
			// Portfolio Post Type Plugin
			if ( in_array( 'portfolio-post-type', $pack['requires'] ) ) {
				$portfolio_plugin = 'portfolio-post-type/portfolio-post-type.php';

				if ( ! in_array( $portfolio_plugin, $active_plugins ) && ! is_plugin_active_for_network( $portfolio_plugin ) ) {
					$file_content_pack['checked']                         = false;
					$file_content_pack['disabled']                        = true;
					$file_content_pack['requires']['portfolio-post-type'] = 'This content pack includes portfolio items which requires <strong>Portfolio Post Type</strong> plugin, to install it go to <a href="' . esc_url( admin_url( "themes.php?page=kalium-install-plugins" ) ) . '" target="_blank">Appearance &raquo; Install Plugins</a> and then refresh this page.';
				}
			}

			// WooCommerce Plugin
			if ( in_array( 'woocommerce', $pack['requires'] ) ) {
				$woocommerce_plugin = 'woocommerce/woocommerce.php';

				if ( ! in_array( $woocommerce_plugin, $active_plugins ) && ! is_plugin_active_for_network( $woocommerce_plugin ) ) {
					$file_content_pack['checked']                 = false;
					$file_content_pack['disabled']                = true;
					$file_content_pack['requires']['woocommerce'] = 'This content pack includes shop products which requires <strong>WooCommerce</strong> plugin, to install it go to <a href="' . esc_url( admin_url( "themes.php?page=kalium-install-plugins" ) ) . '" target="_blank">Appearance &raquo; Install Plugins</a> and then refresh this page.';
				}
			}

			// Product Filter Plugin
			if ( in_array( 'prdctfltr', $pack['requires'] ) ) {
				$prdctfltr_plugin  = 'prdctfltr/prdctfltr.php';
				$prdctfltr_warning = 'This content pack requires <strong>WooCommerce Product Filter</strong> plugin to be installed and activated. To install it go to <a href="' . esc_url( admin_url( "themes.php?page=kalium-install-plugins" ) ) . '" target="_blank">Appearance &raquo; Install Plugins</a> and then refresh this page.';

				if ( ! in_array( $prdctfltr_plugin, $active_plugins ) && ! is_plugin_active_for_network( $prdctfltr_plugin ) ) {
					$file_content_pack['checked']               = false;
					$file_content_pack['disabled']              = true;
					$file_content_pack['requires']['prdctfltr'] = $prdctfltr_warning;
				}
			}

			// Ninja Forms
			if ( in_array( 'ninja-forms', $pack['requires'] ) ) {
				$ninjaforms_plugin = 'ninja-forms/ninja-forms.php';

				if ( ! in_array( $ninjaforms_plugin, $active_plugins ) && ! is_plugin_active_for_network( $ninjaforms_plugin ) ) {
					//$file_content_pack['checked']                 = false;
					//$file_content_pack['disabled']                = true;
					$file_content_pack['requires']['ninja-forms'] = 'This content pack recommends <strong>Ninja Forms</strong> plugin to be installed and activated. To install it go to <a href="' . esc_url( admin_url( "plugin-install.php?s=Ninja+Forms&tab=search&type=term" ) ) . '" target="_blank">Plugins</a> and then refresh this page.';
				}
			}

			// Mailchimp for WP
			if ( in_array( 'mailchimp-for-wp', $pack['requires'] ) ) {
				$mailchimp_for_wp_plugin = 'mailchimp-for-wp/mailchimp-for-wp.php';

				if ( ! in_array( $mailchimp_for_wp_plugin, $active_plugins ) && ! is_plugin_active_for_network( $mailchimp_for_wp_plugin ) ) {
					//$file_content_pack['checked']                 = true;
					//$file_content_pack['disabled']                = false;
					$file_content_pack['requires']['mailchimp-for-wp'] = 'This content pack recommends <strong>Mailchimp for WordPress</strong> plugin to be installed and activated. To install it go to <a href="' . esc_url( admin_url( "plugin-install.php?s=Mailchimp+for+WordPress&tab=search&type=term" ) ) . '" target="_blank">Plugins</a> and then refresh this page.';
				}
			}

			// Booking.com Official Searchbox
			if ( in_array( 'bookingcom-official-searchbox', $pack['requires'] ) ) {
				$booking_official_searchbox_plugin = 'bookingcom-official-searchbox/booking-official-searchbox.php';

				if ( ! in_array( $booking_official_searchbox_plugin, $active_plugins ) && ! is_plugin_active_for_network( $booking_official_searchbox_plugin ) ) {
					//$file_content_pack['checked']                                   = false;
					//$file_content_pack['disabled']                                  = true;
					$file_content_pack['requires']['bookingcom-official-searchbox'] = 'This content pack recommends <strong>Booking.com Official Search Box</strong> plugin to be installed and activated. To install it go to <a href="' . esc_url( admin_url( "plugin-install.php?s=Booking.com+Official+Search+Box&tab=search&type=term" ) ) . '" target="_blank">Plugins</a> and then refresh this page.';
				}
			}

		}

		$content_packs[] = $file_content_pack;

		// Download Media Attachments
		if ( ! isset( $file_content_pack['disabled'] ) ) {
			$content_packs[] = array(
				'type'        => 'xml-wp-download-media',
				'title'       => 'Media Files',
				'description' => 'This will download all media files presented in this demo content pack. Note: Images are in colored format.',
				'checked'     => $file_content_pack['checked'],
				'requires'    => array(),
				'size'        => '',
			);
		}
	}

	// Product Filter
	if ( isset( $pack['prdctfltr'] ) && $pack['prdctfltr'] ) {
		$prdctfltr_plugin_active = kalium()->helpers->isPluginActive( $prdctfltr_plugin );

		$content_packs[] = array(
			'type'        => 'prdctfltr-options',
			'title'       => 'WooCommerce Product Filter Options',
			'description' => 'This will import WooCommerce Product Filters options and will rewrite all current filters added in WooCommerce &raquo; Settings &raquo; Product Filter.',
			'checked'     => isset( $pack['prdctfltr_checked'] ) ? $pack['prdctfltr_checked'] : $prdctfltr_plugin_active,
			'disabled'    => ! $prdctfltr_plugin_active,
			'requires'    => $prdctfltr_plugin_active ? array() : array(
				'prdctfltr' => ! empty( $prdctfltr_warning ) ? $prdctfltr_warning : '',
			),
			'size'        => 0,
		);
	}

	// Typolab
	if ( isset( $pack['typolab'] ) && $pack['typolab'] ) {
		$content_packs[] = array(
			'type'        => 'typolab',
			'title'       => 'Typography',
			'description' => 'This will import font families and font sizes of this demo content.',
			'checked'     => isset( $pack['typolab_checked'] ) ? $pack['typolab_checked'] : true,
			'disabled'    => false,
			'requires'    => array(),
			'size'        => 0,
		);
	}

	// Widgets
	if ( isset( $pack['widgets'] ) && $pack['widgets'] ) {
		$content_packs[] = array(
			'type'        => 'widgets',
			'title'       => 'Widgets',
			'description' => 'This will import default widgets presented in demo site of this content package.',
			'checked'     => isset( $pack['widgets_checked'] ) ? $pack['widgets_checked'] : true,
			'disabled'    => false,
			'requires'    => array(),
			'size'        => 0,
		);
	}

	// WooCommerce Products
	if ( isset( $pack['products'] ) && $pack['products'] ) {
		$products_content_pack = array(
			'type'        => 'xml-products',
			'title'       => 'WooCommerce Products',
			'description' => 'This will import default WooCommerce shop products and categories.',
			'checked'     => isset( $pack['products_checked'] ) ? $pack['products_checked'] : false,
			'requires'    => array(),
			'size'        => '',
		);

		$woocommerce_plugin = 'woocommerce/woocommerce.php';

		if ( ! in_array( $woocommerce_plugin, apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && ! is_plugin_active_for_network( $woocommerce_plugin ) ) {
			$products_content_pack['disabled']                = true;
			$products_content_pack['checked']                 = false;
			$products_content_pack['requires']['woocommerce'] = 'This content pack includes shop products which requires WooCommerce plugin, to install it go to <a href="' . esc_url( admin_url( "themes.php?page=kalium-install-plugins" ) ) . '" target="_blank">Appearance &raquo; Install Plugins</a> and then refresh this page.';
		}

		$content_packs[] = $products_content_pack;
	}

	// Theme Options
	if ( isset( $pack['options'] ) && $pack['options'] ) {
		$theme_options_size = '';

		$content_packs[] = array(
			'type'        => 'theme-options',
			'title'       => 'Theme Options',
			'description' => 'This will import theme options and will rewrite all current settings in Appearance &raquo; Theme Options.',
			'checked'     => isset( $pack['options_checked'] ) ? $pack['options_checked'] : true,
			'requires'    => array(),
			'size'        => size_format( $theme_options_size, 2 ),
		);
	}

	// Custom CSS
	if ( isset( $pack['custom_css'] ) && $pack['custom_css'] ) {
		$custom_css_size = '';

		$content_packs[] = array(
			'type'        => 'custom-css',
			'title'       => 'Custom CSS',
			'description' => 'This content pack contains custom styling which can be later accessed in <a href="' . esc_url( admin_url( "admin.php?page=laborator_custom_css" ) ) . '" target="_blank">Custom CSS</a>.',
			'checked'     => isset( $pack['custom_css_checked'] ) ? $pack['custom_css_checked'] : true,
			'requires'    => array(),
			'size'        => size_format( $custom_css_size, 2 ),
		);
	}

	// Revolution Slider
	if ( isset( $pack['revslider'] ) && $pack['revslider'] ) {
		$revslider_size      = '';
		$revslider_activated = in_array( 'revslider/revslider.php', $active_plugins );

		$content_packs[] = array(
			'type'        => 'revslider',
			'title'       => 'Revolution Slider',
			'description' => 'This will import all sliders presented in demo site of this content package.',
			'checked'     => $revslider_activated ? ( isset( $pack['revslider_checked'] ) ? $pack['revslider_checked'] : true ) : false,
			'disabled'    => ! $revslider_activated,
			'requires'    => $revslider_activated ? array() : array(
				'revslider' => 'To import Revolution Slider content you must install and activate this plugin in <a href="' . esc_url( admin_url( 'themes.php?page=kalium-install-plugins' ) ) . '" target="_blank">Appearance &raquo; Install Plugins</a> and then refresh this page.',
			),
			'size'        => size_format( $revslider_size, 2 ),
		);
	}

	// Layer Slider
	if ( isset( $pack['layerslider'] ) && $pack['layerslider'] ) {
		$layerslider_size      = '';
		$layerslider_activated = in_array( 'LayerSlider/layerslider.php', $active_plugins );

		$content_packs[] = array(
			'type'        => 'layerslider',
			'title'       => 'Layer Slider',
			'description' => 'This will import all sliders presented in demo site of this content package.',
			'checked'     => isset( $pack['layerslider_checked'] ) ? $pack['layerslider_checked'] : false,
			'disabled'    => ! $layerslider_activated,
			'requires'    => $layerslider_activated ? array() : array(
				'layerslider' => 'To import Layer Slider content you must install and activate this plugin in <a href="' . esc_url( admin_url( 'themes.php?page=kalium-install-plugins' ) ) . '" target="_blank">Appearance &raquo; Install Plugins</a> and then refresh this page.',
			),
			'size'        => size_format( $layerslider_size, 2 ),
		);
	}

	return $content_packs;
}

// Get demo content file or download from remote server
function lab_1cl_demo_installer_get_file_from_path( $file_path ) {
	$local_path  = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;
	$full_path   = $local_path . $file_path;
	$remote_path = LAB_1CL_DEMO_INSTALLER_REMOTE_PATH . $file_path;

	if ( file_exists( $full_path ) ) {
		return $full_path;
	}

	return download_url( $remote_path );

}

// Import Content Pack
function lab_1cl_demo_install_package_content() {
	$resp = array(
		'success'  => false,
		'errorMsg' => '',
	);

	$pack_name      = kalium()->url->get( 'pack' );
	$source_details = kalium()->url->get( 'contentSourceDetails' );

	$pack = lab_1cl_demo_installer_get_pack( $pack_name );

	// Content Source Install by Type
	switch ( $source_details['type'] ) {
		case 'child-theme':
			$child_theme_file = LAB_1CL_DEMO_INSTALLER_REMOTE_PATH . $pack['child-theme'];
			$theme_slug       = str_replace( '.zip', '', basename( $child_theme_file ) );

			try {
				// Install Child Theme
				include_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
				include_once( ABSPATH . 'wp-admin/includes/file.php' );
				include_once( ABSPATH . 'wp-admin/includes/misc.php' );

				$upgrader_skin = array(
					'title' => 'Installing Kalium ' . $pack['name'] . ' Child Theme...',
					'url'   => 'https://laborator.co/',
					'theme' => $theme_slug,
				);

				$upgrader = new Theme_Upgrader( new Theme_Upgrader_Skin( $upgrader_skin ) );
				$result   = $upgrader->install( $child_theme_file );

				if ( true == $result ) {
					update_option( 'stylesheet', $theme_slug );
					$resp['success'] = true;
				} else {
					$resp['errorMsg'] = $result;
				}

			} catch ( Exception $e ) {
				$resp['errorMsg'] = $e;
			}
			break;

		case 'xml-wp-content':
		case 'xml-products':

			// Run wordpress importer independently
			if ( ! defined( 'WP_LOAD_IMPORTERS' ) ) {
				define( 'WP_LOAD_IMPORTERS', true );
				require dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'wordpress-importer/wordpress-importer.php';
			}

			// Demo Content File (XML)
			if ( $source_details['type'] == 'xml-products' ) {
				$xml_file = lab_1cl_demo_installer_get_file_from_path( $pack['products'] );
			} else {
				$xml_file = lab_1cl_demo_installer_get_file_from_path( $pack['file'] );
			}

			try {
				@set_time_limit( 0 );
				$requires_woocommerce = in_array( 'woocommerce', $pack['requires'] );

				// WooCommerce
				if ( $requires_woocommerce ) {
					global $xml_import_file;
					$xml_import_file = $xml_file;
					add_action( 'import_start', '_kalium_woocommerce_post_importer_compatibility' );
				}

				// Create importer
				$wp_importer = new WP_Import();

				$wp_importer->fetch_attachments = isset( $source_details['downloadMedia'] ) && $source_details['downloadMedia'];
				$wp_importer->id                = sanitize_title( $pack['name'] );

				// Download Shop Attachments by Default
				if ( $source_details['type'] == 'xml-products' ) {
					$wp_importer->fetch_attachments = true;
				}

				ob_start();
				$wp_importer->import( $xml_file );
				$content = ob_get_clean();

				$resp['imp']        = $wp_importer;
				$resp['impContent'] = $content;
				$resp['success']    = true;

				// Small but important stuff to setup
				if ( $source_details['type'] == 'xml-wp-content' ) {

					// Set Frontpage and Posts page
					if ( isset( $pack['frontpage'] ) || isset( $pack['postspage'] ) ) {
						update_option( 'show_on_front', 'page' );

						// Set Front Page
						if ( isset( $pack['frontpage'] ) ) {
							$front_page = get_page_by_title( $pack['frontpage'] );

							if ( $front_page && $front_page instanceof WP_Post ) {
								update_option( 'page_on_front', $front_page->ID );
							}
						}

						// Set Posts Page
						if ( isset( $pack['postspage'] ) ) {
							$posts_page = get_page_by_title( $pack['postspage'] );

							if ( $posts_page && $posts_page instanceof WP_Post ) {
								update_option( 'page_for_posts', $posts_page->ID );
							}
						}
					}

					// Set permalinks structure
					update_option( 'permalink_structure', '/%postname%/', true );

					// WooCommerce Pages
					if ( isset( $pack['woocommerce'] ) && is_array( $pack['woocommerce'] ) ) {
						foreach ( $pack['woocommerce'] as $option_type => $option_value ) {
							// Thumbnails setup
							if ( 'thumbnails' == $option_type ) {
								foreach ( $option_value as $thumbnail_name => $thumbnail_value ) {
									update_option( "woocommerce_thumbnail_{$thumbnail_name}", $thumbnail_value, 'yes' );
								}
								continue;
							}
							// Options setup
							if ( 'options' == $option_type ) {
								foreach ( $option_value as $option_id => $option_value ) {
									update_option( $option_id, $option_value, 'yes' );
								}
							}

							// WooCommerce Page
							$page = get_page_by_title( $option_value, OBJECT );

							if ( $page ) {
								update_option( "woocommerce_{$option_type}_page_id", $page->ID, 'yes' );
							}
						}
					}

					// WooCommerce Category Thumbnails
					if ( $requires_woocommerce && ! empty( $pack['data']['product_category_thumbnails'] ) ) {
						$product_category_thumbnails = json_decode( $pack['data']['product_category_thumbnails'], true );
						$product_categories          = get_terms( 'product_cat' );
						$product_category_images_set = 0;

						foreach ( $product_category_thumbnails as $i => $product_category ) {
							$attachment_id = attachment_url_to_postid( $product_category['thumbnail'] );

							if ( ! empty( $attachment_id ) && is_numeric( $attachment_id ) ) {
								$product_category_thumbnails[ $i ]['thumbnail_id'] = $attachment_id;
							}
						}

						foreach ( $product_categories as $term ) {
							$term_id = $term->term_id;
							$slug    = $term->slug;
							$name    = $term->name;

							foreach ( $product_category_thumbnails as $product_category ) {

								if ( isset( $product_category['thumbnail_id'] ) ) {
									$thumbnail_id = $product_category['thumbnail_id'];

									if ( strtolower( $product_category['slug'] ) === strtolower( $slug ) || strtolower( $product_category['name'] ) === strtolower( $name ) ) {
										update_term_meta( $term_id, 'thumbnail_id', $thumbnail_id );
										$product_category_images_set ++;
										break;
									}
								}
							}
						}
					}

					// Menus
					if ( isset( $pack['menus'] ) && is_array( $pack['menus'] ) ) {
						$nav_menus = wp_get_nav_menus();

						foreach ( $pack['menus'] as $menu_location => $menu_name ) {

							if ( is_array( $nav_menus ) ) {

								foreach ( $nav_menus as $term ) {

									if ( strtolower( $menu_name ) == strtolower( $term->name ) ) {
										$nav_menu_locations = get_theme_mod( 'nav_menu_locations' );

										if ( ! is_array( $nav_menu_locations ) ) {
											$nav_menu_locations = array();
										}

										$nav_menu_locations[ $menu_location ] = $term->term_id;
										set_theme_mod( 'nav_menu_locations', $nav_menu_locations );
									}
								}
							}
						}
					}

					// Flush rewrite rules
					flush_rewrite_rules( true );
				}
			} catch ( Exception $e ) {
				$resp['errorMsg'] = $e;
			}
			break;

		case "prdctfltr-options":

			// Product Filter Options
			$prdctfltr_options = lab_1cl_demo_installer_get_file_from_path( $pack['prdctfltr'] );

			// Available Taxonomies
			$available_attribute_taxonomies = array();

			// Connect matched term
			$connect_matched_term = function ( $terms, $current_terms ) {
				foreach ( $terms as & $term ) {
					$tax  = $term['tax'];
					$slug = $term['slug'];
					$name = $term['name'];

					$term['translated_id'] = null;

					foreach ( $current_terms as $current_term ) {
						if ( $tax === $current_term->taxonomy ) {
							if (
								strtolower( $name ) === strtolower( $current_term->name ) ||
								strtolower( $slug ) === strtolower( $current_term->slug )
							) {
								$term['translated_id'] = $current_term->term_id;
							}
						}
					}
				}

				return $terms;
			};

			// Translate product taxonomy entries IDs
			$product_taxonomy_atts_translate = function ( $terms ) use ( $connect_matched_term, & $available_attribute_taxonomies ) {
				$current_terms = [];

				$attribute_taxonomies_list = [
					'product_cat',
					'product_tag',
				];

				// Product Attributes
				foreach ( wc_get_attribute_taxonomies() as $tax ) {
					$taxonomy_id                 = wc_attribute_taxonomy_name( $tax->attribute_name );
					$attribute_taxonomies_list[] = $taxonomy_id;
				}

				// Load all current terms
				foreach ( $attribute_taxonomies_list as $tax ) {
					$current_terms_by_tax = get_terms( $tax );
					$current_terms        = array_merge( $current_terms, $current_terms_by_tax );
				}

				$available_attribute_taxonomies = $attribute_taxonomies_list;

				return $connect_matched_term( $terms, $current_terms );
			};

			// Transported attributes
			if ( isset( $pack['data']['product_taxonomy_atts_export'] ) ) {
				$product_taxonomy_atts_export = $product_taxonomy_atts_translate( json_decode( $pack['data']['product_taxonomy_atts_export'], true ) );
			}

			// Translate single term id
			$translate_term_id = function ( $term_id ) use ( $product_taxonomy_atts_export ) {

				foreach ( $product_taxonomy_atts_export as $entry ) {
					if ( ! empty( $entry['translated_id'] ) && $term_id == $entry['id'] ) {
						return $entry['translated_id'];
					}
				}

				return $term_id;
			};

			// Replace term ids recursively
			$replace_term_ids_recursively = function ( $array ) use ( &$replace_term_ids_recursively, $translate_term_id ) {
				if ( is_array( $array ) ) {
					foreach ( $array as $key => & $value ) {
						// Terms entry
						if ( 'terms' === $key && is_array( $value ) ) {
							foreach ( $value as & $term ) {
								$term['id']   = $translate_term_id( $term['id'] );
								$term['slug'] = $translate_term_id( $term['slug'] );
							}
							continue;
						} // Relation entry
						else if ( 'include' === $key && array_key_exists( 'selected', $value ) && is_array( $value['selected'] ) ) {
							foreach ( $value['selected'] as & $entry ) {
								$entry = $translate_term_id( $entry );
							}
							continue;
						}

						// @Recursion
						if ( is_array( $value ) ) {
							$value = $replace_term_ids_recursively( $value );
						}
					}
				}

				return $array;
			};

			try {
				$prdctfltr_options = json_decode( file_get_contents( $prdctfltr_options ), true ); // Retrieve as associative array

				if ( ! empty( $prdctfltr_options['solids'] ) ) {
					foreach ( $prdctfltr_options['solids'] as $option => & $value ) {

						// Check for supported_overrides
						if ( isset( $value['general']['supported_overrides'] ) ) {
							$value['general']['supported_overrides'] = array_values( array_filter( $value['general']['supported_overrides'], 'get_taxonomy' ) );
						}

						// Replace Term IDs
						if ( isset( $value['filters'] ) && ! empty( $product_taxonomy_atts_export ) ) {
							$value['filters'] = $replace_term_ids_recursively( $value['filters'] );
						}

						// Update option
						update_option( $option, $value, false );
					}
				}

				// Success
				$resp['success'] = true;

			} catch ( Exception $e ) {
				$resp['errorMsg'] = $e;
			}
			break;

		case "theme-options":

			$theme_options = lab_1cl_demo_installer_get_file_from_path( $pack['options'] );

			try {
				if ( $theme_options = file_get_contents( $theme_options ) ) {
					$smof_data = unserialize( base64_decode( $theme_options ) );

					$ignore_keys = array(
						'0',
						'backups',
						'license',
						'theme_license_last_validation',
						'nav_menu_locations',
						'permalink_structure',
					);

					foreach ( $ignore_keys as $key_name ) {
						if ( @isset( $smof_data[ $key_name ] ) ) {
							unset( $smof_data[ $key_name ] );
						}
					}

					// Backup Nav Locations
					$nav_menu_locations = get_theme_mod( 'nav_menu_locations' );

					// Save Theme Options
					of_save_options( apply_filters( 'of_options_before_save', $smof_data ) );

					// Restore Nav Locations
					set_theme_mod( 'nav_menu_locations', $nav_menu_locations );

					// Rewrite Flush Rules
					flush_rewrite_rules( true );

					$resp['success'] = true;
				} else {
					$resp['errorMsg'] = 'Invalid data serialization for Theme Options. Required format: Base64 Encoded';
				}
			} catch ( Exception $e ) {
				$resp['errorMsg'] = $e;
			}
			break;

		case "custom-css":

			$custom_css = $pack['custom_css'];

			if ( $custom_css ) {
				$custom_css = lab_1cl_demo_installer_get_file_from_path( $custom_css );

				try {
					if ( $custom_css = file_get_contents( $custom_css ) ) {
						$custom_css_options = json_decode( base64_decode( $custom_css ) );

						lab_1cl_demo_installer_custom_css_save( $custom_css_options );

						$resp['success'] = true;
					}
				} catch ( Exception $e ) {
					$resp['errorMsg'] = $e;
				}
			}
			break;

		case "typolab":
			$typolab = lab_1cl_demo_installer_get_file_from_path( $pack['typolab'] );
			$typolab = maybe_unserialize( base64_decode( file_get_contents( $typolab ) ) );

			if ( ! is_string( $typolab ) ) {
				include_once( kalium()->locateFile( 'inc/lib/laborator/typolab/inc/classes/typolab-font-export-import.php' ) );
				$export_import_manager = new TypoLab_Font_Export_Import();

				if ( $export_import_manager->import( $typolab ) ) {
					$resp['success'] = true;
				} else {
					$resp['errorMsg'] = 'Typography import failed!';
				}

			} else {
				$resp['errorMsg'] = "Typography file doesn't contain valid export code!";
			}
			break;

		case "widgets":

			$widgets = lab_1cl_demo_installer_get_file_from_path( $pack['widgets'] );

			if ( ! function_exists( 'wie_process_import_file' ) ) {
				require dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'widget-importer-exporter/widget-importer-exporter.php';
			}

			try {
				wie_process_import_file( $widgets );
				$resp['success'] = true;
			} catch ( Exception $e ) {
				$resp['errorMsg'] = $e;
			}
			break;

		case "revslider":

			try {
				@set_time_limit( 0 );

				// Import Revolution Slider
				if ( $pack['revslider'] && class_exists( 'RevSlider' ) ) {
					if ( ! is_array( $pack['revslider'] ) ) {
						$pack['revslider'] = explode( ',', $pack['revslider'] );
					}

					foreach ( $pack['revslider'] as $revslider_path ) {

						$revslider = lab_1cl_demo_installer_get_file_from_path( $revslider_path );

						$rev = new RevSlider();

						ob_start();
						$rev->importSliderFromPost( true, true, $revslider );
						$content = ob_get_clean();
					}

					$resp['success'] = true;
				} else {
					$resp['errorMsg'] = 'Revolution Slider is not installed/activated and thus this content source couldn\'t be imported!';
				}
			} catch ( Exception $e ) {
				$resp['errorMsg'] = $e;
			}
			break;

		case "layerslider":

			try {
				// Import Layer Slider
				if ( $pack['layerslider'] && function_exists( 'ls_import_sliders' ) ) {
					$layerslider = lab_1cl_demo_installer_get_file_from_path( $pack['layerslider'] );

					include LS_ROOT_PATH . '/classes/class.ls.importutil.php';

					$import = new LS_ImportUtil( $layerslider, basename( $layerslider ) );

					$resp['success'] = true;
				} else {
					$resp['errorMsg'] = 'Layer Slider is not installed/activated and thus this content source couldn\'t be imported!';
				}
			} catch ( Exception $e ) {
				$resp['errorMsg'] = $e;
			}
			break;
	}

	echo json_encode( $resp );
	die();
}

add_action( 'wp_ajax_lab_1cl_demo_install_package_content', 'lab_1cl_demo_install_package_content' );

/**
 * WooCommerce function to parse variations attributes to adjust Importer Compatibility.
 *
 * Should be checked for changes when WooCommerce is updated.
 *
 * @see WC_Admin_Importers::post_importer_compatibility
 */
function _kalium_woocommerce_post_importer_compatibility() {
	global $xml_import_file;

	$file        = $xml_import_file;
	$parser      = new WXR_Parser();
	$import_data = $parser->parse( $file );

	if ( isset( $import_data['posts'] ) && ! empty( $import_data['posts'] ) ) {
		foreach ( $import_data['posts'] as $post ) {
			if ( 'product' === $post['post_type'] && ! empty( $post['terms'] ) ) {
				foreach ( $post['terms'] as $term ) {
					if ( strstr( $term['domain'], 'pa_' ) ) {
						if ( ! taxonomy_exists( $term['domain'] ) ) {
							$attribute_name = wc_attribute_taxonomy_slug( $term['domain'] );

							// Create the taxonomy.
							if ( ! in_array( $attribute_name, wc_get_attribute_taxonomies(), true ) ) {
								wc_create_attribute(
									array(
										'name'         => ucwords( str_replace( '-', ' ', $attribute_name ) ),
										'slug'         => $attribute_name,
										'type'         => 'select',
										'order_by'     => 'menu_order',
										'has_archives' => false,
									)
								);
							}

							// Register the taxonomy now so that the import works!
							register_taxonomy(
								$term['domain'],
								apply_filters( 'woocommerce_taxonomy_objects_' . $term['domain'], array( 'product' ) ),
								apply_filters(
									'woocommerce_taxonomy_args_' . $term['domain'],
									array(
										'hierarchical' => true,
										'show_ui'      => false,
										'query_var'    => true,
										'rewrite'      => false,
									)
								)
							);
						}
					}
				}
			}
		}
	}
}
