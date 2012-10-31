<?php

/**
 * Returns error number
 *
 * @phpstub
 *
 * @param resource $id
 *
 * @return int Returns an error code. The error code is either a Z39.50 diagnostic code
 *             (usually a Bib-1 diagnostic) or a client side error code which is
 *             generated by PHP/YAZ itself, such as "Connect failed", "Init Rejected",
 *             etc.
 */
function yaz_errno($id)
{
}