<?php
namespace phpgt\dom;

use DOMXPath;
use Symfony\Component\CssSelector\CssSelectorConverter;

class Element extends \DOMElement {

/**
 * Removes the object from the tree it belongs to.
 * @return void
 */
public function remove() {
	$this->parentNode->removeChild($this);
}

public function querySelector(string $selector):Element {
	$htmlCollection = $this->css($selector);
	return $htmlCollection->item(0);
}

public function querySelectorAll(string $selector):HTMLCollection {
	return $this->css($selector);
}

private function css(string $selector):HTMLCollection {
	$converter = new CssSelectorConverter();
	$xPathSelector = $converter->toXPath($selector);
	return $this->xPath($xPathSelector);
}

private function xPath(string $selector):HTMLCollection {
	$x = new DOMXPath($this->ownerDocument);
	return new HTMLCollection($x->query($selector, $this));
}

}#