<?php

namespace li3_graph\models;

class Edges extends \lithium\data\Model {

	protected $_meta = array(
		'source' => 'graph_edges',
		'locked' => true
	);

	protected $_schema = array(
		'id',
		'from' => array('type' => 'id'), // preferably dbref?
		'type' => array('type' => 'string', 'null' => false), // arbitrary text
		'to' => array('type' => 'id'), // preferably dbref?
		'weight' => array('type' => 'float'), // float,
		'created' => array('type' => 'timestamp'),
		'meta' => array('array' => true)
	);

}

?>