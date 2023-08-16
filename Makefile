NAME = INCEPTION
SRC = docker-compose.yml
ENV = .env

All: $(NAME)

$(NAME): ENV
	docker-compose -f $(SRC) build --no-cache
	docker-compose -f $(SRC) up

ENV:
	cp $(ENV).example $(ENV)

clean:
	docker-compose -f $(SRC) down

fclean: clean
	docker-compose -f $(SRC) rm

re: fclean All
