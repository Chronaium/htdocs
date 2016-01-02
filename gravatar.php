 <?php
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
/**
* Class Gravatar
*
* From Gravatar Help:
* "A gravatar is a dynamic image resource that is requested from our server. The request
* URL is presented here, broken into its segments."
* Source:
* http://site.gravatar.com/site/implement
*
* Usage:
* <code>
* $email = "youremail@yourhost.com";
* $default = "http://www.yourhost.com/default_image.jpg"; // Optional
* $gravatar = new Gravatar($email, $default);
* $gravatar->size = 80;
* $gravatar->rating = "G";
* $gravatar->border = "FF0000";
*
* echo $gravatar; // Or echo $gravatar->toHTML();
* </code>
*
* Class Page: http://www.phpclasses.org/browse/package/4227.html
*
* @author Lucas Araújo <araujo.lucas@gmail.com>
* @version 1.0
* @package Gravatar
*/
class Gravatar
{
    /**
     * Gravatar's url
     */
    const GRAVATAR_URL = "http://www.gravatar.com/avatar.php";

    /**
     * Ratings available
     */
    private $GRAVATAR_RATING = array("G", "PG", "R", "X");
   
    /**
     * Query string. key/value
     */
    protected $properties = array(
        "gravatar_id" => NULL,
        "default" => NULL,
        "size" => 80, // The default value
        "rating" => NULL,
        "border" => NULL,
    );

    /**
     * E-mail. This will be converted to md5($email)
     */
    protected $email = "";

    /**
     * Extra attributes to the IMG tag like ALT, CLASS, STYLE...
     */
    protected $extra = "";

    /**
     *
     */
    public function __construct($email=NULL, $default=NULL) {
        $this->setEmail($email);
        $this->setDefault($default);
    }

    /**
     *
     */
    public function setEmail($email) {
        if ($this->email = $email) {
            $this->properties['gravatar_id'] = md5(strtolower($this->email));
            return true;
        }
        return false;
    }

    /**
     *
     */
    public function setDefault($default) {
        $this->properties['default'] = $default;
    }

    /**
     *
     */
    public function setRating($rating) {
        if (in_array($rating, $this->GRAVATAR_RATING)) {
            $this->properties['rating'] = $rating;
            return true;
        }
        return false;
    }

    /**
     *
     */
    public function setSize($size) {
        $size = (int) $size;
        if ($size <= 0)
            $size = NULL; // Use the default size
        $this->properties['size'] = $size;
    }

    /**
     *
     */
    public function setExtra($extra) {
        $this->extra = $extra;
    }

    /**
     *
     */

    /**
     * Object property overloading
     */
    public function __get($var) { return @$this->properties[$var]; }

    /**
     * Object property overloading
     */
    public function __set($var, $value) {
        switch($var) {
            case "email": return $this->setEmail($value);
            case "rating": return $this->setRating($value);
            case "default": return $this->setDefault($value);
            case "size": return $this->setSize($value);
            // Cannot set gravatar_id
            case "gravatar_id": return;
        }
        return @$this->properties[$var] = $value;
    }

    /**
     * Object property overloading
     */
    public function __isset($var) { return isset($this->properties[$var]); }

    /**
     * Object property overloading
     */
    public function __unset($var) { return @$this->properties[$var] == NULL; }

    /**
     * Get source
     */
    public function getSrc() {
        $url = self::GRAVATAR_URL ."?";
        $first = true;
        foreach($this->properties as $key => $value) {
            if (isset($value)) {
                if (!$first)
                    $url .= "&";
                $url .= $key."=".urlencode($value);
                $first = false;
            }
        }
        return $url;
    }

    /**
     * toHTML
     */
	public function getGravClass(){
		$grav_small = "'grav_small'";
		return $grav_small;
	}
	 
    public function toHTML() {
        return '<img class=' . $this->getGravClass() . ' src="'. $this->getSrc() .'"'
                .(!isset($this->size) ? "" : ' width="'.$this->size.'" height="'.$this->size.'"')
                .$this->extra
                .' />';
    }

    /**
     * toString
     */
    public function __toString() { return $this->toHTML(); }
}
	$account_email = ($_SESSION['email_of_user'])?$_SESSION['email_of_user']:'';
	
	/*public function acountEmail(){ //Not used yet....
		$account_email = ($_SESSION['email_of_user'])?$_SESSION['email_of_user']:'';
		return $account_email;
	}*/
	
 /*
<html>
<head>
</head>
<body> 
$email = $account_email;
$gravatar = new Gravatar($email);
$gravatar->size = 50;
$gravatar->rating = "G";
$gravatar->border = "FF0000";
echo $gravatar;
</body>
</html>">
*/
?>



