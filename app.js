$(document).ready(function() {
    console.log('jquery esta funcionando');
    ShowTasks();

    let edit = false;

    $('#search').keyup(function(e) {
        if($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: 'task_search.php',
                type: 'POST',
                data: {search},
                success: function(response){
                    let tasks = JSON.parse(response);
                    console.log(tasks);
                    let template = '';

                    tasks.forEach( task => {
                        template += `
                        <tr>
                            <td>
                                ${task.ID}
                            </td>
                            <td>
                                ${task.name}
                            </td>
                            <td>
                                ${task.description}
                            </td>
                            <td>
                                <button class="btn btn-secondary btn=sm task-edit"><i class="fas fa-pencil-alt"></i>&nbsp&nbspEdit</button>
                            </td>
                            <td>
                                <button class="btn btn-secondary btn=sm task-delete"><i class="fas fa-trash-alt"></i>&nbsp&nbspDelete</button>
                            </td>
                        </tr>`
                    });

                    $('#task-list').html(template);
                }
            })
        }
        
    });

    $('#task-form').submit(function(e) {
        const postData = {
            ID: $('#taskid').val(),
            name: $('#name').val(),
            description: $('#description').val()
        };

        let url = edit === false ? 'task_insert.php' : 'task_edit.php' ;
        console.log(url);

        $.post(url, postData, function(response){
            console.log(response);
            ShowTasks();
            edit =false;
            $('#task-form').trigger('reset');
        });
        e.preventDefault();
    });

    function ShowTasks (){
        $.ajax({
            url: 'task_list.php',
            type: 'GET',
            success: function(response) {
                let tasks = JSON.parse(response);
                console.log(tasks);
                let template = '';

                tasks.forEach( task => {
                    template += `
                    <tr taskId="${task.ID}">
                        <td>
                            ${task.ID}
                        </td>
                        <td>
                            ${task.name}
                        </td>
                        <td>
                            ${task.description}
                        </td>
                        <td>
                            <button class="btn btn-secondary btn=sm task-edit"><i class="fas fa-pencil-alt"></i>&nbsp&nbspEdit</button>
                        </td>
                        <td>
                            <button class="btn btn-secondary btn=sm task-delete"><i class="fas fa-trash-alt"></i>&nbsp&nbspDelete</button>
                        </td>
                    </tr>`
                });

                $('#task-list').html(template);
            }
        }) 
    }
    
    $(document).on('click', '.task-delete', function() {
        if(confirm("Are you sure you want to delete the task?")){
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('taskId');
            $.post('task_delete.php', {id}, function(response) {
                ShowTasks();
            })
        }
        
    });

    $(document).on('click', '.task-edit', function() {
       
        let element = $(this)[0].parentElement.parentElement;
        let search = $(element).attr('taskId');
        $.post('task_single.php', {search}, function(response) {
            console.log(response)
            const task = JSON.parse(response);
            $('#name').val(task.name);
            $('#description').val(task.description);
            $('#taskid').val(task.ID);
            edit = true;
        })
        
        
    });
});

    
    
