<?php
App::uses('Upload', 'Uploads.Model');

/**
 * Upload Test Case
 *
 */
class UploadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.uploads.upload'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Upload = ClassRegistry::init('Uploads.Upload');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Upload);

		parent::tearDown();
	}
	
/**
 * Passes if the filename is returned with _1 appended to it.
 * @covers Upload::does_file_exist
 * @return void
 */
	public function testDoesFileExistWithExistingFile(){
        $newFileName = $this->Upload->does_file_exist(APP."webroot/img/", "cake.icon.png");        
                
        $this->assertEqual('cake.icon_1.png',$newFileName);
    }
    
/**
 * Passes if the filename is returned with _1 appended to it.
 * @covers Upload::does_file_exist
 * @return void
 */
	public function testDoesFileExistWithoutExistingFile(){
        $newFileName = $this->Upload->does_file_exist(APP."webroot/img/", "someNonExistingFile.png");
                
        $this->assertEqual('someNonExistingFile.png',$newFileName);
    }

}