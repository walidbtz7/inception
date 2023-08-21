NAME = INCEPTION
SRC = docker-compose.yml
ENV = .env

All: $(NAME)

$(NAME): ENV
	docker compose -f $(SRC) build --no-cache
	docker compose -f $(SRC) up

ENV:
	cp $(ENV).example $(ENV)

clean:
	docker compose -f $(SRC) down -v --rmi all

down:
	docker compose -f $(SRC) down

fclean: clean
	rm -rf volumes/mariadb/*
	rm -rf volumes/wordpress/*
	docker compose -f $(SRC) rm

re: fclean All
