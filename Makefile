NAME = INCEPTION
SRC = docker-compose.yml
All: $(NAME)

$(NAME):
	docker-compose -f $(SRC) up -d

clean:
	docker-compose -f $(SRC) down

fclean: clean
	docker-compose -f $(SRC) rm

re: fclean Al