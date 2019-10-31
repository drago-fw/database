<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Database;

use Dibi\Connection;
use Dibi\Fluent;
use stdClass;


/**
 * Repository base.
 * @property-read  Connection|stdClass  $db
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
	 * Find a record by parameter.
	 * @param  int|string  $args
	 * @return \Dibi\Result|int|null
	 * @throws \Dibi\Exception
	 */
	public function discover(string $column, $args)
	{
		return $this->all()
			->where("{$column} = ?", $args)
			->execute();
	}


	/**
	 * Find record by id. (Can only be used when a variable primaryId is set.)
	 * @return \Dibi\Result|int|null
	 * @throws \Dibi\Exception
	 */
	public function discoverId(int $id)
	{
		return $this->discover($this->primaryId, $id);
	}


	/**
	 * Deleting an records by the primary key.
	 * @return \Dibi\Result|int|null
	 * @throws \Dibi\Exception
	 */
	public function eraseId(int $id)
	{
		return $this->db
			->delete($this->table)
			->where("{$this->primaryId} = ?", $id)
			->execute();
	}


	/**
	 * Saving an records by entity.
	 * @return \Dibi\Result|int|null
	 * @throws \Dibi\Exception
	 */
	public function put(Entity $entity, int $id = null)
	{
		$query = $id === null
			? $this->db->insert($this->table, $entity->getModify())
			: $this->db->update($this->table, $entity->getModify())->where("{$this->primaryId} = ?", $id);
		return $query->execute();
	}


	/**
	 * Get the id of the inserted record.
	 * @throws \Dibi\Exception
	 */
	public function getInsertedId(string $sequence = null): int
	{
		return $this->db->getInsertId($sequence);
	}
}
