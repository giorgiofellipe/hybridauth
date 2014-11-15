<?php
/**
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

namespace Hybridauth\HttpClient;

/**
 * HybridAuth Http clients interface
 */
interface HttpClientInterface
{
	/**
	* Send request to the remote server
	*
	* Returns the result (Raw response from the server) on success, FALSE on failure
	*
	* @param string $uri
	* @param string $method
	* @param array  $parameters
	* @param array  $headers
	*
	* @return mixed
	*/
	function request( $uri, $method = 'GET', $parameters = array(), $headers = array() );

	/**
	* Returns raw response from the server on success, FALSE on failure
	*
	* @return mixed
	*/
	function getResponseBody();

	/**
	* Retriever the headers returned in the response
	*
	* @return array
	*/
	function getResponseHeader();

	/**
	* Returns latest request HTTP status code
	*
	* @return integer
	*/
	function getResponseHttpCode();

	/**
	* Returns latest error encountered by the client
	* This can be either a code or error message
	*
	* @return mixed
	*/
	function getResponseClientError();
}
