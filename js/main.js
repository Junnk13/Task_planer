function addTask() {
    var taskValue = $('#input').val();
    //console.log(taskValue);
    if (taskValue === '') {
        alert("Введите что нужно сделать")
    } else {
        $.ajax({
            method: "POST",
            url: "add.php",
            data: {
                task_name: taskValue
            },
            success: function (data) {
                setTimeout(function () {
                    $('#input').val('');
                }, 300)
                alert('Задача добавлена');
            }
        });
    }
}

function logInPls() {
    setTimeout(function () {
        $('#input').val('');
    }, 300);
    alert("Зарегестрируйтесь или войдите на сайт ");
}