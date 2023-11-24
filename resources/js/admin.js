$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('.sidebar').toggleClass('w-40 sm:w-48');
        $('#content').toggleClass('ml-40 sm:ml-48');
    });

    // Ativa/desativa submenus ao clicar no item de menu principal
    $('.group').on('click', function () {
        $(this).find('ul').toggleClass('hidden');
    });
});