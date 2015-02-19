<?php


/**
 * @group edd_upgrades
 */
class Tests_Upgrades extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();
		require_once EDD_PLUGIN_DIR . 'includes/admin/upgrades/upgrade-functions.php';
	}

	public function tearDown() {
		parent::tearDown();
	}

	public function test_upgrade_completion() {

		$current_upgrades = edd_get_completed_upgrades();
		$this->assertTrue( empty( $current_upgrades ) );
		$this->assertInternalType( 'array', $current_upgrades );

		$this->assertTrue( edd_upgrade_has_completed( 'test-upgrade-action' ) );
		$this->assertTrue( edd_has_upgrade_completed( 'test-upgrade-action' ) );
		$this->assertFalse( edd_has_upgrade_completed( 'test-upgrade-action-false' ) );

	}

}
