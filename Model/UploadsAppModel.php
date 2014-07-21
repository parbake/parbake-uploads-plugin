<?php
/**
 * All models in the Uploads plugin SHOULD inheirit from this model
 */
App::uses('AppModel', 'Model');

/**
 * All models in the Uploads plugin SHOULD inheirit from this model
 * @package Uploads
 */
class UploadsAppModel extends AppModel {

    /**
     * Specifies the behaviors invoked by all models
     * @var array 
     */
    public $actsAs = array(
        'Containable'
    );
}