<?php
	/**
	 * Copyright (c) AvikB, some rights reserved.
	 * Copyright under Creative Commons Attribution-ShareAlike 3.0 Unported,
	 *  for details visit: https://creativecommons.org/licenses/by-sa/3.0/
	 *
	 * @Contributors:
	 * Created by AvikB for noncommercial MusicBee project.
	 * Spelling mistakes and fixes from phred and other community memebers.
	 */

	/**
	 * @author  Avik B
	 * @version 0.5 beta
	 *
	 * Language files for this website. After some thought i decided to make the site more of a multi lingual. The Reason mainly is to keep the code clean. This will be only for admin panel and add-on dashboard. I will expand it to the whole site (including the integrated parts of the forum).
	 *
	 *
	 * Some shortcut definition:
	 * every defination starts with these and they are page names to make it easier
	 *
	 * AP_ = Admin Panle
	 * AD_ = Add-on Dashboard
	 * DP_ = Download Page
	 * IP_ = Index Page (or the home page)
	 * FM_ = Forum
	 * SP_ = Support Page //currently not done yet
	 */

	$lang = array();
	$lang['AP_TITLE'] = "Control MusicBee Website infos all in one place";

	$lang['IP_TITLE'] = "MusicBee - Music Manager and Player";
	$lang['IP_DESCRIPTION'] = "The Ultimate Music Manager and Player. MusicBee makes it easy to organize, find, and play music files on your Windows computer, on portable devices, and on the web";
	$lang['AP_NO_RECORD'] = "We can't find anything to show! <i class=\"fa fa-frown-o\"></i>";
	$lang['AP_SR_DISABLED'] = "<i class='fa fa-frown-o'></i> Stable Release download is now disabled for users";
	$lang['AP_SR_ENABLED'] = "<i class='fa fa-check'></i> Stable Release download is now enabled for users";
	$lang['AP_SR_RECORD_EXIST'] = "<i class='fa fa-bomb'></i> This version already exists! Change/Update the version info";
	$lang['AP_BR_DISABLED'] = "<i class='fa fa-frown-o'></i> Beta Release download is now disabled for users";
	$lang['AP_BR_ENABLED'] = "<i class='fa fa-check'></i> Beta Release download is now enabled for users";

	$lang['AP_SR_SAVED_SUCCESS'] = "<i class='fa fa-check'></i> Stable release data updated and added to archive successfully";
	$lang['AP_BR_SAVED_SUCCESS'] = "<i class='fa fa-check'></i> Beta release data updated successfully";

	$lang['AP_HEADER_TITLE'] = "Website Control Center";
	$lang['AP_HEADER_DESC'] = "Have a new MusicBee version? or beta release! maybe a patch, update any MusicBee site releated info here, everything will auto update";
	$lang['AD_NO_USER'] = "We can't seem to find the user";
	$lang['AP_RECORD_DELETED'] = "Deleted!";

	$lang['LOGIN_NEED'] = "<b>ERROR:</b> You must login first!";
	$lang['line'] = "<hr class=\"line\"/>";

	/* MainMenu */
	$lang['1'] = "Home";
	$lang['2'] = "Download";
	$lang['3'] = "Add-ons";
	$lang['4'] = "Forum";
	$lang['5'] = "Help";
	$lang['6'] = "<i class=\"fa fa-user\" style=\"color:#FFA500;\"></i>";
	$lang['7'] = "Web Admin";
	$lang['8'] = "Forum Admin";
	$lang['9'] = "Add-on Dashboard";
	$lang['10'] = "Sign Out";
	$lang['11'] = "Skins";
	$lang['12'] = "Plugins";
	$lang['13'] = "Visualiser";
	$lang['14'] = "Equaliser";
	$lang['15'] = "Theater Mode";
	$lang['16'] = "Misc";
	$lang['17'] = "Login";
	$lang['18'] = "All";

	/** MainMenu Icons
	 * Do not edit! important
	 */
	$lang['20'] = "<i class=\"fa fa-desktop\"></i>&nbsp;&nbsp;";
	$lang['21'] = "<i class=\"fa fa-comments\"></i>&nbsp;&nbsp;";
	$lang['22'] = "<i class=\"fa fa-puzzle-piece\"></i>&nbsp;&nbsp;";
	$lang['23'] = "<i class=\"fa fa-sign-out\"></i>&nbsp;&nbsp;";
	$lang['24'] = "<i class=\"fa fa-paint-brush\"></i>&nbsp;&nbsp;";
	$lang['25'] = "<i class=\"fa fa-plug\"></i>&nbsp;&nbsp;";
	$lang['26'] = "<i class=\"fa fa-bar-chart\"></i>&nbsp;&nbsp;";
	$lang['27'] = "<i class=\"fa fa-tasks\"></i>&nbsp;&nbsp;";
	$lang['28'] = "<i class=\"fa fa-arrows-alt\"></i>&nbsp;&nbsp;";
	$lang['29'] = "<i class=\"fa fa-ellipsis-h\"></i>&nbsp;&nbsp;";


	/* Addon descriptions*/
	$lang['description_1'] = "Make MusicBee look the way you want";
	$lang['description_2'] = "Add features/functionality to MusicBee";
	$lang['description_3'] = "Get colorful visualizers for an eye pleasing experience";
	$lang['description_4'] = "Equaliser presets are great way to make your music sound fresh";
	$lang['description_5'] = "Get a full theater mode experience for MusicBee";
	$lang['description_6'] = "Other useful add-ons for enhancing your MusicBee experience";

	/* Index.php lang */
	$lang['home_1'] = "MusicBee";
	$lang['home_2'] = "The Ultimate Music Manager and Player";
	$lang['home_3'] = "MusicBee makes it easy to manage, find, and play music files on your computer. MusicBee also supports podcasts and web radio stations and Soundcloud integration";
	$lang['home_4']= "Get MusicBee, you will never go back and it's free!";
	$lang['home_5'] = "Download Now";
	$lang['home_6'] = "Check out features";
	$lang['home_7'] = "See the best of MusicBee";
	$lang['home_8'] = "For";
	$lang['home_9'] = "Simple, Powerful, and Fast";
	$lang['home_10'] = "Play your music the way you want. Turn your computer into a music jukebox. Use auto tagging to cleanup your messy music library. Enjoy a great music experience with MusicBee.";
	$lang['home_11'] = "Sound Quality Matters";
	$lang['home_12'] = "Whether you play your music on an audiophile setup or on a laptop, MusicBee is designed with features to fulfill all those needs.";
	$lang['home_13'] = "Fine-tune the sound with the 10-band or 15-band Equaliser and DSP effects";
	$lang['home_14'] = "Utilize high-end audio cards with WASAPI and ASIO support";
	$lang['home_15'] = "Listen to music without interruption with Gapless Playback";
	$lang['home_16'] = "Get the most of MusicBee with our Quality Guide";
	$lang['home_17'] = "Go to Quality Guide &nbsp;&nbsp;<i class=\"fa fa-arrow-right\"></i>";
	$lang['home_18'] = "Beautiful Skins";
	$lang['home_19'] = "Change the appearance of MusicBee by choosing from the included skins. Many user-made skins are available in the Add-ons section.<br/> You can also make your own skin and share it with others.";
	$lang['home_20'] = "Sync with Devices";
	$lang['home_21'] = "Sync your collection with Android and Windows Phone (8.1+) devices. <b>Click here to learn more</b>";
	$lang['home_22'] = "Powerful Tagging tools";
	$lang['home_23'] = "View and edit tags with the extensive Tag Editor and MusicBee's Tag Inspector. Create nearly unlimited possibilities with virtual tags. You can also manage duplicates and have your library and its structure automatically organized. Get song tags and lyrics from online sources. And much more!";
	$lang['home_24'] = "Yes, even more ...";
	$lang['home_25'] = "There are many features in MusicBee so check out MusicBee yourself. Also use the Forum to find new features.  And if you like MusicBee please spread the word";
	$lang['home_26'] = "Scrobble with Last.fm";
	$lang['home_27'] = "Extend or Customize with Add-ons";
	$lang['home_28'] = "Accurate CD ripping and file conversion";
	$lang['home_29'] = "Get MusicBee and enhance your music experience";
	$lang['home_30'] = "Submit";

	/*footer*/
	$lang['footer_179'] = "Get the latest MusicBee";
	$lang['footer_180'] = "Get";
	$lang['footer_181'] = "Version:";
	$lang['footer_182'] = "Released on";
	$lang['footer_183'] = "More";
	$lang['footer_184'] = "Subscribe to our RSS feed";
	$lang['footer_185'] = "<i class=\"fa fa-code\"></i>&nbsp;&nbsp;Developer API";
	$lang['footer_186'] = "Want to get notified of new releases?";
	$lang['footer_187'] = "<i class=\"fa fa-bug\"></i>&nbsp;&nbsp;Report a bug";
	$lang['footer_188'] = "Add-ons for MusicBee";
	$lang['footer_189'] = "Support MusicBee with a voluntary donation";
	$lang['footer_190'] = "Donate with Paypal";
	$lang['footer_191'] = "<i class=\"fa fa-heartbeat\"></i>&nbsp;&nbsp;Add a new feature to the Wishlist";
	$lang['footer_192'] = "Site built with <i class=\"fa fa-heart\" style=\"color: #F44336;\"></i> for the community";
	$lang['footer_193'] = "MusicBee copyright &copy; Steven Mayall 2008-" . date('Y') . ", All Rights Reserved";
	$lang['footer_231'] = "<i class=\"fa fa-bullhorn\"></i>&nbsp;&nbsp;Press & Media";

	/*404 page */
	$lang['194'] = "404";
	$lang['195'] = "Hey there! Are you lost?";
	$lang['196'] = "The requested page does not exist. Make sure you typed the URL correctly";
	$lang['197'] = "404 - Page not found!";
	$lang['198'] = "Go to home &nbsp;<i class=\"fa fa-arrow-right\"></i>";


	/*Add-on Dashboard*/
	$lang['101'] = "Add-on Submission";
	$lang['102'] = "If your rank is newbie, you will need moderator approval. Also post your add-on on the forum first to get peoples attention";
	$lang['103'] = "Step 1. Choose Add-on type";
	$lang['104'] = "Step 2. Basic Info about your Add-on";
	$lang['105'] = "Title/Name of your Add-on *";
	$lang['106'] = "Short Description about your Add-on *";
	$lang['107'] = "Only text and number is allowed. No HTML code or Markup/Markdown code is allowed.<br/>Also keep the description short, <b>Maximium Character limit is 600</b>";
	$lang['108'] = "Supported MusicBee Version *";
	$lang['109'] = "Select the supported MusicBee version for your add-on. You can Multi-select by holding down <code>ctrl</code> and click.<br/>A preview will show you the selected info as well!";
	$lang['110'] = "Add-on Version";
	$lang['111'] = "If your add-on does not have a version, leave it blank";
	$lang['112'] = "Tags for your Add-on *";
	$lang['113'] = "Use <b>COMMA</b> to separate each tags.<br/> eg. <code>metro, modern, elegant</code>";
	$lang['114'] = "You are only limited to use 10 tags maximum. Any more tags will be automatically removed.";
	$lang['115'] = "Step 3. Download Links and Images";
	$lang['116'] = "Upload Add-on *";
	$lang['117'] = "Upload your add-on directly to Mediafire. If your add-on is larger than <b>4MB</b>, then upload directly to file sharing sites(eg. dropbox, mediafire, zippyshare, mega) and provide a link.<br/>";
	$lang['118'] = "Screenshots of your add-on *";
	$lang['119'] = "You can provide a link from the web or upload an image directly to imgur.<br/>You can add upto 8 images.";
	$lang['120'] = "Step 4. Add Readme and more";
	$lang['121'] = "Readme Note";
	$lang['122'] = "No HTML is allowed. But we support Github flavored markdown. <b>Learn more</b><br/>Maximum Character limit is <b>5000</b>, but be sure you don't write a LONG book otherwise people will get bored";
	$lang['123'] = "<b> * </b> marked fields are required";
	$lang['124'] = "Choose an image from your computer and upload to imgur";
	$lang['125'] = "This Add-on will Support:";
	$lang['126'] = "Add field";
	$lang['127'] = "<i class=\"fa fa-area-chart\"></i>&nbsp;&nbsp;&nbsp;Dashboard Statistics";
	$lang['128'] = "Oops! You haven't submitted any add-on yet! You need to submit few add-ons before we could analyses the data";
	$lang['129'] = "Get a glance of your add-on counts, likes, requests and more";
	$lang['130'] = "Add-on Submitted";
	$lang['131'] = "Likes Received";
	$lang['132'] = "Needs Approval";
	$lang['133'] = "<i class=\"fa fa-line-chart\"></i>&nbsp;&nbsp;&nbsp;Your top Add-ons";
	$lang['134'] = "Add-ons that people liked";
	$lang['135'] = "<i class=\"fa fa-sitemap\"></i>&nbsp;&nbsp;&nbsp;Your most downloaded Add-ons";
	$lang['136'] = "This is not accurate, only an overview";
	$lang['137'] = "<i class=\"fa fa-tasks\"></i>&nbsp;&nbsp;&nbsp;Things you can DO!";
	$lang['138'] = "Tasks that you may like";
	$lang['139'] = "Read MusicBee Docs for Developer";
	$lang['140'] = "Essential Skinning Guide";
	$lang['141'] = "MusicBee Website API";
	$lang['142'] = "Submit a Skin";
	$lang['143'] = "Submit a Plug-in";
	$lang['144'] = "More Submit Option!";
	$lang['145'] = "Update an existing Add-on";
	$lang['146'] = "Create Read-me Docs";
	$lang['147'] = "Add-on Dashboard";
	$lang['148'] = "Add a skin or plug-in all in one place, manage your uploaded add-ons and update them easily";
	$lang['199'] = "Support & Discussion Forum Link";
	$lang['200'] = "Create a thread in our forum if you haven't, or use an existing thread link";
	$lang['201'] = "<b>ERROR:</b> An Add-on with similar name exists!";
	$lang['202'] = "<b>ERROR:</b> The MusicBee version you are targeting does not exists!";
	$lang['203'] = "<b>ERROR:</b> Description exceeds character limit!";
	$lang['204'] = "<b>ERROR:</b> Maximum 10 Tags are allowed! Please remove unnecessary tags.";
	$lang['205'] = "<b>ERROR:</b> Readme Note exceeds character limit!";
	$lang['206'] = "<b>ERROR:</b> There are more than 10 add-on that needs approval, before you can submit more!";
	$lang['207'] = "<b>SUCCESSFULL:</b> Add-on submitted successfully!";
	$lang['208'] = "Thumbnail *";
	$lang['209'] = "User will use thumbnail to recognize your add-on, You can provide a image link or upload directly to imgur<br/>Ideal image size is: <b>400px x 200px</b>";
	$lang['210'] = "Upload to Imgur ...";
	$lang['211'] = "Ideal image size is <b>600px x 400px</b>, Upload to imgur or provide an image link";
	$lang['212'] = "Upload to MediaFire";
	$lang['213'] = "Upload your add-on to our repository";
	$lang['214'] = "Add important note for user";
	$lang['215'] = "Only text and number is allowed. No HTML code or Markup/Markdown code is allowed. Keep it short, Maximium Character limit is 200";
	$lang['216'] = "<b>ERROR:</b> The add-on type does not exists. Please choose a valid one";
	$lang['217'] = "Add-on Update";
	$lang['218'] = "You don't need admin/mod approval for updates, but malicious update can result permanent ban";
	$lang['219'] = "<b>ERROR:</b> The Add-on is submitted by someone else.<br>You don't have enough permission to modify it!";
	$lang['220'] = "<b>SUCCESSFULL:</b> Add-on successfully deleted!";
	$lang['221'] = "<b>ERROR:</b> For some unknown reason the add-on could not be deleted. Please report this in forum.";
	$lang['222'] = "<b>ERROR:</b> Bad request parameter.";
	$lang['223'] = "<b>ERROR:</b> Choose a valid accent color!";
	$lang['224'] = "<b>SUCCESSFULL:</b> Add-on updated successfully!";
	$lang['225'] = "<i class=\"fa fa-bar-chart\"></i>&nbsp;&nbsp;Overview";
	$lang['226'] = "<i class=\"fa fa-bars\"></i>&nbsp;&nbsp; View all add-ons";
	$lang['227'] = "<i class=\"fa fa-plus\"></i>&nbsp;&nbsp; Submit add-on";
	$lang['228'] = "All of your add-ons";
	$lang['229'] = "Name";
	$lang['230'] = "Category";
	$lang['231'] = "Status";
	$lang['232'] = "Are you sure you want to permanently remove this addon?\\n\\nyou can't restore it once it is deleted!";
	$lang['233'] = "Remove this Version Permanently";
	$lang['234'] = "<i class=\"fa fa-pencil\"></i>&nbsp;&nbsp;Edit / Update";
	$lang['235'] = "";
	$lang['236'] = "";
	$lang['237'] = "";
	$lang['238'] = "";
	$lang['239'] = "";
	$lang['240'] = "";
	$lang['241'] = "";
	$lang['242'] = "";
	$lang['243'] = "";
	$lang['244'] = "";
	$lang['245'] = "";
	$lang['246'] = "";
	$lang['247'] = "";
	$lang['248'] = "";
	$lang['249'] = "";
	$lang['250'] = "";


	/*Addons view/download page */
	$lang['251'] = "Add-ons and Screenshots are licensed under";
	$lang['252'] = "by";
	$lang['253'] = "Updated on";
	$lang['254'] = "Published on";
	$lang['255'] = "&nbsp;&nbsp; Download";
	$lang['256'] = "for";
	$lang['257'] = "&nbsp;&nbsp; Support Forum";
	$lang['258'] = "&nbsp;&nbsp; See Readme Document";
	$lang['259'] = "Readme";
	$lang['260'] = "More from ";
	$lang['261'] = "See all add-ons";
	$lang['262'] = "from";
	$lang['263'] = "<i class=\"fa fa-heart-o\"></i>&nbsp;&nbsp; Like";
	$lang['264'] = "<b>ERROR:</b> Add-on id is not valid! It must be a number";
	$lang['265'] = "<b>Thank You</b> for rating. Check more from this author below";
	$lang['266'] = "Your rating is removed!";
	$lang['267'] = "Facing some problem with your rating status!";
	$lang['268'] = "<i class=\"fa fa-heart\"></i>&nbsp;&nbsp; Liked!";
	$lang['269'] = "";
	$lang['270'] = "";
	$lang['271'] = "";
	$lang['272'] = "";
	$lang['273'] = "";
	$lang['274'] = "";
	$lang['275'] = "";
	$lang['276'] = "";
	$lang['277'] = "";
	$lang['278'] = "";
	$lang['279'] = "";
	$lang['280'] = "";


	/************************************************
	 *****
	 *****    Mediafire, imgur upload
	 *****
	 *************************************************/
