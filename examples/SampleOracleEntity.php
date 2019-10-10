<?php

declare(strict_types = 1);

namespace Examples;

use Drago\Database\EntityOracle;


class SampleOracleEntity extends EntityOracle
{
	public const TABLE = 'TABLE';
	public const SAMPLE_ID = 'sample_id';
	public const SAMPLE_STRING = 'sample_string';

	/** @var int */
	public $sample_id;

	/** @var string */
	public $sample_string;


	public function setSampleId(int $var)
	{
		$this['sample_id'] = $var;
	}


	public function getSampleId(): int
	{
		return $this->sample_id;
	}


	public function setSampleString(string $var)
	{
		$this['sample_string'] = $var;
	}


	public function getSampleString(): string
	{
		return $this->sample_string;
	}
}