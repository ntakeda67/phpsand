<!DOCTYPE html>
<html>
<head>
    <title>index</title>
</head>
<body>
<h3>TODO List</h3>
<h2><input id="newTaskName" name="newTaskName" type="text" placeholder="input new task."/><input type="button" value="add" onclick="onAddTask()"/></h2>
<ul id="taskList">
    <li>Do Something</li>
</ul>
</body>
<script type="text/javascript">

    function replaceAllTaskList(tasks){
        const taskListDom = document.getElementById('taskList');
        while (taskListDom.firstChild) {
            taskListDom.removeChild(taskListDom.firstChild);
        }

        tasks.map(elm => {
            let li = document.createElement('li');
            let litext = document.createTextNode(elm);
            li.appendChild(litext);
            return li;
        }).forEach( newNode => taskListDom.appendChild(newNode) );
    }

    function onAddTask(){
        const newTaskName = document.getElementById('newTaskName').value;
        addNewTask(newTaskName);
    }

    function addNewTask(aTask) {
        const req = new XMLHttpRequest();
        req.onreadystatechange = () => {
            if (req.readyState === 4) { // 通信の完了時
                if (req.status === 200) { // 通信の成功時
                    const responseBody = JSON.parse(req.responseText);
                    console.log(responseBody);
                    replaceAllTaskList(responseBody.tasks);
                }
            } else {
                // on progress
                console.log('wip');
            }
        };

        req.open('POST', '/api/book.php', true);
        req.setRequestHeader('content-type',
            'application/x-www-form-urlencoded;charset=UTF-8');
        req.send(JSON.stringify({ 'task' : aTask }));
    }
</script>
</html>