//upload.mediafire.php
	$lang['400'] = "Upload using";
	$lang['401'] = "Only supports <code>.rar, .zip, .7z, .tgz</code>. Add-ons are licensed under";
	$lang['402'] = "Drag and drop or click here";
	$lang['403'] = "Maximum file size is 4MB";
	$lang['404'] = "Mediafire upload is currently disabled!";
	$lang['405'] = "Please use any file sahring sites(eg. dropbox, mediafire, zippyshare, mega)";
//upload.imgur.php
	$lang['406'] = "Upload Image using &nbsp;";
	$lang['407'] = "Images are licensed under";
	$lang['408'] = "Drag and drop or click here";
	$lang['409'] = "Maximum image size is 2MB";
	$lang['410'] = "Imgur upload is currently disabled!";
	$lang['411'] = "Please go to imgur website to upload images";
//upload.tasks.php
	$lang['412'] = "<b>ERROR:</b> You are not allowed!";
	$lang['413'] = "<b>ERROR:</b> Imgur upload is currently disabled! <br/>Please go to imgur website to upload images";
	$lang['414'] = "<b>ERROR:</b> An valid image required!";
	$lang['415'] = "<b>ERROR:</b> Maximum image size is 2MB!";
	$lang['416'] = "<b>SUCCESSFUL:</b> Image successfully uploaded to Imgur";
	$lang['417'] = "<b>ERROR:</b> There's a Problem<br/>";
	$lang['418'] = "<b>ERROR:</b> Mediafire upload is currently disabled! <br/>Please any file sahring sites(eg. dropbox, mediafire, zippyshare, mega)";
	$lang['419'] = "<b>ERROR:</b> Mediafire upload is not configured correctly, please edit the setting file with correct credentials and try again.";
	$lang['420'] = "<b>ERROR:</b> An valid file required!";
	$lang['421'] = "<b>ERROR:</b> Maximum file size is 4MB!";
	$lang['422'] = "<b>ERROR:</b> Only supports <code>.rar, .zip, .7z, .tgz</code>";
	$lang['423'] = "<b>SUCCESSFUL:</b> Add-on successfully added to our repository";
	$lang['424'] = "<b>ERROR:</b> The file maybe uploaded but we can't get the download link. <br/>ERR_MSG: ";
	$lang['425'] = "<b>ERROR:</b> ";
	$lang['426'] = "";
	$lang['427'] = "";
	$lang['428'] = "";
	$lang['429'] = "";
	$lang['430'] = "";
?>