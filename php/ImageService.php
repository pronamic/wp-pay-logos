<?php
/**
 * Image service
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2024 Pronamic
 * @license   GPL-2.0-or-later
 * @package   Pronamic\IDealIssuers
 */

namespace Pronamic\WpPayLogos;

/**
 * Image service class
 */
final class ImageService {
	/**
	 * Directory.
	 * 
	 * @var string
	 */
	private $directory;

	/**
	 * Construct image service.
	 */
	public function __construct() {
		$this->directory = \realpath( __DIR__ . '/../dist/' );
	}

	/**
	 * Get path.
	 * 
	 * @param string $path Path.
	 * @return string
	 */
	public function get_path( string $path ): string {
		return $this->directory . DIRECTORY_SEPARATOR . $path;
	}
}
