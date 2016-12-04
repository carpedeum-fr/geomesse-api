install:
	docker-compose --file docker-compose.dev.yml run --rm api npm install --quiet
