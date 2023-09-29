<?php 

namespace View {

    use Entity\Todolist;
    use Service\TodolistService;
    use Helper\InputHelper;
    use Service\TodolistServiceImpl;

    class TodolistView
    {
        private Todolist $todolistService;

        public function __construct(Todolist $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

            }
        }
    }
}