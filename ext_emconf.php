<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ww_bbt".
 *
 * Auto generated 21-12-2012 16:07
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'betatext',
	'description' => 'Markierung und Kommentierung von Textstellen',
	'category' => 'plugin',
	'author' => 'Alexander Schulze, Marko Deutscher',
	'author_email' => 'asz@wegewerk.com, mdt@wegewerk.com',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'Wegewerk',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:286:{s:9:"ChangeLog";s:4:"85e2";s:11:"default.jpg";s:4:"65cc";s:21:"ext_conf_template.txt";s:4:"6740";s:12:"ext_icon.gif";s:4:"931f";s:17:"ext_localconf.php";s:4:"f7c2";s:14:"ext_tables.php";s:4:"60b8";s:14:"ext_tables.sql";s:4:"6793";s:25:"icon_tx_wwbbt_comment.gif";s:4:"07a5";s:25:"icon_tx_wwbbt_process.gif";s:4:"0706";s:22:"icon_tx_wwbbt_text.gif";s:4:"475a";s:24:"icon_tx_wwbbt_voting.gif";s:4:"6431";s:7:"LICENSE";s:4:"ac51";s:16:"locallang_db.xml";s:4:"4a55";s:9:"README.md";s:4:"e36d";s:7:"tca.php";s:4:"4b78";s:16:"app/appConfig.js";s:4:"ef15";s:14:"app/console.js";s:4:"f066";s:22:"app/eventDispatcher.js";s:4:"3705";s:11:"app/main.js";s:4:"0ae0";s:23:"app/models/actionbar.js";s:4:"488d";s:21:"app/models/comment.js";s:4:"bbb2";s:22:"app/models/comments.js";s:4:"afbd";s:19:"app/models/pstep.js";s:4:"886b";s:23:"app/models/pstepList.js";s:4:"a5a6";s:18:"app/models/text.js";s:4:"7613";s:18:"app/models/user.js";s:4:"e80d";s:18:"app/models/vote.js";s:4:"6102";s:28:"app/templates/actionbar.html";s:4:"02fd";s:22:"app/templates/app.html";s:4:"b4cb";s:30:"app/templates/commentItem.html";s:4:"c8d6";s:27:"app/templates/footnote.html";s:4:"1e56";s:28:"app/templates/loginForm.html";s:4:"8353";s:31:"app/templates/parl_process.html";s:4:"0e3b";s:30:"app/templates/processStep.html";s:4:"5d1f";s:27:"app/templates/textItem.html";s:4:"31d8";s:26:"app/templates/tooltip.html";s:4:"8693";s:22:"app/views/actionBar.js";s:4:"08da";s:20:"app/views/appView.js";s:4:"e77d";s:25:"app/views/commentsView.js";s:4:"4d49";s:24:"app/views/commentView.js";s:4:"7f4a";s:23:"app/views/pstepsView.js";s:4:"562b";s:22:"app/views/pstepView.js";s:4:"8776";s:21:"app/views/textView.js";s:4:"8413";s:24:"app/views/tooltipView.js";s:4:"94e7";s:21:"app/views/userView.js";s:4:"88d2";s:18:"icons/bbt-page.gif";s:4:"931f";s:18:"icons/bbt-page.png";s:4:"31c4";s:15:"lib/backbone.js";s:4:"a959";s:13:"lib/debug.log";s:4:"cc4f";s:13:"lib/debug.php";s:4:"2d4f";s:19:"lib/jquery-1.7.1.js";s:4:"273e";s:12:"lib/json2.js";s:4:"0651";s:14:"lib/require.js";s:4:"3d2d";s:12:"lib/rest.php";s:4:"eeaf";s:23:"lib/underscore-1.3.1.js";s:4:"4eb6";s:22:"lib/Slim/composer.json";s:4:"4481";s:18:"lib/Slim/index.php";s:4:"c840";s:16:"lib/Slim/LICENSE";s:4:"a47e";s:24:"lib/Slim/README.markdown";s:4:"5253";s:29:"lib/Slim/Slim/Environment.php";s:4:"753e";s:21:"lib/Slim/Slim/Log.php";s:4:"e752";s:27:"lib/Slim/Slim/LogWriter.php";s:4:"47c5";s:28:"lib/Slim/Slim/Middleware.php";s:4:"0627";s:23:"lib/Slim/Slim/Route.php";s:4:"9ce7";s:24:"lib/Slim/Slim/Router.php";s:4:"c7c8";s:22:"lib/Slim/Slim/Slim.php";s:4:"488b";s:22:"lib/Slim/Slim/View.php";s:4:"cfd0";s:32:"lib/Slim/Slim/Exception/Pass.php";s:4:"4ac1";s:40:"lib/Slim/Slim/Exception/RequestSlash.php";s:4:"8cde";s:32:"lib/Slim/Slim/Exception/Stop.php";s:4:"0ca2";s:30:"lib/Slim/Slim/Http/Headers.php";s:4:"0480";s:30:"lib/Slim/Slim/Http/Request.php";s:4:"f922";s:31:"lib/Slim/Slim/Http/Response.php";s:4:"9d5c";s:27:"lib/Slim/Slim/Http/Util.php";s:4:"efbd";s:41:"lib/Slim/Slim/Middleware/ContentTypes.php";s:4:"c8ec";s:34:"lib/Slim/Slim/Middleware/Flash.php";s:4:"46fa";s:43:"lib/Slim/Slim/Middleware/MethodOverride.php";s:4:"3f01";s:45:"lib/Slim/Slim/Middleware/PrettyExceptions.php";s:4:"553f";s:42:"lib/Slim/Slim/Middleware/SessionCookie.php";s:4:"6a4d";s:35:"lib/Slim/docs/caching-etag.markdown";s:4:"0c74";s:38:"lib/Slim/docs/caching-expires.markdown";s:4:"6fa7";s:44:"lib/Slim/docs/caching-last-modified.markdown";s:4:"135a";s:30:"lib/Slim/docs/caching.markdown";s:4:"8981";s:34:"lib/Slim/docs/environment.markdown";s:4:"1b7c";s:35:"lib/Slim/docs/errors-debug.markdown";s:4:"70c0";s:43:"lib/Slim/docs/errors-error-handler.markdown";s:4:"2777";s:46:"lib/Slim/docs/errors-notfound-handler.markdown";s:4:"1384";s:36:"lib/Slim/docs/errors-output.markdown";s:4:"b00b";s:39:"lib/Slim/docs/errors-reporting.markdown";s:4:"1e42";s:29:"lib/Slim/docs/errors.markdown";s:4:"d978";s:28:"lib/Slim/docs/flash.markdown";s:4:"b70d";s:35:"lib/Slim/docs/hooks-custom.markdown";s:4:"c3c0";s:36:"lib/Slim/docs/hooks-default.markdown";s:4:"f5a9";s:34:"lib/Slim/docs/hooks-usage.markdown";s:4:"d82b";s:28:"lib/Slim/docs/hooks.markdown";s:4:"2e1d";s:23:"lib/Slim/docs/index.txt";s:4:"cb7b";s:36:"lib/Slim/docs/instantiation.markdown";s:4:"3f0f";s:30:"lib/Slim/docs/logging.markdown";s:4:"f561";s:37:"lib/Slim/docs/middleware-add.markdown";s:4:"a907";s:46:"lib/Slim/docs/middleware-architecture.markdown";s:4:"f8e2";s:48:"lib/Slim/docs/middleware-implementation.markdown";s:4:"aa98";s:33:"lib/Slim/docs/middleware.markdown";s:4:"9f96";s:28:"lib/Slim/docs/modes.markdown";s:4:"1c5e";s:39:"lib/Slim/docs/names-and-scopes.markdown";s:4:"afa3";s:38:"lib/Slim/docs/request-cookies.markdown";s:4:"f0b7";s:38:"lib/Slim/docs/request-headers.markdown";s:4:"6ec6";s:38:"lib/Slim/docs/request-helpers.markdown";s:4:"c425";s:37:"lib/Slim/docs/request-method.markdown";s:4:"1fc8";s:41:"lib/Slim/docs/request-parameters.markdown";s:4:"f94c";s:36:"lib/Slim/docs/request-paths.markdown";s:4:"eb3b";s:34:"lib/Slim/docs/request-xhr.markdown";s:4:"2314";s:30:"lib/Slim/docs/request.markdown";s:4:"e553";s:36:"lib/Slim/docs/response-body.markdown";s:4:"ee8f";s:39:"lib/Slim/docs/response-cookies.markdown";s:4:"01fe";s:38:"lib/Slim/docs/response-header.markdown";s:4:"e8a9";s:39:"lib/Slim/docs/response-helpers.markdown";s:4:"7f9f";s:38:"lib/Slim/docs/response-status.markdown";s:4:"090b";s:31:"lib/Slim/docs/response.markdown";s:4:"6342";s:41:"lib/Slim/docs/routing-conditions.markdown";s:4:"b3d8";s:37:"lib/Slim/docs/routing-custom.markdown";s:4:"2d67";s:37:"lib/Slim/docs/routing-delete.markdown";s:4:"2d8c";s:38:"lib/Slim/docs/routing-generic.markdown";s:4:"a001";s:34:"lib/Slim/docs/routing-get.markdown";s:4:"10c4";s:43:"lib/Slim/docs/routing-helpers-halt.markdown";s:4:"fa86";s:43:"lib/Slim/docs/routing-helpers-pass.markdown";s:4:"7594";s:47:"lib/Slim/docs/routing-helpers-redirect.markdown";s:4:"6a1e";s:43:"lib/Slim/docs/routing-helpers-stop.markdown";s:4:"415c";s:45:"lib/Slim/docs/routing-helpers-urlfor.markdown";s:4:"2466";s:38:"lib/Slim/docs/routing-helpers.markdown";s:4:"c269";s:46:"lib/Slim/docs/routing-indepth-slashes.markdown";s:4:"1796";s:51:"lib/Slim/docs/routing-indepth-with-rewrite.markdown";s:4:"5d7d";s:54:"lib/Slim/docs/routing-indepth-without-rewrite.markdown";s:4:"f7d6";s:38:"lib/Slim/docs/routing-indepth.markdown";s:4:"5599";s:41:"lib/Slim/docs/routing-middleware.markdown";s:4:"e7db";s:36:"lib/Slim/docs/routing-names.markdown";s:4:"3540";s:38:"lib/Slim/docs/routing-options.markdown";s:4:"a493";s:41:"lib/Slim/docs/routing-parameters.markdown";s:4:"8c85";s:35:"lib/Slim/docs/routing-post.markdown";s:4:"32c4";s:34:"lib/Slim/docs/routing-put.markdown";s:4:"a6c2";s:30:"lib/Slim/docs/routing.markdown";s:4:"cccb";s:31:"lib/Slim/docs/sessions.markdown";s:4:"b8f5";s:31:"lib/Slim/docs/settings.markdown";s:4:"7615";s:42:"lib/Slim/docs/system-requirements.markdown";s:4:"abe4";s:35:"lib/Slim/docs/views-custom.markdown";s:4:"76e8";s:33:"lib/Slim/docs/views-data.markdown";s:4:"a606";s:38:"lib/Slim/docs/views-rendering.markdown";s:4:"a23a";s:37:"lib/Slim/docs/views-settings.markdown";s:4:"c1e2";s:28:"lib/Slim/docs/views.markdown";s:4:"bf81";s:30:"lib/Slim/docs/welcome.markdown";s:4:"4f06";s:34:"lib/Slim/tests/EnvironmentTest.php";s:4:"fda7";s:22:"lib/Slim/tests/Foo.php";s:4:"2de6";s:26:"lib/Slim/tests/LogTest.php";s:4:"75ab";s:32:"lib/Slim/tests/LogWriterTest.php";s:4:"005b";s:33:"lib/Slim/tests/MiddlewareTest.php";s:4:"0f94";s:21:"lib/Slim/tests/README";s:4:"0214";s:29:"lib/Slim/tests/RouterTest.php";s:4:"1514";s:28:"lib/Slim/tests/RouteTest.php";s:4:"e65a";s:27:"lib/Slim/tests/SlimTest.php";s:4:"410b";s:27:"lib/Slim/tests/ViewTest.php";s:4:"5436";s:35:"lib/Slim/tests/Http/HeadersTest.php";s:4:"9dfa";s:35:"lib/Slim/tests/Http/RequestTest.php";s:4:"891d";s:36:"lib/Slim/tests/Http/ResponseTest.php";s:4:"9cd6";s:32:"lib/Slim/tests/Http/UtilTest.php";s:4:"aaae";s:46:"lib/Slim/tests/Middleware/ContentTypesTest.php";s:4:"d6d8";s:39:"lib/Slim/tests/Middleware/FlashTest.php";s:4:"72ee";s:48:"lib/Slim/tests/Middleware/MethodOverrideTest.php";s:4:"c488";s:50:"lib/Slim/tests/Middleware/PrettyExceptionsTest.php";s:4:"8e31";s:47:"lib/Slim/tests/Middleware/SessionCookieTest.php";s:4:"93f9";s:33:"lib/Slim/tests/templates/test.php";s:4:"125f";s:22:"lib/actions/delete.php";s:4:"caec";s:19:"lib/actions/get.php";s:4:"7602";s:20:"lib/actions/post.php";s:4:"dcfd";s:19:"lib/actions/put.php";s:4:"3c3c";s:28:"lib/models/wwbbt_comment.php";s:4:"7055";s:28:"lib/models/wwbbt_general.php";s:4:"1ae1";s:26:"lib/models/wwbbt_login.php";s:4:"3167";s:27:"lib/models/wwbbt_logout.php";s:4:"a757";s:26:"lib/models/wwbbt_pstep.php";s:4:"d0c3";s:25:"lib/models/wwbbt_text.php";s:4:"26c6";s:25:"lib/models/wwbbt_user.php";s:4:"5129";s:25:"lib/models/wwbbt_vote.php";s:4:"bd5c";s:25:"lib/phpQuery/phpQuery.php";s:4:"4f98";s:43:"lib/phpQuery/phpQuery/bootstrap.example.php";s:4:"df08";s:34:"lib/phpQuery/phpQuery/Callback.php";s:4:"3c72";s:44:"lib/phpQuery/phpQuery/DOMDocumentWrapper.php";s:4:"b3e4";s:34:"lib/phpQuery/phpQuery/DOMEvent.php";s:4:"63c8";s:40:"lib/phpQuery/phpQuery/phpQueryEvents.php";s:4:"02e9";s:40:"lib/phpQuery/phpQuery/phpQueryObject.php";s:4:"c0ad";s:40:"lib/phpQuery/phpQuery/Zend/Exception.php";s:4:"7444";s:37:"lib/phpQuery/phpQuery/Zend/Loader.php";s:4:"ae1f";s:39:"lib/phpQuery/phpQuery/Zend/Registry.php";s:4:"338e";s:34:"lib/phpQuery/phpQuery/Zend/Uri.php";s:4:"cac0";s:42:"lib/phpQuery/phpQuery/Zend/Http/Client.php";s:4:"29db";s:42:"lib/phpQuery/phpQuery/Zend/Http/Cookie.php";s:4:"d4cb";s:45:"lib/phpQuery/phpQuery/Zend/Http/CookieJar.php";s:4:"2a9c";s:45:"lib/phpQuery/phpQuery/Zend/Http/Exception.php";s:4:"3ca8";s:44:"lib/phpQuery/phpQuery/Zend/Http/Response.php";s:4:"20c4";s:52:"lib/phpQuery/phpQuery/Zend/Http/Client/Exception.php";s:4:"35be";s:60:"lib/phpQuery/phpQuery/Zend/Http/Client/Adapter/Exception.php";s:4:"9ad4";s:60:"lib/phpQuery/phpQuery/Zend/Http/Client/Adapter/Interface.php";s:4:"de49";s:56:"lib/phpQuery/phpQuery/Zend/Http/Client/Adapter/Proxy.php";s:4:"4d8e";s:57:"lib/phpQuery/phpQuery/Zend/Http/Client/Adapter/Socket.php";s:4:"0791";s:55:"lib/phpQuery/phpQuery/Zend/Http/Client/Adapter/Test.php";s:4:"ce04";s:43:"lib/phpQuery/phpQuery/Zend/Json/Decoder.php";s:4:"5c94";s:43:"lib/phpQuery/phpQuery/Zend/Json/Encoder.php";s:4:"de32";s:45:"lib/phpQuery/phpQuery/Zend/Json/Exception.php";s:4:"f22d";s:44:"lib/phpQuery/phpQuery/Zend/Uri/Exception.php";s:4:"a806";s:39:"lib/phpQuery/phpQuery/Zend/Uri/Http.php";s:4:"1375";s:48:"lib/phpQuery/phpQuery/Zend/Validate/Abstract.php";s:4:"46e3";s:45:"lib/phpQuery/phpQuery/Zend/Validate/Alnum.php";s:4:"4b6a";s:45:"lib/phpQuery/phpQuery/Zend/Validate/Alpha.php";s:4:"f51f";s:47:"lib/phpQuery/phpQuery/Zend/Validate/Barcode.php";s:4:"4593";s:47:"lib/phpQuery/phpQuery/Zend/Validate/Between.php";s:4:"d0d4";s:45:"lib/phpQuery/phpQuery/Zend/Validate/Ccnum.php";s:4:"c956";s:44:"lib/phpQuery/phpQuery/Zend/Validate/Date.php";s:4:"8cca";s:46:"lib/phpQuery/phpQuery/Zend/Validate/Digits.php";s:4:"d841";s:52:"lib/phpQuery/phpQuery/Zend/Validate/EmailAddress.php";s:4:"e9f0";s:49:"lib/phpQuery/phpQuery/Zend/Validate/Exception.php";s:4:"3272";s:45:"lib/phpQuery/phpQuery/Zend/Validate/Float.php";s:4:"0fa8";s:51:"lib/phpQuery/phpQuery/Zend/Validate/GreaterThan.php";s:4:"b8f9";s:43:"lib/phpQuery/phpQuery/Zend/Validate/Hex.php";s:4:"7271";s:48:"lib/phpQuery/phpQuery/Zend/Validate/Hostname.php";s:4:"5382";s:49:"lib/phpQuery/phpQuery/Zend/Validate/Identical.php";s:4:"255a";s:47:"lib/phpQuery/phpQuery/Zend/Validate/InArray.php";s:4:"be63";s:43:"lib/phpQuery/phpQuery/Zend/Validate/Int.php";s:4:"a46e";s:49:"lib/phpQuery/phpQuery/Zend/Validate/Interface.php";s:4:"3ad0";s:42:"lib/phpQuery/phpQuery/Zend/Validate/Ip.php";s:4:"7b0a";s:48:"lib/phpQuery/phpQuery/Zend/Validate/LessThan.php";s:4:"14a1";s:48:"lib/phpQuery/phpQuery/Zend/Validate/NotEmpty.php";s:4:"55ec";s:45:"lib/phpQuery/phpQuery/Zend/Validate/Regex.php";s:4:"4e28";s:52:"lib/phpQuery/phpQuery/Zend/Validate/StringLength.php";s:4:"6628";s:53:"lib/phpQuery/phpQuery/Zend/Validate/Barcode/Ean13.php";s:4:"40f6";s:52:"lib/phpQuery/phpQuery/Zend/Validate/Barcode/UpcA.php";s:4:"f772";s:50:"lib/phpQuery/phpQuery/Zend/Validate/File/Count.php";s:4:"f11e";s:51:"lib/phpQuery/phpQuery/Zend/Validate/File/Exists.php";s:4:"af4b";s:54:"lib/phpQuery/phpQuery/Zend/Validate/File/Extension.php";s:4:"87b5";s:54:"lib/phpQuery/phpQuery/Zend/Validate/File/FilesSize.php";s:4:"ce51";s:54:"lib/phpQuery/phpQuery/Zend/Validate/File/ImageSize.php";s:4:"10da";s:53:"lib/phpQuery/phpQuery/Zend/Validate/File/MimeType.php";s:4:"b990";s:54:"lib/phpQuery/phpQuery/Zend/Validate/File/NotExists.php";s:4:"1021";s:49:"lib/phpQuery/phpQuery/Zend/Validate/File/Size.php";s:4:"aa50";s:51:"lib/phpQuery/phpQuery/Zend/Validate/File/Upload.php";s:4:"b41e";s:51:"lib/phpQuery/phpQuery/Zend/Validate/Hostname/At.php";s:4:"3125";s:51:"lib/phpQuery/phpQuery/Zend/Validate/Hostname/Ch.php";s:4:"208b";s:51:"lib/phpQuery/phpQuery/Zend/Validate/Hostname/De.php";s:4:"c8a2";s:51:"lib/phpQuery/phpQuery/Zend/Validate/Hostname/Fi.php";s:4:"8738";s:51:"lib/phpQuery/phpQuery/Zend/Validate/Hostname/Hu.php";s:4:"75e1";s:58:"lib/phpQuery/phpQuery/Zend/Validate/Hostname/Interface.php";s:4:"43f9";s:51:"lib/phpQuery/phpQuery/Zend/Validate/Hostname/Li.php";s:4:"c08c";s:51:"lib/phpQuery/phpQuery/Zend/Validate/Hostname/No.php";s:4:"d830";s:51:"lib/phpQuery/phpQuery/Zend/Validate/Hostname/Se.php";s:4:"0057";s:41:"lib/phpQuery/phpQuery/compat/mbstring.php";s:4:"830b";s:41:"lib/phpQuery/phpQuery/plugins/example.php";s:4:"0d93";s:41:"lib/phpQuery/phpQuery/plugins/Scripts.php";s:4:"7e72";s:44:"lib/phpQuery/phpQuery/plugins/WebBrowser.php";s:4:"a146";s:58:"lib/phpQuery/phpQuery/plugins/Scripts/__config.example.php";s:4:"108d";s:49:"lib/phpQuery/phpQuery/plugins/Scripts/example.php";s:4:"f4f3";s:53:"lib/phpQuery/phpQuery/plugins/Scripts/fix_webroot.php";s:4:"b782";s:54:"lib/phpQuery/phpQuery/plugins/Scripts/google_login.php";s:4:"b9b6";s:54:"lib/phpQuery/phpQuery/plugins/Scripts/print_source.php";s:4:"f9f5";s:55:"lib/phpQuery/phpQuery/plugins/Scripts/print_websafe.php";s:4:"f500";s:23:"lib/rangy/rangy-core.js";s:4:"0d7f";s:34:"lib/rangy/rangy-cssclassapplier.js";s:4:"7b21";s:39:"lib/rangy/rangy-selectionsaverestore.js";s:4:"73cf";s:29:"lib/rangy/rangy-serializer.js";s:4:"09da";s:28:"lib/rangy/rangy-textrange.js";s:4:"5a2b";s:36:"lib/rangy/uncompressed/rangy-core.js";s:4:"31a1";s:47:"lib/rangy/uncompressed/rangy-cssclassapplier.js";s:4:"7f6f";s:52:"lib/rangy/uncompressed/rangy-selectionsaverestore.js";s:4:"d264";s:42:"lib/rangy/uncompressed/rangy-serializer.js";s:4:"36b1";s:41:"lib/rangy/uncompressed/rangy-textrange.js";s:4:"6c6c";s:21:"lib/requirejs/text.js";s:4:"ca41";s:16:"static/setup.txt";s:4:"a1f5";s:17:"template/bbt.html";s:4:"5d97";s:21:"template/infomail.txt";s:4:"96a9";s:20:"template/css/bbt.css";s:4:"10ab";s:27:"template/img/bbt-psteps.png";s:4:"3d95";s:28:"template/img/bbt-tooltip.png";s:4:"2191";s:30:"template/img/bbt-tooltip_i.png";s:4:"ebce";s:28:"template/img/bbt-trenner.png";s:4:"446c";s:29:"template/img/bbt-verified.png";s:4:"1d2c";s:29:"template/img/bg_actionbar.png";s:4:"d6ef";s:34:"template/img/bg_dark_grey_line.png";s:4:"b0f9";s:30:"template/img/comment_close.png";s:4:"56f1";s:28:"template/img/vote_button.png";s:4:"3cd3";s:22:"template/sass/bbt.scss";s:4:"8fd0";}',
	'suggests' => array(
	),
);

?>