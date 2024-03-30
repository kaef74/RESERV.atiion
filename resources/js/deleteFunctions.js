import axios from "axios";

// Импорт axios уже выполнен в вашем файле

document.addEventListener('DOMContentLoaded', function () {
    const deleteCategoryButtons = document.querySelectorAll('.delete-category');
    const deleteSubcategoryButtons = document.querySelectorAll('.delete-subcategory');
    const deleteRoleButtons = document.querySelectorAll('.delete-role');
    const deleteUserButtons = document.querySelectorAll('.delete-user');
    const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    const confirmDeleteButton = document.getElementById('confirmDelete');
    let urlToDelete = ''; // URL для удаления

    // Функция для открытия модального окна с правильным URL
    function setupDelete(url) {
        urlToDelete = url;
        confirmationModal.show();
    }

    // Установка обработчиков для кнопок удаления категорий
    deleteCategoryButtons.forEach(button => {
        button.addEventListener('click', function () {
            const categoryId = this.getAttribute('data-id');
            setupDelete('/category/' + categoryId);
        });
    });

    // Установка обработчиков для кнопок удаления подкатегорий
    deleteSubcategoryButtons.forEach(button => {
        button.addEventListener('click', function () {
            const subcategoryId = this.getAttribute('data-id');
            setupDelete('/subcategory/' + subcategoryId);
        });
    });

    // Установка обработчиков для кнопок удаления категорий
    deleteRoleButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            setupDelete('/roles/' + id);
        });
    });

    // Установка обработчиков для кнопок удаления подкатегорий
    deleteUserButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            setupDelete('/users/' + id);
        });
    });

    // Удаление элемента после подтверждения в модальном окне
    confirmDeleteButton.addEventListener('click', function () {
        axios.delete(urlToDelete)
            .then(response => {
                console.log(response.data.message);
                window.location.reload();
            })
            .catch(error => {
                console.error('Ошибка:', error);
                window.location.reload();
            });
    });
});
