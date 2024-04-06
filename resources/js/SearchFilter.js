class SearchFilter {
    constructor(listSelector, inputSelector, filterFields) {
        this.list = document.querySelectorAll(listSelector);
        this.input = document.querySelector(inputSelector);
        this.filterFields = filterFields;
        this.initEvents();
    }

    // Метод для инициализации событий
    initEvents() {
        this.input.addEventListener('input', () => {
            const query = this.input.value.toLowerCase();
            this.filterRecords(query);
        });
    }

    // Метод для фильтрации записей
    filterRecords(query) {
        this.list.forEach(item => {
            // Флаг, видим ли текущий элемент (изначально нет)
            let isVisible = false;

            // Проходимся по всем полям, по которым нужно искать
            this.filterFields.forEach(field => {
                const value = item.querySelector(field).textContent.toLowerCase();
                if (value.includes(query)) {
                    isVisible = true;
                }
            });

            // Управляем видимостью элемента
            item.style.display = isVisible ? '' : 'none';
        });
    }
}

// Инициализация поиска после загрузки DOM
document.addEventListener('DOMContentLoaded', function() {
    new SearchFilter(
        '.list-group-horizontal', // Селектор списка, по которому идет поиск
        'input[type="search"]', // Селектор поля ввода поиска
        ['.list-group-item.col-4', '.list-group-item.col-5'] // Селекторы полей внутри каждой записи, по которым идет поиск
    );
});
