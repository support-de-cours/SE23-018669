<?php 

// Difference entre "bindParam" et "bindValue"

$value = 'foo';
$s = $dbh->prepare('SELECT name FROM bar WHERE baz = :baz');
$s->bindParam(':baz', $value);
// use bindParam to bind the variable
$value = 'foobarbaz';
$s->execute(); 
// executed with WHERE baz = 'foobarbaz'

$value = 'foo';
$s = $dbh->prepare('SELECT name FROM bar WHERE baz = :baz');
$s->bindValue(':baz', $value);
// use bindValue to bind the variable's value
$value = 'foobarbaz';
$s->execute(); 
// executed with WHERE baz = 'foo'