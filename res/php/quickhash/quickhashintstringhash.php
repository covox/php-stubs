<?php

/** @phpstub */
class QuickHashIntStringHash
{
    const CHECK_FOR_DUPES = 1;
    const DO_NOT_USE_ZEND_ALLOC = 2;
    const HASHER_JENKINS1 = 512;
    const HASHER_JENKINS2 = 1024;
    const HASHER_NO_HASH = 256;

    /**
     * Creates a new QuickHashIntStringHash object
     *
     * @param int $size
     * @param int $options
     */
    public function __construct($size, $options = 0)
    {
    }

    /**
     * This method adds a new entry to the hash
     *
     * @param int $key
     * @param string $value
     *
     * @return bool true when the entry was added, and false if the entry was not added.
     */
    public function add($key, $value)
    {
    }

    /**
     * This method deletes am entry from the hash
     *
     * @param int $key
     *
     * @return bool true when the entry was deleted, and false if the entry was not deleted.
     */
    public function delete($key)
    {
    }

    /**
     * This method checks whether a key is part of the hash
     *
     * @param int $key
     *
     * @return bool Returns true when the entry was found, or false when the entry is not
     *              found.
     */
    public function exists($key)
    {
    }

    /**
     * This method retrieves a value from the hash by its key
     *
     * @param int $key
     *
     * @return mixed The value if the key exists, or null if the key wasn't part of the hash.
     */
    public function get($key)
    {
    }

    /**
     * Returns the number of elements in the hash
     *
     * @return int The number of elements in the hash.
     */
    public function getSize()
    {
    }

    /**
     * This factory method creates a hash from a file
     *
     * @param string $filename
     * @param int $size
     * @param int $options
     *
     * @return QuickHashIntStringHash Returns a new QuickHashIntStringHash.
     */
    public function loadFromFile($filename, $size = 0, $options = 0)
    {
    }

    /**
     * This factory method creates a hash from a string
     *
     * @param string $contents
     * @param int $size
     * @param int $options
     *
     * @return QuickHashIntStringHash Returns a new QuickHashIntStringHash.
     */
    public function loadFromString($contents, $size = 0, $options = 0)
    {
    }

    /**
     * This method stores an in-memory hash to disk
     *
     * @param string $filename
     *
     * @return void 
     */
    public function saveToFile($filename)
    {
    }

    /**
     * This method returns a serialized version of the hash
     *
     * @return string This method returns a string containing a serialized format of the hash.
     *                Each element is stored as a four byte value in the Endianness that the
     *                current system uses.
     */
    public function saveToString()
    {
    }

    /**
     * This method updates an entry in the hash with a new value, or
      adds a new one if the entry doesn't exist
     *
     * @param int $key
     * @param string $value
     *
     * @return int 2 if the entry was found and updated, 1 if the entry was newly added or 0
     *             if there was an error.
     */
    public function set($key, $value)
    {
    }

    /**
     * This method updates an entry in the hash with a new value
     *
     * @param int $key
     * @param string $value
     *
     * @return bool true when the entry was found and updated, and false if the entry was
     *              not part of the hash already.
     */
    public function update($key, $value)
    {
    }
}