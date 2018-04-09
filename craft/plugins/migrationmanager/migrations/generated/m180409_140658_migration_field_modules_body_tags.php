<?php

namespace Craft;

/**
 * Generated migration
 */
class m180409_140658_migration_field_modules_body_tags extends BaseMigration
{
    /**
    Migration manifest:
    
    FIELD
        - modules
        - body
        - tags
        
    */
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"settings":{"dependencies":[],"elements":{"fields":[{"group":"Default","name":"Modules","handle":"modules","instructions":"","translatable":"0","required":false,"type":"Neo","typesettings":{"maxBlocks":null,"blockTypes":{"new1":{"name":"Normal module","handle":"normalModule","maxBlocks":null,"maxChildBlocks":null,"childBlocks":["anotherModule"],"topLevel":"1","sortOrder":"1","fieldLayout":{"Tab 1":[{"group":"Default","name":"Body","handle":"body","instructions":null,"translatable":"1","required":false,"type":"RichText","typesettings":{"configFile":"Standard.json","columnType":"text","availableAssetSources":[]}}]}},"new2":{"name":"Another module","handle":"anotherModule","maxBlocks":null,"maxChildBlocks":null,"childBlocks":"","topLevel":"0","sortOrder":"2","fieldLayout":{"Tab 1":[{"group":"Default","name":"Tags","handle":"tags","instructions":null,"translatable":"0","required":false,"type":"Tags","typesettings":{"source":"default"}}]}}}}}]}}}';
        return craft()->migrationManager_migrations->import($json);    }
}
