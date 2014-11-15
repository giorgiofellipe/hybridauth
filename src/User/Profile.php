<?php
/**
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html 
*/

namespace Hybridauth\User;

/**
 * User\Profile object represents the current logged in user profile. 
 * The list of fields available in the normalized user profile structure used by HybridAuth.  
 *
 * The User\Profile object is populated with as much information about the user as 
 * HybridAuth was able to pull from the given API or authentication provider.
 * 
 * http://hybridauth.sourceforge.net/userguide/Profile_Data_User_Profile.html
 */
final class Profile
{
	/**
	* The Unique user's ID on the connected provider
	*
	* @var integer
	*/
	public $identifier = null;

	/**
	* User website, blog, web page
	*
	* @var string
	*/
	public $webSiteURL = null;

	/**
	* URL link to profile page on the IDp web site
	*
	* @var string
	*/
	public $profileURL = null;

	/**
	* URL link to user photo or avatar
	*
	* @var string
	*/
	public $photoURL = null;

	/**
	* User displayName provided by the IDp or a concatenation of first and last name.
	*
	* @var string
	*/
	public $displayName = null;

	/**
	* A short about_me
	*
	* @var string
	*/
	public $description = null;

	/**
	* User's first name
	*
	* @var string
	*/
	public $firstName = null;

	/**
	* User's last name
	*
	* @var string
	*/
	public $lastName = null;

	/**
	* male or female
	*
	* @var string
	*/
	public $gender = null;

	/**
	* Language
	*
	* @var string
	*/
	public $language = null;

	/**
	* User age, we don't calculate it. we return it as is if the IDp provide it.
	*
	* @var integer
	*/
	public $age = null;

	/**
	* User birth Day
	*
	* @var integer
	*/
	public $birthDay = null;

	/**
	* User birth Month
	*
	* @var integer
	*/
	public $birthMonth = null;

	/**
	* User birth Year
	*
	* @var integer
	*/
	public $birthYear = null;

	/**
	* User email. Note: not all of IDp grant access to the user email
	*
	* @var string
	*/
	public $email = null;

	/**
	* Verified user email. Note: not all of IDp grant access to verified user email
	*
	* @var string
	*/
	public $emailVerified = null;

	/**
	* Phone number
	*
	* @var string
	*/
	public $phone = null;

	/**
	* Complete user address
	*
	* @var string
	*/
	public $address = null;

	/**
	* User country
	*
	* @var string
	*/
	public $country = null;

	/**
	* Region
	*
	* @var string
	*/
	public $region = null;

	/**
	* City
	*
	* @var string
	*/
	public $city = null;

	/**
	* Postal code
	*
	* @var string
	*/
	public $zip = null;

	/**
	* Prevent the providers adapters from adding new fields. 
	*
	* @var string $name
	* @var mixed  $value
	*
	* @throws Exception
	*/
	public function __set( $name, $value )
	{
		throw new Exception( 'Adding new properties to ' . __CLASS__ . ' is not allowed.' ); 
	}
}
