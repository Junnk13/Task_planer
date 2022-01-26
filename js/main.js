function addTask() {
    let taskValue = $('#input').val();
    if (!taskValue.trim()) {
        alert("Введите что нужно сделать");
        $('#input').val('');
    } else {
        $.ajax({
            method: "POST",
            url: "add.php",
            data: {
                task_name: taskValue
            },
            success: function (data) {
                $('#input').val('');
                alert('Задача добавлена');
            }
        });
    }
}

function logInPls() {
    $('#input').val('');
    alert("Зарегестрируйтесь или войдите на сайт ");
}

let idValue;

function deleteTask(id) {
    idValue = id;
    if (confirm("Удалить задачу ?")) {
        $.ajax({
            method: "POST",
            url: "delete.php",
            data: {
                id: idValue
            },
            success: function (data) {
                $("#tasks").load('../tasks.php #tasks')
            }
        });
    }
}