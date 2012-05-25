<?php

namespace li3_graph\models;

class Nodes extends lithium\data\models {

	protected $_meta = array(
		'source' => 'graph_edges',
		'locked' => true
	);

	protected $_schema = array(
		'_id' => array('type' => 'id'),
		// Document dbref
		'ref' => array('type' => 'object'), 
		// Arbitry metadata
		'meta' => array('array' => true)
	);

	public function connections($node, $options = array()) {

	}

	public function edges($node, $options = array()) {

	}

	public function neighbours($node, $options = array()) {

	}
}

?>