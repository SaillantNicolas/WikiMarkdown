<?php

use MediaWiki\ResourceLoader\Context;

use MediaWiki\ResourceLoader\Module;
class ResourceLoaderWikiMarkdownVisualEditorModule extends ResourceLoaderFileModule {

	protected $targets = [ 'desktop', 'mobile' ];

	/**
	 * @param ResourceLoaderContext $context
	 * @return string JavaScript code
	 */
	public function getScript( Context $context ) {
		$scripts = parent::getScript( $context );

		return $scripts;
	}

	/**
	 * @return bool
	 */
	public function enableModuleContentVersion() {
		return true;
	}

	/**
	 * @return bool
	 */
	public function supportsURLLoading() {
		return false;
	}
}
