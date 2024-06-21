$('#button-maintainer').on('change', function () {
    $.confirm({
        title: '',
        content: 'Xác nhận chuyển sang chế độ bảo trì ?',
        buttons: {
            confirm: function () {
                let url = 'change-maintenance';
                window.location.href = url;
            },
            cancel: function () {

            },
        }
    });
});

