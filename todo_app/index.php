<?php
include_once './core/config.php';

include_once './core/connexion.php';

include_once './core/request.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>To Do List</title>
</head>
<body>

    <div class="main">
        <div id="first">

            <div class="main-header">
                <div class="header">

                    <h1>MY TO DO LIST</h1>

                </div>

                <div class="add">

                    <button type="button" name="button" class="addBtn">+</button>
                    <!-- <input type="button" name="" value="" id="addBtn"> -->

                </div>

            </div>

            <div class="main-container">

                <ul class="list" id="todo-list">
                    <li class="list-item">
                        <header class="item-header">
                            <h2 class="item-title">Take a shower</h2>
                            <ul class="menu">
                                <li class="menu-item"><button class="btn" type="button" name="delete">Delete</button></li>
                                <li class="menu-item"><button class="btn" type="button" name="edit">Edit</button></li>
                                <li class="menu-item"><button class="btn" type="button" name="done">Done</button></li>
                            </ul>
                        </header>
                        <div class="item-container">
                            <p>Description...</p>
                        </div>
                        <footer class="item-footer">
                            <span>Started on...</span>
                            <span>End time...</span>
                        </footer>
                    </li>
                </ul>

                <ul class="list" id="todo-list">
                    <li class="list-item">
                        <header class="item-header">
                            <h2 class="item-title">Pack my bag</h2>
                            <ul class="menu">
                                <li class="menu-item"><button class="btn" type="button" name="delete">Delete</button></li>
                                <li class="menu-item"><button class="btn" type="button" name="edit">Edit</button></li>
                                <li class="menu-item"><button class="btn" type="button" name="done">Done</button></li>
                            </ul>
                        </header>
                        <div class="item-container">
                            <p>Description...</p>
                        </div>
                        <footer class="item-footer">
                            <span>Started on...</span>
                            <span>End time...</span>
                        </footer>
                    </li>
                </ul>

                <ul class="list" id="todo-list">
                    <li class="list-item">
                        <header class="item-header">
                            <h2 class="item-title">Have breakfast</h2>
                            <ul class="menu">
                                <li class="menu-item"><button class="btn" type="button" name="delete">Delete</button></li>
                                <li class="menu-item"><button class="btn" type="button" name="edit">Edit</button></li>
                                <li class="menu-item"><button class="btn" type="button" name="done">Done</button></li>
                            </ul>
                        </header>
                        <div class="item-container">
                            <p>Description...</p>
                        </div>
                        <footer class="item-footer">
                            <span>Started on...</span>
                            <span>End time...</span>
                        </footer>
                    </li>
                </ul>


                <div class="unchecked">

                    <ul class="list" id="todo-list">
                        <li class="list-item">
                            <header class="item-header">
                                <h2 class="item-title">Go to bus stop</h2>
                                <ul class="menu">
                                    <li class="menu-item"><button class="btn" type="button" name="delete">Delete</button></li>
                                    <li class="menu-item"><button class="btn" type="button" name="edit">Edit</button></li>
                                    <li class="menu-item"><button class="btn" type="button" name="done">Done</button></li>
                                </ul>
                            </header>
                            <div class="item-container">
                                <p>My bus arrives at 7:30. I'll be at the bus stop at 7:15.</p>
                            </div>
                            <footer class="item-footer">
                                <span>Started on 2/10/2017 - 12:00</span>
                                <span>End time 3/10/2017 - 15:00</span>
                            </footer>
                        </li>
                    </ul>

                    <ul class="list" id="todo-list">
                        <li class="list-item">
                            <header class="item-header">
                                <h2 class="item-title">Be at BeCode at 9:00</h2>
                                <ul class="menu">
                                    <li class="menu-item"><button class="btn" type="button" name="delete">Delete</button></li>
                                    <li class="menu-item"><button class="btn" type="button" name="edit">Edit</button></li>
                                    <li class="menu-item"><button class="btn" type="button" name="done">Done</button></li>
                                </ul>
                            </header>
                            <div class="item-container">
                                <p>Description...</p>
                            </div>
                            <footer class="item-footer">
                                <span>Started on...</span>
                                <span>End time...</span>
                            </footer>
                        </li>
                    </ul>

                    <ul class="list" id="todo-list">
                        <li class="list-item">
                            <header class="item-header">
                                <h2 class="item-title">Start Coding</h2>
                                <ul class="menu">
                                    <li class="menu-item"><button class="btn" type="button" name="delete">Delete</button></li>
                                    <li class="menu-item"><button class="btn" type="button" name="edit">Edit</button></li>
                                    <li class="menu-item"><button class="btn" type="button" name="done">Done</button></li>
                                </ul>
                            </header>
                            <div class="item-container">
                                <p>Description...</p>
                            </div>
                            <footer class="item-footer">
                                <span>Started on...</span>
                                <span>End time...</span>
                            </footer>
                        </li>
                    </ul>

                    <ul class="list" id="todo-list">
                        <li class="list-item">
                            <header class="item-header">
                                <h2 class="item-title">I need a real break</h2>
                                <ul class="menu">
                                    <li class="menu-item"><button class="btn" type="button" name="delete">Delete</button></li>
                                    <li class="menu-item"><button class="btn" type="button" name="edit">Edit</button></li>
                                    <li class="menu-item"><button class="btn" type="button" name="done">Done</button></li>
                                </ul>
                            </header>
                            <div class="item-container">
                                <p>Description...</p>
                            </div>
                            <footer class="item-footer">
                                <span>Started on...</span>
                                <span>End time...</span>
                            </footer>
                        </li>
                    </ul>

                </div>
                <div class="main-footer">
                    <h4>Show:</h4>
                    <ul>
                        <li><button class="btn" type="button" name="button">All Tasks</button></li>
                        <li><button class="btn" type="button" name="button">To Do</button></li>
                        <li><button class="btn" type="button" name="button">Done</button></li>
                    </ul>
                </div>
            </div>
        </div>




        <!-- 2..............................................................................;;; -->
        <div id="second" class="hide">

            <div class="next-container ">
                <div class="next-header">
                    <div class="header">

                        <h1>MY TO DO LIST</h1>

                    </div>

                    <div class="back">

                        <button type="button" name="button" class="addBtn">X</button>

                    </div>

                </div>

                <div class="clear">
                    <button class="btn" type="button" name="button" onclick="#">Clear</button>
                </div>
                <form class="" action="index.html" method="post">
                    <div class="next-title next-element">
                        <h2>TITLE</h2>
                        <input type="text" name="title" value="">
                    </div>
                    <div class="next-description next-element">
                        <h2>DESCRIPTION</h2>
                        <input type="text" name="description" value="" id= "description">
                    </div>
                    <div class="next-start next-element">
                        <h2>START AT</h2>
                        <input type="datetime-local" name="start" value="">
                    </div>
                    <div class="next-end next-element">
                        <h2>END AT</h2>
                        <input type="datetime-local" name="end" value="">
                    </div>
                </form>




            </div>


            <div class="main-footer">

                <div class="next-footer">
                    <ul>
                        <li><button class="btn" type="button" name="button">Add task and create new one</button></li>
                        <li><button class="btn" type="button" name="button">Add task</button></li>
                    </ul>

                </div>
            </div>
        </div>

    </div>







    <script type="text/javascript" src="script.js">
    </script>
</body>
</html>
