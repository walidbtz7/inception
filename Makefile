NAME = INCEPTION
SRC = srcs/docker-compose.yml
ENV = srcs/.env

.PHONY: All volumes $(NAME) ENV clean down fclean re

All: $(NAME)

volumes: 
	@[ -d "/home/wboutzou/data/mariadb" ] || mkdir -p /home/wboutzou/data/mariadb
	@[ -d "/home/wboutzou/data/wordpress" ] || mkdir -p /home/wboutzou/data/wordpress

$(NAME): ENV volumes
	docker-compose -f $(SRC) up --build -d

ENV:
	cp $(ENV).example $(ENV)

build:
	docker-compose -f $(SRC) build

clean:
	docker-compose -f $(SRC) down -v --rmi all

down:
	docker-compose -f $(SRC) down

fclean: clean
	rm -rf /home/wboutzou/data/mariadb/*
	rm -rf /home/wboutzou/data/wordpress/*
	docker-compose -f $(SRC) rm

re: ENV volumes fclean All
