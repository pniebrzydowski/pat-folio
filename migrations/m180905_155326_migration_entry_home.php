<?php


namespace craft\contentmigrations;

use craft\db\Migration;
//use craft\db\MigrationManager;
//use craft\helpers\MigrationHelper;

use firstborn\migrationmanager\MigrationManager;

/**
 * Generated migration
 */
class m180905_155326_migration_entry_home extends Migration
{
    /**
    Migration manifest:
        ENTRY
        - home
            */

	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"content":{"entries":[{"slug":"home","section":"home","sites":{"default":{"slug":"home","section":"home","enabled":"1","site":"default","enabledForSite":"1","postDate":{"date":"2018-09-02 01:49:00.000000","timezone_type":3,"timezone":"America/Los_Angeles"},"expiryDate":null,"title":"Home","entryType":"home","fields":{"mainContent":"<h1> Expat, Current Pat<br /> Designer turned Dev </h1>","bannerImages":[{"elementType":"craft\\\\elements\\\\Asset","filename":"Detroit-Skyline.jpg","folder":"Images","source":"images"},{"elementType":"craft\\\\elements\\\\Asset","filename":"Linz-AEC.JPG","folder":"Images","source":"images"}],"photo":[{"elementType":"craft\\\\elements\\\\Asset","filename":"Patrick_N-white-bg.jpg","folder":"Images","source":"images"}],"featureBoxes":{"new1":{"type":"feature","enabled":"1","fields":{"featureTitle":"Adaptation","image":[],"text":"<p>My skills are primarily frontend, but I\\u0027m not a specialist. It\\u0027s important to build solutions which work. React or Angular, Wordpress or Craft, SASS or LESS, Java or PHP. In a world which changes as fast as the Web, it\\u0027s about concepts and adapting to the changes.</p>"}},"new2":{"type":"feature","enabled":"1","fields":{"featureTitle":"Big-Picture","image":[],"text":"<p>I started my undergrad in Civil Engineering and ended in Advertising and Telecommunication. Then I made the transition over time from Web Designer to Developer. My experiences have ranged from retail to automotive to government to education, so I understand different environments.</p>"}},"new3":{"type":"feature","enabled":"1","fields":{"featureTitle":"User-Centric","image":[],"text":"<p>With a background in advertising, the importance of user experience is clear. Finding functional solutions isn\\u0027t always sufficient, especially in commercial sectors. Things like accessibility and proper content architecture are just as important clean code.</p>"}},"new4":{"type":"feature","enabled":"1","fields":{"featureTitle":"Communication","image":[],"text":"<p>Some developers prefer to just sit and code, but that\\u0027s not me. I\\u0027m an incredibly social person and love interaction. Being a campus tour guide, working in the International Office, and teaching a Master\\u0027s course on frontend dev has given me experience in how to better interact, explain, and communicate.</p>"}}},"projects":[{"elementType":"craft\\\\elements\\\\Entry","slug":"pulpmedia-website","section":"projectEntries"},{"elementType":"craft\\\\elements\\\\Entry","slug":"pulpmedia-landing-pages","section":"projectEntries"}],"projectText":"<p>The projects displayed here are just a sample of my overall work. Follow the link to take a more in-depth look.</p>"}}}}]}}';

        return MigrationManager::getInstance()->migrations->import($json);    }

    public function safeDown()
    {
        echo "m180905_155326_migration_entry_home cannot be reverted.\n";
        return false;
    }
}
