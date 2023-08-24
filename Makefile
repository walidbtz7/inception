PROJECT_ROOT := $HOME
NAME = INCEPTION
SRC = srcs/docker-compose.yml
ENV = srcs/.env

.PHONY: All volumes $(NAME) ENV clean down fclean re

All: $(NAME)

volumes: 
	@[ -d "${PROJECT_ROOT}/data/mariadb" ] || mkdir -p ${PROJECT_ROOT}/data/mariadb
	@[ -d "${PROJECT_ROOT}/data/wordpress" ] || mkdir -p ${PROJECT_ROOT}/data/wordpress

$(NAME): ENV volumes
	docker-compose -f $(SRC) build
	docker-compose -f $(SRC) up

ENV:
	cp $(ENV).example $(ENV)

clean:
	docker-compose -f $(SRC) down -v --rmi all

down:
	docker-compose -f $(SRC) down

fclean: clean
	rm -rf ${PROJECT_ROOT}/data/mariadb/*
	rm -rf ${PROJECT_ROOT}/data/wordpress/*
	docker-compose -f $(SRC) rm

re: fclean All
