<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Database;

use Dibi\Connection;
use Dibi\Exception;
use Dibi\Fluent;
use Dibi\Result;
use stdClass;


/**
 * Repository base.
 * @property-read  Connection  $db
 * @property  string  $table
 * @property  string  $primary
 */
trait Repository
{
	/**
	 * Get all records.
	 */
	public function all(): Fluent
	{
		return $this->db
			->select('*')
			->from($this->table);
	}


	/**
	 * Find record by id.
	 * @return Fluent
	 * @throws Exception
	 */
	public function get(int $id)
	{
		return $this->all()
			->where("{$this->primary} = ?", $id);
	}


	/**
	 * Deleting an records by the primary key.
	 * @return Result|int|null
	 * @throws Exception
	 */
	public function delete(int $id)
	{
		return $this->db
			->delete($this->table)
			->where("{$this->columnId} = ?", $id)
			->execute();
	}


	/**
	 * Saving an records.
	 * @return Result|int|null
	 * @throws Exception
	 */
	public function save(array $data)
	{
		$id = $data[$this->primary] ?? null;
		$result = $id > 0
			? $this->db->update($this->table, $data)->where("{$this->primary} = ?", $id)
			: $this->db->insert($this->table, $data);
		return $result->execute();
	}


	/**
	 * Get the id of the inserted record.
	 * @throws Exception
	 */
	public function getInsertId(string $sequence = null): int
	{
		return $this->db->getInsertId($sequence);
	}
}
