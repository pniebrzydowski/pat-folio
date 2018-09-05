<?php


namespace craft\contentmigrations;

use craft\db\Migration;
//use craft\db\MigrationManager;
//use craft\helpers\MigrationHelper;

use firstborn\migrationmanager\MigrationManager;

/**
 * Generated migration
 */
class m180905_155404_migration_sections extends Migration
{
    /**
    Migration manifest:
        SECTION
        - about
        - cv
        - home
        - organizations
        - projects
        - projectEntries
            */

	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"settings":{"dependencies":{"sections":[{"name":"About","handle":"about","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"about","enabledByDefault":"1","template":"about/index"}},"entrytypes":[{"sectionHandle":"about","hasTitleField":"0","titleLabel":null,"titleFormat":"{section.name|raw}","name":"About","handle":"about","fieldLayout":[],"requiredFields":[]}]},{"name":"CV","handle":"cv","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"cv","enabledByDefault":"1","template":"cv/index"}},"entrytypes":[{"sectionHandle":"cv","hasTitleField":"0","titleLabel":null,"titleFormat":"{section.name|raw}","name":"CV","handle":"cv","fieldLayout":{"Info":["mainContent","photo"],"Experience":["workExperience","teachingExperience"],"Education":["education"],"Skills":["skills"]},"requiredFields":[]}]},{"name":"Home","handle":"home","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"__home__","enabledByDefault":"1","template":""}},"entrytypes":[{"sectionHandle":"home","hasTitleField":"0","titleLabel":null,"titleFormat":"{section.name|raw}","name":"Home","handle":"home","fieldLayout":{"Content":["mainContent","bannerImages","photo","featureBoxes","projects","projectText"]},"requiredFields":["mainContent"]}]},{"name":"Organizations","handle":"organizations","type":"channel","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"0","uriFormat":null,"enabledByDefault":"1","template":null}},"entrytypes":[{"sectionHandle":"organizations","hasTitleField":"0","titleLabel":null,"titleFormat":"{organizationName} - {location}","name":"Organizations","handle":"organizations","fieldLayout":{"Info":["organizationName","organizationUrl","location"]},"requiredFields":["organizationName","location"]}]},{"name":"Project Page","handle":"projects","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"projects","enabledByDefault":"1","template":"projects/index"}},"entrytypes":[{"sectionHandle":"projects","hasTitleField":"0","titleLabel":null,"titleFormat":"{section.name|raw}","name":"Project Page","handle":"projects","fieldLayout":{"Content":["mainContent"]},"requiredFields":[]}]},{"name":"Projects","handle":"projectEntries","type":"channel","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"projects/{slug}","enabledByDefault":"1","template":"projects/_entry"}},"entrytypes":[{"sectionHandle":"projectEntries","hasTitleField":"1","titleLabel":"Title","name":"Project","handle":"project","fieldLayout":{"Overview":["projectUrls","organization","summary"],"Details":["description","screenshots","technologies"]},"requiredFields":["summary"]}]}]},"elements":{"sections":[{"name":"About","handle":"about","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"about","enabledByDefault":"1","template":"about/index"}},"entrytypes":[{"sectionHandle":"about","hasTitleField":"0","titleLabel":null,"titleFormat":"{section.name|raw}","name":"About","handle":"about","fieldLayout":[],"requiredFields":[]}]},{"name":"CV","handle":"cv","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"cv","enabledByDefault":"1","template":"cv/index"}},"entrytypes":[{"sectionHandle":"cv","hasTitleField":"0","titleLabel":null,"titleFormat":"{section.name|raw}","name":"CV","handle":"cv","fieldLayout":{"Info":["mainContent","photo"],"Experience":["workExperience","teachingExperience"],"Education":["education"],"Skills":["skills"]},"requiredFields":[]}]},{"name":"Home","handle":"home","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"__home__","enabledByDefault":"1","template":""}},"entrytypes":[{"sectionHandle":"home","hasTitleField":"0","titleLabel":null,"titleFormat":"{section.name|raw}","name":"Home","handle":"home","fieldLayout":{"Content":["mainContent","bannerImages","photo","featureBoxes","projects","projectText"]},"requiredFields":["mainContent"]}]},{"name":"Organizations","handle":"organizations","type":"channel","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"0","uriFormat":null,"enabledByDefault":"1","template":null}},"entrytypes":[{"sectionHandle":"organizations","hasTitleField":"0","titleLabel":null,"titleFormat":"{organizationName} - {location}","name":"Organizations","handle":"organizations","fieldLayout":{"Info":["organizationName","organizationUrl","location"]},"requiredFields":["organizationName","location"]}]},{"name":"Project Page","handle":"projects","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"projects","enabledByDefault":"1","template":"projects/index"}},"entrytypes":[{"sectionHandle":"projects","hasTitleField":"0","titleLabel":null,"titleFormat":"{section.name|raw}","name":"Project Page","handle":"projects","fieldLayout":{"Content":["mainContent"]},"requiredFields":[]}]},{"name":"Projects","handle":"projectEntries","type":"channel","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"projects/{slug}","enabledByDefault":"1","template":"projects/_entry"}},"entrytypes":[{"sectionHandle":"projectEntries","hasTitleField":"1","titleLabel":"Title","name":"Project","handle":"project","fieldLayout":{"Overview":["projectUrls","organization","summary"],"Details":["description","screenshots","technologies"]},"requiredFields":["summary"]}]}]}}}';

        return MigrationManager::getInstance()->migrations->import($json);    }

    public function safeDown()
    {
        echo "m180905_155404_migration_sections cannot be reverted.\n";
        return false;
    }
}
