<?php


namespace craft\contentmigrations;

use craft\db\Migration;
//use craft\db\MigrationManager;
//use craft\helpers\MigrationHelper;

use firstborn\migrationmanager\MigrationManager;

/**
 * Generated migration
 */
class m180904_141801_migration_entry_home extends Migration
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
	    $json = '{"content":{"entries":[{"slug":"home","section":"home","sites":{"default":{"slug":"home","section":"home","enabled":"1","site":"default","enabledForSite":"1","postDate":{"date":"2018-09-02 01:49:00.000000","timezone_type":3,"timezone":"America/Los_Angeles"},"expiryDate":null,"title":"Home","entryType":"home","fields":{"mainContent":"<h1>Expat. Current Pat.<br />Designer turned Dev.</h1>","bannerImages":[{"elementType":"craft\\\\elements\\\\Asset","filename":"Detroit-Skyline.jpg","folder":"Images","source":"images"},{"elementType":"craft\\\\elements\\\\Asset","filename":"Linz-AEC.JPG","folder":"Images","source":"images"}],"photo":[{"elementType":"craft\\\\elements\\\\Asset","filename":"Patrick_N-white-bg.jpg","folder":"Images","source":"images"}],"featureBoxes":{"new1":{"type":"feature","enabled":"1","fields":{"featureTitle":"Versatile","image":[],"text":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed est tellus. Morbi dolor nibh, pellentesque luctus felis quis, vehicula bibendum tortor. Sed at velit efficitur, tempor lacus nec, euismod sapien.</p>"}},"new2":{"type":"feature","enabled":"1","fields":{"featureTitle":"Knowledgeable","image":[],"text":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed est tellus. Morbi dolor nibh, pellentesque luctus felis quis, vehicula bibendum tortor. Sed at velit efficitur, tempor lacus nec, euismod sapien.</p>"}},"new3":{"type":"feature","enabled":"1","fields":{"featureTitle":"User-Centric","image":[],"text":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed est tellus. Morbi dolor nibh, pellentesque luctus felis quis, vehicula bibendum tortor. Sed at velit efficitur, tempor lacus nec, euismod sapien.</p>"}},"new4":{"type":"feature","enabled":"1","fields":{"featureTitle":"Communicative","image":[],"text":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed est tellus. Morbi dolor nibh, pellentesque luctus felis quis, vehicula bibendum tortor. Sed at velit efficitur, tempor lacus nec, euismod sapien.</p>"}}},"projects":[{"elementType":"craft\\\\elements\\\\Entry","slug":"pulpmedia-website","section":"projects"},{"elementType":"craft\\\\elements\\\\Entry","slug":"pulpmedia-landing-pages","section":"projects"}],"projectText":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed est tellus. Morbi dolor nibh, pellentesque luctus felis quis, vehicula bibendum tortor. Sed at velit efficitur, tempor lacus nec, euismod sapien.</p>"}}}}]}}';

        return MigrationManager::getInstance()->migrations->import($json);    }

    public function safeDown()
    {
        echo "m180904_141801_migration_entry_home cannot be reverted.\n";
        return false;
    }
}
