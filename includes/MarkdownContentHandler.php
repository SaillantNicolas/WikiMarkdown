<?php

/**
 * Content handler for the markdown format
 */
class MarkdownContentHandler extends TextContentHandler {

    /**
	 * @param string $modelId
	 * @param string[] $formats
	 */
	public function __construct(
		$modelId = 'markdown', $formats = ['text/markdown']	
	) {
		parent::__construct( $modelId, $formats );
	}

    /**
	 * @return string Class name
	 */
	protected function getContentClass() {
		return MarkdownContent::class;
	}

}