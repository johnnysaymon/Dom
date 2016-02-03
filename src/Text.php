<?php
namespace phpgt\dom;

/**
 * Represents the textual content of Element or Attr.  If an element has no
 * markup within its content, it has a single child implementing Text that
 * contains the element's text.  However, if the element contains markup, it is
 * parsed into information items and Text nodes that form its children.
 *
 * New documents have a single Text node for each block of text. Over time,
 * more Text nodes may be created as the document's content changes.
 *
 * The Node.normalize() method merges adjacent Text objects back into a single
 * node for each block of text.
 */
class Text extends \DOMText {

/**
 * Replaces the text of the node and all of its logically adjacent text nodes
 * with the specified text. The replaced nodes are removed, including the
 * current node, unless it was the recipient of the replacement text.
 *
 * @param string $content Text to replace current Text Node with
 * @return Text|null The text node which received the replacement text, or
 * null if the replacement text is an empty string
 */
public function replaceWholeText(string $content) {
	// TODO.
}

/**
 * Breaks the Textnode into two nodes at the specified offset, keeping both
 * nodes in the tree as siblings.
 *
 * After the split, the current node contains all the content up to the
 * specified offset point, and a newly created node of the same type contains
 * the remaining text. The newly created node is returned to the caller. If the
 * original node had a parent, the new node is inserted as the next sibling of
 * the original node. If the offset is equal to the length of the original
 * node, the newly created node has no data.
 *
 * Separated text nodes can be concatenated using the Node.normalize() method.
 *
 * @param int $offset Character offset to split at
 * @return Text The newly created Text Node, representing the second part of
 * the split
 */
public function splitText(int $offset):Text {
	// TODO.
}

}#