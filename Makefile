NAME = INCEPTION
SRC = docker-compose.yml
All: $(NAME)

$(NAME):
	docker-compose -f $(SRC) build --no-cache
	docker-compose -f $(SRC) up

clean:
	docker-compose -f $(SRC) down

fclean: clean
	docker-compose -f $(SRC) rm

re: fclean All
