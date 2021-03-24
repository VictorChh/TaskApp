<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task App</title>
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Task App</a>
        
        <ul class="navbar-nav text-uppercase ml-auto">
            <form class="form-inline my-2 my-lg-0">
                <input type="search" id="search" class="form-control mr-sm-2" placeholder="Search task">
                <button class="btn btn-success my-2 my-sm-0" type="submit"> Search</button>
            </form>
        </ul>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form id="task-form">
                            <div class="form-group">
                                <input type="hidden" id="taskid">
                                <input type="text" id="name" placeholder="Task Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="description" id="description" class="col-md-12" rows="10" placeholder="Task Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-block">
                                Save Task
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="bg-dark text-light">
                            <td>ID</td>
                            <td>Task Name</td>
                            <td>Task Description</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody id="task-list">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>
