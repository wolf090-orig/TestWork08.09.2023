# Задание №1 - Создание ORM сущности и компонента

## ORM Сущность

- ORM сущность находится в файле `task1/Entity.php`.
- Эта сущность содержит поля: ID, NAME и DATE_INSERT.
- Используется класс DateTime для установки значения по умолчанию для DATE_INSERT.

## Добавление записей

- Записи добавляются с помощью скрипта `task1/add_records.php`.
- Пример создания трех записей и сохранения их в базе данных.

## Создание компонента

- Компонент находится в папке `components/simple_component`.
- В файле `components/simple_component/component.php` содержится основной код компонента.
- Шаблон компонента находится в файле `components/simple_component/template.php`.

## Настройка кеширования

- Кеширование настроено в файле `components/simple_component/component.php`.
- Пример использования StartResultCache и EndResultCache для кеширования компонента.
