<?php

/**
 * This file is part of the Drago Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Database;

/**
 * Database mapper.
 * @author Zdeněk Papučík
 */
interface IMapper
{
	/**
	 * Return all records.
	 */
	public function all();

	/**
	 * Find records.
	 * @param mixed
	 */
	public function find($args);

	/**
	 * Save records.
	 * @param array
	 */
	public function save(Entity $args);

	/**
	 *  Delete records.
	 * @param mixed
	 */
	public function delete($args);

}