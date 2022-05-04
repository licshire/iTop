<?php

namespace Combodo\iTop\Test\UnitTest\Core;


use CMDBObject;
use Combodo\iTop\Test\UnitTest\ItopDataTestCase;
use MetaModel;

/**
 * @since 2.7.7 3.0.2 3.1.0 N°3717 tests history objects creation
 *
 * @package Combodo\iTop\Test\UnitTest\Core
 */


/**
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 * @backupGlobals disabled
 */
class CMDBObjectTest extends ItopDataTestCase
{
	private $sAdminLogin;
	private $sImpersonatedLogin;

	/**
	 * @throws Exception
	 */
	protected function setUp(): void
	{
		parent::setUp();
	}

	/**
	 * @covers CMDBObject::SetCurrentChange
	 */
	public function testCurrentChange()
	{
		// save initial conditions
		$oInitialCurrentChange = CMDBObject::GetCurrentChange();
		$sInitialTrackInfo = CMDBObject::GetTrackInfo();
		// reset current change
		CMDBObject::SetCurrentChange(null);

		//-- new object with only track info
		$sTrackInfo = 'PHPUnit test';
		CMDBObject::SetTrackInfo($sTrackInfo);
		/** @var \DocumentWeb $oTestObject */
		$oTestObject = MetaModel::NewObject('DocumentWeb');
		$oTestObject->Set('name', 'PHPUnit test');
		$oTestObject->Set('org_id', 1);
		$oTestObject->Set('url', 'https://www.combodo.com');
		$oTestObject->DBWrite();
		self::assertFalse(CMDBObject::GetCurrentChange()->IsNew(), 'TrackInfo : Current change persisted');
		self::assertEquals($sTrackInfo, CMDBObject::GetCurrentChange()->Get('userinfo'),
			'TrackInfo : current change created with expected trackinfo');

		//-- new object with non persisted current change
		$sTrackInfo2 = $sTrackInfo.'_2';
		/** @var \CMDBChange $oCustomChange */
		$oCustomChange = MetaModel::NewObject('CMDBChange');
		$oCustomChange->Set('date', time());
		$oCustomChange->Set('userinfo', $sTrackInfo2);
		CMDBObject::SetCurrentChange($oCustomChange);
		$oTestObject->Set('url', 'https://fr.wikipedia.org');
		$oTestObject->DBUpdate();
		self::assertFalse(CMDBObject::GetCurrentChange()->IsNew(), 'SetCurrentChange : Current change persisted');
		self::assertEquals($sTrackInfo2, CMDBObject::GetCurrentChange()->Get('userinfo'),
			'SetCurrentChange : current change created with expected trackinfo');

		//-- new object with current change init using helper method
		$sTrackInfo3 = $sTrackInfo.'_3';
		CMDBObject::SetCurrentChangeFromParams($sTrackInfo3);
		$oTestObject->Set('url', 'https://en.wikipedia.org');
		$oTestObject->DBUpdate();
		self::assertFalse(CMDBObject::GetCurrentChange()->IsNew(), 'SetCurrentChangeFromParams : Current change persisted');
		self::assertEquals($sTrackInfo3, CMDBObject::GetCurrentChange()->Get('userinfo'),
			'SetCurrentChangeFromParams : current change created with expected trackinfo');

		// restore initial conditions
		$oTestObject->DBDelete();
		CMDBObject::SetCurrentChange($oInitialCurrentChange);
		CMDBObject::SetTrackInfo($sInitialTrackInfo);
	}

	/**
	 * @covers CMDBObject::SetCurrentChange
	 *
	 * @since 3.0.1 N°5135 - Impersonate: history of changes versus log entries
	 */
	public function testCurrentChangeUnderImpersonation() {
		$this->CreateTestOrganization();

		$sUid = date('dmYHis');
		$sAdminLogin = "admin-user-".$sUid;
		$sImpersonatedLogin = "impersonated-user-".$sUid;

		$this->CreateUserForImpersonation($sAdminLogin, 'Administrator', 'AdminName', 'AdminSurName');
		$this->CreateUserForImpersonation($sImpersonatedLogin, 'Configuration Manager', 'ImpersonatedName', 'ImpersonatedSurName');

		$_SESSION = [];
		\UserRights::Login($sAdminLogin);

		// save initial conditions
		$oInitialCurrentChange = CMDBObject::GetCurrentChange();
		$sInitialTrackInfo = CMDBObject::GetTrackInfo();

		// reset current change
		CMDBObject::SetCurrentChange(null);

		$this->CreateSimpleObject();
		self::assertEquals("AdminSurName AdminName", CMDBObject::GetCurrentChange()->Get('userinfo'),
			'TrackInfo : no impersonation');

		\UserRights::Impersonate($sImpersonatedLogin);
		$this->CreateSimpleObject();
		self::assertEquals("AdminSurName AdminName on behalf of ImpersonatedSurName ImpersonatedName", CMDBObject::GetCurrentChange()->Get('userinfo'),
			'TrackInfo : impersonation');

		\UserRights::Deimpersonate();
		$this->CreateSimpleObject();
		self::assertEquals("AdminSurName AdminName", CMDBObject::GetCurrentChange()->Get('userinfo'),
			'TrackInfo : no impersonation after deimpersonate');

		// restore initial conditions
		CMDBObject::SetCurrentChange($oInitialCurrentChange);
		CMDBObject::SetTrackInfo($sInitialTrackInfo);
	}

	private function CreateSimpleObject(){
		/** @var \DocumentWeb $oTestObject */
		$oTestObject = MetaModel::NewObject('DocumentWeb');
		$oTestObject->Set('name', 'PHPUnit test');
		$oTestObject->Set('org_id', $this->getTestOrgId() );
		$oTestObject->Set('url', 'https://www.combodo.com');
		$oTestObject->DBWrite();
	}

	private function CreateUserForImpersonation($sLogin, $sProfileName, $sName, $sSurname){
		/** @var \Person $oPerson */
		$oPerson = $this->createObject('Person', array(
			'name' => $sName,
			'first_name' => $sSurname,
			'org_id' => $this->getTestOrgId(),
		));

		$oProfile = \MetaModel::GetObjectFromOQL("SELECT URP_Profiles WHERE name = :name", array('name' => $sProfileName), true);
		$this->CreateUser($sLogin, $oProfile->GetKey(), "1234567Azert@", $oPerson->GetKey());
	}
}
