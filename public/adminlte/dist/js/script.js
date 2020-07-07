/* Start: HoaiPX 2020/07/05 */
// Categories
$(document).on('click', '#admin-categories-table .pagination a', function(e) {
    e.preventDefault();
    let index = $(this).attr('href').split('page=')[1];
    let keyWord = $('#txtSearchCategories').val();
    getCategories(index, keyWord);
});

$(document).on('keyup', '#txtSearchCategories', function(e) {
    let keyWord = $('#txtSearchCategories').val();
    getCategories(1, keyWord);
});

function getCategories(index, keyWord) {
    $.ajax({
        url: 'categories/ajax/ajaxIndex?page=' + index + '&query=' + keyWord,
        success: function (response) {
            $('#admin-categories-table').html('');
            $('#admin-categories-table').html(response);
        }
    });
}

// Menus
$(document).on('click', '#admin-menus-table .pagination a', function(e) {
    e.preventDefault();
    let index = $(this).attr('href').split('page=')[1];
    let keyWord = $('#txtSearchMenus').val();
    getMenus(index, keyWord);
});

$(document).on('keyup', '#txtSearchMenus', function(e) {
    let keyWord = $('#txtSearchMenus').val();
    getMenus(1, keyWord);
});

function getMenus(index, keyWord) {
    $.ajax({
        url: 'menus/ajax/ajaxIndex?page=' + index + '&query=' + keyWord,
        success: function (response) {
            $('#admin-menus-table').html('');
            $('#admin-menus-table').html(response);
        }
    });
}
/* End: HoaiPX 2020/07/05 */
