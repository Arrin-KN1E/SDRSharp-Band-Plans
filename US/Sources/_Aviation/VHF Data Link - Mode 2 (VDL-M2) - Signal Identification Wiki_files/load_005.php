function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<6)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"}});mw.loader.register([["site","1661102417",[],"site"],["noscript","1661102417",[],"noscript"],["startup","1661536415",[],"startup"],["filepage","1661102417"],["user.groups","1661102417",[],"user"],["user","1661102417",[],"user"],["user.cssprefs","1661102417",["mediawiki.user"],"private"],["user.options","1661102417",[],"private"],["user.tokens","1661102417",[],"private"],["mediawiki.language.data","1661102417",["mediawiki.language.init"]],[
"skins.cologneblue","1661102417"],["skins.modern","1661102417"],["skins.monobook","1661102417"],["skins.vector","1661102417"],["skins.vector.beta","1661102417"],["skins.vector.js","1661102417",["jquery.delayedBind"]],["skins.vector.collapsibleNav","1661102417",["jquery.client","jquery.cookie","jquery.tabIndex"]],["jquery","1661102417"],["jquery.appear","1661102417"],["jquery.arrowSteps","1661102417"],["jquery.async","1661102417"],["jquery.autoEllipsis","1661102417",["jquery.highlightText"]],["jquery.badge","1661102417",["mediawiki.language"]],["jquery.byteLength","1661102417"],["jquery.byteLimit","1661102417",["jquery.byteLength"]],["jquery.checkboxShiftClick","1661102417"],["jquery.chosen","1661102417"],["jquery.client","1661102417"],["jquery.color","1661102417",["jquery.colorUtil"]],["jquery.colorUtil","1661102417"],["jquery.cookie","1661102417"],["jquery.delayedBind","1661102417"],["jquery.expandableField","1661102417",["jquery.delayedBind"]],["jquery.farbtastic","1661102417",[
"jquery.colorUtil"]],["jquery.footHovzer","1661102417"],["jquery.form","1661102417"],["jquery.getAttrs","1661102417"],["jquery.hidpi","1661102417"],["jquery.highlightText","1661102417",["jquery.mwExtension"]],["jquery.hoverIntent","1661102417"],["jquery.json","1661102417"],["jquery.localize","1661102417"],["jquery.makeCollapsible","1661102568"],["jquery.mockjax","1661102417"],["jquery.mw-jump","1661102417"],["jquery.mwExtension","1661102417"],["jquery.placeholder","1661102417"],["jquery.qunit","1661102417"],["jquery.qunit.completenessTest","1661102417",["jquery.qunit"]],["jquery.spinner","1661102417"],["jquery.jStorage","1661102417",["jquery.json"]],["jquery.suggestions","1661102417",["jquery.autoEllipsis"]],["jquery.tabIndex","1661102417"],["jquery.tablesorter","1661124169",["jquery.mwExtension","mediawiki.language.months"]],["jquery.textSelection","1661102417",["jquery.client"]],["jquery.validate","1661102417"],["jquery.xmldom","1661102417"],["jquery.tipsy","1661102417"],[
"jquery.ui.core","1661102417",["jquery"],"jquery.ui"],["jquery.ui.widget","1661102417",[],"jquery.ui"],["jquery.ui.mouse","1661102417",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1661102417",[],"jquery.ui"],["jquery.ui.draggable","1661102417",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1661102417",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1661102417",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1661102417",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1661102417",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1661102417",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1661102417",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1661102417",[
"jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1661102417",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1661102417",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1661102417",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1661102417",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1661102417",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1661102417",["jquery"],"jquery.ui"],["jquery.effects.blind","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1661102417",["jquery.effects.core"],
"jquery.ui"],["jquery.effects.fade","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1661102417",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1661102417",["jquery.effects.core"],"jquery.ui"],["mediawiki","1661102417"],["mediawiki.api","1661102417",["mediawiki.util"]],["mediawiki.api.category","1661102417",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1661102417",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.login","1661102417",["mediawiki.api"]],["mediawiki.api.parse","1661102417",["mediawiki.api"]],["mediawiki.api.watch","1661102417",["mediawiki.api",
"user.tokens"]],["mediawiki.icon","1661102417"],["mediawiki.debug","1661102417",["jquery.footHovzer"]],["mediawiki.debug.init","1661102417",["mediawiki.debug"]],["mediawiki.inspect","1661102417",["jquery.byteLength","jquery.json"]],["mediawiki.feedback","1661102417",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1661102417",["jquery.hidpi"]],["mediawiki.htmlform","1661102568"],["mediawiki.notification","1661102417",["mediawiki.page.startup"]],["mediawiki.notify","1661102417"],["mediawiki.searchSuggest","1661102568",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1661102417",["jquery.byteLength","mediawiki.util"]],["mediawiki.Uri","1661102417"],["mediawiki.user","1661102417",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1661102568",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],[
"mediawiki.action.edit","1661102417",["mediawiki.action.edit.styles","jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.styles","1661102417"],["mediawiki.action.edit.collapsibleFooter","1661102417",["jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1661102417",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1661102417",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1661102417",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1661102417",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1661103880"],["mediawiki.action.view.postEdit","1661102877",["jquery.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.rightClickEdit","1661102417"],["mediawiki.action.edit.editWarning","1661105357"],["mediawiki.action.watch.ajax","1661102417",["mediawiki.page.watch.ajax"]],["mediawiki.language","1661102417",["mediawiki.language.data",
"mediawiki.cldr"]],["mediawiki.cldr","1661102417",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1661102417"],["mediawiki.language.init","1661102417"],["mediawiki.jqueryMsg","1661102417",["mediawiki.util","mediawiki.language"]],["mediawiki.language.months","1661124169",["mediawiki.language"]],["mediawiki.libs.jpegmeta","1661102417"],["mediawiki.page.gallery","1661102417"],["mediawiki.page.ready","1661102417",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1661102417",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1661102417",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1661102568",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.page.image.pagination","1661102417",[
"jquery.spinner"]],["mediawiki.special","1661102417"],["mediawiki.special.block","1661102417",["mediawiki.util"]],["mediawiki.special.changeemail","1661102417",["mediawiki.util"]],["mediawiki.special.changeslist","1661102417"],["mediawiki.special.changeslist.enhanced","1661102417"],["mediawiki.special.movePage","1661102417",["jquery.byteLimit"]],["mediawiki.special.pagesWithProp","1661102417"],["mediawiki.special.preferences","1661102417"],["mediawiki.special.recentchanges","1661102417",["mediawiki.special"]],["mediawiki.special.search","1661102928"],["mediawiki.special.undelete","1661102417"],["mediawiki.special.upload","1661184126",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin","1661102417"],["mediawiki.special.createaccount","1661102417"],["mediawiki.special.createaccount.js","1661111618",["mediawiki.jqueryMsg"]],["mediawiki.special.javaScriptTest","1661102417",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1661102417",["jquery.getAttrs",
"jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1661102417",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1661102417"],["mediawiki.legacy.config","1661102417",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1661102417",["jquery.byteLimit"]],["mediawiki.legacy.shared","1661102417"],["mediawiki.legacy.oldshared","1661102417"],["mediawiki.legacy.upload","1661102417",["jquery.spinner","mediawiki.api","mediawiki.Title","mediawiki.util"]],["mediawiki.legacy.wikibits","1661102417",["mediawiki.util"]],["mediawiki.ui","1661102417"],["skins.metrolook","1661102417"],["skins.metrolook.beta","1661102417"],["skins.metrolook.js","1661102417",["jquery.delayedBind","mediawiki.searchSuggest"]],["skins.metrolook.collapsibleNav","1661102417",["jquery.client","jquery.cookie","jquery.tabIndex"]],["ext.cite","1661105411"],["ext.cite.popups","1661102417",["jquery.tooltip"]],[
"jquery.tooltip","1661102417"],["ext.rtlcite","1661102417"],["ext.nuke","1661102417"],["ext.geshi.local","1661102417"],["contentCollector","1661102417",[],"ext.wikiEditor"],["jquery.wikiEditor","1661103904",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1661102417",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1661102417",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1661103904",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title","mediawiki.jqueryMsg"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1661102417",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1661102417",["jquery.wikiEditor"],"ext.wikiEditor"]
,["jquery.wikiEditor.previewDialog","1661102417",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1661102417",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1661102417",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1661102417",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1661102417",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1661102417",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1661102417",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n",
"1661102417",[],"ext.wikiEditor"],["ext.wikiEditor","1661102417",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1661102417",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1661102417",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1661102417",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1661102417",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1661102417",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1661102417",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1661102417",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],[
"ext.wikiEditor.toc","1661102417",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1661102417",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1661102417",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1661102417",[],"ext.wikiEditor"],["ext.scribunto","1661536415",["jquery.ui.dialog"]],["ext.scribunto.edit","1661102417",["ext.scribunto","mediawiki.api"]],["ext.comments","1661102761"],["ext.semanticforms.main","1661102877",["jquery.ui.core","jquery.ui.autocomplete","jquery.ui.button","jquery.ui.sortable","jquery.ui.widget","ext.semanticforms.fancybox","ext.semanticforms.autogrow","mediawiki.util"]],["ext.semanticforms.fancybox","1661102417"],["ext.semanticforms.dynatree","1661102417",["jquery.ui.core"]],["ext.semanticforms.autogrow","1661102417"],["ext.semanticforms.popupformedit","1661102417",["jquery"]],
["ext.semanticforms.autoedit","1661102417",["jquery"]],["ext.semanticforms.submit","1661102877",["jquery"]],["ext.semanticforms.collapsible","1661102417",["jquery"]],["ext.semanticforms.wikieditor","1661102417",["ext.semanticforms.main","jquery.wikiEditor"]],["ext.semanticforms.imagepreview","1661102417"],["ext.SMWDataValueFrequency.main","1661102417",[],"ext.SMWDataValueFrequency"],["ext.Lingo.Styles","1661102417"],["ext.Lingo.Scripts","1661102417",["ext.jquery.qtip"]],["ext.jquery.qtip","1661102417",[],"ext.smw"],["ext.MsUpload","1661105357",["jquery.ui.progressbar"]],["ext.embedVideo","1661102417"],["ext.smw","1661102417",["jquery.async"],"ext.smw"],["ext.smw.style","1661102417",[],"ext.smw"],["ext.jquery.jStorage","1661102417",["jquery.json"],"ext.smw"],["ext.jquery.md5","1661102417",[],"ext.smw"],["ext.smw.dataItem","1661102417",["ext.smw","mediawiki.Title","mediawiki.Uri"],"ext.smw"],["ext.smw.dataValue","1661102417",["ext.smw.dataItem"],"ext.smw"],["ext.smw.data","1661102417",[
"ext.smw.dataItem","ext.smw.dataValue"],"ext.smw"],["ext.smw.query","1661102417",["ext.smw","mediawiki.util"],"ext.smw"],["ext.smw.api","1661102417",["ext.smw.data","ext.smw.query","ext.jquery.jStorage","ext.jquery.md5"],"ext.smw"],["ext.smw.tooltip.styles","1661102417",[],"ext.smw"],["ext.smw.tooltip","1661103607",["ext.smw.tooltip.styles","ext.smw","ext.jquery.qtip"],"ext.smw"],["ext.smw.tooltips","1661102417",["ext.smw.style","ext.smw.tooltip"],"ext.smw"],["ext.smw.autocomplete","1661102417",["jquery.ui.autocomplete"],"ext.smw"],["ext.smw.ask","1661102417",["ext.smw.tooltip","ext.smw.style","ext.smw.autocomplete"],"ext.smw"],["ext.smw.browse","1661102417",["ext.smw.style","ext.smw.autocomplete"],"ext.smw"],["ext.smw.property","1661102417",["ext.smw.autocomplete"],"ext.smw"]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"monobook","stylepath":"/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|ftps\\:\\/\\/|ssh\\:\\/\\/|sftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|xmpp\\:|sip\\:|sips\\:|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|tel\\:|sms\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|bitcoin\\:|magnet\\:|urn\\:|geo\\:|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"https://www.sigidwiki.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.22.3","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Signal Identification Guide","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Signal Identification Wiki","5":"Signal Identification Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","102":
"Property","103":"Property talk","104":"Type","105":"Type talk","106":"Form","107":"Form talk","108":"Concept","109":"Concept talk","828":"Module","829":"Module talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"signal identification wiki":4,"signal_identification_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"property":102,"property_talk":103,"type":104,"type_talk":105,"form":106,"form_talk":107,"concept":108,"concept_talk":109,"module":828,"module_talk":829,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Signal Identification Wiki","wgFileExtensions":["png","gif","jpg","jpeg","doc","xls","mpp","pdf","ppt","tiff","bmp","docx","xlsx","pptx","ps","odt","ods","odp","odg","ogg","wav","mp3","zip","7z"],"wgDBname":"fish_sigidwiki","wgFileCanRotate":true,"wgAvailableSkins":{"metrolook":"Metrolook","modern":"Modern",
"monobook_old":"MonoBook_OLD","cologneblue":"CologneBlue","vector":"Vector","monobook":"MonoBook"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"fish_sigidwiki_mwiki_","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"},"smw-config":{"version":"1.9.2","settings":{"smwgQMaxLimit":10000,"smwgQMaxInlineLimit":500,"namespace":{"Property":102,"Property_talk":103,"Type":104,"Type_talk":105,"Concept":108,"Concept_talk":109,"":0,"Talk":1,"User":2,"User_talk":3,"Project":4,"Project_talk":5,"File":6,"File_talk":7,"MediaWiki":8,"MediaWiki_talk":9,"Template":10,"Template_talk":11,"Help":12,"Help_talk":13,"Category":14,"Category_talk":15}},"formats":{"table":"Table","list":"List","ol":
"Enumeration","ul":"Itemization","category":"Category","embedded":"Embed page contents","template":"Template","feed":"RSS and Atom feed","csv":"CSV export","dsv":"DSV export","json":"JSON export","rdf":"RDF export"}}});};if(isCompatible()){document.write("\u003Cscript src=\"/load.php?debug=false\u0026amp;lang=en\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=monobook\u0026amp;version=20140320T200355Z\"\u003E\u003C/script\u003E");}delete isCompatible;
/* cache key: fish_sigidwiki-mwiki_:resourceloader:filter:minify-js:7:b3fdf9987ed1ac33a80a7b41d758c872 */