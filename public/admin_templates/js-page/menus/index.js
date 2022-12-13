function changeIconCaret(type) {
    let id = $('#caret-' + type)
    id.attr('class') == 'fas fa-caret-down' ? id.attr('class', 'fas fa-caret-up') : id.attr('class',
        'fas fa-caret-down')
}

function deleteDataMenuItem(id) {
    Swal.fire({
        title: '',
        text: "Bạn đồng ý xác nhận xóa?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng ý',
        cancelButtonText: 'Hủy'
    }).then((result) => {
        if (result.value) {
            document.getElementById('delete-item-form-' + id).submit();
        }
    })
}

$(document).ready(function() {
    $(".app-container").addClass("closed-sidebar")
})

 //======= SELECTALL ========
 $('.selectall').click(function() {
    $('.selectbox').prop('checked', $(this).prop('checked'));
})
$('.selectbox').change(function() {
    var total = $('.selectbox').length;
    var number = $('.selectbox:checked').length;
    if (total == number) {
        $('.selectall').prop('checked', true);
    } else {
        $('.selectall').prop('checked', false);
    }
});
var group = $("#menuitems").sortable({
    group: 'serialization',
    onDrop: function($item, container, _super) {
        var data = group.sortable("serialize").get();
        var jsonString = JSON.stringify(data, null, ' ');
        $('#serialize_output').text(jsonString);
        _super($item, container);
    },
    isValidTarget: function($item, container) {
        var depth = 1, // Start with a depth of one (the element itself)
            maxDepth = 3,
            children = $item.find('ul').first().find('li');

        // Add the amount of parents to the depth
        depth += container.el.parents('ul').length;

        // Increment the depth for each time a child
        while (children.length) {
            depth++;
            children = children.find('ul').first().find('li');
        }

        return depth <= maxDepth;
    }
});