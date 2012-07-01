<?php
/**
 * 電子書籍『はじめてのフレームワークとしてのFuelPHP』の一部です。
 *
 * @version    1.0
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2012 Kenji Suzuki
 * @link       https://github.com/kenjis/fuelphp1st
 */


class Asset_Instance extends Fuel\Core\Asset_Instance {}
class Cache_Handler_Json extends Fuel\Core\Cache_Handler_Json {}
class Cache_Handler_Serialized extends Fuel\Core\Cache_Handler_Serialized {}
class Cache_Handler_String extends Fuel\Core\Cache_Handler_String {}
class Cache_Storage_Apc extends Fuel\Core\Cache_Storage_Apc {}
abstract class Cache_Storage_Driver extends Fuel\Core\Cache_Storage_Driver {}
class Cache_Storage_File extends Fuel\Core\Cache_Storage_File {}
class Cache_Storage_Memcached extends Fuel\Core\Cache_Storage_Memcached {}
class Cache_Storage_Redis extends Fuel\Core\Cache_Storage_Redis {}
class CacheNotFoundException extends Fuel\Core\CacheNotFoundException {}
abstract class Config_File extends Fuel\Core\Config_File {}
class Config_Ini extends Fuel\Core\Config_Ini {}
class Config_Json extends Fuel\Core\Config_Json {}
class Config_Php extends Fuel\Core\Config_Php {}
class Config_Yml extends Fuel\Core\Config_Yml {}
abstract class Controller_Hybrid extends Fuel\Core\Controller_Hybrid {}
abstract class Controller_Rest extends Fuel\Core\Controller_Rest {}
abstract class Controller_Template extends Fuel\Core\Controller_Template {}
class Database_MySQL_Connection extends Fuel\Core\Database_MySQL_Connection {}
class Database_MySQL_Result extends Fuel\Core\Database_MySQL_Result {}
class Database_MySQLi_Connection extends Fuel\Core\Database_MySQLi_Connection {}
class Database_MySQLi_Result extends Fuel\Core\Database_MySQLi_Result {}
class Database_PDO_Connection extends Fuel\Core\Database_PDO_Connection {}
class Database_Query_Builder_Delete extends Fuel\Core\Database_Query_Builder_Delete {}
class Database_Query_Builder_Insert extends Fuel\Core\Database_Query_Builder_Insert {}
class Database_Query_Builder_Join extends Fuel\Core\Database_Query_Builder_Join {}
class Database_Query_Builder_Select extends Fuel\Core\Database_Query_Builder_Select {}
class Database_Query_Builder_Update extends Fuel\Core\Database_Query_Builder_Update {}
abstract class Database_Query_Builder_Where extends Fuel\Core\Database_Query_Builder_Where {}
abstract class Database_Query_Builder extends Fuel\Core\Database_Query_Builder {}
class Database_Result_Cached extends Fuel\Core\Database_Result_Cached {}
abstract class Database_Connection extends Fuel\Core\Database_Connection {}
class Database_Exception extends Fuel\Core\Database_Exception {}
class Database_Expression extends Fuel\Core\Database_Expression {}
class Database_Query extends Fuel\Core\Database_Query {}
abstract class Database_Result extends Fuel\Core\Database_Result {}
class Database_Transaction extends Fuel\Core\Database_Transaction {}
class Fieldset_Field extends Fuel\Core\Fieldset_Field {}
class File_Handler_Directory extends Fuel\Core\File_Handler_Directory {}
class File_Handler_File extends Fuel\Core\File_Handler_File {}
class File_Area extends Fuel\Core\File_Area {}
class Form_Instance extends Fuel\Core\Form_Instance {}
abstract class Image_Driver extends Fuel\Core\Image_Driver {}
class Image_Gd extends Fuel\Core\Image_Gd {}
class Image_Imagemagick extends Fuel\Core\Image_Imagemagick {}
class Image_Imagick extends Fuel\Core\Image_Imagick {}
abstract class Lang_File extends Fuel\Core\Lang_File {}
class Lang_Ini extends Fuel\Core\Lang_Ini {}
class Lang_Json extends Fuel\Core\Lang_Json {}
class Lang_Php extends Fuel\Core\Lang_Php {}
class Lang_Yml extends Fuel\Core\Lang_Yml {}
class Model_Crud extends Fuel\Core\Model_Crud {}
class Mongo_DbException extends Fuel\Core\Mongo_DbException {}
class Mongo_Db extends Fuel\Core\Mongo_Db {}
class Request_Curl extends Fuel\Core\Request_Curl {}
class RequestException extends Fuel\Core\RequestException {}
class RequestStatusException extends Fuel\Core\RequestStatusException {}
abstract class Request_Driver extends Fuel\Core\Request_Driver {}
class Request_Soap extends Fuel\Core\Request_Soap {}
class Session_Cookie extends Fuel\Core\Session_Cookie {}
class Session_Db extends Fuel\Core\Session_Db {}
abstract class Session_Driver extends Fuel\Core\Session_Driver {}
class Session_Exception extends Fuel\Core\Session_Exception {}
class Session_File extends Fuel\Core\Session_File {}
class Session_Memcached extends Fuel\Core\Session_Memcached {}
class Session_Redis extends Fuel\Core\Session_Redis {}
class Validation_Error extends Fuel\Core\Validation_Error {}
class Agent extends Fuel\Core\Agent {}
class Arr extends Fuel\Core\Arr {}
class Asset extends Fuel\Core\Asset {}
class Autoloader extends Fuel\Core\Autoloader {}
class CacheExpiredException extends Fuel\Core\CacheExpiredException {}
class Cache extends Fuel\Core\Cache {}
class Cli extends Fuel\Core\Cli {}
class ConfigException extends Fuel\Core\ConfigException {}
class Config extends Fuel\Core\Config {}
abstract class Controller extends Fuel\Core\Controller {}
class Cookie extends Fuel\Core\Cookie {}
class Crypt extends Fuel\Core\Crypt {}
class Date extends Fuel\Core\Date {}
class DB extends Fuel\Core\DB {}
class DBUtil extends Fuel\Core\DBUtil {}
class Debug extends Fuel\Core\Debug {}
class Error extends Fuel\Core\Error {}
class Event extends Fuel\Core\Event {}
class Fieldset extends Fuel\Core\Fieldset {}
class FileAccessException extends Fuel\Core\FileAccessException {}
class OutsideAreaException extends Fuel\Core\OutsideAreaException {}
class InvalidPathException extends Fuel\Core\InvalidPathException {}
class File extends Fuel\Core\File {}
class Finder extends Fuel\Core\Finder {}
class Form extends Fuel\Core\Form {}
class Format extends Fuel\Core\Format {}
class FtpConnectionException extends Fuel\Core\FtpConnectionException {}
class FtpFileAccessException extends Fuel\Core\FtpFileAccessException {}
class Ftp extends Fuel\Core\Ftp {}
class FuelException extends Fuel\Core\FuelException {}
class Fuel extends Fuel\Core\Fuel {}
class Html extends Fuel\Core\Html {}
abstract class HttpException extends Fuel\Core\HttpException {}
class HttpNotFoundException extends Fuel\Core\HttpNotFoundException {}
class HttpServerErrorException extends Fuel\Core\HttpServerErrorException {}
class Image extends Fuel\Core\Image {}
class Inflector extends Fuel\Core\Inflector {}
class Input extends Fuel\Core\Input {}
class LangException extends Fuel\Core\LangException {}
class Lang extends Fuel\Core\Lang {}
class Log extends Fuel\Core\Log {}
class Markdown extends Fuel\Core\Markdown {}
class Migrate extends Fuel\Core\Migrate {}
class Model extends Fuel\Core\Model {}
class ModuleNotFoundException extends Fuel\Core\ModuleNotFoundException {}
class Module extends Fuel\Core\Module {}
class Num extends Fuel\Core\Num {}
class PackageNotFoundException extends Fuel\Core\PackageNotFoundException {}
class Package extends Fuel\Core\Package {}
class Pagination extends Fuel\Core\Pagination {}
class Profiler extends Fuel\Core\Profiler {}
class RedisException extends Fuel\Core\RedisException {}
class Redis extends Fuel\Core\Redis {}
class Request extends Fuel\Core\Request {}
class Response extends Fuel\Core\Response {}
class Route extends Fuel\Core\Route {}
class Router extends Fuel\Core\Router {}
class Security extends Fuel\Core\Security {}
class Session extends Fuel\Core\Session {}
class Str extends Fuel\Core\Str {}
class TestCase extends Fuel\Core\TestCase {}
class ThemeException extends Fuel\Core\ThemeException {}
class Theme extends Fuel\Core\Theme {}
class Unzip extends Fuel\Core\Unzip {}
class Upload extends Fuel\Core\Upload {}
class Uri extends Fuel\Core\Uri {}
class Validation extends Fuel\Core\Validation {}
class View extends Fuel\Core\View {}
abstract class ViewModel extends Fuel\Core\ViewModel {}
