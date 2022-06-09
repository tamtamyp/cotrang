<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2/26/2016
 * Time: 8:18 AM
 */

namespace App\Helpers\encrypt;

/**
 * Class AES128
 * @package billing\helpers
 */
class Encryptor
{
    /**
     * Holds the Encryptor instance
     * @var Encryptor
     */
    private static $instance;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $separator;

    /**
     * Encryptor constructor.
     */
    public function __construct()
    {
        $this->method = 'AES-128-CBC';
        $this->key = 'ac5AWK22@LrN9TB2nF8I';
        $this->separator = ':';
    }

    private function __clone()
    {
    }

    /**
     * Returns an instance of the Encryptor class or creates the new instance if the instance is not created yet.
     * @return Encryptor
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Encryptor();
        }
        return self::$instance;
    }

    /**
     * Generates the initialization vector
     * @return string
     */
    private function getIv()
    {
        return openssl_random_pseudo_bytes(openssl_cipher_iv_length($this->method));
    }

    /**
     * @param string $data
     * @return string
     */
    public function encrypt($data)
    {
        $iv = $this->getIv();
        return base64_encode(openssl_encrypt($data, $this->method, $this->key, 0, $iv) . $this->separator . base64_encode($iv));
    }

    public static function encryptTripleDes($plaintext, $secretKey='LVlXSL$qkGeWWCH')
    {
        //Generate a key from a hash
        $key = md5(utf8_encode($secretKey), true);
        //Take first 8 bytes of $key and append them to the end of $key.
        $key .= substr($key, 0, 8);
        $ciphertext = openssl_encrypt($plaintext, 'des-ede3', $key, OPENSSL_RAW_DATA);
        return base64_encode($ciphertext);
    }

    public static function decryptTripleDes($ciphertext64, $secretKey='LVlXSL$qkGeWWCH')
    {
        //Generate a key from a hash
        $key = md5(utf8_encode($secretKey), true);
        //Take first 8 bytes of $key and append them to the end of $key.
        $key .= substr($key, 0, 8);
        $ciphertext = base64_decode($ciphertext64);
        $plaintext = openssl_decrypt($ciphertext, 'des-ede3', $key, OPENSSL_RAW_DATA);
        return $plaintext;
    }

    /**
     * @param string $dataAndVector
     * @return string
     */
    public function decrypt($dataAndVector)
    {
        $parts = explode($this->separator, base64_decode($dataAndVector));
        // $parts[0] = encrypted data
        // $parts[1] = initialization vector
        return openssl_decrypt($parts[0], $this->method, $this->key, 0, base64_decode($parts[1]));
    }

}
