build-and-serve:
	@docker-compose -f docker-compose.dev.yaml up --build

serve:
	@docker-compose -f docker-compose.dev.yaml up

shell:
	@docker-compose -f docker-compose.dev.yaml exec app bash

help:
