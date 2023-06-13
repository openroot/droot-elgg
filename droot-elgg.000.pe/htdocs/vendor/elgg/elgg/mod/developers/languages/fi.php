<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	// menu
	'admin:develop_tools' => 'Työkalut',
	'admin:develop_tools:sandbox' => 'Teemojen kehittäminen',
	'admin:develop_tools:inspect' => 'Tekninen rakenne',
	'admin:inspect' => 'Tekninen rakenne',
	'admin:develop_tools:unit_tests' => 'Yksikkötestit',
	'admin:develop_tools:entity_explorer' => 'Entity Explorer',
	'admin:developers' => 'Kehittäjät',
	'admin:developers:settings' => 'Asetukset',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Määrittele kehitys- ja testausasetuksesesi tästä. Jotkin asetuksista löytyvät myös muilta hallintasivuilta.',
	'developers:label:simple_cache' => 'Käytä yksinkertaista välimuistia',
	'developers:help:simple_cache' => 'Ota tämä välimuisti pois käytöstä kehitysympäristössä. Muutoin css- ja javascript-tiedostoihin tekemäsi muutokset eivät tule voimaan.',
	'developers:label:system_cache' => 'Käytä järjestelmän välimuistia',
	'developers:help:system_cache' => 'Ota tämä pois päältä kehitysympäristössä. Muutoin plugineihin tekemiäsi muutoksia ei rekisteröidä.',
	'developers:label:debug_level' => "Käytettävä taso",
	'developers:help:debug_level' => "Tämä määrittää lokiin tallennettavan datan määrän. Tutustu elgg_log()-funktioon saadaksesi lisätietoa.",
	'developers:label:display_errors' => 'Näytä kriittiset virheet',
	'developers:help:display_errors' => "Oletuksena Elggin .htaccess-tiedosto piilottaa kriittiset virheet.",
	'developers:label:screen_log' => "Näytä loki näytöllä",
	'developers:help:screen_log' => "Tämä tulostaa näkyviin elgg_log() ja elgg_dump()-funktioiden ulosannin sekä tietokantakyselyiden määrän.",
	'developers:label:show_strings' => "Näytä käännösten alkuperäiset merkkijonot",
	'developers:help:show_strings' => "Tämä näyttää merkkijonot, jotka syötetään elgg_echo()-käännösfunktiolle.",
	'developers:label:show_modules' => "Näytä ladatut AMD-moduulit konsolissa",
	'developers:help:show_modules' => "Näyttää konsolissa listan yksittäisen sivulatauksen aikana ladatuista AMD-moduuleista.",
	'developers:label:wrap_views' => "Lisää html-kommentit näkymiin",
	'developers:help:wrap_views' => "This wraps almost every view with HTML comments. Useful for finding the view creating particular HTML.
									This can break non-HTML views in the default viewtype. See developers_wrap_views() for details.",
	'developers:label:log_events' => "Merkitse event ja plugin hook -toiminnot lokiin.",
	'developers:help:log_events' => " Merkitse event ja plugin hook -toiminnot lokiin. Varoitus: näitä voi olla hyvin useita yksittäistä sivua kohden.",
	'developers:label:show_gear' => "Näytä %s hallintapaneelin ulkopuolella",
	'developers:help:show_gear' => "Näyttää sivun oikeassa alakulmassa ikonin, josta pääset helposti käsiksi hallintapaneeliin liittyviin toimintoihin ja asetuksiin.",
	'developers:label:block_email' => "Block all outgoing e-mails",
	'developers:help:block_email' => "You can block outgoing e-mail to regular users or to all users",
	'developers:label:forward_email' => "Forward all outgoing e-mails to one address",
	'developers:help:forward_email' => "All outgoing e-mails will be sent to the configured e-mail address",
	'developers:label:enable_error_log' => "Enable error log",
	'developers:help:enable_error_log' => "Maintain a separate log of errors and messages logged to the error_log() based on your trace level setting. The log is viewable via admin interface.",

	'developers:label:submit' => "Tallenna ja tyhjennä välimuistit",

	'developers:block_email:forward' => 'Forward all e-mails',
	'developers:block_email:users' => 'Only regular users',
	'developers:block_email:all' => 'Admins and regular users',
	
	'developers:debug:off' => 'Pois päältä',
	'developers:debug:error' => 'Virheet',
	'developers:debug:warning' => 'Varoitukset',
	'developers:debug:notice' => 'Huomautukset',
	'developers:debug:info' => 'Info',
	
	// entity explorer
	'developers:entity_explorer:help' => 'View information about entities and perform some basic actions on them.',
	'developers:entity_explorer:guid:label' => 'Enter the guid of the entity to inspect',
	'developers:entity_explorer:info' => 'Entity Information',
	'developers:entity_explorer:info:attributes' => 'Attributes',
	'developers:entity_explorer:info:metadata' => 'Metadata',
	'developers:entity_explorer:info:relationships' => 'Suhteet',
	'developers:entity_explorer:info:private_settings' => 'Private Settings',
	'developers:entity_explorer:info:owned_acls' => 'Owned Access Collections',
	'developers:entity_explorer:info:acl_memberships' => 'Access Collections Memberships',
	'developers:entity_explorer:delete_entity' => 'Remove this entity',
	'developers:entity_explorer:inspect_entity' => 'Inspect this entity',
	
	// inspection
	'developers:inspect:help' => 'Tarkastele sivuston teknistä rakennetta.',
	'developers:inspect:actions' => 'Actions',
	'developers:inspect:events' => 'Events',
	'developers:inspect:menus' => 'Menus',
	'developers:inspect:pluginhooks' => 'Plugin hooks',
	'developers:inspect:priority' => 'Tärkeysjärjestys',
	'developers:inspect:simplecache' => 'Simple cache',
	'developers:inspect:routes' => 'Routes',
	'developers:inspect:views' => 'Views',
	'developers:inspect:views:all_filtered' => "<b>Huom!</b> Kaikki näkymät ajetaan seuraavien hookkien läpi:",
	'developers:inspect:views:input_filtered' => "(input filtered by plugin hook: %s)",
	'developers:inspect:views:filtered' => "(ajettu läpi plugin-hookista: %s)",
	'developers:inspect:widgets' => 'Vimpaimet',
	'developers:inspect:webservices' => 'Webservices',
	'developers:inspect:widgets:context' => 'Context',
	'developers:inspect:functions' => 'Functions',
	'developers:inspect:file_location' => 'File path from Elgg root or controller',
	'developers:inspect:route' => 'Route Name',
	'developers:inspect:path' => 'Path Pattern',
	'developers:inspect:resource' => 'Resource View',
	'developers:inspect:handler' => 'Handler',
	'developers:inspect:controller' => 'Controller',
	'developers:inspect:file' => 'Tiedostot',
	'developers:inspect:middleware' => 'Tiedostot',
	'developers:inspect:handler_type' => 'Handled by',
	'developers:inspect:services' => 'Services',
	'developers:inspect:service:name' => 'Nimi',
	'developers:inspect:service:path' => 'Definition',
	'developers:inspect:service:class' => 'Class',

	// event logging
	'developers:request_stats' => "Request Statistics (does not include the shutdown event)",
	'developers:event_log_msg' => "%s: '%s, %s' in %s",
	'developers:log_queries' => "%s tietokantakyselyä (ei sisällä shutdown-eventissä tapahtuneita)",
	'developers:boot_cache_rebuilt' => "The boot cache was rebuilt for this request",
	'developers:elapsed_time' => "Elapsed time (s)",

	// theme sandbox
	'theme_sandbox:intro' => 'Ohjeet',
	'theme_sandbox:breakout' => 'Käytä koko näytön tilaa',
	'theme_sandbox:buttons' => 'Painikkeet',
	'theme_sandbox:components' => 'Komponentit',
	'theme_sandbox:forms' => 'Lomakkeet',
	'theme_sandbox:grid' => 'Palstat',
	'theme_sandbox:icons' => 'Ikonit',
	'theme_sandbox:javascript' => 'JavaScript',
	'theme_sandbox:layouts' => 'Asettelu',
	'theme_sandbox:modules' => 'Moduulit',
	'theme_sandbox:navigation' => 'Navigaatio',
	'theme_sandbox:typography' => 'Typografia',

	'theme_sandbox:icons:blurb' => 'Käytä funktiota <code>elgg_view_icon($name)</code>  tai luokkaa <code>elgg-icon-$name</code> näyttääksesi ikoneita.',

	// status messages
	'developers:settings:success' => 'Asetukset tallennettu',

	'developers:amd' => 'AMD',

	'admin:develop_tools:error_log' => 'Error Log',
	'developers:logs:empty' => 'Error log is empty',
);
