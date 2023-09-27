build-and-serve:
	@docker-compose -f docker-compose.dev.yaml up --build

serve:
	@docker-compose -f docker-compose.dev.yaml up

shell:
	@docker-compose -f docker-compose.dev.yaml exec app bash

help:

run:
	@docker-compose -f docker-compose.dev.yaml exec -T app sh -c "/var/www/artisan $(filter-out $@, $(MAKECMDGOALS))"

db_fresh:
	@docker-compose -f docker-compose.dev.yaml exec -T app sh -c "/var/www/artisan migrate:fresh"

rollback:
	@docker-compose -f docker-compose.dev.yaml exec -T app sh -c "/var/www/artisan migrate:rollback --step=$(filter-out $@, $(MAKECMDGOALS))"
