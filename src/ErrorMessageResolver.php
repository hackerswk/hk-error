<?php
/**
 * Error message resolver class
 *
 * @author      Stanley Sie <swookon@gmail.com>
 * @access      public
 * @version     Release: 1.0
 */

namespace Stanleysie\HkError;

/**
 * This class resolves error messages based on keys defined in the data array.
 */
class ErrorMessageResolver
{
    /**
     * Array containing error messages.
     *
     * @var array
     */
    private $errorMessages;

    /**
     * Constructor.
     *
     * @param array $errorMessages An associative array of error messages with keys as error codes.
     */
    public function __construct(array $errorMessages = [])
    {
        if (!empty($errorMessages)) {
            $this->errorMessages = $errorMessages;
        } else {
            // Define default error messages
            $this->errorMessages = [
                'ERR_DEFAULT' => 'An error occurred.',
            ];
        }
    }

    /**
     * Get error message for the given key.
     *
     * @param string $key The key to retrieve the error message for.
     *
     * @return string The error message corresponding to the key, or "Unknown error" if key not found.
     */
    public function getErrorMessage($key)
    {
        if (array_key_exists($key, $this->errorMessages)) {
            return $this->errorMessages[$key];
        } else {
            return "Unknown error";
        }
    }
}
