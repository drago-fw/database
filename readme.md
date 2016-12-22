## Drago Database

Connect to database with dibi.

## Settings database server

```yaml
extensions:

	# Connect to database with dibi.
	dibi: Dibi\Bridges\Nette\DibiExtension22

# Credentials to the database
dibi:
	host:
	driver:
	username:
	password:
	database:
	lazy: TRUE
	#substitutes:
		#prefix:
```

## Instruction

For models use extends to the class and queries do so:

```php
$this->db->query(...)
```

## Documentation
- [Dibi - smart database layer](http://dibiphp.com/)
