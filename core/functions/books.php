<?php

function get_all_books($connection) {
    $result = $connection->query("SELECT * FROM libros");

    $books = [];
    while ($book = $result->fetch_object('Book')) {// Book es un objeto libro que devuelve fetch object
    	$books[] = $book;
    }
    $result->free();

    return $books;
}

function get_book_by_id($connection, $id_libro) {
    $id_libro = $connection->real_escape_string($id_libro);
    $resultquery = $connection->query("SELECT * FROM libros WHERE id_libro =$id_libro"); //resultado de la consulta

    $resultBook = null;
    if ($book = $resultquery->fetch_object('Book')) {

        $resultBook = $book;
    }
    $resultquery->free();

    return $resultBook;
}

function insert_book($connection, $book) {
    $autor = $connection->real_escape_string($book->get_autor());
    $titulo = $connection->real_escape_string($book->get_titulo());
    $isbn = $connection->real_escape_string($book->get_isbn());
    $editorial = $connection->real_escape_string($book->get_editorial());
    $idioma = $connection->real_escape_string($book->get_idioma());
    $year = $connection->real_escape_string($book->get_year());
    $cubierta = $connection->real_escape_string($book->get_cubierta());
    $tipo = $connection->real_escape_string($book->get_tipo());
    $paginas = $connection->real_escape_string($book->get_paginas());
    $unidades = $connection->real_escape_string($book->get_unidades());
    
    $connection->query("INSERT INTO libros (autor, titulo, isbn, editorial, idioma, year, cubierta, tipo, paginas, unidades) VALUES autor = $autor, titulo = $titulo, isbn = $isbn, editorial = $editorial, idioma = $idioma, year = $year, cubierta = $cubierta,tipo = $tipo, paginas = $paginas, unidades = $unidades");
}

/*
SIN POO SERÍA ASÍ: 
function delete_book($connection, $id_libro) {
	$id_libro = $connection->real_escape_string($id_libro);
    $connection->query("DELETE FROM libros WHERE id_libro = $id_libro");
}
*/
function delete_book($connection, $book) {
    $id_libro = $connection->real_escape_string($book->get_id_libro());
    $connection->query("DELETE FROM libros WHERE id_libro = $id_libro");
}

function update_book($connection, $book) {
	$id_libro = $connection->real_escape_string($book->get_id_libro());
	$autor = $connection->real_escape_string($book->get_autor());
    $titulo = $connection->real_escape_string($book->get_titulo());
    $isbn = $connection->real_escape_string($book->get_isbn());
    $editorial = $connection->real_escape_string($book->get_editorial());
    $idioma = $connection->real_escape_string($book->get_idioma());
    $year = $connection->real_escape_string($book->get_year());
    $cubierta = $connection->real_escape_string($book->get_cubierta());
    $tipo = $connection->real_escape_string($book->get_tipo());
    $paginas = $connection->real_escape_string($book->get_paginas());
    $unidades = $connection->real_escape_string($book->get_unidades());
    
    $connection->query("UPDATE libros SET autor = '$autor', titulo = '$titulo', isbn = '$isbn', editorial = '$editorial', idioma = '$idioma', year= '$year', cubierta = '$cubierta', tipo= '$tipo', paginas = '$paginas', unidades = '$unidades' WHERE id_libro = $id_libro");
}

?>