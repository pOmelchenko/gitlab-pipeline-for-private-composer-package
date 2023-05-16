# Test package

![coverage](https://gitlab.com/omelchenko.dev/composer-tests/package/badges/master/coverage.svg)


## Установка

1. Нужно получить `access token`.
    1. переходим по [ссылке](https://gitlab.com/-/profile/personal_access_tokens)
    2. вводим название токена
    3. ставим галку для `api`
2. Настраиваем репозиторий для `composer`
    ```shell
    composer config repositories.gitlab.com \
    composer https://gitlab.com/api/v4/group/7833164/-/packages/composer/
    ```

    где `repositories.gitlab.com` выступает названием репозитория, в котором значением после первой точки будет непосредственно названием. И в url указываем  `id` группы в котором хранятся пакеты требуемые для установки.
3. Добавляем токен из пункта 1 в проект
    ```shell
    composer config gitlab-token.gitlab.com glpat-...
    ```

    где `gitlab-token.gitlab.com` название токена, а `glpat-...` сам токен.

4. После этого в проекте будут следующие изменения:
    1. В файле `composer.json` добавится следующий блок:
        ```json
        {
            "repositories": {
                "gitlab.com": {
                    "type": "composer",
                    "url": "https://gitlab.com/api/v4/group/7833164/-/packages/composer/"
                }
            }
        }
        ```
    2. В корне проекта появится файл `auth.json` со следующим содержимым:
        ```json
        {
            "gitlab-token": {
                "gitlab.com": "glpat-..."
            }
        }
        ```
5. После выполнения этой подготовки можно выполнить привычную команду подключения пакета в проект
    ```shell
    composer req pomelchenko/core
    ```
