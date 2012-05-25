<?php

namespace li3_graph\extensions\graph;

class Traverser extends lithium\core\StaticObject {

	public static function bfs($node, $params = array()) {
		$queue = array($node);
        $nodes = array();

        while $queue {
        	$parent = array_pop($queue);
        	$me = $parent;

        	if (!Nodes::first((string) $me->_id)) {
        		continue;
			}
			if (!in_array($me, $nodes)) {
				array_push($nodes, $me);
				// For each $child of me 
					// if $child !== $me
						// add to array $nodes
			}
			if (!$parent) {
				continue;
			}
			// yield (self._mongodao.get_node(parent), self._mongodao.get_node(me)) ??
        }
	}

	public static function dfs($node, $params = array()) {
		/*stack = deque([(None, from_node)])
        nodes = []

        while stack:
            parent, me = stack.pop()

            if not self._mongodao.has_node(me):
                continue

            if not me in nodes:
                nodes.append(me)

                stack.extend([(me, self._mongodao.objectid(child)) for child in
                             self._mongodao.get_node_edges(node_id=me, direction="out")["out"].keys()
                             if child != me])

            if not parent:
                continue

            yield (self._mongodao.get_node(parent), self._mongodao.get_node(me),)

        */
	}

	public static function shortestPath($node, $params = array()) {
		/*
		if not self._mongodao._validate_objectid(id=from_node):
            raise TypeError("Unsupported type: from_node")

        if not self._mongodao._validate_objectid(id=to_node):
            raise TypeError("Unsupported type: to_node")

        #if not self._mongodao.has_node(from_node):
        #    raise AttributeError("Node not found: from_node")

        if not self._mongodao.has_node(to_node):
            raise AttributeError("Node not found: to_node")

        paths = {}

        for parent, me in self.bfs(from_node=from_node):
            prefix = []

            if paths.has_key(str(parent["_id"])):
                prefix = paths[str(parent["_id"])]

            paths[str(me["_id"])] = prefix + [me]

            if me["_id"] == to_node:
                return paths[str(me["_id"])]

        return False
        */
	}
}

?>