bash:
	docker-compose exec app bash
up:
	docker-compose up -d
install:
	docker-compose build
	docker-compose up -d
