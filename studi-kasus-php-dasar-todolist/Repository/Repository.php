<php

namespace Repository{
    use Entity\Todolist;
    interface todolistRepository
{
    function save(TodoList $todolist): void;

    function remove(int $number) : bool;

    function findAll(): array;
}
    class TodolistRepositoryImpl implements TodolistRepository
    {
        public array $todolist= array();(
        private \PDO $connection;
        public function ___construct(\PDO $connection)
        {
            $this->connection = $connection;
        }
        function save (Todolist $todolist): void
    }
    $sql = "INSERT INTO todolist(todo) VALUES (?)";
    $statment = $this->connection->prepare(sql);
    $statment->execute([$todolist->getTodo()]);
}
function remove(int $number): bool
{
    if ($number >sizeof($this->todolist)){
        return false;
    }
    for ($i = $number; $i < sizeof($this->todolist); $i++){
        $this->todolist[$i] = $this->todolist [+1];
    }
    unset ($this->todolist[sizeof($this->todolist)]);
    return true;

    $sql ="SELECT id FROM todolist WHERE id - ?";
    $statment =$this-.connection->prepare($sql);
    $statment->execute([$number]);

    if ($statment->fetch()){
        // todolist ada
        $sql = "DELETE FROM todolist WHERE id=?";
        $statment = $this->connection->prepare($sql);
        $statment->execute([$number]);

        return true;
    }else{
        //todolist tidak ada
        return false;
    }
}
function findAll(): array
{
    $sql= " SELECT id, todo FROM todolist";
    $statment =$this->connection->prepare($sql);
    $statment->execute();

    $result = [];

    foreach ($statment as $row){
        $todolist = new Todolist();
        $todolist->setId($row['id']);
        $todolist->setTodo($row['todo']);

        $result[] = $todolist;
    }
    return $result;
}